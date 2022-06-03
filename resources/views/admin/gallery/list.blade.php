@extends('layouts.admin.app')
@section('headerScripts')
@endsection
@section('content')
<div class="row mb-4 align-items-center">
    <div class="col-md-6">
        <h4 class="card-title">Gallery</h4>
    </div>
    <div class="col-md-6 text-md-end">
        <a href="javascript: void(0);"><button type="button" class="btn btn-outline-primary waves-effect waves-light add_new_image" ><i class="bx bx-plus-medical"></i> Add New</button></a>
    </div>
</div>
<div class="row">
    @foreach($gallery as $file)
        <div class="col-xl-3 col-sm-3">
            <div class="card text-center">
                <div class="card-body">
                    <div class="mx-auto mb-4">
                        <img src="{{ asset('images') }}/{{ $file->image }}" class="a me-2" height="120" width="200">
                    </div>
                    <h5 class="font-size-15 mb-1"><a href="javascript: void(0);" class="text-dark">{{ $file->name }}</a></h5>
                </div>
                <div class="card-footer bg-transparent border-top">
                    <div class="contact-links d-flex font-size-20">
                        <div class="flex-fill" title="Copy Path">
                            <a href="javascript: void(0);"><i class="bx bxs-copy copy_path" data-path="{{ asset('images')}}/{{ $file->image }}"></i></a>
                        </div>
                        <div class="flex-fill" title="Copy Path">
                            <a href="{{ route('gallery.delete',$file->id) }}"><i class="bx bx-trash-alt "></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
 {{-- Add new categoru modal --}}
 <div id="add_new_image_modal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="post" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Add New Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <label for="name">Image </label>
                        <input type="file" class="form-control" name="image" accept="images/*">
                    </div>
                    <div>
                        <label for="name">Image Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                </div>
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

@endsection

@section('script')
@if(session('success'))
    <script>
        let msg = '{{ session()->get("success") }}';
        toastr["success"](msg);
    </script>
@endif
<script>
    $(".add_new_image").click(function(){
        $("#add_new_image_modal").modal('show')
    })

</script>
@endsection