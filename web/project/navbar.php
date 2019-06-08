
<div class="navbar">
  <a class="active" href="mainPage.php">Home Page</a>
  <a href="editMovie.php">Edit Movie</a>
  <div class="dropdown">
    <button class="dropbtn">Edit 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="editMovieNames.php">Movie Names</a>
      <a href="editDirectors.php">Directors</a>
      <a href="editActors.php">Actors</a>
    </div>
  </div> 
  
  <div class="search-container">
    <form id="navbarSearch" action="mainPage.php" method="get">
      <input type="text" placeholder="Search..." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>
