@extends('layouts.theme', [
    'pageTitle' => __('About Page')
])

@section('content')
    @include('partials/about/preamble')
    @include('partials/about/part1')
    @include('partials/about/part2')
    @include('partials/about/part3')
@endsection
