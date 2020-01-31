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
                <h2 class="pl-2 pb-2 color-primary">Lorem ipsum dolor sit amet.</h2>
                <div class="d-flex align-items-center">
                    <img src="/img/college-bg.jpg" class="profile profile-sm ml-2" alt="">
                    <div class="pl-3">
                        <h5 class="mb-0 pb-0">Wilson Pinto</h5>
                        <p class="pt-0 mb-0 font-sm">HOD, Computer Science & Engg</p>
                    </div>
                </div>
                <p class="mt-4 pl-3 text-justify">
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
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="row bg-white shadow-lg mx-0 px-3 py-5">
            <div class="col">
                <h3 class="mb-4 text-uppercase head-border pb-2">Reports</h3>
                <p class="mb-0 mt-1 pb-2 font-alata ml-2">Lorem, ipsum. </p>
                <p class="mb-0 mt-1 pb-2 font-alata ml-2">Lorem, ipsum. </p>
                <p class="mb-0 mt-1 pb-2 font-alata ml-2">Lorem, ipsum. </p>
                <p class="mb-0 mt-1 pb-2 font-alata ml-2">Lorem, ipsum. </p>
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