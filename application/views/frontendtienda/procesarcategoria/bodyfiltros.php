<script>
    var pg = 0;
    function hacerAjax() {
        $('#productos').empty();
        $.ajax({
            url: "<?= base_url() ?>index.php/tienda/cogerDatos5/" + pg,
            success: function(r) {
                var r = JSON.parse(r);
                var productos = $('#productos');
			
                for (var i = 0; i < r.length; i++) {
                    console.log(r[i]);
                    
                    var div = $('<div class="cadaproducto" data-id="' + r[i].id + '"><p>' + r[i].nombre + '</p></div></input>');
                    productos.append(div);
                    //$(div.cadaproudcto).append('<input type="button" value="ver"/>');
    
                /*aqui he agregado un boton*/
                    div.prepend('<img src="<?= base_url() ?>img/'+r[i].nombre+'.jpg"/></br>').append('<input type=image src="<?= base_url() ?>img/buscar.gif" id="buton'+r[i].nombre+'" value="ver" onclick="abrirVentana()"/></br>').append('<a href="#" class="btn btn-success addbttn"><span class="glyphicon glyphicon-plus"></span> Añadir</a>').append('<select class="form-control selectpr"></select>');
                    
                    for (var j = 0; j < r[i].tarifa.length; j++) {
                        $('.selectpr').eq(i).append('<option>' + r[i].tarifa[j].tamano + " - " + r[i].tarifa[j].precio + '</option>');
                    }
                      
                }
				
	
                
            }, error: function(a, b, c) {
                var w = window.open();
                w.document.write(a.responseText);
            }
			
			
        });
    }
    
    
    
    

    
    
    function pintarGloboProducto() {
        $.ajax({
                        url: "<?= base_url(); ?>/index.php/tienda/num_carro",
                        success: function(r) {
							 var r = JSON.parse(r);
                        // abrirVentana(nombre);
                            $('.badge').html(r);
                        }
                    });
    }
    
    function abrirVentana(e){
       
         $('#butonanticongelante1').on('click',function(e){
               
		      var myWindow = window.open("", "MsgWindow", "width=500,height=500");
             
                myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
            
                myWindow.empty();
    
            });
   
        
         $('#butonanticongelante2').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				 myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
                    myWindow.empty();
        });
        

         $('#butonanticongelante3').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
                myWindow.empty();
        });
        

         $('#butonanticongelante4').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
             myWindow.empty();
    
        });
        
 
         $('#butonanticongelante5').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				 myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
                myWindow.empty();
        });
        
        
         $('#butonneumaticos1').on('click',function(e){
               
		      var myWindow = window.open("", "MsgWindow", "width=500,height=500");
             
                myWindow.document.write("<p>Nombre</p>");
            
                myWindow.empty();
    
            });
   
        
         $('#butonneumaticos2').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
                    myWindow.empty();
        });
        

         $('#butonneumaticos3').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				 myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
                myWindow.empty();
        });
        

         $('#butonneumaticos4').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
             myWindow.empty();
    
        });
        
 
         $('#butonneumaticos5').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				 myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
                myWindow.empty();
        });
        
        
         $('#butonaceite1').on('click',function(e){
               
		      var myWindow = window.open("", "MsgWindow", "width=500,height=500");
             
                myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
            
                myWindow.empty();
    
            });
   
        
         $('#butonaceite2').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				 myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
                    myWindow.empty();
        });
        

         $('#butonaceite3').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
                myWindow.empty();
        });
        

         $('#butonaceite4').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
             myWindow.empty();
    
        });
        
 
         $('#butonaceite5').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				 myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
                myWindow.empty();
        });
        
        
         $('#butonfiltros1').on('click',function(e){
               
		      var myWindow = window.open("", "MsgWindow", "width=500,height=500");
             
               myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
                myWindow.empty();
    
            });
   
        
         $('#butonfiltros2').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
                    myWindow.empty();
        });
        

         $('#butonfiltros3').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
                myWindow.empty();
        });
        

         $('#butonfiltros4').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
             myWindow.empty();
    
        });
        
 
         $('#butonfiltros5').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
                myWindow.empty();
        });
        
        
         $('#butonbaterias1').on('click',function(e){
               
		      var myWindow = window.open("", "MsgWindow", "width=500,height=500");
             
                myWindow.document.write("<p>Nombre</p>");
            
                myWindow.empty();
    
            });
   
        
         $('#butonbaterias2').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
                    myWindow.empty();
        });
        

         $('#butonbaterias3').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
                myWindow.empty();
        });
        

         $('#butonbaterias4').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				 myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
             myWindow.empty();
    
        });
        
 
         $('#butonbaterias5').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
                myWindow.empty();
        });
        
        
         $('#butonaditivos1').on('click',function(e){
               
		      var myWindow = window.open("", "MsgWindow", "width=500,height=500");
             
               myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
            
                myWindow.empty();
    
            });
   
        
         $('#butonaditivos2').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
                    myWindow.empty();
        });
        

         $('#butonaditivos3').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
                myWindow.empty();
        });
        

         $('#butonaditivos4').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
             myWindow.empty();
    
        });
        
 
         $('#butonaditivos5').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="42" width="42"></br><p>Descripción:</br>dfgdfhdfhdfh</p><p>Precio</precio>');
                myWindow.empty();
        });
       
    }
	
	/*function abrirVentana(){
		 $.ajax({
                url: "<?= base_url() ?>index.php/tienda/cogerDatos/" + pg,       
				success: function(r) {
					r = JSON.parse(r);
			    for (var i = 0; i < r.length; i++) {
				
					nombre=r[i].nombre;
					
					
				}

				var myWindow = window.open("", "MsgWindow", "width=500,height=500");
				 myWindow.document.write("<p>Nombre: '"+nombre+"'</p>");
			}
			
		
       });
				
	}*/
	
     
    function pintarCesta(){
        var cesta = $('#boton-cesta');
        $.ajax({
                url: "<?= base_url()?>index.php/tienda/recoger_cesta",
                success: function(r) {
                    r = JSON.parse(r);
                    var total = 0;
                    r.forEach(function(e, i) {
                        cesta.append("<div class='linea'><input class='ocultos' type='hidden' value='"+e.id+"' /><input class='ocultos' type='hidden' value='"+e.tarifa+"' /><div class='foto'>Foto<img class='pfoto' src='<?= base_url() ?>img/"+r[i].nombre+".jpg'></div>"+" <div class='input'><input class='cantidad' type='text' size='2' value='"+e.cantidad+"' /></div>"+"<div class='producto'>Producto:</br>"+e.nombre+"</br>"+e.tarifa +"<p class='precio'>"+e.precio+"</p></div><a href='#' class='btn btn-xs btn-danger eliminar'><span class='glyphicon glyphicon-remove'></span> </a></div>");
                        total += parseFloat(e.precio);
                    });
                    
                    cesta.append("</br>Total:"+ total.toFixed(2) + "€"+"</br>"+"<a href='#' class='btn btn-sm btn-primary finaliza'>Finalizar compra</a>");
                }, error: function() {
                
                }
            });
    }
        
    $(document).on('ready', function(e) {
        pintarGloboProducto();
        $('#prev').on('click', function() {
            if (pg > 0) {
                pg--;
                hacerAjax();
            } else {
                $(this).attr('disabled', 'disabled');
            }
        });
        
        $('#sig').on('click', function() {
            pg++;
            $('#prev').removeAttr('disabled');
            hacerAjax();
        });
        
        $(document).on('change', '.cantidad', function(){    
            var cantidad = $(this).val();
            var idProd = $(this).parents('.linea').find('.ocultos').eq(0).val();
            var tarifa = $(this).parents('.linea').find('.ocultos').eq(1).val();
            if(cantidad == 0 && cantidad != ""){
                $.ajax({
                    url: "<?= base_url() ?>index.php/tienda/borrar_producto_cesta",
                    method: "post",
                    data: {
                        id: idProd,
                        tarifa: tarifa
                    },
                    success: function(r) {
                        if(r == 'vacio'){
                                $("#boton-cesta").empty();
                                pintarGloboProducto();
                            }else{
                                $("#boton-cesta").empty();                                
                                pintarCesta();
                            }
                    }, error: function(a) {
                        window.open().write(a.responseText);
                    }
                });
            }else if(cantidad < 0 || cantidad % cantidad != 0 || isNaN(cantidad)){   
                var inputSeleccionado = $(this);
                $.ajax({
                    url: "<?= base_url() ?>index.php/tienda/recoger_cantidad",
                    method: "post",
                    data: {
                        id: idProd,
                        tarifa: tarifa
                    },
                    success: function(r) {
                        inputSeleccionado.val(r);
                    }, error: function(a) {
                        window.open().write(a.responseText);
                    }
                });
            }else{
                $.ajax({
                    url: "<?= base_url() ?>index.php/tienda/acutalizar_cesta",
                    method: "post",
                    data: {
                        id: idProd,
                        tarifa: tarifa,
                        cantidad: cantidad
                    },
                    success: function(r) {
                        $("#boton-cesta").empty();
                        pintarCesta();
                    }, error: function(a) {
                        window.open().write(a.responseText);
                    }
                });
            }
            
        });
        hacerAjax();
        
        $("#cesta").on('click',function(event){
            
           
            event.preventDefault();
            var cesta = $('#boton-cesta');
            cesta.empty();
            pintarCesta();
            cesta.toggle(); 
            
            setTimeout(function() {
                $("#boton-cesta").fadeOut(1500);
            },20000);
            
        });
        
   
        
        $("#productos").on('click', '.addbttn', function(event){
            event.preventDefault();
            
            var id_producto= $(this).parent().attr("data-id");
            var tarifa =$(this).parent().children("select").val();
            
            tarifa=tarifa.substring(0, tarifa.length - 6);
            
   
            $.ajax({
                url: "<?= base_url() ?>index.php/tienda/annadir_a_cesta",
                method: "post",
                data: {
                    id: id_producto.trim(),
                    tarifa: tarifa.trim()
                },
                success: function() {    
                    $("#boton-cesta").empty();
                    pintarCesta();
                    pintarGloboProducto();
                }, error: function(a) {
                    window.open().write(a.responseText);
                }
            });
            
            });
            
        $(document).on('click', '.eliminar', function(event){
                event.preventDefault();
                var idProd = $(this).parents('.linea').find('.ocultos').eq(0).val().trim();
                var tarifa = $(this).parents('.linea').find('.ocultos').eq(1).val().trim();
                
                 $.ajax({
                        url: "<?= base_url() ?>index.php/tienda/borrar_producto_cesta",
                        method: "post",
                        data: {
                            id: idProd,
                            tarifa: tarifa
                        },
                        success: function(r) {
                            if(r == 'vacio'){
                                $("#boton-cesta").empty();
                                pintarGloboProducto();
                            }else{
                                $("#boton-cesta").empty();                                
                                pintarCesta();
                            }
                            
                            
                        }, error: function(a) {
                            window.open().write(a.responseText);
                        }
                    });    
        });
        
        $(document).on('click', '.finaliza', function(e) {
            e.preventDefault();
            
            $.ajax({
                success: function() {
                    BCE.showDialog({
                        id: "finaliza-dialog",
                        title: "Finalizar pedido",
                        body: $('<p>¿Quieres procesar el pedido?</p>'),
                        closeButton: false,
                        buttons: [
                            {
                                label: "Sí",
                                class: "btn btn-success",
                                onClick: function(e) {
                                    $.ajax({
                                        url: "<?= base_url() ?>index.php/tienda/confirmar_pedido",
                                        success: function() {
                                            BCE.closeDialog();
                                            BCE.showDialog({
                                                id: "confirmado",
                                                title: "Pedido realizado",
                                                body: $('<p>El pedido se ha realizado con éxito.</p>')
                                            });
                                            $('#boton-cesta').hide();
                                            pintarGloboProducto();
                                        }
                                    });
                                },
                            },
                            {
                                label: "No",
                                class: "btn btn-danger",
                                onClick: BCE.closeDialog
                            }
                        ]
                    });
                }
            });
        });
        
        
        
    });
	
	
	
			
    

