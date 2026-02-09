@if (isset($breadcrumb) && is_array($breadcrumb))
    <nav
        class="bg-ui-app-bg border-b border-ui-nav-border px-4 py-2"
        aria-label="Breadcrumb"
    >
        <ol class="flex items-center gap-2 text-sm text-ui-nav-text">
            @foreach ($breadcrumb as $index => $item)
                <li class="flex items-center gap-2">
                    @if ($index > 0)
                        <span class="opacity-60">/</span>
                    @endif

                    @if (isset($item['url']))
                        <a
                            href="{{ $item['url'] }}"
                            class="hover:underline text-ui-nav-text"
                        >
                            {{ $item['label'] }}
                        </a>
                    @else
                        <span class="font-medium text-ui-nav-title">
                            {{ $item['label'] }}
                        </span>
                    @endif
                </li>
            @endforeach
        </ol>
    </nav>
@endif
