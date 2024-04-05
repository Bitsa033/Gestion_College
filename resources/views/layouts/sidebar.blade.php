<aside>
    <div id="sidebar" class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu" id="nav-accordion">
        <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
        <h5 class="centered">{{ Auth::user()->name }}</h5>
        <li class="mt">
          <a class="active" href="{{ route('acceuil') }}">
            <i class="fa fa-dashboard"></i>
            <span>Acceuil</span>
            </a>
        </li>
        <li class="sub-menu">
          <a href="javascript:;">
            <i class="fa fa-desktop"></i>
            <span>Gestion des classes</span>
            </a>
          <ul class="sub">
            <li><a href="{{ route('classes') }}">Afficher les classes</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;">
            <i class="fa fa-cogs"></i>
            <span>Gestion des matières</span>
            </a>
          <ul class="sub">
            <li><a href="{{ route('matieres') }}">Afficher les matières</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;">
            <i class="fa fa-users"></i>
            <span>Gestion des étudiants</span>
            </a>
          <ul class="sub">
            <li><a href="{{ route('etudiants') }}">Afficher les étudiants</a></li>
            <li><a href="{{ route('matieres') }}">Enregistrer un étudiant</a></li>
          </ul>
        </li>
        <li class="sub-menu">
          <a href="javascript:;">
            <i class="fa fa-tasks"></i>
            <span>Gestion des notes</span>
            </a>
          <ul class="sub">
            <li><a href="{{ route('matieres') }}">Afficher les notes</a></li>
          </ul>
        </li>
        
        <li>
          <a href="google_maps.html">
            <i class="fa fa-map-marker"></i>
            <span>Google Maps </span>
            </a>
        </li>
      </ul>
      <!-- sidebar menu end-->
    </div>
  </aside>