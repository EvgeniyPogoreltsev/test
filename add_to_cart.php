<?php
$host = 'localhost'; // подключаюсь к базу данных
$user = 'root';
$password = '';
$db_name = 'orders';
$db = mysql_connect($host,$user,$password,$db_name);
// записываю в базу данных значения, полученные методом getJSON()
$query = "INSERT INTO goods (IP,quantity_orders,Date_time) VALUES ($_POST['.goods'],$_POST['#ip'],$_POST['#date'])";
$result = mysql_query($db,$query) or die(mysqli_error($db)); //вывожу результат из базы данных и с помощью цикла записываю каждую строку из бд в переменную $row
for ($a = []; $row = mysqli_fetch_assoc($result); $a[] = $row);
echo json_encode($row);



?>