<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
  rel="stylesheet" />
<!-- icon  -->
<link rel="icon" type="image/x-icon" href="img/ECOT Logo.png" />

<!-- stylesheets -->
<link rel="stylesheet" href="css/header.css" />

<?php if (isset($applicationMode))
  echo '<link rel="stylesheet" href="css/applicationFooter.css" />';
else
  echo '<link rel="stylesheet" href="css/footer.css" />';
?>

</head>

<body>
  <!-- Header Section -->
  <header class="header">
    <div class="wrapper">
      <div class="logo">
        <img src="img/Ecot logo.png" alt="ECOT Logo" />
        <h3>
          Eswatini College <br />
          Of Technology
        </h3>
      </div>

      <?php if (!isset($applicationMode)) { ?>
        <nav class="navbar">
          <a href="index.php">Home</a>
          <a href="About Yourself.html">About</a>
          <a href="signup.php">Admission</a>
          <!-- FIXME: make page for the additions page  (contain briefing for the admission process) -->
          <a href="Create Application.html">Academics</a>
          <a href="Select a Program.html">Administration</a>
        </nav>

        <div class="auth-buttons">
          <!-- <a href="signup.html" class="sign-up">Sign Up</a> -->
          <a href="signup.php" class="sign-in">Apply Now!</a>
        </div>
      <?php } else { ?>
        <!-- TODO: Make the user avatar -->
        <div class="aside">
          <div class="user-avatar" style="margin: 0 0 15px;">
            <p>Welcome <em><b>Bandile</b></em></p>
            <a href="dashboard.php" title="Dashboard">
              <img src="Img/user.png" alt="user">
            </a>
            <form action="includes/redirect.php" method="post">
              <button name="logout">Logout</button>
            </form>
          </div>

          <div class="progress" style=" width: 100%; border: 1px solid #ccc; border-radius: 5px; position: relative; background-color: #f9f9f9; height: 11px;">
            <div class="progress-completed" style="width: 10%; height: 100%; background-color: #007bff; border-radius: 5px;"></div>
            <p style="display: none; position: absolute; width: 100%; text-align: center; margin: 3px 0 0 0; line-height: 11px;">Application Completion: 10%</p>

          </div>

        </div>

      <?php } ?>
    </div>
  </header>