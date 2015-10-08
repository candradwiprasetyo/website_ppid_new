<?php
include 'admin/lib/config.php';
include 'admin/lib/function.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- saved from url=(0066)http://premiumtheme.ru/goodshopping/colors/blue-and-red/index.html -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  
  <title>PPID BPM JATIM</title>
  <link rel="shortcut icon" href="images/favicon.ico" />
  
<!-- ========================  CSS Files  ========================== -->
  <link href="css/reset.css" rel="stylesheet" type="text/css" media="screen">
  <link href="css/ui.css" rel="stylesheet" type="text/css" media="screen">
  <link href="css/main.css" rel="stylesheet" type="text/css" media="screen"> 
  <link href="css/bx_styles.css" rel="stylesheet" type="text/css" media="screen">
  <link href="css/font_awesome/font-awesome.css" rel="stylesheet" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/banners.css">

<!-- ========================  JS Files  =========================== -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.bxSlider.min.js"></script>
  <script type="text/javascript" src="js/init.js"></script>
  <script type="text/javascript" src="js/jquery.ui-slider.js"></script>
  <script type="text/javascript" src="js/selectBox.min.js"></script>
  <script type="text/javascript" src="js/date_time.js"></script>

  <!-- fancybox -->
  <script type="text/javascript" src="js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="css/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
 
  
</head>

<body>

<!--============================== Header =================================-->

  <div id="wrapper">
    <div id="top_panel">
      <div class="wrap">
        <ul class="right_menu">
          <li><a class="link" href="http://bpm.jatimprov.go.id">Back to BPM Provinsi Jawa Timur</a></li>
          
        </ul>
        
        <div class="menu">
          <span id="date_time"></span>
        </div>
      </div>
    </div>
    
    <div style="clear:both"></div>

    <div id="header">
      <div class="wrap">
        <a class="logo" href="index.php"><img src="images/logo.png" alt="#"></a>
        
         <form action="http://premiumtheme.ru/goodshopping/colors/blue-and-red/index.html#">
          <div class="search">
            <input type="submit" value=" ">
            <input type="text" placeholder="Search...">
          </div>
        </form>
        
        <div class="contacts">
          <span>(031) 3537537 </span>
          <a href="http://premiumtheme.ru/goodshopping/colors/blue-and-red/index.html#">invest@bpm.jatimprov.go.id</a>
        </div>
      </div>
    </div>



    <div id="top_menu">
      <div class="wrap">
        <ul class="right_menu">
          
          <li class="menu_contact_us">
              <a class="top_link" href="#">KONTAK KAMI</a>  
          </li>
        </ul>

<!--============================== Menu =================================-->
        <ul class="left_menu">


          <?php
          $q_menu = mysql_query("select * from menus where menu_level = '1' and menu_active_status = '1'");
          while($r_menu = mysql_fetch_array($q_menu)){
            if($r_menu['menu_id'] == 1 || $r_menu['menu_id'] == 5){
              $link = $r_menu['menu_url'];
            }else{
              $link = "#";
            }
          ?>
         
          <li class="menu_item droped">
            <a class="top_link" href="<?= $link ?>"><?= $r_menu['menu_name'] ?></a>  
            
          <?php
          $c_q_menu_child = mysql_query("select count(menu_id) as result from menus where menu_level = '2' and menu_active_status = '1' and menu_parent_id = '".$r_menu['menu_id']."'");
          $c_r_menu_child = mysql_fetch_array($c_q_menu_child);
            
          $result = $c_r_menu_child['result'];
          if($result > 0){
          ?>
            <div class="dropdown">
              <ul>
                <?php
                $q_menu_child = mysql_query("select * from menus where menu_level = '2' and menu_active_status = '1' and menu_parent_id = '".$r_menu['menu_id']."'");
                while($r_menu_child = mysql_fetch_array($q_menu_child)){
                
                if($r_menu_child['menu_id'] == 12 or $r_menu_child['menu_id'] == 19 or $r_menu_child['menu_id'] == 21){
                  $link_child = $r_menu_child['menu_url'];
                }else{
                  $link_child = "index.php?page=content&menu_id=".$r_menu_child['menu_id'];
                }
                ?>
                <li><a href="<?= $link_child ?>"><?= $r_menu_child['menu_name'] ?></a></li>
                 <?php
                  }
                  ?>
              </ul>
            </div>
            <?php
            }
            ?>
          </li>
         
        <?php
        }
        ?>
        </ul>
      </div>
    </div>

