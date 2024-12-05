<?php
$applicationMode = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Application Form - Personal Details</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
  <link rel="icon" type="image/x-icon" href="img/ECOT Logo.png" />
  <link rel="stylesheet" href="css/personalInfo.css" />

  <?php
  require_once("templates/header.php");
  ?>

  <main style="width: 90%;">
    <section class="form-section">
      <div class="progress-bar">
        <span>Step 1 - Application Form</span>
        <div class="progress">
          <div class="progress-completed" style="width: 10%"></div>
        </div>
        <span>10% Complete</span>
      </div>

      <h1>Information About Yourself</h1>

      <!-- Centered Sub-tabs -->
      <nav class="sub-tabs">
        <button class="sub-tab active" id="personal-details-tab">
          Personal Details
        </button>
        <button class="sub-tab" id="address-tab">Address</button>
        <button class="sub-tab" id="next-of-kin-tab">Next Of Kin</button>
      </nav>

      <!-- Two-column Form Layout -->
      <form class="application-form">
        <!-- Personal Details Section -->
        <div id="personal-details-content" class="sub-tab-content active">
          <div class="form-columns">
            <!-- Left Column -->
            <div class="form-column">
              <div class="form-group">
                <label for="title">Title</label>
                <select id="title">
                  <option>Select</option>
                  <option>Mr</option>
                  <option>Ms</option>
                  <option>Dr</option>
                </select>
              </div>
              <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" id="first-name" placeholder="First Name" />
              </div>
              <div class="form-group">
                <label for="middle-name">Middle Name</label>
                <input
                  type="text"
                  id="middle-name"
                  placeholder="Middle Name" />
              </div>
              <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" id="last-name" placeholder="Last Name" />
              </div>
              <div class="form-group">
                <label for="maiden-name">Maiden Surname</label>
                <input
                  type="text"
                  id="maiden-name"
                  placeholder="(Where Applicable)" />
              </div>
              <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" />
              </div>
              <div class="form-group">
                <label for="gender">Gender:</label>
                <select name="gender" id="gender" class="form-control">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>
            </div>

            <!-- Right Column -->
            <div class="form-column">
              <div class="form-group">
                <label for="citizenship">Citizenship</label>
                <input
                  type="text"
                  id="citizenship"
                  placeholder="e.g., Eswatini" />
              </div>
              <div class="form-group">
                <label for="marital-status">Marital Status</label>
                <select id="marital-status">
                  <option>Married</option>
                  <option>Widowed</option>
                  <option>Single</option>
                </select>
              </div>
              <div class="form-group">
                <label for="id-number">National Identity Number</label>
                <input
                  type="text"
                  id="id-number"
                  placeholder="e.g., 1234567890123" />
              </div>
              <div class="form-group">
                <label for="phone-number">Phone Number</label>
                <input
                  type="tel"
                  id="phone-number"
                  placeholder="+268 76223456" />
              </div>
              <div class="form-group">
                <label for="sponsor">Sponsor</label>
                <select id="sponsor">
                  <option>Select</option>
                  <option>Self</option>
                  <option>Government</option>
                  <option>Private</option>
                </select>
              </div>
              <div class="form-group">
                <label for="passport-photo">Passport Photo</label>
                <input type="file" id="passport-photo" accept="image/*" />
                <small>Less than 2MB</small>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class="buttons-section">
        <a href="selectProgram.php">
          <button>BACK</button>
        </a>
        <button class="save-btn">SAVE</button>
        <a href="Results.html">
          <button class="continue-btn">CONTINUE</button>
        </a>
      </div>

    </section>
  </main>

  <footer class="footer">
    <p>All rights reserved to ECOT @2024</p>
  </footer>

  <script src="js/peronal Info.js"></script>
  </body>

</html>