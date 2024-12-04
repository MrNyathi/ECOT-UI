<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ECOT - Online Application</title>
    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/footer.css" />

    <!-- include header here -->
    <?php 
      require_once('templates/header.php');
    ?>


    <!-- Hero Section -->
    <section class="hero">
      <h2>Apply Now</h2>
      <p>
        New user? <a href="Create Application.html">Click here</a> to apply.
      </p>
      <div class="cta">
        <h3>ESWATINI COLLEGE OF TECHNOLOGY</h3>
        <p>APPLICATION FOR DIPLOMA ADMISSION (2025)</p>
      </div>
    </section>

    <!-- Content Section -->
    <section class="content">
      <img src="img/Land.png" alt="Classroom" />
    </section>

    <!-- Footer Section -->
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
    <script src="script.js"></script>
  </body>
</html>
