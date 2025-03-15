@extends('layouts.app')

@section('content')
  @if (! have_posts())
    <div class="flex items-center justify-center h-screen">
        <div class="text-center">
            <x-heroicon-s-exclamation-circle class="h-24 w-24 mx-auto text-black dark:text-white" />
            <h1 class="mt-4 text-3xl font-bold">Not Found</h1>
            <p class="mt-2">Sorry, we couldn't find the page you're looking for.</p>
        </div>
    </div>
  @endif
@endsection
