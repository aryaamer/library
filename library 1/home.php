<?php 
include'include/config.php';
include'nav.php';
?>
<meta name="viewport" content="width=device-width, initial-scale=a1">

<link rel="stylesheet" href="css/style.homes.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<h2><a href="home.php"><button>گەڕانەوە بۆ پەڕەی سەرەکی</button></a></h2>
<div class="image-container">
  <img src="pic/ba.jpeg" alt="My Image">
  <h2 class="image-text">گەورەترین وێبسایت بۆ خوێندنەوەی کتێب</h2>
</div>

<style>
  .image-container {
    position: relative;
  }

  .image-text {
    font-size: 50px;
    font-weight: bold;
    position: absolute;
    top: 65%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: black;
    opacity: 0.7;
  }
</style>
<h1>ناوی نوسەرەکان</h1>
<div class = 'nwsar'>
  <a href="mala mhamad.php"><div class ='item'><button><img src="pic/mala mhamad.jfif" width='25px' class='nw'><br> مامۆستا محەمەد فایەق شارەزووری</button></div></a>
  <a href=""><div class ='item'><button><img src="pic/mala mhamad.jfif" width='25px' class='nw'><br> مامۆستا محەمەد فایەق شارەزووری</button></div></a>
  <a href=""><div class ='item'><button><img src="pic/mala mhamad.jfif" width='25px' class='nw'><br> مامۆستا محەمەد فایەق شارەزووری</button></div></a>
  <a href=""><div class ='item'><button><img src="pic/mala mhamad.jfif" width='25px' class='nw'><br> مامۆستا محەمەد فایەق شارەزووری</button></div></a>
    
</div>

<div>

<?php 

$category = ['خوێندن','ئاینی','وەرزشی','زانستی','مێژویی','زمانەوانی','پەروەردەیی','پزیشکی','کۆمەڵناسی','دەرونزانی','ڕۆمان','چیرۆک','فەلسەفە','ئابوری','یاسا','گەشەپێدانی مرۆیی',];
$img = ['pic/study.png','pic/religion.png','pic/sports.png','pic/since.png','pic/history.png','pic/lan.png','pic/book.png','pic/me.png','pic/ko.png','pic/da.png','pic/ro.png','pic/ch.png','pic/ph.png','pic/ec.png','pic/law.png','pic/ga.png'];
$loc = ['xwendn up.php','ain up.php'];
for ($i=0; $i<16 ; $i++) { ?>
    <body>
    <div class = 'cat'>

    <div class = 'cat'>
    <a href="<?php echo $loc[$i];?>"><button><img class ='im' src="<?php echo $img[$i];?>"><br><?php echo $category[$i]?></button></a>
       </div>
         
    </div>
</body>
<?php } ?>
</body>
</div>