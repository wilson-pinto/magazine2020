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
    <div class="col-md-8 pr-5">
        <div class="row bg-white shadow-lg mx-0 px-3 py-5">
            <div class="col">
                <h2 class="pl-3 text-center color-primary">{{$article->title}}</h2>
                <div class="article-wys-wyg mt-5 px-5">
                    {!! $article->body !!}
                </div>
                <hr class="border-btm mt-5">
                <div class="d-flex align-items-center">
                    <img src="{{$article->author->profile_img == null ? '/img/no-img.png' : '/img/author/'.$article->author->profile_img}}"
                        class="profile ml-2" alt="">
                    <div class="pl-3">
                        <h5 class="mb-0 pb-0">{{$article->author->name}}</h5>
                        <p class="pt-0 mb-0 font-sm">{{$article->author->branch->name}}</p>
                    </div>
                </div>
                <hr class="border-btm">
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