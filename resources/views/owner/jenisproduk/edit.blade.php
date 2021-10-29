@extends('master')
@section('konten')   
        <!-- Content Header (Page header) -->
        <section>
    <div class="container ">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                          <br>
                            <h2 class="m-0 text-dark"><strong>EDIT JENIS PRODUK</strong></h2></br>
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
                    <label for="id_jenis"><strong>ID Jenis</strong></label></br>
                    <input type="text" class="form-control" id="id_jenis" name="id_jenis" value="{{ $jenisproduk->id }}" disabled>
                  </div><br></br>
                  <div class="form-group">
                    <label for="namajenis"><strong>Nama Jenis</strong></label></br>
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
      </div>
</div>
</div>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
      @endsection
