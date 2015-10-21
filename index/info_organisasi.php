 <div class="title">Permohonan Informasi Online Organisasi</div>
  <?php
                if(isset($_GET['did']) && $_GET['did'] == 1){
                ?>
                <script type="text/javascript">
				alert("Terima kasih atas partisipasi anda!");
				</script>
                <?php
                }
                ?>
 <form action="admin/controllers/form_info.php?page=save" method="post" enctype="multipart/form-data" name="form2" id="form2">
                  <table width="100%" align="center" >
                    <tbody>
                      <tr valign="baseline">
                        <td width="181" height="30" align="right" nowrap="nowrap">Nama:</td>
                        <td width="25"> </td>
                        <td width="1071"><span id="sprytextfield1">
                          <input type="text" name="nama" value="" size="32" autocomplete="off" />
                          <input type="hidden" name="type" value="1" size="32"  />
                        </span></td>
                      </tr>
                      <tr valign="baseline">
                        <td height="30" align="right" nowrap="nowrap">No KTP:</td>
                        <td> </td>
                        <td><span id="sprytextfield2">
                          <input type="text" name="no_ktp" value="" size="32" autocomplete="off" />
                        </span></td>
                      </tr>
                      <tr valign="baseline">
                        <td height="30" align="right" nowrap="nowrap">Organisasi:</td>
                        <td> </td>
                        <td><input type="text" name="organisasi" value="" size="32" /></td>
                      </tr>
                      <tr valign="baseline">
                        <td height="30" align="right" nowrap="nowrap">Alamat:</td>
                        <td> </td>
                        <td><span id="sprytextfield3">
                          <input type="text" name="alamat" value="" size="32" autocomplete="off" />
                        </span></td>
                      </tr>
                      <tr valign="baseline">
                        <td height="30" align="right" nowrap="nowrap">Telepon:</td>
                        <td> </td>
                        <td><span id="sprytextfield4">
                          <input type="text" name="telepon" value="" size="32" autocomplete="off" />
                        </span></td>
                      </tr>
                      <tr valign="baseline">
                        <td height="30" align="right" valign="top" nowrap="nowrap">Email</td>
                        <td> </td>
                        <td><input type="text" name="email" id="email" /></td>
                      </tr>
                      <tr valign="baseline">
                        <td height="94" align="right" valign="top" nowrap="nowrap">Informasi:</td>
                        <td> </td>
                        <td><span id="sprytextarea1">
                          <textarea name="informasi" cols="60" rows="5" autocomplete="off"></textarea>
                        </span></td>
                      </tr>
                      <tr valign="baseline">
                        <td height="92" align="right" valign="top" nowrap="nowrap">Tujuan:</td>
                        <td> </td>
                        <td><span id="sprytextarea2">
                          <textarea name="tujuan" cols="60" rows="5" autocomplete="off"></textarea>
                        </span></td>
                      </tr>
                      <tr>
                        <td height="30" align="right" nowrap="nowrap">Cara Memperoleh Informasi:</td>
                        <td> </td>
                        <td><select name="memperoleh_informasi">
                                                 
                          <option value="Melihat/ Membaca/Mendengar/ Mencatat">Melihat/ Membaca/Mendengar/ Mencatat</option>
                                                 
                          <option value="Mendapat salinan informasi (hard copy / softcopy)">Mendapat salinan informasi (hard copy / softcopy)</option>
                                               
                        </select></td>
                      </tr>
                      <tr>
                        <td height="30" align="right" nowrap="nowrap">Cara Mendapat Informasi:</td>
                        <td> </td>
                        <td><select name="mendapat_informasi">
                                                 
                          <option value="Mengambil langsung">Mengambil langsung</option>
                                                 
                          <option value="Kurir">Kurir</option>
                                                 
                          <option value="Pos">Pos</option>
                                                 
                          <option value="Faksimili">Faksimili</option>
                                                 
                          <option value="Email">Email</option>
                                               
                        </select></td>
                      </tr>
                      <tr valign="baseline">
                        <td height="30" align="right" nowrap="nowrap">Ktp:</td>
                        <td> </td>
                        <td><input type="file" name="scan_ktp" id="scan_ktp" /></td>
                      </tr>
                      <tr valign="baseline">
                        <td height="30" align="right" nowrap="nowrap">Berkas:</td>
                        <td> </td>
                        <td><input type="file" name="scan_berkas" id="scan_berkas" /></td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap="nowrap" align="right"></td>
                        <td> </td>
                        <td> </td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap="nowrap" align="right"> </td>
                        <td> </td>
                        <td> </td>
                      </tr>
                      <tr valign="baseline">
                        <td nowrap="nowrap" align="right"> </td>
                        <td> </td>
                        <td><input type="submit" value="Kirim" /></td>
                      </tr>
                    </tbody>
                  </table>
                </form>