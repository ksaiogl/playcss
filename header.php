<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CSS and Keyframes animations</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

			<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

			<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://unpkg.com/masonry-layout@4.1/dist/masonry.pkgd.min.js"></script>
	<script src="https://unpkg.com/masonry-layout@4.1/dist/masonry.pkgd.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.2/masonry.pkgd.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jade/1.11.0/jade.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sass.js/0.9.12/sass.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  	
	<?php wp_head(); ?>

</head>

<body id="page-top">

    <!--<nav id="mainNav" class="navbar navbar navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!--<div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Animations Site</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#download">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#features">List of Animations</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#features">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        <!--</div>
        <!-- /.container-fluid -->
    <!--</nav>-->

    <div class="nav">
				<span class="logo" href="#page-top">Animations Site</span>
				<nav class="navMenu1">
					<a class="page-scroll" href="#download">Home</a>
					<a class="page-scroll" href="#features/">List of Animations</a>
					<a class="page-scroll" href="#features/">About</a>
					<a class="page-scroll" href="#contact">Contact</a>
				</nav>
			</div>
			<div class="CollapseNav">
				<span class="collapseSpan glyphicon glyphicon-menu-hamburger"></span>
				<nav class="newNav" id="myNew">
					<a class="page-scroll" href="#download">Home</a>
					<a class="page-scroll" href="#features/">List of Animations</a>
					<a class="page-scroll" href="#features/">About</a>
					<a class="page-scroll" href="#contact">Contact</a>
				</nav>
			</div>