<!DOCTYPE html>
<html lang="en">
	<head>
		<style>
            @font-face {
                font-family: 'fontes';
                /* src: url('http://127.0.0.1:600/fonts/Ubuntu-Regular.ttf') format("truetype"); */
				src: url('http://172.28.97.167:222/fonts/Quicksand-Medium.ttf') format("truetype");
                font-weight: normal;
                font-style: normal;
                font-variant: normal;
            }
            body {
                font-family: 'fontes' !important;
                font-size: smaller;
            }
        </style>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Document Management System">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin template, admin dashboard, bootstrap dashboard template, bootstrap 4 admin template, laravel, php framework, php laravel, laravel framework, php mvc, laravel admin panel, laravel admin panel, laravel template, laravel bootstrap, blade laravel, best php framework"/>

		<!-- Title -->
		<title>Portal TAWON</title>

		@include('layouts.custom-styles')

	</head>

    <body class="main-body light-theme">

		<!-- Loader -->
		<div id="global-loader">
			<img src="{{URL::asset('assets/img/loader-2.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- main-signin-wrapper -->

        <div class="my-auto page page-h">

            @yield('content')

        </div>

		<!-- /main-signin-wrapper -->

        @include('layouts.custom-scripts')
        
	</body>
</html>