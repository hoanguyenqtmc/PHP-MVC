

 <?php 


// Khai báo thư viên phpmailer
include  "PHPMailer-master/src/PHPMailer.php";
include  "PHPMailer-master/src/Exception.php";
include  "PHPMailer-master/src/OAuth.php";
include  "PHPMailer-master/src/POP3.php";
include  "PHPMailer-master/src/SMTP.php";

 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

		

$mail = new PHPMailer(true);  
		if (isset($_POST["submit"])) {
		extract($_REQUEST);                            // Passing `true` enables exceptions
try {

    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com;smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'dattdpd02368@fpt.edu.vn';                 // SMTP username
    $mail->Password = 'dat15031503';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;      	                              // TCP port to connect to
 
    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress($email, 'Dat Tran');     // Add a recipient
    //$mail->addAddress('trandinhdat9b@gmail.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('trandinhdatb4@gmail.com');
   //$mail->addBCC('trandinhdatb4@gmail.com');
 
    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
 
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
    $mail->send();

    echo "<script>alert('Gửi thành công !')</script>";
    echo "<script>window.location.href:'message.php'</script>";
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}}
  ?>