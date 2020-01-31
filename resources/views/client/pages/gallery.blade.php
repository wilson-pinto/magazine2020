@extends('client.layouts.app')

@section('content')
<div class="row mx-0 banners justify-content-center banner-cont">
    <div class="d-flex flex-column justify-content-center">
        <h1 class="pb-1 text-uppercase text-white">Events</h1>
    </div>
</div>
<div class="row mx-0 justify-content-center cont-out mb-5">
    <div class="col-md-8 pr-5">
        <div class="row bg-white shadow-lg mx-0 px-3 py-5">
            <div class="col">
                <div class="img-grid-row pl-4 pr-0">
                    <div class="img-grid-column">
                        <div class="grid-img-wrapper">
                            <img src="https://www.w3schools.com/w3images/wedding.jpg" style="width:100%">
                            <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase">Lorem ipsum dolor sit.
                            </p>
                        </div>
                        <div class="grid-img-wrapper position-relative">
                            <img src="https://www.w3schools.com/w3images/rocks.jpg" style="width:100%">
                            <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase">Lorem ipsum dolor sit.
                            </p>
                        </div>
                        <div class="grid-img-wrapper position-relative">
                            <img src="https://www.w3schools.com/w3images/paris.jpg" style="width:100%">
                            <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase">Lorem ipsum dolor sit.
                            </p>
                        </div>
                    </div>
                    <div class="img-grid-column">
                        <div class="grid-img-wrapper position-relative">
                            <img src="https://www.w3schools.com/w3images/rocks.jpg" style="width:100%">
                            <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase">Lorem ipsum dolor sit.
                            </p>
                        </div>
                        <div class="grid-img-wrapper position-relative">
                            <img src="https://www.w3schools.com/w3images/mist.jpg" style="width:100%">
                            <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase">Lorem ipsum dolor sit.
                            </p>
                        </div>
                        <div class="grid-img-wrapper position-relative">
                            <img src="https://www.w3schools.com/w3images/paris.jpg" style="width:100%">
                            <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase">Lorem ipsum dolor sit.
                            </p>
                        </div>
                    </div>
                    <div class="img-grid-column">
                        <div class="grid-img-wrapper position-relative">
                            <img src="https://www.w3schools.com/w3images/wedding.jpg" style="width:100%">
                            <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase">Lorem ipsum dolor sit.
                            </p>
                        </div>
                        <div class="grid-img-wrapper position-relative">
                            <img src="https://www.w3schools.com/w3images/rocks.jpg" style="width:100%">
                            <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase">Lorem ipsum dolor sit.
                            </p>
                        </div>
                        <div class="grid-img-wrapper position-relative">
                            <img src="https://www.w3schools.com/w3images/paris.jpg" style="width:100%">
                            <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase">Lorem ipsum dolor sit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="row bg-white shadow-lg mx-0 px-3 py-5">
            <div class="col">
                {{-- @include('client.includes.categories') --}}
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