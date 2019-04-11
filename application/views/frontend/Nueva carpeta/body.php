<div class="container-fluid bg-grey">
    <div class="row">
    <div class="col-sm-4">
    </br></br>
      <span class="glyphicon glyphicon-leaf logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      </br></br>
      <h2 class="blanco">NUESTRA EMPRESA</h2><br>
      <h4 class="blanco"><strong>Ayudar:</strong> Pinturitas Express tiene más de 20 años de experiencia en el área de pintura. Basamos nuestra filosofía de empresa en una estrecha colaboración con nuestros clientes, resultado de confianza, compromiso y el alto nivel de calidad. 
Ofrecemos servicios de pintura, mantenimiento, reformas, obra pequeña, rehabilitación de fachadas, estudios de diseño y decoración.
 Estamos ubicados en el centro de Valencia, efectuando trabajos en toda la Comunidad Valenciana.</h4><br>
       </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>NUESTROS SERVICIOS</h2>
  <h4>¿Que ofrecemos?</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo-small"></span>
      <h4>Realizamos trabajos en distintas localizaciones</h4>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-fire logo-small"></span>
      <h4>Rehabilitación de fachadas</h4>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-euro logo-small"></span>
      <h4>Decoración en pintura a buenos precios</h4>
    </div>
  </div>
 
  
</div>

<!-- Container (Portfolio Section) -->
<div id="myCarousel" class="carousel slide bg-grey text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4 class="blanco"><img src="<?= base_url() ?>img/1.jpg"><br><br><span style="font-style:normal;"><i>Garantizamos un servicio de calidad, contacte con nosotros.</i></span></h4>
      </div>
      <div class="item">
       <h4 class="blanco"><img src="<?= base_url() ?>img/2.jpg"><br><br><span style="font-style:normal;"><i>Pintura mural y decorativa</i></span></h4>
      </div>
      <div class="item">
       <h4 class="blanco"><img src="<?= base_url() ?>img/3.jpg"><br><br><span style="font-style:normal;"><i>Trabajamos en edificación residencial y no residencial</i></span></h4>
      </div>
      <div class="item">
       <h4 class="blanco"><img src="<?= base_url() ?>img/4.jpg"><br><br><span style="font-style:normal;"><i>Tu decisión es importante para nosotros</i></span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>    

<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Precios pinturas</h2>
    <h4>Para más catalogo, visita nuestros productos</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-6 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pintura Interior</h1>
        </div>
        <div class="panel-body">
          <p>Pinturas para fachadas, para hierro y metal y para superficies especiales como piscinas, barbacoas...</p>
          <p>Deja tus fachadas como nuevas con nuestra amplia variedad de pinturas.</p>
          <p><strong>Servicio a domicilio</strong></p>
        </div>
        <div class="panel-footer">
          <h3>Desde 5€</h3>
          <button class="btn btn-lg">Tienda</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-6 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pintura Exterior</h1>
        </div>
        <div class="panel-body">
          <p>Decora tus paredes con los colores más actuales y los efectos más novedosos de forma fácil y rápida.</p>
          <p><strong>Calidad/Precio</strong></p>
          <p><strong>Visita nuestros productos en la tienda para más información</strong></p>
        </div>
        <div class="panel-footer">
          <h3>Desde 10€</h3>
          <button class="btn btn-lg">Tienda</button>
        </div>
      </div>      
    </div>       
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Si desea algún producto que no tenemos en Stock, contactanos y te responderemos lo antes posible</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>España</p>
      <p><span class="glyphicon glyphicon-phone"></span>66578536</p>
      <p><span class="glyphicon glyphicon-envelope"></span> PinturitasSexis@pinturas.com</p>	   
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Introduce nombre" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Introduce email ^^" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Haznos tu pregunta" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Enviar</button>
        </div>
      </div>	
    </div>
  </div>
</div>

<div id="googleMap" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(39.472643, -0.374823);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:12,
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