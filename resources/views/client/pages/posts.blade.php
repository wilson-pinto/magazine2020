@extends('client.layouts.app')

@section('content')
<div class="row mx-0 banners justify-content-center banner-cont">
    <div class="col-md-3 d-flex justify-content-start align-items-center">
        <img src="/img/svg/{{$currentCat->img_url}}" class="" alt="">
    </div>
    <div class="col-md-3 d-flex flex-column justify-content-center">
        <h1 class="pb-1 text-uppercase text-white">
            {{$currentCat->name}}
        </h1>
    </div>
</div>
<div class="row mx-0 justify-content-center cont-out mb-5">
    <div class="col-md-8 pr-md-5">
        <div class="row bg-white shadow-lg mx-0 px-3 py-5">
            <div class="col">
                <div class="img-grid-row">
                    @if(count($posts)<1) <p>No Results</p>
                        @else
                        @php
                        $counts = count($posts)/3;
                        $counts = $counts < 2 ? 1 : $counts; @endphp @foreach(array_chunk($posts, round($counts)) as
                            $chunk) <div class="img-grid-column">
                            @foreach($chunk as $p)
                            <div class="grid-img-wrapper position-relative">
                                <img src="{{$p['cat_rid'] == 2 ? '/img/photographs/'.$p['img_url'] : '/img/drawings/'.$p['img_url']}}"
                                    style="width:100%">
                                <h5 class="mb-0 pb-0 pt-1">{{$p['author']['name']}}</h5>
                                <p class="pt-0 mt-0 font-sm">{{$p['author']['branch']['name']}}</p>
                                <img src="{{$p['author']['profile_img'] == null ? '/img/no-img.png' : '/img/author/'.$p['author']['profile_img']}}"
                                    alt="" class="profile position-absolute">
                            </div>
                            @endforeach
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="row bg-white shadow-lg mx-0 px-3 py-5">
        <div class="col">
            @include('client.includes.categories')
            <h3 class="mb-3 mt-5 text-uppercase head-border pb-2">Review</h3>
            <p class="col--md-10 ml-2 font-alata">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse obcaecati nisi cumque inventore.
            </p>
            <a href="/review" class="wp-btn-primary color-secondary text-decoration-none ml-2">Review</a>
            <hr class="border-btm mt-5">
        </div>
    </div>
</div>
</div>

@endsection

@section('scripts')

{{-- <script src="{{asset('js/admin/validation.js')}}"></script> --}}

@endsection