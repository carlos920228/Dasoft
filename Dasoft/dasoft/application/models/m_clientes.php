<?php
class M_clientes extends CI_Model {
  function __construct()
    {
        parent::__construct();
    $this->load->database();  
    }
function consultar(){
  $query=$this->db->get('clientes');
  return $query->result();
}
function borra($id){
    $this->db->where('id',$id);
    $this->db->delete('clientes');
}
function get_por_id($id){
    $this->db->where('id',$id);
    $query = $this->db->get('clientes');
    return $query->result();
}
function edit($data,$id){
    $this->db->where('id',$id);
    $this->db->update('clientes',$data);
    
  }
function add($data){
  $this->db->insert('clientes', $data); 
    return $this->db->insert_id();    
}
}
?>