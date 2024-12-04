<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ECOT - Results</title>
    <link rel="stylesheet" href="css/results.css" />


    <!-- include header here -->
    <?php 
      require_once('templates/header.php');
    ?>

    <header>
        <div class="logo">
            <img src="logo.png" alt="ECOT Logo">
            <span>Eswatini College of Technology</span>
        </div>
        <div class="tabs">
            <button class="tab">Applicant Information</button>
            <button class="tab active">Education Background</button>
            <button class="tab">Document Upload</button>
        </div>
        <div class="user-info">
            <span>Welcome Bandile</span>
        </div>
    </header>

    <div class="progress-bar">
        <span>Step 1 - Application Form</span>
        <div class="progress">
            <div class="progress-completed" style="width: 70%;"></div>
        </div>
        <span>70% Complete</span>
    </div>

    <section class="form-section">
        <h2>Information on High School Results</h2>
        <div class="highschool-form">
            <table>
                <thead>
                    <tr>
                        <th>Subjects</th>
                        <th>Syllabus</th>
                        <th>Grading</th>
                        <th>Year Written</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><select><option>MATHS</option></select></td>
                        <td><select><option>ECGSE</option></select></td>
                        <td><select><option>A</option></select></td>
                        <td><select><option>2017</option></select></td>
                    </tr>
                    <tr>
                        <td><select><option>ENGLISH</option></select></td>
                        <td><select><option>ECGSE</option></select></td>
                        <td><select><option>B</option></select></td>
                        <td><select><option>2017</option></select></td>
                    </tr>
                    <tr>
                        <td><select><option>PHYSICAL SCIENCE</option></select></td>
                        <td><select><option>ECGSE</option></select></td>
                        <td><select><option>A</option></select></td>
                        <td><select><option>2017</option></select></td>
                    </tr>
                    <tr>
                        <td><select><option>BIOLOGY</option></select></td>
                        <td><select><option>ECGSE</option></select></td>
                        <td><select><option>A</option></select></td>
                        <td><select><option>2017</option></select></td>
                    </tr>
                    <tr>
                        <td><select><option>SISWATI</option></select></td>
                        <td><select><option>ECGSE</option></select></td>
                        <td><select><option>C</option></select></td>
                        <td><select><option>2019</option></select></td>
                    </tr>
                    <tr>
                        <td><select><option>INFORMATION TECHNOLOGY</option></select></td>
                        <td><select><option>IGCSE</option></select></td>
                        <td><select><option>B</option></select></td>
                        <td><select><option>2017</option></select></td>
                    </tr>
                </tbody>
            </table>
            <button class="upload-results">Upload Results</button>
        </div>
        <div class="note">
            <p>
                Please select your best 6 subjects, the first 2 being the two core subjects for your course, followed by 2 other credits. Then lastly any other 2 credits or passes. Please state the syllabus for each subject, grade, and the year written.
            </p>
        </div>
        <div class="form-buttons">
            <button class="save-button">Save</button>
            <button>Continue</button>
        </div>
    </section>

    <footer>
        <p>All rights reserved to ECOT @2024</p>
    </footer>
</body>
</html>
