<?php 
function datetostring($date)
{
	$d=explode("-",$date); 
	return $d['2'].'.'.$d['1'].'.'.$d['0'];
}
function f_d($var)
{
	if ($var==0) return "&nbsp;"; else
	return sprintf("%22.2f",round($var*100)/100);
}
function f_d2($var)
{
	if ($var==0) return "&nbsp;"; else
	return sprintf("%22.2f",round($var*100)/100);
}
function datetostring2($date)
{
	$d=explode("-",$date); 
	 
	if ($d['1']==1) {$d['1']='январь';}
	if ($d['1']==2) {$d['1']='февраль';}
	if ($d['1']==3) {$d['1']='март';}
	if ($d['1']==4) {$d['1']='апрель';}
	if ($d['1']==5) {$d['1']='май';}
	if ($d['1']==6) {$d['1']='июнь';}
	if ($d['1']==7) {$d['1']='июль';}
	if ($d['1']==8) {$d['1']='август';}
	if ($d['1']==9) {$d['1']='сентябрь';}
	if ($d['1']==10) {$d['1']='октябрь';}
	if ($d['1']==11) {$d['1']='ноябрь';}
	if ($d['1']==12) {$d['1']='декабрь';}
	
	return $d['1'].' '.$d['0'];
}
?>
<html>
<head>
<title>Счет на оплату</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<font size=7>
 <table width=100% >
 <tr>
 <td align=left> <center><b>СЧЕТ<?php echo $schet;?> №</b>
<?php echo "0".($number).' от ';
if (strlen($data_schet)==0){ echo datetostring($schetfactura_date->date);} else { echo $data_schet;}?>
 </center> </td>
 <td> (1)</td>
 </tr>
 
 <tr>
 <td width=2100px> <b>Поставщик</b> <u><?php echo $org->org_name; ?></u>
 
 </td>
 <td> (2)</td>
 </tr>
 <tr >
 <td width=2100px> БИН и адрес местнахождения поставщика <?php echo " <u>".$org->bin." ".$org->address;?></u>
 </td>
 <td> (2а)</td>
 </tr>
 <tr>
 <td width=2100px> Расчетный счет поставщика <u><?php echo $org->IIK;?> КБЕ-<?php echo $org->Bank_kbe;?> КНП-<?php echo $org->bank_knp;?> <?php echo $org->bank_name; ?>              
 БИК <?php echo $org->bank_bik;?></u></td>
 <td> (2б)</td>
 </tr>
 <tr>
 <td width=2100px> Свидетельство о постановке на регистрационный учет по НДС <?php echo $org->svidetelstvo_nds;?> </td>
 <td></td>
 </tr>
 <tr>
 <td width=2100px>
 Договор(контракт) на поставку товаров (работ, услуг) №<u>   <?php if (strlen($firm->schet_dog)==0) { echo $firm->dogovor."   </u> от <u>    ".datetostring($firm->dogovor_date);} else echo $firm->schet_dog?></u></td>
 <td> (3)</td>
 </tr>
 <tr>
 <td width=2100px> Условия оплаты по договору (контракту)<u><?php echo $firm->edit1; ?>                                                                                                                             </u></td>
 <td> (3а)</td>
 </tr>
 <tr>
 <td width=2100px> Пункт назначения поставляемых товаров (работ, услуг)<u><?php echo $firm->edit2; ?>                                                                                                                                           </u></td>
 <td> (4)</td>
 </tr>
 <tr align=right>
 <td width=2100px><i><FONT size=1>(государство, регион, область, город, район)                                                                         </font> </i>                          </td>
 <td> </td>
 </tr>
  <tr>
 <td width=2100px> Поставка товаров осуществлена по доверенности №<u><?php echo $firm->edit3; ?>                                                       </u></td>
 <td> (5)</td>
 </tr>
 <tr>
 <td width=2100px> Способ отправления <u><?php echo $firm->edit4; ?>                                                                                                                                                    </u></td>
 <td> (6)</td>
 </tr>
 <tr>
 <td width=2100px> Товарно-транспортная накладная №<?php
