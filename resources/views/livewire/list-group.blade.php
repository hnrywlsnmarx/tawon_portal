@extends('layouts.app')

@section('styles') 

		<!---Internal  Prism css-->
		<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

		<!--- Custom-scroll -->
		<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')

					<div class="left-content">
						<h4 class="content-title mb-1">List Group</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">List Group</li>
							</ol>
						</nav>
					</div>

@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row row-sm">
					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20" id="list">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Basic Example
								</div>
								<p class="mg-b-20 tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
								<div class="text-wrap">
									<div class="example">
										<ul class="list-group">
											<li class="list-group-item">Cras justo odio</li>
											<li class="list-group-item">Dapibus ac facilisis in</li>
											<li class="list-group-item">Morbi leo risus</li>
											<li class="list-group-item">Porta ac consectetur ac</li>
											<li class="list-group-item">Vestibulum at eros</li>
										</ul>
									</div>

<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list01"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-group">
	<li class="list-group-item">Cras justo odio</li>
	<li class="list-group-item">Dapibus ac facilisis in</li>
	<li class="list-group-item">Morbi leo risus</li>
	<li class="list-group-item">Porta ac consectetur ac</li>
	<li class="list-group-item">Vestibulum at eros</li>
</ul>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list01"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>


					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20" id="list1">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Active Item
								</div>
								<p class="mg-b-20 tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
								<div class="text-wrap">
									<div class="example">
										<ul class="list-group">
											<li class="list-group-item">Cras justo odio</li>
											<li class="list-group-item active">Dapibus ac facilisis in</li>
											<li class="list-group-item">Morbi leo risus</li>
											<li class="list-group-item">Porta ac consectetur ac</li>
											<li class="list-group-item">Vestibulum at eros</li>
										</ul>
									</div>

<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list02"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-group">
	<li class="list-group-item">Cras justo odio</li>
	<li class="list-group-item active">Dapibus ac facilisis in</li>
	<li class="list-group-item">Morbi leo risus</li>
	<li class="list-group-item">Porta ac consectetur ac</li>
	<li class="list-group-item">Vestibulum at eros</li>
</ul>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list02"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20" id="list3">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Disabled Item
								</div>
								<p class="mg-b-20 tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
								<div class="text-wrap">
									<div class="example">
										<ul class="list-group">
											<li class="list-group-item">Cras justo odio</li>
											<li class="list-group-item disabled">Dapibus ac facilisis in</li>
											<li class="list-group-item">Morbi leo risus</li>
											<li class="list-group-item">Porta ac consectetur ac</li>
											<li class="list-group-item">Vestibulum at eros</li>
										</ul>
									</div>

<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list03"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-group">
	<li class="list-group-item">Cras justo odio</li>
	<li class="list-group-item disabled">Dapibus ac facilisis in</li>
	<li class="list-group-item">Morbi leo risus</li>
	<li class="list-group-item">Porta ac consectetur ac</li>
	<li class="list-group-item">Vestibulum at eros</li>
</ul>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list03"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20" id="list4">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Link and Buttons
								</div>
								<p class="mg-b-20 tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="text-wrap">
									<div class="example">
										<div class="list-group">
											<a class="list-group-item list-group-item-action active" href="#">Cras justo odio</a>
											<a class="list-group-item list-group-item-action" href="#">Dapibus ac facilisis in</a>
											<a class="list-group-item list-group-item-action" href="#">Morbi leo risus</a>
											<a class="list-group-item list-group-item-action" href="#">Porta ac consectetur ac</a>
											<a class="list-group-item list-group-item-action" href="#">Vestibulum at eros</a>
										</div>
									</div>

