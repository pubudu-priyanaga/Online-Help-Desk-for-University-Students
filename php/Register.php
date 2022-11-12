<?php
	
	$userType=$_POST['userType'];
	$fullName=$_POST['fullName'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$NIC=$_POST['NIC'];
	$uPhone=$_POST['uPhone'];
	$uEmail=$_POST['uEmail'];
	$uAddress=$_POST['uAddress'];
	$uGender=$_POST['uGender'];
	$uAge=$_POST['uAge'];
	$uCampus=$_POST['uCampus'];
	$uDepartment=$_POST['uDepartment'];
	$uYear=$_POST['uYear'];
	

if(!empty($userType)||!empty($fullName)||!empty($username)||!empty($password)||!empty($NIC)||!empty($uPhone)||!empty($uEmail)||!empty($uAddress)||!empty($uGender)||!empty($uAge)||!empty($uCampus)||!empty($uYear)){
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="register";
	
	$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
	if(mysqli_connect_error()){
		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	}else{
		$SELECT="SELECT email From db_profile Where email=? limit 1";
		$sql="INSERT Into db_profile(phone,fullname,nic,email,address,gender,age) values($userType,'$fullName','$username','$password','$NIC','$uPhone',$uEmail,$uAddress,$uGender,$uAge,$uDepartment,$uYear)";
		
		if (mysqli_query($conn,$sql) ) {
		echo "New record created successfully";
		} 
		else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}


}}
$conn->close();
?>