echo "0".($schetfactura_date->id);?> </td>
 <td> (7)</td>
 </tr>
 <tr>
 <td width=2100px> Грузоотправитель <u><?php echo $firm->edit5; ?>                                                                                                                     </u></td>
 <td> (8)</td>
 </tr>
 <tr align=right>
 <td width=2100px><i><FONT size=1>(РНН, наименование и адрес места нахождения)                                                                                                                        </font></i></td>
 <td> </td>
 </tr>
 <tr>
 <td width=2100px> Грузополучатель  <u><?php echo $firm->edit6; ?>                                                                                                                     </u>   </td>
 <td> (9)</td>
 </tr>
 <tr align=right>
 <td width=2100px><i><FONT size=1>(РНН, наименование и адрес места нахождения)                                                                                                                        </font></i></td>
 <td> </td>
 </tr>
  <tr>
 <td width=2100px> Получатель <u><?php echo "{$firm->name}"; ?>                </u></td>
 <td> (10)</td>
 </tr>
 <tr>
 <td width=2100px> РНН, БИН и адрес местонахождения получателя   <u><?php echo $firm->rnn.", ".$firm->bin." ".$firm->address; ?></u></td>
 <td> (10а)</td>
 </tr>
 <tr>
 <td width=2100px> Расчетный счет получателя <u><?php echo $firm->raschetnyy_schet;?></u> в банке <u><?php echo $bank->name;?></u></td>
 <td> (10б)</td>
 </tr>
 </table>
 <table cellSpacing=0 border=1>
 <TR>
    <TD vAlign=center align=middle rowSpan=2><FONT size=2>№ п/п</FONT> 
    <TD vAlign=center align=middle rowSpan=2><FONT size=2>Наименование товаров 
      (работ, услуг)</FONT> 
    <TD vAlign=center align=middle rowSpan=2><FONT size=2>Ед. изм.</FONT> 
    <TD vAlign=center align=middle rowSpan=2><FONT size=2>Кол-во 
      (объем)</FONT> 
    <TD vAlign=center align=middle rowSpan=2><FONT size=2>Цена тенге</FONT> 
    <TD vAlign=center align=middle rowSpan=2><FONT size=2>Стоимость товаров 
      (работ, услуг) без НДС</FONT> 
    <TD vAlign=center align=middle colSpan=2><FONT size=2>НДС</FONT> 
    <TD vAlign=center align=middle rowSpan=2><FONT size=2>Всего стоимость 
      реализации</FONT> 
    <TD vAlign=center align=middle colSpan=2><FONT size=2>Акциз</FONT> </TD>
  <TR>
    <TD vAlign=center align=middle><FONT size=2>Ставка</FONT> 
    <TD vAlign=center align=middle><FONT size=2>Сумма</FONT> 
    <TD vAlign=center align=middle><FONT size=2>Ставка</FONT> 
    <TD vAlign=center align=middle><FONT size=2>Сумма</FONT> </TD>
  <TR>
    <TD vAlign=center align=middle><FONT size=1><I>1</I></FONT> 
    <TD vAlign=center align=middle><FONT size=1><I>2</I></FONT> 
    <TD vAlign=center align=middle><FONT size=1><I>3</I></FONT> 
    <TD vAlign=center align=middle><FONT size=1><I>4</I></FONT> 
    <TD vAlign=center align=middle><FONT size=1><I>5</I></FONT> 
    <TD vAlign=center align=middle><FONT size=1><I>6</I></FONT> 
    <TD vAlign=center align=middle><FONT size=1><I>7</I></FONT> 
    <TD vAlign=center align=middle><FONT size=1><I>8</I></FONT> 
    <TD vAlign=center align=middle><FONT size=1><I>9</I></FONT> 
    <TD vAlign=center align=middle><FONT size=1><I>10</I></FONT> 
    <TD vAlign=center align=middle><FONT size=1><I>11</I></FONT> </TD>
	<?php $sum_bez_nds=0;$sum_nds=0;$sum=0;$i=1;
	for($j=0;$j<$tariff_count;$j++):  
	if ($tariff_kvt[$j]==0) continue;
	?>
	<TR>
		<TD vAlign=center align=middle><FONT size=1><?php echo $i++;?> </FONT> 
		<TD vAlign=center align=middle><FONT size=1><?php if (strlen($firm->electric)=='') {echo "Электроэнергия";} else {echo $firm->electric;} ?> за <?php echo datetostring2($schetfactura_date->date);?> года</FONT> 
		<TD vAlign=center align=middle><FONT size=1>кВт*ч</FONT> 
		<TD vAlign=center align=middle><FONT size=1> 
		<?php echo f_d($tariff_kvt[$j]); ?> </FONT> 
		<TD vAlign=center align=middle><FONT size=1> 
		<?php echo f_d($tariff_value[$j]);?> </FONT> 
		<TD vAlign=center align=middle><FONT size=1> 
		<?php 
		echo f_d($tariff_kvt[$j]*$tariff_value[$j]);
		$sum_bez_nds+=f_d2($tariff_kvt[$j]*$tariff_value[$j]);	
		?> </FONT> 
		<TD vAlign=center align=middle><FONT size=1> <?php echo f_d($period->nds);?> </FONT> 
		<TD vAlign=center align=middle><FONT size=1> 
		<?php echo f_d($period->nds*$tariff_kvt[$j]*$tariff_value[$j]/100);
		$sum_nds+=$period->nds*$tariff_kvt[$j]*$tariff_value[$j]/100;?> 
		</FONT> 
		<TD vAlign=center align=middle><FONT size=1> 
		<?php echo 
		f_d(($period->nds+100)*$tariff_kvt[$j]*$tariff_value[$j]/100);
		$sum+=($period->nds+100)*$tariff_kvt[$j]*$tariff_value[$j]/100;?> 
		</FONT> 
		<TD vAlign=center align=middle><FONT size=1>0</FONT> 
		<TD vAlign=center align=middle><FONT size=1>0</FONT> </TD>
