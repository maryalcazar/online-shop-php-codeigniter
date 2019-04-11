<?php
class tienda extends CI_Controller {

        public function index(){
        $this->load->view('frontendtienda/header');
        if ($this->session->userdata('id')) { //Session iniciada
            if ($this->session->userdata('rol') == "admin") { //Es admin
                $this->load->view('frontendtienda/nav-admin');
            } else { //Iniciado, pero no admin
                $this->load->view('frontendtienda/nav-log');
            }
        } else { //No iniciado
            $this->load->view('frontendtienda/nav-no-log');
            $this->load->view('frontend/login');
        }
        $this->load->view('frontendtienda/body');
        $this->load->view('frontendtienda/footer');
        }
		
		public function tiendaneumaticos(){
        $this->load->view('frontendtienda/header');
        if ($this->session->userdata('id')) { //Session iniciada
            if ($this->session->userdata('rol') == "admin") { //Es admin
                $this->load->view('frontendtienda/nav-admin');
            } else { //Iniciado, pero no admin
                $this->load->view('frontendtienda/nav-log');
            }
        } else { //No iniciado
            $this->load->view('frontendtienda/nav-no-log');
            $this->load->view('frontend/login');
        }
        $this->load->view('frontendtienda/procesarcategoria/bodyneumaticos');
        $this->load->view('frontendtienda/footer');
        }
		
		public function tiendaanticongelante(){
        $this->load->view('frontendtienda/header');
        if ($this->session->userdata('id')) { //Session iniciada
            if ($this->session->userdata('rol') == "admin") { //Es admin
                $this->load->view('frontendtienda/nav-admin');
            } else { //Iniciado, pero no admin
                $this->load->view('frontendtienda/nav-log');
            }
        } else { //No iniciado
            $this->load->view('frontendtienda/nav-no-log');
            $this->load->view('frontend/login');
        }
        $this->load->view('frontendtienda/procesarcategoria/bodyanticongelante');
        $this->load->view('frontendtienda/footer');
        }
		
		public function tiendaaditivos(){
        $this->load->view('frontendtienda/header');
        if ($this->session->userdata('id')) { //Session iniciada
            if ($this->session->userdata('rol') == "admin") { //Es admin
                $this->load->view('frontendtienda/nav-admin');
            } else { //Iniciado, pero no admin
                $this->load->view('frontendtienda/nav-log');
            }
        } else { //No iniciado
            $this->load->view('frontendtienda/nav-no-log');
            $this->load->view('frontend/login');
        }
        $this->load->view('frontendtienda/procesarcategoria/bodyaditivos');
        $this->load->view('frontendtienda/footer');
        }
		
		public function tiendaaceite(){
        $this->load->view('frontendtienda/header');
        if ($this->session->userdata('id')) { //Session iniciada
            if ($this->session->userdata('rol') == "admin") { //Es admin
                $this->load->view('frontendtienda/nav-admin');
            } else { //Iniciado, pero no admin
                $this->load->view('frontendtienda/nav-log');
            }
        } else { //No iniciado
            $this->load->view('frontendtienda/nav-no-log');
            $this->load->view('frontend/login');
        }
        $this->load->view('frontendtienda/procesarcategoria/bodyaceite');
        $this->load->view('frontendtienda/footer');
        }
		
		public function tiendabaterias(){
        $this->load->view('frontendtienda/header');
        if ($this->session->userdata('id')) { //Session iniciada
            if ($this->session->userdata('rol') == "admin") { //Es admin
                $this->load->view('frontendtienda/nav-admin');
            } else { //Iniciado, pero no admin
                $this->load->view('frontendtienda/nav-log');
            }
        } else { //No iniciado
            $this->load->view('frontendtienda/nav-no-log');
            $this->load->view('frontend/login');
        }
        $this->load->view('frontendtienda/procesarcategoria/bodybaterias');
        $this->load->view('frontendtienda/footer');
        }
		
