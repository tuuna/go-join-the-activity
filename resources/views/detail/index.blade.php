<label>活动号图标</label>
<img src="{{ asset('upload/sponsorUpload/'.$detail->sponsor_icon)  }}">
<br>
<label>一卡通</label>
<img src="{{ asset('upload/sponsorUpload/'.$detail->e_card) }}">
<br>
<label>活动号名</label>
<p>{{ $detail->sponsor_name }}</p>
<br>
<label>联系人</label>
<p>{{ $detail->contact_name }}</p>
<br>
<label>联系人邮箱</label>
<p>{{ $detail->contact_email }}</p>
<br>
<label>专业班级</label>
<p>{{ $detail->project_class }}</p>
<br>
<label>联系电话</label>
<p>{{ $detail->contact_number }}</p>
<br>
<label>联系人学号</label>
<p>{{ $detail->contact_number }}</p>
<br>
<label>活动号描述</label>
<p>{{ $detail->description }}</p>
<br>
