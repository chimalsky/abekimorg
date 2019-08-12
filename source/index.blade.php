@extends('_layouts.master')

@section('body')
    <header class="text-xl font-semibold lg:mt-16">
       Hi, this is Abe,
       
       <span class="font-normal">
            and I pair my love for stories with technology to 
            explore, ideate, and create meaningful experiences 
            alongside fascinating partners.
        </span>
    </header>

    <main class="flex flex-wrap lg:mt-12">
        <section class="md:w-3/4">
            <p>
                I got to do that with a pair of
                Italian scholars by bringing some of Petrarch's poetry 
                to the <a href="blog/petrarchive">modern web.</a>
            </p>

            <p>
                Recently, I began exploring the idea of refining ideas with an
                <a href="blog/ideator">Ideator tool</a> that I'm tinkering with. 
            </p>

            <p>
                And since last December, I've been writing near daily on 
                <a href="https://200wordsaday.com">200WordsADay.com</a>, a buddening writing community 
                accessible to anyone willing to write at least 200 words a day. 
                Come join us, if you'd 
                like to make a habit out of writing alongside other fellow writers.
            </p>
        </section>

        <div class="md:w-1/4 bg-cover bg-right" 
            style="background-image: url('assets/img/joelpeven-landscape.jpg')">
        </div>
    </main>
@stop
