@if ($paginator->hasPages())
    <nav>
        <ul class="box is-flex is-center is-space-right-xs is-margin-right-minus-xs">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
            <li aria-disabled="true">
                <span class="button is-sm is-outline is-disabled" aria-hidden="true">@lang('pagination.previous')</span>
            </li>
            @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="button is-sm is-outline is-disabled">@lang('pagination.previous')</a>
            </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="button is-sm is-outline is-disabled">@lang('pagination.next')</a>
            </li>
            @else
            <li aria-disabled="true">
                <span class="button is-sm is-outline is-disabled" aria-hidden="true">@lang('pagination.next')</span>
            </li>
            @endif
        </ul>
    </nav>
@endif
