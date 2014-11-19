<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_abogados extends CI_Controller {
 function __construct()
    {
        parent::__construct();
		
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('m_abogados');
    }
  public function index(){
  	echo('hola');
  }
  function reglas(){
    $this->form_validation->set_rules('nombre','nombre','required|min_length[5]');//Reglas de campo requerido
    $this->form_validation->set_rules('apellidoPaterno','apellido paterno','required');//Reglas de campo requerido
    $this->form_validation->set_rules('apellidoMaterno','apellido materno','required');
    $this->form_validation->set_rules('telefono','telefono','required|integer|min_length[8]|max_length[10]');
    $this->form_validation->set_rules('email','correo','required|valid_email');
    $this->form_validation->set_rules('','','trim');//consume los espacios
    $this->form_validation->set_message('required','El Campo: %s, Es Obligatorio');
    $this->form_validation->set_message('valid_email','El Campo: %s, Debe Ser un correo Valido');
    $this->form_validation->set_message('min_length','El Campo: %s, Debe tener al Menos %s Caracteres');
    $this->form_validation->set_message('max_length','El Campo: %s, Debe tener al Maximo %s Caracteres');
    $this->form_validation->set_message('integer','El Campo: %s, Debe ser un Numero Entero');
    
  }
  function verAbogados(){
    $data['resultado']= $this->m_abogados->consultar();
    $this->load->view('vista_abogados',$data);
  }
  function agregarAbogado(){
    if($this->input->post()){
    $this->reglas();
    if($this->form_validation->run()== TRUE){
      $datos_insert = $this->input->post();
        unset($datos_insert['enviar']);
        
        $id_insertado = $this->m_abogados->add($datos_insert);
        redirect('c_abogados/verAbogados');
    }else{
    $this->load->view('agregarAbogado');
    }
      
    }else{  
    $this->load->view('agregarAbogado');}
  }
  function modificarAbogados(){
    $data['resultado']= $this->m_abogados->consultar();
    $this->load->view('modificarAbogados',$data);
  }
  function editar($id){

    if ($id == NULL OR !is_numeric($id)){
      echo 'NO SELECCIONO ID o NO ES NUMERICO';
      return;
    }
    if ($this->input->post()) { 
    $this->reglas();
      if ($this->form_validation->run() == TRUE){
        $datos_update= $this->input->post();
        unset($datos_update['enviar']);
        
        $id_insertado = $this->m_abogados->edit($datos_update,$id);
        redirect('c_abogados/modificarAbogados');
      }else{
        $this->load->view('agregarAbogado');
      }
      
    }else{
      $data['datos_contacto'] = $this->m_abogados->get_por_id($id);
      if (empty($data['datos_contacto'])){
        echo 'ID Invalido';
      }else{
        $this->load->view('agregarAbogado',$data);
      }
    }
  }
  function borrarAbogados(){
    $data['resultado']= $this->m_abogados->consultar();
    $this->load->view('borrarAbogados',$data);
  }
  function borrar($id){
    if ($this->input->post()){
      $id_eliminar = $this->input->post('idabogado');
      $this->m_abogados->borra($id_eliminar);
      redirect('c_abogados/borrarAbogados');
    }else{
      $data['datos_contacto'] = $this->m_abogados->get_por_id($id);
      if (empty($data['datos_contacto'])){
        echo 'ID Invalido';
      }else{
        $this->load->view('vista_borrandoAbogados',$data);
      }
    } 
  }

  }