@extends('layouts.app')
@section('content')
    <?php
        $this->title = '活动列表';
    ?>
    <link href="{{ asset('css/actvt_sort.css') }}" rel="stylesheet">
<div id="banner"></div>
<article>
    <div>
        <!-- 选定为蓝色，未选定为白色 -->
        <div class="activity_tab">
            <a href="#!" class="tap btn-blue">晚会典礼</a>
            <a href="#!" class="tap btn-white">迎新招新</a>
            <a href="#!" class="tap btn-white">讲座论坛</a>
            <a href="#!" class="tap btn-white">社会实践</a>
            <a href="#!" class="tap btn-white">体育竞技</a>
            <a href="#!" class="tap btn-white">学术比赛</a>
            <a href="#!" class="tap btn-white">演讲辩论</a>
            <a href="#!" class="tap btn-white">歌舞赛事</a>
            <a href="#!" class="tap btn-white">企业招聘</a>
            <a href="#!" class="tap btn-white">创业营销</a>
        </div>
        <div class="new_activity section-release section section-release">
            <ul>
                <li>
                    <img src="img/Group.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group2.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group3.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group4.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group2.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group3.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group4.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group2.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group3.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group4.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="hot_activity section">
            <ul>
                <li>
                    <img src="img/Group.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动2</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group2.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group3.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group4.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group2.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group3.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group4.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group2.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group3.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
                <li>
                    <img src="img/Group4.png">
                    <div  class="text_containner">
                        <p><a href="#">南信大最炫千人城市夜跑活动</a></p>
                        <p><embed src="img/日历icon.svg" width="20px" height="20px" type="image/svg+xml">2016-11-22(二)09:30-12:30</p>
                        <p>
                            <span><img src="img/地点icon.png">明德楼门口</span>
                            <span><embed src="img/代办主办项目.svg" width="20px" height="20px" type="image/svg+xml">多火工作室</span>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="nav-wrapper">
            <div>
                <a id="before" href="#"><</a>
                <a href="#">1</a>
                <a href="#">2</a>
                <a id="after" href="#">></a>
            </div>
        </div>
    </div>
</article>
@endsection