</script>
<style>
    

    .addbttn{
        display:block;
        margin-bottom:10px;
        width:200px;
    }
    .cadaproducto{
		width: 250px;
		height: 250px;
        float:left;
        padding:10px;
        margin:10px;
        border-style: solid;
        border-width: 2px 10px 4px 20px;
        color: transparent;
        
    }
    
    .cadaproducto p{
        color: #000;
        
    }
    
    
    img{
        width:100px;
        height:100px;
    }
    
    #productos{
        margin: 0 auto;
        text-align:center;
        width:100%;
       
    }
    
    p{ text-align:center;
        color: #000;}
    
    #boton-cesta{ 
        position:absolute;
        display: none;
        right:19%;
        background-color:white;
        width:375px;
        height: 350px;
        border-radius: 10px;
        border: 1px solid #ccc;
        overflow-y: scroll;
        
    }
	
	   
    
    
    .finaliza{float:right;}
    
    div.linea{width:300px; height:110px;
               border-bottom: 3px solid black;
                margin-top:5px;
				margin-left:5px;}
    
    div.foto{float:left;width:60px; height:60px;}
    
    .pfoto{width:50px; height:50px;}
    
    div.producto{float:right; margin-left:0px;width:80px; height:100px;}
    div.input{float:left; width:50px; height:100px}
    
    p.precio{ text-align:right; margin-right:10px;}
    
    #paginacion{margin-left:40%;}
	

	
	#lista{margin-left:50px;}
	
	
   
