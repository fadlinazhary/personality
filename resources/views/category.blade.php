@extends('layouts.app')

@section('content')
    <section class="p-5">
        <h1 class="font-semibold text-3xl text-center my-4">{{ single_cat_title() }}</h1>

        @include('partials.content-category')
    </section>
@endsection
