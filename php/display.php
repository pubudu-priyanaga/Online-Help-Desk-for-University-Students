<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>crud operation</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

</head>
<body>

	<div class="container">
		<button class="btn btn-primary my-5"><a href="lecturer.php" class="text-light">Add User</a>
		</button>
		
	</div>

</body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">L Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Faculty</th>
    </tr>
  </thead>

  <tbody>

<?php
	$sql="Select * from 'crud'";
	$result=mysqli_query($con,$sql);

	if($result){
		while($row=mysqli_fetch_assoc($result));{
			$id=$row['id'];
			$name=$row['name'];
			$email=$row['email'];
			$faculty=$row['faculty'];
			echo '<tr>
      <th scope="row">.$id.'</th>
      <td>$id</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>

		}
	}

?>

    <!--
    <tr>
      <th scope="row">1</th>
      <td>LID0001</td>
	<td>Fernando A.A.</td>
	<td>fdo123@gmail.com</td>
	<td>Faculty of Art</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>LID0002</td>
	<td>Daya A.C.</td>
	<td>daya123@gmail.com</td>
	<td>Faculty of Art</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>LID0003</td>
	<td>Prince B.A.</td>
	<td>prince123@gmail.com</td>
	<td>Faculty of Humans Science</td>
    </tr>
-->
  </tbody>
</table>

</html>