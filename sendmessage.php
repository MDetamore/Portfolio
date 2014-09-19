<?php

if(isset($_POST['message'])) {
  $email_to = "mikedetamore@gmail.com";
  $email_subject = "Website message: ";


  if(!isset($_POST['contactname']) ||
      !isset($_POST['replyto']) ||
      !isset($_POST['subject']) ||
      !isset($_POST['message'])) {
        echo('Problem? Problem.<br />'); 
  }

  $contactname = $_POST['contactname']; // required
  $replyto = $_POST['replyto']; // required
  $subject = $_POST['subject']; // not required
  $message = $_POST['message']; // required

  $error_message = "";

  $replytoemail = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  $replytophone = '/[0-9._-\s]+/';


  if($replyto != "" && !preg_match($replytoemail,$replyto) && !preg_match($replytophone,$replyto)) {
      $error_message .= 'Either I goofed or you did! Reply-To should accept any email or phone number, or can be blank...<br /><div class="btnmore" id="okfine">OK Fine!</button>';
  }

  if(strlen($message) < 2) {
    if(strlen($error_message) > 0) {
      $error_message .= " And, ";
    }
    $error_message .= 'I can\'t read minds. Tell me what you\'re thinking.<br />';
  }

  if(strlen($error_message) > 0) {
    die("Dude...<br /><br />".$error_message);
  }

  $email_message = "Form details below.\n\n";
 
  function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
  }
 
  $email_message .= "Name: ".clean_string($contactname)."\n";
  $email_message .= "Reply-To: ".clean_string($email_from)."\n";
  $email_message .= "Subject: ".clean_string($subject)."\n";

  if(isset($_POST['resumerequest'])){
    $email_message .= "Resume requested!";
  }

  $email_message .= "Message: ".clean_string($message)."\n";
 
       
   
       
   
  // create email headers
   
  $headers = 'From: '.$email_from."\r\n".
   
  'Reply-To: '.$email_from."\r\n" .
   
  'X-Mailer: PHP/' . phpversion();
   
  @mail($email_to, $email_subject.$subject, $email_message, $headers);  
   
   
  echo "<br />Thanks for the message! I'll get back with you soon!";
 
}
 
?>