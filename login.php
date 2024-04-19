<?php

session_start();

include("db.php");
include("functions.php");
//$user_data = check_login($conn);

$passwordEmptyErr = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password) && !is_numeric($email)) {
        //read from database
        $query = "select * from registration where email = '$email' limit 1";
        $result = mysqli_query($conn, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['password'] === $password) {
                    $_SESSION['name'] = $user_data['name'];
                    header("Location: index.php");
                    echo '<script>alert("Welcome to Ratnakala")</script>';
                    die;
                }
            }
        }
        $passwordEmptyErr = '<div class="error">
                                wrong username or password!
                                </div>';
    } else {
        $passwordEmptyErr = '<div class="error">
                                 wrong username or password!
                                </div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratnakala Exports | Enduring Excellence | Online diamonds selling website | Diamond Exporter from India to
        UK, USA, Italy, Switzerland, Belgium | Developed by ProExe Lancers, Surat, Gujarat, India</title>
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
    <div id="login">
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
            <?php
            //session_start();
            if (isset($_SESSION['id'])) {
                echo ' <a href="logout.php" class="button register">Logout</a>';
            } else {
                echo ' <a href="register.php" class="button register">Register</a>';
                echo ' <a href="login.php" class="button  login">Login</a>';
            }
            ?>
            <!-- <a href="login.php" class="button  login">Login</a>
            <a href="register.php" class="button register">Register</a> -->

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
                    <li class="my-auto mx-auto"><a href="login.php" class="active">login</a></li>
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


        <!-- Log-In Form page Start -->

        <div id="page1">
            <div class="main-box bg-light rounded-2 ">
                <form method="POST" action="login.php">
                    <div class="text-center ">
                        <a href="index.php">
                            <img class="logo   img-fluid " src="imgs/logo.png" alt="">
                        </a>
                    </div>
                    <h3 class="fw-normal my-5">Login Now</h3>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control bg-light  text-dar "
                            placeholder="Enter your E-mail" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3">
                        <div class="password-container d-flex align-items-center  w-100">
                            <input type="password" name="password" id="passwordInput"
                                class="form-control bg-light text-dark " placeholder="Enter password">
                            <i class="toggle-password fas fa-eye" onclick="togglePasswordVisibility()"></i>
                        </div>
                    </div>
                    <?php echo $passwordEmptyErr; ?>
                    <div class="mt-lg-5 mt-md-5">
                        <button class="button2" type="submit" name="login" value="login">Log in</button>
                        <a href="register.php" class="float-end ">New User ? Register Now</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Log-In Form page End -->

        <!-- Footer Start -->
        <div id="footer" class="margin-top p-md-5 p-4 pl pr">
            <div class="container p-0">
                <div class="row justify-content-between">
                    <div class="col-md-8">
                        <div class="footer-inner d-flex flex-column gap-1">
                            <!-- <div class="footer-logo">
                            <a href="index.html">
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