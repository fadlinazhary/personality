@extends('layouts.app')

@section('content')
  @include('partials.content-page-home')

  @if(have_posts())
    <section class="p-5" id="blog">
      <h1 class="text-2xl font-semibold">My Blog</h1>
      <hr class="w-5 border-t-2 mt-4 mb-2 border-gray-800">
      @while(have_posts())
        @php(the_post())
        @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
      @endwhile
    </section>
  @endif
@endsection
