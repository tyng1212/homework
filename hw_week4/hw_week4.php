<?php
	
	session_start();
	header('Content-type: text/html; charset=utf-8');

	$_SESSION["name"] = $_POST["name"];
	$_SESSION["pwd"] = $_POST["pwd"];
	$_SESSION["add"] = $_POST["add"];
	$_SESSION["btd"] = $_POST["btd"];
	$_SESSION["gender"] = $_POST["gender"];
	$_SESSION["color"] = $_POST["color"];

	echo "Hi,".$_SESSION["name"]."<br>";
	echo "您所設定的密碼是:".$_SESSION["pwd"]."<br>";
	echo "您的地址為:".$_SESSION["add"]."<br>";
	echo "您的生日為:".$_SESSION["btd"]."<br>";
	if ($_SESSION["gender"]=="male") {
		echo "您的性別為男性<br>";
	}else{
		echo "您的性別為女性<br>";
	}
	echo "您喜愛的顏色為:".$_SESSION["color"]."<br>";

	echo "<a href='../hw_week8/hw_week8.php'>第八周作業</a>";

?>