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
      <!-- <div class="progress-bar">
        <span>Step 1 - Application Form</span>
        <div class="progress">
          <div class="progress-completed" style="width: 10%"></div>
        </div>
        <span>10% Complete</span>
      </div> -->



      <!-- Centered Sub-tabs -->
      <nav class="sub-tabs">
        <button class="sub-tab active" id="personalBtn">Personal Details</button>
        <button class="sub-tab" id="kinBtn">Next Of Kin</button>
        <button class="sub-tab" id="addressBtn">Address</button>
      </nav>

      <div id="personalTab">
        <h1>Information About Yourself</h1>
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
                    <option selected disabled>Select</option>
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
                  <input type="text" id="middle-name" placeholder="Middle Name" />
                </div>
                <div class="form-group">
                  <label for="last-name">Last Name</label>
                  <input type="text" id="last-name" placeholder="Last Name" />
                </div>
                <div class="form-group">
                  <label for="gender">Gender:</label>
                  <select name="gender" id="gender" class="form-control">
                    <option selected disabled>Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
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

              </div>

              <!-- Right Column -->
              <div class="form-column">
                <div class="form-group">
                  <label for="citizenship">Citizenship</label>
                  <input type="text" id="citizenship" placeholder="e.g., Eswatini" />
                </div>
                <div class="form-group">
                  <label for="marital-status">Marital Status</label>
                  <select id="marital-status">
                    <option selected disabled>Select</option>
                    <option>Married</option>
                    <option>Widowed</option>
                    <option>Single</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="id-number">National Identity Number</label>
                  <input type="text" id="id-number" placeholder="e.g., 1234567890123" />
                </div>
                <div class="form-group">
                  <label for="phone-number">Phone Number</label>
                  <input type="tel" id="phone-number" placeholder="+268 76223456" />
                </div>
                <div class="form-group">
                  <label for="sponsor">Sponsor</label>
                  <select id="sponsor">
                    <option selected disabled>Select</option>
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
      </div>

      <div id="kinTab" style="display: none;">
        <h1>Next of Kin Details</h1>
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
                    <option selected disabled>Select</option>
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
                  <input type="text" id="middle-name" placeholder="Middle Name" />
                </div>
                <div class="form-group">
                  <label for="last-name">Last Name</label>
                  <input type="text" id="last-name" placeholder="Last Name" />
                </div>
                <div class="form-group">
                  <label for="gender">Gender:</label>
                  <select name="gender" id="gender" class="form-control">
                    <option selected disabled>Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>


              </div>

              <!-- Right Column -->
              <div class="form-column">
                <div class="form-group">
                  <label for="id-number">National Identity Number</label>
                  <input type="text" id="id-number" placeholder="e.g., 1234567890123" />
                </div>
                <div class="form-group">
                  <label for="citizenship">Citizenship</label>
                  <input
                    type="text"
                    id="citizenship"
                    placeholder="e.g., Eswatini" />
                </div>
                <div class="form-group">
                  <label for="relationship-type">Relationship Type</label>
                  <select id="relationship-type">
                    <option selected disabled>Select</option>
                    <option>Father</option>
                    <option>Mother</option>
                    <option>Guardian</option>
                    <option>Spouse</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="cell-number">Cell Number</label>
                  <input type="tel" id="cell-number" placeholder="+268 76223456" />
                </div>
                <div class="form-group">
                  <label for="phone-number">Telephone Number</label>
                  <input type="tel" id="phone-number" placeholder="+268 76223456" />
                </div>
              </div>

            </div>
          </div>
      </div>
      </form>
      </div>


      <div id="addressTab" style="display: none;">
        <h1>Address Information</h1>
        <!-- Two-column Form Layout -->
        <form class="application-form">
          <!-- Personal Details Section -->
          <div id="personal-details-content" class="sub-tab-content active">
            <div class="form-columns">
              <!-- Left Column -->
              <div class="form-column">
                <h3>Personal Addresses</h3>

                <div class="form-group">
                  <label for="applicant-country">Country</label>
                  <input type="text" id="applicant-country" placeholder="Country" />
                </div>
                <div class="form-group">
                  <label for="applicant-box-code">P.O. Box</label>
                  <input type="text" id="applicant-box-code" placeholder="64" />
                </div>
                <div class="form-group">
                  <label for="applicant-city">City</label>
                  <input type="text" id="applicant-city" placeholder="City" />
                </div>
                <div class="form-group">
                  <label for="residential-area">Residential Area</label>
                  <textarea name="residential-area" style="min-height: 200px;"> </textarea>
                </div>
              </div>

              <!-- Right Column -->
              <div class="form-column">
                <h3>Next Of Kin Addresses</h3>
                <div class="form-group" style="display: flex; flex-flow: nowrap; gap:2px">
                  <input type="checkbox" name="same-postal" id="same-postal" style="max-width: 20px;">
                  <label for="same-postal">Same as my postal.</label>
                </div>
                <div class="form-group">
                  <label for="kin-country" id="kinCountry">Country</label>
                  <input type="text" id="kin-country" placeholder="Country" />
                </div>
                <div class="form-group">
                  <label for="kin-box-code" id="kinBox">P.O. Box</label>
                  <input type="text" id="kin-box-code" placeholder="64" />
                </div>
                <div class="form-group">
                  <label for="kin-city" id="kinCity">City</label>
                  <input type="text" id="kin-city" placeholder="City" />
                </div>
                <div class="form-group" style="display: flex; flex-flow: nowrap; gap:2px">
                  <input type="checkbox" name="same-physical" id="same-physical" style="max-width: 20px;">
                  <label for="same-physical">Same as my physical.</label>
                </div>
                <div class="form-group">
                  <label for="residential-area">Residential Area</label>
                  <textarea name="residential-area" id="kin-residential" style="min-height: 200px;"> </textarea>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>

      <!-- TODO: disable save and continue  if form validation is false-->
      <div class="buttons-section">
        <a href="selectProgram.php">
          <button>BACK</button>
        </a>
        <button class="save-btn">SAVE</button>
        <a href="prevEducation.php">
          <button class="continue-btn">CONTINUE</button>
        </a>
      </div>

    </section>
  </main>

  <?php
  require_once('templates/applicationFooter.php');
  ?>

  <script src="js/personalInfo.js"></script>
  </body>

</html>