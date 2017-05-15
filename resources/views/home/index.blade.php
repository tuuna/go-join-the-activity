@extends('layouts.app')
@section('content')
    <?php
    $this->title = '首页';
    ?>
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <script>
        //轮播图
        $(function(){
            $('.multiple-items').slick({
                dots: true,
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 4
            });
        });
    </script>
    @if (session()->has('flash_notification.message'))
        <div class="alert alert-{{ session('flash_notification.level') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

            {!! session('flash_notification.message') !!}
        </div>
    @endif
    <!-- BANNER -->
    <div class="banner_box">
        <img src="{{ asset('img/banner1.png') }}" alt="#">
    </div>
    <!-- 专题和最热最新 -->
    <div class="ctnt_box_1">
        <!-- 最新最热 -->
        <div class="ctnt hot_new">
            <div class="ctnt_title">
                <p>最热活动&nbsp;&nbsp;最新活动</p>
                <a href="javascript:void(0);">更多专题</a>
                <div style="clear:both"></div>
            </div>
            <div class="whirligig multiple-items">
                <div>
                    <div class="whirl_box">
                        <img src="img/Group.png" alt="#">
                        <div class="whirl_box_text">
                            <h4>南信大最炫千人城市夜跑活动</h4>
                            <p class="time"><img src="img/日历icon.svg" alt="">2016-11-22(二) 09:30~12:30</p>
                            <p class="place"><img src="img/地点icon.png" alt="#">明德楼门口</p>
                            <p class="sponsor"><img src="img/代办主办项目.svg" alt="#">多火工作室</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="whirl_box">
                        <img src="img/Group2.png" alt="#">
                        <div class="whirl_box_text">
                            <h4>南信大最炫千人城市夜跑活动</h4>
                            <p class="time"><img src="img/日历icon.svg" alt="">2016-11-22(二) 09:30~12:30</p>
                            <p class="place"><img src="img/地点icon.png" alt="#">明德楼门口</p>
                            <p class="sponsor"><img src="img/代办主办项目.svg" alt="#">多火工作室</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="whirl_box">
                        <img src="img/Group3.png" alt="#">
                        <div class="whirl_box_text">
                            <h4>南信大最炫千人城市夜跑活动</h4>
                            <p class="time"><img src="img/日历icon.svg" alt="">2016-11-22(二) 09:30~12:30</p>
                            <p class="place"><img src="img/地点icon.png" alt="#">明德楼门口</p>
                            <p class="sponsor"><img src="img/代办主办项目.svg" alt="#">多火工作室</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="whirl_box">
                        <img src="img/Group4.png" alt="#">
                        <div class="whirl_box_text">
                            <h4>南信大最炫千人城市夜跑活动</h4>
                            <p class="time"><img src="img/日历icon.svg" alt="">2016-11-22(二) 09:30~12:30</p>
                            <p class="place"><img src="img/地点icon.png" alt="#">明德楼门口</p>
                            <p class="sponsor"><img src="img/代办主办项目.svg" alt="#">多火工作室</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="whirl_box">
                        <img src="img/Group.png" alt="#">
                        <div class="whirl_box_text">
                            <h4>南信大最炫千人城市夜跑活动</h4>
                            <p class="time"><img src="img/日历icon.svg" alt="">2016-11-22(二) 09:30~12:30</p>
                            <p class="place"><img src="img/地点icon.png" alt="#">明德楼门口</p>
                            <p class="sponsor"><img src="img/代办主办项目.svg" alt="#">多火工作室</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="whirl_box">
                        <img src="img/Group2.png" alt="#">
                        <div class="whirl_box_text">
                            <h4>南信大最炫千人城市夜跑活动</h4>
                            <p class="time"><img src="img/日历icon.svg" alt="">2016-11-22(二) 09:30~12:30</p>
                            <p class="place"><img src="img/地点icon.png" alt="#">明德楼门口</p>
                            <p class="sponsor"><img src="img/代办主办项目.svg" alt="#">多火工作室</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="whirl_box">
                        <img src="img/Group3.png" alt="#">
                        <div class="whirl_box_text">
                            <h4>南信大最炫千人城市夜跑活动</h4>
                            <p class="time"><img src="img/日历icon.svg" alt="">2016-11-22(二) 09:30~12:30</p>
                            <p class="place"><img src="img/地点icon.png" alt="#">明德楼门口</p>
                            <p class="sponsor"><img src="img/代办主办项目.svg" alt="#">多火工作室</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="whirl_box">
                        <img src="img/Group4.png" alt="#">
                        <div class="whirl_box_text">
                            <h4>南信大最炫千人城市夜跑活动</h4>
                            <p class="time"><img src="img/日历icon.svg" alt="">2016-11-22(二) 09:30~12:30</p>
                            <p class="place"><img src="img/地点icon.png" alt="#">明德楼门口</p>
                            <p class="sponsor"><img src="img/代办主办项目.svg" alt="#">多火工作室</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="whirl_box">
                        <img src="img/Group.png" alt="#">
                        <div class="whirl_box_text">
                            <h4>南信大最炫千人城市夜跑活动</h4>
                            <p class="time"><img src="img/日历icon.svg" alt="">2016-11-22(二) 09:30~12:30</p>
                            <p class="place"><img src="img/地点icon.png" alt="#">明德楼门口</p>
                            <p class="sponsor"><img src="img/代办主办项目.svg" alt="#">多火工作室</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="whirl_box">
                        <img src="img/Group2.png" alt="#">
                        <div class="whirl_box_text">
                            <h4>南信大最炫千人城市夜跑活动</h4>
                            <p class="time"><img src="img/日历icon.svg" alt="">2016-11-22(二) 09:30~12:30</p>
                            <p class="place"><img src="img/地点icon.png" alt="#">明德楼门口</p>
                            <p class="sponsor"><img src="img/代办主办项目.svg" alt="#">多火工作室</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="whirl_box">
                        <img src="img/Group3.png" alt="#">
                        <div class="whirl_box_text">
                            <h4>南信大最炫千人城市夜跑活动</h4>
                            <p class="time"><img src="img/日历icon.svg" alt="">2016-11-22(二) 09:30~12:30</p>
                            <p class="place"><img src="img/地点icon.png" alt="#">明德楼门口</p>
                            <p class="sponsor"><img src="img/代办主办项目.svg" alt="#">多火工作室</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="whirl_box">
                        <img src="img/Group4.png" alt="#">
                        <div class="whirl_box_text">
                            <h4>南信大最炫千人城市夜跑活动</h4>
                            <p class="time"><img src="img/日历icon.svg" alt="">2016-11-22(二) 09:30~12:30</p>
                            <p class="place"><img src="img/地点icon.png" alt="#">明德楼门口</p>
                            <p class="sponsor"><img src="img/代办主办项目.svg" alt="#">多火工作室</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 专题精选 -->
        <div class="ctnt choiceness">
            <div class="ctnt_title">
                <p>专题精选</p>
                <a href="javascript:void(0);">更多专题</a>
                <div style="clear:both"></div>
            </div>
            <div class="choiceness_box">
                <div class="choiceness_box_left">
                    <img src="img/ctnt1.png" alt="javascript:void(0);">
                    <p class="ctnt_article_title">双十一除了购物还有什么</p>
                    <p class="ctnt_article_ctnt">光棍节，一个人？要如何过的优雅一些？<br> 面对某宝某东的购物广告你是选择在家剁手或者约上好友一起嗨皮
                        <br> 还是剁完手再去嗨皮？
                        <br>
                        <br> 不管你选择哪种方式过双11，推荐给你几个好玩的活动
                        <br> 让你不再孤单。
                        <br> </p>
                </div>
                <div class="choiceness_box_right">
                    <div class="article_box margin_right margin_bottom">
                        <img src="img/music.png" alt="javascript:void(0);">
                        <p class="ctnt_article_title">音乐是一种独特的艺术</p>
                        <p class="ctnt_article_ctnt">
                            当高涨的情绪得不到宣泄的时候，听听音乐，一切烦恼就烟消云散了，而生活又变得美妙起来。
                        </p>
                    </div>
                    <div class="article_box margin_bottom">
                        <img src="img/music.png" alt="javascript:void(0);">
                        <p class="ctnt_article_title">音乐是一种独特的艺术</p>
                        <p class="ctnt_article_ctnt">
                            当高涨的情绪得不到宣泄的时候，听听音乐，一切烦恼就烟消云散了，而生活又变得美妙起来。
                        </p>
                    </div>
                    <div class="article_box margin_right">
                        <img src="img/music.png" alt="javascript:void(0);">
                        <p class="ctnt_article_title">音乐是一种独特的艺术</p>
                        <p class="ctnt_article_ctnt">
                            当高涨的情绪得不到宣泄的时候，听听音乐，一切烦恼就烟消云散了，而生活又变得美妙起来。
                        </p>
                    </div>
                    <div class="article_box">
                        <img src="img/music.png" alt="javascript:void(0);">
                        <p class="ctnt_article_title">音乐是一种独特的艺术</p>
                        <p class="ctnt_article_ctnt">
                            当高涨的情绪得不到宣泄的时候，听听音乐，一切烦恼就烟消云散了，而生活又变得美妙起来。
                        </p>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
    </div>
    <!-- 活动分类 -->
    <div class="ctnt_box_2 actvt_classify_bg">
        <div class="ctnt">
            <h2 class="actvt_title">活动分类</h2>
            <div class="classification_url">
                <a href="javascript:void(0);">晚会典礼</a>
                <a href="javascript:void(0);">迎新招新</a>
                <a href="javascript:void(0);">讲座论坛</a>
                <a href="javascript:void(0);">社会实践</a>
                <a href="javascript:void(0);">体育竞技</a>
                <a href="javascript:void(0);">学术比赛</a>
                <a href="javascript:void(0);">创业营销</a>
                <a href="javascript:void(0);">演讲辩论</a>
                <a href="javascript:void(0);">歌舞赛事</a>
                <a href="javascript:void(0);" class="right_none">企业招聘</a>
            </div>
            <div class="actvt_classify_dtl">
                <div class="actvt_box">
                    <img src="img/1.png" alt="#">
                    <div class="actvt_box_text">
                        <p class="title">南信大SOS街舞社团第十届街舞汇演大赛</p>
                        <p class="time"><span class="time_icon"></span>2016-11-22(二) 09:30~12:30</p>
                        <div>
                            <p><span class="place_icon"></span>大活小剧场</p>
                            <p><span class="sponsor_icon"></span>SOS街舞社</p>
                        </div>
                    </div>
                </div>
                <div class="actvt_box">
                    <img src="img/2.png" alt="#">
                    <div class="actvt_box_text">
                        <p class="title">南信大SOS街舞社团第十届街舞汇演大赛</p>
                        <p class="time"><span class="time_icon"></span>2016-11-22(二) 09:30~12:30</p>
                        <div>
                            <p><span class="place_icon"></span>大活小剧场</p>
                            <p><span class="sponsor_icon"></span>SOS街舞社</p>
                        </div>
                    </div>
                </div>
                <div class="actvt_box right_none">
                    <img src="img/3.png" alt="#">
                    <div class="actvt_box_text">
                        <p class="title">南信大SOS街舞社团第十届街舞汇演大赛</p>
                        <p class="time"><span class="time_icon"></span>2016-11-22(二) 09:30~12:30</p>
                        <div>
                            <p><span class="place_icon"></span>大活小剧场</p>
                            <p><span class="sponsor_icon"></span>SOS街舞社</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="actvt_dtl">查看所有歌舞赛事活动</button>
        </div>
    </div>
    <!-- 活动主办方 -->
    <div class="ctnt_box_3">
        <div class="ctnt">
            <div class="ctnt_title">
                <p>活跃主办方</p>
                <a href="javascript:void(0);" style="    margin-top: 18px;">更多专题</a>
                <div style="clear:both"></div>
            </div>
            <div class="act_sponsor">
                <div class="sponsor_box">
                    <img src="img/多火logo.png" alt="">
                    <div class="text">
                        <p class="title">多火工作室</p>
                        <p>多火工作室成立于2009年，是一所互联网社团，多火工作室成立于2009年，是一所互联网社团</p>
                    </div>
                </div>
                <div class="sponsor_box">
                    <img src="img/多火logo.png" alt="">
                    <div class="text">
                        <p class="title">多火工作室</p>
                        <p>多火工作室成立于2009年，是一所互联网社团，多火工作室成立于2009年，是一所互联网社团</p>
                    </div>
                </div>
                <div class="sponsor_box right_none">
                    <img src="img/多火logo.png" alt="">
                    <div class="text">
                        <p class="title">多火工作室</p>
                        <p>多火工作室成立于2009年，是一所互联网社团，多火工作室成立于2009年，是一所互联网社团</p>
                    </div>
                </div>
                <div class="sponsor_box">
                    <img src="img/多火logo.png" alt="">
                    <div class="text">
                        <p class="title">多火工作室</p>
                        <p>多火工作室成立于2009年，是一所互联网社团，多火工作室成立于2009年，是一所互联网社团</p>
                    </div>
                </div>
                <div class="sponsor_box">
                    <img src="img/多火logo.png" alt="">
                    <div class="text">
                        <p class="title">多火工作室</p>
                        <p>多火工作室成立于2009年，是一所互联网社团，多火工作室成立于2009年，是一所互联网社团</p>
                    </div>
                </div>
                <div class="sponsor_box right_none">
                    <img src="img/多火logo.png" alt="">
                    <div class="text">
                        <p class="title">多火工作室</p>
                        <p>多火工作室成立于2009年，是一所互联网社团，多火工作室成立于2009年，是一所互联网社团</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection