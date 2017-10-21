<div id="container" ng-app="kwcmsAppModuleApp" ng-cloak>    
    <div id="content" class="subContents">
        <div class="par parsys"><div class="parbase global-title section">
                <div class="content_title">
                    <!-- 20150827 GT SEO h3 > h1 -->
                    <h1 class="con_tit"><p>Cotizar</p>
                    </h1>
                    <div class="con_navi">
                        <ol vocab="http://schema.org/" typeof="BreadcrumbList">
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="http://org-www.kia.com/gt/main.html" property="item" typeof="WebPage"><span class="cmm_spr spr_home" property="name">Home</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=  1>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="http://org-www.kia.com/gt/shopping-tools.html" property="name" typeof="WebPage"><span class="depth" property="name">shopping tools</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=  2>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <strong class="depth current"property="name">Cotizar</strong>
                                <meta property="position" content=  3>
                            </li>
                        </ol>
                    </div>
                </div></div>
            <div class="request-a-quote section">
                <script type="text/javascript">
                    //require variables for car-selector component
                    var _over_selected_message_ = "Exceeds the number of vehicles to choose.";
                    var _max_count_vehicle_selected_ = parseInt("3", 10);
                    var _selected_vehicle_ = null;
                    var _suffix_selected_vehicle_ = getSuffixMapFromURL();
                    var _reference_controller_scope_ = null;
                    //require variables for userdata-keyin, userdata-view component
                    var _user_data_ = null;
                    //require variables for userdata-view component
                    var _userdata_view_scope_ = null;
                    var _vehicle_data_ = _selected_vehicle_;
                    var _vehicle_trim_data_ = null;
                    var _vehicle_trim_code_ = null;
                    var _dealer_data_ = null;
                    var _center_data_ = null;
                    var _carType = null;
                    var _vehicle_name = null;
                    var _vehicle_trim = null;
                    var _dealer_name = null;
                    //require variables for dealer-info component
                    var _selected_dealer_ = null;
                    kwcmsApp.controller("requestaquote.steps", function($scope, $timeout, HttpService) {
                    //reference_controller_scope
                    _reference_controller_scope_ = $scope;
                    //current step
                    $scope.step = "";
                    //carlist
                    $scope.cars = null;
                    //user data
                    $scope.userData = null;
                    //initialize
                    $scope.init = function () {
                    $scope.step = "1";
                    };
                    //change step method
                    $scope.stepChange = function (step) {
                    _dealer_search_.resetSearch();
                    $scope.step = step;
                    };
                    $scope.checkedBoxArray = function(){
                    $rootScope.checkBoxList = [];
                    angular.element(".c_on").each(function(index) {
                    $rootScope.checkBoxList[index] = angular.element(this).attr("value");
                    });
                    };
                    $scope.SelectedCarTrim = [];
                    $scope.SelectedCarTrimCode = [];
                    $scope.fnSelectTrim = function(){
                    var isfalse = false;
                    if ($(":input:radio[name^='Trim_']:checked").val()){
                    isfalse = true;
                    $scope.selectedTrim = $(":radio[name^='Trim_']:checked").val();
                    $scope.selectedTrimName = $(":radio[name^='Trim_']:checked").attr("trimName");
                    $(":input:radio[name^='Trim_']:checked").each(function(idx){
                    $scope.SelectedCarTrim[idx] = $(this).attr("trimName");
                    var idxCar = $(this).attr("id").split("_")[1];
                    var idxTrim = $(this).attr("id").split("_")[2];
                    $scope.SelectedCarTrimCode[idx] = $scope.cars[idxCar].carTrimCode[idxTrim];
                    });
                    _vehicle_trim_data_ = $scope.SelectedCarTrim;
                    _vehicle_trim_code_ = $scope.SelectedCarTrimCode;
                    angular.forEach(_vehicle_trim_code_, function (k, v) {
                    $scope.cars[v]["selectedTrimCode"] = k;
                    });
                    }
                    return isfalse;
                    };
                    //validation for steps
                    $scope.validation = function (step, nStep, isNext) {
                    var isValid = true;
                    switch (step) {
                    case "1":
                            var selectInfo = _vehicle_data_ = _selected_vehicle_;
                    if (selectInfo == null || selectInfo.carCount == 0) {
                    alert('Please choice a vehicle');
                    isValid = false;
                    } else {
                    var selectInfoList = [];
                    var carType = $(".car_box .on").last().attr("href");
                    _carType = carType.substr(1, carType.indexOf("Cars") - 1);
                    _carType = _carType == "suv" ? "suv&mpv" : _carType;
                    for (var i = 0, iCnt = selectInfo.carKey.length; i < iCnt; i++) {
                    selectInfoList[i] = {
                    carKey : selectInfo.carKey[i]
                            , carCode : selectInfo.carCode[i]
                            , carName : selectInfo.carName[i]
                            , carImage : selectInfo.carImage[i]
                            , carTrim : selectInfo.carTrim[i]
                            , carTrimCode : selectInfo.carTrimCode[i]
                    };
                    if (i == iCnt - 1){
                    _vehicle_name = selectInfo.carCode[i].replace("-", "_");
                    }
                    }

                    dtmDataLayer = {
                    'vehicle_name': _vehicle_name,
                            'vehicle_type': _carType
                    }
                    _satellite.track('quote_vehicle');
                    $scope.cars = selectInfoList;
                    }
                    break;
                    case "2":
                            var selectedTrim = $scope.fnSelectTrim();
                    $scope.selectedTrimCode = $(":radio[name^='Trim_']:checked").attr("trimcode");
                    if ($scope.cars.length != $(":radio[name^='Trim_']:checked").length) {
                    alert('Please select a trim');
                    isValid = false;
                    }

                    dtmDataLayer = {
                    'vehicle_name': _vehicle_name,
                            'vehicle_type': _carType,
                            'vehicle_trim': $scope.selectedTrimName
                    }
                    _satellite.track('quote_trim');
                    break;
                    case "3":
                            $scope.selectedDealer = _dealer_data_ = _selected_dealer_;
                    if (!_selected_dealer_) {
                    alert('Please select a dealer');
                    isValid = false;
                    }

                    dtmDataLayer = {
                    'vehicle_name': _vehicle_name,
                            'vehicle_type': _carType,
                            'vehicle_trim': $scope.selectedTrimName,
                            'dealer_name': $scope.selectedDealer.dealerNm
                    }
                    _satellite.track('quote_dealer');
                    break;
                    case "4":
                            userdataInfoSubmit();
                    if (_user_data_ != null) {
                    $scope.userData = _user_data_;
                    //fill user data
                    if (_userdata_view_scope_ != null) {
                    _userdata_view_scope_.userDataInit();
                    }

                    dtmDataLayer = {
                    'vehicle_name': _vehicle_name,
                            'vehicle_type': _carType,
                            'vehicle_trim': $scope.selectedTrimName,
                            'dealer_name': $scope.selectedDealer.dealerNm
                    }
                    _satellite.track('quote_myinfo');
                    } else {
                    isValid = false;
                    }
                    break;
                    }

                    if (isValid && isNext) {
                    $scope.stepChange(nStep);
                    }
                    };
                    //send
                    $scope.send = function ($event) {

                    $event.preventDefault();
                    var moveURI = $event.target.href;
                    var params = {
                    method : "POST"
                            , params : returnAjaxParameters()
                            , url : "/api/kia_global/base/rq02/reqQuote.insertReqQuote"
                    };
                    HttpService.http(params, $scope.sended, moveURI);
                    };
                    //send completed
                    $scope.sended = function (data, uri) {

                    dtmDataLayer = {
                    'vehicle_name': _vehicle_name,
                            'vehicle_type': _carType,
                            'vehicle_trim': $scope.selectedTrimName,
                            'dealer_name': $scope.selectedDealer.dealerNm
                    }
                    _satellite.track('quote_complete');
                    if (angular.equals(data.status, "Success")) {
                    //movePage("The request completed! Thank you!");


                    alert("The request completed! Thank you!");
                    if (!angular.equals(uri, "") && !angular.equals(uri, undefined)) {
                    document.location.href = uri;
                    } else {
                    document.location.href = "http://org-www.kia.com/content/kwcms/gt/en.html";
                    }
                    }
                    };
                    //byPass Menu
                    $scope.byPass = function ($event, addSuffix) {
                    $event.preventDefault();
                    var passURI = $event.target.href;
                    if (addSuffix) {
                    passURI += angular.element("#below-car-list > option:selected").val();
                    }
                    document.location.href = passURI;
                    };
                    //if selected vehicle exist from suffix, execute by car-selector component
                    $scope.autoExec = function () {
                    $scope.validation('1', '2', true);
                    $timeout(function(){
                    if (_suffix_selected_vehicle_.trimCode != null){
                    var carTrim = _suffix_selected_vehicle_.trimCode;
                    $("input[name^='Trim']").each(function(idx){
                    if ($("input[name^='Trim']").eq(idx).attr("trimcode") == decodeURI(carTrim)){
                    $("input[name^='Trim']").eq(idx).click();
                    $scope.validation('2', '3', true);
                    };
                    });
                    }
                    }, 100);
                    };
                    });</script>
                <!-- Adobe Target Implementation 20151103 -->
                <div id="dynamicElement_conv"></div> 
                <script type="text/javascript">mboxDefine('dynamicElement_conv', 'BtnClick');</script>
                <div class="content_detail" ng-controller="requestaquote.steps" ng-init="init()">
                    <div class="inner request_quote" ng-show="step == 1">
                        <ol class="stepType01 quoteStep">
                            <li class="stepWrap on">
                                <div class="stepbar bar01">
                                    <strong class="num"><em>01</em></strong>
                                    <div class="txt">
                                        <strong>Vehicle</strong> 
                                        <span class="ex">Please select vehicle. (You can select up to three.)</span>
                                    </div>
                                </div>
                                <div class="stepCon">
                                    <div class="parsys car-selector"><div class="car-selector section">
                                            <script type="text/javascript">
                                                /* ie8 Array indexOf 선언*/
                                                if (!Array.prototype.indexOf)
                                                {
                                                Array.prototype.indexOf = function(elt /*, from*/)
                                                {
                                                var len = this.length >>> 0;
                                                var from = Number(arguments[1]) || 0;
                                                from = (from < 0)
                                                        ? Math.ceil(from)
                                                        : Math.floor(from);
                                                if (from < 0)
                                                        from += len;
                                                for (; from < len; from++)
                                                {
                                                if (from in this &&
                                                        this[from] === elt)
                                                        return from;
                                                }
                                                return - 1;
                                                };
                                                }
                                                /*
                                                 * if use the this componet, 
                                                 * must be defined "_over_selected_message_",  "_max_count_vehicle_selected_", "_selected_vehicle_" variables.
                                                 */
                                                var _vehicle_selector_controller_ = null;
                                                kwcmsApp.controller("carselector.selector", function($scope, $timeout, HttpService) {

                                                //reference_controller_scope
                                                _vehicle_selector_controller_ = $scope;
                                                //default car list
                                                $scope.selectedCar = "";
                                                //initialize
                                                $scope.init = function (scope) {
                                                $scope.selectedCar = "All";
                                                $scope.searchCars();
                                                };
                                                //current selected vehicle count
                                                $scope.currentSelectedCount = 0;
                                                //search Cars
                                                $scope.carCars = null;
                                                $scope.hyBridCars = null;
                                                $scope.suvCars = null;
                                                $scope.commercialCars = null;
                                                //click vehicle category
                                                $scope.selectCategory = function (cate) {
                                                $scope.selectedCar = cate;
                                                $timeout(function () {
                                                angular.element("#" + cate).click();
                                                $scope.callbackReturn();
                                                }, 100);
                                                };
                                                //get vehicle list
                                                $scope.searchCars = function () {
                                                var params = {
                                                method : "GET"
                                                        , params : {
                                                        nCd : "gt"
                                                        }
                                                , url : "/api/kia/base/carInfo.selectVehicleList"
                                                        //, url : "/api/kia-global/base/carInfo.selectVehicleList"
                                                };
                                                HttpService.http(params, $scope.parseVehicle, "");
                                                };
                                                //callback searchCars method
                                                $scope.parseVehicle = function (data) {
                                                if (angular.equals(data.result, "Success")) {
                                                $scope.carCars = data.dataInfo.carCars;
                                                $scope.hyBridCars = data.dataInfo.hybridCars;
                                                $scope.suvCars = data.dataInfo.suvMpvCars;
                                                $scope.commercialCars = data.dataInfo.commercialCars;
                                                $scope.clickFromSuffix();
                                                }
                                                };
                                                //callback car info
                                                $scope.callbackInfo = {
                                                carCount : $scope.currentSelectedCount
                                                        , carKey : []
                                                        , carCode : []
                                                        , carName : []
                                                        , carImage : []
                                                        , carTrim : []
                                                        , carTrimCode : []
                                                };
                                                //reset selected vehicle
                                                $scope.resetSelectedCar = function () {
                                                $scope.currentSelectedCount = 0;
                                                $scope.callbackInfo = {
                                                carCount : 0
                                                        , carKey : []
                                                        , carCode : []
                                                        , carName : []
                                                        , carImage : []
                                                        , carTrim : []
                                                        , carTrimCode : []
                                                };
                                                };
                                                //choice vehicle
                                                var maxCount = ((_max_count_vehicle_selected_ != undefined) || (_max_count_vehicle_selected_ != null)) ? _max_count_vehicle_selected_ : 1;
                                                $scope.choice = function (code, type) {

                                                if (angular.equals(maxCount, 1)) { //every newly selected
                                                $scope.resetSelectedCar();
                                                }

                                                var idx = $scope.callbackInfo.carCode.indexOf(code);
                                                if (idx > - 1) { // is currently selected
                                                $scope.callbackInfo.carKey.splice(idx, 1);
                                                $scope.callbackInfo.carCode.splice(idx, 1);
                                                $scope.callbackInfo.carName.splice(idx, 1);
                                                $scope.callbackInfo.carImage.splice(idx, 1);
                                                $scope.callbackInfo.carTrim.splice(idx, 1);
                                                $scope.callbackInfo.carTrimCode.splice(idx, 1);
                                                $scope.callbackInfo.carCount = --$scope.currentSelectedCount;
                                                } else { // is newly selected
                                                if ($scope.currentSelectedCount >= maxCount) {
                                                alert(_over_selected_message_);
                                                } else {
                                                var targetCars = null;
                                                var targetCarsTrim = new Array();
                                                var targetCarsTrimCode = new Array();
                                                switch (type) {
                                                case "carCars" :
                                                        targetCars = $scope.carCars;
                                                break;
                                                case "hybridCars" :
                                                        targetCars = $scope.hyBridCars;
                                                break;
                                                case "suvCars" :
                                                        targetCars = $scope.suvCars;
                                                break;
                                                case "commercialCars" :
                                                        targetCars = $scope.commercialCars;
                                                break;
                                                }

                                                var isContinue = true;
                                                angular.forEach(targetCars, function (info) {
                                                if (angular.equals(code, info.code) && isContinue) {
                                                $scope.callbackInfo.carKey.push(info.key);
                                                $scope.callbackInfo.carCode.push(info.code);
                                                $scope.callbackInfo.carName.push(info.name);
                                                $scope.callbackInfo.carImage.push(info.imagePath);
                                                angular.forEach(info.details, function (trim) {
                                                targetCarsTrim.push(trim.name);
                                                targetCarsTrimCode.push(trim.code);
                                                });
                                                isContinue = false; //forEach break
                                                }
                                                });
                                                $scope.callbackInfo.carTrim.push(targetCarsTrim);
                                                $scope.callbackInfo.carTrimCode.push(targetCarsTrimCode);
                                                $scope.callbackInfo.carCount = ++$scope.currentSelectedCount;
                                                }
                                                }

                                                //marker for selected cars & return selected informaton
                                                $scope.callbackReturn();
                                                };
                                                //marker for selected cars & return selected informaton
                                                $scope.callbackReturn = function () {
                                                var carA = angular.element("div.car_wrap").find("a");
                                                var carCodes = $scope.callbackInfo.carCode;
                                                carA.removeClass("on");
                                                angular.forEach(carCodes, function (code) {
                                                carA.each(function () {
                                                if (angular.element(this).attr("class").indexOf(code) > - 1) {
                                                angular.element(this).addClass("on");
                                                }
                                                });
                                                });
                                                //callback
                                                _selected_vehicle_ = $scope.callbackInfo;
                                                };
                                                //if selected vehicle exist from suffix, create to click event (automatical select)
                                                $scope.isSuffixClick = false;
                                                $scope.clickFromSuffix = function () {
                                                if (_suffix_selected_vehicle_ != null && $scope.isSuffixClick == false) {
                                                $timeout(function () {

                                                var isContinue = true;
                                                var carCode = "";
                                                angular.forEach($scope.carCars, function (info) {
                                                if (angular.equals(_suffix_selected_vehicle_.carKey, info.key) && isContinue) {
                                                carCode = info.code;
                                                isContinue = false;
                                                }
                                                });
                                                angular.forEach($scope.hyBridCars, function (info) {
                                                if (angular.equals(_suffix_selected_vehicle_.carKey, info.key) && isContinue) {
                                                carCode = info.code;
                                                isContinue = false;
                                                }
                                                });
                                                angular.forEach($scope.suvCars, function (info) {
                                                if (angular.equals(_suffix_selected_vehicle_.carKey, info.key) && isContinue) {
                                                carCode = info.code;
                                                isContinue = false;
                                                }
                                                });
                                                angular.forEach($scope.commercialCars, function (info) {
                                                if (angular.equals(_suffix_selected_vehicle_.carKey, info.key) && isContinue) {
                                                carCode = info.code;
                                                isContinue = false;
                                                }
                                                });
                                                var objs = angular.element("a.car_a." + carCode);
                                                if (objs.length > 0) {
                                                objs.click();
                                                if (_reference_controller_scope_ != null) {
                                                _reference_controller_scope_.autoExec();
                                                _reference_controller_scope_.$apply();
                                                }
                                                }
                                                }, 100);
                                                $scope.isSuffixClick = true;
                                                }
                                                };
                                                //not use menu 20160607
                                                $scope.hideChk = function(chk){
                                                var chkVal = false;
                                                if (chk == null || chk.length < 1){
                                                chkVal = false;
                                                } else{
                                                for (var i = 0; i < chk.length; i++){
                                                if (chk[i] == "request-a-quote"){
                                                chkVal = true;
                                                break;
                                                } else{
                                                chkVal = false;
                                                }
                                                }
                                                }
                                                return chkVal;
                                                }
                                                });
                                                //apply overflow:scoll
                                                kwcmsApp.directive('afterParseVehicle', function (){
                                                return {
                                                restrict: 'A',
                                                        link: function (scope, element, attr) {
                                                        if (scope.$last === true) {
                                                        _vehicle_selector_controller_.selectCategory('All');
                                                        }
                                                        }
                                                }
                                                });</script>

                                            <div ng-controller="carselector.selector" ng-init="init()" id="carselector.selector.comp">
                                                <div class="car_category">
                                                    <span class="title">Category :</span>
                                                    <div class="category">

                                                        <span class="form_chk">
                                                            <input type="radio" id="All" name="radio01">
                                                            <label for="All" class="form_spr radio_box" ng-click="selectCategory('All')"><span class="car_spr sort1">All</span></label>
                                                        </span>


                                                        <span class="form_chk">
                                                            <input type="radio" id="Cars" name="radio01">
                                                            <label for="Cars" class="form_spr radio_box" ng-click="selectCategory('Cars')"><span class="car_spr sort2">Cars</span></label>
                                                        </span>





                                                        <span class="form_chk">
                                                            <input type="radio" id="Suv" name="radio01">
                                                            <label for="Suv" class="form_spr radio_box" ng-click="selectCategory('Suv')"><span class="car_spr sort4">SUV&amp;RV</span></label>
                                                        </span>




                                                    </div>
                                                </div>
                                                <div class="car_wrap">

                                                    <div class="car_list" ng-show="(selectedCar == 'All' || selectedCar == 'Cars') && carCars.length > 0">
                                                        <h5 class="bl_type1">Cars</h5>
                                                        <ul class="car_u">
                                                            <li class="car_l" ng-repeat="car in carCars" ng-show="!hideChk(car.notUse)" after-parse-vehicle>
                                                                <div class="car_box">
                                                                    <a href="#carCars" class="car_a {{car.code}}" title="Select" ng-click="choice(car.code, 'carCars')">
                                                                        <strong class="car_name">{{car.name}}</strong>
                                                                        <span class="car_img"><img src="{{car.imagePath}}" alt="{{car.name}}"></span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>





                                                    <div class="car_list" ng-show="(selectedCar == 'All' || selectedCar == 'Suv') && suvCars.length > 0">
                                                        <h5 class="bl_type1">SUV &amp; RV</h5>
                                                        <ul class="car_u">
                                                            <li class="car_l" ng-repeat="car in suvCars" ng-show="!hideChk(car.notUse)" after-parse-vehicle>
                                                                <div class="car_box">
                                                                    <a href="#suvCars" class="car_a {{car.code}}" title="Select" ng-click="choice(car.code, 'suvCars')">
                                                                        <strong class="car_name">{{car.name}}</strong>
                                                                        <span class="car_img"><img src="{{car.imagePath}}" alt="{{car.name}}"></span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>



                                                </div>	
                                            </div></div>

                                    </div>

                                    <div class="selData hidden">Select Vehicles :</div>
                                    <div class="step_ctrl">
                                        <a href="#next" class="btnMedium btnType1" ng-click="validation('1', '2', true)">
                                            <span class="btnIcon arrow_r">Next</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="stepWrap">
                                <div class="stepbar bar02">
                                    <strong class="num"><em>02</em></strong>
                                    <div class="txt">
                                        <strong>Trim</strong>
                                    </div>
                                </div>
                            </li>
                            <li class="stepWrap">
                                <div class="stepbar bar03">
                                    <strong class="num"><em>03</em></strong>
                                    <div class="txt">
                                        <strong>Dealer</strong>
                                    </div>
                                </div>
                            </li>
                            <li class="stepWrap">
                                <div class="stepbar bar04">
                                    <strong class="num"><em>04</em></strong>
                                    <div class="txt">
                                        <strong>My Info</strong>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>



                    <div class="inner request_quote" ng-show="step == 2">
                        <ol class="stepType01 quoteStep">
                            <li class="stepWrap paston">
                                <div class="stepbar bar01">
                                    <strong class="num"><em>01</em></strong>
                                    <div class="txt">
                                        <strong>Vehicle</strong>
                                    </div>
                                    <div class="result">
                                        <div class="car">
                                            <a href="#" class="carList" ng-repeat="car in cars" ng-click="stepChange('1')">
                                                <img src="{{car.carImage}}" alt="{{car.carName}}">
                                                <span class="carName">{{car.carName}}</span>
                                            </a> 
                                            <!-- <a href="#" class="btn_carmore">car more</a> -->
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="stepWrap on">
                                <div class="stepbar bar02">
                                    <strong class="num"><em>02</em></strong>
                                    <div class="txt">
                                        <strong>Trim</strong> 
                                        <span class="ex">Please select trim.</span>
                                    </div>
                                </div>
                                <div class="stepCon">
                                    <!-- GT SEO 20150828 h5 > h3 -->
                                    <h3 class="bl_type1" ng-repeat-start="car in cars">{{car.carName}}</h3>
                                    <ul class="trim_list" ng-repeat-end>
                                        <li class="trim_l" ng-repeat="trim in car.carTrim" after-radio-element>
                                            <span class="form_chk"><input type="radio" name="Trim_{{$parent.$index}}" id="Trim_{{$parent.$index}}_{{$index}}" trimName="{{trim}}" trimcode = "{{car.carTrimCode[$index]}}">
                                                <label for="Trim_{{$parent.$index}}_{{$index}}" class="form_spr radio_box">{{trim}}</label>
                                            </span>
                                        </li>
                                    </ul>
                                    <div class="step_ctrl">
                                        <a href="#back" class="btnMedium btnType3" ng-click="stepChange('1')">
                                            <span class="btnIcon arrow_l">Back</span>
                                        </a>
                                        <a href="#" class="btnMedium btnType1" ng-click="validation('2', '3', true)">
                                            <span class="btnIcon arrow_r">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="stepWrap">
                                <div class="stepbar bar03">
                                    <strong class="num"><em>03</em></strong>
                                    <div class="txt">
                                        <strong>Dealer</strong>
                                    </div>
                                </div>
                            </li>
                            <li class="stepWrap">
                                <div class="stepbar bar04">
                                    <strong class="num"><em>04</em></strong>
                                    <div class="txt">
                                        <strong>My Info</strong>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>



                    <div class="inner request_quote" ng-show="step == 3">
                        <ol class="stepType01 quoteStep">
                            <li class="stepWrap paston">
                                <div class="stepbar bar01">
                                    <strong class="num"><em>01</em></strong>
                                    <div class="txt">
                                        <strong>Vehicle</strong>
                                    </div>
                                    <div class="result">
                                        <div class="car">
                                            <a href="#" class="carList" ng-repeat="car in cars" ng-click="stepChange('1')">
                                                <img src="{{car.carImage}}" alt="{{car.carName}}">
                                                <span class="carName">{{car.carName}}</span>
                                            </a> 
                                            <!-- <a href="#" class="btn_carmore">car more</a> -->
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="stepWrap paston">
                                <div class="stepbar bar02">
                                    <strong class="num"><em>02</em></strong>
                                    <div class="txt">
                                        <strong>Trim</strong>
                                    </div>
                                    <div class="result">
                                        <a href="#" ng-click="stepChange('2')" ng-repeat="trim in SelectedCarTrim">{{trim}}</a>
                                    </div>
                                </div>
                            </li>

                            <li class="stepWrap on">
                                <div class="stepbar bar03">
                                    <strong class="num"><em>03</em></strong>
                                    <div class="txt">
                                        <strong>Dealer</strong> <span class="ex">Enter Zipcode, dealer name, city name</span>
                                    </div>
                                </div>
                                <div class="stepCon">
                                    <div class="parsys dealer-info"><div class="dealer-info section">



                                            <script type="text/javascript">
                                                var _dealer_search_ = null;
                                                var _dealer_list_view_ = null;
                                                var _dealer_map_view_ = null;
                                                kwcmsApp.controller("dealerinfo.search", function($scope, HttpService) {
                                                //reference_controller_scope
                                                _dealer_search_ = $scope;
                                                //current view selector
                                                $scope.searchTab = "all";
                                                $scope.currentTab = "";
                                                //default search parameters.
                                                $scope.paramVO = {
                                                "pageNum" : 1
                                                        , "pageSize" : 5
                                                        , "pageCnt" : 5
                                                        , "sc.delYn" : "N"
                                                        , "sc.displayYn" : "Y"
                                                        , "sc.searchType" : "dealer_addr_zipcode"
                                                        , "sortKey[0]" : "dealerNm"
                                                        , "sortType[0]" : "A"
                                                        , "sc.searchKey" : ""
                                                };
                                                if (_suffix_selected_vehicle_ != null && _suffix_selected_vehicle_.dealerSeq){
                                                $scope.paramVO["sc.dealerSeq"] = _suffix_selected_vehicle_.dealerSeq
                                                }

                                                //initialize 
                                                $scope.init = function () {
                                                $scope.currentTab = "list";
                                                $scope.search();
                                                };
                                                //change tab
                                                $scope.viewTab = function (tabName) {
                                                $scope.currentTab = tabName;
                                                _dealer_list_view_.currentTab = tabName;
                                                _dealer_map_view_.currentTab = tabName;
                                                if (tabName == 'map'){
                                                _dealer_map_view_.callbackDealer(_dealer_map_view_.list[0]);
                                                } else {
                                                _dealer_map_view_.callbackDealer();
                                                }
                                                };
                                                //search method
                                                $scope.search = function (pageNum, isAll) {
                                                if (pageNum != undefined) {
                                                $scope.paramVO["pageNum"] = pageNum;
                                                } else {
                                                $scope.paramVO["pageNum"] = 1;
                                                }

                                                if (!angular.equals($scope.searchKey, "")) {
                                                $scope.paramVO["sc.searchKey"] = $scope.searchKey;
                                                } else {
                                                $scope.paramVO["sc.searchKey"] = "";
                                                }

                                                var paramVO = $scope.paramVO;
                                                var apiURI = "selectFindDealerByServiceList";
                                                if (isAll != undefined && isAll == true) {
                                                paramVO = {
                                                "sc.delYn" : "N"
                                                        , "sc.displayYn" : "Y"
                                                        , "isAll" : isAll
                                                };
                                                apiURI = "selectFindDealerAllList";
                                                }

                                                var params = {
                                                method : "GET"
                                                        , params : paramVO
                                                        , url : "/api/kia_global/base/fd01/findDealer." + apiURI
                                                };
                                                HttpService.http(params, $scope.searchCallback, paramVO);
                                                };
                                                //search callback
                                                $scope.searchCallback = function (data, params) {
                                                if (params.isAll == true) {
                                                _dealer_map_view_.allInit(data, params);
                                                } else {
                                                _dealer_list_view_.init(data, params);
                                                _dealer_map_view_.init(data, params);
                                                }

                                                //if sequence given
                                                if (data.totalCount == 1) {
                                                _dealer_list_view_.callbackDealer(data.dataInfo[0]);
                                                }
                                                };
                                                //reset search result
                                                $scope.resetSearch = function () {
                                                $scope.selectedDealer = null;
                                                _selected_dealer_ = null;
                                                $scope.searchKey = "";
                                                $scope.search();
                                                };
                                                //first. check input a keyword, two. search
                                                $scope.checkKeyword = function() {
                                                if (angular.equals($scope.searchKey, "") || angular.equals($scope.searchKey, undefined)) {
                                                alert('Please input a keyword.');
                                                } else {
                                                $scope.search();
                                                }
                                                };
                                                });</script>

                                            <div class="codeSrch" ng-controller="dealerinfo.search" ng-init="init()">
                                                <div class="codeTit">Search</div>
                                                <div class="codeInput">
                                                    <div class="form_sch">
                                                        <div class="sch_box">
                                                            <input type="text" placeholder="Enter Zipcode, dealer name, city name" id="search_sample1" class="sch_inp" title="Enter Zipcode, dealer name, city name" ng-model="searchKey" > 
                                                            <button type="submit" class="sch_btn" ng-click="checkKeyword()" title="Search"><span class="cmm_spr spr_search">Search</span></button>
                                                        </div>
                                                    </div>
                                                    <div class="reset"><a href="#reset" class="btnMedium btnType3" ng-click="resetSearch()"><span class="btnIcon arrow_r">Reset</span></a></div>
                                                </div>
                                            </div>






                                            <script type="text/javascript">
                                                kwcmsApp.controller("dealerinfo.list", function($scope, pagination) {
                                                //reference_controller_scope
                                                _dealer_list_view_ = $scope;
                                                //current view selector
                                                $scope.searchTab = _dealer_search_.searchTab;
                                                $scope.currentTab = _dealer_search_.currentTab;
                                                //initailize list view
                                                $scope.init = function (data, params) {
                                                if (angular.equals(data.result, "Success")) {
                                                $scope.list = data.dataInfo;
                                                $scope.total = data.totalCount;
                                                $scope.firstNum = $scope.total - ((params.pageNum - 1) * params.pageSize);
                                                pagination.paginationCreate($scope.total, params.pageNum, params.pageSize, params.pageCnt, $scope.search);
                                                } else {
                                                alert('Sorry. A system error has occurred.');
                                                }
                                                };
                                                //search 
                                                $scope.search = function (pageNum) {
                                                _dealer_search_.search(pageNum);
                                                };
                                                //change tab
                                                $scope.viewTab = function (tab) {
                                                _dealer_search_.viewTab(tab);
                                                };
                                                //make address html
                                                $scope.getAddrStr = function(item){
                                                var str = "- ";
                                                if (item.phone != null){
                                                str += 'Phone' + ' : ' + item.phone;
                                                }
                                                if (item.fax != null){
                                                if (str != "- "){
                                                str += " / ";
                                                }
                                                str += 'Fax' + ' : ' + item.fax;
                                                }
                                                if (item.url != null){
                                                if (str != "- "){
                                                str += " / ";
                                                }
                                                str += '<a href="' + item.url + '" target="_blank">' + item.url + '</a>';
                                                }
                                                if (item.zipcode != null && item.zipcode != ""){
                                                str = item.addr + ', ' + item.zipcode + "<br>" + str;
                                                }
                                                else{
                                                str = item.addr + "<br>" + str;
                                                }

                                                return str;
                                                };
                                                //return dealer data
                                                $scope.callbackDealer = function (dealer) {
                                                $scope.selectedDealer = dealer;
                                                _selected_dealer_ = dealer;
                                                };
                                                });</script>	

                                            <div class="location_result" ng-controller="dealerinfo.list" ng-show="currentTab == 'list'">
                                                <div class="location_text">
                                                    <h5 class="result_txt"><span class="m_none">SEARCH RESULT : </span><strong>{{total}}</strong> Dealers Found</h5>
                                                    <div class="tab_type1">
                                                        <a href="#list" class="tab_link tt1_on" ng-click="viewTab('list')">LIST VIEW</a>
                                                        <a href="#map" class="tab_link" ng-click="viewTab('map')">MAP VIEW</a>
                                                    </div>
                                                </div>	

                                                <div class="location_listview">


                                                    <table class="table_type3 location_table">
                                                        <caption>SEARCH RESULT</caption>
                                                        <colgroup>
                                                            <col style="width:20%">
                                                            <col style="width:auto">
                                                            <col style="width:19%">
                                                            <col style="width:16%">
                                                        </colgroup>
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Name</th>  
                                                                <th scope="col">Address / Phone / URL</th>    
                                                                <th scope="col">Opening Hours</th> 
                                                                <th scope="col">Service Category</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr ng-repeat="item in list" ng-show="total > 0" after-radio-element>
                                                                <th class="tleft">
                                                                    <span class="form_chk">
                                                                        <input type="radio" name="dealer" title="Dealer" ng-attr-id="dealer{{item.dealerSeq}}">
                                                                        <label ng-attr-for="dealer{{item.dealerSeq}}" class="form_spr radio_box" ng-class="{r_on:selectedDealer === item}" ng-click="callbackDealer(item)">{{item.dealerNm}}</label>
                                                                    </span>
                                                                </th>
                                                                <td class="tleft" ng-bind-html="getAddrStr(item) | sanitize"></td>
                                                                <td class="tleft" ng-bind-html="item.openHours | sanitize"></td>
                                                                <td>
                                                                    <div class="offerList">
                                                                        <span ng-repeat="ds in item.dsList" class="map_spr {{ds.extra1}}">{{ds.text}}</span>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr ng-show="total == 0">
                                                                <td colspan="4" class="nodata"><span>NO RESULT FOUND FOR YOUR QUERY</span></td>
                                                            </tr>	
                                                        </tbody>
                                                    </table>



                                                    <ul class="location_list">
                                                        <li class="loc_l" ng-repeat="item in list" ng-show="total > 0">
                                                            <strong class="locTit">
                                                                <span class="form_chk">
                                                                    <input type="radio" name="dealer" title="Dealer" ng-attr-id="dealer{{item.dealerSeq}}">
                                                                    <label ng-attr-for="dealer{{item.dealerSeq}}" class="form_spr radio_box" ng-class="{r_on:selectedDealer === item}" ng-click="callbackDealer(item)">{{item.dealerNm}}</label>
                                                                </span>
                                                            </strong>
                                                            <div class="locInfo">
                                                                <p class="addr" ng-hide="!item.addr">{{item.addr}}</p>
                                                                <ul class="info">
                                                                    <li ng-hide="!item.phone"><strong>Phone</strong> : {{item.phone}}</li>
                                                                    <li class="hours" ng-hide="!item.openHours" ng-bind-html="'<strong>Opening Hours</strong>{{item.openHours}}' | sanitize"></li>
                                                                    <li ng-hide="!item.url"><strong>URL</strong> : {{item.url}}</li>
                                                                </ul>
                                                                <div class="offerList">
                                                                    <span ng-repeat="ds in item.dsList" class="map_spr {{ds.extra1}}">{{ds.text}}</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nodata" ng-show="total == 0"><span>NO RESULT FOUND FOR YOUR QUERY</span></li>
                                                    </ul>		


                                                    <div class="pg_num_area" ng-show="total > 0">


                                                        <script type="text/javascript">
                                                            kwcmsApp.factory('pagination', [function(){
                                                            var paginationObj = {
                                                            pageNum	: "",
                                                                    prePageNum : "",
                                                                    nextPageNum: "",
                                                                    range : "",
                                                                    movePage:function(){}
                                                            };
                                                            return {
                                                            paginationCreate : function(tCnt, pNum, row, pager, fnc){
                                                            var rowPerPage = row; /** 보여질 row 갯수	*/
                                                            var pagerSize = pager; /** 하단 pagerSize	*/
                                                            var totalPager = parseInt((tCnt - 1) / rowPerPage + 1);
                                                            paginationObj.movePage = fnc;
                                                            /*****************************
                                                             * 현재 pageNum validate
                                                             ******************************/
                                                            if (!pNum) pNum = 1;
                                                            if (pNum < 1) pNum = 1;
                                                            if (pNum > totalPager) pNum = totalPager;
                                                            paginationObj.pageNum = pNum;
                                                            paginationObj.prePageNum = parseInt(paginationObj.pageNum) - 1 < 1 ? "1" : parseInt(paginationObj.pageNum) - 1;
                                                            paginationObj.nextPageNum = parseInt(paginationObj.pageNum) + 1 > totalPager ? totalPager : parseInt(paginationObj.pageNum) + 1;
                                                            /*****************************
                                                             * pagination 
                                                             * 표시될 pager 갯수 정의
                                                             ******************************/
                                                            pagerBlock = parseInt((paginationObj.pageNum - 1) / pagerSize);
                                                            pagerStartNum = parseInt(pagerBlock * pagerSize) + 1;
                                                            pagerEndNum = pagerStartNum + (pagerSize - 1);
                                                            if (pagerEndNum > totalPager) pagerEndNum = totalPager;
                                                            var range = [];
                                                            for (var i = pagerStartNum; i <= pagerEndNum; i++) {
                                                            range.push(i);
                                                            }

                                                            paginationObj.range = range;
                                                            },
                                                                    paginationData: function(){
                                                                    return paginationObj;
                                                                    }
                                                            };
                                                            }]);
                                                            kwcmsApp.controller('kwcmsPagingCtl', ['$scope', 'pagination', function($scope, pagination){
                                                            $scope.paginationObj = pagination.paginationData();
                                                            /*
                                                             * $scope.paginationObj.movePage 함수는  $scope.paginationObj원형 그대로 사용
                                                             * alert($scope.paginationObj);
                                                             */
                                                            }]);
                                                        </script>
                                                        <div ng-controller="kwcmsPagingCtl">
                                                            <a href="#" onclick="return false;" class="pg_arrow pg_prev" ng-click="paginationObj.movePage(paginationObj.prePageNum)">이전페이지</a>
                                                            <a href="#" onclick="return false;" class="{{pageNumList == paginationObj.pageNum ? 'pg_num pg_num_on':'pg_num'}}" title="{{pageNumList == paginationObj.pageNum ? '현재페이지':''}}" ng-repeat="pageNumList in paginationObj.range" ng-click="paginationObj.movePage(pageNumList)">{{pageNumList}}</a>
                                                            <a href="#" onclick="return false;" class="pg_arrow pg_next" ng-click="paginationObj.movePage(paginationObj.nextPageNum)">다음페이지</a>
                                                        </div>
                                                    </div>

                                                </div>		
                                            </div>




                                            <script type="text/javascript">
                                                kwcmsApp.controller("dealerinfo.map", function($scope, $timeout, pagination) {
                                                //reference_controller_scope
                                                _dealer_map_view_ = $scope;
                                                //map area id
                                                $scope.mapWrap = "mapArea";
                                                //current view selector
                                                $scope.searchTab = _dealer_search_.searchTab;
                                                $scope.currentTab = _dealer_search_.currentTab;
                                                //exist all list?
                                                $scope.isCallAllList = false;
                                                //initailize list view
                                                $scope.init = function (data, params) {
                                                if (angular.equals(data.result, "Success")) {
                                                //get all list without search conditions
                                                if ($scope.isCallAllList == false) {
                                                _dealer_search_.search(1, true);
                                                $scope.isCallAllList = true;
                                                }

                                                $scope.list = data.dataInfo;
                                                $scope.total = data.totalCount;
                                                $scope.firstNum = $scope.total - ((params.pageNum - 1) * params.pageSize);
                                                //pagination
                                                pagination.paginationCreate($scope.total, params.pageNum, params.pageSize, params.pageCnt, $scope.search);
                                                //init map
                                                $scope.initMap($scope.list, $scope.mapWrap, 0);
                                                } else {
                                                alert('Sorry. A system error has occurred.');
                                                }
                                                };
                                                //initailize all list
                                                $scope.allInit = function (data, params) {
                                                $scope.allList = data.dataInfo;
                                                //init map
                                                angular.element($scope.allList).each(function(idx){
                                                var layerDOM = '<div class="dealer_layer">';
                                                layerDOM += '	<div class="dealer_info">';
                                                layerDOM += '		<strong class="name">' + this.dealerNm + '</strong>';
                                                layerDOM += '		<ul class="info">';
                                                layerDOM += '			<li class="address">' + this.addr + '</li>';
                                                layerDOM += '			<li class="tel">Phone : ' + this.phone + '</li>';
                                                layerDOM += '			<li class="offer">';
                                                layerDOM += '			</li>';
                                                layerDOM += '		</ul>';
                                                layerDOM += '		<div class="move">';
                                                layerDOM += '			<a href="http://org-www.kia.com/content/kwcms/gt/en/shopping-tools/request-a-testdrive.html" class="bl_type_a">Request a Test Drive</a>';
                                                layerDOM += '			<a href="http://org-www.kia.com/content/kwcms/gt/en/shopping-tools/request-a-quote.html" class="bl_type_a">Request a Quote</a>';
                                                layerDOM += '		</div>';
                                                layerDOM += '	</div>';
                                                layerDOM += '</div>';
                                                if (objPoint.pointAll){
                                                objPoint.pointAll[idx] = ({
                                                "lat" : this.lat
                                                        , "lng" : this.lng
                                                        , "info": layerDOM
                                                });
                                                } else{
                                                objPoint.pointAll = ({
                                                "lat" : this.lat
                                                        , "lng" : this.lng
                                                        , "info": layerDOM
                                                });
                                                }
                                                });
                                                };
                                                //draw map
                                                $scope.initMap = function (mapInfoObj, areaId, selectIdx) {
                                                $scope.currBranch = selectIdx;
                                                if (objPoint) {
                                                objPoint.point = [];
                                                if (mapInfoObj != "") {
                                                //dom for dealer layer
                                                angular.element(mapInfoObj).each(function(idx){

                                                var layerDOM = '<div class="dealer_layer">';
                                                layerDOM += '	<div class="dealer_info">';
                                                layerDOM += '		<strong class="name">' + this.dealerNm + '</strong>';
                                                layerDOM += '		<ul class="info">';
                                                layerDOM += '			<li class="address">' + this.addr + '</li>';
                                                layerDOM += '			<li class="tel">Phone : ' + this.phone + '</li>';
                                                layerDOM += '			<li class="offer">';
                                                layerDOM += '			</li>';
                                                layerDOM += '		</ul>';
                                                layerDOM += '		<div class="move">';
                                                //layerDOM += '			<a href="' + this.url + '" class="bl_type_a">GO TO Website</a>';
                                                layerDOM += '			<a href="http://org-www.kia.com/content/kwcms/gt/en/shopping-tools/request-a-testdrive.html" class="bl_type_a">Request a Test Drive</a>';
                                                layerDOM += '			<a href="http://org-www.kia.com/content/kwcms/gt/en/shopping-tools/request-a-quote.html" class="bl_type_a">Request a Quote</a>';
                                                layerDOM += '		</div>';
                                                layerDOM += '	</div>';
                                                layerDOM += '</div>';
                                                objPoint.point[idx] = ({
                                                "lat" : this.lat
                                                        , "lng" : this.lng
                                                        , "info": layerDOM
                                                });
                                                });
                                                } else{
                                                objPoint.point[0] = ({
                                                "lat" : centerLat
                                                        , "lng" : centerLng
                                                        , "info" : ''
                                                });
                                                }

                                                initialize(selectIdx, areaId);
                                                }
                                                };
                                                //search 
                                                $scope.search = function (pageNum) {
                                                _dealer_search_.search(pageNum);
                                                };
                                                //change tab
                                                $scope.viewTab = function (tab) {
                                                _dealer_search_.viewTab(tab);
                                                };
                                                //return dealer data
                                                $scope.callbackDealer = function (dealer) {
                                                _selected_dealer_ = dealer;
                                                };
                                                //$watch for map
                                                $scope.$watch(function() {
                                                if (angular.equals($scope.currentTab, "map")) {
                                                return true;
                                                } else {
                                                return false;
                                                }
                                                }, function(newvalue) {
                                                $timeout(function() {
                                                if ($scope.list != undefined){
                                                $scope.initMap($scope.list, $scope.mapWrap, 0);
                                                }
                                                }, 0);
                                                });
                                                });</script>		

                                            <div class="location_result" ng-controller="dealerinfo.map" ng-show="currentTab == 'map'">

                                                <div class="location_text">
                                                    <h5 class="result_txt"><span class="m_none">SEARCH RESULT : </span>(<strong>{{total}}</strong>) Dealers Found</h5>
                                                    <div class="tab_type1">
                                                        <a href="#list" class="tab_link" ng-click="viewTab('list')">LIST VIEW</a>
                                                        <a href="#map" class="tab_link  tt1_on" ng-click="viewTab('map')">MAP VIEW</a>
                                                    </div>
                                                </div>

                                                <div class="location_mapview">
                                                    <div class="mapInner">							
                                                        <div class="mapArea" id="mapArea"><div class="parsys mapParsys"><div class="parbase google-map-list section">

                                                                    <!-- 2015.10.07 오지예대리님 요청으로 구글맵 스크립트 통일함. -->
                                                                    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&language=en&region=KR"></script>

                                                                    <script type="text/javascript">
                                                            var centerLat = 23.61;
                                                            var centerLng = 58.539999999999964;
                                                            var myLocation;
                                                            var myLocationLat;
                                                            var myLocationLng;
                                                            if (!navigator.geolocation){
                                                            //("사용자의 브라우저는 지오로케이션을 지원하지 않습니다.")
                                                            } else{
                                                            navigator.geolocation.getCurrentPosition(successGeo, errorGeo);
                                                            }
                                                            function successGeo(position) {
                                                            var latitude = position.coords.latitude;
                                                            var longitude = position.coords.longitude;
                                                            //centerLat =   latitude;
                                                            //centerLng =   longitude;
                                                            myLocation = new google.maps.LatLng(latitude, longitude);
                                                            myLocationLat = latitude;
                                                            myLocationLng = longitude;
                                                            /* $.each(objPoint.point, function(idx){
                                                             routeCalc(this.lat, this.lng, idx);
                                                             }); */

                                                            };
                                                            function errorGeo() {
                                                            //("사용자의 위치를 찾을 수 없습니다.");
                                                            };
                                                            var infoString = "";
                                                            var objPoint = {
                                                            center  :   {
                                                            lat:    centerLat,
                                                                    lng:    centerLng
                                                            },
                                                                    point   :   [
                                                                    {
                                                                    lat:"",
                                                                            lng:"",
                                                                            info:""
                                                                    }
                                                                    ]
                                                            };
                                                            function initialize(infoIdx, areaId){
                                                            $("." + areaId).html("");
                                                            var map;
                                                            objPoint.center.lat = objPoint.point[infoIdx].lat;
                                                            objPoint.center.lng = objPoint.point[infoIdx].lng;
                                                            var myCenter = new google.maps.LatLng(objPoint.center.lat, objPoint.center.lng);
                                                            var mapProp = {
                                                            center:myCenter
                                                                    , zoom:15
                                                                    , disableDefaultUI:true
                                                                    , mapTypeId:google.maps.MapTypeId.ROADMAP
                                                                    /*
                                                                     1. ROADMAP (normal, default 2D map)
                                                                     2. SATELLITE (photographic map)
                                                                     3. HYBRID (photographic map + roads and city names)
                                                                     4. TERRAIN (map with mountains, rivers, etc.)
                                                                     */
                                                                    , mapTypeControl: true
                                                                    , mapTypeControlOptions: {
                                                                    style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
                                                                            , position: google.maps.ControlPosition.TOP_RIGHT
                                                                    }
                                                            };
                                                            map = new google.maps.Map(document.getElementById(areaId), mapProp);
                                                            var defaultMarker;
                                                            $.each(objPoint.point, function(idx){
                                                            //var image = 'http://org-www.kia.com/content/dam/kia-korea/images/pip/img_pip_indicatorIcon_on.gif';
                                                            var marker = new google.maps.Marker({
                                                            position:new google.maps.LatLng(this.lat, this.lng)
                                                                    //,icon: image
                                                            });
                                                            if (this.lat == objPoint.point[infoIdx].lat && this.lng == objPoint.point[infoIdx].lng){
                                                            defaultMarker = marker;
                                                            }
                                                            google.maps.event.addListener(marker, 'click', function(){
                                                            infoWindow.close();
                                                            infoWindow = new google.maps.InfoWindow({
                                                            content: objPoint.point[idx].info
                                                            });
                                                            infoWindow.open(map, marker);
                                                            if (objPoint.location != null) printClickEvent();
                                                            });
                                                            marker.setMap(map);
                                                            });
                                                            var viewportWidth = $(window).width();
                                                            if (objPoint.point[infoIdx].info != ""){
                                                            var infoWindow = new google.maps.InfoWindow({
                                                            content: objPoint.point[infoIdx].info
                                                            });
                                                            if (viewportWidth > 767){
                                                            infoWindow.open(map, defaultMarker);
                                                            if (objPoint.location != null) printClickEvent();
                                                            }
                                                            }

                                                            /* if(myLocation){
                                                             $.each(objPoint.point, function(idx){
                                                             routeCalc(this.lat, this.lng, idx);
                                                             });
                                                             } */

                                                            /* google.maps.event.addListener(map, 'click', function(event) {
                                                             alert(event.latLng.lat());
                                                             alert(event.latLng.lng());
                                                             }); */
                                                            }

                                                            var directionsService;
                                                            function routeCalc(dLat, dLng, idx) {
                                                            directionsService = null;
                                                            directionsService = new google.maps.DirectionsService();
                                                            var request = {
                                                            origin:myLocation
                                                                    , destination:new google.maps.LatLng(dLat, dLng)
                                                                    , travelMode: google.maps.TravelMode.TRANSIT
                                                                    /*
                                                                     1. DRIVING
                                                                     2. BICYCLING
                                                                     3. TRANSIT
                                                                     4. WALKING
                                                                     */
                                                                    //,region: "ko"
                                                            };
                                                            directionsService.route(request, function(result, status) {
                                                            if (status == google.maps.DirectionsStatus.OK) {
                                                            $(".distance:eq(" + idx + ")").html(result.routes[0].legs[0].distance.text);
                                                            }
                                                            });
                                                            }

                                                            var geocoder;
                                                            function fnGetLatLng(pageNum, args, locString, isMylocation, tab){
                                                            var getLatLng = locString;
                                                            var objLatLng = {"k":"", "D":""};
                                                            if (!isMylocation){
                                                            if (getLatLng != ""){
                                                            geocoder = new google.maps.Geocoder();
                                                            geocoder.geocode({ 'address': getLatLng}, function(results, status) {
                                                            if (status == google.maps.GeocoderStatus.OK) {
                                                            objLatLng = results[0].geometry.location;
                                                            } else{
                                                            //("Geocode was not successful for the following reason: " + status)
                                                            }
                                                            if (tab == "M")
                                                                    angular.element("#page_M").scope().closestSelectList(pageNum, args, objLatLng, isMylocation);
                                                            else
                                                                    angular.element("#page_L").scope().closestSelectList(pageNum, args, objLatLng, isMylocation);
                                                            });
                                                            } else{
                                                            if (tab == "M")
                                                                    angular.element("#page_M").scope().closestSelectList(pageNum, args, objLatLng, isMylocation);
                                                            else
                                                                    angular.element("#page_L").scope().closestSelectList(pageNum, args, objLatLng, isMylocation);
                                                            }

                                                            } else{
                                                            objLatLng = {"k":myLocationLat, "D":myLocationLng};
                                                            if (tab == "M")
                                                                    angular.element("#page_M").scope().closestSelectList(pageNum, args, objLatLng, isMylocation);
                                                            else
                                                                    angular.element("#page_L").scope().closestSelectList(pageNum, args, objLatLng, isMylocation);
                                                            }


                                                            }

                                                                    </script></div>

                                                            </div>
                                                        </div>
                                                        <div class="center_list">

                                                            <div class="listInner">
                                                                <ul>
                                                                    <li ng-repeat="item in list">
                                                                        <a href="#" onclick="return false;" class="dealer_a" ng-class="{center_on:currBranch == $index}" ng-click="initMap(list, mapWrap, $index); callbackDealer(item);">
                                                                            <div class="where"><span class="map_spr map_pin"></span></div>
                                                                            <dl class="info">
                                                                                <dt>{{item.dealerNm}}</dt>
                                                                                <dd ng-hide="!item.addr">{{item.addr}}</dd>
                                                                                <dd ng-hide="!item.phone">Phone : {{item.phone}}</dd>
                                                                                <dd ng-hide="!item.fax">Fax : {{item.fax}}</dd>									
                                                                            </dl>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>

                                                            <div class="pg_num_area" ng-show="total > 0">


                                                                <script type="text/javascript">
                                                                    kwcmsApp.factory('pagination', [function(){
                                                                    var paginationObj = {
                                                                    pageNum	: "",
                                                                            prePageNum : "",
                                                                            nextPageNum: "",
                                                                            range : "",
                                                                            movePage:function(){}
                                                                    };
                                                                    return {
                                                                    paginationCreate : function(tCnt, pNum, row, pager, fnc){
                                                                    var rowPerPage = row; /** 보여질 row 갯수	*/
                                                                    var pagerSize = pager; /** 하단 pagerSize	*/
                                                                    var totalPager = parseInt((tCnt - 1) / rowPerPage + 1);
                                                                    paginationObj.movePage = fnc;
                                                                    /*****************************
                                                                     * 현재 pageNum validate
                                                                     ******************************/
                                                                    if (!pNum) pNum = 1;
                                                                    if (pNum < 1) pNum = 1;
                                                                    if (pNum > totalPager) pNum = totalPager;
                                                                    paginationObj.pageNum = pNum;
                                                                    paginationObj.prePageNum = parseInt(paginationObj.pageNum) - 1 < 1 ? "1" : parseInt(paginationObj.pageNum) - 1;
                                                                    paginationObj.nextPageNum = parseInt(paginationObj.pageNum) + 1 > totalPager ? totalPager : parseInt(paginationObj.pageNum) + 1;
                                                                    /*****************************
                                                                     * pagination 
                                                                     * 표시될 pager 갯수 정의
                                                                     ******************************/
                                                                    pagerBlock = parseInt((paginationObj.pageNum - 1) / pagerSize);
                                                                    pagerStartNum = parseInt(pagerBlock * pagerSize) + 1;
                                                                    pagerEndNum = pagerStartNum + (pagerSize - 1);
                                                                    if (pagerEndNum > totalPager) pagerEndNum = totalPager;
                                                                    var range = [];
                                                                    for (var i = pagerStartNum; i <= pagerEndNum; i++) {
                                                                    range.push(i);
                                                                    }

                                                                    paginationObj.range = range;
                                                                    },
                                                                            paginationData: function(){
                                                                            return paginationObj;
                                                                            }
                                                                    };
                                                                    }]);
                                                                    kwcmsApp.controller('kwcmsPagingCtl', ['$scope', 'pagination', function($scope, pagination){
                                                                    $scope.paginationObj = pagination.paginationData();
                                                                    /*
                                                                     * $scope.paginationObj.movePage 함수는  $scope.paginationObj원형 그대로 사용
                                                                     * alert($scope.paginationObj);
                                                                     */
                                                                    }]);
                                                                </script>
                                                                <div ng-controller="kwcmsPagingCtl">
                                                                    <a href="#" onclick="return false;" class="pg_arrow pg_prev" ng-click="paginationObj.movePage(paginationObj.prePageNum)">이전페이지</a>
                                                                    <a href="#" onclick="return false;" class="{{pageNumList == paginationObj.pageNum ? 'pg_num pg_num_on':'pg_num'}}" title="{{pageNumList == paginationObj.pageNum ? '현재페이지':''}}" ng-repeat="pageNumList in paginationObj.range" ng-click="paginationObj.movePage(pageNumList)">{{pageNumList}}</a>
                                                                    <a href="#" onclick="return false;" class="pg_arrow pg_next" ng-click="paginationObj.movePage(paginationObj.nextPageNum)">다음페이지</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="step_ctrl">
                                        <a href="#back" class="btnMedium btnType3" ng-click="stepChange('2')">
                                            <span class="btnIcon arrow_l">Back</span>
                                        </a>
                                        <a href="#" class="btnMedium btnType1" ng-click="validation('3', '4', true)">
                                            <span class="btnIcon arrow_r">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="stepWrap">
                                <div class="stepbar bar04">
                                    <strong class="num"><em>04</em></strong>
                                    <div class="txt">
                                        <strong>My Info</strong>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>



                    <div class="inner request_quote" ng-show="step == 4">
                        <ol class="stepType01 quoteStep">
                            <li class="stepWrap paston">
                                <div class="stepbar bar01">
                                    <strong class="num"><em>01</em></strong>
                                    <div class="txt">
                                        <strong>Vehicle</strong>
                                    </div>
                                    <div class="result">
                                        <div class="car">
                                            <a href="#" class="carList" ng-repeat="car in cars" ng-click="stepChange('1')">
                                                <img src="{{car.carImage}}" alt="{{car.carName}}">
                                                <span class="carName">{{car.carName}}</span>
                                            </a> 
                                            <!-- <a href="#" class="btn_carmore">car more</a> -->
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="stepWrap paston">
                                <div class="stepbar bar02">
                                    <strong class="num"><em>02</em></strong>
                                    <div class="txt">
                                        <strong>Trim</strong>
                                    </div>
                                    <div class="result">
                                        <a href="#" ng-click="stepChange('2')" ng-repeat="trim in SelectedCarTrim">{{trim}}</a>
                                    </div>
                                </div>
                            </li>
                            <li class="stepWrap paston">
                                <div class="stepbar bar03">
                                    <strong class="num"><em>03</em></strong>
                                    <div class="txt">
                                        <strong>Dealer</strong>
                                    </div>
                                    <div class="result">
                                        <a href="#" ng-click="stepChange('3')">{{selectedDealer.dealerNm}} | Phone:{{selectedDealer.phone}}</a>
                                    </div>
                                </div>
                            </li>

                            <li class="stepWrap on">
                                <div class="stepbar bar04">
                                    <strong class="num"><em>04</em></strong>
                                    <div class="txt">
                                        <strong>My Info</strong><span class="ex">Input Information</span>
                                    </div>
                                </div>
                                <div class="stepCon">
                                    <div class="parsys person-info"><div class="userdata-keyin section">


                                            <script src="http://org-www.kia.com/etc/designs/kia-global/clientlib/js/xss.js"></script> 
                                            <form name="datainfo-comp-form" method="POST" action="">

                                                <ul class="info_tbl">

                                                    <li class="info_tr">
                                                        <div class="info_th">Title</div>
                                                        <div class="info_td">
                                                            <span class="form_wrp only">
                                                                <span class="sel_box inp_sel">
                                                                    <select class="form_select" name="title" id="title" title="Title">
                                                                        <option value="Mr">Mr</option>
                                                                        <option value="Mrs">Mrs</option>
                                                                        <option value="Miss">Miss</option>
                                                                        <option value="Ms">Ms</option>
                                                                    </select>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </li>



                                                    <li class="info_tr">
                                                        <div class="info_th">Name<em class="ess">* <span class="hidden">Is required information.</span></em></div>
                                                        <div class="info_td">
                                                            <div class="form_area">
                                                                <span class="form_wrp"><input type="text" class="input_box" name="fname" id="fname" placeholder="First Name" maxlength="50" title="First Name"></span>
                                                                <span class="space"></span>
                                                                <span class="form_wrp"><input type="text" class="input_box" name="lname" id="lname" placeholder="Last Name" maxlength="50" title="Last Name"></span>
                                                            </div>
                                                        </div>
                                                    </li>



                                                    <li class="info_tr">
                                                        <div class="info_th">Preferred contact<em class="ess">* <span class="hidden">Is required information.</span></em></div>
                                                        <div class="info_td">
                                                            <span class="form_wrp only">
                                                                <span class="sel_box inp_sel">
                                                                    <select class="form_select" name="p_method" id="p_method" title="Preferred contact" onchange="viewContactMethod(this.value)">
                                                                        <option value="e">E-mail</option>
                                                                        <option value="p">Phone</option>
                                                                    </select>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </li>



                                                    <li class="info_tr" id="datainfo-comp-form-email">
                                                        <div class="info_th">E-mail <em class="ess">* <span class="hidden">Is required information.</span></em></div>
                                                        <div class="info_td">
                                                            <span class="form_wrp only"><input type="text" name="email" id="email" class="input_box" placeholder="sample@master.com" title="E-mail" maxlength="50"></span>
                                                        </div>
                                                    </li>		
                                                    <li class="info_tr" id="datainfo-comp-form-email-confirm">
                                                        <div class="info_th">Confirm E-mail <em class="ess">* <span class="hidden">Is required information.</span></em></div>
                                                        <div class="info_td">
                                                            <span class="form_wrp only"><input type="text" name="email_confirm" id="email_confirm" class="input_box" placeholder="sample@master.com" title="Confirm E-mail" maxlength="50"></span>
                                                        </div>
                                                    </li>



                                                    <li class="info_tr" id="datainfo-comp-form-phone">
                                                        <div class="info_th">Phone <em class="ess">* <span class="hidden">Is required information.</span></em> <p class="info_txt">(We will need at least one phone number.)</p></div>
                                                        <ul class="info_dth">
                                                            <li class="info_tr">
                                                                <div class="info_th">Mobile</div>
                                                                <div class="info_td">
                                                                    <div class="form_area phone">
                                                                        <span class="form_wrp"><input type="text" name="mphone1" id="mphone1" class="input_box" title="Mobile" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;' maxlength="5"></span>
                                                                        <span class="hypen">-</span> <span class="form_wrp"><input type="text" name="mphone2" id="mphone2" class="input_box" maxlength="4" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;' title="Mobile"></span>
                                                                        <span class="hypen">-</span> <span class="form_wrp"><input type="text" name="mphone3" id="mphone3" class="input_box" maxlength="4" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;' title="Mobile"></span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="info_tr">
                                                                <div class="info_th">Work</div>
                                                                <div class="info_td">
                                                                    <div class="form_area phone">
                                                                        <span class="form_wrp"><input type="text" name="wphone1" id="wphone1" class="input_box" maxlength="5" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;' title="Work"></span>
                                                                        <span class="hypen">-</span> <span class="form_wrp"><input type="text" name="wphone2" id="wphone2" maxlength="4" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;' class="input_box" title="Work"></span>
                                                                        <span class="hypen">-</span> <span class="form_wrp"><input type="text" name="wphone3" id="wphone3" maxlength="4" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;' class="input_box" title="Work"></span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="info_tr">
                                                                <div class="info_th">Home</div>
                                                                <div class="info_td">
                                                                    <div class="form_area phone">
                                                                        <span class="form_wrp"><input type="text" name="hphone1" id="hphone1" class="input_box" maxlength="5" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;' title="Home"></span>
                                                                        <span class="hypen">-</span> <span class="form_wrp"><input type="text" name="hphone2" id="hphone2" maxlength="4" class="input_box" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;' title="Home"></span>
                                                                        <span class="hypen">-</span> <span class="form_wrp"><input type="text" name="hphone3" id="hphone3" maxlength="4" class="input_box" onkeydown='return onlyNumber(event)' onkeyup='removeChar(event)' style='ime-mode:disabled;' title="Home"></span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="info_tr">
                                                                <div class="info_td">
                                                                    We will need at least one phone number.
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>





                                                    <li class="info_tr">
                                                        <div class="info_th">Address</div>
                                                        <div class="info_td address">
                                                            <span class="form_wrp"><input type="text" name="oaddr" id="oaddr" class="input_box" maxlength="200" placeholder="Address 1" title="Address 1"></span>
                                                            <div class="form_area vspace">
                                                                <span class="form_wrp"><input type="text" name="taddr" id="taddr" class="input_box" maxlength="200" placeholder="Address 2" title="Address 2"></span>
                                                                <span class="space"></span>
                                                                <span class="form_wrp"><input type="text" name="addr_city" id="addr_city" class="input_box" maxlength="50" placeholder="City" title="City"></span>
                                                            </div>
                                                            <div class="form_area vspace">
                                                                <span class="form_wrp">
                                                                    <span class="sel_box inp_sel"><input type="text" class="input_box" name="province" maxlength="50" id="province" placeholder="Province " title="Province"></span>
                                                                </span>
                                                                <span class="space"></span>
                                                                <span class="form_wrp"><input type="text" name="zipcode" id="zipcode"class="input_box" maxlength="50" placeholder="Zipcode"  title="Zipcode"></span>
                                                            </div>								
                                                        </div>
                                                    </li>







                                                    <li class="info_tr">
                                                        <div class="info_th">Message <em class="ess">* <span class="hidden">Is required information.</span></em><p class="info_txt">(<em class="pointcolor2" id="datainfo-comp-form-message-count">0</em>/1,000 characters.)</p></div>
                                                        <div class="info_td">
                                                            <div class="form_wrp">
                                                                <textarea rows="5" class="input_box" name="message" id="message" placeholder="You can enter up to 1,000 characters." onkeypress="keyInMessageSize(this)" onkeyup="keyInMessageSize(this)" title="Message"></textarea>
                                                            </div>
                                                        </div>
                                                    </li>






                                                </ul>

                                            </form>	
                                            <p class="comment"><em class="ess">*</em> Is required information.</p>

                                            <script type="text/javascript" src="http://org-www.kia.com/etc/designs/kia-global/clientlib/js/validation.js"></script>
                                            <script type="text/javascript" src="http://org-www.kia.com/etc/designs/kia-global/clientlib/js/validation.add.js"></script>
                                            <script type="text/javascript">
                                                                    /*
                                                                     * if use the this componet, 
                                                                     * must be defined "_userdata_" variable.
                                                                     */

                                                                    var mPhoneVal = function(){
                                                                    if ($("#mphone1").val() != "" && $("#mphone2").val() != "" && $("#mphone3").val() != "")
                                                                            return true;
                                                                    else
                                                                            return false;
                                                                    }
                                                                    var wPhoneVal = function(){
                                                                    if ($("#wphone1").val() != "" && $("#wphone2").val() != "" && $("#wphone3").val() != "")
                                                                            return true;
                                                                    else
                                                                            return false;
                                                                    }
                                                                    var hPhoneVal = function(){
                                                                    if ($("#hphone1").val() != "" && $("#hphone2").val() != "" && $("#hphone3").val() != "")
                                                                            return true;
                                                                    else
                                                                            return false;
                                                                    }

                                                                    var PhoneVal = function(){
                                                                    if ($("#p_method").val() == 'e'){
                                                                    return false;
                                                                    } else{
                                                                    if (mPhoneVal() || wPhoneVal() || hPhoneVal()){
                                                                    if (!mPhoneVal()){
                                                                    if ($("#mphone1").val() != "" || $("#mphone2").val() != "" || $("#mphone3").val() != "")
                                                                            return true;
                                                                    }
                                                                    else if (!wPhoneVal()){
                                                                    if ($("#wphone1").val() != "" || $("#wphone2").val() != "" || $("#wphone3").val() != "")
                                                                            return true;
                                                                    }
                                                                    else if (!hPhoneVal()){
                                                                    if ($("#hphone1").val() != "" || $("#hphone2").val() != "" || $("#hphone3").val() != "")
                                                                            return true;
                                                                    }
                                                                    return false;
                                                                    }
                                                                    else{
                                                                    return true;
                                                                    }
                                                                    }
                                                                    }

                                                                    //form validation
                                                                    $("form[name=datainfo-comp-form]").validate({
                                                                    rules : {
                                                                    dummy : {}


                                                                    , fname : {
                                                                    required : true
                                                                            , maxlength : 50
                                                                            //, isalphanumeric : true
                                                                    }
                                                                    , lname : {
                                                                    required : true
                                                                            , maxlength : 50
                                                                            //, isalphanumeric : true
                                                                    }



                                                                    , email : {
                                                                    required : function () {
                                                                    var useContactMethod = "true";
                                                                    var useEmail = "true";
                                                                    if (useContactMethod == "true" && getSelectValue("p_method") == "e") {
                                                                    return true;
                                                                    } else if (useContactMethod == "false" && useEmail == "true") {
                                                                    return true;
                                                                    }

                                                                    return false;
                                                                    }
                                                                    , isemail : function () {
                                                                    var useContactMethod = "true";
                                                                    var useEmail = "true";
                                                                    if (useContactMethod == "true" && getSelectValue("p_method") == "e") {
                                                                    return true;
                                                                    } else if (useContactMethod == "false" && useEmail == "true") {
                                                                    return true;
                                                                    }

                                                                    return false;
                                                                    }
                                                                    }
                                                                    , email_confirm : {
                                                                    required : function () {
                                                                    var useContactMethod = "true";
                                                                    var useEmail = "true";
                                                                    if (useContactMethod == "true" && getSelectValue("p_method") == "e") {
                                                                    return true;
                                                                    } else if (useContactMethod == "false" && useEmail == "true") {
                                                                    return true;
                                                                    }

                                                                    return false;
                                                                    }
                                                                    , equalTo : "#email"
                                                                    }


                                                                    , mphone1 : {
                                                                    required : PhoneVal
                                                                            , isnumeric : true
                                                                            , maxlength : 5
                                                                    }
                                                                    , mphone2 : {
                                                                    required : PhoneVal
                                                                            , isnumeric : true
                                                                            , maxlength : 4
                                                                    }
                                                                    , mphone3 : {
                                                                    required : PhoneVal
                                                                            , isnumeric : true
                                                                            , maxlength : 4
                                                                    }
                                                                    , wphone1 : {
                                                                    required : PhoneVal
                                                                            , isnumeric : true
                                                                            , maxlength : 5
                                                                    }
                                                                    , wphone2 : {
                                                                    required : PhoneVal
                                                                            , isnumeric : true
                                                                            , maxlength : 4
                                                                    }
                                                                    , wphone3 : {
                                                                    required : PhoneVal
                                                                            , isnumeric : true
                                                                            , maxlength : 4
                                                                    }
                                                                    , hphone1 : {
                                                                    required : PhoneVal
                                                                            , isnumeric : true
                                                                            , maxlength : 5
                                                                    }
                                                                    , hphone2 : {
                                                                    required : PhoneVal
                                                                            , isnumeric : true
                                                                            , maxlength : 4
                                                                    }
                                                                    , hphone3 : {
                                                                    required : PhoneVal
                                                                            , isnumeric : true
                                                                            , maxlength : 4
                                                                    }







                                                                    , message : {
                                                                    required : true
                                                                    }





                                                                    }
                                                                    ,
                                                                            messages : {
                                                                            dummy : {}


                                                                            , fname : {
                                                                            required : "please enter First Name."
                                                                                    , maxlength : "Please enter under {0} characters."
                                                                                    //,isalphanumeric : "Not include specific character"
                                                                            }
                                                                            , lname : {
                                                                            required : "please enter Last Name."
                                                                                    , maxlength : "Please enter under {0} characters."
                                                                                    //,isalphanumeric  : "Not include specific character"
                                                                            }



                                                                            , email : {
                                                                            required : "please enter Your Email Account."
                                                                                    , isemail : "Is not an email format."
                                                                            }
                                                                            , email_confirm : {
                                                                            required : "please enter Your Email Account."
                                                                                    , isemail : "Is not an email format."
                                                                                    , equalTo  : "Email and email confirmation is not the same value."
                                                                            }


                                                                            , mphone1 : {
                                                                            required : "Invalid phone number."
                                                                                    , isnumeric : "Invalid phone number."
                                                                                    , maxlength : "Please enter under {0} numbers"
                                                                            }
                                                                            , mphone2 : {
                                                                            required : "Invalid phone number."
                                                                                    , isnumeric : "Invalid phone number."
                                                                                    , maxlength : "Please enter under {0} numbers"
                                                                            }
                                                                            , mphone3 : {
                                                                            required : "Invalid phone number."
                                                                                    , isnumeric : "Invalid phone number."
                                                                                    , maxlength : "Please enter under {0} numbers"
                                                                            }
                                                                            , wphone1 : {
                                                                            required : "Invalid phone number."
                                                                                    , isnumeric : "Invalid phone number."
                                                                                    , maxlength : "Please enter under {0} numbers"
                                                                            }
                                                                            , wphone2 : {
                                                                            required : "Invalid phone number."
                                                                                    , isnumeric : "Invalid phone number."
                                                                                    , maxlength : "Please enter under {0} numbers"
                                                                            }
                                                                            , wphone3 : {
                                                                            required : "Invalid phone number."
                                                                                    , isnumeric : "Invalid phone number."
                                                                                    , maxlength : "Please enter under {0} numbers"
                                                                            }
                                                                            , hphone1 : {
                                                                            required : "Invalid phone number."
                                                                                    , isnumeric : "Invalid phone number."
                                                                                    , maxlength : "Please enter under {0} numbers"
                                                                            }
                                                                            , hphone2 : {
                                                                            required : "Invalid phone number."
                                                                                    , isnumeric : "Invalid phone number."
                                                                                    , maxlength : "Please enter under {0} numbers"
                                                                            }
                                                                            , hphone3 : {
                                                                            required : "Invalid phone number."
                                                                                    , isnumeric : "Invalid phone number."
                                                                                    , maxlength : "Please enter under {0} numbers"
                                                                            }







                                                                            , message : {
                                                                            required : "Please enter the Message."
                                                                            }





                                                                            }
                                                                    ,
                                                                            submitHandler : function (form) {
                                                                            var isSubmit = compDataReturn();
                                                                            if (isSubmit) {
                                                                            _user_data_ = getKeyInValue();
                                                                            }

                                                                            return false;
                                                                            }
                                                                    });
                                                                    //show/hide phone or email key field
                                                                    function viewContactMethod (method) {
                                                                    var email = $("#datainfo-comp-form-email");
                                                                    var email_confirm = $("#datainfo-comp-form-email-confirm");
                                                                    var phone = $("#datainfo-comp-form-phone");
                                                                    switch (method) {
                                                                    case "e" :
                                                                            email.show();
                                                                    email_confirm.show();
                                                                    phone.hide();
                                                                    $("#mphone1").val("");
                                                                    $("#mphone2").val("");
                                                                    $("#mphone3").val("");
                                                                    $("#wphone1").val("");
                                                                    $("#wphone2").val("");
                                                                    $("#wphone3").val("");
                                                                    $("#hphone1").val("");
                                                                    $("#hphone2").val("");
                                                                    $("#hphone3").val("");
                                                                    break;
                                                                    case "p" :
                                                                            email.hide();
                                                                    email_confirm.hide();
                                                                    phone.show();
                                                                    $("#email").val("");
                                                                    $("#email_confirm").val("");
                                                                    break;
                                                                    }
                                                                    }

                                                                    //get message size
                                                                    function keyInMessageSize (that) {
                                                                    that = $(that);
                                                                    var maxLen = parseInt("1000", 10);
                                                                    var target = $("#datainfo-comp-form-message-count");
                                                                    var text = that.val();
                                                                    if (text.length >= maxLen) {
                                                                    that.val(text.substr(0, (maxLen - 1)));
                                                                    }

                                                                    target.text(text.length.toString().split(/(?=(?:\d{3})+(?:\.|$))/g).join(','));
                                                                    }

                                                                    //phone validation
                                                                    function validationPhone() {
                                                                    var isValidation = true;
                                                                    var mphone = $("#mphone1").val() + $("#mphone2").val() + $("#mphone3").val();
                                                                    var wphone = $("#wphone1").val() + $("#wphone2").val() + $("#wphone3").val();
                                                                    var hphone = $("#hphone1").val() + $("#hphone2").val() + $("#hphone3").val();
                                                                    if ($.trim(mphone) == "" && $.trim(wphone) == "" && $.trim(hphone) == "") {
                                                                    isValidation = false;
                                                                    }

                                                                    return isValidation;
                                                                    }

                                                                    //message validation
                                                                    function validationMsg() {
                                                                    var isValidation = true;
                                                                    var msg = $("#message").val();
                                                                    if ($.trim(msg) == "") {
                                                                    isValidation = false;
                                                                    }

                                                                    return isValidation;
                                                                    }

                                                                    //return data
                                                                    function compDataReturn () {
                                                                    var rt = true;
                                                                    var useContactMethod = "true";
                                                                    var usePhone = "true";
                                                                    if ($("#pcategory").val() == ""){
                                                                    alert('Please Select Service');
                                                                    return false;
                                                                    }
                                                                    if (useContactMethod == "true" && getSelectValue("p_method") == "p") {
                                                                    if (!validationPhone()) {
                                                                    rt = false;
                                                                    }
                                                                    } else if (useContactMethod == "false" && usePhone == "true") {
                                                                    if (!validationPhone()) {
                                                                    rt = false;
                                                                    }
                                                                    }

                                                                    if (!rt) {
                                                                    alert("please enter msg_alert_phone_number.");
                                                                    }

                                                                    if (rt && !validationMsg()) {
                                                                    alert("Please enter the Message.");
                                                                    $("#message").focus();
                                                                    rt = false;
                                                                    }


                                                                    return rt;
                                                                    }

                                                                    //form submit
                                                                    function userdataInfoSubmit () {
                                                                    $("form[name=datainfo-comp-form]").submit();
                                                                    }

                                                                    //set methods for data field
                                                                    //makeSelectOption
                                                                    function makeUserDataOptions (arg) {
                                                                    var argLen = arg.length;
                                                                    var opt = "";
                                                                    if (argLen > 0) {
                                                                    for (var i = 0; i < argLen; i++) {
                                                                    opt += "<option value=\"" + arg[i][0] + "\">" + arg[i][1] + "</option>";
                                                                    }
                                                                    }
                                                                    return opt;
                                                                    }

                                                                    //set Service or Category
                                                                    //@params - [ ["value1", "text1"], ["value2", "text2"], ["value3", "text3"] ];
                                                                    var userdata_keyin_custom_categories = null;
                                                                    function setCategories (arg) {
                                                                    userdata_keyin_custom_categories = arg;
                                                                    var argLen = arg.length;
                                                                    var opt = "";
                                                                    if (argLen > 0) {



                                                                    }
                                                                    }

                                                                    //set PreferredTime
                                                                    //@params - [ ["value1", "text1"], ["value2", "text2"], ["value3", "text3"] ];
                                                                    var userdata_keyin_custom_prefer_time = null;
                                                                    function setPreferredTime (arg) {
                                                                    userdata_keyin_custom_prefer_time = arg;
                                                                    var opt = makeUserDataOptions(arg);
                                                                    $("select[name=ptime]").eq(0).html(opt).promise().done(function(){
                                                                    $(".form_select").resetSS();
                                                                    });
                                                                    }

                                                                    //set title
                                                                    //@params - [ ["value1", "text1"], ["value2", "text2"], ["value3", "text3"] ];
                                                                    var userdata_keyin_custom_title = null;
                                                                    function setTitle (arg) {
                                                                    userdata_keyin_custom_title = arg;
                                                                    var opt = makeUserDataOptions(arg);
                                                                    $("select[name=title]").eq(0).html(opt).promise().done(function(){
                                                                    $(".form_select").resetSS();
                                                                    });
                                                                    }

                                                                    //get <select> value
                                                                    function getSelectValue (n) {
                                                                    var jObj = $("#" + n);
                                                                    return jObj.find("option:selected").val();
                                                                    }

                                                                    //get checkbox/radiobox value
                                                                    function getRadioValue (n, type) {
                                                                    var values = null;
                                                                    if (type == "radio") {
                                                                    values = $("input[name='" + n + "']:checked").val();
                                                                    } else if (type == "checkbox") {
                                                                    values = new Array();
                                                                    $("input[name='" + n + "']").each(function () {
                                                                    if ($(this).prop("checked")) {
                                                                    values.push($(this).val());
                                                                    }
                                                                    });
                                                                    }

                                                                    return values;
                                                                    }

                                                                    //get <select> text
                                                                    function getTextByValue (v, cate) {
                                                                    var rt = "";
                                                                    var arr = null;
                                                                    var value_arr = null;
                                                                    var isValueArray = (v.indexOf(",") > - 1) ? true : false;
                                                                    if (isValueArray) {
                                                                    value_arr = v.split(",");
                                                                    } else {
                                                                    value_arr = v;
                                                                    }

                                                                    switch (cate) {
                                                                    case "cate":
                                                                            arr = userdata_keyin_custom_categories;
                                                                    break;
                                                                    case "time":
                                                                            arr = userdata_keyin_custom_prefer_time;
                                                                    break;
                                                                    case "title":
                                                                            arr = userdata_keyin_custom_title;
                                                                    break;
                                                                    }

                                                                    if (arr != null && arr.length > 0) {
                                                                    for (var i = 0, iCnt = arr.length; i < iCnt; i++) {
                                                                    //arr[i][0] value
                                                                    //arg[i][1] text
                                                                    if (isValueArray) {
                                                                    for (var j = 0, jCnt = value_arr.length; j < jCnt; j++) {
                                                                    if (arr[i][0] == $.trim(value_arr[j])) {
                                                                    rt += arr[i][1] + ", ";
                                                                    break;
                                                                    }
                                                                    }
                                                                    } else {
                                                                    if ($.trim(value_arr) == arr[i][0]) {
                                                                    rt = arr[i][1];
                                                                    break;
                                                                    }
                                                                    }
                                                                    }

                                                                    if (isValueArray) {
                                                                    rt = rt.substr(0, rt.length - 2);
                                                                    }
                                                                    }

                                                                    return rt;
                                                                    }

                                                                    //user data to json
                                                                    function getKeyInValue() {
                                                                    var userData = {
                                                                    dummy : null


                                                                            , title : getSelectValue("title")



                                                                            , fname : $("#fname").val()
                                                                            , lname : $("#lname").val()



                                                                            , p_method : getSelectValue("p_method")



                                                                            , email : $("#email").val()
                                                                            , email_confirm : $("#email_confirm").val()



                                                                            , mphone1 : $("#mphone1").val()
                                                                            , mphone2 : $("#mphone2").val()
                                                                            , mphone3 : $("#mphone3").val()
                                                                            , wphone1 : $("#wphone1").val()
                                                                            , wphone2 : $("#wphone2").val()
                                                                            , wphone3 : $("#wphone3").val()
                                                                            , hphone1 : $("#hphone1").val()
                                                                            , hphone2 : $("#hphone2").val()
                                                                            , hphone3 : $("#hphone3").val()





                                                                            , oaddr : $("#oaddr").val()
                                                                            , taddr : $("#taddr").val()
                                                                            , addr_city : $("#addr_city").val()
                                                                            , city : $("#city").val()
                                                                            , province : $("#province").val()
                                                                            , zipcode : $("#zipcode").val()







                                                                            , message : filterXSS($("#message").val())
                                                                            //, message : $("#message").val()





                                                                    };
                                                                    delete userData["dummy"];
                                                                    return userData;
                                                                    }

                                                                    //clear key-in field
                                                                    function resetUserDataKeyIn () {
                                                                    $("form[name=datainfo-comp-form]").eq(0).find("input, select, textarea").each(function () {
                                                                    var ele = $(this).get(0);
                                                                    var tagName = ele.tagName.toLowerCase();
                                                                    var tagType = $(ele).attr("type");
                                                                    if (tagName == "select") {
                                                                    $(ele).find("option").eq(0).attr("selected", "selected");
                                                                    $(ele).trigger("change");
                                                                    } else if (tagName == "input") {
                                                                    if (tagType != undefined) {
                                                                    if (tagType == "text") {
                                                                    $(ele).val("");
                                                                    } else if (tagType == "checkbox") {
                                                                    $(ele).prop("checked", false);
                                                                    } else if (tagType == "radio") {
                                                                    $(ele.attr("name")).eq(0).prop("checked", false);
                                                                    }
                                                                    }
                                                                    } else if (tagName == "textarea") {
                                                                    $(ele).val("").trigger("keyup");
                                                                    }
                                                                    });
                                                                    $(".form_select").resetSS();
                                                                    }

                                                                    $(document).ready(function(){

                                                                    //contact method init
                                                                    viewContactMethod("e");
                                                                    });</script>
                                        </div>

                                    </div>

                                            <!-- <p class="comment">
                                                    <em class="ess">*</em> Is required information.
                                            </p> -->
                                    <div class="step_ctrl">
                                        <a href="#back" class="btnMedium btnType3" ng-click="stepChange('3')">
                                            <span class="btnIcon arrow_l">Back</span>
                                        </a>
                                        <!-- Adobe Target Implementation 20151103 -->
                                        <a href="#" class="btnMedium btnType1" ng-click="validation('4', '5', true)" onclick="mboxUpdate('BtnClick', 'profile.RequestaQuoteCompleted=clicked');">
                                            <span class="btnIcon arrow_r">Next</span>
                                        </a>
                                    </div>
                                    <div class="note_area">
                                        <div class="bl_type_note">
                                            <p class="note_p">Reliable International Automotive LLC, the "Company" makes no warranties or representations, whether express or implied, as to the veracity or completeness of this website's content or of the content of any websites that have links to it. This website is updated from time to time and is intended purely for information purposes. The information contained in this website is not intended to be complete or exhaustive and must not be relied upon for any purpose.</p>
                                            <p class="note_p">The "Company", its advertising agents, its affiliate organizations, its officials, its employees, its business associates and its shareholders can be held responsible for any damages or losses, whether direct, indirect, or consequential, arising out of the use of this website or its contents, or any website linked with it. This disclaimer is subject to modifications by the Company as may be deemed necessary from time to time.</p>
                                            <p class="note_p">Vehicles and its parts and accessories specifications are subject to change with out prior notification. Pictures and colors of vehicles may differ from actual specifications. For further details, please visit your nearest Kia Showroom.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>



                    <div class="inner request_quote" ng-show="step == 5">
                        <div class="finishTop">
                            <div class="contBox">
                                <p class="finishTxt">Kia Motors is the basis of innovation for customers You are transformed into a truly golobal player.</p>
                            </div>
                        </div>
                        <div class="finishCon">
                            <div class="parsys person-info-view"><div class="userdata-view section">



                                    <script type="text/javascript">
                                        /*
                                         * if use the this componet, 
                                         * must be defined "_userdata_view_scope_",  "_vehicle_data_", 
                                         * "_vehicle_trim_data_", "_dealer_data_", "_center_data_" variables.
                                         */

                                        kwcmsApp.controller("userdata.view", function($scope, HttpService) {

                                        //copy scope to javascript
                                        _userdata_view_scope_ = $scope;
                                        //selected Vehicle Data
                                        $scope.vehicleData = null;
                                        //selected vehicle trim data
                                        $scope.vehicleTrimData = null;
                                        //selected dealer data
                                        $scope.dealerData = null;
                                        //select center data
                                        $scope.centerData = null;
                                        //userData
                                        $scope.userData = null;
                                        //init userdata viewer
                                        $scope.userDataInit = function () {

                                        //show vehicle information
                                        if (_vehicle_data_ != null && _vehicle_data_ != undefined) {
                                        var selectInfo = _vehicle_data_;
                                        var selectInfoList = [];
                                        for (var i = 0, iCnt = selectInfo.carKey.length; i < iCnt; i++) {
                                        selectInfoList[i] = {
                                        carKey : selectInfo.carKey[i]
                                                , carCode : selectInfo.carCode[i]
                                                , carName : selectInfo.carName[i]
                                                , carImage : selectInfo.carImage[i]
                                                , carTrim : null
                                        };
                                        if (_vehicle_trim_data_ != null) {
                                        selectInfoList[i].carTrim = _vehicle_trim_data_[i];
                                        }
                                        }
                                        $scope.vehicleData = selectInfoList;
                                        }

                                        //show vehicle trim information
                                        if (_vehicle_trim_data_ != null) {
                                        $scope.vehicleTrimData = $scope.vehicleData;
                                        }

                                        //show dealer information
                                        if (_dealer_data_ != null) {
                                        $scope.dealerData = _dealer_data_;
                                        $scope.dealerNm = $scope.dealerData.dealerNm;
                                        $scope.dealerPhone = $scope.dealerData.phone;
                                        }

                                        //show service center information
                                        if (_center_data_ != null) {
                                        $scope.centerData = _center_data_;
                                        $scope.centerNm = $scope.centerData.centerNm;
                                        $scope.centerAddr = $scope.centerData.addr;
                                        $scope.centerPhone = $scope.centerData.phone;
                                        }

                                        //show user key in data
                                        if (_user_data_ != null) {
                                        $scope.userData = _user_data_;
                                        $scope.title = $scope.userData.title;
                                        $scope.fname = $scope.userData.fname;
                                        $scope.lname = $scope.userData.lname;
                                        if (angular.equals($scope.userData.p_method, "e")) {
                                        $scope.preferred_method = 'E-mail';
                                        } else if (angular.equals($scope.userData.p_method, "p")) {
                                        $scope.preferred_method = 'Phone';
                                        }



                                        $scope.email = $scope.userData.email;
                                        if (angular.equals($scope.userData.mphone1, "")) {
                                        $scope.mphone = "";
                                        } else {
                                        $scope.mphone = $scope.userData.mphone1 + "-" + $scope.userData.mphone2 + "-" + $scope.userData.mphone3;
                                        }

                                        if (angular.equals($scope.userData.wphone1, "")) {
                                        $scope.wphone = "";
                                        } else {
                                        $scope.wphone = $scope.userData.wphone1 + "-" + $scope.userData.wphone2 + "-" + $scope.userData.wphone3;
                                        }

                                        if (angular.equals($scope.userData.hphone1, "")) {
                                        $scope.hphone = "";
                                        } else {
                                        $scope.hphone = $scope.userData.hphone1 + "-" + $scope.userData.hphone2 + "-" + $scope.userData.hphone3;
                                        }





                                        $scope.oaddr = $scope.userData.oaddr;
                                        $scope.taddr = $scope.userData.taddr;
                                        $scope.addr_city = $scope.userData.addr_city;
                                        $scope.province = $scope.userData.province;
                                        $scope.zipcode = $scope.userData.zipcode;
                                        $scope.message = $scope.userData.message;
                                        }
                                        };
                                        });
                                        //make ajax json
                                        function returnAjaxParameters () {

                                        var rt = {
                                        "dummy" : ""


                                                , "reqTitle" : _userdata_view_scope_.title



                                                , "reqFnm" : _userdata_view_scope_.fname
                                                , "reqLnm" : _userdata_view_scope_.lname
                                                , "regNm" : _userdata_view_scope_.lname + ", " + _userdata_view_scope_.fname



                                                , "reqType" : _userdata_view_scope_.userData.p_method



                                                , "reqEmail" : _userdata_view_scope_.email



                                                , "reqPhoneH" : _userdata_view_scope_.hphone
                                                , "reqPhoneW" : _userdata_view_scope_.wphone
                                                , "reqPhoneM" : _userdata_view_scope_.mphone





                                                , "reqCity" : _userdata_view_scope_.addr_city
                                                , "reqAddr1" : _userdata_view_scope_.oaddr
                                                , "reqAddr2" : _userdata_view_scope_.taddr
                                                , "reqProvince" : _userdata_view_scope_.province
                                                , "reqZipcode" : _userdata_view_scope_.zipcode







                                                , "reqMsg" : _userdata_view_scope_.message






                                                , "statusCd" : "RQ01ST01"
                                        };
                                        if (_userdata_view_scope_.vehicleData != null) {
                                        var selectInfo = _userdata_view_scope_.vehicleData;
                                        for (var i = 0, iCnt = selectInfo.length; i < iCnt; i++) {
                                        rt["carKey" + (i + 1)] = selectInfo[i].carKey;
                                        rt["vehicle" + (i + 1)] = selectInfo[i].carName;
                                        if (_userdata_view_scope_.vehicleTrimData != null) {
                                        rt["trim" + (i + 1)] = selectInfo[i].carTrim;
                                        }
                                        }
                                        }

                                        if (_userdata_view_scope_.dealerData != null) {
                                        rt["dealerSeq"] = _userdata_view_scope_.dealerData.dealerSeq;
                                        rt["dealerNm"] = _userdata_view_scope_.dealerData.dealerNm;
                                        rt["dealerAddr"] = _userdata_view_scope_.dealerData.addr;
                                        rt["dealerPhone"] = _userdata_view_scope_.dealerData.phone;
                                        rt["dealerEmail"] = _userdata_view_scope_.dealerData.email;
                                        }

                                        if (_userdata_view_scope_.centerData != null) {
                                        rt["dealerSeq"] = _userdata_view_scope_.centerData.centerSeq;
                                        rt["dealerNm"] = _userdata_view_scope_.centerData.centerNm;
                                        rt["dealerAddr"] = _userdata_view_scope_.centerData.addr;
                                        rt["dealerPhone"] = _userdata_view_scope_.centerData.phone;
                                        rt["dealerEmail"] = _userdata_view_scope_.centerData.email;
                                        }

                                        delete rt["dummy"];
                                        return rt;
                                        }

                                        //call init method
                                        function initViewUserData () {
                                        _userdata_view_scope_.userDataInit();
                                        }
                                    </script>

                                    <table class="table_type2" ng-controller="userdata.view" id="userdata.view.comp">
                                        <caption>Kia Quote Request | Kia Shopping Tools | Kia Motors Global result report</caption>
                                        <colgroup>
                                            <col style="width:20%"><col style="width:auto">
                                        </colgroup>
                                        <tbody>
                                            <tr ng-show="vehicleData != null">
                                                <th class="tleft">Vehicle</th>
                                                <td class="tleft" ng-show="vehicleData.length > 1">
                                                    <ul class="finishTbl">
                                                        <li ng-repeat="car in vehicleData">
                                                            <span class="car"><img src="{{car.carImage}}" alt="{{car.carName}}"> <span class="car_name">{{car.carName}}</span></span>
                                                        </li>
                                                    </ul>
                                                </td>			
                                                <td class="tleft" ng-show="vehicleData.length == 1">
                                                    <span class="car" ng-repeat="car in vehicleData"><img src="{{car.carImage}}" alt="{{car.carName}}"> <span class="car_name">{{car.carName}}</span></span>
                                                </td>
                                            </tr>

                                            <tr ng-show="vehicleTrimData != null">
                                                <th class="tleft">Trim</th>
                                                <td class="tleft" ng-show="vehicleData.length > 1">
                                                    <ul class="finishTbl">
                                                        <li ng-repeat="car in vehicleData">{{car.carTrim}}</li>
                                                    </ul>
                                                </td>
                                                <td class="tleft" ng-show="vehicleData.length == 1" ng-repeat="car in vehicleData">{{car.carTrim}}</td>
                                            </tr>

                                            <tr ng-show="dealerData != null">
                                                <th class="tleft">Dealer</th>
                                                <td class="tleft">
                                                    <ul class="barType">
                                                        <li>{{dealerNm}}</li>
                                                        <li>Phone : {{dealerPhone}}</li>
                                                    </ul>
                                                </td>
                                            </tr>


                                            <tr>
                                                <th class="tleft">Title</th>
                                                <td class="tleft">{{title}}</td>
                                            </tr>



                                            <tr>
                                                <th class="tleft">Name</th>
                                                <td class="tleft">{{fname}}  {{lname}}</td>
                                            </tr>



                                            <tr>
                                                <th class="tleft">Contact Method</th>
                                                <td class="tleft">{{preferred_method}}</td>
                                            </tr>



                                            <tr>
                                                <th class="tleft">E-mail</th>
                                                <td class="tleft">{{email}}</td>
                                            </tr>



                                            <tr>
                                                <th class="tleft">Phone</th>
                                                <td class="tleft">
                                                    <ul class="barType">
                                                        <li>Mobile : {{mphone}}</li>
                                                        <li>Work : {{wphone}}</li>
                                                        <li>Home : {{hphone}}</li>
                                                    </ul>
                                                </td>
                                            </tr>





                                            <tr>
                                                <th class="tleft">Address</th>
                                                <td class="tleft">{{taddr}} {{oaddr}} {{addr_city}}, {{addr_city}} {{zipcode}}</td>
                                            </tr>







                                            <tr>
                                                <th class="tleft">Message</th>
                                                <td class="tleft" ng-bind-html="message | sanitize"></td>
                                            </tr>






                                        </tbody>
                                    </table></div>

                            </div>

                            <p class="bl_type5 finishTxt2">If you would like to make another enquiry please select one of the options below.</p>
                            <!-- 20141219 hyj -->
                            <div class="form_wrp sales_sel">
                                <span class="sel_box inp_sel">
                                    <select class="form_select" id="below-car-list">
                                        <option value="/carKey/{{car.carKey}}/trimCode/{{car.selectedTrimCode}}" ng-repeat="car in cars" after-option-element>{{car.carName}}</option>
                                    </select>
                                </span>
                            </div>	
                            <ul class="sales_tool">
                                <li><a href="http://org-www.kia.com/gt/shopping-tools/request-a-brochure.html" class="tool_tspr spr_tool7" ng-click="byPass($event, true)">Request a brochure</a></li>
                                <li><a href="http://org-www.kia.com/gt/shopping-tools/compare-car.html" class="tool_tspr spr_tool3" ng-click="byPass($event, true)">Compare car</a></li>
                                <li><a href="http://org-www.kia.com/gt/shopping-tools/payment-estimator.html" class="tool_tspr spr_tool8" ng-click="byPass($event, true)">Payment estimator</a></li> 
                                <li><a href="http://org-www.kia.com/gt/shopping-tools/request-a-test-drive.html" class="tool_tspr spr_tool1" ng-click="byPass($event, true)">Request a test drive</a></li>
                                <li><a href="http://org-www.kia.com/gt/shopping-tools/find-a-dealer.html" class="tool_tspr spr_tool9">Find a dealer</a></li>

                            </ul>
                        </div>
                        <div class="btn_area">
                            <a href="http://org-www.kia.com/content/kwcms/gt/en.html" class="btnMedium btnType1" ng-click="send($event)"><span class="btnIcon arrow_r">Complete</span></a>
                        </div>
                    </div>


                </div>
                <script>
                    /*
                     $("#below-car-list").change(function(){
                     $(".tool_tspr").each(function(idx){
                     var url = $(".tool_tspr").eq(idx).attr("href");
                     //url = url.substring(0,url.indexOf("/carKey"));
                     url = url + $("#below-car-list").val()
                     $(".tool_tspr").eq(idx).attr("href",url);
                     });
                     });
                     */
                </script></div>

        </div>

    </div>
</div>