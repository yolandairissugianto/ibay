@extends('templates.default')

@section('content')

<div class="page-title">
        <div class="title_left">
          <h3>Tabel Berita</h3>
        </div>
      </div>


<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
            <a href="{{ route ('berita.create')}}" class="btn btn-primary btn-round btn-sm"><i class="fa fa-plus"></i>  Tambah</a>
              <thead>
                <tr>
                  <th>No</th>
                  <th>Gambar</th>
                  <th>Judul Berita</th>
                  <th>Isi Berita</th>
                  <th class="col-md-2">Action</th>
                </tr>
              </thead>
    
    
              <tbody>
                <tr>
                  <td>1</td>
                  <td>
                    <center>
                        <img src="{{ asset('assets/images/img6.png')}}" class="img-circle profile_img" style="width:50px; height:50px;">
                    </center>
                  </td>
                  <td>Tiga Siswa SMK N 1 Slawi Menjadi Duta Lingkungan Hidup Kabupaten Tegal Tahun 2018</td>
                  <td>Bapak Kepala Sekolah SMK N 1 Slawi Drs. Sufian, M. Eng menyerahkan piala yang didapat oleh siswa pada acara pemilihan duta lingkungan hidup Kabupaten Tegal yang diselenggarakan oleh Dinas Lingkungan Hidup (DLH) Kabupaten Tegal pada tanggal 11 November 2018 di Pendopo Amangkurat, Kompleks Setda Kabupaten Tegal di Lapangan upacara SMK N 1 Slawi pada hari senin (19/11).</td>
                  <td>
                        <a href="{{ route ('berita.edit')}}" class="btn btn-warning btn-round btn-sm"><i class="fa fa-edit"></i>  Edit</a>
                        <a href="{{ route ('berita.create')}}" class="btn btn-danger btn-round btn-sm"><i class="fa fa-remove"></i>  Hapus</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>    
@endsection
