<?php use App\Http\Controllers\client\LandingController;
$headerCats =  LandingController::getCats();
$headerGal =  LandingController::getGalCats();
$reports =  LandingController::getReports();
$messages =  LandingController::getMessages();
$pNote =  LandingController::getPrincipalsNote();
$eNote =  LandingController::getEditorsNote();
?>

<div class="col px-0 bg-secondary">
    {{-- <div
        class="row w-100 mx-0 bg-secondary footer justify-content-center text-white flex-column align-items-center pt-4">
        <a class="navbar-brand w-100 text-decoration-none" href="/">
            <h1 class="font-valentine pl-3 text-center text-white">Abhivyakta</h1>
            <p class="pl-md-5 ml-4 font-alata text-center text-white">Karnataka Polytecnic, Mangaluru</p>
        </a>
    </div> --}}
    <div class="row w-100 mx-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-lg w-100">
            <a class="navbar-brand py-3 d-flex justify-content-center text-white flex-column align-items-center"
                href="/">
                <h3 class="font-valentine text-dark">Abhivyakta</h3>
                <p class="font-alata font-sm text-dark mb-0">Karnataka (Govt.) Polytecnic, Mangaluru</p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto py-0">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle {{request()->is('contents/*') ? 'active' : '' }}" href="#"
                            id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Contents
                        </a>
                        <div class="dropdown-menu border-0 bg-primary" aria-labelledby="navbarDropdown">
                            @foreach ($headerCats as $hc)
                            <a class="dropdown-item" href="/contents/{{$hc->name}}/{{$hc->cat_rid}}/{{$hc->type}}">
                                {{$hc->name}}
                            </a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Messeges
                        </a>
                        <div class="dropdown-menu border-0 bg-dark" aria-labelledby="navbarDropdown">
                            @foreach ($messages as $m)
                            <a class="dropdown-item" href="/message/{{$m->author}}/{{$m->mnr_rid}}/{{$m->type}}">
                                {{$m->title}}
                            </a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Principals Note
                        </a>
                        <div class="dropdown-menu border-0 bg-dark" aria-labelledby="navbarDropdown">
                            @foreach ($pNote as $pn)
                            <a class="dropdown-item"
                                href="/principals-note/{{$pn->author}}/{{$pn->mnr_rid}}/{{$pn->type}}">
                                {{$pn->title}}
                            </a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Editors Note
                        </a>
                        <div class="dropdown-menu border-0 bg-dark" aria-labelledby="navbarDropdown">
                            @foreach ($eNote as $en)
                            <a class="dropdown-item"
                                href="/editors-note/{{$en->author}}/{{$en->mnr_rid}}/{{$en->type}}">
                                {{$en->title}}
                            </a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{request()->is('gallery/*') ? 'active' : '' }}" href="#"
                            id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Gallery
                        </a>
                        <div class="dropdown-menu border-0 bg-primary" aria-labelledby="navbarDropdown">
                            @foreach ($headerGal as $hg)
                            <a class="dropdown-item" href="/gallery/{{$hg->dd_value}}/{{$hg->dd_index}}">
                                {{$hg->dd_value}}
                            </a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{request()->is('reports/*') ? 'active' : '' }}" href="#"
                            id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Reports
                        </a>
                        <div class="dropdown-menu border-0 bg-dark" aria-labelledby="navbarDropdown">
                            @foreach ($reports as $hr)
                            <a class="dropdown-item" href="/reports/{{$hr->title}}/{{$hr->mnr_rid}}">
                                {{$hr->title}}
                            </a>
                            @endforeach
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>