<article @php(post_class('min-h-screen w-full lg:w-3/4 mx-auto'))>
  <header>
    <h1 class="p-name text-2xl md:text-4xl font-bold text-center">
      {!! $title !!}
    </h1>
    <section class="flex justify-center m-3">
      @include('partials.entry-meta')
    </section>

    <hr class="mx-auto w-8 border-t-2 my-4">
  </header>

  <section class="text-justify md:text-lg leading-8">
    @php(the_content())
  </section>

  <br>

  {{-- @if ($pagination)
    <footer>
      <nav class="page-nav" aria-label="Page">
        {!! $pagination !!}
      </nav>
    </footer>
  @endif --}}
  
  
  {{-- @php(comments_template()) --}}
</article>
