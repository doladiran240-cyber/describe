<?php
include "config.php";
?>                                                          
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="Bootstrap/bootstrap-5.1.3-dist/bootstrap-5.1.3-dist/css/bootstrap.css">
</head>
<body style="background:lightgrey">
   <form style="width:640px;background-color:white" class="shadow px-3" method="post" >
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="name">
    <div id="emailHelp" class="form-text" >We'll never share your email with anyone else.</div>
  </div>
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
    <input type="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone_number">
    <div id="emailHelp" class="form-text">We'll never share your phone no with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="Password">
</div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="register">Submit</button>
 
</form> 
</body>
<?php
if (isset($_POST["register"])) {
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone_number"];
$password=$_POST["Password"];

// echo "Name:$name.<br>";
// echo "Email:$email.<br>";
// echo "Phone No:$phone.<br>"
// ;
// echo "Password:$password";
$sql="INSERT INTO `users`(`name`, `email`, `phone_number`, `password`) VALUES('$name','$email','$phone','$password')";
$run=mysqli_query($conn,$sql);
if($run){
  echo "<script>alert(Record Stored Succesfully)</script>";
}
else{
    echo "<script>alert(Record Not Stored Succesfully)</script>";
}
}

 ?>
</html>

