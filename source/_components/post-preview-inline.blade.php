<div class="px-2 md:px-0">
    <p class="text-gray-700 font-medium my-2 text-right">
        {{ $post->getDate()->format('F j, Y') }}
    </p>

    <h2 class="text-3xl mt-0">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="font-black text-5xl text-orange-500 tracking-tighter no-underline"
        >
            @foreach (explode(' ', $post->title) as $word)
                <span class="@if ($loop->last) text-yellow-500 @endif">
                    {{ $word }}
                </span>
            @endforeach
        </a>
    </h2>

    <p class="mb-4 mt-0">{!! $post->getExcerpt(200) !!}</p>

</div>
