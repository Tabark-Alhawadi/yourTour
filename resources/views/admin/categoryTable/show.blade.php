@extends('admin.layouts.master');


@section('title')
Category
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href=".{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('section_title')
Category Table
@endsection


@section('Category')
active
@endsection

@section('title_page1')
admin
@endsection

@section('title_page2')
Category
@endsection


@section('content')
 <!-- /.row -->
 <div class="row container m-auto">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Category controls</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 100px;">


         <button type="button" class="btn btn-block bg-gradient-primary btn-sm"><a href="{{route('admin.categories.create')}}">Add new category</a></button>

              {{-- <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button> --}}
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                {{-- <th>Reason</th> --}}
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody >
              @foreach ($categories as $category)


              <tr>
                <td> {{$category->id}}</td>
                <td>{{$category->name}}</td>
                <?php $img=$category->image?>
                <td><img src="{{URL::asset("storge/image/$img")}}" style="height:100px; width:150px;"></td>

                <td>{{$category->description}}</td>
                {{-- <td><span class="tag tag-success">Approved</span></td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                <td> --}}
                <td>
                  <a href="{{route('admin.categories.edit',$category->id)}}"><button  type="button" class="btn btn-block bg-gradient-success btn-sm">Edit</button></a>
                </td>
                <td>
                  <form action="{{route('admin.categories.destroy',$category->id)}}" method="post">
                    @method('delete')
                    @csrf

                    <button type="submit" class="btn btn-block bg-gradient-danger btn-sm">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->
@endsection

@section('script')
<script src="{{URL::asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src=".{{URL::asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

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
@endsection
