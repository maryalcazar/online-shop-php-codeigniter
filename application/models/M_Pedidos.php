<?php

class M_Pedidos extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    function listar($page){
        $page *= 5;
        $query = $this->db->query("select p.id, p.usuario, u.nombre, concat(DAY(p.fecha),'/',MONTH(p.fecha),'/',YEAR(p.fecha)) as 'fecha', p.estado, sum(round(tar.precio*lp.cantidad,2)) as 'total_pedido' from pedido p left join usuarios u on u.id = p.usuario inner join linea_pedido lp on lp.id_pedido = p.id inner join tarifa tar on lp.id_producto = tar.id_producto and lp.tamano = tar.tamano group by id limit 5 offset $page;");
        return $query->result();
    }
    
    function obtener_numero_pedidos() {
        return $this->db->query("SELECT COUNT(*) AS 'num' FROM pedido;")->row()->num;
    }
    
    function crear($usuario) {
        echo ("INSERT INTO pedido (usuario, fecha) VALUES ($usuario, now());");
        return $query = $this->db->query("INSERT INTO pedido (usuario, fecha) VALUES ($usuario, now());");
    }
    
    function borrar($id){
         if ($this->db->query("DELETE FROM pedido WHERE id=$id;")) {
             return true;
         } else return false;
    }
   
    function modificar($id, $estado){
        return $this->db->query("update pedido SET estado=$estado where id = $id;");
    }
    
    function matching_names($strUsuario){   
        return $this->db->query("select nombre, id from usuarios where nombre like '%$strUsuario%';");
    }
}

?>