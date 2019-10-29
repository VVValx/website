<?php
  spl_autoLoad_register("myAutoloader");
  function myAutoloader($className){
    $path = "inc/";
    $ext = ".inc.php";

    $fullPath = $path . $className . $ext;
    include $fullPath;
  }
 ?>
