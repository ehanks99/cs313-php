<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Big Project</title>

    <?php
        include 'grabData.php';
    ?>
</head>
<body>
        <?php echo $movies[0]['movie_name']; ?>
</body>
</html>