<?php endfor;?>
  <TR>
    <TD align=left colSpan=5><FONT size=2><B>Всего по счету:</B></FONT> 
    <TD align=right><FONT size=2><B>&nbsp;<?php echo f_d2($sum_bez_nds);?></B></FONT> 
    <TD align=right bgColor=#c0c0c0><FONT size=2>&nbsp;</FONT> 
    <TD align=right><FONT size=2><B>&nbsp;<?php echo f_d2($sum_nds);?></B></FONT> 
    <TD align=right><FONT size=2><B>&nbsp;<?php echo f_d2($sum_bez_nds + $sum_nds);?></B></FONT> 
    <TD align=right bgColor=#c0c0c0><FONT size=2>&nbsp;</FONT> 
    <TD align=right><FONT size=2><B>&nbsp;</B></FONT> </TD>
 
 </table>
  <td align=center>
 <font size=4>
 <?php echo num2str(f_d2($sum_bez_nds + $sum_nds));?></font>
 </td>
	<br>
	<table width=100%  >
	<tr>
	<td align=left>Директор</td><td align=right>ВЫДАЛ (ответственное лицо поставщика) </td>
	</tr>
	<tr>
	<td align=left><?php echo $org->director; ?>____________</td><td align=right>Инженер Баранников Д.А. ____________________________</td>
	</tr>
	<tr>
	<td align=left>(Ф.И.О., подпись)</td><td align=right>(Ф.И.О., подпись)</td>
	</tr>
	<tr>
	<td align=left>&nbsp; </td><td align=right>&nbsp;</td>
	</tr>
	
	<tr>
	<td align=left>Главный бухгалтер организации</td><td align=right>Бухгалтер потребителя&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	</tr>
	<tr>
	<td align=left><?php echo $org->glav_buh; ?>_______________</td><td align=right>___________________</td>
	</tr>
	<tr>
	<td align=left>(Ф.И.О., подпись)</td><td align=right>(Ф.И.О., подпись)</td>
	</tr>
	<tr>
	<td align=left><br /</td><td ></td>
	</tr>
	</table>
	</font>
</body>
</html>