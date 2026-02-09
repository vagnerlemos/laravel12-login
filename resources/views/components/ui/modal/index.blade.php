@props([
    'id',
])

<x-ui.modal.base :id="$id">

    {{-- Header --}}
    @isset($title)
        <div class="mb-4 text-lg font-semibold text-gray-800">
            {{ $title }}
        </div>
    @endisset

    {{-- Body --}}
    <div class="text-sm text-gray-700">
        {{ $slot }}
    </div>

    {{-- Footer --}}
    @isset($footer)
        <div class="mt-6 flex justify-end gap-3">
            {{ $footer }}
        </div>
    @endisset

</x-ui.modal.base>
