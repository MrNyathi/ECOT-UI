<?php
session_start();
$applicationMode = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declaration Page</title>
    <link rel="stylesheet" href="css/declaration.css">

    <?php
    require_once('templates/header.php');
    ?>
    <!-- </head>
<body>
    <div class="container">
        <header>
            <div class="header-content">
                <img src="Img/ECOT Logo.png" alt="ECOT Logo" class="logo">
                <h1>Eswatini College Of Technology</h1>
                <nav>
                    <ul>
                        <li>Applicant Information</li>
                        <li>Education Background</li>
                        <li>Document Upload</li>
                    </ul>
                </nav>
                <div class="welcome">Welcome Bandile</div>
            </div>
            </div>

            <div class="progress">
                <p>Step 1 - Application Form</p>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 87%;"></div>
                </div>
        </header> -->

    <main>
        <section class="declaration">
            <h2>DECLARATION</h2>
            <p> Read the declaration document below carefully: </p>
            <div class="pdf-viewer">
                <iframe src="img/Declaration Form.pdf" width="100%" height="400px"></iframe>
            </div>
        </section>

        <section class="terms">
            <h2>Terms and Conditions</h2>
            <div class="terms-text">
                <p>I <strong>Bandile Bayanda Manyatsi</strong>, Identity Number <strong>97989099822</strong>, the undersigned, hereby apply/register as a student of the Eswatini College of Technology (ECOT), subject to the following terms and conditions:</p>
                <ul>
                    <li>1.1 Comply with the rules and regulations of the Eswatini College of Technology (should my application be successful).</li>
                </ul>
            </div>
            <div class="agree-section">
                <label>
                    <input type="checkbox" name="agree" id="agree" required> I Agree
                </label>
            </div>
        </section>

        <!-- <div class="submit-section">
            <button type="submit" id="submitBtn" disabled>Submit Application</button>
        </div> -->
        <div class="buttons-section">
            <a href="uploadDocs.php">
                <button>BACK</button>
            </a>
            <!-- <button class="save-btn">SAVE</button> -->
            <!-- FIXME: the link does not direct the user anywhere unless agree is checked-->
            <a href="" id="submit-link">

                <?php
                $_SESSION['submit-application'] = 1;
                ?>

                <button class="continue-btn" id="submit-btn">SUBMIT</button>
            </a>
        </div>
    </main>

    <?php
    require_once('templates/applicationFooter.php');
    ?>

    </body>
    <script src="js/script.js">

    </script>

</html>