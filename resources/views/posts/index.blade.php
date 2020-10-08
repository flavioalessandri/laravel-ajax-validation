@extends('layouts.main-layout')

@section('content')

<div class="row">

  <div class="col-md-12">


    <div class="d-flex justify-content-center">

      <div class="form-check">


      <label for="bestof"> Best OF </label>
      <input id="postBest" class="form-check-input position-static"  type="checkbox" name="bestof"></input>

      <ul id="postTarget">

      </ul>


    </div>

    </div>

  </div>

</div>



@endsection
