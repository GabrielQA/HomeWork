<?php
class Usuario extends CI_Controller{
    function __construct(){
        parent::__construct();
        //comunicacion con el modelo
        $this->load->model('Model_Usuario');
    }
    public function index(){
        $data['contenido'] ="usuario/index";//enviar a la plantilla index usuario
        $data['selPerfil'] = $this->Model_Usuario->selPerfil();
        $data['listaUsuario'] = $this->Model_Usuario->listUsuario();

        $this->load->view("plantilla", $data);
    }
    public function insert(){
        $datos =$this->input->post();
        if(isset($datos)){
        $txtId = $datos['txtIdper'];
        $txtNombres = $datos['txtNombres'];
        $txtApellidos = $datos['txtApellidos'];
        $txtCorreo = $datos['txtCorreo'];
        $txtTelefono = $datos['txtTelefono'];
        $this->Model_Usuario->insertUsuario($txtId,$txtNombres,$txtApellidos,$txtCorreo,$txtTelefono);
        redirect('');
    }
    }
}


?>