<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_usuarios extends CI_Controller {
 function __construct()
    {
        parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('m_usuarios');
    }
	function reglas(){
		$this->form_validation->set_rules('nombreCaso','Nombre del caso','required');
		$this->form_validation->set_rules('fechaApertura','Fecha apertura','required');
		$this->form_validation->set_rules('estado','Estado','required');
		$this->form_validation->set_rules('archivoFisico','Ubicacion archivo fisico','required');
		$this->form_validation->set_rules('juzgado','Juzgado','required');
		$this->form_validation->set_rules('','','trim');//consume los espacios
		$this->form_validation->set_message('required','El Campo: %s, Es Obligatorio');
	    $this->form_validation->set_message('valid_email','El Campo: %s, Debe Ser un correo Valido');
    	$this->form_validation->set_message('min_length','El Campo: %s, Debe tener al Menos %s Caracteres');
   		$this->form_validation->set_message('max_length','El Campo: %s, Debe tener al Maximo %s Caracteres');
	    $this->form_validation->set_message('integer','El Campo: %s, Debe ser un Numero Entero');
	}
	function reglas2(){
		$this->form_validation->set_rules('usuario','usuario','required|min_length[4]');//Reglas de campo requerido
		$this->form_validation->set_rules('password','contrasenia','required');//Reglas de campo requerido
		$this->form_validation->set_message('required','El Campo: %s, Es Obligatorio');
		$this->form_validation->set_message('min_length','El Campo: %s, Debe tener al Menos %s Caracteres');
	}
	public function index(){
		if($this->input->post()){
		$this->reglas2();
		if($this->form_validation->run()== TRUE){
		$datos=$this->input->post();
		$usu=$this->input->post('usuario');//obtenemos el nombre del usuario
		$pass=$this->input->post('password');//obtenemos el pass del usuario
		$rol=$this->m_usuarios->iniciarSesion($usu,$pass);//mandamos a llamar la funcion del modelo m_usuarios
		if(empty($rol)){
			echo "Usuario invalido";
		}else{
		if($rol->rol == 'abogado'){
		$this->load->view('menuAdmin');
		}else{
			echo "Aun estamos trabajando en tu menu, por ahora no esta listo.<br/>";
			echo "aun debes esperar";
		}
		}
			
		}else{	
		$this->load->view('inicioSesion');}
		}else{	
		$this->load->view('inicioSesion');}
	}
	function agregarCaso(){
		if($this->input->post()){
		$this->reglas();
		if($this->form_validation->run()== TRUE){
			echo('agregado');
		
		}else{
		$this->load->view('agregarCaso');
		}
			
		}else{	
		$this->load->view('agregarCaso');}
	}
	function agregarCaso2(){
		$datos['abogados'] = $this->m_usuarios->get_abogados();
		$datos['clientes'] = $this->m_usuarios->get_clientes();
		if($this->input->post()){
		$this->reglas();
		if($this->form_validation->run()== TRUE){
			$datos_insert = $this->input->post();
        	unset($datos_insert['enviar']);
            $id_insertado = $this->m_usuarios->add($datos_insert);
			echo('agregado');
		
		}else{
		$this->load->view('vista_agregarCaso',$datos);
		}
			
		}else{	
		$this->load->view('vista_agregarCaso',$datos);}
	}
	function verCasos(){
		$data['resultado']= $this->m_usuarios->consultar();
		$this->load->view('vista_casos',$data);
	}
	function borrarCasos(){
		$data['resultado']= $this->m_usuarios->consultar();
		$this->load->view('vista_borrarCasos',$data);
	}
	function modificarCasos(){
		$data['resultado']= $this->m_usuarios->consultar();
		$this->load->view('vista_EditarCasos',$data);
	}
	function eliminar($id = NULL){
		
		if ($id == NULL OR !is_numeric($id)){
			echo 'NO SELECCIONO ID o NO ES NUMERICO';
			return;

		}
	
		if ($this->input->post()){
			$id_eliminar = $this->input->post('idcasos');
			$this->m_usuarios->borra($id_eliminar);
			redirect('c_usuarios/borrarCasos');
		}else{
			$data['datos_contacto'] = $this->m_usuarios->get_por_id($id);
			if (empty($data['datos_contacto'])){
				echo 'ID Invalido';
			}else{
				$this->load->view('vista_borrando',$data);
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
        			$this->m_usuarios->edit($datos_update,$id);
        			redirect('c_usuarios/modificarCasos');
      			}else{
        			$this->load->view('agregarCaso');
      			}
      
    	}else{
      		$data['datos_contacto'] = $this->m_usuarios->get_por_id($id);
      			if (empty($data['datos_contacto'])){
        			echo 'ID Invalido';
      			}else{
        		$this->load->view('agregarCaso',$data);
      			}
      	}
	}
}