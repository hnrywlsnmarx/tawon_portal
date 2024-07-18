@extends('layouts.app')

@section('styles')

	<!---Internal  Prism css-->
	<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
 
    <!--- Custom-scroll -->
    <link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Avatars</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Avatars	</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="sizes">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Avatar Sizes</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="demo-avatar-group">
											<div class="main-img-user avatar-xs">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/2.jpg')}}">
											</div>
											<div class="main-img-user avatar-sm">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/3.jpg')}}">
											</div>
											<div class="main-img-user">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/4.jpg')}}">
											</div>
											<div class="main-img-user avatar-md">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/5.jpg')}}">
											</div>
											<div class="main-img-user avatar-lg">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/6.jpg')}}">
											</div>
											<div class="main-img-user avatar-xl d-none d-sm-block">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/7.jpg')}}">
											</div>
											<div class="main-img-user avatar-xxl d-none d-sm-block">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/8.jpg')}}">
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar1"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-avatar-group">
	<div class="main-img-user avatar-xs">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/2.jpg')}}">
	</div>
	<div class="main-img-user avatar-sm">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/3.jpg')}}">
	</div>
	<div class="main-img-user">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/4.jpg')}}">
	</div>
	<div class="main-img-user avatar-md">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/5.jpg')}}">
	</div>
	<div class="main-img-user avatar-lg">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/6.jpg')}}">
	</div>
	<div class="main-img-user avatar-xl d-none d-sm-block">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/7.jpg')}}">
	</div>
	<div class="main-img-user avatar-xxl d-none d-sm-block">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/8.jpg')}}">
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#avatar1"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="shapes">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Avatar Shapes</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="demo-avatar-group avatar-list">
											<div class="avatar-md mr-3">
												<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/4.jpg')}}">
											</div>
											<div class="avatar-md mr-3">
												<img alt="avatar" class="rounded-0" src="{{URL::asset('assets/img/faces/5.jpg')}}">
											</div>
											<div class="avatar-md mr-3">
												<img alt="avatar" class="rounded-5" src="{{URL::asset('assets/img/faces/6.jpg')}}">
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar2"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-avatar-group">
	<div class="main-img-user avatar-md">
		<img alt="avatar" class="rounded-circle" src="{{URL::asset('assets/img/faces/4.jpg')}}">
	</div>
	<div class="main-img-user avatar-md">
		<img alt="avatar" class="square" src="{{URL::asset('assets/img/faces/5.jpg')}}">
	</div>
	<div class="main-img-user avatar-md">
		<img alt="avatar" class="radius" src="{{URL::asset('assets/img/faces/6.jpg')}}">
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#avatar2"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>


					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="initials">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Initials Avatars</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="demo-avatar-group avatar-list">
											<div class="avatar avatar-xs bg-primary rounded-circle">
												A
											</div>
											<div class="avatar avatar-sm bg-secondary rounded-circle">
												U
											</div>
											<div class="avatar bg-info rounded-circle">
												C
											</div>
											<div class="avatar avatar-md bg-success rounded-circle">
												X
											</div>
											<div class="avatar avatar-lg bg-warning rounded-circle">
												E
											</div>
											<div class="avatar avatar-xl d-none d-sm-flex bg-danger rounded-circle">
												M
											</div>
											<div class="avatar avatar-xxl d-none d-sm-flex bg-pink rounded-circle">
												NB
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-avatar-group avatar-list">
	<div class="avatar avatar-xs bg-primary rounded-circle">
		A
	</div>
	<div class="avatar avatar-sm bg-secondary rounded-circle">
		U
	</div>
	<div class="avatar bg-info rounded-circle">
		C
	</div>
	<div class="avatar avatar-md bg-success rounded-circle">
		X
	</div>
	<div class="avatar avatar-lg bg-warning rounded-circle">
		E
	</div>
	<div class="avatar avatar-xl d-none d-sm-flex bg-danger rounded-circle">
		M
	</div>
	<div class="avatar avatar-xxl d-none d-sm-flex bg-pink rounded-circle">
		NB
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#avatar3"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="status">
								<div class="card-body">
									<div>
										<h6 class="card-title mb-1">Status Indicator</h6>
										<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="demo-avatar-group">
												<div class="main-avatar avatar online">
													<img alt="avatar" class="rounded-circle avatar" src="{{URL::asset('assets/img/faces/9.jpg')}}">
												</div>
												<div class="main-avatar avatar-md offline">
													eb
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar4"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-avatar-group">
	<div class="main-avatar avatar online">
		<img alt="avatar" class="rounded-circle avatar" src="{{URL::asset('assets/img/faces/9.jpg')}}">
	</div>
	<div class="main-avatar avatar-md offline">
		eb
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#avatar4"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->

@endsection('content')

@section('scripts')

    <!--Internal  Datepicker js -->
	<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

	<!-- Internal Select2 js-->
	<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

	<!--Internal  Clipboard js-->
	<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

    <!-- Internal Prism js-->
	<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>

@endsection
				

