<?php

$host = "127.0.0.1";
$user = "root";
$password = "root";
$database = "interactive_map";

$induction = mysqli_connect($host, $user, $password, $database);

if ($induction == false)
{
	echo "Ошибка подключения";
}

?>