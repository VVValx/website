<?php
  class ValidateLogin extends Dbc{
    public function login(){
      if(isset($_POST["login"])){
        $username = $_POST["user"];
        $password = $_POST["pwd"];

        $sql = "SELECT * FROM users WHERE username = ?";
        $result = $this->connect()->prepare($sql);
        $result->bindParam(1, $username, PDO::PARAM_STR);
        $result->execute();

        if(empty($username) || empty($password)){
          $error = "field(s) empty";
        }else{
          $sql = "SELECT * FROM users WHERE username = ?";
          $result = $this->connect()->prepare($sql);
          $result->bindparam(1, $username, PDO::PARAM_STR);
          $result->execute();
          if($result->rowCount()){
            $rows = $result->fetch();
            if(password_verify($password, $rows["password"])){
              $_SESSION["id"] = $rows["id"];
              $_SESSION["username"] = $rows["username"];
              $_SESSION["email"] = $rows["email"];
              header("Location: index.php");
              exit(0);
            }else{
              $error = "incorrect password";
            }
          }else{
            $error = "incorrect username";
          }
        }
      }
    }
  }
 ?>
