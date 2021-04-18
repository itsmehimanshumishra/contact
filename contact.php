<?php
//variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['E-mail'];
$message = $_REQUEST['Message'];

//cheak input fields
if(empty($name)|| empty($email) || empty($message))
{
	echo"Please fill all the filds";
}
else{
	mail("iamgithubuserhimanshu@gmail.com", "Trail Message Box", $message , "From: $name < $email>");
	echo"<script type='text/javascript'>alert('Your message was sent sucessfully');
     window.history.log(-1);
	</script>";
}

?>