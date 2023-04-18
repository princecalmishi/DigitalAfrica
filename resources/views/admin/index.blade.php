@extends('layouts.admin')

@section('content')
<div class="content-wrapper">

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">System Settings </h3>
                </div>
                <!-- /.card-header -->
               


                 <!-- form start -->
              <form action="{{route('postset')}}" method="POST">
              @csrf
              @foreach($data as $data)
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" class="form-control" value="{{$data->appname}}" id="exampleInputEmail1" name="cname" placeholder="Enter Company Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Company Address</label>
                    <input type="text" class="form-control"  value="{{$data->address}}"  id="exampleInputPassword1" name="caddress" placeholder="Company Address">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Company Phone 1</label>
                    <input type="text" class="form-control"  value="{{$data->phone1}}"  id="exampleInputPassword1" name="cphone1" placeholder="Company Phone">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Company Phone 2</label>
                    <input type="text" class="form-control" value="{{$data->phone2}}" id="exampleInputPassword1" name="cphone2" placeholder="Company Phone">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Company Email</label>
                    <input type="email" class="form-control" value="{{$data->contactemail}}" id="exampleInputPassword1" name="cemail" placeholder="Company Email">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">Facebook page</label>
                    <input type="text" class="form-control" value="{{$data->facebook}}" id="exampleInputPassword1" name="fbpage" placeholder="Facebook page url">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Instagram </label>
                    <input type="text" class="form-control" value="{{$data->instagram}}" id="exampleInputPassword1" name="instagram" placeholder="Instagram Account">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Skype</label>
                    <input type="text" class="form-control" value="{{$data->skype}}" id="exampleInputPassword1" name="skype" placeholder="Company Skype">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Twitter</label>
                    <input type="text" class="form-control" value="{{$data->twitter}}" id="exampleInputPassword1" name="twitter" placeholder="Company Twitter">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Pinterest</label>
                    <input type="text" class="form-control" value="{{$data->pinterest}}" id="exampleInputPassword1"  name="pinterest" placeholder="Company Pinterest">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputFile">Company Logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Company Logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <img src="" alt="">

                      </div>                    
                    </div>
                  </div>
                  <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                </div>
                <!-- /.card-body -->
              @endforeach
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  

              <script>
                $(function () {
                  $("#example1").DataTable({
                    "responsive": true, "lengthChange": false, "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                  }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                  $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                  });
                });
              </script>
    
</div>
@endsection
