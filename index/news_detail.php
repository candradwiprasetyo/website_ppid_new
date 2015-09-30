<?php
$q_home = mysql_query("select * from news where news_id = '".$_GET['news_id']."'");
$r_home = mysql_fetch_array($q_home);
?>
<div class="main_head" style="margin-top:0px;">
            <div class="title"><?= $r_home['news_name'] ?></div>
            <div class="border"></div>
          </div>
          
         <div class="block_post">
         <div class="meta_info">
                <div class="data"><?= format_date($r_home['news_date']) ?></div>
                
              </div>

            <a href="#"><img src="assets/images/news/<?= $r_home['news_img'] ?>" alt="#" style="margin-right:30px; "></a>

           <?= $r_home['news_desc'] ?>

       </div>