<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>第五週作業</title>
</head>
<body>
</body>
</html>

<?php

date_default_timezone_set('Asia/Taipei');
$Jan_start = mktime(00,00,00,1,1,2017);
$Jan_end = mktime(23,59,59,1,31,2017);

$Feb_start = mktime(00,00,00,2,1,2017);
$Feb_end = mktime(23,59,59,2,28,2017);

$Mar_start = mktime(00,00,00,3,1,2017);
$Mar_end = mktime(23,59,59,3,31,2017);

$Apr_start = mktime(00,00,00,4,1,2017);
$Apr_end = mktime(23,59,59,4,30,2017);

$May_start = mktime(00,00,00,5,1,2017);
$May_end = mktime(23,59,59,5,31,2017);

$Jun_start = mktime(00,00,00,6,1,2017);
$Jun_end = mktime(23,59,59,6,30,2017);

$July_start = mktime(00,00,00,7,1,2017);
$July_end = mktime(23,59,59,7,31,2017);

$Aug_start = mktime(00,00,00,8,1,2017);
$Aug_end = mktime(23,59,59,8,31,2017);

$Sep_start = mktime(00,00,00,9,1,2017);
$Sep_end = mktime(23,59,59,9,30,2017);

$Oct_start = mktime(00,00,00,10,1,2017);
$Oct_end = mktime(23,59,59,10,31,2017);

$Nov_start = mktime(00,00,00,11,1,2017);
$Nov_end = mktime(23,59,59,11,30,2017);

$Dec_start = mktime(00,00,00,12,1,2017);
$Dec_end = mktime(23,59,59,12,31,2017);

$now=time();

	if($now<=$Jan_end & $now>=$Jan_start)
		echo "<img src='1月.png'>";
		
	if($now<=$Feb_end & $now>=$Feb_start)
		echo "<img src='2月.png'>";
	
	if($now<=$Mar_end & $now>=$Mar_start)
		echo "<img src='3月.png'>";
		
	if($now<=$Apr_end & $now>=$Apr_start)
		echo "<img src='4月.png'>";
		
	if($now<=$May_end & $now>=$May_start)
		echo "<img src='5月.png'>";
		
	if($now<=$Jun_end & $now>=$Jun_start)
		echo "<img src='6月.png'>";
		
	if($now<=$July_end & $now>=$July_start)
		echo "<img src='7月.png'>";
		
	if($now<=$Aug_end & $now>=$Aug_start)
		echo "<img src='8月.png'>";
		
	if($now<=$Sep_end & $now>=$Sep_start)
		echo "<img src='9月.png'>";
		
	if($now<=$Oct_end & $now>=$Oct_start)
		echo "<img src='10月.png'>";
		
	if($now<=$Nov_end & $now>=$Nov_start)
		echo "<img src='11月.png'>";
		
	if($now<=$Dec_end & $now>=$Dec_start)
		echo "<img src='12月.png'>";

$Now = date('Y-m-d H:i:s 星期w',$now);
echo "<br>現在時間為:$Now";

$end = mktime(00,00,00,12,31,2017);
$End = $end-$now;
$day = (($End-$End%3600)/3600-($End-$End%3600)/3600%24)/24;
$sec = $End%3600%60;
$min = ($End-$sec-($day*24*60*60))/60;

echo "<br>若世界末日為2017/12/31 00:00:00，則現在距離世界末日還有$day 日$min 分$sec 秒";
?>