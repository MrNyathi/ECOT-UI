<?php
$applicationMode = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Upload</title>
    <link rel="stylesheet" href="css/upload.css">

    <!-- include header here -->
    <?php
    require_once('templates/header.php');
    ?>
    <!-- Main Section -->
    <main>
        <h2>Upload Documents</h2>
        <table class="upload-table">
            <thead>
                <tr>
                    <th>Document Description</th>
                    <th>Upload</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Enclosed Original Standard Bank Receipt</td>
                    <td><button class="upload-btn">⬆</button></td>
                </tr>
                <tr>
                    <td>For High School Leaver: Enclosed Certified Copy/ Copies of Your High School Results</td>
                    <td><button class="upload-btn">⬆</button></td>
                </tr>
                <tr>
                    <td>Certified Passport Copy or Identity Document</td>
                    <td><button class="upload-btn">⬆</button></td>
                </tr>
                <tr>
                    <td>Certified Academic Record & Certificate of Conduct (If Previously Enrolled at Another Tertiary Institution)</td>
                    <td><button class="upload-btn">⬆</button></td>
                </tr>
                <tr>
                    <td>Passport Sized Photo</td>
                    <td><button class="upload-btn">⬆</button></td>
                </tr>
                <tr>
                    <td>Proof of OVC Status</td>
                    <td><button class="upload-btn">⬆</button></td>
                </tr>
            </tbody>
        </table>

        <div class="note-section">
            <p><strong>Note:</strong> If you were not able to upload any required documents as you were filling in the application or if there is an added document that needs to be uploaded, please upload them here.</p>
        </div>

        <div class="buttons-section">
            <a href="results.php">
                <button>BACK</button>
            </a>
            <button class="save-btn">SAVE</button>
            <a href="declaration.php">
                <button class="continue-btn">CONTINUE</button>
            </a>
        </div>
    </main>

    <!-- Footer Section -->
    <?php
    require_once('templates/applicationFooter.php');
    ?>
    </div>
    </body>

</html>