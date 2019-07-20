@extends('layouts.app')
@section('content')
    @include('_partials.header')
        <div class="container-fluid">
            <div class="row justify-content-center first-block" style="height: 120vh;">
                <div class="col-1 d-md-block d-none" >
                    <div class="pl-5 left-sidebar" style="margin-top: 37vh;">
                        <a href="#" class="ics">
                        <p class="py-3 text-white opacity-5">
                            <i data-aos="fade-right" class="fab fa-behance fa-2x"></i>
                        </p>
                        </a>
                        <a href="#" class="ics">
                        <p class="py-3 text-white opacity-5">
                            <i data-aos="fade-right" class="fab fa-instagram fa-2x"></i>
                        </p>
                        </a>
                        <a href="#" class="ics">
                        <p class="py-3 text-white opacity-5">
                            <i data-aos="fade-right" class="fab fa-facebook-f fa-2x"></i>
                        </p>
                        </a>
                    </div>
                    <img style="position: absolute; bottom: 10%;" data-aos="fade-right" src="{{ asset('images/wedo.png') }}" alt="">
                </div>
                <div class="col-2"></div>
                <div class="col-md-6 col-12 text-center pt-md-0 pt-5">
                    <div class="h-100 main-trans d-lg-block d-none" style="width: 260px; position: absolute; box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.7); left:-14%; z-index: 10;">
                    </div>

                    <div class="h-100 mobile-trans d-lg-none d-block" style="width: 130px; position: absolute; box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.7); left:-14%; z-index: 0;">
                    </div>
                <p class="sf-light pl-lg-0 pl-md-0 pl-5 pr-lg-0 pr-md-0 pr-5 team-text in" data-aos="fade-up" style="color: #fefefe; padding-top: 35%; font-size: 15px; line-height: 130%; align-items: center; text-align: center; letter-spacing: 0.05em;">
                    Мы - команда небезразличных людей с горящими глазами и
                    <br>
                    сердцами, которые от всей души любят то, что делают!
                </p>
                <h1 class="sf-black main-text" data-aos="flip-down" style="background-image: url({{ asset('images/moorebg.png') }});color: #fefefe; font-size: 135px; line-height: 161px; text-align: center; letter-spacing: 0.05em; text-transform: uppercase;">
                    .MOORE
                </h1>
                    <img class="mx-auto w-75 d-md-block d-none" data-aos="flip-up" style="z-index: 0;" src="{{ asset('images/STUDIO.png') }}" alt="">
                        <div class="text-center btn-effect d-md-block d-none" data-aos="fade-up" style="position:absolute; top: 55%; left: 40%; line-height: 0; padding-top:5%; width: 176px; z-index: 999;">
                        <div class="mx-auto mb-2 btn-tp-border" style="border-top:1px #fefefe solid; width: 176px;"></div>
                        <br>
                    <a href="#" class="moore text-white sf-light" style="font-size: 15px; line-height: 18px; text-align: center; letter-spacing: 0.05em; text-decoration: none;">
                        Узнать больше
                    </a>
                        <br>
                        <div class="mx-auto mt-2 btn-bt-border" style="border-bottom:1px #fefefe solid; width: 128px;"></div>

                    </div>
                    <div class="text-center btn-effect d-md-none d-block mx-auto" data-aos="fade-up" style="line-height: 0; padding-top:5%;  z-index: 9999; width: 176px;">
                        <div class="mx-auto mb-2 btn-tp-border" style="border-top:1px #fefefe solid; width: 176px;"></div>
                        <br>
                        <a href="#" class="moore text-white sf-light" style="font-size: 15px; line-height: 18px; text-align: center; letter-spacing: 0.05em; text-decoration: none;">
                            Узнать больше
                        </a>
                        <br>
                        <div class="mx-auto mt-2 btn-bt-border" style="border-bottom:1px #fefefe solid; width: 128px;"></div>

                    </div>
                    <img class="d-md-block d-none" style="position: absolute; bottom:10%; left:40%;" src="{{ asset('images/Line.png') }}" alt="">
                </div>
                <div class="col-3 d-md-block d-none">
                    <div class="pr-4 right-sidebar vector-effect" data-aos="fade-up" style="position: absolute; top:50vh; right:-32px; transform: rotate(90deg); line-height: 2;">
                        <div class="vector-border" style="border-top: 1px solid #FFFFFF; width: 220px;"></div>
                        <span class="py-4 text-white sf-light vector-text" style="width:240px;font-size: 16px; letter-spacing: 0.2em;">
                            Листайте вниз
                        </span>
                    </div>
                    <a href="#">
                    <div class="text-center portfolio"  data-aos="fade-up" style="position: absolute; bottom: 4%; line-height: 0; letter-spacing: 0.2em; z-index: 999;">
                        <p class="sf-ligh text-white pb-3"  style="font-size: 14px;">
                            Смотреть
                        </p>
                        <img  src="{{ asset('images/portfolio.png') }}" alt="">
                        <p class="sf-ligh text-white pt-4" style="font-size: 14px;  line-height: 0; letter-spacing: 0.2em;">
                            Проекты
                        </p>
                    </div>
                    </a>
                </div>
                <div class="col-12 d-md-none d-block pb-3 pt-5 text-center portfolio" data-aos="fade-up">
                    <img src="{{ asset('images/portfolio.png') }}" alt="">
                </div>
            </div>
        </div>
    <div class="container-fluid p-5">

        <span class="font-weight-bold sf-black text-about" data-aos="fade-up" style="font-size: 64px; text-align: left; font-weight: 400; font-style: normal; letter-spacing: 1px; line-height: 100%; color: #191919;"><span class="responsive-h4">Мы занимаемся <span class="obvod">созданием</span>
                <br>сайтов и интерфейсов,<br>
