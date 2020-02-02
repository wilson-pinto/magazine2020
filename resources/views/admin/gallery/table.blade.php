@if(count($gallery) == 0)
<h5 class="ml-4">No Results</h5>
@else
<table class="table table-hover">
    <thead>
        <tr>
            <th>
                Title
            </th>
            <th>
                Image
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
        @foreach($gallery as $gal)
        <tr>
            <td>
                {{$gal->desc}}
            </td>
            <td>
                @if ($gal->type == 1)
                <b>Video</b>
                @else
                <img src="{{'/img/gallery/'. $gal->url }}" class="mt-4" height="50px">
                @endif
            </td>
            <td>
                {{date('d M Y / H:i', strtotime($gal->created_at))}}
            </td>
            <td>
                {{$gal->status == 1 ? 'Active': 'Inactive'}}
            </td>

            <td>
                <a class="btn btn-warning px-2 text-white" data-toggle="tooltip" title="Edit"
                    href="/admin/gallery/{{$gal->gal_rid}}/edit">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
                <button class="btn btn-warning px-2 text-white" data-toggle="tooltip" title="Delete"
                    onclick="deletePost({{$gal->gal_rid}})">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif