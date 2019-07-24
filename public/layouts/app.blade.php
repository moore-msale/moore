<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>.MOORE STUDIO - Разработка web cайтав и продвижение в Бишкеке</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{--<link rel="stylesheet" href="{{ asset('css/animate.css') }}">--}}
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <meta name="description" content="Мы занимаемся созданием сайтов и интерфейсов,брэндингом, придумываем рекламу и развиваем проекты в digital." />
    <!-- Styles -->

</head>
<body>
@include('_partials.header')
@yield('content')
@include('_partials.footer')
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            var height = $('.logo').height();;
            var scrollTop = $(window).scrollTop();

            if (scrollTop >= height - 5) {
                $('.menuse').addClass('solid-nav');
                $('.menuse').addClass('shadow');
                $('.menuse').removeClass('py-5');
                $('.menuse').addClass('py-2');

            } else {
                $('.menuse').removeClass('solid-nav');
                $('.menuse').removeClass('shadow');
                $('.menuse').removeClass('py-2');
                $('.menuse').addClass('py-5');
            }

        });
    });
</script>
<script>
    AOS.init();
</script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.right = "0px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.right = "-300px";
    }
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139005514-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139005514-1');
</script>
<script type="text/javascript" src="//cdn.callbackhunter.com/cbh.js?hunter_code=dee301a5db2a0b9ea6ff326260216db7" charset="UTF-8"></script>
</body>
</html>
