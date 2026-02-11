<?php

namespace App\Http\Controllers\UI;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class UploadController extends Controller
{
    /**
     * Store uploaded file securely
     */
    public function store(Request $request): JsonResponse
    {
        if (!$request->hasFile('file')) {
            return response()->json([
                'success' => false,
                'message' => 'Nenhum arquivo enviado.',
            ], 422);
        }

        $file = $request->file('file');

        if (!$file || !$file->isValid()) {
            return response()->json([
                'success' => false,
                'message' => 'Arquivo inválido.',
            ], 422);
        }

        /*
        |--------------------------------------------------------------------------
        | Segurança real
        |--------------------------------------------------------------------------
        */

        $allowedMimeTypes = [
            // imagens
            'image/jpeg',
            'image/png',
            'image/webp',
            'image/gif',

            // documentos
            'application/pdf',
            'text/plain',
            'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        ];

        $validator = Validator::make($request->all(), [
            'file' => [
                'required',
                'file',
                'max:5120',
                function ($attribute, $value, $fail) use ($allowedMimeTypes) {
                    $mime = $value->getMimeType();

                    if (!in_array($mime, $allowedMimeTypes, true)) {
                        $fail('Tipo de arquivo não permitido.');
                    }
                },
            ],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
                'errors' => $validator->errors(),
            ], 422);
        }



        /*
        |--------------------------------------------------------------------------
        | Organização por app (sem depender de app('current_app'))
        |--------------------------------------------------------------------------
        */

        $appCode = (string) (
            session('current_app_code')
            ?? $request->segment(1)
            ?? 'default'
        );

        $directory = "uploads/{$appCode}";

        if (!Storage::disk('public')->exists($directory)) {
            Storage::disk('public')->makeDirectory($directory);
        }

        /*
        |--------------------------------------------------------------------------
        | Nome seguro
        |--------------------------------------------------------------------------
        */

        $extension = strtolower((string) $file->getClientOriginalExtension());
        $filename = Str::uuid() . ($extension ? ".{$extension}" : '');

        $path = $file->storeAs($directory, $filename, 'public');

        return response()->json([
            'success' => true,
            'message' => 'Upload realizado com sucesso.',
            'data' => [
                'original_name' => $file->getClientOriginalName(),
                'filename' => $filename,
                'path' => $path,
                'url' => asset('storage/' . $path),
                'size' => $file->getSize(),
                'mime' => $file->getMimeType(),
            ],
        ]);
    }
}
