<?php
$q_content = mysql_query("select * from periodic_informations where periodic_information_id = '".$_GET['berkala_id']."'");
$r_content = mysql_fetch_array($q_content);
?>
          <div class="main_head" style="margin-top:0px;">
            <div class="title"><?= $r_content['periodic_information_name']?></div>
            <div class="border"></div>
          </div>
          
         

         
          <?= $r_content['periodic_information_content']?>
          

          