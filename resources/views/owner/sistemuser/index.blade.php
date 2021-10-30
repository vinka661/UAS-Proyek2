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
            <h2 class="m-0 text-dark"><strong>DATA SISTEM USER</strong></h2></br>
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
                <a href="{{ route('createUser') }}"><button  class="btn btn-primary btn-sm"><i class="bi-plus"></i> Tambah Baru</button></a>
              </div>
              <div class="card-body table-responsive p-0" style="height: 800px;">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama User</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Roles</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($sistemuser as $key => $item)
                          <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->password }}</td>
                            <td>{{ $item->roles }}</td>
                            <td>
                              <a href="{{ route('editUser', $item->id) }}"><button  class="btn btn-danger btn-sm"><i class="bi-pencil-fill"></i> Edit</button></a>
                              <a href="{{ route('deleteUser', $item->id) }}"><button  class="btn btn-warning btn-sm"><i class="bi-trash"></i> Delete</button></a>
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
  