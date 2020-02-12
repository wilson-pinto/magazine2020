@if(count($reports) == 0)
<h5 class="ml-4">No Results</h5>
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
                Profile
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
        @foreach($reports as $report)
        <tr>
            <td>
                {{$report->title}}
            </td>
            <td class="text-capitalize">
                {{$report->author}}
            </td>
            <td>
                <img src="{{'/img/msg-report/'. $report->img_url }}" class="profile-img" height="50px" width="50px">
            </td>
            <td>
                {{-- {{$blog->created_at}} --}}
                {{date('d M Y / H:i', strtotime($report->created_at))}}
            </td>
            <td>
                {{$report->status == 1 ? 'Active': 'Inactive'}}
            </td>

            <td>
                <a class="btn btn-warning px-2 text-white" data-toggle="tooltip" title="Edit"
                    href="/admin/msg-notes/{{$report->mnr_rid}}/edit">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>
                {{-- <button class="btn btn-warning px-2 text-white" data-toggle="tooltip" title="Delete"
                    onclick="deletePost({{$report->article_rid}})">
                <i class="fa fa-trash" aria-hidden="true"></i>
                </button> --}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif