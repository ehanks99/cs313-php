
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
  <div class="search-container">
    <!--<form action="mainPage.php" method="get">-->
    <form action="mainPage.php" method="get">
      <script>alert(window.location.pathname);</script>
      <input type="text" placeholder="Search..." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>