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
                                    
                      
                                       
                                        <div class="col-md-9">
                                      
                                      
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input required type="text" name="i_name" class="form-control" placeholder="" value="<?= $row->form_information_name ?>" title="Kode kontrak tidak boleh kosong"/>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>No KTP</label>
                                            <input required type="text" name="i_name" class="form-control" placeholder="" value="<?= $row->form_information_noktp ?>" title="Kode kontrak tidak boleh kosong"/>
                                        </div>
                                        <? if($row->form_information_type == 1){?>
                                         <div class="form-group">
                                            <label>Organisasi</label>
                                            <input required type="text" name="i_name" class="form-control" placeholder="" value="<?= $row->form_information_organisation ?>" title="Kode kontrak tidak boleh kosong"/>
                                        </div>
                                        <? }?>
                                        <div class="form-group">
                                        <label>Alamat</label> <br />
                                        <textarea rows="4" cols="112">
                                            <?php
                                            echo $row->form_information_addres;
                                            ?>
                                        </textarea> 

                                        </div>
                                        <div class="form-group">
                                            <label>Telepon</label>
                                            <input required type="text" name="i_name" class="form-control" placeholder="" value="<?= $row->form_information_phone ?>" title="Kode kontrak tidak boleh kosong"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input required type="text" name="i_name" class="form-control" placeholder="" value="<?= $row->form_information_email ?>" title="Kode kontrak tidak boleh kosong"/>
                                        </div>
                                        <div class="form-group">
                                        <label>Informasi</label> <br />
                                        <textarea rows="4" cols="112">
                                            <?php
                                            echo $row->form_information_info;
                                            ?>
                                        </textarea> 

                                        </div>
                                        <div class="form-group">
                                        <label>Tujuan</label> <br />
                                        <textarea rows="4" cols="112">
                                            <?php
                                            echo $row->form_information_to;
                                            ?>
                                        </textarea> 

                                        </div>
                                        <div class="form-group">
                                            <label>Cara Memperoleh Informasi</label>
                                            <input required type="text" name="i_name" class="form-control" placeholder="" value="<?= $row->form_information_gain ?>" title="Kode kontrak tidak boleh kosong"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Cara Mendapat Informasi</label>
                                            <input required type="text" name="i_name" class="form-control" placeholder="" value="<?= $row->form_information_receive ?>" title="Kode kontrak tidak boleh kosong"/>
                                        </div>
                                      	</div>
                                        
 										<div class="col-md-3">
                                          <div class="form-group">
                                         <label>Scan KTP</label>
                                         <?php
                                        if($id){
										?>
                                        <br />
                                        <img src="../../assets/images/permohonan/<?= $row->form_information_scan_ktp ?>" style="width:100%;"/>
                                        <?php
										}
										?>
                                           <input type="file" name="i_img" id="i_img" />
                                        </div>
                                        <div class="form-group">
                                         <label>Scan Berkas</label>
                                         <?php
                                        if($id){
										?>
                                        <br />
                                        <img src="../../assets/images/permohonan/<?= $row->form_information_scan_file ?>" style="width:100%;"/>
                                        <?php
										}
										?>
                                           <input type="file" name="i_img" id="i_img" />
                                        </div>
                                    
                                      
                                        </div>
                                        <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                  <div class="box-footer">
                               <!-- <input class="btn btn-success" type="submit" value="Save"/>-->
                                <a href="<?= $close_button?>" class="btn btn-success" >Close</a>
                             
                             </div>
                            
                            </div><!-- /.box -->
                       </form>
                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
               
                </section><!-- /.content -->