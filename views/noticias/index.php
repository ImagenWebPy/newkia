<?php
$helper = new Helper();
$listado = $this->listado;
?>
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
                                <a href="<?= URL; ?>" property="item" typeof="WebPage"><span class="cmm_spr spr_home" property="name">Inicio</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=  1>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <strong class="depth current"property="name">Noticias</strong>
                                <meta property="position" content=  3>
                            </li>
                        </ol>
                    </div>
                </div></div>
            <div class="news section">
                <div class="content_detail" ng-controller="news.list" data-ng-init="init()">
                    <!-- news -->
                    <div class="inner bbs_news">
                        <div class="bbs_edit">
                            <div class="acc_filter">

                                <div class="search_area">
                                    <div class="sch_box sch_round">
                                        <input type="text" placeholder="Buscar" class="sch_inp" title="Please input a keyword." maxlength = 60 ng-model="searchKey">
                                        <button type="submit" class="sch_btn" title="Search"><span class="cmm_spr spr_search2">Buscar</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="bbs_type2">
                            <?php foreach ($listado['listado'] as $item): ?>
                                <li class="bbs_li ng-scope">
                                    <div class="bbs_wrp">
                                        <a href="<?= URL; ?>noticias/detalle/<?= $item['id']; ?>/<?= $helper->cleanUrl($item['titulo']); ?>">
                                            <div class="bbs_img">
                                                <img ng-src="<?= URL; ?>public/img/noticias/thumb/<?= $item['img_thumb']; ?>" alt="<?= utf8_encode($item['titulo']); ?>" title="<?= utf8_encode($item['titulo']); ?>" class="ng-scope" src="<?= URL; ?>public/img/noticias/thumb/<?= $item['img_thumb']; ?>">
                                            </div>
                                            <div class="bbs_info">
                                                <strong class="bbs_tit ng-binding" style="word-wrap: break-word;"><?= utf8_encode($item['titulo']); ?></strong>
                                                <span class="bbs_date ng-binding"><?= $helper->shortMonthDate(date('M', strtotime($item['fecha']))); ?>, <?= date('d, Y', strtotime($item['fecha'])); ?></span>
                                                <span class="moreBtn btnType1"><span class="cmm_spr spr_more">Leer</span></span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="pg_num_area">
                            <?= $listado['paginador']; ?>
                        </div>
                    </div>
                    <!--//news -->
                </div>
            </div>
        </div>
    </div>
</div>                                       