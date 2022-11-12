<?php 

try{
	$con=new mysqli("localhost","root","","college");
}catch(Exception $exc){
	echo $exc->getTraceAsSting();
}
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST[email])){
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$em=$_POST['email'];

	$is_insert = $con->query("INSERT INTO `scoler`(`Firstname`, `Lastname`, `Email_Address`) VALUES ('$fname','$lname','$em')");

	if($is_insert == TRUE){
		echo "<h2>Successfully</h2>";
		exit();
	}

}

?>
