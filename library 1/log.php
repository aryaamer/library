<?php include'include/config.php';?>


<?php

if(isset($_POST['submit'])){
  $pass = ($_POST['pass']);

  $query = mysqli_query($db , "SELECT * FROM `log` WHERE `pass` = '$pass'");
    if (mysqli_num_rows($query) === 1){
      while($row = mysqli_fetch_assoc($query)){
      }
      header("Location:choose.php");

    }
}

?>
<link rel="stylesheet" href="css/style up.css">

<body>
  <div>
    <form action="" method="POST">
    <input type="text" name ='pass' ><br><br>
<button name='submit' class="bt">چونە ژورەوە</button>
    </form>
  </div>
</body>
