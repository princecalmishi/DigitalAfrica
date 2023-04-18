@extends('layouts.admin')

@section('content')
<div class="content-wrapper">

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">All client bookings </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Id</th>
                      <th>Client Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <!-- <th>Location</th> -->
                      <th>Subject</th>
                      <th>Message</th>
                      <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data2 as $data)

                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->subject}}</td>
                        <td>{{$data->message}}</td>
                        <!-- <td>{{$data->Location}}</td> -->
                        <td>
                          @if ($data->status =='Pending')
                          <a  class="btn btn-danger btn-sm">Pending</a>
                        @else
                          <a class="btn btn-success btn-sm">Completed</a>

                          @endif
                        </td>
                        <!-- <td>
                          @if ($data->status =='Pending')
                          <a href="" class="btn btn-danger btn-sm">Schedule</a>
                                                    @else
                          <a  class="btn btn-success btn-sm">Completed</a>
                          @endif

                        </td>                         -->
                     
                    </tr>
                    @endforeach
                    </tbody>
                 
                  </table>
                </div>
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
