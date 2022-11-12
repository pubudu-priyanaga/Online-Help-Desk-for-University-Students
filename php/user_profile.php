<?php
session_start();
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "web_db";

$conn=mysqli_connect($servername,$user,$pass)or die("Unable to connect to MySQL");
mysqli_select_db($conn,$dbname)or die("Could not select db");


$ID=$_SESSION["id"];
$query=mysqli_query($conn,"SELECT * FROM db_profile WHERE UID = '$ID'")or die(mysqli_error());
$row=mysqli_fetch_array($query);

  ?>
<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" href="../css/style.css">
</head>    
<body> 
	<header>
	<img class="logo" src = "../images/logo.png" align = "left" width = "150px" height="150px" alt= "helpdesk image">
	<img class="userlogo" src= "../images/user.png" align="right" width = "90px" height="90px" alt= "user image">
	
	<br/><center><h1>ACADEMIC HELP DESK</h1></center>

	<br/><br/>
	<ul class="menu">
			<li class="menu"> <a href="#"> Home </a></li>
			<li class="menu"> <a href="news.html"> News </a></li>
			<li class="menu"> <a href="CAMPUS.html"> Campus Life </a></li>
			<li class="menu"> <a href="student_message.html"> Student Messages </a></li>
			<li class="menu"> <a href="Register.html"> Registration </a></li>
			<li class="menu"> <a href="Contact.html"> Contact Us </a></li>
			<li class="menu"> <a href="about us.html"> About Us </a></li>
			<input type="text" placeholder="Search..">
		</ul> 
		
	

<div class="dropdown">	
	<button><i class="arrow down" id="drop"></i></button>
	<ul>
		<li><a href="#">User Profile</a></li>
		<li><a href="#">Login</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	</div>
	<div class="back"><br/><br/></div>
</header>
<h1>User Profile</h1>
<div class="profile-input-field">
        <h3>Please Fill-out All Fields</h3>
        <form method="post" action="#" >
        
          <h4>System Needs</h4>
          <div class="form-group">
            <label>User Name</label>
            <input type="text" class="form-control" name="username" style="width:20em;" placeholder="Enter your User Name" required value="<?php echo $row['username']; ?>" />
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" style="width:20em;" placeholder="Enter your Password" required value="<?php echo $row['password']; ?>" />
          </div>

          <h4>Personal Details </h4>
          <div class="form-group">
            <label>Fullname</label>
            <input type="text" class="form-control" name="fullName" style="width:20em;" placeholder="Enter your Fullname" value="<?php echo $row['fullName']; ?>" required />
          </div
          <div class="form-group">
            <label>User Type</label>
            <input type="text" class="form-control" name="userType" style="width:20em;"  placeholder="Student/Lecture" value="<?php echo $row['userType']; ?>"  />
          </div>
          <div class="form-group">
            <label>NIC</label>
            <input type="text" class="form-control" name="NIC" style="width:20em;" placeholder="Enter your NIC" required value="<?php echo $row['NIC']; ?>" />
          </div>
          <div class="form-group">
            <label>Phone No</label>
            <input type="text" class="form-control" name="uPhone" style="width:20em;" placeholder="Enter your Phone Number" required value="<?php echo $row['uPhone']; ?>" />
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="uEmail" style="width:20em;" placeholder="Enter your Email" required value="<?php echo $row['uEmail']; ?>" />
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="uAddress" style="width:20em;" required placeholder="Enter your Address" value="<?php echo $row['uAddress']; ?>"></textarea>
          </div>
          <div class="form-group">
            <label>Gender</label>
            <input type="text" class="form-control" name="uGender" style="width:20em;" placeholder="Enter your Gender" required value="<?php echo $row['uGender']; ?>" />
          </div>
          <div class="form-group">
            <label>Age</label>
            <input type="number" class="form-control" name="uAge" style="width:20em;" placeholder="Enter your Age" value="<?php echo $row['uAge']; ?>">
          </div>

          <h4>Department Details</h4>
          <div class="form-group">
            <label>Campus</label>
            <input type="text" class="form-control" name="uCampus" style="width:20em;" placeholder="Enter your Campus" required value="<?php echo $row['uCampus']; ?>" />
          </div>
          <div class="form-group">
            <label>Department</label>
            <input type="text" class="form-control" name="uDepartment" style="width:20em;" placeholder="Enter your Department" required value="<?php echo $row['uDepartment']; ?>" />
          </div>
          <div class="form-group">
            <label>Year</label>
            <input type="number" class="form-control" name="uYear" style="width:20em;" placeholder="Enter your Year" value="<?php echo $row['uYear']; ?>">
          </div>

          <div class="form-group">
            <input type="submit" name="update" value="Update Details" class="btn btn-primary" style="width:20em; margin:0;"><br><br>
            <center>
           </center>
          </div>
        </form>
      </div>


