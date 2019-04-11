<script>
    var pg = 0;
    function hacerAjax() {
        $('#productos').empty();
        $.ajax({
            url: "<?= base_url() ?>index.php/tienda/cogerDatos/" + pg,
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
       
         $('#butonMotul').on('click',function(){
              
			
		      var myWindow = window.open("", "MsgWindow", "width=550,height=550");
              $(myWindow.document.body).empty();
                myWindow.document.write('<img src="<?= base_url() ?>img/Motul.jpg" alt="Smiley face" height="420" width="420" class="detalle"></br><p>Descripción:</br>Anticongelante MOTUL rosa. Fluido Refrigerante Orgánico para Motor. Listo para su uso. Punto de Congelación -37ºC. Diluido al 50% Color rosa </p>');
				 
				
				 
				 
                
    
            });
   
        
         $('#butonMotulplus').on('click', function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
              $(myWindow.document.body).empty();
                myWindow.document.write('<img src="<?= base_url() ?>img/Motulplus.jpg" alt="Smiley face" height="420" width="420" class="detalle"></br><p>Descripción: Motul Inugel 30% Azul anticongelante Anticongelante - refrigerante Motul Orgánico</br></p>');
                     
					
        });
        

         $('#butonIada').on('click',function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				myWindow.document.write('<img src="<?= base_url() ?>img/Iada.jpg" alt="Smiley face" height="420" width="420" class="detalle"></br><p>Descripción: Anticongelante-Refrigerante de nueva formulación y larga duración. Especialmente indicado para uso directo en radiadores con circuito cerrado. Punto Congelación: -37ºC</br></p>');
                
        });
        

         $('#buton3cv').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				myWindow.document.write('<img src="<?= base_url() ?>img/3cv.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: Para su utilización directa en cualquier circuito refrigerado por agua, expuesto a bajas temperaturas.Anticorrosivo y Antioxidante.Contiene 31% de MonoetilengicolProtege los metales del circuito, especialmente las piezas de aluminio.Evita la formación de residuos y espumas.Permite localizar fácilmente el origen de cualquier fuga del circuito gracias a su coloración fluorescente.</br></p>');
             
    
        });
        
 
         $('#butonAnticongelante').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				 myWindow.document.write('<img src="<?= base_url() ?>img/Anticongelante.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: ANTICONGELANTE 5L 50% ROSA Mantén a salvo el motor de tu coche con este Anticongelante/ refrigerante Rosa Orgánico del 50%. Hasta -34ºC. Marca MTK Anticongelante del sistema de </br></p><p>Precio</p>');
              
        });
        
        
         $('#butonMichelin').on('click',function(e){
               
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				 myWindow.document.write('<img src="<?= base_url() ?>img/Michelin.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: Este neumático de turismo es la novedad de MICHELIN centrada en la seguridad. Gracias a su nuevo compuesto, ofrece una excelente frenada en suelo seco y mojado, así como un agarre en curvas sobre suelo mojado excelente. Esto se consigue con una escultura patentada que mantiene toda la superficie del neumático en contacto con la carretera.</br></p>');
               
    
            });
   
        
         $('#butonPirelli').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				myWindow.document.write('<img src="<?= base_url() ?>img/Pirelli.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: Este neumático de turismo es la novedad de PIRELLI centrada en la seguridad. Gracias a su nuevo compuesto, ofrece una excelente frenada en suelo seco y mojado, así como un agarre en curvas sobre suelo mojado excelente. Esto se consigue con una escultura patentada que mantiene toda la superficie del neumático en contacto con la carretera.</br></p>');
                   
        });
        

         $('#butonGood').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				 myWindow.document.write('<img src="<?= base_url() ?>img/Good.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: Este neumático de turismo es la novedad de GOOD centrada en la seguridad. Gracias a su nuevo compuesto, ofrece una excelente frenada en suelo seco y mojado, así como un agarre en curvas sobre suelo mojado excelente. Esto se consigue con una escultura patentada que mantiene toda la superficie del neumático en contacto con la carretera.</br></p>');
               
        });
        

         $('#butonFirestone').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				myWindow.document.write('<img src="<?= base_url() ?>img/Firestone.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: Este neumático de turismo es la novedad de FIRESTONE centrada en la seguridad. Gracias a su nuevo compuesto, ofrece una excelente frenada en suelo seco y mojado, así como un agarre en curvas sobre suelo mojado excelente. Esto se consigue con una escultura patentada que mantiene toda la superficie del neumático en contacto con la carretera.</br></p>');
            
    
        });
        
 
         $('#butonDunlop').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				 myWindow.document.write('<img src="<?= base_url() ?>img/Dunlop.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: Este neumático de turismo es la novedad de DUNLOP centrada en la seguridad. Gracias a su nuevo compuesto, ofrece una excelente frenada en suelo seco y mojado, así como un agarre en curvas sobre suelo mojado excelente. Esto se consigue con una escultura patentada que mantiene toda la superficie del neumático en contacto con la carretera.</br></p>');
                
        });
        
        
         $('#butonRepsol').on('click',function(e){
               
		      var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
                myWindow.document.write('<img src="<?= base_url() ?>img/Repsol.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: A3/B3-04, A3/B4-04, C3 - 502.00/505.00/505.01Material: Aditivos y bases refinadas</br></p>');
            
               
    
            });
   
        
         $('#butonGtxAlto').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				 myWindow.document.write('<img src="<?= base_url() ?>img/GtxAlto.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: Lubricantes de Tecnología Avanzada para la protección y rendimiento del motor </br></p>');
                  
        });
        

         $('#butonGtx').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				myWindow.document.write('<img src="<?= base_url() ?>img/Gtx.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: Lubricantes de Tecnología Avanzada para la protección y rendimiento del motor</br></p>');
               
        });
        

         $('#butonCepsa').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				myWindow.document.write('<img src="<?= base_url() ?>img/Cepsa.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: Lubricante mineral de óptima calidad para turismos gasolina y diesel de cualquier cilindrada y potencia: utilitarios, compactos, berlinas, todo-terrenos, monovolúmenesIndicado en todo tipo de servicios de estos turismos cuando se requiere un aceite mineral con este grado de viscosidad (SAE 15W40).</br></p>');
           
    
        });
        
 
         $('#butonMobil').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				 myWindow.document.write('<img src="<?= base_url() ?>img/Mobil.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: Aceite Sintético Mobil S3000 5W40 5L+1L</br></p>');
                
        });
        
        
         $('#butonMannFilter').on('click',function(e){
               
		      var myWindow = window.open("", "MsgWindow", "width=550,height=550");
             $(myWindow.document.body).empty();
               myWindow.document.write('<img src="<?= base_url() ?>img/MannFilter.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: El Filtro de aire para Fresh Breeze® es el único filtro de aire para cabina que utiliza las cualidades desodorizantes del bicarbonato de sodio ARM & HAMMER®.</br></p>');
              
    
            });
   
        
         $('#butonFram').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				myWindow.document.write('<img src="<?= base_url() ?>img/Fram.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: El Filtro de aire para cabina FRAM® Fresh Breeze® es el único filtro de aire para cabina que utiliza las cualidades desodorizantes del bicarbonato de sodio ARM & HAMMER®. Estas dos reconocidas marcas han unido fuerzas para absorber olores y refrescar el aire.</br></p>');
                   
        });
        

         $('#butonInterfil').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				myWindow.document.write('<img src="<?= base_url() ?>img/Interfil.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: El Filtro de aire Fresh Breeze® es el único filtro de aire para cabina que utiliza las cualidades desodorizantes del bicarbonato de sodio ARM & HAMMER®.</br></p>');
              
        });
        

         $('#butonFramplus').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				myWindow.document.write('<img src="<?= base_url() ?>img/Framplus.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: El Filtro de aire para cabina FRAM® Fresh Breeze® es el único filtro de aire para cabina que utiliza las cualidades desodorizantes del bicarbonato de sodio ARM & HAMMER®. Estas dos reconocidas marcas han unido fuerzas para absorber olores y refrescar el aire.</br></p>');
             
    
        });
        
 
         $('#butonManFilterPlus').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				myWindow.document.write('<img src="<?= base_url() ?>img/ManFilterPlus.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: El Filtro de aire para cabina MAN Fresh Breeze® es el único filtro de aire para cabina que utiliza las cualidades desodorizantes del bicarbonato de sodio ARM & HAMMER®. Estas dos reconocidas marcas han unido fuerzas para absorber olores y refrescar el aire.</br></p>');
                
        });
        
        
         $('#butonMotorcraft').on('click',function(e){
               
		     var myWindow = window.open("", "MsgWindow", "width=550,height=550");
			 $(myWindow.document.body).empty();
				myWindow.document.write('<img src="<?= base_url() ?>img/Motorcraft.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: La batería BateríasTotal cuenta con múltiples mejoras que están relacionadas con la calidad de los materiales y la potencia de arranque, proporcionando menor desgaste de la batería y una mejora considerable en su bolsillo.</br></p>');
              
    
            });
   
        
         $('#butonTudor').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				myWindow.document.write('<img src="<?= base_url() ?>img/anticongelante1.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: La batería BateríasTotal cuenta con múltiples mejoras que están relacionadas con la calidad de los materiales y la potencia de arranque, proporcionando menor desgaste de la batería y una mejora considerable en su bolsillo.</br></p>');
                    
        });
        

         $('#butonLth').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				myWindow.document.write('<img src="<?= base_url() ?>img/Tudor.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: La batería BateríasTotal cuenta con múltiples mejoras que están relacionadas con la calidad de los materiales y la potencia de arranque, proporcionando menor desgaste de la batería y una mejora considerable en su bolsillo.</br></p>');
                
        });
        

         $('#butonExide').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				 myWindow.document.write('<img src="<?= base_url() ?>img/Exide.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: Exide Start AGM, diseñada para aplicaciones en usos náuticos, autocaravanas y vehículos de emergencia, esta batería le garantizara una elevada potencia de arranque y un suministro constante de energía para los equipos electrónicos del barco o del vehículo. </br></p>');
            
    
        });
        
 
         $('#butonVarta').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				myWindow.document.write('<img src="<?= base_url() ?>img/Varta.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: Diseñada para el arranque de vehículos Mayor potencias de arranque en frio, hasta el 110%.Tecnología de rejilla PowerFrame que alarga la vida útil Cumple los requisitos primeros equipos.Norma EN; 100% sin mantenimientoMedidas: 2420x175x175cm</br></p>');
               
        });
        
        
         $('#butonMetalLube').on('click',function(e){
               
		      var myWindow = window.open("", "MsgWindow", "width=550,height=550");
             $(myWindow.document.body).empty();
               myWindow.document.write('<img src="<?= base_url() ?>img/MetalLube.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: anticongelante orgánico exento de nitritos, aminas, fosfatos y silicatos, especialmente formulado para cubrir las más duras exigencias de los sistemas de refrigeración de los vehículos actuales y motores estáticos, tanto por su bajo punto de congelación, como por su elevado punto de ebullición. Estas propiedades le permiten ser utilizado durante todo el año.</br></p>');
            
               
    
            });
   
        
         $('#butonaSonax').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				myWindow.document.write('<img src="<?= base_url() ?>img/Sonax.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: anticongelante orgánico exento de nitritos, aminas, fosfatos y silicatos, especialmente formulado para cubrir las más duras exigencias de los sistemas de refrigeración de los vehículos actuales y motores estáticos, tanto por su bajo punto de congelación, como por su elevado punto de ebullición. Estas propiedades le permiten ser utilizado durante todo el año.</br></p>');
                   
        });
        

         $('#butonliquiMolly').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				myWindow.document.write('<img src="<?= base_url() ?>img/liquiMolly.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: anticongelante orgánico exento de nitritos, aminas, fosfatos y silicatos, especialmente formulado para cubrir las más duras exigencias de los sistemas de refrigeración de los vehículos actuales y motores estáticos, tanto por su bajo punto de congelación, como por su elevado punto de ebullición. Estas propiedades le permiten ser utilizado durante todo el año.</br></p>');
               
        });
        

         $('#butonQualitor').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				myWindow.document.write('<img src="<?= base_url() ?>img/Qualitor.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: anticongelante orgánico exento de nitritos, aminas, fosfatos y silicatos, especialmente formulado para cubrir las más duras exigencias de los sistemas de refrigeración de los vehículos actuales y motores estáticos, tanto por su bajo punto de congelación, como por su elevado punto de ebullición. Estas propiedades le permiten ser utilizado durante todo el año.</br></p>');
            
    
        });
        
 
         $('#butonDriven').click(function(){
		  
		        var myWindow = window.open("", "MsgWindow", "width=550,height=550");
				$(myWindow.document.body).empty();
				myWindow.document.write('<img src="<?= base_url() ?>img/Driven.jpg" alt="Smiley face" height="420" width="420"></br><p>Descripción: anticongelante orgánico exento de nitritos, aminas, fosfatos y silicatos, especialmente formulado para cubrir las más duras exigencias de los sistemas de refrigeración de los vehículos actuales y motores estáticos, tanto por su bajo punto de congelación, como por su elevado punto de ebullición. Estas propiedades le permiten ser utilizado durante todo el año.</br></p>');
               
        });
       
    }

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
                $("#boton-cesta").fadeOut(1550);
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


