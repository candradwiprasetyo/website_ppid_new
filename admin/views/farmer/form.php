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
                                            <label>Kode Kontrak</label>
                                            <input required type="text" name="i_code" class="form-control" placeholder="Masukan Kode Kontrak..." value="<?= $row->farmer_contract_code ?>" title="Kode kontrak tidak boleh kosong"/>
                                        </div>
                                        
                                    
                                        
                                
                                        
                                        <div class="form-group">
                                          <label>Nama</label>
                                                  <input required type="text" name="i_name" class="form-control" placeholder="Masukan Nama ..."  value="<?= $row->farmer_name ?>" title="Nama Tidak boleh kosong"/>                                   
                                  		</div>
                                        <div class="form-group">
                                            <label>Nomor KTP</label>
                                            <input required type="text" name="i_no_ktp" class="form-control" placeholder="Masukan Nomor KTP ..." value="<?= $row->farmer_identity_number ?>" title="Nomor KTP Tidak boleh kosong"/>
                                        </div>
                                      
 								
                                         <div class="form-group">
                                            <label>Alamat</label>
                                           <textarea class="form-control" name="i_alamat" rows="3" placeholder="Masukan Alamat ..."><?= $row->farmer_address ?></textarea>
                                        </div>
                                      
                                        </div>
                                      
                                        
 										<div class="col-md-3">
                                          <div class="form-group">
                                         <label>Images</label>
                                         <?php
                                        if($id){
										?>
                                        <br />
                                        <img src="<?= $row->farmer_identity_img ?>" style="width:100%;"/>
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
                    <?php
              if(isset($_GET['id'])){
			  ?>
                    <div class="row">
                        <div class="col-md-12">
                             <div class="title_page">Data Tanah Petani</div>
                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                           	 	<th width="5%">No</th>
                                             	<th>Luas Tanah</th>
                                                <th>Code Hamparan</th>
                                                <th>Lokasi</th>
                                              	<th>Luas Hamparan</th> 
                                                <th>Config</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $q_land = select_land($id);
											$no_land = 1;
                                            while($r_land = mysql_fetch_array($q_land)){
                                            ?>
                                            <tr>
                                            	<td><?= $no_land?></td>
                                                <td><?= $r_land['farmer_land_area']?></td>
                                                <td><?= $r_land['land_code']?></td>
                                                <td><?= $r_land['location_name']?></td>
                                                <td><?= get_land_area($r_land['land_id'])?></td>
                                              
                                                 <td style="text-align:center;">

                                                    <a href="farmer.php?page=form_farmer&f_id=<?= $r_land['farmer_land_id']?>&id=<?= $_GET['id']?>" class="btn btn-default" ><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" onclick="confirm_delete(<?= $r_land['farmer_land_id']; ?>,'farmer.php?page=delete_land&id=<?= $_GET['id'] ?>&f_id=')" class="btn btn-default" ><i class="fa fa-trash-o"></i></a>

                                                </td> 
                                            </tr>
                                            <?php
											$no_land++;
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <td colspan="10"><a href="farmer.php?page=form_farmer&id=<?= $_GET['id']?>" class="btn btn-success " >Add</a></td>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>
                    <?php
			  }
					?>
                </section><!-- /.content -->