<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
		<meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
		<meta name="author" content="Łukasz Holeczek">
		<meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
		<title>CoreUI Free Bootstrap Admin Template</title>
		<!-- Icons-->
		<link href="<?php echo base_url();?>vendor/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>vendor/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
		<!-- Main styles for this application-->
		<link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
		<link href="<?php echo base_url();?>vendor/pace-progress/css/pace.min.css" rel="stylesheet">
	</head>
	<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
		<header class="app-header navbar">
			<button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="#">
				<img class="navbar-brand-full" src="<?php echo base_url();?>img/brand/logo.svg" width="89" height="25" alt="CoreUI Logo">
				<img class="navbar-brand-minimized" src="<?php echo base_url();?>img/brand/sygnet.svg" width="30" height="30" alt="CoreUI Logo">
			</a>
			<button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
				<span class="navbar-toggler-icon"></span>
			</button>
			<ul class="nav navbar-nav d-md-down-none">
				<li class="nav-item px-3">
					<a class="nav-link" href="#">Dashboard</a>
				</li>
				<li class="nav-item px-3">
					<a class="nav-link" href="#">Users</a>
				</li>
				<li class="nav-item px-3">
					<a class="nav-link" href="#">Settings</a>
				</li>
			</ul>
			<ul class="nav navbar-nav ml-auto">
				<li class="nav-item d-md-down-none">
					<a class="nav-link" href="#">
						<i class="icon-bell"></i>
						<span class="badge badge-pill badge-danger">5</span>
					</a>
				</li>
				<li class="nav-item d-md-down-none">
					<a class="nav-link" href="#">
						<i class="icon-list"></i>
					</a>
				</li>
				<li class="nav-item d-md-down-none">
					<a class="nav-link" href="#">
						<i class="icon-location-pin"></i>
					</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						<img class="img-avatar" src="<?php echo base_url();?>img/avatars/6.jpg" alt="admin@bootstrapmaster.com">
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="dropdown-header text-center">
							<strong>Account</strong>
						</div>
						<a class="dropdown-item" href="#">
							<i class="fa fa-bell-o"></i> Updates
							<span class="badge badge-info">42</span>
						</a>
						<a class="dropdown-item" href="#">
							<i class="fa fa-envelope-o"></i> Messages
							<span class="badge badge-success">42</span>
						</a>
						<a class="dropdown-item" href="#">
							<i class="fa fa-tasks"></i> Tasks
							<span class="badge badge-danger">42</span>
						</a>
						<a class="dropdown-item" href="#">
							<i class="fa fa-comments"></i> Comments
							<span class="badge badge-warning">42</span>
						</a>
						<div class="dropdown-header text-center">
							<strong>Settings</strong>
						</div>
						<a class="dropdown-item" href="#">
							<i class="fa fa-user"></i> Profile</a>
						<a class="dropdown-item" href="#">
							<i class="fa fa-wrench"></i> Settings</a>
						<a class="dropdown-item" href="#">
							<i class="fa fa-usd"></i> Payments
							<span class="badge badge-secondary">42</span>
						</a>
						<a class="dropdown-item" href="#">
							<i class="fa fa-file"></i> Projects
							<span class="badge badge-primary">42</span>
						</a>
						<div class="divider"></div>
						<a class="dropdown-item" href="#">
							<i class="fa fa-shield"></i> Lock Account</a>
						<a class="dropdown-item" href="#">
							<i class="fa fa-lock"></i> Logout</a>
					</div>
				</li>
			</ul>
			<button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
				<span class="navbar-toggler-icon"></span>
			</button>
			<button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
				<span class="navbar-toggler-icon"></span>
			</button>
		</header>
		<div class="app-body">