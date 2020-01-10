@extends('admin.layouts.app')

@section('content')


<div class="col-md-12 mt-2">
    @if(isset($category))
    <div class="row px-3 py-2">
        <h4 class="font-primary-medium text-uppercase">Edit Category</h4>
    </div>
    <form method="post" action="{{ route('admin.category.update',$category->category_rid) }}">
        {{ method_field("PUT") }}
        @else
        <div class="row px-3 py-2">
            <h4 class="font-primary-medium text-uppercase">Create Category</h4>
        </div>
        <form method="post" enctype="multipart/form-data" action="{{ route('admin.category.store') }}">
            @endif
            {{ csrf_field() }}
            <div class="content-body bg-white shadow px-5 py-4">
                <div class="form-row">
                    <label for="catName">Category Name</label>
                    <input id="catName" name="catName"
                        class="form-control rounded-0 @error('catName') is-invalid @enderror"
                        value="{{isset($category)?$category->category_name : '' }}" required autofocus
                        placeholder="Name">
                    <div class="invalid-feedback"> </div>
                </div>
                <div class="form-row mt-2">
                    <label for="inputState">Type</label>
                    <select id="postType" name="postType" class="form-control rounded-0">
                        <option value="2"
                            {{isset($category)?$category->post_type == 2 ? 'selected' : '' : 'selected' }}>
                            Blog
                        </option>
                        <option value="1" {{isset($category)?$category->post_type == 1 ? 'selected' : '' : '' }}>
                            News
                        </option>
                    </select>
                </div>
                <div class="form-row mt-4 justify-content-end">
                    <button class="btn btn-success font-primary-semiBold text-uppercase">
                        {{isset($category)? "Edit": "Add"}}
                    </button>
                </div>

            </div>
        </form>
</div>

@endsection