@props([
    'name',
    'label' => null,
    'required' => false,
])

<div x-data="{ show: false }">
    <x-ui.form.input
        name="{{ $name }}"
        type="password"
        :label="$label"
        :required="$required"

        x-bind:type="show ? 'text' : 'password'"
        autocomplete="current-password"
    >
        <x-slot:suffix>
            <button
                type="button"
                class="inline-flex h-8 w-8 items-center justify-center rounded-md text-gray-600 hover:bg-gray-100 hover:text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500"
                x-on:click="show = !show"
                x-bind:aria-label="show ? 'Ocultar senha' : 'Mostrar senha'"
            >
                {{-- Eye --}}
                <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2"
                     class="h-5 w-5">
                    <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z"/>
                    <circle cx="12" cy="12" r="3"/>
                </svg>

                {{-- Eye Off --}}
                <svg x-show="show" x-cloak xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2"
                     class="h-5 w-5">
                    <path d="M3 3l18 18"/>
                    <path d="M10.58 10.58A3 3 0 0 0 12 15a3 3 0 0 0 2.42-4.42"/>
                    <path d="M9.88 5.09A10.94 10.94 0 0 1 12 5c6.5 0 10 7 10 7a18.3 18.3 0 0 1-4.17 5.27"/>
                    <path d="M6.11 6.11C3.73 8.06 2 12 2 12s3.5 7 10 7c1.03 0 2-.14 2.9-.4"/>
                </svg>
            </button>
        </x-slot:suffix>
    </x-ui.form.input>
</div>
