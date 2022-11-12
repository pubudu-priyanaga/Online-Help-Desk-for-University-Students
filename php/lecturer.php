

<?php
  $server_name= "localhost";
  $user_name= "root";
  $password="";
  $database="demo";

$con= new mysqli($server_name,$user_name,$password,$database);

if (!$con) {
  
  die(mysqli_error($con));
}


include 'connect.php';

  if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $faculty = $_POST['faculty'];

        $sql="insert into 'crud' (id,name,email,faculty) values ('$id','$name','$email','$faculty')";
        $result=mysqli_query($con,$sql);

        if($result){
            echo "Successful data insert";
        }
        else{
            die(mysqli_error($con));
        }

}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

    <title>crud operation</title>
  </head>

  <body>
    <div class="container my-5">
      <form method="post">
  <div class="form-group">
    <label>Lecturer ID</label>
    <input type="text" class="form-control" placeholder="Enter your registration number" name="id" autocomplete="off">
  </div> 

  <div class="form-group">
    <label>Lecturer Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
  </div> 

  <div class="form-group">
    <label>E-mail</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
  </div> 

  <div class="form-group">
    <label>Faculty Name</label>
    <input type="text" class="form-control" placeholder="Enter your faculty" name="faculty" autocomplete="off">
  </div> 


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

        </body>
</html>