		public function tiendafiltros(){
        $this->load->view('frontendtienda/header');
        if ($this->session->userdata('id')) { //Session iniciada
            if ($this->session->userdata('rol') == "admin") { //Es admin
                $this->load->view('frontendtienda/nav-admin');
            } else { //Iniciado, pero no admin
                $this->load->view('frontendtienda/nav-log');
            }
        } else { //No iniciado
            $this->load->view('frontendtienda/nav-no-log');
            $this->load->view('frontend/login');
        }
        $this->load->view('frontendtienda/procesarcategoria/bodyfiltros');
        $this->load->view('frontendtienda/footer');
        }

    
    public function cogerDatos($pg) {
        $this->load->model('M_Productos');
        $arr = $this->M_Productos->listarTienda($pg);
        for ($i = 0; $i < count($arr); $i++) {
            $tar = $this->M_Productos->obtener_tarifa($arr[$i]->id);
            $arr[$i]->tarifa = $tar;
        }
        header("application/json");    
        echo json_encode($arr);
    }
	
    
    /*la he creado yo*/
	 public function cogerDatos2($id) {
        $this->load->model('M_Productos');
        $arr = $this->M_Productos->listarTiendaanticongelante($id);
        for ($i = 0; $i < count($arr); $i++) {
            $tar = $this->M_Productos->obtener_tarifa($arr[$i]->id);
            $arr[$i]->tarifa = $tar;
        }
        header("application/json");    
        echo json_encode($arr);
    }
	
	public function cogerDatos3($id) {
        $this->load->model('M_Productos');
        $arr = $this->M_Productos->listarTiendaneumaticos($id);
        for ($i = 0; $i < count($arr); $i++) {
            $tar = $this->M_Productos->obtener_tarifa($arr[$i]->id);
            $arr[$i]->tarifa = $tar;
        }
        header("application/json");    
        echo json_encode($arr);
    }
	
	
	public function cogerDatos4($id) {
        $this->load->model('M_Productos');
        $arr = $this->M_Productos->listarTiendabaterias($id);
        for ($i = 0; $i < count($arr); $i++) {
            $tar = $this->M_Productos->obtener_tarifa($arr[$i]->id);
            $arr[$i]->tarifa = $tar;
        }
        header("application/json");    
        echo json_encode($arr);
    }
	
	public function cogerDatos5($id) {
        $this->load->model('M_Productos');
        $arr = $this->M_Productos->listarTiendafiltros($id);
        for ($i = 0; $i < count($arr); $i++) {
            $tar = $this->M_Productos->obtener_tarifa($arr[$i]->id);
            $arr[$i]->tarifa = $tar;
        }
        header("application/json");    
        echo json_encode($arr);
    }
	
	public function cogerDatos6($id) {
        $this->load->model('M_Productos');
        $arr = $this->M_Productos->listarTiendaaceite($id);
        for ($i = 0; $i < count($arr); $i++) {
            $tar = $this->M_Productos->obtener_tarifa($arr[$i]->id);
            $arr[$i]->tarifa = $tar;
        }
        header("application/json");    
        echo json_encode($arr);
    }
	
	public function cogerDatos7($id) {
        $this->load->model('M_Productos');
        $arr = $this->M_Productos->listarTiendaaditivos($id);
        for ($i = 0; $i < count($arr); $i++) {
            $tar = $this->M_Productos->obtener_tarifa($arr[$i]->id);
            $arr[$i]->tarifa = $tar;
        }
        header("application/json");    
        echo json_encode($arr);
    }
	

	
    
    public function annadir_a_cesta() {
        $id = $this->input->post('id');
        $tarifa = $this->input->post('tarifa');
        $encontrado = false;
        $carro = $this->session->userdata('carro');
        if (!$carro) {
            $carro = [];
        }
        for($i = 0; $i < count($carro); $i++){            
            if($carro[$i]['id'] == $id && $carro[$i]['tarifa'] == $tarifa){  
                $carro[$i]["cantidad"]++;
                $encontrado = true;
                break;
            }          
        
        }
        if($encontrado == false){
            $producto = [
                "id" => $id,
                "tarifa" => $tarifa,
                "cantidad" =>1
            ];
            array_push($carro, $producto);
        }
        
        var_dump($carro);
        $this->session->set_userdata('carro', $carro);        
        
    }
    
