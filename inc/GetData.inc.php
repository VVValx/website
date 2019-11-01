<?php
  class GetData extends Dbc{
    private function imageData(){
      if(isset($_POST["cat"])){
        $cat = strtolower($_POST["cat"]);
        if($cat == "all"){
          $sql = "SELECT * FROM gallery";
        }else{
          $sql = "SELECT * FROM gallery WHERE category = '$cat'";
        }

      }else{
        $sql = "SELECT * FROM gallery";
      }

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
      return $this->imageData();
    }
  }
 ?>
