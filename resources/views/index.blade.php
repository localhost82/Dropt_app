@extends('layouts.theme', [
    'pageTitle' => __('Home')
])

@section('content')
    @include('partials/banner')
{{--    <!-- trusted by -->--}}
{{--    <x-trusted-by/>--}}

    <!-- All-In-One Cloud Software. -->
    @include('partials/all-in-one')

    <!-- card -->
    @include('partials/cards')

    <!-- lorem -->
    @include('partials/about')
{{--    @include('partials/you-can-do')--}}

{{--    <!-- Tools For Teachers And Learners -->--}}
{{--    @include('partials/tools')--}}

    <!-- Assessments, Quizzes, Tests -->
{{--    @include('partials/tests')--}}
{{--    @include('partials/management-tools')--}}
{{--    @include('partials/one-on-one')--}}
{{--    @include('partials/see-more')--}}
    @include('partials/user')
    @include('partials/business')

    <x-home.latest-news :news="$news" />
@endsection
