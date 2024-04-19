<?php
session_start();

include("db.php");
include("functions.php");
// echo '<script>alert("Welcome to Ratnakala")</script>'; 
//$user_data = check_login($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratnakala Exports | Enduring Excellence | Online diamonds selling website | Diamond Exporter from India to
        UK, USA, Italy, Switzerland, Belgium Australia, China, Europe, Hong Kong, Israel, Uae
        | Developed by ProExe Lancers, Surat, Gujarat, India</title>
    <link rel="icon" type="image/x-icon" href="imgs/mini_logo.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/extra.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <!-- Qr modal start-->
    <!-- Button trigger modal -->
    <div class="trigger ms-4 mb-2">
        <img src="imgs/android-image.png" alt="" class="qr-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">

        <img src="imgs/ios-image.png" alt="" class="qr-btn ms-2" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop2">
    </div>

    <div id='google_translate_element' class="mb-2"></div>

    <!-- Modals start -->

    <!-- Modal1 -->
    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 " id="staticBackdropLabel">DOWNLOAD APP</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center p-5">
                    <h1 class="text-black fs-5 p-lg-3">
                        SCANE THE CODE TO DOWNLOAD OUR ANDROID APP
                    </h1>
                    <img src="imgs/android-image.png" alt="">

                    <h1 class="fs-5 my-3">OR</h1>
                    <a class="text-black border-bottom border-2 border-black"
                        href="https://play.google.com/store/apps/details?id=com.ratnakala&pli=1">Click to open
                        link...</a>
                </div>
                <!-- <div class="modal-footer"> -->
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                <!-- </div> -->
            </div>
        </div>
    </div>

    <!-- Modal2 -->
    <div class="modal fade" id="staticBackdrop2" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabe2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 " id="staticBackdropLabe2">DOWNLOAD APP</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center p-5">
                    <h1 class="text-black fs-5 p-lg-3">
                        SCANE THE CODE TO DOWNLOAD OUR ANDROID APP
                    </h1>
                    <img src="imgs/ios-image.png" alt="">
                    <h1 class="fs-5 my-3">OR</h1>
                    <a class="text-black border-bottom border-2 border-black"
                        href="https://apps.apple.com/us/app/ratnakala-exports/id1543716358">Click to open link...</a>
                </div>
                <!-- <div class="modal-footer"> -->
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
            </div>
            <!-- </div> -->
        </div>
    </div>
    <!-- Modals end -->
    <!-- Qr modal end -->

    <!-- enquiery modal start -->
    <!-- Button trigger modal -->
    <button type="button" class="btn enquire" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Enquire Now
    </button>

    <!-- Modal -->
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">STONE INQUIRY</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-10 col-12 my-auto ">
                            <p class="text-black ">Enter Stock ID or Certificate Number to get detail of a stone.
                                You can get more details by available options (buttons) on this page.</p>
                        </div>
                        <div class="col-lg-2  col-12">
                            <div class="row d-flex  justify-content-center ">
                                <div class="col-lg-12 col-5">
                                    <div class="btn button my-1">Video 360
                                    </div>
                                </div>
                                <div class="col-lg-12 col-5">
                                    <div class="btn button my-1">Certificate</div>
                                </div>
                                <div class="col-lg-12 col-5">
                                    <div class="btn button my-1">BGM
                                    </div>
                                </div>
                                <div class="col-lg-12 col-5">
                                    <div class="btn button my-1">Inclusion Details
                                    </div>
                                </div>
                                <div class="col-lg-12 col-5">
                                    <div class="btn button my-1">Measurements
                                    </div>
                                </div>
                                <div class="col-lg-12 col-5">
                                    <div class="btn button my-1">Eye Clean
                                    </div>
                                </div>
                                <div class="col-lg-12 col-5">
                                    <div class="btn button my-1">Heart & Arrow
                                    </div>
                                </div>
                                <div class="col-lg-12 col-5">
                                    <div class="btn button my-1">Shipment Date
                                    </div>
                                </div>
                                <div class="col-lg-12 col-5">
                                    <div class="btn button my-1">Contact Expert
                                    </div>
                                </div>
                                <div class="col-lg-12 col-5">
                                    <div class="btn button my-1">Confirm
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer w-100">
                    <form>
                        <div class="row py-2 gap-lg-0 gap-2 ">
                            <div class="col-lg-10 col-12">
                                <div class="row gap-lg-0 gap-2">
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control"
                                            placeholder="Enter Stock ID or Certificate Number. eg., 'D112-12' OR '5625361515'"
                                            aria-label="Recipient's username with two button addons">
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="reset" class="w-100 btn" value="clear">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <input type="submit" class="w-100 btn" value="Get Details">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- enquiery modal end -->


    <div id="home">
        <!-- Page-1 Start -->
        <div id="page1">
            <!-- <div class="mainVideo"> -->
            <video class="mobileVideo1" src="videos/diamond with Content.mp4" autoplay muted loop></video>
            <video class="mobileVideo2" src="videos/01.mp4" autoplay muted
                loop></video>
            <!-- </div> -->
            <div class="nav-bg">
                <div class=" px-md-5 px-2 my-2 ms-3">
                    <a href="index.php">
                        <img class="logo my-lg-4 my-3 img-fluid " src="imgs/logo.png" alt="">
                    </a>
                </div>


                <button class="navbar-toggle my-lg-2 my-md-2" id="toggle" type="button">
                    <svg viewBox="0 0 100 100" width="70">
                        <path class="line top"
                            d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                        <path class="line middle" d="m 30,50 h 40" />
                        <path class="line bottom"
                            d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
                    </svg>
                </button>

                <?php
                //session_start();
                if (!isset($_SESSION['name'])) {
                    echo ' <a href="logout.php" class="button register">Logout</a>';

                } else {
                    echo ' <a href="register.php" class="button register">Register</a>';
                    echo ' <a href="login.php" class="button  login">Login</a>';
                }
                ?>

                <div class="d-flex">
                    <div>
                        <a href="login.php" class="button  login">Login</a>
                    </div>
                    <div>
                        <a href="register.php" class="button register">Register</a>
                    </div>
                </div>

                <div class="navbar  border-top  bordered">
                    <ul class="d-flex flex-column mx-lg-2 mx-md-2 bordered">
                        <div>
                            <a href="login.php" class="button  d-block  login">Login</a>
                        </div>
                        <div>
                            <a href="register.php" class="button d-block  register">Register</a>
                        </div>
                    </ul>
                    <ul class="d-flex flex-column mx-lg-2 mx-md-2 bordered">
                        <li class="my-auto mx-auto"><a href="index.php" class="active">Home</a></li>
                    </ul>
                    <ul class="d-flex flex-column mx-lg-2 mx-md-2 bordered">
                        <li class="">
                            <h6>Company Profile</h4>
                        </li>
                        <li class=" ms-2 "><a href="about.html">- About US</a></li>
                        <li class=" ms-2 "><a href="milestone.html">- Milestone</a></li>
                        <li class=" ms-2 "><a href="pdf/EthicalPolicy.pdf" target="_blank">- Ethical Policy</a></li>
                        <li class=" ms-2 "><a href="pdf/Form_MGT_7_2021.pdf" target="_blank">- Return 2021</a></li>
                        <li class=" ms-2 "><a href="pdf/Form_MGT_7_2022.pdf" target="_blank">- Return 2022</a></li>
                        <li class=" ms-2 "><a href="pdf/Form_MGT_7_2023.pdf" target="_blank">- Return 2023</a></li>
                    </ul>
                    <ul class="d-flex flex-column mx-lg-2 mx-md-2 bordered ">
                        <li class=" ">
                            <h6>Country</h4>
                        </li>
                        <li class="ms-2 text-lg-start text-md-start text-center  "><a href="australia.html">-
                                Australia</a></li>
                        <li class="ms-2 text-lg-start text-md-start text-center  "><a href="belgium.html">-
                                Belgium</a></li>
                        <li class="ms-2 text-lg-start text-md-start text-center  "><a href="china.html">-
                                China</a></li>
                        <li class="ms-2 text-lg-start text-md-start text-center  "><a href="europe.html">-
                                Europe</a></li>
                        <li class="ms-2 text-lg-start text-md-start text-center  "><a href="hk.html">-
                                Hong Kong</a></li>
                        <li class="ms-2 text-lg-start text-md-start text-center  "><a href="italy.html">- Italy</a>
                        </li>
                        <li class="ms-2 text-lg-start text-md-start text-center  "><a href="israel.html">-
                                Israel</a></li>
                        <li class="ms-2 text-lg-start text-md-start text-center  "><a href="switzerland.html">-
                                Switzerland</a></li>
                        <li class="ms-2 text-lg-start text-md-start text-center  "><a href="uk.html">- U.K</a></li>
                        <li class="ms-2 text-lg-start text-md-start text-center  "><a href="usa.html">- U.S.A</a>
                        </li>
                        <li class="ms-2 text-lg-start text-md-start text-center  "><a href="uae.html">-
                                U.A.E</a></li>
                    </ul>

                    <ul class="d-flex flex-column mx-lg-2 mx-md-2 bordered ">
                        <li class=" ">
                            <h6>Products</h4>
                        </li>
                        <li class="ms-2  text-lg-start text-md-start text-center  ">
                            <a href="product.html">- About
                                Diamonds</a>
                        </li>
                    </ul>

                    <ul class="d-flex flex-column mx-lg-2 mx-md-2 bordered ">
                        <li class=" ">
                            <h6>Contact Us </h4>
                        </li>
                        <li class="ms-2  text-lg-start text-md-start text-center  "><a href="contact.php">- Contact
                            </a></li>
                        <li class="ms-2  text-lg-start text-md-start text-center "><a href="logout.php">-
                                logout</a></li>
                        <li class="ms-2  text-lg-start text-md-start text-center  "><a href="hiring.html">-
                                Hiring</a></li>
                    </ul>
                </div>

                <div id="bg-circle"></div>
            </div>


        </div>
        <!-- Page-1 End -->


        <!-- Page-2 Start -->
        <!-- <div id="page2" class="d-flex justify-content-center align-items-center">
            <video src="videos/SaveInsta.App - 2967082840902211686.mp4" autoplay loop></video>
        </div> -->
        <!-- Page-2 End -->


        <!-- Page-3 Start -->

        <div id="page3" class="margin-top pt-md-5 pl pr" data-aos="fade-up" data-aos-duration="2500">
            <div class="container p-0">
                <h4 class="text-center mt-md-5 mt-lg-0  mt-sm-5 mt-3">"Dazzle in Every Detail, Sparkle for a
                    Lifetime
                    <br>
                    Ratnakala Diamonds that Define Your Unforgettable
                    Moments."
                </h4>
                <div class="row p-0 align-items-center flex-md-row flex-column-reverse gap-md-0 gap-4 pt-md-5">
                    <div class="col-md-8">
                        <div class="d-flex flex-column">
                            <h4>Let the Sparkle of Quality Diamonds</h4>
                            <h5 class="text-lg-start text-md-start text-center">Buying a certified diamond is not
                                only
                                an emotional but also a rational step.</h5>
                            <p>At Ratnakala, You get the finest diamond with an unparalleled service experience that
                                exceeds expectations. Our diamonds are carefully sourced from the best gem mines,
                                and
                                each stone is carefully inspected and graded by experts. With Us, you can be sure of
                                the
                                quality and sparkle of the diamonds you buy. Every piece of diamond crafted by Us is
                                a
                                unique work of art that is sure to delight. Whether you are looking for a timeless
                                classic or a dazzling show-stopper, Ratnakala is the perfect choice for you. Explore
                                the
                                world of diamonds with Ratnakala Exports and be dazzled by the beauty of quality
                                diamonds.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center">
                            <img src="imgs/diamondlogo.png" class="img-fluid" alt="" data-aos="zoom-in"
                                data-aos-offset="100" data-aos-duration="2000">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-3 End -->

        <!-- Page-4 Start -->
        <div id="page4" class="margin-top">
            <div class="container">
                <div class="row  g-md-0 p-lg-5 py-md-0 py-0 gap-md-0 gap-4 justify-content-between">
                    <h4 class="text-center mb-md-4 mb-4">Shop by shape</h4>
                    <div class="col-md-3 col-5 col-lg-1 p-0">
                        <div class="d-flex flex-column justify-content-center align-items-center diamond-shape">
                            <img data-aos="zoom-in-down" class="w-100 img-fluid" data-aos-duration="2000"
                                src="Dimaond/2.png" alt="">
                            <p>Round</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-5 col-lg-1 p-0">
                        <div class="d-flex flex-column justify-content-center align-items-center diamond-shape">
                            <img data-aos="zoom-in-down" class="" data-aos-duration="1500" src="Dimaond/3.png" alt="">
                            <p>Princess</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-5 col-lg-1 p-0">
                        <div class="d-flex flex-column justify-content-center align-items-center diamond-shape">
                            <img data-aos="zoom-in-down" class="" data-aos-duration="1000" src="Dimaond/10.png" alt="">
                            <p>Cushion</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-5 col-lg-1 p-0">
                        <div class="d-flex flex-column justify-content-center align-items-center diamond-shape">
                            <img data-aos="zoom-in-down" class="" data-aos-duration="1000" src="Dimaond/1.png" alt="">
                            <p>Oval</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-5 col-lg-1 p-0">
                        <div class="d-flex flex-column justify-content-center align-items-center diamond-shape">
                            <img data-aos="zoom-in-down" class="" data-aos-duration="1000" src="Dimaond/9.png" alt="">
                            <p>Pear</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-5 col-lg-1 p-0">
                        <div class="d-flex flex-column justify-content-center align-items-center diamond-shape">
                            <img data-aos="zoom-in-down" class="" data-aos-duration="1000" src="Dimaond/4.png" alt="">
                            <p>Emerald</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-5 col-lg-1 p-0">
                        <div class="d-flex flex-column justify-content-center align-items-center diamond-shape">
                            <img data-aos="zoom-in-down" class="" data-aos-duration="1500" src="Dimaond/7.png" alt="">
                            <p>Heart</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-5 col-lg-1 p-0">
                        <div class="d-flex flex-column justify-content-center align-items-center diamond-shape">
                            <img data-aos="zoom-in-down" class="" data-aos-duration="2000" src="Dimaond/5.png" alt="">
                            <p>Marquise</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-4 End -->

        <!-- Page-5 Start -->
        <div id="page5" class="margin-top">
            <div class="container pl pr " data-aos="zoom-in" data-aos-duration="2000">
                <div class="row d-flex align-items-center ">
                    <div class="col-lg-6 mb-3 ">
                        <div class="book-diamond">
                            <img src="ratnakala Imgs new/c2e67bd2bb.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="px-lg-3">
                            <h4 class=" text-start pt-md-0 pt-3">A Universe of Color and Clarity</h4>
                            <div class="text-white">
                                <p>Ratnakala diamond offers a dazzling array of exquisite diamonds that sparkle with
                                    color and clarity. In Our showroom, you'll find stones that have been cut and
                                    polished to perfection, radiating a brilliance unlike any other. From the most
                                    dazzling white to the most vibrant of colors, these pieces are truly a sight to
                                    behold. We offer a wide range of hues and levels of clarity, and our experts are
                                    here to help guide you in your search for the perfect diamond. For those looking
                                    for
                                    the best quality diamond, Ratnakala is the perfect way to add a touch of glamour
                                    and
                                    sophistication. With Our visionary creativity, We are sure to capture the hearts
                                    of
                                    You.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-5 End -->


        <!-- Page-6 Start -->
        <div id="page6" class="margin-top d-flex justify-content-center align-items-center" data-aos="zoom-in"
            data-aos-duration="2000">
            <video src="videos/diamond 360.mp4" autoplay muted loop></video>
        </div>
        <!-- Page-6 End -->

        <!-- Page-7 Start -->
        <div id="page7" class="">
            <div class="d-flex justify-content-between align-items-center page7-heading">
                <div class="border page7-heading-border" data-aos="fade-right" data-aos-duration="1500"></div>
                <h4 class="my-5 ">Pure Alliances </h4>
                <div class="border page7-heading-border" data-aos="fade-left" data-aos-duration="1500"></div>
            </div>

            <div id="images-section" class="pr pl mt-md-5">
                <div class="container p-0">
                    <div class="row mx-1 justify-content-around align-items-center gap-md-0 gap-5">
                        <div class="col-md-3 bg-light p-md-4 overlay-box" data-aos="fade-right"
                            data-aos-duration="2000">
                            <div class="page7-images">
                                <img src="imgs/GIA-2-image.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-3 bg-light p-md-4 overlay-box">
                            <div class="page7-images">
                                <img src="imgs/RJC-2-image.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-3 bg-light p-md-4 overlay-box" data-aos="fade-left" data-aos-duration="2000">
                            <div class="page7-images">
                                <img src="imgs/IGI-2-image.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-7 End -->

        <!-- Page-8 Start -->
        <div id="page8" class="margin-top pl pr">
            <div class="container p-0">
                <div class="row g-3">
                    <div class="col-md-3">
                        <div class="row g-1">
                            <div class="col-12 p-md-0">
                                <div class="page8-image" data-aos="fade-up" data-aos-duration="1000">
                                    <img class="img-fluid " src="ratnakala Imgs new/8ed5284166.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="page8-overlay-text text-white">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 p-md-0">
                                <div class="page8-image" data-aos="fade-up" data-aos-duration="1000">
                                    <img class="img-fluid " src="ratnakala Imgs new/IMG_1729.JPG" alt=""
                                        class="img-fluid">
                                    <div class="overlay"></div>
                                    <div class="page8-overlay-text text-white">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 p-md-0">
                        <div class="page8-image1" data-aos="fade-up" data-aos-duration="2000">
                            <img class="img-fluid " src="ratnakala Imgs new/96be90225c.jpg" alt="" class="img-fluid">
                            <div class="overlay"></div>
                            <div class="page8-overlay-text text-white">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row g-1">
                            <div class="col-12 p-md-0">
                                <div class="page8-image" data-aos="fade-up" data-aos-duration="3000">
                                    <img class="img-fluid " src="ratnakala Imgs new/IMG_1454.JPG" alt="">
                                    <div class="overlay"></div>
                                    <div class="page8-overlay-text text-white">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-md-0">
                                <div class="page8-image">
                                    <img class="img-fluid " src="ratnakala Imgs new/df3dab184e.jpg" alt=""
                                        data-aos="fade-up" data-aos-duration="2500">
                                    <div class="overlay"></div>
                                    <div class="page8-overlay-text text-white">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pe-md-0 ">
                                <div class="page8-image ">
                                    <img class="img-fluid " src="ratnakala Imgs new/72ab516028.jpg" alt=""
                                        data-aos="fade-up" data-aos-duration="3000">
                                    <div class="overlay"></div>
                                    <div class="page8-overlay-text text-white">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page-8 end -->

        <!-- Page-9 Start -->
        <!-- Swiper -->
        <div class="swiper margin-top mySwiper1 pl pr">
            <div class="swiper-wrapper p-0">
                <div class="swiper-slide">
                    <div class="row d-flex  flex-md-row flex-column gap-md-0 gap-5">
                        <div class="col-6 responsive d-flex align-items-center justify-content-center">
                            <div class="">
                                <div class="slide-img d-flex">
                                    <img src="imgs/user.png" alt="">
                                    <img class="bg-black p-5" src="Dimaond/1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-flex align-items-center">
                            <div class="slide-text">
                                <img class="slide-icon" src="imgs/iconslide.png" alt="">
                                <div class="ms-lg-5">
                                    <p class="text-white">Abishek was very helpful and the stones are great value, 5
                                        Stars
                                    </p>
                                    <div class="client d-flex gap-3 ">
                                        <!-- <img src="imgs/profile.png" alt=""> -->
                                        <div>
                                            <p class="mb-0 p-0 text-white text-center  text-lg-start ">Luxury Portal
                                                Ltd.
                                            </p>
                                            <p class="d-block fw-lighter">Bought 11/24/2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row d-flex  flex-md-row flex-column gap-md-0 gap-5">
                        <div class="col-6 responsive d-flex align-items-center justify-content-center">
                            <div class="">
                                <div class="slide-img d-flex">
                                    <img src="imgs/user.png" alt="">
                                    <img class="bg-black p-5" src="Dimaond/3.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-flex align-items-center">
                            <div class="slide-text">
                                <img class="slide-icon" src="imgs/iconslide.png" alt="">
                                <div class="ms-lg-5">

                                    <p class="text-white">
                                        Ratnakala is a company i trust. They provide good service and i will
                                        definitly
                                        buy
                                        from them again.</p>
                                    <div class="client d-flex gap-3 ">
                                        <!-- <img src="imgs/profile.png" alt=""> -->
                                        <div>
                                            <p class="mb-0 p-0 text-white text-center  text-lg-start ">89diamonds
                                            </p>
                                            <p class="d-block fw-lighter">Bought 08/12/2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="row d-flex  flex-md-row flex-column gap-md-0 gap-5">
                        <div class="col-6 responsive d-flex align-items-center justify-content-center">
                            <div class="">
                                <div class="slide-img d-flex">
                                    <img src="imgs/user.png" alt="">
                                    <img class="bg-black p-5" src="Dimaond/5.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-flex align-items-center">
                            <div class="slide-text">
                                <img class="slide-icon" src="imgs/iconslide.png" alt="">
                                <div class="ms-lg-5">

                                    <p class="text-white">Alpesh and Kunal are wonderful sellers, they are very
                                        professional, helpful and co-operative. Looking forward to many more
                                        businesses
                                        with
                                        them.</p>
                                    <div class="client d-flex gap-3 ">
                                        <!-- <img src="imgs/profile.png" alt=""> -->
                                        <div>
                                            <p class="mb-0 p-0 text-white text-center  text-lg-start ">WIN & SAN
                                            </p>
                                            <p class="d-block fw-lighter">Bought
                                                02/27/2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="row d-flex  flex-md-row flex-column gap-md-0 gap-5">
                        <div class="col-6 responsive d-flex align-items-center justify-content-center">
                            <div class="">
                                <div class="slide-img d-flex">
                                    <img src="imgs/user.png">
                                    <img class="bg-black p-5" src="Dimaond/2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-flex align-items-center">
                            <div class="slide-text">
                                <img class="slide-icon" src="imgs/iconslide.png" alt="">
                                <div class="ms-lg-5">

                                    <p class="text-white">Ratnakala exports is a wonderful company to work with.
                                        Make of the
                                        diamond is really nice. Kunal Darji is the nicest salesperson I ever met. He
                                        is a
                                        Cherry on the Cake</p>
                                    <div class="client d-flex gap-3 ">
                                        <!-- <img src="imgs/profile.png" alt=""> -->
                                        <div>
                                            <p class="mb-0 p-0 text-white text-center  text-lg-start ">Shanghai Boli
                                                Diamond Sales Co.Ltd
                                            </p>
                                            <p class="d-block fw-lighter">Bought 12/10/2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row d-flex  flex-md-row flex-column gap-md-0 gap-5">
                        <div class="col-6 responsive d-flex align-items-center justify-content-center">
                            <div class="">
                                <div class="slide-img d-flex">
                                    <img src="imgs/user.png" alt="">
                                    <img class="bg-black p-5" src="Dimaond/9.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 d-flex align-items-center">
                            <div class="slide-text">
                                <img class="slide-icon" src="imgs/iconslide.png" alt="">
                                <div class="ms-lg-5">

                                    <p class="text-white">I had the amazing opportunity to do some business with
                                        Saurav.
                                        Thank
                                        you for the dedicated service and consistent availability. I wish to
                                        make more
                                        purchases
                                        in the future.</p>
                                    <div class="client d-flex gap-3 ">
                                        <!-- <img src="imgs/profile.png" alt=""> -->
                                        <div>
                                            <p class="mb-0 p-0 text-white text-center  text-lg-start ">Guy Tsur
                                            </p>
                                            <p class="d-block fw-lighter">Bought
                                                08/29/2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="swiper-button-next me-md-1 me-lg-3"></div>
            <div class="swiper-button-prev ms-md-1 ms-lg-3"></div>
            <div class="swiper-pagination"></div>
            <div class="autoplay-progress">
                <svg viewBox="0 0 48 48">
                    <circle cx="24" cy="24" r="20"></circle>
                </svg>
                <span></span>
            </div>
        </div>
        <!-- Swiper -->
        <!-- Page-9 End -->

        <!-- Page-10 Start -->
        <div id="page10" class="margin-top pl pr">
            <div class="container p-0">
                <div class="page10-heading d-flex gap-3 flex-column align-items-center">
                    <h4 class="w-50 text-center">Experience The Ultimate Luxury Diamond</h4>
                    <!-- <p class="text-md-start text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Soluta voluptates minima adipisci ut
                        officia iusto?</p> -->
                </div>

                <div class="row mt-md-4">
                    <div class="col-md-6 p-1">
                        <div class="page10-images">
                            <img src="ratnakala Imgs new/IMG_1891.JPG" alt="" class="img-fluid rounded-3">
                        </div>
                    </div>
                    <div class="col-md-6 p-1">
                        <div class="page10-images">
                            <img src="ratnakala Imgs new/IMG_1578.JPG" alt="" class="img-fluid rounded-3">
                        </div>
                    </div>
                </div>

                <div class="mt-md-4 my-4 text-center d-flex flex-column align-items-center gap-3 page9-text-btn">
                    <p>Ratnakala Diamond Company is a visionary business that has changed the way the
                        diamond industry
                        operates. Our groundbreaking approach to diamonds has revolutionized the industry,
                        making it one
                        of the most important players in the market. The Ratnakala Diamond has become a
                        leader in the
                        diamond market due to its innovative approach to sourcing and selling diamonds. We
                        are the first
                        to offer diamonds directly from the mine to the customer. This new approach has
                        allowed Us to
                        provide customers with the highest quality, most ethically, and luxury diamonds in
                        the market.
                    </p>
                    <a href="product.html" class="button">Discover the diamonds</a>
                </div>
            </div>
        </div>
        <!-- Page-10 End -->

        <!-- Page-11 Start -->
        <div id="page11" class="margin-top pl pr">
            <div class="container p-0">
                <div class="page11-heading text-center">
                    <h4>Why Ratnakala?</h4>
                </div>

                <div class="row gap-md-0 gap-5 margin-top">
                    <div class="col-md-3">
                        <div class="page11-inner d-flex gap-3 flex-column  justify-content-center">
                            <div class="icon-box" data-aos="zoom-in-up" data-aos-duration="1500">
                                <img src="imgs/diamond.png" alt="">
                            </div>
                            <div class="heading text-center">
                                <h6>Quality</h6>
                            </div>
                            <p class="text-center">Our main specialization is in high-quality cut diamonds.
                                They are not
                                just beautiful but truly exceptional.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="page11-inner d-flex gap-3 flex-column  justify-content-center">
                            <div class="icon-box" data-aos="zoom-in-up" data-aos-duration="1500">
                                <img src="imgs/robotic-arm.png" alt="">
                            </div>
                            <div class="heading text-center">
                                <h6>Innovation</h6>
                            </div>
                            <p class="text-center ">The company has consistently employed the latest
                                production methods
                                to ensure that its diamonds are of the highest quality.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="page11-inner d-flex gap-3 flex-column  justify-content-center">
                            <div class="icon-box" data-aos="zoom-in-up" data-aos-duration="1500">
                                <img src="imgs/ring.png" alt="">
                            </div>
                            <div class="heading text-center">
                                <h6>Value</h6>
                            </div>
                            <p class="text-center ">You can trust
                                Ratnakala Diamonds to provide you with the highest quality diamonds and
                                exceptional
                                value.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="page11-inner d-flex gap-3 flex-column  justify-content-center">
                            <div class="icon-box" data-aos="zoom-in-up" data-aos-duration="1500">
                                <img src="imgs/ribbon.png" alt="">
                            </div>
                            <div class="heading text-center">
                                <h6>Ethics</h6>
                            </div>
                            <p class="text-center ">At Ratnakala Diamond Company, ethical practices are not
                                simply a
                                nice-to-have – they are the cornerstone of the company’s operations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page-11 End -->

        <!-- Footer Start -->
        <div id="footer" class="margin-top p-md-5 p-4 pl pr">
            <div class="container p-0">
                <div class="row justify-content-between">
                    <div class="col-md-8">
                        <div class="footer-inner d-flex flex-column gap-1">
                            <!-- <div class="footer-logo">
                                <a href="index.php">
                                    <img src="imgs/footer-logo.png" alt="" class="img-fluid">
                                </a>
                            </div> -->
                            <div class="company-name  mt-md-3 mt-3">
                                <p class="text-black fw-normal  text-lg-start text-md-start text-center">
                                    RATNAKALA EXPORTS PVT LTD
                                </p>
                            </div>
                            <div
                                class="d-flex flex-md-row flex-lg-row flex-column justify-content-between align-items-lg-center align-items-md-center align-items-start">
                                <div class="d-flex align-items-baseline mt-3">
                                    <i class="fa-solid fa-briefcase text-dark  me-3"></i>
                                    <p class="mb-0 text-black">
                                        EC - 8010-B1, E Tower, C - Block, Bharat Diamond Bourse, <br>
                                        BKC, Bandra (E), Mumbai-400051, India.
                                    </p>
                                </div>
                                <div class="footer-inner">
                                    <div>
                                        <p class="m-0 mt-3 text-black"><i class="fa-solid fa-phone text-dark me-3"></i>
                                            Call : +91 22 4094 5353
                                        </p>

                                        <p class="m-0 mt-3">
                                            <i class="fa-solid fa-envelope text-dark me-3"></i>
                                            <a href="mailto:online@ratnakala.com" class="text-black">E-mail
                                                :
                                                online@ratnakala.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div
                            class="footer-inner icon-box d-flex gap-3 h-100 justify-content-md-end justify-content-lg-end justify-content-start  mt-md-0 mt-2 align-items-end">
                            <a href="https://www.linkedin.com/company/ratnakala-exports-private-limited/"
                                target="_blank" class="bg-dark py-1 px-3 rounded-1 ">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                            <a href="https://www.facebook.com/ratnakala.export/" target="_blank"
                                class="bg-dark py-1 px-3 rounded-1 ">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/ratnakala_exports/" target="_blank"
                                class="bg-dark py-1 px-3 rounded-1 ">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="https://twitter.com/ratnakalaexport/" target="_blank"
                                class="bg-dark py-1 px-3 rounded-1 ">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>



    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>


    <!-- Language Button -->
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                autoDisplay: 'false',
                includedLanguages: 'en,zh-CN,en',
                layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
            }, 'google_translate_element');
        }
    </script>
    <script src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>

    <!-- Language Button -->

    <script src="js/main.js"></script>
</body>

</html>