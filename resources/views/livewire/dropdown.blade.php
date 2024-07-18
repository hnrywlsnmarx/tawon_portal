@extends('layouts.app')

@section('styles') 

		<!---Internal  Prism css-->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

		<!--- Custom-scroll -->
		<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Dropdown</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dropdown</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Basic Example</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown btn-group mt-2 mb-2">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
											<div  class="dropdown-menu shadow tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
										<div class="dropdown btn-group mt-2 mb-2">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
											<div  class="dropdown-menu shadow tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
										<div class="dropdown btn-group mt-2 mb-2">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
											<div  class="dropdown-menu shadow tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
										<div class="dropdown btn-group mt-2 mb-2">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-success" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
											<div  class="dropdown-menu shadow tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
										<div class="dropdown btn-group mt-2 mb-2">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
											<div  class="dropdown-menu shadow tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
										<div class="dropdown btn-group mt-2 mb-2">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-danger" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
											<div  class="dropdown-menu shadow tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="dropdown btn-group mt-2 mb-2">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
	<div  class="dropdown-menu shadow tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div>
<div class="dropdown btn-group mt-2 mb-2">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
	<div  class="dropdown-menu shadow tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div>
<div class="dropdown btn-group mt-2 mb-2">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
	<div  class="dropdown-menu shadow tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div>
<div class="dropdown btn-group mt-2 mb-2">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-success" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
	<div  class="dropdown-menu shadow tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div>
<div class="dropdown btn-group mt-2 mb-2">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
	<div  class="dropdown-menu shadow tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div>
<div class="dropdown btn-group mt-2 mb-2">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-danger" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
	<div  class="dropdown-menu shadow tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#dropdown"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Rounded Dropdowns</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown d-inline-flex mt-2 mb-2">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary btn-rounded" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
											<div  class="dropdown-menu shadow tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
										<div class="dropdown d-inline-flex mt-2 mb-2">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary btn-rounded" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
											<div  class="dropdown-menu shadow tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
										<div class="dropdown d-inline-flex mt-2 mb-2">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info btn-rounded" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
											<div  class="dropdown-menu shadow tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
										<div class="dropdown d-inline-flex mt-2 mb-2">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-success btn-rounded" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
											<div  class="dropdown-menu shadow tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
										<div class="dropdown d-inline-flex mt-2 mb-2">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning btn-rounded" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
											<div  class="dropdown-menu shadow tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
										<div class="dropdown d-inline-flex mt-2 mb-2">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-danger btn-rounded" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
											<div  class="dropdown-menu shadow tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown12"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="example">
	<div class="dropdown d-inline-flex mt-2 mb-2">
		<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary btn-rounded" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
		<div  class="dropdown-menu shadow tx-13">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		</div>
	</div>
	<div class="dropdown d-inline-flex mt-2 mb-2">
		<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary btn-rounded" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
		<div  class="dropdown-menu shadow tx-13">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		</div>
	</div>
	<div class="dropdown d-inline-flex mt-2 mb-2">
		<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info btn-rounded" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
		<div  class="dropdown-menu shadow tx-13">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		</div>
	</div>
	<div class="dropdown d-inline-flex mt-2 mb-2">
		<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-success btn-rounded" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
		<div  class="dropdown-menu shadow tx-13">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		</div>
	</div>
	<div class="dropdown d-inline-flex mt-2 mb-2">
		<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning btn-rounded" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
		<div  class="dropdown-menu shadow tx-13">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		</div>
	</div>
	<div class="dropdown d-inline-flex mt-2 mb-2">
		<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-danger btn-rounded" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
		<div  class="dropdown-menu shadow tx-13">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		</div>
	</div>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#dropdown12"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
						<div class="card custom-card">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Split Button Dropdown Example</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown btn-group mt-2 mb-2">
											<button type="button" class="btn ripple btn-primary">Dropdown Menu </button>
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary" data-toggle="dropdown" type="button"><i class="fas fa-caret-down"></i></button>
											<div  class="dropdown-menu shadow tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
										<div class="dropdown btn-group mt-2 mb-2">
											<button type="button" class="btn ripple btn-secondary">Dropdown Menu </button>
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary" data-toggle="dropdown" type="button"><i class="fas fa-caret-down"></i></button>
											<div  class="dropdown-menu shadow tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
										<div class="dropdown btn-group mt-2 mb-2">
											<button type="button" class="btn ripple btn-info">Dropdown Menu </button>
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info" data-toggle="dropdown" type="button"><i class="fas fa-caret-down"></i></button>
											<div  class="dropdown-menu shadow tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
										<div class="dropdown btn-group mt-2 mb-2">
											<button type="button" class="btn ripple btn-success">Dropdown Menu </button>
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-success" data-toggle="dropdown" type="button"><i class="fas fa-caret-down"></i></button>
											<div  class="dropdown-menu shadow tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
										<div class="dropdown btn-group mt-2 mb-2">
											<button type="button" class="btn ripple btn-warning">Dropdown Menu </button>
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning" data-toggle="dropdown" type="button"><i class="fas fa-caret-down"></i></button>
											<div  class="dropdown-menu shadow tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
										<div class="dropdown btn-group mt-2 mb-2">
											<button type="button" class="btn ripple btn-danger">Dropdown Menu </button>
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-danger" data-toggle="dropdown" type="button"><i class="fas fa-caret-down"></i></button>
											<div  class="dropdown-menu shadow tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown13"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="dropdown btn-group mt-2 mb-2">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
	<div  class="dropdown-menu shadow tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div>
