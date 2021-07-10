<?php
session_start();
if (isset($_SESSION['id'])) $current_user_ID = $_SESSION['id']; 
?>
<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->SMTPDebug = 4;  

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'nmohamed1472000@gmail.com';                 // SMTP username
$mail->Password = '01004676093';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('nmohamed1472000@gmail.com','Egypt Air');

$_link=mysqli_connect("localhost","root","")or die(mysqli_error($_link));
mysqli_select_db($_link,"project2")or die(mysqli_error($_link));
$sql="select email from signin where signin.id='$current_user_ID'";
$result=$_link->query($sql);
f=$result;

$mail->addAddress($result); 
$mail->addReplyTo('nmohamed1472000@gmail.com');              // Name is optional
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'verify Booking';
$mail->Body    = 'your booking has been accepted';
$mail->send();
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo "mail sent";
}
?>
