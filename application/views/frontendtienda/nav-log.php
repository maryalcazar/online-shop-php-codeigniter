<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#myPage">QUATRERODES SL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= base_url() ?>index.php">HOME</a></li>
        <form class="navbar-form navbar-right" role="form">  
            <a href="#" class="btn btn-primary btn-success" id="cesta"><span class="glyphicon glyphicon-shopping-cart"></span> Cesta <span class="badge"></span></a>
            <a id="perfil" href="<?= base_url() ?>index.php/perfil" class="btn btn-warning"><span class="glyphicon glyphicon-user"></span> Perfil</a>
            <a href="<?= base_url() ?>index.php/sess/logout" class="btn btn-primary btn-danger"><span class="glyphicon glyphicon-log-out"></span> Log Out</a>
        </form>
      </ul>
    </div>
  </div>
</nav>