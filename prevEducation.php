<?php
$applicationMode = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECOT - Previous Education</title>
    <link rel="stylesheet" href="css/prevEducation.css">
    <?php
    require_once("templates/header.php");
    ?>
    <!-- </head>
<body>
    <header>
        <div class="logo">
            <img src="ECOT Logo.png" alt="Eswatini College Of Technology">
            <h1>Eswatini College <br> Of Technology</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Applicant Information</a></li>
                <li><a href="#">Education Background</a></li>
                <li><a href="#">Document Upload</a></li>
                <li><a href="home.html">HOME</a></li>
                <li><a href="#">Welcome Bandile</a></li>
            </ul>
        </nav>
    </header> -->

    <main>
        <section class="application-form">
            <h1>Previous Education</h1>

            <form>
                <div class="form-group1">
                    <label for="applicant-type">You are Applying as:</label>
                    <select id="applicant-type" name="applicant-type">
                        <option selected disabled>Select</option>
                        <option value="select">A HIGH SCHOOL LEAVER WHO HAS DONE O'LEVEL/IGCSE/HIGCSE/SGCSE EQUIVALENT</option>
                        <option value="select">A HIGH SCHOOL LEAVER WHO HAS DONE S.A. SENIOR CERTIFICATE</option>
                        <option value="select">A HIGH SCHOOL LEAVER WHO HAS DONE A' LEVEL/EQUIVALENT</option>
                        <option value="select">A CANDIDATE WHO HAS A POST HIGH SCHOOL PROFESSIONAL QUALIFICATION</option>
                    </select>
                </div>

                <div class="form-group1">
                    <label for="academic-qualification">Academic Qualification:</label>
                    <select id="academic-qualification" name="academic-qualification">
                        <option selected disabled>Select</option>
                        <option value="select">CAMBRIDGE O'LEVEL</option>
                        <option value="select">G.C.E. (LONDON)</option>
                        <option value="select">SOUTH AFRICAN SENIOR CERTIFICATE</option>
                        <option value="select">IGCSE/SGCSE</option>
                        <option value="select">HIGCSE</option>
                    </select>
                    <h4>Foreign qualification should be submitted for evaluation with the Eswatini Qualifications Authority.</h4>
                </div>

                <div class="form-group">
                    <h1>Post High School/Institutions Attended:(i.e College, Technikon, University etc)</h1>
                    <label for="PREVIOUS QUALIFICATION">Previous Qualification:</label>
                    <select id="previous-qualification" name="previous-qualification">
                        <option value="select">select</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="institution-name">Name of Institution:</label>
                    <input type="text" id="institution-name" name="institution-name">
                </div>

                <div class="form-group">
                    <label for="high-school-year">Year on which you wrote your High School Exams:</label>
                    <input type="text" id="high-school-year" name="high-school-year">

                </div>

                <div class="form-group">
                    <label for="ovc-proof">Are you OVC? if yes upload proof:</label>
                    <input type="file" id="ovc-proof" name="ovc-proof">
                </div>

                <!-- <div class="form-actions">
                    <button type="submit" class="save-btn">SAVE</button>
                    <button type="submit" class="continue-btn">CONTINUE</button>
                </div> -->
            </form>
        </section>
        <div class="buttons-section">
            <a href="personalInfo.php">
                <button>BACK</button>
            </a>
            <button class="save-btn">SAVE</button>
            <a href="results.php">
                <button class="continue-btn">CONTINUE</button>
            </a>
        </div>

    </main>
    <?php require_once("templates/applicationFooter.php") ?>
    </body>

</html>