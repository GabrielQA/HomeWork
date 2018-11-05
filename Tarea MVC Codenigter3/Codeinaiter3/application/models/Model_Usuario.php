<?php 

class Model_Usuario extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function selPerfil(){
        $query = $this->db->query("Select * from perfil");
        //retornamos todos los registros de la tabla perfil
        return $query->result();
    }
    public function insertUsuario($idper, $nombres,$apellidos,$correos,$telefonos){
        $arrayDatos = array(
            'per_id'=>$idper,
            'usu_nombres'=>$nombres,
            'usu_apellidos'=>$apellidos,
            'usu_correo'=>$correos,
            'usu_telefono'=>$telefonos
        );
        $this->db->insert('usuario',$arrayDatos);
    }
    public function listUsuario(){
        $query = $this->db->query("SELECT * FROM usuario u inner join perfil p on u.per_id=p.per_id");
        return $query->result();
    }
    public function deleteUsuario($id){
        $this->db->where('usu_id',$id);
        $this->db->delete('usuario');
    }
    public function editUsuario($id){
        $consulta=$this->db->query("SELECT * FROM usuario u inner join perfil p on u.per_id = p.per_id WHERE u.usu_id = $id");      
    return $consulta->result();
    }
    public function updateUsuario($txtUsuid,$txtPerid,$txtNombres,$txtApellidos,$txtCorreo,$txtTelefono){
    $array = array(
        'per_id'=>$txtPerid,
        'usu_nombres'=>$txtNombres,
            'usu_apellidos'=>$txtApellidos,
            'usu_correo'=>$txtCorreo,
            'usu_telefono'=>$txtTelefono
    );
    $this->db->where('usu_id',$txtUsuid);
    $this->db->update('usuario',$array);
    }
}
?>