<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Big Project</title>

    <link rel = "stylesheet" type = "text/css" href = "styles.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>
    <?php
        //include 'navbar.php';
        include 'grabData.php';

        for ($i = 0; $i < count($movies); $i++)
        {
            echo '<div class="row">
                <div class="col-md-2"><p>|</p></div>
                    <div class="col-md-6">
                        <div class = "pull-left">
                            <img src = "movie_pictures/' . $movies[$i]["picture_filepath"] . '" style = "height: 150px; width: auto">
                        </div>
                        <div>
                            <p>' . $movies[$i]['movie_name'] . '</p><br/>
                            <p>$' . '$prices[$i]' . '</p><br/>
                            <button type="button" class="btn btn-success">Add to Cart</button>
                        </div>
                        <br/><hr><br/>
                    </div>
                    <div class="col-md-2"><p>|</p></div>
                </div>';
        }
        
    ?>
</body>
</html>