<?php
const HOST ="localhost";
const USERNAME ="root";
const PASSWORD ="";
const DBNAME ="school";
$conn=mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
if ($conn) {
echo "Connected Successfully";
}
else{
    echo "Failed";
}