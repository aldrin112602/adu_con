<?php
    require_once('config.php');
    require_once('handle_submit_form.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
            <form action method="post" class="container needs-validation" novalidate>
                <h2 class="text-center mb-4 fw-bold">FAMILY HEALTH ASSESSMENT FORM</h2>

                <div class="form-group row mt-4">
                    <div class="col-md-4">
                        <label class="form-label fw-bold" for="familySurname">Family Surname:</label>
                        <input type="text" class="form-control"  id="familySurname" placeholder="Enter Family Surname">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold" for="houseNumber">House #:</label>
                        <input type="text" class="form-control"  id="houseNumber" placeholder="Enter House Number">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold" for="purokBarangay">Purok/Barangay:</label>
                        <input type="text" class="form-control"  id="purokBarangay" placeholder="Enter Purok/Barangay">
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <div class="col-md-6">
                        <label class="form-label fw-bold" for="religion">Religion:</label>
                        <input type="text" class="form-control"  id="religion" placeholder="Enter Religion">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold" for="placeOfOrigin">Place of Origin:</label>
                        <input type="text" class="form-control"  id="placeOfOrigin" placeholder="Enter Place of Origin">
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <div class="col-md-6">
                        <label class="form-label fw-bold" for="lengthOfResidency">Length of Residency:</label>
                        <div class="input-group">
                            <input type="number" class="form-control"  id="lengthOfResidency" placeholder="Enter Length">
                            <div class="input-group-append">
                                <span class="input-group-text">mos./years</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold" for="numberOfFamilyMembers">Number of family members:</label>
                        <input type="number" class="form-control"  id="numberOfFamilyMembers" placeholder="Enter Number of Family Members">
                    </div>
                </div>
                <h5 class="mt-4 fw-bold">A. FAMILY DATA</h5>
                <h4 class="fw-bold mt-4">1. FAMILY MEMBERS</h4>
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
                        <?php
                        for ($i = 0; $i < 10; $i++) {
                        ?>
                            <tr>
                                <td><input <?= $i == 0 ? '' : null ?> name="names[]" type="text" class="form-control"></td>
                                <td><input <?= $i == 0 ? '' : null ?> name="dateOfBirth[]" type="date" class="form-control"></td>
                                <td><input <?= $i == 0 ? '' : null ?> name="age[]" type="number" class="form-control"></td>
                                <td><input <?= $i == 0 ? '' : null ?> name="sex[]" type="text" class="form-control"></td>
                                <td><input <?= $i == 0 ? '' : null ?> name="civilStatus[]" type="text" class="form-control"></td>
                                <td><input <?= $i == 0 ? '' : null ?> name="educationalAttainment[]" type="text" class="form-control"></td>
                                <td><input <?= $i == 0 ? '' : null ?> name="occupation[]" type="text" class="form-control"></td>
                                <td><input <?= $i == 0 ? '' : null ?> name="income[]" type="number" class="form-control"></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>



                <h4 class="fw-bold mt-4">2. FAMILY STRUCTURE AND CHARACTERISTICS</h4>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">2.1 Family Structure</label>
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
                    <label class="form-label fw-bold">2.2 Base on Authority</label>
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
                    <label class="form-label fw-bold">2.3 Stages of Family Relationships</label>
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
                    <label class="form-label fw-bold">2.4 Dominant in decision making</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="decisionMaking" id="mother">
                        <label class="form-check-label" for="mother">Mother</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="decisionMaking" id="father">
                        <label class="form-check-label" for="father">Father</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="decisionMaking" id="both">
                        <label class="form-check-label" for="both">Both</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="decisionMaking" id="others">
                        <label class="form-check-label" for="others">Others</label>
                        <input type="text" class="form-control" placeholder="Specify others">
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="howDecisionsAreMade">2.5 How decisions are made</label>
                    <textarea class="form-control"  id="howDecisionsAreMade" rows="3"></textarea>
                </div>
                <div class="form-group mt-4">
                    <label class="form-label fw-bold">2.6 General Family Relationships/Dynamics</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="familyRelationships" id="highlyFavorable">
                        <label class="form-check-label" for="highlyFavorable">Highly Favorable</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="familyRelationships" id="moderatelyFavorable">
                        <label class="form-check-label" for="moderatelyFavorable">Moderately Favorable</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="familyRelationships" id="unfavorable">
                        <label class="form-check-label" for="unfavorable">Unfavorable</label>
                    </div>
                    <input type="text" class="form-control"  placeholder="Remarks: (Describe briefly)">
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="significantOthers">2.7 Significant others (Indicate roles
                        they play in the family's life)</label>
                    <textarea class="form-control"  id="significantOthers" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="relationshipToLargerCommunity">2.8 Relationship of the family
                        to the larger Community (Describe the nature and extent of participation)</label>
                    <textarea class="form-control"  id="relationshipToLargerCommunity" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">2.8.1 Activities Attended:</label>
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
                    <label class="form-label fw-bold">2.8.2 Extent of Participation</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="participationExtent" id="always">
                        <label class="form-check-label" for="always">Always</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="participationExtent" id="mostOfTheTime">
                        <label class="form-check-label" for="mostOfTheTime">Most of the Time</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="participationExtent" id="sometimes">
                        <label class="form-check-label" for="sometimes">Sometimes</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="participationExtent" id="seldom">
                        <label class="form-check-label" for="seldom">Seldom</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="participationExtent" id="never">
                        <label class="form-check-label" for="never">Never</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="bondingOfFamilyMembers">2.9 Describe the bonding of the
                        family members</label>
                    <textarea class="form-control"  id="bondingOfFamilyMembers" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="howMembersCommunicate">2.10 How members communicate</label>
                    <textarea class="form-control"  id="howMembersCommunicate" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="howProblemsAreSolved">2.11 How problems are solved</label>
                    <textarea class="form-control"  id="howProblemsAreSolved" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="howConflictIsHandled">2.12 How conflict is handled</label>
                    <textarea class="form-control"  id="howConflictIsHandled" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="divisionOfLabor">2.13 Division of labor</label>
                    <textarea class="form-control"  id="divisionOfLabor" rows="3"></textarea>
                </div>



                <h4 class="fw-bold mt-4">3. HOME AND ENVIRONMENT</h4>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.1 Construction Materials used</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="constructionMaterials" id="strong">
                        <label class="form-check-label" for="strong">Strong</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="constructionMaterials" id="light">
                        <label class="form-check-label" for="light">Light</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="constructionMaterials" id="mixed">
                        <label class="form-check-label" for="mixed">Mixed</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="constructionMaterials" id="makeshift">
                        <label class="form-check-label" for="makeshift">Makeshift</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.2 Home ownership</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="homeOwnership" id="owned">
                        <label class="form-check-label" for="owned">Owned</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="homeOwnership" id="rent">
                        <label class="form-check-label" for="rent">Rent</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="homeOwnership" id="rentFree">
                        <label class="form-check-label" for="rentFree">Rent free</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.3 Lighting facility</label>
                    <div class="form-group mt-4">
                        <label class="form-label fw-bold">3.3.1</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  name="lightingFacility1" id="electric">
                            <label class="form-check-label" for="electric">Electric</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  name="lightingFacility1" id="keroseneLamp">
                            <label class="form-check-label" for="keroseneLamp">Kerosene lamp</label>
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <label class="form-label fw-bold">3.3.2</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  name="lightingFacility2" id="adequate">
                            <label class="form-check-label" for="adequate">Adequate</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  name="lightingFacility2" id="inadequate">
                            <label class="form-check-label" for="inadequate">Inadequate</label>
                        </div>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.4 Cooking facility</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="cookingFacility" id="electricStove">
                        <label class="form-check-label" for="electricStove">Electric stove</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="cookingFacility" id="gas">
                        <label class="form-check-label" for="gas">Gas</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="cookingFacility" id="kerosene">
                        <label class="form-check-label" for="kerosene">Kerosene</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="cookingFacility" id="firewoodCharcoal">
                        <label class="form-check-label" for="firewoodCharcoal">Firewood/charcoal</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.4.1 Sanitary Condition:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="sanitaryCondition" id="good">
                        <label class="form-check-label" for="good">Good</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="sanitaryCondition" id="poor">
                        <label class="form-check-label" for="poor">Poor</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.5 Drainage facility</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="drainageFacility" id="none">
                        <label class="form-check-label" for="none">None</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="drainageFacility" id="openDrainage">
                        <label class="form-check-label" for="openDrainage">Open Drainage</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="drainageFacility" id="blindDrainage">
                        <label class="form-check-label" for="blindDrainage">Blind drainage</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="drainageFacility" id="others">
                        <label class="form-check-label" for="others">Others</label>
                        <input type="text" class="form-control" placeholder="Specify others">
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.6 Number of bedrooms</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="numberOfBedrooms" id="none">
                        <label class="form-check-label" for="none">None</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="numberOfBedrooms" id="one">
                        <label class="form-check-label" for="one">1</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="numberOfBedrooms" id="two">
                        <label class="form-check-label" for="two">2</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="numberOfBedrooms" id="threeOrMore">
                        <label class="form-check-label" for="threeOrMore">3 or more</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="sleepingArrangement">Remarks: (Describe the Family's Sleeping
                        Arrangement)</label>
                    <textarea class="form-control"  id="sleepingArrangement" rows="3"></textarea>
                </div>


                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.7 Adequacy of Living Space</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="livingSpaceAdequacy" id="adequatelivingSpaceAdequacy">
                        <label class="form-check-label" for="adequatelivingSpaceAdequacy">Adequate</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="livingSpaceAdequacy" id="inadequatelivingSpaceAdequacy">
                        <label class="form-check-label" for="inadequatelivingSpaceAdequacy">Inadequate</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.8 Numbers of windows</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="numberOfWindows" id="none">
                        <label class="form-check-label" for="none">None</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="numberOfWindows" id="one">
                        <label class="form-check-label" for="one">1</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="numberOfWindows" id="two">
                        <label class="form-check-label" for="two">2</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="numberOfWindows" id="threeOrMore">
                        <label class="form-check-label" for="threeOrMore">3 or more</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.9 Food storage</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="foodStorage" id="none">
                        <label class="form-check-label" for="none">None</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="foodStorage" id="refrigerator">
                        <label class="form-check-label" for="refrigerator">Refrigerator</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="foodStorage" id="cabinet">
                        <label class="form-check-label" for="cabinet">Cabinet</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="foodStorage" id="others">
                        <label class="form-check-label" for="others">Others</label>
                        <input type="text" class="form-control" placeholder="Specify others">
                    </div>
                </div>



                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="foodPrep">3.10 Food Preparation</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="fried" name="foodPrep" value="fried">
                        <label class="form-check-label" for="fried">Fried</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="boiled" name="foodPrep" value="boiled">
                        <label class="form-check-label" for="boiled">Boiled</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="otherFoodPrep" name="foodPrep" value="other">
                        <label class="form-check-label" for="otherFoodPrep">Others</label>
                        <input type="text" class="form-control" placeholder="Enter other food preparation method">
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="toiletType">3.11 Toilet Type</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="pailSystem" name="toiletType" value="pailSystem">
                        <label class="form-check-label" for="pailSystem">Pail System</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="openPitPrivy" name="toiletType" value="openPitPrivy">
                        <label class="form-check-label" for="openPitPrivy">Open Pit Privy</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="closePitPrivy" name="toiletType" value="closePitPrivy">
                        <label class="form-check-label" for="closePitPrivy">Close Pit Privy</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="boredHoleLatrine" name="toiletType" value="boredHoleLatrine">
                        <label class="form-check-label" for="boredHoleLatrine">Bored Hole Latrine</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="toiletType">Antipolo Type</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="waterSealedLatrine" name="antipoloType" value="waterSealedLatrine">
                        <label class="form-check-label" for="waterSealedLatrine">Water-sealed latrine</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="flushType" name="antipoloType" value="flushType">
                        <label class="form-check-label" for="flushType">Flush Type</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="comfortRoomDistance">3.12 Comfort Room Distance</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  id="inside" name="comfortRoomDistance" value="inside">
                        <label class="form-check-label" for="inside">Inside</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  id="outside" name="comfortRoomDistance" value="outside">
                        <label class="form-check-label" for="outside">Outside</label>
                    </div>
                    <div class="form-group mt-4">
                        <label for="outsideDistance">If outside, how far? (in meters)</label>
                        <input type="text" class="form-control"  id="outsideDistance" placeholder="Enter distance in meters">
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="comfortRoomOwnership">3.13 Comfort Room Ownership</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  id="owned" name="comfortRoomOwnership" value="owned">
                        <label class="form-check-label" for="owned">Owned</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  id="public" name="comfortRoomOwnership" value="public">
                        <label class="form-check-label" for="public">Public</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="sanitaryCondition">3.14 Sanitary Condition: Describe briefly
                        the cleanliness of the toilet</label>
                    <textarea class="form-control"  id="sanitaryCondition" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="waterSource">3.14 Water Source</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  id="pointSource" name="waterSource" value="pointSource">
                        <label class="form-check-label" for="pointSource">Point source</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  id="communalSystem" name="waterSource" value="communalSystem">
                        <label class="form-check-label" for="communalSystem">Communal System/stand post</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  id="waterworksSystem" name="waterSource" value="waterworksSystem">
                        <label class="form-check-label" for="waterworksSystem">Waterworks system</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="waterOwnership">3.15 Ownership of water supply</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  id="private" name="waterOwnership" value="private">
                        <label class="form-check-label" for="private">Private</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  id="publicWater" name="waterOwnership" value="public">
                        <label class="form-check-label" for="publicWater">Public</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="potabilityRemarks">Remarks: (Potability)</label>
                    <textarea class="form-control"  id="potabilityRemarks" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="garbageDisposal">3.16 Method of Garbage Disposal</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="collected" name="garbageDisposal" value="collected">
                        <label class="form-check-label" for="collected">Collected:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  id="government" name="collectedBy" value="government">
                            <label class="form-check-label" for="government">Government</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  id="private" name="collectedBy" value="private">
                            <label class="form-check-label" for="private">Private</label>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="burning" name="garbageDisposal" value="burning">
                        <label class="form-check-label" for="burning">Burning</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="composting" name="garbageDisposal" value="composting">
                        <label class="form-check-label" for="composting">Composting</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="segregation" name="garbageDisposal" value="segregation">
                        <label class="form-check-label" for="segregation">Segregation</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="hogFeeding" name="garbageDisposal" value="hogFeeding">
                        <label class="form-check-label" for="hogFeeding">Hog feeding</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="openDumping" name="garbageDisposal" value="openDumping">
                        <label class="form-check-label" for="openDumping">Open Dumping</label>
                    </div>
                    <div class="form-group mt-4">
                        <label for="otherGarbageDisposal">Others:</label>
                        <input type="text" class="form-control" id="otherGarbageDisposal" placeholder="Enter other garbage disposal method">
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="animalRaised">3.17 Animal Raised</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="dog" name="animalRaised" value="dog">
                        <label class="form-check-label" for="dog">Dog</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="cats" name="animalRaised" value="cats">
                        <label class="form-check-label" for="cats">Cats</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="pigs" name="animalRaised" value="pigs">
                        <label class="form-check-label" for="pigs">Pigs</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="chicken" name="animalRaised" value="chicken">
                        <label class="form-check-label" for="chicken">Chicken</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="animalLocation">3.18 Where the animal is kept?
                        Describe</label>
                    <textarea class="form-control"  id="animalLocation" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="animalImmunization">3.18 Immunization Status of Animal
                        Raised</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  id="immunized" name="animalImmunization" value="immunized">
                        <label class="form-check-label" for="immunized">Immunized</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  id="notImmunized" name="animalImmunization" value="notImmunized">
                        <label class="form-check-label" for="notImmunized">Not Immunized</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="backyardGardening">3.19 Backyard Gardening</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="herbalPlants" name="backyardGardening" value="herbalPlants">
                        <label class="form-check-label" for="herbalPlants">Herbal plants</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="vegetables" name="backyardGardening" value="vegetables">
                        <label class="form-check-label" for="vegetables">Vegetables</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="ornamental" name="backyardGardening" value="ornamental">
                        <label class="form-check-label" for="ornamental">Ornamental</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="fruitTrees" name="backyardGardening" value="fruitTrees">
                        <label class="form-check-label" for="fruitTrees">Fruit trees</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="neighborhoodType">3.20 Kind of Neighborhood</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  id="congested" name="neighborhoodType" value="congested">
                        <label class="form-check-label" for="congested">Congested</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  id="slum" name="neighborhoodType" value="slum">
                        <label class="form-check-label" for="slum">Slum</label>
                    </div>
                    <div class="form-group mt-4">
                        <label for="sanitationDescription">Describe briefly the state of sanitation of immediate
                            vicinity where the house is located</label>
                        <textarea class="form-control"  id="sanitationDescription" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="breedingSites">3.21 Presence of breeding sites of vectors of
                        diseases describe:</label>
                    <textarea class="form-control"  id="breedingSites" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="pollution">3.22 Sources of pollution</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="air" name="pollution" value="air">
                        <label class="form-check-label" for="air">Air</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="water" name="pollution" value="water">
                        <label class="form-check-label" for="water">Water</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="soil" name="pollution" value="soil">
                        <label class="form-check-label" for="soil">Soil</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="noise" name="pollution" value="noise">
                        <label class="form-check-label" for="noise">Noise</label>
                    </div>
                </div>


                <h3 class="fw-bold mt-3">4. SOCIO-ECONOMIC AND CULTURAL VARIABLES</h3>
                <h4 class="fw-bold mt-4">I. SOCIAL INDICATORS</h4>
                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="language">1. Language or dialect spoken:</label>
                    <input type="text" class="form-control"  id="language" name="language">
                </div>
                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="literacy">2. Literacy (ability to read or write in
                        language):</label>
                    <input type="text" class="form-control"  id="literacy" name="literacy">
                </div>
                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="social_network">3. Describe the degree of social network with
                        friends, neighbors, and other relatives:</label>
                    <textarea class="form-control"  id="social_network" name="social_network"></textarea>
                </div>
                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="family_network">4. Describe the network of the family with
                        religious organizations:</label>
                    <textarea class="form-control"  id="family_network" name="family_network"></textarea>
                </div>
                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="social_org_network">5. Describe network with social
                        organizations:</label>
                    <textarea class="form-control"  id="social_org_network" name="social_org_network"></textarea>
                </div>
                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="educational_experiences">6. Describe the educational
                        experiences:</label>
                    <textarea class="form-control"  id="educational_experiences" name="educational_experiences"></textarea>
                </div>
                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="work_history">7. Describe the work history:</label>
                    <textarea class="form-control"  id="work_history" name="work_history"></textarea>
                </div>
                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="leisure_interests">8. Leisure time interests:</label>
                    <textarea class="form-control"  id="leisure_interests" name="leisure_interests"></textarea>
                </div>
                <div class="form-group mt-4">
                    <label class="form-label fw-bold">9. Source of Health Information:</label>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="tv" name="health_information" value="Television">
                            <label class="form-check-label" for="tv">Television</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="mobile" name="health_information" value="Mobile phone">
                            <label class="form-check-label" for="mobile">Mobile phone</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="radio" name="health_information" value="Radio">
                            <label class="form-check-label" for="radio">Radio</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="poster" name="health_information" value="Poster">
                            <label class="form-check-label" for="poster">Poster</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="health_workers" name="health_information" value="Health Workers">
                            <label class="form-check-label" for="health_workers">Health Workers</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="newspaper" name="health_information" value="Newspaper">
                            <label class="form-check-label" for="newspaper">Newspaper</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="others" name="health_information" value="Others">
                            <label class="form-check-label" for="others">Others</label>
                            <input type="text" class="form-control mt-2" id="other_health_information" name="other_health_information" placeholder="Specify other sources">
                        </div>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="transportation">10. Means of transportation:</label>
                    <select class="form-select"  id="transportation" name="transportation">
                        <option value="" selected disabled class="d-none">--- Select transportation ---</option>
                        <option value="Jeepney">Jeepney</option>
                        <option value="Bus">Bus</option>
                        <option value="Tricycle">Tricycle</option>
                        <option value="Others">Others</option>
                    </select>
                    <input type="text" class="form-control mt-2" id="other_transportation" name="other_transportation" placeholder="Specify other means of transportation">
                </div>




                <div class="form-group mt-4">
                    <label class="form-label fw-bold">11. Economic Indicators</label> <br>
                    <label class="form-label fw-bold" for="monthly_income">2.1 Combined monthly income of the family
                        members:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="monthly_income" id="income_below_1000" value="Below 1000">
                        <label class="form-check-label" for="income_below_1000">
                            &lt; 1000
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="monthly_income" id="income_1000_2999" value="Php 1000-2999">
                        <label class="form-check-label" for="income_1000_2999">
                            Php 1000-2999
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="monthly_income" id="income_3000_4999" value="Php 3000-4999">
                        <label class="form-check-label" for="income_3000_4999">
                            Php 3000-4999
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="monthly_income" id="income_5000_6999" value="Php 5000-6999">
                        <label class="form-check-label" for="income_5000_6999">
                            Php 5000-6999
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="monthly_income" id="income_7000_8999" value="Php 7000-8999">
                        <label class="form-check-label" for="income_7000_8999">
                            Php 7000-8999
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="monthly_income" id="income_9000_10999" value="Php 9000-10999">
                        <label class="form-check-label" for="income_9000_10999">
                            Php 9000-10999
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="monthly_income" id="income_above_11000" value="Php 1100-above">
                        <label class="form-check-label" for="income_above_11000">
                            Php 1100-above
                        </label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="income_adequacy">12. Adequacy of income for family
                        expenses:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="income_adequacy" id="income_adequate" value="Yes">
                        <label class="form-check-label" for="income_adequate">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="income_adequacy" id="income_inadequate" value="No">
                        <label class="form-check-label" for="income_inadequate">
                            No
                        </label>
                    </div>
                </div>


                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="meal_frequency">13. Frequency of Meals:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="meal_frequency" id="meals_1_2" value="1-2">
                        <label class="form-check-label" for="meals_1_2">
                            1-2
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="meal_frequency" id="meals_3" value="3">
                        <label class="form-check-label" for="meals_3">
                            3
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="meal_frequency" id="meals_3_or_more" value="3 or more">
                        <label class="form-check-label" for="meals_3_or_more">
                            3
                        </label>
                    </div>


                    <div class="form-group mt-4">
                        <label class="form-label fw-bold" for="expenditure_percentage">14.A. Percentage of
                            expenditure:</label>
                        <input type="text" class="form-control"  id="expenditure_percentage" name="expenditure_percentage">

                    </div>

                    <div class="form-group mt-4">
                        <label class="form-label fw-bold" for="expenditure_chart">14.B. Chart:</label>
                        <input type="text" class="form-control"  id="expenditure_chart" name="expenditure_chart">

                    </div>

                </div>


                <div class="form-group mt-4">
                    <label class="form-label fw-bold">15. Social Facilities:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="social_facility_church" name="social_facilities[]" value="Church">
                        <label class="form-check-label" for="social_facility_church">Church</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="social_facility_wet_dry_market" name="social_facilities[]" value="Wet & Dry Market">
                        <label class="form-check-label" for="social_facility_wet_dry_market">Wet & Dry Market</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="social_facility_day_care_center" name="social_facilities[]" value="Day Care Center">
                        <label class="form-check-label" for="social_facility_day_care_center">Day Care Center</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="social_facility_elementary_school" name="social_facilities[]" value="Elementary School">
                        <label class="form-check-label" for="social_facility_elementary_school">Elementary School</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="social_facility_high_school" name="social_facilities[]" value="High School">
                        <label class="form-check-label" for="social_facility_high_school">High School</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="social_facility_park" name="social_facilities[]" value="Park">
                        <label class="form-check-label" for="social_facility_park">Park</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="social_facility_sports_complex" name="social_facilities[]" value="Sports Complex">
                        <label class="form-check-label" for="social_facility_sports_complex">Sports Complex</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="social_facility_health_center" name="social_facilities[]" value="Health Center">
                        <label class="form-check-label" for="social_facility_health_center">Health Center</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="social_facility_senior_citizens_hall" name="social_facilities[]" value="Senior Citizen’s Hall">
                        <label class="form-check-label" for="social_facility_senior_citizens_hall">Senior Citizen’s Hall</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="social_facility_others" name="social_facilities[]" value="Others">
                        <label class="form-check-label" for="social_facility_others">Others (specify):</label>
                        <input type="text" class="form-control" id="social_facility_others_specify" name="social_facility_others_specify">
                    </div>
                </div>


                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="health_care_facilities">16. Describe the health care
                        facilities and health services available in the community:</label>
                    <textarea class="form-control"  id="health_care_facilities" name="health_care_facilities"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="distance_to_facility">17. Distance of the house to the
                        nearest health care facility:</label>
                    <input type="text" class="form-control"  id="distance_to_facility" name="distance_to_facility">
                </div>


                <h5 class="fw-bold mt-4">II. CULTURAL FACTORS and FAMILY HEALTH AND HEALTH BEHAVIOR</h5>

                <div class="form-group mt-2">
                    <label class="form-label fw-bold" for="family_spirituality">1. Describe the spirituality of the
                        family:</label>
                    <textarea class="form-control"  id="family_spirituality" name="family_spirituality"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="rituals_celebrations">2. Rituals (holidays and
                        celebrations):</label>
                    <textarea class="form-control"  id="rituals_celebrations" name="rituals_celebrations"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="dietary_habits">3. Dietary habits:</label>
                    <textarea class="form-control"  id="dietary_habits" name="dietary_habits"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">4. Leadership styles of the officials:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="leadership_autocratic" name="leadership_style" value="Autocratic">
                        <label class="form-check-label" for="leadership_autocratic">Autocratic</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="leadership_participative" name="leadership_style" value="Participative">
                        <label class="form-check-label" for="leadership_participative">Participative</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="leadership_laissez_faire" name="leadership_style" value="Laissez Faire Leadership Style">
                        <label class="form-check-label" for="leadership_laissez_faire">Laissez Faire Leadership
                            Style</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="health_beliefs">5. Health Beliefs pertaining to Childcare,
                        Sickness, Pregnancy, Postpartum care, Newborn, Health and Illness:</label>
                    <textarea class="form-control"  id="health_beliefs" name="health_beliefs"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="health_concepts">6. Concepts of Health and Illness:</label>
                    <textarea class="form-control"  id="health_concepts" name="health_concepts"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="health_maintenance">7. Ways of Health Maintenance:</label>
                    <textarea class="form-control"  id="health_maintenance" name="health_maintenance"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="consultation_preference">8. Where do you consult when
                        sick?</label>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="consultation_health_center" name="consultation_preference" value="Health center">
                            <label class="form-check-label" for="consultation_health_center">Health center</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="consultation_hospital" name="consultation_preference" value="Hospital">
                            <label class="form-check-label" for="consultation_hospital">Hospital</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="consultation_private_clinic" name="consultation_preference" value="Private Clinic">
                            <label class="form-check-label" for="consultation_private_clinic">Private Clinic</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="consultation_faith_healer" name="consultation_preference" value="Traditional Faith healer">
                            <label class="form-check-label" for="consultation_faith_healer">Traditional Faith
                                healer</label>
                        </div>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="social_issues_conditions">9. Conditions that cause social
                        issues/conflicts:</label>
                    <textarea class="form-control"  id="social_issues_conditions" name="social_issues_conditions"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="effective_practices">10. Practices/approaches that are
                        effective in settling issues and concerns within the community:</label>
                    <textarea class="form-control"  id="effective_practices" name="effective_practices"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="vices">11. Vices:</label>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="smoking" name="vices" value="Smoking">
                            <label class="form-check-label" for="smoking">Smoking</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="drinking" name="vices" value="Drinking">
                            <label class="form-check-label" for="drinking">Drinking</label>
                        </div>
                    </div>
                    <label class="form-label fw-bold" for="vices_description">Describe the reasons, years of exposure
                        and history of quitting:</label>
                    <textarea class="form-control"  id="vices_description" name="vices_description"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="daily_activities">12. Activities of daily living (how family
                        spends a typical day):</label>
                    <textarea class="form-control"  id="daily_activities" name="daily_activities"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="health_history">13. Health history (pregnancy, illness, death
                        within the past 5 years/reasons, causes of death and illness):</label>
                    <textarea class="form-control"  id="health_history" name="health_history"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="health_status">14. Health status (problems and
                        priorities):</label>
                    <textarea class="form-control"  id="health_status" name="health_status"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="home_remedies">15. Describe home remedies during
                        sickness:</label>
                    <textarea class="form-control"  id="home_remedies" name="home_remedies"></textarea>
                </div>



                <div class="form-group mt-4">
                    <label class="fw-bold form-label">III. OTHER INFORMATION RELATED TO FAMILY HEALTH</label>
                    <div>
                        <label class="fw-bold form-label">A. MATERNAL AND CHILD HEALTH (FOR PREGNANT ONLY, LEAVE THIS
                            PART IF FAMILY HAS NO PREGNANT MEMBER)</label>
                        <div class="form-group mt-4">
                            <label class="fw-bold form-label">1. PNCU</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="pncu_positive" name="pncu_status" value="Positive">
                                <label class="form-check-label" for="pncu_positive">Positive PNCU</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="pncu_negative" name="pncu_status" value="Negative">
                                <label class="form-check-label" for="pncu_negative">Negative PNCU</label>
                            </div>
                            <div class="form-group mt-4">
                                <label class="fw-bold form-label">Where:</label>
                                <input type="text" class="form-control"  id="pncu_location" name="pncu_location">
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <label class="fw-bold form-label" for="reason_negative_pncu">2. Reason for (-)PNCU:</label>
                            <textarea class="form-control"  id="reason_negative_pncu" name="reason_negative_pncu"></textarea>
                        </div>

                        <div class="form-group mt-4">
                            <label class="fw-bold form-label" for="children_born">3. No. of Children born exactly 9
                                mos.:</label>
                            <input type="text" class="form-control"  id="children_born" name="children_born">
                        </div>

                        <div class="form-group mt-4">
                            <label class="fw-bold form-label">Immunization for TT</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="tt_immunization_positive" name="tt_immunization" value="Positive">
                                <label class="form-check-label" for="tt_immunization_positive">Positive</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="tt_immunization_negative" name="tt_immunization" value="Negative">
                                <label class="form-check-label" for="tt_immunization_negative">Negative</label>
                            </div>
                            <div class="form-group mt-4">
                                <label class="fw-bold form-label">No. of doses received:</label>
                                <input type="text" class="form-control"  id="tt_doses_received" name="tt_doses_received">
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <label class="fw-bold form-label">4. Plan where to deliver</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="deliver_health_center" name="delivery_place" value="Health center">
                                <label class="form-check-label" for="deliver_health_center">Health center</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="deliver_home" name="delivery_place" value="Home">
                                <label class="form-check-label" for="deliver_home">Home</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="deliver_hospital" name="delivery_place" value="Hospital">
                                <label class="form-check-label" for="deliver_hospital">Hospital</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="deliver_lying_in" name="delivery_place" value="Lying -in">
                                <label class="form-check-label" for="deliver_lying_in">Lying -in</label>
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <label class="fw-bold form-label">5. Who assisted previous deliveries</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="previous_delivery_nurse" name="delivery_assistance" value="Nurse">
                                <label class="form-check-label" for="previous_delivery_nurse">Nurse</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="previous_delivery_midwife" name="delivery_assistance" value="Midwife">
                                <label class="form-check-label" for="previous_delivery_midwife">Midwife</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="previous_delivery_hilot" name="delivery_assistance" value="Hilot">
                                <label class="form-check-label" for="previous_delivery_hilot">Hilot</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="previous_delivery_doctor" name="delivery_assistance" value="Doctor">
                                <label class="form-check-label" for="previous_delivery_doctor">Doctor</label>
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <label class="fw-bold form-label" for="pregnancy_complications">6. Any history of pregnancy
                                complications?</label>
                            <textarea class="form-control"  id="pregnancy_complications" name="pregnancy_complications"></textarea>
                        </div>

                        <div class="form-group mt-4">
                            <label class="fw-bold form-label" for="child_care_beliefs">7. Myths and beliefs about child
                                care</label>
                            <textarea class="form-control"  id="child_care_beliefs" name="child_care_beliefs"></textarea>
                        </div>

                        <div class="form-group mt-4">
                            <label class="fw-bold form-label">8. For children 0-2 years old ONLY</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="infant_feeding_breastfeeding" name="infant_feeding" value="Breast feeding">
                                <label class="form-check-label" for="infant_feeding_breastfeeding">Breast
                                    feeding</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="infant_feeding_mixed" name="infant_feeding" value="Mixed feeding">
                                <label class="form-check-label" for="infant_feeding_mixed">Mixed feeding</label>
                            </div>
                            <div class="form-check">
                                <input class="

form-check-input" type="checkbox" id="infant_feeding_bottle" name="infant_feeding" value="Bottle feeding">
                                <label class="form-check-label" for="infant_feeding_bottle">Bottle feeding</label>
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <label class="fw-bold form-label">8.1 Type of Milk Formula</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="milk_formula_condensed" name="milk_formula" value="Condensed">
                                <label class="form-check-label" for="milk_formula_condensed">Condensed</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="milk_formula_evaporated" name="milk_formula" value="Evaporated">
                                <label class="form-check-label" for="milk_formula_evaporated">Evaporated</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="milk_formula_powdered" name="milk_formula" value="Powdered">
                                <label class="form-check-label" for="milk_formula_powdered">Powdered</label>
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <label class="fw-bold form-label" for="food_supplement_babies">8.3 Food supplement given to
                                babies</label>
                            <textarea class="form-control"  id="food_supplement_babies" name="food_supplement_babies"></textarea>
                        </div>
                    </div>
                </div>



                <label class="fw-bold mt-4">9. Immunization Status of 0-12 months only (leave if family has no 0-12 mos.
                    Old member)</label>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>BCG</th>
                            <th>Hepatitis B Vaccine 1-3</th>
                            <th>OPV</th>
                            <th>DPT</th>
                            <th>Attenuated Measles Vaccine (AMV)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-group mt-4">
                                    <label for="bcg_date">Date:</label>
                                    <input type="date" class="form-control"  id="bcg_date" name="bcg_date">
                                </div>
                            </td>
                            <td>
                                <div class="form-group mt-4">
                                    <label for="hepB1Date">Hep B 1 Date:</label>
                                    <input type="date" class="form-control"  id="hepB1Date" name="hepB1Date">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="hepB2Date">Hep B 2 Date:</label>
                                    <input type="date" class="form-control"  id="hepB2Date" name="hepB2Date">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="hepB3Date">Hep B 3 Date:</label>
                                    <input type="date" class="form-control"  id="hepB3Date" name="hepB3Date">
                                </div>
                            </td>
                            <td>
                                <div class="form-group mt-4">
                                    <label for="opv1Date">OPV 1 Date:</label>
                                    <input type="date" class="form-control"  id="opv1Date" name="opv1Date">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="opv2Date">OPV 2 Date:</label>
                                    <input type="date" class="form-control"  id="opv2Date" name="opv2Date">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="opv3Date">OPV 3 Date:</label>
                                    <input type="date" class="form-control"  id="opv3Date" name="opv3Date">
                                </div>
                            </td>
                            <td>
                                <div class="form-group mt-4">
                                    <label for="dpt1Date">DPT 1 Date:</label>
                                    <input type="date" class="form-control"  id="dpt1Date" name="dpt1Date">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="dpt2Date">DPT 2 Date:</label>
                                    <input type="date" class="form-control"  id="dpt2Date" name="dpt2Date">
                                </div>
                                <div class="form-group mt-4">
                                    <label for="dpt3Date">DPT 3 Date:</label>
                                    <input type="date" class="form-control"  id="dpt3Date" name="dpt3Date">
                                </div>
                            </td>
                            <td>
                                <div class="form-group mt-4">
                                    <label for="amv1Date">AMV 1 Date:</label>
                                    <input type="date" class="form-control"  id="amv1Date" name="amv1Date">
                                </div>
                            </td>

                        </tr>
                    </tbody>
                </table>


                <h4 class="fw-bold mt-4">B.FAMILY PLANNING (REPRODUCTIVE AGE GROUP ONLY)</h4>


                <div class="form-group mt-2">
                    <label class="fw-bold form-label" for="family_planning_acceptance">1. Acceptors</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="family_planning_acceptance" id="acceptors" value="acceptors">
                        <label class="form-check-label" for="acceptors">Acceptors</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio"  name="family_planning_acceptance" id="non_acceptors" value="non_acceptors">
                        <label class="form-check-label" for="non_acceptors">Non acceptors</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="fw-bold form-label">2. Methods of Family Planning</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="fp_pills" name="family_planning_methods" value="Pills">
                        <label class="form-check-label" for="fp_pills">Pills</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="fp_withdrawal" name="family_planning_methods" value="Withdrawal">
                        <label class="form-check-label" for="fp_withdrawal">Withdrawal</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="fp_rhythm" name="family_planning_methods" value="Rhythm">
                        <label class="form-check-label" for="fp_rhythm">Rhythm</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="fp_condom" name="family_planning_methods" value="Condom">
                        <label class="form-check-label" for="fp_condom">Condom</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="fp_iud" name="family_planning_methods" value="IUD">
                        <label class="form-check-label" for="fp_iud">IUD</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="fp_btl" name="family_planning_methods" value="BTL">
                        <label class="form-check-label" for="fp_btl">BTL</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="fp_vasectomy" name="family_planning_methods" value="Vasectomy">
                        <label class="form-check-label" for="fp_vasectomy">Vasectomy</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="fw-bold form-label" for="reason_family_planning">3. Reason for family
                        planning:</label>
                    <input type="text" class="form-control"  id="reason_family_planning" name="reason_family_planning">
                </div>

                <div class="form-group mt-4">
                    <label class="fw-bold form-label" for="reason_non_acceptors">4. Reason for non-acceptors:</label>
                    <input type="text" class="form-control"  id="reason_non_acceptors" name="reason_non_acceptors">
                </div>




                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <h4 class="fw-bold">C. CAUSES OF ILLNESS IN THE LAST SIX MONTHS</h4>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>NAME</th>
                                        <th>AGE</th>
                                        <th>CAUSE OF SICKNESS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" class="form-control"  name="illness_name_1"></td>
                                        <td><input type="number" class="form-control"  name="illness_age_1"></td>
                                        <td><input type="text" class="form-control"  name="illness_cause_1"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control"  name="illness_name_2"></td>
                                        <td><input type="number" class="form-control"  name="illness_age_2"></td>
                                        <td><input type="text" class="form-control"  name="illness_cause_2"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <h4 class="fw-bold">D. CAUSES OF DEATH IN THE LAST SIX MONTHS</h4>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>NAME</th>
                                        <th>AGE</th>
                                        <th>CAUSE OF DEATH</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" class="form-control"  name="death_name_1"></td>
                                        <td><input type="number" class="form-control"  name="death_age_1"></td>
                                        <td><input type="text" class="form-control"  name="death_cause_1"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control"  name="death_name_2"></td>
                                        <td><input type="number" class="form-control"  name="death_age_2"></td>
                                        <td><input type="text" class="form-control"  name="death_cause_2"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <h4 class="fw-bold">E. CAUSES OF HOSPITALIZATION IN THE LAST SIX MONTHS</h4>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>NAME</th>
                                        <th>AGE</th>
                                        <th>CAUSE OF HOSPITALIZATION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="text" class="form-control"  name="hospitalization_name_1"></td>
                                        <td><input type="number" class="form-control"  name="hospitalization_age_1"></td>
                                        <td><input type="text" class="form-control"  name="hospitalization_cause_1"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control"  name="hospitalization_name_2"></td>
                                        <td><input type="number" class="form-control"  name="hospitalization_age_2"></td>
                                        <td><input type="text" class="form-control"  name="hospitalization_cause_2"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end px-4">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        (() => {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>