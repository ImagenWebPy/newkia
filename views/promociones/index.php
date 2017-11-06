<div id="container" ng-app="kwcmsAppModuleApp" ng-cloak>    
    <div id="content" class="subContents">
        <div class="par parsys">
            <div class="parbase global-title section">
                <div class="content_title">
                    <!-- 20150827 GT SEO h3 > h1 -->
                    <h1 class="con_tit"><p>PROMOCIONES&nbsp;</p>
                    </h1>
                    <div class="con_navi">
                        <ol vocab="http://schema.org/" typeof="BreadcrumbList">
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="<?= URL; ?>" property="item" typeof="WebPage"><span class="cmm_spr spr_home" property="name">Inicio</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=  1>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <strong class="depth current" property="name">Promociones</strong>
                                <meta property="position" content="3">
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="promotion1 section">
                <div class="content_detail">
                    <!-- Experience KIA -->
                    <div class="ex_kiaWrap">
                        <div class="exkia_inner">
                            <div class="promotion_view">
                                <ul>
                                    <?php foreach ($this->promociones as $item): ?>
                                        <li style="margin: 15px 0px">
                                            <div class="imgArea">
                                                <img src="<?= URL; ?>public/img/promociones/<?= $item['img']; ?>" alt="<?= $item['img']; ?>">
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- //Experience KIA -->
                </div>
            </div>
        </div>
    </div> 
</div>
