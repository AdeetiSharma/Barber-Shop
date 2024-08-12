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

  <!-- price section -->
  <section class="services-container price-container">
    <h2>Choose a service</h2>

    <div class="services-content price">
      <table>
        <caption>
          <h3>Men Haircut</h3>
        </caption>
        <tr>
          <th>Buzz Cut</th>
          <td><span>&#8377;</span> 200</td>
        </tr>
        <tr>
          <th>Crew Cut</th>
          <td><span>&#8377;</span> 200</td>
        </tr>
        <tr>
          <th>Faux Hawk</th>
          <td><span>&#8377;</span> 350</td>
        </tr>
        <tr>
          <th>Spiky Hair</th>
          <td><span>&#8377;</span> 350</td>
        </tr>
        <tr>
          <th>Ivy League</th>
          <td><span>&#8377;</span> 250</td>
        </tr>
        <tr>
          <th>Kids Trim</th>
          <td><span>&#8377;</span> 180</td>
        </tr>

        <tr>
          <th>Custom Style</th>
          <td data-content="by-agreement">by agreement</td>
        </tr>
      </table>

      <table>
        <caption>
          <h3>Beard Trim and Shave</h3>
        </caption>
        <tr>
          <th>Beard Trim and Haircut</th>
          <td><span>&#8377;</span> 350</td>
        </tr>
        <tr>
          <th>Simple Beard Trim</th>
          <td><span>&#8377;</span> 150</td>
        </tr>
        <tr>
          <th>Beard Trim & Neckline Shave</th>
          <td><span>&#8377;</span> 200</td>
        </tr>
        <tr>
          <th>Custom Beard Style</th>
          <td> <span>&#8377;</span> 290</td>
        </tr>
        <tr>
          <th>Head Shave</th>
          <td><span>&#8377;</span> 200</td>
        </tr>
        <tr>
          <th>Face Shave</th>
          <td><span>&#8377;</span> 350</td>
        </tr>
        <tr>
          <th>Full Shave</th>
          <td><span>&#8377;</span> 280</td>
        </tr>
      </table>
    </div>
  </section>

  <!-- form section -->
  <section class="appoitment-container detail-service-container">
    <div class="grunge-border left"></div>
    <div class="grunge-border right"></div>
    <div class="form-container" id="appoitment">
      <form action="appoint.php" enctype="multipart/form-data" method="POST" class="appoitment-form">
        <h2>Book appointment</h2>

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
              <input type="number" name="p_number" placeholder="Phone Number">
              <label>Phone Number</label>
            </div>

            <div class="input-block personal-info">
              <input type="email" name="email" placeholder="Email" required>
              <label>Email</label>
            </div>
          </div>

          <div>
            <div class="input-block datetime">
              <label>Date</label>
              <input type="date" name="date" required>
            </div>

            <div class="input-block datetime">
              <label>Time</label>
              <input type="time" name="time" required>
            </div>
          </div>
        </div>

        <div class="service-selection-container">
          <h3>Select a service</h3>

          <div class="service-selection-wraper">
            <div class="checkbox-field">
              <input type="checkbox" name="choice[]" value="haircut" id="haircut">
              <label for="haircut">
                <img src="gallery/hair-icon.png" alt="hair icon">
                <span>Haircut</span>
              </label>
            </div>

            <div class="checkbox-field">
              <input type="checkbox" name="choice[]" value="beard-trim" id="beard-trim">
              <label for="beard-trim">
                <img src="gallery/beard-icon.png" alt="beard icon">
                <span>Beard Trim</span>
              </label>
            </div>

            <div class="checkbox-field">
              <input type="checkbox" name="choice[]" value="shave" id="shave">
              <label for="shave">
                <img src="gallery/razor-icon.png" alt="razor icon">
                <span>Shave</span>
              </label>
            </div>
          </div>
        </div>

        <div class="submit-button">
          <input type="submit" value="COMPLETE">
        </div>
      </form>
    </div>

    <div class="picture-container">
      <img src="gallery/pexels-lisa-fotios.jpg"
        alt="barber's workspace equipped with a chair, a shelf with creams, two flowerpots near the window">
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