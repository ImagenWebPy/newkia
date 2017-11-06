var content1;
var content2;
var content3;
var content4;
var content5;
var _currentStep = 0;
var selectAreaNum = -1;
var popupMode3 = false;
var popupMode4 = false;
var popupMode5 = false;
var popup4ContentNum = 0;
var popup5ContentNum = -1;

$(document).ready(function(){

	$(window).resize(checkResizeListener);
	$(window).scroll(checkScrollListener);
	checkResizeListener();
	checkScrollListener();
	
	$(".quick>ul>li>a").bind("click",quickClickHandler);

	$("#sd_content_03>.text_content>.btn_more>a").bind("click",content3ViewClickHandler);
	$("#sd_content_04>.text_content>.btn_more>a").bind("click",content4ViewClickHandler);
	$("#sd_content_04>.text_content>.accordian_box>ul>li>a").bind("click",content4ViewListClickHandler);
	$("#sd_content_04>.text_content>.accordian_box>ul>li>.accordian_list>span>a").bind("click", content4ViewPopupClickHandler);
	$("#sd_content_04>.text_content>.accordian_box>ul>li>.accordian_list>.pop_box>a").bind("click", content4PopupClosedClickHandler);
	$("#sd_content_05>.text_content>.btn_more>a").bind("click",content5ViewClickHandler);
	$("#sd_content_05>.text_content>.accordian_box>ul>li>a").bind("click",content5ViewListClickHandler);
	$("#sd_content_05>.text_content>.accordian_box>ul>li>p>span>a").bind("click",content5ViewClosedClickHandler);


	//ë§í¬ë³€í™˜
	$("a").each(function(){
		if( $(this).attr("href") == "#" || $(this).attr("href") == "#none"){
			$(this).attr("href", "javascript:void(0)");
		}
	});
})
//ë¦¬ì‚¬ì´ì¦ˆ ê´€ë ¨
function checkResizeListener(){

	if($(window).width()>980){
		var _left = (993+($(window).width()-980)/2);
		$(".quick").css("left",_left);
	}
}
//ìŠ¤í¬ë¡¤ì´ë™
function checkScrollListener(){

	var _top = ($(window).scrollTop()+215);

	//$(".quick").animate({top : _top}, 100);
	content1 = $("#sd_content_01").offset();
	content2 = $("#sd_content_02").offset();
	content3 = $("#sd_content_03").offset();
	content4 = $("#sd_content_04").offset();
	content5 = $("#sd_content_05").offset();

	if( _top > (content5.top-$(window).height())+500 ) _top = (content5.top-$(window).height())+500;
	$(".quick").css("top",_top);

	if($(window).scrollTop()<(content2.top-50)){

		_currentStep = 0;
	}else if($(window).scrollTop()>=(content2.top-50) && $(window).scrollTop()<(content3.top-50)){

		_currentStep = 1;
	}else if($(window).scrollTop()>=(content3.top-50) && $(window).scrollTop()<(content4.top-$(window).height()/3)){

		_currentStep = 2;
	}else if($(window).scrollTop()>=(content4.top-$(window).height()/3) && $(window).scrollTop()<(content5.top-$(window).height())+400){

		_currentStep = 3;
	}else if($(window).scrollTop()>=(content5.top-$(window).height())+400){

		_currentStep = 4;
	}
	console.log(_top + "==="+((content5.top-$(window).height())+200)+"==="+$(window).scrollTop()+"==="+$("#sd_content_05").height()+"-------------"+_currentStep)
	changeCurrentSelect();
}
//í˜„ì œ í€µì„ íƒ
function changeCurrentSelect(){
	if(_currentStep != selectAreaNum){
		selectAreaNum = _currentStep;
		$(".quick>ul").find(".on").removeClass("on");
		$(".quick>ul>li").eq(selectAreaNum).addClass("on");
	}
}
//í€µë²„íŠ¼ í´ë¦­í›„ ì´ë™
function quickClickHandler(){
	var movieTarget = $("#sd_content_0"+($(this).parent().index()+1)).offset();
	var moveTarNum = movieTarget.top-40
	switch($(this).parent().index()){
		case 3:
			moveTarNum = content4.top-$(window).height()/3+10;
			break;
		case 4:
			moveTarNum = content5.top
			break;
	}
	$('html, body').animate({scrollTop : moveTarNum}, 300);
}


//3ë²ˆ ì»¨í…ì¸  ë·°
function content3ViewClickHandler(){
	var $this3 = $("#sd_content_03>.text_content>.btn_more>a")
	var _clickImgName = $this3.find("img").attr("src")
	//_overImgName = $(this).find("img").attr("src");
	if(popupMode4) content4ViewClickHandler();
	if(popupMode5) content5ViewClickHandler();
	if(popupMode3){
		$this3.parent().parent().removeClass("on");
		$this3.find("img").attr("src",_clickImgName.substring(0,_clickImgName.length-5)+"ff.png");
	}else{
		$this3.find("img").attr("src",_clickImgName.substring(0,_clickImgName.length-6)+"n.png");
		$this3.parent().parent().addClass("on");
	}
	popupMode3 = !popupMode3
}

//4ë²ˆ ì»¨í…ì¸  ë·°
function content4ViewClickHandler(){
	var $this4 = $("#sd_content_04>.text_content>.btn_more>a")
	var _clickImgName = $this4.find("img").attr("src")
	//_overImgName = $(this).find("img").attr("src");
	if(popupMode3) content3ViewClickHandler();
	if(popupMode5) content5ViewClickHandler();
	if(popupMode4){
		$(this).parent().parent().find(".pop_box").removeClass("on")
		popup4ContentNum = 0
		settingContent4()
		$this4.parent().parent().removeClass("on");
		$this4.find("img").attr("src",_clickImgName.substring(0,_clickImgName.length-5)+"ff.png");
	}else{
		$this4.find("img").attr("src",_clickImgName.substring(0,_clickImgName.length-6)+"n.png");
		$this4.parent().parent().addClass("on");
	}
	popupMode4 = !popupMode4
}
//ë‚´ìš© í´ë¦­ì‹œ
function content4ViewListClickHandler(){
	if($(this).parent().index() == popup4ContentNum) return;
	$(this).parent().parent().find(".pop_box").removeClass("on")
	popup4ContentNum = $(this).parent().index()
	settingContent4()
}
function settingContent4(){
	// var _beforeImgName = $("#sd_content_04>.text_content>.accordian_box>ul").find(".on").find("a>img").attr("src")
	// $("#sd_content_04>.text_content>.accordian_box>ul").find(".on").find(">a>img").attr("src",_beforeImgName.substring(0,_beforeImgName.length-5)+"ff.png")
	$("#sd_content_04>.text_content>.accordian_box>ul").find(".on").removeClass("on")
	// var _afterImgName = $("#sd_content_04>.text_content>.accordian_box>ul>li").eq(popup4ContentNum).find("img").attr("src")
	// $("#sd_content_04>.text_content>.accordian_box>ul>li").eq(popup4ContentNum).find(">a>img").attr("src",_afterImgName.substring(0,_afterImgName.length-6)+"n.png");
	$("#sd_content_04>.text_content>.accordian_box>ul>li").eq(popup4ContentNum).addClass("on")
}
function content4ViewPopupClickHandler(){
	$(this).parent().parent().find(".pop_box").addClass("on")
}
function content4PopupClosedClickHandler(){
	$(this).parent().parent().find(".pop_box").removeClass("on")
}

//5ë²ˆ ì»¨í…ì¸  ë·°
function content5ViewClickHandler(){
	var $this5 = $("#sd_content_05>.text_content>.btn_more>a")
	var _clickImgName = $this5.find("img").attr("src")
	if(popupMode3) content3ViewClickHandler();
	if(popupMode4) content4ViewClickHandler();
	if(popupMode5){
		popup5ContentNum = -1
		$("#sd_content_05>.text_content>.accordian_box>ul>li").find(".on").removeClass("on")
		$this5.parent().parent().removeClass("on");
		$this5.find("img").attr("src",_clickImgName.substring(0,_clickImgName.length-5)+"ff.png");
	}else{
		$this5.find("img").attr("src",_clickImgName.substring(0,_clickImgName.length-6)+"n.png");
		$this5.parent().parent().addClass("on");
	}
	popupMode5 = !popupMode5
}
//ë‚´ìš© í´ë¦­ì‹œ
function content5ViewListClickHandler(){
	if(popup5ContentNum != -1){
		$(this).parent().parent().find(".on").removeClass("on")
	}
	popup5ContentNum = $(this).parent().index()
	$(this).next().addClass("on")
}
function content5ViewClosedClickHandler(){
	$(this).parent().parent().removeClass("on")
	popup5ContentNum = -1
}