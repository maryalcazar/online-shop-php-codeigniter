<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#myPage">QUATRERODES SL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar-right">
      <!--PARA TODO -->
        <li><a href="<?= base_url() ?>index.php">HOME</a></li>
        <form class="navbar-form navbar-right" role="form">    
            <a id="registrar" href="<?= base_url() ?>index.php/register" class="btn btn-primary btn-success"><span class="glyphicon glyphicon-share"></span> Registrar</a>
            <a id="login" href="<?= base_url() ?>index.php/logueo" class="btn btn-primary btn-primary"><span class="glyphicon glyphicon-share-alt"></span> Entrar</a>
        </form>
      </ul>
    </div>
  </div>
</nav>