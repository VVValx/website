<?php
  class ImgDownload extends GetDetail{
    public function download(){
          $rows = $this->returnDetail();
          $filename = $rows["filename"];
          $path = $rows["path"];
          if(file_exists($path)){
            header("Cache-Control: must-revalidate");
            header("Pragma: public");
            header("Content-Type: application/zip");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=" . $filename);
            header("Content-Transfer-encoding: binary");

            readfile($path);
            exit(0);
          }else{
            echo "File does not exist";
          }
        }
      }
 ?>
