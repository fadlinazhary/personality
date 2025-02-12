@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <section class="p-5">
      @includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
    </section>
  @endwhile
@endsection
