<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Application System</title>
    <link rel="stylesheet" href="css/signup.css" />

    <?php
    require_once("templates/header.php");
    ?>

    <!-- <header class="header">
      <div class="logo">
        <img src="img/ECOT2.png" alt="ECOT Logo" />
        <h1>
          Eswatini College <br />
          Of Technology
        </h1>
      </div>
      <form class="login-form">
        <input type="email" placeholder="EMAIL" required />
        <input type="password" placeholder="PASSWORD" required />
        <button type="submit">Login</button>
        <a href="#" class="forgot-password">Forgot Password?</a>
      </form>
    </header> -->

    

    <main class="main-container">
      <section class="signup-form">
        <h2>Create an account</h2>
        <form>
          <div class="form-row">
            <input type="text" placeholder="First Name" required />
            <input type="text" placeholder="Last Name" required />
          </div>
          <div class="form-row">
            <input type="email" placeholder="Email" required />
            <input type="text" placeholder="Identity Number" required />
          </div>
          <div class="form-row">
            <input type="text" placeholder="Country" required />
            <input type="tel" placeholder="Phone Number" required />
          </div>
          <div class="form-row">
            <input type="password" placeholder="Password" required />
            <input type="password" placeholder="Confirm Password" required />
          </div>
          <div class="form-row-action">
            <p>Already have an account? <a href="signin.php">Click here</a> </p>
            <button type="submit" class="btn">Sign Up</button>
          </div>
        </form>
      </section>
      <aside class="logo-section">
        <img src="img/Ecot Logo.png" alt="ECOT2" />
      </aside>
    </main>

    <?php
      require_once("templates/footer.php");
    ?>
  </body>
</html>
