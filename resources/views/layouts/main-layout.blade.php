
<!DOCTYPE html>

<html lang="en" dir="ltr">

@include('partials.head')

  <body>
      <div class="container-fluid">

          @include('partials.header')

    </div>

      <div class="container">

        <main>

          @yield('content')

        </main>

      </div>

      <div class="container-fluid">
          @include('partials.footer')

      </div>


  </body>
</html>
