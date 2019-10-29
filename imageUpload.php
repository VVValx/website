<?php include "header.php"?>
    <form method="post" action="" enctype="multipart/form-data">
        <div class="form-container">
          <header class="form-header">
            <h1>Upload Your Image</h1>
          </header>

            <div class="form-input">
              <input type="file" name="img" />
            </div>

            <div class="form-input">
              <input type="text" name="title" placeholder="Title" />
            </div>

            <div class="form-input">
              <select name="category">
                <option disabled selected>Choose category</option>
                <option value="animal">Animal</option>
                <option value="celebrities">Celebrities</option>
                <option value="cars">Cars</option>
                <option value="gaming">Gaming</option>
                <option value="movies">Movies</option>
                <option value="places">Places</option>
              </select>
            </div>

            <div class="form-input">
              <button class="cursor-pointer" name="upload">Upload</button>
            </div>
          </div>
      </form>
    </div>

    <?php
      $upload = new GalleryUpload();
      $upload->upload();
     ?>
  </body>
</html>
