<?php
class M_abogados extends CI_Model {
	function __construct()
    {
        parent::__construct();
		$this->load->database();	
    }
function consultar(){
	$query=$this->db->get('abogado');
	return $query->result();
}
function borra($id){
		$this->db->where('idabogado',$id);
		$this->db->delete('abogado');
}
function get_por_id($id){
		$this->db->where('idabogado',$id);
		$query = $this->db->get('abogado');
		return $query->result();
}
function edit($data,$id){
		$this->db->where('idabogado',$id);
		$this->db->update('abogado',$data);
		
	}
function add($data){
	$this->db->insert('abogado', $data); 
		return $this->db->insert_id();		
}
}
?>