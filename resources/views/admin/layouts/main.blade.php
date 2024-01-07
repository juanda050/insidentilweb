<!DOCTYPE html>
<html lang="en">

{{-- head --}}
@section('head')
    @include('admin.layouts.head')
@show

<body>
    <script src="{{ asset('assets/js/initTheme.js') }}"></script>
    <div id="app">
        {{-- sidebar --}}

        @section('sidebar')
            @include('admin.layouts.sidebar')
        @show
        @section('header')
            @include('admin.layouts.header')
        @show

        {{-- content --}}
        @yield('content')

        {{-- footer --}}
        @section('footer')
            @include('admin.layouts.footer')
        @show
    </div>
    {{-- js --}}
    @section('javascript')
        @include('admin.layouts.javascript')
    @show

</body>

</html>
