@extends('templates.default')

@section('content')
<div class="">
    <div class="page-title">            
        <div class="title_left">
            <h3>Form Edit Guru</h3>
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
              
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
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
                    <div id="gender" class="btn-group" data-toggle="buttons">
                      <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="gender" value="male"> &nbsp; Laki-Laki &nbsp;
                      </label>
                      <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                        <input type="radio" name="gender" value="female"> Perempuan
                      </label>
                    </div>
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
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
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
                        <a href="{{route('admin.guru')}}" class="btn btn-round btn-danger">Batal</a>
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