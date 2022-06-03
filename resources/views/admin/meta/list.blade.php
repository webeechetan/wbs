@extends('layouts.admin.app')
@section('headerScripts')
<link href="{{ asset('backend') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend') }}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('backend') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />  
@endsection
@section('content')
<div class="row">
    <div class="col-12">
       <div class="card">
           <div class="card-body">
             <h4 class="card-title">Meta</h4>
             <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
               
                <div class="row">
                   <div class="col-sm-12">
                      <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable_info" style="width: 1182px;">
                         <thead>
                            <tr role="row">
                               <th>S.No</th>
                               <th>Url</th>
                               <th>Title</th>
                               <th>Meta Title</th>
                               <th>Meta Description</th>
                               <th>OG Title</th>
                               <th>OG Image</th>
                               <th>Actions</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach ($metas as $meta)
                            <tr>
                                <td>{{ $meta->id }}</td>
                                <td>{{ $meta->url }}</td>
                                <td>{{ $meta->title }}</td>
                                <td>{{ $meta->meta_title }}</td>
                                <td>{{ $meta->meta_description }}</td>
                                <td>{{ $meta->og_title }}</td>
                                <td>
                                    <img src="{{$meta->og_image}}" height="125" width="200" >
                                </td>
                                <td>
                                    <a href="{{ route('meta.edit',$meta->id) }}"><button type="button" class="btn btn-outline-info waves-effect waves-light " ><i class="mdi mdi-pencil d-block font-size-16"></i></button></a>
                                </td>
                            </tr>
                            @endforeach
                         </tbody>
                      </table>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 {{-- Add new categoru modal --}}
 <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="post" action="{{ route('category.store') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Add New Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Category Name">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
 {{-- edit categoru modal --}}
 <div id="editCategoryModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="post" action="{{ route('category.update') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Add New Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="name">Category Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Category Name">
                </div>
                <input type="hidden" name="category_id" id="category_id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
@section('footerScripts')
<script src="{{ asset('backend') }}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
<script src="{{ asset('backend') }}/assets/js/pages/datatables.init.js"></script> 
<script src="{{ asset('backend') }}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('backend') }}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

@endsection

@section('script')
@if(session('success'))
    <script>
        let msg = '{{ session()->get("success") }}';
        toastr["success"](msg);
    </script>
@endif
<script>
    $(".edit_category").click(function(e){
        let category = $(this).data("category");
        $("#name").val(category.name);
        $("#category_id").val(category.id);
    })
</script>
@endsection