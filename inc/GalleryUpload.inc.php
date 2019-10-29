<?php
  include "Dbc.inc.php";
  class GalleryUpload extends Dbc{
     function upload(){
      if(isset($_POST["upload"])){
         $path = "images/gallery/";
        $extAllowed = ["jpg", "jpeg","png", "gif"];
        $title = $_POST["title"];
        if(isset($_POST["category"])){
          $category = $_POST["category"];
        }else{
          header("location: imageUpload.php?file=chooseCategory");
          exit(0);
        }

        $img_name = $_FILES["img"]["name"];
        $img_error = $_FILES["img"]["error"];
        $img_size = $_FILES["img"]["size"];
        $tmp_name = $_FILES["img"]["tmp_name"];
        $ext = pathinfo($img_name, PATHINFO_EXTENSION);
         $newImg_name = uniqid("", true) . "." . $ext;
        $fullPath = $path . $newImg_name;
        if(empty($img_name) || empty($title) || empty($category)){
          header("location: imageUpload.php?file=empty");
          exit(0);
        }else{
          if(!in_array($ext, $extAllowed)){
            header("location: imageUpload.php?file=notAnImage");
            exit(0);
          }else if($img_error == 1){
            header("location: imageUpload.php?file=error");
            exit(0);
          }else if($img_size > 5242880 ){
            header("location: imageUpload.php?file=tooLarge");
            exit(0);
          }else{
              if(!move_uploaded_file($tmp_name, $path.$newImg_name)){
                header("location: imageUpload.php?file=uploadError");
                exit(0);
              }else{
                $sql = "INSERT INTO gallery (title, filename, path, category)
                        VALUES (?, ?, ?, ?)";
                $result = $this->connect()->prepare($sql);
                $result->bindParam(1, $title, PDO::PARAM_STR);
                $result->bindParam(2, $newImg_name, PDO::PARAM_STR);
                $result->bindParam(3, $fullPath, PDO::PARAM_STR);
                $result->bindParam(4, $category, PDO::PARAM_STR);
                if(!$result->execute()){
                  header("location: imageUpload.php?file=databaseError");
                  exit(0);
                }else{
                  header("location: gallery.php?file=uploadSuccessful");
                  exit(0);
                }
              }
          }
        }
      }
    }
  }
 ?>
