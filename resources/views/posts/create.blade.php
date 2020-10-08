@extends('layouts.main-layout')

@section('content')

<div class="d-flex justify-content-center">



  <form class="col-md-8" action="{{ route('post.store')  }}" method="post">

    @csrf
    @method('POST')

    <div class="form-group">
      <label for="title">Title: </label>
      <input type="text"     class="@error ('title') is-invalid @enderror"     name="title" value="{{ old('title')}}">

                                @error ('title')
                                  <span class="invalid-feedback" role="alert">
                                    <strong> {{$message}} </strong>
                                  </span>
                                @enderror

    </div>

    <div class="form-group">
      <label for="genre">Genre: </label>
      <input type="text"      class="@error ('genre') is-invalid @enderror"      name="genre" value="{{old('genre')}}">

                                  @error ('genre')
                                    <span class="invalid-feedback" role="alert">
                                      <strong> {{$message}} </strong>
                                    </span>
                                    @enderror
    </div>

    <div class="form-group">
      <label for="body">Body: </label>
      <textarea name="body"  class="@error ('body') is-invalid @enderror"     rows="5" cols="50"></textarea>


                                    @error ('body')
                                      <span class="invalid-feedback" role="alert">
                                        <strong> {{$message}} </strong>
                                      </span>
                                      @enderror

    <div class="form-group">
      <label for="like">Like: </label>
      <input type="number"     class="@error ('like') is-invalid @enderror"     name="like" value="{{old('like')}}">

                            @error ('like')
                              <span class="invalid-feedback" role="alert">
                                <strong> {{$message}} </strong>
                              </span>
                              @enderror
    </div>

    <div class="form-group">
      <label for="dislike">Dislike: </label>
      <input type="number" class="@error ('dislike') is-invalid @enderror"   name="dislike" value="{{old('dislike')}}">


                          @error ('dislike')
                            <span class="invalid-feedback" role="alert">
                              <strong> {{$message}} </strong>
                            </span>
                            @enderror
    </div>

    <button type="submit" name="button">CREATE</button>

  </form>


</div>

@endsection
