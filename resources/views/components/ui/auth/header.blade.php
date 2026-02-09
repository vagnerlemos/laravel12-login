{{-- resources/views/components/ui/auth/header.blade.php --}}
@props([
    'title',
    'subtitle' => null,
])

<div class="text-center space-y-1">
    <h1 class="text-xl font-semibold text-ui-auth-title">
        {{ $title }}
    </h1>

    @if ($subtitle)
        <p class="text-sm text-ui-auth-subtitle">
            {{ $subtitle }}
        </p>
    @endif
</div>
