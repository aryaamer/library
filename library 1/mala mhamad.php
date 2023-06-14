<?php include'include/config.php';?>
<link rel="stylesheet" href="css/style up .css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<title>مەلا محەمەد مەلا فایەق شارەزووری</title>

<header>
    <h1>
    مەلا محەمەد مەلا فایەق شارەزووری
    </h1>
</header>

<body><br>
<h2><a href="home.php"><button>گەڕانەوە بۆ پەڕەی سەرەکی</button></a></h2>
<br>

   <div class ='info'>
      <img src="pic/mala mhamad.jfif" width='350px' style='border-radius: 20px;'>
      <div><p>مەلا محەممەد مەلا فایەق شارەزووری (ناوی تەواو: محەممەد فایەق سەعید) (لەدایکبووی ١٩٧١ لە سلێمانی) مەلا و نووسەرێکی ئیسلامیی کوردە. بڕوانامەی بەکالۆریۆسی لە زانستە ئیسلامییەکاندا لە بەغدا بەدەست ھێناوە، و ئێستا لە یەکێک لە قوتابخانەکان مامۆستای زمانی عەرەبیە، وانەی زمانی عەرەبی و پەروەردی ئیسلامی گوتووەتەوە و‌ خەریکی گوتنەوەی وانەی ئایینیش بووە. لە ٢٠١٣وە تا ئێستا وتاربێژی مزگەوتی حاجی عەباسی باراوییە لە گەڕەکی قڕگە لە سلێمانی.</p>
</div>
   </div>
<br>
<h1>کتێبەکانی</h1>

        <?php 
        
        $query = mysqli_query($db , "SELECT * FROM `book` WHERE `nwsar` = 'مەلا محەمەد فایەق'");
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