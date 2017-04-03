@extends('layouts.app')
@section('content')
    <?php
    $this->title = '个人中心';
    ?>
    <link href="{{ asset('css/me.css') }}" rel="stylesheet">
    <div class="my-container">
        <div class="my-head">
            <!--<embed src="img/上背板.svg" class="my-background">-->
            <div class="my-info">

                <img src="img/mylogo.png" alt="头像" class="avatar">


                <p class="my-id">Jemmaaaaaaa</p>
                <p class="my-autograph">Where do we go now?</p>
                <button class="set-myinfo">账户资料设置</button>
            </div>
            <div class="my-tabbar">
                <div class="tab tab-active">
                    <p class="tab-title ">我发布的活动 <span id="release-act-num">8</span></p>

                </div>
                <div class="tab" >
                    <p class="tab-title">我参与的活动 <span id="join-act-num">0</span></p>

                </div>
                <div class="tab" >
                    <p class="tab-title">我收藏的活动 <span id="favoritee-act-num">0</span></p>

                </div>
                <div class="tab">
                    <p class="tab-title">我的主办方</p>

                </div>
            </div>
        </div>
        <div class="my-body">
            <section class="section-release section  section-active">
                <div class="activity-item">
                    <a href="#!" class="top-img">
                        <img src="img/Group.png" alt="huodong">
                    </a>
                    <div class="bottom-info">
                        <a href="#!" class="info-title">南信大最炫千人城市夜跑活动</a>
                        <div class="info-msg">

                            <p> <img src="img/calendaricon.svg" />2016-11-22(二) 09:30~12:30</p>

                        </div>
                        <div class="info-msg">

                            <p><img src="img/addressicon.svg" />明德楼门口</p>

                        </div>
                        <div class="info-msg">

                            <p><img src="img/sponsoricon.svg" />多火工作室</p>
                        </div>
                    </div>
                </div>
                <div class="activity-item">
                    <a href="#!" class="top-img">
                        <img src="img/Group2.png" alt="huodong">
                    </a>
                    <div class="bottom-info">
                        <a href="#!" class="info-title">南信大最炫千人城市夜跑活动</a>
                        <div class="info-msg">

                            <p> <img src="img/calendaricon.svg" />2016-11-22(二) 09:30~12:30</p>

                        </div>
                        <div class="info-msg">

                            <p> <img src="img/addressicon.svg" />明德楼门口</p>

                        </div>
                        <div class="info-msg">

                            <p><img src="img/sponsoricon.svg" />多火工作室</p>
                        </div>
                    </div>
                </div>
                <div class="activity-item">
                    <a href="#!" class="top-img">
                        <img src="img/Group3.png" alt="huodong">
                    </a>
                    <div class="bottom-info">
                        <a href="#!" class="info-title">南信大最炫千人城市夜跑活动</a>
                        <div class="info-msg">

                            <p> <img src="img/calendaricon.svg" />2016-11-22(二) 09:30~12:30</p>

                        </div>
                        <div class="info-msg">

                            <p> <img src="img/addressicon.svg" />明德楼门口</p>

                        </div>
                        <div class="info-msg">

                            <p><img src="img/sponsoricon.svg" />多火工作室</p>
                        </div>
                    </div>
                </div>
                <div class="activity-item">
                    <a href="#!" class="top-img">
                        <img src="img/Group4.png" alt="huodong">
                    </a>
                    <div class="bottom-info">
                        <a href="#!" class="info-title">南信大最炫千人城市夜跑活动</a>
                        <div class="info-msg">

                            <p> <img src="img/calendaricon.svg" />2016-11-22(二) 09:30~12:30</p>

                        </div>
                        <div class="info-msg">

                            <p> <img src="img/addressicon.svg" />明德楼门口</p>

                        </div>
                        <div class="info-msg">

                            <p><img src="img/sponsoricon.svg" />多火工作室</p>
                        </div>
                    </div>
                </div>
                <div class="activity-item">
                    <a href="#!" class="top-img">
                        <img src="img/Group.png" alt="huodong">
                    </a>
                    <div class="bottom-info">
                        <a href="#!" class="info-title">南信大最炫千人城市夜跑活动</a>
                        <div class="info-msg">

                            <p> <img src="img/calendaricon.svg" />2016-11-22(二) 09:30~12:30</p>

                        </div>
                        <div class="info-msg">

                            <p><img src="img/addressicon.svg" />明德楼门口</p>

                        </div>
                        <div class="info-msg">

                            <p><img src="img/sponsoricon.svg" />多火工作室</p>
                        </div>
                    </div>
                </div>
                <div class="activity-item">
                    <a href="#!" class="top-img">
                        <img src="img/Group2.png" alt="huodong">
                    </a>
                    <div class="bottom-info">
                        <a href="#!" class="info-title">南信大最炫千人城市夜跑活动</a>
                        <div class="info-msg">

                            <p> <img src="img/calendaricon.svg" />2016-11-22(二) 09:30~12:30</p>

                        </div>
                        <div class="info-msg">

                            <p> <img src="img/addressicon.svg" />明德楼门口</p>

                        </div>
                        <div class="info-msg">

                            <p><img src="img/sponsoricon.svg" />多火工作室</p>
                        </div>
                    </div>
                </div>
                <div class="activity-item">
                    <a href="#!" class="top-img">
                        <img src="img/Group3.png" alt="huodong">
                    </a>
                    <div class="bottom-info">
                        <a href="#!" class="info-title">南信大最炫千人城市夜跑活动</a>
                        <div class="info-msg">

                            <p> <img src="img/calendaricon.svg" />2016-11-22(二) 09:30~12:30</p>

                        </div>
                        <div class="info-msg">

                            <p> <img src="img/addressicon.svg" />明德楼门口</p>

                        </div>
                        <div class="info-msg">

                            <p><img src="img/sponsoricon.svg" />多火工作室</p>
                        </div>
                    </div>
                </div>
                <div class="activity-item">
                    <a href="#!" class="top-img">
                        <img src="img/Group4.png" alt="huodong">
                    </a>
                    <div class="bottom-info">
                        <a href="#!" class="info-title">南信大最炫千人城市夜跑活动</a>
                        <div class="info-msg">

                            <p> <img src="img/calendaricon.svg" />2016-11-22(二) 09:30~12:30</p>

                        </div>
                        <div class="info-msg">

                            <p> <img src="img/addressicon.svg" />明德楼门口</p>

                        </div>
                        <div class="info-msg">

                            <p><img src="img/sponsoricon.svg" />多火工作室</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section">2222</section>
            <section class="section">3333</section>
            <section class="section-my-sponsor section">
                <div>
                    <div class="add-sponsor">
                        <button class="add-btn btn-blue" id="add-sponsor-btn">添加主办方</button>
                        <p class="add-tip">温馨提醒：您可以添加多个主办方资料。什么是主办方？1. 主办活动的组织、团体或机构；您应该是其工作人员或拥有主办方活动冠名授权。 2. 主办方信息核实后才会显示在活动主页；对于没有添加主办方的活动将视为个人活动，仅在活动主页显示您的昵称。</p>
                    </div>
                    <div class="add-sponsor-form">
                        <form enctype="multipart/form-data" method="post">
                            <div class="form-main">
                                <div class="upload-sponsor-logo">
                                    <label>主办方图标</label>
                                    <div class="noimg-logo">
                                        <p>LOGO</p>
                                        <p>300*300px</p>
                                    </div>
                                    <div class="btn-wrap">
                                        <div class="btn-blue upload-btn">
                                            <input type="file" value="上传图片">
                                        </div>

                                        <div class="tips">
                                            <p>温馨提示：<br>图片小于2M (jpg、gif、png、bmp)推荐尺寸 360*360 px的图片！
                                            </p>
                                        </div>
                                    </div>

                                </div>

                                <div class="upload-stucard">
                                    <label>联系人一卡通<br>上传认证</label>
                                    <div class="noimg-card">
                                        <p>ECARD</p>
                                    </div>
                                    <div class="btnwrap">
                                        <div class="btn-blue upload-btn">
                                            <input type="file" value="上传图片">
                                        </div>
                                    </div>

                                </div>


                                <div class="input-wrap">
                                    <label for="sponsor-name">主办方名称</label>
                                    <input type="text" id="sponsor-name" placeholder="低于30个字">
                                </div>
                                <div class="input-wrap">
                                    <label for="sponsor-email">联系邮箱</label>
                                    <input type="email" id="sponsor-email">
                                </div>


                                <div class="input-wrap">
                                    <label for="contact-name">联系人姓名</label>
                                    <input type="text" id="contact-name">
                                </div>
                                <div class="input-wrap">
                                    <label for="contact-info">联系人专业年级</label>
                                    <input type="text" id="contact-info">
                                </div>


                                <div class="input-wrap">
                                    <label for="phonenumber">联系电话</label>
                                    <input type="text" id="phonenumber">
                                </div>
                                <div class="input-wrap">
                                    <label for="contact-stuid">联系人学号</label>
                                    <input type="text" id="contact-stuid">
                                </div>


                                <div class="input-wrap sponsor-intro">
                                    <label for="sponsor-intro">主办方简介</label>

                                    <textarea  id="sponsor-intro"></textarea>
                                </div>


                                <div class="input-wrap sponsor-website-wrap">
                                    <div class="label-wrap">
                                        <label for="sponsor-website">主办方官网网址</label>
                                        <span>(可不填)</span>
                                    </div>

                                    <input type="text" id="sponsor-website">
                                </div>
                                <div class="form-btns">
                                    <button class="btn-blue" type="submit">确认提交审核</button>
                                    <button class="btn-white" type="reset" id="cancle-addsponsor">取消</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <ul class="my-sponsors">
                        <li class="my-sponsor">
                            <div class="logo">
                                <img src="img/多火logo.png" alt="duohuo">
                            </div>
                            <p class="my-sponsor-name">多火工作室</p>
                            <p class="my-sponsor-num"><a class="sponsor-num">4888</a>人关注</p>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <script src="{{ asset('js/me.js') }}"></script>
@endsection