<article @php(post_class('py-4'))>
    <header class="flex justify-between">
        <a href="{{ get_permalink() }}" class="md:text-xl font-bold underline-offset-1">
            {!! $title !!}
        </a>
        <div>
            <time class="inline-flex items-center gap-px px-2 text-sm" datetime="{{ get_post_time('c', true) }}">
                <x-heroicon-o-clock class="size-5" /> {{ get_the_date() }}
            </time>
        </div>
    </header>
</article>