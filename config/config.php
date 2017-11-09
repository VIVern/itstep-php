<?php
session_start();
$title = 'Тестируем php';
$description = 'описание';
$keywords = 'ключевые слова';
$email = 'denis3901442@gmail.com';

//подключение к базе

$db_location = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'testphp';
$db_con = mysqli_connect($db_location, $db_user, $db_pass, $db_name);

if(!$db_con){
  exit('error');
}
