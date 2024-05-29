@extends('layouts.main')

@section('home')
    <!-- slider section -->
    @include('includes.slider')
    <!-- end slider section -->

    <!-- shop section -->
    @include('includes.shop')
    <!-- end shop section -->

    <!-- about section -->
    @include('includes.about')
    <!-- end about section -->

    <!-- offer section -->
    @include('includes.offer')
    <!-- end offer section -->

    <!-- blog section -->
    @include('includes.blog')
    <!-- end blog section -->

    <!-- client section -->
    @include('includes.testimonial')
    <!-- end client section -->

@endsection
