@if(count($news) == 0)
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
            <th>Date / Time</th>
            <th>
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($news as $newsObj)
        <tr>
            <td>
                {{$newsObj->title}}
            </td>
            <td>
                {{$newsObj->Author->author_name}}
            </td>
            <td>
                {{date('d M Y / H:i', strtotime($newsObj->created_at))}}
            </td>
            {{-- <td>
                {{$newsObj->status == 0 ? 'Active': 'Inactive'}}
            </td> --}}

            <td>
                <a class="btn btn-success px-2" data-toggle="tooltip" title="Edit"
                    href="/admin/news/{{$newsObj->post_rid}}/edit">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
                <button class="btn btn-success px-2" data-toggle="tooltip" title="Delete"
                    onclick="deletePost({{$newsObj->post_rid}})">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif