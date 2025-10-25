<?php
include "config.php";
session_start();
?>
<form method="post">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="Password">
</div>
 <button type="submit"  name="register">Submit</button>
</form>
<?php
if(isset($_POST['register'])){
    $email=$_POST["email"];
        $password=$_POST["Password"];
        $sql="SELECT * FROM `users` WHERE email='$email' AND Password='$password'";
        $result=mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
          $user=mysqli_fetch_assoc($result);
          $_SESSION["userid"]=$user["id"];
          echo '<script>location.href="go.php";</script>';
        }
        else{
            echo "failed";
        }
}
