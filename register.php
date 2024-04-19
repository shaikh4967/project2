<?php
session_start();

include("functions.php");
include("p.php");
//$user_data = check_login($conn);
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
    <div id="register">
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
                    <li class="my-auto mx-auto"><a href="china.html" class="active">China</a></li>
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
                    <?php
                    //session_start();
                    if (isset($_SESSION['id'])) {
                        echo ' <li class="ms-2  text-lg-start text-md-start text-center "><a href="logout.php">-
                                Logout</a></li>';
                    } else {
                        echo '<li class="ms-2  text-lg-start text-md-start text-center "><a href="register.php">-
                                Register </a></li>';
                        echo '<li class="ms-2  text-lg-start text-md-start text-center "><a href="login.php">-
                                Login </a></li>';
                    }
                    ?>
                </ul>
            </div>

            <div id="bg-circle"></div>
        </div>


        <!-- Log-In Form page Start -->


        <div id="page1">
            <div class="container">
                <div class="row p-lg-0 p-2 justify-content-center">
                    <div class="col-lg-7 border bg-light  p-lg-5 p-4 rounded">
                        <div class="text-center mb-3">
                            <a href="index.php">
                                <img class="logo img-fluid " src="imgs/logo.png">
                            </a>
                        </div>
                        <div class="mb-lg-4 mb-3 login-header ">
                            <h3 class="fw-normal" href="register.php">Register Now</>
                        </div>

                        <form action="register.php" method="POST" enctype="multipart/form-data">
                            <?php echo $renameEmptyErr; ?>
                            <div class="row g-3">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="name" class="form-control bg-light"
                                        placeholder="Full Name*" aria-label="First name" class="form-control">
                                    <?php echo $nameEmptyErr; ?>
                                    <?php echo $nameErr; ?>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="email" name="email" class="form-control bg-light" placeholder="Email*"
                                        aria-label="email">
                                    <?php echo $emailEmptyErr; ?>
                                    <?php echo $emailErr; ?>
                                    <?php echo $reemailEmptyErr; ?>
                                </div>
                            </div>

                            <div class="row g-3 mt-lg-0 mt-0">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="password-container d-flex   align-items-center w-100">
                                        <input type="password" name="password" id="passwordInput"
                                            class="form-control bg-light text-dark " placeholder="Enter password">
                                        <i class="toggle-password fas fa-eye" onclick="togglePasswordVisibility()"></i>
                                    </div>
                                    <?php echo $passwordEmptyErr; ?>
                                    <?php echo $passwordErr; ?>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="password-container d-flex   align-items-center w-100">
                                        <input type="password" name="confirmpassword" id="passwordInput2"
                                            class="form-control bg-light text-dark " placeholder="Enter password">
                                        <i class="toggle-password2 fas fa-eye"
                                            onclick="togglePasswordVisibility2()"></i>
                                    </div>
                                    <?php echo $passwordmatchEmptyErr; ?>
                                </div>
                            </div>

                            <div class="row g-3 mt-lg-0 mt-0">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="date" name="birthdate" class="form-control bg-light" name="Birthdate"
                                        placeholder="Birth Date*" aria-label="First name">
                                    <?php echo $birthdateEmptyErr; ?>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="tel" name="number" class="form-control bg-light"
                                        placeholder="Mobile Number*" aria-label="Number">
                                    <?php echo $numberEmptyErr; ?>
                                </div>
                            </div>

                            <div class="row g-3 mt-lg-0 mt-0">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" class="form-control bg-light" name="companyname"
                                        placeholder="Company Name*" aria-label="First name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 bg-color color-bg">
                                    <select id="country" name="country" class="form-control bg-light fw-light ">
                                        <option value="Country *">Country*</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Åland Islands">Åland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                        </option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic
                                            Republic
                                            of
                                            The</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-bissau">Guinea-bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald
                                            Islands
                                        </option>
                                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
                                        </option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic
                                            People's
                                            Republic of</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao People's Democratic Republic">Lao People's Democratic
                                            Republic
                                        </option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macao">Macao</option>
                                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former
                                            Yugoslav Republic of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                        </option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                        </option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russian Federation">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The
                                            Grenadines
                                        </option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and The South Sandwich Islands">South Georgia and
                                            The
                                            South
                                            Sandwich Islands</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania, United Republic of">Tanzania, United Republic of
                                        </option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-leste">Timor-leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor
                                            Outlying
                                            Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Viet Nam">Viet Nam</option>
                                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row py-lg-4 py-4">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <h3>Social Information</h3>

                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <span class="fw-light">
                                        <?php echo $whatsappnumberEmptyErr; ?>
                                    </span>

                                </div>
                            </div>

                            <div class="row g-3 ">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="tel" name="whatsappnumber" class="form-control bg-light"
                                        placeholder="Whatsapp Number" aria-label="First name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="skypeid" class="form-control bg-light"
                                        placeholder="Skype ID" aria-label="Last name">
                                </div>
                            </div>

                            <div class="row g-3 mt-lg-0 mt-0">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="qqid" class="form-control bg-light" placeholder="QQ ID"
                                        aria-label="First name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <input type="text" name="wechatid" class="form-control bg-light"
                                        placeholder="WeChat ID" aria-label="Last name">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center pt-lg-4 pt-4 social-text">
                                <h3>Terms and Documentations</h3>
                            </div>

                            <div class="row g-3 mt-lg-0 mt-0">
                                <span>Business Proof Document *</span>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="file" name="file" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-check mt-lg-4 mt-3 check-color">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1"
                                    value="something" required>
                                <label class="form-check-label" for="check1">I have read and agree to the <span
                                        class="fw-bold">Terms & Conditions.*</span></label>
                            </div>

                            <div class="form-check mt-lg-2 mt-2">
                                <input type="checkbox" class="form-check-input" id="check1" name="option1"
                                    value="something">
                                <label class="form-check-label" for="check1">Subscribe to our News Letter / Promotional
                                    Letter /
                                    Stock Update.</label>
                            </div>

                            <div class=" gap-lg-3 gap-3 mt-lg-4 mt-4">
                                <button class="button2" type="submit" name="submit" value="submit">Register</button>
                                <button class="button2" type="reset">Reset</button>
                                <a href="login.php" class="float-end my-lg-0 my-md-0 my-3">Already User ? Login
                                    Now</a>
                            </div>
                        </form>
                    </div>
                </div>
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