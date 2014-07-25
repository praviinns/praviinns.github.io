<html>
<head>
<title>Message Status</title>
 <style type='text/css'>
.my_class {
background-color: rgb(194, 243, 194);
width: 500px;
height: 43px;
margin: 20px;
border-radius: 5px;
padding: 25px;
padding-top: 5px;
padding-left: 67px;
border: 1px solid rgb(107, 216, 107);
color: rgb(5, 136, 5);
font-size: 21px;
letter-spacing: 1px;
background-image: url(http://icons.iconarchive.com/icons/tatice/cristal-intense/128/ok-icon.png);
background-repeat: no-repeat;
background-position: 10px center;
background-size: 41px;
}
.my_classtext {
color: rgb(83, 83, 83);
font-size: 15px;
margin-top: 5px;
}
.backto {
    width: 201px;
    height: 35px;
    border: 1px solid #ccc;
    border-bottom-right-radius: 10px;
    border-top-right-radius: 10px;
    padding-top: 15px;
    text-align: right;
    padding-right: 16px;
    background-image: url(http://www.seminartopic.in/images/download%20%282%29.png);
    background-repeat: no-repeat;
    background-position: left center;
    text-transform: uppercase;
    color: rgb(150, 150, 150);
    background-color: rgb(248, 248, 248);
    transition: .5s;
   
}
.backto:hover {
    background-position: -10px center;
    transition: .5s;
    color: rgb(68, 4, 4);
}
a:-webkit-any-link {
 text-decoration: none;
}
</style>
</head>
<body>

<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sofcongroup11@gmail.com';                 // SMTP username
$mail->Password = 'sofcon123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'sofcongroup11@gmail.com';
$mail->FromName = 'SEO KITES message';
$mail->addAddress('praviinns@gmail.com', 'pravin');     // Add a recipient

$mail->addReplyTo('sofcongroup11@gmail.com', 'Information');



$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'A Message from SEO Kites';
$mail->Body    ="<table><tr><td>Name:</td><td>" .$_POST['cname']."</td></tr><tr><td>Email:</td><td>".$_POST['email']."</td></tr><tr><td>Message:</td><td>".$_POST['message']."</td></tr> </table>";

$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '<center><div class="my_class"> Message has been sent <br/> <div class="my_classtext"> We love to hear from you, admin will reply you shortly, Thank you. </div> </div><br/><a href="http://www.seminartopic.in/lab/lab"><div class="backto">Back to website </div></a></cnter>';
}
?>
</body>
</html>
