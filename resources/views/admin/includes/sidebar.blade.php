<div id="sidebar-container" class="sidebar-expanded d-block  sidebar-container">
    <div class="brand">
        <a href="/" class="text-white">
            <h4 class="text-uppercase">Abhivyakta</h4>
        </a>
    </div>
    <ul class="list-group">
        <a href="{{ URL::to('/home') }}"
            class="list-group-item list-group-item-action mt-3 {{request()->is('gifts') ? 'nav-link active' : 'nav-link' }}">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-tachometer fa-fw mr-3" data-toggle="tooltip" data-placement="right"
                    title="Authors"></span>
                <span class="menu-collapsed">Dashboard</span>
            </div>
        </a>

        <a href="{{ URL::to('/admin/author') }}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-user fa-fw mr-3" data-toggle="tooltip" data-placement="right" title="Authors"></span>
                <span class="menu-collapsed">Authors</span>
            </div>
        </a>

        <a href="{{ URL::to('/admin/article') }}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-pencil fa-fw mr-3" data-toggle="tooltip" data-placement="right"
                    title="Category"></span>
                <span class="menu-collapsed">Articles</span>
            </div>
        </a>

        <a href="{{ URL::to('/admin/drawings') }}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa fa-opencart mr-3" data-toggle="tooltip" data-placement="right" title="Blog"></span>
                <span class="menu-collapsed">Drawings</span>
            </div>
        </a>
        <a href="{{ URL::to('/admin/photographs') }}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-camera fa-fw mr-3" data-toggle="tooltip" data-placement="right" title="News"></span>
                <span class="menu-collapsed">Photographs</span>
            </div>
        </a>
        <a href="{{ URL::to('/admin/gallery') }}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-picture-o mr-3" data-toggle="tooltip" data-placement="right" title="News"></span>
                <span class="menu-collapsed">Gallery</span>
            </div>
        </a>
        <a href="{{ URL::to('/admin/reports') }}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-file-text-o mr-3" data-toggle="tooltip" data-placement="right" title="News"></span>
                <span class="menu-collapsed">Reports</span>
            </div>
        </a>
        <a href="{{ URL::to('/admin/msg-notes') }}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-comments mr-3" data-toggle="tooltip" data-placement="right" title="News"></span>
                <span class="menu-collapsed">Msg/Notes</span>
            </div>
        </a>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"
            class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-sign-out fa-fw mr-3" data-toggle="tooltip" data-placement="right"
                    title="News"></span>
                <span class="menu-collapsed">Logout</span>
            </div>
        </a>
    </ul>
</div>

<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>