<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : "";
if($page == 'home' || $page == ''){
?>
<!--============================== Slider =================================-->
    <div id="slider_frame">
      

      <div class="wrap">

      <div class="left_slider_frame">
       
          
          <div class="bx-window">
            <a id="top_slider_prev">Previos</a>
            <a id="top_slider_next">Next</a>
            <ul id="top_slider">
         
             <?php
             $q_slider = mysql_query("select * from sliders order by slider_id desc limit 5");
             while($r_slider = mysql_fetch_array($q_slider)){
             ?>
              <li class="slide1" style="background: url(assets/images/slider/<?= $r_slider['slider_img'] ?>) no-repeat top center !important; ">
              <div class="slider_desc">
              	<div class="slider_desc_title">PPID</div>
                  <div class="slider_desc_content">Asistensi/ Desk PPID pembantu SKPD</div>
              </div>
                <div class="wrap">
                  <a href="http://premiumtheme.ru/goodshopping/colors/blue-and-red/index.html#"></a>
                </div>
              </li>

              <?php
              }
              ?>
        
            </ul>
          
        </div>
      </div>

      <div class="right_slider_frame">
        <ul class="ca-menu">
                      <li class="banner1">
                          <a href="http://www.komisiinformasi.go.id/">
                              <span class="ca-icon"><img src="images/ban1.png"></span>
                              <div class="ca-content">
                                  <h2 class="ca-main">KIP</h2>
                                  <h3 class="ca-sub">Republik Indonesia</h3>
                              </div>
                          </a>
                      </li>
                       <li class="banner2">
                          <a href="http://kip.jatimprov.go.id/">
                              <span class="ca-icon"><img src="images/ban2.png"></span>
                              <div class="ca-content">
                                  <h2 class="ca-main">Komisi Informasi</h2>
                                  <h3 class="ca-sub">Prov Jawa Timur</h3>
                              </div>
                          </a>
                      </li>
                      
                       <li class="last banner3">
                          <a href="http://www.kpk.go.id/">
                              <span class="ca-icon"><img src="images/ban3.png"></span>
                              <div class="ca-content">
                                  <h2 class="ca-main">KPK</h2>
                                  <h3 class="ca-sub">Indonesia</h3>
                              </div>
                          </a>
                      </li>
                      
        </ul>
      </div>
    </div>
</div>


<?php
}
?>
<div class="clear:both"></div>
<!--============================== Content =================================-->
    <div class="mainContent">
      <div class="wrap">
        
        
      <div class="blog">

<!--============================== Right Column =================================--> 
          <div class="right">
           
            <div class="title">Berita Terkini</div>
            <div class="blog_posts">

             <?php
             $q_news = mysql_query("select * from news where news_type = '1' order by news_id desc");
             while($r_news = mysql_fetch_array($q_news)){
             ?>
              <div class="posts_item">
                <div class="box-showcase">
                  <div class="box-showcaseInner">
                    <a href="index.php?page=news_detail&news_id=<?= $r_news['news_id']?>"><img src="assets/images/news/<?= $r_news['news_img'] ?>" alt="#"></a>
                  </div>
                </div>
                <div class="small_news">
                  <p><a href="index.php?page=news_detail&news_id=<?= $r_news['news_id']?>"><?= $r_news['news_name'] ?></a></p>
                  <div class="data"><?= format_date($r_news['news_date']) ?></div>
                </div>
              </div>
              <?php
             }
              ?>

            </div>  
          </div>

<!--============================== Left Column =================================--> 
          <div class="left">

             
    <?php
      function MyInclude($file) {
        if(file_exists($file)) {
           require_once($file);
        } else {
            throw(new Exception('Halaman tidak ditemukan'));
        }
    }
          
      
               $page = (isset($_GET['page'])) ? $_GET['page'] : "";
              if($page){
                try{
                MyInclude('index/'.$page.".php");
                          }
                  catch(Exception $e){
                    echo "<div class=\"judul\">".$e->getMessage()."</div>";
                    
                    }
              } else {
                require_once("index/home.php");
              }
            ?>
            
          </div>
        </div>

<!--============================== Hot Deals =================================-->
        <div class="hor_slider">
          <div class="title">
            <a id="slider2_next">Next</a>
            <a id="slider2_prev">Previos</a>
            Gallery
          </div>
          
          <div class="bx-wrapper" style="width:960px; position:relative;"><div class="bx-window" style="position:relative; overflow:hidden; width:960px;">
            <ul class="goods_list" id="slider2" style="width: 999999px; position: relative; left: -240px;">
              
            <?php
             $q_gallery = mysql_query("select * from news where news_type = '2' order by news_id desc");
             while($r_gallery = mysql_fetch_array($q_gallery)){
             ?>
              <li class="pager" style="width: 220px; float: left; list-style: none;">
              <div class="goods_item">
                <div class="foto">
                  <div class="shadow"></div>
                  
                  <a class="fancybox" href="assets/images/gallery/<?= $r_gallery['news_img'] ?>" data-fancybox-group="gallery" title="<?= $r_gallery['news_desc'] ?>"><img src="assets/images/gallery/<?= $r_gallery['news_img'] ?>" alt=""></a>
                </div>
                <div class="bot">
                  <?= $r_gallery['news_desc'] ?>
                  
                 
                  
                </div>
              </div>
            </li>
            <?php
            }
            ?>
            
            
           </ul></div></div>
        </div>
      </div>
    </div>
    
<!--============================== Footer =================================-->
    <div id="footer">
      <div class="wrap">

        <div class="col">
          <img src="images/logo_jatim.png" style="width:80px;">
        </div>

        <div class="col">
          <div class="title"><a>Alamat</a></div>
          
          <ul class="ul_footer">
            <li>Jalan Rajawali No. 6-8</li>
            <li>Surabaya, Jawa Timur</li>
            <li> Indonesia</li>         
            
          </ul>
        </div>
        
        <div class="col">
          <div class="title"><a>Kontak</a></div>
          
          <ul class="ul_footer">
            <li><i class="fa fa-envelope fa-lg"></i> &nbsp;&nbsp;invest@bpm.jatimprov.go.id</li>
            <li><i class="fa fa-phone fa-lg"></i> &nbsp;&nbsp;&nbsp;031-3537537</li>
            <li><i class="fa fa-fax fa-lg"></i> &nbsp;&nbsp;031-3531008</li>     
          </ul>
        </div>
        
        <div class="col col_last">
          <div class="title">Links</div>
          
          <ul class="ul_footer">
            <li><a href="http://bpm.jatimprov.go.id/bpm/">Website BPM Jatim</a></li>
            <li><a href="http://bpm.jatimprov.go.id/ppid/">Website PPID BPM Jatim</a></li>
            <li><a href="http://kominfo.jatimprov.go.id/">Website Kominfo Jatim</a></li>  
          </ul>
        </div>
        
        
      </div>
    </div>


    <div class="footer_bottom">Dikelola Oleh <b><a href="http://bpm.jatimprov.go.id">Badan Penanaman Modal Provinsi Jawa Timur</a></b></div>

  </div>
 <script type="text/javascript">
    window.onload = date_time('date_time');
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      /*
       *  Simple image gallery. Uses default settings
       */

      $('.fancybox').fancybox();

     

    });
  </script>
</body></html>