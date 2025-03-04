@if (!post_password_required())
  <section id="comments" class="mt-2">
    @if ($responses)
      <h1 class="text-2xl font-bold">Comments</h1>

      <ol class="comment-list">
        @foreach ($comments as $comment)
          <div class="my-4">
              <div class="font-bold">{{ get_comment_author($comment) }}</div>
              <div class="text-sm text-gray-600 dark:text-gray-200">at {{ get_comment_date('', $comment) }}</div>
              <div class="mt-2 text-md">{{ $comment->comment_content }}</div>
          </div>
        @endforeach
      </ol>
      
      @if ($paginated)
        <nav aria-label="comment">
          <ul class="pager">
            @if ($previous)
              <li class="previous">
                {!! $previous !!}
              </li>
            @endif

            @if ($next)
              <li class="next">
                {!! $next !!}
              </li>
            @endif
          </ul>
        </nav>
      @endif 

    @endif

    {{-- @if ($closed)
      <x-alert type="warning">
        {!! __('Comments are closed.', 'personality') !!}
      </x-alert>
    @endif --}}

    <section class="my-3">
      {{ comment_form() }}
    </section>
  </section>
@endif
