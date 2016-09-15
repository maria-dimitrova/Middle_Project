<?php

require_once 'db_settings.php';

$name = empty($_POST['rNamephp']) ? '' : $_POST['rNamephp'];
$surname = empty($_POST['rSurnamephp']) ? '' : $_POST['rSurnamephp'];
$mail = empty($_POST['rMailphp']) ? '' : $_POST['rMailphp'];
$pass = empty($_POST['rPassphp']) ? '' : $_POST['rPassphp'];
$rePass = empty($_POST['rRepassphp']) ? '' : $_POST['rRepassphp'];

$pdo = new PDO('mysql:host=localhost;dbname=middle_project', DB_USER, DB_PASS, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

//$query = 'INSERT INNTO <TABLE> (name, value) VALUES ("' . $name. ', "' . $value . '")';
$people = [
		[$name, $surname, $mail, $pass],
 ];

$insertPersonSql = 'INSERT INTO login_info (firstname, lastname, mail, password) VALUES (?, ?, ?, ?)';

$statement = $pdo->prepare($insertPersonSql);

$ids = [];
foreach ($people as $item) {

    $statement->execute($item);
    $ids[] = $pdo->lastInsertId();
}

//var_dump($ids);

if ($ids[0] == "" && $ids[1] == "" && ids[2] == "" && $ids[3] == "") {
	return;
} else {
	echo json_encode('success');
}