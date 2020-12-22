<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Your Memories | About Us</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">

</head>

<body>
    
    <div class="catagories-side-menu">
        <!-- Close Icon -->
        <div id="sideMenuClose">
            <i class="ti-close"></i>
        </div>
        <!--  Side Nav  -->
        <div class="nav-side-menu">
            <div class="menu-list">
                <h6>Menu</h6>
                <ul id="menu-content" class="menu-content collapse out">
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#footwear" class="collapsed">
                        <a href="home.php">Home</a>
                    </li>
                    <li data-toggle="collapse" data-target="#footwear" class="collapsed">
                        <a href="about.php">Why "Your memories"?</a>
                    </li>
                    <li data-toggle="collapse" data-target="#footwear" class="collapsed">
                        <a href="cart.php">Cart</a>
                    </li>
                    <li data-toggle="collapse" data-target="#footwear" class="collapsed">
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="wrapper">

        <!-- ****** Header Area Start ****** -->
        <header class="header_area bg-img" style="background-color: black">
            <!-- Top Header Area Start -->
            <div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end" >
                        <div class="col-12" style="background-color: cyan; padding: 10px; border-radius: 10px">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- Logo Area -->
                                <div class="top_logo" >
                                    <a href="home.php"><h3 style="font-family: Arial, Helvetica, sans-serif;">Your Memories</h3></a>
                                </div>
                                <!-- Cart & Menu Area -->
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
                                    <!-- Cart Area -->
                                    <div class="cart">
                                    <?php
                                        $con = mysqli_connect('localhost','root','','yourmemories') or die('Unable To connect');
                                        $query="select * from cart";
                                        $check = mysqli_query($con, $query);
                                        $num = mysqli_num_rows($check); 
                                        $total=$num;
                                        $total=$total*0;
                                        while($row=mysqli_fetch_array($check))
							            {
                                            $total=$total+$row['product_total'];
                                        }
                                        echo "<a href='cart.php' id='header-cart-btn' target='_blank'><span class='cart_quantity'>$num</span> <i class='ti-bag'></i> Your Cart: $total Rs</a>";
                                    ?>
                                    </div>
                                    <div class="header-right-side-menu ml-15">
                                        <a href="#" id="sideMenuBtn"><i class="ti-menu" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ****** Header Area End ****** -->
        
        <div>
        </div>


        <!-- ****    Footer Area Start    **** -->

        <footer class="footer_area" style="background-color: cyan">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Area Start -->
                    <div class="col-12 align-items-center">
                        <div class="single_footer_area">
                            <div class="footer-logo" style="padding-left: 42%">
                                <img src="img/core-img/logo.jpg" alt="">
                            </div>
                            <div class="copywrite_text d-flex align-items-center" style="padding-left: 30%; color:  black" >
                                <p style="color: black;"> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Your Memories</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line" style="background-color: black;"></div>

                <!-- Footer Bottom Area Start -->
                <div class="footer_bottom_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer_social_area text-center">
                                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ****** Footer Area End ****** -->
    </div>
    <!-- /.wrapper end -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>