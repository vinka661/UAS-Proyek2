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
            <h2 class="m-0 text-dark"><strong>DATA PRODUK</strong></h2>
            </br>
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
                <a href="{{ route('createProduk') }}"><button  class="btn btn-primary btn-sm"><i class="bi-plus"></i> Tambah Baru</button></a>
              </div>
              <div class="card-body table-responsive p-0" style="height: 800px;">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>ID Produk</th>
                        <th>Nama Produk</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Satuan</th>
                        <th>Status</th>
                        <th>Stok</th>
                        <th>Jenis Produk</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($produk as $key => $item)
                          <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->namaproduk }}</td>
                            <td><img width="150px" src="{{asset('storage/'.$item->image)}}"></td>
                            <td>{{ $item->harga }}</td>
                            <td>{{ $item->satuan }}</td>
                            <td>{{ $item->status}}</td>
                            <td>{{ $item->stok }}</td>
                            <td>{{ $item->jenisproduk->namajenis }}</td>
                            <td>
                              <a href="{{ route('editProduk', $item->id) }}"><button  class="btn btn-danger btn-sm"><i class="bi-pencil-fill"></i> Edit</button></a>
                              <a href="{{ route('deleteProduk', $item->id) }}"><button  class="btn btn-warning btn-sm"><i class="bi-trash"></i> Delete</button></a>
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
      @endsection
    <!-- /.content -->
  