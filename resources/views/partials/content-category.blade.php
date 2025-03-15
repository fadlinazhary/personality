<section>
    @if (!have_posts())
            <x-alert type="warning">
                {!! __('Sorry, no results were found.', 'personality') !!}
            </x-alert>
    
            {!! get_search_form(false) !!}
        @endif
        
        {!! get_search_form() !!}
    
        @while (have_posts())
            @php(the_post())
            @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])

        @endwhile
    
        {!! get_the_posts_navigation() !!}
</section>