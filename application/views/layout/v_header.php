<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<title>CV.Anugrah Sukses Mandiri</title>
	<!-- Favicon-->
	<link rel="icon" href="<?php echo base_url('assets/AdminMaterialDesign/favicon.png');?>" type="image/x-icon">

	<meta http-equiv="cache-control" content="max-age=0" />
	<?php
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	?>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

	<!-- Bootstrap Core Css -->
	<link href="<?php echo base_url('assets/AdminMaterialDesign/plugins/bootstrap/css/bootstrap.css');?>" rel="stylesheet">

	<!-- Waves Effect Css -->
	<link href="<?php echo base_url('assets/AdminMaterialDesign/plugins/node-waves/waves.css');?>" rel="stylesheet" />

	<!-- Animation Css -->
	<link href="<?php echo base_url('assets/AdminMaterialDesign/plugins/animate-css/animate.css');?>" rel="stylesheet" />

	<!-- Dropzone Css -->
	<link href="<?php echo base_url('assets/AdminMaterialDesign/plugins/dropzone/dropzone.css');?>" rel="stylesheet">

	<!-- JQuery DataTable Css -->
	<link href="<?php echo base_url('assets/AdminMaterialDesign/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css');?>" rel="stylesheet">

	<!-- Bootstrap Select Css -->
	<link href="<?php echo base_url('assets/AdminMaterialDesign/plugins/bootstrap-select/css/bootstrap-select.css');?>" rel="stylesheet"/>

	<!-- Custom Css -->
	<link href="<?php echo base_url('assets/AdminMaterialDesign/css/style.css');?>" rel="stylesheet">

	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="<?php echo base_url('assets/AdminMaterialDesign/css/themes/all-themes.css');?>" rel="stylesheet" />

	<!-- Sweetalert Css -->
	<link href="<?php echo base_url('assets/AdminMaterialDesign/plugins/sweetalert/sweetalert.css');?>" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="<?php echo base_url('assets/AdminMaterialDesign/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css'); ?>" rel="stylesheet" />

	<!-- FullCalendar Css -->
    <link href="<?php echo base_url('assets/fullcalendar-3.9.0/fullcalendar.css'); ?>" rel="stylesheet" />

	
	<!--WaitMe Css-->
	<link href="<?php echo base_url('assets/AdminMaterialDesign/plugins/waitme/waitMe.css');?>" rel="stylesheet" />

	<!-- Jquery Core Js -->
	<script src="<?php echo base_url('assets/AdminMaterialDesign/plugins/jquery/jquery.min.js');?>"></script>

	
	<script>
		window.baseUrl = function (path) {
			return window.App.baseUrl + path;
		};
		window.App = {
			baseUrl: '<?php echo base_url(); ?>'
		};
	</script>

	

</head>

