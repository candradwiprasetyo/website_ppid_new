<?php
$q_content = mysql_query("select * from menus where menu_id = '".$_GET['menu_id']."'");
$r_content = mysql_fetch_array($q_content);
?>
          <div class="main_head" style="margin-top:0px;">
            <div class="title"><?= $r_content['menu_name']?></div>
            <div class="border"></div>
          </div>
          
         

         
          <?= $r_content['menu_content']?>
          

          