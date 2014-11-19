<?php
class M_usuarios extends CI_Model {
function consultar(){
	$this->load->database();
	$query=$this->db->get('casos');
	return $query->result();


}
function iniciarSesion($usu,$pass){//funcion para buscar el usuario xD
		$this->load->database();
		$this->db->select('rol');
		$this->db->where('usuario',$usu);
		$this->db->where('password',$pass);
		$consulta=$this->db->get('usuarios');
     		return $consulta->result();
   		
}
function borra($id){
		$this->load->database();
		$this->db->where('idcasos',$id);
		$this->db->delete('casos');
}
function get_por_id($id){
		$this->load->database();
		$this->db->where('idcasos',$id);
		$query = $this->db->get('casos');
		return $query->result();
}
function edit($data,$id){
		$this->load->database();
		$this->db->where('idcasos',$id);
		$this->db->update('casos',$data);
		
	}
function get_abogados(){
	$this->load->database();
    $query = $this->db-> query('SELECT idabogado,nombre FROM abogado');
    if ($query->num_rows() > 0) {
        foreach($query->result() as $row)
           $arrDatos[htmlspecialchars($row->idabogado, ENT_QUOTES)] = 
			htmlspecialchars($row->nombre, ENT_QUOTES);
        	$query->free_result();
        return $arrDatos;
     }
}
function get_clientes(){
	$this->load->database();
    $query = $this->db-> query('SELECT id,nombre FROM clientes');
    if ($query->num_rows() > 0) {
        foreach($query->result() as $row)
           $arrDatos[htmlspecialchars($row->id, ENT_QUOTES)] = 
			htmlspecialchars($row->nombre, ENT_QUOTES);

        $query->free_result();
        return $arrDatos;
     }
}
function add($data){
	$this->db->insert('casos', $data); 
		return $this->db->insert_id();		
}
}
?>