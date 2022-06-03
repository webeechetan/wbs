@extends('layouts.admin.app')
@section('headerScripts')
@endsection
@section('content')
<div class="row mb-4">
    <div class="col-md-6">
        <h4 class="card-title">Slides</h4>
    </div>
    <div class="col-md-6 text-md-end">
        <a href="javascript: void(0);"><button type="button" class="btn btn-outline-primary waves-effect waves-light add_new_image" ><i class="bx bx-plus-medical"></i> Add New</button></a>
    </div>
</div>
<div class="row">
    @foreach($slides as $slide)
        <div class="col-xl-3 col-sm-3">
            <div class="card text-center">
                <div class="card-body">
                    <div class="mx-auto mb-4">
                        <img src="{{ $slide->slide }}" class="a me-2" height="120" width="200">
                    </div>
                    <h2>{{ $slide->sequence }}</h2>
                </div>
                <div class="card-footer bg-transparent border-top">
                    <div class="contact-links d-flex font-size-20">
                        <div class="flex-fill">
                            <a href="{{ route('slide.edit',$slide->id) }}"><i class="bx bx-edit"></i></a>
                        </div>
                        <div class="flex-fill">
                            <a href="{{ route('slide.delete',$slide->id) }}"><i class="bx bx-trash-alt "></i></a>
                        </div>
                        <div class="flex-fill" title="Status">
                            @if($slide->status)
                                <a href="{{ route('slide.change_status',[$slide->id,'0'])}}"><button class="btn btn-danger btn-sm">Deactivate</button></a>
                            @else
                                <a href="{{ route('slide.change_status',[$slide->id,'1'])}}"><button class="btn btn-primary btn-sm">Activate</button></a>
                            @endif
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
        <form method="post" action="{{ route('slide.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Add New Slide</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="name">Slide</label>
                    <div class="input-group">
                        <div class="input-group-text open_gallery">
                            <i class="bx bx-image-add"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter Slide URL" name="slide">
                    </div>
                    <div>
                        <label for="name">Sequence</label>
                        <input type="text" class="form-control" required name="sequence" placeholder="Sequence">
                    </div>

                    <label for="name">Logo</label>
                    <div class="input-group">
                        <div class="input-group-text open_gallery">
                            <i class="bx bx-image-add"></i>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter Logo URL" name="logo">
                    </div>
                    <div>
                        <label for="name">Description</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div>
                        <label for="name">Link</label>
                        <input type="text" class="form-control"  name="link" placeholder="Link">
                    </div>
                    <div>
                        <label for="name">Link Text</label>
                        <input type="text" class="form-control"  name="link_text" placeholder="Link Text">
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

