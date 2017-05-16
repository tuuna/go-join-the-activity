@extends('layouts.vue')
@section('content')
    <?php
    $this->title = '主办方中心';
    ?>
    <link href="{{ asset('css/sponsor_info.css') }}" rel="stylesheet">
    <!-- banner -->
    <div class="container_lg bgimg_banner"></div>
    <div class="container-default">
        <div class="container_left">
            <div class="sponsor_info_box">
                <img src="{{ asset('upload/sponsorUpload/'.$sponsorInfo['sponsor_icon']) }}" alt="#" class="sponsor_logo">
                <h3 class="sponsor_title">{{ $sponsorInfo['sponsor_name'] }}</h3>
                <div class="sponsor_a">
                    @if($sponsorInfo['count'])
                        <span class="span_border">{{ $sponsorInfo['count'] }}活动</span>
                    @else
                        <span class="span_border">{{ $sponsorInfo['count'] }}活动</span>
                    @endif
                    <span>{{ $sponsorInfo['follow_count'] }}粉丝</span>
                </div>
                <div class="focus_share">
                    <sponsor-follow-button sponsor="{{ $sponsorInfo['id'] }}"></sponsor-follow-button>
                    {{--<button class="btn-blue focus" id="focus">关注</button>--}}
                    {{--<button class="btn-white unfocus" id="unfocus">已关注</button>--}}
                    <button class="btn-white share">分享</button>
                </div>
                <p class="sponsor_intro">{{ $sponsorInfo['description'] }}</p>
            </div>
            @if(is_null($sponsorInfo['weixin']))
                <div></div>
            @else
                <div class="other_info">
                    <img src="img/qrcode.jpg" alt="二维码图片">
                    <p>多火工作室
                        微信公众号
                        duohuostudio
                        扫一扫关注
                        更多活动</p>
                </div>
            @endif
        </div>
        <div class="container_right">
            @foreach($activityInfo as $info)
                <div class="actvt_box">
                    <img src="../../img/Group4.png" alt="#" href="{{ url('detail/'.$info['id']) }}">
                    <div class="actvt_dtl">
                        <p class="dtl_title"><a href="{{ url('detail/'.$info['id']) }}">{{ $info['title'] }}</a></p>
                        <p class="actvt_time"><span class="icon time_icon"></span>时间：{{ $info['hold_time'] }}</p>
                        <p class="actvt_place"><span class="icon place_icon"></span>地址：{{ $info['hold_address'] }}</p>
                        <div class="actvt_people">
                            <p><span class="icon people_icon"></span>报名人数：<span class="number">{{ $info['signUp_count'] }}</span></p>
                            <p class="border_left"><span class="icon collection_icon"></span>收藏人数：{{ $info['follow_count'] }}<span class="number"></span></p>
                        </div>
                        <div class="check_star">
                            <activity-follow-button activity="{{ $info['id'] }}"></activity-follow-button>
                            <button class="btn-white star">分享</button>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="page_btn">
                <button class="next_page"><</button>
                <ul class="page_num">
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                </ul>
                <button class="last_page">></button>
            </div>

        </div>
        <div style="clear:both"></div>
    </div>
{{--<div class="banner"></div>
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
            <div class="other_info">
                <img src="img/qrcode.jpg" alt="二维码图片">
                <p>多火工作室
                    微信公众号
                    duohuostudio
                    扫一扫关注
                    更多活动</p>
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
                    <p class="active-plc"><img class="icon" src="{{ asset('img/addressicon.svg') }}"> 地址：{{ $info['hold_address'] }}</p>
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
</div>--}}
@endsection