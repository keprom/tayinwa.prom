<?php 
function datetostring($date)
{
	$d=explode("-",$date); 
	return $d['2'].'.'.$d['1'].'.'.$d['0'];
}
function f_d($var)
{
	if (($var==0)or($var==NULL)) return "0.00"; else
	return sprintf("%22.2f",$var);
}
function f_d3($var)
{
	if (($var==0)or($var==NULL)) return "0.000"; else
	return sprintf("%22.3f",$var);
}

?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
<table border=0 width='100%' cellspacing='10px'>
<tr>
<td>

<table width='100%' border=0>
<tr>
	<td >
	
	</td>
	<td >
		<p align=right>
		Форма Р-1	
		</p>
	</td>
</tr>
</table>
</td></tr><tr><td>
<table width='100%' border=1px cellspacing=0 cellpadding=0>
<tr>
	<td>
	
		<table width='2100px' cellspacing='7px'>
			<tr>
				<td width='1400px'>
				</td>
				<td width='700px'>
					<p align=center>ИИН/БИН</p>
				</td>
			</tr>
			<tr>
				<td width='1620px'>
					<p align='right'><u><font size="7">Заказчик 
					<?php 
					echo " "."{$firm->name}"." ".$firm->address; 
					?></u></font>
					</p>
				</td>
				<td width='300px'>
					<table border="1" cellspacing="0" cellpadding="0" width="90%" height="30%">
						<tr valign="top" height="30">
							<td width='280px'>
							<?php
							echo $firm->bin; 
							?>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td width='1620px'>
					<p align=center><sup>полное наименование, адрес, данные о средствах связи</sup></p>
				</td>
				<td width='147px'>
								</td>
			</tr>
			<tr>
				<td width='1620px'>
					<p align='right'><u><font size="7">Исполнитель
					<?php 
					echo $org->org_name." ".$org->address;
					?>
					</font></u></p>
				</td>
				<td width='300px'>
							<table border="1" cellspacing="0" cellpadding="0" width="90%" height="30%">
								<tr>
									<td width='280px'>
									
									<?php 
									echo $org->bin;
									?> 
									
									</td>
								</tr>
							</table>
				</td>
			</tr>
			<tr>
				<td width='1620px'>
					<p align=center><sup>полное наименование, адрес, данные о средствах связи</sup></p>
				</td>
				<td width='147px'>
				</td>
			</tr>
			<tr>
				<td width='1620px'>
					<p align='right'><font size="8" >
					<?php 
					echo "Договор №".$firm->dogovor." от ".datetostring($firm->dogovor_date); 
					?> г.
					 </font></p>
				</td>
				<td width='147px'>
				</td>
			</tr>
		
			
		</table>
		
	
	</td>
	
</tr>
</table>

</td></tr></table>
<table width="100%"><tr>
<td width='500px'></td>
			
				<td width='1120px'>
					<table border="1" cellspacing="0" cellpadding="0" width="90%" height="30%" align=center>
					<tr align=center>
									<td width='380px'><font size="7">
									
									<?php 
									echo "Номер документа";
									?></font> 
									</td>
								
									<td width='400px'><font size="7">
									
									&nbsp;&nbsp;Дата составления 
									</font></td>
								</tr>
							</table>
						
				</td>
				
			<td><font size="7">Отчетный период</font></td>
</tr></table>
<table width="100%"><tr>
<td width='500px'></td>
			
				<td width='1000px'>
					<table border="0" cellspacing="0" cellpadding="0" width="90%" height="30%">
					<tr>
									<td width='430px'>
									<p align=center><u>
									<?php 
									echo $schetfactura_date->id;
									?> </u></p>
									</td>
								
									<td width='300px'>
									<p align=center><u>
					<?php 
					if (strlen($data_schet)==0){ 
						echo datetostring($schetfactura_date->date);
						} 
						else 
						{
							echo $data_schet; 
							}
						?> 
						</u></p>
									</td>
								</tr>
							</table>
						
				</td>
				
			<td width='230px'>
					<?php
						echo datetostring($period->begin_date);
						?>	
					</td>
					<td width='300px' align=center>
							<?php
						echo "по ".datetostring($period->end_date);
						?>
					</td>
</tr></table>
<p align=center><b>Акт выполненных работ(Оказанных услуг)*</b></p>
 <table border="1px" width="100%" align="center" > 
 <tr>
	<td rowspan="2" width="60px"valign="middle">№</td>
	<td rowspan="2" width="300px"valign="middle">Наименование работ(услуг)</td>
	<td rowspan="2" width="800px"valign="middle">Сведения о наличие отчета о маркетинговых исследованиях, консультационных и прочих услуг(дата, номер, количество страниц)</td>
	<td rowspan="2" width="200px"valign="middle">Единица измерения</td>
	<td colspan="3" width="780px"valign="middle">Выполнено работ(оказано услуг)</td>
</tr>
<tr>
	<td width="260px"valign="middle">Количество</td>
	<td width="260px"valign="middle">Цена за единицу</td>
	<td width="260px"valign="middle">Стоимость</td>
</tr>
	<tr>
		<td width='60px' align=center>
			1
		</td>
		<td width='300px' align=center>
			2
		</td>
		<td width='800px' align=center>
			3
		</td>
		<td width='200px' align=center>
			4
		</td>
		<td width='260px' align=center>
			5
		</td>
		<td width='260px' align=center>
			6
		</td>
		<td width='260px' align=center>
			7
		</td>
	</tr>
	<?php 
$sum_bez_nds=0;$sum_nds=0;$sum=0;$i=1;

