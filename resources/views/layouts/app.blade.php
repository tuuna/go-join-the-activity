<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="版权由多火工作室所有">
    <meta name="description" content="社团活动导航网站">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}-活动行-{{ $this->title }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
        Laravel.apiToken = "{{ Auth::check() ? 'Bearer '.Auth::user()->api_token : 'Bearer ' }}";
    </script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<!-- 导航 -->
{{--<div id="app">--}}
    <header>
        @if(Auth::guest())
            <nav class="navigation">
                <div>
                    <label for="search">信大活动</label>
                    <input type="search" name="search">
                </div>
                <div>
                    <a href="{{ url('/login') }}" class="navli">登陆/注册</a>
                    <a href="{{ url('/admin') }}" class="navli">发布活动</a>
                    <a href="{{ url('/sponsorlist') }}" class="navli">主办方</a>
                </div>
            </nav>
        @else
            <nav class="navigation">
                <div>
                    <label for="search">信大活动</label>
                    <input type="search" name="search">
                </div>
                <div>
                    <a href="{{ url('/login') }}" class="navli" style="display: none;">登陆/注册</a>
                    <div class="dropdown">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img src="img/yyxxzz.png" alt="#">
                            <span class="nickname">{{ Auth::user()->name }}</span>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="{{ url('/myinfo') }}">个人中心</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ url('/userLogout') }}">退出</a></li>
                        </ul>
                    </div>
                    <a href="{{ url('/admin') }}" class="navli">发布活动</a>
                    <a href="{{ url('/sponsorlist') }}" class="navli">主办方</a>
                </div>
            </nav>
        @endif
    </header>

        @yield('content')

<footer class="max-all min-all id-all">
    <div class="footer-container min-container max-container">
        <div class="lef">
            <ul>
                <li><a>与我们合作</a><a class="feedback">网站反馈</a></li>
                <li>多火工作室招新入口：http://recruit.duohuo.org/</li>
                <li>多火工作室博客：https://blog.duohuo.org/</li>
            </ul>
        </div>
        <div class="mid">
            <ul>
                <li>信大活动产品服务中心邮箱：admin@duohuo.com</li>
                <li>多火工作室官网：http://www.duohuo.org/</li>
                <li>Designed by Duohuostudio. All rights reserved.</li>
            </ul>
        </div>
        <div class="rit">
            <embed class="ma" src="{{ asset('img/ma.svg') }}" type="image/svg+xml" />
            <ul>
                <li>扫一扫关注</li>
                <li>多火工作室</li>
                <li>duohuostudio</li>
            </ul>
        </div>
    </div>
</footer>
{{--</div>--}}

</body>
</html>
