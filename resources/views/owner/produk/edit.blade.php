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
                            <h2 class="m-0 text-dark"><strong>Edit Produk</strong></h2>
                          <br>
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
              <form role="form" action="{{ route('updateProduk', $produk->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="id_produk"><strong>ID Produk</strong></label>
                    <input type="text" class="form-control" id="id_produk" name="id_produk" value="{{ $produk->id }}" disabled><br>
                  </div>
                  <div class="form-group">
                    <label for="namaproduk"><strong>Nama Produk</strong></label>
                    <input type="text" class="form-control" id="namaproduk" name="namaproduk" value="{{ $produk->namaproduk }}"><br>
                  </div>
                  <div class="form-group"> 
                    <label for="image"><strong>Image</strong></label>                 
                    <input type="file" class="form-control" required="required" name="image" value="{{ $produk->image }}"></br> 
                    <img width="150px" src="{{asset('storage/'.$produk->image)}}">
                 </div> 
                 <br>
                  <div class="form-group">
                    <label for="harga"><strong>Harga</strong></label>
                    <input type="number" class="form-control" id="harga" name="harga" value="{{ $produk->harga }}"><br>
                  </div>
                  <div class="form-group">
                    <label for="satuan"><strong>Satuan</strong></label>
                    <input type="text" class="form-control" id="satuan" name="satuan" value="{{ $produk->satuan }}"><br>
                  </div>
                  <div class="form-group">
                    <label for="status"><strong>Status</strong></label>
                    <div class="d-flex">
                        <div class="custom-control custom-radio mr-3">
                          <input class="custom-control-input" type="radio" id="disewa" name="status" value="Disewa" {{ $produk->status == 'Disewa' ? 'checked' : ''}}>
                          <label for="disewa" class="custom-control-label">Disewa</label>
                        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="belum_sewa" name="status" value="Belum Sewa" {{ $produk->status == 'Belum Sewa' ? 'checked' : ''}}>
                          <label for="belum_sewa" class="custom-control-label">Belum Sewa</label>
                        </div>
                    </div>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="stok"><strong>Stok</strong></label>
                    <input type="number" class="form-control" id="stok" name="stok" value="{{ $produk->stok }}"><br>
                  </div>
                  <div class="form-group">
                    <label for="jenis"><strong>Jenis</strong></label>
                    <select class="form-control select2bs4" name="jenis" id="jenis" style="width: 100%;">
                      @foreach ($jenisproduk as $item)
                        <option value="{{ $item->id }}" {{ $produk->id_jenis == $item->id ? 'selected' : '' }}>{{ $item->namajenis }}</option>
                      @endforeach
                    </select>
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
</div>
</div>
<br></br>
      @endsection
