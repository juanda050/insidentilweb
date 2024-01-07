<!DOCTYPE html>
<html lang="en">

@section('head')
    @include('admin.pages.layouts.head')
@show

<body>
    @section('sidebar')
        @include('admin.layouts.sidebar')
    @show
    @section('header')
        @include('admin.layouts.header')
    @show
    
    @yield('content')

    @section('javascript')
        @include('admin.pages.layouts.js')
    @show

</body>

</html>
