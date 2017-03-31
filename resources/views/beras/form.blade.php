@extends('template/header')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Form {{ empty($result) ? 'Tambah' : 'Edit' }} Muzaki <small>Zakat Beras</small>
  </h1>
  @include('template/feedback')
</section>

<section class="content">
  <div class="box">
    <div class="box-body">
      <a href="{{url('/beras')}}" class="btn btn-primary"><i class="fa fa-chevron-left"></i>&nbsp;&nbsp;Kembali</a>
      <form class="form-horizontal" action="{{ empty($result) ? url("beras/add") : url("beras/$result->id_muzaqi/edit") }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        @if (!empty($result))
          {{ method_field('patch') }}
        @endif

        <div class="form-group">
          <label class="control-label col-sm-2 sr-only">Tanggal</label>
          <div class="col-sm-10">
            <input type="hidden" name="tanggal" class="form-control" value="{{ date("Y-m-d") }}" />
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2">Nama Muzaki</label>
          <div class="col-sm-10">
            <input type="text" name="nama_muzaqi" class="form-control" placeholder="Masukkan Nama Muzaki" value="{{ @$result->nama_muzaqi }}" />
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2">RT</label>
          <div class="col-sm-10">
            <input type="text" name="rt" class="form-control" placeholder="Masukkan RT" value="{{ @$result->rt }}" />
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2">Jumlah Jiwa</label>
          <div class="col-sm-5">
            <div class="input-group">
              <input type="number" name="jiwa" class="form-control" placeholder="Masukkan Jumlah Jiwa" value="{{ @$result->jiwa }}" />
              <span class="input-group-addon">Orang</span>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2">Jumlah beras</label>
          <div class="col-sm-3">
            <div class="input-group">
              <input type="text" name="jumlah_beras" class="form-control" placeholder="Masukkan Jumlah Beras" value="{{ @$result->jumlah_beras }}" />
              <span class="input-group-addon">Kg</span>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2">Foto</label>
          <div class="col-sm-10">
            <input type="file" name="foto" />
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-10 col-sm-offset-2">
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
          </div>
        </div>
      </form>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      &copy  SMKN 4 Bandung
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->

</section>
<!-- /.content -->
@endsection
