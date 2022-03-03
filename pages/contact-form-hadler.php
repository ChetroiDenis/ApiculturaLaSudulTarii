<?php
 &name = $_Post["name"];
 $visitor_email = $_Post["email"];
 $message = $_Post["message"];

 $email_form = "denischetroi45@gmail.com";

$email_subject = "New Form Submition";

$email_body = "User Name: $name.\n".
                "User email: $visitor_email"
                   "User message: $message"

$to = "denischetroi45@gmail.com"
$headers = "form: $email_form \r\n";
$headers = "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header(Location: index.html);               
 ?>