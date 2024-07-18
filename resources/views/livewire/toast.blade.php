@extends('layouts.app')

@section('styles') 

		<!---Internal  Prism css-->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

		<!---Internal Input tags css-->
		<link href="{{URL::asset('assets/plugins/inputtags/inputtags.css')}}" rel="stylesheet">

		<!--- Custom-scroll -->
		<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Toasts</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Toasts</li>
							</ol>
						</nav>
					</div>


				@endsection('breadcrumb')

				@section('content')

				<!-- Row -->
				<div class="row">
					<div class="col-xl-12 col-lg-12">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Example</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example bg-gray-100">
										<div class="demo-static-toast">
											<div aria-atomic="true" aria-live="assertive" class="toast fade show shadow" role="alert">
												<div class="toast-header">
													<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small>
													<button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="toast-body">
													Hello, world! This is a toast message.
												</div>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toast1"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-static-toast">
<div aria-atomic="true" aria-live="assertive" class="toast fade show shadow" role="alert">
	<div class="toast-header">
		<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small>
		<button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="toast-body">
		Hello, world! This is a toast message.
	</div>
</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#toast1"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
						<div class="card custom-card" id="tarns">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Translucent</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example bg-gray-100">
										<div class="demo-static-toast">
											<div aria-atomic="true" aria-live="assertive" class="toast fade show shadow" role="alert">
												<div class="toast-header">
													<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small>
													<button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="toast-body">
													Hello, world! This is a toast message.
												</div>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toast2"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-static-toast">
<div aria-atomic="true" aria-live="assertive" class="toast fade show shadow" role="alert">
	<div class="toast-header">
		<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small>
		<button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="toast-body">
		Hello, world! This is a toast message.
	</div>
</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#toast2"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
						<div class="card custom-card" id="stacking">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Stacking</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example bg-gray-100">
										<div class="demo-static-toast">
											<div aria-atomic="true" aria-live="assertive" class="toast fade show shadow" role="alert">
												<div class="toast-header">
													<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">Just now</small>
													<button aria-label="Close" class="ml-2 mb-1 close" data-dismiss="toast" type="button">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="toast-body">
													See? Just like this.
												</div>
											</div>
											<div aria-atomic="true" aria-live="assertive" class="toast fade show shadow" role="alert">
												<div class="toast-header">
													<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="toast-body">
													Hello, world! This is a toast message.
												</div>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toast3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-static-toast">
<div aria-atomic="true" aria-live="assertive" class="toast fade show shadow" role="alert">
	<div class="toast-header">
		<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">Just now</small>
		<button aria-label="Close" class="ml-2 mb-1 close" data-dismiss="toast" type="button">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="toast-body">
		See? Just like this.
	</div>
</div>
<div aria-atomic="true" aria-live="assertive" class="toast fade show shadow" role="alert">
	<div class="toast-header">
		<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
	</div>
	<div class="toast-body">
		Hello, world! This is a toast message.
	</div>
</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#toast3"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
						<div class="card custom-card" id="place">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Placement</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap mb-3">
									<div class="example bg-gray-100">
										<div class="ht-150 pos-relative mb-3">
											<div class="demo-static-toast pos-absolute t-10 r-10">
												<div aria-atomic="true" aria-live="assertive" class="toast fade show shadow" role="alert">
													<div class="toast-header">
														<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
													</div>
													<div class="toast-body">
														Hello, world! This is a toast message.
													</div>
												</div>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toast4"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="ht-150 pos-relative mb-3">
<div class="demo-static-toast pos-absolute t-10 r-10">
	<div aria-atomic="true" aria-live="assertive" class="toast fade show shadow" role="alert">
		<div class="toast-header">
			<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
		</div>
		<div class="toast-body">
			Hello, world! This is a toast message.
		</div>
	</div>
</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#toast4"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
								<div class="text-wrap mb-3">
									<div class="example bg-gray-100">
										<div class="demo-static-toast d-flex justify-content-center align-items-center">
											<div aria-atomic="true" aria-live="assertive" class="toast fade show shadow" role="alert">
												<div class="toast-header">
													<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
												</div>
												<div class="toast-body">
													Hello, world! This is a toast message.
												</div>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toast5"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="demo-static-toast d-flex justify-content-center align-items-center">
<div aria-atomic="true" aria-live="assertive" class="toast fade show shadow"  role="alert">
	<div class="toast-header">
		<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
	</div>
	<div class="toast-body">
		Hello, world! This is a toast message.
	</div>
</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#toast5"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
								<div class="text-wrap">
									<div class="example bg-gray-100">
										<div class="ht-150 pos-relative">
											<div class="demo-static-toast pos-absolute b-10 r-10">
												<div aria-atomic="true" aria-live="assertive" class="toast fade show shadow" role="alert">
													<div class="toast-header">
														<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
													</div>
													<div class="toast-body">
														Hello, world! This is a toast message.
													</div>
												</div>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toast6"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="ht-150 pos-relative">
<div class="demo-static-toast pos-absolute b-10 r-10">
	<div aria-atomic="true" aria-live="assertive" class="toast fade show shadow" role="alert">
		<div class="toast-header">
			<h6 class="tx-14 mg-b-0 mg-r-auto">Notification</h6><small class="text-muted">11 mins ago</small> <button aria-label="Close" class="ml-2 mb-1 close tx-normal" data-dismiss="toast" type="button"><span aria-hidden="true">&times;</span></button>
		</div>
		<div class="toast-body">
			Hello, world! This is a toast message.
		</div>
	</div>
</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#toast6"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
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

		<!-- Internal Input tags js-->
		<script src="{{URL::asset('assets/plugins/inputtags/inputtags.js')}}"></script>

		<!--Internal  Clipboard js-->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- Internal Prism js-->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>

@endsection