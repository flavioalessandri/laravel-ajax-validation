@extends('layouts.main-layout')

@section('content')

<div class="d-flex justify-content-center">



  <form class="col-md-8" action="" method="post">

    @csrf
    @method('POST')

    <div class="form-group">
      <label for="title">Title: </label>
      <input type="text" name="title" value="">
    </div>

    <div class="form-group">
      <label for="genre">Genre: </label>
      <input type="text" name="genre" value="">
    </div>

    <div class="form-group">
      <label for="body">Body: </label>
      <textarea name="body" rows="8" cols="80"></textarea>

    <div class="form-group">
      <label for="like">Like: </label>
      <input type="number" name="like" value="">
    </div>

    <div class="form-group">
      <label for="dislike">Dislike: </label>
      <input type="number" name="dislike" value="">
    </div>

    <button type="submit" name="button">CREATE</button>

  </form>


</div>

@endsection
