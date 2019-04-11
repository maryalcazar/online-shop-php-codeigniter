<?php

class M_Lineapedido extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
     function listar($page){
        $page *= 5;
        ;
        return $this->db->query("SELECT id_pedido, id_producto, tamano ,cantidad from linea_pedido limit 5 offset $page")->result();
    }
    
    function listar_pedido($id_pedido, $page){
        $page *= 5;
        return $this->db->query("SELECT lp.id_pedido, lp.id_producto, p.nombre, lp.tamano, lp.cantidad, tar.precio, round(tar.precio*lp.cantidad,2) FROM linea_pedido lp left join productos p on lp.id_producto = p.id inner join tarifa tar on tar.id_producto = lp.id_producto and tar.tamano = lp.tamano where lp.id_pedido =  $id_pedido limit 5 offset $page;")->result();
    }
    
    function obtener_numero_lpedidos() {
        return $this->db->query("SELECT COUNT(*) AS 'num' FROM linea_pedido")->row()->num;
    }
    
    function obtener_numero_lpedidos_pedido($id_pedido) {
        return $this->db->query("SELECT COUNT(*) AS 'num' FROM linea_pedido WHERE id_pedido = $id_pedido")->row()->num;
    }
    
    function crear($id_producto, $id_pedido, $tamano,$cantidad) {
      return $query = $this->db->query("INSERT INTO linea_pedido (id_producto, id_pedido, tamano, cantidad) VALUES ($id_producto,        $id_pedido,'$tamano',$cantidad);");
    }
    
    function borrar($id_producto, $id_pedido, $tamano){
         if ($this->db->query("DELETE FROM linea_pedido WHERE id_producto = $id_producto and id_pedido= $id_pedido and tamano LIKE '$tamano';")) {
             return true;
         } else return false;
    }
    
    function modificar($id_producto, $id_pedido, $tamano, $n_cantidad){
        return $this->db->query("update linea_pedido SET cantidad='$n_cantidad' WHERE id_producto = $id_producto and id_pedido= $id_pedido and tamano LIKE '$tamano';");
    }
    
    function listadoTarifas($idPedido, $idProducto){
        return $this->db->query("SELECT precio, tamano from tarifa where id_producto = $idProducto and (id_producto, tamano) not in (SELECT id_producto, tamano from linea_pedido where id_pedido = $idPedido);")->result();
    }
    
    function listadoProductos($idPedido){
        return $this->db->query("SELECT pro.id, pro.nombre from productos pro inner join tarifa tar on tar.id_producto = pro.id where (tar.id_producto, tar.tamano) not in (SELECT id_producto, tamano from linea_pedido where id_pedido = $idPedido) group by pro.id;")->result();
       
    }
    
}

?>