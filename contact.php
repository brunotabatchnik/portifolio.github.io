<?php

$name = $_POST['name'];
$email = $_POST ['email'];
$tel = $_POST['tel'];
$message =$_POST['message'];


$headers = "from: ". $name;

$corpemail = 'Contat

			name: '     .$name.'
			email: '    .$email.'
			tel: '	   .$tel.'
			message:' .$message.' ';


if(mail("btabatchnik@gmail.com","contact",$corpemail,$headers)){

	echo " <script>alert{'your message send with sucess!'};</script>";
	header("location : index.html");

}else{

	echo "<script>alert{'your message not send!'};</script>";
}
			

?>
