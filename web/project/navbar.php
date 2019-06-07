
<div class="topnav">
  <a class="active" href="mainPage.php">Home Page</a>
  <a href="editMovie.php">Edit Movie</a>
  <?php
    if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true)
    {
      if ($_SESSION["isAdmin"] == "T")
        echo '<a href="addMovie.php">Add Movie</a>';

      //echo '<a href="loginPage.php">Hello, ' . $_SESSION["firstName"] . '</a>';
      echo '<a href="logout.php">Logout</a>';
    }
    else
      echo '<a href="loginPage.php">Login</a>';
  ?>
  <button class="dropbtn">Edit 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content">
    <a href="editDirectors.php">Edit Director Names</a>
    <a href="editActors.php">Edit Actor Names</a>
    <a href="#">Link 3</a>
  </div>
  <div class="search-container">
    <form action="mainPage.php" method="get">
      <input type="text" placeholder="Search..." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>