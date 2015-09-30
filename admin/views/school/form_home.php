

                            <form  class="cmxform" id="createForm" action="<?= $action_home?>" method="post" enctype="multipart/form-data" role="form">

                            <div class="box box-cokelat">
                                
                               
                                <div class="box-body">
                                    
                                    <div class="callout callout-info">
                                        <div class="new_subtitle">Introduction</div>
                                    </div>
                                
                                <div class="row">
                                <div class="col-md-8">      
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Images 1</label>
                                            <img src="../../wp-content/uploads/images/<?= $row_home->img1 ?>" style="width:100%;"/>
                                            <input type="file" name="i_img1" id="i_img1" />
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Images 2</label>
                                            <img src="../../wp-content/uploads/images/<?= $row_home->img2 ?>" style="width:100%;"/>
                                            <input type="file" name="i_img2" id="i_img2" />
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Images 3</label>
                                            <img src="../../wp-content/uploads/images/<?= $row_home->img3 ?>" style="width:100%;"/>
                                            <input type="file" name="i_img3" id="i_img3" />
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Images 4</label>
                                            <img src="../../wp-content/uploads/images/<?= $row_home->img4 ?>" style="width:100%;"/>
                                            <input type="file" name="i_img4" id="i_img4" />
                                        </div>
                                    </div>
                                </div>

                                  <div class="col-md-4">

                                        <div class="form-group">
                                            
                                            <input required type="text" name="i_introduction_name" class="form-control" placeholder="Enter name ..." value="<?= $row_home->introduction_name ?>"/>
                                        </div>

                                         <div class="form-group">
                                         <textarea id="i_introduction_content" name="i_introduction_content" rows="6" cols="80" class="form-control"><?php
                                            echo $row_home->introduction_content;
                                            ?></textarea> 
                                    </div>
                                </div>
                                </div>
                                <br>

                                <div class="row">
                                    <div class="callout callout-info">
                                        <div class="new_subtitle">Testimoni</div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Testimoni Image</label>
                                            <img src="../../wp-content/uploads/images/<?= $row_home->testimoni_img ?>" style="width:100%;"/>
                                            <input type="file" name="i_testimoni_img" id="i_testimoni_img" />
                                        </div>
                                    </div>

                                    <div class="col-md-9">
                                        <div class="form-group">
                                             <textarea id="i_testimoni_content" name="i_testimoni_content" rows="10" cols="80" class="form-control"><?php
                                                echo $row_home->testimoni_content;
                                                ?></textarea> 
                                        </div>
                                        <div class="form-group">
                                            
                                            <input required type="text" name="i_testimoni_name" class="form-control" placeholder="Enter name ..." value="<?= $row_home->testimoni_name ?>"/>
                                        </div>
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="callout callout-info">
                                        <div class="new_subtitle">Program</div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Program 1</label>
                                            <input required type="text" name="i_program1" class="form-control" placeholder="Enter name ..." value="<?= $row_home->program1 ?>"/>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Program 1</label>
                                            <input required type="text" name="i_program2" class="form-control" placeholder="Enter name ..." value="<?= $row_home->program2 ?>"/>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Program 1</label>
                                            <input required type="text" name="i_program3" class="form-control" placeholder="Enter name ..." value="<?= $row_home->program3 ?>"/>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Program 1</label>
                                            <input required type="text" name="i_program4" class="form-control" placeholder="Enter name ..." value="<?= $row_home->program4 ?>"/>
                                        </div>
                                    </div>

                                   

                                </div>


                                </div><!-- /.box-body -->
                                
                                  <div class="box-footer">
                                <input class="btn btn-success" type="submit" value="Save"/>
                                <a href="<?= $close_button?>" class="btn btn-success" >Close</a>
                             
                                </div>
                            
                            </div><!-- /.box -->
                       </form>
                 