<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list04"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="list-group">
	<a class="list-group-item list-group-item-action active" href="#">Cras justo odio</a>
	<a class="list-group-item list-group-item-action" href="#">Dapibus ac facilisis in</a>
	<a class="list-group-item list-group-item-action" href="#">Morbi leo risus</a>
	<a class="list-group-item list-group-item-action" href="#">Porta ac consectetur ac</a>
	<a class="list-group-item list-group-item-action" href="#">Vestibulum at eros</a>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list04"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20" id="list5">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Contextual Classes With List Group
								</div>
								<p class="mg-b-20 tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="text-wrap">
									<div class="example">
										<ul class="list-group">
											<li class="list-group-item">Et harum quidem rerum facilis est et</li>
											<li class="list-group-item list-group-item-success">Et harum quidem rerum facilis est et</li>
											<li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
											<li class="list-group-item list-group-item-warning">voluptatibus maiores alias consequatur aut </li>
											<li class="list-group-item list-group-item-danger">The wise man therefore always holds in these </li>
										</ul>
									</div>

<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list05"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-group">
	<li class="list-group-item">Et harum quidem rerum facilis est et</li>
	<li class="list-group-item list-group-item-success">Et harum quidem rerum facilis est et</li>
	<li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
	<li class="list-group-item list-group-item-warning">voluptatibus maiores alias consequatur aut </li>
	<li class="list-group-item list-group-item-danger">The wise man therefore always holds in these </li>
</ul>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list05"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20" id="list6">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									List With Icons
								</div>
								<p class="mg-b-20 tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="text-wrap">
									<div class="example">
										<ul class="list-group">
											<li class="list-group-item"><i class="fas fa-cog text-primary" aria-hidden="true"></i> Et harum quidem rerum facilis est et</li>
											<li class="list-group-item"><i class="fas fa-cog text-danger" aria-hidden="true"></i> Et harum quidem rerum facilis est et</li>
											<li class="list-group-item"><i class="fas fa-cog text-success" aria-hidden="true"></i> Cras sit amet nibh libero</li>
											<li class="list-group-item"><i class="fas fa-cog text-warning" aria-hidden="true"></i> voluptatibus maiores alias consequatur aut </li>
											<li class="list-group-item"><i class="fas fa-cog text-info" aria-hidden="true"></i> The wise man therefore always holds in these </li>
										</ul>
									</div>

<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list06"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-group">
	<li class="list-group-item"><i class="fas fa-cog text-primary" aria-hidden="true"></i> Et harum quidem rerum facilis est et</li>
	<li class="list-group-item"><i class="fas fa-cog text-danger" aria-hidden="true"></i> Et harum quidem rerum facilis est et</li>
	<li class="list-group-item"><i class="fas fa-cog text-success" aria-hidden="true"></i> Cras sit amet nibh libero</li>
	<li class="list-group-item"><i class="fas fa-cog text-warning" aria-hidden="true"></i> voluptatibus maiores alias consequatur aut </li>
	<li class="list-group-item"><i class="fas fa-cog text-info" aria-hidden="true"></i> The wise man therefore always holds in these </li>
</ul>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list06"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20" id="list7">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Listgroup With Badges
								</div>
								<p class="mg-b-20 tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="text-wrap">
									<div class="example">
										<ul class="list-group">
											<li class="list-group-item justify-content-between">
												 Nam libero tempore, cum soluta
												<span class="badgetext badge badge-primary badge-pill">14</span>
											</li>
											<li class="list-group-item justify-content-between">
												Et harum quidem rerum facilis est et
												<span class="badgetext badge badge-danger badge-pill">2</span>
											</li>
											<li class="list-group-item justify-content-between">
												 Itaque earum rerum hic tenetur a sapiente
												<span class="badgetext badge badge-success badge-pill">1</span>
											</li>
											<li class="list-group-item justify-content-between">
												 Itaque earum rerum hic tenetur a sapiente
												<span class="badgetext badge badge-warning badge-pill">3</span>
											</li>
										</ul>
									</div>
