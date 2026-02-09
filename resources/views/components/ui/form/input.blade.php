@props([
    'type' => 'text',
    'name',
    'value' => null,
    'required' => false,
])

<x-ui.form.field
    :label="$attributes->get('label')"
    :name="$name"
    :required="$required"
>
    <div class="relative">
        {{-- Prefix --}}
        @isset($prefix)
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                {{ $prefix }}
            </div>
        @endisset

        <input
            id="{{ $name }}"
            name="{{ $name }}"
            type="{{ $type }}"
            value="{{ old($name, $value) }}"
            {{ $required ? 'required' : '' }}

            {{ $attributes->except(['label'])->merge()->class([
                'w-full rounded-lg border px-3 py-2 text-sm',
                'focus:outline-none focus:ring-2',
                'focus:ring-blue-500 border-gray-300',
                'border-red-500 focus:ring-red-500' => $errors->has($name),

                // Espaço para os enxertos
                'pl-10' => isset($prefix),
                'pr-10' => isset($suffix),
            ]) }}
        />

        {{-- Suffix --}}
        @isset($suffix)
            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                {{ $suffix }}
            </div>
        @endisset
    </div>
</x-ui.form.field>
