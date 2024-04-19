<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

include("db.php");

    $nameEmptyErr = "";
    $nameErr = "";
    $emailEmptyErr = "";
    $emailErr = "";
    $passwordEmptyErr = "";
    $passwordErr = "";
    $birthdateEmptyErr = "";
    $numberEmptyErr = "";
    $whatsappnumberEmptyErr = "";
    $passwordmatchEmptyErr = "";
    $renameEmptyErr = "";
    $reemailEmptyErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $birthdate = $_POST['birthdate'];
    $number =  $_POST['number'];
    $companyname = $_POST['companyname'];
    $country = $_POST['country'];
    $whatsappnumber = $_POST['whatsappnumber'];
    $skypeid = $_POST['skypeid'];
    $qqid = $_POST['qqid'];
    $wechatid = $_POST['wechatid'];
    // $filee = $_POST['file'];
    $file = $_FILES['file'];
    
   // Insert new user details into the database
    if (empty($name) || empty($email) || empty($password) || ($password !== $confirmpassword) || empty($birthdate) || empty($number) || empty($whatsappnumber))
            {
            $nameEmptyErr = '<div class="error">
                              Name can not be left blank.
                             </div>';
            $emailEmptyErr = '<div class="error">
                             Email can not be left blank.
                             </div>';
            $passwordmatchEmptyErr = '<div class="error">
                             Passwords do not match.please enter matching password.
                             </div>';
            $passwordEmptyErr = '<div class="error">
                              Password can not be left blank.
                                 </div>';
                             
            $birthdateEmptyErr = '<div class="error">
                                 Birthdate can not be left blank.
                                </div>';
            $numberEmptyErr = '<div class="error">
                                 Number can not be left blank.
                                </div>';
            $whatsappnumberEmptyErr = '<div class="error">
                                 * Any one Social media information required.please fill Whatsapp number.
                                 </div>';
            } // Allow letters and white space 
            else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = '<div class="error">
                        Only letters and white space allowed.
                        </div>';
             } 
                    
            // } // E-mail format validation
            else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
                    $emailErr = '<div class="error">
                                    Email format is not valid.
                                </div>';
             }
    
                        else {
                                 $sql = "INSERT INTO `registration`(`name`,`email`,`password`,`confirm password`,`date`,`number`,`companyname`,`country`,`wp_num`,`skype_id`,`qq_id`,`wechat_id`,`file`) VALUES 
                                 ('$name','$email','$password','$confirmpassword','$birthdate','$number','$companyname','$country','$whatsappnumber','$skypeid','$qqid','$wechatid','$filee')";
                                 if (mysqli_query($conn, $sql)) 
                                 {
                                echo "Registration successful!";
                                // Sending email using PHPMailer
                                $mail = new PHPMailer(true);
                                try {
                                    
                                    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;  
                                    $mail->isSMTP();                                            //Send using SMTP
                                    $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
                                    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
                                    $mail->Username = 'ayaman.leafway@gmail.com';
                                    $mail->Password = 'rfneuoukyeqqzxbn';
                                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                                    $mail->Port = 587;
                                    //Recipients
                                    $mail->setFrom('ayaman.leafway@gmail.com', 'Ratnakala Registration user information'); //sender
                                    $mail->addAddress('ayaman.leafway@gmail.com', 'Receiver');  //receiver   //Add a recipient
                                    
                                    //Content
                                    $mail->isHTML(true);                                  //Set email format to HTM
                                    $mail->Subject = 'Ratnakala';
                                    $mail->Body = "Sender Name - $name  <br> 
                                                    E-mail - $email <br> 
                                                    Birthday - $birthdate <br> 
                                                    Mobile Number - $number <br> 
                                                    Company Number - $companyname <br> 
                                                    Country - $country <br>
                                                    Social info   -  $whatsappnumber <br> ";
                                  
                                    $mail->AddAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
                                    $mail->send();
                                    echo "<script>alert('Your form has been submited')</script>";
                            
                                } catch (Exception $e) {
                                    echo "not sent";
                                }
                            }
                            mysqli_close($conn);
                            header("Location: login.php");
                             die;
                            }
                            //   header("Location: login.php");
                            // die;
                     
                    
}
?>
