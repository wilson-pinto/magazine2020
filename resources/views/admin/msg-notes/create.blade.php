@extends('admin.layouts.app')

@section('content')


<div class="col-md-12 mt-2">
    <div class="content-body bg-white shadow px-5 py-4">
        @if(isset($report))
        <div class="row px-3 py-2">
            <h4 class="font-primary-medium text-uppercase text-primary">Edit</h4>
        </div>
        <form id="form" method="post" enctype="multipart/form-data"
            action="{{ route('admin.msg-notes.update',$report->mnr_rid) }}">
            {{ method_field("PUT") }}
            @else
            <div class="row px-3 py-2">
                <h4 class="font-primary-medium text-uppercase text-primary">Create</h4>
            </div>
            <form id="form" method="post" enctype="multipart/form-data" action="{{ route('admin.msg-notes.store') }}">
                @endif
                {{ csrf_field() }}
                <div class="form-group row px-3">
                    <label for="title">Title</label>
                    <input id="title" data-rule="required|min:4" name="title"
                        class="form-control rounded-0 @error('title') is-invalid @enderror"
                        value="{{isset($report)?$report->title : '' }}" autofocus placeholder="Title">
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row px-3">
                    <label for="author">Messege/Note From</label>
                    <input id="author" data-rule="required|min:4" name="author"
                        class="form-control rounded-0 @error('author') is-invalid @enderror"
                        value="{{isset($report)?$report->author : '' }}" autofocus placeholder="Name">
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row px-3">
                    <label for="catName">Image</label>
                    <div class="custom-file form-group">
                        <input id="postImg" name="postImg" type="file"
                            data-rule="{{isset($report)? '' : 'required|'}}mimes:png,jpg,jpeg|maxsize:500"
                            class="custom-file-input rounded-0 @error('postImg') is-invalid @enderror"
                            placeholder="Image">
                        <label class="custom-file-label rounded-0"
                            for="customFile">{{isset($report)?$report->img_url : 'Choose file' }}</label>
                        <div class="invalid-feedback"> </div>
                    </div>
                    <img src="{{isset($report) ? '/img/msg-report/'. $report->img_url : ''}}" class="mt-4"
                        height="50px">
                </div>
                <div class="form-group row px-3">
                    <label for="bio">Bio</label>
                </div>
                <div class="form-group row px-3">
                    <textarea id="bio" name="bio" class="w-100">{{isset($report)?$report->bio : '' }}</textarea>
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row px-3">
                    <label for="type">Select Type</label>
                    <select data-rule="select" class="form-control rounded-0" id="type" name="type">
                        @if(!isset($report))
                        <option value="-1"> -------- Select Type --------- </option>
                        @endif
                        @foreach ($types as $type)
                        <option value="{{$type->dd_index}}"
                            {{isset($report)?$report->type == $type->dd_index ? 'selected': '' : '' }}>
                            {{$type->dd_value}}
                        </option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row px-3">
                    <label for="">Body</label>
                </div>
                <div class="form-group row px-3">
                    <textarea id="editor" name="editor" class="w-100">{{isset($report)?$report->body : '' }}</textarea>
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row px-3">
                    <label for="dOrder">Display Order</label>
                    <input id="dOrder" name="dOrder"
                        class="form-control rounded-0 @error('dOrder') is-invalid @enderror"
                        data-rule="required|integer" value="{{isset($report)?$report->display_order : '' }}" autofocus
                        placeholder="Display Order">
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row mt-4">
                    <div class="col">
                        <div class="card mt-3 ">
                            <div class="card-body form-group row justify-content-between align-items-center">
                                <label class="col-md-1 col-form-label" for="status">Status</label>
                                <div class="col align-self-center">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox"
                                            {{ isset($report)?$report->status==1? 'checked' : '' : 'checked' }}
                                            class="custom-control-input" id="status" name="status">
                                        <label class="custom-control-label" for="status"></label>
                                    </div>
                                </div>
                                <button type="submit" id="submit"
                                    class="mr-3 btn btn-warning font-primary-semiBold text-uppercase">
                                    {{ isset($report)?'Edit' : 'Create'}}
                                </button>
                            </div>
                        </div>
                    </div>
            </form>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $('.form-control').on('keyup', function () {
$(this).removeClass("is-invalid");
});

$('.form-control').on('change', function () {
$(this).removeClass("is-invalid");
});
</script>
<script>
    $('.custom-file-input').on('change', function() {

        validateField($(this));
        if(!fieldIsValid)
        return false;
        var fileName = $(this).val();
        var img = $(this).parent().siblings("img");
        var cleanFileName = fileName.replace('C:\\fakepath\\', "");
        var reader = new FileReader();
        reader.onload = function(e) {
            $(img).attr("src", e.target.result);
        };
        reader.readAsDataURL(this.files[0]);
    })
</script>
<script>
    $('#submit').click(function () {
        validateAll($('#form'));
        return formIsValid;
        });
</script>
<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor' );
    CKEDITOR.replace( 'bio' );
</script>

@endsection