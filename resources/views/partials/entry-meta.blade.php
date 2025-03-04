<p>
  <span class="inline-flex items-center gap-[2px] px-2">
    <x-heroicon-o-user-circle class="size-4 md:size-6" />
    <strong class="md:text-lg">{{ get_the_author() }}</strong>
    {{-- <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}"> --}}
    {{-- </a> --}}
  </span>
  <time class="inline-flex items-center gap-[2px] px-2" datetime="{{ get_post_time('c', true) }}">
    <x-heroicon-o-clock class="size-4 md:size-6" /> <span class="md:text-lg">{{ get_the_date() }}</span>
  </time>
  <span class="inline-flex items-center gap-[2px] px-2">
    <x-heroicon-o-squares-2x2 class="size-4 md:size-6" />
    <strong class="md:text-lg">{{ the_category() }}</strong>
  </span>
</p>