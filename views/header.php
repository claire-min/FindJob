<!doctype html>
<html>
<head>
	<title>Claire - <?=(isset($this->title)) ? $this->title : ''; ?></title>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/basic.css" />
	<script type="text/javascript" src="<?php echo URL; ?>public/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script>	

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body>
	
<?php Session::init(); ?>

<div class="container">
	<div id="header">
		
		<a href="<?php echo URL; ?>index">
		<h1 id="brand_name"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> FindJob</h1></a>
		
		
		<ul class="nav nav-pills" >
			<li role="presentation" 
			<?php if ($_SERVER["REQUEST_URI"] == '/index'): ?>
			class="active">
			<?php else: ?>
			>
			<?php endif; ?>
			<a href="<?php echo URL; ?>index">Home</a></li>
			
			<li role="presentation"
			<?php if ($_SERVER["REQUEST_URI"] == '/about'): ?>
			class="active">
			<?php else: ?>
			>
			<?php endif; ?>
			<a href="<?php echo URL; ?>about">About</a></li>
			
			<li role="presentation"
			<?php if (($_SERVER["REQUEST_URI"] == '/find') || ($_SERVER["REQUEST_URI"] == '/find/find')): ?>	
				class="active"
			<?php else:
			endif; ?>
				class="dropdown">
			
			<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
			Jobs <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li role="presentation"><a href="<?php echo URL; ?>find">Find Jobs</a></li>
				<li role="presentation"><a href="#">By Industry</a></li>
			</ul>
			</li>
			
			<?php if (Session::get('loggedIn') == true):?>
			<li role="presentation"><a href="<?php echo URL; ?>dashboard/logout"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Logout</a></li>
			<?php else: ?>
				<?php if ($_SERVER["REQUEST_URI"] == '/login'): ?>
				<li role="presentation" class="active"><a href="<?php echo URL; ?>login"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login</a></li>
				<?php else: ?>
				<li role="presentation"><a href="<?php echo URL; ?>login"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login </a></li>
				<?php endif; ?>
			<?php endif; ?>
	    </ul>
			
		
	</div><!--id="header" -->
	
	<div id="container">
		 