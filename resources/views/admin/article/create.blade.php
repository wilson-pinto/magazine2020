@extends('admin.layouts.app')

@section('content')


<div class="col-md-12 mt-2">
    <div class="content-body bg-white shadow px-5 py-4">
        @if(isset($article))
        <div class="row px-3 py-2">
            <h4 class="font-primary-medium text-uppercase text-primary">Edit Article</h4>
        </div>
        <form method="post" enctype="multipart/form-data"
            action="{{ route('admin.article.update',$article->article_rid) }}">
            {{ method_field("PUT") }}
            @else
            <div class="row px-3 py-2">
                <h4 class="font-primary-medium text-uppercase text-primary">Create Article</h4>
            </div>
            <form method="post" enctype="multipart/form-data" action="{{ route('admin.article.store') }}">
                @endif
                {{ csrf_field() }}

                <div class="form-group row px-3">
                    <label for="title">Title</label>
                    <input id="title" name="title"
                        class="form-control rounded-0 @error('authorName') is-invalid @enderror"
                        value="{{isset($article)?$article->title : '' }}" required autofocus placeholder="Name">
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row px-3">
                    <label for="authorName">Author</label>
                    <select class="form-control rounded-0" id="author" name="author">
                        @if(!isset($article))
                        <option value="-1"> --------Select Author--------- </option>
                        @endif
                        @foreach ($authors as $author)
                        <option value="{{$author->author_rid}}"
                            {{isset($article)?$article->author_rid == $author->author_rid ? 'selected': '' : '' }}>
                            {{$author->name}} - {{$author->branch->name}}
                        </option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row px-3">
                    <label for="authorName">Category</label>
                    <select class="form-control rounded-0" id="category" name="category">
                        @if(!isset($article))
                        <option value="-1"> --------Select Category--------- </option>
                        @endif
                        @foreach ($categories as $category)
                        <option value="{{$category->cat_rid}}"
                            {{isset($article)?$article->cat_rid == $category->cat_rid ? 'selected': '' : '' }}>
                            {{$category->name}}
                        </option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row px-3">
                    <label for="">Article Body</label>
                </div>
                <div class="form-group row px-3">
                    <textarea id="editor" name="editor"
                        class="w-100">{{isset($article)?$article->body : '' }}</textarea>
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
                                            {{ isset($article)?$article->status==1? 'checked' : '' : 'checked' }}
                                            class="custom-control-input" id="status" name="status">
                                        <label class="custom-control-label" for="status"></label>
                                    </div>
                                </div>
                                <button type="submit" id="submit"
                                    class="mr-3 btn btn-warning font-primary-semiBold text-uppercase">
                                    {{ isset($article)?'Edit' : 'Create'}}
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

        if (imageSize > 500) {
            $(this).addClass("is-invalid");
            $(this).siblings('div').text("Max file size is 500kb");
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