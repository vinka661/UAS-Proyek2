@extends('master')
@section('konten')   
        <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Edit Jenis Produk</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        <!-- /.content-header -->

        <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <form role="form" action="{{ route('updateJenisProduk', $jenisproduk->id) }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="id_jenis">ID Jenis</label>
                    <input type="text" class="form-control" id="id_jenis" name="id_jenis" value="{{ $jenisproduk->id }}" disabled>
                  </div>
                  <div class="form-group">
                    <label for="namajenis">Nama Jenis</label>
                    <input type="text" class="form-control" id="namajenis" name="namajenis" value="{{ $jenisproduk->namajenis }}">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary mr-1">Submit</button>
                  <a href="{{ route('jenisproduk') }}" class="btn btn-default">Cancel</a>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      @endsection
