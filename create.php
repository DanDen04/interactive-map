<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
require_once 'databases.php'; // подключаем скрипт
 
if(isset($_POST['number']) && isset($_POST['x']) && isset($_POST['y']) && isset($_POST['title']) && isset($_POST['info']) && isset($_POST['teacher'])){
 
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link)); 
     
    // экранирования символов для mysql
    $number = htmlentities(mysqli_real_escape_string($link, $_POST['number']));
    $x = htmlentities(mysqli_real_escape_string($link, $_POST['x']));
    $y = htmlentities(mysqli_real_escape_string($link, $_POST['y']));
    $title = htmlentities(mysqli_real_escape_string($link, $_POST['title']));
    $info = htmlentities(mysqli_real_escape_string($link, $_POST['info']));
    $teacher = htmlentities(mysqli_real_escape_string($link, $_POST['teacher']));
     
    // создание строки запроса
    $query ="INSERT INTO audiences VALUES(NULL, '$number','$x','$y','$title','$info','$teacher')";
     
    // выполняем запрос
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    if($result)
    {
        echo "<span style='color:blue;'>Данные добавлены</span>";
    }
    // закрываем подключение
    mysqli_close($link);
}
?>
<h2>Добавить аудиторию</h2>
<form method="POST">
<p>Введите номер аудитории:<br> 
	<input type="number" name="number" /></p>
<p>Расположение по х в px: <br> 
	<input type="number" name="x" /></p>
<p>Расположение по y в px: <br> 
	<input type="number" name="y" /></p>
<p>Введите аудиторию: <br> 
	<input type="text" name="title" /></p>
<p>Введите полное название: <br> 
	<input type="text" name="info" /></p>
<p>Введите ФИО преподавателя: <br> 
	<input type="text" name="teacher" /></p>
	
<input type="submit" value="Добавить">
</form>
</body>
</html>