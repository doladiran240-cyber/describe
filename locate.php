<?php
const HOST="localhost";
const USERNAME="root";
const PASSWORD="";
const DBNAME="people";
$conn=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
if ($conn) {
    echo "Connected Successfully";
}
else{
    echo "Not Successful";
}
?>