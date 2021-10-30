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
                            <h2 class="m-0 text-dark"><strong>EDIT SISTEM USER</strong></h2></br>
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
              <form role="form" action="{{ route('updateUser', $sistemuser->id) }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="id_user"><strong>ID User</strong></label></br>
                    <input type="text" class="form-control" id="id_user" name="id_user" value="{{ $sistemuser->id }}" disabled>
                  </div><br></br>
                  <div class="form-group">
                    <label for="name"><strong>Nama User</strong></label></br>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $sistemuser->name }}">
                  </div>
                  <div class="form-group">
                    <label for="email"><strong>Email</strong></label></br>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $sistemuser->email }}">
                  </div>
                  <div class="form-group">
                    <label for="password"><strong>Password</strong></label></br>
                    <input type="password" class="form-control" id="password" name="password" value="{{ $sistemuser->password }}">
                  </div>
                  <div class="form-group">
                    <label for="roles"><strong>Roles</strong></label>
                    <select class="form-control select2bs4" name="roles" id="roles" style="width: 100%;">
                        <option value="Administrator">Administrator</option>
                        <option value="Customer">Customer</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary mr-1">Submit</button>
                  <a href="{{ route('sistemUser') }}" class="btn btn-default">Cancel</a>
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