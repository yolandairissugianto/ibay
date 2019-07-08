@extends('templates.default')

@section('content')
<div class="">
    <div class="page-title">            
        <div class="title_left">
            <h3>Form Tambah Guru</h3>
        </div>
    </div>
<div class="clearfix"></div>
  

<div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Data Guru</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              
              <form method="POST" action="{{route('admin.store.guru')}}" class="form-horizontal form-label-left" novalidate enctype="multipart/form-data">
                @csrf
                <span class="section">Guru</span>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gambar">Gambar <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12 custom-file">
                    <input type="file" id="gambar" name="gambar" required="required" class="form-control custom-file-input col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nip">NIP<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="nip" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nama-guru">Nama Guru<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="nama-guru" name="nama-guru" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control" name="jk">
                      <option>Pilih</option>
                      <option value="laki-laki">Laki - Laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tempat-lahir">Tempat Lahir<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="tempat-lahir" name="tempat-lahir" required="required" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Lahir <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class='input-group date' id='myDatepicker2'>
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pengampu">Pengampu<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="text" id="pengampu" name="pengampu" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a href="#" class="btn btn-round btn-danger">Batal</a>
                        {{-- <button type="submit" class="btn btn-round btn-danger">Cancel</button> --}}
                        <button id="send" type="submit" class="btn btn-round btn-success">Simpan</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection