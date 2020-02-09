@extends('client.layouts.app')

@section('content')
<div class="row mx-0 banners justify-content-center banner-cont">
    <div class="d-flex flex-column justify-content-center">
        <h1 class="pb-1 text-uppercase text-white">Reports</h1>
    </div>
</div>
<div class="row mx-0 justify-content-center cont-out mb-5">
    <div class="col-md-8 pr-5">
        <div class="row bg-white shadow-lg mx-0 px-3 py-5">
            <div class="col px-4">
                <h2 class="pl-2 pb-2 color-primary">{{$report->title}}</h2>
                <div class="d-flex align-items-center">
                    {{-- <img src="/img/college-bg.jpg" class="profile profile-sm ml-2" alt=""> --}}
                    <div class="pl-3">
                        <h5 class="mb-0 pb-0">{{$report->author}}</h5>
                        <div class="pt-1 mb-0 font-sm bio">
                            {!! $report->bio !!}
                        </div>
                    </div>
                </div>
                <div class="article-wys-wyg mt-3 px-3">
                    {!! $report->body !!}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="row bg-white shadow-lg mx-0 px-3 py-5">
            <div class="col">
                <h3 class="mb-4 text-uppercase head-border pb-3">Reports</h3>
                <ul class="cats ml-0 pl-0 list-unstyled">
                    @foreach ($reports as $hr)
                    <li class="mt-1">
                        <a href="/reports/{{$hr->title}}/{{$hr->mnr_rid}}" class="mb-0 mt-2 pb-3 font-alata ml-1 color-secondary text-decoration-none
                    {{$hr->mnr_rid == $report->mnr_rid ? 'active': ''}} ">
                            {{$hr->title}}<br>
                        </a>
                    </li>
                    @endforeach
                </ul>
                <hr class="border-btm mt-5">
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