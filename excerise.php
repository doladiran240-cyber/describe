<?php
include "locate.php";
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
<style>
    body{
        background:lightgrey;
    }
    form{
       width:640px;
background-color:white;
    }
    </style>
<body>
    <form class="shadow px-5" method="post">
        <h2>Students Registration Form</h2>
        <label for="">FirstName</label>
        <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" ><br>
          <label for="">Age</label>
        <input type="text" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" ><br>
         <label for="">Class</label>
        <input type="text" name="class" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" ><br>
         <label for="">Phone Number</label>
        <input type="tel" name="phone_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" ><br><br>
        <button type="submit" name="register">Submit</button>
</form>
</body>
<?php
if(isset($_POST["register"])){
    $name=$_POST["firstname"];
    $age=$_POST["age"];
    $class=$_POST["class"];
    $phone=$_POST["phone_number"];
    $sql="INSERT INTO `students`(`firstname`,`age`,`class`,`phone_number`) VALUES('$name','$age','$class','$phone')";
    $check=mysqli_query($conn, $sql);
    if($check){
        echo "<script>alert(Record Stored Successfully)</script>";
    }
    else{
        echo"<script>alert(Record Not Successfully)</script>";
    }
}
?>