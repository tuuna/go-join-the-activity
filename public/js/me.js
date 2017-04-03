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

$(function(){
    changeTab();
})