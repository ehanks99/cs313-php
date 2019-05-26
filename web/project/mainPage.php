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
        include 'grabData.php';

        for ($i = 0; $i < count($movies); $i++)
        {
           echo '<div class="row row-eq-height">
                    <div class="col-md-4">
                       <div class = "pull-right">
                          <p>' . $movies[$i]['movie_name'] . '</p><br/>
                          <p>$' . '$prices[$i]' . '</p><br/>
                          <button type="button" class="btn btn-success">Add to Cart</button>
                       </div>
  
                       <img src = "movie_pictures/' . $movies[$i]['picture_filepath'] . '" class = "img-responsive">
                    </div>
                    <div class="col-md-4">
                       <div class = "pull-right">
                          <p>' . $movies[$i + 1]['movie_name'] . '</p><br/>
                          <p>$' . '$prices[$i + 1]' . '</p><br/>
                          <button type="button" class="btn btn-success">Add to Cart</button>
                       </div>
  
                       <img src = "movie_pictures/' . $movies[$i + 1]['picture_filepath'] . '" class = "img-responsive">
                    </div>
                    <div class="col-md-4">
                       <div class = "pull-right">
                          <p>' . $movies[$i + 2]['movie_name'] . '</p><br/>
                          <p>$' . '$prices[$i + 2]' . '</p><br/>
                          <button type="button" class="btn btn-success">Add to Cart</button>
                       </div>
  
                       <img src = "movie_pictures/' . $movies[$i + 2]['picture_filepath'] . '" class = "img-responsive">
                    </div>
                 </div>
                 <br/><hr><br/>';
              
              $i += 2;
        }
    ?>
</body>
</html>