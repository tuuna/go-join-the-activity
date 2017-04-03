@extends('layouts.app')
@section('content')
    <?php
    $this->title = '无结果';
    ?>
    <link href="{{ asset('css/checkNoInfo.css') }}" rel="stylesheet">
<article>
    <div>
        <p>信大活动找到相关结果0个</p>
        <div>
            <div class="tip">
                <div>!</div>
                <p>找不到活动，请尝试修改搜索关键字</p>
            </div>
        </div>
    </div>
</article>
@endsection