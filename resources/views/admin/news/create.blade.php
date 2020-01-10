@extends('admin.layouts.app')

@section('content')


<div class="col-md-12 mt-2">
    @if(isset($newsObj))
    <div class="row px-3 py-2">
        <h4 class="font-primary-medium text-uppercase">Edit News</h4>
    </div>
    <form method="post" enctype="multipart/form-data" action="{{ route('admin.news.update',$newsObj->post_rid) }}">
        {{ method_field("PUT") }}
        @else
        <div class="row px-3 py-2">
            <h4 class="font-primary-medium text-uppercase">Create News</h4>
        </div>
        <form method="post" enctype="multipart/form-data" action="{{ route('admin.news.store') }}">
            @endif
            {{ csrf_field() }}
            <div class="content-body bg-white shadow px-5 py-4">
                <div class="form-row">
                    <label for="postTitle">News Title</label>
                    <input id="postTitle" name="postTitle"
                        class="form-control rounded-0 @error('catName') is-invalid @enderror"
                        value="{{isset($newsObj)?$newsObj->title : '' }}" required autofocus placeholder="Name">
                    <div class="invalid-feedback"> </div>
                </div>

                <div class="form-row mt-3">
                    <label for="catName">News Image</label>
                    <div class="custom-file">
                        <input id="postImageOld" name="postImageOld" type="hidden">
                        <input id="postImage" name="postImage" type="file"
                            class="custom-file-input rounded-0 @error('postImage') is-invalid @enderror"
                            placeholder="Horizontal Image">
                        <label class="custom-file-label rounded-0"
                            for="customFile">{{isset($newsObj)?$newsObj->image_url : 'Choose file' }}</label>
                        <div class="invalid-feedback"> </div>
                    </div>
                    <img src="{{isset($newsObj) ? Config::get('app.url') . '/img/news/'. $newsObj->image_url : ''}}"
                        alt="" class="mt-4" height="50px">
                </div>

                <div class="form-row mt-3">
                    <label for="">News Body</label>
                </div>
                <div class="form-row mt-2">
                    <textarea id="editor" name="editor"
                        class="form-control rounded-0">{{isset($newsObj)?$newsObj->body : '' }}</textarea>
                    <div class="invalid-feedback"> </div>
                </div>

                <div class="form-row mt-3">
                    <label for="inputState">Category</label>
                    <select id="category" name="category" class="form-control rounded-0">
                        @if(!isset($newsObj))
                        <option value="-1" selected>Select Category</option>
                        @endif
                        @foreach ($categories as $category)
                        <option value="{{ $category->category_rid }}"
                            {{isset($newsObj) ? $newsObj->category_rid == $category->category_rid  ? 'selected' : '' : '' }}>
                            {{ $category->category_name }}
                        </option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback"> </div>
                </div>

                <div class="form-row mt-3">
                    <label for="inputState">Author</label>
                    <select id="author" name="author" class="form-control rounded-0">
                        @if(!isset($newsObj))
                        <option value="-1" selected>Select Author</option>
                        @endif
                        @foreach ($authors as $author)
                        <option value="{{ $author->author_rid }}"
                            {{isset($newsObj) ? $newsObj->author_rid == $author->author_rid  ? 'selected' : '' : '' }}>
                            {{ $author->author_name }}
                        </option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback"> </div>
                </div>

                <div class="form-row mt-3 card">
                    <div class="col-md-12">
                        <div class="card-body form-group row">
                            <label class="col-md-2 col-form-label" for="">Active</label>
                            <div class="col-md-3 align-self-center">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox"
                                        checked="{{ isset($newsObj)?$newsObj->status==1? 'checked' : '' : 'checked' }}"
                                        class="custom-control-input" id="postStatus" name="postStatus">
                                    <label class="custom-control-label" for="postStatus"></label>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <button class="btn btn-success font-primary-semiBold text-uppercase float-right"
                                    id="submit">
                                    {{isset($newsObj)? "Edit": "Add"}}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
</div>

@endsection

@section('scripts')


<script>
    $('.custom-file-input').on('change', function() {
        //get the file name
        var fileName = $(this).val();
        var img = $(this).parent().siblings("img");
        var cleanFileName = fileName.replace('C:\\fakepath\\', "");

        $(img).attr("src", '');
        
        $(this).next('.custom-file-label').html(cleanFileName);

        var imageExt = this.files[0].type;

        var imageSize = this.files[0].size / 1024;

        if (imageExt != "image/png" && imageExt != "image/jpg" && imageExt != "image/jpeg") {
            $(this).addClass("is-invalid");
            $(this).siblings('div').text("File format not supported");
            return false;
        }

        if (imageSize > 1024) {
            $(this).addClass("is-invalid");
            $(this).siblings('div').text("Max file size is 1MB");
            return false;
        }

        $(this).removeClass("is-invalid");

        var reader = new FileReader();
        reader.onload = function(e) {
            $(img).attr("src", e.target.result);
        };
        reader.readAsDataURL(this.files[0]);
    })
</script>

<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor' );
</script>

<script src="{{asset('js/admin/validation.js')}}"></script>

@endsection