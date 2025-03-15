<p>
  <span class="inline-flex items-center gap-[2px] px-2 py-3">
    <x-heroicon-o-user-circle class="size-4 md:size-6" />
    <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}">
      <strong class="md:text-lg font-mono">{{ get_the_author() }}</strong>
    </a>
  </span>
  <time class="inline-flex items-center gap-[2px] px-2" datetime="{{ get_post_time('c', true) }}">
    <x-heroicon-o-clock class="size-4 md:size-6" /> <span class="md:text-lg font-mono gap-2">{{ get_the_date() }}</span>
  </time>
</p>