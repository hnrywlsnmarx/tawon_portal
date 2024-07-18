@extends('layouts.app')

@section('styles') 

	<!---Internal  Prism css-->
	<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">

@endsection

@section('breadcrumb')
					<div class="left-content">
						<h4 class="content-title mb-1">Buttons</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Buttons</li>
							</ol>
						</nav>
					</div>
@endsection('breadcrumb')

@section('content')

				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Default Buttons
								</div>
								<p class="mg-b-20 tx-12 text-muted">Predefined button styles, each serving its own semantic purpose..</p>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-xs wd-xl-80p">
											<div class="col-sm-6 col-md-3">
												<button class="btn btn-primary btn-block">Primary</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
												<button class="btn btn-secondary btn-block">Secondary</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0">
												<button class="btn btn-success btn-block">Success</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0">
												<button class="btn btn-warning btn-block">Warning</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-danger btn-block">Danger</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-info btn-block">Info</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-light btn-block">Light</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-dark btn-block">Dark</button>
											</div>
										</div>
									</div>

<!-- Prism Precode -->
<figure class="highlight clip-widget" id="element1"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-xs wd-xl-80p">
	<div class="col-sm-6 col-md-3">
		<button class="btn btn-primary btn-block">Primary</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
		<button class="btn btn-secondary btn-block">Secondary</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0">
		<button class="btn btn-success btn-block">Success</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0">
		<button class="btn btn-warning btn-block">Warning</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-danger btn-block">Danger</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-info btn-block">Info</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-light btn-block">Light</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-dark btn-block">Dark</button>
	</div>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element1"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Outline Buttons
								</div>
								<p class="mg-b-20 tx-12 text-muted">Predefined button styles, each serving its own semantic purpose..</p>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-xs wd-xl-80p">
											<div class="col-sm-6 col-md-3">
												<button class="btn btn-outline-primary btn-block">Primary</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
												<button class="btn btn-outline-secondary btn-block">Secondary</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
												<button class="btn btn-outline-success btn-block">Success</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
												<button class="btn btn-outline-warning btn-block">Warning</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-outline-danger btn-block">Danger</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-outline-info btn-block">Info</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-outline-light btn-block">Light</button>
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10">
												<button class="btn btn-outline-dark btn-block">Dark</button>
											</div>
										</div>
									</div>

