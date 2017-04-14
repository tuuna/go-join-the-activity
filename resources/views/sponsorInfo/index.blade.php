@extends('layouts.vue')
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
            <a class="name">{{ $sponsorInfo['sponsor_name'] }}</a>
            <div class="numcont">
                @if($sponsorInfo['count'])
                    <a class="nummid leftnum"><span class="num"> {{ $sponsorInfo['count'] }}</span> 活动</a>
                @else
                    <b class="nummid leftnum"><span class="num"> {{ $sponsorInfo['count'] }}</span> 活动</b>
                @endif
                <div class="line"></div>
                <b class="nummid rightnum"><span class="num">{{ $sponsorInfo['follow_count'] }} </span> 粉丝</b>
            </div>
            <div class="button">
                <sponsor-follow-button sponsor=" {{ $sponsorInfo['id'] }} "></sponsor-follow-button>
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
            @foreach($activityInfo as $info)
            <li>
                <div class="active-pic"></div>
                <div class="active-s">
                    <p class="active-tit">{{ $info['title'] }}</p>
                    <p class="active-time"><embed class="icon" src="{{ asset('img/time.svg') }}" type="image/svg+xml" /> 时间：{{ $info['hold_time'] }}</p>
                    <p class="active-plc"><img class="icon" src="{{ asset('img/adressicon.svg') }}"> 地址：{{ $info['hold_address'] }}</p>
                    <div class="active-num">
                        <b class="num-left">报名人数：{{ $info['signUp_count'] }}</b>
                        <div class="active-line"></div>
                        <b class="num-right">收藏人数：{{ $info['follow_count'] }}</b>
                    </div>
                    <div class="active-button">
                        <button class="xiangqing buttonblue"><a href="{{ url('detail/'.$info['id']) }}" style="color: white;text-decoration: none;">查看详情</a></button>
                        <activity-follow-button activity="{{ $info['id'] }}"></activity-follow-button>
                    </div>
                </div>
            </li>
            @endforeach
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