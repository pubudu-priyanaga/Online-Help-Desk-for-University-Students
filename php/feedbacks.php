<?php


$con = mysqli_connect ("127.0.0.1" , "root" , "");



if (!$con)
{
    die ('could not connect: ' . mysqli_error($con));
}

mysqli_select_db ("test",$con);
$sql= "INSERT INTO feedback VALUES ('$_POST[name]','$_POST[id]',$_POST[email],'$_POST[feedback]') ";

$res = mysqli_query($con,$sql) or die (mysqli_error($con));

echo "Feedback is stored in the table successfully";
mysqli_close ($con);



?>