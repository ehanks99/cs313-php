<?php
    include 'dbConnect.php';
    
    $stmt = $db->prepare(
        'SELECT director.director_name, director.director_id
         FROM director');
    $stmt->execute();
    $directors = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $db->prepare(
        'SELECT starring_actor.actor_name, starring_actor.actor_id
         FROM starring_actor');
    $stmt->execute();
    $actors = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $db->prepare(
        'SELECT rating.rating_name, rating.rating_id
         FROM rating');
    $stmt->execute();
    $ratings = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


    <div class="container">
        <h2 id="heading" class="text-center">Add a Movie to the List</h2><br/>
        <form id="movieForm" class="form-horizontal" action="addMovieCode.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="movieName">Movie Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="movieName" placeholder="" name="movieName" required>
                </div>
            </div>
            <div class="form-group">
                <input type="button" value="Add a Director" onclick="addDirector()">
                <label class="control-label col-sm-2" for="director">Director(s):</label>
                <div class="col-sm-6" id="directors">
                    <!--<input type="text" class="form-control" id="director0" placeholder="" name="director[]" required>-->
                    
                    <select class="form-control" id="director0" name="director[]" required>
                        <?php
                            foreach($directorsHere as $director)
                            {
                                echo "\n<option>" . $director["director_name"] . "</option>";
                            }
                        ?>
                    </select>

                </div>
            </div>
            <div class="form-group">
                <input type="button" value="Add an Actor" onclick="addActor()">
                <label class="control-label col-sm-2" for="actor">Starring Actor(s):</label>
                <div class="col-sm-6" id="actors">
                    <!--<input type="text" class="form-control" id="actor0" placeholder="" name="actor[]" required>-->
                    
                    <select class="form-control" id="actor0" name="actor[]" required>
                        <?php
                            foreach($actorsHere as $actor)
                            {
                                echo "\n<option>" . $actor["actor_name"] . "</option>";
                            }
                        ?>
                    </select>

                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="summary">Movie Summary:</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="summary" name="summary" rows="5" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="rated">Rated:</label>
                <div class="col-sm-2">
                    <!--<input type="text" class="form-control" id="rated" placeholder="PG-13" name="rated" maxlength="6" required>-->
                    
                    <select class="form-control" name="rated" id="rated" required>
                        <?php
                            foreach($ratingsHere as $rating)
                            {
                                echo "\n<option>" . $rating["rating_name"] . "</option>";
                            }
                        ?>
                    </select>

                </div>
            </div>

            <hr>
            <h3 class="text-center">Select the genres</h3>
            <?php
                echo '<div class="form-check">';
                $stmt = $db->prepare("SELECT genre_type FROM genre");
                $stmt->execute();

                $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($resultSet as $row)
                {
                    echo '
                    <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="genre[]" value="' . $row["genre_type"] . '" id="' . $row["genre_type"] . '">
                    ' . $row["genre_type"] . '<br>
                    ';
                }

                echo '</div>';
            ?>

            <!-- add a hidden textfield for the movie id to be placed -->
            <input type='text' style='visibility:hidden' id='movieId' name='movieId'>

            <div class="form-group">        
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </div>