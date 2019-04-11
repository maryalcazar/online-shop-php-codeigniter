<style>
.imagen{
    background: url("<?= base_url() ?>img/about/logo/1.jpg") 5% 50% no-repeat;
    min-height: 100px;
    padding: 20px;
    text-align: right;
}
</style>


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
	<div class="col-lg-2" >
	
	<p class="imagen"></p></div>
    
	<div class="navbar-header">

      <a class="navbar-brand" href="#myPage">QUATRERODES SL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar-right">
      <!--PARA TODO -->
              <li class="hidden"><a href="#page-top"></a></li>

         <li><a class="page-scroll" href="#portfolio">Pide presupuesto</a></li>
         <li><a class="page-scroll" href="#about">Sobre nosotros</a></li>
         <li><a class="page-scroll" href="#team">Pide cita</a></li>
         <li><a class="page-scroll" href="#contact">Contacto</a></li>
         
        <li><a href="<?= base_url() ?>index.php/tienda">Tienda</a></li>
        <form class="navbar-form navbar-right" role="form">    
            <a id="registrar" href="<?= base_url() ?>index.php/register" class="btn btn-xs btn-primary btn-success"><span class="glyphicon glyphicon-share"></span> Registrar</a>
            <a id="login" href="<?= base_url() ?>index.php/logueo" class="btn  btn-xs btn-primary btn-primary"><span class="glyphicon glyphicon-share-alt"></span> Entrar</a>
        </form>
      </ul>
    </div>
  </div>
</nav>