<?php include'include/config.php';?>
<link rel="stylesheet" href="css/style up .css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<title>ئاینی</title>
<meta name="viewport" content="width=device-width, initial-scale=a1">


<header>
    <h1>
    ئاینی
    </h1>
</header>

<body><br>
<h2><a href="home.php"><button>گەڕانەوە بۆ پەڕەی سەرەکی</button></a></h2>
      
        <?php 
        
        $query = mysqli_query($db , "SELECT * FROM `book` WHERE `category` = 'ئاینی' ORDER BY `id` DESC");
        while($row = mysqli_fetch_assoc($query)) {?>
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
  </ul>
</div>

</div>
</a>
        <?php }?>
       </div>
         
    </body>