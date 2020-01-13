@extends('admin.layouts.app')

@section('content')


<div class="col-md-12 mt-2">
    <div class="content-body bg-white shadow px-5 py-4">
        @if(isset($author))
        <div class="row px-3 py-2">
            <h4 class="font-primary-medium text-uppercase text-primary">Edit Author</h4>
        </div>
        <form method="post" enctype="multipart/form-data"
            action="{{ route('admin.author.update',$author->author_rid) }}">
            {{ method_field("PUT") }}
            @else
            <div class="row px-3 py-2">
                <h4 class="font-primary-medium text-uppercase text-primary">Create Author</h4>
            </div>
            <form method="post" enctype="multipart/form-data" action="{{ route('admin.author.store') }}">
                @endif
                {{ csrf_field() }}

                <div class="form-group row px-3">
                    <label for="authorName">Author Name</label>
                    <input id="authorName" name="authorName"
                        class="form-control rounded-0 @error('authorName') is-invalid @enderror"
                        value="{{isset($author)?$author->name : '' }}" required autofocus placeholder="Name">
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row px-3">
                    <label for="catName">Profile</label>
                    <div class="custom-file">
                        <input id="authorOld" name="authorOld" type="hidden"
                            value="{{isset($author)?$author->profile_img : ''}}">
                        <input id="authorImage" name="authorImage" type="file"
                            class="custom-file-input rounded-0 @error('authorImage') is-invalid @enderror"
                            placeholder="Profile">
                        <label class="custom-file-label rounded-0"
                            for="customFile">{{isset($author)?$author->profile_img : 'Choose file' }}</label>
                        <div class="invalid-feedback"> </div>
                    </div>
                    <img src="{{isset($author) ? '/img/author/'. $author->profile_img : '/img/no-img.png'}}"
                        class="mt-4" height="50px">
                </div>
                <div class="form-group row px-3">
                    <label for="branch">Branch</label>
                    <input id="branch" name="branch"
                        class="form-control rounded-0 @error('branch') is-invalid @enderror"
                        value="{{isset($author)?$author->branch : '' }}" autofocus placeholder="Branch">
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row px-3">
                    <label for="year">Year</label>
                    <input id="year" name="year" class="form-control rounded-0 @error('year') is-invalid @enderror"
                        value="{{isset($author)?$author->year : '' }}" autofocus placeholder="Year">
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row px-3 mt-4">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="typeStudent" name="type" class="custom-control-input" value="1"
                            {{ isset($author)?$author->type == 1 ? 'checked' : '' : 'checked' }}>
                        <label class="custom-control-label" for="typeStudent">Student</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="typeLecturer" name="type" class="custom-control-input" value="2"
                            {{ isset($author)?$author->type == 2 ? 'checked' : '' : '' }}>
                        <label class="custom-control-label" for="typeLecturer">Lecturer
                        </label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="typeOldStudent" name="type" class="custom-control-input" value="3"
                            {{ isset($author)?$author->type == 3 ? 'checked' : '' : '' }}>
                        <label class="custom-control-label" for="typeOldStudent">Old Student
                        </label>
                    </div>
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
                                            {{ isset($author)?$author->status==1? 'checked' : '' : 'checked' }}
                                            class="custom-control-input" id="status" name="status">
                                        <label class="custom-control-label" for="status"></label>
                                    </div>
                                </div>
                                <button type="submit" id="submit"
                                    class="mr-3 btn btn-warning font-primary-semiBold text-uppercase">
                                    {{ isset($author)?'Edit' : 'Create'}}
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

@endsection