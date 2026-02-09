@props([
    'name',
    'options' => [],
    'required' => false,
])

<x-ui.form.field
    :label="$attributes->get('label')"
    :name="$name"
    :required="$required"
>

<select
    id="{{ $name }}"
    name="{{ $name }}"
    {{ $required ? 'required' : '' }}

    {{ $attributes->except(['label'])->merge()->class([
        'rounded-lg border px-3 py-2 text-sm',
        'focus:outline-none focus:ring-2',
        'focus:ring-blue-500 border-gray-300',
        'border-red-500 focus:ring-red-500' => $errors->has($name),
    ]) }}
>

        @foreach($options as $value => $label)
            <option value="{{ $value }}" @selected(old($name) == $value)>
                {{ $label }}
            </option>
        @endforeach
    </select>

</x-ui.form.field>
