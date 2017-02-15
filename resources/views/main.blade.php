<!DOCTYPE html>
<html lang="en">
@include('partials._head')
@include('partials._nav')

<body>

<div class="container">
    {{Auth::check() ? "Logged In" : "Logged Out"}}

  @yield('content')
    @include('partials._footer')

</div> <!--end of .container -->
@include('partials._javascript')
@yield('scripts')


</body>
</html>