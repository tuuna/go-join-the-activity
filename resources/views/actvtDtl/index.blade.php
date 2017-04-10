@extends('layouts.app')
@section('content')
    <?php
        $this->title = '详情';
    ?>
    <link href="{{ asset('css/actvt_dtl.css') }}" rel="stylesheet">
    <div class="activityDetail-main">
        <div class="activity-top">
            <div class="activity-img">
                <img src="{{ asset('upload/'.$pic) }}" alt="活动详情" id="activity-img">
            </div>
            <div class="activity-signup">
                <p class="signup-title">{{ $activityDetail->title }}</p>
                <p class="signup-p signup-time"><embed src="img/sponsoricon.svg" />{{ $activityDetail['hold_time'] }}</p>
                <p class="signup-p signup-address"><embed src="img/sponsoricon.svg" />{{ $activityDetail['hold_address'] }}</p>
                <p class="signup-p signup-number"><embed src="img/sponsoricon.svg" />{{ $activityDetail['contain_count'] }}人</p>
                <p class="signup-p signup-sponsor"><embed src="img/sponsoricon.svg" />{{ $activityDetail['mainSponsor']['sponsor_name'] }}主办</p>
                <button class="btn-blue" id="sign-up">我要报名</button>
                <button class="btn-white" id="favorite">收藏</button>
            </div>
        </div>
        <div class="signup-form">
            <h1 class="form-title">报名表单</h1>
            <form action="">
                <div class="form-content">
                    <div class="input-wrap">
                        <label for="user-name">姓名</label>
                        <input type="text" id="user-name">
                    </div>
                    <div class="input-wrap">
                        <label for="user-phone">手机号</label>
                        <input type="text" id="user-phone">
                    </div>
                    <div class="input-wrap">
                        <label for="user-email">邮箱</label>
                        <input type="email" id="user-email">
                    </div>
                    <div class="input-wrap">
                        <label for="user-stunumber">学号</label>
                        <input type="text" id="user-stunumber">
                    </div>
                </div>
                <div class="form-btns">
                    <button class="form-btn btn-blue" type="submit" id="submit-form-btn">确认提交</button>
                    <button class="form-btn btn-white" type="reset" id="reset-form-btn">取消</button>
                </div>
            </form>

        </div>
        <div class="activity-main">
            <dl class="activity-kinds">
                <dt>活动背景</dt>
                <dd class="activity-kinds-content">
                    <p>
                       {{ $activityDetail['activity_background'] }}
                    </p>
                </dd>
            </dl>
            <dl class="activity-kinds">
                <dt>活动嘉宾</dt>
                <dd class="activity-kinds-content">
                    <p>
                        {{ $activityDetail['guest_intro'] }}
                    </p>
                </dd>
            </dl>
            <dl class="activity-kinds">
                <dt>活动议程</dt>
                <dd class="activity-kinds-content">
                    <!--table-->
                    <p>
                        {{ $activityDetail['activity_agenda'] }}
                    </p>
                </dd>
            </dl>
            <dl class="activity-kinds">
                <dt>活动主办方</dt>
                <dd class="activity-kinds-content">
                    多火工作室、36kr、Opark创业中国
                </dd>
                <ul class="activity-sponsors">
                    <li>
                        <a href="#!">
                            <img src="img/多火logo.png" alt="多火工作室"/>
                            <span>多火工作室</span>
                        </a>
                    </li>
                    <li>
                        <a href="#!">
                            <img src="img/多火logo.png" alt="多火工作室"/>
                            <span>多火工作室</span>
                        </a>
                    </li>
                    <li>
                        <a href="#!">
                            <img src="img/多火logo.png" alt="多火工作室"/>
                            <span>多火工作室</span>
                        </a>
                    </li>
                </ul>
            </dl>
            <dl class="activity-kinds">
                <dt>活动标签</dt>
                <dd class="activity-kinds-content">
                    <ul class="activity-tags">
                        <li><a href="#!" class="acticity-tag-btn">创业</a></li>
                        <li><a href="#!" class="acticity-tag-btn">互联网</a></li>
                        <li><a href="#!" class="acticity-tag-btn">科技</a></li>
                    </ul>



                </dd>



            </dl>
            <dl class="activity-kinds">
                <dt>活动分类</dt>
                <dd class="activity-kinds-content">
                    <ul class="activity-kind-btn-wrap">
                        <li>
                            <a href="#!" class="activity-kind-btn">
                                {{  }}
                            </a>
                        </li>
                    </ul>

                </dd>
            </dl>
        </div>
        <div class="activity-share">
            <ul>
                <li>
                    <a href="javascript:void(0)" class="share-btn share-to-wx" id="share-to-wx">分享到微信</a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="share-btn share-to-qq" id="share-to-qq">分享到QQ</a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="share-btn share-to-weibo" id="share-to-weibo">分享到微博</a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="share-btn share-to-gplus" id="share-to-gplus">分享到G+</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="modal" id="modal">
    </div>
    <div class="modal-window">
        <div class="modal-title">
            <h1>扫描二维码分享到微信</h1>
            <a href="javascript:void(0)" id="modal-close">x</a>
        </div>
        <div class="modal-content">
            <div class="wx-qrcode" id="wx-qrcode">
            </div>
        </div>
    </div>
    <script src="{{ asset('js/actvt_dtl.js') }}"></script>
@endsection
