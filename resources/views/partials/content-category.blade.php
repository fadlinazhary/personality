<section class="p-5 min-h-screen">
    <h1 class="font-semibold text-3xl text-center my-4">{{ single_cat_title() }}</h1>

    <hr class="mx-auto w-8 border-t-2 my-4 border-black">

    @if (!have_posts())
            <x-alert type="warning">
                {!! __('Sorry, no results were found.', 'personality') !!}
            </x-alert>

            {!! get_search_form(false) !!}
        @endif

        {{-- {!! get_search_form() !!} --}}

        <section class="md:p-5">
            @while (have_posts())
                @php(the_post())
                @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
            @endwhile
        </section>

        <section class="post-navigation text-center p-3 font-semibold">
            {!! get_the_posts_navigation() !!}
        </section>
</section>
