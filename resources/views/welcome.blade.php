<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SMS</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="{{ asset('home/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('home/css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('home/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('home/css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('home/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('home/css/prettyPhoto.css') }}">
	<link rel="stylesheet" href="{{ asset('home/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('home/css/owl.theme.default.css') }}">
	<link rel="stylesheet" href="{{ asset('home/css/transitions.css') }}">
	<link rel="stylesheet" href="{{ asset('home/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('home/css/color.css') }}">
	<link rel="stylesheet" href="{{ asset('home/css/responsive.css') }}">
	<script src="{{ asset('home/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
</head>
<body class="tg-home tg-homethree">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-headervtwo tg-haslayout">
			<div class="tg-topbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<ul class="tg-addressinfo">
								<li>
									<i class="icon-map-marker"></i>
									<address>University of Nigeria Road, Nsukka</address>
								</li>
								<li>
									<i class="icon-clock"></i>
									<time datetime="2016-10-10">{{ now()->format('l, F j, Y') }}</time>
								</li>
								<li>
									<i class="icon-phone-handset"></i>
									<span>+4 1234 567890</span>
								</li>
							</ul>
							<div class="tg-themedropdown tg-languagesdropdown">
								<a href="javascript:void(0);" id="tg-languages" class="tg-btndropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span>
										<i class="fa fa-user"></i>

									</span>
									<span>Login</span>
								</a>
								<div class="tg-themedropdownbox" aria-labelledby="tg-languages">
									<ul class="tg-languageslist">
										<li>
                                            <span><a href="{{ route('login') }}">Admin</a> <i class="fa fa-user" style="margin-left: 14px"></i></span>

										</li>
										<li>
											{{-- <span></span> --}}
											<span><a href="{{ route('student.login') }}">Student</a> <i class="fa fa-user" style="margin-left: 6px"></i></span>
										</li>
										<li>
											{{-- <span></span> --}}
											<span><a href="{{ route('teacher.login') }}">Teacher</a> <i class="fa fa-user" style="margin-left: 5px"></i></span>
										</li>
										<li>
											{{-- <span><i class="fa fa-user" style="margin-left: 5px"></i></span> --}}
											<span><a href="{{ route('parents.login') }}">Parent</a> <i class="fa fa-user" style="margin-left: 13px"></i></span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="tg-navigationarea">
							<strong class="tg-logo"><a href="index-2.html"><img src="{{ asset('home/images/un-logo.j') }}" alt="University of Nigeria Secondary School"></a></strong>
							<div class="tg-navigationandsearch">
								<nav id="tg-nav" class="tg-nav">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
										<ul>
										<li class="current-menu-item">
											<a href="{{ route('lock') }}">Dashboard</a>

										</li>
										<li class="menu-item-has-mega-menu">
											<a href="">Subjects</a>

										</li>
										<li class="menu-item-has-mega-menu">
											<a href="javascript:void(0);">Events</a>
											<div class="mega-menu tg-fullmegamenu">
												<ul class="mega-menu-row">
													<li class="mega-menu-col">
														<div class="tg-themetabs">

															<div class="tab-content tg-themetabcontent">
																<div role="tabpanel" class="tab-pane tg-tabpane active" id="tg-science">
																	<strong>Latest Science Courses</strong>
																	<div class="tg-posts">
																		<div id="tg-navtabslider" class="tg-navtabslider tg-megamenuslider owl-carousel">
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="{{ asset('home/images/themepost/img-01.jpg') }}" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-02.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-03.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventdetail.html">Back To School, Open Discussion</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-04.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventslist.html">Make a Goal For Successful Your Life</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-01.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-02.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																		</div>
																	</div>
																</div>
																<div role="tabpanel" class="tab-pane tg-tabpane" id="tg-management">
																	<strong>Latest Management Courses</strong>
																	<div class="tg-posts">
																		<div id="tg-navtabslider" class="tg-navtabslider tg-megamenuslider owl-carousel">
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-03.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventsgrid.html">Back To School, Open Discussion</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-04.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventdetail.html">Make a Goal For Successful Your Life</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-01.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-02.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-03.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventsgrid.html">Back To School, Open Discussion</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-04.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventdetail.html">Make a Goal For Successful Your Life</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																		</div>
																	</div>
																</div>
																<div role="tabpanel" class="tab-pane tg-tabpane" id="tg-medical">
																	<strong>Latest Medical Courses</strong>
																	<div class="tg-posts">
																		<div id="tg-navtabslider" class="tg-navtabslider tg-megamenuslider owl-carousel">
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-02.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventdetail.html">One Day Crash Course on Skills Improvement</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-03.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventslist.html">Back To School, Open Discussion</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-01.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventsgrid.html">Become a Proffesional Teacher</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-04.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventdetail.html">Make a Goal For Successful Your Life</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-02.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventdetail.html">One Day Crash Course on Skills Improvement</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-03.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventslist.html">Back To School, Open Discussion</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																		</div>
																	</div>
																</div>
																<div role="tabpanel" class="tab-pane tg-tabpane" id="tg-arts">
																	<strong>Latest Arts Courses</strong>
																	<div class="tg-posts">
																		<div id="tg-navtabslider" class="tg-navtabslider tg-megamenuslider owl-carousel">
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-01.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-02.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-03.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventdetail.html">Back To School, Open Discussion</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-04.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventdetail.html">Make a Goal For Successful Your Life</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-01.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-02.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																		</div>
																	</div>
																</div>
																<div role="tabpanel" class="tab-pane tg-tabpane" id="tg-informationtechnology">
																	<strong>Latest Information Technology Courses</strong>
																	<div class="tg-posts">
																		<div id="tg-navtabslider" class="tg-navtabslider tg-megamenuslider owl-carousel">
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-03.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventslist.html">Back To School, Open Discussion</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-04.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventsgrid.html">Make a Goal For Successful Your Life</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-01.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventdetail.html">Become a Proffesional Teacher</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-02.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventslist.html">One Day Crash Course on Skills Improvement</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-03.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventslist.html">Back To School, Open Discussion</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-04.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventsgrid.html">Make a Goal For Successful Your Life</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																		</div>
																	</div>
																</div>
																<div role="tabpanel" class="tab-pane tg-tabpane" id="tg-history">
																	<strong>Latest History Courses</strong>
																	<div class="tg-posts">
																		<div id="tg-navtabslider" class="tg-navtabslider tg-megamenuslider owl-carousel">
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-02.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-03.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventdetail.html">Back To School, Open Discussion</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-01.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-04.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventsgrid.html">Make a Goal For Successful Your Life</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-02.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-03.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventdetail.html">Back To School, Open Discussion</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																		</div>
																	</div>
																</div>
																<div role="tabpanel" class="tab-pane tg-tabpane" id="tg-economics">
																	<strong>Latest Economics Courses</strong>
																	<div class="tg-posts">
																		<div id="tg-navtabslider" class="tg-navtabslider tg-megamenuslider owl-carousel">
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-03.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventdetail.html">Back To School, Open Discussion</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-01.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-02.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-04.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventdetail.html">Make a Goal For Successful Your Life</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-03.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventdetail.html">Back To School, Open Discussion</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-01.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																		</div>
																	</div>
																</div>
																<div role="tabpanel" class="tab-pane tg-tabpane" id="tg-accounts">
																	<strong>Latest Accounts Courses</strong>
																	<div class="tg-posts">
																		<div id="tg-navtabslider" class="tg-navtabslider tg-megamenuslider owl-carousel">
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-01.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="images/themepost/img-02.jpg" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="{{ asset('home/images/themepost/img-03.jpg') }}" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventdetail.html">Back To School, Open Discussion</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="{{ asset('home/images/themepost/img-04.jpg') }}" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventslist.html">Make a Goal For Successful Your Life</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="{{ asset('home/images/themepost/img-01.jpg') }}" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventslist.html">Become a Proffesional Teacher</a></h3>

																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																			<div class="item">
																				<article class="tg-themepost">
																					<figure class="tg-featuredimg">
																						<a href="javascript:void(0);">
																							<img src="{{ asset('home/images/themepost/img-02.jpg') }}" alt="image description">
																						</a>
																					</figure>
																					<div class="tg-themepostcontent">
																						<ul class="tg-themeposttags">
																							<li><a href="javascript:void(0);">Management</a></li>
																							<li><a href="javascript:void(0);">Science</a></li>
																						</ul>
																						<div class="tg-themeposttitle">
																							<h3><a href="eventsgrid.html">One Day Crash Course on Skills Improvement</a></h3>
																						</div>
																						<ul class="tg-matadata">
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-user"></i>
																									<span>1205</span>
																								</a>
																							</li>
																							<li>
																								<a href="javascript:void(0);">
																									<i class="fa fa-comment-o"></i>
																									<span>1205</span>
																								</a>
																							</li>
																						</ul>
																						<span class="tg-pricebox"><a href="javascript:void(0);">$36/pm</a></span>
																					</div>
																				</article>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</li>

										<li class="menu-item">
											<a href="">Classroom</a>

										</li>
										<li class="menu-item-has-children">
											<a href="javascript:void(0);">Pages</a>
											<ul class="sub-menu">
												<li class="menu-item-has-children">
													<a href="javascript:void(0);">About University</a>
													<ul class="sub-menu">
														<li><a href="aboutcampuslife.html">Our Campus Life</a></li>
														<li><a href="abouthonorsawards.html">Our Honor &amp; Awards</a></li>
														<li><a href="aboutleadership.html">Our Leadership</a></li>
														<li><a href="aboutobjectives.html">OurObjectives</a></li>
														<li><a href="aboutouridentity.html">Our Identity</a></li>
														<li><a href="aboutrectormessage.html">Rector Message</a></li>
														<li><a href="aboutvisionmission.html">Our Missions</a></li>
													</ul>
												</li>
												<li class="menu-item-has-children">
													<a href="javascript:void(0);">News</a>
													<ul class="sub-menu">
														<li><a href="newslist.html">News List</a></li>
														<li><a href="newsgrid.html">News Grid</a></li>
														<li><a href="newsgridsidebar.html">News Grid Sidebar</a></li>
														<li><a href="newsdetail.html">News Detail</a></li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
									</div>
								</nav>
								<div class="tg-searchbox">
									<a id="tg-btnsearch" class="tg-btnsearch" href="javascript:void(0);"><i class="icon-magnifier"></i></a>
									<form class="tg-formtheme tg-formsearch">
										<fieldset><input type="search" name="search" class="form-control" placeholder="Start Your Search Here"></fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Home Slider Start
		*************************************-->
		<div id="tg-homeslider" class="tg-homeslider tg-homeslidervthree owl-carousel tg-btnround tg-haslayout">
			<div class="item">
				<figure>
					<img src="{{ asset('home/images/slider/img-08.jpg') }}" alt="image description">
					<figcaption class="tg-slidercontent">
						<div class="tg-slidercontentbox">
							<div class="container">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<h1>Offering!<span>Best Teaching Skills</span></h1>
										<a class="tg-btn" href="{{ route('dashboard') }}">Get Started</a>
									</div>
								</div>
							</div>
						</div>
					</figcaption>
				</figure>
			</div>
			<div class="item">
				<figure>
					<img src="{{ asset('home/images/slider/img-07.jpg') }}" alt="image description">
					<figcaption class="tg-slidercontent">
						<div class="tg-slidercontentbox">
							<div class="container">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<h1>Offering!<span>Best Teaching Skills</span></h1>
										<a class="tg-btn" href="{{ route('dashboard') }}">Get Started</a>
									</div>
								</div>
							</div>
						</div>
					</figcaption>
				</figure>
			</div>
			<div class="item">
				<figure>
					<img src="{{ asset('home/images/slider/img-09.jpg') }}" alt="image description">
					<figcaption class="tg-slidercontent">
						<div class="tg-slidercontentbox">
							<div class="container">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<h1>Offering!<span>Best Teaching Skills</span></h1>
										<a class="tg-btn" href="{{ route('dashboard') }}">Get Started</a>
									</div>
								</div>
							</div>
						</div>
					</figcaption>
				</figure>
			</div>
		</div>
		<div class="tg-tickerbox">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<span>Daily Alerts:</span>
						<div id="tg-ticker" class="tg-ticker owl-carousel">
							<div class="item">
								<div class="tg-description">
									<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et enim ad minim veniam, quis nostrud exercitation.</p>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">
					<div id="tg-twocolumns" class="tg-twocolumns">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<section class="tg-sectionspace tg-haslayout">
								<div class="tg-shortcode tg-welcomeandgreeting tg-welcomeandgreeting-v2">
									<figure><img src="{{ asset('home/images/img-03.jpg') }}" alt="image description"></figure>
									<div class="tg-shortcodetextbox">
										<h2>Welcome &amp; Greetings!</h2>
										<div class="tg-description">
											<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore et dolore amit agna aliqua enimnate minim veniam quis nostrud exercitation ullamco laboris nisi utiata ...</p>
										</div>
										<span class="tg-name">Prof. Donovan Bradburn</span>
										<span class="tg-designation">Vice Chancellor</span>
										<div class="tg-btnpluslogo">
											<a class="tg-btn" href="javascript:void(0);">read more</a>
											<strong class="tg-universitylogo"><a href="javascript:void(0);"><img src="{{ asset('home/images/logo2.png') }}" alt="image description"></a></strong>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
							<div id="tg-content" class="tg-content">
								<section class="tg-sectionspace tg-haslayout">
									<div class="tg-borderheading">
										<h2>Latest Events</h2>
									</div>
									<div class="tg-events">
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
												<article class="tg-themepost tg-eventpost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="{{ asset('home/images/events/img-08.jpg') }}" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>Tuesday, Apr 21, 2017</span>
																</a>
															</li>
														</ul>
														<div class="tg-themeposttitle">
															<h3><a href="javascript:void(0);">One Day Awareness Seminar on Future Focus</a></h3>
														</div>
														<div class="tg-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
														</div>
													</div>
												</article>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
												<article class="tg-themepost tg-eventpost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="{{ asset('home/images/events/img-09.jpg') }}" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>Tuesday, Apr 21, 2017</span>
																</a>
															</li>
														</ul>
														<div class="tg-themeposttitle">
															<h3><a href="javascript:void(0);">International Conference on Material Science 2017</a></h3>
														</div>
														<div class="tg-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
														</div>
													</div>
												</article>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
												<article class="tg-themepost tg-eventpost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="{{ asset('home/images/events/img-10.jpg') }}" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>Tuesday, Apr 21, 2017</span>
																</a>
															</li>
														</ul>
														<div class="tg-themeposttitle">
															<h3><a href="javascript:void(0);">Biggest Reality Virtual University Convocation 2017</a></h3>
														</div>
														<div class="tg-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
														</div>
													</div>
												</article>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
												<article class="tg-themepost tg-eventpost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="{{ asset('home/images/events/img-11.jpg') }}" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>Tuesday, Apr 21, 2017</span>
																</a>
															</li>
														</ul>
														<div class="tg-themeposttitle">
															<h3><a href="javascript:void(0);">Launching Best Concept Motorbike for Abnormal People</a></h3>
														</div>
														<div class="tg-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
														</div>
													</div>
												</article>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
												<article class="tg-themepost tg-eventpost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="{{ asset('home/images/events/img-12.jpg') }}" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>Tuesday, Apr 21, 2017</span>
																</a>
															</li>
														</ul>
														<div class="tg-themeposttitle">
															<h3><a href="javascript:void(0);">Result Announcement for Fresh Graduates 2017</a></h3>
														</div>
														<div class="tg-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
														</div>
													</div>
												</article>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
												<article class="tg-themepost tg-eventpost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="{{ asset('home/images/events/img-13.jpg') }}" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>Tuesday, Apr 21, 2017</span>
																</a>
															</li>
														</ul>
														<div class="tg-themeposttitle">
															<h3><a href="javascript:void(0);">Outdoor Dinner with Reputed Prof. Darwin Mccurdy</a></h3>
														</div>
														<div class="tg-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
														</div>
													</div>
												</article>
											</div>
										</div>
									</div>
								</section>
								<section class="tg-sectionspace tg-haslayout">
									<div class="tg-latestnews">
										<div class="tg-borderheading">
											<h2>Latest News</h2>
										</div>
										<div id="tg-latestnewsslider" class="tg-latestnewsslider owl-carousel tg-posts">
											<div class="item">
												<article class="tg-themepost tg-newspost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="{{ asset('home/images/themepost/img-05.jpg') }}" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>Tuesday, Apr 21, 2017</span>
																</a>
															</li>
														</ul>
														<div class="tg-themeposttitle">
															<h3><a href="javascript:void(0);">Allotment of Hostel Accommodation 2017!</a></h3>
														</div>
														<div class="tg-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
														</div>
													</div>
												</article>
											</div>
											<div class="item">
												<article class="tg-themepost tg-newspost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="{{ asset('home/images/themepost/img-06.jpg') }}" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>Tuesday, Apr 21, 2017</span>
																</a>
															</li>
														</ul>
														<div class="tg-themeposttitle">
															<h3><a href="javascript:void(0);">Notification of Mid Term Examinations</a></h3>
														</div>
														<div class="tg-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
														</div>
													</div>
												</article>
											</div>
											<div class="item">
												<article class="tg-themepost tg-newspost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="{{ asset('home/images/themepost/img-07.jpg') }}" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>Tuesday, Apr 21, 2017</span>
																</a>
															</li>
														</ul>
														<div class="tg-themeposttitle">
															<h3><a href="javascript:void(0);">Invites Application for Admission in Designing Program</a></h3>
														</div>
														<div class="tg-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
														</div>
													</div>
												</article>
											</div>
											<div class="item">
												<article class="tg-themepost tg-newspost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="{{ asset('home/images/themepost/img-05.jpg') }}" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>Tuesday, Apr 21, 2017</span>
																</a>
															</li>
														</ul>
														<div class="tg-themeposttitle">
															<h3><a href="javascript:void(0);">Allotment of Hostel Accommodation 2017!</a></h3>
														</div>
														<div class="tg-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
														</div>
													</div>
												</article>
											</div>
											<div class="item">
												<article class="tg-themepost tg-newspost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="{{ asset('home/images/themepost/img-06.jpg') }}" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>Tuesday, Apr 21, 2017</span>
																</a>
															</li>
														</ul>
														<div class="tg-themeposttitle">
															<h3><a href="javascript:void(0);">Notification of Mid Term Examinations</a></h3>
														</div>
														<div class="tg-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
														</div>
													</div>
												</article>
											</div>
											<div class="item">
												<article class="tg-themepost tg-newspost">
													<figure class="tg-featuredimg">
														<a href="javascript:void(0);">
															<img src="{{ asset('home/images/themepost/img-07.jpg') }}" alt="image description">
														</a>
													</figure>
													<div class="tg-themepostcontent">
														<ul class="tg-matadata">
															<li>
																<a href="javascript:void(0);">
																	<i class="fa fa-calendar"></i>
																	<span>Tuesday, Apr 21, 2017</span>
																</a>
															</li>
														</ul>
														<div class="tg-themeposttitle">
															<h3><a href="javascript:void(0);">Invites Application for Admission in Designing Program</a></h3>
														</div>
														<div class="tg-description">
															<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
														</div>
													</div>
												</article>
											</div>
										</div>
										<div class="tg-btnsbox">
											<a class="tg-btn" href="javascript:void(0);">view all news</a>
										</div>
									</div>
								</section>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
							<aside id="tg-sidebar" class="tg-sidebar">
								<div class="tg-widget tg-widgetnoticeboard">
									<div class="tg-widgettitle">
										<h3>Notice Board</h3>
									</div>
									<div class="tg-widgetcontent">
										<ul>
											<li>
												<a href="javascript:void(0);">Adipisicing elit sed dotas eiusmod tempor incididunt utae labore etiat dolore magna aliqua enim ad minim veniam.</a>
											</li>
											<li>
												<a href="javascript:void(0);">Labore etiat dolore magna aliqua enim ad minim veniam.</a>
											</li>
											<li>
												<a href="javascript:void(0);">Duis aute irure dolor in reprehenderit.</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="tg-widget tg-widgetadmissionform">
									<div class="tg-widgetcontent">
										<h3>Admission Form 2017</h3>
										<div class="tg-description">
											<p>Quistane nostrud exertation ulamco laboris nisi ut aliquip ex ea comodo consequat aute irure dolor.</p>
										</div>
										<a class="tg-btn tg-btnicon" href="javascript:void(0);">
											<i class="fa fa-file-pdf-o"></i>
											<span>Download PDF</span>
										</a>
									</div>
								</div>
								<div class="tg-widget tg-widgetsearchcourse">
									<div class="tg-widgettitle">
										<h3>Search Course</h3>
									</div>
									<div class="tg-widgetcontent">
										<form class="tg-formtheme tg-formsearchcourse">
											<fieldset>
												<div class="tg-inputwithicon">
													<i class="icon-book"></i>
													<input type="search" name="keyword" class="form-control" placeholder="Keyword">
												</div>
												<div class="tg-inputwithicon">
													<i class="icon-layers"></i>
													<span class="tg-select">
														<select>
															<option value="">Course Category</option>
															<option value="">Course Category</option>
															<option value="">Course Category</option>
														</select>
													</span>
												</div>
												<button type="submit" class="tg-btn">search now</button>
												<a href="javascript:void(0);">View All Courses</a>
											</fieldset>
										</form>
									</div>
								</div>
								<div class="tg-widget tg-widgetcampuses">
									<div class="tg-widgettitle">
										<h3>Campuses</h3>
									</div>
									<div class="tg-widgetcontent">
										<div id="tg-campusslider" class="tg-campusslider owl-carousel tg-campuses">
											<div class="item">
												<div class="tg-campus">
													<div class="tg-themepost">
														<figure class="tg-othercampusimg">
															<img src="{{ asset('home/images/campuses/img-04.jpg') }}" alt="image description">
														</figure>
													</div>
													<ul>
														<li>
															<i class="icon-location"></i>
															<address>Abc, xyz street London, HG521A</address>
														</li>
														<li>
															<i class="icon-phone-handset"></i>
															<span>0800 - 1234 - 562 - 6</span>
														</li>
														<li>
															<i class="icon-printer"></i>
															<span>+4 1234 567 - 9</span>
														</li>
														<li>
															<a href="mailto:query@domain.com">
																<i class="icon-envelope"></i>
																<span>query@domain.com</span>
															</a>
														</li>
														<li>
															<a href="mailto:complaint@domain.com">
																<i class="icon-construction"></i>
																<span>complaint@domain.com</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</aside>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-signupbox">
				<div class="container">
					<div class="tg-signuptextbox">
						<h3>Free Signup!</h3>
						<div class="tg-description"><p>Bring your child for we have a n environment for all.</p></div>
					</div>
				</div>
			</div>
			<div class="tg-footermiddlebar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-widget tg-widgetcompanyinfo">
								<div class="tg-widgetcontent">
									<strong class="tg-logo"><a href="index-2.html"><img src="{{ asset('home/images/log') }}" alt="UNSS"></a></strong>
									<div class="tg-description">
										<p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href="javascript:void(0);">Read More</a></p>
									</div>
									<ul class="tg-infolist">
										<li>
											<i class="icon-location"></i>
											<address>Abc, xyz street London, HG521A</address>
										</li>
										<li>
											<i class="icon-phone-handset"></i>
											<span>0800 - 1234 - 562 - 6</span>
										</li>
										<li>
											<i class="icon-printer"></i>
											<span>+4 1234 567 - 9</span>
										</li>
										<li>
											<a href="mailto:query@domain.com">
												<i class="icon-envelope"></i>
												<span>query@domain.com</span>
											</a>
										</li>
									</ul>
									<ul class="tg-socialicons">
										<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
										<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
										<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
										<li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
										<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-widget tg-widgettweets">
								<div class="tg-widgettitle">
									<h3>Latest Tweets</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										<li>
											<p>No feed</p>

										</li>
										<li>
											<p>No feed</p>

										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-widget tg-widgetcoursecategories">
								<div class="tg-widgettitle">
									<h3>Classrooms</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										<li><a href="javascript:void(0);">Perspiciatis ate</a></li>
										<li><a href="javascript:void(0);">Aomnis isteat</a></li>
										<li><a href="javascript:void(0);">Canatus error</a></li>
										<li><a href="javascript:void(0);">Voluptatem clu</a></li>
										<li><a href="javascript:void(0);">Commodo</a></li>

									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-widget tg-widgetflickrgallery">
								<div class="tg-widgettitle">
									<h3>Flickr Gallery</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="{{ asset('home/images/glance/img-10.jpg') }}" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="{{ asset('home/images/glance/img-11.jpg') }}" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="{{ asset('home/images/glance/img-12.jpg') }}" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="{{ asset('home/images/glance/img-13.jpg') }}" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="{{ asset('home/images/glance/img-14.jpg') }}" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="{{ asset('home/images/glance/img-15.jpg') }}" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="{{ asset('home/images/glance/img-16.jpg') }}" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="{{ asset('home/images/glance/img-17.jpg') }}" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="{{ asset('home/images/glance/img-18.jpg') }}" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="{{ asset('home/images/glance/img-19.jpg') }}" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="{{ asset('home/images/glance/img-20.jpg') }}" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="{{ asset('home/images/glance/img-21.jpg') }}" alt="image description"></a>
												<figcaption><a href="#"><i class="fa fa-mail-forward"></i></a></figcaption>
											</figure>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<span class="tg-copyright"><a target="_blank" href="https://www.templateshub.net">University of Nigeria Secondary School</a></span>
							<nav class="tg-addnav">
								<ul>
									<li><a href="javascript:void(0);">Privacy Policy</a></li>
									<li><a href="javascript:void(0);">Term and Conditions</a></li>
									<li><a href="javascript:void(0);">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="{{ asset('home/js/vendor/jquery-library.js') }}"></script>
	<script src="{{ asset('home/js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ asset('home/js/mapclustering/data.json') }}"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="{{ asset('home/js/mapclustering/markerclusterer.min.js') }}"></script>
	<script src="{{ asset('home/js/mapclustering/infobox.js') }}"></script>
	<script src="{{ asset('home/js/mapclustering/map.js') }}"></script>
	<script src="{{ asset('home/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('home/js/isotope.pkgd.js') }}"></script>
	<script src="{{ asset('home/js/prettyPhoto.js') }}"></script>
	<script src="{{ asset('home/js/countdown.js') }}"></script>
	<script src="{{ asset('home/js/collapse.js') }}"></script>
	<script src="{{ asset('home/js/moment.js') }}"></script>
	<script src="{{ asset('home/js/gmap3.js') }}"></script>
	<script src="{{ asset('home/js/main.js') }}"></script>
</body>


</html>
