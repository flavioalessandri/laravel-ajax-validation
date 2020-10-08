
<!DOCTYPE html>

<html lang="en" dir="ltr">

@include('partials.head')

  <body>
      <div class="container">

          @include('partials.header')

        <main>

          @yield('content')

        </main>

          @include('partials.footer')


      </div>

  </body>
</html>
