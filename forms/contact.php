<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "emailaddress@here.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
//   /**
//   * Requires the "PHP Email Form" library
//   * The "PHP Email Form" library is available only in the pro version of the template
//   * The library should be uploaded to: vendor/php-email-form/php-email-form.php
//   * For more info and help: https://bootstrapmade.com/php-email-form/
//   */

//   $errors = '';
//   $myemail = 'yourname@website.com';//<-----Put Your email address here.
//   if(empty($_POST['name'])  || 
//      empty($_POST['email']) || 
//      empty($_POST['message']))
//   {
//       $errors .= "\n Error: all fields are required";
//   }
  
//   $name = $_POST['name']; 
//   $email_address = $_POST['email']; 
//   $message = $_POST['message']; 
  
//   if (!preg_match(
//   "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
//   $email_address))
//   {
//       $errors .= "\n Error: Invalid email address";
//   }

//   if( empty($errors))

// {

// $to = $myemail;

// $email_subject = "Contact form submission: $name";

// $email_body = "You have received a new message. ".

// " Here are the details:\n Name: $name \n ".

// "Email: $email_address\n Message \n $message";

// $headers = "From: $myemail\n";

// $headers .= "Reply-To: $email_address";

// mail($to,$email_subject,$email_body,$headers);

// //redirect to the 'thank you' page

// header('Location: contact-form-thank-you.html');

// }
?>
