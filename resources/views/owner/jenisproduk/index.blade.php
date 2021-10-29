@extends('master')
@section('konten')     
    <!-- Content Header (Page header) -->
    <section>
    <div class="container ">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0 text-dark"><strong>DATA JENIS BARANG</strong></h2>
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
              <div class="card-header">
                <a href="{{ route('createJenisProduk') }}"><button  class="btn btn-primary btn-sm"><i class="bi-plus"></i> Tambah Baru</button></a>
              </div>
              <div class="card-body table-responsive p-0" style="height: 400px;">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>ID Jenis Produk</th>
                        <th>Nama Jenis Produk</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($jenisproduk as $key => $item)
                          <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->namajenis }}</td>
                            <td>
                              <a href="{{ route('editJenisProduk', $item->id) }}"><button  class="btn btn-danger btn-sm"><i class="bi-pencil-fill"></i> Edit</button></a>
                              <a href="{{ route('deleteJenisProduk', $item->id) }}"><button  class="btn btn-warning btn-sm"><i class="bi-trash"></i> Delete</button></a>
                            </td>
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
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
      @endsection
    <!-- /.content -->
