<!-- sticky navbar -->
<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
  $loggedin= true;
}
else{
  $loggedin= false;

}
echo '<nav class="navbar">
      <div class="logo-container">
        <a href="index.php">
        <img class="logo-image" src="gallery/logo.png" alt="barber shop nav logo"></a>
      </div>

      <input type="checkbox" id="burger-input">
      <label id="burger-menu" for="burger-input"></label>

        <ul class="menu-list" id="dropdown-navbar">
        <li class="brush-stroke"><a href="index.php">HOME</a></li>
        <li class="brush-stroke"><a href="booknow.php">PRICE</a></li>
        <li class="brush-stroke"><a href="gallery.php">GALLERY</a></li>
        <li class="brush-stroke"><a href="joinus.php">JOIN US</a></li>
      </ul>';
        
      if(!$loggedin)
     echo'<ul class="menu-list" id="dropdown-navbar">
        <!-- <div class="brush-stroke book-now" id="book-now"> -->
        <li class="brush-stroke"><a href="sign.php">Log In</a></li>';
        if($loggedin){
        echo '<li class="brush-stroke"><a href="logout.php">Log Out</a></li>';
        }
        echo'</ul>
        </nav>';
  ?>