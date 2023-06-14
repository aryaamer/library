<?php
$db = mysqli_connect('localhost','root','','library');
 $name = $_POST['name'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $city = $_POST['city'];
 
 $sql = ("SELECT * FROM `tomar` WHERE `username` = '".$username."' AND `password` = '".$password."'");


$result = mysqli_query($db , $sql);
$count = mysqli_num_rows($result);
if($count == 1){
   echo json_encode("succes");
} 
else{
   echo json_encode("Error");
}

?>