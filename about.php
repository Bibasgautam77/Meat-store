<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We are the World Class meat processing, packaging and supplying company in Nepal. We’ve over a 35 years of butchers experience and prepare your meat just the way you like it and always happy to help. Suppliers of variety of quality chicken, mutton, pork and weekly special offers to ensure that your fridge is full of your wallet is happy.</p>
  
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>


<section class="authors">

   <h1 class="title">Meat Product</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/chicken.jpg" alt="">
        
         <h3>Chicken</h3>
      </div>

      <div class="box">
         <img src="images/mutton.jpg" alt="">
        
         <h3>Mutton</h3>
      </div>

      <div class="box">
         <img src="images/fish.jpg" alt="">
        
         <h3>Fish</h3>
      </div>

      <div class="box">
         <img src="images/turkey.jpg" alt="">
        
         <h3>Turkey</h3>
      </div>

      <div class="box">
         <img src="images/ostrich.jpg" alt="">
         
         <h3>Ostrich</h3>
      </div>

      <div class="box">
         <img src="images/pork.jpg" alt="">
        
         <h3>Pork</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>