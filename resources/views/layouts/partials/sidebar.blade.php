<!-- aside -->
<div id="aside" class="app-aside modal fade folded md nav-expand">
    <div class="left navside indigo-900 dk" layout="column">
    <div class="navbar navbar-md no-radius">
      <!-- brand -->
      <a class="navbar-brand">
          <div ui-include="'../assets/images/logo.svg'"></div>
          <img src="{!! asset('assets/images/LogoYayasan.png') !!}" alt="Logo Yayasan Nurul Huda Kertawangunan" class="hide">
          <span class="hidden-folded inline" style="font-size: 12pt">Nurul Huda<br>Kertawangunan</span>
      </a>
      <!-- / brand -->
    </div>
    <div flex class="hide-scroll">
      <nav class="scroll nav-active-primary">
        
          <ul class="nav" ui-nav>
            <li class="nav-header hidden-folded">
              <small class="text-muted">Main Menu</small>
            </li>
            
            <li>
              <a href="{{ url('/') }}" >
                <span class="nav-icon">
                  <i class="material-icons">&#xe871;
                    <span ui-include="'../assets/images/i_1.svg'"></span>
                  </i>
                </span>
                <span class="nav-text">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="dashboard.html" >
                <span class="nav-icon">
                  <i class="material-icons">&#xe7fd;
                    <span ui-include="'../assets/images/i_0.svg'"></span>
                  </i>
                </span>
                <span class="nav-text">Biodata</span>
              </a>
            </li>
            <li>
              <a href="dashboard.html" >
                <span class="nav-icon">
                  <i class="material-icons">&#xe2c9;
                    <span ui-include="'../assets/images/i_0.svg'"></span>
                  </i>
                </span>
                <span class="nav-text">Dokumen</span>
              </a>
            </li>
            <li>
              <a href="dashboard.html" >
                <span class="nav-icon">
                  <i class="material-icons">&#xe227;
                    <span ui-include="'../assets/images/i_0.svg'"></span>
                  </i>
                </span>
                <span class="nav-text">Keuangan</span>
              </a>
            </li>            
        
            <li>
              <a>
                <span class="nav-caret">
                  <i class="fa fa-caret-down"></i>
                </span>
                <span class="nav-icon">
                  <i class="material-icons">&#xe14f;
                    <span ui-include="'../assets/images/i_1.svg'"></span>
                  </i>
                </span>
                <span class="nav-text">Ujian</span>
              </a>
              <ul class="nav-sub">
                <li>
                  <a href="inbox.html" >
                    <span class="nav-text">Riwayat Ujian</span>
                  </a>
                </li>
              </ul>
            </li>
        
            <li class="nav-header hidden-folded">
              <small class="text-muted">Help</small>
            </li>
        
            <li>
              <a>
                <span class="nav-caret">
                  <i class="fa fa-caret-down"></i>
                </span>
                <span class="nav-icon">
                  <i class="material-icons">&#xe429;
                    <span ui-include="'../assets/images/i_4.svg'"></span>
                  </i>
                </span>
                <span class="nav-text">Settings</span>
              </a>
              <ul class="nav-sub nav-mega nav-mega-3">
                <li>
                  <a href="arrow.html" >
                    <span class="nav-text">Profile</span>
                  </a>
                </li>
              </ul>
            </li>        
        
          </ul>
      </nav>
    </div>
    <div flex-no-shrink>
      <div ui-include="'../views/blocks/aside.bottom.0.html'"></div>
    </div>
  </div>
</div>
<!-- / aside -->