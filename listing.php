<?php

session_start();

echo $_SESSION['name'];

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Обявa</title>
<link href="assets\css\reset.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
<link href="assets\css\style_index.css" type="text/css" rel="stylesheet">
<link href="node_modules\bootstrap\dist\css\bootstrap.min.css" rel="stylesheet">
<script src="node_modules\jquery\dist\jquery.min.js" type="text/javascript"></script>
<script src="node_modules\bootstrap\dist\js\bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/login.js" type="text/javascript"></script>
</head>
<body>
<div id="big">
	<div id="container">
		<header>
			<div class="container">
			  
			  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			
			    <!-- Wrapper for slides -->
			    <div class="carousel-inner" role="listbox">
			    	<div class="item active">
			        	<img src="assets\images\carosel1.png" alt="super shop logo 1">
			      	</div>
			      	<div class="item">
			        	<img src="assets\images\carosel2.png" alt="super shop logo 2">
			      	</div>
			      	<div class="item">
			        	<img src="assets\images\carosel3.png" alt="super shop logo 3">
			      	</div>
			      	<div class="item">
			        	<img src="assets\images\carosel4.png" alt="super shop logo 4">
			      	</div>
			    </div>
			
			  </div>
			</div>
			
			<div class="logged-in"> 
				<div>Здравей, <span><?php echo $_SESSION['name']?></span>&nbsp;<span><?php echo $_SESSION['lastname']?></span></div>
			</div> 
			
			<div class="wrapper-login">
				<a href="new_registration.html">Нова регистрация</a>
				<a href="#">Забравена парола</a>
				<form>
					<div class="form-group row">
						<label class="col-xs-2 col-form-label" for="name">Е-майл:</label>
						<input class="form-control input-sm" id="mail" name="mail" type="text">
					</div>
					<div class="form-group row">
						<label class="col-xs-2 col-form-label" for="pass">Парола:</label>
						<input class="form-control input-sm" id="pass" name="pass" type="password">
					</div>
					<button class="login-btn">Вход</button>
				</form>
			</div>
			
			
			
		</header>
		<div id="listing">
			<div class="float-left">
				<h1>Търси по категория:</h1>
				<div class="panel-default">
					<label class="checkbox panel-heading"><input type="checkbox" value="">Всички</label>
					<label class="checkbox panel-heading"><input type="checkbox" value="">Дрехи</label>
					<label class="checkbox panel-heading"><input type="checkbox" value="">Техника</label>
					<label class="checkbox panel-heading"><input type="checkbox" value="">Аксесоари</label>
					<label class="checkbox panel-heading"><input type="checkbox" value="">Други</label>
				</div>
			</div>
			<div class="wraper-listin-2">
				<ul>
					<li><img src="assets/images/img.png"><span>Инфо</span><span>Цена</span></li>
					<li><img src="assets/images/img.png"><span>Инфо</span><span>Цена</span></li>
				</ul>
				<ul>
					<li><img src="assets/images/img.png"><span>Инфо</span><span>Цена</span></li>
					<li><img src="assets/images/img.png"><span>Инфо</span><span>Цена</span></li>
				</ul>
				<ul>
					<li><img src="assets/images/img.png"><span>Инфо</span><span>Цена</span></li>
					<li><img src="assets/images/img.png"><span>Инфо</span><span>Цена</span></li>
				</ul>
				<ul>
					<li><img src="assets/images/img.png"><span>Инфо</span><span>Цена</span></li>
					<li><img src="assets/images/img.png"><span>Инфо</span><span>Цена</span></li>
				</ul>
			</div>
		</div>
		<footer>
			<div><a href="#">Общи условия</a>
				<a href="index.php">1</a>
				<a href="listing.php">2</a>
				<a href="poster.php">3</a>
				<a href="add_poster.php">4</a>
				<a href="new_registration.php">5</a>	
			</div>
			<div><a href="#">Как да поръчам</a></div>
			<div><a href="#">Съвети за безопастност</a></div>
		</footer>
		</div>
</div>
</body>
</html>