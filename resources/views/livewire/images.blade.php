@extends('layouts.app')

@section('styles') 
@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Images</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Images</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="card mg-b-20" id="image1">
					<div class="card-body">
						<div class="main-content-label mg-b-5">
							Responsive Image
						</div>
						<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
						<div><img alt="Responsive image" class="img-fluid" src="{{URL::asset('assets/img/photos/1.jpg')}}"></div>
					</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget mb-0" id="image-1"><pre><code class="language-markup"><script type="html-dashlead/script"><div><img alt="Responsive image" class="img-fluid" src="{{URL::asset('assets/img/photos/1.jpg')}}"></div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#image-1"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
				</div>
				<!-- /row -->

				<!-- row -->
				<div class="card mg-b-20" id="image2">
					<div class="card-body">
						<div class="main-content-label mg-b-5">
							Image Thumbnail
						</div>
						<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
						<img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-200" src="{{URL::asset('assets/img/photos/1.jpg')}}">
					</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget mb-0" id="image-2"><pre><code class="language-markup"><script type="html-dashlead/script"><img alt="Responsive image" class="img-thumbnail wd-100p wd-sm-200" src="{{URL::asset('assets/img/photos/1.jpg')}}"></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#image-2"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="card mg-b-20" id="image3">
						<div class="card-body">
							<div class="main-content-label mg-b-5">
								Aligning Images
							</div>
							<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
							<div class="bd pd-20 clearfix">
								<img alt="" class="rounded float-sm-left wd-100p wd-sm-200" src="{{URL::asset('assets/img/photos/1.jpg')}}">
								<img alt="" class="rounded float-sm-right wd-100p wd-sm-200 mg-t-10 mg-sm-t-0" src="{{URL::asset('assets/img/photos/1.jpg')}}">
							</div>
						</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget mb-0" id="image-3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="bd pd-20 clearfix">
	<img alt="" class="rounded float-sm-left wd-100p wd-sm-200" src="{{URL::asset('assets/img/photos/1.jpg')}}">
	<img alt="" class="rounded float-sm-right wd-100p wd-sm-200 mg-t-10 mg-sm-t-0" src="{{URL::asset('assets/img/photos/1.jpg')}}">
</div>
</script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#image-3"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
					</div>
					<!-- /row -->

					<!-- row -->
					<div class="card" id="image4">
						<div class="card-body">
							<div class="main-content-label mg-b-5">
								Background Image
							</div>
							<p class="mg-b-20 card-sub-title tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication.</p>
							<figure class="pos-relative mg-b-0 wd-sm-80p wd-md-50p">
								<img alt="Responsive image" class="img-fit-cover" src="{{URL::asset('assets/img/photos/1.jpg')}}">
								<figcaption class="pos-absolute a-0 pd-25 bg-black-5 tx-white-8">
									<h6 class="tx-14 tx-sm-16 tx-white tx-semibold mg-b-15 mg-sm-b-20">What Does Royalty-Free Mean?</h6>
									<p class="mg-b-0">Royalty free means you just need to pay for rights to use the item once per end product. You don't need to pay additional or ongoing fees for each person who sees or uses it.</p>
								</figcaption>
							</figure>
						</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget mb-0" id="image-4"><pre><code class="language-markup"><script type="html-dashlead/script"><figure class="pos-relative mg-b-0 wd-sm-80p wd-md-50p">
	<img alt="Responsive image" class="img-fit-cover" src="{{URL::asset('assets/img/photos/1.jpg')}}">
	<figcaption class="pos-absolute a-0 pd-25 bg-black-5 tx-white-8">
		<h6 class="tx-14 tx-sm-16 tx-white tx-semibold mg-b-15 mg-sm-b-20">What Does Royalty-Free Mean?</h6>
		<p class="mg-b-0">Royalty free means you just need to pay for rights to use the item once per end product. You don't need to pay additional or ongoing fees for each person who sees or uses it.</p>
	</figcaption>
</figure>
</script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#image-4"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
					</div>
				<!-- /row -->

@endsection('content')

@section('scripts') 

		<!-- Rating js-->
		<script src="{{URL::asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/rating/jquery.barrating.js')}}"></script>
		<!--Internal  Clipboard js-->
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- Internal Prism js-->
		<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>

@endsection