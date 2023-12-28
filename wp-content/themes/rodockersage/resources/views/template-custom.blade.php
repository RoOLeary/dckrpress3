{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')
{{-- sadfasdfasUUUU   {!! $templateName !!}   FFFFsadgawdgasdg --}}
@section('content')
  <h1 class="text-xl font-extrabold">{!! $blortTest !!}</h1>
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
