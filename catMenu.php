
  <nav class="cat">
    <ul class="cat-item">
      <li class="cat-list">all</li>
        <?php
          $category = new GetCategory();
          $category->returnCat();
        ?>
    </ul>
  </nav>
