
<?php
$name_error = $email_error = $number_error = $select_error = "";
$name = $email = $number = $message = "";
$name_error_style = $email_error_style = $number_error_style = $select_error_style = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if (empty($_POST["name"])) {
    $name_error = "Please enter your name";
    $name_error_style = "is-danger";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z'\.\- ]*$/",$name)) {
      $name_error = "Only letters and white space allowed";
      $name_error_style = "is-danger"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $email_error = "Please enter your email";
    $email_error_style = "is-danger";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format";
      $email_error_style = "is-danger"; 
    }
  }

  if (empty($_POST["number"])) {
    $number_error = "Please enter your number";
    $number_error_style = "is-danger";
  } else {
    $number = test_input($_POST["number"]);
    if (!is_numeric($number) || strlen($number) < 7 || strlen($number) > 11) {
      $number_error = "Please enter a valid number";
      $number_error_style = "is-danger";
    }
  }
  
  foreach ($_POST['options'] as $select)
  {
    $selected_option = $select; 
  }
  if(preg_match("/select option/",$selected_option)){
    $select_error = "Please select an option above";
    $select_error_style = "is-danger";
  }
  else{
    $optionSend = test_input($selected_option);
  }

  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }
  
  if($name_error == "" && $email_error == "" && $number_error == "" && $select_error == "")
  {
    $email_from = $email;
    $email_subject = "NEW CONTACT FORM SUBMISSION";
    $email_message = "A new form submission has been made on your website." ."\n\n" ."Name:  ".$name. "\n\n"."Email:  ".$email."\n\n"."Contact Number:  ".$number.  "\n\n"."Query:  ".$selected_option."\n\n"."Message:  ".$message;
    $email_body = wordwrap($email_message,70);
  
    $to = "mikeymail96@yahoo.co.uk";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header('Location: thank-you.php');
  }
}

?>