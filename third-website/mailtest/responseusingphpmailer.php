<html>
<head><title>Successful!!</title></head>
<body>
	<h1>Registration confirmation!</h1>
	<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once 'phpmailer/vendor/autoload.php';





    $name=$_POST["name"];
    $sapid=$_POST["sapid"];
    $branch=$_POST["branch"];
    $commitee=$_POST["commitee"];
	$email=$_POST["email"];
	$subject="Registration succesfull!";


      $data=$name.",".$sapid.",".$branch.",".$commitee.",".$email;
    file_put_contents("information.csv",$data.PHP_EOL,FILE_APPEND);


    // ini_set('SMTP','myserver');
    // ini_set('smtp_port',587);


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output(display errors and messages)
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'shishirgoyal.work@gmail.com';                 // SMTP username
    $mail->Password = 'shishir@10';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('shishirgoyal.work@gmail.com', 'Shishir Goyal');
    $mail->addAddress("$email", "$name");     // Add a recipient
    $mail->addAddress("$email");               // Name is optional

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject =  "$subject";
    $mail->Body    = "Hello $name. We have received you details.<br>Please recheck them:<br>Name=$name<br>Sap Id:$sapid<br>Branch:$branch<br>
    Commitee:$commitee<br>";

    $mail->send();
    if($mail->send())
   {
echo "<p>Thank you for Registration. We have received your application and confirmation mail has send successfully!</p>";
   }
   ?>


	
	</body>
</html>