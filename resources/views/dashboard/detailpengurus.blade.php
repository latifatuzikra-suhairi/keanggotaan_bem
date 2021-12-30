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
            <h1 class="m-0">Detail Data Pengurus</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a>Data Pengurus</a></li>
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
                  
                  <img src="{{ asset('foto/' .$detail->foto) }}" style="width:195px;height:236px;">
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
               <h5>Detail Data Diri {{$detail->nama}}</h5><hr style="margin-top:-8px" >
                  <div class="col-md-6">
                     <label for="alamat_skrng">Alamat Sekarang</label>
                     <textarea class="form-control"  id="alamat_skrng" name="alamat_skrng" placeholder="Alamat Anda saat ini" readonly>{{$detail->alamat_skrng}}</textarea>
                  </div>
                  <div class="col-md-6">
                     <label for="alamat_asal">Alamat Asal</label>
                     <textarea class="form-control"  id="alamat_asal" name="alamat_asal" placeholder="Alamat Anda sebelumnya" readonly>{{$detail->alamat_asal}}</textarea>
                  </div>
                  <div class="col-md-6">
                     <label for="riwayat_penyakit">Riwayat Penyakit</label>
                     <textarea class="form-control"  id="riwayat_penyakit" name="riwayat_penyakit" placeholder="Penyakit yang pernah di derita" readonly>{{$detail->riwayat_penyakit}}</textarea>
                  </div>
                  <div class="col-md-6">
                    <label for="sosmed">Sosial Media</label>
                    <textarea class="form-control"  id="sosmed" name="sosmed" placeholder="Sosial media yang Anda miliki" readonly>{{$detail->sosmed}}</textarea>
                    </div>
                  <div class="col-md-6">
                     <label for="goldar">Golongan Darah</label>
                     <select class="form-select" aria-label="Default select example" name="goldar" disabled>
                        @if ($detail->goldar == 1)
                           <option value="1" selected>A</option>
                           <option value="2">B</option>
                           <option value="3">AB</option>
                           <option value="4">O</option>
                        @elseif ($detail->goldar == 2)
                           <option value="1">A</option>
                           <option value="2" selected>B</option>
                           <option value="3">AB</option>
                           <option value="4">O</option> 
                        @elseif ($detail->goldar == 3)
                           <option value="1">A</option>
                           <option value="2">B</option>
                           <option value="3" selected>AB</option>
                           <option value="4">O</option>
                        @else
                           <option value="1">A</option>
                           <option value="2">B</option>
                           <option value="3">AB</option>
                           <option value="4" selected>O</option>   
                        @endif
                      </select>
                  </div>
                  <div class="col-md-6">
                     <label for="suku">Suku</label>
                     <input type="text" class="form-control" id="suku" name="suku" value="{{$detail->suku}}" placeholder="Suku Bangsa Anda" readonly>
                  </div>
                  <div class="col-md-6">
                    <label for="anak_ke">Anak ke-</label>
                    <input type="text" class="form-control" id="anak_ke" name="anak_ke" value="{{$detail->anak_ke}}" placeholder="Anda anak-ke" readonly>
                 </div>
                 <div class="col-md-6">
                    <label for="jumlah_saudara">Jumlah Saudara</label>
                    <input type="text" class="form-control" id="jumlah_saudara" name="jumlah_saudara" value="{{$detail->jumlah_saudara}}" placeholder="Jumlah saudara Anda" readonly>
                 </div>
                 <div class="col-md-6">
                    <label for="orang_tua">Orang Tua</label>
                    <input type="text" class="form-control" id="orang_tua" name="orang_tua" value="{{$detail->orang_tua}}" placeholder="Nama orang tua Anda" readonly>
                 </div>
                 <div class="col-md-6">
                    <label for="level_ukt">Level UKT</label>
                    <select class="form-select" aria-label="Default select example" name="level_ukt" disabled>
                     @if ($detail->level_ukt == 1)
                        <option value="1" selected>Level 1</option>
                        <option value="2">Level 2</option>
                        <option value="3">Level 3</option>
                        <option value="4">Level 4</option>
                     @elseif ($detail->level_ukt == 2)
                        <option value="1">Level 1</option>
                        <option value="2" selected>Level 2</option>
                        <option value="3">Level 3</option>
                        <option value="4">Level 4</option> 
                     @elseif ($detail->level_ukt == 3)
                        <option value="1">Level 1</option>
                        <option value="2">Level 2</option>
                        <option value="3" selected>Level 3</option>
                        <option value="4">Level 4</option>
                     @else
                        <option value="1">Level 1</option>
                        <option value="2">Level 2</option>
                        <option value="3">Level 3</option>
                        <option value="4" selected>Level 4</option>   
                     @endif
                   </select>
                 </div>
                  <div class="col-md-6">
                     <label for="cita_cita">Cita-cita</label>
                     <textarea class="form-control"  id="cita_cita" name="cita_cita" placeholder="Cita-cita Anda" readonly>{{$detail->cita_cita}}</textarea>    
                  </div>
                  <div class="col-md-6">
                     <label for="hobi">Hobi</label>
                     <textarea class="form-control"  id="hobi" name="hobi" placeholder="Hobi Anda" readonly>{{$detail->hobi}}</textarea>
                  </div>
                  <div class="col-md-6">
                     <label for="beasiswa">Beasiswa</label>
                     <textarea class="form-control" id="beasiswa" name="beasiswa" placeholder="Beasiswa yang pernah diterima" readonly>{{$detail->beasiswa}}</textarea>
                  </div>
                  <div class="col-md-6">
                     <label for="prestasi">Prestasi</label>
                     <textarea class="form-control"  id="prestasi" name="prestasi" placeholder="Prestasi yang pernah didapat" readonly>{{$detail->prestasi}}</textarea>
                    </div>
                    <div class="col-md-6">
                     <label for="organisasi">Pengalaman Organisasi</label>
                     <textarea class="form-control" id="organisasi" name="organisasi" placeholder="Pengalaman organisasi Anda selama kuliah" readonly>{{$detail->organisasi}}</textarea>
                    </div>
                 <div class="col-md-6">
                    <label for="bisnis">Bisnis</label>
                    <textarea class="form-control"  id="bisnis" name="bisnis" placeholder="Bisnis yang Anda jalankan" readonly>{{$detail->bisnis}}</textarea>
                 </div>
                 <div class="col-md-6">
                    <label for="status_mentoring">Status Mentoring</label>
                    <select class="form-select" aria-label="Default select example" name="status_mentoring" disabled>
                     @if ($detail->status_mentoring == 1)
                        <option value="1" selected>Lulus</option>
                        <option value="2">Belum Lulus</option>
                     @else
                        <option value="1">Lulus</option>
                        <option value="2" selected>Belum Lulus</option>   
                     @endif
                   </select>
                 </div>
                 <div class="col-md-6">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{$detail->jabatan}}" placeholder="Jabatan Anda" readonly>
                 </div>
               </div>
               <div class="col-12">
                  <a href="/pengurus/detail/updatepengurus/{{ $detail->id_pengurus}}" class="btn btn-primary">Update</a>
                  <a href="/pengurus/{{ $detail->id_kepengurusan}}" class="btn btn-warning">Kembali</a>
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