<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list07"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-group">
	<li class="list-group-item justify-content-between">
		 Nam libero tempore, cum soluta
		<span class="badgetext badge badge-primary badge-pill">14</span>
	</li>
	<li class="list-group-item justify-content-between">
		Et harum quidem rerum facilis est et
		<span class="badgetext badge badge-danger badge-pill">2</span>
	</li>
	<li class="list-group-item justify-content-between">
		 Itaque earum rerum hic tenetur a sapiente
		<span class="badgetext badge badge-success badge-pill">1</span>
	</li>
	<li class="list-group-item justify-content-between">
		 Itaque earum rerum hic tenetur a sapiente
		<span class="badgetext badge badge-warning badge-pill">3</span>
	</li>
</ul>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list07"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20" id="list8">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Using Image
								</div>
								<p class="mg-b-20 tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
								<div class="text-wrap">
									<div class="example">
										<ul class="list-group wd-md-100p">
											<li class="list-group-item d-flex align-items-center">
												<img alt="" class="wd-30 rounded-circle mg-r-15" src="{{URL::asset('assets/img/faces/5.jpg')}}">
												<div>
													<h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Adrian Monino</h6><span class="d-block tx-11 text-muted">Premium Member</span>
												</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<img alt="" class="wd-30 rounded-circle mg-r-15" src="{{URL::asset('assets/img/faces/6.jpg')}}">
												<div>
													<h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Joel Mendez</h6><span class="d-block tx-11 text-muted">Premium Member</span>
												</div>
											</li>
											<li class="list-group-item d-flex align-items-center">
												<img alt="" class="wd-30 rounded-circle mg-r-15" src="{{URL::asset('assets/img/faces/9.jpg')}}">
												<div>
													<h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Marianne Audrey</h6><span class="d-block tx-11 text-muted">Premium Member</span>
												</div>
											</li>
										</ul>
									</div>
<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list08"><pre><code class="language-markup"><script type="html-dashlead/script"><ul class="list-group wd-md-100p">
	<li class="list-group-item d-flex align-items-center">
		<img alt="" class="wd-30 rounded-circle mg-r-15" src="{{URL::asset('assets/img/faces/5.jpg')}}">
		<div>
			<h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Adrian Monino</h6><span class="d-block tx-11 text-muted">Premium Member</span>
		</div>
	</li>
	<li class="list-group-item d-flex align-items-center">
		<img alt="" class="wd-30 rounded-circle mg-r-15" src="{{URL::asset('assets/img/faces/6.jpg')}}">
		<div>
			<h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Joel Mendez</h6><span class="d-block tx-11 text-muted">Premium Member</span>
		</div>
	</li>
	<li class="list-group-item d-flex align-items-center">
		<img alt="" class="wd-30 rounded-circle mg-r-15" src="{{URL::asset('assets/img/faces/9.jpg')}}">
		<div>
			<h6 class="tx-13 tx-inverse tx-semibold mg-b-0">Marianne Audrey</h6><span class="d-block tx-11 text-muted">Premium Member</span>
		</div>
	</li>
</ul>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list08"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20" id="list">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Unorder List
								</div>
								<p class="mg-b-20 tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
								<div class="text-wrap">
									<div class="example">
										<ul class="list-group-style2">
											<li class="listorder">Cras justo odio</li>
											<li class="listorder">Dapibus ac facilisis in</li>
											<li class="listorder">Morbi leo risus</li>
											<li class="listorder">Porta ac consectetur ac</li>
											<li class="listorder">Vestibulum at eros</li>
										</ul>
									</div>

<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list13"><pre><code class="language-markup"><script type="html-dashlead/script">
<ul class="list-group-style2">
	<li class="listorder">Cras justo odio</li>
	<li class="listorder">Dapibus ac facilisis in</li>
	<li class="listorder">Morbi leo risus</li>
	<li class="listorder">Porta ac consectetur ac</li>
	<li class="listorder">Vestibulum at eros</li>
</ul>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list13"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20" id="list">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Order List
								</div>
								<p class="mg-b-20 tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
								<div class="text-wrap">
									<div class="example">
										<ol class="list-group-style2">
											<li class="listorder">Cras justo odio</li>
											<li class="listorder">Dapibus ac facilisis in</li>
											<li class="listorder">Morbi leo risus</li>
											<li class="listorder">Porta ac consectetur ac</li>
											<li class="listorder">Vestibulum at eros</li>
										</ol>
									</div>

