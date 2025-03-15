<article @php(post_class('min-h-screen w-full lg:w-4/5 mx-auto'))>
    <header>
        <section class="my-3 font-semibold uppercase tracking-wide p-3 text-center">
            {{ the_category() }}
        </section>

        <h1 class="p-name text-2xl md:text-5xl font-bold text-center">
            {!! $title !!}
        </h1>
        <section class="flex justify-center m-3">
            @include('partials.entry-meta')
        </section>
        <hr class="mx-auto w-8 border-t-2 my-4 border-black dark:border-gray-100">
    </header>

    {{-- Featured Image --}}
    @if (has_post_thumbnail())
        <div class="post-thumbnail mx-auto">
           @php(the_post_thumbnail('featured', ['class' => 'mx-auto shadow-sm rounded-lg']))
        </div>
    @endif

    <section class="p-2 md:text-lg leading-6" id="post-content">
        @php(the_content())
    </section>
</article>
