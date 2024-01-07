<!DOCTYPE html>
<html lang="en">

@section('head')
    @include('layouts.head')
@show

<body>
    <!------------------------------>
    <!-- Header Start -->
    <!------------------------------>
    @section('heaeder')
        @include('layouts.headerU')
    @show
    <!------------------------------>
    <!-- Header End  -->
    <!------------------------------>

    @yield('content')
    <!------------------------------>
    <!-----Contact section End----->
    <!------------------------------>

    <!------------------------------>
    <!-----Footer Start------------->
    <!------------------------------>
    @section('footer')
        @include('layouts.footer')
    @show
    <!------------------------------>
    <!-------Footer End------------->
    <!------------------------------>


    @section('javascript')
        @include('layouts.javascript')
    @show

</body>

</html>
