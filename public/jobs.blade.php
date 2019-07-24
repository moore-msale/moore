@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="port-trans d-lg-none d-block" style="width: 130px; position: absolute; box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.7); left:-14%; z-index: 0;">
        </div>
        <div class="row justify-content-center port-first" style="height: 100vh;">
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

            <div class="col-md-10 col-12 text-center pt-md-0 pt-5">
                <div class="h-100 main-trans d-lg-block d-none" style="width: 260px; position: absolute; box-shadow: 0px 4px 50px rgba(0, 0, 0, 0.7); left:-14%; z-index: 10;">
                </div>


                <p class="sf-light pl-lg-0 pl-md-0 pl-5 pr-lg-0 pr-md-0 pr-5 team-text in" data-aos="fade-up" style="color: #fefefe; padding-top: 20%; font-size: 15px; line-height: 130%; align-items: center; text-align: center; letter-spacing: 0.05em;">
                    Мы - команда небезразличных людей с горящими глазами и
                    <br>
                    сердцами, которые от всей души любят то, что делают!
                </p>
                <h1 class="sf-black port-main-text" data-aos="flip-down" style="background-image: url({{ asset('images/moorebg.png') }});color: #fefefe; font-size: 135px; line-height: 161px; text-align: center; letter-spacing: 0.05em; text-transform: uppercase;">
                    Вакансии
                </h1>

                {{--<div class="text-center btn-effect d-md-block d-none" data-aos="fade-up" style="position:absolute; top: 60%; left: 40%; line-height: 0; padding-top:5%; width: 176px; z-index: 999;">--}}
                {{--<div class="mx-auto mb-2 btn-tp-border" style="border-top:1px #fefefe solid; width: 176px;"></div>--}}
                {{--<br>--}}
                {{--<a href="#" class="moore text-white sf-light" style="font-size: 15px; line-height: 18px; text-align: center; letter-spacing: 0.05em; text-decoration: none;">--}}
                {{--Узнать больше--}}
                {{--</a>--}}
                {{--<br>--}}
                {{--<div class="mx-auto mt-2 btn-bt-border" style="border-bottom:1px #fefefe solid; width: 128px;"></div>--}}
                {{--</div>--}}
                {{--<div class="text-center btn-effect d-md-none d-block mx-auto" data-aos="fade-up" style="line-height: 0; padding-top:5%;  z-index: 9999; width: 176px;">--}}
                {{--<div class="mx-auto mb-2 btn-tp-border" style="border-top:1px #fefefe solid; width: 176px;"></div>--}}
                {{--<br>--}}
                {{--<a href="#" class="moore text-white sf-light" style="font-size: 15px; line-height: 18px; text-align: center; letter-spacing: 0.05em; text-decoration: none;">--}}
                {{--Узнать больше--}}
                {{--</a>--}}
                {{--<br>--}}
                {{--<div class="mx-auto mt-2 btn-bt-border" style="border-bottom:1px #fefefe solid; width: 128px;"></div>--}}

                {{--</div>--}}

            </div>
            <div class="col-1 d-md-block d-none">
                <div class="pr-4 right-sidebar vector-effect" data-aos="fade-up" style="position: absolute; top:50vh; right:-32px; transform: rotate(90deg); line-height: 2;">
                    <div class="vector-border" style="border-top: 1px solid #FFFFFF; width: 220px;"></div>
                    <span class="py-4 text-white sf-light vector-text" style="width:240px;font-size: 16px; letter-spacing: 0.2em;">
                            Листайте вниз
                        </span>
                </div>

            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row p-5">
            <span class="font-weight-bold sf-black text-about" data-aos="fade-up" style="font-size: 64px; text-align: left; font-weight: 400; font-style: normal; letter-spacing: 1px; line-height: 100%; color: #191919;"><span class="responsive-h4">Наша студия находится в <br>
                    постоянном поиске лучших <br>
                    специалистов, знающих свое <br>
                    дело лучше нас и умеющих <br>
                    добиваться качественного <br>
                    результата. </span></span>
        </div>


            <div class="row p-5">
            <div class="col-8">
                <h2 class="sf-medium" data-aos="fade-up" style="font-size: 40px; line-height: 100%;">
                    ПРИНЦИПЫ
                </h2>

                <div>
                    <p class="sf-light" data-aos="fade-up" style="font-size: 25px; line-height: 120%; letter-spacing: 0.1em;">
                        Компания для людей, а не люди для компании.
                        Мы ценим каждого. Нам нужны профессиональные
                        сотрудники, работающие вместе как команда мечты,
                        создающая тренды индустрии
                    </p>
                </div>
            </div>
            </div>

        <div class="row p-5">
            <div class="col-8">
                <h2 class="sf-medium" data-aos="fade-up" style="font-size: 40px; line-height: 100%;">
                    РЕАЛЬНО
                </h2>

                <div>
                    <p class="sf-light" data-aos="fade-up" style="font-size: 25px; line-height: 120%; letter-spacing: 0.1em;">
                        Тебя ждут реальные проекты, новые технологии и работа в дружной команде,
                        драйв от того, что видишь результаты своей работы, комфортная обстановка и
                        коллектив единомышленников c позитивным отношением к жизни, отличные
                        возможности для развития, а также комфортный офис в центре, чай, кофе и
                        другие вкусности каждый день,

                    </p>
                </div>
            </div>
        </div>
        <div class="row p-5">
            <div class="col-8">
                <h2 class="sf-medium" data-aos="fade-up" style="font-size: 40px; line-height: 100%;">
                    КРУТО!
                </h2>

                <div>
                    <p class="sf-light" data-aos="fade-up" style="font-size: 25px; line-height: 120%; letter-spacing: 0.1em;">
                        У нас круто! Ежедневно мы в команде решаем множество интересных
                        и сложных задач для крутейших местных и зарубежных компаний и
                        добиваемся международного признания.
                    </p>
                </div>
            </div>
        </div>

        <div class="px-5">
            <p class="sf-light px-4" data-aos="fade-up" style="font-size: 25px; line-height: 120%; letter-spacing: 0.1em;">
                Открытые вакансии
                <br>
                Frontend разработчик: JavaScript, JQuery, CSS, HTML, Worpdress
                <br>
                Менеджер по продажам
            </p>
        </div>
        </div>


    <img class="px-5" data-aos="fade-up" src="{{ asset('images/text-line.png') }}" alt="">

    <div class="row p-5">
        <div class="col-8">
            <h2 class="sf-medium" data-aos="fade-up" style="font-size: 50px; line-height: 100%;">
                ПОГНАЛИ К НАМ?
            </h2>

            <div>
                <p class="sf-medium" data-aos="fade-up" style="font-size: 25px; line-height: 120%; letter-spacing: 0.1em;">
                    У нас круто! Ежедневно мы в команде решаем множество интересных
                    и сложных задач для крутейших местных и зарубежных компаний и
                    добиваемся международного признания.
                </p>
            </div>
        </div>
    </div>


@endsection
