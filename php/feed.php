<?php
	if(isset($_POST['submit'])){
		$name = $_POST['cname'];
		$email = $_POST['mail'];
		$feed = $_POST['feed'];
		$headers = 'From: '.$email . "\r\n" .
					'Reply-To: '.$email . "\r\n";
		mail("gprec.Cedu@gmail.com","FeedBack",$feed,$headers);
		include("../html/info.html");
	}
	else{
		echo "Refresh and try";
	}
?>