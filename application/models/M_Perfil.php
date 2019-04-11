<?php

class M_Perfil extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function informacion_usuario($idUsuario){
        return $this->db->query("SELECT nombre, email FROM usuarios WHERE id = $idUsuario;")->row_array(); 
    }
    
    function pedidos_usuario($idUsuario){
        return $this->db->query("SELECT p.id, concat(DAY(p.fecha),'/',MONTH(p.fecha),'/',YEAR(p.fecha)) as 'fecha', sum(round(tar.precio*lp.cantidad,2)), p.estado from pedido p inner join linea_pedido lp on p.id = lp.id_pedido inner join tarifa tar on lp.id_producto = tar.id_producto and lp.tamano = tar.tamano where p.usuario = $idUsuario group by p.id;")->result();
    }
}

?>