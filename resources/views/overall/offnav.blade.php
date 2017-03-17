<!-- Main navbar -->
<div class="navbar navbar-inverse">
  <div class="navbar-header">
    <a class="navbar-brand" href="index.html"><img src="{{ URL::asset('assets/images/logo_light.png') }}" alt=""></a>

    <ul class="nav navbar-nav pull-right visible-xs-block">
      <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
    </ul>
  </div>

  <div class="navbar-collapse collapse" id="navbar-mobile">
    <ul class="nav navbar-nav navbar-right">
      <li>
        <a href="#">
          <i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Ir al Sitio Web</span>
        </a>
      </li>

      <li>
        <a href="#">
          <i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Contactar al administrador</span>
        </a>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">
          <i class="icon-cog3"></i>
          <span class="visible-xs-inline-block position-right"> Opciones</span>
        </a>
        <ul class="dropdown-menu">
          <li><a class="espana"><img src="{{ URL::asset('assets/images/flags/es.png') }}" alt=""> España</a></li>
        </ul>

      </li>
    </ul>
  </div>
</div>
<!-- /main navbar -->
