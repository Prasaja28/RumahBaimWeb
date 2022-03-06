<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <img class="navbar-brand-full" width="30" height="30" src="{{ url('img/logorb.png') }}"
        alt="RumahBaim"><span style="color: #F17922">Rumah Baim</span>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html"><span style="color: #F17922">RB</span></a>
    </div>
    <ul class="sidebar-menu">
        <li class="nav-item dropdown active">
          <a href="{{ url('/dashboard') }}" class="nav-link"><i class="fas fa-home"></i><span>Dashboard</span></a>
        </li>
        <li class="nav-item dropdown active">
          <a href="{{ url('/admin-portofolio') }}" class="nav-link"><i class="fas fa-fire"></i><span>Portofolio</span></a>
        </li>
        <li class="nav-item dropdown active">
          <a href="{{ url('/admin-layanan') }}" class="nav-link"><i class="fas fa-fire"></i><span>Layanan Jasa</span></a>
        </li>
        <li class="nav-item dropdown active">
          <a href="{{ url('/admin-faq') }}" class="nav-link"><i class="fas fa-question"></i><span>FAQ</span></a>
        </li>
        <li class="nav-item dropdown active">
          <a href="{{ url('/admin-contact') }}" class="nav-link"><i class="fas fa-fire"></i><span>Contact</span></a>
        </li>
        <li class="nav-item dropdown active">
          <a href="{{ url('/admin-akun') }}" class="nav-link"><i class="fas fa-mail-bulk"></i><span>Akun</span></a>
        </li>
    </ul>
  </aside>
</div>