<?php
require_once('config.php');
require_once('global.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="d-flex align-items-start justify-content-start">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark col-lg-2 col-4" style="min-height: 100vh">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-4">Answers</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white">
                        Form
                    </a>
                </li>
                <li>
                    <a href="families.php" class="nav-link text-white">
                        Families
                    </a>
                </li>
                <li>
                    <a href="answers.php" class="nav-link active" aria-current="page">
                        Answers
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="assets/img/avatar.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>Admin</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
        <div style="width: auto; max-height: 100vh; overflow-y: auto;" class="p-5">
            <h3>Answers</h3>
            <?php
            $id = $_GET['id'] ?? 0;
            $row = getRows("id='$id'", "form_records");
            if (count($row) == 0) {
                header("location: families.php");
            }

            foreach ($row as $key => $value) {
                foreach ($value as $innerKey => $innerValue) {
                    if(($innerKey != 'id') && ($innerKey != 'date')) {
                        echo "<h5>". $innerKey. "</h5>";
                        if(is_array($innerValue)) {
                            echo "<ul>";
                            foreach($innerValue as $v) {
                                echo "<li>". $v. "</li>";
                            }
                            echo "</ul>";
                        } else {
                            echo "<p>". $innerValue. "</p>";
                        }
                    }
                }
                // echo "<h3>". $key. "</h3>";
                // if(is_array($value)) {
                //     echo "<ul>";
                //     foreach($value as $v) {
                //         echo "<li>". $v. "</li>";
                //     }
                //     echo "</ul>";
                // } else {
                //     echo "<p>". $value. "</p>";
                // }
            }
           
            ?>


        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>