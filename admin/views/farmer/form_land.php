<!-- Content Header (Page header) -->
        
                 <?php
                if(isset($_GET['did']) && $_GET['did'] == 1){
                ?>
                <section class="content_new">
                   
                <div class="alert alert-info alert-dismissable">
                <i class="fa fa-check"></i>
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                <b>Sukses !</b>
              Simpan berhasil
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
                <b>Gagal !</b>
              	Data Hambaran sudah ada
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
                                        
                                        <!--
                                        <div class="form-group">
                                            <label>No</label>
                                            <input required type="text" name="i_number" class="form-control" placeholder="Masukkan no ..." value="<?= $row->qp2d_number ?>"/>
                                        </div>
                                        -->
                                        <div class="form-group">
                                            <label>Hamparan</label>
                                           <select id="basic" name="i_land_id" class="selectpicker show-tick form-control" data-live-search="true">
											<?php
                                            $query_land = mysql_query("select a.*, b.location_name 
															from lands a 
															join locations b on b.location_id = a.location_id
															order by  
															land_code");
                                            while($row_land = mysql_fetch_array($query_land)){
                                            ?>
                                            <option value="<?= $row_land['land_id']?>" <?php if($row_land['land_id'] == $row->land_id){ ?>selected <?php } ?>  ><?= $row_land['land_code']." - ".$row_land['location_name'] ?></option>
                                            <?php
                                            }
                                            ?>
                                            </select> 
                                        </div>
                                       
                                       	<div class="form-group"> 
                                                <label>Luas Tanah (m3)</label>
                                            <input required type="number" name="i_luas" class="form-control" placeholder="Masukkan poin ..." value="<?= $row->farmer_land_area ?>" title="Luas Tanah Tidak boleh kosong dan harus diisi dengan angka"/>             
                                       
                                       
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