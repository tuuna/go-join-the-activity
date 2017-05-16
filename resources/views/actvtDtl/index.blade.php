@extends('layouts.detail')
@section('content')
    <?php
        $this->title = '详情';
    ?>
    <link href="{{ asset('css/actvt_dtl.css') }}" rel="stylesheet">
    @if (session()->has('flash_notification.message'))
        <div class="alert alert-{{ session('flash_notification.level') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

            <center>{!! session('flash_notification.message') !!}</center>
        </div>
    @endif
    <div class="activityDetail-main">
        <div class="activity-top">
            <div class="activity-img">
                <img src="{{ asset('upload/'.$activityDetail['pic']) }}" alt="活动详情" style="width: 580px; height: 320px;" id="activity-img">
            </div>
            <div class="activity-signup">
                <p class="signup-title">{{ $activityDetail['title'] }}</p>
                <p class="signup-p signup-time"><embed src="{{ asset('img/sponsoricon.svg') }}" />{{ $activityDetail['hold_time'] }}</p>
                <p class="signup-p signup-address"><embed src="{{ asset('img/sponsoricon.svg') }}" />{{ $activityDetail['hold_address'] }}</p>
                <p class="signup-p signup-number"><embed src="{{ asset('img/sponsoricon.svg') }}" />{{ $activityDetail['contain_count'] }}人</p>
                <p class="signup-p signup-sponsor"><embed src="{{ asset('img/sponsoricon.svg') }}" />{{ $activityDetail['main_sponsor']['sponsor_name'] }}主办</p>
                <button class="btn-blue" id="sign-up">我要报名</button>
                <div id="app" style="float: left;">
                    <activity-follow-button activity="{{ $activityDetail['id'] }}"></activity-follow-button>
                </div>

            </div>
        </div>
        <div class="signup-form">
            <h1 class="form-title">报名表单</h1>
            <form action="{{ url('/activity/apply/'.$activityDetail['id']) }}" method="post">
                {{ csrf_field() }}
                <div class="form-content">
                    <div class="input-wrap">
                        <label for="user-name">姓名</label>
                        <input type="text" id="user-name" name="name">
                    </div>
                    <div class="input-wrap">
                        <label for="user-phone">手机号</label>
                        <input type="text" id="user-phone" name="phone_number">
                    </div>
                    <div class="input-wrap">
                        <label for="user-email">邮箱</label>
                        <input type="email" id="user-email" name="email">
                    </div>
                    <div class="input-wrap">
                        <label for="user-stunumber">学号</label>
                        <input type="text" id="user-stunumber" name="student_number">
                    </div>
                    <input type="hidden" value="{{ $activityDetail['main_sponsor']['id'] }}" name="sponsor_id">
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
                       {!! $activityDetail['activity_background'] !!}
                    </p>
                </dd>
            </dl>
            <dl class="activity-kinds">
                <dt>活动嘉宾</dt>
                <dd class="activity-kinds-content">
                    <p>
                        {!! $activityDetail['guest_intro'] !!}
                    </p>
                </dd>
            </dl>
            <dl class="activity-kinds">
                <dt>活动议程</dt>
                <dd class="activity-kinds-content">
                    <!--table-->
                    <p>
                        {!! $activityDetail['activity_agenda'] !!}
                    </p>
                </dd>
            </dl>
            <dl class="activity-kinds">
                <dt>活动主办方</dt>
                <dd class="activity-kinds-content">
                    {{ $activityDetail['main_sponsor']['sponsor_name'] }}
                    @if($activityDetail['other_sponsor_name'][0] != null)
                        @foreach($activityDetail['other_sponsor_name'] as $detail)
                            、{{ $detail['sponsor_name'] }}
                        @endforeach
                    @else
                    @endif
                </dd>
                <ul class="activity-sponsors">
                    <li>
                        <a href="{{ url('sponsorinfo/'.$activityDetail['main_sponsor']['id']) }}">
                            <img src="{{ asset('upload/sponsorUpload/'.$activityDetail['main_sponsor']['sponsor_icon']) }}" alt="{{ $activityDetail['main_sponsor']['sponsor_name'] }}"/>
                            <span>{{ $activityDetail['main_sponsor']['sponsor_name'] }}</span>
                        </a>
                    </li>
                    @if($activityDetail['other_sponsor_name'][0] != null)
                        @foreach($activityDetail['other_sponsor_name'] as $detail)
                            <li>
                                <a href="{{ url('sponsorinfo/'.$detail['id']) }}">
                                    <img src="{{ asset('upload/sponsorUpload/'.$detail['sponsor_icon']) }}" alt="{{ $detail['sponsor_name'] }}"/>
                                    <span>{{ $detail['sponsor_name'] }}</span>
                                </a>
                            </li>
                        @endforeach
                    @else
                    @endif
                </ul>
            </dl>
            <dl class="activity-kinds">
                <dt>活动标签</dt>
                <dd class="activity-kinds-content">
                    <ul class="activity-tags">
                        @if($activityDetail['tags'][0] == null)
                            <p>暂无标签</p>
                        @else
                            @foreach($activityDetail['tags'] as $tag)
                            <li><a href="#" class="acticity-tag-btn">{{ $tag }}</a></li>
                            @endforeach
                        @endif
                    </ul>



                </dd>



            </dl>
            <dl class="activity-kinds">
                <dt>活动分类</dt>
                <dd class="activity-kinds-content">
                    <ul class="activity-kind-btn-wrap">
                        <li>
                            <a href="#!" class="activity-kind-btn">
                                {{ $activityDetail['category']['title'] }}
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
