<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MI Annajiyah</title>
        <link rel="icon" href="{{asset('logo/LOGO.png')}}">

        @stack('before-css')
        @include('includes.frontend.style')
        @stack('after-css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    </head>
    <body id="page-top">
        @include('includes.frontend.navbar')

        @yield('content')

        @include('includes.frontend.footer')

        @stack('before-script')
        @include('includes.frontend.script')
        @stack('after-script')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            @if(Session::has('success'))
                toastr.success("{{ Session::get('success') }}");
            @endif

            @if(Session::has('info'))
                toastr.info("{{ Session::get('info') }}");
            @endif

            @if(Session::has('warning'))
                toastr.info("{{ Session::get('warning') }}");
            @endif

            @if(Session::has('danger'))
                toastr.info("{{ Session::get('danger') }}");
            @endif
        </script>
    </body>
</html>
