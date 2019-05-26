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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php
        include 'grabData.php';

        $search = false;
        if(isset($_GET["search"]))
        {
            $word = strtolower($_GET["search"]);
            $search = true;
        }

        if($search)
        {
            foreach ($movies as $rows)
            {
                echo $rows["movie_name"];
                $i = 0;
                if ((strpos(strtolower($rows["movie_name"]), $word) == true) || 
                    (strpos(strtolower($rows["movie_summary"]), $word) == true) ||
                    (strpos(strtolower($rows["movie_rating"]), $word) == true))
                {
                    $movies2[$i] = $rows;
                }
                else
                {
                    foreach($rows["directors"] as $data)
                    {
                        if (strpos(strtolower($data), $word) == true)
                            $movies2[$i] = $rows;
                    }
                    foreach($rows["actors"] as $data)
                    {
                        if (strpos(strtolower($data), $word) == true)
                            $movies2[$i] = $rows;
                    }
                    foreach($rows["genres"] as $data)
                    {
                        if (strpos(strtolower($data), $word) == true)
                            $movies2[$i] = $rows;
                    }
                }

                $i++;
            }

            $movies = $movies2;
        }
    ?>
</head>
<body>
    <?php
        include 'navbar.php';

        for ($i = 0; $i < count($movies); $i++)
        {
            echo '<div class="row">
                <div class="col-md-2"><p></p></div>
                    <div class="col-md-6">
                        <div class = "pull-left">
                            <img src = "movie_pictures/' . $movies[$i]["picture_filepath"] . '" style = "height: 150px; width: auto">
                        </div>
                        <div>
                            <h4>&nbsp;&nbsp;&nbsp;' . $movies[$i]['movie_name'] . '</h4><hr>
                            <h5>&nbsp;&nbsp;&nbsp;&nbsp;<b>Director(s): </b>';
                            $directors = $movies[$i]["directors"];
                            for ($j = 0; $j < count($directors); $j++)
                            {
                                echo $directors[$j];
                                if ($j != count($directors) - 1)
                                    echo ', ';
                            }
                            echo '</h5>
                            <h5>&nbsp;&nbsp;&nbsp;&nbsp;<b>Starring Actors: </b>';
                            $actors = $movies[$i]["actors"];
                            for ($j = 0; $j < count($actors); $j++)
                            {
                                echo $actors[$j];
                                if ($j != count($actors) - 1)
                                    echo ', ';
                            }
                            echo '</h5><br/><br/>
                            <button type="button" class="btn btn-success">Add to Cart</button>
                        </div>
                        <br/><hr>
                    </div>
                    <div class="col-md-2"><p></p></div>
                </div>';
        }
        
    ?>
</body>
</html>