<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list13"><pre><code class="language-markup"><script type="html-dashlead/script">
<ol class="list-group-style2">
	<li class="listorder">Cras justo odio</li>
	<li class="listorder">Dapibus ac facilisis in</li>
	<li class="listorder">Morbi leo risus</li>
	<li class="listorder">Porta ac consectetur ac</li>
	<li class="listorder">Vestibulum at eros</li>
</ol>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list13"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>
					<!-- /row -->
					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20" id="list">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									List Style 01
								</div>
								<p class="mg-b-20 tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
								<div class="text-wrap">
									<div class="example">
										<ul class="list-group-style">
											<li>Cras justo odio</li>
											<li>Dapibus ac facilisis in</li>
											<li>Morbi leo risus
												<ul class="list-style-square">
													<li>Cras justo odio</li>
													<li>Dapibus ac facilisis in</li>
													<li>Morbi leo risus</li>
													<li>Porta ac consectetur ac</li>
													<li>Vestibulum at eros</li>
													<li>Nemo enim ipsam</li>
												</ul>
											</li>
											<li>Porta ac consectetur ac</li>
											<li>Vestibulum at eros</li>
											<li>ut labore et dolore magna</li>
											<li>established fact that a reader</li>
											<li>Vestibulum at eros</li>
											<li>Nemo enim ipsam voluptatem</li>
										</ul>
									</div>

<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list09"><pre><code class="language-markup"><script type="html-dashlead/script">
<ul class="list-group-style">
	<li>Cras justo odio</li>
	<li>Dapibus ac facilisis in</li>
	<li>Morbi leo risus
		<ul class="list-style-square">
			<li>Cras justo odio</li>
			<li>Dapibus ac facilisis in</li>
			<li>Morbi leo risus</li>
			<li>Porta ac consectetur ac</li>
			<li>Vestibulum at eros</li>
			<li>Nemo enim ipsam</li>
		</ul>
	</li>
	<li>Porta ac consectetur ac</li>
	<li>Vestibulum at eros</li>
	<li>ut labore et dolore magna</li>
	<li>established fact that a reader</li>
	<li>Vestibulum at eros</li>
	<li>Nemo enim ipsam voluptatem</li>
</ul>

</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list09"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20" id="list">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									List Style 02
								</div>
								<p class="mg-b-20 tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
								<div class="text-wrap">
									<div class="example">
										<ul class="list-style-cricle list-group-style2">
											<li>Cras justo odio</li>
											<li>Dapibus ac facilisis in</li>
											<li>Morbi leo risus
												<ul class="list-style-square">
													<li>Cras justo odio</li>
													<li>Dapibus ac facilisis in</li>
													<li>Morbi leo risus</li>
													<li>Porta ac consectetur ac</li>
													<li>Vestibulum at eros</li>
													<li>Nemo enim ipsam</li>
												</ul>
											</li>
											<li>Porta ac consectetur ac</li>
											<li>Vestibulum at eros</li>
											<li>ut labore et dolore magna</li>
											<li>established fact that a reader</li>
											<li>Vestibulum at eros</li>
											<li>Nemo enim ipsam voluptatem</li>
										</ul>
									</div>

<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list10"><pre><code class="language-markup"><script type="html-dashlead/script">
<ul class="list-style-cricle list-group-style2">
	<li>Cras justo odio</li>
	<li>Dapibus ac facilisis in</li>
	<li>Morbi leo risus
		<ul class="list-style-square">
			<li>Cras justo odio</li>
			<li>Dapibus ac facilisis in</li>
			<li>Morbi leo risus</li>
			<li>Porta ac consectetur ac</li>
			<li>Vestibulum at eros</li>
			<li>Nemo enim ipsam</li>
		</ul>
	</li>
	<li>Porta ac consectetur ac</li>
	<li>Vestibulum at eros</li>
	<li>ut labore et dolore magna</li>
	<li>established fact that a reader</li>
	<li>Vestibulum at eros</li>
	<li>Nemo enim ipsam voluptatem</li>
