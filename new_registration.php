<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Регистрация</title>
<link href="assets\css\reset.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
<link href="assets\css\style_index.css" type="text/css" rel="stylesheet">
<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="node_modules/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/validation-registration.js" type="text/javascript"></script>
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
				<div>Здравей, <span><?php echo $_SESSION['name']?></span>&nbsp;<span><?php echo $_SESSION['lastname']?></span>!</div>
				<div><a href="add_poster.php"><span class="glyphicon glyphicon-plus"></span>Добави нова обява</a></div>
			</div>  
			
			<div class="wrapper-login">
				<a href="new_registration.php">Нова регистрация</a>
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
					<span style="color: red" id="login-error"></span>
					<button id="btn-login" class="login-btn">Вход</button>
				</form>
			</div>
			
			
			
		</header>
		
		<div id="registration">
			<div id="wraper-reg">
				<h1>Нова регистрация</h1>
				<div>
					<label></label>
					<label class="error" id="r-name-error"></label>
				</div>
				<div>
					<label for="r-name">Име:</label>
					<input id="r-name" type="text">
				</div>
				<div>
					<label></label>
					<label class="error" id="r-surname-error"></label>
				</div>
				<div>
					<label for="r-surname">Фамилия:</label>
					<input id="r-surname" type="text">
				</div>
				<div>
					<label></label>
					<label class="error" id="r-mail-error"></label>
				</div>
				<div>
					<label for="r-mail">E-mail:</label>
					<input id="r-mail" type="text">
				</div>
				<div>
					<label></label>
					<label class="error" id="r-pass-error"></label>
				</div>
				<div>
					<label for="r-pass">Парола:</label>
					<input id="r-pass" type="password">
				</div>
				<div>
					<label></label>
					<label class="error" id="r-re-pass-error"></label>
				</div>
				<div>
					<label for="r-re-pass">Повтори парола:</label>
					<input id="r-re-pass" type="password">
				</div>
				<div>
					<label></label>
					<span style="color: red" class="error" id="r-submit-error"></span>
				</div>
				<div>
					<label></label>
					<button id="reg-btn" class="btn-primary">Изпрати</button>
				</div>
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