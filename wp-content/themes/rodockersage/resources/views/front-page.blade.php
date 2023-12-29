{{--
  Template Name: Front-Page Template
--}}

@extends('layouts.app')
@section('content')
  @php
    $bannerText = 'SHOULD BE MY ALERTZIZ';
    $text = 'Boootay';
  @endphp

  <x-bits bannerText='{{ $bannerText }}' textField='{{ $text }}' />
  
  @while(have_posts()) @php(the_post())
    @include('partials.content-page-fack')
  @endwhile
@endsection
