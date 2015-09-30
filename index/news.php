<?php
$q_news_utama = mysql_query("select * from news where news_type = '1' order by news_id desc");
while($r_news_utama = mysql_fetch_array($q_news_utama)){
?>
<div class="title"><a href="index.php?page=news_detail&news_id=<?= $r_news_utama['news_id']?>"><?= $r_news_utama['news_name'] ?></a></div>
<div class="block_post">
              <div class="meta_info">
                <div class="data"><?= format_date($r_news_utama['news_date']) ?></div>
               
              </div>
              <img src="assets/images/news/<?= $r_news_utama['news_img'] ?>" alt="#" style="width:30%; margin-right:20px;">
             
              <?php
              $desc = explode(" ", $r_news_utama['news_desc']);
              for($i=0;$i<=40;$i++){
                echo $desc[$i]." ";
              }

               ?>
              <div style="clear:both"></div>
              <a class="but but_gray readmore" href="index.php?page=news_detail&news_id=<?= $r_news_utama['news_id']?>">Read More</a>
            </div>
<?php
}
?>