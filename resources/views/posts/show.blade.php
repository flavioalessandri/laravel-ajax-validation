@extends('layouts.main-layout')

@section('content')


<div class="row">
    <div class="d-flex justify-content-center">

    <div id="post-show" class="card col-8 mycard show">

      <div class="card-header">
        <h2>TITLE: {{ $post -> title }} </h2>

        <h4>GENRE: {{ $post-> genre }}</h4>
      </div>

      <div class="card-body">
        <img src= "{{ $post-> image }} " alt=" {{$post-> image }}">

        <p>{{ $post -> body }}</p>

        <h6>LIKE: {{ $post-> like }}</h6>
        <h6>DISLIKE: {{ $post-> dislike }}</h6>
      </div>

    </div>

  </div>
</div>

@endsection
