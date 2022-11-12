<?php 
session_start();
$host="localhost";
$user="root";
$password="";
$db="web_db";

$conn=mysqli_connect($host,$user,$password)or die("Unable to connect to MySQL");
mysqli_select_db($conn,$db)or die("Could not select db");  

if(isset($_POST['user'])){
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $query=mysqli_query($conn,"SELECT * FROM db_profile WHERE username = '$user' AND password = '$pass'");
  $num_rows=mysqli_num_rows($query);
  $row=mysqli_fetch_array($query);
  $_SESSION["id"]=$row['UID'];
if ($num_rows>0)
{
    ?>
    <script>
      alert('Successfully Log In');
      document.location='user_profile.php'
    </script>
    <?php
}
else{
	?>
    <script>
      alert('Re-Enter Username and Password');
      document.location='../html/login.html'
    </script>
    <?php
}
}
      
?>