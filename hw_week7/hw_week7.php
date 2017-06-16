<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>第七周作業</title>
</head>
<body>
</body>
</html>

<?php

session_start();

if(isset($_POST["Item"])){
	$_SESSION["Quantity"] = $_POST["Quantity"];
	$id = $_POST["Item"];
	$_SESSION["ID"] = $id;
	switch(strtoupper($id)){
		case "S001":


?>