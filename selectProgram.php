<?php
$applicationMode = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ECOT - Select Program</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="img/ECOT Logo.png" />
  <link rel="stylesheet" href="css/selectProgram.css" />

  <?php
  require_once("templates/header.php");
  ?>

  <!-- Main Content -->
  <main class="content">
    <div class="left-section">
      <h2>SELECT A PROGRAM</h2>
      <select name="program" id="program">
      <option selected disabled>Select</option>
        <option value="computer-science">
          1. Diploma in Computer Science
        </option>
        <option value="civil-engineering">
          2. Diploma in Civil Engineering
        </option>
        <option value="architecture">
          3. Diploma in Architectural Technology
        </option>
        <option value="mechanical">
          4. Diploma in Mechanical Engineering
        </option>
        <option value="electronics">
          5. Diploma in Electrical and Electronics Engineering
        </option>
        <option value="automotive-heavy">
          6. Diploma in Automotive Engineering (Heavy)
        </option>
        <option value="automotive-light">7. Engineering (Light)</option>
        <option value="tourism">
          8. Diploma in Hospitality and Tourism Management
        </option>
        <option value="hrm">
          9. Diploma in Human Resources Management
        </option>
        <option value="office-mgmt">
          10. Diploma in Office Management and Technology
        </option>
        <option value="ict">11. Secondary Teacher's Diploma: ICT</option>
      </select>
    </div>

    <div class="right-section">
      <img src="img/open-book.png" alt="Book Icon" class="book-icon" />
      <p>
        Please select a program of your choice. <br />
        NOTE: You can only apply for one program at a time.
      </p>
    </div>
  </main>

  <!-- Buttons Section -->
  <div class="buttons-section">
    <a href="dashboard.php">
      <button>BACK</button>
    </a>
    <button class="save-btn">SAVE</button>
    <a href="personalInfo.php">
      <button class="continue-btn">CONTINUE</button>
    </a>
  </div>


  </div>
  <?php
  require_once('templates/applicationFooter.php');
  ?>
  </body>

</html>