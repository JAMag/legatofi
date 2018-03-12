<?php
  class Account {

    private $errorArray;

    public function __construct() {
        $this->errorArray = array();
    }

    public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
        $this->validateUsername($un);
        $this->validateFirstname($fn);
        $this->validateLastname($ln);
        $this->validateEmails($em, $em2);
        $this->validatePasswords($pw, $pw2);

        if(empty($this->errorArray)) {
          //If the errorArray is empty push to db
          return true;
        }
        else {
          return false;
        }
    }

    public function getError($error) {
        //check errorArray to see if the error message exists
      if(!in_array($error, $this->errorArray)) {
        $error = "";
      }
      return "<span class='errorMessage'>$error</span>";
    }

    // validations
    private function validateUsername($un) {
        if(strlen($un) > 25 || strlen($un) < 5) {
          // username has to be between 5 and 25 characters, if not add error
          array_push($this->errorArray, Constants::$usernameCharacters);
          return;
        }
        //TODO: check if username already exists so each username is unique
    }

    private function validateFirstname($fn) {
        if(strlen($fn) > 25 || strlen($fn) < 2) {
          // username has to be between 5 and 25 characters, if not add error
          array_push($this->errorArray, Constants::$firstNameCharacters);
          return;
        }
    }

    private function validateLastname($ln) {
          if(strlen($ln) > 25 || strlen($ln) < 2) {
          // username has to be between 5 and 25 characters, if not add error
          array_push($this->errorArray, Constants::$lastNameCharacters);
          return;
        }
    }

    private function validateEmails($em, $em2) {
      if($em != $em2) {
        array_push($this->errorArray, Constants::$emailsDoNotMatch);
        return;
      }

      if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
        array_push($this->errorArray, Constants::$emailInvlaid);
        return;
      }

      //TODO: Check that username hasn't already been used
      
    }
    private function validatePasswords($pw, $pw2) {

      if($pw != $pw2) {
        array_push($this->errorArray, Constants::$passwordsDoNotMatch);
        return;
      }

      if(preg_match('/[^A-Za-z0-9]/', $pw)) {
        array_push($this->errorArray, Constants::$passwordsNotAlphanumeric);
        return;
      }

      if(strlen($pw) > 25 || strlen($pw) < 7) {
          // username has to be between 5 and 25 characters, if not add error
          array_push($this->errorArray, Constants::$passwordsDoNotMatch);
          return;
      }
      
    }

  }
?>    