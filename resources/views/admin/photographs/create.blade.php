@extends('admin.layouts.app')

@section('content')


<div class="col-md-12 mt-2">
    <div class="content-body bg-white shadow px-5 py-4">
        @if(isset($post))
        <div class="row px-3 py-2">
            <h4 class="font-primary-medium text-uppercase text-primary">Edit Photograph</h4>
        </div>
        <form id="form" method="post" enctype="multipart/form-data"
            action="{{ route('admin.photographs.update',$post->post_rid) }}">
            {{ method_field("PUT") }}
            @else
            <div class="row px-3 py-2">
                <h4 class="font-primary-medium text-uppercase text-primary">Create Photograph</h4>
            </div>
            <form id="form" method="post" enctype="multipart/form-data" action="{{ route('admin.photographs.store') }}">
                @endif
                {{ csrf_field() }}

                <div class="form-group row px-3">
                    <label for="catName">Image</label>
                    <div class="custom-file form-group">
                        <input id="postImg" name="postImg" type="file"
                            data-rule="{{isset($post)? '' : 'required|'}}mimes:png,jpg,jpeg|maxsize:500"
                            class="custom-file-input rounded-0 @error('postImg') is-invalid @enderror"
                            placeholder="Image">
                        <label class="custom-file-label rounded-0"
                            for="customFile">{{isset($post)?$post->img_url : 'Choose file' }}</label>
                        <div class="invalid-feedback"> </div>
                    </div>
                    <img src="{{isset($post) ? '/img/drawings/'. $post->img_url : ''}}" class="mt-4" height="50px">
                </div>
                <div class="form-group row px-3">
                    <label for="authorName">Author</label>
                    <select data-rule="select" class="form-control rounded-0" id="author" name="author">
                        @if(!isset($post))
                        <option value="-1"> --------Select Author--------- </option>
                        @endif
                        @foreach ($authors as $author)
                        <option value="{{$author->author_rid}}"
                            {{isset($post)?$post->author_rid == $author->author_rid ? 'selected': '' : '' }}>
                            {{$author->name}} - {{$author->branch->name}}
                        </option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row  mt-4">
                    <div class="col">
                        <div class="card mt-3 ">
                            <div class="card-body form-group row justify-content-between align-items-center">
                                <label class="col-md-1 col-form-label" for="status">Status</label>
                                <div class="col align-self-center">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox"
                                            {{ isset($post)?$post->status==1? 'checked' : '' : 'checked' }}
                                            class="custom-control-input" id="status" name="status">
                                        <label class="custom-control-label" for="status"></label>
                                    </div>
                                </div>
                                <button type="submit" id="submit"
                                    class="mr-3 btn btn-warning font-primary-semiBold text-uppercase">
                                    {{ isset($post)?'Edit' : 'Create'}}
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

@endsection