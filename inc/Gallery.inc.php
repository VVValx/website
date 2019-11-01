<?php
  class Gallery extends GetData{
    function galleryDisplay(){
      $data = $this->returnData();
      foreach($data as $rows){
        $filename = $rows["filename"];
        $path = $rows["path"];
        $title = $rows["title"];
        echo "
        <div class='img-grid'>
          <a href='galleryDetail.php?img=$filename'>
            <img src=$path>
          </a>

          <div class='img-grid-item'>
            <div class='img-grid-icon cursor-pointer'>
              <i class='fa fa-heart-o'></i>
            </div>

            <div class='img-grid-title'>$title</div>
          </div>
        </div>
        ";
      }
    }
  }
?>