<span class="obvod">брендингом</span>, придумываем <br> рекламу и развиваем <br> проекты в <span class="obvod">digital</span>.</span></span>

        <div class="row" style="padding-top:5%; padding-left:1%;">
            <div class="col-md-5 col-12 p-5" data-aos="fade-up" style="height: 473px; border: 5px #000000 solid;">
                <img class="" data-aos="fade-up" src="{{ asset('images/dots.png') }}" alt="">
                <img class="plus" data-aos="fade-up" style="position: absolute; top:5%; right: 5%;" src="{{ asset('images/+.png') }}" alt="">
                <p class="font-weight-light sf-light text-foter" data-aos="fade-up" style="position: absolute; bottom:5%; font-size: 50px; line-height: 100%; text-transform: lowercase;">
                    Сайты <br>
                    брендинг <br>
                    интерфейсы <br>
                    продвижение <br>
                </p>
            </div>
            <div class="col-md-7 col-12" style="padding-left:5%;">
                <div class="container-fluid">
                    <div class="row">
            <div class="col-lg-4 col-md-6 col-12" style="margin-top: 7%;">
                <p class="font-weight-bold sf-bold" data-aos="fade-up" style="font-size: 16px; line-height: 21px; letter-spacing: 0.1em; text-transform: uppercase;">
                    разрабатываем
                </p>
                <p class="sf-light" data-aos="fade-up" style="font-size: 14px; line-height: 170%; letter-spacing: 0.1em;">
                    Разработка сайтов <br>
                    SMM product <br>
                    Визуализации <br>
                    Стратегии продвижения <br>
                    Креативные концепции <br>
                    UX/UI дизайн <br>
                </p>
            </div>
            <div class="col-lg-4 col-md-6 col-12" style="margin-top: 7%;">
                <p class="font-weight-bold sf-bold" data-aos="fade-up" style="font-size: 16px; line-height: 21px; letter-spacing: 0.1em; text-transform: uppercase;">
                    знаем
                </p>
                <p class="sf-light" data-aos="fade-up" style="font-size: 14px; line-height: 170%; letter-spacing: 0.1em;">
                    Google ADS <br>
                    SMM <br>
                    Yandex Direct <br>
                    SEO <br>
                    Target ADS <br>
                </p>
            </div>
            <div class="col-lg-4 col-md-6 col-12" style="margin-top: 7%;">
                <p class="font-weight-bold sf-bold" data-aos="fade-up" style="font-size: 16px; line-height: 21px; letter-spacing: 0.1em; text-transform: uppercase;">
                    делаем
                </p>
                <p class="sf-light" data-aos="fade-up" style="font-size: 14px; line-height: 170%; letter-spacing: 0.1em;">
                    Техническая поддержка <br>
                    Доработка <br>
                    Контент – менеджмент <br>
                    Проектируем <br>
                    Тесты A/B/C <br>
                </p>
            </div>
                        <div class="col-md-11 col-12 d-md-block d-none">
                            <img class="w-100" data-aos="fade-up" src="{{ asset('images/liner.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12" style="line-height: 0; padding-top:12%; ">
                        <p class="font-weight-bold sf-medium" data-aos="fade-up" style="font-size: 16px; letter-spacing: 0.05em;">
                            Проектов
                        </p>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <p class="font-weight-light sf-ultralight" data-aos="fade-up" style="font-size: 100px; line-height: 1;">
                                250
                            </p>
                        </div>

                        <div class="col-lg-4 col-md-6 col-12 text-md-center">
                            <p class="font-weight-bold sf-bold media-year" data-aos="fade-up" style="position: absolute; top:25%; left: 15%; transform: rotate(-90deg); font-size: 14px; line-height: 140%; letter-spacing: 0.05em;">
                                лет опыта
                            </p>
                            <p class="font-weight-bold sf-black pl-lg-0 pl-md-4 pl-0" data-aos="fade-up" style="font-size: 100px; line-height: 1;">
                                5
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <p class="font-weight-normal mb-0 sf-medium" data-aos="fade-up" style="font-size: 100px; line-height: 1;">
                                100
                            </p>
                            <p class="sf-medium" data-aos="fade-up" style="font-size: 16px; line-height: 120%; letter-spacing: 0.05em;">
                                тысяч посещений в
                                <br>
                                сутки
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="container-fluid port" style="background-image: url({{ asset('images/bgport.png') }}); background-size: 100% 100%; height:750px;">
        <div class="d-md-block d-none main-trans"  style="width: 260px; height: 750px; position: absolute; box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.7); left:25%; z-index: 1;">
        </div>
        <div class="row" style="padding-top: 6%;">

            <div class="col-md-6 col-12 nova-bg py-md-0 py-5">
                <img class="w-100" data-aos="fade-right" style="max-width: 620px!important;" src="{{ asset('images/nova.png') }}" alt="">
                <a href="#">
                <div class="d-md-block d-none vector-effect" data-aos="fade-right" style="position: absolute; left:6%;bottom:-5%; border-bottom: 1px #fefefe solid; width:180px;">
                    <span class="sf-light vector-text" style="font-size: 16px; line-height: 19px; text-align: center; letter-spacing: 0.05em; color: #fefefe;">Смотреть кейс</span>
                    <img class="ml-3 vector-image" src="{{ asset('images/Arrow.png') }}" alt="">
                </div>
                </a>
                <div class="d-md-none d-block vector-effect" data-aos="fade-right" style="border-bottom: 1px #fefefe solid; width: 190px;">
                    <span class="sf-light vector-text" style="font-size: 16px; line-height: 19px; text-align: center; letter-spacing: 0.05em; color: #fefefe;">Смотреть кейс</span>
                    <img class="ml-3 vector-image" src="{{ asset('images/Arrow.png') }}" alt="">
                </div>
            </div>
            <div class="col-md-6 col-12 pt-md-0 py-4 enesay-bg">
                <img class="w-100 mb-4 d-md-block d-none"  data-aos="fade-up" src="{{ asset('images/enesay.png') }}" alt="">
                <div class="vector-effect d-md-block d-none"  data-aos="fade-up" style="border-bottom: 1px #fefefe solid; width:180px;">
                <span class="sf-light vector-text" style="font-size: 16px; line-height: 19px; text-align: center; letter-spacing: 0.05em; color: #fefefe;">Смотреть кейс</span>
                <img class="ml-3 vector-image" src="{{ asset('images/Arrow.png') }}" alt="">
                </div>

                <div class="d-lg-block d-none" style="position: absolute; bottom: 3%; left:15%;">
                    <p class="sf-light" data-aos="fade-up" style="font-size: 14px; line-height: 140%; letter-spacing: 0.05em; color:white;">
                        Давно выяснено, что при оценке дизайна и композиции <br>
                        читаемый текст мешает сосредоточиться. Lorem Ipsum <br>
                        используют потому, что тот обеспечивает более или менее <br>
                        стандартное заполнение шаблона, а также реальное <br>
                        распределение букв и пробелов в абзацах, которое не <br>
                        получается при простой дубликации "Здесь ваш текст.. <br>
                        Здесь ваш текст.
                    </p>
                </div>
                <div class="d-lg-none d-block pb-md-0 pb-2 pt-md-0 pt-3">
                    <p class="sf-light" data-aos="fade-up" style="font-size: 14px; line-height: 140%; letter-spacing: 0.05em; color:white;">
                        Давно выяснено, что при оценке дизайна и композиции <br>
                        читаемый текст мешает сосредоточиться. Lorem Ipsum <br>
                        используют потому, что тот обеспечивает более или менее <br>
                        стандартное заполнение шаблона, а также реальное <br>
                        распределение букв и пробелов в абзацах, которое не <br>
                        получается при простой дубликации "Здесь ваш текст.. <br>
                        Здесь ваш текст.
                    </p>
                </div>
                <img class="w-100 mb-4 d-md-none d-block"  data-aos="fade-up" src="{{ asset('images/enesay.png') }}" alt="">
                <div class="vector-effect d-md-none d-block mb-5 "  data-aos="fade-up" style="border-bottom: 1px #fefefe solid; width:180px;">
                    <span class="sf-light vector-text" style="font-size: 16px; line-height: 19px; text-align: center; letter-spacing: 0.05em; color: #fefefe;">Смотреть кейс</span>
                    <img class="ml-3 vector-image" src="{{ asset('images/Arrow.png') }}" alt="">
                </div>
                <div class="text-center d-md-block d-none btn-effect" data-aos="fade-up" style="position: absolute; line-height: 0; bottom:-5%; left: 15%; width: 224px;">
                    <div class="mx-auto mb-2 btn-tp-border" style="border-top:1px #fefefe solid; width: 224px;"></div>
                    <br>
                    <a href="#" class="moore text-white sf-light" style="font-size: 15px; line-height: 18px; text-align: center; letter-spacing: 0.05em; text-decoration: none;">
                        Смотреть портфолио
                    </a>
                    <br>
                    <div class="mx-auto mt-2 btn-bt-border" style="border-bottom:1px #fefefe solid; width: 180px;"></div>

                </div>
                <div class="text-center d-md-none d-block btn-effect" data-aos="fade-up" style="line-height: 0">
                    <div class="mx-auto mb-2 btn-tp-border" style="border-top:1px #fefefe solid; width: 224px;"></div>
                    <br>
                    <a href="#" class="moore text-white sf-light" style="font-size: 15px; line-height: 18px; text-align: center; letter-spacing: 0.05em;">
                        Смотреть портфолио
                    </a>
                    <br>
                    <div class="mx-auto mt-2 btn-bt-border" style="border-bottom:1px #fefefe solid; width: 180px;"></div>

                </div>
            </div>
        </div>
    </div>
        <div class="container-fluid" style="background-color: white;">
            <img style="position: absolute; right: 4%; margin-top: 30%; width:10%;" src="{{ asset('images/line3.png') }}" alt="">
    <div class="container" style="padding: 0% 9%;">
        <div class="row">
            <div class="col-md-6 px-0 col-12" style="padding-top: 20%; padding-bottom: 3%;">
                <h2 class="sf-bold" data-aos="fade-right" style="font-size: 28px; line-height: 140%; letter-spacing: 0.05em; text-transform: uppercase;">
                    НАШИ КЛИЕНТЫ
                </h2>
            </div>
            <div class="col-md-6 px-0 col-12 btn" style="padding-top: 20%; padding-bottom: 3%;">
                <button class="sf-medium lefter" data-aos="fade-up" style="float: right; padding: 10px 15px; background-color: transparent; border: 1px #000000 solid;">
                    Смотреть портфолио
                </button>
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/beeline.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/stom.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/apiks.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/artclinic.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/asia.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/avia.png') }}" alt="">
            </div>

            <div class="col-md-2 col-4 px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/beeline.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/stom.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/apiks.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/artclinic.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/asia.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/avia.png') }}" alt="">
            </div>

            <div class="col-md-2 col-4 px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/beeline.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/stom.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/apiks.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/artclinic.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/asia.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/avia.png') }}" alt="">
            </div>

            <div class="col-md-2 col-4 px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/beeline.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/stom.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-right" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/apiks.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/artclinic.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/asia.png') }}" alt="">
            </div>
            <div class="col-md-2 col-4 px-0" data-aos="fade-up" style="border: 1px solid rgba(0,0,0,0.12);">
                <img class="w-100" src="{{ asset('images/avia.png') }}" alt="">
            </div>
        </div>

        </div>
    </div>

    <div class="container" style="padding-top:10%;">
        <div class="row">
            <div class="col-lg  -6 col-12">
                <img class="pb-2 pr-2" data-aos="fade-right" src="{{ asset('images/text-line.png') }}" alt=""><span class="sf-medium" style="font-size: 20px;line-height: 100%;letter-spacing: 0.05em;text-transform: uppercase;">
                    ОПЫТ И ЭКСПЕРТИЗА
                </span>
                <h2 class="sf-black font-weight-bold text-about" data-aos="fade-rigth" style="font-size: 55px; line-height: 100%; letter-spacing: 0.05em;">
                    Мы решаем ряд
                    <br> важных задач
                </h2>
            </div>
        </div>

        <div class="row pt-5">
            <div class="col-lg-4 col-12 text-center d-md-block d-none">
                <img src="{{ asset('images/line3.png') }}" data-aos="fade-right" alt="">
            </div>
            <div class="col-lg-4 col-12">
                <h2 class="sf-black" data-aos="fade-up" style="font-size: 30px; line-height: 42px; letter-spacing: 0.1em; text-transform: uppercase;">
                    01_ПОМОГАЕМ
                </h2>
                <p class="sf-light" data-aos="fade-up" style="font-size: 14px; line-height: 140%; letter-spacing: 0.1em; color: black;">
                    Мы помогаем перестроить систему
                    планирования, организационные процессы,
                    инфраструктуру, коммуникацию и материальные
                    ресурсы так, чтобы Ваша компания начала
                    устойчиво развиваться в digital-среде.
                </p>
            </div>
            <div class="col-lg-4 col-12">
                <h2 class="sf-black" data-aos="fade-up" style="font-size: 30px; line-height: 42px; letter-spacing: 0.1em; text-transform: uppercase;">
                    02_РАЗВИВАЕМ
                </h2>
                <p class="sf-light" data-aos="fade-up" style="font-size: 14px; line-height: 140%; letter-spacing: 0.1em; color: black;">
                    Переход компаний в цифровую среду означает не
                    просто создание новых каналов связи с
                    пользователями, но также трансформацию бизнеса
                    или формата услуг. И здесь мы оказываем
                    компетентную поддержку. Используя передовые
                    подходы аналитики, проектирования и дизайна.
                </p>
            </div>
        </div>
    </div>

    <div class="container" style="padding-top:10%; padding-bottom: 10%;">
