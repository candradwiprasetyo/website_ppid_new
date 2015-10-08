<html>
<head>
<?
function name($id){
	$q_info = mysql_query("select * from any_informations where any_information_id = '$id'");
	$r_info = mysql_fetch_array($q_info);
	return $r_info['any_information_name'];
	}
	
function status($id){
	$q_info = mysql_query("select * from any_informations where any_information_id = '$id'");
	$r_info = mysql_fetch_array($q_info);
	return $r_info['any_information_status'];
	}
	
function content($id){
	$q_info = mysql_query("select * from any_informations where any_information_id = '$id'");
	$r_info = mysql_fetch_array($q_info);
	return $r_info['any_information_content'];
	}

?>
</head>
<body>
<div class="title">Informasi Setiap Saat</div>
<table border="0" cellpadding="0" cellspacing="0" width="90%" style="width:90% !important; ">
	<tbody>
		<tr>
			<td></td>
			<td><p>	<strong> Setiap Badan Publik wajib menyediakan informasi setiap saat yang sekurang kurangnya terdiri atas :</strong></p></td>
			<td>&nbsp;
				</td>
			<td>&nbsp;
				</td>
		</tr>
		<tr>
			<td>
				<p>
					1</p>
			</td>
			<td>
				<p><?= name(1)?></p>
			</td>
			<td>
				<p><?= status(1)?></p>
			</td>
			<td><p><a href="index.php?page=info_any_detail&any_id=1"><? if(content(1)) {?>view<? }?></a></p>
				</td>
		</tr>
		<tr>
			<td>
				<p>
					2</p>
			</td>
			<td>
				<p><?= name(2)?></p>
			</td>
			<td>
				<p><?= status(2)?></p>
			</td>
			<td><p><a href="index.php?page=info_any_detail&any_id=2"><? if(content(2)) {?>view<? }?></a></p>
				</td>
		</tr>
		<tr>
			<td>
				<p>
					3</p>
			</td>
			<td>
				<p><?= name(3)?></p>
			</td>
			<td>
				<p><?= status(3)?></p>
			</td>
			<td><p><a href="index.php?page=info_any_detail&any_id=3"><? if(content(3)) {?>view<? }?></a></p>
				</td>
		</tr>
		<tr>
			<td>
				<p>
					4</p>
			</td>
			<td>
				<p>
					&nbsp;<span data-scayt_word="Informasi" data-scaytid="38">Informasi</span>&nbsp;<span data-scayt_word="tentang" data-scaytid="39">tentang</span>&nbsp;<span data-scayt_word="organisasi" data-scaytid="2051">organisasi</span>,&nbsp;<span data-scayt_word="administrasi" data-scaytid="2052">administrasi</span>,&nbsp;<span data-scayt_word="kepegawaian" data-scaytid="2053">kepegawaian</span>&nbsp;<span data-scayt_word="dan" data-scaytid="40">dan</span>&nbsp;<span data-scayt_word="keuangan" data-scaytid="2074">keuangan</span>&nbsp;:</p>
			</td>
			<td>&nbsp;
				</td>
			<td>&nbsp;
				</td>
		</tr>
		<tr>
			<td>&nbsp;
				</td>
			<td>
				<p><?= name(4)?></p>
			</td>
			<td>
				<p><?= status(4)?></p>
			</td>
			<td><p><a href="index.php?page=info_any_detail&any_id=4"><? if(content(4)) {?>view<? }?></a></p>
				</td>
		</tr>
		<tr>
			<td>&nbsp;
				</td>
			<td>
				<p><?= name(5)?></p>
			</td>
			<td>
				<p><?= status(5)?></p>
			</td>
			<td><p><a href="index.php?page=info_any_detail&any_id=5"><? if(content(5)) {?>view<? }?></a></p>
				</td>
		</tr>
		<tr>
			<td>&nbsp;
				</td>
			<td>
				<p><?= name(6)?></p>
			</td>
			<td>
				<p><?= status(6)?></p>
			</td>
			<td><p><a href="index.php?page=info_any_detail&any_id=6"><? if(content(6)) {?>view<? }?></a></p>
				</td>
		</tr>
		<tr>
			<td>&nbsp;
				</td>
			<td>
				<p><?= name(7)?></p>
			</td>
			<td>
				<p><?= status(7)?></p>
			</td>
			<td><p><a href="index.php?page=info_any_detail&any_id=7"><? if(content(7)) {?>view<? }?></a></p>
				</td>
		</tr>
		<tr>
			<td>
				<p>
					5</p>
			</td>
			<td>
				<p><?= name(8)?></p>
			</td>
			<td>
				<p><?= status(8)?></p>
			</td>
			<td><p><a href="index.php?page=info_any_detail&any_id=8"><? if(content(8)) {?>view<? }?></a></p>
				</td>
		</tr>
		<tr>
			<td>
				<p>
					6</p>
			</td>
			<td>
				<p><?= name(9)?></p>
			</td>
			<td>
				<p><?= status(9)?></p>
			</td>
			<td><p><a href="index.php?page=info_any_detail&any_id=9"><? if(content(9)) {?>view<? }?></a></p>
				</td>
		</tr>
		<tr>
			<td>
				<p>
					7</p>
			</td>
			<td>
				<p><?= name(10)?></p>
			</td>
			<td>
				<p><?= status(10)?></p>
			</td>
			<td><p><a href="index.php?page=info_any_detail&any_id=10"><? if(content(10)) {?>view<? }?></a></p>
				</td>
		</tr>
		<tr>
			<td>
				<p>
					8</p>
			</td>
			<td>
				<p><?= name(11)?></p>
			</td>
			<td>
				<p><?= status(11)?></p>
			</td>
			<td><p><a href="index.php?page=info_any_detail&any_id=11"><? if(content(11)) {?>view<? }?></a></p>
				</td>
		</tr>
		<tr>
			<td>
				<p>
					9</p>
			</td>
			<td>
				<p><?= name(12)?></p>
			</td>
			<td>
				<p><?= status(12)?></p>
			</td>
			<td><p><a href="index.php?page=info_any_detail&any_id=12"><? if(content(12)) {?>view<? }?></a></p>
				</td>
		</tr>
		<tr>
			<td>
				<p>
					10.</p>
			</td>
			<td>
				<p><?= name(13)?></p>
			</td>
			<td>
				<p><?= status(13)?></p>
			</td>
			<td><p><a href="index.php?page=info_any_detail&any_id=13"><? if(content(13)) {?>view<? }?></a></p>
				</td>
		</tr>
		<tr>
			<td>
				<p>&nbsp;
					</p>
				<p>
					11</p>
			</td>
			<td>
				<p><?= name(14)?></p>
			</td>
			<td>
				<p><?= status(14)?></p>
			</td>
			<td><p><a href="index.php?page=info_any_detail&any_id=14"><? if(content(14)) {?>view<? }?></a></p>
				</td>
		</tr>
		<tr>
			<td>
				<p>
					12</p>
			</td>
			<td>
				<p><?= name(15)?></p>
			</td>
			<td>
				<p><?= status(15)?></p>
			</td>
			<td><p><a href="index.php?page=info_any_detail&any_id=15"><? if(content(15)) {?>view<? }?></a></p>
				</td>
		</tr>
		<tr>
			<td>
				<p>
					&nbsp;13</p>
			</td>
			<td>
				<p><?= name(16)?></p>
			</td>
			<td>
				<p><?= status(16)?></p>
			</td>
			<td><p><a href="index.php?page=info_any_detail&any_id=16"><? if(content(16)) {?>view<? }?></a></p>
				</td>
		</tr>
		<tr>
			<td>
				<p>
					14</p>
			</td>
			<td>
				<p><?= name(17)?></p>
			</td>
			<td>
				<p><?= status(17)?></p>
			</td>
			<td><p><a href="index.php?page=info_any_detail&any_id=17"><? if(content(17)) {?>view<? }?></a></p>
				</td>
		</tr>
		<tr>
			<td>
				<p>
					15</p>
			</td>
			<td>
				<p><?= name(18)?></p>
			</td>
			<td>
				<p><?= status(18)?></p>
			</td>
			<td><p><a href="index.php?page=info_any_detail&any_id=18"><? if(content(18)) {?>view<? }?></a></p>
				</td>
		</tr>
		<tr>
			<td>
				<p>
					16</p>
			</td>
			<td>
				<p><?= name(19)?></p>
			</td>
			<td>
				<p><?= status(19)?></p>
			</td>
			<td><p><a href="index.php?page=info_any_detail&any_id=19"><? if(content(19)) {?>view<? }?></a></p>
				</td>
		</tr>
	</tbody>
</table>
</body>
 </html>