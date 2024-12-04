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

    <footer class="footer">
      <div>
        <h4>Address</h4>
        <p>PO BOX 178, <br />MBABANE</p>
        <p>SANDA, KA SIBENTA</p>
      </div>
      <div>
        <h4>Contact Us</h4>
        <p>Telephone: <br />+25478667744</p>
        <p>Email: ecot@info.co.sz</p>
      </div>
      <div>
        <form>
          <h4>Subscribe to our website</h4>
          <input type="email" placeholder="Enter your email" required />
          <button type="submit">Subscribe</button>
        </form>
      </div>
    </footer>
    <div class="end">
      <div class="left">
        &copy; 2024 ECOT
        <ul>
          <li>Privacy</li>
          <li>Terms</li>
        </ul>
      </div>
      <div class="right">
        ESWATINI COLLEGE OF TECHNOLOGY
        <img src="img/web.png" alt="" />
        <img src="img/fb.png" alt="" />
      </div>
    </div>
  </body>
</html>
