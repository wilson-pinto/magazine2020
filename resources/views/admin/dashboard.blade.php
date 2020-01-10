@extends('admin.layouts.app')
@section('content')

{{-- <div class="col-md-12 mt-2">
    <div class="row px-3 py-2">
        <h4 class="font-primary-medium text-uppercase">DashBoard</h4>
    </div>
    <div class="content-body bg-white shadow mb-5">
        <div class="py-4 px-5 row justify-content-between">
            <div class="col-md-3 col-sm-6 col-xs-12 p-3">
                <div class="infobox d-flex align-items-center p-0">
                    <div class="infobox-left bg-success py-4 px-4 text-white">
                        <h1>
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </h1>
                    </div>
                    <div class="infobox-right px-3 font-primary-semiBold">
                        <p class="m-auto">
                            {{$authorsCount}} Authors <br>
                            <a href="/admin/author">
                                View Details
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 p-3">
                <div class="infobox d-flex align-items-center p-0">
                    <div class="infobox-left bg-success py-4 px-4 text-white">
                        <h1>
                            <i class="fa fa-list" aria-hidden="true"></i>
                        </h1>
                    </div>
                    <div class="infobox-right px-3 font-primary-semiBold">
                        <p class="m-auto">
                            {{$categoryCount}} Categories <br>
                            <a href="/admin/category">
                                View Details
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 p-3">
                <div class="infobox d-flex align-items-center p-0">
                    <div class="infobox-left bg-success py-4 px-4 text-white">
                        <h1>
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </h1>
                    </div>
                    <div class="infobox-right px-3 font-primary-semiBold">
                        <p class="m-auto">
                            {{$blogCount}} Blogs <br>
                            <a href="/admin/blog">
                                View Details
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 p-3">
                <div class="infobox d-flex align-items-center p-0">
                    <div class="infobox-left bg-success py-4 px-4 text-white">
                        <h1>
                            <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                        </h1>
                    </div>
                    <div class="infobox-right px-3 font-primary-semiBold">
                        <p class="m-auto">
                            {{$newsCount}} News <br>
                            <a href="/admin/news">
                                View Details
                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

        @if(count($recentBlogs)>0)
        <h4 class="px-4">Recent Blogs</h4>
        <div class="row px-5">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>
                            Title
                        </th>
                        <th>
                            Author
                        </th>
                        <th>
                            Date / Time
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recentBlogs as $blog)
                    <tr>
                        <td>
                            {{$blog->title}}
                        </td>
                        <td class="text-capitalize">
                            {{$blog->Author->author_name}}
                        </td>
                        <td>
                            {{date('d M Y / H:i', strtotime($blog->created_at))}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif

        @if(count($recentNews)>0)
        <h4 class="px-4 mt-3">Recent News</h4>
        <div class="row px-5">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>
                            Title
                        </th>
                        <th>
                            Author
                        </th>
                        <th>Date / Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recentNews as $news)
                    <tr>
                        <td>
                            {{$news->title}}
                        </td>
                        <td class="text-capitalize">
                            {{$news->Author->author_name}}
                        </td>
                        <td>
                            {{date('d M Y / H:i', strtotime($news->created_at))}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div> --}}

@stop