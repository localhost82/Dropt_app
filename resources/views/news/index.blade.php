@extends('layouts.theme', [
    'pageTitle' => __('All News')
])

@section('content')
    <x-news :news="$news" />
@endsection
