@extends('master')
@section('konten')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Produk Baru</h1>
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
              <form role="form" action="{{ route('storeProduk') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="namaproduk">Nama Produk</label>
                    <input type="text" class="form-control" id="namaproduk" name="namaproduk" placeholder="Nama Produk" required>
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga" required>
                  </div>
                  <div class="form-group">
                    <label for="satuan">Satuan</label>
                    <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Satuan" required>
                  </div>
                  <div class="form-group">
                    <label for="status">Status</label>
                    <div class="d-flex">
                        <div class="custom-control custom-radio mr-3">
                          <input class="custom-control-input" type="radio" id="disewa" name="status" value="Disewa" required>
                          <label for="disewa" class="custom-control-label">Disewa</label>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="belum_sewa" name="status" value="Belum Sewa" required>
                          <label for="belum_sewa" class="custom-control-label">Belum Sewa</label>
                        </div>
                    </div><br>
                   </div>
                   <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok" placeholder="Stok" required>
                  </div>
                  <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <select class="form-control select2bs4" name="jenis" id="jenis" style="width: 100%;" required>
                      @foreach ($jenisproduk as $item)
                        <option value="{{ $item->id }}">{{ $item->namajenis }}</option>
                      @endforeach
                    </select>
                  </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary mr-1">Submit</button>
                  <a href="{{ route('produk') }}" class="btn btn-default">Cancel</a>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    @endsection