<?php

try {
		$con = new PDO('mysql:host=localhost;dbname=shop','root','');

		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch (Exception $e) 
{
	$e->getMessage();
}
?>
