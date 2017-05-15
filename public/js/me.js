var tab_btns=document.querySelectorAll(".tab");
var tab_sections=document.querySelectorAll('.section')
var showSection=function(){
  for(var i=0;i<tab_btns.length;i++){
      if(tab_btns[i]===this){
          let $tab=$(tab_btns[i]);
          let $section=$(tab_sections[i]);
          $tab.addClass('tab-active');
          $section.addClass('section-active');
      }else{
          let $tab=$(tab_btns[i]);
          let $section=$(tab_sections[i]);
          $tab.removeClass('tab-active');
          $section.removeClass('section-active');
      }
  }
}

function changeTab(){
    for(var i=0;i<tab_btns.length;i++){
        tab_btns[i].addEventListener('click',showSection)
    }
}
function toggleShow(obj){
    obj.style.display="block";
}
function toggleHidden(obj){
    obj.style.display="none";
}
document.querySelector("#add-sponsor-btn").onclick=function(){
    toggleShow(document.querySelector('.add-sponsor-form'));
}
document.querySelector("#cancle-addsponsor").onclick=function(){
    toggleHidden(document.querySelector('.add-sponsor-form'));
}

changeTab();


var H_setInfo = {};
H_setInfo.openSetting = function(){
  $('.set-myinfo').click(function(){
    $('.setting').show();
    $('.setting-bg').show();
  });
};
H_setInfo.closeSetting = function(){
  $('.close-login').click(function(){
    $('.setting').hide();
    $('.setting-bg').hide();
  });
};
H_setInfo.settingForm = function () {
  $("#setting-submit").on('click',function(){
    alert("修改成功");
    setTimeout(function(){
      $('.setting').hide();
      $('.setting-bg').hide();
    },2000);
  });
};
H_setInfo.run = function () {
        this.closeSetting();
        this.openSetting();
        this.settingForm();
};
H_setInfo.run();