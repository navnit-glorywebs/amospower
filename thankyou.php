<?php 

if(isset($_POST['emailadd'])) {

    $message='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> <head> <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous" /> <title>AMOS Power</title>';

    $message.='<style type="text/css"> #outlook a {padding: 0; } body {width: 100% !important; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; margin: 0; padding: 0; } .ExternalClass {width: 100%; } .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%; } .table-center {width: 80% !important; margin: 0 auto; } #backgroundTable {margin: 0; padding: 0; width: 100% !important; line-height: 100% !important; } img {outline: none; text-decoration: none; border: none; -ms-interpolation-mode: bicubic; } a img {border: none; } .image_fix {display: block; } p {margin: 0px 0px !important; } table td {border-collapse: collapse; } table {border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; } a {color: #33b9ff; text-decoration: none; text-decoration: none !important; } table[class="full"] {width: 100%; clear: both; } @media only screen and (max-width: 640px) {a[href^="tel"], a[href^="sms"] {text-decoration: none; color: #33b9ff; pointer-events: none; cursor: default; } .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {text-decoration: default; color: #33b9ff !important; pointer-events: auto; cursor: default; } table[class="devicewidth"] {width: 440px !important; text-align: center !important; } table[class="devicewidthinner"] {width: 420px !important; text-align: center !important; } table[class="mainsmall1"] {float: left !important; } table[class="mainsmall2"] {float: right !important; } table[class="banner-gap"] {display: none !important; } img[class="bannerbig"] {width: 440px !important; height: 371px !important; } img[class="spacinglines"] {width: 420px !important; } } @media only screen and (max-width: 480px) {a[href^="tel"], a[href^="sms"] {text-decoration: none; color: #33b9ff; pointer-events: none; cursor: default; } .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {text-decoration: default; color: #33b9ff !important; pointer-events: auto; cursor: default; } table[class="devicewidth"] {width: 280px !important; text-align: center !important; } table[class="devicewidthinner"] {width: 260px !important; text-align: center !important; } table[class="mainsmall1"] {float: left !important; width: 120px !important; height: 90px !important; } table[class="mainsmall2"] {float: right !important; width: 120px !important; height: 90px !important; } img[class="mainsmall1"] {width: 120px !important; height: 90px !important; } img[class="mainsmall2"] {width: 120px !important; height: 90px !important; } table[class="banner-gap"] {display: none !important; } img[class="bannerbig"] {width: 280px !important; height: 236px !important; } img[class="spacinglines"] {width: 260px !important; } } </style>';

    $message.='</head>';

    $message.='<body>';

    $message.='<table bgcolor="#ffffff" align="center" width="600" cellpadding="0" cellspacing="0" border="0" class="devicewidth" style="border: 1px solid #dddddd;"> <tbody> <tr> <td> <table width="100%" border="0" cellpadding="0" cellspacing="0" align="left" class="force-row"> <tr> <td style="text-align: center; background: #ffffff; padding: 20px 0 20px;"> <a href="#" title="Logo" target="_blank"><img src="http://localhost/projects/html/amospower/images/header-logo.png"></a> </td> </tr> </table> </td> </tr> <tr> <td height="40" style="border-top: 5px solid #38BCC2;"></td> </tr> <tr> <td> <table width="100%" bgcolor="" cellpadding="0" cellspacing="0" border="0" id="" class="table-center" style="padding: 0 50px;">';

    if(isset($_POST['fname'])){
    $message.='<tr style="border-bottom: 1px solid #ddd; height: 50px;"> <td width="300" height="35" style="font-size: 16px; mso-line-height-rule: exactly; font-family: Arial, Helvetica, sans-serif; color: #000; font-weight: 700; padding-right: 20px;">First Name</td> <td width="200" height="35" style="font-size: 16px; mso-line-height-rule: exactly; font-family: Arial, Helvetica, sans-serif; color: #333; font-weight: 700;">'.$_POST['fname'].'</td> </tr>';
    }
    if(isset($_POST['lname'])){
    $message.='<tr style="border-bottom: 1px solid #ddd; height: 50px;"> <td width="300" height="35" style="font-size: 16px; mso-line-height-rule: exactly; font-family: Arial, Helvetica, sans-serif; color: #000; font-weight: 700; padding-right: 20px;">Last Name</td> <td width="200" height="35" style="font-size: 16px; mso-line-height-rule: exactly; font-family: Arial, Helvetica, sans-serif; color: #333; font-weight: 700;">'.$_POST['lname'].'</td> </tr>';
    }

    if(isset($_POST['emailadd'])){
    $message.='<tr style="border-bottom: 1px solid #ddd; height: 50px;"> <td width="300" height="35" style="font-size: 16px; mso-line-height-rule: exactly; font-family: Arial, Helvetica, sans-serif; color: #000; font-weight: 700; padding-right: 20px;">Email Address</td> <td width="200" height="35" style="font-size: 16px; mso-line-height-rule: exactly; font-family: Arial, Helvetica, sans-serif; color: #333; font-weight: 700;">'.$_POST['emailadd'].'</td> </tr>';
    }

    if(isset($_POST['addemail'])){
    $message.='<tr style="border-bottom: 1px solid #ddd; height: 50px;"> <td width="300" height="35" style="font-size: 16px; mso-line-height-rule: exactly; font-family: Arial, Helvetica, sans-serif; color: #000; font-weight: 700; padding-right: 20px;">Email Address</td> <td width="200" height="35" style="font-size: 16px; mso-line-height-rule: exactly; font-family: Arial, Helvetica, sans-serif; color: #333; font-weight: 700;">'.$_POST['addemail'].'</td> </tr>';
    }

    if(isset($_POST['contact'])){
    $message.='<tr style="border-bottom: 1px solid #ddd; height: 50px;"> <td width="300" height="35" style="font-size: 16px; mso-line-height-rule: exactly; font-family: Arial, Helvetica, sans-serif; color: #000; font-weight: 700; padding-right: 20px;">Contact</td> <td width="200" height="35" style="font-size: 16px; mso-line-height-rule: exactly; font-family: Arial, Helvetica, sans-serif; color: #333; font-weight: 700;">'.$_POST['contact'].'</td> </tr>';
    }

     if(isset($_POST['comment'])){
    $message.='<tr style="border-bottom: 1px solid #ddd; height: 50px;"> <td width="300" height="35" style="font-size: 16px; mso-line-height-rule: exactly; font-family: Arial, Helvetica, sans-serif; color: #000; font-weight: 700; padding-right: 20px;">Comments</td> <td width="200" height="35" style="font-size: 16px; mso-line-height-rule: exactly; font-family: Arial, Helvetica, sans-serif; color: #333; font-weight: 700;">'.$_POST['comment'].'</td> </tr>';
    }

    $message.='</table> </td> </tr> <tr> <td height="40"></td> </tr> <tr> <td style="text-align: center; background: #38BCC2; padding: 20px 0;"> <p style="font-size: 14px; font-family: Arial, Helvetica, sans-serif; color: #ffffff; font-weight: 600;">© 2021 AMOS Power. All Rights Reserved.</p> </td> </tr> </tbody> </table> </body> </html> ';

    $to = "anil.test34@gmail.com";

    $headers = "MIME-Version: 1.0" . "\r\n";

    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= 'From: AMOS Power <info@amospower.com>' . "\r\n";

    $subject = 'New Inquiry Placed On - AMOS Power';

    mail($to, $subject, $message, $headers);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AMOS Power</title>
        <!-- Favicon -->
        <link rel="icon" href="images/favicon.ico">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- font-family: 'Exo', sans-serif; -->
        <link href="https://fonts.googleapis.com/css2?family=Exo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <!-- font-family: 'Play', sans-serif; -->
        <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- Custom Stylesheet -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>

        <header id="site-header" class="site-header">
            <div class="nav-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                            <div class="site-branding d-flex align-items-center">
                                <a class="d-block" href="index.html"><img src="images/header-logo.png"></a>
                            </div>
                            <nav class="site-navigation d-flex justify-content-end align-items-center">
                                <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                    <li><a href="#signup">Sign Up</a></li>
                                    <li><a href="#solution">Solution</a></li>
                                    <li><a href="#amos">Amos</a></li>
                                    <li><a href="#market">Market</a></li>
                                    <li><a href="#technology">Technology</a></li>
                                    <li><a href="#plans">Plans & Vision</a></li>
                                    <li><a href="#team">Team</a></li>
                                    <li><a href="#" class="contact-btn" data-toggle="modal" data-target="#GetInTouch">Contact Us</a></li>
                                </ul>
                            </nav>
                            <div class="hamburger-menu d-lg-none">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Banner Section Start -->
        <section id="thank-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="banner-content">
                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                            <h1>THANK YOU !</h1>
                            <p class="sub">Your request has been submitted successfully.<br> One of our experts will get in touch with you shortly.</p>
                            <a href="index.html">Back To Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section End -->

        <footer class="footer-section">
            <div class="container">
                <div class="row menu-row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                            <a class="d-block" href="index.html">
                                <img src="images/footer-logo.png">
                            </a>
                        </div>
                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex justify-content-lg-end align-content-center">
                                <li><a href="#signup">Sign Up</a></li>
                                <li><a href="#solution">Solution</a></li>
                                <li><a href="#amos">Amos</a></li>
                                <li><a href="#market">Market</a></li>
                                <li><a href="#technology">Technology</a></li>
                                <li><a href="#plans">Plans & Vision</a></li>
                                <li><a href="#team">Team</a></li>
                                <li><a href="#" class="contact-btn" data-toggle="modal" data-target="#GetInTouch">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="row copyright-row">
                    <div class="col-12">
                        <p>Copyright © Amos 2021 . All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>