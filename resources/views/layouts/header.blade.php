<header class="header black-bg">
    <div class="sidebar-toggle-box">
      <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <!--logo start-->
    <a href="index.html" class="logo"><b>COL<span>LEGE</span></b></a>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
      <!--  notification start -->
      <ul class="nav top-menu">
        
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-users"> Gestion des classes</i>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">Gestion des classes</p>
              </li>
              <li>
                <a href="{{route('classes')}}">
                  <span class="label label-danger"><i class="fa fa-th"></i></span>
                  Afficher la liste des classes.
                  </a>
              </li>
              <li>
                <a href="{{route('matieres')}}">
                  <span class="label label-danger"><i class="fa fa-th"></i></span>
                  Afficher la liste des matières.
                  </a>
              </li>
              
            </ul>
          </li>
          <!-- notification dropdown end -->

          <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-users"> Gestion des étudiants</i>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">Gestion des étudiants</p>
              </li>
              <li>
                <a href="{{route('etudiants')}}">
                  <span class="label label-danger"><i class="fa fa-users"></i></span>
                  Afficher la liste des étudiants.
                  </a>
              </li>
              <li>
                <a href="{{route('create_etudiant')}}">
                  <span class="label label-warning"><i class="fa fa-plus"></i></span>
                  Enregistrer un étudiant
                  </a>
              </li>
              <li>
                <a href="{{route('create_inscription')}}">
                  <span class="label label-success"><i class="fa fa-users"></i></span>
                  Inscrire un étudiant
                  </a>
              </li>
              <li>
                <a href="{{route('inscriptions')}}">
                  <span class="label label-success"><i class="fa fa-users"></i></span>
                  Afficher les étudiants inscripts.
                  </a>
              </li>
              
            </ul>
          </li>
          <!-- notification dropdown end -->

        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-book"> Gestion des notes</i>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">Gestion des notes</p>
              </li>
              <li>
                <a href="{{route('notes')}}">
                  <span class="label label-danger"><i class="fa fa-users"></i></span>
                  Afficher la liste des notes.
                  </a>
              </li>
              <li>
                <a href="{{route('create_note')}}">
                  <span class="label label-warning"><i class="fa fa-plus"></i></span>
                  Enregistrer une note
                  </a>
              </li>
              
            </ul>
          </li>
          <!-- notification dropdown end -->

          <!-- settings start -->
        
            
        <!-- settings end -->
        
      </ul>
      <!--  notification end -->
    </div>
    <div class="top-menu">
      <ul class="nav pull-right top-menu">
        <form action="{{route('logout')}}" method="post">
          @csrf
          <button class="btn btn-primary" style="margin-top: 8%" type="submit"><i class="fa fa-power-off"></i> Se déconnecter</button>
        </form>
      </ul>
    </div>
  </header>