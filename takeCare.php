<?php 
$cclore=$_COOKIE['BGcolor'];
include 'Connection.php';
?>
<!DOCTYPE html>
<html>


<head>
  <title>soil store</title>

  <!--Google font-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

  <link rel="stylesheet" href="takecarecss.css">
  <script src="purchase.js" async></script>



</head>




<body style="background-color:<?php echo $cclore; ?>">


  <header>
    <div class="container2">
      <h1>Soil Store</h1>
      <nav class="nav1">
        <ul>
          <li><a href="Home.php">Home</a></li>
          <li class="dropdown">
            <a href="#">Plants</a>
            <ul>
              <li><a href="indoor.php">Indoor Plants</a></li>
              <li><a href="OutDoorProduct.php">Outdoor Plants</a></li>
              <li><a href="aromatic.php">Aromatic Plants</a></li>
              <li><a href="takeCare.php">Plant care</a></li>
            </ul>
          <li><a href="giftr2.php">Gifts</a></li>
          <li><a href="ShowYourProduct.php">Show Your Products</a></li>
          <li><a href="AboutUs.php">About Us</a></li>
          <li><a href="#" class="cart-icon"><img src="https://image.pngaaa.com/58/293058-middle.png" width="50"
                height="25"></a>
          </li>
          <li class="dropdown2">
            <a href="#"><img src="https://cdn-icons-png.flaticon.com/512/8801/8801434.png" width="30" height="25"></a>
            <ul>
              <li><a href="sign.html">Sign Up</a></li>
              <li><a href="login.html">Log In</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>


  <div class="background">
    <div class="container">
      <table class="pricing-table">
        <tr>
          <td class="pricing-plan">
            <img src="https://i.pinimg.com/474x/34/83/96/348396146dbad48556d81f658e6f85ce.jpg" alt=""
              class="pricing-img">
            <h2 class="pricing-header">Watering</h2>
            <ul class="pricing-features">
              <li class="pricing-features-item">Be mindful not to overwater or underwater them.</li>
              <li class="pricing-features-item">Check the soil moisture level before watering and adjust accordingly.
              </li>
            </ul>
          </td>

          <td class="pricing-plan">
            <img src="https://i.pinimg.com/736x/9e/ee/45/9eee454a3ba32dda3e735a23d7761c12.jpg" alt=""
              class="pricing-img">
            <h2 class="pricing-header">Sunlight</h2>
            <ul class="pricing-features">

              <li class="pricing-features-item"> Place indoor plants near windows with indirect sunlight or provide them
                with grow lights</li>
              <li class="pricing-features-item"> Outdoor plants should be placed in areas that receive the appropriate
                amount of sunlight for their species.</li>
            </ul>
          </td>

          <td class="pricing-plan">
            <img src="https://i.pinimg.com/564x/6d/97/ec/6d97ec5b587da91927adaab35bc02262.jpg" class="pricing-img">
            <h2 class="pricing-header">Soil and Fertilize</h2>
            <ul class="pricing-features">
              <li class="pricing-features-item"> Use well-draining soil suitable for the specific type of plant </li>
              <li class="pricing-features-item"> Regularly fertilize plants with appropriate fertilizers to provide
                essential nutrients for their growth. Follow the recommended fertilizing schedule and dosage for each
                plant.</li>
          </td>
        </tr>


        <tr>
          <td class="pricing-plan">
            <img src="https://i.pinimg.com/564x/39/ac/c7/39acc74e03454b79464fee4cb14666d1.jpg" alt=""
              class="pricing-img">
            <h2 class="pricing-header">Temperature and Humidity</h2>
            <ul class="pricing-features">
              <li class="pricing-features-item">Different plants have varying temperature and humidity preferences,
                Follow the instructions on the label</li>
            </ul>
          </td>

          <td class="pricing-plan">
            <img src="https://i.pinimg.com/474x/e9/f7/9c/e9f79c589832d80295d7834073771faf.jpg" alt=""
              class="pricing-img">
            <h2 class="pricing-header">Pests and Diseases</h2>
            <ul class="pricing-features">
              <li class="pricing-features-item"> Monitor plants for any signs of pests or diseases. If detected, take
                appropriate measures to control and treat the infestation promptly.</li>

            </ul>
          </td>

          <td class="pricing-plan">
            <img src="https://i.pinimg.com/474x/43/19/f5/4319f51ffb366ce162f36110b3fb6fdc.jpg" alt=""
              class="pricing-img">
            <h2 class="pricing-header">Repotting</h2>
            <ul class="pricing-features">
              <li class="pricing-features-item">Periodically repot plants to provide fresh soil, additional space for
                root growth, and ensure proper drainage. Choose a pot with drainage holes and use the right potting mix
                for each plant.</li>
            </ul>
          </td>
        </tr>












      </table>
    </div>
  </div>
  <footer>
    <p>&copy;2023 soil store. All rights reserved.</p>
  </footer>

  <!------------------------------------CART--------------------------------------->

  <main>
    <main>
      <?php
      echo generateCart($_SESSION["shopping_cart"],'takeCare.php');
      ?>
  <main>
  </main>
</body>

</html>