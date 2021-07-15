<?php

if(isset($_POST['submit'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$msg = $_POST['comment'];

	$to='studylikechamp009@gmail.com';
	$subject = 'Form Submission';
	$message = "Name: ".$fname."\n"."Wrote the following: "."\n\n".$msg;
	$headers = "From: ".$email;

	if(mail($to, $subject, $message, $headers)){
		echo "<h1>Sent Successfully! Thank you"." ".$fname.", We will contact you shortly!</h1>";
	}
	else{
		echo "something went wrong";
	}
}

?>