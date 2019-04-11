	<script type="text/javascript">
function getCookie(c_name){
    var c_value = document.cookie;
    var c_start = c_value.indexOf(" " + c_name + "=");
    if (c_start == -1){
        c_start = c_value.indexOf(c_name + "=");
    }
    if (c_start == -1){
        c_value = null;
    }else{
        c_start = c_value.indexOf("=", c_start) + 1;
        var c_end = c_value.indexOf(";", c_start);
        if (c_end == -1){
            c_end = c_value.length;
        }
        c_value = unescape(c_value.substring(c_start,c_end));
    }
    return c_value;
}
 
function setCookie(c_name,value,exdays){
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
    document.cookie=c_name + "=" + c_value;
}
 
if(getCookie('tiendaaviso')!="1"){
    document.getElementById("barraaceptacion").style.display="block";
}
function PonerCookie(){
    setCookie('tiendaaviso','1',365);
    document.getElementById("barraaceptacion").style.display="none";
}

</script>
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">¡Bienvenido!</div>
                <div class="intro-heading">Es un placer conocerte</div>
                <a href="#about" class="page-scroll btn btn-xl">Conoce más sobre nosotros</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Servicios</h2>
                    <h3 class="section-subheading text-muted">Estos son nuestros servicios:</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-warning"></i>
                        <i class="fa fa-cog fa-spin fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Reparaciones</h4>
                    
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-warning"></i>
                        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Pre ITV</h4>
                    
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-warning"></i>
                        <i class="fa fa-car fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Cambio y ajuste de neumáticos</h4>
                   
                </div>
				<div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-warning"></i>
                        <i class="fa fa-support fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Cambio de aceite</h4>
                   
                </div>
				<div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-warning"></i>
                        <i class="fa fa-flash fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Reparación aire acondicionado</h4>
                   
                </div>
				<div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-warning"></i>
                        <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Revisiones</h4>
                   
                </div>
            </div>
        </div>
    </section>
	<style>
#formulariopresupuesto{float:left;}
#pasos{float:right; 
				width:350px; 
			
			margin-right:10%;
			margin-top:10%;
			padding: 30px 30px 30px 30px;}
			
	#barraaceptacion {
    display:none;
    position:fixed;
    left:0px;
    right:0px;
    bottom:15px;
    padding-bottom:0px;
    width:100%;
    text-align:center;
    min-height:40px;
    color:#fff;
    z-index:99999;
}
 
.inner {
    width:100%;
    position:absolute;
    padding-left:5px;
    font-family:verdana;
    font-size:12px;
    top:30%;
	background-color: rgba(0, 0, 0, 0.5);
}
 
.inner a.ok {
    padding:4px;
    color:#00ff2e;
    text-decoration:none;
}
 
