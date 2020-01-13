<div id="sidebar-container" class="sidebar-expanded d-block  sidebar-container">
<div class="brand">
    <h4 class="text-uppercase">Abhivyakta</h4>
</div>
    <ul class="list-group">
        <a href="{{ URL::to('/home') }}" class="list-group-item list-group-item-action mt-3">
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

        <a href="{{ URL::to('/admin/category') }}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-pencil fa-fw mr-3" data-toggle="tooltip" data-placement="right"
                    title="Category"></span>
                <span class="menu-collapsed">Articles</span>
            </div>
        </a>

        <a href="{{ URL::to('/admin/blog') }}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa fa-opencart mr-3" data-toggle="tooltip" data-placement="right" title="Blog"></span>
                <span class="menu-collapsed">Drawings</span>
            </div>
        </a>
        <a href="{{ URL::to('/admin/news') }}" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-start align-items-center">
                <span class="fa fa-camera fa-fw mr-3" data-toggle="tooltip" data-placement="right"
                    title="News"></span>
                <span class="menu-collapsed">Photographs</span>
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