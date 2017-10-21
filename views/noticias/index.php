<div id="container" ng-app="kwcmsAppModuleApp" ng-cloak>    
    <div id="content" class="subContents">
        <div class="par parsys"><div class="parbase global-title section">
                <div class="content_title">
                    <!-- 20150827 GT SEO h3 > h1 -->
                    <h1 class="con_tit"><p>Noticias</p>
                    </h1>
                    <div class="con_navi">
                        <ol vocab="http://schema.org/" typeof="BreadcrumbList">
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="http://org-www.kia.com/gt/main.html" property="item" typeof="WebPage"><span class="cmm_spr spr_home" property="name">Home</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=  1>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <strong class="depth current"property="name">News</strong>
                                <meta property="position" content=  3>
                            </li>
                        </ol>
                    </div>
                </div></div>
            <div class="news section">
                <script type="text/javascript">
                    var _news_list_ = null;
                    kwcmsApp.controller("news.list", function ($scope, HttpService, pagination) {
                    //reference_controller_scope
                    _news_list_ = $scope;
                    //set parameter for search
                    $scope.searchParam = {
                    "pageNum": "1"
                            , "sc.category": ""
                            , "sc.searchKey": ""
                    };
                    //init controller
                    $scope.init = function () {
                    $scope.search();
                    };
                    //load news list
                    $scope.category = $scope.searchParam["sc.category"];
                    $scope.searchKey = $scope.searchParam["sc.searchKey"];
                    var pageVars = {
                    page: 1
                            , pageSize: parseInt("9", 10)
                            , pageCnt: parseInt("5", 10)
                    };
                    $scope.search = function (pageNum) {
                    /*var pageVars = {
                     page : 1
                     , pageSize : parseInt("9", 10)
                     , pageCnt : parseInt("5", 10)
                     };*/

                    if (pageNum != undefined) {
                    pageVars.page = pageNum;
                    $scope.searchParam["pageNum"] = pageVars.page;
                    }

                    var searchKey = "";
                    if (!angular.equals($scope.searchKey, "")) {
                    searchKey = $scope.searchKey;
                    $scope.searchParam["sc.searchKey"] = $scope.searchKey;
                    $scope.searchResultKey = $scope.searchKey;
                    }

                    var searchCate = $scope.category;
                    $scope.searchParam["sc.category"] = $scope.category;
                    var url = "/api/kia_global/base/ns01/newsInfo.selectNewsInfoList";
                    var param = {
                    pageNum: pageVars.page
                            , pageSize: pageVars.pageSize
                            , "sc.category": searchCate
                            , "sc.displayYn": "Y"
                            , "sc.delYn": "N"
                            , "sc.searchType": "title"
                            , "sc.searchKey": searchKey
                    };
                    //HttpService.http(params, $scope.parseList, pageVars);
                    var isAsync = false;
                    //execJAjax(url, "GET", param, $scope.parseList, isAsync);

                    execJAjax(url, "GET", param, function (data) {
                    if (data && data.paramVO) {

                    $scope.list = data.dataInfo;
                    $scope.total = data.totalCount;
                    //eventsInit();
                    $scope.firstNum = $scope.total - ((pageVars.page - 1) * pageVars.pageSize);
                    pagination.paginationCreate($scope.total, pageVars.page, pageVars.pageSize, pageVars.pageCnt, $scope.search);
                    newsInit();
                    if (data.totalCount == 0)
                    {

                    dtmDataLayer = {'no_result_news': $scope.searchKey};
                    //_satellite.track('internal_search'); 
                    } else
                    {

                    dtmDataLayer = {'news_search_term': $scope.searchKey};
                    //_satellite.track('internal_search'); 
                    }
                    }
                    }, false);
                    };
                    //method for category search
                    $scope.searchCategory = function (cate) {
                    $scope.category = cate;
                    $scope.searchKey = $scope.searchResultKey;
                    $scope.search(1);
                    //eventsInit();
                    };
                    //first. check input a keyword, two. search
                    $scope.checkKeyword = function () {
                    if (angular.equals($scope.searchKey, "") || angular.equals($scope.searchKey, undefined)) {
                    alert("Please enter a keyword.");
                    } else {
                    $scope.search(1);
                    }
                    };
                    //reset search result
                    $scope.resetSearch = function () {
                    $scope.searchKey = "";
                    $scope.searchResultKey = "";
                    $scope.category = "";
                    $scope.searchParam["sc.searchKey"] = "";
                    $scope.search(1);
                    };
                    //go to the detail
                    $scope.detail = function (seq, no, title) {
                    var paramTO = angular.copy($scope.searchParam);
                    paramTO["_charset_"] = "UTF-8";
                    paramTO["sc.seq"] = seq;
                    paramTO["articleNo"] = no;
                    if (title != null && title != "") {
                    title = title.replace(/"/g, "&#34;").replace(/'/g, "&#39;").replace(/,/g, "&#44;");
                    dtmDataLayer.internal_link = 'conversion|news|' + title;
                    _satellite.track('internal_link');
                    }
                    document.location.href = "news.detail.html?" + fnMakeQueryParams(paramTO);
                    };
                    }).directive("newsInit", function ($timeout) {
                    return function (scope, element, attrs) {
                    if (scope.$last) {
                    $timeout(function () {
                    newsInit();
                    });
                    }
                    };
                    });
                </script>
                <div class="content_detail" ng-controller="news.list" data-ng-init="init()">
                    <!-- news -->
                    <div class="inner bbs_news">
                        <div class="bbs_edit">
                            <div class="acc_filter">
                                <div class="category_area">
                                    <div class="filter_wrap">
                                        <a href="#" class="input_box"><span>All</span></a>
                                        <ul>
                                            <li><a href="#all" ng-click="searchCategory('')" ng-class="{
                                                                on_r : category == ''
                                                            }"><span>All</span></a></li>
                                            <li><a href="#global" ng-click="searchCategory('G')" ng-class="{
                                                                on_r : category == 'G'
                                                            }"><span>Global</span></a></li>
                                            <li><a href="#local" ng-click="searchCategory('L')" ng-class="{
                                                                on_r : category == 'L'
                                                            }"><span>Local</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="search_area">
                                    <div class="sch_box sch_round">
                                        <input type="text" placeholder="Search" class="sch_inp" title="Please input a keyword." maxlength = 60 ng-model="searchKey">
                                        <button type="submit" class="sch_btn" title="Search" ng-click="checkKeyword()"><span class="cmm_spr spr_search2">Search</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="bbs_type2" ng-show="total > 0">
                            <li class="bbs_li" ng-repeat="entity in list| orderBy:'-regDate'" news-init>
                                <div class="bbs_wrp">
                                    <div id="tiImg" class="bbs_img" >
                                        <img ng-src="{{entity.commonAttach[0].savePath}}/{{entity.commonAttach[0].saveNm}}.{{entity.commonAttach[0].ext}}" alt="{{entity.commonAttach[0].extra1}}" title="{{entity.commonAttach[0].extra2}}" onerror="this.src='http://org-www.kia.com/content/dam/kwcms/gt/en/images/common/bg_no_image.png'">
                                        <span class="bbsPlay" ng-show="entity.commonAttach[0].useType == 'MV'"> play </span>
                                    </div>
                                    <div id="diImg"  style="display:none" class="bbs_img" ng-if="entity.commonAttachDI[0].ext != null">
                                        <img ng-src="{{entity.commonAttachDI[0].savePath}}/{{entity.commonAttachDI[0].saveNm}}.{{entity.commonAttachDI[0].ext}}" alt="{{entity.commonAttachDI[0].extra1}}">
                                        <span class="bbsPlay" ng-show="entity.commonAttachDI[0].useType == 'MV'"> play </span>
                                    </div>
                                    <div class="bbs_info">
                                        <strong class="bbs_tit">{{entity.title}}</strong>
                                        <span class="bbs_date">NO.{{firstNum - $index}} / {{entity.regDate| parseDate | date : 'MM-dd-yyyy'}}</span>
                                        <a href="#" class="moreBtn btnType1"><span class="cmm_spr spr_more">More</span></a>
                                    </div>
                                    <div class="bbs_body">
                                        <p ng-bind-html="entity.contents"></p>
                                        <a href="#" class="closeBtn btnType1"><span class="cmm_spr spr_close2">Close</span></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="pg_num_area" ng-show="total > 0">
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

                        <div class="no_result_box" ng-show="total == 0">
                            <p class="no_txt">No results for '<span class="pointcolor1">{{searchResultKey}}</span>'</p>
                            <a href="#reset" class="btnSmall btnType4" ng-click="resetSearch()"><span class="btnIcon arrow_r">View All Contents</span></a>
                        </div>

                    </div>
                    <!-- //news -->
                </div>
            </div>
        </div>
    </div>
</div>