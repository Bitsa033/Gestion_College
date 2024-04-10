<aside>
    <div id="sidebar" class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu" id="nav-accordion">
        <p class="centered"><a href="profile.html"><img src="Dashio\img\friends\images.png" class="img-circle" width="80"></a></p>
        <h5 class="centered">{{ Auth::user()->name }}</h5>
        <li class="mt">
          <a class="active" href="{{ route('acceuil') }}">
            <i class="fa fa-dashboard"></i>
            <span>Acceuil</span>
            </a>
        </li>
        
      </ul>
      <!-- sidebar menu end-->
    </div>
  </aside>