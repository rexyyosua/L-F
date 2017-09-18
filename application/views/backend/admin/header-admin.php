<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="<?=base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/default.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/dashboard.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/discuss.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/new-article.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/articles.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/tags.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/setting.css">
	
	<link href="<?=base_url()?>assets/chosen/chosen.min.css" type="text/css" rel="stylesheet">
	<link href="<?=base_url()?>assets/summernote/dist/summernote.css" type="text/css" rel="stylesheet">
	<link href="<?=base_url()?>assets/fontawesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
	
	<script src="https://use.fontawesome.com/45e03a14ce.js"></script>
	
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
    <div class="container-fluid display-table">
		<div class="row display-table-row">
			<!-- Side Menu -->
			<div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top" id="side-menu">
				<h1 class="hidden-sm hidden-xs">Navigation</h1>
				<ul>
					<li class="link active">
						<a href="<?=base_url('index.php/admin/db')?>">
							<span class="glyphicon glyphicon-th" aria-hidden="true"></span>
							<span class="hidden-sm hidden-xs">Dashboard</span>
						</a>
					</li>
					
					<!--<li class="link">
						<a href="#collapse-post" data-toggle="collapse" aria-controls="collapse-post">
							<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
							<span class="hidden-sm hidden-xs">Article</span>
							<span class="label label-success pull-right hidden-sm hidden-xs">20</span>
						</a>
						<ul class="collapse collapseable" id="collapse-post">
							<li><a href="new-article.php">Create New</a></li>
							<li><a href="articles.php">View Article</a></li>
						</ul>
					</li>
					
					<li class="link">
						<a href="#collapse-comments" data-toggle="collapse" aria-controls="collapse-comments">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
							<span class="hidden-sm hidden-xs">Comments</span>
						</a>
						<ul class="collapse collapseable" id="collapse-comments">
							<li>
								<a href="approved.php">Approved
									<span class="label label-success pull-right hidden-sm hidden-xs">10</span>
								</a>
							</li>
							
							<li>
								<a href="unapproved.php">Unapproved
									<span class="label label-warning pull-right hidden-sm hidden-xs">10</span>
								</a>
							</li>
						</ul>
					</li>
					
					<li class="link">
						<a href="commenters.php">
							<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
							<span class="hidden-sm hidden-xs">Commenters</span>
						</a>
					</li>
					
					<li class="link">
						<a href="tags.php">
							<span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
							<span class="hidden-sm hidden-xs">Tags</span>
						</a>
					</li>-->
					
					<li class="link">
						<a href="<?=base_url('index.php/admin/db/confirm')?>">
							<span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
							<span class="hidden-sm hidden-xs">Tabel Konfirmasi</span>
						</a>
					</li>
					
					<!--<li class="link">
						<a href="edit-lostitems.php">
							<span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
							<span class="hidden-sm hidden-xs">Edit Lost Items</span>
						</a>
					</li>-->
					
					<li class="link">
						<a href="<?=base_url('index.php/admin/db/message')?>">
							<span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
							<span class="hidden-sm hidden-xs">Pesan</span>
						</a>
					</li>
					
					<li class="link settings-btn">
						<a href="settings.php">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							<span class="hidden-sm hidden-xs">Settings</span>
						</a>
					</li>
				</ul>
			</div>
			
			<!-- Main Content Area -->
			<div class="col-md-10 col-sm-11 display-table-cell valign-top">
			
				<div class="row">			
					<header id="nav-header" class="clearfix">
						<div class="col-md-5">
							<nav class="navbar-default pull-left">
								<button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu">
									<span class="sr-only">Toggle Navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</nav>
							<input type="text" class="hidden-sm hidden-xs" id="header-search-field" placeholder="Search for something...">
						</div>
						
						<div class="col-md-7">
							<ul class="pull-right">
								<li id="welcome" class="hidden-xs">Welcome to your administration area</li>
								
								
								<li>
									<a href="#" class="logout">
										<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
										<li><?=anchor('login/logout','Logout');?></li>
									</a>
								</li>
							</ul>
						</div>
					</header>	
				</div>