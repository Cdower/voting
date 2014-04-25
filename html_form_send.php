<?php
if(isset($_POST['email'])) {
     
        
  function died($error) {
    // your error code can go here
    echo "We are very sorry, but there were error(s) found with the form you submitted. ";
    echo "These errors appear below.<br /><br />";
    echo $error."<br /><br />";
    echo "Please go back and fix these errors.<br /><br />";
    die();
  }
     
  // validation expected data exists
  if(!isset($_POST['first_name']) ||
     !isset($_POST['last_name']) ||
     !isset($_POST['RIN'])) {
     died('We are sorry, but there appears to be a problem with the form you submitted.');       
  }
     
  $first_name = $_POST['first_name']; // required
  $last_name = $_POST['last_name']; // required
  $voter_RIN = $_POST['RIN']; // required
     
  $error_message = "";
  $RIN_exp = '/^[0-9]$/';
  if(!preg_match($RIN_exp,$voter_RIN)) {
    $error_message .= 'The RIN number you entered does not appear to be valid.<br />';
  }
  $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
  $email_message = "Form details below.\n\n";
     
  function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
  }
     
  $email_message .= "First Name: ".clean_string($first_name)."\n";
  $email_message .= "Last Name: ".clean_string($last_name)."\n";
  $email_message .= "RIN: ".clean_string($voter_RIN)."\n";
     
  // create email headers
  $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
  @mail($email_to, $email_subject, $email_message, $headers);  
  ?>
 
<!-- place your own success html below -->

derp 
 
<?php
   }			   }
die();
?>