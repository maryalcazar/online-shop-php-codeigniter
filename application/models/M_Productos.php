<?php

class M_Productos extends CI_Model {
	
	    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    function listar($page){
        $page *= 5;
        return $this->db->query("SELECT id, nombre, categoria FROM productos limit 5 offset $page")->result();
    }
	
    /*haría falta añadir la categoria*/
    function listarporcategoria($categoria){
       
        return $this->db->query("select categoria from productos where categoria like '$categoria'")->result();
    }
    function obtener_numero_productos() {
        return $this->db->query("SELECT COUNT(*) AS 'num' FROM productos")->row()->num;
    }
    
    function crear($nombre, $categoria) {
      return $query = $this->db->query("INSERT INTO productos (nombre, categoria) VALUES ('$nombre', '$categoria');");
    }
    
    function borrar($id){
         if ($this->db->query("DELETE FROM productos WHERE id=$id;")) {
             return true;
         } else return false;
    }
   
    function modificar($id, $nombre, $categoria){
        return $this->db->query("update productos SET id=$id, nombre='$nombre', categoria='$categoria' where id = $id;");
    }
    
    function listarTienda($page){
        $page *= 15;
        return $this->db->query("SELECT id, nombre FROM productos p inner join tarifa t on p.id = t.id_producto  group by id limit 15 offset $page")->result();
    }
    
    
     function listarTiendaanticongelante($page){
        $page *= 15;
        return $this->db->query("SELECT id, nombre, categoria FROM productos p inner join tarifa t on p.id = t.id_producto where categoria like 'anticongelante' group by id limit 15 offset $page")->result();
    }
    
    
       function listarTiendaaditivos($page){
        $page *= 15;
        return $this->db->query("SELECT id, nombre, categoria FROM productos p inner join tarifa t on p.id = t.id_producto where categoria like 'aditivos' group by id limit 15 offset $page")->result();
    }
    
       function listarTiendaneumaticos($page){
        $page *= 15;
        return $this->db->query("SELECT id, nombre, categoria FROM productos p inner join tarifa t on p.id = t.id_producto where categoria like 'neumaticos' group by id limit 15 offset $page")->result();
    }
    
    
       function listarTiendabaterias($page){
        $page *= 15;
        return $this->db->query("SELECT id, nombre, categoria FROM productos p inner join tarifa t on p.id = t.id_producto where categoria like 'baterias' group by id limit 15 offset $page")->result();
    }
    
       function listarTiendaaceite($page){
        $page *= 15;
        return $this->db->query("SELECT id, nombre, categoria FROM productos p inner join tarifa t on p.id = t.id_producto where categoria like 'aceite' group by id limit 15 offset $page")->result();
    }
    
    
       function listarTiendafiltros($page){
        $page *= 15;
        return $this->db->query("SELECT id, nombre, categoria FROM productos p inner join tarifa t on p.id = t.id_producto where categoria like 'filtros' group by id limit 15 offset $page")->result();
    }
    
    /*la he creado yo*/
	
	 function listarTienda2($id){
        
        return $this->db->query("SELECT id, nombre FROM productos where id=$id")->result();
    }
	
    function obtener_tarifa($id) {
        return $this->db->query("SELECT tamano, precio FROM tarifa WHERE id_producto = $id")->result();
    }
    
    function obtener_nombre($id) {
        return $this->db->query("SELECT nombre FROM productos WHERE id = $id")->row()->nombre;
    }
  
}

?>