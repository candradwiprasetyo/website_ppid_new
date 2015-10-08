<html>
<head>
<?
function select($id){
	$q_info = mysql_query("select * from periodic_informations where periodic_information_id = '$id'");
	$r_info = mysql_fetch_array($q_info);
	return $r_info['periodic_information_name'];
	}
	
function content($id){
	$q_info = mysql_query("select * from periodic_informations where periodic_information_id = '$id'");
	$r_info = mysql_fetch_array($q_info);
	return $r_info['periodic_information_content'];
	}

?>
</head>
<body>
<div class="title">Informasi Berkala</div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <td colspan="2"><br />
                      <table align="left" border="1" cellpadding="0" cellspacing="0" width="527">
                        <tbody>
                          <tr>
                            <td rowspan="6"><p><strong>   &nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;</strong></p></td>
                            <td><p><strong><span data-scayt_word="Informasi" data-scaytid="1">Informasi</span> <span data-scayt_word="tentang" data-scaytid="3">tentang</span> profile <span data-scayt_word="Badan" data-scaytid="5">Badan</span> <span data-scayt_word="Publik" data-scaytid="6">Publik</span> :</strong></p></td>
                            <td><p align="center"> </p>
                              <p align="center"> </p></td>
                            <td><p> </p></td>
                          </tr>
                          <tr>
                            <td><p><?= select(1) ?></p></td>
                            <td><p align="center"><a href="index.php?page=info_berkala_detail&berkala_id=1"><? if(content(1)) {?>view<? }?></a></p></td>
                            <td><p> </p></td>
                          </tr>
                          
                          <tr>
                            <td><p><?= select(2) ?></p>
                              <p><?= select(3) ?></p>
                              <p><?= select(4) ?></p></td>
                            <td><p align="center"><a href="index.php?page=info_berkala_detail&berkala_id=2"><? if(content(2)) {?>view<? }?></a></p>
                              <p align="center"><a href="index.php?page=info_berkala_detail&berkala_id=3"><? if(content(3)) {?>view<? }?></a></p>
                              <p align="center"><a href="index.php?page=info_berkala_detail&berkala_id=4"><? if(content(4)) {?>view<? }?></a></p></td>
                            <td> </td>
                          </tr>
                          <tr>
                            <td><p><?= select(5) ?></p></td>
                            <td><p align="center"><a href="index.php?page=info_berkala_detail&berkala_id=5"><? if(content(5)) {?>view<? }?></a></p></td>
                            <td> </td>
                          </tr>
                          <tr>
                            <td><p><?= select(6) ?></p></td>
                            <td><p align="center"><a href="index.php?page=info_berkala_detail&berkala_id=6"><? if(content(6)) {?>view<? }?></a></p></td>
                            <td> </td>
                          </tr>
                          <tr>
                            <td><p><?= select(7) ?></p></td>
                            <td><p align="center"><a href="index.php?page=info_berkala_detail&berkala_id=7"><? if(content(7)) {?>view<? }?></a></p> </td>
                            <td> </td>
                          </tr>
                          <tr>
                            <td rowspan="6"><p>      B</p></td>
                            <td><p><strong><span data-scayt_word="Ringkasan" data-scaytid="61">Ringkasan</span> <span data-scayt_word="informasi" data-scaytid="62">informasi</span> <span data-scayt_word="tentang" data-scaytid="57">tentang</span> program <span data-scayt_word="dan" data-scaytid="58">dan</span>/<span data-scayt_word="atau" data-scaytid="65">atau</span> <span data-scayt_word="kegiatan" data-scaytid="66">kegiatan</span> yang <span data-scayt_word="sedang" data-scaytid="67">sedang</span> <span data-scayt_word="dijalankan" data-scaytid="68">dijalankan</span> </strong></p>
                              <p><strong><span data-scayt_word="dalam" data-scaytid="69">dalam</span> <span data-scayt_word="lingkup" data-scaytid="70">lingkup</span> <span data-scayt_word="Badan" data-scaytid="59">Badan</span> <span data-scayt_word="Publik" data-scaytid="60">Publik</span></strong>, yang <span data-scayt_word="meliputi" data-scaytid="77">meliputi</span> :</p></td>
                            <td> </td>
                            <td><p> </p></td>
                          </tr>
                          <tr>
                            <td><p><?= select(8) ?></p></td>
                            <td><p align="center"><a href="index.php?page=info_berkala_detail&berkala_id=8"><? if(content(8)) {?>view<? }?></a></p></td>
                            <td> </td>
                          </tr>
                          <tr>
                            <td><p><?= select(9) ?></p></td>
                            <td><a href="index.php?page=info_berkala_detail&berkala_id=9"><? if(content(9)) {?>view<? }?></a></td>
                            <td> </td>
                          </tr>
                          <tr>
                            <td><p><?= select(10) ?></p></td>
                            <td><a href="index.php?page=info_berkala_detail&berkala_id=10"><? if(content(10)) {?>view<? }?></a></td>
                            <td> </td>
                          </tr>
                          <tr>
                            <td><p><?= select(11) ?></p></td>
                            <td><p><a href="index.php?page=info_berkala_detail&berkala_id=11"><? if(content(11)) {?>view<? }?></a></p></td>
                          </tr>
                          <tr>
                            <td><?= select(12) ?></p></td>
                            <td> <p><a href="index.php?page=info_berkala_detail&berkala_id=12"><? if(content(12)) {?>view<? }?></a></p></td>
                          </tr>
                          <tr>
                            <td><p>      C</p></td>
                            <td><p><?= select(13) ?></p></td>
                            <td><p align="center"><a href="index.php?page=info_berkala_detail&berkala_id=13"><? if(content(13)) {?>view<? }?></a></p></td>
                            <td><p> </p></td>
                          </tr>
                          <tr>
                            <td rowspan="6"><p>     D</p></td>
                            <td><p><strong><span data-scayt_word="Ringkasan" data-scaytid="213">Ringkasan</span> <span data-scayt_word="laporan" data-scaytid="227">laporan</span> <span data-scayt_word="keuangan" data-scaytid="228">keuangan</span>, yang <span data-scayt_word="meliputi" data-scaytid="214">meliputi</span> :</strong></p></td>
                            <td><p> </p></td>
                            <td><p> </p></td>
                          </tr>
                          <tr>
                            <td><p><?= select(14) ?></p></td>
                            <td><a href="index.php?page=info_berkala_detail&berkala_id=14"><? if(content(14)) {?>view<? }?></a></td>
                            <td> </td>
                          </tr>
                          <tr>
                            <td><p><?= select(15) ?></p></td>
                            <td><a href="index.php?page=info_berkala_detail&berkala_id=15"><? if(content(15)) {?>view<? }?></a></td>
                            <td> </td>
                          </tr>
                          <tr>
                            <td><p><?= select(16) ?></p></td>
                            <td><a href="index.php?page=info_berkala_detail&berkala_id=16"><? if(content(16)) {?>view<? }?></a></td>
                            <td> </td>
                          </tr>
                          <tr>
                            <td><p><?= select(17) ?></p></td>
                            <td><a href="index.php?page=info_berkala_detail&berkala_id=17"><? if(content(17)) {?>view<? }?></a> </td>
                            <td> </td>
                          </tr>
                          <tr>
                            <td><p><?= select(18) ?></p></td>
                            <td><a href="index.php?page=info_berkala_detail&berkala_id=18"><? if(content(18)) {?>view<? }?></a></td>
                            <td> </td>
                          </tr>
                          <tr>
                            <td><p>     E</p></td>
                            <td><p><strong><?= select(19) ?></strong></p></td>
                            <td><p><a href="index.php?page=info_berkala_detail&berkala_id=19"><? if(content(19)) {?>view<? }?></a></p></td>
                            <td><p> </p></td>
                          </tr>
                          <tr>
                            <td><p>     F</p></td>
                            <td><p><strong><?= select(20) ?></strong></p></td>
                            <td><p><a href="index.php?page=info_berkala_detail&berkala_id=20"><? if(content(20)) {?>view<? }?></a></p></td>
                            <td><p> </p></td>
                          </tr>
                          <tr>
                            <td><p>     G</p></td>
                            <td><p><strong><?= select(21) ?></strong></p></td>
                            <td><p><a href="index.php?page=info_berkala_detail&berkala_id=21"><? if(content(21)) {?>view<? }?></a></p></td>
                            <td><p> </p></td>
                          </tr>
                          <tr>
                            <td><p>     H</p></td>
                            <td><p><strong><?= select(22) ?></strong></p></td>
                            <td><p><a href="index.php?page=info_berkala_detail&berkala_id=22"><? if(content(22)) {?>view<? }?></a></p></td>
                            <td><p> </p></td>
                          </tr>
                          <tr>
                            <td><p>      I</p></td>
                            <td><p><strong><?= select(23) ?></strong></p></td>
                            <td><p><a href="index.php?page=info_berkala_detail&berkala_id=23"><? if(content(23)) {?>view<? }?></a></p></td>
                            <td><p> </p></td>
                          </tr>
                          <tr>
                            <td><p>      J</p></td>
                            <td><p><strong><?= select(24) ?></strong></p></td>
                            <td><p><a href="index.php?page=info_berkala_detail&berkala_id=24"><? if(content(24)) {?>view<? }?></a> </p></td>
                            <td><p> </p></td>
                          </tr>
                        </tbody>
                      </table></td>
                  </tr>
                  <tr>
                    <td colspan="2"> </td>
                  </tr>
                </tbody>
              </table>
              </body>
              </html>