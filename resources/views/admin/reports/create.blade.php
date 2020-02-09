@extends('admin.layouts.app')

@section('content')


<div class="col-md-12 mt-2">
    <div class="content-body bg-white shadow px-5 py-4">
        @if(isset($report))
        <div class="row px-3 py-2">
            <h4 class="font-primary-medium text-uppercase text-primary">Edit</h4>
        </div>
        <form method="post" enctype="multipart/form-data" action="{{ route('admin.reports.update',$report->mnr_rid) }}">
            {{ method_field("PUT") }}
            @else
            <div class="row px-3 py-2">
                <h4 class="font-primary-medium text-uppercase text-primary">Create</h4>
            </div>
            <form method="post" enctype="multipart/form-data" action="{{ route('admin.reports.store') }}">
                @endif
                {{ csrf_field() }}
                <div class="form-group row px-3">
                    <label for="title">Title</label>
                    <input id="title" name="title" class="form-control rounded-0 @error('title') is-invalid @enderror"
                        value="{{isset($report)?$report->title : '' }}" required autofocus placeholder="Title">
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row px-3">
                    <label for="author">Author</label>
                    <input id="author" name="author"
                        class="form-control rounded-0 @error('author') is-invalid @enderror"
                        value="{{isset($report)?$report->author : '' }}" required autofocus placeholder="Author Name">
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row px-3">
                    <label for="bio">Bio</label>
                </div>
                <div class="form-group row px-3">
                    <textarea id="bio" name="bio" class="w-100">{{isset($report)?$report->bio : '' }}</textarea>
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row px-3">
                    <label for="">Report Body</label>
                </div>
                <div class="form-group row px-3">
                    <textarea id="editor" name="editor" class="w-100">{{isset($report)?$report->body : '' }}</textarea>
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-group row px-3">
                    <label for="dOrder">Display Order</label>
                    <input id="dOrder" name="dOrder"
                        class="form-control rounded-0 @error('dOrder') is-invalid @enderror"
                        value="{{isset($report)?$report->display_order : '' }}" required autofocus
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

<script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor' );
    CKEDITOR.replace( 'bio' );
</script>

<script src="{{asset('js/admin/validation.js')}}"></script>

@endsection