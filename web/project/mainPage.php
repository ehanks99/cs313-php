<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team Activity 05</title>
    
    <?php
        include 'dbConnect.php';

        $search = false;
        if(isset($_POST["Search"]))
        {
            $book = $_POST["Search"];
            $search = true;
        }

        if (isset($db) && $search)
        {
            $statement = $db->prepare('SELECT * FROM scriptures WHERE book=:book');
            $statement->execute(array(':book' => $book));
            $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        else if (isset($db))
        {
            $statement = $db->query('SELECT * FROM scriptures');
            $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);
        }
    ?>
</head>
<body>


</body>
</html>