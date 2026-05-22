<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);

$login = trim(filter_var($_POST['userlogin'], FILTER_SANITIZE_SPECIAL_CHARS)); 
$uname = trim(filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS)); 
$email = trim(filter_var($_POST['useremail'], FILTER_SANITIZE_SPECIAL_CHARS)); 
$password = trim(filter_var($_POST['userpassword'], FILTER_SANITIZE_SPECIAL_CHARS)); 

if (strlen($login)<2) {
  echo "Ошибка логина. Логин короткий.";
  // exit;
}
if (strlen($uname)<2) {
  echo "Ошибка имени. Имя короткое.";
  // exit;
}
if (strlen($email)<2 && !str_contains($email, '@')) {
  echo "Ошибка почты. Почта - непочта.";
  // exit;
}
if (strlen($password)<2) {
  echo "Ошибка пароля. Пароль короткий.";
  // exit;
}

//DB

$pdo = new PDO('mysql:host=localhost;dbname=db_php1;port=3306', 'root', '');

$sql = 'INSERT INTO users(login, username, email, password) VALUES(?,?,?,?)';

$query = $pdo->prepare($sql);

$query->execute([$login, $uname, $email, $password]);