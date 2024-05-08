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
                <h2 class="text-center mb-4 fw-bold">FAMILY HEALTH ASSESSMENT FORM</h2>

                <div class="form-group row mt-4">
                    <div class="col-md-4">
                        <label class="form-label fw-bold" for="familySurname">Family Surname:</label>
                        <input required type="text" class="form-control" id="familySurname" placeholder="Enter Family Surname">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold" for="houseNumber">House #:</label>
                        <input required type="text" class="form-control" id="houseNumber" placeholder="Enter House Number">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label fw-bold" for="purokBarangay">Purok/Barangay:</label>
                        <input required type="text" class="form-control" id="purokBarangay" placeholder="Enter Purok/Barangay">
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <div class="col-md-6">
                        <label class="form-label fw-bold" for="religion">Religion:</label>
                        <input required type="text" class="form-control" id="religion" placeholder="Enter Religion">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold" for="placeOfOrigin">Place of Origin:</label>
                        <input required type="text" class="form-control" id="placeOfOrigin" placeholder="Enter Place of Origin">
                    </div>
                </div>
                <div class="form-group row mt-4">
                    <div class="col-md-6">
                        <label class="form-label fw-bold" for="lengthOfResidency">Length of Residency:</label>
                        <div class="input required-group">
                            <input required type="number" class="form-control" id="lengthOfResidency" placeholder="Enter Length">
                            <div class="input required-group-append">
                                <span class="input required-group-text">mos./years</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold" for="numberOfFamilyMembers">Number of family members:</label>
                        <input required type="number" class="form-control" id="numberOfFamilyMembers" placeholder="Enter Number of Family Members">
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
                                <td><input name="names[]" type="text" class="form-control"></td>
                                <td><input name="dateOfBirth[]" type="date" class="form-control"></td>
                                <td><input name="age[]" type="number" class="form-control"></td>
                                <td><input name="sex[]" type="text" class="form-control"></td>
                                <td><input name="civilStatus[]" type="text" class="form-control"></td>
                                <td><input name="educationalAttainment[]" type="text" class="form-control"></td>
                                <td><input name="occupation[]" type="text" class="form-control"></td>
                                <td><input name="income[]" type="number" class="form-control"></td>
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
                    <label class="form-label fw-bold" for="howDecisionsAreMade">2.5 How decisions are made</label>
                    <textarea class="form-control" id="howDecisionsAreMade" rows="3"></textarea>
                </div>
                <div class="form-group mt-4">
                    <label class="form-label fw-bold">2.6 General Family Relationships/Dynamics</label>
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
                    <label class="form-label fw-bold" for="significantOthers">2.7 Significant others (Indicate roles they play in the family's life)</label>
                    <textarea class="form-control" id="significantOthers" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="relationshipToLargerCommunity">2.8 Relationship of the family to the larger Community (Describe the nature and extent of participation)</label>
                    <textarea class="form-control" id="relationshipToLargerCommunity" rows="3"></textarea>
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
                    <label class="form-label fw-bold" for="bondingOfFamilyMembers">2.9 Describe the bonding of the family members</label>
                    <textarea class="form-control" id="bondingOfFamilyMembers" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="howMembersCommunicate">2.10 How members communicate</label>
                    <textarea class="form-control" id="howMembersCommunicate" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="howProblemsAreSolved">2.11 How problems are solved</label>
                    <textarea class="form-control" id="howProblemsAreSolved" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="howConflictIsHandled">2.12 How conflict is handled</label>
                    <textarea class="form-control" id="howConflictIsHandled" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="divisionOfLabor">2.13 Division of labor</label>
                    <textarea class="form-control" id="divisionOfLabor" rows="3"></textarea>
                </div>



                <h4 class="fw-bold mt-4">3. HOME AND ENVIRONMENT</h4>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.1 Construction Materials used</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="constructionMaterials" id="strong">
                        <label class="form-check-label" for="strong">Strong</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="constructionMaterials" id="light">
                        <label class="form-check-label" for="light">Light</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="constructionMaterials" id="mixed">
                        <label class="form-check-label" for="mixed">Mixed</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="constructionMaterials" id="makeshift">
                        <label class="form-check-label" for="makeshift">Makeshift</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.2 Home ownership</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="homeOwnership" id="owned">
                        <label class="form-check-label" for="owned">Owned</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="homeOwnership" id="rent">
                        <label class="form-check-label" for="rent">Rent</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="homeOwnership" id="rentFree">
                        <label class="form-check-label" for="rentFree">Rent free</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.3 Lighting facility</label>
                    <div class="form-group mt-4">
                        <label class="form-label fw-bold">3.3.1</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="lightingFacility1" id="electric">
                            <label class="form-check-label" for="electric">Electric</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="lightingFacility1" id="keroseneLamp">
                            <label class="form-check-label" for="keroseneLamp">Kerosene lamp</label>
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <label class="form-label fw-bold">3.3.2</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="lightingFacility2" id="adequate">
                            <label class="form-check-label" for="adequate">Adequate</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="lightingFacility2" id="inadequate">
                            <label class="form-check-label" for="inadequate">Inadequate</label>
                        </div>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.4 Cooking facility</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cookingFacility" id="electricStove">
                        <label class="form-check-label" for="electricStove">Electric stove</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cookingFacility" id="gas">
                        <label class="form-check-label" for="gas">Gas</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cookingFacility" id="kerosene">
                        <label class="form-check-label" for="kerosene">Kerosene</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="cookingFacility" id="firewoodCharcoal">
                        <label class="form-check-label" for="firewoodCharcoal">Firewood/charcoal</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.4.1 Sanitary Condition:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sanitaryCondition" id="good">
                        <label class="form-check-label" for="good">Good</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sanitaryCondition" id="poor">
                        <label class="form-check-label" for="poor">Poor</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.5 Drainage facility</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="drainageFacility" id="none">
                        <label class="form-check-label" for="none">None</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="drainageFacility" id="openDrainage">
                        <label class="form-check-label" for="openDrainage">Open Drainage</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="drainageFacility" id="blindDrainage">
                        <label class="form-check-label" for="blindDrainage">Blind drainage</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="drainageFacility" id="others">
                        <label class="form-check-label" for="others">Others</label>
                        <input type="text" class="form-control" placeholder="Specify others">
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.6 Number of bedrooms</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="numberOfBedrooms" id="none">
                        <label class="form-check-label" for="none">None</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="numberOfBedrooms" id="one">
                        <label class="form-check-label" for="one">1</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="numberOfBedrooms" id="two">
                        <label class="form-check-label" for="two">2</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="numberOfBedrooms" id="threeOrMore">
                        <label class="form-check-label" for="threeOrMore">3 or more</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="sleepingArrangement">Remarks: (Describe the Family's Sleeping Arrangement)</label>
                    <textarea class="form-control" id="sleepingArrangement" rows="3"></textarea>
                </div>


                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.7 Adequacy of Living Space</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="livingSpaceAdequacy" id="adequate">
                        <label class="form-check-label" for="adequate">Adequate</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="livingSpaceAdequacy" id="inadequate">
                        <label class="form-check-label" for="inadequate">Inadequate</label>
                    </div>
                    <div class="form-group mt-4">
                        <label class="form-label fw-bold" for="floorPlan">Draw the floor plan</label>
                        <textarea class="form-control" id="floorPlan" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.8 Numbers of windows</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="numberOfWindows" id="none">
                        <label class="form-check-label" for="none">None</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="numberOfWindows" id="one">
                        <label class="form-check-label" for="one">1</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="numberOfWindows" id="two">
                        <label class="form-check-label" for="two">2</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="numberOfWindows" id="threeOrMore">
                        <label class="form-check-label" for="threeOrMore">3 or more</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold">3.9 Food storage</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="foodStorage" id="none">
                        <label class="form-check-label" for="none">None</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="foodStorage" id="refrigerator">
                        <label class="form-check-label" for="refrigerator">Refrigerator</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="foodStorage" id="cabinet">
                        <label class="form-check-label" for="cabinet">Cabinet</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="foodStorage" id="others">
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
                        <input class="form-check-input" type="radio" id="inside" name="comfortRoomDistance" value="inside">
                        <label class="form-check-label" for="inside">Inside</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="outside" name="comfortRoomDistance" value="outside">
                        <label class="form-check-label" for="outside">Outside</label>
                    </div>
                    <div class="form-group mt-4">
                        <label for="outsideDistance">If outside, how far? (in meters)</label>
                        <input type="text" class="form-control" id="outsideDistance" placeholder="Enter distance in meters">
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="comfortRoomOwnership">3.13 Comfort Room Ownership</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="owned" name="comfortRoomOwnership" value="owned">
                        <label class="form-check-label" for="owned">Owned</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="public" name="comfortRoomOwnership" value="public">
                        <label class="form-check-label" for="public">Public</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="sanitaryCondition">3.14 Sanitary Condition: Describe briefly the cleanliness of the toilet</label>
                    <textarea class="form-control" id="sanitaryCondition" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="waterSource">3.14 Water Source</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="pointSource" name="waterSource" value="pointSource">
                        <label class="form-check-label" for="pointSource">Point source</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="communalSystem" name="waterSource" value="communalSystem">
                        <label class="form-check-label" for="communalSystem">Communal System/stand post</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="waterworksSystem" name="waterSource" value="waterworksSystem">
                        <label class="form-check-label" for="waterworksSystem">Waterworks system</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="waterOwnership">3.15 Ownership of water supply</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="private" name="waterOwnership" value="private">
                        <label class="form-check-label" for="private">Private</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="publicWater" name="waterOwnership" value="public">
                        <label class="form-check-label" for="publicWater">Public</label>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="potabilityRemarks">Remarks: (Potability)</label>
                    <textarea class="form-control" id="potabilityRemarks" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="garbageDisposal">3.16 Method of Garbage Disposal</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="collected" name="garbageDisposal" value="collected">
                        <label class="form-check-label" for="collected">Collected:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="government" name="collectedBy" value="government">
                            <label class="form-check-label" for="government">Government</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="private" name="collectedBy" value="private">
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
                    <label class="form-label fw-bold" for="animalLocation">3.18 Where the animal is kept? Describe</label>
                    <textarea class="form-control" id="animalLocation" rows="3"></textarea>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="animalImmunization">3.18 Immunization Status of Animal Raised</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="immunized" name="animalImmunization" value="immunized">
                        <label class="form-check-label" for="immunized">Immunized</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="notImmunized" name="animalImmunization" value="notImmunized">
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
                        <input class="form-check-input" type="radio" id="congested" name="neighborhoodType" value="congested">
                        <label class="form-check-label" for="congested">Congested</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="slum" name="neighborhoodType" value="slum">
                        <label class="form-check-label" for="slum">Slum</label>
                    </div>
                    <div class="form-group mt-4">
                        <label for="sanitationDescription">Describe briefly the state of sanitation of immediate vicinity where the house is located</label>
                        <textarea class="form-control" id="sanitationDescription" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="breedingSites">3.21 Presence of breeding sites of vectors of diseases describe:</label>
                    <textarea class="form-control" id="breedingSites" rows="3"></textarea>
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
                    <input type="text" class="form-control" id="language" name="language">
                </div>
                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="literacy">2. Literacy (ability to read or write in language):</label>
                    <input type="text" class="form-control" id="literacy" name="literacy">
                </div>
                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="social_network">3. Describe the degree of social network with friends, neighbors, and other relatives:</label>
                    <textarea class="form-control" id="social_network" name="social_network"></textarea>
                </div>
                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="family_network">4. Describe the network of the family with religious organizations:</label>
                    <textarea class="form-control" id="family_network" name="family_network"></textarea>
                </div>
                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="social_org_network">5. Describe network with social organizations:</label>
                    <textarea class="form-control" id="social_org_network" name="social_org_network"></textarea>
                </div>
                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="educational_experiences">6. Describe the educational experiences:</label>
                    <textarea class="form-control" id="educational_experiences" name="educational_experiences"></textarea>
                </div>
                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="work_history">7. Describe the work history:</label>
                    <textarea class="form-control" id="work_history" name="work_history"></textarea>
                </div>
                <div class="form-group mt-4">
                    <label class="form-label fw-bold" for="leisure_interests">8. Leisure time interests:</label>
                    <textarea class="form-control" id="leisure_interests" name="leisure_interests"></textarea>
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
                    <select class="form-control" id="transportation" name="transportation">
                        <option value="Jeepney">Jeepney</option>
                        <option value="Bus">Bus</option>
                        <option value="Tricycle">Tricycle</option>
                        <option value="Others">Others</option>
                    </select>
                    <input type="text" class="form-control mt-2" id="other_transportation" name="other_transportation" placeholder="Specify other means of transportation">
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>