<div class="row">
    <div class="col-12">
    <h2 class="font-weight-bold text-about sf-bold" data-aos="fade-right" style="font-size: 30px;line-height: 140%;letter-spacing: 0.05em;text-transform: uppercase;">
        Какие <br> технологии мы <br> используем
    </h2>
    </div>
</div>
        <div class="row pt-md-0 pt-5 tech" style="padding-left:15%;">
        <div class="col-md-2 col-6 d-md-block d-none"></div>
        <div class="col-md-2 col-6 text-center py-4" data-aos="fade-up" style="border-right: 1px solid rgba(0, 0, 0, 0.2); border-bottom: 1px solid rgba(0, 0, 0, 0.2);">
            <div style="height: 90px;">
            <img src="{{ asset('images/html.png') }}" alt="">
            </div>
            <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                HTML, CSS3, JS
            </p>
        </div>
        <div class="col-md-2 col-6 text-center py-4" data-aos="fade-up" style="border-right: 1px solid rgba(0, 0, 0, 0.2); border-bottom: 1px solid rgba(0, 0, 0, 0.2);">
            <div style="height: 90px;">
            <img src="{{ asset('images/laravel.png') }}" alt="">
            </div>
                <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                LARAVEL
            </p>
        </div>
        <div class="col-md-2 col-6 text-center py-4" data-aos="fade-up" style="border-right: 1px solid rgba(0, 0, 0, 0.2); border-bottom: 1px solid rgba(0, 0, 0, 0.2);">
            <div style="height: 90px;">
                <img src="{{ asset('images/bootstrap.png') }}" alt="">
            </div>
            <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                BOOTSTRAP
            </p>
        </div>
        <div class="col-md-2 col-6 text-center py-4" data-aos="fade-up" style="border-right: 1px solid rgba(0, 0, 0, 0.2); border-bottom: 1px solid rgba(0, 0, 0, 0.2);">
            <div style="height: 90px;">
                <img src="{{ asset('images/php.png') }}" alt="">
            </div>
            <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                PHP
            </p>
        </div>
            <div class="col-md-2 col-6 text-center py-4"  data-aos="fade-up" style="border-right: 1px solid rgba(0, 0, 0, 0.2); border-bottom: 1px solid rgba(0, 0, 0, 0.2);">
                <div style="height: 90px;">
                    <img src="{{ asset('images/github.png') }}" alt="">
                </div>
                <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                    GITHUB
                </p>
            </div>
            <div class="col-md-2 col-6 text-center py-4 d-md-block d-none">

            </div>
            <div class="col-md-2 col-6 text-center py-4 bb" data-aos="fade-right" style="border-right: 1px solid rgba(0, 0, 0, 0.2);">
                <div style="height: 90px;">
                    <img src="{{ asset('images/slack.png') }}" alt="">
                </div>
                <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                    SLACK
                </p>
            </div>
            <div class="col-md-2 col-6 text-center py-4 bb" data-aos="fade-right" style="border-right: 1px solid rgba(0, 0, 0, 0.2);">
                <div style="height: 90px;">
                    <img src="{{ asset('images/skype.png') }}" alt="">
                </div>
                <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                    SKYPE
                </p>
            </div>
            <div class="col-md-2 col-6 text-center py-4 bb" data-aos="fade-right" style="border-right: 1px solid rgba(0, 0, 0, 0.2);">
                <div style="height: 90px;">
                    <img src="{{ asset('images/figma.png') }}" alt="">
                </div>
                <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                    FIGMA
                </p>
            </div>
            <div class="col-md-2 col-6 text-center py-4 bb" data-aos="fade-right" style="border-right: 1px solid rgba(0, 0, 0, 0.2);">
                <div style="height: 90px;">
                    <img src="{{ asset('images/adobe.png') }}" alt="">
                </div>
                <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                    ADOBE XD
                </p>
            </div>
            <div class="col-md-2 col-6 text-center py-4 bb" data-aos="fade-right" style="border-right: 1px solid rgba(0, 0, 0, 0.2);">
                <div style="height: 90px;">
                    <img src="{{ asset('images/nodejs.png') }}" alt="">
                </div>
                <p class="sf-bold" style="font-size: 16px; line-height: 140%; text-align: center; letter-spacing: 0.05em;">
                    NODE JS
                </p>
            </div>
        </div>

    </div>

    @include('_partials.footer')

@endsection