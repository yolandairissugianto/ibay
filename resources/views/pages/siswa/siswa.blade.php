@extends('templates.default')

@section('content')

<div class="page-title">
        <div class="title_left">
          <h3>Tabel Siswa</h3>
        </div>
      </div>


<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
            <a href="{{ route ('admin.siswa.create')}}" class="btn btn-primary btn-round btn-sm"><i class="fa fa-plus"></i>  Tambah</a>
              <thead>
                <tr>
                  <th>Gambar</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Kelas</th>
                  <th>Alamat</th>
                  <th class="col-md-2">Action</th>
                </tr>
              </thead>
    
    
              <tbody>
                <tr>
                  <td>
                      <img src="{{ asset('assets/images/img3.png')}}" style="width:50px; height:50px;" class="img-circle profile_img">
                  </td>
                  <td>16090158</td>
                  <td>Yolanda Iris Sugianto</td>
                  <td>Perempuan</td>
                  <td>XII PM 3</td>
                  <td>Ds. Purbayasa Rt 07/02</td>
                  <td>
                        <a href="{{ route ('admin.siswa.edit')}}" class="btn btn-warning btn-round btn-sm"><i class="fa fa-edit"></i>  Edit</a>
                        <a href="" class="btn btn-danger btn-round btn-sm"><i class="fa fa-remove"></i>  Hapus</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>    
@endsection
