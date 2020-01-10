@extends('admin.layouts.app')
@section('content')

<div class="col-md-12 mt-2">
    <div class="row px-3 py-2">
        <h4 class="font-primary-medium text-uppercase">News</h4>
    </div>
    <div class="content-body bg-white shadow">
        <div class="p-3 row justify-content-end">
            <a href="{{ URL::to('/admin/news/create') }}"
                class="mr-3 btn btn-success font-primary-semiBold text-uppercase" data-toggle="tooltip"
                title="Create News">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Add
            </a>

        </div>
        <div class="p-3 row">
            <div id="table-list" class="col">
            </div>
        </div>
    </div>
</div>

@stop

@section('scripts')
<script>
    $(document).ready(function () {
        $.ajax({
            type: "GET",
            url: "/admin/news-showAll",
            success: function (data) {
                console.log(data);
                $("#table-list").html(data);
            },
            error: function (data) {
                console.log(data);                
            }
        });

    }); 
    function deletePost(postRid) {

    $.ajax({
        url: '/admin/remove-news/' + postRid,
        type: 'get',
 
        success: function (data) {
            console.log(data); 
            alert("Post removed successfully!!");
                location.reload();
        },
        error: function (error) {
            console.log(error);
  
        }
    });  
    }   
</script>
@stop