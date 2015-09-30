
                <?php
                if(isset($_GET['did']) && $_GET['did'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Simpan Berhasil
                </div>
           
                </section>
                <?php
                }else if(isset($_GET['did']) && $_GET['did'] == 2){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Edit Berhasil
                </div>
           
                </section>
                <?php
                }else if(isset($_GET['did']) && $_GET['did'] == 3){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
               Delete Berhasil
                </div>
           
                </section>
                <?php
                }
                ?>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            
                              <div class="title_page"> <?= $title ?></div>
                            
                            
                                <ul class="nav nav-tabs">
                                    <li <?php if(!isset($_GET['tab_id']) || $_GET['tab_id'] == 1){ ?>class="active"<?php } ?>><a href="#tab_1" data-toggle="tab">Home</a></li>
                                    <li <?php if(isset($_GET['tab_id']) && $_GET['tab_id'] == 2){ ?>class="active"<?php } ?>><a href="#tab_2" data-toggle="tab">Curriculum</a></li>
                                    <li <?php if(isset($_GET['tab_id']) && $_GET['tab_id'] == 3){ ?>class="active"<?php } ?>><a href="#tab_3" data-toggle="tab">Teachers</a></li>
                                    <li <?php if(isset($_GET['tab_id']) && $_GET['tab_id'] == 4){ ?>class="active"<?php } ?>><a href="#tab_4" data-toggle="tab">Facility</a></li>
                                    <li <?php if(isset($_GET['tab_id']) && $_GET['tab_id'] == 5){ ?>class="active"<?php } ?>><a href="#tab_5" data-toggle="tab">News / Gallery</a></li>
                                    <li <?php if(isset($_GET['tab_id']) && $_GET['tab_id'] == 6){ ?>class="active"<?php } ?>><a href="#tab_6" data-toggle="tab">Education Calendar</a></li>
                                   
                                </ul>
                            
                            <div class="tab-content">
                                <div class="tab-pane <?php if(!isset($_GET['tab_id']) || $_GET['tab_id'] == 1){ ?>active<?php } ?>" id="tab_1">

                                <?php include 'form_home.php'; ?>

                                </div>

                                <div class="tab-pane <?php if(isset($_GET['tab_id']) && $_GET['tab_id'] == 2){ ?>active<?php } ?>" id="tab_2">
                                    <?php include 'form_curriculum.php'; ?>
                                </div>

                                <div class="tab-pane <?php if(isset($_GET['tab_id']) && $_GET['tab_id'] == 3){ ?>active<?php } ?>" id="tab_3">
                                     <?php include 'list_teacher.php'; ?>
                                </div>

                                <div class="tab-pane <?php if(isset($_GET['tab_id']) && $_GET['tab_id'] == 4){ ?>active<?php } ?>" id="tab_4">
                                     <?php include 'list_facility.php'; ?>
                                </div>

                                <div class="tab-pane <?php if(isset($_GET['tab_id']) && $_GET['tab_id'] == 5){ ?>active<?php } ?>" id="tab_5">
                                    <?php include 'list_gallery.php'; ?>
                                </div>

                                <div class="tab-pane <?php if(isset($_GET['tab_id']) && $_GET['tab_id'] == 6){ ?>active<?php } ?>" id="tab_6">
                                </div>


                            </div>

                        </div>
                    </div>

                </section><!-- /.content -->