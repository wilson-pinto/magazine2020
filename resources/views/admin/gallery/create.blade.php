@extends('admin.layouts.app')

@section('content')


<div class="col-md-12 mt-2">
    <div class="content-body bg-white shadow px-5 py-4">
        @if(isset($gallery))
        <div class="row px-3 py-2">
            <h4 class="font-primary-medium text-uppercase text-primary">Edit</h4>
        </div>
        <form method="post" id="form" enctype="multipart/form-data"
            action="{{ route('admin.gallery.update',$gallery->gal_rid) }}">
            {{ method_field("PUT") }}
            @else
            <div class="row px-3 py-2">
                <h4 class="font-primary-medium text-uppercase text-primary">Create</h4>
            </div>
            <form method="post" id="form" enctype="multipart/form-data" action="{{ route('admin.gallery.store') }}">
                @endif
                {{ csrf_field() }}

                <div class="form-group row px-3">
                    <label for="title">Title</label>
                    <input id="title" name="title"
                        class="form-control  rounded-0 @error('authorName') is-invalid @enderror"
                        value="{{isset($gallery)?$gallery->desc : '' }}" data-rule="required|min:4" autofocus
                        placeholder="Name">
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row px-3">
                    <label for="type">Type</label>
                    <select data-rule="select" class="form-control rounded-0" id="type" name="type">
                        @if(!isset($gallery))
                        <option value="-1"> --------Select Type--------- </option>
                        @endif
                        @foreach ($galTypes as $galType)
                        <option value="{{$galType->dd_index}}"
                            {{isset($gallery)?$gallery->type == $galType->dd_index ? 'selected': '' : '' }}>
                            {{$galType->dd_value}}
                        </option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row px-3 {{isset($gallery)?$gallery->type==1? '' : 'd-none' : 'd-none'}}"
                    id="vUrlWrapper">
                    <label for="url">Video Url</label>
                    <input id="url" name="url" class="form-control rounded-0 @error('url') is-invalid @enderror"
                        value="{{isset($gallery)?$gallery->url : '' }}" placeholder="Video Url">
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row px-3 {{isset($gallery)?$gallery->type == 1? 'd-none' : '' : 'd-none'}}"
                    id="imgWrapper">
                    <label for="catName">Image</label>
                    <div class="custom-file form-group">
                        <input id="galImg" name="galImg" type="file"
                            class="custom-file-input rounded-0 @error('galImg') is-invalid @enderror"
                            placeholder="Image" data-rule="mimes:png,jpg,jpeg|maxsize:500">
                        <label class="custom-file-label rounded-0"
                            for="customFile">{{isset($gallery)?$gallery->img_url : 'Choose file' }}</label>
                        <div class="invalid-feedback"> </div>
                    </div>
                    <img src="{{isset($gallery) ? '/img/gallery/'. $gallery->url : ''}}" class="mt-4" height="50px">
                </div>

                <div class="form-group row mt-4">
                    <div class="col">
                        <div class="card mt-3 ">
                            <div class="card-body form-group row justify-content-between align-items-center">
                                <label class="col-md-1 col-form-label" for="status">Status</label>
                                <div class="col align-self-center">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox"
                                            {{ isset($gallery)?$gallery->status==1? 'checked' : '' : 'checked' }}
                                            class="custom-control-input" id="status" name="status">
                                        <label class="custom-control-label" for="status"></label>
                                    </div>
                                </div>
                                <button type="submit" id="submit"
                                    class="mr-3 btn btn-warning font-primary-semiBold text-uppercase">
                                    {{ isset($gallery)?'Edit' : 'Create'}}
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
    $('#type').on('change', function() {
        var value =  $(this).val();
        if(value === '1'){
            $('#vUrlWrapper').removeClass('d-none');
            $('#imgWrapper').addClass('d-none');
        }else{
            $('#vUrlWrapper').addClass('d-none');
            $('#imgWrapper').removeClass('d-none');
        }
        $('#vUrlWrapper').children('input').val('');$('#vUrlWrapper').children('input').val('');
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

@endsection