    public function recoger_cantidad(){
        $id = $this->input->post('id');
        $tarifa = $this->input->post('tarifa');
        $carro = $this->session->userdata('carro');
        foreach($carro as $producto){
            if(trim($producto['id']) == $id && trim($producto['tarifa']) == $tarifa){  
                echo $producto['cantidad'];
                break;
                
            }
                
        }
    }
    
    public function acutalizar_cesta(){
        $id = $this->input->post('id');
        $tarifa = $this->input->post('tarifa');
        $cantidad = $this->input->post('cantidad');
        $carro = $this->session->userdata('carro');
        for($i = 0; $i < count($carro); $i++){            
            if($carro[$i]['id'] == $id && $carro[$i]['tarifa'] == $tarifa){  
                $carro[$i]["cantidad"] = $cantidad;
                break;
            }          
        
        }
        $this->session->set_userdata('carro', $carro);
    
    }
    
    public function borrar_producto_cesta(){
        $id = $this->input->post('id');
        $tarifa = $this->input->post('tarifa');
        $carro = $this->session->userdata('carro');
        $carroFinal = [];
        foreach($carro as $producto){
            if(!($producto['id'] == $id && trim($producto['tarifa']) == trim($tarifa))){  
                array_push($carroFinal, $producto);
            }   
        }
        if(count($carroFinal) == 0){
            echo 'vacio';
        }else{
            echo 'novacio';
        }
        $this->session->set_userdata('carro', $carroFinal);
        
    }
    
    public function recoger_cesta() {
        $this->load->model("M_tarifas");
        $this->load->model("M_Productos");
        $cesta = $this->session->get_userdata();

        $carro = $cesta["carro"];
        
        $productos = [];
        foreach($carro as $producto) {
            $producto['tarifa'] = $producto['tarifa'];
            $producto['nombre'] = $this->M_Productos->obtener_nombre($producto['id']);
            $producto['precio'] = $this->M_tarifas->obtener_precio($producto['id'], $producto['tarifa'], $producto['cantidad']);
            array_push($productos, $producto);
        }
        header("application/json");
        echo json_encode($productos);
    }
    
    public function num_carro() {
        echo count($this->session->userdata('carro'));
    }
    
    public function confirmar_pedido(){
        $carro = $this->session->userdata('carro');
        $iduser = $this->session->userdata('id');
        $this->load->model('M_Pedidos');
        $this->load->model('M_Lineapedido');
        $this->load->database();
        $this->M_Pedidos->crear($iduser);
        $idPedido = $this->db->insert_id();
        foreach($carro as $lineapedido){
            $this->M_Lineapedido->crear($lineapedido['id'], $idPedido, $lineapedido['tarifa'],$lineapedido['cantidad']);
        }        
        $this->session->unset_userdata('carro');
    }
    
    function listadoTarifas(){
        $idPedido =  $this->input->post('id_pedido');
        $idProducto =  $this->input->post('id_producto');
        $this->load->model("M_Lineapedido");
        $arr = $this->M_Lineapedido->listadoTarifas($idPedido, $idProducto);
        header("application/json");
        echo json_encode($arr);
    }
    
    
    public function listadoProductos(){
        $idPedido = $this->input->post('id_pedido');
        $this->load->model("M_Lineapedido");
        $arr = $this->M_Lineapedido->listadoProductos($idPedido);
        header("application/json");
        echo json_encode($arr);
    }
	
	  /*function listar($categoria) {
		 //$categoria = $this->input->post('categoria');
		 $this->load->model("M_Productos");
		 $arr=$this->M_Productos->listarporcategoria($categoria);
		  header("application/json");
		  echo json_encode($arr);

    }*/
    
}