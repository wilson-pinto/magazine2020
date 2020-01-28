@extends('client.layouts.app')

@section('content')
<div class="row mx-0 banners justify-content-center banner-cont">
    <div class="col-md-3 d-flex justify-content-start align-items-center">
        <img src="img/svg/script.svg" class="" alt="">
    </div>
    <div class="col-md-3 d-flex flex-column justify-content-center">
        <h1 class="pb-1 text-uppercase text-white">Story</h1>
    </div>
</div>
<div class="row mx-0 justify-content-center">
    <div class="col-md-10 shadow-lg py-5 wrapper-cont">
        <div class="row mx-0">
            <div class="col-md-1"></div>
            <div class="col-md-7">
                <h2 class="pl-3 text-center color-primary">Lorem ipsum dolor sit amet.</h2>
                <p class="mt-4 pl-3">
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Excepturi fugiat nesciunt beatae,
                    error
                    asperiores explicabo sed et quo tempore eos, molestiae dolores pariatur consequatur quod nihil
                    deleniti veritatis quasi corporis reprehenderit, eveniet id obcaecati vel. Nostrum itaque porro
                    provident autem, eos fuga incidunt qui reiciendis repudiandae quisquam natus. Eveniet, delectus.

                    <br> <br>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Excepturi fugiat nesciunt beatae,
                    error
                    asperiores explicabo sed et quo tempore eos, molestiae dolores pariatur consequatur quod nihil
                    deleniti veritatis quasi corporis reprehenderit, eveniet id obcaecati vel. Nostrum itaque porro
                    provident autem, eos fuga incidunt qui reiciendis repudiandae quisquam natus. Eveniet, delectus.
                    <br> <br>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Excepturi fugiat nesciunt beatae,
                    error
                    asperiores explicabo sed et quo tempore eos, molestiae dolores pariatur consequatur quod nihil
                    deleniti veritatis quasi corporis reprehenderit, eveniet id obcaecati vel. Nostrum itaque porro
                    provident autem, eos fuga incidunt qui reiciendis repudiandae quisquam natus. Eveniet, delectus.
                </p>
                <hr class="border-btm mt-5">
                <div class="d-flex align-items-center">
                    <img src="/img/college-bg.jpg" class="profile ml-2" alt="">
                    <div class="pl-3">
                        <h5 class="mb-0 pb-0">Wilson Pinto</h5>
                        <p class="pt-0 mb-0 font-sm">Computer Science & Engg</p>
                    </div>
                </div>
                <hr class="border-btm">
            </div>
            <div class="col-md-1"></div>
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