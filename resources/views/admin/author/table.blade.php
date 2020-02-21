@if(count($authors) == 0)
<h5 class="ml-4">No Results</h5>
@else
<table class="table table-hover">
    <thead>
        <tr>
            <th>
                Profile
            </th>
            <th>
                Name
            </th>
            <th>
                Type
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
        @foreach($authors as $author)
        <tr>
            <td>
                <img src="{{isset($author->profile_img) ? '/img/author/'. $author->profile_img : '/img/no-img.png'}}"
                    class="profile-img" height="50px" width="50px">
            </td>
            <td>
                {{$author->name}}
            </td>
            <td>
                {{$author->branch->name}}
            </td>
            <td>
                {{ $author->status==1? 'Active' : 'Inactive' }}
            </td>
            <td>
                <a class="btn btn-warning px-2 text-white" data-toggle="tooltip" title="Edit"
                    href="/admin/author/{{$author->author_rid}}/edit">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif