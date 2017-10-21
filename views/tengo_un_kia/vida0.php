<div id="container" ng-app="kwcmsAppModuleApp" ng-cloak>    
    <div id="content" class="subContents">
        <div class="par parsys"><div class="parbase global-title section">
                <div class="content_title">
                    <!-- 20150827 GT SEO h3 > h1 -->
                    <h1 class="con_tit"><p>Bienvenido a tu vida 0</p>
                    </h1>
                    <div class="con_navi">
                        <ol vocab="http://schema.org/" typeof="BreadcrumbList">
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href='<?= URL; ?>' property="item" typeof="WebPage"><span class="cmm_spr spr_home" property="name">Inicio</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=1>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="http://org-www.kia.com/gt/service.html" property="name" typeof="WebPage"><span class="depth" property="name">Tengo un Kia</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=2>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <strong class="depth current"property="name">Bienvenido a tu vida 0</strong>
                                <meta property="position" content=3>
                            </li>
                        </ol>
                    </div>
                </div></div>
            <div class="recall section">
                <div class="content_detail" ng-controller="recall.list" ng-init="init()" >
                    <!-- Recall -->
                    <div class="inner recall" ng-show="pageType == 'recallSearch'" >
                        <div class="con_box">
                            <!-- GT SEO 20150828 h4 > h3-->
                            <h3 class="bl_type1">Recall Services</h3>
                            <p>To help keep your Kia operating at optimum performance levels, schedule a service appointment if your vehicle has one or more service campaigns or recalls outstanding as listed below. Your preferred Kia dealer will complete the repairs, free of charge. The time required to complete the work can vary depending on your dealer's work schedule, so scheduling a service appointment can help minimize any inconvenience.</p>
                            <p class="recall_box">If you have any questions about these recalls or service campaigns, please contact your preferred Kia dealer, the Owner’s Section of Kia.com web site, or contact Kia Consumer Assistance Center at ###-###-####(KIA), Monday through Friday, 5 AM to 6 PM PST.</p>
                        </div>
                        <div class="con_box">
                            <!-- GT SEO 20150828 h4 > h3-->
                            <h3 class="bl_type1">Recall Target Check</h3>
                            Please use the vin # search below to determine if there is any outstanding recalls on your vehicle.<br>
                            <div class="btn_areaL">
                                <a href="#" class="bl_type_a">Where can I find my VIN?</a>
                            </div>
                            <div class="form_wrp searchForm">
                                <input type="text" title="search" value="Enter your VIN Number" id="vinNumber" ng-model="searchParam['sc.vinNumber']" class="input_box">
                                <div class="btn_area"><button type="button" class="btnMedium btnType1" ng-click="fnSearchList()" ><span class="btnIcon arrow_r">SEARCH</span></button></div>
                            </div>
                        </div>
                        <div class="btn_area">
                            <a href="http://org-www.kia.com/gt/util/customer-center/contact-us.html" class="btnSmall btnType3"><span class="btnIcon arrow_r">Contact Us</span></a>
                        </div>
                    </div>
                    
                    <!-- //Recall -->
                </div>
            </div>
        </div>
    </div>
</div>