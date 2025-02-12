@extends('layouts.app')

@section('content')
  @include('partials.content-home')

  {{-- @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(true) !!}
  @endif --}}

  @if(have_posts())
    <section class="p-5" id="blog">
      <h1 class="text-2xl font-medium">My Blog</h1>
      <hr class="w-5 border-t-2 mt-4 mb-2">
      @while(have_posts())
        @php(the_post())
        @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
      @endwhile
    </section>
  @endif
  
  {{-- {!! get_the_posts_navigation() !!} --}}
@endsection

{{-- @section('sidebar')
  @include('sections.sidebar')
@endsection --}}
