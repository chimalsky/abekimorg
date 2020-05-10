@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('body')
    <header class="w-full">
        <a href="/">
            <div class="w-24 h-24 bg-cover bg-right border border-yellow-500"
                style="background-image: url('/assets/img/joelpeven-landscape.jpg')">
            </div>
         </a>
    </header>

    @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
    @endif

    <h1 class="text-3xl mt-0 font-black text-5xl text-orange-500 tracking-tighter no-underline">
        @foreach (explode(' ', $page->title) as $word)
            <span class="@if ($loop->last) text-yellow-500 @endif">
                {{ $word }}
            </span>
        @endforeach
    </h1>

    <p class="text-gray-700 text-xl md:mt-0 text-right">
        {{ $page->author }}  •  {{ date('F j, Y', $page->date) }}
    </p>

    @if ($page->categories)
        @foreach ($page->categories as $i => $category)
            <a
                href="{{ '/blog/categories/' . $category }}"
                title="View posts in {{ $category }}"
                class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
            >{{ $category }}</a>
        @endforeach
    @endif

    <div class="mb-10 pb-4" v-pre>
        @yield('content')
    </div>

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
@endsection
