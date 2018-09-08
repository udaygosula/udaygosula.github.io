<?php
	if(isset($_POST['submit'])){
		$name = $_POST['cname'];
		$email = $_POST['mail'];
		$feed = $_POST['feed'];
		$mail = "gprec.capp2018@gmail.com";
		$headers = 'From: '.$email . "\r\n" .
					'Reply-To: '.$email. "\r\n";
		mail($mail,"FeedBack",$feed,$headers);
		include("../html/info.html");
	}
	else{
		echo "Refresh and try";
	}
?>