<?php

session_start();

require_once 'db_settings.php';

$mail = empty($_POST['loginphp']) ? '' : $_POST['loginphp'];
$pass = empty($_POST['passphp']) ? '' : $_POST['passphp'];

//$name = 'mariq@mail.bg';
//$pass = 'pass';

$pdo = new PDO('mysql:host=localhost;dbname=middle_project', DB_USER, DB_PASS, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$sth = $pdo->prepare("SELECT * FROM login_info WHERE mail = '$mail' AND password = '$pass'");
$sth->execute();

$result = $sth->fetchAll(PDO::FETCH_ASSOC);

//var_dump($result);

if ($result == []) {
	return;
} else {
	$_SESSION['name'] = $result[0]['firstname'];
	$_SESSION['lastname'] = $result[0]['lastname'];
	echo json_encode('success');
}