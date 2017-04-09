@extends('layouts.app')
@section('content')
    <?php
    $this->title = '主办方中心';
    ?>
    <link href="{{ asset('css/sponsor_info.css') }}" rel="stylesheet">
<div class="banner"></div>
<div class="container">
    <div class="left">
        <div class="introduce">
            <img class="logo" src="{{ asset('upload/sponsorUpload/'.$sponsorInfo['sponsor_icon']) }}"/>
            <a class="name">多火工作室</a>
            <div class="numcont">
                @if($sponsorInfo['count'])
                    <a class="nummid leftnum"><span class="num"> {{ $sponsorInfo['count'] }}</span> 活动</a>
                @else
                    <b class="nummid leftnum"><span class="num"> {{ $sponsorInfo['count'] }}</span> 活动</b>
                @endif
                <div class="line"></div>
                <a class="nummid rightnum"><span class="num">{{ $sponsorInfo['follow_count'] }} </span> 粉丝</a>
            </div>
            <div class="button">
                <button class="guanzhu buttonblue">关注</button>
                <button class="fenxiang buttonwrite pull-right">分享</button>
            </div>
            <p>{{ $sponsorInfo['description'] }}</p>
        </div>
        @if(is_null($sponsorInfo['weixin']))
            <div></div>
        @else
        <div class="leftdown">
            <embed class="ma" src="img/ma.svg" type="image/svg+xml" />
            <ul>
                <li>多火工作室</li>
                <li>微信公众号</li>
                <li>duohuostudio</li>
                <li>扫一扫关注</li>
                <li>更多活动</li>
            </ul>
        </div>
        @endif
    </div>
    <div class="right">
        <ul>
            <li>
                <div class="active-pic"></div>
                <div class="active-s">
                    <p class="active-tit">南信大最炫千人城市夜跑活动</p>
                    <p class="active-time"><embed class="icon" src="img/time.svg" type="image/svg+xml" /> 时间：2016-11-22(二) 09:30~12:30</p>
                    <p class="active-plc"><img class="icon" src="img/plc.png"> 地址：明德楼门口</p>
                    <div class="active-num">
                        <a class="num-left">报名人数：84</a>
                        <div class="active-line"></div>
                        <a class="num-right">收藏人数：84</a>
                    </div>
                    <div class="active-button">
                        <button class="xiangqing buttonblue">查看详情</button>
                        <button class="shoucang buttonwrite">收藏</button>
                    </div>
                </div>
            </li>
            <li>
                <div class="active-pic"></div>
                <div class="active-s">
                    <p class="active-tit">南信大最炫千人城市夜跑活动</p>
                    <p class="active-time"><embed class="icon" src="img/time.svg" type="image/svg+xml" /> 时间：2016-11-22(二) 09:30~12:30</p>
                    <p class="active-plc"><img class="icon" src="img/plc.png"> 地址：明德楼门口</p>
                    <div class="active-num">
                        <a class="num-left">报名人数：84</a>
                        <div class="active-line"></div>
                        <a class="num-right">收藏人数：84</a>
                    </div>
                    <div class="active-button">
                        <button class="xiangqing buttonblue">查看详情</button>
                        <button class="shoucang buttonwrite">收藏</button>
                    </div>
                </div>
            </li>
            <li>
                <div class="active-pic"></div>
                <div class="active-s">
                    <p class="active-tit">南信大最炫千人城市夜跑活动</p>
                    <p class="active-time"><embed class="icon" src="img/time.svg" type="image/svg+xml" /> 时间：2016-11-22(二) 09:30~12:30</p>
                    <p class="active-plc"><img class="icon" src="img/plc.png"> 地址：明德楼门口</p>
                    <div class="active-num">
                        <a class="num-left">报名人数：84</a>
                        <div class="active-line"></div>
                        <a class="num-right">收藏人数：84</a>
                    </div>
                    <div class="active-button">
                        <button class="xiangqing buttonblue">查看详情</button>
                        <button class="shoucang buttonwrite">收藏</button>
                    </div>
                </div>
            </li>
            <li>
                <div class="active-pic"></div>
                <div class="active-s">
                    <p class="active-tit">南信大最炫千人城市夜跑活动</p>
                    <p class="active-time"><embed class="icon" src="img/time.svg" type="image/svg+xml" /> 时间：2016-11-22(二) 09:30~12:30</p>
                    <p class="active-plc"><img class="icon" src="img/plc.png"> 地址：明德楼门口</p>
                    <div class="active-num">
                        <a class="num-left">报名人数：84</a>
                        <div class="active-line"></div>
                        <a class="num-right">收藏人数：84</a>
                    </div>
                    <div class="active-button">
                        <button class="xiangqing buttonblue">查看详情</button>
                        <button class="shoucang buttonwrite">收藏</button>
                    </div>
                </div>
            </li>
        </ul>
        <div class="page-num">
            <button class="but-qian buttongray"><</button>
            <button class="but-1 buttonblue">1</button>
            <button class="but-2 buttonwrite">2</button>
            <button class="but-hou buttongray">></button>
        </div>
    </div>
</div>
@endsection