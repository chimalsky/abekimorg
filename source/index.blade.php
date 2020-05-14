@extends('_layouts.master')

@section('body')
    
    <main class="lg:mt-12 max-w-3xl mx-auto">
        <header class="flex flex-wrap justify-end w-auto">
            <img src="assets/img/joelpeven-landscape.jpg" 
                class="w-1/3 md:w-1/4 lg:w-1/5 mr-1 
                border-2 border-dashed border-orange-300" />

            <img src="assets/img/strange-fence.jpg" 
                class="w-1/3 md:w-1/4 lg:w-1/5 ml-1 
                border-4 border-dashed border-yellow-300" />
        </header>

        @forelse ($posts->where('published', true)->take(6) as $post)
            <div class="w-full @if($loop->first) mt-12 @endif mb-16">
                @include('_components.post-preview-inline')
            </div>
        @empty 
            <h1 class="text-3xl mt-0 font-black text-5xl text-orange-500 mt-4
                tracking-tighter no-underline">
                Joel Peven is the <span class="text-yellow-500">Shiz-Niz</span>
            </h1>
            <h1 class="text-3xl mt-0 font-black text-5xl text-orange-500 mt-4
                tracking-tighter no-underline">
                Drew Baker is <span class="font-thin text-red-600 tracking-wider">FIRED!</span>
            </h1>
            <h1 class="text-3xl mt-0 font-black text-5xl text-orange-500 mt-4
                tracking-tighter no-underline">
                <span class="text-yellow-500">dave</span>... was such a Good Guy
            </h1>

            <section class="max-w-md mx-auto mt-64">
                <h2 class="text-gray-400 border-b-4 border-gray-600 pb-2 text-sm mt-24">
                    My OFFICIAL list of people who are FIRED!! 
                </h2>
                <ul class="text-gray-500 text-2xl unstyled">
                    <li class="mb-2">
                        Joel 
                        <span class="pl-2 text-sm">
                            for not renewing his HBO NOW account
                        </span>
                    </li>
                    <li class="mb-2">
                        Drew 
                        <span class="pl-2 text-sm">
                            
                        </span>
                    </li>
                    <li class="mb-2">
                        Dave 
                        <span class="pl-2 text-sm">
                            for no longer being such a good guy
                        </span>
                    </li>
                </ul>
            </section>
            
        @endforelse
            
    </main>
@stop
