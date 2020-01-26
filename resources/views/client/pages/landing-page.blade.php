@extends('client.layouts.app')

@section('content')
{{-- <div class="row banner-main mx-0 d-flex align-items-center justify-content-center">
    <h1 class="text-capitalize text-center font-weight-bold">Karnataka (govt.) polytecnic, <br> mangaluru</h1>
</div> --}}
<div class="row justify-content-center mx-0 w-100">
    <div id="caroHome" class="carousel slide w-100" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#caroHome" data-slide-to="0" class="active"></li>
            <li data-target="#caroHome" data-slide-to="1"></li>
            <li data-target="#caroHome" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner w-100">
            <div class="carousel-item caro-home active">
                <div class="row justify-content-center banners h-100">
                    <div class="col-md-3 d-flex justify-content-center align-items-center">
                        <img src="img/svg/tools.svg" class="" alt="">
                    </div>
                    <div class="col-md-5 d-flex flex-column justify-content-center">
                        <h1 class="pb-1 text-uppercase">Drawings</h1>
                        <p class="pt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe autem, eos porro ipsum
                            voluptatem velit commodi expedita, dolor quas iure obcaecati nobis amet non iusto totam
                            esse recusandae. Reiciendis, doloremque.
                        </p>
                        <button class="wp-btn-primary">Read More</button>
                    </div>
                </div>
            </div>
            <div class="carousel-item caro-home">
                <div class="row justify-content-center banners h-100">
                    <div class="col-md-3 d-flex justify-content-center align-items-center">
                        <img src="img/svg/photography.svg" class="" alt="">
                    </div>
                    <div class="col-md-5 d-flex flex-column justify-content-center">
                        <h1 class="pb-1 text-uppercase">Photographs</h1>
                        <p class="pt-3">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe autem, eos porro ipsum
                            voluptatem velit commodi expedita, dolor quas iure obcaecati nobis amet non iusto totam
                            esse recusandae. Reiciendis, doloremque.
                        </p>
                        <button class="wp-btn-primary">Read More</button>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#caroHome" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#caroHome" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="row mx-0 banner-sm d-flex justify-content-center align-items-center">
    <h1 class="text-uppercase font-weight-bold text-white">Vision & Mision</h1>
</div>
<div class="row mx-0 banners justify-content-center bw-svg">
    <div class="col-md-3 d-flex justify-content-start align-items-center">
        <img src="img/svg/vision.svg" class="" alt="">
    </div>
    <div class="col-md-5 d-flex flex-column justify-content-center">
        <h1 class="pb-1 text-uppercase">Vision</h1>
        <p class="pt-3 pl-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe autem, eos porro ipsum
            voluptatem velit commodi expedita, dolor quas iure obcaecati nobis amet non iusto totam
            esse recusandae. Reiciendis, doloremque.
        </p>
    </div>
</div>
<div class="row mx-0 banners banners-invert justify-content-center flex-row-reverse">
    <div class="col-md-3 d-flex justify-content-end align-items-center">
        <img src="img/svg/mision.svg" class="" alt="">
    </div>
    <div class="col-md-5 d-flex flex-column justify-content-center">
        <h1 class="pb-1 text-uppercase">Mision</h1>
        <p class="pt-3 pl-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe autem, eos porro ipsum
            voluptatem velit commodi expedita, dolor quas iure obcaecati nobis amet non iusto totam
            esse recusandae. Reiciendis, doloremque.
        </p>
    </div>
</div>
<div class="row mx-0 banner-sm d-flex justify-content-center align-items-center">
    <h1 class="text-uppercase font-weight-bold text-white">About</h1>
</div>
<div class="row mx-0 banners justify-content-center">
    <div class="col-md-3 d-flex justify-content-start align-items-center">
        <img src="img/svg/history.svg" class="" alt="">
    </div>
    <div class="col-md-5 d-flex flex-column justify-content-center">
        <h1 class="pb-1 text-uppercase">History</h1>
        <p class="pt-3 pl-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe autem, eos porro ipsum
            voluptatem velit commodi expedita, dolor quas iure obcaecati nobis amet non iusto totam
            esse recusandae. Reiciendis, doloremque.
        </p>
    </div>
</div>
<div class="row mx-0 banners banners-invert justify-content-center flex-row-reverse">
    <div class="col-md-3 d-flex justify-content-end align-items-center">
        <img src="img/svg/mision.svg" class="" alt="">
    </div>
    <div class="col-md-5 d-flex flex-column justify-content-center">
        <h1 class="pb-1 text-uppercase">Commity</h1>
        <p class="pt-3 pl-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe autem, eos porro ipsum
            voluptatem velit commodi expedita, dolor quas iure obcaecati nobis amet non iusto totam
            esse recusandae. Reiciendis, doloremque.
        </p>
    </div>
</div>
@endsection

@section('scripts')

{{-- <script src="{{asset('js/admin/validation.js')}}"></script> --}}

@endsection