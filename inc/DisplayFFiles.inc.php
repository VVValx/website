<?php
  class DisplayFFiles{
    function __construct($path, $class){
      $this->path = $path;
      $this->class = $class;
      $opendir = opendir($this->path);
      while($readdir = readdir($opendir)){
        if($readdir != "." && $readdir != ".."){
          echo "<div class=". $this->class . ">";
          echo "<img src=". $this->path . $readdir . " />";
          echo "</div>";
        }
      }
    }
  }
 ?>
