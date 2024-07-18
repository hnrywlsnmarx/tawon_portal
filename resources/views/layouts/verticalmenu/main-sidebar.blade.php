		<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar">
			<div class="main-sidebar-header active">
				<a class="desktop-logo logo-light active" href="{{url('index')}}">
					<img src="{{URL::asset('assets/img/brand/logo.png')}}" class="main-logo logo-color1" alt="logo">
					<img src="{{URL::asset('assets/img/brand/logo2.png')}}" class="main-logo logo-color2" alt="logo">
					<img src="{{URL::asset('assets/img/brand/logo3.png')}}" class="main-logo logo-color3" alt="logo">
					<img src="{{URL::asset('assets/img/brand/logo4.png')}}" class="main-logo logo-color4" alt="logo">
					<img src="{{URL::asset('assets/img/brand/logo5.png')}}" class="main-logo logo-color5" alt="logo">
					<img src="{{URL::asset('assets/img/brand/logo6.png')}}" class="main-logo logo-color6" alt="logo">
				</a>
				{{-- <a class="desktop-logo logo-dark active" href="{{url('index')}}"><img src="{{URL::asset('assets/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a> --}}
				<a class="side-menu__label center" href="{{url('index')}}"><div style="text-align: center;"><h4>DMS</h4></div></a>
				<div class="app-sidebar__toggle" data-toggle="sidebar">
					<a class="open-toggle" href="#"><i class="header-icon fe fe-chevron-left"></i></a>
					<a class="close-toggle" href="#"><i class="header-icon fe fe-chevron-right"></i></a>
				</div>
			</div>
			<div class="main-sidemenu sidebar-scroll">
				<ul class="side-menu">
					<li><h3>Main</h3></li>
					<li class="slide">
						<a class="side-menu__item" href="{{url('index')}}"><div class="side-angle1"></div><div class="side-angle2"></div><div class="side-arrow"></div>
							<i class="fas fa-chart-line side-menu__icon"></i>
						<span class="side-menu__label">Dashboard</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><div class="side-angle1"></div><div class="side-angle2"></div><div class="side-arrow"></div>
						<i class="fas fa-money-bill side-menu__icon"></i>
						<span class="side-menu__label">Loan</span><i class="angle fe fe-chevron-right"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{url('vertical')}}">KUPEN & KUPEG</a></li>
							<li><a class="slide-item" href="{{url('horizontal')}}">Horizontal</a></li>
						</ul>
					</li>
					<li><h3>Master</h3></li>
					<li class="slide">
						<a class="side-menu__item" href="{{url('users')}}">
							<i class="fas fa-address-book side-menu__icon"></i>
						<span class="side-menu__label">User</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" href="{{url('branch')}}">
							<i class="far fa-building side-menu__icon"></i>
						<span class="side-menu__label">Branch</span></a>
					</li>

					<li><h3>Mail</h3></li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><div class="side-angle1"></div><div class="side-angle2"></div><div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3"/><path d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z"/></svg>
						<span class="side-menu__label">Mail</span><i class="angle fe fe-chevron-right"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{url('mail-inbox')}}">Mail Inbox</a></li>
							<li><a class="slide-item" href="{{url('mail-compose')}}">Mail Compose</a></li>
							<li><a class="slide-item" href="{{url('mail-read')}}">Mail Read</a></li>
							<li><a class="slide-item" href="{{url('mail-settings')}}">Mail Settings</a></li>
							<li><a class="slide-item" href="{{url('chat')}}">Chat</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><div class="side-angle1"></div><div class="side-angle2"></div><div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 3.19L5 6.3V12h7v8.93c3.72-1.15 6.47-4.82 7-8.94h-7v-8.8z" opacity=".3"/><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 19.93V12H5V6.3l7-3.11v8.8h7c-.53 4.12-3.28 7.79-7 8.94z"/></svg>
						<span class="side-menu__label">Apps</span><i class="angle fe fe-chevron-right"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{url('cards')}}">Cards</a></li>
							<li><a class="slide-item" href="{{url('darggablecards')}}">Draggable-cards</a></li>
							<li><a class="slide-item" href="{{url('rangeslider')}}">Range-slider</a></li>
							<li><a class="slide-item" href="{{url('calendar')}}">Calendar</a></li>
							<li><a class="slide-item" href="{{url('contacts')}}">Contacts</a></li>
							<li><a class="slide-item" href="{{url('image-compare')}}">Image-compare</a></li>
							<li><a class="slide-item" href="{{url('notification')}}">Notification</a></li>
							<li><a class="slide-item" href="{{url('widget-notification')}}">Widget-notification</a></li>
							<li><a class="slide-item" href="{{url('treeview')}}">Treeview</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><div class="side-angle1"></div><div class="side-angle2"></div><div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M17 7H7V4H5v16h14V4h-2z" opacity=".3"/><path d="M19 2h-4.18C14.4.84 13.3 0 12 0S9.6.84 9.18 2H5c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm7 18H5V4h2v3h10V4h2v16z"/></svg>
						<span class="side-menu__label">Components</span><i class="angle fe fe-chevron-right"></i></a>
						<ul class="slide-menu">
							<li class="sub-slide">
								<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Maps</span><i class="sub-angle fe fe-chevron-right"></i></a>
								<ul class="sub-slide-menu">
									<li><a class="sub-slide-item" href="{{url('map-leaflet')}}">Leaflet Maps</a></li>
									<li><a class="sub-slide-item" href="{{url('map-vector')}}">Vector Maps</a></li>
								</ul>
							</li>
							<li class="sub-slide">
								<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Tables</span><i class="sub-angle fe fe-chevron-right"></i></a>
								<ul class="sub-slide-menu">
									<li><a class="sub-slide-item" href="{{url('table-basic')}}">Basic Tables</a></li>
									<li><a class="sub-slide-item" href="{{url('table-data')}}">Data Tables</a></li>
								</ul>
							</li>
							<li class="sub-slide">
								<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Elements</span><i class="sub-angle fe fe-chevron-right"></i></a>
								<ul class="sub-slide-menu">
									<li><a class="sub-slide-item" href="{{url('alerts')}}">Alerts</a></li>
									<li><a class="sub-slide-item" href="{{url('avatar')}}">Avatar</a></li>
									<li><a class="sub-slide-item" href="{{url('breadcrumbs')}}">Breadcrumbs</a></li>
									<li><a class="sub-slide-item" href="{{url('buttons')}}">Buttons</a></li>
									<li><a class="sub-slide-item" href="{{url('badge')}}">Badge</a></li>
									<li><a class="sub-slide-item" href="{{url('dropdown')}}">Dropdown</a></li>
									<li><a class="sub-slide-item" href="{{url('thumbnails')}}">Thumbnails</a></li>
									<li><a class="sub-slide-item" href="{{url('list-group')}}">List Group</a></li>
									<li><a class="sub-slide-item" href="{{url('navigation')}}">Navigation</a></li>
									<li><a class="sub-slide-item" href="{{url('pagination')}}">Pagination</a></li>
									<li><a class="sub-slide-item" href="{{url('popover')}}">Popover</a></li>
									<li><a class="sub-slide-item" href="{{url('progress')}}">Progress</a></li>
									<li><a class="sub-slide-item" href="{{url('spinners')}}">Spinners</a></li>
									<li><a class="sub-slide-item" href="{{url('media-object')}}">Media Object</a></li>
									<li><a class="sub-slide-item" href="{{url('typography')}}">Typography</a></li>
									<li><a class="sub-slide-item" href="{{url('tooltip')}}">Tooltip</a></li>
									<li><a class="sub-slide-item" href="{{url('toast')}}">Toast</a></li>
									<li><a class="sub-slide-item" href="{{url('tags')}}">Tags</a></li>
									<li><a class="sub-slide-item" href="{{url('tabs')}}">Tabs</a></li>
								</ul>
							</li>
							<li class="sub-slide">
								<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Advanced Ui</span><i class="sub-angle fe fe-chevron-right"></i></a>
								<ul class="sub-slide-menu">
									<li><a class="sub-slide-item" href="{{url('accordion')}}">Accordion</a></li>
									<li><a class="sub-slide-item" href="{{url('carousel')}}">Carousel</a></li>
									<li><a class="sub-slide-item" href="{{url('collapse')}}">Collapse</a></li>
									<li><a class="sub-slide-item" href="{{url('modals')}}">Modals</a></li>
									<li><a class="sub-slide-item" href="{{url('timeline')}}">Timeline</a></li>
									<li><a class="sub-slide-item" href="{{url('sweet-alert')}}">Sweet Alert</a></li>
									<li><a class="sub-slide-item" href="{{url('rating')}}">Ratings</a></li>
									<li><a class="sub-slide-item" href="{{url('counters')}}">Counters</a></li>
									<li><a class="sub-slide-item" href="{{url('search')}}">Search</a></li>
									<li><a class="sub-slide-item" href="{{url('userlist')}}">Userlist</a></li>

								</ul>
							</li>
							<li class="sub-slide">
								<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Forms</span><i class="sub-angle fe fe-chevron-right"></i></a>
								<ul class="sub-slide-menu">
									<li><a class="sub-slide-item" href="{{url('form-elements')}}">Form Elements</a></li>
									<li><a class="sub-slide-item" href="{{url('form-advanced')}}">Advanced Forms</a></li>
									<li><a class="sub-slide-item" href="{{url('form-layouts')}}">Form Layouts</a></li>
									<li><a class="sub-slide-item" href="{{url('form-validation')}}">Form Validation</a></li>
									<li><a class="sub-slide-item" href="{{url('form-wizards')}}">Form Wizards</a></li>
									<li><a class="sub-slide-item" href="{{url('form-editor')}}">Form Editor</a></li>
									<li><a class="sub-slide-item" href="{{url('form-elements-sizes')}}">Form Sizes</a></li>
									<li><a class="sub-slide-item" href="{{url('form-inputmask')}}">Input Mask</a></li>
									<li><a class="sub-slide-item" href="{{url('form-upload')}}">File Uploads</a></li>
								</ul>
							</li>
							<li class="sub-slide">
								<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Charts</span><i class="sub-angle fe fe-chevron-right"></i></a>
								<ul class="sub-slide-menu">
									<li><a class="sub-slide-item" href="{{url('chart-morris')}}">Morris Charts</a></li>
									<li><a class="sub-slide-item" href="{{url('chart-flot')}}">Flot Charts</a></li>
									<li><a class="sub-slide-item" href="{{url('chart-chartjs')}}">ChartJS</a></li>
									<li><a class="sub-slide-item" href="{{url('chart-echart')}}">Echart</a></li>
									<li><a class="sub-slide-item" href="{{url('chart-sparkline')}}">Sparkline</a></li>
									<li><a class="sub-slide-item" href="{{url('chart-peity')}}">Chart-peity</a></li>
								</ul>
							</li>
							<li class="sub-slide">
								<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Pages</span><i class="sub-angle fe fe-chevron-right"></i></a>
								<ul class="sub-slide-menu">
									<li><a class="sub-slide-item" href="{{url('profile')}}">Profile</a></li>
									<li><a class="sub-slide-item" href="{{url('editprofile')}}">Edit-Profile</a></li>
									<li><a class="sub-slide-item" href="{{url('invoice')}}">Invoice</a></li>
									<li><a class="sub-slide-item" href="{{url('pricing')}}">Pricing</a></li>
									<li><a class="sub-slide-item" href="{{url('gallery')}}">Gallery</a></li>
									<li><a class="sub-slide-item" href="{{url('todotask')}}">Todotask</a></li>
									<li><a class="sub-slide-item" href="{{url('faq')}}">Faqs</a></li>
									<li><a class="sub-slide-item" href="{{url('emptypage')}}">Empty Page</a></li>
								</ul>
							</li>
							<li class="sub-slide">
								<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">E-Commerce</span><i class="sub-angle fe fe-chevron-right"></i></a>
								<ul class="sub-slide-menu">
									<li><a class="sub-slide-item" href="{{url('products')}}">Products</a></li>
									<li><a class="sub-slide-item" href="{{url('product-details')}}">Product-Details</a></li>
									<li><a class="sub-slide-item" href="{{url('product-cart')}}">Cart</a></li>
									<li><a class="sub-slide-item" href="{{url('product-checkout')}}">Product Checkout</a></li>
								</ul>
							</li>
							<li class="sub-slide">
								<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Blog</span><i class="sub-angle fe fe-chevron-right"></i></a>
								<ul class="sub-slide-menu">
									<li><a class="sub-slide-item" href="{{url('bloglist01')}}">Blog list 01</a></li>
									<li><a class="sub-slide-item" href="{{url('bloglist02')}}">Blog list 02</a></li>
									<li><a class="sub-slide-item" href="{{url('bloglist03')}}">Blog list 03</a></li>
									<li><a class="sub-slide-item" href="{{url('bloglist04')}}">Blog list 04</a></li>
									<li><a class="sub-slide-item" href="{{url('bloglist05')}}">Blog list 05</a></li>
									<li><a class="sub-slide-item" href="{{url('blog')}}">Blog Details</a></li>
								</ul>
							</li>
							<li class="sub-slide">
								<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Icons List</span><i class="sub-angle fe fe-chevron-right"></i></a>
								<ul class="sub-slide-menu">
									<li><a class="sub-slide-item" href="{{url('icons')}}">Fontawesome</a></li>
									<li><a class="sub-slide-item" href="{{url('icons2')}}">Simple line</a></li>
									<li><a class="sub-slide-item" href="{{url('icons3')}}">Feather</a></li>
									<li><a class="sub-slide-item" href="{{url('icons4')}}">Line Awesome</a></li>
									<li><a class="sub-slide-item" href="{{url('icons5')}}">Themify</a></li>
									<li><a class="sub-slide-item" href="{{url('icons6')}}">Typicon Icons</a></li>
								</ul>
							</li>
							<li class="sub-slide">
								<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Utilities</span><i class="sub-angle fe fe-chevron-right"></i></a>
								<ul class="sub-slide-menu">
									<li><a class="sub-slide-item" href="{{url('background')}}">Background</a></li>
									<li><a class="sub-slide-item" href="{{url('border')}}">Border</a></li>
									<li><a class="sub-slide-item" href="{{url('display')}}">Display</a></li>
									<li><a class="sub-slide-item" href="{{url('flex')}}">Flex</a></li>
									<li><a class="sub-slide-item" href="{{url('height')}}">Height</a></li>
									<li><a class="sub-slide-item" href="{{url('margin')}}">Margin</a></li>
									<li><a class="sub-slide-item" href="{{url('padding')}}">Padding</a></li>
									<li><a class="sub-slide-item" href="{{url('position')}}">Position</a></li>
									<li><a class="sub-slide-item" href="{{url('width')}}">Width</a></li>
									<li><a class="sub-slide-item" href="{{url('extras')}}">Extras</a></li>
								</ul>
							</li>
							<li class="sub-slide">
								<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Authenication</span><i class="sub-angle fe fe-chevron-right"></i></a>
								<ul class="sub-slide-menu">
									<li><a class="sub-slide-item" href="{{url('signin')}}">Sign In</a></li>
									<li><a class="sub-slide-item" href="{{url('signup')}}">Sign Up</a></li>
									<li><a class="sub-slide-item" href="{{url('forgot')}}">Forgot Password</a></li>
									<li><a class="sub-slide-item" href="{{url('reset')}}">Reset Password</a></li>
									<li><a class="sub-slide-item" href="{{url('lockscreen')}}">Lockscreen</a></li>
									<li><a class="sub-slide-item" href="{{url('underconstruction')}}">UnderConstruction</a></li>
									<li><a class="sub-slide-item" href="{{url('error404')}}">404 Error</a></li>
									<li><a class="sub-slide-item" href="{{url('error500')}}">500 Error</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="#"><div class="side-angle1"></div><div class="side-angle2"></div><div class="side-arrow"></div>
						<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><g><rect height="5" opacity=".3" width="5" x="11" y="11"/><rect height="5" opacity=".3" width="5" x="4" y="11"/><rect height="5" opacity=".3" width="12" x="4" y="4"/><path d="M20,6v14H6v2h14c1.1,0,2-0.9,2-2V6H20z"/><path d="M18,16V4c0-1.1-0.9-2-2-2H4C2.9,2,2,2.9,2,4v12c0,1.1,0.9,2,2,2h12C17.1,18,18,17.1,18,16z M4,4h12v5H4V4z M9,16H4v-5h5 V16z M11,11h5v5h-5V11z"/></g></g></svg>
						<span class="side-menu__label">Sub Menu</span><i class="angle fe fe-chevron-right"></i></a>
						<ul class="slide-menu">
							<li class="sub-slide">
								<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Submenu 1</span><i class="sub-angle fe fe-chevron-right"></i></a>
								<ul class="sub-slide-menu">
									<li><a class="sub-slide-item" href="#">Submenu 1.1</a></li>
									<li class="sub-slide2">
										<a class="sub-slide-item" data-toggle="sub-slide2" href="#"><span class="sub-side-menu__label2">Submenu 1.2</span><i class="sub-angle2 fe fe-chevron-right"></i></a>
										<ul class="sub-slide-menu2">
											<li><a class="sub-slide-item2" href="#">Submenu 1.2.1</a></li>
											<li><a class="sub-slide-item2" href="#">Submenu 1.2.2</a></li>
											<li><a class="sub-slide-item2" href="#">Submenu 1.2.3</a></li>
										</ul>
									</li>
									<li><a class="sub-slide-item" href="#">Submenu 1.3</a></li>
								</ul>
							</li>
							<li><a class="sub-side-menu__item"  href="#"><span class="sub-side-menu__label">Submenu 2</span></a></li>
							<li><a class="sub-side-menu__item"  href="#"><span class="sub-side-menu__label">Submenu 3</span></a></li>
						</ul>
					</li>
				</ul>
				<div class="app-sidefooter">
					<a class="side-menu__item" href=""><svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm1 14h-2v-2h2v2zm0-3h-2c0-3.25 3-3 3-5 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 2.5-3 2.75-3 5z" opacity=".3"/><path d="M11 16h2v2h-2zm1-14C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z"/></svg> <span class="side-menu__label">Suport</span></a>
					<a class="side-menu__item" href=""><svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z"/></g></svg> <span class="side-menu__label">Logout</span></a>
				</div>
			</div>
		</aside>
		<!-- main-sidebar -->