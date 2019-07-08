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
      <a href="{{ route ('admin.guru.create')}}" class="btn btn-primary btn-round btn-sm"><i class="fa fa-plus"></i>  Tambah</a>
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
          @foreach ($data as $guru)
            <tr>
              <td>
                <center>
                    <img src="{{ asset('images/' . $guru->gambar)}}" class="img-circle profile_img" style="width:50px; height:50px;">
                </center>
              </td>
              <td>{{$guru->nip}}</td>
              <td>{{$guru->nama}}</td>
              <td>{{$guru->jk}}</td>
              <td>{{$guru->tempat_lahir}}, {{$guru->tanggal_lahir}}</td>
              <td>{{$guru->pengampu}}</td>
              <td>
                    <a href="{{ route ('admin.guru.edit')}}" class="btn btn-warning btn-round btn-sm"><i class="fa fa-edit"></i>  Edit</a>
                    <a href="{{ route ('admin.guru.create')}}" class="btn btn-danger btn-round btn-sm"><i class="fa fa-remove"></i>  Hapus</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>    
@endsection
