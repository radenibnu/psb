<!doctype html>
<html lang="en">

    <head>

		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>TPQ Untitle</title>

        @stack('before-css')
        @include('includes.frontend.style')
        @stack('after-css')

        <style>
            .carousel-item {
                height: 100vh;
                min-height: 350px;
                background: no-repeat center center scroll;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                }
        </style>
    

    </head>

    <body>

		<!-- Wrapper -->
    	<div class="wrapper">

            @include('includes.frontend.sidebar')
			
			<!-- Dark overlay -->
    		<div class="overlay"></div>

			<!-- Content -->
			<div class="content">
			
                @yield('content')
		       
                @include('includes.frontend.footer')
	        </div>
	        <!-- End content -->
            
        </div>
        <!-- End wrapper -->

    @stack('before-script')
    @include('includes.frontend.script')
    @stack('after-script')

    </body>
</html>