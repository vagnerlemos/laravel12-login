<div
    x-data="{
        show: true,
        close() {
            this.show = false
        }
    }"
>

    {{-- Success --}}
    @if (session('success'))
        <div
            x-show="show"
            x-transition
            class="mx-auto mt-4 flex max-w-lg items-start gap-3 rounded-lg border border-emerald-200 bg-emerald-50 px-4 py-3 text-emerald-800"
        >
            <div class="font-bold">✓</div>

            <div class="flex-1">
                {{ session('success') }}
            </div>

            <button @click="close" class="text-emerald-700 hover:opacity-70">
                ✕
            </button>
        </div>
    @endif


    {{-- Error --}}
    @if (session('error'))
        <div
            x-show="show"
            x-transition
            class="mx-auto mt-4 flex max-w-lg items-start gap-3 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-800"
        >
            <div class="font-bold">!</div>

            <div class="flex-1">
                {{ session('error') }}
            </div>

            <button @click="close" class="text-red-700 hover:opacity-70">
                ✕
            </button>
        </div>
    @endif


    {{-- Validation Errors --}}
    @if ($errors->any())
        <div
            x-show="show"
            x-transition
            class="mx-auto mt-4 max-w-lg rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-red-800"
        >
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>

            <button
                @click="close"
                class="mt-2 text-sm text-red-700 hover:opacity-70"
            >
                Fechar
            </button>
        </div>
    @endif


</div>
