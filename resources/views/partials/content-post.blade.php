<article @php(post_class('py-4'))>
    <header class="flex justify-between items-center">
        <a href="{{ get_permalink() }}" class="md:text-xl font-bold hover:underline hover:underline-offset-4 decoration-2">
            {!! $title !!}
        </a>
        <time class="inline-flex items-center gap-px px-2 text-base" datetime="{{ get_post_time('c', true) }}">
            <x-heroicon-o-clock class="size-5" /> {{ get_the_date() }}
        </time>
    </header>
</article>