<!-- Prism Precode -->
<figure class="highlight clip-widget" id="element2"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-xs wd-xl-80p">
	<div class="col-sm-6 col-md-3">
		<button class="btn btn-outline-primary btn-block">Primary</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
		<button class="btn btn-outline-secondary btn-block">Secondary</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
		<button class="btn btn-outline-success btn-block">Success</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
		<button class="btn btn-outline-warning btn-block">Warning</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-outline-danger btn-block">Danger</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-outline-info btn-block">Info</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-outline-light btn-block">Light</button>
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10">
		<button class="btn btn-outline-dark btn-block">Dark</button>
	</div>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element2"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									ROUNDED BUTTONS
								</div>
								<p class="mg-b-20 tx-12 text-muted">Predefined button styles, each serving its own semantic purpose..</p>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-xs">
											<div class="col-sm-6 col-md-3"><button class="btn btn-primary btn-rounded btn-block">Primary</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><button class="btn btn-secondary btn-rounded btn-block">Secondary</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-success btn-rounded btn-block">Success</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-warning btn-rounded btn-block">Warning</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-info btn-rounded btn-block">Info</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-danger btn-rounded btn-block">Danger</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-light btn-rounded btn-block">Light</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-dark btn-rounded btn-block">Dark</button></div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="element3"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-xs">
	<div class="col-sm-6 col-md-3"><button class="btn btn-primary btn-rounded btn-block">Primary</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><button class="btn btn-secondary btn-rounded btn-block">Secondary</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-success btn-rounded btn-block">Success</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-warning btn-rounded btn-block">Warning</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-info btn-rounded btn-block">Info</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-danger btn-rounded btn-block">Danger</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-light btn-rounded btn-block">Light</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-dark btn-rounded btn-block">Dark</button></div>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element3"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									ROUNDED Outline BUTTONS
								</div>
								<p class="mg-b-20 tx-12 text-muted">Predefined button styles, each serving its own semantic purpose..</p>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-xs">
											<div class="col-sm-6 col-md-3"><button class="btn btn-outline-primary btn-rounded btn-block">Primary</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><button class="btn btn-outline-secondary btn-rounded btn-block">Secondary</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-outline-success btn-rounded btn-block">Success</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-outline-warning btn-rounded btn-block">Warning</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-outline-info btn-rounded btn-block">Info</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-outline-danger btn-rounded btn-block">Danger</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-outline-light btn-rounded btn-block">Light</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-outline-dark btn-rounded btn-block">Dark</button></div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="element31"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-xs">
	<div class="col-sm-6 col-md-3"><button class="btn btn-outline-primary btn-rounded btn-block">Primary</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><button class="btn btn-outline-secondary btn-rounded btn-block">Secondary</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-outline-success btn-rounded btn-block">Success</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-outline-warning btn-rounded btn-block">Warning</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-outline-info btn-rounded btn-block">Info</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-outline-danger btn-rounded btn-block">Danger</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-outline-light btn-rounded btn-block">Light</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10"><button class="btn btn-outline-dark btn-rounded btn-block">Dark</button></div>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element31"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card" id="button4">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									BUTTON WITH ICONS
								</div>
								<p class="mg-b-20 tx-12 text-muted">A basic button with added icons...</p>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-xs">
											<div class="col-sm-6 col-md-3"><button class="btn btn-indigo btn-with-icon btn-block"><i class="typcn typcn-folder"></i> Folder</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><button class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-mail"></i> Mail</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-success btn-with-icon btn-block"><i class="typcn typcn-edit"></i> Edit</button></div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-info btn-with-icon btn-block"><i class="typcn typcn-home-outline"></i> Edit</button></div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="element4"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-xs wd-xl-80p">
	<div class="col-sm-6 col-md-3"><button class="btn btn-indigo btn-with-icon btn-block"><i class="typcn typcn-folder"></i> Folder</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><button class="btn btn-primary btn-with-icon btn-block"><i class="typcn typcn-mail"></i> Mail</button></div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-success btn-with-icon btn-block"><i class="typcn typcn-edit"></i> Edit</button></div>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element4"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card" id="button5">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									ICON BUTTONS
								</div>
								<p class="mg-b-20 tx-12 text-muted">It is Very Easy to Customize and it uses in your website apllication....</p>
								<div class="text-wrap">
									<div class="example">
										<div class="btn-icon-list">
											<button class="btn btn-indigo btn-icon"><i class="typcn typcn-folder"></i></button>
											<button class="btn btn-primary btn-icon"><i class="typcn typcn-calendar-outline"></i></button>
											<button class="btn btn-success btn-icon"><i class="typcn typcn-document-add"></i></button>
											<button class="btn btn-info btn-icon"><i class="typcn typcn-arrow-back-outline"></i></button>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="element5"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="btn-icon-list">
	<button class="btn btn-indigo btn-icon"><i class="typcn typcn-folder"></i></button>
	<button class="btn btn-primary btn-icon"><i class="typcn typcn-calendar-outline"></i></button>
	<button class="btn btn-success btn-icon"><i class="typcn typcn-document-add"></i></button>
	<button class="btn btn-info btn-icon"><i class="typcn typcn-arrow-back-outline"></i></button>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element5"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card" id="button6">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									DROPDOWN BUTTONS
								</div>
								<p class="mg-b-20">A button variant for using only icons.</p>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-xs wd-xl-80p">
											<div class="col-sm-6 col-md-3">
												<button data-toggle="dropdown" class="btn btn-indigo btn-block">Dropdown <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
												<div class="dropdown-menu shadow">
													<a href="" class="dropdown-item">Profile</a>
													<a href="" class="dropdown-item">Activity Logs</a>
													<a href="" class="dropdown-item">Account Settings</a>
													<a href="" class="dropdown-item">Logout</a>
												</div><!-- dropdown-menu -->
											</div>
											<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
												<button data-toggle="dropdown" class="btn btn-primary btn-block">Dropdown <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
												<div class="dropdown-menu shadow">
													<a href="" class="dropdown-item">Profile</a>
													<a href="" class="dropdown-item">Activity Logs</a>
													<a href="" class="dropdown-item">Account Settings</a>
													<a href="" class="dropdown-item">Logout</a>
												</div><!-- dropdown-menu -->
											</div>
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="element6"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-xs wd-xl-80p">
	<div class="col-sm-6 col-md-3">
		<button data-toggle="dropdown" class="btn btn-indigo btn-block">Dropdown <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
		<div class="dropdown-menu shadow">
			<a href="" class="dropdown-item">Profile</a>
			<a href="" class="dropdown-item">Activity Logs</a>
			<a href="" class="dropdown-item">Account Settings</a>
			<a href="" class="dropdown-item">Logout</a>
		</div><!-- dropdown-menu -->
	</div>
	<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
		<button data-toggle="dropdown" class="btn btn-primary btn-block">Dropdown <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
		<div class="dropdown-menu shadow">
			<a href="" class="dropdown-item">Profile</a>
			<a href="" class="dropdown-item">Activity Logs</a>
			<a href="" class="dropdown-item">Account Settings</a>
			<a href="" class="dropdown-item">Logout</a>
		</div><!-- dropdown-menu -->
	</div>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element6"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
