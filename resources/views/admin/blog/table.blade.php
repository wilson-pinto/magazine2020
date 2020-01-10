@if(count($blogs) == 0)
<h5>No Results</h5>
@else
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
                Date
            </th>
            <th>
                Status
            </th>
            <th>
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($blogs as $blog)
        <tr>
            <td>
                {{$blog->title}}
            </td>
            <td class="text-capitalize">
                {{$blog->Author->author_name}}
            </td>
            <td>
                {{-- {{$blog->created_at}} --}}
                {{date('d M Y / H:i', strtotime($blog->created_at))}}
            </td>
            <td>
                {{$blog->status == 0 ? 'Active': 'Inactive'}}
            </td>

            <td>
                <a class="btn btn-success px-2" data-toggle="tooltip" title="Edit"
                    href="/admin/blog/{{$blog->post_rid}}/edit">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
                <button class="btn btn-success px-2" data-toggle="tooltip" title="Delete"
                    onclick="deletePost({{$blog->post_rid}})">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif