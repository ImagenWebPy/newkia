$(document).ready(function(){if($(".keyVisualWrap").length){pipInit();
if($(".vehicles-onScreen").length){vehiclesScrollMotionInit()
}}if($(".pip_gallery").length){galleryInit()
}if($(".pip_spec").length){specInit()
}if($(".business").length){businessInit()
}if($(".accessory").length){accInit()
}if($(".review").length){reviewInit()
}});
var lastWindowHeight=800,lastWindowWidth=800;
var pipInit=function(){var r=1,j,c=0,i=$(".indicator_inner > ul > li").length,a=0.5,t=140,n=false,s=[],q,e=false;
window.onload=function(k){p()
};
function p(){if($(".keyVisualWrap").length){keyVisualSet()
}template01Set();
template02Set();
template03Set();
template04Set();
template05Set();
template06Set();
template07Set();
template08Set();
template09Set();
template10Set();
g();
m()
}b();
f();
snsShareSet();
function b(){$(".indicator").css({position:"fixed",right:"-250px"});
g();
if(IE_VER<10&&IE_VER!==false){if(typeof textShadowForMSIE!==undefined){textShadowForMSIE({sel:".shadowBlack",shadow:"0 0 5px  rgb(0, 0, 0)"});
textShadowForMSIE({sel:".shadowWhite",shadow:"0 0 5px  rgb(255, 255, 255)"})
}}}function g(){document.body.style.overflow="hidden";
q=$(window).width();
var k=$(window).height();
document.body.style.overflow="";
clearTimeout($.data(this,"resizeTimer"));
$.data(this,"resizeTimer",setTimeout(function(){s.length=0;
s=[0];
var u=$("h3").filter(function(){return $(this).closest(".keyVisualWrap").length===0
}).closest("div[class*='pip']");
u.each(function(v){s.push($(this).position().top)
})
},250))
}function m(){if(IE_VER<9&&IE_VER!==false){a=0;
$(".indicator .indicatorTxt").each(function(k,u){if(c==k){TweenMax.to($(this),a,{width:t,delay:k*0.2})
}else{TweenMax.to($(this),a,{width:1,delay:k*0.2})
}});
TweenMax.to($(".indicator"),0,{right:10,delay:1,onComplete:function(){$(window).scroll()
}});
n=true
}else{$(window).scroll();
TweenMax.to($(".indicator"),0.8,{right:10,delay:1,ease:"easeOutExpo"});
setTimeout(function(){$(".indicator .indicatorTxt").each(function(k,u){if(c==k){TweenMax.to($(this),a,{width:t,delay:k*0.2,onComplete:l})
}else{TweenMax.to($(this),a,{width:1,delay:k*0.2,onComplete:l})
}})
},3000)
}}function l(){n=true
}function f(){$(window).resize(function(){if($(window).height()!=lastWindowHeight||$(window).width()!=lastWindowWidth){lastWindowHeight=$(window).height();
lastWindowWidth=$(window).width();
g()
}}).resize();
$(window).scroll(o);
$(".indicator_inner > ul > li > a").on("click",function(u){u.stopPropagation();
u.preventDefault();
$(".indicator_inner > ul > li").removeClass("on");
$(this).parent().addClass("on");
var k=$(this).parent().index();
c=k;
d(k)
});
$(".indicator_inner > ul > li > a").on("mouseenter",function(k){k.stopPropagation();
k.preventDefault();
$(this).addClass("mouseenter");
if(!n){return
}TweenMax.to($(this).find(".indicatorTxt"),a,{width:t,ease:"easeOutQuart"})
});
$(".indicator_inner > ul > li > a").on("mouseleave",function(u){u.stopPropagation();
u.preventDefault();
$(this).removeClass("mouseenter");
var k=$(this).parent().index();
if(!n){return
}if(k==c){return
}TweenMax.to($(this).find(".indicatorTxt"),a,{width:1,ease:"easeOutQuart"})
});
$(".indicator a.indicator_prev").on("click",function(u){u.stopPropagation();
u.preventDefault();
var k=c-1;
d(k)
});
$(".indicator a.indicator_next").on("click",function(u){u.stopPropagation();
u.preventDefault();
var k=c+1;
d(k)
});
$("a.youtubePop").on("click",function(k){k.stopPropagation();
k.preventDefault();
if($(this).find("dl").length){openYoutubePopup(this,"type2")
}else{openYoutubePopup(this,"type1")
}});
$(".imgList li > a").on("click",function(k){k.stopPropagation();
k.preventDefault();
if($(this).hasClass("youtubePop")){return
}if($(this).find("dl").length){openPipPopup(this,"type2")
}else{openPipPopup(this,"type1")
}})
}function d(k){$(window).off("scroll",o);
$("body,html").stop().animate({scrollTop:s[k]},500,function(){h(k);
$(window).scroll()
})
}function o(){if(q<TABLET_WIDTH){if($(".pip_build").not(".no_motion").length){$(".build_car img").css({position:"",left:""})
}}var u=$(window).scrollTop()+150;
var k=u+$(window).height();
var x,y=100;
var A=$("#content h3").filter(function(){return $(this).closest(".keyVisualWrap").length===0
}).closest("div[class*='pip']");
$(s).each(function(D){if(u<s[D]){x=D-1;
return false
}else{x=D
}});
clearTimeout($.data(this,"scrollTimer"));
$.data(this,"scrollTimer",setTimeout(function(){h(x)
},250));
if($(".pip_build").not(".no_motion").length){var C=$(document).height();
var v=$(window).height();
var B=$("#footer").outerHeight();
var w=300;
var z=C-(u+v)-(B+w);
if(z>500){if(q<TABLET_WIDTH){$(".build_car img").css({position:"relative",left:0})
}else{$(".build_car img").css({position:"relative",left:1200})
}e=false
}if(e){return
}if(z<0){TweenMax.to($(".build_car img"),0.8,{left:"0px",ease:"easeOutQuart"});
e=true
}}}function h(k){$(window).off("scroll",o).on("scroll",o);
if(c!=k){$(".indicator_inner > ul > li").removeClass("on");
$(".indicator_inner > ul > li:eq("+k+")").addClass("on");
c=k
}if(k<1){$(".indicator a.indicator_prev").addClass("masked")
}else{$(".indicator a.indicator_prev").removeClass("masked")
}if(k>=i-1){$(".indicator a.indicator_next").css({visibility:"hidden"})
}else{$(".indicator a.indicator_next").css({visibility:"visible"})
}if(!n){return
}$(".indicator .indicatorTxt").each(function(u,v){if(c==u){TweenMax.to($(this),a,{width:t,ease:"easeOutQuart"})
}else{if($(this).parent().hasClass("mouseenter")){return
}TweenMax.to($(this),a,{width:1,ease:"easeOutQuart"})
}})
}};
var keyVisualSet=function(){var h=0,j=$(".keyVisualInner > .paging ul > li").length,d,m=3000;
var a=800,e=800;
$(window).resize(function(){if($(window).height()!=a||$(window).width()!=e){a=$(window).height();
e=$(window).width();
i()
}}).resize();
$(".keyVisualInner .keyVisual01").css({overflow:"hidden"});
$(".keyVisualInner .keyVisual02").css({overflow:"hidden"});
$(".keyVisualInner .keyVisual03").css({overflow:"hidden"});
$("ul.view_inout > li > a").on("click",function(p){p.stopPropagation();
p.preventDefault();
$("ul.view_inout > li").removeClass("on");
$(this).parent().addClass("on");
var o=$(this).parent().index();
if(o==0){$(".textArea > .choice_color_wr").show();
$(".roomView").hide()
}else{$(".textArea > .choice_color_wr").hide();
$(".roomView").show()
}});
$(".keyVisualInner .paging ul > li > a").on("click",function(p){p.stopPropagation();
p.preventDefault();
if(!$(this).parent().hasClass("on")){$(".keyVisualWrap .paging ul > li").removeClass("on");
$(this).parent().addClass("on");
var o=$(this).parent().index();
l(o)
}});
$(".keyBtnLeft > a").on("click",function(p){p.stopPropagation();
p.preventDefault();
var o=$(this).parent().parent().index()-1;
if(o<0){o=j-1
}$(".keyVisualInner .paging ul > li:eq("+o+") > a").trigger("click")
});
$(".keyBtnRight > a").on("click",function(p){p.stopPropagation();
p.preventDefault();
var o=$(this).parent().parent().index()+1;
if(o>j-1){o=0
}$(".keyVisualInner .paging ul > li:eq("+o+") > a").trigger("click")
});
var g=window.location.hash;
if(g=="#360vr"){h=$(".keyVisual02").index();
$(".keyVisualInner .paging ul > li:eq("+h+") > a").trigger("click")
}else{if(g=="#360vr-exterior"){h=$(".keyVisual02").index();
$(".keyVisualInner .paging ul > li:eq("+h+") > a").trigger("click");
$("ul.view_inout > li:eq(0) > a").trigger("click")
}else{if(g=="#360vr-interior"){h=$(".keyVisual02").index();
$(".keyVisualInner .paging ul > li:eq("+h+") > a").trigger("click");
$("ul.view_inout > li:eq(1) > a").trigger("click")
}else{if(g=="#video"){h=$(".keyVisual03").index();
$(".keyVisualInner .paging ul > li:eq("+h+") > a").trigger("click")
}}}}function l(o){var p=$(window).width();
var q=false;
if(p<=MOBILE_WIDTH){q=true
}$(".keyVisual01, .keyVisual02, .keyVisual03").css({"z-index":0});
$(".keyVisualInner > div").eq(h).css({"z-index":1});
$(".keyVisualInner > div").eq(o).css({"z-index":2}).show();
TweenMax.to($(".keyVisualInner > div").eq(o),0,{x:"100%",force3D:q});
if(h==j-1&&o==0){TweenMax.fromTo($(".keyVisualInner > div").eq(o),0.8,{x:"-100%"},{x:"0%",force3D:q,ease:"easeOutQuart"})
}else{if(h==0&&o==j-1){TweenMax.fromTo($(".keyVisualInner > div").eq(o),0.8,{x:"100%"},{x:"0%",force3D:q,ease:"easeOutQuart"})
}else{if(o>h){TweenMax.fromTo($(".keyVisualInner > div").eq(o),0.8,{x:"-100%"},{x:"0%",force3D:q,ease:"easeOutQuart"})
}else{TweenMax.fromTo($(".keyVisualInner > div").eq(o),0.8,{x:"100%"},{x:"0%",force3D:q,ease:"easeOutQuart"})
}}}h=o
}var b=0,k=$(".carInforInner .dots > ul > li").length;
var f=new onSwipeFnc(".keyVisualWrap .carInfor");
f.moveEnd=function(q,s,p,r,t){if(p=="end"){if(s=="right"){var o=b-1;
if(o<0){o=k-1
}$(".carInforInner .dots > ul > li:eq("+o+") > a").trigger("click")
}else{if(s=="left"){var o=b+1;
if(o>k-1){o=0
}$(".carInforInner .dots > ul > li:eq("+o+") > a").trigger("click")
}}}};
$(".carInforInner .dots > ul > li > a").on("click",function(p){p.stopPropagation();
p.preventDefault();
$(".carInforInner .dots > ul > li").removeClass("on");
$(this).parent().addClass("on");
var o=$(this).parent().index();
n(o)
});
function n(o){$(".carInforInner > ul > li").removeClass("on");
$(".carInforInner > ul > li").eq(o).addClass("on");
b=o;
c()
}function c(){if(d){clearInterval(d)
}d=setInterval(function(){b++;
if(b>k-1){b=0
}$(".carInforInner .dots > ul > li:eq("+b+") > a").trigger("click")
},m)
}function i(){document.body.style.overflow="hidden";
var o=$(window).width();
document.body.style.overflow="";
if(IE_VER<9&&IE_VER!==false){if(d){clearInterval(d)
}}else{if(o<MOBILE_WIDTH){c()
}else{if(d){clearInterval(d)
}}}}};
function snsShareSet(){var a=800,b=800;
$(window).resize(function(){if($(window).height()!=b||$(window).width()!=a){b=$(window).height();
a=$(window).width();
document.body.style.overflow="hidden";
var c=$(window).width();
document.body.style.overflow="";
if(IE_VER<9&&IE_VER!==false){$(".con_share").css("width","")
}else{if(c<=MOBILE_WIDTH){$(".con_share").each(function(f,g){shareMaxNum=$(this).find("ul > li").length;
if(shareMaxNum>3){$(this).css("width",154)
}else{var d=shareMaxNum*51;
$(this).css("width",d)
}})
}else{$(".con_share").css("width","")
}}}}).resize();
$(".con_share").each(function(f,h){var d=0,g=$(this).find("ul > li").length,c=$(this).find("ul > li").width();
if(g>3){$(this).find("a.mSnsPrev").show();
$(this).find("a.mSnsNext").show()
}else{$(this).find("a.mSnsPrev").hide();
$(this).find("a.mSnsNext").hide()
}$(this).find("a.mSnsPrev").on("click",function(i){i.stopPropagation();
i.preventDefault();
d=d-1;
if(d<0){d=0
}TweenMax.to($(this).siblings("ul"),0.8,{marginLeft:c*-d,ease:"easeOutQuart"})
});
$(this).find("a.mSnsNext").on("click",function(i){i.stopPropagation();
i.preventDefault();
d=d+1;
if(d>g-1){d=g-1
}TweenMax.to($(this).siblings("ul"),0.8,{marginLeft:c*-d,ease:"easeOutQuart"})
})
})
}var template01Set=function(){$(".temp01").each(function(a,b){mainSwipeTemplate($(this))
})
};
var template02Set=function(){$(".temp02").each(function(a,b){swipeTemplate($(this))
})
};
var template03Set=function(){$(".temp03").each(function(a,b){swipeTemplate($(this))
})
};
var template04Set=function(){$(".temp04").each(function(a,b){swipeTemplate($(this))
})
};
var template05Set=function(){$(".temp05").each(function(a,b){swipeTemplate($(this))
})
};
var template06Set=function(){$(".temp06").each(function(a,b){swipeTemplate($(this))
})
};
var template07Set=function(){$(".temp07").each(function(a,b){swipeTemplate($(this))
})
};
var template08Set=function(){$(".temp08").each(function(a,b){swipeTemplate2($(this))
})
};
var template09Set=function(){$(".temp09").each(function(d,f){var b=800,g=800,a=this;
$(window).resize(function(){if($(window).height()!=g||$(window).width()!=b){g=$(window).height();
b=$(window).width();
c()
}}).resize();
function c(){document.body.style.overflow="hidden";
var h=$(window).width();
var i=$(window).height();
document.body.style.overflow="";
if(IE_VER<9&&IE_VER!==false){if(h>MOBILE_WIDTH){resizeImg($(a).find(".bgInner img"),1024,0,j);
var e=$(a).find(".bgInner img").height();
var j=i;
if(j>e){j=e
}$(a).find(".bgArea").css("height",j);
$(a).find(".bgInner").css("height",j);
$(a).find(".mainInner").css({height:j})
}}else{if(h<TABLET_WIDTH){if(h<MOBILE_WIDTH){$(a).find(".bgArea").css("height","");
$(a).find(".bgInner").css("height","");
$(a).find(".bgInner img").css({width:"",height:"","margin-left":"","margin-top":""});
$(a).find(".mainInner").css({height:""})
}else{$(a).find(".bgArea").css("height","");
$(a).find(".bgInner").css("height","");
$(a).find(".bgInner img").css({width:"",height:"","margin-left":"","margin-top":""});
bgHeight=$(a).find(".bgInner").height();
wrapHeight=$(a).find(".screenBox:eq(0) img").height();
$(a).find(".bgArea").css("height",wrapHeight);
$(a).find(".mainInner").css({height:wrapHeight})
}}else{resizeImg($(a).find(".bgInner img"),0,0,j);
var e=$(a).find(".bgInner img").height();
var j=i;
if(j>e){j=e
}$(a).find(".bgArea").css("height",j);
$(a).find(".bgInner").css("height",j);
$(a).find(".mainInner").css({height:j})
}}}})
};
var template10Set=function(){$(".temp10").each(function(c,d){var b=800,f=800,a=this;
$(window).resize(function(){if($(window).height()!=f||$(window).width()!=b){f=$(window).height();
b=$(window).width();
g()
}}).resize();
function g(){document.body.style.overflow="hidden";
var h=$(window).width();
var i=$(window).height();
document.body.style.overflow="";
if(IE_VER<9&&IE_VER!==false){if(h>MOBILE_WIDTH){resizeImg($(a).find(".bgInner img"),1024,0,j);
var e=$(a).find(".bgInner img").height();
var j=i;
if(j>e){j=e
}$(a).find(".bgArea").css("height",j);
$(a).find(".bgInner").css("height",j);
$(a).find(".mainInner").css({height:j})
}}else{if(h<TABLET_WIDTH){if(h<MOBILE_WIDTH){$(a).find(".bgArea").css("height","");
$(a).find(".bgInner").css("height","");
$(a).find(".bgInner img").css({width:"",height:"","margin-left":"","margin-top":""});
$(a).find(".mainInner").css({height:""})
}else{$(a).find(".bgArea").css("height","");
$(a).find(".bgInner").css("height","");
$(a).find(".bgInner img").css({width:"",height:"","margin-left":"","margin-top":""});
bgHeight=$(a).find(".bgInner").height();
wrapHeight=$(a).find(".screenBox:eq(0) img").height();
$(a).find(".bgArea").css("height",wrapHeight);
$(a).find(".mainInner").css({height:wrapHeight})
}}else{resizeImg($(a).find(".bgInner img"),0,0,j);
var e=$(a).find(".bgInner img").height();
var j=i;
if(j>e){j=e
}$(a).find(".bgArea").css("height",j);
$(a).find(".bgInner").css("height",j);
$(a).find(".mainInner").css({height:j})
}}}})
};
var mainSwipeTemplate=function(q){var j=800,b=0,a=0,f=q.find(".screenPaging > ul > li").length,c=false,k,d=0.7;
var l=q.find(".mainInner").height();
var n=q.find(".bgInner").height();
var r=800,m=800;
$(window).resize(function(){if($(window).height()!=m||$(window).width()!=r){r=$(window).width();
m=$(window).height();
h()
}}).resize();
q.find(".pipBtnLeft").css({position:"absolute",height:n,top:0,left:0});
q.find(".pipBtnRight").css({position:"absolute",height:n,top:0,right:0});
q.find(".mainInner").css({position:"relative",overflow:"hidden"});
q.find(".screenBox").css({"background-color":"#fff"});
q.find(".screenBox").each(function(s,t){if(s!=0){$(this).css({position:"absolute"})
}else{$(this).css({position:"absolute",display:"block","z-index":2})
}});
var i=new onSwipeFnc(q.find(".mainInner"));
i.moveEnd=function(u,w,t,v,x){if($(window).width()>MOBILE_WIDTH){return
}if(t=="end"){if(w=="right"){var s=b-1;
if(s<0){s=f-1
}q.find(".screenPaging ul > li:eq("+s+") > a").trigger("click")
}else{if(w=="left"){var s=b+1;
if(s>f-1){s=0
}q.find(".screenPaging ul > li:eq("+s+") > a").trigger("click")
}}}};
q.find(".pipBtnLeft a.pip_prev").on("click",function(t){t.stopPropagation();
t.preventDefault();
var s=b-1;
if(s<0){s=f-1
}q.find(".screenPaging ul > li:eq("+s+") > a").trigger("click")
});
q.find(".pipBtnRight a.pip_next").on("click",function(t){t.stopPropagation();
t.preventDefault();
var s=b+1;
if(s>f-1){s=0
}q.find(".screenPaging ul > li:eq("+s+") > a").trigger("click")
});
q.find(".screenPaging > ul > li > a").on("click",function(u){u.stopPropagation();
u.preventDefault();
if(!$(this).parent().hasClass("on")){q.find(".screenPaging > ul > li").removeClass("on");
q.find(".screenPaging > ul > li > a").each(function(v){var w=$(this).find("img").attr("src").replace("_on.png","_off.png");
$(this).find("img").attr("src",w)
});
$(this).parent().addClass("on");
var t=$(this).find("img").attr("src").replace("_off.png","_on.png");
$(this).find("img").attr("src",t);
var s=$(this).parent().index();
e(s)
}});
var o=true;
$(window).scroll(function(x){if($(window).width()<=TABLET_WIDTH){$(document).off("mousewheel",p);
return
}var w=$(window).scrollTop();
var v=w+$(window).height();
var u=q.position().top;
var t=u+q.find(".mainInner").outerHeight();
var s=parseInt(w-u);
if(s>=-130&&s<=130){if(o){if($("html:not(:animated),body:not(:animated)").length){$(window).scrollTop(w-s+2)
}o=false
}$(document).on("mousewheel",p)
}else{o=true;
$(document).off("mousewheel",p)
}});
function p(u,v,t,s){u.stopPropagation();
u.preventDefault();
if($(window).width()<TABLET_WIDTH||$(window).height()<j){$(document).off("mousewheel",p);
return
}if(c){return
}var v;
if(u.wheelDelta){v=u.wheelDelta
}else{v=v
}if(v<0){v=1
}else{v=-1
}a=b;
if(v<0){b=b-1;
if(b>=0){q.find(".screenPaging ul > li:eq("+b+") > a").trigger("click")
}else{b=0;
$(document).off("mousewheel",p)
}}else{b=b+1;
if(b<f){q.find(".screenPaging ul > li:eq("+b+") > a").trigger("click")
}else{b=f-1;
$(document).off("mousewheel",p)
}}}function e(s){c=true;
q.find(".screenBox").css({"z-index":0});
q.find(".screenBox:eq("+(a)+")").css({"z-index":1});
q.find(".screenBox:eq("+(s)+")").css({"z-index":2}).show();
l=q.find(".screenBox:eq("+(s)+")").height();
q.find(".mainInner").css({height:l});
TweenMax.killTweensOf(q);
if(s>a){TweenMax.to(q.find(".screenBox:eq("+(s)+")"),0,{y:"100%"});
TweenMax.fromTo(q.find(".screenBox:eq("+(s)+")"),d,{y:"100%"},{y:"0%",force3D:true,ease:"easeOutQuart",onComplete:g})
}else{TweenMax.to(q.find(".screenBox:eq("+(s)+")"),0,{y:"-100%"});
TweenMax.fromTo(q.find(".screenBox:eq("+(s)+")"),d,{y:"-100%"},{y:"0%",force3D:true,ease:"easeOutQuart",onComplete:g})
}a=s;
b=s
}function g(){c=false
}function h(){document.body.style.overflow="hidden";
var t=$(window).width();
var u=$(window).height();
document.body.style.overflow="";
if(IE_VER<9&&IE_VER!==false){if(t>MOBILE_WIDTH){resizeImg(q.find(".bgInner img"),1024,0,v);
var s=q.find(".bgInner img").height();
var v=u;
if(v>s){v=s
}q.find(".bgArea").css("height",v);
q.find(".bgInner").css("height",v);
q.find(".mainInner").css({height:v})
}}else{if(t<=TABLET_WIDTH){if(t<=MOBILE_WIDTH){d=0;
q.find(".bgArea").css("height","");
q.find(".bgInner").css("height","");
q.find(".bgInner img").css({width:"",height:"","margin-left":"","margin-top":""});
n=q.find(".bgInner").height();
l=q.find(".screenBox:eq("+b+")").height();
q.find(".mainInner").css({height:l});
q.find(".pipBtnLeft").css({position:"absolute",height:n,top:0,left:0});
q.find(".pipBtnRight").css({position:"absolute",height:n,top:0,right:0})
}else{d=0.7;
q.find(".bgArea").css("height","");
q.find(".bgInner").css("height","");
q.find(".bgInner img").css({width:"",height:"","margin-left":"","margin-top":""});
n=q.find(".bgInner").height();
l=q.find(".screenBox:eq("+b+") img").height();
q.find(".mainInner").css({height:l});
q.find(".bgInner").css({height:l});
q.find(".bgArea").css({height:l});
q.find(".pipBtnLeft").css({position:"absolute",height:n,top:0,left:0});
q.find(".pipBtnRight").css({position:"absolute",height:n,top:0,right:0})
}}else{d=0.7;
resizeImg(q.find(".bgInner img"),0,0,v);
var s=q.find(".bgInner img").height();
var v=u;
if(v>s){v=s
}q.find(".bgArea").css("height",v);
q.find(".bgInner").css("height",v);
q.find(".mainInner").css({height:v})
}}}};
function resizeImg(i,g,p,l){var a=i;
var n=1920;
var o=1200;
var j=$(window).width();
var b=$(window).height();
var f=g;
var m=p;
var k=a.width()/a.height();
var c=0,e=0;
if(j<f){j=f
}if(b<m){b=m
}a.width(j).height(b);
if(j/k>=b){e=0;
var h=Math.min(j,n);
c=Math.ceil((b-h/k)/2);
var d=Math.min(Math.ceil(j/k),o);
if(b>o){c=0
}a.css({width:h,height:d,"margin-top":c,"margin-left":"0"})
}else{c=0;
e=Math.ceil((j-b*k)/2);
var h=Math.min(Math.ceil(b*k),n);
var d=Math.min(b,o);
if(j==n){e=0
}a.css({height:d,width:h,"margin-left":e,"margin-top":"0"})
}}var swipeTemplate=function(g){var e=0,b=g.find(".imgListPaging > ul > li").length,d=0.7;
var i=800,c=800;
var f=new onSwipeFnc(g.find(".subInner"));
f.moveEnd=function(l,n,k,m,o){if($(window).width()>MOBILE_WIDTH){return
}if(k=="end"){if(n=="right"){var j=e-1;
if(j<0){j=b-1
}g.find(".imgListPaging ul > li:eq("+j+") > a").trigger("click")
}else{if(n=="left"){var j=e+1;
if(j>b-1){j=0
}g.find(".imgListPaging ul > li:eq("+j+") > a").trigger("click")
}}}};
g.find(".imgListPaging > ul > li > a").on("click",function(k){k.stopPropagation();
k.preventDefault();
if(!$(this).parent().hasClass("on")){g.find(".imgListPaging > ul > li").removeClass("on");
$(this).parent().addClass("on");
var j=$(this).parent().index();
h(j)
}});
g.find(".pipBtnLeft a.pip_prev").on("click",function(k){k.stopPropagation();
k.preventDefault();
var j=e-1;
if(j<0){j=b-1
}g.find(".imgListPaging ul > li:eq("+j+") > a").trigger("click")
});
g.find(".pipBtnRight a.pip_next").on("click",function(k){k.stopPropagation();
k.preventDefault();
var j=e+1;
if(j>b-1){j=0
}g.find(".imgListPaging ul > li:eq("+j+") > a").trigger("click")
});
function h(j){g.find(".imgList > li").hide();
g.find(".imgList > li").eq(j).show();
e=j
}$(window).resize(function(){if($(window).height()!=i||$(window).width()!=c){i=$(window).height();
c=$(window).width();
a()
}});
function a(){document.body.style.overflow="hidden";
var j=$(window).width();
document.body.style.overflow="";
if(IE_VER<9&&IE_VER!==false){}else{if(j>MOBILE_WIDTH){g.find(".imgList li").show()
}else{g.find(".imgList li").hide();
g.find(".imgList li").eq(e).show()
}}}};
var swipeTemplate2=function(g){var e=0,b=g.find(".imgListPaging > ul > li").length,d=0.7;
var i=800,c=800;
var f=new onSwipeFnc(g.find(".subInner"));
f.moveEnd=function(l,n,k,m,o){if($(window).width()>MOBILE_WIDTH){return
}if(k=="end"){if(n=="right"){var j=e-1;
if(j<0){j=b-1
}g.find(".imgListPaging ul > li:eq("+j+") > a").trigger("click")
}else{if(n=="left"){var j=e+1;
if(j>b-1){j=0
}g.find(".imgListPaging ul > li:eq("+j+") > a").trigger("click")
}}}};
g.find(".imgListPaging > ul > li > a").on("click",function(k){k.stopPropagation();
k.preventDefault();
if(!$(this).parent().hasClass("on")){g.find(".imgListPaging > ul > li").removeClass("on");
$(this).parent().addClass("on");
var j=$(this).parent().index();
h(j)
}});
function h(j){g.find(".imgList").hide();
g.find(".imgList").eq(j).show();
e=j
}$(window).resize(function(){if($(window).height()!=i||$(window).width()!=c){i=$(window).height();
c=$(window).width();
a()
}});
function a(){document.body.style.overflow="hidden";
var j=$(window).width();
document.body.style.overflow="";
if(IE_VER<9&&IE_VER!==false){}else{if(j>MOBILE_WIDTH){g.find(".imgList").show()
}else{g.find(".imgList").hide();
g.find(".imgList").eq(e).show()
}}}};
var vehiclesScrollMotionInit=function(){var b=800,a=800;
$(window).resize(function(){if($(window).height()!=b||$(window).width()!=a){b=$(window).height();
a=$(window).width();
$(window).scroll()
}});
$(window).scroll(function(f){var e=$(window).scrollTop();
var d=$(window).height();
var c=$(window).width();
$(".vehicles-onScreen").each(function(k,n){if($(this).hasClass("js-onSceen-animateend")){return
}var m=$(this).offset().top-d;
var j=m+$(this).outerHeight();
var h=e-d;
var l=(m<=e&&j>=h);
var g=false;
if(c<=MOBILE_WIDTH){g=true
}$(this).css({position:"relative",opacity:0,top:100});
if(l){if(!$(this).hasClass("js-onSceen-animateend")){var p=$(this);
function o(){p.css({position:"",opacity:"",top:"",transform:""})
}TweenMax.to($(this),0.8,{top:0,force3D:g,opacity:1,onComplete:o});
$(this).addClass("js-onSceen-animateend")
}}})
}).scroll()
};
var openYoutubePopup=function(d,c){var e=getURLParameter($(d).attr("href"),"v");
var a="<iframe id='youtubeIframe' width='100%' height='100%' src='//www.youtube.com/embed/"+e+"?enablejsapi=1' frameborder='0' allowfullscreen></iframe>";
if(c=="type2"){$(".popup_wrap02 .pop_con dt").text($(d).find(".btmTextTit").clone().children().remove().end().text());
$(".popup_wrap02 .pop_con dd").html($(d).find(".btmTextTxt").html())
}else{if($(d).find(".videoText").length){$(".popup_wrap02 .pop_con dt").text($(d).find(".videoTit").clone().children().remove().end().text());
$(".popup_wrap02 .pop_con dd").html($(d).find(".videoTxt").html())
}else{$(".popup_wrap02 .pop_con dt").text($(d).find(".imgListTit").clone().children().remove().end().text());
$(".popup_wrap02 .pop_con dd").html($(d).find(".description").html())
}}$(".popup_wrap02 .pop_con .youtube").html(a);
var b=new OpenDimPop($(".popup_wrap02"));
b.open()
};
var openPipPopup=function(d,c){var b=new OpenDimPop($(".popup_wrap"),$(".popup_wrap .pop_con"),{plusHeaderHeight:$(".snb_pip").outerHeight()});
if(c=="type2"){var a;
if($(d).find("img").attr("layer")){a=$(d).find("img").attr("layer")
}else{if(typeof $(d).find("img").attr("srcset")!=="undefined"){a=$(d).find("img:first").attr("srcset")
}else{a=$(d).find("img:first").attr("src")
}}$.imgpreload(a,function(){$(".pip_wrap .pop_con img").attr("src",a);
b.open()
});
$(".pip_wrap .pop_con dt").text($(d).find(".btmTextTit").clone().children().remove().end().text());
$(".pip_wrap .pop_con dd").html($(d).find(".btmTextTxt").html())
}else{var a;
if($(d).find("img").attr("layer")){a=$(d).find("img").attr("layer")
}else{if(typeof $(d).find("img").attr("srcset")!=="undefined"){a=$(d).find("img:first").attr("srcset")
}else{a=$(d).find("img:first").attr("src")
}}$.imgpreload(a,function(){$(".pip_wrap .pop_con img").attr("src",a);
b.open()
});
$(".pip_wrap .pop_con dt").text($(d).find(".imgListTit").clone().children().remove().end().text());
$(".pip_wrap .pop_con dd").html($(d).find(".description").html())
}};
var specInit=function(){var s,a=0,f,j,k=0,r,l,d,z,h=0,n,p,A=0,w,q,B=0,u,v;
b();
e();
function b(){j=$(".spec_slide_area .spec_img > ul > li").width();
f=$(".spec_slide_area .spec_img > ul > li").length;
$(".spec_slide_area a.spec_prev").hide();
l=$(".engine_slide_area .img_wrap > ul > li").width();
r=$(".engine_slide_area .img_wrap > ul > li").length;
$(".engine_slide_area a.spec_prev").hide();
v=$(".engine_allview_area .spec_img .cover_ul").width();
u=$(".engine_allview_area .spec_img .cover_ul").length;
$(".engine_allview_area a.spec_prev").hide();
p=$(".wheel_slide_area .img_wrap > ul > li").width();
n=$(".wheel_slide_area .img_wrap > ul > li").length;
$(".wheel_slide_area a.spec_prev").hide();
q=$(".wheel_allview_area .spec_img > ul ").width();
w=$(".wheel_allview_area .spec_img > ul").length;
$(".wheel_allview_area a.spec_prev").hide()
}function e(){$(".spec_data ul > li > a").on("click",function(F){F.stopPropagation();
F.preventDefault();
$(".spec_data ul > li > a").removeClass("on");
$(this).addClass("on");
if($(this).hasClass("btn_slide")){$(".spec_slide_area").show();
$(".spec_allview_area").hide()
}else{$(".spec_slide_area").hide();
$(".spec_allview_area").show()
}});
$(".spec_slide_area a.spec_next").on("click",function(G){G.stopPropagation();
G.preventDefault();
var F=a+1;
o(F,0.5)
});
$(".spec_slide_area a.spec_prev").on("click",function(G){G.stopPropagation();
G.preventDefault();
var F=a-1;
o(F,0.5)
});
$(".spec_slide_area .control ul.num > li > a").on("click",function(G){G.stopPropagation();
G.preventDefault();
var F=$(this).parent().index();
o(F,0.5)
});
$(".engine_data ul > li > a").on("click",function(F){F.stopPropagation();
F.preventDefault();
$(".engine_data ul > li > a").removeClass("on");
$(this).addClass("on");
if($(this).hasClass("btn_slide")){$(".engine_slide_area").show();
$(".engine_allview_area").hide();
d=0;
$(".engine_visual").css("height","")
}else{$(".engine_slide_area").hide();
$(".engine_allview_area").show();
if($(".engine_allview_area").hasClass("engineType03")||$(".engine_allview_area").hasClass("engineType04")||$(".engine_allview_area").hasClass("engineType05")||$(".engine_allview_area").hasClass("engineType06")||$(".engine_allview_area").hasClass("engineType07")||$(".engine_allview_area").hasClass("engineType08")){d=2
}else{d=1
}E()
}});
function E(){if(s<TABLET_WIDTH){if(d==2){$(".engine_visual").css("height",940)
}else{$(".engine_visual").css("height","")
}}else{if(d==2){$(".engine_visual").css("height",1060)
}else{$(".engine_visual").css("height",726)
}}}$(".engine_slide_area a.spec_next").on("click",function(G){G.stopPropagation();
G.preventDefault();
var F=k+1;
g(F,0.5)
});
$(".engine_slide_area a.spec_prev").on("click",function(G){G.stopPropagation();
G.preventDefault();
var F=k-1;
g(F,0.5)
});
$(".engine_slide_area .control ul.num > li > a").on("click",function(G){G.stopPropagation();
G.preventDefault();
var F=$(this).parent().index();
g(F,0.5)
});
$(".engine_allview_area a.spec_next").on("click",function(G){G.stopPropagation();
G.preventDefault();
var F=B+1;
i(F,0.5)
});
$(".engine_allview_area a.spec_prev").on("click",function(G){G.stopPropagation();
G.preventDefault();
var F=B-1;
i(F,0.5)
});
$(".engine_allview_area .control ul.num > li > a").on("click",function(G){G.stopPropagation();
G.preventDefault();
var F=$(this).parent().index();
i(F,0.5)
});
$(".wheel_data ul > li > a").on("click",function(F){F.stopPropagation();
F.preventDefault();
$(".wheel_data ul > li > a").removeClass("on");
$(this).addClass("on");
if($(this).hasClass("btn_slide")){$(".wheel_slide_area").show();
$(".wheel_allview_area").hide();
z=0;
$(".wheel_visual").css("height","")
}else{$(".wheel_slide_area").hide();
$(".wheel_allview_area").show();
if($(".wheel_allview_area").hasClass("wheelType03")||$(".wheel_allview_area").hasClass("wheelType04")||$(".wheel_allview_area").hasClass("wheelType05")||$(".wheel_allview_area").hasClass("wheelType06")||$(".wheel_allview_area").hasClass("wheelType07")||$(".wheel_allview_area").hasClass("wheelType08")){z=2
}else{z=1
}D()
}});
function D(){if(s<TABLET_WIDTH){if(z==2){$(".wheel_visual").css("height",820)
}else{$(".wheel_visual").css("height","")
}}else{if(z==2){$(".wheel_visual").css("height",900)
}else{$(".wheel_visual").css("height",600)
}}}$(".wheel_slide_area a.spec_next").on("click",function(G){G.stopPropagation();
G.preventDefault();
var F=h+1;
C(F,0.5)
});
$(".wheel_slide_area a.spec_prev").on("click",function(G){G.stopPropagation();
G.preventDefault();
var F=h-1;
C(F,0.5)
});
$(".wheel_slide_area .control ul.num > li > a").on("click",function(G){G.stopPropagation();
G.preventDefault();
var F=$(this).parent().index();
C(F,0.5)
});
$(".wheel_allview_area a.spec_next").on("click",function(G){G.stopPropagation();
G.preventDefault();
var F=A+1;
c(F,0.5)
});
$(".wheel_allview_area a.spec_prev").on("click",function(G){G.stopPropagation();
G.preventDefault();
var F=A-1;
c(F,0.5)
});
$(".wheel_allview_area .control ul.num > li > a").on("click",function(G){G.stopPropagation();
G.preventDefault();
var F=$(this).parent().index();
c(F,0.5)
});
t();
x();
m()
}function t(){$(".pip_spec .spec_list_title > a").on("click",function(E){E.stopPropagation();
E.preventDefault();
if(s<=MOBILE_WIDTH){if($(this).hasClass("on")){$(this).removeClass("on");
$(this).parent().siblings(".spec_view").hide()
}else{$(this).addClass("on");
$(this).parent().siblings(".spec_view").show()
}}});
var D=new onSwipeFnc(".spec_slide_area .spec_img");
D.moveEnd=function(G,I,F,H,J){if(F=="end"){if(I=="right"){var E=a-1;
if(E<0){E=0
}$(".spec_slide_area .control ul.num > li:eq("+E+") > a").trigger("click")
}else{if(I=="left"){var E=a+1;
if(E>f-1){E=f-1
}$(".spec_slide_area .control ul.num > li:eq("+E+") > a").trigger("click")
}}}}
}function x(){$(".pip_engine .spec_list_title:eq(0) > a").on("click",function(E){E.stopPropagation();
E.preventDefault();
if(s<=MOBILE_WIDTH){if($(this).hasClass("on")){$(this).removeClass("on");
$(this).parent().siblings(".spec_view:eq(0)").hide()
}else{$(this).addClass("on");
$(this).parent().siblings(".spec_view:eq(0)").show()
}}});
$(".pip_engine .spec_list_title:eq(1) > a").on("click",function(E){E.stopPropagation();
E.preventDefault();
if(s<=MOBILE_WIDTH){if($(this).hasClass("on")){$(this).removeClass("on");
$(this).parent().siblings(".spec_view:eq(1)").hide()
}else{$(this).addClass("on");
$(this).parent().siblings(".spec_view:eq(1)").show()
}}});
var D=new onSwipeFnc(".engine_slide_area .img_wrap");
D.moveEnd=function(G,I,F,H,J){if(F=="end"){if(I=="right"){var E=k-1;
if(E<0){E=0
}$(".engine_slide_area .control ul.num > li:eq("+E+") > a").trigger("click")
}else{if(I=="left"){var E=k+1;
if(E>r-1){E=r-1
}$(".engine_slide_area .control ul.num > li:eq("+E+") > a").trigger("click")
}}}}
}function m(){$(".pip_wheel .spec_list_title > a").on("click",function(E){E.stopPropagation();
E.preventDefault();
if(s<=MOBILE_WIDTH){if($(this).hasClass("on")){$(this).removeClass("on");
$(this).parent().siblings(".spec_view").hide()
}else{$(this).addClass("on");
$(this).parent().siblings(".spec_view").show()
}}});
var D=new onSwipeFnc(".wheel_slide_area .img_wrap");
D.moveEnd=function(G,I,F,H,J){if(F=="end"){if(I=="right"){var E=h-1;
if(E<0){E=0
}$(".wheel_slide_area .control ul.num > li:eq("+E+") > a").trigger("click")
}else{if(I=="left"){var E=h+1;
if(E>n-1){E=n-1
}$(".wheel_slide_area .control ul.num > li:eq("+E+") > a").trigger("click")
}}}}
}function o(D,E){$(".spec_slide_area .control ul.num > li").removeClass("on");
$(".spec_slide_area .control ul.num > li").eq(D).addClass("on");
j=$(".spec_slide_area .spec_img > ul > li").width();
TweenMax.to($(".spec_slide_area .spec_img > ul"),E,{marginLeft:j*-D,ease:"easeOutExpo",force3D:true});
a=D;
if(a==0){$(".spec_slide_area a.spec_next").show();
$(".spec_slide_area a.spec_prev").hide()
}else{if(a==f-1){$(".spec_slide_area a.spec_next").hide();
$(".spec_slide_area a.spec_prev").show()
}else{$(".spec_slide_area a.spec_next").show();
$(".spec_slide_area a.spec_prev").show()
}}if($(".spec_slide_area .spec_img > ul > li").length<=1){$(".spec_img a.spec_next").hide();
$(".spec_img a.spec_prev").hide()
}}function g(D,E){$(".engine_slide_area .control ul.num > li").removeClass("on");
$(".engine_slide_area .control ul.num > li").eq(D).addClass("on");
l=$(".engine_slide_area .img_wrap > ul > li").width();
TweenMax.to($(".engine_slide_area .img_wrap > ul"),E,{marginLeft:l*-D,ease:"easeOutExpo",force3D:true});
k=D;
if(k==0){$(".engine_slide_area a.spec_next").show();
$(".engine_slide_area a.spec_prev").hide()
}else{if(k==r-1){$(".engine_slide_area a.spec_next").hide();
$(".engine_slide_area a.spec_prev").show()
}else{$(".engine_slide_area a.spec_next").show();
$(".engine_slide_area a.spec_prev").show()
}}if($(".engine_slide_area .img_wrap > ul > li").length<=1){$(".engine_slide_area a.spec_next").hide();
$(".engine_slide_area a.spec_prev").hide()
}}function C(D,E){$(".wheel_slide_area .control ul.num > li").removeClass("on");
$(".wheel_slide_area .control ul.num > li").eq(D).addClass("on");
p=$(".wheel_slide_area .img_wrap > ul > li").width();
TweenMax.to($(".wheel_slide_area .img_wrap > ul"),E,{marginLeft:p*-D,ease:"easeOutExpo",force3D:true});
h=D;
if(h==0){$(".wheel_slide_area a.spec_next").show();
$(".wheel_slide_area a.spec_prev").hide()
}else{if(h==n-1){$(".wheel_slide_area a.spec_next").hide();
$(".wheel_slide_area a.spec_prev").show()
}else{$(".wheel_slide_area a.spec_next").show();
$(".wheel_slide_area a.spec_prev").show()
}}if($(".wheel_slide_area .img_wrap > ul > li").length<=1){$(".wheel_slide_area a.spec_next").hide();
$(".wheel_slide_area a.spec_prev").hide()
}}function i(D,E){$(".engine_allview_area .control ul.num").removeClass("on");
$(".engine_allview_area .control ul.num").eq(D).addClass("on");
v=$(".engine_allview_area .spec_img > ul").width();
TweenMax.to($(".engine_allview_area .spec_img > .cover_ul").eq(0),E,{marginLeft:l*-D,ease:"easeOutExpo",force3D:true});
B=D;
if(B==0&&$(".engine_allview_area .spec_img > .cover_ul").length>1){$(".engine_allview_area a.spec_next").show();
$(".engine_allview_area a.spec_prev").hide()
}else{if(B==u-1){$(".engine_allview_area a.spec_next").hide();
$(".engine_allview_area a.spec_prev").show()
}else{$(".engine_allview_area a.spec_next").show();
$(".engine_allview_area a.spec_prev").show()
}}if($(".engine_allview_area .spec_img > .cover_ul").length<=1){$(".engine_allview_area a.spec_next").hide();
$(".engine_allview_area a.spec_prev").hide()
}}function c(D,E){$(".wheel_allview_area .control ul.num").removeClass("on");
$(".wheel_allview_area .control ul.num").eq(D).addClass("on");
q=$(".wheel_allview_area .spec_img > ul").width();
TweenMax.to($(".wheel_allview_area .spec_img > ul").eq(0),E,{marginLeft:p*-D,ease:"easeOutExpo",force3D:true});
A=D;
if(A==0&&$(".wheel_allview_area .spec_img > ul").length>1){$(".wheel_allview_area a.spec_next").show();
$(".wheel_allview_area a.spec_prev").hide()
}else{if(A==w-1){$(".wheel_allview_area a.spec_next").hide();
$(".wheel_allview_area a.spec_prev").show()
}else{$(".wheel_allview_area a.spec_next").show();
$(".wheel_allview_area a.spec_prev").show()
}}if($(".wheel_allview_area .spec_img > ul").length<=1){$(".wheel_allview_area a.spec_next").hide();
$(".wheel_allview_area a.spec_prev").hide()
}}$(window).resize(function(){if($(window).height()!=lastWindowHeight||$(window).width()!=lastWindowWidth){lastWindowHeight=$(window).height();
lastWindowWidth=$(window).width();
y()
}}).resize();
function y(){document.body.style.overflow="hidden";
s=$(window).width();
document.body.style.overflow="";
var D=s-$(window).width();
o(a,0);
g(k,0);
C(h,0);
i(k,0);
c(A,0);
if(IE_VER<9&&IE_VER!==false){}else{if(s>MOBILE_WIDTH){$(".spec_view").show();
$(".pip_spec .spec_list_title > a").addClass("on");
$(".pip_engine .spec_list_title > a").addClass("on");
$(".pip_wheel .spec_list_title > a").addClass("on");
$(".pip_wheel .scroll_inner").css("width","");
if(s<TABLET_WIDTH){if(d==2){$(".engine_visual").css("height",940)
}else{$(".engine_visual").css("height","")
}if(z==2){$(".wheel_visual").css("height",820)
}else{$(".wheel_visual").css("height","")
}}else{if(d==2){$(".engine_visual").css("height",1060)
}else{$(".engine_visual").css("height","")
}if(z==2){$(".wheel_visual").css("height",960)
}else{$(".wheel_visual").css("height","")
}}}else{d=0;
z=0;
$(".spec_data ul > li > a.btn_slide").addClass("on");
$(".spec_data ul > li > a.btn_allview").removeClass("on");
$(".spec_slide_area").show();
$(".spec_allview_area").hide();
$(".engine_data ul > li > a.btn_slide").addClass("on");
$(".engine_data ul > li > a.btn_allview").removeClass("on");
$(".engine_slide_area").show();
$(".engine_allview_area").hide();
$(".engine_visual").css("height","");
$(".wheel_data ul > li > a.btn_slide").addClass("on");
$(".wheel_data ul > li > a.btn_allview").removeClass("on");
$(".wheel_slide_area").show();
$(".wheel_allview_area").hide();
$(".wheel_visual").css("height","");
$(".pip_wheel .scroll_inner").css("width",s-D)
}}}};
var businessInit=function(){var b;
$(window).resize(function(){if($(window).height()!=lastWindowHeight||$(window).width()!=lastWindowWidth){lastWindowHeight=$(window).height();
lastWindowWidth=$(window).width();
a()
}}).resize();
$(".spec_list_title > a").on("click",function(c){c.stopPropagation();
c.preventDefault();
if(b<=MOBILE_WIDTH){if($(this).hasClass("on")){$(this).removeClass("on");
$(this).parent().siblings(".spec_view").hide()
}else{$(this).addClass("on");
$(this).parent().siblings(".spec_view").show()
}}});
$(".form_select").on("change",function(d){d.stopPropagation();
d.preventDefault();
var c=$(this).getSetSSValue();
$(".tab_contents").css("display","none");
$(".tab_contents").eq(c).css("display","block")
});
function a(){document.body.style.overflow="hidden";
b=$(window).width();
document.body.style.overflow="";
var c=b-$(window).width()+30;
if(IE_VER<9&&IE_VER!==false){}else{if(b>MOBILE_WIDTH){$(".spec_view").css("overflow","");
$(".spec_view .scroll_inner").css("width","");
$(".spec_list .spec_view").show();
$(".spec_list_title > a").addClass("on")
}else{$(".spec_view").css("overflow","hidden");
$(".spec_view .scroll_inner").css("width",b-c)
}}}};
var galleryInit=function(){var N=1,C;
var w,m,J,K,M,n,r=800,a=800,q,V,O=0,i=0,z=0,P=0,F=0,D=false,B=false;
var I=1280,c=800;
window.onload=function(k){o()
};
function o(){j()
}t();
l();
var R=new OpenDimPop($(".video_popup"),$(".video_popup .pop_con"),{plusHeaderHeight:$(".snb_pip").outerHeight()});
function t(){$(".wide_gallery .wide_wrap .img_wrap img").css({"max-width":I,"max-height":c});
$(".video_wrap a.video_prev").hide();
m=$(".gallery_video .video_wrap").width()
}function l(){K=$(".gallery_interior .wide_wrap .gallery_paging ul > li").length;
M=$(".gallery_exterior .wide_wrap .gallery_paging ul > li").length;
n=$(".video_wrap .video_paging ul > li").length;
$(window).resize(function(){if($(window).height()!=r||$(window).width()!=a){r=$(window).height();
a=$(window).width();
j()
}}).resize();
$(".wide_wrap").off().on("click",function(W){W.stopPropagation();
W.preventDefault();
if($(W.target)[0].tagName=="IMG"){return
}p()
});
$(".bg_ext .title > a").on("click",function(W){W.stopPropagation();
W.preventDefault();
H()
});
$(".bg_ext .paging_dot > a").on("click",function(X){X.stopPropagation();
X.preventDefault();
var W=$(this).index();
D=true;
b(W)
});
$(".bg_int .title > a").on("click",function(W){W.stopPropagation();
W.preventDefault();
U()
});
$(".bg_int .paging_dot > a").on("click",function(X){X.stopPropagation();
X.preventDefault();
var W=$(this).index();
B=true;
s(W)
});
$("a.exterior").on("click",function(X){X.stopPropagation();
X.preventDefault();
var W=$(this).parent().index();
P=W;
H()
});
$("a.interior").on("click",function(X){X.stopPropagation();
X.preventDefault();
var W=$(this).parent().index();
z=W;
U()
});
$("a.wide_close").on("click",function(W){W.stopPropagation();
W.preventDefault();
p()
});
$(".gallery_exterior a.wide_prev").on("click",function(W){W.stopPropagation();
W.preventDefault();
E()
});
$(".gallery_exterior a.wide_next").on("click",function(W){W.stopPropagation();
W.preventDefault();
h()
});
$(".gallery_interior a.wide_prev").on("click",function(W){W.stopPropagation();
W.preventDefault();
y()
});
$(".gallery_interior a.wide_next").on("click",function(W){W.stopPropagation();
W.preventDefault();
S()
});
$(".video_wrap a.video_prev").on("click",function(W){W.stopPropagation();
W.preventDefault();
Q()
});
$(".video_wrap a.video_next").on("click",function(W){W.stopPropagation();
W.preventDefault();
v()
});
$(".video_paging > ul > li > a").on("click",function(X){X.stopPropagation();
X.preventDefault();
if(!$(this).parent().hasClass("on")){var W=$(this).parent().index();
x(W)
}});
$(".gallery_exterior .gallery_wrap ul.screen > li > a").on("click",function(Y){Y.stopPropagation();
Y.preventDefault();
var X=($(this).parent().parent().index()-1)*6;
var W=$(this).parent().index();
P=W+X;
G()
});
$(".gallery_interior .gallery_wrap ul.screen > li > a").on("click",function(Y){Y.stopPropagation();
Y.preventDefault();
var X=($(this).parent().parent().index()-1)*6;
var W=$(this).parent().index();
z=W+X;
d()
});
$(".gallery_wrap ul.screen > li > a").on("mouseenter",function(W){if($(this).find("span").length){$(this).find("span").remove()
}$(this).append('<span class="hover"></span>')
});
$(".gallery_wrap ul.screen > li > a").on("mouseleave",function(W){if($(this).find("span").length){$(this).find("span").remove()
}});
$(".video_box > ul > li > a").on("click",function(X){X.stopPropagation();
X.preventDefault();
var Y=getURLParameter($(this).attr("href"),"v");
var W="<iframe id='youtubeIframe' width='100%' height='100%' src='//www.youtube.com/embed/"+Y+"?enablejsapi=1' frameborder='0' allowfullscreen></iframe>";
$(".pop_con .youtube").html(W);
T(this)
});
var k=window.location.hash;
if(k=="#exterior"){$("a.exterior").trigger("click")
}else{if(k=="#interior"){$("a.interior").trigger("click")
}}}function j(){document.body.style.overflow="hidden";
w=$(window).width();
document.body.style.overflow="";
$(".gallery_exterior ul.screen:eq(0)").css("display","block");
q=$(".gallery_exterior ul.screen:eq(0)").height();
m=$(".gallery_video .video_wrap").width();
$(".gallery_select").css("height",q);
if(D){$(".screen_wrap").css("height",q);
$(".gallery_exterior ul.screen:eq(0)").css("margin-top",q*-O)
}if(B){$(".screen_wrap").css("height",q);
$(".gallery_interior ul.screen:eq(0)").css("margin-top",q*-i)
}if(IE_VER<9&&IE_VER!==false){$("body").css("overflow-y","scroll");
if(q<1){q=$(".gallery_exterior ul.screen:eq(0)").innerHeight()
}$(".gallery_select").css("height",q);
if(D){$(".screen_wrap").css("height",q);
$(".gallery_exterior ul.screen:eq(0)").css("margin-top",q*-O)
}var X=$(window).height()-135;
var Y=$(".gallery_exterior").height();
if(X>c){X=c
}if(Y<c){X=Y
}if(X<630){X=630
}$(".wide_gallery .wide_wrap .img_wrap img").css({width:"auto",height:X});
var W=X*1.6;
if(W>I){W=I
}$(".wide_gallery .wide_wrap .img_wrap").css({width:W});
$(".wideBtnLeft").css({position:"absolute",height:X,top:"35px",left:"0px"});
$(".wideBtnRight").css({position:"absolute",height:X,top:"35px",right:"0px"})
}else{if(w>MOBILE_WIDTH){$(".wideBtnLeft").css({position:"",height:"",top:"",left:""});
$(".wideBtnRight").css({position:"",height:"",top:"",right:""});
$(".video_box").css("margin-left",m*-F);
if(F<=0){$(".video_wrap a.video_next").show();
$(".video_wrap a.video_prev").hide()
}else{if(F>=n-1){$(".video_wrap a.video_next").hide();
$(".video_wrap a.video_prev").show()
}else{$(".video_wrap a.video_next").show();
$(".video_wrap a.video_prev").show()
}}if(w>TABLET_WIDTH){var X=$(window).height()-135;
var Y=$(".gallery_exterior").height();
if(X>c){X=c
}if(Y<c){X=Y
}if(X<630){X=630
}$(".wide_gallery .wide_wrap .img_wrap img").css({width:"auto",height:X});
var W=X*1.6;
if(W>I){W=I
}$(".wide_gallery .wide_wrap .img_wrap").css({width:W})
}else{$(".wide_gallery .wide_wrap .img_wrap").css({width:""});
$(".wide_gallery .wide_wrap .img_wrap img").css({"max-width":"","max-height":"",width:"",height:""})
}}else{var k=$(".img_wrap > div:eq("+P+") img").height();
$(".wideBtnLeft").css({position:"absolute",height:k,top:"35px",left:"0px"});
$(".wideBtnRight").css({position:"absolute",height:k,top:"35px",right:"0px"});
$(".video_box").css("margin-left","");
$(".video_wrap a.video_next").hide();
$(".video_wrap a.video_prev").hide()
}}}function E(){var k=P-1;
if(k<0){k=M-1
}f(k)
}function h(){var k=P+1;
if(k>M-1){k=0
}f(k)
}function f(k){if(w>MOBILE_WIDTH){$("body,html").stop().animate({scrollTop:0})
}$(".gallery_exterior .wide_gallery .img_wrap > div").hide();
$(".gallery_exterior .wide_gallery .img_wrap > div").eq(k).show();
$(".gallery_exterior .wide_wrap .gallery_paging > ul > li").removeClass("on");
$(".gallery_exterior .wide_wrap .gallery_paging > ul > li").eq(k).addClass("on");
P=k;
if($("*:focus").length>0&&w>MOBILE_WIDTH){tapIndexFnc.Init($(".wide_wrap"))
}}function y(){var k=z-1;
if(k<0){k=K-1
}u(k)
}function S(){var k=z+1;
if(k>K-1){k=0
}u(k)
}function u(k){if(w>MOBILE_WIDTH){$("body,html").stop().animate({scrollTop:0})
}$(".gallery_interior .wide_gallery .img_wrap > div").hide();
$(".gallery_interior .wide_gallery .img_wrap > div").eq(k).show();
$(".gallery_interior .wide_wrap .gallery_paging > ul > li").removeClass("on");
$(".gallery_interior .wide_wrap .gallery_paging > ul > li").eq(k).addClass("on");
z=k;
if($("*:focus").length>0&&w>MOBILE_WIDTH){tapIndexFnc.Init($(".wide_wrap"))
}}function p(){$(".wide_gallery").fadeOut();
if($("*:focus").length>0){tapIndexFnc.Close()
}}function G(){$(".gallery_exterior .wide_gallery").fadeIn();
f(P)
}function d(){$(".gallery_interior .wide_gallery").fadeIn();
u(z)
}function H(){j();
TweenMax.to($(".pip_inner"),0.7,{marginLeft:"-100%",ease:"easeInExpo",onComplete:e})
}function e(){$(".pip_gallery .width_wrap").css("max-height","none")
}function b(k){O=k;
$(".screen.off").show();
$(".screen_wrap").css("height",q);
$(".bg_ext .paging_dot > a").removeClass("on");
$(".bg_ext .paging_dot > a").eq(k).addClass("on");
TweenMax.to($(".gallery_exterior ul.screen:eq(0)"),0.7,{marginTop:-k*q,ease:"easeInQuart"})
}function U(){j();
TweenMax.to($(".pip_inner"),0.7,{marginLeft:"-200%",ease:"easeInExpo",onComplete:e})
}function s(k){i=k;
$(".screen.off").show();
$(".screen_wrap").css("height",q);
$(".bg_int .paging_dot > a").removeClass("on");
$(".bg_int .paging_dot > a").eq(k).addClass("on");
TweenMax.to($(".gallery_interior ul.screen:eq(0)"),0.7,{marginTop:-k*q,ease:"easeInQuart"})
}function Q(){var k=F-1;
if(k<=0){k=0
}x(k)
}function v(){var k=F+1;
if(k>=n-1){k=n-1
}x(k)
}function x(k){$(".video_paging > ul > li").removeClass("on");
$(".video_paging > ul > li").eq(k).addClass("on");
$(".video_box > ul").addClass("off");
$(".video_box > ul").eq(k).removeClass("off");
F=k;
if(w>MOBILE_WIDTH){if(F<=0){$(".video_wrap a.video_next").show();
$(".video_wrap a.video_prev").hide()
}else{if(F>=n-1){$(".video_wrap a.video_next").hide();
$(".video_wrap a.video_prev").show()
}else{$(".video_wrap a.video_next").show();
$(".video_wrap a.video_prev").show()
}}TweenMax.to($(".video_box"),0.5,{marginLeft:m*-F,ease:"easeInExpo"})
}}A();
L();
g();
function A(){var k=new onSwipeFnc(".gallery_exterior .wide_wrap .img_wrap");
k.moveEnd=function(Y,aa,X,Z,ab){if(X=="end"){if(aa=="right"){var W=P-1;
if(W<0){W=M-1
}$(".gallery_exterior .wide_wrap .gallery_paging > ul > li:eq("+W+") > a").trigger("click")
}else{if(aa=="left"){var W=P+1;
if(W>M-1){W=0
}$(".gallery_exterior .wide_wrap .gallery_paging > ul > li:eq("+W+") > a").trigger("click")
}}}};
$(".gallery_exterior .wide_wrap  .gallery_paging > ul > li > a").on("click",function(X){X.stopPropagation();
X.preventDefault();
if(!$(this).parent().hasClass("on")){$(".gallery_exterior .wide_wrap .gallery_paging > ul > li").removeClass("on");
$(this).parent().addClass("on");
var W=$(this).parent().index();
$(".gallery_exterior .wide_wrap .img_wrap > div").hide();
$(".gallery_exterior .wide_wrap .img_wrap > div").eq(W).show();
P=W
}})
}function L(){var k=new onSwipeFnc(".gallery_interior .wide_wrap .img_wrap");
k.moveEnd=function(Y,aa,X,Z,ab){if(X=="end"){if(aa=="right"){var W=z-1;
if(W<0){W=K-1
}$(".gallery_interior .wide_wrap .gallery_paging > ul > li:eq("+W+") > a").trigger("click")
}else{if(aa=="left"){var W=z+1;
if(W>K-1){W=0
}$(".gallery_interior .wide_wrap .gallery_paging > ul > li:eq("+W+") > a").trigger("click")
}}}};
$(".gallery_interior .wide_wrap  .gallery_paging > ul > li > a").on("click",function(X){X.stopPropagation();
X.preventDefault();
if(!$(this).parent().hasClass("on")){$(".gallery_interior .wide_wrap .gallery_paging > ul > li").removeClass("on");
$(this).parent().addClass("on");
var W=$(this).parent().index();
$(".gallery_interior .wide_wrap .img_wrap > div").hide();
$(".gallery_interior .wide_wrap .img_wrap > div").eq(W).show();
z=W
}})
}function g(){var k=new onSwipeFnc(".gallery_video .video_box");
k.moveEnd=function(Y,aa,X,Z,ab){if(X=="end"){if(aa=="right"){var W=F-1;
if(W<0){W=n-1
}$(".video_paging > ul > li:eq("+W+") > a").trigger("click")
}else{if(aa=="left"){var W=F+1;
if(W>n-1){W=0
}$(".video_paging > ul > li:eq("+W+") > a").trigger("click")
}}}}
}function T(k){$(".video_popup .pop_con .img_more dt").text($(k).find(".title").text());
$(".video_popup .pop_con .img_more dd").html($(k).find(".overview").html());
R.open()
}};
var accInit=function(){var a;
$(".filter_wrap a.input_box").on("click",function(g){g.stopPropagation();
g.preventDefault();
if($(".filter_wrap ul").css("display")=="none"){$(".filter_wrap ul").css("display","block")
}else{$(".filter_wrap ul").css("display","none")
}});
$(".acc_box ul > li > a").on("click",function(g){g.stopPropagation();
g.preventDefault();
b(this)
});
var c=new OpenDimPop($(".popup_wrap"),$(".popup_wrap .pop_con"),{plusHeaderHeight:$(".snb_pip").outerHeight()});
var e=new OpenDimPop($(".popup_wrap02"),$(".popup_wrap02 .pop_con"),{plusHeaderHeight:$(".snb_pip").outerHeight()});
function b(i){if($(i).hasClass("videoPop")){var j=getURLParameter($(i).attr("href"),"v");
var g="<iframe id='youtubeIframe' width='100%' height='100%' src='//www.youtube.com/embed/"+j+"?enablejsapi=1' frameborder='0' allowfullscreen></iframe>";
$(".popup_wrap02 .pop_con .youtube").html(g);
e.open();
$(".popup_wrap02 .pop_con dt").text($(i).find(".title").text());
$(".popup_wrap02 .pop_con dd").text($(i).find(".subTxt").text())
}else{var h;
if($(i).find("img:first").attr("layer")){h=$(i).find("img:first").attr("layer")
}else{h=$(i).find("img:first").attr("src")
}$.imgpreload(h,function(){$(".pip_wrap .pop_con img").attr("src",h);
c.open()
});
$(".pip_wrap .pop_con dt").text($(i).find(".title").text());
$(".pip_wrap .pop_con dd").text($(i).find(".subTxt").text())
}}function f(){$(".popup_wrap").hide();
$(".popup_wrap02").hide();
$(".dimmed").hide();
tapIndexFnc.Close()
}$(window).resize(function(){if($(window).height()!=lastWindowHeight||$(window).width()!=lastWindowWidth){lastWindowHeight=$(window).height();
lastWindowWidth=$(window).width();
d()
}}).resize();
function d(){$(".filter_wrap ul").css("display","");
document.body.style.overflow="hidden";
a=$(window).width();
document.body.style.overflow="";
if(IE_VER<9&&IE_VER!==false){}else{if(a>=TABLET_WIDTH){}else{}}}};
var reviewInit=function(){var i=0,b,h,d=0,f,l;
var e=$(".review_interaction a.prev"),a=$(".review_interaction a.next"),n=$(".media_review a.prev"),k=$(".media_review a.next");
$(window).resize(function(){if($(window).height()!=lastWindowHeight||$(window).width()!=lastWindowWidth){lastWindowHeight=$(window).height();
lastWindowWidth=$(window).width();
m()
}}).resize();
$(window).load(function(){c()
});
function c(){b=$(".review_interaction .control ul.num > li").length;
f=$(".media_review .control ul.num > li").length;
e.hide();
n.hide();
if(b<2){a.hide()
}if(f<4){k.hide()
}var p=new onSwipeFnc(".review_interaction .slide_wrap");
p.moveEnd=function(s,u,r,t,v){if(r=="end"){if(u=="right"){var q=i-1;
if(q<0){q=b-1
}$(".review_interaction .control ul.num > li:eq("+q+") > a").trigger("click")
}else{if(u=="left"){var q=i+1;
if(q>b-1){q=0
}$(".review_interaction .control ul.num > li:eq("+q+") > a").trigger("click")
}}}};
var o=new onSwipeFnc(".media_review .mediaCon > ul");
o.moveEnd=function(s,u,r,t,v){if(r=="end"){if(u=="right"){var q=d-1;
if(q<0){q=f-1
}$(".media_review .control ul.num > li:eq("+q+") > a").trigger("click")
}else{if(u=="left"){var q=d+1;
if(q>f-1){q=0
}$(".media_review .control ul.num > li:eq("+q+") > a").trigger("click")
}}}}
}a.on("click",function(p){p.stopPropagation();
p.preventDefault();
var o=i+1;
g(o,0.5)
});
e.on("click",function(p){p.stopPropagation();
p.preventDefault();
var o=i-1;
g(o,0.5)
});
$(".review_interaction .control ul.num > li > a").on("click",function(p){p.stopPropagation();
p.preventDefault();
var o=$(this).parent().index();
g(o,0.5)
});
k.on("click",function(p){p.stopPropagation();
p.preventDefault();
var o=d+1;
j(o,0.5)
});
n.on("click",function(p){p.stopPropagation();
p.preventDefault();
var o=d-1;
j(o,0.5)
});
$(".media_review .control ul.num > li > a").on("click",function(p){p.stopPropagation();
p.preventDefault();
var o=$(this).parent().index();
j(o,0.5)
});
function g(o,p){$(".review_interaction .control ul.num > li").removeClass("on");
$(".review_interaction .control ul.num > li").eq(o).addClass("on");
h=$(".review_interaction .slide_wrap .img_wrap > li").width();
TweenMax.to($(".review_interaction .slide_wrap .img_wrap"),p,{marginLeft:h*-o,ease:"easeOutExpo",force3D:true});
i=o;
if(i==0){a.show();
e.hide()
}else{if(i==b-1){a.hide();
e.show()
}else{a.show();
e.show()
}}}function j(o,p){$(".media_review .control ul.num > li").removeClass("on");
$(".media_review .control ul.num > li").eq(o).addClass("on");
l=$(".media_review .mediaCon > ul > li").width()+9;
TweenMax.to($(".media_review .mediaCon > ul"),p,{marginLeft:l*-o,ease:"easeOutExpo",force3D:true});
d=o;
if(d==0){k.show();
n.hide()
}else{if(d==f-1){k.hide();
n.show()
}else{k.show();
n.show()
}}}function m(){document.body.style.overflow="hidden";
var p=$(window).width();
document.body.style.overflow="";
var o=$(window).width();
if(IE_VER<9&&IE_VER!==false){$(".review .review_visual > h3, .review .review_visual > div").css({width:"940px",margin:"0 auto"});
$(".review_interaction .slide_wrap ul.img_wrap > li").css("width",940);
$(".review_interaction .slide_wrap ul.img_wrap > li .review_data").css("width",672);
$(".review_interaction .slide_wrap ul.img_wrap").css({"margin-left":940*-i});
$(".media_review .mediaCon > ul > li").css({width:940/3-6});
$(".review .media_review").css("width",940)
}else{if(p>980){$(".review .review_visual > h3, .review .review_visual > div").css({width:"940px",margin:"0 auto"});
$(".review_interaction .slide_wrap ul.img_wrap > li").css("width",940);
$(".review_interaction .slide_wrap ul.img_wrap > li .review_data").css("width",672);
$(".review_interaction .slide_wrap ul.img_wrap").css({"margin-left":940*-i});
$(".media_review .mediaCon > ul > li").css({width:940/3-6});
$(".review .media_review").css("width",940);
l=$(".media_review .mediaCon > ul > li").width()+9;
$(".media_review .mediaCon > ul").css("margin-left",l*-d)
}else{if(p>MOBILE_WIDTH){$(".review .review_visual > h3, .review .review_visual > div").css({width:"auto",margin:""});
$(".review_interaction .slide_wrap ul.img_wrap > li").css("width",o-30);
$(".review_interaction .slide_wrap ul.img_wrap > li .review_data").css("width",o-240-85);
$(".review_interaction .slide_wrap ul.img_wrap").css({"margin-left":(o-30)*-i});
$(".media_review .mediaCon > ul > li").css("width",o/3-18);
$(".review .media_review").css("width","auto");
l=$(".media_review .mediaCon > ul > li").width()+9;
$(".media_review .mediaCon > ul").css("margin-left",l*-d)
}else{$(".review .review_visual > h3, .review .review_visual > div").css({width:"auto",margin:""});
$(".review_interaction .slide_wrap ul.img_wrap > li").css("width",o-30);
$(".review_interaction .slide_wrap ul.img_wrap > li .review_data").css("width",o-68);
$(".review_interaction .slide_wrap ul.img_wrap").css({"margin-left":(o-30)*-i});
$(".media_review .mediaCon > ul > li").css("width",o-30);
$(".review .media_review").css("width","auto");
l=o-20;
$(".media_review .mediaCon > ul").css("margin-left",l*-d)
}}}}};
function getURLParameter(b,a){return(RegExp(a+"=(.+?)(&|$)").exec(b)||[,null])[1]
};