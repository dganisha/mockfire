@extends('admin_template')

@section('content')
    <div class='row'>
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Tambah Data</h3>
                </div>
                <!-- /.box-header -->
                <form class="form-horizontal" method="POST" action="{{ url('/') }}/admin/data_category/tambah/proses">
                  {{ csrf_field() }}
                  <div class="box-body">
                    <div class="form-group">
                      <label class="col-sm-2 control-label">Name Category</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="namec" placeholder="Masukkan nama Category . exam : INTERNET" required="">
                      </div>
                    </div>

                  <div class="box-footer">
                    <a href="/admin/data_opsi" class="btn btn-primary pull-left">Back</a>
                    <button type="submit" class="btn btn-primary pull-right">Tambah Data</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
                <!-- /.box-body -->
              </div>
        </div>

    </div><!-- /.row -->
@endsection