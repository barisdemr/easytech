<?php 
 try {
 	$bag=new PDO("mysql:Host=Localhost;dbname=DATABASE İSMİ GİR ;charset=UTF8","DATABASE KULLANICI ADI","ŞİFRE");


 } catch (Exception $e) {
 	echo $e->getMessage();
 }

 ?>