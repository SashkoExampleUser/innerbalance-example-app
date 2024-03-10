<!DOCTYPE html>
<html lang="en">
@include('layouts::parts.head')
<body id="pageRoot">
    @include('layouts::parts.noscript-analytics')
    @include('layouts::parts.ziggy-routes')
    <div @yield('rootClass', '')>
        <div>
            @section('header')
            @include('layouts::parts.header')
            @show

            @yield('main')

            @section('footer')
                @include('layouts::parts.footer')
            @show
        </div>
        @include('layouts::parts.scripts')
    </div>
</body>
</html>
