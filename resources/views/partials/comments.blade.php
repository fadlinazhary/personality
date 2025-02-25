@if (!post_password_required())
  <section id="comments" class="mt-2">
    @if ($responses)
      <h1 class="text-2xl font-bold">Comments</h1>

      <ol class="comment-list">
        {{-- {!! $responses !!} --}}
        @foreach ($comments as $comment)
          <div class="py-3">
              <div class="font-bold">{{ get_comment_author($comment) }}</div>
              <div class="text-sm text-gray-600 dark:text-gray-200">{{ get_comment_date('', $comment) }}</div>
              <div class="mt-2 text-md">{{ $comment->comment_content }}</div>
          </div>
        @endforeach

      </ol>
      {{-- 
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
      --}}
    @endif

    @if ($closed)
      <x-alert type="warning">
        {!! __('Comments are closed.', 'personality') !!}
      </x-alert>
    @endif

    {{-- @php
        $comment_args = array(
          'title_reply' => '<span class="font-semibold">Leave a Comment</span>',
          'fields' => array(
            'author' => '<p class=""><label>'. __('Name') . '</label><input class="w-full" /></p>',
          ),
          'comment_field' => '<p class="comment-form-comment"><label for="comment">' . __('Comment') . '</label><textarea id="comment" name="comment" required class="border rounded p-2 w-full h-32"></textarea></p>',
          'label_submit' => 'Submit',
          'class_submit' => 'py-1 px-3 text-white border-2 border-white rounded-sm cursor-pointer',
        );

        comment_form($comment_args);
    @endphp --}}
  </section>
@endif
