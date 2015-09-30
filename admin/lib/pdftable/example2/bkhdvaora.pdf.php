<?php
require_once('lib/pdf.inc.php');
$p = new PDF();
$p->SetMargins(15,15,15);
$p->AddPage('L');
$p->setStyle('title');
$p->text(0,'BA�NG KE� HO�A ��N, CH��NG T�� HA�NG HO�A, D�CH VU� MUAVA�O',0,'C');
$p->setfont('vni_times','',10);
$p->text(0,"(Ke�m theo t�� khai thue� GTGT)\n(Du�ng cho c� s�� t�nh thue� GTGT theo ph��ng pha�p kha�u tr�� thue� ke� khai ha�ng tha�ng)\nTha�ng $this->month na�m $this->year",0,'C');
$html = "
<table width=$p->width>
<tr><td width=18>Te�n ��n v�<td width=180>: ".VNCode::UTF8VNI(getinfo(ADR_NAME))."<td width=13>Ma�u so�<td>: ".($this->hdvao?'03':'02')."/GTGT
<tr><td>��a ch�<td>: ".VNCode::UTF8VNI(getinfo(ADR_ADDRESS))."<td>Ma� so�<td>: ".getinfo(ADR_CODE)."
<tr><td>�ie�n thoa�i<td>: ".getinfo(ADR_TELL)."
";
$p->htmltable($html);
$p->Ln(3);
$vr1 = ($this->hdvao ? 'mua':'ba�n');
$vr2 = ($this->hdvao ? 'ba�n':'mua');
$html = '
<table width='.$p->width.' align=center>
<tr bgcolor=#eeeeee repeat=1>
<td align=center border=1111 rowspan=2 width=1>S<br>T<br>T
<td align=center border=1110 colspan=3>Ho�a ��n ch��ng t�� '.$vr1.'
<td align=center border=1110 rowspan=2 width=50>Te�n ng���i '.$vr2.'
<td align=center border=1110 rowspan=2>Ma� so� thue�
<td align=center border=1110 rowspan=2 width=50>Ma�t ha�ng
<td align=center border=1110 rowspan=2>Doanh so� '.$vr1.' ch�a co� thue�
<td align=center border=1110 rowspan=2 nowrap>Thue�<br>sua�t
<td align=center border=1110 rowspan=2>Thue� GTGT
<td align=center border=1110 rowspan=2 width=10>Ghi chu�
<tr bgcolor=#eeeeee repeat=1>
<td align=center border=0110>Ky� hie�u
<td align=center border=0110>So� ho�a ��n
<td align=center border=0110>Nga�y pha�t ha�nh
';
$q = new DB("SELECT * FROM $this->temptable");
$stt = 1;
//Seri, Code, Publish, B.Name,TaxCode,Good, C.Total, TaxRatio, Tax
while ($r = $q->getRowField()) {
	$html .= '<tr>'.
	'<td align=center border=0111 nowrap>'.$stt
	.'<td align=center border=0110 nowrap>'.$r['Seri']
	.'<td align=center border=0110 nowrap>'.$r['Code']
	.'<td align=center border=0110 nowrap>'.date2html($r['Publish'])
	.'<td border=0110>'.VNCode::UTF8VNI($r['Name'])
	.'<td align=center border=0110 nowrap>'.$r['TaxCode']
	.'<td border=0110>'.VNCode::UTF8VNI($r['Good'])
	.'<td align=right border=0110 nowrap>'.so2pc($r['Total'])
	.'<td align=center border=0110 nowrap>'.$r['TaxRatio']
	.'<td align=right border=0110 nowrap>'.so2pc($r['Tax'])
	.'<td border=0110 width=20>&nbsp;'
	;
	$stt++;
}
$p->htmltable($html);
$p->Ln(3);
$time = strftime('Nga�y %d tha�ng %m na�m %Y');
$html = "<table width=$p->width>
<tr><td align=center valign=top height=40>&nbsp;<br>NG���I LA�P BA�NG<br>(Ky� va� ghi ro� ho� te�n)<td align=center valign=top>$time<br>GIA�M �O�C<br>(Ky� va� ghi ro� ho� te�n)
";
$p->htmltable($html);
$p->download('bkhd'.($this->hdvao?'vao':'ra'));
?>