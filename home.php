<?php
include 'conx.php';

if (isset($_POST['submit'])) {
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $email = $_POST['email'];
   $passw = $_POST['password'];

   // Check if the email already exists in the database
   $checkQuery = "SELECT * FROM users WHERE email = ?";
   $checkStatement = mysqli_prepare($connection, $checkQuery);
   mysqli_stmt_bind_param($checkStatement, "s", $email);
   mysqli_stmt_execute($checkStatement);
   $result = mysqli_stmt_get_result($checkStatement);
   
   if (mysqli_num_rows($result) > 0) {
      $message = "Email already exists. Please enter a different email.";
   } else {
      // Email does not exist, proceed with registration
      $insertQuery = "INSERT INTO users (fname, lname, email, password) VALUES (?, ?, ?, ?)";
      $insertStatement = mysqli_prepare($connection, $insertQuery);

      if ($insertStatement) {
         mysqli_stmt_bind_param($insertStatement, "ssss", $fname, $lname, $email, $passw);

         if (mysqli_stmt_execute($insertStatement)) {
            echo "Registration successful";
         } else {
            echo "Error executing statement: " . mysqli_stmt_error($insertStatement);
         }

         mysqli_stmt_close($insertStatement);
      } else {
         echo "Error preparing statement: " . mysqli_error($connection);
      }
   }
   
   mysqli_stmt_close($checkStatement);
}
?>
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="../travel/css/style.css"> -->
   <link rel="stylesheet" href="CSS/style.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function() {
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
         <a href="home.php" class="active">home</a>
         <a href="about.php">about</a>
         <a href="package.php">package</a>
         <a href="book.php">book</a>
         <a href="#" id="register-btn">Register</a>
         <a href="#" id="btn2">Login</a>

   </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
   </section>
   <!-- header section ends -->
<!-- register form starts -->
<section class="register" id="registernow">
<div class="register-title">REGISTER NOW <i style="cursor: pointer;" id="exit" class="fa-solid fa-xmark"></i></div>
   <div class="form">
      <form action="#" method="POST">>
      <label for=""> first Name* </label>
      <input type="text" id="fname" placeholder="Enter your first name" require name="fname">
      <label for="">Last Name*</label>
      <input type="text" id="lname" placeholder="Enter your last name" require name="lname">
      <label for="">Email Address*</label>
      <input type="email" id="email" placeholder="Enter a valid email" require name="email">
      <label for="">Password*</label>
      <input type="password" id="pass" placeholder="Enter an unexpected password" require name="password">
      <button id="submit-btn" name="submit" type="submit">Create</button>
      <?php if (!empty($message)): ?>
         <h1 style="color: red;"><?php echo $message; ?></h1>
         or <a class="loging" href="#">login</a>
      <?php endif; ?>
      </form>
   </div>
   <!-- <div class="social-media">
      <div class="title">Register using:</div>
      <a href="#">facebook</a>
      <a href="">Linkedin</a>
      <a href="">Twitter</a>
   </div> -->



</section>


