<?php
 
 $db = mysqli_connect('localhost','root','','library');

 $name = $_POST['name'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $city = $_POST['city'];
 
 $sql = ("SELECT * FROM `tomar` WHERE `username` = '".$username."' AND `password` = '".$password."'");

 $result = mysqli_query($db , $sql);
 $count = mysqli_num_rows($result);

 if (($count == 1 ) || empty($password) || empty($username)) {
    echo json_encode('error');
 }
 else{
    $insert = ("INSERT INTO `tomar`  (`name`,`username`,`password`,`city`) VALUES ('".$name."' , '".$username."' , '".$password."', '".$city."')");
    $query = mysqli_query($db ,$insert);
    if ($query) {
        echo json_encode('succes');
    }
 }


?>