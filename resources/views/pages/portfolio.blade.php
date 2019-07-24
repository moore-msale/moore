@extends('layouts.app')
@section('content')
    <img class="w-100" style="position: absolute; z-index: -1" src="{{ asset('storage/portfolios/'.$portfolio->main_bg) }}" alt="">
    <div class="container-fluid">
        <div class="row justify-content-center" style="padding-top:13%;">
            <img data-aos="flip-down" src="{{ asset('storage/portfolios/'.$portfolio->logo) }}" alt="">

            <img data-aos="fade-up" style="padding-top:7%;" src="{{ asset('storage/portfolios/'.$portfolio->first_image) }}" alt="">
        </div>
        
    </div>
    <div class="container-fluid" style="padding-top:10%;">
            <img data-aos="fade-up" style="position: absolute; left:50%;" src="{{ asset('images/portfolio-line.png') }}" alt="">
        <div class="col-6">
            <img data-aos="fade-up" src="{{ asset('storage/portfolios/'.$portfolio->second_image) }}" alt="">
        </div>
        <div class="row justify-content-center">
            <div data-aos="fade-up" class="col-6 text-center" style="background-image: url({{ asset('images/about.png') }}); background-size: cover;">
            <h2 class="sf-medium my-5 py-3" style="font-size: 35px; line-height: 110%;">
                {{$portfolio->name}}
            </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-4">
        <p data-aos="fade-up" class="text-center sf-medium pt-5" style="font-size: 16px; line-height: 140%;">
            {{$portfolio->about_text}}
        </p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center" style="padding-top:10%;">
            <img data-aos="fade-up" src="{{ asset('storage/portfolios/'.$portfolio->main_screen_image) }}" alt="">
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <img data-aos="fade-up" src="{{ asset('images/portfolio-line.png') }}" alt="">
        </div>
    </div>

    <div class="container-fluid" style="padding-top:5%;">
        <div class="row justify-content-center">
            <div data-aos="fade-up" class="col-6 text-center" style="background-image: url({{ asset('images/process.png') }}); background-size: 100% 100%;">
                <h2 class="sf-medium my-4 py-4" style="font-size: 35px; line-height: 110%;">
                    Process of creation
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6">
        <p data-aos="fade-up" class="text-center sf-medium pt-5" style="font-size: 16px; line-height: 140%;">
            {{$portfolio->process_text}}
        </p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6 pl-0">
                <img data-aos="fade-up" src="{{ asset('storage/portfolios/'.$portfolio->second_screen_image) }}" alt="">
            </div>
            <div class="col-6 pr-0">
                <img data-aos="fade-up" class="w-100" src="{{ asset('storage/portfolios/'.$portfolio->third_screen_image) }}" alt="">
                <img data-aos="fade-up" src="{{ asset('storage/portfolios/'.$portfolio->passive_image) }}" alt="">
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <img data-aos="fade-up" src="{{ asset('images/portfolio-line.png') }}" alt="">
        </div>
    </div>

    <div class="container-fluid" style="padding-top:5%;">
        <div class="row justify-content-center">
            <div data-aos="fade-up" class="col-10 text-center" style="background-image: url({{ asset('images/typography.png') }}); background-size: 100% 100%;">
                <h2 class="sf-medium my-4 py-4" style="font-size: 35px; line-height: 110%;">
                    Typography
                </h2>
            </div>

            <img data-aos="fade-up" class="pt-5 mt-4" src="{{ asset('storage/portfolios/'.$portfolio->typography_image) }}" alt="">
        </div>
    </div>

    <div class="container-fluid" style="padding-top: 5%;">
        <div class="row justify-content-center">
            <img data-aos="fade-up" src="{{ asset('images/portfolio-line.png') }}" alt="">
        </div>
    </div>

    <div class="container-fluid" style="padding-top:5%;">
        <div class="row justify-content-center">
            <div data-aos="fade-up" class="col-6 text-center" style="background-image: url({{ asset('images/colors.png') }}); background-size: 100% 100%;">
                <h2 class="sf-medium my-4 py-4" style="font-size: 35px; line-height: 110%;">
                    Colors
                </h2>
            </div>
        </div>

        <div class="row justify-content-center" style="padding-top: 5%;">
            <div class="col-2">
                <div data-aos="fade-up" class="shadow mx-auto" style="border-radius: 50%; background-color: {{$portfolio->first_color }}; width: 204px; height:204px; display: flex; align-items: center; text-align: center;">
                    <p class="mx-auto sf-bold" style="color: {{$portfolio->first_color }}; filter: invert(100%) ; font-size: 20px; line-height: 23px; text-transform: uppercase;">
                        {{$portfolio->first_color }}
                    </p>
                </div>
            </div>
            <div class="col-3">
                <div data-aos="fade-up" class="shadow mx-auto" style="border-radius: 50%; background-color: {{$portfolio->second_color }}; width: 245px; height:245px; display: flex; align-items: center; text-align: center;">
                    <p class="mx-auto sf-bold" style="color: {{$portfolio->second_color }}; filter: invert(100%) ; font-size: 20px; line-height: 23px; text-transform: uppercase;">
                        {{$portfolio->second_color }}
                    </p>
                </div>
            </div>
            <div class="col-2">
                <div data-aos="fade-up" class="shadow mx-auto" style="border-radius: 50%; background-color: {{$portfolio->third_color }}; width: 204px; height:204px; display: flex; align-items: center; text-align: center;">
                    <p class="mx-auto sf-bold" style="color: {{$portfolio->third_color }}; filter: invert(100%) ; font-size: 20px; line-height: 23px; text-transform: uppercase;">
                        {{$portfolio->third_color }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="padding-top: 5%;">
        <div class="row justify-content-center">
            <img data-aos="fade-up" src="{{ asset('images/portfolio-line.png') }}" alt="">
        </div>
    </div>

    <div class="container-fluid" style="padding-top: 5%;">
        <div class="row justify-content-center">
            <h2 data-aos="fade-up" class="sf-medium my-4 py-4" style="font-size: 35px; line-height: 110%;">
                Fully responsive
            </h2>
            <img src="{{ asset('storage/portfolios/'.$portfolio->mobile_screen_image) }}" alt="">
        </div>
    </div>

    <div class="container-fluid pb-5 pt-5">
        <div class="row justify-content-center">
            <img data-aos="fade-up" src="{{ asset('images/portfolio-line.png') }}" alt="">
        </div>
        <div class="row justify-content-center pt-5">
            <img data-aos="fade-up" src="{{ asset('images/like.png') }}" alt="">
        </div>
        <h2 data-aos="fade-up" class="sf-medium my-4 py-4 text-center" style="font-size: 35px; line-height: 110%;">
            THANKS FOR WATCHING
        </h2>
        <a class="text-center" href="/" style="font-size: 20px; line-height: 140%; color:black;">
            <p data-aos="fade-up">
            https://to-moore.com
            </p>
        </a>
    </div>
    
@endsection