<?php
$q_content = mysql_query("select * from any_informations where any_information_id = '".$_GET['any_id']."'");
$r_content = mysql_fetch_array($q_content);
?>
          <div class="main_head" style="margin-top:0px;">
            <div class="title"><?= $r_content['any_information_name']?></div>
            <div class="border"></div>
          </div>
          
         

         
          <?= $r_content['any_information_content']?>
          

          