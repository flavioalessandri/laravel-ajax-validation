@extends('layouts.main-layout')

@section('content')


  <ul>
    <li>{{$post->id}}</li>
    <li>{{$post->title}}</li>
    <li>{{$post->genre}}</li>

  </ul>

@endsection
