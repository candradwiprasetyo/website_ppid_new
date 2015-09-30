<?php
$q_home = mysql_query("select * from home_welcome_pages");
$r_home = mysql_fetch_array($q_home);
?>
<div class="main_head" style="margin-top:0px;">
            <div class="title"><?= $r_home['welcome_page_name'] ?></div>
            <div class="border"></div>
          </div>
          
         

            <a href="#"><img src="assets/images/<?= $r_home['welcome_page_img'] ?>" alt="#" style="margin-right:30px; width:300px;"></a>

           <?= $r_home['welcome_page_desc'] ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="contact_table">
             <tr>
               <td><i class="fa fa-envelope fa-lg"></i> &nbsp;&nbsp;invest@bpm.jatimprov.go.id</td>
               <td><i class="fa fa-phone fa-lg"></i> &nbsp;&nbsp;&nbsp;031-3537537</td>
               <td><i class="fa fa-fax fa-lg"></i> &nbsp;&nbsp;031-3531008</td>
             </tr>
</table>
