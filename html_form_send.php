<?php
if(isset($_POST['email'])) {
     
    
    $email_to = "sponis@gmail.com";
     
    $email_subject = "Contact Us Form Submission";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['first_name']))
        {
        died('We are sorry, but First Name expected');      
    }
    if(!isset($_POST['last_name']))
        {
        died('We are sorry, but Last Name expected');      
    }
    if(!isset($_POST['email']))
        {
        died('We are sorry, but Email Address expected');      
    }
    if(!isset($_POST['telephone']))
        {
        died('We are sorry, but Telephone Number expected');      
    }
    if(!isset($_POST['DoB']))
        {
        died('We are sorry, but Date of Birth expected');      
    }
    if(!isset($_POST['address']))
        {
        died('We are sorry, but Home Address expected');      
    }
    if(!isset($_POST['country']))
        {
        died('We are sorry, but Country expected');      
    }
    if(!isset($_POST['comments']))
        {
        died('We are sorry, but Comments expected');      
    }
     if(!isset($_POST['terms']))
        {
        died('We are sorry, but Terms and Conditions expected');      
    }

    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $DoB = $_POST['DoB']; // required
    $address = $_POST['address']; // not required
    $country = $_POST['country']; // required
    $comments = $_POST['comments']; // not required
    $terms = $_POST['terms']; // required

     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
    //$date_exp = "/^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/";
  //if(!preg_match($date_exp,$DoB)) {
    //$error_message .= 'The Date of Birth you entered does not appear to be valid.<br />';
  //}  
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
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Date of Birht: ".clean_string($DoB)."\n";
    $email_message .= "Home Address: ".clean_string($address)."\n";
    $email_message .= "Country: ".clean_string($country)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
    $email_message .= "terms: ".clean_string($terms)."\n";
     
     
echo "Send to: $email_to \n";
echo "Subject: $email_subject \n";
echo $email_message;
  }
?>