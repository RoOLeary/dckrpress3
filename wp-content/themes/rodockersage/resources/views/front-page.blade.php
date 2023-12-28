{{--
  Template Name: Front-Page Template
--}}

@extends('layouts.app')
@section('content')
  {!! $textField !!}
  {!! $blortTest !!}
  @php
    $bannerText = 'SHOULD BE MY ALERTaaaah';
    $text = 'Boootay';
  @endphp

  <x-bits bannerText='{{ $bannerText }}' textField='{{ $text }}' />
  
  @while(have_posts()) @php(the_post())
    @include('partials.content-page-fack')
  @endwhile
@endsection
