<?php 
	$from = $_POST["email"];
	$to = "alexgo_96@hotmail.com";
	$subject = "CONSULTA";
	$txt = $_POST["consulta"];
	$headers = "From: ".$from;

mail($to,$subject,$txt,$headers);
?>