</style>
	

<div class="container-fluid bg-grey">
    <div class="row">
    <div class="col-lg-12" id="contenedor">
		
        <p>Nuestros productos</p>
			<div id="lista" class="col-lg-6" class="btn-group">
                     
					  <button type="button" class="btn btn-info dropdown-toggle"
						data-toggle="dropdown">Categoría Producto<span class="caret"></span>
						</button>
                      <ul class="dropdown-menu" role="menu">
					
						<li><a href="<?= base_url() ?>index.php/tienda/tiendaneumaticos">Neumáticos</a></li>
                        <li><a href="<?= base_url() ?>index.php/tienda/tiendaaceite">Aceite</a></li>
                        <li><a href="<?= base_url() ?>index.php/tienda/tiendafiltros">Filtros</a></li>
						<li><a href="<?= base_url() ?>index.php/tienda/tiendabaterias">Baterías</a></li>
						<li><a href="<?= base_url() ?>index.php/tienda/tiendaanticongelante">Anticongelante</a></li>
						<li><a href="<?= base_url() ?>index.php/tienda/tiendaaditivos">Aditivos</a></li>
						
                    </ul>
                
				
			</div>
			</br></br></br></br></br>
        <div id="productos" class="col-lg-6">
            
        </div>
       
    </div>
        <div id="boton-cesta">      
            
        </div>
		
		
        
        <div id="paginacion"><a id="prev" href="#" class="btn btn-default"> &lt; pagina previa </a><a  id="sig" href="#" class="btn btn-default"> pagina siguiente &gt;</a></div>
   
    
  </div>
</div>


