<?php
$host = "localhost";
$user = "it58160633";
$passwd = "aptx4869";
$dbname = "it58160633";
$conn = new mysqli($host,$user,$passwd,$dbname);
$conn->query('SET NAMES UTF8');
if($conn->connect_error) die ($conn->connect_error);
?>