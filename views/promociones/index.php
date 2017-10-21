<div id="container" ng-app="kwcmsAppModuleApp" ng-cloak>    
    <div id="content" class="subContents">
        <div class="par parsys"><div class="parbase global-title section">
                <div class="content_title">
                    <!-- 20150827 GT SEO h3 > h1 -->
                    <h1 class="con_tit"><p>PROMOCIONES</p>
                    </h1>
                    <div class="con_navi">
                        <ol vocab="http://schema.org/" typeof="BreadcrumbList">
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="http://org-www.kia.com/gt/main.html" property="item" typeof="WebPage"><span class="cmm_spr spr_home" property="name">Home</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=  1>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <strong class="depth current"property="name">Promotion</strong>
                                <meta property="position" content=  3>
                            </li>
                        </ol>
                    </div>
                </div></div>
            <div class="promotion section">
                <script type="text/javascript">
                    kwcmsApp.controller("promotion.list", ["$scope", "pagination", "$timeout", function ($scope, pagination, $timeout) {

                    var _params = {};
                    //set parameter for search
                    $scope.searchParam = {
                    "pageNum": 1
                            , "sc.promotionType": "inProgress"
                            , "sc.searchKey": ""
                    };
                    $scope.paramTO = angular.copy($scope.searchParam);
                    //init controller
                    $scope.init = function () {
                    $scope.fnSelectList($scope.searchParam["pageNum"]);
                    };
                    //load promotion list
                    $scope.fnSelectList = function (pageNum) {
                    //[Step-1] : Set pagination variables
                    if (!pageNum)
                            pageNum = 1;
                    var url = "/api/kia_global/base/ev01/eventInfo.selectEventInfoList";
                    var methodType = "GET";
                    _params["pageNum"] = pageNum;
                    _params["pageSize"] = 9;
                    _params["sc.promotionType"] = $scope.paramTO["sc.promotionType"];
                    _params["sc.searchKey"] = $scope.paramTO["sc.searchKey"];
                    _params["sc.searchType"] = "title";
                    _params["sc.displayYn"] = "Y";
                    var callback_success = function (data) {

                    //조회 결과를 angular 변수에 저장
                    $scope.resultList = data.dataInfo;
                    $scope.totalCnt = parseInt(data.totalCount);
                    // pagination
                    pagination.paginationCreate($scope.totalCnt, pageNum, /*pageSize*/9, /*pagination length*/5, $scope.fnSelectList);
                    $scope.firstNum = $scope.totalCnt - ((pageNum - 1) * 9);
                    //Search 를 클릭하지 않고 화면에서 변경한 값을 paramTO로 복원.
                    //Reset 클릭하여 TO에 초기화한 값을 searchParam 에 적용
                    $scope.searchParam = angular.copy($scope.paramTO);
                    $timeout(function () {
                    $(window).resize();
                    }, 10);
                    };
                    var isAsync = false;
                    execJAjax(url, methodType, _params, callback_success, isAsync);
                    };
                    //method for category search
                    $scope.fnCategory = function (cate) {
                    $scope.paramTO["sc.promotionType"] = cate;
                    $scope.fnSelectList();
                    $timeout(function () {
                    $(window).resize();
                    }, 10);
                    };
                    //[Retrieve list data with searching param]
                    $scope.fnSearchList = function () {
                    $scope.paramTO = angular.copy($scope.searchParam);
                    $scope.fnSelectList();
                    };
                    //[Reset a param and ]
                    $scope.fnReset = function () {
                    $scope.paramTO["sc.searchKey"] = "";
                    $scope.fnSelectList(1);
                    };
                    //first. check input a keyword, two. search
                    $scope.fnCheckKeyword = function () {
                    var searchKey = $scope.searchParam["sc.searchKey"];
                    if (!searchKey) {
                    alert("Please enter a keyword.");
                    } else {
                    $scope.fnSearchList();
                    }
                    };
                    //[Go to detail page]
                    $scope.fnGoDetail = function (eventSeq, sortNo, no) {
                    _params["_charset_"] = "UTF-8";
                    _params["sc.eventSeq"] = eventSeq;
                    _params["articleNo"] = no;
                    //_params["sc.sortNo"] = sortNo ;
                    location.href = "promotion.detail.html?" + $.param(_params);
                    };
                    }]);
                </script>

                <div class="content_detail" ng-controller="promotion.list" data-ng-init="init()">


                    <div class="inner bbs_news">

                        <div class="bbs_edit">
                            <div class="acc_filter">

                                <div class="category_area">
                                    <div class="filter_wrap">
                                        <a href="#" class="input_box"><span>All</span></a>
                                        <ul>
                                            <li><a href="#inProgress" ng-click="fnCategory('inProgress')" ng-class="{on_r : searchParam['sc.promotionType'] == 'inProgress'}"><span>Ongoing</span></a></li>
                                            <li><a href="#finished" ng-click="fnCategory('finished')" ng-class="{on_r : searchParam['sc.promotionType'] == 'finished'}"><span>Ended</span></a></li>
                                            <li><a href="#winner" ng-click="fnCategory('winner')" ng-class="{on_r : searchParam['sc.promotionType'] == 'winner'}"><span>Winners</span></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="search_area">
                                    <div class="sch_box sch_round">
                                        <input type="text" placeholder="Search" class="sch_inp" title="Please input a keyword." ng-model="searchParam['sc.searchKey']">
                                        <button type="submit" class="sch_btn" title="Search" ng-click="fnCheckKeyword()"><span class="cmm_spr spr_search2">Search</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <ul class="bbs_type2" ng-show="totalCnt > 0">
                            <li class="bbs_li" ng-if="paramTO['sc.promotionType'] == 'inProgress'" ng-repeat="entity in resultList | orderBy:['sortNo', '-dpStartDate']">
                                <div class="bbs_wrp">
                                    <a href="#detail" ng-click="fnGoDetail(entity.eventSeq, entity.sortNo, (firstNum - $index)); dtmDataLayer.internal_link = 'util|news promotion|promotion|more'; _satellite.track('internal_link');">
                                        <div class="bbs_img">
                                            <img ng-attr-src="{{entity.commonAttach[0].savePath}}/{{entity.commonAttach[0].saveNm}}.{{entity.commonAttach[0].ext}}" alt="{{entity.commonAttach[0].extra1}}" title="{{entity.commonAttach[0].extra2}}" onerror="this.src='http://org-www.kia.com/content/dam/kwcms/gt/en/images/common/bg_no_image.png'">
                                            <span class="bbsPlay" ng-show="entity.commonAttach[0].useType == 'MV'">play</span>
                                        </div>
                                        <span class="endPromotion" ng-show="searchParam['sc.promotionType'] == 'finished'"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/util/end_promotion.png" alt="end"></span>
                                        <div class="bbs_info">
                                            <strong class="bbs_tit">{{entity.title}}</strong>
                                            <span class="bbs_date">NO.{{firstNum - $index}} / {{entity.dpStartDate| parseDate | date : 'MM-dd-yyyy'}}</span>
                                            <span class="moreBtn btnType1"><span class="cmm_spr spr_more">More</span></span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="bbs_li" ng-if="paramTO['sc.promotionType'] != 'inProgress'" ng-repeat="entity in resultList | orderBy:['-dpStartDate']">
                                <div class="bbs_wrp">
                                    <a href="#detail" ng-click="fnGoDetail(entity.eventSeq, entity.sortNo, (firstNum - $index)); dtmDataLayer.internal_link = 'util|news promotion|news|more'; _satellite.track('internal_link');">
                                        <div class="bbs_img">
                                            <img ng-attr-src="{{entity.commonAttach[0].savePath}}/{{entity.commonAttach[0].saveNm}}.{{entity.commonAttach[0].ext}}" alt="{{entity.commonAttach[0].extra1}}" title="{{entity.commonAttach[0].extra2}}" onerror="this.src='http://org-www.kia.com/content/dam/kwcms/gt/en/images/common/bg_no_image.png'">
                                            <span class="bbsPlay" ng-show="entity.commonAttach[0].useType == 'MV'">play</span>
                                        </div>
                                        <span class="endPromotion" ng-show="searchParam['sc.promotionType'] == 'finished'"><img src="http://org-www.kia.com/content/dam/kwcms/gt/en/images/util/end_promotion.png" alt="end"></span>
                                        <div class="bbs_info">
                                            <strong class="bbs_tit">{{entity.title}}</strong>
                                            <span class="bbs_date">NO.{{firstNum - $index}} / {{entity.dpStartDate| parseDate | date : 'MM-dd-yyyy'}}</span>
                                            <span class="moreBtn btnType1"><span class="cmm_spr spr_more">More</span></span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>


                        <div class="pg_num_area" ng-show="totalCnt > 0">


                            <script type="text/javascript">
                                kwcmsApp.factory('pagination', [function () {
                                var paginationObj = {
                                pageNum: "",
                                        prePageNum: "",
                                        nextPageNum: "",
                                        range: "",
                                        movePage: function () {}
                                };
                                return {
                                paginationCreate: function (tCnt, pNum, row, pager, fnc) {
                                var rowPerPage = row; /** 보여질 row 갯수	*/
                                var pagerSize = pager; /** 하단 pagerSize	*/
                                var totalPager = parseInt((tCnt - 1) / rowPerPage + 1);
                                paginationObj.movePage = fnc;
                                /*****************************
                                 * 현재 pageNum validate
                                 ******************************/
                                if (!pNum)
                                        pNum = 1;
                                if (pNum < 1)
                                        pNum = 1;
                                if (pNum > totalPager)
                                        pNum = totalPager;
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
                                if (pagerEndNum > totalPager)
                                        pagerEndNum = totalPager;
                                var range = [];
                                for (var i = pagerStartNum; i <= pagerEndNum; i++) {
                                range.push(i);
                                }

                                paginationObj.range = range;
                                },
                                        paginationData: function () {
                                        return paginationObj;
                                        }
                                };
                                }]);
                                kwcmsApp.controller('kwcmsPagingCtl', ['$scope', 'pagination', function ($scope, pagination) {
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
                        <div class="no_result_box" ng-show="totalCnt == 0">
                            <p class="no_txt"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>