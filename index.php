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


            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>