<?php
require 'config.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $message = $_POST['message'];

    setcookie("name", $name, time()+3600, '/');
    setcookie("surname", $surname, time()+3600, '/');
    setcookie("message", $message, time()+3600, '/');

    $errors = [];
    

    if($name == '' || $surname == '' || $message == ''){
        $errors[] = 'Не все поля заполнены!';
    }else if(preg_match('/\A\d+\z/', $name) || preg_match('/\A\d+\z/', $surname) || preg_match('/\A\d+\z/', $message)){
        $errors[] = 'В каком-то поле содержатся только цифры!';
    }

    
    if(empty($errors)){
        $sql = "INSERT INTO `comments` (`name`, `surname`, `message`) VALUES(:name, :surname, :message)";
        $query = $conn->prepare($sql);
        $query->execute(['name' => $name, 'surname' => $surname, 'message' => $message]);

        header('location: /index.php?succ#comments');
    }else{
        header('location: /index.php?error='.array_shift($errors).'#comments ');
    }
}
?>