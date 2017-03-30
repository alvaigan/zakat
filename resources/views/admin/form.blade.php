@extends('template/header')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Form {{ empty($result) ? 'Tambah' : 'Edit' }} Muzaki <small>Zakat Uang</small>
  </h1>
  @include('template/feedback')
</section>

<section class="content">
  <div class="box">
    <div class="box-body">
      <a href="{{url('/')}}" class="btn btn-primary"><i class="fa fa-chevron-left"></i>&nbsp;&nbsp;Kembali</a>
      <form class="form-horizontal" action="{{ empty($result) ? url("uang/add") : url("uang/$result->id_muzaqi/edit") }}" method="post">
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
            <input type="text" name="nama_muzaqi" class="form-control" placeholder="Masukkan Nama Muzaki" />
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2">RT</label>
          <div class="col-sm-10">
            <input type="text" name="rt" class="form-control" placeholder="Masukkan RT" />
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2">Jumlah Jiwa</label>
          <div class="col-sm-10">
            <input type="number" name="jiwa" class="form-control" placeholder="Masukkan Jumlah Jiwa" />
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2">Jumlah Uang</label>
          <div class="col-sm-10">
            <input type="number" name="jumlah_uang" class="form-control" placeholder="Masukkan Jumlah Uang" />
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2">Foto</label>
          <div class="col-sm-10">
            <input type="text" name="foto" class="form-control" value="Belum Ada" readonly />
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
