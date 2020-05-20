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
