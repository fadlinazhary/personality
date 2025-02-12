@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="p-5">
      @include('partials.page-header')
      @includeFirst(['partials.content-page', 'partials.content'])
    </div>
  @endwhile
@endsection
