<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class C_clientes extends CI_Controller {
 function __construct()
    {
        parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('m_clientes');
    }
function reglas(){
		$this->form_validation->set_rules('rfc','RFC','required');
		$this->form_validation->set_rules('nombre','Nombre','required|min_length[4]');
		$this->form_validation->set_rules('apellidoPaterno','Apellido Parteno','required|min_length[5]');
		$this->form_validation->set_rules('apellidoMaterno','Apellido Materno','required|min_length[5]');
		$this->form_validation->set_rules('colonia','Colonia','required||min_length[5]');
		$this->form_validation->set_rules('calle','Calle','required|min_length[5]');
		$this->form_validation->set_rules('numero','Numero','required|integer|max_length[4]');
		$this->form_validation->set_rules('','','trim');//consume los espacios
		$this->form_validation->set_message('required','El Campo: %s, Es Obligatorio');
	    $this->form_validation->set_message('valid_email','El Campo: %s, Debe Ser un correo Valido');
    	$this->form_validation->set_message('min_length','El Campo: %s, Debe tener al Menos %s Caracteres');
   		$this->form_validation->set_message('max_length','El Campo: %s, Debe tener al Maximo %s Caracteres');
	    $this->form_validation->set_message('integer','El Campo: %s, Debe ser un Numero Entero');
	}
public function index(){
  	echo('hola');
  }
function agregarCliente(){
		if($this->input->post()){
		$this->reglas();
		if($this->form_validation->run()== TRUE){
		$datos_insert = $this->input->post();
        unset($datos_insert['enviar']);
        $id_insertado = $this->m_clientes->add($datos_insert);
	    redirect('c_clientes/verClientes');
		}else{
		$this->load->view('vista_agregar_cliente');
		}
		}else{	
		$this->load->view('vista_agregar_cliente');}
}

function verClientes(){
	$data['resultado']= $this->m_clientes->consultar();
		$this->load->view('vista_clientes',$data);
}
function borrarClientes(){
		$data['resultado']= $this->m_clientes->consultar();
		$this->load->view('vista_borrarClientes',$data);
	}
function modificarClientes(){
		$data['resultado']= $this->m_clientes->consultar();
		$this->load->view('vista_editarClientes',$data);
	}
function eliminar($id = NULL){
		
		if ($id == NULL OR !is_numeric($id)){
			echo 'NO SELECCIONO ID o NO ES NUMERICO';
			return;

		}
	
		if ($this->input->post()){
			$id_eliminar = $this->input->post('id');
			$this->m_clientes->borra($id_eliminar);
			redirect('c_clientes/borrarClientes');
		}else{
			$data['datos_contacto'] = $this->m_clientes->get_por_id($id);
			if (empty($data['datos_contacto'])){
				echo 'ID Invalido';
			}else{
				$this->load->view('vista_borrandoCliente',$data);
			}
		}	
	}
function editar($id = NULL){
		if ($id == NULL OR !is_numeric($id)){
      		echo 'NO SELECCIONO ID o NO ES NUMERICO';
      		return;
       	}
    	if ($this->input->post()) { 
    		$this->reglas();
      			if ($this->form_validation->run() == TRUE){
        			$datos_update= $this->input->post();
        			unset($datos_update['enviar']);
        			$this->m_clientes->edit($datos_update,$id);
        			redirect('c_clientes/modificarClientes');
      			}else{
        			$this->load->view('vista_agregar_cliente');
      			}
      
    	}else{
      		$data['datos_contacto'] = $this->m_clientes->get_por_id($id);
      			if (empty($data['datos_contacto'])){
        			echo 'ID Invalido';
      			}else{
        		$this->load->view('vista_agregar_cliente',$data);
      			}
      	}

}
}
