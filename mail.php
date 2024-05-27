<?php
//get data from form  

$name = $_POST['name'];
$visitor_email= $_POST['email'];
$subject=$_POST['subject'];
$message= $_POST['message'];
$to = "captainprasad1234@gmail.com";
$subject = "info@geccaptainaids.online";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:contact.html");
?>






<?php
$name = $_POST['name'];
$visitor_eamil = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_form='info@geccaptainaids.online';

$email_subject = 'New Form Submission';

$email_body= "User Name:$name.\n".
             "User Email:$visitor_email.\n".
             "User subject:$subject.\n".
             "User Message:$message.\n";

$to='captainklp1234@gmail.com';
$header = "From:$email_from\r\n";
$headers. = "Reply-To:$visitor_email\r\n";
mail($to,$email_subject,$eamil_body,$headers)

header("Location:contact.html");

?>