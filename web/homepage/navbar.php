<header id = "top">
    <ul>
        <li class = "<?php echo basename($_SERVER['PHP_SELF'])?>" ><a href = "intro.php">Home Page</a></li>
        <li class = "<?php echo $_GET['page'] == "assignments.php" ? "active" : ""; ?>" ><a href = "assignments.php">Assignments</a></li>
        <li><a href = "https://byui.instructure.com">Canvas</a></li> 
    </ul>
</header>