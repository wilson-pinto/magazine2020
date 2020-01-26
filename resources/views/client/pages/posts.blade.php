@extends('client.layouts.app')

@section('content')
<div class="row mx-0 banners justify-content-center banner-cont">
    <div class="col-md-3 d-flex justify-content-start align-items-center">
        <img src="img/svg/tools.svg" class="" alt="">
    </div>
    <div class="col-md-3 d-flex flex-column justify-content-center">
        <h1 class="pb-1 text-uppercase text-white">Drawings</h1>
    </div>
</div>
<div class="row mx-0 justify-content-center">
    <div class="col-md-10 shadow-lg py-5 wrapper-cont">
        <div class="row mx-0">
            <div class="col-md-9">
                <div class="img-grid-row">
                    <div class="img-grid-column">
                        <div class="grid-img-wrapper position-relative">
                            <img src="https://www.w3schools.com/w3images/wedding.jpg" style="width:100%">
                            <h5 class="mb-0 pb-0 pt-1">Wilson Pinto</h5>
                            <p class="pt-0 mt-0">Computer Science & Engg</p>
                            <img src="/img/college-bg.jpg" alt="" class="profile position-absolute">
                        </div>
                        <div class="grid-img-wrapper position-relative">
                            <img src="https://www.w3schools.com/w3images/rocks.jpg" style="width:100%">
                            <h5 class="mb-0 pb-0 pt-1">Wilson Pinto</h5>
                            <p class="pt-0 mt-0">Computer Science & Engg</p>
                            <img src="/img/no-img.png" alt="" class="profile position-absolute">
                        </div>
                        <div class="grid-img-wrapper position-relative">
                            <img src="https://www.w3schools.com/w3images/paris.jpg" style="width:100%">
                            <h5 class="mb-0 pb-0 pt-1">Wilson Pinto</h5>
                            <p class="pt-0 mt-0">Computer Science & Engg</p>
                            <img src="/img/college-bg.jpg" alt="" class="profile position-absolute">
                        </div>
                    </div>
                    <div class="img-grid-column">
                        <div class="grid-img-wrapper position-relative">
                            <img src="https://www.w3schools.com/w3images/rocks.jpg" style="width:100%">
                            <h5 class="mb-0 pb-0 pt-1">Wilson Pinto</h5>
                            <p class="pt-0 mt-0">Computer Science & Engg</p>
                            <img src="/img/college-bg.jpg" alt="" class="profile position-absolute">
                        </div>
                        <div class="grid-img-wrapper position-relative">
                            <img src="https://www.w3schools.com/w3images/mist.jpg" style="width:100%">
                            <h5 class="mb-0 pb-0 pt-1">Wilson Pinto</h5>
                            <p class="pt-0 mt-0">Computer Science & Engg</p>
                            <img src="/img/college-bg.jpg" alt="" class="profile position-absolute">
                        </div>
                        <div class="grid-img-wrapper position-relative">
                            <img src="https://www.w3schools.com/w3images/paris.jpg" style="width:100%">
                            <h5 class="mb-0 pb-0 pt-1">Wilson Pinto</h5>
                            <p class="pt-0 mt-0">Computer Science & Engg</p>
                            <img src="/img/college-bg.jpg" alt="" class="profile position-absolute">
                        </div>
                    </div>
                    <div class="img-grid-column">
                        <div class="grid-img-wrapper position-relative">
                            <img src="https://www.w3schools.com/w3images/wedding.jpg" style="width:100%">
                            <h5 class="mb-0 pb-0 pt-1">Wilson Pinto</h5>
                            <p class="pt-0 mt-0">Computer Science & Engg</p>
                            <img src="/img/college-bg.jpg" alt="" class="profile position-absolute">
                        </div>
                        <div class="grid-img-wrapper position-relative">
                            <img src="https://www.w3schools.com/w3images/rocks.jpg" style="width:100%">
                            <h5 class="mb-0 pb-0 pt-1">Wilson Pinto</h5>
                            <p class="pt-0 mt-0">Computer Science & Engg</p>
                            <img src="/img/college-bg.jpg" alt="" class="profile position-absolute">
                        </div>
                        <div class="grid-img-wrapper position-relative">
                            <img src="https://www.w3schools.com/w3images/paris.jpg" style="width:100%">
                            <h5 class="mb-0 pb-0 pt-1">Wilson Pinto</h5>
                            <p class="pt-0 mt-0">Computer Science & Engg</p>
                            <img src="/img/college-bg.jpg" alt="" class="profile position-absolute">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <h3 class="mb-4 text-uppercase head-border pb-2">Categories</h3>
                <p class="mb-0 mt-1 pb-2 font-alata ml-2">Lorem, ipsum. (5)</p>
                <p class="mb-0 mt-1 pb-2 font-alata ml-2">Lorem, ipsum. (5)</p>
                <p class="mb-0 mt-1 pb-2 font-alata ml-2">Lorem, ipsum. (5)</p>
                <p class="mb-0 mt-1 pb-2 font-alata ml-2">Lorem, ipsum. (5)</p>
                <hr class="border-btm mt-5">

                <h3 class="mb-3 mt-5 text-uppercase head-border pb-2">Review</h3>
                <p class="col--md-10 ml-2">
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