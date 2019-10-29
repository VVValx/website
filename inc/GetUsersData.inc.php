<?php
  class GetUsersData extends Dbc{
    public function usersData(){
      $sql = "SELECT * FROM users";
      $result = $this->connect()->prepare($sql);
      $result->bindparam(1,$this->username, PDO::PARAM_STR);
      $result->execute();

      if($result->rowCount()){
        while($rows = $result->fetch()){
          $data[] = $rows;
        }
        return $data;
      }else{
        $error = "username incorrect";
      }
    }
  }
 ?>
