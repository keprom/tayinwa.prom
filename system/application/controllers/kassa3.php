<?php
class Kassa3 extends Controller
{
	function index()
	{
		$this->load->view("kassa3/view");
	}
	function add_oplata()
	{
		$this->db->where("number",$_POST['number']);
		$abonent=$this->db->get("kassa.abonent");
		$data["abonent"]=
			($abonent->num_rows>0?$abonent:NULL);
		$data["abonent_number"]=$_POST['number'];
		
		$this->db->order_by('name');
		$data['street']=$this->db->get("kassa.street");
		
		$this->load->view("kassa3/add_oplata",$data);
	}
	function adding_oplata()
	{
		$this->session->set_userdata(array('kassa_data3'=>$_POST['data']));
		$this->db->insert('kassa.oplata3',$_POST);
		redirect('kassa3/index');
	}
	function view_oplata()
	{
		$data['data']=$_POST['data'];
		$this->db->where ('data',$_POST['data']);
		$data['oplata']=$this->db->get('kassa.oplata_view3');
		$this->load->view('kassa3/oplata_list',$data);
	}
	
	function delete_oplata()
	{
		$this->db->where('id',$this->uri->segment(3));
		$this->db->delete('kassa.oplata3');
		redirect('kassa3/index');
	}
	
}

?>