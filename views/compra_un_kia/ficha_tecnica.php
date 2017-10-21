<div id="container" ng-app="kwcmsAppModuleApp" ng-cloak>    
    <div id="content" class="subContents">
        <div class="par parsys"><div class="parbase global-title section">












                <div class="content_title">
                    <!-- 20150827 GT SEO h3 > h1 -->
                    <h1 class="con_tit"><p>Request a Brochure</p>
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
                                <strong class="depth current"property="name">Request a brochure</strong>
                                <meta property="position" content=  3>
                            </li>

                        </ol>
                    </div>
                </div></div>
            <div class="request-a-brochure section">




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
                    var _dealer_data_ = null;
                    var _center_data_ = null;
                    var _carType = null;
                    var _vehicle_name = null;
                    kwcmsApp.controller("requestabrochure.steps", function ($scope, $timeout, HttpService) {
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
                    $scope.step = step;
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
                    carKey: selectInfo.carKey[i]
                            , carCode: selectInfo.carCode[i]
                            , carName: selectInfo.carName[i]
                            , carImage: selectInfo.carImage[i]
                            , carTrim: selectInfo.carTrim[i]
                    };
                    if (i == iCnt - 1) {
                    _vehicle_name = selectInfo.carCode[i].replace("-", "_");
                    }
                    }

                    dtmDataLayer = {
                    'vehicle_name': _vehicle_name,
                            'vehicle_type': _carType
                    }
                    _satellite.track('brochure_vehicle');
                    $scope.cars = selectInfoList;
                    }
                    break;
                    case "2":
                            userdataInfoSubmit();
                    if (_user_data_ != null) {
                    $scope.userData = _user_data_;
                    //fill user data
                    if (_userdata_view_scope_ != null) {
                    _userdata_view_scope_.userDataInit();
                    dtmDataLayer = {
                    'vehicle_name': _vehicle_name,
                            'vehicle_type': _carType
                    }
                    _satellite.track('brochure_myinfo');
                    }
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
                    method: "POST"
                            , params: returnAjaxParameters()
                            , url: "/api/kia_global/base/rq01/reqBrochure.insertReqBrochure1"
                    };
                    HttpService.http(params, $scope.sended, moveURI);
                    };
                    //send completed
                    $scope.sended = function (data, uri) {

                    dtmDataLayer = {
                    'vehicle_name': _vehicle_name,
                            'vehicle_type': _carType
                    }
                    _satellite.track('brochure_complete');
                    if (angular.equals(data.status, "Success")) {
                    var _datas = $scope.userData;
                    //movePage("The request completed! Thank you!");
                    alert("The request completed! Thank you!");
                    }

                    if (!angular.equals(uri, "") && !angular.equals(uri, undefined)) {
                    document.location.href = uri;
                    } else {
                    document.location.href = "http://org-www.kia.com/content/kwcms/gt/en.html";
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
                    };
                    });
                </script>

                <div class="content_detail" ng-controller="requestabrochure.steps" ng-init="init()">


                    <div class="inner request_brochure" ng-show="step == 1">
                        <ol class="stepType01 brochureStep">
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
                                                Array.prototype.indexOf = function (elt /*, from*/)
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
                                                kwcmsApp.controller("carselector.selector", function ($scope, $timeout, HttpService) {

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
                                                method: "GET"
                                                        , params: {
                                                        nCd: "gt"
                                                        }
                                                , url: "/api/kia/base/carInfo.selectVehicleList"
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
                                                carCount: $scope.currentSelectedCount
                                                        , carKey: []
                                                        , carCode: []
                                                        , carName: []
                                                        , carImage: []
                                                        , carTrim: []
                                                        , carTrimCode: []
                                                };
                                                //reset selected vehicle
                                                $scope.resetSelectedCar = function () {
                                                $scope.currentSelectedCount = 0;
                                                $scope.callbackInfo = {
                                                carCount: 0
                                                        , carKey: []
                                                        , carCode: []
                                                        , carName: []
                                                        , carImage: []
                                                        , carTrim: []
                                                        , carTrimCode: []
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
                                                $scope.hideChk = function (chk) {
                                                var chkVal = false;
                                                if (chk == null || chk.length < 1) {
                                                chkVal = false;
                                                } else {
                                                for (var i = 0; i < chk.length; i++) {
                                                if (chk[i] == "request-a-brochure") {
                                                chkVal = true;
                                                break;
                                                } else {
                                                chkVal = false;
                                                }
                                                }
                                                }
                                                return chkVal;
                                                }
                                                });
                                                //apply overflow:scoll
                                                kwcmsApp.directive('afterParseVehicle', function () {
                                                return {
                                                restrict: 'A',
                                                        link: function (scope, element, attr) {
                                                        if (scope.$last === true) {
                                                        _vehicle_selector_controller_.selectCategory('All');
                                                        }
                                                        }
                                                }
                                                });
                                            </script>

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

                                    <div class="selData hidden">Select Vehicles : </div>
                                    <div class="step_ctrl">
                                        <a href="#next" class="btnMedium btnType1" ng-click="validation('1', '2', true)"><span class="btnIcon arrow_r">next</span></a>
                                    </div>
                                </div>
                            </li>
                            <li class="stepWrap">
                                <div class="stepbar bar02">
                                    <strong class="num"><em>02</em></strong>
                                    <div class="txt">
                                        <strong>My Info</strong>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>



                    <div class="inner request_brochure" ng-show="step == 2">
                        <ol class="stepType01 quoteStep">
                            <li class="stepWrap paston">
                                <div class="stepbar bar01">
                                    <strong class="num"><em>01</em></strong>
                                    <div class="txt">
                                        <strong>Vehicle</strong>
                                    </div>
                                    <div class="result">
                                        <div class="car">
                                            <a href="#" class="carList" ng-repeat="car in cars" ng-click="stepChange('1')"><img src="{{car.carImage}}" alt="{{car.carName}}"><span class="carName">{{car.carName}}</span></a>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="stepWrap on">
                                <div class="stepbar bar02">
                                    <strong class="num"><em>02</em></strong>
                                    <div class="txt">
                                        <strong>My Info</strong>
                                        <span class="ex">Input Information</span>
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

                                                                    var mPhoneVal = function () {
                                                                    if ($("#mphone1").val() != "" && $("#mphone2").val() != "" && $("#mphone3").val() != "")
                                                                            return true;
                                                                    else
                                                                            return false;
                                                                    }
                                                                    var wPhoneVal = function () {
                                                                    if ($("#wphone1").val() != "" && $("#wphone2").val() != "" && $("#wphone3").val() != "")
                                                                            return true;
                                                                    else
                                                                            return false;
                                                                    }
                                                                    var hPhoneVal = function () {
                                                                    if ($("#hphone1").val() != "" && $("#hphone2").val() != "" && $("#hphone3").val() != "")
                                                                            return true;
                                                                    else
                                                                            return false;
                                                                    }

                                                                    var PhoneVal = function () {
                                                                    if ($("#p_method").val() == 'e') {
                                                                    return false;
                                                                    } else {
                                                                    if (mPhoneVal() || wPhoneVal() || hPhoneVal()) {
                                                                    if (!mPhoneVal()) {
                                                                    if ($("#mphone1").val() != "" || $("#mphone2").val() != "" || $("#mphone3").val() != "")
                                                                            return true;
                                                                    } else if (!wPhoneVal()) {
                                                                    if ($("#wphone1").val() != "" || $("#wphone2").val() != "" || $("#wphone3").val() != "")
                                                                            return true;
                                                                    } else if (!hPhoneVal()) {
                                                                    if ($("#hphone1").val() != "" || $("#hphone2").val() != "" || $("#hphone3").val() != "")
                                                                            return true;
                                                                    }
                                                                    return false;
                                                                    } else {
                                                                    return true;
                                                                    }
                                                                    }
                                                                    }

                                                                    //form validation
                                                                    $("form[name=datainfo-comp-form]").validate({
                                                                    rules: {
                                                                    dummy: {}


                                                                    , fname: {
                                                                    required: true
                                                                            , maxlength: 50
                                                                            //, isalphanumeric : true
                                                                    }
                                                                    , lname: {
                                                                    required: true
                                                                            , maxlength: 50
                                                                            //, isalphanumeric : true
                                                                    }



                                                                    , email: {
                                                                    required: function () {
                                                                    var useContactMethod = "true";
                                                                    var useEmail = "true";
                                                                    if (useContactMethod == "true" && getSelectValue("p_method") == "e") {
                                                                    return true;
                                                                    } else if (useContactMethod == "false" && useEmail == "true") {
                                                                    return true;
                                                                    }

                                                                    return false;
                                                                    }
                                                                    , isemail: function () {
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
                                                                    , email_confirm: {
                                                                    required: function () {
                                                                    var useContactMethod = "true";
                                                                    var useEmail = "true";
                                                                    if (useContactMethod == "true" && getSelectValue("p_method") == "e") {
                                                                    return true;
                                                                    } else if (useContactMethod == "false" && useEmail == "true") {
                                                                    return true;
                                                                    }

                                                                    return false;
                                                                    }
                                                                    , equalTo: "#email"
                                                                    }


                                                                    , mphone1: {
                                                                    required: PhoneVal
                                                                            , isnumeric: true
                                                                            , maxlength: 5
                                                                    }
                                                                    , mphone2: {
                                                                    required: PhoneVal
                                                                            , isnumeric: true
                                                                            , maxlength: 4
                                                                    }
                                                                    , mphone3: {
                                                                    required: PhoneVal
                                                                            , isnumeric: true
                                                                            , maxlength: 4
                                                                    }
                                                                    , wphone1: {
                                                                    required: PhoneVal
                                                                            , isnumeric: true
                                                                            , maxlength: 5
                                                                    }
                                                                    , wphone2: {
                                                                    required: PhoneVal
                                                                            , isnumeric: true
                                                                            , maxlength: 4
                                                                    }
                                                                    , wphone3: {
                                                                    required: PhoneVal
                                                                            , isnumeric: true
                                                                            , maxlength: 4
                                                                    }
                                                                    , hphone1: {
                                                                    required: PhoneVal
                                                                            , isnumeric: true
                                                                            , maxlength: 5
                                                                    }
                                                                    , hphone2: {
                                                                    required: PhoneVal
                                                                            , isnumeric: true
                                                                            , maxlength: 4
                                                                    }
                                                                    , hphone3: {
                                                                    required: PhoneVal
                                                                            , isnumeric: true
                                                                            , maxlength: 4
                                                                    }







                                                                    , message: {
                                                                    required: true
                                                                    }





                                                                    }
                                                                    ,
                                                                            messages: {
                                                                            dummy: {}


                                                                            , fname: {
                                                                            required: "please enter First Name."
                                                                                    , maxlength: "Please enter under {0} characters."
                                                                                    //,isalphanumeric : "Not include specific character"
                                                                            }
                                                                            , lname: {
                                                                            required: "please enter Last Name."
                                                                                    , maxlength: "Please enter under {0} characters."
                                                                                    //,isalphanumeric  : "Not include specific character"
                                                                            }



                                                                            , email: {
                                                                            required: "please enter Your Email Account."
                                                                                    , isemail: "Is not an email format."
                                                                            }
                                                                            , email_confirm: {
                                                                            required: "please enter Your Email Account."
                                                                                    , isemail: "Is not an email format."
                                                                                    , equalTo: "Email and email confirmation is not the same value."
                                                                            }


                                                                            , mphone1: {
                                                                            required: "Invalid phone number."
                                                                                    , isnumeric: "Invalid phone number."
                                                                                    , maxlength: "Please enter under {0} numbers"
                                                                            }
                                                                            , mphone2: {
                                                                            required: "Invalid phone number."
                                                                                    , isnumeric: "Invalid phone number."
                                                                                    , maxlength: "Please enter under {0} numbers"
                                                                            }
                                                                            , mphone3: {
                                                                            required: "Invalid phone number."
                                                                                    , isnumeric: "Invalid phone number."
                                                                                    , maxlength: "Please enter under {0} numbers"
                                                                            }
                                                                            , wphone1: {
                                                                            required: "Invalid phone number."
                                                                                    , isnumeric: "Invalid phone number."
                                                                                    , maxlength: "Please enter under {0} numbers"
                                                                            }
                                                                            , wphone2: {
                                                                            required: "Invalid phone number."
                                                                                    , isnumeric: "Invalid phone number."
                                                                                    , maxlength: "Please enter under {0} numbers"
                                                                            }
                                                                            , wphone3: {
                                                                            required: "Invalid phone number."
                                                                                    , isnumeric: "Invalid phone number."
                                                                                    , maxlength: "Please enter under {0} numbers"
                                                                            }
                                                                            , hphone1: {
                                                                            required: "Invalid phone number."
                                                                                    , isnumeric: "Invalid phone number."
                                                                                    , maxlength: "Please enter under {0} numbers"
                                                                            }
                                                                            , hphone2: {
                                                                            required: "Invalid phone number."
                                                                                    , isnumeric: "Invalid phone number."
                                                                                    , maxlength: "Please enter under {0} numbers"
                                                                            }
                                                                            , hphone3: {
                                                                            required: "Invalid phone number."
                                                                                    , isnumeric: "Invalid phone number."
                                                                                    , maxlength: "Please enter under {0} numbers"
                                                                            }







                                                                            , message: {
                                                                            required: "Please enter the Message."
                                                                            }





                                                                            }
                                                                    ,
                                                                            submitHandler: function (form) {
                                                                            var isSubmit = compDataReturn();
                                                                            if (isSubmit) {
                                                                            _user_data_ = getKeyInValue();
                                                                            }

                                                                            return false;
                                                                            }
                                                                    });
                                                                    //show/hide phone or email key field
                                                                    function viewContactMethod(method) {
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
                                                                    function keyInMessageSize(that) {
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
                                                                    function compDataReturn() {
                                                                    var rt = true;
                                                                    var useContactMethod = "true";
                                                                    var usePhone = "true";
                                                                    if ($("#pcategory").val() == "") {
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
                                                                    function userdataInfoSubmit() {
                                                                    $("form[name=datainfo-comp-form]").submit();
                                                                    }

                                                                    //set methods for data field
                                                                    //makeSelectOption
                                                                    function makeUserDataOptions(arg) {
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
                                                                    function setCategories(arg) {
                                                                    userdata_keyin_custom_categories = arg;
                                                                    var argLen = arg.length;
                                                                    var opt = "";
                                                                    if (argLen > 0) {



                                                                    }
                                                                    }

                                                                    //set PreferredTime
                                                                    //@params - [ ["value1", "text1"], ["value2", "text2"], ["value3", "text3"] ];
                                                                    var userdata_keyin_custom_prefer_time = null;
                                                                    function setPreferredTime(arg) {
                                                                    userdata_keyin_custom_prefer_time = arg;
                                                                    var opt = makeUserDataOptions(arg);
                                                                    $("select[name=ptime]").eq(0).html(opt).promise().done(function () {
                                                                    $(".form_select").resetSS();
                                                                    });
                                                                    }

                                                                    //set title
                                                                    //@params - [ ["value1", "text1"], ["value2", "text2"], ["value3", "text3"] ];
                                                                    var userdata_keyin_custom_title = null;
                                                                    function setTitle(arg) {
                                                                    userdata_keyin_custom_title = arg;
                                                                    var opt = makeUserDataOptions(arg);
                                                                    $("select[name=title]").eq(0).html(opt).promise().done(function () {
                                                                    $(".form_select").resetSS();
                                                                    });
                                                                    }

                                                                    //get <select> value
                                                                    function getSelectValue(n) {
                                                                    var jObj = $("#" + n);
                                                                    return jObj.find("option:selected").val();
                                                                    }

                                                                    //get checkbox/radiobox value
                                                                    function getRadioValue(n, type) {
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
                                                                    function getTextByValue(v, cate) {
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
                                                                    dummy: null


                                                                            , title: getSelectValue("title")



                                                                            , fname: $("#fname").val()
                                                                            , lname: $("#lname").val()



                                                                            , p_method: getSelectValue("p_method")



                                                                            , email: $("#email").val()
                                                                            , email_confirm: $("#email_confirm").val()



                                                                            , mphone1: $("#mphone1").val()
                                                                            , mphone2: $("#mphone2").val()
                                                                            , mphone3: $("#mphone3").val()
                                                                            , wphone1: $("#wphone1").val()
                                                                            , wphone2: $("#wphone2").val()
                                                                            , wphone3: $("#wphone3").val()
                                                                            , hphone1: $("#hphone1").val()
                                                                            , hphone2: $("#hphone2").val()
                                                                            , hphone3: $("#hphone3").val()





                                                                            , oaddr: $("#oaddr").val()
                                                                            , taddr: $("#taddr").val()
                                                                            , addr_city: $("#addr_city").val()
                                                                            , city: $("#city").val()
                                                                            , province: $("#province").val()
                                                                            , zipcode: $("#zipcode").val()







                                                                            , message: filterXSS($("#message").val())
                                                                            //, message : $("#message").val()





                                                                    };
                                                                    delete userData["dummy"];
                                                                    return userData;
                                                                    }

                                                                    //clear key-in field
                                                                    function resetUserDataKeyIn() {
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

                                                                    $(document).ready(function () {

                                                                    //contact method init
                                                                    viewContactMethod("e");
                                                                    });
                                            </script>
                                        </div>

                                    </div>

                                    <div class="step_ctrl">
                                        <a href="#back" class="btnMedium btnType3" ng-click="stepChange('1')"><span class="btnIcon arrow_l">Back</span></a>
                                        <a href="#" class="btnMedium btnType1" ng-click="validation('2', '3', true)"><span class="btnIcon arrow_r">Submit</span></a>
                                    </div>
                                    <div class="note_area">
                                        <div class="bl_type_note">
                                            <p class="note_p">Reliable International Automotive LLC, the "Company" makes no warranties or representations, whether express or implied, as to the veracity or completeness of this website's content or of the content of any websites that have links to it. This website is updated from time to time and is intended purely for information purposes. The information contained in this website is not intended to be complete or exhaustive and must not be relied upon for any purpose.</p>

                                            <p class="note_p">Vehicles and its parts and accessories specifications are subject to change with out prior notification. Pictures and colors of vehicles may differ from actual specifications. For further details, please visit your nearest Kia Showroom.</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>



                    <div class="inner request_brochure" ng-show="step == 3">
                        <div class="finishTop">
                            <div class="contBox">
                                <p class="finishTxt">Kia Motors is the basis of innovation for customers You are transformed into a truly global player.</p>
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

                                        kwcmsApp.controller("userdata.view", function ($scope, HttpService) {

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
                                        carKey: selectInfo.carKey[i]
                                                , carCode: selectInfo.carCode[i]
                                                , carName: selectInfo.carName[i]
                                                , carImage: selectInfo.carImage[i]
                                                , carTrim: null
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
                                        function returnAjaxParameters() {

                                        var rt = {
                                        "dummy": ""


                                                , "reqTitle": _userdata_view_scope_.title



                                                , "reqFnm": _userdata_view_scope_.fname
                                                , "reqLnm": _userdata_view_scope_.lname
                                                , "regNm": _userdata_view_scope_.lname + ", " + _userdata_view_scope_.fname



                                                , "reqType": _userdata_view_scope_.userData.p_method



                                                , "reqEmail": _userdata_view_scope_.email



                                                , "reqPhoneH": _userdata_view_scope_.hphone
                                                , "reqPhoneW": _userdata_view_scope_.wphone
                                                , "reqPhoneM": _userdata_view_scope_.mphone





                                                , "reqCity": _userdata_view_scope_.addr_city
                                                , "reqAddr1": _userdata_view_scope_.oaddr
                                                , "reqAddr2": _userdata_view_scope_.taddr
                                                , "reqProvince": _userdata_view_scope_.province
                                                , "reqZipcode": _userdata_view_scope_.zipcode







                                                , "reqMsg": _userdata_view_scope_.message






                                                , "statusCd": "RQ01ST01"
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
                                        function initViewUserData() {
                                        _userdata_view_scope_.userDataInit();
                                        }
                                    </script>

                                    <table class="table_type2" ng-controller="userdata.view" id="userdata.view.comp">
                                        <caption>Kia Car Brochures | Kia Shopping Tools | Kia Motors Global result report</caption>
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
                                    </table>
                                </div>
                            </div>
                            <p class="bl_type5 finishTxt2">If you would like to make another enquiry please select one of the options below.</p>
                            <!-- 20141219 hyj -->
                            <div class="form_wrp sales_sel">
                                <span class="sel_box inp_sel">
                                    <select class="form_select" id="below-car-list">
                                        <option value="/carKey/{{car.carKey}}" ng-repeat="car in cars" after-option-element>{{car.carName}}</option>
                                    </select>
                                </span>
                            </div>
                            <ul class="sales_tool">
                                <li><a href="http://org-www.kia.com/gt/shopping-tools/compare-car.html" class="tool_tspr spr_tool3" ng-click="byPass($event, true)">Compare car</a></li>

                                <li><a href="http://org-www.kia.com/gt/shopping-tools/payment-estimator.html" class="tool_tspr spr_tool8" ng-click="byPass($event, true)">Payment estimator</a></li> 
                                <li><a href="http://org-www.kia.com/gt/shopping-tools/request-a-test-drive.html" class="tool_tspr spr_tool1" ng-click="byPass($event, true)">Request a test drive</a></li>
                                <li><a href="http://org-www.kia.com/gt/shopping-tools/find-a-dealer.html" class="tool_tspr spr_tool9">Find a dealer</a></li>
                                <li><a href="http://org-www.kia.com/gt/shopping-tools/request-a-quote.html" class="tool_tspr spr_tool2" ng-click="byPass($event, true)">Request a quote</a></li>					
                            </ul>
                            <!-- //20141219 hyj -->
                        </div>
                        <div class="btn_area">
                            <a href="http://org-www.kia.com/content/kwcms/gt/en.html" class="btnMedium btnType1" ng-click="send($event)"><span class="btnIcon arrow_r">Complete</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>