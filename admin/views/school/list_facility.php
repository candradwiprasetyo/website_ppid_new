                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                    <table id="example3" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                            <th width="5%">No</th>
                                                <th>Name</th>
                                                <th>Images</th>
                                                <th>Config</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                           $no = 1;
                                            while($row_facility = mysql_fetch_array($query_facility)){
                                            ?>
                                            <tr>
                                            <td><?= $no?></td>
                                                <td><?= $row_facility['name'] ?></td>
                                                <td><img src="../../wp-content/uploads/images/facilities/<?= $row_facility['img']?>" width="80" /></td>
                                               
                                             <td style="text-align:center;">

                                                    <a href="school.php?page=form_facility&eg_id=<?= $_GET['eg_id'] ?>&id=<?= $row_facility['egf_id']?>" class="btn btn-default" ><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" onclick="confirm_delete(<?= $row_facility['egf_id']; ?>,'school.php?page=delete_facility&eg_id=<?= $_GET['eg_id']?>&id=')" class="btn btn-default" ><i class="fa fa-trash-o"></i></a>

                                                </td> 
                                            </tr>
                                            <?php
											$no++;
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <td colspan="4"><a href="<?= $add_button_facility ?>" class="btn btn-success " >Add</a></td>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                     