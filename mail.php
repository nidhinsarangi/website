<?php

// getting variables from form

$emailTo = "info@dynamicenergysa.com";
$subject = trim($_REQUEST['firstname'])."\n".trim($_REQUEST['lastname']);
$firstname = trim($_REQUEST['firstname']);
$email = trim($_REQUEST['email']);
$message = $_REQUEST['message'];

// prepare email body text

$Body = "You have a message from: ";
$Body .= $firstname." ".$_REQUEST['lastname'];
$Body .= "\n";
$Body .= "Contact No: ".$_REQUEST['contactno'];
$Body .= "\n";
$Body .= "Email: ".$_REQUEST['email'];
$Body .= "\n";
$Body .= "Company Name: ".$_REQUEST['companyname'];
$Body .= "\n";
$Body .= "Location: ".$_REQUEST['location'];
$Body .= "\n";
$Body .= "Message: \n".$message;

$from= $_REQUEST['email'];

//$sent1 = mail("samjiks@hotmail.com", "Subjec", "messaage", "From: $from\n");
$sent = mail($emailTo, $subject, $Body, "From: $from\n");

echo $sent;


?>
