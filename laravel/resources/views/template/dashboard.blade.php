@extends('template/header')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Dashboard <small>Kalkulasi Muzaki Saat Ini</small>
  </h1>
</section>

<section class="content">
  <div class="box">

    <div class="box-body">
      <div class="col-lg-push-3 col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{ $result_uang }}</h3>

              <p>Zakat Uang</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-push-3 col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3>{{ $result_beras }}</h3>

                <p>Zakat Beras</p>
              </div>
              <div class="icon">
                <i class="fa fa-pencil"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
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
