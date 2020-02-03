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
                <div class="row mx-0 px-4">
                    @if(count($articles)<1) <p>No Results</p>
                        @else
                        @foreach ($articles as $article)
                        <a href="/article/{{$currentCat->name}}/{{$article->article_rid}}"
                            class="col-12 d-flex align-items-center my-shadow mb-3 py-2 text-decoration-none">
                            <img src="{{$article->author->profile_img == null ? '/img/no-img.png' : '/img/author/'.$article->author->profile_img}}"
                                class="profile ml-2" alt="">
                            <div class="d-flex flex-column justify-content-center pl-3 text-dark">
                                <h4 class="mb-0">{{$article->title}}</h4>
                                <p class="mb-0">
                                    <span class="font-weight-bold">{{$article->author->name}}</span>
                                    - <span class="font-sm">{{$article->author->branch->name}}</span>
                                </p>
                            </div>
                        </a>
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