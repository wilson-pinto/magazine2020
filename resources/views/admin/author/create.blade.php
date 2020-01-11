@extends('admin.layouts.app')

@section('content')


<div class="col-md-11 col-xl-10 mt-2">
     <div class="content-body bg-white shadow px-5 py-4">
    @if(isset($author))
    <div class="row px-3 py-2">
        <h4 class="font-primary-medium text-uppercase text-primary">Edit Author</h4>
    </div>
    <form method="post" action="{{ route('admin.author.update',$author->author_rid) }}">
        {{ method_field("PUT") }}
        @else
        <div class="row px-3 py-2">
            <h4 class="font-primary-medium text-uppercase text-primary">Create Author</h4>
        </div>
        <form method="post" enctype="multipart/form-data" action="{{ route('admin.author.store') }}">
            @endif
            {{ csrf_field() }}
           
                <div class="form-group row px-3 ">
                    <label for="authorName">Author Name</label>
                    <input id="authorName" name="authorName"
                        class="form-control rounded-0 @error('authorName') is-invalid @enderror"
                        value="{{isset($author)?$author->author_name : '' }}" required autofocus placeholder="Name">
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="row justify-content-end px-3">
                    <button class="btn btn-warning font-primary-semiBold text-uppercase">
                        {{isset($author)? "Edit": "Add"}}
                    </button>
                </div>
        </form>
    </div>
</div>

@endsection