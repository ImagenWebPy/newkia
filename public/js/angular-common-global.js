/**
 * @desc define app
 * @author A923793
 */
/*****************************
* define angular app
******************************/
var kwcmsApp = angular.module('kwcmsAppModuleApp', ['ngSanitize']);

//reset stylish select
kwcmsApp.directive('afterOptionElement', function ($timeout){
    return {
        restrict: 'A',
        link: function (scope, element, attr) {
            if (scope.$last === true) {
                $timeout(function () {
                	$(".form_select").resetSS();
                });
            }
        }
    }
});	

kwcmsApp.directive('afterRadioElement', function ($timeout){
	return {
		restrict: 'A',
		link: function (scope, element, attr) {
			if (scope.$last === true) {
				$timeout(function () {
					if($(".radio_box").length){
						radioBoxInit();
					}
				});
			}
		}
	}
});

kwcmsApp.directive('afterCheckboxElement', function ($timeout){
	return {
		restrict: 'A',
		link: function (scope, element, attr) {
			if (scope.$last === true) {
				$timeout(function () {
					if($(".check_box").length){
	                    checkBoxInit();
	                }
				});
			}
		}
	}
});


kwcmsApp.service('ByoPopupService', function (){
	var popupOpen = function(/*String */ target){
        $("." + target).show();
        $(".dimmed").show();

        var top = $(window).scrollTop();
        var h1 = $(window).height();
        var h2 = $("." + target + " .pop_con").outerHeight();
        var headerHeight = $("#header").outerHeight();
        if(h1 < GNB_VISIBLE_HEIGHT && $(window).width() > MOBILE_WIDTH){headerHeight = 0;}
        var t;
        if($(window).width() > MOBILE_WIDTH){
           t = top + h1/2 - h2/2 + headerHeight/2;
        }else{
            t = top + h1/2 - h2/2 - headerHeight;
        }   
        if ( t < 41 ){ t = 41;}
        $("." + target).css( { position:"absolute" , top:t  } );
        $(".dimmed").css({"height":""});
        var docH = $(document).height();
        $(".dimmed").css({"height":docH,"position":"fixed"});

        if($("*:focus").length > 0){
           tapIndexFnc.Init($("." + target));
        }
    };
    
    var popupClose = function(/*String */ target) {
		$("." + target).hide();
        $(".dimmed").hide();
        tapIndexFnc.Close();
	};
	
	return {
		open	: popupOpen,
		close	: popupClose
	};
});

kwcmsApp
.filter("parseDate", function () {
    return function (input) {
    	if(input!=""&&input!=null){
    		return new Date(input.replace(/-/g,"/").replace(".0",""));
    	}
    };
}).filter("commaNum", function() {
//	return function (num) {
		if(num!=""&&num!=null){
	        var commanum = num.toString().split(/(?=(?:\d{3})+(?:\.|$))/g).join(',');
	        return commanum;
		}
//	}
}).filter('sanitize', ['$sce', function($sce) {
    return function(htmlCode) {
    	if(htmlCode!=""&&htmlCode!=null){
    		//var filterHtml = filterXSS(htmlCode).replace(/\n/g, '<br>');
    		var filterHtml = htmlCode.replace(/\n/g, '<br>');
    		return $sce.trustAsHtml(filterHtml);
    	}
    };
}]).service("PopupService", function(){ //Service for popup

	var popupOpen = function(/*String */ target){
        $("." + target).show();
        $(".dimmed").show();

        var top = $(window).scrollTop();
        var h1 = $(window).height();
        var h2 = $("." + target + " .pop_con").outerHeight();
        var headerHeight = $("#header").outerHeight();
        if(h1 < GNB_VISIBLE_HEIGHT && $(window).width() > MOBILE_WIDTH){headerHeight = 0;}
        var t;
        if($(window).width() > MOBILE_WIDTH){
           t = top + h1/2 - h2/2 + headerHeight/2;
        }else{
            t = top + h1/2 - h2/2 - headerHeight;
        }   
        if ( t < 41 ){ t = 41;}
        $("." + target).css( { position:"absolute" , top:t  } );
        $(".dimmed").css({"height":""});
        var docH = $(document).height();
        $(".dimmed").css({"height":docH,"position":"fixed"});

        if($("*:focus").length > 0){
           tapIndexFnc.Init($("." + target));
        }
    };
    
    var popupClose = function(/*String */ target) {
		$("." + target).hide();
        $(".dimmed").hide();
        tapIndexFnc.Close();
	};
	
	return {
		open	: popupOpen,
		close	: popupClose
	};
}).service("HttpService", function ($http) {

	var xmlRequest = function (params, callback, args) {
		
		params.method = params.method.toUpperCase();

        var setRequest = {
             method : params.method
			, url : params.url
        };
        
        if (angular.equals(params.method, "GET")) {
        	setRequest.params = params.params;
        } else if (angular.equals(params.method, "POST")) {
        	setRequest.data = $.param(params.params)
        	setRequest.headers = {'Content-Type': 'application/x-www-form-urlencoded'}
        }

		$http(
			setRequest
		).success(function(data) {
			callback(data, args);
		});
	};

	//method alias
    return {
        http : xmlRequest
    };
});