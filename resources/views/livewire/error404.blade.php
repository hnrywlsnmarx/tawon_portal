@extends('layouts.customapp')

@section('custom-styles') 

		<!--- Internal Fontawesome css-->
		<link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

		<!---Ionicons css-->
		<link href="{{URL::asset('assets/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

		<!---Internal Typicons css-->
		<link href="{{URL::asset('assets/plugins/typicons.font/typicons.css')}}" rel="stylesheet">

		<!---Internal Feather css-->
		<link href="{{URL::asset('assets/plugins/feather/feather.css')}}" rel="stylesheet">

		<!---Internal Falg-icons css-->
		<link href="{{URL::asset('assets/plugins/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">

@endsection
  
@section('content')
		 
		<!-- Main-error-wrapper -->
        <div class="main-error-wrapper error-wrapper page page-h">
			<h1 class="">404</h1>
			<h2> Sorry, an error has occured, Requested Page not found!.</h2>
			<h6>You may have mistyped the address or the page may have moved.</h6>
			<a class="btn btn-primary" href="{{url('index')}}">Back to Home</a>
		</div>
		<!-- /Main-error-wrapper -->

@endsection('content')

@section('custom-scripts') 

@endsection 