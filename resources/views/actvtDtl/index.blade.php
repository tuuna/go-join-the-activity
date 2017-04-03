@extends('layouts.app')
@section('content')
    <?php
        $this->title = '详情';
    ?>
    <link href="{{ asset('css/actvt_dtl.css') }}" rel="stylesheet">
    <div class="activityDetail-main">
        <div class="activity-top">
            <div class="activity-img">
                <img src="img/活动详情页.png" alt="活动详情" id="activity-img">
            </div>
            <div class="activity-signup">
                <p class="signup-title">11.11百人搏击炫舞趴SingleDanceParty</p>
                <p class="signup-p signup-time"><embed src="img/sponsoricon.svg" />2016年11月11日 20:00 ～ 2016年11月12日 0:00</p>
                <p class="signup-p signup-address"><embed src="img/sponsoricon.svg" />大学生活动中心小剧场</p>
                <p class="signup-p signup-number"><embed src="img/sponsoricon.svg" />100人</p>
                <p class="signup-p signup-sponsor"><embed src="img/sponsoricon.svg" />多火工作室主办</p>
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
                        移动互联网、大数据时代的来临，在此浪潮中，企业如何找到最适合自己的平台运营之路？<br>
                        如何通过线上、线下的组合拳，让团队在早期发展阶段拥有全面完胜的市场营销战略？<br>
                        如何通过大数据、精准营销等能力的结合与开放，实现数据流量与创新业务的有机整合，实现内容经营，达到数据流量的价值变现？<br>
                        华为企业云携Opark创业中国、赛富互联网金融孵化器以此为主题，为您提供一个交流平台，通过邀请一系列的嘉宾分享，大量案例实操讨论，汇聚各行业人士，为您扫除盲点，带来一场走心交流。
                    </p>
                </dd>
            </dl>
            <dl class="activity-kinds">
                <dt>活动嘉宾</dt>
                <dd class="activity-kinds-content">
                    <p>
                        响站嘉宾：上海突唯阿信息科技有限公司CMO，百老汇国际艺术中心 副总裁，SMG上海文广集团 项目策划。<br>
                        专注于全球领先的响应式网站可视化建设平台的开发和运营，旨在为用户提供快速、低成本的网站建设解决方案，帮助用户通过互联网创造财富。<br>
                        华为企业云嘉宾：华为大数据服务建设平台与精准营销专家，参与多项企业级大数据项目解决方案规划，在深化大数据行业落地有诸多实战经验和独到见解心得。<br>
                        璧合科技嘉宾：璧合科技开放平台总监，精准营销专家，长期致力于研究广告策略如何影响消费者，如何精准定位，给到有效营销活动。以效果为要求的营销目的逐渐增强。做到让广告投放行之有效，有效提升ROI，打破无法衡量的营销时代活动。
                    </p>
                </dd>
            </dl>
            <dl class="activity-kinds">
                <dt>活动议程</dt>
                <dd class="activity-kinds-content">
                    <!--table-->
                    <table class="activity-table">
                        <tbody>
                        <tr>
                            <th>时间</th>
                            <th>内容</th>
                            <th>演讲人</th>
                        </tr>
                        <tr>
                            <td>14:00-14:30</td>
                            <td>签到</td>
                            <td>主持人</td>
                        </tr>
                        <tr>
                            <td>14:30-15:30</td>
                            <td>如何实现全平台运营</td>
                            <td>响站嘉宾</td>
                        </tr>
                        <tr>
                            <td>15:30-16:00</td>
                            <td>茶歇</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>16:00-16:30</td>
                            <td>让数据慧说话</td>
                            <td>华为企业云嘉宾</td>
                        </tr>
                        <tr>
                            <td>16:30-17:00</td>
                            <td>无效果不营销</td>
                            <td>璧合科技嘉宾</td>
                        </tr>
                        <tr>
                            <td>17:00-17:30</td>
                            <td>互动交流抽奖</td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
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
                                歌舞比赛
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