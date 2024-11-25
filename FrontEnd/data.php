<?php 
include("connection.php"); 

$getlastTempSql = "SELECT * FROM `temp`ORDER BY time DESC LIMIT 5";
$getOnlTempSql = "SELECT * FROM `temp`ORDER BY time DESC LIMIT 1";
$getAllTempSql = "SELECT * FROM `temp`ORDER BY time DESC";

$lastTempRaw = mysqli_query($conn,$getlastTempSql);
$OnlTempRaw = mysqli_query($conn,$getOnlTempSql);
$AllTempRaw = mysqli_query($conn,$getAllTempSql);

$lastTemp = mysqli_fetch_all($lastTempRaw , MYSQLI_ASSOC);
$OnlTemp = mysqli_fetch_all($OnlTempRaw , MYSQLI_ASSOC);
$AllTemp = mysqli_fetch_all($AllTempRaw , MYSQLI_ASSOC);



?>