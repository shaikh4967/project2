<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    //Load Composer's autoloader
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';


    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'shaikh4967@gmail.com';
        $mail->Password = 'Shaikh@123';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        //Recipients
        $mail->setFrom('shaikh4967@gmail.com', 'ratnakala'); //sender
        $mail->addAddress('sbaz4967@gmail,com', 'Receiver');  //receiver   //Add a recipient


        //Content
        $mail->isHTML(true);                                  //Set email format to HTM
        $mail->Subject = $subject;
        $mail->Body = "sender Name - $name  <br> E-mail - $email <br> Subject - $subject <br> Message - $message";
        $mail->send();
        echo "<script>alert('Your form has been submited')</script>";
    } catch (Exception $e) {
        echo "not sent";
    }

}
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
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
</head>

<body>
    <div id="contact">
        <!-- Page-1 Start -->
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

            <a href="login.php" class="button  login">Login</a>
            <a href="register.php" class="button register">Register</a>

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
                    <li class="my-auto mx-auto"><a href="contact.php" class="active">Contact</a></li>
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
                    <li class="ms-2  text-lg-start text-md-start text-center  "><a href="product.html">- About
                            Diamonds</a></li>
                </ul>

                <ul class="d-flex flex-column mx-lg-2 mx-md-2 bordered ">
                    <li class=" ">
                        <h6>Contact Us </h4>
                    </li>
                    <li class="ms-2  text-lg-start text-md-start text-center  "><a href="contact.php">- Contact
                        </a></li>
                    <li class="ms-2  text-lg-start text-md-start text-center  "><a href="hiring.html">-
                            Hiring</a></li>
                </ul>
            </div>

            <div id="bg-circle"></div>
        </div>

        <div id="page1">
            <img src="imgs/contact-banner.webp">
            <div class="overlay">
            </div>
            <div class="inner-text">
                <h4 class="text-white text-start">Contact</h4>
                <div>
                    <a class="text-white" href="index.php">Home</a> /
                    <a href="#" class="active">Contact</a>
                </div>
            </div>
        </div>

        <!-- page2************** -->

        <div id="page2" class="container my-5 ">
            <div class="row pl pr">
                <div class="col-lg-6 col-md-6 p-0">
                    <div class="row">
                        <div class="col">
                            <h4>Apply Now</h4>
                            <hr>
                        </div>
                    </div>
                    <form action="" method="POST" onsubmit="myFunction()">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-12 my-2">
                                <input type="text" class="form-control py-lg-2" name="name" placeholder="Name" required>
                            </div>
                            <div class="col-md-6 col-lg-6 col-12 my-2">
                                <input type="text" class="form-control py-lg-2" name="email" placeholder="Email"
                                    required>
                            </div>
                        </div>
                        <div class="col my-2">
                            <input type="text" name="subject" class="form-control py-lg-2" placeholder="Subject">
                        </div>
                        <div class="col my-3">
                            <textarea name="message" id="" class="w-100 px-2 py-lg-3 py-2 bg-white" cols="30" rows="7"
                                placeholder="Your Message" required></textarea>
                        </div>
                        <div>
                            <button class="button mb-3" type="submit" name="submit" value="submit">Submit</button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 col-md-6 ps-lg-4 ps-md-4">
                    <div class="row">
                        <div class="col">
                            <h4>Contact Info</h4>
                            <hr>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row mt-lg-3 mt-md-3">
                            <div class="col-1">
                                <i class="fa-solid fa-location-arrow p-2 rounded-5"></i>
                            </div>
                            <div class="col-11 ps-4">
                                <address>
                                    <h6>Address</h6>
                                    <p>EC - 8010-B1, E Tower, C - Block, Bharat Diamond Bourse, BKC, Bandra (E),
                                        Mumbai-400051, India.
                                    </p>
                                </address>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-1">
                                <i class="fa-solid fa-phone p-2 rounded-5"></i>
                            </div>
                            <div class="col-11 ps-4">
                                <h6>Phone</h6>
                                <p class="mb-0">+91 22 4094 5353</p>
                                <p>+91 22 4004 9021</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col-1">
                                <i class="fa-solid fa-envelope p-2 rounded-5"></i>
                            </div>
                            <div class="col-11 ps-4">
                                <h6>Email</h6>
                                <p class="m-0">
                                    <a class="text-white" href="mailto:email@example.com">online@ratnakala.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="page3" class="pl pr">
            <div class="p-0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1907237.6858117909!2d72.39244061661351!3d20.989686432933475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0f79373351d97%3A0x63d91e40e90d1b25!2sRatnakala%20Exports%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1701693184810!5m2!1sen!2sin"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

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
                                        <!-- <br> -->
                                        <p class="m-0 mt-3">
                                            <i class="fa-solid fa-envelope text-dark me-3"></i>
                                            <a href="mailto:online@ratnakala.com" class="text-black">E-mail :
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

    <!-- **************map*************** -->

    <script>
        AOS.init();
    </script>

    <!-- Language Button -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <!-- Language Button -->

    <script src="js/main.js"></script>
</body>

</html>