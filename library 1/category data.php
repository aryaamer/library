<?php include'include/config.php';

$json = [];

$query = mysqli_query($db , "SELECT * FROM `category`");
while($row = mysqli_fetch_assoc($query)) {
    $json [] = $row;
}
echo json_encode($json);
?>