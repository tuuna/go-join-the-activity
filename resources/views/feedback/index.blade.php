@extends('layouts.app')
@section('content')
    <?php
    $this->title = '网站反馈';
    ?>
    <link href="{{ asset('css/feedback.css') }}" rel="stylesheet">
    <div class="container_lg banner"></div>
    <div class="container-default feedback_form">
        <p class="title">反馈意见</p>
        <div class="form_group">
            <label for="feedbackemail">邮箱</label>
            <input type="email">
        </div>
        <div class="form_group left_margin">
            <label for="feedbackname">姓名</label>
            <input type="text">
        </div>
        <div class="form_group_lg">
            <label for="feedbackcontent">反馈意见</label>
            <textarea name="" cols="30" rows="10"></textarea>
        </div>
        <button class="btn-blue submit_feedback">提交反馈</button>
    </div>
@endsection
