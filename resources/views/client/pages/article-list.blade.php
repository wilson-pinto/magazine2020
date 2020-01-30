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
<div class="row mx-0 justify-content-center">
    <div class="col-md-10 shadow-lg py-5 wrapper-cont">
        <div class="row mx-0">
            <div class="col-md-9">
                <div class="row mx-0 pl-4">
                    <a href="/article"
                        class="col-half d-flex align-items-center my-shadow mr-4 mb-3 py-2 text-decoration-none">
                        <img src="/img/college-bg.jpg" class="profile ml-2" alt="">
                        <div class="d-flex flex-column justify-content-center pl-3 text-dark">
                            <h4 class="mb-0">Lorem ipsum dolor sit amet.</h4>
                            <p class="mb-0">
                                <span class="font-weight-bold">Wilson Pinto</span>
                                - <span class="font-sm">Computer Science & Engg</span>
                            </p>
                        </div>
                    </a>
                    <a href="/article"
                        class="col-half d-flex align-items-center my-shadow mr-4 mb-3 py-2 text-decoration-none">
                        <img src="/img/college-bg.jpg" class="profile ml-2" alt="">
                        <div class="d-flex flex-column justify-content-center pl-3 text-dark">
                            <h4 class="mb-0">Lorem ipsum dolor sit amet.</h4>
                            <p class="mb-0">
                                <span class="font-weight-bold">Wilson Pinto</span>
                                - <span class="font-sm">Computer Science & Engg</span>
                            </p>
                        </div>
                    </a>
                    <a href="/article"
                        class="col-half d-flex align-items-center my-shadow mr-4 mb-3 py-2 text-decoration-none">
                        <img src="/img/college-bg.jpg" class="profile ml-2" alt="">
                        <div class="d-flex flex-column justify-content-center pl-3 text-dark">
                            <h4 class="mb-0">Lorem ipsum dolor sit amet.</h4>
                            <p class="mb-0">
                                <span class="font-weight-bold">Wilson Pinto</span>
                                - <span class="font-sm">Computer Science & Engg</span>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
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