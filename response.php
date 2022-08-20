<?php

$name = $_GET['name'];
$surname = $_GET['surname'];
$gender = $_GET['radio'];
$location = $_GET['dropdown'];
$message = $_GET['textarea'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5">
        <h3 class="text-center text-white">Data table</h3>
        <table class="table mx-auto table-bordered w-50">
            <thead>
                <tr>
                    <th class="table-dark">Name</th>
                    <th class="table-dark">Gender</th>
                    <th class="table-dark">Hobbies</th>
                    <th class="table-dark">Location</th>
                    <th class="table-dark">Message left</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="table-light"><?php echo $name; ?> <br>
                        <?php echo $surname; ?>
                    </td>
                    <td class="table-light"><?php echo $gender; ?></td>
                    <td class="table-light"> <?php
                                                if (!empty($_GET['check_list'])) {
                                                    foreach ($_GET['check_list'] as $value) {
                                                        echo $value . '<br/>';
                                                    }
                                                }
                                                ?>
                    </td>
                    <td class="table-light"><?php echo $location; ?></td>
                    <td class="table-light"><?php echo $message; ?></td>
                </tr>
            </tbody>
        </table>

        <div class="text-center">
            <a href="form.php" class="btn btn-info mt-3" id="button">Return</a>
        </div>

    </div>
</body>

</html>