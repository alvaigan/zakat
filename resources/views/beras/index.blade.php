@extends('template/header')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Daftar Muzaki <small>Zakat Beras</small>
  </h1>
  @include('template/feedback')
</section>

<section class="content">
  <div class="box">

    <div class="box-body">
      <a href="{{url('beras/tambah')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Tambah</a>

      <table class="table">
        <thead>
          <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Nama Muzaki</th>
            <th>RT</th>
            <th>Jumlah Jiwa</th>
            <th>Jumlah beras</th>
            <th>Foto</th>
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($result as $row)
          <tr>
            <td>{{ !empty($i) ? ++$i : $i = 1}}</td>
            <td>{{$row->tanggal}}</td>
            <td>{{$row->nama_muzaqi}}</td>
            <td>{{$row->rt}}</td>
            <td>{{$row->jiwa}}</td>
            <td>{{$row->jumlah_beras}} Kg</td>
            <td>
              <img src="{{ asset('uploads/'.@$row->foto) }}" width="80px" class="img" alt="Foto Akad">
            </td>
            <td>
                <a href="{{ url("beras/$row->id_muzaqi/edit") }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                <form action="{{ url("beras/$row->id_muzaqi/delete")}}" method="post" style="display:inline">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
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
