@extends('client.layouts.app')

@section('content')
{{-- <div class="row banner-main mx-0 d-flex align-items-center justify-content-center">
    <h1 class="text-capitalize text-center font-weight-bold">Karnataka (govt.) polytecnic, <br> mangaluru</h1>
</div> --}}
<div class="row justify-content-center mx-0 w-100" id="abhivyakta">
    <div id="caroHome" class="carousel slide w-100" data-ride="carousel">
        <ol class="carousel-indicators">
            @php
            $count =0;
            $isFirst = true;
            @endphp
            @foreach ($categories as $category)
            <li data-target="#caroHome" data-slide-to="{{$count}}" class="{{$count == 0 ? 'active': ''}}"></li>
            @php
            $count++;
            @endphp
            @endforeach
        </ol>
        <div class="carousel-inner w-100">
            @foreach ($categories as $cat)
            <div class="carousel-item caro-home {{$isFirst ? 'active': ''}}">
                <div class="row justify-content-center banners h-100">
                    <div class="col-md-3 d-flex justify-content-center align-items-center">
                        <img src="/img/svg/{{$cat->img_url}}" class="" alt="">
                    </div>
                    <div class="col-md-5 d-flex flex-column justify-content-center">
                        <h1 class="pb-1 text-uppercase">
                            {{$cat->name}}
                        </h1>
                        <p class="pt-3">
                            {{$cat->text}}
                        </p>
                        <a href="/contents/{{$cat->name}}/{{$cat->cat_rid}}/{{$cat->type}}"
                            class="wp-btn-primary color-secondary text-decoration-none">
                            View
                        </a>
                    </div>
                </div>
            </div>
            @php
            $isFirst =false;
            @endphp
            @endforeach
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
    <h1 class="text-uppercase font-weight-bold text-white">About</h1>
</div>
<div class="row mx-0 banners banners-invert justify-content-center flex-row-reverse">
    <div class="col-md-3 d-flex justify-content-end align-items-center">
        <img src="img/svg/school-new.svg" class="" alt="">
    </div>
    <div class="col-md-5 d-flex flex-column justify-content-center">
        <h1 class="pb-1 text-uppercase">Our College</h1>
        <p class="pt-3 pl-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe autem, eos porro ipsum
            voluptatem velit commodi expedita, dolor quas iure obcaecati nobis amet non iusto totam
            esse recusandae. Reiciendis, doloremque.
        </p>
    </div>
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
        <img src="img/svg/team.svg" class="" alt="">
    </div>
    <div class="col-md-5 d-flex flex-column justify-content-center">
        <h1 class="pb-1 text-uppercase">Committee</h1>
        <p class="pt-3 pl-1">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe autem, eos porro ipsum
            voluptatem velit commodi expedita, dolor quas iure obcaecati nobis amet non iusto totam
            esse recusandae. Reiciendis, doloremque.
        </p>
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

@endsection

@section('scripts')

{{-- <script src="{{asset('js/admin/validation.js')}}"></script> --}}

@endsection