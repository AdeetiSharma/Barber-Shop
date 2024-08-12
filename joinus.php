<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: sign.php");
  exit;
}

?>

<?php
    include'header.php';
    ?>

  <!-- form section-->
  <section class="appoitment-container detail-service-container">
    <div class="grunge-border left"></div>
    <div class="grunge-border right"></div>
    <div class="form-container" id="appoitment">
      <form method="post" action="capture.php" enctype="multipart/form-data" class="appoitment-form">
        <h2>Join Us</h2>
        <div class="data">
          <div>
            <div class="input-block personal-info">
              <input type="text" name="f_name" placeholder="First Name" required>
              <label>First Name</label>
            </div>

            <div class="input-block personal-info">
              <input type="text" name="l_name" placeholder="Last Name" required>
              <label>Last Name</label>
            </div>
          </div>

          <div>
            <div class="input-block personal-info">
              <input type="text" name="p_number" placeholder="Phone Number">
              <label>Phone Number</label>
            </div>

            <div class="input-block personal-info">
              <input type="email" name="email" placeholder="Email" required>
              <label>Email</label>
            </div>
          </div>

          <div>
            <div class="input-block personal-info">
              <input type="text" name="city" placeholder="Preffered City">
              <label>Preffered City</label>
            </div>

            <div class="input-block personal-info">
              <input type="text" name="area" placeholder="Area Location" required>
              <label>Area Location</label>
            </div>
          </div>
        </div>

        <div class="service-selection-container">
          <h3>Owner Space 900 sq ft</h3>

          <div class="service-selection-wraper">
            <div class="radio-field">
              <input type="radio" name="radio" value="yes" id="yes">
              <label for="yes">
                <i class="fa-solid fa-check font-awesome-icon"></i>
                <span>Yes</span>
              </label>
            </div>

            <div class="radio-field">
              <input type="radio" name="radio" value="no" id="no">
              <label for="no">
                <i class="fa-solid fa-xmark font-awesome-icon"></i>
                <span>No</span>
              </label>
            </div>
          </div>
        </div>

        <div class="submit-button">
          <input type="submit" name="submit" value="submit">
        </div>
      </form>
    </div>

    <div class="picture-container">
      <img src="gallery/pexels-lisa-fotios.jpg"
        alt="barber's workspace equipped with a chair, a shelf with creams, two flowerpots near the window">
      </form>
    </div>
  </section>


  <!-- map -->
  <div class="map-wraper">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3422.196909188818!2d75.8375128!3d30.937064600000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a84765e299be7%3A0x2f16040ac266e424!2sJalandhar%20Bypass%20Chownk%2C%20Thapar%20Nagar%2C%20Ludhiana%2C%20Punjab%20141008!5e0!3m2!1sen!2sin!4v1671463214845!5m2!1sen!2sin"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>"
  </div>

  <?php
include'footer.php';
?>

<?php
include'script.php';
?>