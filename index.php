<?php
require 'conn.php';
$data = $conn->query('SELECT * FROM tasks');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>PHP PDO TodoAction</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form class="form-inline" action="insert.php" method="post">
        <div class="form-group mx-sm-3 mb-2">
            <label for="text" class="sr-only">Enter Task</label>
            <input name="mytask" type="text" class="form-control" id="text" placeholder="Enter Task">
        </div>
        <button name="submit" type="submit" class="btn btn-primary mb-2">Create</button>
    </form>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Task Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $user) : ?>
                    <tr>
                        <td><?= $user->id ?></td>
                        <td><?= $user->name ?></td>
                        <td><a href="delete.php?id=<?= $user->id ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>