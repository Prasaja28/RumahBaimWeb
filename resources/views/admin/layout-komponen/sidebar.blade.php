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
        <li class="nav-item dropdown {{ (request()->is('dashboard*')) ? 'active' : '' }}">
          <a href="{{ url('/dashboard') }}" class="nav-link"><i class="fas fa-home"></i><span>Beranda</span></a>
        </li>
        <li class="nav-item dropdown {{ (request()->is('admin-profil*')) ? 'active' : '' }}">
          <a href="{{ url('/admin-profil') }}" class="nav-link"><i class="fas fa-fire"></i><span>Profil</span></a>
        </li>       
        <li class="nav-item dropdown {{ (request()->is('admin-porto*')) ? 'active' : '' }}">
          <a href="{{ url('/admin-porto') }}" class="nav-link"><i class="fas fa-bookmark"></i><span>Portofolio</span></a>
        </li>
        <li class="nav-item dropdown {{ (request()->is('admin-galeri*')) ? 'active' : '' }}">
          <a href="{{ url('/admin-galeri') }}" class="nav-link"><i class="fas fa-image"></i><span>Galeri Portofolio</span></a>
        </li>
        <li class="nav-item dropdown {{ (request()->is('admin-faq*')) ? 'active' : '' }}">
          <a href="{{ url('/admin-faq') }}" class="nav-link"><i class="fas fa-question"></i><span>Tanya Jawab</span></a>
        </li>
        <li class="nav-item dropdown {{ (request()->is('admin-akun*')) ? 'active' : '' }}">
          <a href="{{ url('/admin-akun') }}" class="nav-link"><i class="fas fa-mail-bulk"></i><span>Akun</span></a>
        </li>
    </ul>
  </aside>
</div>