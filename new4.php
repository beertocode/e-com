<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>E-commerce</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">


	<link rel="stylesheet" type="text/css" href="new4css.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, intial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script
  		src="http://code.jquery.com/jquery-3.5.1.min.js"
  		integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  		crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>



</head>

	<body>
		<nav class="navbar navbar-default navbar-fixed-top" id="navbar">
			<div class="container">
				<a href="/new4.php" class = "navbar-brand" id="text">E-commerce</a>
				<ul class="nav navbar-nav">

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Men<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Shirts</a></li>
							<li><a href="#">Pants</a></li>
							<li><a href="#">Shoes</a></li>
							<li><a href="#">Others</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		
		<div id ="background-image">
			<div id="image-1"></div>
			<div id="image-5"></div>

			<div id="image-2"></div>
		</div>
		
		<!--products-->
		<?php include 'details-modal-levisjeans.php';?>
		<?php include 'details-modal-football.php';?>
        <div class="container">
        	<div class="row">
        		<div class="col">
        			<h4>Levis Jeans</h4>
					<img src="images/jeans.jpg" id="images">
					<p class="list-price text-danger">List Price : <s>Rs.1250</s></p>
					<p class="price"> Our price : Rs 999</p>
					<button type="button" class="btn btn-success" data-toggle = "modal" data-target ="#details-1">Details</button>
        		</div>
        		<div class="col">
        			<h4>Football</h4>
					<img src="images/image-5.jpg" id="images">
					<p class="list-price text-danger">List Price : <s>Rs.450</s></p>
					<p class="price"> Our price : Rs 430</p>
					<button type="button" class="btn btn-success" data-toggle = "modal" data-target ="#details-2">Details</button>
        		</div>
        		<div class="col">
        			<h4>Levis Jeans</h4>
					<img src="images/jeans.jpg" id="images">
					<p class="list-price text-danger">List Price : <s>Rs.1250</s></p>
					<p class="price"> Our price : Rs 999</p>
					<button type="button" class="btn btn-success" data-toggle = "modal" data-target ="#details-1">Details</button>
        		</div>
        		<div class="col">
        			<h4>Levis Jeans</h4>
					<img src="images/jeans.jpg" id="images">
					<p class="list-price text-danger">List Price : <s>Rs.1250</s></p>
					<p class="price"> Our price : Rs 999</p>
					<button type="button" class="btn btn-success" data-toggle = "modal" data-target ="#details-1">Details</button>
        		</div>
        	</div>


        	<div class="row">
        		<div class="col">
        			<h4>Levis Jeans</h4>
					<img src="images/jeans.jpg" id="images">
					<p class="list-price text-danger">List Price : <s>Rs.1250</s></p>
					<p class="price"> Our price : Rs 999</p>
					<button type="button" class="btn btn-success" data-toggle = "modal" data-target ="#details-1">Details</button>
        		</div>
        		<div class="col">
        			<h4>Levis Jeans</h4>
					<img src="images/jeans.jpg" id="images">
					<p class="list-price text-danger">List Price : <s>Rs.1250</s></p>
					<p class="price"> Our price : Rs 999</p>
					<button type="button" class="btn btn-success" data-toggle = "modal" data-target ="#details-1">Details</button>
        		</div>
        		<div class="col">
        			<h4>Levis Jeans</h4>
					<img src="images/jeans.jpg" id="images">
					<p class="list-price text-danger">List Price : <s>Rs.1250</s></p>
					<p class="price"> Our price : Rs 999</p>
					<button type="button" class="btn btn-success" data-toggle = "modal" data-target ="#details-1">Details</button>
        		</div>
        		<div class="col">
        			<h4>Levis Jeans</h4>
					<img src="images/jeans.jpg" id="images">
					<p class="list-price text-danger">List Price : <s>Rs.1250</s></p>
					<p class="price"> Our price : Rs 999</p>
					<button type="button" class="btn btn-success" data-toggle = "modal" data-target ="#details-1">Details</button>
        		</div>
        	</div>

        </div>
	</body>
</html>