@extends('layouts.app')
@section('content')
    <?php
    $this->title = '主办方列表';
    ?>
    <link href="{{ asset('css/sponsor_list.css') }}" rel="stylesheet">
<div class="jianbian"></div>

<div class="container">
    <ul class="list">
        @foreach($sponsorLists as $list)
        <li>
            <img src="{{ asset('upload/sponsorUpload/'.$list['sponsor_icon']) }}" class="logo" alt="主办方图标" />
            <a href="{{ url('sponsorinfo/'.$list['id']) }}">{{ $list['sponsor_name'] }}</a>
            <span>{{ $list['follow_count'] }}人关注</span>
            @if(Auth::check())
                <sponsor-follow-button sponsor="{{ $list['id'] }}"></sponsor-follow-button>
            @else
            @endif
        </li>
        @endforeach
    </ul>
</div>
@endsection