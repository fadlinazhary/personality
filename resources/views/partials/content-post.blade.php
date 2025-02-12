<article @php(post_class('py-4'))>
    <header class="flex justify-between">
        <a href="{{ get_permalink() }}" class="md:text-xl font-bold underline">
            {!! $title !!}
        </a>
        <div>
            <time class="inline-flex items-center gap-px px-2 text-sm md:text-lg" datetime="{{ get_post_time('c', true) }}">
                <x-heroicon-o-clock class="size-4 md:size-6" /> {{ get_the_date() }}
            </time>
        </div>
    </header>
</article>