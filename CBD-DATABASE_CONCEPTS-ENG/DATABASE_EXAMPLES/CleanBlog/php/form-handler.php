<?php

// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
       if( isset($_REQUEST['ajax']) ){
           die('{"status":"error"}');
       }else{
           // Not using ajax
       }
   }

   $name = strip_tags(htmlspecialchars($_POST['name']));
   $email = strip_tags(htmlspecialchars($_POST['email']));
   $phone = strip_tags(htmlspecialchars($_POST['phone']));
   $message = strip_tags(htmlspecialchars($_POST['message']));


// Emails form data to you and the person submitting the form and adds it to a database
// Test for db
$db = new mysqli("localhost","root","root","cleanblog");
$sql = "SELECT id FROM 'form_submissions' LIMIT 1";
$result = $db->query($sql);
if (empty($result)) {
	$sql = "CREATE TABLE `form_submissions` (
		`id` int(11) NOT NULL AUTO_INCREMENT,
		`name` text COLLATE utf8_unicode_ci,
		`phone` text COLLATE utf8_unicode_ci,
		 `email` varchar(255) DEFAULT NULL,
		 `message` text COLLATE utf8_unicode_ci,
		 `submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
		 PRIMARY KEY (`id`)
		 ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
		$result = $db->query($sql);
}

// Receive and sanitize input
$name = mysqli_real_escape_string($db, $name);
$email = mysqli_real_escape_string($db, $email);
$phone = mysqli_real_escape_string($db, $phone);
$message = mysqli_real_escape_string($db, $message);
// write to db
$sql = sprintf("INSERT INTO `form_submissions` (`name`,`phone`,`email`,`message`) VALUES ('%s','%s','%s','%s')",$name,$phone,$email,$message);

$result = $db->query($sql);



// Create the email and send the message
$to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "Here are the details:\n\nName: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email";
$email_body = wordwrap($email_body, 70);

ob_start();

mail($to,$email_subject,"You have received a new message from your website contact form.\n\n".$email_body,$headers);
mail($email,"Thank you for your submission".$email_body,$headers);

$output = ob_get_contents();



//echo $output;

if( isset($_REQUEST['ajax']) ){

    if( empty($output)) {

        die('{"status":"success"}');

    }else{

        die('{"status":"error"}');

    }

}else{
    // Not using ajax
}

die();
?>