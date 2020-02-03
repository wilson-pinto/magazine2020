@extends('client.layouts.app')

@section('content')
<div class="row mx-0 banners justify-content-center banner-cont">
    <div class="d-flex flex-column justify-content-center">
        <h1 class="pb-1 text-uppercase text-white">{{$currentGalType->dd_value}}</h1>
    </div>
</div>
<div class="row mx-0 justify-content-center cont-out mb-5">
    <div class="col-md-8 pr-md-5">
        <div class="row bg-white shadow-lg mx-0 px-3 py-5">
            <div class="col px-3">
                @if(count($gallery)<1) <p>No Results</p>
                    @else
                    @if ($currentGalType->dd_index == 1)
                    @foreach ($gallery as $g)
                    <div class="my-shadow">
                        <div class="embed-responsive embed-responsive-21by9">
                            <iframe class="embed-responsive-item" src="{{$g['url']}}"></iframe>
                        </div>
                        <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase">
                            {{$g['desc']}}
                        </p>
                    </div>
                    @endforeach
                    @else
                    <div class="img-grid-row">
                        @php
                        $counts = count($gallery)/3;
                        $counts = $counts < 2 ? 1 : $counts ; @endphp @foreach(array_chunk($gallery, round($counts)) as
                            $chunk) <div class="img-grid-column">
                            @foreach($chunk as $g)
                            <div class="grid-img-wrapper">
                                <img src="{{'/img/gallery/'.$g['url']}}" style="width:100%">
                                <p class="py-3 mt-0 font-alata text-center font-sm text-uppercase border-top">
                                    {{$g['desc']}}
                                </p>
                            </div>
                            @endforeach
                    </div>
                    @endforeach

            </div>
            @endif
            @endif
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="row bg-white shadow-lg mx-0 px-3 py-5">
        <div class="col">
            <h3 class="mb-4 text-uppercase head-border pb-3">Categories</h3>
            <ul class="cats ml-0 pl-0 list-unstyled">
                @foreach ($galCats as $cat)
                <li class="mt-1">
                    <a href="/gallery/{{$cat->dd_value}}/{{$cat->dd_index}}"
                        class="mb-0 mt-2 pb-3 font-alata ml-1 color-secondary text-decoration-none {{$cat->dd_index == $currentGalType->dd_index ? 'active': ''}} ">
                        {{$cat->dd_value}} <br>
                    </a>
                </li>
                @endforeach
            </ul>
            <hr class="border-btm mt-5">
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