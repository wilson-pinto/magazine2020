@if(count($articles) == 0)
<h5 class="ml-4">No Results</h5>
@else
<table class="table table-hover">
    <thead>
        <tr>
            <th>
                Title
            </th>
            <th>
                Category
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
        @foreach($articles as $article)
        <tr>
            <td>
                {{$article->title}}
            </td>
            <td>
                {{$article->category->name}}
            </td>
            <td class="text-capitalize">
                {{$article->Author->name}}
            </td>
            <td>
                {{-- {{$blog->created_at}} --}}
                {{date('d M Y / H:i', strtotime($article->created_at))}}
            </td>
            <td>
                {{$article->status == 1 ? 'Active': 'Inactive'}}
            </td>

            <td>
                <a class="btn btn-warning px-2 text-white" data-toggle="tooltip" title="Edit"
                    href="/admin/article/{{$article->article_rid}}/edit">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
                {{-- <button class="btn btn-warning px-2 text-white" data-toggle="tooltip" title="Delete"
                    onclick="deletePost({{$article->article_rid}})">
                <i class="fa fa-trash" aria-hidden="true"></i>
                </button> --}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif