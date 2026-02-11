{{-- resources/views/components/ui/upload/index.blade.php --}}

@props([
    'name',
    'label' => 'Upload de arquivo',
    'accept' => '*',
    'maxSize' => 5,
    'uploadUrl' => route('upload.store'),
])

<div
    x-data="uiUpload({
        maxSize: {{ $maxSize }},
        accept: '{{ $accept }}',
        uploadUrl: '{{ $uploadUrl }}'
    })"
    class="space-y-3"
    x-on:keydown.escape.prevent="reset()"
    aria-live="polite"
>
    <label class="block text-sm font-medium">
        {{ $label }}
    </label>

    <input
        x-ref="input"
        type="file"
        name="{{ $name }}"
        accept="{{ $accept }}"
        x-on:change="handleFile($event)"
        class="block w-full text-sm border border-ui-nav-border rounded-lg p-2 cursor-pointer"
    />

    {{-- Nome do arquivo selecionado --}}
    <template x-if="fileName">
        <div class="text-xs opacity-80">
            <strong>Arquivo:</strong> <span x-text="fileName"></span>
        </div>
    </template>

    {{-- Preview de imagem --}}
    <template x-if="previewUrl">
        <div>
            <img
                :src="previewUrl"
                class="max-h-40 rounded border border-ui-nav-border"
                alt="Pré-visualização do upload"
            />
        </div>
    </template>

    {{-- Progresso --}}
    <template x-if="state === 'loading'">
        <div class="w-full bg-ui-nav-border rounded h-2 overflow-hidden" aria-hidden="true">
            <div
                class="h-2 bg-ui-primary transition-all duration-300"
                :style="'width: ' + progress + '%'"
            ></div>
        </div>
    </template>

    {{-- Erro inline --}}
    <template x-if="state === 'error'">
        <div class="text-sm text-ui-danger" role="alert">
            <span x-text="errorMessage"></span>
        </div>
    </template>

    {{-- Sucesso inline (opcional, rápido) --}}
    <template x-if="state === 'done'">
        <div class="text-sm opacity-80">
            Upload realizado com sucesso.
        </div>
    </template>

    <div class="flex gap-2">
        <x-ui.button.primary
            type="button"
            x-on:click="upload()"
            x-bind:disabled="state !== 'ready'"
            x-bind:aria-busy="state === 'loading'"
        >
            Enviar
        </x-ui.button.primary>

        <x-ui.button.secondary
            type="button"
            x-on:click="
                reset();
                if ($refs.input) $refs.input.value = null;
            "
            x-show="fileName"
        >
            Limpar
        </x-ui.button.secondary>
    </div>
</div>
