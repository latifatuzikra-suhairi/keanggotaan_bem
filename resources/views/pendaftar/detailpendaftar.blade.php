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
            <h1 class="m-0">Detail Data Pendaftar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a>Data Pendaftar</a></li>
              <li class="breadcrumb-item active">Detail</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
    <div class="content">
        <div class="card card-info card-outline">
            <div class="card-body">
               <div class="row g-3 card-body">
                  <h5>Data Diri {{$detail->nama}}</h5><hr style="margin-top:-8px">
                  <div class="col-md-4">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$detail->nama}}" readonly>
                  </div>
                  <div class="col-md-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="{{$detail->nim}}" readonly>
                  </div>
                  <div class="col-md-5">
                     <label for="nim" class="form-label">Jurusan</label>
                     <select class="form-select" aria-label="Default select example" name="jurusan" disabled>
                        @if ($detail->jurusan == 1)
                           <option value="1" selected>Teknik Komputer</option>
                           <option value="2">Sistem Informasi</option>
                        @else
                           <option value="1">Teknik Komputer</option>
                           <option value="2" selected>Sistem Informasi</option>   
                        @endif
                      </select>
                  </div>
                  <div class="col-md-4">
                     <label for="email" class="form-label">Email</label>
                     <input type="email" class="form-control" id="email" name="email" value="{{$detail->email}}" readonly>
                  </div>
                  <div class="col-md-4">
                     <label for="no_hp" class="form-label">No HP</label>
                     <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{$detail->no_hp}}" readonly>
                  </div>
                  <div class="col-md-4">
                     <label for="tempat_lahir" class="form-label">Tempat/Tanggal Lahir</label>
                     <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{$detail->tempat_lahir}}/{{$detail->tgl_lahir}}" readonly>
                  </div>
               </div>
      
               <div class="row g-3 card-body">
               <h5>Tentang Diri {{$detail->nama}}</h5><hr style="margin-top:-8px" >
                  <div class="col-md-6">
                     <label for="kelebihan">Kelebihan Anda</label>
                     <textarea class="form-control" placeholder="Ceritakan kelebihan Anda" id="kelebihan" name="kelebihan" readonly>{{$detail->kelebihan}}</textarea>
                  </div>
                  <div class="col-md-6">
                     <label for="kekurangan">Kekurangan Anda</label>
                     <textarea class="form-control" placeholder="Ceritakan kekurangan Anda" id="kekurangan" name="kekurangan" readonly>{{$detail->kekurangan}}</textarea>
                  </div>
                  <div class="col-md-6">
                     <label for="motivasi">Motivasi Anda</label>
                     <textarea class="form-control" placeholder="Ceritakan motivasi Anda bergabung ke dalam BEM KM FTI Unand" id="motivasi" name="motivasi"readonly>{{$detail->motivasi}}</textarea>
                  </div>
                  <div class="col-md-6">
                     <label for="motto">Motto Hidup Anda</label>
                     <textarea class="form-control @error('motto') is-invalid @enderror" placeholder="Sampaikan motto hidup Anda" id="motto" name="motto"readonly>{{$detail->motto}}</textarea>
                  </div>
               </div>

            <hr style="margin-top:-8px" >     
            <h5>Luluskan {{$detail->nama}}?</h5>
            <form method="POST" action="/pendaftar/detail/{$detail->id_pendaftaran}/assign">
            @csrf
               <input type="hidden" class="form-control" id="id_pendaftaran" name="id_pendaftaran" value="{{ $detail->id_pendaftaran }}">
               <div class="row g-3 card-body">
               <div class="col-md-6">
                  <label for="id_dinasbiro" class="form-label">Pilih Dinas Biro Penempatan</label>
                  <select class="form-select @error('id_dinasbiro') is-invalid @enderror" aria-label="Default select example" name="id_dinasbiro" required>
                     <option value="" selected disabled>Pilih Dinas/Biro</option>
                     @foreach ($dinas_biro as $data)
                     <option value="{{ $data->id_dinasbiro }}">{{ $data->nama_dinasbiro }}</option>
                     @endforeach
                   </select>
                   @error('id_dinasbiro')
                  <div class="invalid-feedback">
                     {{ $message }}
                  </div>
                 @enderror
               </div>
               <div class="col-12">
                  <button type="submit" class="btn btn-primary">Assign Akun</button>
                  <a href="{{ route('pendaftar') }}" class="btn btn-warning">Kembali</a>
               </div>
               </div>
            </form>
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