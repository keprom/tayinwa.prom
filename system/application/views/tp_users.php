<h2> Список фирм по тп </h2>
<table>
<tr><th>Фирма </th><th> Тп </th><th> ture </th><th> ture название </th></tr>
<?php 
$data['r']=$this->db->get('industry.firm');
$data['name']=$this->db->get('firm.name');

?>
</table>