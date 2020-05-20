<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'test_DB');
 
if ($con == false)
{
echo "Sorry <br>";
echo mysqli_connect_error();
exit();
} else{
	echo "Работает <hr><br>";
}


$arr = mysqli_query($con, "INSERT INTO `articles_categories` (`id`,`title`) VALUES (`NULL`,`Who_is?`);");
$rra = mysqli_query($con, 'SELECT * FROM `articles_categories`');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Пример веб-страницы</title>
 </head>
 <body>
  <h1>Заголовок</h1>
<?php echo 'хмм работает';
?>
  
 </body>
</html>