<div class="dropdown btn-group mt-2 mb-2">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
	<div  class="dropdown-menu shadow tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div>
<div class="dropdown btn-group mt-2 mb-2">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
	<div  class="dropdown-menu shadow tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div>
<div class="dropdown btn-group mt-2 mb-2">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-success" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
	<div  class="dropdown-menu shadow tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div>
<div class="dropdown btn-group mt-2 mb-2">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
	<div  class="dropdown-menu shadow tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div>
<div class="dropdown btn-group mt-2 mb-2">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-danger" data-toggle="dropdown" type="button">Dropdown Menu <i class="fas fa-caret-down ml-1"></i></button>
	<div  class="dropdown-menu shadow tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#dropdown13"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="up">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Dropup</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown dropup">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning" data-toggle="dropdown" type="button">Dropup Menu <i class="fas fa-caret-down ml-1"></i></button>
											<div class="dropdown-menu shadow tx-13">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown2"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="dropdown dropup">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary"
	data-toggle="dropdown" type="button">Dropup Menu <i class="fas fa-caret-down ml-1"></i></button>
	<div class="dropdown-menu shadow tx-13">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#dropdown2"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>


					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="right">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Dropright & Dropleft</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-xs">
											<div class="col-sm-6 col-md-3">
												<div class="dropdown dropright">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary" data-toggle="dropdown" id="droprightMenuButton" type="button">Dropright Menu<i class="fas fa-caret-right ml-1"></i></button>
													<div aria-labelledby="droprightMenuButton" class="dropdown-menu shadow tx-13">
														<a class="dropdown-item" href="#">Action</a>
														<a class="dropdown-item" href="#">Another action</a>
														<a class="dropdown-item" href="#">Something else here</a>
													</div>
												</div>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
												<div class="dropdown dropleft">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning dropdown-toggle" data-toggle="dropdown" id="dropleftMenuButton" type="button">Dropleft Menu</button>
													<div aria-labelledby="dropleftMenuButton" class="dropdown-menu shadow tx-13">
														<a class="dropdown-item" href="#">Action</a>
														<a class="dropdown-item" href="#">Another action</a>
														<a class="dropdown-item" href="#">Something else here</a>
													</div>
												</div>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-xs">
	<div class="col-sm-6 col-md-3">
		<div class="dropdown dropright">
			<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info"
			data-toggle="dropdown" id="droprightMenuButton" type="button">Dropright Menu<i class="fas fa-caret-right ml-1"></i></button>
			<div aria-labelledby="droprightMenuButton" class="dropdown-menu tx-13 shadow">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
		<div class="dropdown dropleft">
			<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-danger dropdown-toggle"
			data-toggle="dropdown" id="dropleftMenuButton" type="button">Dropright Menu</button>
			<div aria-labelledby="dropleftMenuButton" class="dropdown-menu tx-13 shadow">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown3"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="active">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Active Menu Item</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning" data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ml-1"></i></button>
											<div class="dropdown-menu tx-13 shadow">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item active" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown4"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="dropdown">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning"
	 data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ml-1"></i></button>
	<div class="dropdown-menu tx-13 shadow">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item active" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#dropdown4"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="disabled">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Disabled Menu Item</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary" data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ml-1"></i></button>
											<div class="dropdown-menu tx-13 shadow">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item disabled" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown5"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="dropdown">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary"
	data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ml-1"></i></button>
	<div class="dropdown-menu tx-13 shadow">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item disabled" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown5"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="header">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Dropdown Header</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary" data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ml-1"></i></button>
											<div class="dropdown-menu tx-13 shadow">
												<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown6"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="dropdown">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary"
	data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ml-1"></i></button>
	<div class="dropdown-menu tx-13 shadow">
		<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown6"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card custom-card" id="divider">
							<div class="card-body">
								<div>
									<h6 class="card-title mb-1">Dropdown Divider</h6>
									<p class="tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								</div>
								<div class="text-wrap">
									<div class="example">
										<div class="dropdown">
											<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info" data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ml-1"></i></button>
											<div class="dropdown-menu tx-13 shadow">
												<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
												<a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
												<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="dropdown7"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="dropdown">
	<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info"
	data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down ml-1"></i></button>
	<div class="dropdown-menu tx-13 shadow">
		<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
		<a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
		<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#dropdown7"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
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