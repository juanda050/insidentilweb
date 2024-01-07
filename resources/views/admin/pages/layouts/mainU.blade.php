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

    @include('admin.layouts.javascript')
    {{-- @section('javascript')
        @include('admin.pages.layouts.js')
    @show --}}

</body>

</html>
