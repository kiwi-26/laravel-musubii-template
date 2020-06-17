@if ($paginator->hasPages())
    <nav>
        <ul class="box is-flex is-center is-space-right-xs is-margin-right-minus-xs">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
            <li aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="button is-sm is-outline is-disabled" aria-hidden="true">&lsaquo;</span>
            </li>
            @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')" class="button is-sm is-outline is-disabled">&lsaquo;</a>
            </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                <li aria-disabled="true"><span class="button is-sm is-melt is-disabled">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                        <li><span class="button is-sm is-outline is-disabled is-active" aria-current="page">{{ $page }}</span></li>
                        @else
                        <li><a href="{{ $url }}" class="button is-sm is-outline">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')" class="button is-sm is-outline is-disabled">&rsaquo;</a>
            </li>
            @else
            <li aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="button is-sm is-outline is-disabled" aria-hidden="true">&rsaquo;</span>
            </li>
            @endif
        </ul>
    </nav>
@endif
