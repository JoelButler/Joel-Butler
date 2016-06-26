<?php
if($_POST){
  $to = 'joel.c.butler@gmail.com';
  $subject = 'Contact Form Submission';
  $from_name = $_POST['name'];
  $from_email = $_POST['email'];
  $message = $_POST['message'];
  $robotest = $_POST['url'];



  // prepare email body text
  $Body .= "Name: ";
  $Body .= $from_name;
  $Body .= "\n";
   
  $Body .= "Email: ";
  $Body .= $from_email;
  $Body .= "\n";
   
  $Body .= "Message: ";
  $Body .= $message;
  $Body .= "\n";

    if($robotest)
      $error = "You are a gutless robot.";
    else{
      if($from_name && $from_email && $message){
        $header = "From: $from_name <$from_email>";
        if(mail($to, $subject, $message, $header))
          $success = "Your message was sent!";
        else
          $error = "There was an error sending your message.";
      }else
        $error = "All fields are required.";
    }
    if($error)
      echo '<div class="msg error">'.$error.'</div>';
    elseif($success)
      echo '<div class="msg success">'.$success.'</div>';
  }
?>
