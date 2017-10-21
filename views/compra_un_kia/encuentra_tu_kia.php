<div id="container" ng-app="kwcmsAppModuleApp" ng-cloak>    
    <div id="content" class="subContents">
        <div class="par parsys"><div class="parbase global-title section">
                <div class="content_title">
                    <!-- 20150827 GT SEO h3 > h1 -->
                    <h1 class="con_tit"><p>Encuentra tu Kia</p></h1>
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
                                <strong class="depth current"property="name">Find a Dealer</strong>
                                <meta property="position" content=  3>
                            </li>
                        </ol>
                    </div>
                </div></div>
            <div class="section find-a-dealer">
                <script type="text/javascript">
                    var _find_dealer_search_ = null;
                    var _find_dealer_list_view_ = null;
                    var _find_dealer_map_view_ = null;
                    kwcmsApp.controller("findadealer.search", function($scope, HttpService) {
                    //reference_controller_scope
                    _find_dealer_search_ = $scope;
                    //current view selector
                    $scope.searchTab = "all";
                    $scope.currentTab = "";
                    //checked category values
                    $scope.checkedValue = [];
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
                    //initialize 
                    $scope.init = function () {
                    $scope.currentTab = "list";
                    //call service categories
                    commonCodeLib.init("FD02SC", "kia_global");
                    $scope.categories = commonCodeLib.comCdList;
                    $scope.search();
                    };
                    //change tab
                    $scope.viewTab = function (tabName) {
                    $scope.currentTab = tabName;
                    _find_dealer_list_view_.currentTab = tabName;
                    _find_dealer_map_view_.currentTab = tabName;
                    };
                    //search method
                    $scope.search = function (pageNum, isAll) {
                    if (pageNum != undefined) {
                    $scope.paramVO["pageNum"] = pageNum;
                    } else {
                    $scope.paramVO["pageNum"] = 1;
                    }

                    if (!angular.equals($scope.searchKey, "") && !angular.equals($scope.searchKey, undefined)) {
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
                    //search for closest
                    $scope.closestSearch = function (isAll, coordinate) {

                    $scope.paramVO["sc.distanceType"] = $("[name='distanceType']").val();
                    $scope.paramVO["sc.distance"] = $("[name='distance']").val();
                    if (coordinate != undefined){
                    $scope.paramVO["sc.lat"] = coordinate[Object.keys(coordinate)[0]];
                    $scope.paramVO["sc.lng"] = coordinate[Object.keys(coordinate)[1]];
                    }

                    var paramVO = $scope.paramVO;
                    if (isAll != undefined && isAll == true) {
                    paramVO = {
                    "sc.delYn" : "N"
                            , "sc.displayYn" : "Y"
                            , "isAll" : isAll
                    };
                    }

                    var params = {
                    method : "GET"
                            , params : paramVO
                            , url : "/api/kia_global/base/fd01/findDealer.selectClosestFindDealerList"
                    };
                    HttpService.http(params, $scope.searchCallback, paramVO);
                    };
                    //search callback
                    $scope.searchCallback = function (data, params)
                    {
                    dtmDataLayer = null;
                    if (data.totalCount > 0)
                    {
                    dtmDataLayer = { 'dealer_search_term': $scope.searchKey };
                    }
                    else
                    {
                    dtmDataLayer = { 'no_result_dealer': $scope.searchKey };
                    }
                    _satellite.track('internal_search');
                    if (params.isAll == true) {
                    _find_dealer_map_view_.allInit(data, params);
                    } else {
                    _find_dealer_list_view_.init(data, params);
                    _find_dealer_map_view_.init(data, params);
                    }
                    };
                    //click category checkbox search 
                    $scope.checkboxSearch = function (code) {
                    var idx = $scope.checkedValue.indexOf(code);
                    var cvLen = $scope.checkedValue.length;
                    if (idx > - 1) { // is currently selected
                    $scope.checkedValue.splice(idx, 1);
                    } else { // is newly selected
                    $scope.checkedValue.push(code);
                    }

                    //to make condition for search
                    //initailize
                    if (cvLen > 0) {
                    for (var i = 0; i < cvLen; i++) {
                    delete $scope.paramVO["sc.searchServiceCd[" + i + "]"];
                    }
                    }
                    //make
                    cvLen = $scope.checkedValue.length;
                    if (cvLen > 0) {
                    for (var i = 0; i < cvLen; i++) {
                    $scope.paramVO["sc.searchServiceCd[" + i + "]"] = $scope.checkedValue[i];
                    }
                    }

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

                <div class="content_detail">

                    <div class="inner find_dealer">

                        <div class="findSearch findDealer" ng-controller="findadealer.search" ng-init="init()">
                            <strong class="schTit">Search</strong>
                            <div class="schCon">

                                <div class="tab_type3 schTab">
                                    <a href="#" class="input_box"><span>{{searchTab == 'all' ? 'Find a dealer' : 'Closest Dealers Within'}}</span></a>
                                    <ul>
                                        <li><a href="find-a-dealer.all.html" ng-class="{tab_on : searchTab == 'all'}"><span>Find a dealer</span></a></li>
                                        <li><a href="find-a-dealer.closest.html" ng-class="{tab_on : searchTab == 'closest'}"><span>Closest Dealers Within</span></a></li>
                                    </ul>
                                </div>	


                                <div class="formArea">
                                    <h4 class="hidden">Find a dealer</h4>
                                    <div class="formInput">
                                        <input type="text" placeholder="Enter Zip/Postal Code number" class="sch_inp" title="Enter Zip/Postal Code number" ng-model="searchKey" >
                                    </div>
                                </div>




                                <div class="searchOption">
                                    <span class="formCheck" ng-repeat="cate in categories| orderBy:'sortNo'">
                                        <input type="checkbox" id="sample{{$index + 1}}">
                                        <label for="sample{{$index + 1}}" class="check_box {{cate.extra2}}" ng-click="checkboxSearch(cate.code)" value="{{cate.code}}" ng-bind-html="cate.text | sanitize"></label>
                                    </span>
                                </div>
                            </div><!-- // schCon -->
                            <div class="btnArea"><button type="button" class="btnMedium btnType1" ng-click="checkKeyword()"><span class="btnIcon arrow_r">SEARCH</span></button></div>
                        </div><!-- // findSearch -->
                        <script type="text/javascript">
                            kwcmsApp.controller("findadealer.list", function($scope, pagination) {

                            //reference_controller_scope
                            _find_dealer_list_view_ = $scope;
                            //current view selector
                            $scope.searchTab = _find_dealer_search_.searchTab;
                            $scope.currentTab = _find_dealer_search_.currentTab;
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
                            _find_dealer_search_.search(pageNum);
                            };
                            //change tab
                            $scope.viewTab = function (tab) {
                            _find_dealer_search_.viewTab(tab);
                            };
                            //make address html
                            $scope.getAddrStr = function(item){
                            var str = "- ";
                            if (item.phone != null){
                            str += "Phone : " + item.phone;
                            }
                            if (item.fax != null){
                            if (str != "- "){
                            str += " / ";
                            }
                            str += "Fax : " + item.fax;
                            }
                            /* if(item.url != null){
                             if(str != "- "){
                             str += " / ";
                             }
                             str += '<a href="' + item.url + '" target="_blank">' + item.url + '</a>';
                             } */
                            if (item.zipcode != null && item.zipcode != ""){
                            str = item.addr + ', ' + item.zipcode + "<br>" + str;
                            }
                            else{
                            str = item.addr + "<br>" + str;
                            }

                            return str;
                            };
                            });</script>

                        <div class="con_box location_result" ng-controller="findadealer.list" ng-show="currentTab == 'list'">

                            <div class="location_text">
                                <h5 class="result_txt"><span class="m_none">SEARCH RESULT : </span><strong>{{total}}</strong> Dealers Found</h5>
                                <div class="tab_type1">
                                    <a href="#list" class="tab_link tt1_on" ng-click="viewTab('list')">LIST VIEW</a>
                                    <a href="#map" class="tab_link" ng-click="viewTab('map')">MAP VIEW</a>
                                </div>
                            </div>

                            <div class="location_listview">
                                <h6 class="hidden">LIST VIEW</h6>


                                <table class="table_type3 location_table">
                                    <caption>SEARCH RESULT</caption>
                                    <colgroup>
                                        <col style="width:17%">
                                        <col style="width:*">
                                        <col style="width:19%">
                                        <col style="width:222px;text-align:center">
                                        <col style="width:19%">
                                    </colgroup>
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Address / Phone</th>
                                            <th scope="col">Opening Hours</th>
                                            <th scope="col">Service Category</th>
                                            <th scope="col">Shopping Tool</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr ng-repeat="item in list" ng-show="total > 0">
                                            <th>{{item.dealerNm}}</th>
                                            <td class="tleft"><div ng-bind-html="getAddrStr(item) | sanitize"></div><a ng-href="{{item.url.indexOf('http') == - 1 ? ('http://' + item.url) : item.url}}" target="_blank">{{item.url}}</a></td>
                                            <td class="tleft" ng-bind-html="item.openHours | sanitize"></td>
                                            <td>
                                                <div class="offerList">
                                                    <span ng-repeat="ds in item.dsList" class="map_spr {{ds.extra1}}">{{ds.text}}</span>
                                                </div>
                                            </td>
                                            <td class="tleft">
                                                <a href="http://org-www.kia.com/content/kwcms/gt/en/shopping-tools/request-a-test-drive.html/dealerSeq/{{item.dealerSeq}}" class="bl_type_a" title="msg_new_window">Request a test drive</a>
                                                <a href="http://org-www.kia.com/content/kwcms/gt/en/shopping-tools/request-a-quote.html/dealerSeq/{{item.dealerSeq}}" class="bl_type_a" title="msg_new_window">Request a quote</a>
                                                <a href="http://org-www.kia.com/gt/service/book-a-service.html" class="bl_type_a" title="msg_new_window">Book a Service</a>
                                            </td>
                                        </tr>
                                        <tr ng-show="total == 0">
                                            <td colspan="5" class="nodata"><span>NO RESULT FOUND FOR YOUR QUERY</span></td>
                                        </tr>
                                    </tbody>
                                </table>



                                <ul class="location_list">
                                    <li class="loc_l" ng-repeat="item in list" ng-show="total > 0">
                                        <strong class="locTit">{{item.dealerNm}}</strong>
                                        <div class="locInfo">
                                            <p class="addr" ng-hide="!item.addr">{{item.addr}}</p>
                                            <ul class="info">
                                                <li ng-hide="!item.phone"><strong>Phone</strong> : {{item.phone}}</li>
                                                <li class="hours" ng-bind-html="'<strong>Opening Hours</strong>{{item.openHours}}' | sanitize"></li>
                                                <li ng-hide="!item.url"><strong>URL</strong> : <a ng-href="{{item.url}}" target="_blank">{{item.url}}</a></li>
                                            </ul>
                                            <div class="offerList">
                                                <span ng-repeat="ds in item.dsList" class="map_spr {{ds.extra1}}">{{ds.text}}</span>
                                            </div>
                                            <div class="btn_area">
                                                <a href="http://org-www.kia.com/content/kwcms/gt/en/shopping-tools/request-a-test-drive.html/dealerSeq/{{item.dealerSeq}}" class="bl_type_a" title="msg_new_window">Request a test drive</a>
                                                <a href="http://org-www.kia.com/content/kwcms/gt/en/shopping-tools/request-a-quote.html/dealerSeq/{{item.dealerSeq}}" class="bl_type_a" title="msg_new_window">Request a quote</a>
                                                <a href="http://org-www.kia.com/gt/service/book-a-service.html" class="bl_type_a" title="msg_new_window">Book a Service</a>
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
                            var objPoint = {};
                            kwcmsApp.controller("findadealer.map", function($scope, $timeout, pagination) {
                            //reference_controller_scope
                            _find_dealer_map_view_ = $scope;
                            //map area id
                            $scope.mapWrap = "mapArea";
                            //current view selector
                            $scope.searchTab = _find_dealer_search_.searchTab;
                            $scope.currentTab = _find_dealer_search_.currentTab;
                            //exist all list?
                            $scope.isCallAllList = false;
                            //initailize list view
                            $scope.init = function (data, params) {
                            if (angular.equals(data.result, "Success")) {
                            //get all list without search conditions
                            if ($scope.isCallAllList == false) {
                            _find_dealer_search_.search(1, true);
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
                            objPoint.pointAll = [];
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
                            layerDOM += '			<a href="http://org-www.kia.com/content/kwcms/gt/en/shopping-tools/request-a-test-drive.html" class="bl_type_a">Request a Test Drive</a>';
                            layerDOM += '			<a href="http://org-www.kia.com/content/kwcms/gt/en/shopping-tools/request-a-quote.html" class="bl_type_a">Request a Quote</a>';
                            layerDOM += '		</div>';
                            layerDOM += '	</div>';
                            layerDOM += '</div>';
                            objPoint.pointAll[idx] = ({
                            "lat" : this.lat
                                    , "lng" : this.lng
                                    , "info": layerDOM
                            });
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
                            layerDOM += '			<a href="http://org-www.kia.com/content/kwcms/gt/en/shopping-tools/request-a-test-drive.html" class="bl_type_a">Request a Test Drive</a>';
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
                            _find_dealer_search_.search(pageNum);
                            };
                            //change tab
                            $scope.viewTab = function (tab) {
                            _find_dealer_search_.viewTab(tab);
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

                        <div class="con_box location_result" ng-controller="findadealer.map" ng-show="currentTab == 'map'">

                            <div class="location_text">
                                <h5 class="result_txt"><span class="m_none">SEARCH RESULT : </span><strong>{{total}}</strong> Dealers Found</h5>
                                <div class="tab_type1">
                                    <a href="#list" class="tab_link" ng-click="viewTab('list')">LIST VIEW</a>
                                    <a href="#map" class="tab_link  tt1_on" ng-click="viewTab('map')">MAP VIEW</a>	
                                </div>
                            </div>

                            <div class="location_mapview" ng-show="total > 0">
                                <h6 class="hidden">MAP VIEW</h6>
                                <div class="mapInner">							
                                    <div class="mapArea" id="mapArea">
                                        <div class="parsys mapParsys"><div class="parbase google-map-list section">

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
                                </div>

                                <div class="center_list">
                                    <div class="listInner">
                                        <ul>
                                            <li ng-repeat="item in list">
                                                <a href="javascript:;" class="dealer_a" ng-class="{center_on:currBranch == $index}" ng-click="initMap(list, mapWrap, $index);">
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
                                    <div class="pg_num_area">


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
                </div></div>

        </div>

    </div>
</div>