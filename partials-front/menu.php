<?php include('config/constants.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Food Order System</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
</head>

<body>
    <!-- header section starts  -->

<header class="header">

<a href="<?php echo SITEURL;?>" class="logo"> <i class="fas fa-shopping-basket"></i> Hun<span class="span">Gers.</span></a>

<nav class="navbar">
    <a href="<?php echo SITEURL;?>">Home</a>
    <a href="#features">features</a>
    <a href="<?php echo SITEURL;?>foods.php">Foods</a>
    <a href="<?php echo SITEURL;?>categories.php">categories</a>
    <a href="#review">review</a>
    <a href="#blogs">blogs</a>
</nav>

<div class="icons">
    <div class="fas fa-bars" id="menu-btn"></div>
    <div class="fas fa-search" id="search-btn"></div>
    <div class="fas fa-shopping-cart" id="cart-btn"></div>
    <div class="fas fa-user" id="login-btn"></div>
</div>

<form action="" class="search-form">
    <input type="search" id="search-box" placeholder="I would like to eat...">
    <label for="search-box" class="fas fa-search"></label>
</form>

<div class="shopping-cart">
    <div class="box">
        <i class="fas fa-trash"></i>
        <img src="image/cart-img-2.png" alt="">
        <div class="content">
            <h3>onion</h3>
            <span class="price">৳400/-</span>
            <span class="quantity">qty : 1</span>
        </div>
    </div>
    <div class="box">
        <i class="fas fa-trash"></i>
        <img src="image/cart-img-3.png" alt="">
        <div class="content">
            <h3>chicken</h3>
            <span class="price">৳500/-</span>
            <span class="quantity">qty : 1</span>
        </div>
    </div>
    <div class="total"> total : ৳900/- </div>
    <a href="#" class="btn">checkout</a>
</div>

<form action="" class="login-form">
    <h3>login now</h3>
    <input type="email" placeholder="your email" class="box">
    <input type="password" placeholder="your password" class="box">
    <p>forget your password <a href="#">click here</a></p>
    <p>don't have an account <a href="#">create now</a></p>
    <input type="submit" value="login now" class="btn">
</form>

</header>

<!-- header section ends -->
<script src="script.js"></script>

</body>
</html>