<!DOCTYPE html>
<html lang="en">
<head>
    @include('dashboard.head')
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">

  <!-- Navbar -->
    @include('dashboard.navbar')
  <!-- /.navbar -->
    @include('dashboard.sidebar')
  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ganti Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('profil') }}">Profil Akun</a></li>
              <li class="breadcrumb-item active">Ganti Password</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
    <div class="content">
        <div class="card card-info card-outline">
         <div class="card-header">
            <div class="card-tools">
                <a href="{{ route('profil')}}" class="btn btn-warning">Kembali</i></a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('set-password')}}" method="post">
                {{ csrf_field()}}
               <input type="hidden" name="id_pengurus" value=""></input>
               <div class="form-group">
                     <label for="password_lama" class="form-label">Password Lama</label><br>
                     <input type="text" id="password_lama" name="password_lama" class="form-control" placeholder="Masukkan password lama">
               </div>
               <div class="form-group">
                     <label for="password_baru" class="form-label">Password Baru</label><br>
                     <input type="text" id="password_baru" name="password_baru" class="form-control" placeholder="Masukkan password baru">
               </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
        </div>
         </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('dashboard.script')
</body>
</html>