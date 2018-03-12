<?php

function sanitizeFormPassword($inputText) {
  $inputText = strip_tags($inputText); //strips all html elements that might be in a string
  return $inputText;
}

function sanitizeFormUsername($inputText) {
  $inputText = strip_tags($inputText); //strips all html elements that might be in a string
  $inputText = str_replace(" ", "", $inputText); //removes all spaces from string replace it with empty string so users can't have names with empty spaces (john doe turns in johndoe)
  return $inputText;
}

function sanitizeFormString($inputText) {
  $inputText = strip_tags($inputText); //strips all html elements that might be in a string
  $inputText = str_replace(" ", "", $inputText); //removes all spaces from string replace it with empty string so users can't have names with empty spaces (john doe turns in johndoe)
  $inputText = ucfirst(strtolower($inputText)); // make the entire string lowercase and then uppercase first character of name
  return $inputText;
}




if(isset($_POST['registerButton'])) {
  //Register button was pressed
  $username = sanitizeFormUsername($_POST['registerUsername']);
  $firstName = sanitizeFormString($_POST['firstName']);
  $lastName = sanitizeFormString($_POST['lastName']);
  $email = sanitizeFormString($_POST['email']);
  $email2 = sanitizeFormString($_POST['email2']);
  $password = sanitizeFormString($_POST['password']);
  $password2 = sanitizeFormString($_POST['password2']);

  $wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2); 

  if($wasSuccessful == true) {
    header("Location: index.php");
  }

}

?>