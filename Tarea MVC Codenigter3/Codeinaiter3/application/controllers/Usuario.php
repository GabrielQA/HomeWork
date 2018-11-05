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
    public function delete($id = NULL){
if($id!=NULL){
    $this->Model_Usuario->deleteUsuario($id);
    redirect('');
}
    }
    public function edit($id = NULL){
        if($id !=NULL){
        $data['contenido']='usuario/edit';
        $data['selPerfil'] = $this->Model_Usuario->selPerfil();
        $data['datosUsuario']=$this->Model_Usuario->editUsuario($id);
        $this->load->view('plantilla',$data);
        }else{
           redirect(''); 
        }
    
    }
    public function update(){
        $datos =$this->input->post();
        if(isset($datos)){
            $txtUsuid=$datos['txtUsuid'];
            $txtPerid = $datos['txtPerid'];
            $txtNombres = $datos['txtNombres'];
            $txtApellidos = $datos['txtApellidos'];
            $txtCorreo = $datos['txtCorreo'];
            $txtTelefono = $datos['txtTelefono'];
            $this->Model_Usuario->updateUsuario($txtUsuid,$txtPerid,$txtNombres,$txtApellidos,$txtCorreo,$txtTelefono);
            redirect('');
        }
    }

}


?>