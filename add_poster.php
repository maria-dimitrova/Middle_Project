<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Добави нова обява</title>
<link href="assets\css\reset.css" type="text/css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
<link href="assets\css\style_index.css" type="text/css" rel="stylesheet">
<link href="node_modules\bootstrap\dist\css\bootstrap.min.css" rel="stylesheet">
<script src="node_modules\jquery\dist\jquery.min.js" type="text/javascript"></script>
<script src="node_modules\bootstrap\dist\js\bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/add_poster.js" type="text/javascript"></script>
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
			
			<div id="wrapper-login">
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
		<div id="add-poster">
			<div id="wraper-add-poster">
				<h1>Добавяне на нова обява</h1>
				<div>
					<label>Име на обявата:</label>
					<input id="title" type="text">
				</div>
				<div>
					<label>Цена:</label>
					<input id="price" type="text">
				</div>
				<div>
					<label>Снимка:</label>
					<input id="image" type="file">
				</div>
				<div>
					<label>Категория:</label>
			  		<select id="category" class="btn btn-primary dropdown-toggle" >
			  			<option>Избери:</option>
   						<option value="Дрехи">Дрехи</option>
   						<option value="Техника">Техника</option>
   						<option value="Аксесоари">Аксесоари</option>
   						<option value="Други">Други</option>
 					</select>
				</div>
				<div>
					<label>Описание:</label>
					<textarea id="description"></textarea>
				</div>
				<div>
					<label></label>
					<button id="btn-add-poster" class="btn-primary">Добави</button>
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