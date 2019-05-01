@extends('templates.default')

@section('content')

<div class="page-title">
        <div class="title_left">
          <h3>Tabel Guru</h3>
        </div>
      </div>


<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
            <a href="{{ route ('guru.create')}}" class="btn btn-primary btn-round btn-sm"><i class="fa fa-plus"></i>  Tambah</a>
              <thead>
                <tr>
                  <th>Gambar</th>
                  <th>NIP</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Tempat Tanggal Lahir</th>
                  <th>Pengampu</th>
                  <th class="col-md-2">Action</th>
                </tr>
              </thead>
    
    
              <tbody>
                <tr>
                  <td>
                      <img src="{{ asset('assets/images/img4.png')}}" style="width:50px; height:50px;"  class="img-circle profile_img">
                  </td>
                  <td>198503302003121002</td>
                  <td>Drs. Sufian, M. Eng</td>
                  <td>Laki-Laki</td>
                  <td>Tegal, 13 April 1961</td>
                  <td>Ilmu Pengetahuan Alam</td>
                  <td>
                        <a href="{{ route ('guru.edit')}}" class="btn btn-warning btn-round btn-sm"><i class="fa fa-edit"></i>  Edit</a>
                        <a href="{{ route ('guru.create')}}" class="btn btn-danger btn-round btn-sm"><i class="fa fa-remove"></i>  Hapus</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>    
@endsection
