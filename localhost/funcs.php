<?php
function save_mess (){
// переменная $db (индификатор соединения),
// взятая из глобальной области видимости (global)
global $db ;

// переменные $name, $text берем из массива $_POST и экранируем их
// функцией mysqli_real_escape_string

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$telephone = mysqli_real_escape_string($db, $_POST['telephone']);
$password = mysqli_real_escape_string($db, $_POST['password']);
$cpassword = mysqli_real_escape_string($db, $_POST['cpassword']);

// составляем запрос
$query = "INSERT INTO gb (name, email, telephone, password) VALUES ('$name', '$email', '$telephone', '$password')";

// выполняем запрос (без проверки)
mysqli_query($db, $query);
}
?>