@extends('layouts.app')
@section('content')
    <?php
        $this->title = '话题精选';
    ?>
    <link href="{{ asset('css/topic_dtl.css') }}" rel="stylesheet">
    <div class="container_lg banner">
        <img src="img/banner2.jpg" alt="#">
    </div>
    <div class="container_lg white_bg">
        <div class="container-default topic_ctnt">
            <!-- 该区域分为文字和主题两个盒模块，暂不加图 -->
            <div class="topic_word">
                <!-- 这里的文字前端只是做个样例，后端渲染文字注意换行 -->
                <pre>光棍节，一个人？
要如何过的优雅一些？
面对某宝某东的购物广告
你是选择在家剁手
或者约上好友一起嗨皮
还是剁完手再去嗨皮？

不管你选择哪种方式过双11
推荐给你几个好玩的活动
让你不再孤单</pre>
            </div>
            <div class="topic_actvt">
                <p class="topic_actvt_title">南信大最炫千人城市夜跑活动</p>
                <img src="../../img/Group4.png" alt="">
                <div class="time_place">
                    <p class="actvt_time"><span class="icon time_icon"></span>时间：2016-11-22(二) 09:30~12:30</p>
                    <p class="actvt_place"><span class="icon place_icon"></span>地址：明德楼门口</p>
                </div>
                <div class="actvt_people">
                    <p><span class="icon people_icon"></span>报名人数：<span class="number">844</span></p>
                    <p class="border_left"><span class="icon collection_icon"></span>收藏人数：<span class="number">844</span></p>
                </div>
                <div class="check_star">
                    <button class="btn-blue check">关注</button>
                    <button class="btn-white star">分享</button>
                </div>
            </div>
            <div class="topic_actvt">
                <p class="topic_actvt_title">南信大最炫千人城市夜跑活动</p>
                <img src="../../img/Group4.png" alt="">
                <div class="time_place">
                    <p class="actvt_time"><span class="icon time_icon"></span>时间：2016-11-22(二) 09:30~12:30</p>
                    <p class="actvt_place"><span class="icon place_icon"></span>地址：明德楼门口</p>
                </div>
                <div class="actvt_people">
                    <p><span class="icon people_icon"></span>报名人数：<span class="number">844</span></p>
                    <p class="border_left"><span class="icon collection_icon"></span>收藏人数：<span class="number">844</span></p>
                </div>
                <div class="check_star">
                    <button class="btn-blue check">关注</button>
                    <button class="btn-white star">分享</button>
                </div>
            </div>
            <div class="topic_actvt">
                <p class="topic_actvt_title">南信大最炫千人城市夜跑活动</p>
                <img src="../../img/Group4.png" alt="">
                <div class="time_place">
                    <p class="actvt_time"><span class="icon time_icon"></span>时间：2016-11-22(二) 09:30~12:30</p>
                    <p class="actvt_place"><span class="icon place_icon"></span>地址：明德楼门口</p>
                </div>
                <div class="actvt_people">
                    <p><span class="icon people_icon"></span>报名人数：<span class="number">844</span></p>
                    <p class="border_left"><span class="icon collection_icon"></span>收藏人数：<span class="number">844</span></p>
                </div>
                <div class="check_star">
                    <button class="btn-blue check">关注</button>
                    <button class="btn-white star">分享</button>
                </div>
            </div>
        </div>
    </div>
@endsection