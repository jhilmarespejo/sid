<div class="menu">
    <nav class="navbar navbar-expand-lg navbar-light menu">
  <a class="navbar-brand" href="#" style="color: white;" >Menú ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav menu">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          NNA
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php echo $this->Html->link('Registros', ['controller' => 'nna','action' => 'index'], array('escape'=>false, 'class' => 'dropdown-item')  ); ?>
          <?php echo $this->Html->link('Nuevo registro', ['controller' => 'nna','action' => 'add'], array('escape'=>false, 'class' => 'dropdown-item')  ); ?>
        </div>
      </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          USUARIOS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <?php echo $this->Html->link('Registros', ['controller' => 'users','action' => 'index'], array('escape'=>false, 'class' => 'dropdown-item')  ); ?>
          <?php echo $this->Html->link('Nuevo registro', ['controller' => 'users','action' => 'add'], array('escape'=>false, 'class' => 'dropdown-item')  ); ?>
        </div>
      </li>

      <li class="nav-item">
       <?php echo $this->Html->link('SALIR', ['controller' => 'users','action' => 'logout'], array('escape'=>false, 'class' => 'nav-link')  ); ?>
      </li>
    </ul>
  </div>
</nav>
</div>