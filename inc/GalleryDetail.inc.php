<?php
  class GalleryDetail extends GetDetail{
    public function detail(){
          $rows = $this->returnDetail();
          $filename = $rows["filename"];
          $path = $rows["path"];
          echo "
            <div class='details-item'>
              <div class='details-list'>
                <img src='$path' >
              </div>

              <div class='details-list'>
                <a href='imgDownload.php?img=$filename'>
                  <button class='download-btn'>
                    Download
                  </button>
                </a>
              </div>
            </div>
          ";
      }
    }
?>
