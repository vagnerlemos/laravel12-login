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

    <input
        id="{{ $name }}"
        name="{{ $name }}"
        type="{{ $type }}"
        value="{{ old($name, $value) }}"
        {{ $required ? 'required' : '' }}

       {{ $attributes->except(['label'])->merge()->class([
        'rounded-lg border px-3 py-2 text-sm',
        'focus:outline-none focus:ring-2',
        'focus:ring-blue-500 border-gray-300',
        'border-red-500 focus:ring-red-500' => $errors->has($name),
    ]) }}
    />

</x-ui.form.field>