</ul>

</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list10"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20" id="list">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									List Style 03
								</div>
								<p class="mg-b-20 tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
								<div class="text-wrap">
									<div class="example">
										<ol class="list-group-style2">
											<li>Cras justo odio</li>
											<li>Dapibus ac facilisis in</li>
											<li>Morbi leo risus
												<ul class="list-style-square">
													<li>Cras justo odio</li>
													<li>Dapibus ac facilisis in</li>
													<li>Morbi leo risus</li>
													<li>Porta ac consectetur ac</li>
													<li>Vestibulum at eros</li>
													<li>Nemo enim ipsam</li>
												</ul>
											</li>
											<li>Porta ac consectetur ac</li>
											<li>Vestibulum at eros</li>
											<li>ut labore et dolore magna</li>
											<li>established fact that a reader</li>
											<li>Vestibulum at eros</li>
											<li>Nemo enim ipsam voluptatem</li>
										</ol>
									</div>

<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list11"><pre><code class="language-markup"><script type="html-dashlead/script">

<ol class="list-group-style2">
	<li>Cras justo odio</li>
	<li>Dapibus ac facilisis in</li>
	<li>Morbi leo risus
		<ul class="list-style-square">
			<li>Cras justo odio</li>
			<li>Dapibus ac facilisis in</li>
			<li>Morbi leo risus</li>
			<li>Porta ac consectetur ac</li>
			<li>Vestibulum at eros</li>
			<li>Nemo enim ipsam</li>
		</ul>
	</li>
	<li>Porta ac consectetur ac</li>
	<li>Vestibulum at eros</li>
	<li>ut labore et dolore magna</li>
	<li>established fact that a reader</li>
	<li>Vestibulum at eros</li>
	<li>Nemo enim ipsam voluptatem</li>
</ol>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list11"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="card mg-b-20" id="list">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Basic Example
								</div>
								<p class="mg-b-20 tx-12 text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication</p>
								<div class="text-wrap">
									<div class="example">
										<ol class="list-group-style2">
											<li>Cras justo odio</li>
											<li>Dapibus ac facilisis in</li>
											<li>Morbi leo risus
												<ul class="list-style-alpha">
													<li>Cras justo odio</li>
													<li>Dapibus ac facilisis in</li>
													<li>Morbi leo risus</li>
													<li>Porta ac consectetur ac</li>
													<li>Vestibulum at eros</li>
													<li>Nemo enim ipsam</li>
												</ul>
											</li>
											<li>Porta ac consectetur ac</li>
											<li>Vestibulum at eros</li>
											<li>ut labore et dolore magna</li>
											<li>established fact that a reader</li>
											<li>Vestibulum at eros</li>
											<li>Nemo enim ipsam voluptatem</li>
										</ol>
									</div>
<!---Prism Pre code-->
<figure class="highlight clip-widget" id="list12"><pre><code class="language-markup"><script type="html-dashlead/script">
<ol class="list-group-style2">
	<li>Cras justo odio</li>
	<li>Dapibus ac facilisis in</li>
	<li>Morbi leo risus
		<ul class="list-style-square">
			<li>Cras justo odio</li>
			<li>Dapibus ac facilisis in</li>
			<li>Morbi leo risus</li>
			<li>Porta ac consectetur ac</li>
			<li>Vestibulum at eros</li>
			<li>Nemo enim ipsam</li>
		</ul>
	</li>
	<li>Porta ac consectetur ac</li>
	<li>Vestibulum at eros</li>
	<li>ut labore et dolore magna</li>
	<li>established fact that a reader</li>
	<li>Vestibulum at eros</li>
	<li>Nemo enim ipsam voluptatem</li>
</ol>

</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#list12"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!---Prism Pre code-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

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