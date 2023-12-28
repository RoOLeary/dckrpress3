{{--
  Template Name: Article Template
--}}

@extends('layouts.app')
@section('content')
  <h1 class="text-xl font-extrabold">{!! $textField !!}</h1>
  <br>
  {!! $blortTest !!} 
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    {!! $sageTitle !!}
    @include('partials.content-page-articles', $articles)
  @endwhile
@endsection
