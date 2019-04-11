<?php
class Pedidos extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_Pedidos");
        $this->load->library("Botones");
        if ($this->session->userdata('rol') != "admin" || !$this->session->userdata('id')) {
            header('Location: ' . base_url());
		}
    }
    
    function index() {
        header('Location: ' . base_url() . 'index.php/pedidos/listar/');
    }
    
    function listar($page = 0){
        $header = ["titulo" => "Prueba"];
        $this->load->view('header',["tituloE"=>'Pedidos']);
        $this->load->view('navbar',["usuario" => $this->session->userdata('nombre')]);
        $resultado = $this->M_Pedidos->listar($page); 
            for($i = 0; $i<count($resultado); $i++){
                switch ($resultado[$i]->estado) {
                    case '0':
                        $resultado[$i]->estado = "Procesando";
                        break;
                    case '1':
                        $resultado[$i]->estado = "Terminado";
                        break;
                    case '2':
                        $resultado[$i]->estado = "Enviado";
                        break;
                } 
            }        
        $num_pedidos = $this->M_Pedidos->obtener_numero_pedidos();   
        $this->load->view('tabla',[
            'cabeceras' => ["ID PEDIDO", "ID USUARIO", "NOMBRE USUARIO", "FECHA", "ESTADO", "PRECIO TOTAL"],
            'filas' => $resultado,
            'num_total' => $num_pedidos,
            'seccion' => 'pedidos',
            'botones' => [
                $this->botones->editar,
                $this->botones->borrar,
                $this->botones->linea_pedidos
            ]
            ]);
        $this->load->view("modalpedidos/crearpedido");
        $this->load->view("modalpedidos/borrarpedido");
        $this->load->view("modalpedidos/editarpedido");
        $this->load->view("modalpedidos/irlineapedido");
        $this->load->view('footer');
    }
    
    function modificar() {
        $id = $this->input->post('id');
        $estado = $this->input->post('estado');
        if(!isset($id) || !isset($estado)){
            header("Location: " . base_url() . "index.php/Pedidos");
        }else{
            $resultado = $this->M_Pedidos->modificar($id, $estado); 
            $modificaPedido = [   
                "tituloPag" => "Modifica Pedido",
                "cabeceras" => ["id", "usuario", "fecha"],
                "actionForm" => "doModificar",
                "items" => $resultado            
            ]; 
            $this->load->view('footer');
        }
    }
    
    function crear(){
        $usuario = $this->input->post('name');
        if(!isset($usuario)){
            header('Location: ' . base_url() . 'index.php/pedidos/listar/');
        }else{
            echo $this->M_Pedidos->crear($usuario)? "Insertado" : "Error";
        }
        
    }
    function borrar(){
        $idPedido = $this->input->post('id');
        if(!isset($idPedido)){
            header('Location: ' . base_url() . 'index.php/pedidos/listar/');
        }else{
            echo $this->M_Pedidos->borrar($idPedido)? "Insertado" : "Error";
        }
        
    }
    
    function matching_names(){        
        $strUsuario = $this->input->post('usuario'); 
        //$strUsuario = 'm';
        if(!isset($strUsuario)){
            header('Location: ' . base_url() . 'index.php/pedidos/listar/');
        }else{
            if($strUsuario != ''){
                $resultado = $this->M_Pedidos->matching_names($strUsuario);            
                $nresult = $resultado->num_rows();
                if ($nresult > 0) {
                    $json = '{"nombresr":[';
                    $contador = 1;
                    foreach ($resultado->result() as $row){
                        if($contador == $nresult){
                            $json .= '{"nombre":"' . $row->nombre . '", "id":"' . $row->id . '"}';
                        }else{
                            $json .= '{"nombre":"' . $row->nombre . '", "id":"' . $row->id . '"},';
                        }
                        $contador++;
                    }
                    $json .= ']}';
                    echo ($json);
                }else{
                    echo ('{"nombresr":[]}');
                }                  
            }else{
                echo ('{"nombresr":[]}');
            }
        }
        
    }
}