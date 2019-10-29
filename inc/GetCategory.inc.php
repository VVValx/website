<?php
  class GetCategory extends Dbc{
    private function category(){
      $sql = "SELECT * FROM gallery GROUP BY category";
      $result = $this->connect()->prepare($sql);
      $result->execute();
      if($result->rowCount()){
        while($rows = $result->fetch()){
          $data[] = $rows;
        }
        return $data;
      }
    }


    public function returnCat(){
      $data = $this->category();
      foreach($data as $info){
        echo "<li class='cat-list'>";
          echo $info["category"];
        echo "</li>";
      }
    }
  }
 ?>
