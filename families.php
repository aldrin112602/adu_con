<?php
require_once('config.php');
require_once('global.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Families</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://www.w3schools.com/lib/w3.js"></script>
</head>

<body>

    <div class="d-flex align-items-start justify-content-start">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark col-lg-2 col-4" style="min-height: 100vh">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-4">Families</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white">
                        Form
                    </a>
                </li>
                <li>
                    <a href="families.php" class="nav-link active" aria-current="page">
                        Families
                    </a>
                </li>
                <li>
                    <a href="answers.php" class="nav-link text-white">
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

        <div style="width: auto;" class="p-5">
            <div class="d-flex align-items-center justify-content-end py-3">
                <div class="col col-lg-4">
                    <input type="text" class="form-control" placeholder="Search.." oninput="w3.filterHTML('#id01', 'tr', this.value)">
                </div>
            </div>
            <h3>Family Names</h3>
            <div class="table-responsive" style=" max-height: 70vh; overflow-y: auto;">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>Family Surename</td>
                            <td>House number</td>
                            <td>Purok/Barangay</td>
                            <td>Religion</td>
                            <td>Place of origin</td>
                            <td>Length of residency</td>
                            <!-- <td>Number of family members</td> -->
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody id="id01">
                        <?php
                        $rows = getRows(null, "form_records");
                        $i = 1;
                        foreach ($rows as $row) {
                        ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $row['familySurname'] ?></td>
                                <td><?= $row['houseNumber'] ?></td>
                                <td><?= $row['purokBarangay'] ?></td>
                                <td><?= $row['religion'] ?></td>
                                <td><?= $row['placeOfOrigin'] ?></td>
                                <td><?= $row['lengthOfResidency'] ?></td>
                                <!-- <td><?= $row['numberOfFamilyMembers'] ?></td> -->
                                <td>
                                    <a href="answers.php?id=<?= $row['id'] ?>" class="btn btn-success btn-sm">View answers</a>
                                </td>
                            </tr>
                        <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>