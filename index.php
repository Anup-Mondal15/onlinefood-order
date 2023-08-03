<?php include('partials-front/menu.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HunGers</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style2.css">

</head>
<body>
    <!-- home section starts  -->
<!-- <div class="slide" style="background:url(image/main.jpeg) no-repeat"> -->
<section class="home" img src="" id="home">

<div class="content">
    <h3>fresh and <span>delicious</span> food for your</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam libero nostrum veniam facere tempore nisi.</p>
    
    <!-- fOOD sEARCH Section Starts Here -->
    
    <form action="<?php echo SITEURL; ?>food-search.php" method="POST">
                <input class="search" type="search" name="search" placeholder="Search Foods" required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>
     <!-- fOOD sEARCH Section Ends Here -->
</div>

</section>
</div>
<!-- home section ends -->
    

    <!-- features section starts  -->

<section class="features" id="features">

<h1 class="heading"> our <span>features</span> </h1>

<div class="box-container">

    <div class="box">
        <img src="image/feature-img-1.png" alt="">
        <h3>fresh and delicious</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="image/feature-img-2.png" alt="">
        <h3>free delivery</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="image/feature-img-3.png" alt="">
        <h3>easy payments</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
        <a href="#" class="btn">read more</a>
    </div>

</div>

</section>

<!-- features section ends -->
<!-- categories section starts  -->

<section class="categories" id="categories">

    <h1 class="heading"> Featured <span>restaurants</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/5ad74ce37c383.jpg" alt="">
            <h3>Hari Burger</h3>
            <p>Palace, natwar jalandhar</p>
            <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            <a href="#" class="btn">order now</a>
        </div>

        <div class="box">
            <img src="image/5ad79e7d01c5a.jpg" alt="">
            <h3>kriyana store</h3>
            <p>near kalu gali hotel india what ever</p>
            <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            <a href="#" class="btn">order now</a>
        </div>

        <div class="box">
            <img src="image/5ad74b2867be8.jpg" alt="">
            <h3>Aarkay Vaishno Dhaba</h3>
            <p>Bhargav Nagar, Jalandhar - Nakodar Rd, Jalandhar, Punjab 144003</p>
            <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            <a href="#" class="btn">order now</a>
        </div>

        <div class="box">
            <img src="image/5ad74ebf1d103.jpg" alt="">
            <h3>Martini</h3>
            <p>399 L Near Apple Showroom, Model Town,</p>
            <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            <a href="#" class="btn">order now</a>
        </div>

    </div>

</section>

<!-- categories section ends -->
<?php 
        if(isset($_SESSION['order']))
        {
            echo $_SESSION['order'];
            unset($_SESSION['order']);
        }
    ?>

    <!-- Categories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h1 class="heading">Explore <span>Various Food Categories</span></h1>

            <?php 
                //Create SQL Query to Display CAtegories from Database
                $sql = "SELECT * FROM tbl_category WHERE active='Yes' AND featured='Yes' ORDER BY id DESC LIMIT 3";
                //Execute the Query
                $res = mysqli_query($conn, $sql);
                //Count rows to check whether the category is available or not
                $count = mysqli_num_rows($res);

                if($count>0)
                {
                    //CAtegories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values like id, title, image_name
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                            <div class="box-3 float-container">
                                <?php 
                                    //Check whether Image is available or not
                                    if($image_name=="")
                                    {
                                        //Display MEssage
                                        echo "<div class='error'>Image not Available</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                

                                <h3 class="float-text text-white" ><mark style="background-color:white;"><?php echo $title; ?></mark></h3>
                            </div>
                        </a>

                        <?php
                    }
                }
                else
                {
                    //Categories not Available
                    echo "<div class='error'>Category not Added.</div>";
                }
            ?>


            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->



    <!-- fOOD Menu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h1 class="heading">Our <span>Food Menu</span></h1>

            <?php 
            
            //Getting Foods from Database that are active and featured
            //SQL Query
            $sql2 = "SELECT * FROM tbl_food WHERE active='Yes' AND featured='Yes' LIMIT 4";

            //Execute the Query
            $res2 = mysqli_query($conn, $sql2);

            //Count Rows
            $count2 = mysqli_num_rows($res2);

            //CHeck whether food available or not
            if($count2>0)
            {
                //Food Available
                while($row=mysqli_fetch_assoc($res2))
                {
                    //Get all the values
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['image_name'];
                    ?>

                    <div class="food-menu-box">
                        <div class="food-menu-img">
                            <?php 
                                //Check whether image available or not
                                if($image_name=="")
                                {
                                    //Image not Available
                                    echo "<div class='error'>Image not available.</div>";
                                }
                                else
                                {
                                    //Image Available
                                    ?>
                                    <img src="<?php echo SITEURL; ?>images/food/<?php echo $image_name; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                                    <?php
                                }
                            ?>
                            
                        </div>

                        <div class="food-menu-desc">
                            <h3><?php echo $title; ?></h3>
                            <p class="food-price">৳<?php echo $price; ?></p>
                            <p class="food-detail">
                                <?php echo $description; ?>
                            </p>
                            <br>

                            <a href="<?php echo SITEURL; ?>order.php?food_id=<?php echo $id; ?>" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>

                    <?php
                }
            }
            else
            {
                //Food Not Available 
                echo "<div class='error'>Food not available.</div>";
            }
            
            ?>
 

            <div class="clearfix"></div>            

        </div>

        <p class="text-center">
            <a href="foods.php"><h3 align="center">See All Foods</h3></a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- review section starts  -->

    <section class="features" id="features">

<h1 class="heading"> our <span>features</span> </h1>

<div class="box-container">

    <div class="box">
        <img src="image/reviewer1.webp" alt="">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
        <h3>Anup</h3>
        <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="image/reviewer2.jpg" alt="">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
        <h3>Kamal</h3>
        <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="image/reviewer3.jpg" alt="">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
        <h3>Foyaz</h3>
        <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="box">
        <img src="image/" alt="">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt, earum!</p>
        <h3>Chaity</h3>
        <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
        <a href="#" class="btn">read more</a>
    </div>


</div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

<h1 class="heading"> our <span>blogs</span> </h1>

<div class="box-container">

    <div class="box">
        <img src="image/5ad7597aa0479.jpg" alt="">
        <div class="content">
            <div class="icons">
                <a href="#"> <i class="fas fa-user"></i> by user </a>
                <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
            </div>
            <h3>fresh and delicious food</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
            <a href="#" class="btn">read more</a>
        </div>
    </div>

    <div class="box">
        <img src="image/5ad75800a9399.jpg" alt="">
        <div class="content">
            <div class="icons">
                <a href="#"> <i class="fas fa-user"></i> by user </a>
                <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
            </div>
            <h3>fresh and delicious food</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
            <a href="#" class="btn">read more</a>
        </div>
    </div>

    <div class="box">
        <img src="image/5ad7590d9702b.jpg" alt="">
        <div class="content">
            <div class="icons">
                <a href="#"> <i class="fas fa-user"></i> by user </a>
                <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2021 </a>
            </div>
            <h3>fresh and delicious food</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, expedita.</p>
            <a href="#" class="btn">read more</a>
        </div>
    </div>

</div>

</section>

<!-- blogs section ends -->

    
    <!-- footer section starts  -->

<section class="footer">

<div class="box-container">

    <div class="box">
        <h3> HunGers <i class="fas fa-shopping-basket"></i> </h3>
        <p>Order Delivery & Take-Out</p>
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
        </div>
    </div>

    <div class="box">
        <h3>contact info</h3>
        <a href="#" class="links"> <i class="fas fa-phone"></i> +08801710415952 </a>
        <a href="#" class="links"> <i class="fas fa-phone"></i> +08801778117700 </a>
        <a href="#" class="links"> <i class="fas fa-envelope"></i> anupmondal6970@gmail.com </a>
        <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> 1207 Dhaka, Bangladesh </a>
    </div>

    <div class="box">
        <h3>quick links</h3>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
        <a href="<?php echo SITEURL;?>foods.php" class="links"> <i class="fas fa-arrow-right"></i> foods </a>
        <a href="<?php echo SITEURL;?>categories.php" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
        <a href="#review" class="links"> <i class="fas fa-arrow-right"></i> review </a>
        <a href="#blogs" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
    </div>

    <div class="box">
        <h3>newsletter</h3>
        <p>subscribe for latest updates</p>
        <input type="email" placeholder="your email" class="email">
        <input type="submit" value="subscribe" class="btn">
        <img src="image/payment.png" class="payment-img" alt="">
    </div>

</div>

<div class="credit"> created by <span> Team Bit By Bit </span> | all rights reserved </div>

</section>

<!-- footer section ends -->

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="script.js"></script>
</body>
</html>