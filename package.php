<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Agency :: Best Agency</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo"><img src="images/logo.jpg"></a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php" class="active">package</a>
      <a href="book.php">book</a>
      <a href="#" id="register-btn">Register</a>
      <a  href="#" id="btn2">Login</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/backageback.jpg) no-repeat">
   <h1>packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">top destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/fes.jpg" alt="">
         </div>
         <div class="content">
            <h3>Fes Tour Packages</h3>
            <p>Immerse yourself in Fes' vibrant culture with our city tour package, exploring the enchanting medina, historical landmarks, and indulging in the renowned gastronomy.</p>
            <h2>700 DH</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/makness.jpg" alt="">
         </div>
         <div class="content">
            <h3>Mekness Tour Packages</h3>
            <p>Discover Meknes' charm with our immersive city tour, indulging in local flavors, exploring landmarks, and experiencing vibrant culture.</p>
            <h2>450 DH</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/agadir.jpg" alt="">
         </div>
         <div class="content">
            <h3>Agadir Tour Packages</h3>
            <p>Unleash your senses in Agadir's coastal oasis, where sun, flavors, culture, and beauty unite in our captivating tour.</p>
            <h2>899 DH</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/chef.jpg" alt="">
         </div>
         <div class="content">
            <h3>CHefchaouen Tour Packages</h3>
            <p>Unleash your senses in Agadir's coastal oasis, where sun, flavors, culture, and beauty unite in our captivating tour.</p>
            <h2>590 DH</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/dakhla.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dakhla Tour Packages</h3>
            <p>Dive into Dakhla's coastal paradise, where pristine landscapes, exquisite flavors, and vibrant culture converge in a mesmerizing experience.</p>
            <h2>1200 DH</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/elhoceima.jpg" alt="">
         </div>
         <div class="content">
            <h3>Elhoceima Tour Packages</h3>
            <p>Experience the hidden gem of Al Hoceima, a coastal haven where pristine beaches, rugged mountains, and rich culture come together in our captivating tour</p>
            <h2>900 DH</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/Essaouira.jpg" alt="">
         </div>
         <div class="content">
            <h3>Essaouira Tour Packages</h3>
            <p>Escape to tranquility in Essaouira, where the soothing sounds of the ocean, serene beaches, and charming riads invite relaxation and rejuvenation.</p>
            <h2>790 DH</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"><span class="btn">see more</span></div>
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

</section>

<!-- packages section ends -->
<!-- footer section starts  -->

<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +212654891295 </a>
         <a href="#"> <i class="fas fa-phone"></i> +212631859627</a>
         <a href="#"> <i class="fas fa-envelope"></i>  mohamedrazzouq@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Kenitra,Morocco </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      </div>
   </div>
</section>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>