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
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include('partials-front/menu.php'); ?>



    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <?php 

                //Display all the cateories that are active
                //Sql Query
                $sql = "SELECT * FROM tbl_category WHERE active='Yes'";

                //Execute the Query
                $res = mysqli_query($conn, $sql);

                //Count Rows
                $count = mysqli_num_rows($res);

                //CHeck whether categories available or not
                if($count>0)
                {
                    //CAtegories Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                        //Get the Values
                        $id = $row['id'];
                        $title = $row['title'];
                        $image_name = $row['image_name'];
                        ?>
                        
                        <a href="<?php echo SITEURL; ?>category-foods.php?category_id=<?php echo $id; ?>">
                            <div class="box-3 float-container">
                                <?php 
                                    if($image_name=="")
                                    {
                                        //Image not Available
                                        echo "<div class='error'>Image not found.</div>";
                                    }
                                    else
                                    {
                                        //Image Available
                                        ?>
                                        <img src="<?php echo SITEURL; ?>images/category/<?php echo $image_name; ?>" alt="Pizza" class="img-responsive img-curve">
                                        <?php
                                    }
                                ?>
                                

                                <h3 class="float-text text-white"><?php echo $title; ?></h3>
                            </div>
                        </a>

                        <?php
                    }
                }
                else
                {
                    //CAtegories Not Available
                    echo "<div class='error'>Category not found.</div>";
                }
            
            ?>
            

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->


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
        <a href="#" class="links"> <i class="fas fa-phone"></i> +08801956328979 </a>
        <a href="#" class="links"> <i class="fas fa-envelope"></i> anupmondal6970@gmail.com </a>
        <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> 1207 Dhaka, Bangladesh </a>
    </div>

    <div class="box">
        <h3>quick links</h3>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> features </a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> foods </a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> review </a>
        <a href="#" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
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
</body>
</html>