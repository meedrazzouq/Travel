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
      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
   </section>
   <!-- header section ends -->

   </body>
</html>