<?php
include "config.php";
session_start();
if (!isset($_SESSION["userid"])) {
    echo "<script>location.href='login.php'</script>";
}
else{
    $userid=$_SESSION["userid"];
}
$fetchSQL="SELECT * from `users`";
$result=mysqli_query($conn,$fetchSQL);
$userData=mysqli_fetch_all($result, MYSQLI_ASSOC);
echo "<pre>";
print_r($userData);
echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <div class="form">
    <form action="" method="post">
        <label for="">Add Task:</label><br>
        <input type="text" placeholder="Enter your task" name="task">
        <button type="submit" placeholder="Submit" name="add_task">Submit</button>
    </form>
</div>
    <div class="container">
        <div class="row">
            <h1>USER ID:<?=$userid?></h1>
            
            <div col-md-5></div>
            <?php
                 
            // foreach ($userData as $data) {
            //    echo $data["name"]."<br>";
            // }
            if (isset($_POST["add_task"])) {
                $task = $_POST["task"];
                $insertSQL = "INSERT INTO `tasks`(`userid`,`task`) VALUES('$userid','$task')";
                $runQuery = mysqli_query($conn,$insertSQL);
                if ($runQuery) {
                   echo "<script>alert('Task added Successfully')</script>";
                }
                else{
                    echo "<script>alert('Task not added Successfully')</script>"    ;
                }
            }
            ?>
</body>
</html>