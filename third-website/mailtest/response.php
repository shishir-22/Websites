<html>
<head>
	<title>
		Succesfull!!
	</title>
</head>
<body>
	<?php
	$name=$_POST["name"];
	$email=$_POST["email"];
	$sapid=$_POST["sapid"];
    $branch=$_POST["branch"];
    $commitee=$_POST["commitee"];

    $data=$name.",".$sapid.",".$branch.",".$commitee.",".$email;
    file_put_contents("information.csv",$data.PHP_EOL,FILE_APPEND);

    $message="Hello $name we have recieved your application.
     Please recheck your details!
     Name:$name
     Sap-id:$sapid
     Branch:$branch
     Commitee:$commitee";
	$subject="Registration succesfull!";
	$headers = "From: shishirgoyal.work@gmail.com";
	mail($email,$subject,$message,$headers);
	echo "<h1>Registration Succesfull</h1>";
	echo "Hello $name. Registration succesfull. A mail has sent succesfully to you. Cheers!!";
    ?>
</body>
</html>


