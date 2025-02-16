
<?php 
error_reporting(E_ALL); ini_set('display_errors', 1);
$name = $_POST['Name'];
$email = $_POST['Email'];
$message = $_POST['Message'];
$formcontent="From: $name \n Message: $message";
$recipient = "enquiry@pharmateq.in";
$subject = $_POST['Subject'];
$mailheader = "From: $email \r\n";
$mail_status = mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

if($mail_status == true){
    echo "<script>alert('Thank you for the message. We will contact you shortly.');</script>";
    header('Location:https://www.pharmateq.in/contact.html');
}else{
    echo "<script>alert('Sorry! Please try again.');</script>";
    header('Location:https://www.pharmateq.in/contact.html');
}

?>