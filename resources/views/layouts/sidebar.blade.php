<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{ url('assets/images/faces/face8.jpg') }}" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">{{ Auth::user()->name }}</p>
            <small class="designation text-muted">BRI KANWIL</small>
            <span class="status-indicator online"></span>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item bg-primary">
      <a class="nav-link bg-primary">
        <span class="menu-title text-white">Main Navigation</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['/']) }}">
      <a class="nav-link" href="{{ url('home') }}">
        <i class="menu-icon mdi mdi-home "></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['grafik/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#dasboard" aria-expanded="{{ is_active_route(['dasboard/*']) }}"
        aria-controls="dasboard">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Grafik BRILink</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['grafik/*']) }}" id="dasboard">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['grafik/BRILink_KW']) }}">
            <a class="nav-link" href="{{ url('/grafik/BRILink_KW') }}">BRILink KW</a>
          </li>
          <li class="nav-item {{ active_class(['grafik/BRILink_KC']) }}">
            <a class="nav-link" href="{{ url('/grafik/BRILink_KC') }}">BRILink KC</a>
          </li>
          <li class="nav-item {{ active_class(['grafik/BRILink_PAB']) }}">
            <a class="nav-link" href="{{ url('/grafik/BRILink_PAB') }}">BRILink PAB</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['monitoring/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#monitoring"
        aria-expanded="{{ is_active_route(['monitoring/*']) }}" aria-controls="dasboard">
        <i class="menu-icon mdi mdi-chart-areaspline "></i>
        <span class="menu-title">Monitoring</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['monitoring/*']) }}" id="monitoring">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['monitoring/reliability']) }}">
            <a class="nav-link" href="{{ url('/monitoring/reliability') }}">Reliability</a>
          </li>
          <li class="nav-item {{ active_class(['monitoring/monitoringBriLinkKc']) }}">
            <a class="nav-link" href="{{ url('/monitoring/monitoringBriLinkKc') }}">Monitoring BRILink KC</a>
          </li>
          <li class="nav-item {{ active_class(['monitoring/monitoringBriLinkPab']) }}">
            <a class="nav-link" href="{{ url('/monitoring/monitoringBriLinkPab') }}">Monitoring BRILink PAB</a>
          </li>
          <li class="nav-item {{ active_class(['monitoring/briLinkAndroid']) }}">
            <a class="nav-link" href="{{ url('/monitoring/briLinkAndroid') }}">BRILink Android</a>
          </li>
          <li class="nav-item {{ active_class(['monitoring/produktifitasBriLink']) }}">
            <a class="nav-link" href="{{ url('/monitoring/produktifitasBriLink') }}">Produktifitas BRILink</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['laporMpos/laporMpos']) }}">
      <a class="nav-link" href="{{ url('/laporMpos/laporMpos') }}">
        <i class="menu-icon  mdi mdi-deskphone "></i>
        <span class="menu-title">Lapor Pemasangan MPOS</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['totalTrx/totalTrx']) }}">
      <a class="nav-link" href="{{ url('/totalTrx/totalTrx') }}">
        <i class="menu-icon mdi mdi-file "></i>
        <span class="menu-title">Total Trx/SV Kanca</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['topTrx/topTrx']) }}">
      <a class="nav-link" href="{{ url('/topTrx/topTrx') }}">
        <i class="menu-icon mdi mdi-file-check "></i>
        <span class="menu-title">Top Trx/SV Kanca</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['trackingEdc/trackingEdc']) }}">
      <a class="nav-link" href="{{ url('/trackingEdc/trackingEdc') }}">
        <i class="menu-icon  mdi mdi-file-find  "></i>
        <span class="menu-title">Tracking EDC</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['cekKodeEror/cekKodeEror']) }}">
      <a class="nav-link" href="{{ url('/cekKodeEror/cekKodeEror') }}">
        <i class="menu-icon   mdi mdi-alert-outline "></i>
        <span class="menu-title">Cek Kode Eror</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['panduanEdc/panduanEdc']) }}">
      <a class="nav-link" href="{{ url('/panduanEdc/panduanEdc') }}">
        <i class="menu-icon  mdi mdi-wrench "></i>
        <span class="menu-title">Panduan Kongfigurasi EDC</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['informasi/informasi']) }}">
      <a class="nav-link" href="{{ url('/informasi/informasi') }}">
        <i class="menu-icon   mdi mdi-information-outline "></i>
        <span class="menu-title">Informasi</span>
      </a>
    </li>
    <li class="nav-item bg-primary">
      <a class="nav-link bg-primary">
        <span class="menu-title text-white">Admin Navigation</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['masterData/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#masterData" aria-expanded="{{ is_active_route(['masterData/*']) }}"
        aria-controls="masterData">
        <i class="menu-icon mdi mdi-database"></i>
        <span class="menu-title">Master Data</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['masterData/*']) }}" id="masterData">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['masterData/briLinkTarketKc']) }}">
            <a class="nav-link" href="{{ url('/masterData/briLinkTargetKc') }}">BRILink Target KC</a>
          </li>
          <li class="nav-item {{ active_class(['masterData/briLinkTarketPab']) }}">
            <a class="nav-link" href="{{ url('/masterData/briLinkTargetPab') }}">BRILink Target PAB</a>
          </li>
          <li class="nav-item {{ active_class(['masterData/briLinkBobot']) }}">
            <a class="nav-link" href="{{ url('/masterData/briLinkBobot') }}">BRILink Bobot</a>
          </li>
          <li class="nav-item {{ active_class(['masterData/briLinkPic']) }}">
            <a class="nav-link" href="{{ url('/masterData/briLinkPic') }}">BRILink PIC</a>
          </li>
          <li class="nav-item {{ active_class(['masterData/briLinkData']) }}">
            <a class="nav-link" href="{{ url('/masterData/briLinkData') }}">BRILink Data</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['report/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#report" aria-expanded="{{ is_active_route(['report/*']) }}"
        aria-controls="report">
        <i class="menu-icon mdi mdi-book-open"></i>
        <span class="menu-title">Report</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['report/*']) }}" id="report">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['report/pencapaianRka']) }}">
            <a class="nav-link" href="{{ url('/report/pencapaianRka') }}">Pencapaian RKA</a>
          </li>
        </ul>
      </div>
    </li>

    {{-- template --}}

    {{-- <li class="nav-item {{ active_class(['a/a']) }}">
      <a class="nav-link" href="{{ url('/a/a') }}">
        <i class="menu-icon "></i>
        <span class="menu-title"></span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['basic-ui/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-expanded="{{ is_active_route(['basic-ui/*']) }}"
        aria-controls="basic-ui">
        <i class="menu-icon mdi mdi-dna"></i>
        <span class="menu-title">Basic UI Elements</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['basic-ui/*']) }}" id="basic-ui">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['basic-ui/buttons']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/buttons') }}">Buttons</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/dropdowns']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/dropdowns') }}">Dropdowns</a>
          </li>
          <li class="nav-item {{ active_class(['basic-ui/typography']) }}">
            <a class="nav-link" href="{{ url('/basic-ui/typography') }}">Typography</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item {{ active_class(['charts/chartjs']) }}">
      <a class="nav-link" href="{{ url('/charts/chartjs') }}">
        <i class="menu-icon mdi mdi-chart-line"></i>
        <span class="menu-title">Charts</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['tables/basic-table']) }}">
      <a class="nav-link" href="{{ url('/tables/basic-table') }}">
        <i class="menu-icon mdi mdi-table-large"></i>
        <span class="menu-title">Tables</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['icons/material']) }}">
      <a class="nav-link" href="{{ url('/icons/material') }}">
        <i class="menu-icon mdi mdi-emoticon"></i>
        <span class="menu-title">Icons</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['user-pages/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#user-pages"
        aria-expanded="{{ is_active_route(['user-pages/*']) }}" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['user-pages/*']) }}" id="user-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['user-pages/login']) }}">
            <a class="nav-link" href="{{ url('/user-pages/login') }}">Login</a>
          </li>
          <li class="nav-item {{ active_class(['user-pages/register']) }}">
            <a class="nav-link" href="{{ url('/user-pages/register') }}">Register</a>
          </li>
          <li class="nav-item {{ active_class(['user-pages/lock-screen']) }}">
            <a class="nav-link" href="{{ url('/user-pages/lock-screen') }}">Lock Screen</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://www.bootstrapdash.com/demo/star-laravel-free/documentation/documentation.html"
        target="_blank">
        <i class="menu-icon mdi mdi-file-outline"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li> --}}
  </ul>
</nav>
