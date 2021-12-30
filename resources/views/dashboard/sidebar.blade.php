<aside class="main-sidebar elevation-4" style="background: #9397A7;">
<?php session_start() ?>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-4 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          {{-- <a class="d-block link-tidak-aktif"><?= $_SESSION['user']['nama'] ?></a> --}}
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-5">
        <ul class="nav nav-pills nav-sidebar flex-column">
              <li class="nav-item mt-3 mb-3">
                <a href="{{ route('profil')}}" class="nav-link">
                  <img class="w-5 h-5" width="24px" src="{{ asset('img/profil.png') }}">
                  <p class="ml-2">Profil Akun</p>
                </a>
              </li>
              <li class="nav-item mt-3 mb-3">
                <a href="{{ route('pendaftar') }}" class="nav-link">
                  <img class="w-5 h-5" width="24px" src="{{ asset('img/pendaftar.png') }}">
                  <p class="ml-2">Data Pendaftar</p>
                </a>
              </li>
              <li class="nav-item mt-3 mb-3">
                <a href="{{ route('kepengurusan')}}" class="nav-link">
                  <img class="w-5 h-5" width="24px" src="{{ asset('img/pengurus.png') }}">
                  <p class="ml-2">Data Pengurus</p>
                </a>
              </li>
              <li class="nav-item mt-3 mb-3">
                <form action="{{ route('logout') }}" class="nav-link" method="post">
                  @csrf
                  <img class="w-5 h-5" width="24px" src="{{ asset('img/logout.png') }}">
                  <button type="submit" class="ml-2 btn">Logout</button>
                </form>
              </li>
        </ul> 
      </nav>

      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>