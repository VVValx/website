<?php
  class ValidateInput{
    function inputValidate(){
      $name = $_POST["name"];
      $value = $_POST["value"];
      $username_pattern = "/^[a-zA-z]+[0-9a-zA-z]{5,}$/";
      $password_pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{5,}$/";

      $pass = $value;
      $match_username = preg_match($username_pattern, $value);
      $match_password = preg_match($password_pattern, $value);
      switch($name){
        case "username":
          if(empty($value)){
            echo $name . " cannot be empty";
          }else if(!$match_username){
            echo "username must start with lower or uper case letter and at least 6 characters";
          }
        break;
        case "password":
          if(empty($value)){
            echo $name . " cannot be empty";
          }else if(!$match_password){
            echo "password should contain at least 1 uppercase, 1 digit and at least 6 characters";
          }
        break;
        case "repassword":
          if(empty($value)){
            echo $name . " cannot be empty";
          }
        break;
        case "email":
        if(empty($value)){
          echo $name . " cannot be empty";
        }else if(!filter_var($value, FILTER_VALIDATE_EMAIL)){
          echo "Email not valid";
        }
      }
    }
  }
 ?>
