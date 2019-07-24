<nav class="navbar menuse navbar-expand-xl py-5 w-100 pr-0 d-md-block d-none" style="z-index: 999; background: transparent; position: fixed;">
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col-lg-2 col-4 px-5" style="height: 8vh;">
                <a href="/" style="">
                    <h2 class="text-white logo sf-black pt-3 d-lg-block d-none" style="font-size: 25px; line-height: 105%; letter-spacing: 0.05em; text-transform: uppercase;">
                        .MOORE
                    </h2>
                    <h2 class="text-white logo sf-black pt-3 d-lg-none d-block" style="font-size: 35px; line-height: 30px; letter-spacing: 0.05em; text-transform: uppercase;">
                        .MOORE
                    </h2>

                </a>
            </div>
            <div class="col-auto my-auto ml-auto d-xl-none px-0">
                <button class="text-white navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <img class="w-100" src="{{ asset('images/humburger.png') }}" alt="">
                </button>
            </div>
            <div class="col-lg-6 col-8 collapse navbar-collapse"  id="navbarSupportedContent">
                <nav class="ml-md-auto ml-0">
                    <ul class="navbar-nav" id="pick">
                        <li class="nav-item px-3">
                            <a href="/" class="text-white text-fut-bold sf-medium" style="text-decoration: none;">Главная</a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="/portfolio" class="text-white text-fut-bold sf-medium" style="text-decoration: none;">Портфолио</a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="/jobs" class="text-white text-fut-bold sf-medium" style="text-decoration: none;">Вакансии</a>
                        </li>
                        <li class="nav-item px-3">
                            <a href="#" class="text-white text-fut-bold sf-medium" style="text-decoration: none;">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-4 collapse navbar-collapse">
                <nav class="ml-md-auto ml-0">
                    <ul class="navbar-nav">
                        {{--<li class="nav-item px-1">--}}
                            {{--<a href="#" class="text-white text-fut-bold sf-bold" style="text-decoration: none;">En</a>--}}
                        {{--</li>--}}
                        {{--<li class="nav-item px-1">--}}
                            {{--<a href="#" class="text-white text-fut-bold sf-bold" style="text-decoration: none;">Ru</a>--}}
                        {{--</li>--}}
                        <li class="nav-item px-5">
                            <a class="text-white text-fut-bold" style="text-decoration: none;cursor: pointer;">
                                <img class="w-75" src="{{ asset('images/humburger.png') }}" alt="" onclick="openNav()">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar menuse navbar-expand-xl py-0 w-100 pr-0 bg-white d-md-none d-block" style="z-index: 999; background: black!important; position: fixed;">
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col-md-4 col-6 px-4 py-2">
                <a href="/">
                    <img class="w-50 my-auto" src="{{asset('images/MOORE.png')}}" alt="">
                </a>
            </div>
            <div class="col-auto my-auto ml-auto d-xl-none px-0">
                <button class="text-white navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <img class="w-75" src="{{ asset('images/humburger.png') }}" alt="">
                </button>
            </div>
            <div class="collapse navbar-collapse col-md-11 col-8"  id="navbarSupportedContent">
                <nav class="ml-md-auto ml-0">
                    <ul class="navbar-nav" id="pick">
                        <li class="nav-item p-2">
                            <a href="/" class="text-white text-fut-bold" style="text-decoration: none; font-size: 16px;">Главная</a>
                        </li>
                        <li class="nav-item p-2 ">
                            <a href="/portfolio" class="text-white text-fut-bold" style="text-decoration: none; font-size: 16px;">Портфолио</a>
                        </li>
                        <li class="nav-item p-2">
                            <a href="/jobs" class="text-white text-fut-bold" style="text-decoration: none; font-size: 16px;">Вакансии</a>
                        </li>
                        <li class="nav-item p-2">
                            <a href="#" class="text-white text-fut-bold" style="text-decoration: none; font-size: 16px;">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</nav>
<div id="mySidenav" class="sidenav d-md-block d-none">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a class="sf-medium pl-5" href="/jobs">  Вакансии</a>
    <a class="sf-medium pl-5" href="/portfolio"> Портфолио</a>
    <a class="sf-medium pl-5" href="tel: +996 709 111 143"> +996 709 111 143</a>
    <a class="sf-medium pl-5" href="tel: +996 771 044 429">+996 771 044 429</a>
    <a class="sf-medium pl-5" href="mailto: info@to-moore.com">info@to-moore.com</a>
    <div class="container-fluid pt-5 pl-4 ml-2">
        <div class="row">

            <div class="col-3 p-0">
                <a href="https://www.behance.net/moore_studio" class="ics" target="_blank">
                    <p>
                <i class="fab fa-behance fa-sm"></i>
                    </p>
                </a>
            </div>

            <div class="col-3 p-0">
                <a href="https://www.instagram.com/moore_studio/" class="ics" target="_blank">
                    <p>
                    <i class="fab fa-instagram fa-sm"></i>
                    </p>
                </a>
            </div>

            <div class="col-3 p-0">
                <a href="#" class="ics">
                    <p>
                    <i class="fab fa-facebook-f fa-sm"></i>
                    </p>
                </a>
            </div>
        </div>
    </div>

    <img class="w-100" style="margin-top: 17%;" src="{{ asset('images/wedo.png') }}" alt="">
</div>



