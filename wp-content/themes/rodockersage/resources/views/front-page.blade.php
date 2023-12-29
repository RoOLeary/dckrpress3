{{--
  Template Name: Front-Page Template
--}}

@extends('layouts.app')
@section('content')
<<<<<<< HEAD
  @php
    $bannerText = 'SHOULD BE MY ALERTZ';
    $text = 'Boootay';
  @endphp

  <x-bits bannerText='{{ $bannerText }}' textField='{{ $text }}' />
  
=======
  {!! $textField !!}
  Dhluls
  {!! $blortTest !!}

  Gee
  @include('components.bits', [ $data = 'floop'])
>>>>>>> d1ceb73 (adds a bunnch of stuff like cpt support)
  @while(have_posts()) @php(the_post())
    @include('partials.content-page-fack')
  @endwhile
@endsection