</figure>
<!-- End Prism Precode -->
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 col-md-12">
						<div class="card" id="button7">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									Button Groups
								</div>
								<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication..</p>
								<div class="text-wrap">
									<div class="example">
										<div class="row row-sm">
											<div class="col-lg-4">
												<div aria-label="Basic example" class="btn-group" role="group">
													<button class="btn btn-secondary pd-x-25 active" type="button">Left</button> <button class="btn btn-secondary pd-x-25" type="button">Center</button> <button class="btn btn-secondary pd-x-25" type="button">Right</button>
												</div>
											</div><!-- col-4 -->
											<div class="col-lg-2 mg-t-20 mg-lg-t-0">
												<div aria-label="Basic example" class="btn-group" role="group">
													<button class="btn btn-secondary btn-icon active" type="button"><i class="typcn typcn-media-play-outline"></i></button> <button class="btn btn-secondary btn-icon" type="button"><i class="typcn typcn-media-pause-outline"></i></button> <button class="btn btn-secondary btn-icon" type="button"><i class="typcn typcn-media-stop-outline"></i></button>
												</div>
											</div><!-- col-2 -->
											<div class="col-lg-4 mg-t-20 mg-lg-t-0">
												<div aria-label="Basic example" class="btn-group" role="group">
													<button class="btn btn-primary btn-icon active" type="button"><i class="typcn typcn-media-play-outline"></i></button> <button class="btn btn-primary btn-icon" type="button"><i class="typcn typcn-media-pause-outline"></i></button> <button class="btn btn-primary btn-icon" type="button"><i class="typcn typcn-media-stop-outline"></i></button>
												</div>
											</div><!-- col-4 -->
										</div>
									</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="element7"><pre><code class="language-markup"><script type="html-dashlead/script"><div class="row row-sm">
	<div class="col-lg-4">
		<div aria-label="Basic example" class="btn-group" role="group">
			<button class="btn btn-secondary pd-x-25 active" type="button">Left</button> <button class="btn btn-secondary pd-x-25" type="button">Center</button> <button class="btn btn-secondary pd-x-25" type="button">Right</button>
		</div>
	</div><!-- col-4 -->
	<div class="col-lg-2 mg-t-20 mg-lg-t-0">
		<div aria-label="Basic example" class="btn-group" role="group">
			<button class="btn btn-secondary btn-icon active" type="button"><i class="typcn typcn-media-play-outline"></i></button> <button class="btn btn-secondary btn-icon" type="button"><i class="typcn typcn-media-pause-outline"></i></button> <button class="btn btn-secondary btn-icon" type="button"><i class="typcn typcn-media-stop-outline"></i></button>
		</div>
	</div><!-- col-2 -->
	<div class="col-lg-4 mg-t-20 mg-lg-t-0">
		<div aria-label="Basic example" class="btn-group" role="group">
			<button class="btn btn-primary btn-icon active" type="button"><i class="typcn typcn-media-play-outline"></i></button> <button class="btn btn-primary btn-icon" type="button"><i class="typcn typcn-media-pause-outline"></i></button> <button class="btn btn-primary btn-icon" type="button"><i class="typcn typcn-media-stop-outline"></i></button>
		</div>
	</div><!-- col-4 -->
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#element7"><i class="typcn typcn-clipboard tx-24"></i></div><div class="html-code-icon"><i class="typcn typcn-code-outline mg-r-5  tx-24"></i>HTML CODE</div>
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

	<!-- Internal Select2 js-->
	<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>

	<!--Internal  Clipboard js-->
	<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>

	<!-- Internal Prism js-->
	<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
	
@endsection
				
