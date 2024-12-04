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
      
    </header> -->

    

    <main class="main-container">
      <section class="signup-form">
        <h2>Sign in to your account</h2>

        <form class="login-form">
        <input type="email" placeholder="EMAIL" required />
        <input type="password" placeholder="PASSWORD" required />
        <div class="form-row-signin">
        <p>Don't have an account? <a href="signup.php">Click here</a> </p>
          <div class="signin-action">
          <button type="submit">Login</button>
          <a href="#" class="forgot-password">Forgot Password?</a>
          </div>
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
