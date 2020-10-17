<?php

if(isset($_POST['Submit'])){

foreach ($_POST as $key => $value) {
	# code...
	${$key} = addslashes($value);
}

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$ip = getenv("REMOTE_ADDR");
$browser = $_SERVER['HTTP_USER_AGENT'];

$message =  '<img src="https://tog.ng"/><br>';
$message .= "<hr>\n";
$message .= "Dear Sir,<br><br>";
$message .= "\n";
$message .= "Kindly see below details of Enquires made on The TOG's Portal<br><br>";

$message .= "Full Name: ".$_POST['name']."<br><br>";
$message .= "Email: ".$_POST['email']."<br><br>";
$message .= "Subject: ".$_POST['subject']."<br><br>";
$message .= "Message: ".$_POST['message']."<br><br>";
$message .= "IP: ".$ip."<br><br>";
$message .= "User-Agent: ".$browser."<br><br>";
$message .= "\n";


$recipient = "augustoko@gmail.com";
$subject = "TOG Enquiry";
 mail("$to", "$subject", $message);
if (mail($recipient,$subject,$message,$headers))
	   {
        echo "<script> location.href='https://tog.ng'; </script>";

	   }
else
  	   {
 		echo "ERROR! Please go back and try again.";
  	   }

}
?>
