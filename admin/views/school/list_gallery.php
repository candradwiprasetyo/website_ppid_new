                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                    <table id="example4" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Images</th>
                                                <th>Config</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           $no = 1;
                                            while($row_gallery = mysql_fetch_array($query_gallery)){
                                            ?>
                                            <tr>
                                            <td><?= $no?></td>
                                                <td><?= $row_gallery['name'] ?></td>
                                                <td><?php echo ($row_gallery['type'] == 1) ? "News" : "Gallery"; ?></td>
                                                <td><img src="../../wp-content/uploads/images/gallery/<?= $row_gallery['img']?>" width="80" /></td>
                                               
                                             <td style="text-align:center;">

                                                    <a href="school.php?page=form_gallery&eg_id=<?= $_GET['eg_id'] ?>&id=<?= $row_gallery['egg_id']?>" class="btn btn-default" ><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" onclick="confirm_delete(<?= $row_gallery['egg_id']; ?>,'school.php?page=delete_gallery&eg_id=<?= $_GET['eg_id']?>&id=')" class="btn btn-default" ><i class="fa fa-trash-o"></i></a>

                                                </td> 
                                            </tr>
                                            <?php
											$no++;
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <td colspan="5"><a href="<?= $add_button_gallery ?>" class="btn btn-success " >Add</a></td>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                     