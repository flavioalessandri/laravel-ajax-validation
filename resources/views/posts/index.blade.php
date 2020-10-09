@extends('layouts.main-layout')

@section('content')

<div id="post-index" class="row">

  <div class="col-2">

    {{-- <div class="d-flex justify-content-center"> --}}

        <div class="form-check">


          <label for="bestof"> Best OF </label>
          <input id="postBest" class="form-check-input position-static"  type="checkbox" name="bestof"></input>

        </div>

    </div>

        {{-- <div class="row"> --}}

    <div class="col-10">

      <div class="row justify-content-around" id="postTarget">

      </div>

    </div>

        {{-- </div> --}}

</div>



  {{-- </div> --}}

{{-- </div> --}}




@endsection
