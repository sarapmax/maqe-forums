@if ($paginator->hasPages())
    <nav>
        <ul class="flex items-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="mx-3 cursor-not-allowed" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">@lang('pagination.previous')</span>
                </li>
            @else
                <li class="mx-3">
                    <a class="hover:text-red-600" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">@lang('pagination.previous')</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="mx-3 cursor-not-allowed" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="rounded-full h-8 w-8 text-white flex items-center justify-center bg-red-600" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li class="mx-3 hover:text-red-600"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="mx-3">
                    <a class="hover:text-red-600" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">@lang('pagination.next')</a>
                </li>
            @else
                <li class="mx-3 cursor-not-allowed" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">@lang('pagination.next')</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
