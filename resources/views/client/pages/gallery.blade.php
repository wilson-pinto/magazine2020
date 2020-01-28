@extends('client.layouts.app')

@section('content')
<div class="row mx-0 banners justify-content-center banner-cont">
    <div class="d-flex flex-column justify-content-center">
        <h1 class="pb-1 text-uppercase text-white">Events</h1>
    </div>
</div>
<div class="row mx-0 justify-content-center">
    <div class="col-md-10 shadow-lg py-5 wrapper-cont">
        <div class="img-grid-row pl-4 pr-0">
            <div class="img-grid-column">
                <div class="grid-img-wrapper">
                    <img src="https://www.w3schools.com/w3images/wedding.jpg" style="width:100%">
                    <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase">Lorem ipsum dolor sit.</p>
                </div>
                <div class="grid-img-wrapper position-relative">
                    <img src="https://www.w3schools.com/w3images/rocks.jpg" style="width:100%">
                    <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase">Lorem ipsum dolor sit.</p>
                </div>
                <div class="grid-img-wrapper position-relative">
                    <img src="https://www.w3schools.com/w3images/paris.jpg" style="width:100%">
                    <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase">Lorem ipsum dolor sit.</p>
                </div>
            </div>
            <div class="img-grid-column">
                <div class="grid-img-wrapper position-relative">
                    <img src="https://www.w3schools.com/w3images/rocks.jpg" style="width:100%">
                    <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase">Lorem ipsum dolor sit.</p>
                </div>
                <div class="grid-img-wrapper position-relative">
                    <img src="https://www.w3schools.com/w3images/mist.jpg" style="width:100%">
                    <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase">Lorem ipsum dolor sit.</p>
                </div>
                <div class="grid-img-wrapper position-relative">
                    <img src="https://www.w3schools.com/w3images/paris.jpg" style="width:100%">
                    <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase">Lorem ipsum dolor sit.</p>
                </div>
            </div>
            <div class="img-grid-column">
                <div class="grid-img-wrapper position-relative">
                    <img src="https://www.w3schools.com/w3images/wedding.jpg" style="width:100%">
                    <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase">Lorem ipsum dolor sit.</p>
                </div>
                <div class="grid-img-wrapper position-relative">
                    <img src="https://www.w3schools.com/w3images/rocks.jpg" style="width:100%">
                    <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase">Lorem ipsum dolor sit.</p>
                </div>
                <div class="grid-img-wrapper position-relative">
                    <img src="https://www.w3schools.com/w3images/paris.jpg" style="width:100%">
                    <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase">Lorem ipsum dolor sit.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

{{-- <script src="{{asset('js/admin/validation.js')}}"></script> --}}

@endsection