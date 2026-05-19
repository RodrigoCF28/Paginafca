@if ($paginator->hasPages())
<nav class="community-pagination">

    {{-- Anterior --}}
    @if ($paginator->onFirstPage())
        <span class="pag-btn pag-disabled">
            <i class="fas fa-arrow-left"></i>
        </span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="pag-btn">
            <i class="fas fa-arrow-left"></i>
        </a>
    @endif

    {{-- Números --}}
    @foreach ($elements as $element)
        @if (is_string($element))
            <span class="pag-btn pag-disabled">{{ $element }}</span>
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <span class="pag-btn pag-active">{{ $page }}</span>
                @else
                    <a href="{{ $url }}" class="pag-btn">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    {{-- Siguiente --}}
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="pag-btn">
            <i class="fas fa-arrow-right"></i>
        </a>
    @else
        <span class="pag-btn pag-disabled">
            <i class="fas fa-arrow-right"></i>
        </span>
    @endif

</nav>
@endif