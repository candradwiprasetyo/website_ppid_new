                            
                            <div class="box">
                             
                                <div class="box-body2 table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
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
                                            while($row_teacher = mysql_fetch_array($query_teacher)){
                                            ?>
                                            <tr>
                                            <td><?= $no?></td>
                                                <td><?= $row_teacher['name'] ?></td>
                                                <td><img src="../../wp-content/uploads/images/teachers/<?= $row_teacher['img']?>" width="80" /></td>
                                               
                                             <td style="text-align:center;">

                                                    <a href="school.php?page=form_teacher&eg_id=<?= $_GET['eg_id'] ?>&id=<?= $row_teacher['egt_id']?>" class="btn btn-default" ><i class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" onclick="confirm_delete(<?= $row_teacher['egt_id']; ?>,'school.php?page=delete_teacher&eg_id=<?= $_GET['eg_id']?>&id=')" class="btn btn-default" ><i class="fa fa-trash-o"></i></a>

                                                </td> 
                                            </tr>
                                            <?php
											$no++;
                                            }
                                            ?>

                                           
                                          
                                        </tbody>
                                          <tfoot>
                                            <tr>
                                                <td colspan="4"><a href="<?= $add_button_teacher ?>" class="btn btn-success " >Add</a></td>
                                               
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                     