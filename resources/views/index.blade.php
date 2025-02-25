@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <main class="my-5">
    <h1 class="font-medium text-3xl text-center">Welcome to {{ $siteName }}</h1>
  </main>

  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'personality') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection
