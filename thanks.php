<?php
ob_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="[women Techmakers-6 October] helps women in technology through events, workshops, scholarships, and many other activities.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WTM 6 October</title>
        <link rel="icon" href="imgs/logo.png">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link rel="stylesheet" href="css/vendors/bootstrap.min.css">
        <link rel="stylesheet" href="css/vendors/font-awesome.min.css">
        <link rel="stylesheet" href="css/vendors/animate.min.css">
        <link rel="stylesheet" href="css/main.min.css">
        <script>
            // Picture element HTML5 shiv
            document.createElement( "picture" );
        </script>
        <script src="js/vendors/picturefill.js" async></script>
    </head>
    <body>
        <div class="content">
            <div class="replaceheader">
            </div>
            <!--Header Section-->
            <header class="fadeIn ">
                <span class="gradient fadeInLeft "></span>
                <!--Navbar Section-->
                <nav class="container">
                    <div class="row">
                        <div class="flex-navbar">
                            <!--WTM Logo & Title-->
                            <a href="index.php" class="home" draggable="false">
                                <div class="logo">
                                    <img class="img-responsive" src="imgs/logo.png" alt="Women techmakers logo" title="Women techmakers logo" draggable="false">
                                    <span class="title">Women Techmakers</span>
                                </div>
                            </a>
                            <!--Burger Icon-->
                            <span class="fa fa-bars burger" aria-hidden="true"></span>
                            <!--Links-->
                            <ul class="navlinks col-md-10">
                                <li><a href="index.php#about" draggable="false">about</a></li>
                                <li><a href="index.php#team" draggable="false">our team</a></li>
                                <li><a href="index.php#events" draggable="false">events</a></li>
                                <li><a href="index.php#iwd17" draggable="false">iWD’17</a></li>
                                <li><a href="index.php#membership" draggable="false">membership</a></li>
                                <li><a href="index.php#sponsers" draggable="false">sponsers</a></li>
                                <li><a href="index.php#contactus" draggable="false">contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!--End of Navbar Section-->
            </header>
            <!--End of Header Section-->


<p class="sent text-center lead title"><span class="fa fa-check-circle"></span><span class="message">Your Message Had Been Sent, We Will Contact You Soon!.</span></p>

<?php
include 'inc/footer.php';
header( "refresh:3;url=index.php" );
?>