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

  <div class="gallery-container">
    <figure class="vertical-image spicky">
      <img src="gallery/comstock-images-spiky-hair.jpg" alt="spiky hair cut">
      <figcaption>Spiky Hair</figcaption>
    </figure>
    <figure class="vertical-image ivy-league">
      <img src="gallery/joseph-gonzalez-unsplash-ivy-league.jpg" alt="ivy league hair cut">
      <figcaption>Ivy League</figcaption>
    </figure>
    <figure class="vertical-image verdi">
      <img src="gallery/pexels-alex-urezkov-verdi.jpg" alt="verdi beard style">
      <figcaption>Verdi</figcaption>
    </figure>
    <figure class="landscape-image faux-hawk">
      <img src="gallery/pexels-andrea-piacquadio-faux-hawk.jpg" alt="Faux Hawk">
      <figcaption>Faux Hawk</figcaption>
    </figure>
    <figure class="landscape-image ivy-league-2">
      <img src="gallery/nathan-fertig-unsplash-ivy-league.jpg" alt="ivy league hair cut">
      <figcaption>Ivy League</figcaption>
    </figure>
    <figure class="vertical-image goatee">
      <img src="gallery/jupiterimages-goatee.jpg" alt="goatee beard style">
      <figcaption>Goatee</figcaption>
    </figure>
    <figure class="vertical-image buzz-cut">
      <img src="gallery/pexels-anastasiia-chaikovska-buzz-cut.jpg" alt="buzz hair cut">
      <figcaption>Buzz Cut</figcaption>
    </figure>
    <figure class="landscape-image faux-hawk-2">
      <img src="gallery/pexels-andrea-piacquadio-faux-hawk-2.jpg" alt="faux hawk haircut">
      <figcaption>Faux Hawk</figcaption>
    </figure>
    <figure class="vertical-image stuble">
      <img src="gallery/pexels-lucas-andrade-stuble-beard.jpg" alt="stuble beard">
      <figcaption>Stuble Beard</figcaption>
    </figure>

    <figure class="vertical-image fade">
      <img src="gallery/pexels-thgusstavo-santana-fade-haircut.jpg" alt="fade haircut">
      <figcaption>Fade Haircut</figcaption>
    </figure>
    <figure class="vertical-image spiky-2">
      <img src="gallery/photodisc-spiky-hair.jpg" alt="spiky hair cut">
      <figcaption>Spiky Hair</figcaption>
    </figure>
    <figure class="landscape-image goatee-2">
      <img src="gallery/pixabay-goatee.jpg" alt="goatee beard style">
      <figcaption>Goatee</figcaption>
    </figure>
    <figure class="vertical-image verdi-2">
      <img src="gallery/stocksnap-fclund-verdi.jpg" alt="verdi beard style">
      <figcaption>Verdi</figcaption>
    </figure>
    <figure class="vertical-image stubble-2">
      <img src="gallery/pexels-safa-bakirci-stubble-beard.jpg" alt="stuble beard">
      <figcaption>Stuble Beard</figcaption>
    </figure>
  </div>


<?php
include'footer.php';
?>

<?php
include'script.php';
?>