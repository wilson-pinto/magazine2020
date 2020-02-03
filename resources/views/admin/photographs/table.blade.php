@if(count($posts) == 0)
<h5 class="ml-4">No Results</h5>
@else
<table class="table table-hover">
    <thead>
        <tr>
            <th>
                Author
            </th>
            <th>
                Post
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
        @foreach($posts as $post)
        <tr>
            <td class="text-capitalize">
                {{$post->Author->name}}
            </td>
            <td>
                <img src="{{'/img/photographs/'. $post->img_url }}" class="mt-4" height="50px">
            </td>
            <td>
                {{-- {{$blog->created_at}} --}}
                {{date('d M Y / H:i', strtotime($post->created_at))}}
            </td>
            <td>
                {{$post->status == 1 ? 'Active': 'Inactive'}}
            </td>

            <td>
                <a class="btn btn-warning px-2 text-white" data-toggle="tooltip" title="Edit"
                    href="/admin/photographs/{{$post->post_rid}}/edit">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
                {{-- <button class="btn btn-warning px-2 text-white" data-toggle="tooltip" title="Delete"
                    onclick="deletePost({{$post->article_rid}})">
                <i class="fa fa-trash" aria-hidden="true"></i>
                </button> --}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif