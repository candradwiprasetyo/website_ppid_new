 <aside class="left-side sidebar-offcanvas">                
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="image" style="text-align:center; margin-bottom:10px; margin-top:10px;">
                        	<?php
                             $user_data = get_user_data();
							if($user_data[2]==""){
								$img = "../img/user/default.jpg";
							}else{
								$img = "../img/user/".$user_data[2];
							}
							?>
                            <img src="<?= $img ?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="info" style="text-align:center;">
                            <p style="color:#a0acbf; ">
                                        <?php
                                       
                                        echo "Welcome, ".$user_data[0];
                                        ?>
                                </p>

                            <a style="color:#a0acbf;  "><?= $user_data[1]?></a>
                        </div>
                    </div>
                   
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                   <?php //if(isset($_SESSION['menu_active'])) { echo $_SESSION['menu_active']; }?>
                    <ul class="sidebar-menu">
                     
                          

                  <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 1){ echo "class='active'"; } ?>>
                            <a href="welcome_page.php?id=1">
                                <i class="fa fa-circle"></i>
                                <span>Home</span>
                               
                            </a>
                            
                  </li>
                   
                   <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 2){ echo "class='active'"; } ?>>
                            <a href="slider.php?id=1">
                                <i class="fa fa-circle"></i>
                                <span>Slider</span>
                               
                            </a>
                            
                  </li>
                  
                    <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 3){ echo "class='active'"; } ?>>
                            <a href="menu.php?id=1">
                                <i class="fa fa-circle"></i>
                                <span>Content</span>
                               
                            </a>
                            
                  </li>
                   
                 
                  
                 

                   <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 4){ echo "class='active'"; } ?>>
                            <a href="news.php">
                                <i class="fa fa-circle"></i>
                                <span>News</span>
                               
                            </a>
                            
                  </li>

                   <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 5){ echo "class='active'"; } ?>>
                            <a href="gallery.php">
                                <i class="fa fa-circle"></i>
                                <span>Gallery</span>
                               
                            </a>
                            
                  </li>

                  <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 6){ echo "class='active'"; } ?>>
                            <a href="upload_file.php">
                                <i class="fa fa-circle"></i>
                                <span>Upload File</span>
                               
                            </a>
                            
                  </li>
                  
                  <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 8){ echo "class='active'"; } ?>>
                            <a href="periodic_information.php">
                                <i class="fa fa-circle"></i>
                                <span>Informasi Berkala</span>
                               
                            </a>
                            
                  </li>
                  
                  <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 9){ echo "class='active'"; } ?>>
                            <a href="any_information.php">
                                <i class="fa fa-circle"></i>
                                <span>Informasi setiap saat</span>
                               
                            </a>
                            
                  </li>
                  
                  <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 10){ echo "class='active'"; } ?>>
                            <a href="any_information.php">
                                <i class="fa fa-circle"></i>
                                <span>Permohonan Informas</span>
                               
                            </a>
                            
                  </li>
                        
                    <?php
                    if($_SESSION['user_type_id'] == 1){
					?>
                 
                  
                  <li <?php if(isset($_SESSION['menu_active']) && $_SESSION['menu_active'] == 7){ echo "class='active'"; } ?>>
                            <a href="user.php">
                                <i class="fa fa-users"></i>
                                <span>User</span>
                               
                            </a>
                            
                  </li>
                 <?php
					}
				 ?>

            
              
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>