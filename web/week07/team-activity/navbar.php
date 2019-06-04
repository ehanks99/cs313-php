
<div class="topnav">
  <a class="active" href="mainPage.php">Home Page</a>
  <?php
    if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true)
    {
      //echo '<a href="loginPage.php">Hello, ' . $_SESSION["firstName"] . '</a>';
      echo '<a href="logout.php">Logout</a>';
    }
    else
    {
      echo '<a href="loginPage.php">Login</a>';
    }
  ?>
</div>