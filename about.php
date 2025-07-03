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
         <img src="images/animal.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>
         At [animal allure], we offer a wide range of products and services tailored to your pet's specific needs. 
         From premium pet food and toys to grooming services and veterinary care, we're your one-stop destination for everything your pet requires to thrive.
         </p>
         <p>  But beyond just providing products and services, we're committed to building a community of pet lovers.
       That's why we host events, workshops, and seminars aimed at educating pet owners and fostering a sense of camaraderie among fellow animal enthusiasts.
        </p>
         
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
        <!-- <img src="images/pic-1.png" alt="">-->
         <p>I was very hesitant about purchasing anything from this shop after checking other customer reviews. 
            However, I recently bought a glass tank (Atasuki branded) from them. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Samir Patel</h3>
      </div>

      <div class="box">
        <!-- <img src="images/pic-2.png" alt="">-->
         <p>The price was unbeatable compared to other shops, and they were the only online shop in the US that carries this brand. 
            On top of that they included free shipping. I couldn't ask for more</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
      
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Bharvi patel</h3>
      </div>

      <div class="box">
       <!--  <img src="images/pic-3.png" alt="">-->
         <p>The package was well-packaged and arrived in perfect condition, weighing 219lbs. 
            I am extremely grateful because it was the first time I received a glass tank in such pristine condition.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
         
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Krishi patel</h3>
      </div>

      <div class="box">
        <!-- <img src="images/pic-4.png" alt="">-->
         <p>
             so when I searched for it online I found a bag of it at a reasonable price at Petlife.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Najuk patel</h3>
      </div>

      <div class="box">
        <!-- <img src="images/pic-5.png" alt="">-->
         <p>The package was well-packaged and arrived in perfect condition, weighing 219lbs. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
          
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Meet Mochi</h3>
      </div>

      <div class="box">
      <!--   <img src="images/pic-6.png" alt=""> -->
         <p> when I searched for it online I found a bag of it at a reasonable price at Petlife.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
   
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>shivani Shah</h3>
      </div>

   </div>

</section>
<!--
<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/author-1.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-2.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-3.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-4.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-5.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="box">
         <img src="images/author-6.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>john deo</h3>
      </div>

   </div>

</section>


-->




<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>















