<?php
  include "Dbc.inc.php";
  class ImageSearch extends Dbc{
    function __construct(){
      if(isset($_POST["search"])){
        $search = $_POST["search"];
        if(!empty($search)){
          $sql = "SELECT * FROM gallery WHERE title LIKE '%$search%' OR
                  category LIKE '%$search%' LIMIT 3";
          $result = $this->connect()->prepare($sql);
          $result->execute();
          if($result->rowCount()){
            while($rows=$result->fetch()){
              $path = $rows["path"];
              $title = $rows["title"];
              $filename = $rows["filename"];
              echo "
                <div class='search-item'>
                  <div class='img-item'>
                    <img src=$path>
                  </div>

                  <div class='detail-item'>
                    <header class='search-header'>
                      <h4>$title</h4>
                    </header>

                    <div class='search-btn'>
                      <a href='galleryDetail.php?img=$filename'>
                        <button>
                          More details
                        </button>
                        </a>
                    </div>
                  </div>
                </div>
              ";
            }
          }
        }
      }
    }
  }
  $search = new ImageSearch();
 ?>
