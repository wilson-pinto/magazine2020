@extends('admin.layouts.app')

@section('content')


<div class="col-md-12 mt-2">
    @if(isset($author))
    <div class="row px-3 py-2">
        <h4 class="font-primary-medium text-uppercase">Edit Author</h4>
    </div>
    <form method="post" action="{{ route('admin.author.update',$author->author_rid) }}">
        {{ method_field("PUT") }}
        @else
        <div class="row px-3 py-2">
            <h4 class="font-primary-medium text-uppercase">Create Author</h4>
        </div>
        <form method="post" enctype="multipart/form-data" action="{{ route('admin.author.store') }}">
            @endif
            {{ csrf_field() }}
            <div class="content-body bg-white shadow px-5 py-4">
                <div class="form-group row">
                    <label for="authorName">Author Name</label>
                    <input id="authorName" name="authorName"
                        class="form-control rounded-0 @error('authorName') is-invalid @enderror"
                        value="{{isset($author)?$author->author_name : '' }}" required autofocus placeholder="Name">
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="row justify-content-end">
                    <button class="btn btn-success font-primary-semiBold text-uppercase">
                        {{isset($author)? "Edit": "Add"}}
                    </button>
                </div>

            </div>
        </form>
</div>

@endsection