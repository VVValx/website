<?php
  include "Dbc.inc.php";
  class ValidateForm extends Dbc{
    function __construct(){
      $username = $_POST["username"];
      $password = $_POST["password"];
      $repassword = $_POST["repassword"];
      $email = $_POST["email"];
      $password_hash = password_hash($password, PASSWORD_DEFAULT);
      $username_pattern = "/^[a-zA-z]+[0-9a-zA-z]{5,}$/";
      $password_pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{5,}$/";

      $match_username = preg_match($username_pattern, $username);
      $match_password = preg_match($password_pattern, $password);

      if(empty($username) || empty($password) || empty($repassword) || empty($email)){
        echo "fields empty";
      }else if(!$match_username){
        echo "username must start with lower or uper case letter and at least 6 characters";
      }else if(!$match_password){
        echo "password should contain at least 1 uppercase, 1 digit and at least 6 characters";
      }else if($repassword !== $password){
        echo "passwords do not match";
      }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Email is not valid";
      }else{
        $sql = "INSERT INTO users (username, password, email)
                VALUES (?, ?, ?)";

        $result = $this->connect()->prepare($sql);
        $result->bindParam(1, $username, PDO::PARAM_STR);
        $result->bindParam(2, $password_hash, PDO::PARAM_STR);
        $result->bindParam(3, $email, PDO::PARAM_STR);
        $result->execute();
        echo "success";
      }
    }
  }
  $validateForm = new ValidateForm();
?>
