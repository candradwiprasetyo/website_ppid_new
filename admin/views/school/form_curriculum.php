
                            

                             <form  class="cmxform" id="createForm" action="<?= $action_curriculum?>" method="post" enctype="multipart/form-data" role="form">

                            <div class="box box-cokelat">
                                
                               
                                <div class="box-body">
                                    
                      
                                       
                                        <div class="col-md-12">
                                      
                                      
 									


                                        <textarea id="editor" name="editor" rows="10" cols="80">
                                            <?php
                                            echo $row_curriculum['content'];
                                            ?>
                                        </textarea>    
                                        
                                      
                                        </div>
                                      
 									
                                        <div style="clear:both;"></div>
                                     
                                </div><!-- /.box-body -->
                                
                                  <div class="box-footer">
                                <input class="btn btn-success" type="submit" value="Save"/>
                                <a href="<?= $close_button?>" class="btn btn-success" >Close</a>
                             
                             </div>
                            
                            </div><!-- /.box -->
                       </form>
                    