.inner a.info {
    padding-left:5px;
    text-decoration:none;
    color:#faff00;
}

			
		
	</style>
    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Pide presupuesto</h2>
					<p>¡El formulario no ha podido enviarse con exito, intentalo de nuevo!</p>
                   <div id="formulariopresupuesto">
				<form action="<?= base_url() ?>index.php/sendbymail/sendbymail" method="post" enctype="multipart/form-data" onsubmit="return validacion()">
					
						Nombre y apellidos*</br><input type="text" name="nombre" id="nombre" value="" /></br>
						<span  id="errornombre" class="error" style="color: red;"></span>
						Email* </br><input type="text" name="email" value="" id="email" /></br>
						<span  id="erroremail" class="error" style="color: red;"></span>
						Teléfono*</br><input type="text" name="tlf" id="tlf" value="" size="10" maxlength="9" /></br>
						<span  id="errortelefono" class="error" style="color: red;"></span>
						Marca y modelo del vehiculo*</br> <input type="text" name="marca" id="marca" value="" /></br>
						<span  id="errormarca" class="error" style="color: red;"></span>
					
						<p>cuéntanos qué necesitas*</br></p>
						<textarea id="descripcion" name="descripcion" cols="40" rows="5"></textarea>

					</br>
					<p>Los campos marcados con * son obligatorios</p>
					<input type="submit" value="Pide presupuesto" />
				</form>
				</div>
				<div id="pasos">
					<ul>
						<li>1.Contactamos contigo en menos de 24h para resolverte todas las dudas.</li></br>
						<li>2.Preparamos el mejor presupuesto adaptado a tus necesidades.</li></br>
						<li>3.Esperamos tu confirmación para ofrecerte el servicio de reparación más rápido.</li>
					</ul>
				</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Sobre nosotros</h2>
                    <h3 class="section-subheading text-muted">¿Quienes sómos?</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?= base_url() ?>img/sobrenosotros/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>1995</h4>
                                    <h4 class="subheading">Abrimos nuestras puertas</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Somos un taller con amplia experiencia en reparación de automóviles, nuestro equipo te facilitará atención personalizada y asesoramiento. </p>
                                </div>
                            </div>
                        </li>
						<li class="timeline-inverted">
							<div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?= base_url() ?>img/about/2.jpg" alt="">
							</div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2016</h4>
                                    <h4 class="subheading">Nuestra tienda online está a su disposición</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Hemos decidido acercarnos más a nuestros clientes, posibilitando comprar nuestros productos sin tener que salir de casa, sólo tiende que registrarse en nenuestra página web yya podrácomprar nuestros productos.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-image">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?= base_url() ?>img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    
                                    <h4 class="subheading">Le recordamos</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Puede contactar con nosotros ya sea a través del telefono, que encontrará en el apatado de contacto o  bien puede pedir cita en el aparatado de nuestra web, es rápido y sencillo. </p>
                                </div>
                            </div>
                        </li>
                        
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="<?= base_url() ?>img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    
                                    <h4 class="subheading">Tenemos un compromiso con usted</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">En nuestro taller cuidaremos su coche y le aseguraremos una reparación rápida para ocasionarle minimas molestias.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Forma parte
                                    <br>De  nuestra
                                    <br>Historia!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
	
    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Pide cita</h2>
                    <form action="" method="post" enctype="multipart/form-data" onsubmit="return validacion2()">
				
					<fieldset>
						<legend>Datos personales</legend></br>
						Nombre y apellidos*<input type="text" name="nombre2" value=""  id="nombre2"/><span  id="errornombre2" class="error" style="color: red;"></span>
						Email* <input type="text" name="email2" value="" id="email2"/><span  id="erroremail2" class="error" style="color: red;"></span>
						Teléfono*<input type="text" name="tlf2" value="" size="10" maxlength="9" id="tlf2" /><span  id="errortelefono2" class="error" style="color: red;"></span>
					</fieldset>
					</br></br>
					<fieldset>
						<legend>Datos del vehiculo</legend></br>
						Marca*<input type="text" name="marca2" value="" id="marca2"/><span  id="errormarca2" class="error" style="color: red;"></span>
						Modelo*<input type="text" name="modelo2" value="" id="modelo2"/><span  id="errormodelo2" class="error" style="color: red;"></span>
						Matrícula*<input type="text" name="matricula2" value="" size="10" maxlength="9"id="matricula2" /><span  id="errormatricula2" class="error" style="color: red;"></span>
					</fieldset>
					</br></br>
					<fieldset>
						<legend>Descripción de la avería*</legend></br>
						<textarea id="descripcion2" name="descripcion2" cols="40" rows="5"></textarea>
					</fieldset>
					</br></br>
					<p>Los campos marcados con * son obligatorios</p>
					<input type="submit" value="Enviar" />
				</form>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contacto</h2>
                    <h3 class="section-subheading text-muted">Pongase en contacto con nosotros.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    
                     <div class="col-md-4">
                            
                                    
                                        Tlf.<br>
                                        Correo:<br>
                                        Dirección:<br>
                                </h3>
                 
                            </div>
                <!-- mapa de google-->
                    <div class="col-xs-8">
                        <div id="googleMap" style="height:400px;width:100%;"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
		<script>
		var myCenter = new google.maps.LatLng(39.456055, -0.391756);

		function initialize() {
		var mapProp = {
		center:myCenter,
		zoom:17,
		scrollwheel:false,
		draggable:false,
		mapTypeId:google.maps.MapTypeId.ROADMAP
		};

		var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

		var marker = new google.maps.Marker({
		position:myCenter,
		});

		marker.setMap(map);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
		</script>

    <footer>
			 <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
						<!--arbol nodos-->
							 <!--<li class="hidden"><a href="#page-top"></a></li>-->
							<a class="page-scroll" href="#services">Servicios</a>&nbsp&nbsp&nbsp
							<a class="page-scroll" href="#portfolio">Pide presupuesto</a>&nbsp&nbsp&nbsp
							<a class="page-scroll" href="#about">Sobre nosotros</a>&nbsp&nbsp&nbsp
							<a class="page-scroll" href="#team">Pide cita</a>&nbsp&nbsp&nbsp
							<a class="page-scroll" href="#contact">Contacto</a>&nbsp&nbsp&nbsp
							<a href="<?= base_url() ?>index.php/tienda">Tienda</a>&nbsp&nbsp&nbsp

                            
                    </div>
                </div>
            </div>
        </div>
         <a href="http://politicadecookies.com/" target="_blank"><img src="img/cookie.png" alt="politica-cookies" id="imgfooter" /></a>
		
		<div style="display: block;" id="barraaceptacion">
		<div class="inner">
        Solicitamos su permiso para obtener datos estadísticos de su navegación en esta web, en cumplimiento del Real 
        Decreto-ley 13/2012. Si continúa navegando consideramos que acepta el uso de cookies.
        <a href="javascript:void(0);" class="ok" onclick="PonerCookie();"><b>OK</b></a> | 
        <a href="http://politicadecookies.com" target="_blank" class="info">Más información</a>
		</div>
		</div>
        
    </footer>
	<!--validacionformularios-->
	<script type="text/javascript" src="<?= base_url() ?>js/validation.js"></script>
    
    <!-- jQuery -->
    <script src="<?= base_url() ?>js/jstemplatenueva/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url() ?>js/jstemplatenueva/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?= base_url() ?>js/jstemplatenueva/classie.js"></script>
    <script src="<?= base_url() ?>js/jstemplatenueva/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?= base_url() ?>js/jstemplatenueva/jqBootstrapValidation.js"></script>
    <script src="<?= base_url() ?>js/jstemplatenueva/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url() ?>js/jstemplatenueva/agency.js"></script>

</body>

</html>
