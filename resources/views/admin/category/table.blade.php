@if(count($categories) == 0)
<h5>No Results</h5>
@else
<table class="table table-hover">
    <thead>
        <tr>
            <th>
                Name
            </th>
            <th>
                Type
            </th>
            <th>Date / Time</th>
            <th>
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $cat)
        <tr>
            <td>
                {{$cat->category_name}}
            </td>
            <td>
                {{$cat->post_type == 2 ? "Blog" : "News"}}
            </td>
            <td>
                {{date('d M Y / H:i', strtotime($cat->created_at))}}
            </td>
            <td>
                <a class="btn btn-success px-2" data-toggle="tooltip" title="Edit"
                    href="/admin/category/{{$cat->category_rid}}/edit">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
                {{-- <a class="btn btn-success px-2" data-toggle="tooltip" title="Edit"
                    href="/admin/category/{{$cat->category_rid}}/destroy">
                <i class="fa fa-trash" aria-hidden="true"></i>
                </a> --}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif