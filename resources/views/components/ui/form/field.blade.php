@props([
    'label' => null,
    'name' => null,
    'required' => false,
])

<div class="flex flex-col gap-1">

    @if($label)
        <label
            for="{{ $name }}"
            class="text-sm font-medium text-gray-700"
        >
            {{ $label }}
            @if($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
    @endif

    {{ $slot }}

    @error($name)
        <span class="text-sm text-red-600">
            {{ $message }}
        </span>
    @enderror

</div>
