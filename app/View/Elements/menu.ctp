 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Zapateria HenAlmeida&nbsp;&nbsp;</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><?php echo $this->Html->link('Inicio', array('controller' => 'pages', 'action' => 'home'), array('class' => 'navbar-brand')) ?></li>

 <li class="dropdown">
              <a href="#" class="dropdown-toggle"
             data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista de Usuarios', array('controller' => 'usuarios', 'action' => 'index')) ?></li>
               <li><?php echo $this->Html->link('Nuevo Usuario', array('controller' => 'usuarios', 'action' => 'add')) ?></li>
              </ul>
     </li>

     <li class="dropdown">
              <a href="#" class="dropdown-toggle"
             data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Puestos de Trabajo <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista de Puestos', array('controller' => 'puestos', 'action' => 'index')) ?></li>
               <li><?php echo $this->Html->link('Asignar Puesto', array('controller' => 'puestos', 'action' => 'add')) ?></li>
              </ul>
     </li>

     <li class="dropdown">
              <a href="#" class="dropdown-toggle"
             data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Zapatos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Lista de Zapatos', array('controller' => 'zapatos', 'action' => 'index')) ?></li>
               <li><?php echo $this->Html->link('Nuevo Zapato', array('controller' => 'zapatos', 'action' => 'add')) ?></li>

               <li><?php echo $this->Html->link('Modelos', array('controller' => 'modelos', 'action' => 'index')) ?></li>
               <li><?php echo $this->Html->link('Marcas', array('controller' => 'marcas', 'action' => 'index')) ?></li>
              </ul>

     </li>

            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>

                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div> 
      

    
      


    