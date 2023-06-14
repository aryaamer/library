<?php include'include/config.php';?>
<link rel="stylesheet" href="css/style up .css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<title>دانانی فایل</title>

<header>
    <h1>
    خوێندن
    </h1>
</header>

<?php 
    if (isset($_POST['submit'])) {
    $name =  clear($_POST['name']);
    $category = clear($_POST['category']);
    $nwsar = clear($_POST['nwsar']);
    

    $file = $_FILES['file'];
  $fileName = $file['name'];
  $fileType = $file['type'];
  $fileTmpName = $file['tmp_name'];
  $fileError = $file['error'];
  $fileSize = $file['size'];
  
  //pdf file
  $file_name = $_FILES['pdf_file']['name'];
  $file_temp = $_FILES['pdf_file']['tmp_name'];
  $file_size = $_FILES['pdf_file']['size'];
  $file_type = $_FILES['pdf_file']['type'];


  $fileExt = explode('.',$fileName);
  $fileActualExt = strtolower(end($fileExt));
  $fileAllowed = array('png' , 'jpg' , 'jpeg' , 'svg' , 'pdf');

  // pdf file
  $fileExt1 = explode('.',$file_name);
  $fileActualExt1 = strtolower(end($fileExt1));
  $fileAllowed1 = array('pdf');
  if (in_array($fileActualExt , $fileAllowed) && in_array($fileActualExt1 , $fileAllowed1)) {
    if($fileError === 0){
      
    $fileNewName = rand().".".$fileActualExt;
    $fileDestinition = "upload/$fileNewName";
    move_uploaded_file($fileTmpName , $fileDestinition);

    // pdf file
    $fileNewName1 = rand().".".$fileActualExt1;
    $fileDestinition1 = "upload/$fileNewName1";
    move_uploaded_file($file_temp , $fileDestinition1);
    $query = mysqli_query($db , "INSERT INTO `book` (`name`,`category`,`file`,`nwsar`,`cover`) VALUES ('$name','$category','$fileNewName1','$nwsar','$fileNewName');");
    if($query) {
      header("Location:upload.php");
    }

  }
}}


?>

<body>
    <div>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name='file'><h2>رەسمی بەرگ</h2><br>
        <input type="file" name="pdf_file">
        <select name="category" class ='input'>
            <option>خوێندن</option>
            <option>ئاینی</option>
            <option>وەرزشی</option>
            <option>زانستی</option>
            <option>مێژویی</option>
            <option>زمانەوانی</option>
            <option>مرۆیی</option>
            <option>گەشەپێدانی</option>
            <option>پزیشکی</option>
            <option>کۆمەڵناسی</option>
            <option>دەرونزانی</option>
            <option>ڕۆمان</option>
            <option>چیرۆک</option>
            <option>فەلسەفە</option>
            <option>ئابوری</option>
            <option>یاسا</option>
            <option>پەروەردەیی</option>
        </select>
        <select name="nwsar" class ='input'>
            <option>مەلا محەمەد فایەق</option>
        </select>
        <input type="text" name='name' placeholder = 'ناوی کتێب'><br>
    <button name = 'submit'>زیادکردن</button>
        </form>
    </div>

    <div class = 'body'>
      
        <?php 
        
        $query = mysqli_query($db , "SELECT * FROM `book` ORDER BY `id` DESC");
        while($row = mysqli_fetch_assoc($query)) {
          
        if(isset($_GET['delete'])){
        $id = htmlspecialchars($_GET['delete']);
        $query = mysqli_query($db , "DELETE FROM `book` WHERE `id` = '$id'");
         if($query) {
        header("Location:upload.php");
        }}?>
      <div class="card__collection clear-fix">

<a href="upload/<?php echo $row['file'];?>"><div class="cards cards--two profile-card">
  <h1 class="username">
  </svg><?php echo $row['name'];?></h1>
  <img
    src="upload/<?php echo $row['cover'];?>"
    class="img-responsive">
  <span class="cards--two__rect"></span>
  <span class="cards--two__tri"><?php echo $row['category'];?></span>
  <p class="specialist"><?php echo $row['nwsar'];?></p>
  <ul class="cards__list">
  <a href="upload.php?delete=<?php echo $row['id'];?>"> <button name = 'delete' ">Delete</button></a>
  </ul>
</div>

</div>
</a>
        <?php }?>
       </div>
         
    </body>