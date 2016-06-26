<?php
  $from_name = $_POST['name'];
  $from_email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $robotest = $_POST['url'];


  $to = 'contact@vancouvergranola.com';
  $subject = 'Vancouver Granola Contact Submission';


  // prepare email body text
  $Body .= "Name: ";
  $Body .= $from_name;
  $Body .= "\n";
   
  $Body .= "Email: ";
  $Body .= $from_email;
  $Body .= "\n";

  $Body .= "Phone: ";
  $Body .= $phone;
  $Body .= "\n";
   
  $Body .= "Message: ";
  $Body .= $message;
  $Body .= "\n";

  
  if ($robotest) {
    echo "robot";
    return "robot";
  } else {
    $success = mail($to, $subject, $Body, "From:".$from_email);
    if ($success) {
      echo "success";
      return "success";
    } else {
      echo "error";
      return "error";
    }
  }
?>