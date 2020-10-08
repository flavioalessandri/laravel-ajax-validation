@extends('layouts.main-layout')

@section('content')


<div class="row">
  <div class="d-flex justify-content-center">


    <ul>
      <li>ID: {{ $post-> id }}</li>
      <li>TITLE: {{ $post-> title }}</li>
      <li>GENRE: {{ $post-> genre }}</li>
      <li>BODY: {{ $post-> body }}</li>
      <li>LIKE: {{ $post-> like }}</li>
      <li>DISLIKE: {{ $post-> dislike }}</li>

    </ul>

  </div>

</div>
@endsection