<body class="theme-blue">
	<!-- Page Loader -->
	<div class="page-loader-wrapper">
		<div class="loader">
			<div class="preloader">
				<div class="spinner-layer pl-blue">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>
			<p>Please wait...</p>
		</div>
	</div>
	<!-- #END# Page Loader -->
	<!-- Overlay For Sidebars -->
	<div class="overlay"></div>
	<!-- #END# Overlay For Sidebars -->
	<!-- Search Bar -->
	<div class="search-bar">
		<div class="search-icon">
			<i class="material-icons">search</i>
		</div>
		<input type="text" placeholder="START TYPING...">
		<div class="close-search">
			<i class="material-icons">close</i>
		</div>
	</div>
	<!-- #END# Search Bar -->
	<!-- Top Bar -->
	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
				<a href="javascript:void(0);" class="bars"></a>
				<a class="navbar-brand" href="<?php echo base_url('Dashboard'); ?>">CV. ANUGRAH SUKSES MANDIRI</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<!-- Call Search -->
					<!-- <li>
						<a href="javascript:void(0);" class="js-search" data-close="true">
							<i class="material-icons">search</i>
						</a>
					</li> -->
					<!-- #END# Call Search -->
					<!-- Notifications -->
					<!-- <li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
							<i class="material-icons">notifications</i>
							<span class="label-count">7</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">NOTIFICATIONS</li>
							<li class="body">
								<ul class="menu">
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-light-green">
												<i class="material-icons">person_add</i>
											</div>
											<div class="menu-info">
												<h4>12 new members joined</h4>
												<p>
													<i class="material-icons">access_time</i> 14 mins ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-cyan">
												<i class="material-icons">add_shopping_cart</i>
											</div>
											<div class="menu-info">
												<h4>4 sales made</h4>
												<p>
													<i class="material-icons">access_time</i> 22 mins ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-red">
												<i class="material-icons">delete_forever</i>
											</div>
											<div class="menu-info">
												<h4>
													<b>Nancy Doe</b> deleted account</h4>
												<p>
													<i class="material-icons">access_time</i> 3 hours ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-orange">
												<i class="material-icons">mode_edit</i>
											</div>
											<div class="menu-info">
												<h4>
													<b>Nancy</b> changed name</h4>
												<p>
													<i class="material-icons">access_time</i> 2 hours ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-blue-grey">
												<i class="material-icons">comment</i>
											</div>
											<div class="menu-info">
												<h4>
													<b>John</b> commented your post</h4>
												<p>
													<i class="material-icons">access_time</i> 4 hours ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-light-green">
												<i class="material-icons">cached</i>
											</div>
											<div class="menu-info">
												<h4>
													<b>John</b> updated status</h4>
												<p>
													<i class="material-icons">access_time</i> 3 hours ago
												</p>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<div class="icon-circle bg-purple">
												<i class="material-icons">settings</i>
											</div>
											<div class="menu-info">
												<h4>Settings updated</h4>
												<p>
													<i class="material-icons">access_time</i> Yesterday
												</p>
											</div>
										</a>
									</li>
								</ul>
							</li>
							<li class="footer">
								<a href="javascript:void(0);">View All Notifications</a>
							</li>
						</ul>
					</li> -->
					<!-- #END# Notifications -->
					<!-- Tasks -->
					<!-- <li class="dropdown">
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
							<i class="material-icons">flag</i>
							<span class="label-count">9</span>
						</a>
						<ul class="dropdown-menu">
							<li class="header">TASKS</li>
							<li class="body">
								<ul class="menu tasks">
									<li>
										<a href="javascript:void(0);">
											<h4>
												Footer display issue
												<small>32%</small>
											</h4>
											<div class="progress">
												<div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<h4>
												Make new buttons
												<small>45%</small>
											</h4>
											<div class="progress">
												<div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<h4>
												Create new dashboard
												<small>54%</small>
											</h4>
											<div class="progress">
												<div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<h4>
												Solve transition issue
												<small>65%</small>
											</h4>
											<div class="progress">
												<div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
												</div>
											</div>
										</a>
									</li>
									<li>
										<a href="javascript:void(0);">
											<h4>
												Answer GitHub questions
												<small>92%</small>
											</h4>
											<div class="progress">
												<div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
												</div>
											</div>
										</a>
									</li>
								</ul>
							</li>
							<li class="footer">
								<a href="javascript:void(0);">View All Tasks</a>
							</li>
						</ul>
					</li> -->
					<!-- #END# Tasks -->
					<!-- <li class="pull-right">
						<a href="javascript:void(0);" class="js-right-sidebar" data-close="true">
							<i class="material-icons">more_vert</i>
						</a>
					</li> -->
				</ul>
			</div>
		</div>
	</nav>
	<!-- #Top Bar -->
	<section>
		<!-- Left Sidebar -->
		<aside id="leftsidebar" class="sidebar">
			<!-- User Info -->
			<div class="user-info bg-blue" style="background-image:none;">
				<div class="image">
					<img src="<?= base_url('assets/AdminMaterialDesign/images/user.png') ;?>" width="48" height="48" alt="User" />
				</div>
				<div class="info-container">
					<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php echo $this->session->userdata('name'); ?> - 
						<?php echo $this->session->userdata()['access']['level_name']; ?>
					</div>
					<div class="email"><?php echo $this->session->userdata('email'); ?></div>
					<div class="btn-group user-helper-dropdown">
						<i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="javascript:void(0);">
									<i class="material-icons">person</i>Profile</a>
							</li>
							<li role="seperator" class="divider"></li>
							<li>
								<a href="<?php echo base_url('Login/logout'); ?>">
									<i class="material-icons">input</i>Sign Out</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- #User Info -->
			<!-- Menu -->
			<div class="menu">
				<ul class="list">
					<?php if(in_array('dashboard', $this->session->userdata()['access']['access_page'])){ ?>
					<li class="header">MAIN</li>
                    <li class="<?=($this->uri->segment(1) == "Dashboard" || $this->uri->segment(1) == null) ? "active" : "" ?>">
						<a href="<?php echo base_url('Dashboard'); ?>">
							<i class="material-icons">dashboard</i>
							<span>Dashboard</span>
						</a>
					</li>
					<?php } ?>
					<?php if(in_array('products_sales', $this->session->userdata()['access']['access_page'])){ ?>
                    <li class="header">PENJUALAN PRODUK</li>
                    <li class="<?=($this->uri->segment(1) == "Transactions") ? "active" : "" ?>">
						<a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
							<i class="material-icons">shopping_cart</i>
							<span>Penjualan Produk</span>
						</a>
						<ul class="ml-menu" style="display: none;">
							<li class="<?=($this->uri->segment(2) == "transactionsView") ? "active" : "" ?>">
								<a href="<?php echo base_url('Transactions/transactionsView'); ?>" class=" waves-effect waves-block">Lihat Penjualan</a>
							</li>
							<li class="<?=($this->uri->segment(2) == "TransactionsCreateView") ? "active" : "" ?>">                            
								<a href="<?php echo base_url('Transactions/TransactionsCreateView'); ?>" class=" waves-effect waves-block">Tambah Penjualan</a>
							</li>
						</ul>
					</li>
					<?php } ?>
					<?php if(in_array('productions', $this->session->userdata()['access']['access_page'])){ ?>
                    <li class="header">PERENCANAAN PRODUKSI</li>
					<li class="<?=($this->uri->segment(1) == "Productions") ? "active" : "" ?>">                   
						<a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
							<i class="material-icons">equalizer</i>
							<span>Produksi</span>
						</a>
						<ul class="ml-menu" style="display: none;">
							<li class="<?=($this->uri->segment(2) == "productionsScheduleView") ? "active" : "" ?>">
								<a href="<?php echo base_url('Productions/productionsScheduleView'); ?>" class=" waves-effect waves-block">Lihat Jadwal Produksi</a>
							</li>
							<li class="<?=($this->uri->segment(2) == "productionsView") ? "active" : "" ?>">
								<a href="<?php echo base_url('Productions/productionsView'); ?>" class=" waves-effect waves-block">Lihat Produksi</a>
							</li>
							<li class="<?=($this->uri->segment(2) == "productionsCreateView") ? "active" : "" ?>">                            
								<a href="<?php echo base_url('Productions/productionsCreateView'); ?>" class=" waves-effect waves-block">Tambah Produksi</a>
							</li>
						</ul>
					</li>
					<?php } ?>
					<?php if(in_array('employees', $this->session->userdata()['access']['access_page'])){ ?>	
					<li class="header">MASTER DATA</li>
					<li class="<?=($this->uri->segment(1) == "Employees") ? "active" : "" ?>">                 					
						<a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
							<i class="material-icons">accessibility</i>
							<span>Pegawai</span>
						</a>
						<ul class="ml-menu">
							<li class="<?=($this->uri->segment(2) == "EmployeesView") ? "active" : "" ?>">						
								<a href="<?php echo base_url('Employees/EmployeesView'); ?>" class=" waves-effect waves-block">Lihat Pegawai</a>
							</li>
							<li class="<?=($this->uri->segment(2) == "LevelsView") ? "active" : "" ?>">													
								<a href="<?php echo base_url('Employees/LevelsView') ?>" class=" waves-effect waves-block">Lihat Posisi</a>
							</li>
						</ul>
					</li>
					<?php } ?>
					<?php if(in_array('products', $this->session->userdata()['access']['access_page'])){ ?>
					<li class="<?=($this->uri->segment(1) == "Products") ? "active" : "" ?>">               					                    
						<a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
							<i class="material-icons">layers</i>
							<span>Produk</span>
						</a>
						<ul class="ml-menu">
							<li class="<?=($this->uri->segment(2) == "productsView") ? "active" : "" ?>">													
								<a href="<?php echo base_url('Products/productsView') ?>" class=" waves-effect waves-block">Lihat Produk</a>
							</li>
							<li class="<?=($this->uri->segment(2) == "categoriesView") ? "active" : "" ?>">													                            
								<a href="<?php echo base_url('Products/categoriesView') ?>" class=" waves-effect waves-block">Lihat Categories</a>
							</li>
						</ul>
					</li>
					<?php } ?>
					<?php if(in_array('materials', $this->session->userdata()['access']['access_page'])){ ?>
					<li class="<?=($this->uri->segment(1) == "Materials") ? "active" : "" ?>">              					                                        
						<a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
							<i class="material-icons">blur_on</i>
							<span>Bahan Baku</span>
						</a>
						<ul class="ml-menu">
							<li class="<?=($this->uri->segment(2) == "materialsView") ? "active" : "" ?>">																				
								<a href="<?php echo base_url('Materials/materialsView') ?>" class=" waves-effect waves-block">Lihat Bahan Baku</a>
							</li>
							<li class="<?=($this->uri->segment(2) == "purchaseMaterialsView") ? "active" : "" ?>">																											
								<a href="<?php echo base_url('Materials/purchaseMaterialsView') ?>" class=" waves-effect waves-block">Pesanan Bahan Baku</a>
							</li>
							
						</ul>
					</li>
					<?php } ?>
					<?php if(in_array('costumers', $this->session->userdata()['access']['access_page'])){ ?>
					<li class="<?=($this->uri->segment(1) == "Costumers") ? "active" : "" ?>">              					                                                            
						<a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
							<i class="material-icons">shop</i>
							<span>Pelanggan</span>
						</a>
						<ul class="ml-menu">
							<li class="<?=($this->uri->segment(2) == "costumersView") ? "active" : "" ?>">
								<a href="<?php echo base_url('Costumers/costumersView') ?>" class=" waves-effect waves-block">Lihat Pelanggan</a>
							</li>
						</ul>
					</li>
					<?php } ?>
					<?php if(in_array('suppliers', $this->session->userdata()['access']['access_page'])){ ?>
					<li class="<?=($this->uri->segment(1) == "Suppliers") ? "active" : "" ?>">              					                                                                                
						<a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
							<i class="material-icons">local_shipping</i>
							<span>Pemasok</span>
						</a>
						<ul class="ml-menu">
							<li class="<?=($this->uri->segment(2) == "suppliersView") ? "active" : "" ?>">
								<a href="<?php echo base_url('Suppliers/suppliersView'); ?>" class=" waves-effect waves-block">Lihat Pemasok</a>
							</li>
						</ul>
					</li>
					<?php } ?>
				</ul>
			</div>
			<!-- #Menu -->
			<!-- Footer -->
			<div class="legal">
				<div class="copyright">
					&copy; 2017 - 2018
					<a href="javascript:void(0);">Januar Wicaksono</a>.
				</div>
				<div class="version">
					<b>Develop by: </b> Januar Wicaksono
				</div>
			</div>
			<!-- #Footer -->
		</aside>
		<!-- #END# Left Sidebar -->
		<!-- Right Sidebar -->
		<!-- <aside id="rightsidebar" class="right-sidebar">
			<ul class="nav nav-tabs tab-nav-right" role="tablist">
				<li role="presentation" class="active">
					<a href="#skins" data-toggle="tab">SKINS</a>
				</li>
				<li role="presentation">
					<a href="#settings" data-toggle="tab">SETTINGS</a>
				</li>
			</ul>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active in active" id="skins">
					<ul class="demo-choose-skin">
						<li data-theme="red" class="active">
							<div class="red"></div>
							<span>Red</span>
						</li>
						<li data-theme="pink">
							<div class="pink"></div>
							<span>Pink</span>
						</li>
						<li data-theme="purple">
							<div class="purple"></div>
							<span>Purple</span>
						</li>
						<li data-theme="deep-purple">
							<div class="deep-purple"></div>
							<span>Deep Purple</span>
						</li>
						<li data-theme="indigo">
							<div class="indigo"></div>
							<span>Indigo</span>
						</li>
						<li data-theme="blue">
							<div class="blue"></div>
							<span>Blue</span>
						</li>
						<li data-theme="light-blue">
							<div class="light-blue"></div>
							<span>Light Blue</span>
						</li>
						<li data-theme="cyan">
							<div class="cyan"></div>
							<span>Cyan</span>
						</li>
						<li data-theme="teal">
							<div class="teal"></div>
							<span>Teal</span>
						</li>
						<li data-theme="green">
							<div class="green"></div>
							<span>Green</span>
						</li>
						<li data-theme="light-green">
							<div class="light-green"></div>
							<span>Light Green</span>
						</li>
						<li data-theme="lime">
							<div class="lime"></div>
							<span>Lime</span>
						</li>
						<li data-theme="yellow">
							<div class="yellow"></div>
							<span>Yellow</span>
						</li>
						<li data-theme="amber">
							<div class="amber"></div>
							<span>Amber</span>
						</li>
						<li data-theme="orange">
							<div class="orange"></div>
							<span>Orange</span>
						</li>
						<li data-theme="deep-orange">
							<div class="deep-orange"></div>
							<span>Deep Orange</span>
						</li>
						<li data-theme="brown">
							<div class="brown"></div>
							<span>Brown</span>
						</li>
						<li data-theme="grey">
							<div class="grey"></div>
							<span>Grey</span>
						</li>
						<li data-theme="blue-grey">
							<div class="blue-grey"></div>
							<span>Blue Grey</span>
						</li>
						<li data-theme="black">
							<div class="black"></div>
							<span>Black</span>
						</li>
					</ul>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="settings">
					<div class="demo-settings">
						<p>GENERAL SETTINGS</p>
						<ul class="setting-list">
							<li>
								<span>Report Panel Usage</span>
								<div class="switch">
									<label>
										<input type="checkbox" checked>
										<span class="lever"></span>
									</label>
								</div>
							</li>
							<li>
								<span>Email Redirect</span>
								<div class="switch">
									<label>
										<input type="checkbox">
										<span class="lever"></span>
									</label>
								</div>
							</li>
						</ul>
						<p>SYSTEM SETTINGS</p>
						<ul class="setting-list">
							<li>
								<span>Notifications</span>
								<div class="switch">
									<label>
										<input type="checkbox" checked>
										<span class="lever"></span>
									</label>
								</div>
							</li>
							<li>
								<span>Auto Updates</span>
								<div class="switch">
									<label>
										<input type="checkbox" checked>
										<span class="lever"></span>
									</label>
								</div>
							</li>
						</ul>
						<p>ACCOUNT SETTINGS</p>
						<ul class="setting-list">
							<li>
								<span>Offline</span>
								<div class="switch">
									<label>
										<input type="checkbox">
										<span class="lever"></span>
									</label>
								</div>
							</li>
							<li>
								<span>Location Permission</span>
								<div class="switch">
									<label>
										<input type="checkbox" checked>
										<span class="lever"></span>
									</label>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</aside> -->
		<!-- #END# Right Sidebar -->
	</section>
