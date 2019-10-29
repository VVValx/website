<?php
include "Dbc.inc.php";
  class DisplayImages extends Dbc{
    function __construct(){
      $cat = strtolower($_POST["cat"]);
      if($cat == "all"){
        $sql = "SELECT * FROM gallery";
      }else{
        $sql = "SELECT * FROM gallery WHERE category = '$cat'";
      }

      $result = $this->connect()->prepare($sql);
      $result->execute();
      if($result->rowCount()){
        while($rows = $result->fetch()){
          $path = $rows["path"];
          $title = $rows["title"];
          $id = $rows["id"];
          echo "
          <div class='img-grid'>
            <img src=$path>
            <div class='img-grid-item'>
              <div class='img-grid-icon cursor-pointer'>
                <i class='fa fa-heart-o'></i>
              </div>

              <div class='img-grid-title'>$title</div>
            </div>
          </div>
          ";
        }
      }else{
        header("location: ../topMenu.php?databaseError");
        exit(0);
      }


    }
  }
  $displayImages = new DisplayImages();
?>
