<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 4.1.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Dashboard</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css">
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->
<link href="assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout5/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="assets/admin/layout5/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<body class="page-header-fixed page-quick-sidebar-over-content">

	<!-- BEGIN MAIN LAYOUT -->
	<div class="wrapper">
		<!-- Header BEGIN -->
	    <header class="page-header">
	        <nav class="navbar mega-menu" role="navigation">
	            <div class="container-fluid">
	                <div class="clearfix navbar-fixed-top">
		                <!-- Brand and toggle get grouped for better mobile display -->
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="toggle-icon">
		                        <span class="icon-bar"></span>
		                        <span class="icon-bar"></span>
		                        <span class="icon-bar"></span>
		                    </span>
		                </button>
		                <!-- End Toggle Button -->

	                	<!-- BEGIN LOGO -->
	                    <a id="index" class="page-logo" href="index.html">
	                        <img src="assets/admin/layout5/img/logo.png" alt="Logo">
	                    </a>
	                	<!-- END LOGO -->

		                <!-- BEGIN SEARCH -->
		                <form class="search" action="extra_search.html" method="GET">
		                    <input type="name" class="form-control" name="query" placeholder="Search...">
		                    <a href="javascript:;" class="btn submit"><i class="fa fa-search"></i></a>
		                </form>
		                <!-- END SEARCH -->

		                <!-- BEGIN TOPBAR ACTIONS -->
		                <div class="topbar-actions">
		                	<!-- BEGIN GROUP NOTIFICATION -->
							<div class="btn-group-notification btn-group" id="header_notification_bar">
								<button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
									<i class="icon-bell"></i>
									<span class="badge">7</span>
								</button>
								<ul class="dropdown-menu-v2">
									<li class="external">
										<h3><span class="bold">12 pending</span> notifications</h3>
										<a href="#">view all</a>
									</li>
									<li>
										<ul class="dropdown-menu-list scroller" style="height: 250px; padding: 0;" data-handle-color="#637283">
											<li>
												<a href="javascript:;">
													<span class="details">
														<span class="label label-sm label-icon label-success">
															<i class="fa fa-plus"></i>
														</span>
														New user registered.
													</span>
													<span class="time">just now</span>
												</a>
											</li>
											<li>
												<a href="javascript:;">
													<span class="details">
														<span class="label label-sm label-icon label-danger">
															<i class="fa fa-bolt"></i>
														</span>
														Server #12 overloaded.
													</span>
													<span class="time">3 mins</span>
												</a>
											</li>
											<li>
												<a href="javascript:;">
													<span class="details">
														<span class="label label-sm label-icon label-warning">
															<i class="fa fa-bell-o"></i>
														</span>
														Server #2 not responding.
													</span>
													<span class="time">10 mins</span>
												</a>
											</li>
											<li>
												<a href="javascript:;">
													<span class="details">
														<span class="label label-sm label-icon label-info">
															<i class="fa fa-bullhorn"></i>
														</span>
														Application error.
													</span>
													<span class="time">14 hrs</span>
												</a>
											</li>
											<li>
												<a href="javascript:;">
													<span class="details">
														<span class="label label-sm label-icon label-danger">
															<i class="fa fa-bolt"></i>
														</span>
														Database overloaded 68%.
													</span>
													<span class="time">2 days</span>
												</a>
											</li>
											<li>
												<a href="javascript:;">
													<span class="details">
														<span class="label label-sm label-icon label-danger">
															<i class="fa fa-bolt"></i>
														</span>
													A 	user IP blocked.
												</span>
													<span class="time">3 days</span>
												</a>
											</li>
											<li>
												<a href="javascript:;">
													<span class="details">
														<span class="label label-sm label-icon label-warning">
															<i class="fa fa-bell-o"></i>
														</span>
														Storage Server #4 not responding dfdfdfd.
													</span>
													<span class="time">4 days</span>
												</a>
											</li>
											<li>
												<a href="javascript:;">
													<span class="details">
														<span class="label label-sm label-icon label-info">
															<i class="fa fa-bullhorn"></i>
														</span>
														System Error.
													</span>
													<span class="time">5 days</span>
												</a>
											</li>
											<li>
												<a href="javascript:;">
													<span class="details">
														<span class="label label-sm label-icon label-danger">
															<i class="fa fa-bolt"></i>
														</span>
														Storage server failed.
													</span>
													<span class="time">9 days</span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
		                	<!-- END GROUP NOTIFICATION -->
							<!-- BEGIN USER PROFILE -->
			                <div class="btn-group-img btn-group">
								<button type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
									<span>Hi, Marcus</span>
									<img src="../../assets/admin/layout5/img/avatar1.jpg" alt="">
								</button>
								<ul class="dropdown-menu-v2" role="menu">
									<li class="active">
										<a href="#">My Profile <span class="badge badge-danger">1</span> </a>
									</li>
									<li>
										<a href="#">My Inbox <span class="badge badge-info">3</span> </a>
									</li>
									<li>
										<a href="#">My Tasks</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="#">Lock Screen</a>
									</li>
									<li>
										<a href="#">Sign Out</a>
									</li>
								</ul>
							</div>
							<!-- END USER PROFILE -->

							<!-- BEGIN QUICK SIDEBAR TOGGLER -->
			                <button type="button" class="quick-sidebar-toggler" data-toggle="collapse">
			                    <span class="sr-only">Toggle Quick Sidebar</span>
			                    <i class="icon-logout"></i>
			                </button>
			                <!-- END QUICK SIDEBAR TOGGLER -->
						</div>
		                <!-- END TOPBAR ACTIONS -->
	                </div>

	                <!-- Collect the nav links, forms, and other content for toggling -->
	                <div class="nav-collapse collapse navbar-collapse navbar-responsive-collapse">
	                    <ul class="nav navbar-nav text-uppercase">
	                        <li class="dropdown dropdown-fw open selected">
	                            <a href="javascript:;">
	                            	Application
	                            </a>
	                           	<ul class="dropdown-menu dropdown-menu-fw">


			                        </li>
	                            </ul>
	                        </li>
	                        <li class="dropdown dropdown-fw">
	                            <a href="javascript:;">
	                            	Reports
	                            </a>
			                	<ul class="dropdown-menu dropdown-menu-fw">

	                            </ul>
	                        </li>
	                        <li class="dropdown dropdown-fw">
	                            <a href="javascript:;">
	                            	Members
	                            </a>
			                	<ul class="dropdown-menu dropdown-menu-fw">

	                            </ul>
	                        </li>
	                        <li class="dropdown dropdown-fw">
	                            <a href="javascript:;">
	                            	Templates
	                            </a>
			                	<ul class="dropdown-menu dropdown-menu-fw">

	                            </ul>
	                        </li>

	                    </ul>
	                </div>
	                <!-- END NAVBAR COLLAPSE -->
	            </div>
	            <!--/container-->
	        </nav>
	    </header>
		<!-- Header END -->

		<!-- PAGE CONTENT BEGIN -->
	    <div class="container-fluid">
	    	<div class="page-content">
		        <!-- BEGIN BREADCRUMBS -->
	    		<div class="breadcrumbs">
	    			<h1>Application Dashboard</h1>
		    		<ol class="breadcrumb">
		                <li><a href="#">Home</a></li>
		                <li><a href="#">Application</a></li>
		                <li class="active">Dashboard</li>
		            </ol>
		        </div>
		        <!-- END BREADCRUMBS -->

				<!-- BEGIN PAGE SIDEBAR -->
				<div class="page-sidebar">
					<nav class="navbar" role="navigation">
			            <!-- Brand and toggle get grouped for better mobile display -->
			            <div class="clearfix">
			                <!-- Toggle Button -->
			                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".page-siderbar-collapse">
			                    <span class="sr-only">Toggle navigation</span>
			                    <span class="toggle-icon">
			                        <span class="icon-bar"></span>
			                        <span class="icon-bar"></span>
			                        <span class="icon-bar"></span>
			                    </span>
			                </button>
			                <!-- End Toggle Button -->
			            </div>

			            <!-- Collect the nav links, forms, and other content for toggling -->
			            <div class="nav-collapse collapse navbar-collapse page-siderbar-collapse">
		                    <ul class="nav navbar-nav margin-bottom-35">
		                        <li class="active">
		                            <a href="index.html">
		                            	<i class="icon-home"></i>
		                            	Home
		                            </a>
		                        </li>
		                        <li>
		                            <a href="#">
		                            	<i class="icon-note "></i>
		                            	Reports
		                            </a>
		                        </li>
		                        <li>
		                            <a href="#">
		                            	<i class="icon-user"></i>
		                            	User Activity
		                            </a>
		                        </li>
		                        <li>
		                            <a href="#">
		                            	<i class="icon-basket "></i>
		                            	Marketplace
		                            </a>
		                        </li>
		                        <li>
		                            <a href="#">
		                            	<i class="icon-bell"></i>
		                            	Templates
		                            </a>
		                        </li>
		                    </ul>

						    <h3>Quick Actions</h3>

						    <ul class="nav navbar-nav">
			                    <li>
			                        <a href="#">
			                        	<i class="icon-envelope "></i>
			                        	Inbox
			                        	<label class="label label-danger">New</label>
			                        </a>
			                    </li>
			                    <li>
			                        <a href="#">
			                        	<i class="icon-paper-clip "></i>
			                        	Task
			                        </a>
			                    </li>
			                    <li>
			                        <a href="#">
			                        	<i class="icon-star"></i>
			                        	Projects
			                        </a>
			                    </li>
			                    <li>
			                        <a href="#">
			                        	<i class="icon-pin"></i>
			                        	Events
			                        	<span class="badge badge-success">2</span>
			                        </a>
			                    </li>
			                </ul>
			            </div>

			        </nav>
			    </div>
			    <!-- END PAGE SIDEBAR -->

			    <!-- BEGIN PAGE CONTAINER -->
			    <div class="page-container">


		    		<div class="row">
		    			<div class="col-md-6">
		    				<!-- BEGIN Portlet PORTLET-->
							<div class="portlet light bordered">
								<div class="portlet-title">
									<div class="caption font-dark">
										<span class="caption-subject bold uppercase">Distance</span>
										<span class="caption-helper">distance stats...</span>
									</div>
									<div class="actions">
										<a href="#" class="btn btn-circle btn-default btn-sm">
										<i class="fa fa-pencil"></i> Edit </a>
										<a href="#" class="btn btn-circle btn-default btn-sm">
										<i class="fa fa-plus"></i> Add </a>
										<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#">
										</a>
									</div>
								</div>
								<div class="portlet-body">
	    							<div id="CSSAnimationChart" class="CSSAnimationChart"></div>
								</div>
							</div>
							<!-- END PORTLET-->
		    			</div>
		    			<div class="col-md-6">
		    				<!-- BEGIN PORTLET-->
							<div class="portlet light bordered">
								<div class="portlet-title">
									<div class="caption">
										<span class="caption-subject bold uppercase font-red-sunglo">Map</span>
										<span class="caption-helper">flight stats...</span>
									</div>
									<div class="actions">
										<a class="btn btn-circle btn-icon-only btn-default" href="#">
										<i class="icon-cloud-upload"></i>
										</a>
										<a class="btn btn-circle btn-icon-only btn-default" href="#">
										<i class="icon-wrench"></i>
										</a>
										<a class="btn btn-circle btn-icon-only btn-default" href="#">
										<i class="icon-trash"></i>
										</a>
										<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#">
										</a>
									</div>
								</div>
								<div class="portlet-body">
	    							<div id="mapChart" class="mapChart"></div>
								</div>
							</div>
							<!-- END PORTLET-->
		    			</div>
		    		</div>

		    		<div class="row">
						<div class="col-md-6">
							<!-- BEGIN PORTLET-->
							<div class="portlet light bordered">
								<div class="portlet-title">
									<div class="caption caption-md font-blue">
										<i class="icon-bar-chart theme-font hide"></i>
										<span class="caption-subject theme-font bold uppercase">Sales Summary</span>
										<span class="caption-helper hide">weekly stats...</span>
									</div>
									<div class="actions">
										<div class="btn-group btn-group-devided" data-toggle="buttons">
											<label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
											<input type="radio" name="options" class="toggle" id="option1">Today</label>
											<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
											<input type="radio" name="options" class="toggle" id="option2">Week</label>
											<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
											<input type="radio" name="options" class="toggle" id="option2">Month</label>
										</div>
									</div>
								</div>
								<div class="portlet-body">
									<div class="row list-separated">
										<div class="col-md-3 col-sm-3 col-xs-6">
											<div class="font-grey-mint font-sm">
												 Total Sales
											</div>
											<div class="uppercase font-hg font-red-flamingo">
												 13,760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-6">
											<div class="font-grey-mint font-sm">
												 Revenue
											</div>
											<div class="uppercase font-hg theme-font">
												 4,760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-6">
											<div class="font-grey-mint font-sm">
												 Expenses
											</div>
											<div class="uppercase font-hg font-purple">
												 11,760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-6">
											<div class="font-grey-mint font-sm">
												 Growth
											</div>
											<div class="uppercase font-hg font-blue-sharp">
												 9,760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</div>
									</div>
									<ul class="list-separated list-inline-xs hide">
										<li>
											<div class="font-grey-mint font-sm">
												 Total Sales
											</div>
											<div class="uppercase font-hg font-red-flamingo">
												 13,760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</li>
										<li>
										</li>
										<li class="border">
											<div class="font-grey-mint font-sm">
												 Revenue
											</div>
											<div class="uppercase font-hg theme-font">
												 4,760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</li>
										<li class="divider">
										</li>
										<li>
											<div class="font-grey-mint font-sm">
												 Expenses
											</div>
											<div class="uppercase font-hg font-purple">
												 11,760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</li>
										<li class="divider">
										</li>
										<li>
											<div class="font-grey-mint font-sm">
												 Growth
											</div>
											<div class="uppercase font-hg font-blue-sharp">
												 9,760 <span class="font-lg font-grey-mint">$</span>
											</div>
										</li>
									</ul>
									<div id="sales_statistics" class="portlet-body-morris-fit morris-chart" style="height: 260px">
									</div>
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
						<div class="col-md-6">
							<!-- BEGIN PORTLET-->
							<div class="portlet light bordered">
								<div class="portlet-title">
									<div class="caption caption-md font-red-sunglo">
										<i class="icon-bar-chart theme-font hide"></i>
										<span class="caption-subject theme-font bold uppercase">Member Activity</span>
										<span class="caption-helper hide">weekly stats...</span>
									</div>
									<div class="actions">
										<div class="btn-group btn-group-devided" data-toggle="buttons">
											<label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
											<input type="radio" name="options" class="toggle" id="option1">Today</label>
											<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
											<input type="radio" name="options" class="toggle" id="option2">Week</label>
											<label class="btn btn-transparent grey-salsa btn-circle btn-sm">
											<input type="radio" name="options" class="toggle" id="option2">Month</label>
										</div>
									</div>
								</div>
								<div class="portlet-body">
									<div class="row number-stats margin-bottom-30">
										<div class="col-md-6">
											<div class="stat-left">
												<div class="stat-chart">
													<!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
													<div id="sparkline_bar"></div>
												</div>
												<div class="stat-number">
													<div class="title">
														 Total
													</div>
													<div class="number">
														 2460
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="stat-right">
												<div class="stat-chart">
													<!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
													<div id="sparkline_bar2"></div>
												</div>
												<div class="stat-number">
													<div class="title">
														 New
													</div>
													<div class="number">
														 719
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="table-scrollable table-scrollable-borderless">
										<table class="table table-hover table-light">
										<thead>
										<tr class="uppercase">
											<th colspan="2">
												 MEMBER
											</th>
											<th>
												 Earnings
											</th>
											<th>
												 CASES
											</th>
											<th>
												 CLOSED
											</th>
											<th>
												 RATE
											</th>
										</tr>
										</thead>
										<tr>
											<td class="fit">
												<img class="user-pic" src="../../assets/admin/layout3/img/avatar4.jpg">
											</td>
											<td>
												<a href="javascript:;" class="primary-link">Brain</a>
											</td>
											<td>
												 $345
											</td>
											<td>
												 45
											</td>
											<td>
												 124
											</td>
											<td>
												<span class="bold theme-font">80%</span>
											</td>
										</tr>
										<tr>
											<td class="fit">
												<img class="user-pic" src="../../assets/admin/layout3/img/avatar5.jpg">
											</td>
											<td>
												<a href="javascript:;" class="primary-link">Nick</a>
											</td>
											<td>
												 $560
											</td>
											<td>
												 12
											</td>
											<td>
												 24
											</td>
											<td>
												<span class="bold theme-font">67%</span>
											</td>
										</tr>
										<tr>
											<td class="fit">
												<img class="user-pic" src="../../assets/admin/layout3/img/avatar6.jpg">
											</td>
											<td>
												<a href="javascript:;" class="primary-link">Tim</a>
											</td>
											<td>
												 $1,345
											</td>
											<td>
												 450
											</td>
											<td>
												 46
											</td>
											<td>
												<span class="bold theme-font">98%</span>
											</td>
										</tr>
										<tr>
											<td class="fit">
												<img class="user-pic" src="../../assets/admin/layout3/img/avatar7.jpg">
											</td>
											<td>
												<a href="javascript:;" class="primary-link">Tom</a>
											</td>
											<td>
												 $645
											</td>
											<td>
												 50
											</td>
											<td>
												 89
											</td>
											<td>
												<span class="bold theme-font">58%</span>
											</td>
										</tr>
										</table>
									</div>
								</div>
							</div>
							<!-- END PORTLET-->
						</div>
					</div>




				<!-- END PAGE CONTAINER -->
	    	</div>
			<!-- PAGE CONTENT END -->

			<!-- BEGIN QUICK SIDEBAR -->
			<a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-login"></i></a>
			<div class="page-quick-sidebar-wrapper">
				<div class="page-quick-sidebar">
					<div class="nav-justified">
						<ul class="nav nav-tabs nav-justified">
							<li class="active">
								<a href="#quick_sidebar_tab_1" data-toggle="tab">
								Users <span class="badge badge-danger">2</span>
								</a>
							</li>
							<li>
								<a href="#quick_sidebar_tab_2" data-toggle="tab">
								Alerts <span class="badge badge-success">7</span>
								</a>
							</li>
							<li class="dropdown">
								<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
								More<i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu pull-right" role="menu">
									<li>
										<a href="#quick_sidebar_tab_3" data-toggle="tab">
										<i class="icon-bell"></i> Alerts </a>
									</li>
									<li>
										<a href="#quick_sidebar_tab_3" data-toggle="tab">
										<i class="icon-info"></i> Notifications </a>
									</li>
									<li>
										<a href="#quick_sidebar_tab_3" data-toggle="tab">
										<i class="icon-speech"></i> Activities </a>
									</li>
									<li class="divider">
									</li>
									<li>
										<a href="#quick_sidebar_tab_3" data-toggle="tab">
										<i class="icon-settings"></i> Settings </a>
									</li>
								</ul>
							</li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
								<div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
									<h3 class="list-heading">Staff</h3>
									<ul class="media-list list-items">
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">8</span>
											</div>
											<img class="media-object" src="../../assets/admin/layout/img/avatar3.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Bob Nilson</h4>
												<div class="media-heading-sub">
													 Project Manager
												</div>
											</div>
										</li>
										<li class="media">
											<img class="media-object" src="../../assets/admin/layout/img/avatar1.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Nick Larson</h4>
												<div class="media-heading-sub">
													 Art Director
												</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-danger">3</span>
											</div>
											<img class="media-object" src="../../assets/admin/layout/img/avatar4.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Deon Hubert</h4>
												<div class="media-heading-sub">
													 CTO
												</div>
											</div>
										</li>
										<li class="media">
											<img class="media-object" src="../../assets/admin/layout/img/avatar2.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Ella Wong</h4>
												<div class="media-heading-sub">
													 CEO
												</div>
											</div>
										</li>
									</ul>
									<h3 class="list-heading">Customers</h3>
									<ul class="media-list list-items">
										<li class="media">
											<div class="media-status">
												<span class="badge badge-warning">2</span>
											</div>
											<img class="media-object" src="../../assets/admin/layout/img/avatar6.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Lara Kunis</h4>
												<div class="media-heading-sub">
													 CEO, Loop Inc
												</div>
												<div class="media-heading-small">
													 Last seen 03:10 AM
												</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="label label-sm label-success">new</span>
											</div>
											<img class="media-object" src="../../assets/admin/layout/img/avatar7.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Ernie Kyllonen</h4>
												<div class="media-heading-sub">
													 Project Manager,<br>
													 SmartBizz PTL
												</div>
											</div>
										</li>
										<li class="media">
											<img class="media-object" src="../../assets/admin/layout/img/avatar8.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Lisa Stone</h4>
												<div class="media-heading-sub">
													 CTO, Keort Inc
												</div>
												<div class="media-heading-small">
													 Last seen 13:10 PM
												</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-success">7</span>
											</div>
											<img class="media-object" src="../../assets/admin/layout/img/avatar9.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Deon Portalatin</h4>
												<div class="media-heading-sub">
													 CFO, H&D LTD
												</div>
											</div>
										</li>
										<li class="media">
											<img class="media-object" src="../../assets/admin/layout/img/avatar10.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Irina Savikova</h4>
												<div class="media-heading-sub">
													 CEO, Tizda Motors Inc
												</div>
											</div>
										</li>
										<li class="media">
											<div class="media-status">
												<span class="badge badge-danger">4</span>
											</div>
											<img class="media-object" src="../../assets/admin/layout/img/avatar11.jpg" alt="...">
											<div class="media-body">
												<h4 class="media-heading">Maria Gomez</h4>
												<div class="media-heading-sub">
													 Manager, Infomatic Inc
												</div>
												<div class="media-heading-small">
													 Last seen 03:10 AM
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="page-quick-sidebar-item">
									<div class="page-quick-sidebar-chat-user">
										<div class="page-quick-sidebar-nav">
											<a href="javascript:;" class="page-quick-sidebar-back-to-list"><i class="icon-arrow-left"></i>Back</a>
										</div>
										<div class="page-quick-sidebar-chat-user-messages">
											<div class="post out">
												<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
												<div class="message">
													<span class="arrow"></span>
													<a href="javascript:;" class="name">Bob Nilson</a>
													<span class="datetime">20:15</span>
													<span class="body">
													When could you send me the report ? </span>
												</div>
											</div>
											<div class="post in">
												<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
												<div class="message">
													<span class="arrow"></span>
													<a href="javascript:;" class="name">Ella Wong</a>
													<span class="datetime">20:15</span>
													<span class="body">
													Its almost done. I will be sending it shortly </span>
												</div>
											</div>
											<div class="post out">
												<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
												<div class="message">
													<span class="arrow"></span>
													<a href="javascript:;" class="name">Bob Nilson</a>
													<span class="datetime">20:15</span>
													<span class="body">
													Alright. Thanks! :) </span>
												</div>
											</div>
											<div class="post in">
												<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
												<div class="message">
													<span class="arrow"></span>
													<a href="javascript:;" class="name">Ella Wong</a>
													<span class="datetime">20:16</span>
													<span class="body">
													You are most welcome. Sorry for the delay. </span>
												</div>
											</div>
											<div class="post out">
												<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
												<div class="message">
													<span class="arrow"></span>
													<a href="javascript:;" class="name">Bob Nilson</a>
													<span class="datetime">20:17</span>
													<span class="body">
													No probs. Just take your time :) </span>
												</div>
											</div>
											<div class="post in">
												<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
												<div class="message">
													<span class="arrow"></span>
													<a href="javascript:;" class="name">Ella Wong</a>
													<span class="datetime">20:40</span>
													<span class="body">
													Alright. I just emailed it to you. </span>
												</div>
											</div>
											<div class="post out">
												<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
												<div class="message">
													<span class="arrow"></span>
													<a href="javascript:;" class="name">Bob Nilson</a>
													<span class="datetime">20:17</span>
													<span class="body">
													Great! Thanks. Will check it right away. </span>
												</div>
											</div>
											<div class="post in">
												<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg"/>
												<div class="message">
													<span class="arrow"></span>
													<a href="javascript:;" class="name">Ella Wong</a>
													<span class="datetime">20:40</span>
													<span class="body">
													Please let me know if you have any comment. </span>
												</div>
											</div>
											<div class="post out">
												<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg"/>
												<div class="message">
													<span class="arrow"></span>
													<a href="javascript:;" class="name">Bob Nilson</a>
													<span class="datetime">20:17</span>
													<span class="body">
													Sure. I will check and buzz you if anything needs to be corrected. </span>
												</div>
											</div>
										</div>
										<div class="page-quick-sidebar-chat-user-form">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Type a message here...">
												<div class="input-group-btn">
													<button type="button" class="btn blue"><i class="icon-paper-clip"></i></button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
								<div class="page-quick-sidebar-alerts-list">
									<h3 class="list-heading">General</h3>
									<ul class="feeds list-items">
										<li>
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-info">
															<i class="fa fa-shopping-cart"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 New order received with <span class="label label-sm label-danger">
															Reference Number: DR23923 </span>
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 30 mins
												</div>
											</div>
										</li>
										<li>
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-success">
															<i class="fa fa-user"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 You have 5 pending membership that requires a quick review.
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 24 mins
												</div>
											</div>
										</li>
										<li>
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-danger">
															<i class="fa fa-bell-o"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 Web server hardware needs to be upgraded. <span class="label label-sm label-warning">
															Overdue </span>
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 2 hours
												</div>
											</div>
										</li>
										<li>
											<a href="javascript:;">
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-default">
															<i class="fa fa-briefcase"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 IPO Report for year 2013 has been released.
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 20 mins
												</div>
											</div>
											</a>
										</li>
									</ul>
									<h3 class="list-heading">System</h3>
									<ul class="feeds list-items">
										<li>
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-info">
															<i class="fa fa-shopping-cart"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 New order received with <span class="label label-sm label-success">
															Reference Number: DR23923 </span>
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 30 mins
												</div>
											</div>
										</li>
										<li>
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-success">
															<i class="fa fa-user"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 You have 5 pending membership that requires a quick review.
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 24 mins
												</div>
											</div>
										</li>
										<li>
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-warning">
															<i class="fa fa-bell-o"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
															Overdue </span>
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 2 hours
												</div>
											</div>
										</li>
										<li>
											<a href="javascript:;">
											<div class="col1">
												<div class="cont">
													<div class="cont-col1">
														<div class="label label-sm label-info">
															<i class="fa fa-briefcase"></i>
														</div>
													</div>
													<div class="cont-col2">
														<div class="desc">
															 IPO Report for year 2013 has been released.
														</div>
													</div>
												</div>
											</div>
											<div class="col2">
												<div class="date">
													 20 mins
												</div>
											</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
								<div class="page-quick-sidebar-settings-list">
									<h3 class="list-heading">General Settings</h3>
									<ul class="list-items borderless">
										<li>
											 Enable Notifications <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
										</li>
										<li>
											 Allow Tracking <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">
										</li>
										<li>
											 Log Errors <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
										</li>
										<li>
											 Auto Sumbit Issues <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
										</li>
										<li>
											 Enable SMS Alerts <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
										</li>
									</ul>
									<h3 class="list-heading">System Settings</h3>
									<ul class="list-items borderless">
										<li>
											 Security Level
											<select class="form-control input-inline input-sm input-small">
												<option value="1">Normal</option>
												<option value="2" selected>Medium</option>
												<option value="e">High</option>
											</select>
										</li>
										<li>
											 Failed Email Attempts <input class="form-control input-inline input-sm input-small" value="5"/>
										</li>
										<li>
											 Secondary SMTP Port <input class="form-control input-inline input-sm input-small" value="3560"/>
										</li>
										<li>
											 Notify On System Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
										</li>
										<li>
											 Notify On SMTP Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
										</li>
									</ul>
									<div class="inner-content">
										<button class="btn btn-success"><i class="icon-settings"></i> Save Changes</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END QUICK SIDEBAR -->

			<!-- Copyright BEGIN -->
			<p class="copyright">2015 © Metronic by keenthemes.
	 			<a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
	 		</p>
			<!-- Copyright END -->
	    </div>
	</div>
    <!-- END MAIN LAYOUT -->
    <a href="#index" class="go2top"><i class="icon-arrow-up"></i></a>

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript" ></script>
<script src="assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript" ></script>
<script src="assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript" ></script>
<script src="assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
<script src="assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
<script src="assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout5/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout5/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="assets/admin/layout5/scripts/index.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {
   	Metronic.init(); // init metronic core componets
   	Layout.init(); // init layout
   	QuickSidebar.init(); // init quick sidebar
    Index.init(); // init index page
    Tasks.initDashboardWidget(); // init tash dashboard widget
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
