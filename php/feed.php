<?php
	$name = $_POST['cname'];
	$email = $_POST['mail'];
	$feed = $_POST['feed'];
	$header = $email."\r\nCC : gosula54321@gmail.com";
	mail("gprec.Cedu@gmail.com","FeedBack",$feed,$header);
	
?>