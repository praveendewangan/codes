<?php
if(isset($_POST["n"]) && isset($_POST["e"]) && isset($_POST["m"])){
	$n = $_POST['n'];//simplify($_POST['n']);
	$e = $_POST['e'];//simplify($_POST['e']);
	$m = $_POST['m'];//simplify($_POST['m']);
	/*$to = "er.praveendewangan@gmail.com";
	$from = $e;
	$subject = "contact form message";
	$message = '<b>Name:</b> '.$n.' </br><b>Email:<b/> '.$e.' </p>'.$m.'</p>';
	$headers = "From: $from\n";
	$headers = "MIME-Version: 1.0\n";
	$headers = "Content-type: text/html; charset=iso-8859-1\n";
	if(mail($to,$subject,$message,$headers)){
		echo "Success";
	}else{
		echo "The server failed to send the message. please try again letter";
	}*/
	echo "success";
	
}
//	function simplify($data){
//		$data = trim($data);
//		$data = stripslashes($data);
//		$data = htmlspecialchars($data);
//		return $data;
//	}
?>