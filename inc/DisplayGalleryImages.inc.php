<?php
  class DisplayGalleryImages extends GetData{
    public function displayGallery(){
      $data = $this->returnData();
      foreach($data as $img){
        $title = $img["title"];
        $path = $img["path"];
        $id=$img["id"];

        echo "

        <div class='img-grid'>
          <img src=$path >
          <div class='img-grid-item'>
            <div class='img-grid-icon cursor-pointer'>
              <i class='fa fa-heart-o'></i>
            </div>

            <div class='img-grid-title'>
              $title
            </div>
          </div>
        </div>
        ";
      }

    }
  }
?>