<footer>


<div class="content">

    
    <h1><center>ACADEMIC HELP DESK</center></h1><br>
    <table style="width:90% ;" > 
        <tr > 
            <th >
    <h4 style="color:#AD03FC ;"> <u> Contact Us </u></h4>
    <p> 542/4 Kaduwela Road</p>
    <p>Malabe.</p>

    <p>+118776546</p>
    <p>sliit@my.sliit.lk</p>
   </th>



   <th>    
    <h4 style="color:#AD03FC ;"> <u> Quick Links </u></h4>
 <div class="links">
 <p> <a href="feedbacks.html"> Feedbacks </a></p>
 <p><a href="about us.html"> About us </a></p>

 <p><a href="Register.html"> Register </a></p>
 <p><a href="lecture_catalouge.html"> Lecturer Catalouge </a></p>
 </div>
</th>

<th>    
    <h4 style="color:#AD03FC ;"> <u> About Us </u> </h4>
    
    <p> We are here to  </p>
    <p>help USERS</p>
    <p>24/7 Available</p>
    
    <p>Thanks for joining</p>
    <p> <i>Academic Help Desk</i></p>
   </th>





 </tr>



 <br><br>



</table> 
<br><br><br>

       

    <ul class="pics">
<center> 
        <a>
         <a href="https://www.facebook.com/"> <img width="30" height="30" src="..\images\1.png" alt="facebook">&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;</a>
        
        
           <a href="https://twitter.com/"> <img width="30" height="30" src="..\images\Twitter-Logo1.png" alt="twitter">&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp; </a>
        
        
           <a href="https://www.whatsapp.com/">  <img width="30" height="30" src="..\images\whatsapp31.jpg" alt="whatsapp">&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp; </a>
        
        
           <a href="https://www.youtube.com/"> <img width="30" height="30" src="..\images\youtube6.png" alt="youtube"></a>
        </li>
    
    </center>
    </ul>


     
</div>

<div class="bottomOfFooter">
<p>Copyright &copy;2022 ACADEMIC Help Desk. All rights reserved. Designed by <span>ACADEMIC HELP DESK TEAM</span> </p>

</div>

</footer>
</body>    
</html>     

<?php

      if(isset($_POST['update'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fullname = $_POST['fullname'];
        $userType = $_POST['userType'];
        $NIC = $_POST['NIC'];
        $uPhone = $_POST['uPhone'];
        $uEmail = $_POST['uEmail'];
        $uAddress = $_POST['uAddress'];
        $uGender = $_POST['uGender'];
        $uAge = $_POST['uAge'];
        $uCampus = $_POST['uCampus'];
        $uDepartment = $_POST['uDepartment'];
        $uYear = $_POST['uYear'];
 
      $query = "UPDATE db_profile SET username = '$username',
                                      password = '$password', 
                                      fullname = '$fullname',
                                      uType = '$uType',
                                      NIC = '$NIC', 
                                      uPhone = '$uPhone',
                                      uEmail = '$uEmail', 
                                      uAddress = '$uAddress', 
                                      uGender = '$uGender', 
                                      uAge = $uAge, 
                                      uCampus = '$uCampus'
                                      uDepartment = '$uDepartment', 
                                      uYear = $uYear, 
                                     
                      WHERE UID = '$ID'";
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    ?>
                     <script type="text/javascript">
            alert("Update Successfull.");
            window.location = "../";
        </script>
        <?php
             }              
?>