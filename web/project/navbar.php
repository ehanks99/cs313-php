<script>
  /* When the user clicks on the button, 
  toggle between hiding and showing the dropdown content */
  function myFunction() 
  {
    document.getElementById("myDropdown").classList.toggle("show");
  }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function(e) 
  {
    if (!e.target.matches('.dropbtn')) 
    {
      var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) 
      {
        myDropdown.classList.remove('show');
      }
    }
  }
</script>

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
  
  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction()">Edit
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="myDropdown">
      <a href="editDirectors.php">Edit Directors</a>
      <a href="editActors.php">Edit Actors</a>
      <a href="#">Link 3</a>
    </div>
  </div> 
  <div class="search-container">
    <form action="mainPage.php" method="get">
      <input type="text" placeholder="Search..." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>