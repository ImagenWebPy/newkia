<?php
$detalle = $this->detalle;
?>
<div id="container" ng-app="kwcmsAppModuleApp" ng-cloak>    
    <div id="content" class="subContents">
        <div class="par parsys">
            <div class="parbase global-title section">
                <div class="content_title">
                    <!-- 20150827 GT SEO h3 > h1 -->
                    <h1 class="con_tit"><p><?= utf8_encode($detalle['titulo']); ?></p>
                    </h1>
                    <div class="con_navi">
                        <ol vocab="http://schema.org/" typeof="BreadcrumbList">
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="<?= URL; ?>" property="item" typeof="WebPage"><span class="cmm_spr spr_home" property="name">Inicio</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=  1>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="<?= URL; ?>noticias/listado/" property="name" typeof="WebPage"><span class="depth" property="name">Noticias</span><span class="gt">&gt;</span></a>
                                <meta property="position" content="2">
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <strong class="depth current"property="name"><?= utf8_encode($detalle['titulo']); ?></strong>
                                <meta property="position" content=  3>
                            </li>
                    </div>
                </div>
            </div>
            <div class="news section">
                <div class="content_detail" ng-controller="news.detail" data-ng-init="init()">
                    <!-- news -->
                    <div class="inner bbs_news">
                        <!-- bbs view -->
                        <div class="bbs_view">
                            <div class="bbs_img">
                                <img ng-src="<?= URL; ?>public/img/noticias/<?= $detalle['img']; ?>" alt="{{file.extra1}}" src="<?= URL; ?>public/img/noticias/<?= $detalle['img']; ?>" alt="<?= utf8_encode($detalle['titulo']); ?>" title="<?= utf8_encode($detalle['titulo']); ?>">
                            </div>
                            <div class="bbs_info">
                                <?= utf8_encode($detalle['contenido']); ?>
                            </div>
                        </div>
                        <div class="btn_area">
                            <a href="<?= URL; ?>noticias/listado/" class="btnLarge btnType1" ng-click="list()"><span class="btnIcon arrow_r">VER TODO</span></a>
                        </div>
                        <!-- //bbs view -->

                    </div>
                    <!-- //news -->

                </div></div>

        </div>

    </div> 
</div>