$i_t=$itog->itog_tenge;
$i_nds=$itog->itogo_nds;
$i_itogo=$itog->itogo_with_nds;

foreach($s as $s2 ): 
?>	
<tr>
		<td width='60px' align=center>
			<p>
			<?php 
			echo $i++;
			?>
			</p>
		</td>
		<td width='300px' align=center>
			<p>Электроэнергия</p>
		</td>
		<td width='800px' align=center>
			<p>Нет</p>
		</td>
		<td width='200px' align=center>
			<p>кВт</p>
		</td>
		<td width='260px' align=center>
			<p>
			<?php 
			echo f_d($s2->kvt);
			?>
			</p>
		</td>
		<td width='260px' align=center>
			<p>
			<?php 
			echo f_d3($s2->tariff_value);
			?>
			</p>
		</td>
		<td width='260px' align=center>
			<p>
			<?php
		if ($i_t-$s2->tenge>1)
		{
			echo f_d($s2->tenge);
			$sum_bez_nds+=$s2->tenge;
			$i_t-=f_d($s2->tenge);
		}
		else echo $i_t;
	?>
	</p>
		</td>
	</tr>
	
	<?php 
	endforeach;
	?>
	
			<tr>
		<th width='60px' >
			<p>&nbsp; </p>
		</th>
		<th width='300px' >
			<p>&nbsp; </p>
		</th>
		<th width='800px' >
			<p>&nbsp; </p>
		</th>
		<th width='200px' >
			<p>Итого</p>
		</th>
		<th width='260px' >
			<p>&nbsp; </p>
		</th>
		<th width='260px' >
			<p></p>
		</th>
		<th width='260px' >
			<p>
			<?php
			echo f_d($itog->itog_tenge);
			?>
			</p>
		</th>
	</tr>
	</table>
	<br/>
	<table>
	<tr>
	
		<th width='60px' >
			<p>&nbsp; </p>
		</th>
		<th width='300px' >
			<p>&nbsp; </p>
		</th>
		<th width='800px' >
			<p>&nbsp; </p>
		</th>
		<th width='200px' >
			<p>В т.ч. НДС</p>
		</th>
		<th width='260px' >
			<p>&nbsp; </p>
		</th>
		<th width='260px' >
			<p></p>
		</th>
		<th width='260px' >
			<p>
			<?php
			echo f_d($itog->itogo_with_nds);
			?>
			</p>
		</th>
	</tr>
</table>
<br/>
<table width='2100px' border=0px cellspacing=0 cellpadding=0>
	<tr>
		<td width='1000px'>
			<p><font size="7">Сведения об использовании запасов, полученных от заказчика</font></p>
		</td>
		<td width='1300px'>
			<p>_______________________________________________________________</p>
		</td>
	</tr>
	<tr>
		<td width='1200px'>
		</td>
		<td width='800px'>
			<p align=center><sup>наименование, количество, стоимость</sup></p>
		</td>
	</tr>
	</table>
	<table width='2100px' border=0px cellspacing=0 cellpadding=0>
	<tr>
		<td width='2100px'>
			<p><font size="7">Приложение: Перечень документации  _______________________________________________________________________________________________</font></p>
		</td>
	</tr>
</table>
<br/>
<table width='2100px' border=0px cellspacing=0 cellpadding=0>
	
	<tr>
		
		
		
		<td width='1050px'>
			<table width='1050px' border=1px cellspacing=0 cellpadding=0>
				<tr>
					<td width='1050px'>
						<table width='1050x' border=0px cellspacing=0 cellpadding='5px'>
							<tr>
								<td width='1050x' colspan=3>
									<p>
									Сдал (Исполнитель)
									</p>
								</td>
							</tr>
							<tr><td></td></tr>
							<tr>
								<td width='500px' align=center>
									<p>_______________________</p>
									
								</td><td width='100px'><table border=1px align='center'><tr><td><p align="center">МП</p></td></tr></table></td>
								</tr><tr><td width='400px' align=center>
									<p align=center><sup>(должность)</sup></p>
								</td></tr><tr>
								<td width='1000px' align=center >
									<p>_______________________</p>
								</td>
								
								</tr><tr><td width='400px' align=center>
									<p align=center><sup>(ФИО, подпись)</sup></p>
								</td></tr>
							
						</table>
					</td>
				</tr>
			</table>
			
		</td>
		<td width='250px'>
		</td>
		<td width='500px'>
					<table width='500px' border=1px cellspacing=0 cellpadding=0>
				<tr>
					<td width='500x'>
									<table width='px' border=0px cellspacing=0 cellpadding='5px'>
							<tr>
								<td width='500px' colspan=2>
									<p>
									Принял (Заказчик)
									</p>
								</td>
							</tr>
							<tr><td></td></tr>
							<tr>
								<td width='500px' align=center>
									<p>________________________</p>
								</td><td width='100px'><table border=1px align='center'><tr><td><p align="center">МП</p></td></tr></table></td>
								</tr><tr><td width='400px' align=center>
									<p align=center><sup>(должность)</sup></p>
								</td></tr><tr>
								<td width='1000px' align=center>
									<p>________________________</p>
								</td></tr><tr>
								<td width='400px' align=center>
									<p align=center><sup>(ФИО, подпись)</sup></p>
								</td></tr>
								
							
							
						</table>
											</td>
				</tr>
			</table>
				
		</td>
	</tr>
	<tr><td width='2100'>

<h5>* Применяется для приемки-передачи выполненных работ (оказанных услуг), за исключением строительно-монтажных работ.</h5>
	
</td></tr>
</table>
</body>
</html>