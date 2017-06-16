<?php

header('Content-type: text/html; charset=utf-8');

$Link = @mysqli_connect('localhost','root','a10141212','hw_week8');


	$name=$_POST["name"];
	$pwd=$_POST["pwd"];
	$add=$_POST["add"];
	$btd=$_POST["btd"];
	$gender=$_POST["gender"];
	$color=$_POST["color"];
		
	$sql = "INSERT INTO hw (name,pwd,add,btd,gender,color) VALUES ('$name','$pwd','$add','$btd','$gender','$color')";
	$result=mysqli_query($Link,$sql);
	
	$sql2 = "SELECT * FROM hw";
	$result=mysqli_query($Link,$sql2);
	
	while($row=mysqli_fetch_assoc($result)){
			echo $row["id"]."<br>";
			echo $row["name"]."<br>";
			echo $row["pwd"]."<br>";
			echo $row["add"]."<br>";
			echo $row["btd"]."<br>";
			echo $row["gender"]."<br>";
			echo $row["color"]."<br>";
	}	
		
mysqli_close($Link);
?>