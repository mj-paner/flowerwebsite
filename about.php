<?php

@include 'config.php';

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

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>About us</h3>
    <p> <a href="home.php">Home</a> / About </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="C:\xampp\htdocs\flower store website\flowers\20230324_090152.jpg" alt="">
        </div>

        <div class="content">
            <h3>Why choose us?</h3>
            <p>Blossom have a very fresh flowers from the garden. And the price is very affordable.</p>
            <a href="shop.php" class="btn">Shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>What we provide?</h3>
            <p>We provide different varieties of flowers .And free seedling from the heart of our gardeners.</p>
            <a href="contact.php" class="btn">Contact us</a>
        </div>

        <div class="image">
            <img src="uploaded_img\20230427_162253.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="uploaded_img\20230324_085742.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>We are the best Gardener in our town. We delivered flowers with Love...and free delivery.</p>
            <a href="#reviews" class="btn">Clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">Client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="uploaded_img\jenerose.jpg" alt="">
            <p>Very Affordable and trusted one</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>MJ Paner</h3>
        </div>

        <div class="box">
            <img src="uploaded_img\juice.jpg" alt="">
            <p>Very nice.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>MJ Paner</h3>
        </div>

        <div class="box">
            <img src="uploaded_img\hazel.jpg" alt="">
            <p>I really really like it.By watching the flowers make me relieve my stress</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>MJ Paner</h3>
        </div>

        <div class="box">
            <img src="uploaded_img\lester.jpg" alt="">
            <p>nice nice nice.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>MJ Paner</h3>
        </div>

        <div class="box">
            <img src="uploaded_img\renald.jpg" alt="">
            <p>What you are waiting for? lets go....</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>MJ Paner</h3>
        </div>

        <div class="box">
            <img src="uploaded_img\warla.jpg" alt="">
            <p>Very bongga....Bili na kayo</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>MJ Paner</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>