<!DOCTYPE html>
<html lang="en" style="zoom: 90%; -moz-transform: scale(0.88) translate(0%, -7%);">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Dashfox - Laravel Admin & Dashboard Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin template, admin dashboard, bootstrap dashboard template, bootstrap 4 admin template, laravel, php framework, php laravel, laravel framework, php mvc, laravel admin panel, laravel admin panel, laravel template, laravel bootstrap, blade laravel, best php framework"/>

		<!-- Title -->
		<title>Portal TAWON</title>

		@include('layouts.horizontalmenu.styles')

	</head>

    <body class="main-body light-theme horizontal-color header-light">

		<!-- Loader -->
		{{-- <div id="global-loader">
			<img src="{{URL::asset('assets/img/loader-2.svg')}}" class="loader-img" alt="Loader">
		</div> --}}
		<!-- /Loader -->

        {{-- @include('layouts.horizontalmenu.main-header') --}}

        {{-- @include('layouts.horizontalmenu.horizontal-main') --}}

		<!-- main-content opened -->
		{{-- <div class="main-content horizontal-content"> --}}

            <!-- container opened -->
            <br>
			<div class="container">

				<!-- breadcrumb -->
				{{-- <div class="breadcrumb-header justify-content-between mg-lg-t-0 mg-lg-b-50">
					@yield('breadcrumb')
				</div> --}}
				<!-- breadcrumb -->

                @yield('content')

            </div>
            <!-- Container closed -->

		{{-- </div> --}}
		<!-- main-content closed -->

        {{-- @include('layouts.horizontalmenu.sidebar-right') --}}

        @yield('modals')

        @include('layouts.horizontalmenu.footer')

        @include('layouts.horizontalmenu.scripts')

	</body>
</html>