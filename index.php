<?php
require_once('config.php')

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="d-flex align-items-start justify-content-start">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark col-lg-2 col-4" style="min-height: 100vh">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-4">Form</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link active" aria-current="page">
                        Form
                    </a>
                </li>
                <li>
                    <a href="families.php" class="nav-link text-white">
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
                    <!-- <li><a class="dropdown-item" href="#">New project...</a></li> -->
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
        <div class="p-5 col" style="height: 100vh; overflow-y: auto;">
            <form action method="post" class="container">
                <h2 class="text-center mb-4">FAMILY HEALTH ASSESSMENT FORM</h2>

                <div class="form-group row mt-4">
                    <div class="col-md-4">
                        <label for="familySurname">Family Surname:</label>
                        <input required type="text" class="form-control form-control-sm" id="familySurname" placeholder="Enter Family Surname">
                    </div>
                    <div class="col-md-4">
                        <label for="houseNumber">House #:</label>
                        <input required type="text" class="form-control form-control-sm" id="houseNumber" placeholder="Enter House Number">
                    </div>
                    <div class="col-md-4">
                        <label for="purokBarangay">Purok/Barangay:</label>
                        <input required type="text" class="form-control form-control-sm" id="purokBarangay" placeholder="Enter Purok/Barangay">
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <div class="col-md-6">
                        <label for="religion">Religion:</label>
                        <input required type="text" class="form-control form-control-sm" id="religion" placeholder="Enter Religion">
                    </div>
                    <div class="col-md-6">
                        <label for="placeOfOrigin">Place of Origin:</label>
                        <input required type="text" class="form-control form-control-sm" id="placeOfOrigin" placeholder="Enter Place of Origin">
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <div class="col-md-6">
                        <label for="lengthOfResidency">Length of Residency:</label>
                        <div class="input required-group">
                            <input required type="number" class="form-control form-control-sm" id="lengthOfResidency" placeholder="Enter Length">
                            <div class="input required-group-append">
                                <span class="input required-group-text">mos./years</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="numberOfFamilyMembers">Number of family members:</label>
                        <input required type="number" class="form-control form-control-sm" id="numberOfFamilyMembers" placeholder="Enter Number of Family Members">
                    </div>
                </div>
                <h4 class="mt-4">A. FAMILY DATA</h4>
                <h5>1. FAMILY MEMBERS</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Names</th>
                            <th>Date of Birth</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Civil Status</th>
                            <th>Educational attainment</th>
                            <th>Occupation</th>
                            <th>Income</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input required type="text" class="form-control form-control-sm"></td>
                            <td><input required type="date" class="form-control form-control-sm"></td>
                            <td><input required type="number" class="form-control form-control-sm"></td>
                            <td><input required type="text" class="form-control form-control-sm"></td>
                            <td><input required type="text" class="form-control form-control-sm"></td>
                            <td><input required type="text" class="form-control form-control-sm"></td>
                            <td><input required type="text" class="form-control form-control-sm"></td>
                            <td><input required type="number" class="form-control form-control-sm"></td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>



                <h4>2. FAMILY STRUCTURE AND CHARACTERISTICS</h4>

                <div class="form-group mt-4">
                    <label>2.1 Family Structure</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="nuclear">
                        <label class="form-check-label" for="nuclear">Nuclear</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="twocareer">
                        <label class="form-check-label" for="twocareer">Two-career</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="singleParent">
                        <label class="form-check-label" for="singleParent">Single Parent</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="adolescentFamily">
                        <label class="form-check-label" for="adolescentFamily">Adolescent family</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="blended">
                        <label class="form-check-label" for="blended">Blended</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="cohabitating">
                        <label class="form-check-label" for="cohabitating">Cohabitating</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gayLesbian">
                        <label class="form-check-label" for="gayLesbian">Gay and Lesbian</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="extended">
                        <label class="form-check-label" for="extended">Extended</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label>2.2 Base on Authority</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="patriarchal">
                        <label class="form-check-label" for="patriarchal">Patriarchal</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="matriarchal">
                        <label class="form-check-label" for="matriarchal">Matriarchal</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="egalitarian">
                        <label class="form-check-label" for="egalitarian">Egalitarian</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="autocratic">
                        <label class="form-check-label" for="autocratic">Autocratic</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label>2.3 Stages of Family Relationships</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="beginning">
                        <label class="form-check-label" for="beginning">Beginning</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="childBearing">
                        <label class="form-check-label" for="childBearing">Child-bearing</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="familyWithPreschooler">
                        <label class="form-check-label" for="familyWithPreschooler">Family with Pre-schooler</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="withSchoolAge">
                        <label class="form-check-label" for="withSchoolAge">With school age</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="teenagersYoungAdults">
                        <label class="form-check-label" for="teenagersYoungAdults">Teenagers & Young adults</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="postParental">
                        <label class="form-check-label" for="postParental">Post parental</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="aging">
                        <label class="form-check-label" for="aging">Aging</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label>2.4 Dominant in decision making</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="decisionMaking" id="mother">
                        <label class="form-check-label" for="mother">Mother</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="decisionMaking" id="father">
                        <label class="form-check-label" for="father">Father</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="decisionMaking" id="both">
                        <label class="form-check-label" for="both">Both</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="decisionMaking" id="others">
                        <label class="form-check-label" for="others">Others</label>
                        <input type="text" class="form-control" placeholder="Specify others">
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label for="howDecisionsAreMade">2.5 How decisions are made</label>
                    <textarea class="form-control" id="howDecisionsAreMade" rows="3"></textarea>
                </div>
                <div class="form-group mt-4">
                    <label>2.6 General Family Relationships/Dynamics</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="familyRelationships" id="highlyFavorable">
                        <label class="form-check-label" for="highlyFavorable">Highly Favorable</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="familyRelationships" id="moderatelyFavorable">
                        <label class="form-check-label" for="moderatelyFavorable">Moderately Favorable</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="familyRelationships" id="unfavorable">
                        <label class="form-check-label" for="unfavorable">Unfavorable</label>
                    </div>
                    <input type="text" class="form-control" placeholder="Remarks: (Describe briefly)">
                </div>

                <div class="form-group mt-4">
                    <label for="significantOthers">2.7 Significant others (Indicate roles they play in the family's life)</label>
                    <textarea class="form-control" id="significantOthers" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label for="relationshipToLargerCommunity">2.8 Relationship of the family to the larger Community (Describe the nature and extent of participation)</label>
                    <textarea class="form-control" id="relationshipToLargerCommunity" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label>2.8.1 Activities Attended:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="barangayAssembly">
                        <label class="form-check-label" for="barangayAssembly">Barangay Assembly</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="cleanupDrives">
                        <label class="form-check-label" for="cleanupDrives">Clean-up Drives</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="healthTeachings">
                        <label class="form-check-label" for="healthTeachings">Health Teachings</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="seminars">
                        <label class="form-check-label" for="seminars">Seminars</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label>2.8.2 Extent of Participation</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="participationExtent" id="always">
                        <label class="form-check-label" for="always">Always</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="participationExtent" id="mostOfTheTime">
                        <label class="form-check-label" for="mostOfTheTime">Most of the Time</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="participationExtent" id="sometimes">
                        <label class="form-check-label" for="sometimes">Sometimes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="participationExtent" id="seldom">
                        <label class="form-check-label" for="seldom">Seldom</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="participationExtent" id="never">
                        <label class="form-check-label" for="never">Never</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label for="bondingOfFamilyMembers">2.9 Describe the bonding of the family members</label>
                    <textarea class="form-control" id="bondingOfFamilyMembers" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label for="howMembersCommunicate">2.10 How members communicate</label>
                    <textarea class="form-control" id="howMembersCommunicate" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label for="howProblemsAreSolved">2.11 How problems are solved</label>
                    <textarea class="form-control" id="howProblemsAreSolved" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label for="howConflictIsHandled">2.12 How conflict is handled</label>
                    <textarea class="form-control" id="howConflictIsHandled" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label for="divisionOfLabor">2.13 Division of labor</label>
                    <textarea class="form-control" id="divisionOfLabor" rows="3"></textarea>
                </div>


            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>