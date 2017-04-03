// 活动详情页面
var shareTo = function() {


    this.top = window.screen.height;
    this.left = window.screen.width;
    // this.myurl=window.location;
    // this.title=document.title;
    // this.imgurl=document.querySelector("#activity-img").src;

    // 测试
    this.myurl = 'http://www.baidu.com';
    this.title = document.title;
    this.imgurl = 'http://f.hiphotos.baidu.com/image/pic/item/a8773912b31bb051e5ec6e89337adab44bede043.jpg';


}

shareTo.prototype.shareToQQ = function() { //分享到qq

    let top = this.top / 2 - 250,
        left = this.left / 2 - 400,
        width = 800,
        height = 500,
        _myurl = this.myurl,
        _title = this.title,
        _imgurl = this.imgurl;
    // alert("分享到qq\n地址:"+_myurl+"\n图片: "+_title+_imgurl);

    var _params_config = {
        url: _myurl,
        /*获取URL，可加上来自分享到QQ标识，方便统计*/
        desc: '',
        //title : '新玩法，再不来你就out了！', /*分享标题(可选)*/
        title: _title,
        summary: '',
        /*分享摘要(可选)*/
        pics: _imgurl,
        /*分享图片(可选)*/
        flash: '',
        /*视频地址(可选)*/
        site: _myurl,
        /*分享来源(可选) 如：QQ分享*/
        style: '201',
        // width : 32,
        // height : 32
    }
    var _params = [];
    for (i in _params_config) {
        _params.push(i + '=' + encodeURIComponent(_params_config[i] || ''))
    }
    var _url = "http://connect.qq.com/widget/shareqq/index.html?" + _params.join('&');
    window.open(_url, '分享至qq', 'height=500,width=800,top=' + top + ',left=' + left + ",toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no");
}
shareTo.prototype.shareToWeibo = function() { //分享到微博

    let top = this.top / 2 - 250,
        left = this.left / 2 - 400,
        width = 600,
        height = 500,
        _title = this.title,
        _rLink = this.url,
        _pic = this.imgurl;


    window.open("http://service.weibo.com/share/share.php?pic=" + encodeURIComponent(_pic) + "&title=" +
        encodeURIComponent(_title.replace(/ /g, " ").replace(/<br \/>/g, " ")) + "&url=" + encodeURIComponent(_rLink),
        "分享至新浪微博",
        "height=" + width + ",width=" + width + ",top=" + top + ",left=" + left + ",toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no");
}

shareTo.prototype.shareToWeixin = function() { //分享到微信
    // alert("分享到微信")
    toggleModalOpen();
}
shareTo.prototype.shareToGplus = function() { //分享到G+
    // alert("分享到G+")
    let shareUrl = 'https://plus.google.com/share?url=';
    let _url = this.myurl;
    console.log(_url)
    let top = this.top / 2 - 250,
        left = this.left / 2 - 400,
        width = 600,
        height = 500;
    window.open(shareUrl + encodeURIComponent(_url), '分享至g+', 'height=500,width=800,top=' + top + ',left=' + left + ",toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no");
}



var share = new shareTo();
// 绑定分享事件
document.querySelector("#share-to-qq").addEventListener('click', function() {
    share.shareToQQ();
})
document.querySelector("#share-to-weibo").addEventListener('click', function() {
    share.shareToWeibo();
})
document.querySelector("#share-to-wx").addEventListener('click', function() {
    share.shareToWeixin();
})
document.querySelector("#share-to-gplus").addEventListener('click', function() {
    share.shareToGplus();
})


// 切换显隐
function toggleShow(obj) {
    obj.style.display = "block";
}

function toggleHidden(obj) {
    obj.style.display = "none";
}

//打开报名表
document.querySelector("#sign-up").addEventListener('click', function() {
        let signupForm = document.querySelector(".signup-form");
        toggleShow(signupForm);
    })
    //取消报名
document.querySelector("#reset-form-btn").addEventListener('click', function() {
    let signupForm = document.querySelector(".signup-form");
    toggleHidden(signupForm);
})
var toggleModalClose = function(e) {
    e.stopPropagation();
    var modal = document.querySelector("#modal");
    var modalwindow = document.querySelector(".modal-window")
    modal.style.opacity = 0;
    modalwindow.style.opacity = 0;
    // modal.style['z-index']=-1;
    setTimeout(function() {
        toggleHidden(modal);
        toggleHidden(modalwindow);
    }, 300);
}
var wx_qrcode = new QRCode(document.getElementById("wx-qrcode"), { //创建二维码
    text: "分享到微信",
    width: 300,
    height: 300,
});
var toggleModalOpen = function() { //开启modal
    var url = window.location;
    // doc
    wx_qrcode.makeCode("http://www.baidu.com");
    // wx_qrcode.makeCode(url);

    var modal = document.querySelector("#modal");
    var modalwindow = document.querySelector(".modal-window")
    modal.style.opacity = 1;
    modalwindow.style.opacity = 1;
    // modal.style['z-index']=-1;
    setTimeout(function() {
        toggleShow(modal);
        toggleShow(modalwindow);
    }, 300);
    // console.log(qrcode);
}
document.querySelector("#modal").addEventListener('click', toggleModalClose)

document.querySelector("#modal-close").addEventListener('click', toggleModalClose)