@extends('admin.layouts.app')
@section('content')

<div class="col-md-12 mt-2">
    <div class="content-body bg-white shadow">
        <div class="p-3 row align-items-center">
            <div class="col-3 ml-3">
                <h4 class="font-primary-regular text-primary text-uppercase">Gallery</h4>
            </div>
            <div class="col">
                <a href="{{ URL::to('/admin/gallery/create') }}" class="mr-3 btn-primary float-right shadow"
                    data-toggle="tooltip" title="Create Author">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </a>
            </div>
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
            url: "/admin/gallery-showAll",
            success: function (data) {
                console.log(data);
                $("#table-list").html(data);
            },
            error: function (data) {
                console.log(data);                
            }
        });

    });    
</script>
@stop