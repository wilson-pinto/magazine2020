@if(count($authors) == 0)
<h5>No Results</h5>
@else
<table class="table table-hover">
    <thead>
        <tr>
            <th>
                Name
            </th>
            <th>Date / Time</th>
            <th>
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($authors as $author)
        <tr>
            <td>
                {{$author->author_name}}
            </td>
            <td>
                {{date('d M Y / H:i', strtotime($author->created_at))}}
            </td>
            <td>
                <a class="btn btn-success px-2" data-toggle="tooltip" title="Edit"
                    href="/admin/author/{{$author->author_rid}}/edit">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif