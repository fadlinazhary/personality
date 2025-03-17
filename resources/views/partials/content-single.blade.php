<section id="content-single" class="min-h-screen w-full lg:w-4/5 mx-auto">
    <article @php(post_class())>
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

        <section class="p-2 my-4 md:text-lg leading-6" id="post-content">
            @php(the_content())
        </section>
    </article>

    <hr class="mx-auto border-t-2 my-5 border-black dark:border-gray-100">

    @if (!empty($olderCategoryPosts))
        <section id="older-category-posts">
            <h1 class="font-bold text-3xl text-center">More from this category</h1>
            <ul>
                @foreach ($olderCategoryPosts as $post)
                    <li class="py-3">
                        <a href="{{ get_permalink($post->ID) }}" class="text-2xl py-2 font-bold">{{ $post->post_title }}</a>
                        <p class="mt-1 font-mono">{{ get_the_date('F j Y', $post) }}</p>
                    </li>
                @endforeach
            </ul>
        </section>
    @endif
</section>
