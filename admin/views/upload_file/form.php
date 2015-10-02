<!-- Content Header (Page header) -->
        
                 <?php
                if(isset($_GET['did']) && $_GET['did'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Simpan gagal !</b>
               Password dan confirm password tidak sama
                </div>
                </section>
                <?php
                }
                ?>
                 <?php
                if(isset($_GET['did']) && $_GET['did'] == 2){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Simpan sukses!</b>
                </div>
             
           
                </section>
                <?php
                }
                ?>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                      
                        <!-- right column -->
                        <div class="col-md-12">
                            <!-- general form elements disabled -->

                          
                            <div class="title_page"> <?= $title ?></div>
                            

                             <form  class="cmxform" id="createForm" action="<?= $action?>" method="post" enctype="multipart/form-data" role="form">

                            <div class="box box-cokelat">
                                
                               
                                <div class="box-body">
                                    
                      
                                       
                                        <div class="col-md-12">
                                      
                                      
                                        <div class="form-group"> 
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="i_type" id="i_type" value="1" <?php if($row->type == 1) { echo "checked"; }?>>
                                                   Image
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="i_type" id="i_type" value="2" <?php if($row->type == 2) { echo "checked"; }?>>
                                                    File
                                                </label>
                                            </div>
                                            
                                        </div>

                                        <div class="form-group">
                                         <label>Images</label>
                                         <?php
                                        if($id){
                                        ?>
                                        <br />
                                        <?php
                                            if($row->type == 1){
											?>
                                            <img src="../../assets/images/upload/<?= $row->img?>">
                                               <?php
											}else{
											   ?>
                                              
                                             <a href="../../assets/images/upload/<?= $row->img?>">Download</a>  
                                             <br />
                                               <?php
											}
											   ?>
                                        <?php
                                        }
                                        ?>
                                           <input type="file" name="i_img" id="i_img" />
                                        </div>

                                        </div>
                                      
                                        
 										
                                        <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                  <div class="box-footer">
                                <input class="btn btn-success" type="submit" value="Save"/>
                                <a href="<?= $close_button?>" class="btn btn-success" >Close</a>
                             
                             </div>
                            
                            </div><!-- /.box -->
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
               
                </section><!-- /.content -->