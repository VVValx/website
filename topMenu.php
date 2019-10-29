
  <?php
    if(isset($_SESSION['id'])){
      echo "
      <nav class='topMenu menu-big'>
        <ul class='topMenu-item left-menu'>
          <li class='topMenu-list'><a href='index.php'><i class='fa fa-home'></i></a></li>
          <li class='topMenu-list'><a href='gallery.php'>Gallery</a></li>
        </ul>

        <ul class='topMenu-item right-menu'>
          <li class='topMenu-list menu-search'>
            <input type='text' name='search' placeholder='Search'>
            <i class='fa fa-search'></i>
            <div class='search-content'>

            </div>
          </li>



          <li class='topMenu-list'>
            <a href='imageUpload.php'>
              <i class='fa fa-upload'></i>
            </a>
          </li>

          <li class='topMenu-list menu-btn login'>
            <form method='post' action='inc/logout.inc.php'>
              <a href=''>
                <button name='logout'>
                  Logout
                  <i class='fa fa-sign-out'></i>
                </button>
              </a>
            </form>
          </li>
        </ul>
      </nav>

      <nav class='topMenu menu-small'>
        <ul class='topMenu-item'>
          <li class='topMenu-list bars'><i class='fa fa-bars'></i></li>
        </ul>

        <ul class='topMenu-item'>
          <li class='topMenu-list search-icon'>
            <i class='fa fa-search'></i>
          </li>

          <li class='topMenu-list menu-btn login'>
            <form method='post' action='inc/logout.inc.php'>
              <a href=''>
                <button name='logout'>
                  Logout
                  <i class='fa fa-sign-out'></i>
                </button>
              </a>
            </form>
          </li>
        </ul>
      </nav>

      <nav class='topMenu-search'>
        <ul class='topMenu-search-item'>
          <li class='menu-search small'>
            <input type='text' name='search' placeholder='Search'>
            <div class='search-content'>

            </div>
          </li>
        </ul>
      </nav>

      <nav class='menu-s-body'>
        <ul class='menu-s-item'>
          <div class='close-icon'><i class='fa fa-times'></i></div>
          <li class='menu-s-list'><a href='index.php'>Home <i class='fa fa-home'></i></a></li>
          <li class='menu-s-list'><a href='gallery.php'>Gallery <i class='fa fa-image'></i></a></li>
          <li class='menu-s-list'><a href=''>Movies</a></li>
          <li class='menu-s-list'><a href=''>Tv Series</a></li>
          <li class='menu-s-list'>
            <a href='imageUpload.php'>
              Upload
              <i class='fa fa-upload'></i>
            </a>
          </li>
        </ul>
      </nav>
      ";
    }else{
      echo "
      <nav class='topMenu menu-big'>
        <ul class='topMenu-item left-menu'>
          <li class='topMenu-list'><a href='index.php'><i class='fa fa-home'></i></a></li>
          <li class='topMenu-list'><a href='gallery.php'>Gallery</a></li>
        </ul>

        <ul class='topMenu-item right-menu'>
          <li class='topMenu-list menu-search'><input type='text' name='search'
            placeholder='Search'
            />
            <i class='fa fa-search'></i>
            <div class='search-content'>

            </div>
          </li>

          <li class='topMenu-list menu-btn'>
            <a href='register.php'>
              <button>
                Register
                <i class='fa fa-user-plus'></i>
                </button>
            </a>
          </li>

          <li class='topMenu-list menu-btn login'>
            <a href='login.php'>
              <button>
                Login
                <i class='fa fa-sign-in'></i>
              </button>
            </a>
          </li>
        </ul>
      </nav>

      <nav class='topMenu menu-small'>
        <ul class='topMenu-item'>
          <li class='topMenu-list bars'><i class='fa fa-bars'></i></li>
        </ul>

        <ul class='topMenu-item'>
          <li class='topMenu-list search-icon'>
            <i class='fa fa-search'></i>
          </li>

          <li class='topMenu-list menu-btn'>
            <a href='register.php'>
              <button>
                Register
                <i class='fa fa-user-plus'></i>
              </button>
            </a>
          </li>

          <li class='topMenu-list menu-btn login'>
            <a href='login.php'>
              <button>
                Login
                <i class='fa fa-sign-in'></i>
              </button>
            </a>
          </li>
        </ul>
      </nav>

      <nav class='topMenu-search'>
        <ul class='topMenu-search-item'>
          <li class='menu-search small'>
            <input type='text' name='search' placeholder='Search'>
            <div class='search-content'>

            </div>
          </li>
        </ul>
      </nav>

      <nav class='menu-s-body'>
        <ul class='menu-s-item'>
          <div class='close-icon'><i class='fa fa-times'></i></div>
          <li class='menu-s-list'><a href='index.php'>Home <i class='fa fa-home'></i></a></li>
          <li class='menu-s-list'><a href='gallery.php'>Gallery <i class='fa fa-image'></i></a></li>
          <li class='menu-s-list'><a href=''>Movies</a></li>
          <li class='menu-s-list'><a href=''>Tv Series</a></li>
        </ul>
      </nav>

      ";
    }
   ?>