<!-- register form ends -->

   <!-- home section starts  -->
   <section class="home">
      <div class="swiper home-slider">
         <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
               <div class="content">
                  <span>search, express, tour</span>
                  <h3>tour arround Morocco</h3>
                  <a href="package.php" class="btn">See more</a>
               </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
               <div class="content">
                  <span>search, express, tour</span>
                  <h3>express the new destination</h3>
                  <a href="package.php" class="btn">See more</a>
               </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
               <div class="content">
                  <span>search, express, tour</span>
                  <h3>make your trip effective</h3>
                  <a href="package.php" class="btn">See more</a>
               </div>
            </div>
         </div>
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
      </div>
   </section>
   <!-- home section ends -->
   <!-- services section starts  -->
   <section class="services">
      <h1 class="heading-title"> our services </h1>
      <div class="box-container">
         <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>trip guide</h3>
         </div>
         <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>Transport</h3>
         </div>
         <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>Food</h3>
         </div>
         <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>Hotel</h3>
         </div>
      </div>
   </section>
   <!-- services section ends -->
   <!-- home about section starts  -->
   <section class="home-about">
      <div class="image">
         <img src="images/aboutimage.jpg" alt="">
      </div>
      <div class="content">
         <h3>about us</h3>
         <p>Welcome to our travel agency, your ultimate gateway to the wonders of Morocco! As passionate experts in Moroccan travel, we are dedicated to curating exceptional experiences that showcase the country's unique charm and allure. With a deep understanding of Morocco's diverse landscapes, vibrant cities, and rich cultural heritage, we strive to create customized itineraries that cater to your individual preferences and desires. Whether you dream of exploring the maze-like alleys of the medinas, sipping mint tea in a traditional riad, embarking on a thrilling desert adventure, or immersing yourself in the vibrant local markets, our team of experienced travel consultants is here to make your dreams a reality. From seamless logistics to handpicked accommodations and insider tips, we take care of every detail to ensure your journey is seamless and unforgettable. Let us be your trusted guide as you embark on a remarkable exploration of Morocco's hidden gems, creating memories that will last a lifetime.</p>
         <a href="about.php" class="btn">read more</a>
      </div>
   </section>
   <!-- home about section ends -->
   <!-- home packages section starts  -->
   <section class="home-packages">
      <h1 class="heading-title"> our packages </h1>
      <div class="box-container">
         <div class="box">
            <div class="image">
               <img src="images/rabat.jpg" alt="">
            </div>
            <div class="content">
               <h3>Rabat Tour Packages</h3>
               <p>Discover the captivating charm of Rabat, Morocco's capital city. Immerse yourself in its historical sites, vibrant medina, and stunning coastal views for an unforgettable experience.</p>
               <h2>700 DH</h2>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>
         <div class="box">
            <div class="image">
               <img src="images/marrakesh.jpg" alt="">
            </div>
            <div class="content">
               <h3>Marrakech Tour Packages</h3>
               <p>Experience the enchantment of Marrakech, where vibrant souks, stunning palaces, and lively cultural experiences await.</p>
               <h2>900 DH</h2>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>
         <div class="box">
            <div class="image">
               <img src="images/Tanger, Morocco.jpg" alt="">
            </div>
            <div class="content">
               <h3>Tanger Tour Packages</h3>
               <p>Unleash your wanderlust in Tangier, where timeless history meets contemporary flair. Dive into a mosaic of vibrant markets, picturesque vistas, and cosmopolitan charm for an unforgettable adventure.</p>
               <h2>850 DH</h2>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>
      </div>
      <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
   </section>
   <!-- home packages section ends -->


   <section class="partner">
      <h1 class="heading-title"> our partners </h1>
      <div class="box-container">
         <div class="partner">
            <img src="images/tgv.jpg" alt="">
         </div>
         <div class="partner">
            <img src="images/oncf.png" alt="">
         </div>
         <div class="partner">
            <img src="images/marriothotel.png" alt="">
         </div>
         <div class="partner">
            <img src="images/maramhotel.png" alt="">
         </div>
         <div class="partner">
            <img src="images/lalasresturant.jpg" alt="">
         </div>
      </div>
   </section>

   <!-- home offer section starts  -->
   <section class="home-offer home-packages">
      <div class="content">
         <div class="offerimage">
            <img src="images/offer.jpg">
         </div>
      </div>
      <div class="content">
         <h3>upto 40% off</h3>
         <p>We are thrilled to announce an exciting offer for our loyal customers at our travel agency! As a token of our gratitude for your continued trust and support, we are introducing a fantastic discount of 40% when you book with us for the fourth time. It's our way of saying thank you for choosing us as your preferred travel partner. Whether you're planning a relaxing beach getaway, an adventurous mountain expedition, or a cultural city tour, this exclusive discount allows you to enjoy incredible savings while creating lasting memories. We value your loyalty, and we look forward to assisting you in making your dream vacations even more affordable and unforgettable. Book with us now and take advantage of this incredible offer!</p>
         <a href="book.php" class="btn">book now</a>
      </div>
   </section>
   <!-- home offer section ends -->

   <button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
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
            <a href="#"> <i class="fas fa-phone"></i> +212631859627 </a>
            <a href="#"> <i class="fas fa-envelope"></i> mohamedrazzouq@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Kenitra,Morocco</a>
         </div>
         <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         </div>
      </div>
      <!-- <div class="credit"> designed by <span>mr. bingo mingo</span> | all rights reserved! </div> -->
   </section>
   <!-- footer section ends -->
   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
   <!-- custom js file link  -->
   <script src="./js/script.js"></script>
</body>

</html>