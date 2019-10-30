<?php
  class GetDetail extends Dbc{
    private function detailGetter(){
      if(isset($_GET["img"])){
        $img = $_GET["img"];
        $sql = "SELECT * FROM gallery WHERE filename = ?";
        $result = $this->connect()->prepare($sql);
        $result->bindParam(1,$img,PDO::PARAM_STR);
        $result->execute();
        if($result->rowCount()){
          $rows = $result->fetch();
          return $rows;
        }
      }
    }

    public function returnDetail(){
      $rows = $this->detailGetter();
      return $rows;
    }
  }
?>
