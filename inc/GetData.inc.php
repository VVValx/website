<?php
  class GetData extends Dbc{
    private function data(){
      $sql = "SELECT * FROM gallery";
      $result = $this->connect()->prepare($sql);
      $result->execute();
      if($result->rowCount()){
        while($rows = $result->fetch()){
          $data[] = $rows;
        }
        return $data;
      }
    }

    public function returnData(){
      return $this->data();
    }
  }
 ?>
