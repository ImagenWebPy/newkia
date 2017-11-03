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
                                <a href="#" property="name" typeof="WebPage"><span class="depth" property="name">Tengo un Kia</span><span class="gt">&gt;</span></a>
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
                            <img src="<?= URL; ?>public/img/<?= $this->vida0['img']; ?>" alt="<?= $this->vida0['img']; ?>" class="img-responsive" style="width: 100%;">
                        </div>
                        <?php if (!empty($this->vida0['contenido'])): ?>
                            <div class="con_box">
                                <?= utf8_encode($this->vida0['contenido']); ?>
                            </div>
                        <?php endif; ?>
                        <div class="btn_area">
                            <a href="<?= URL; ?>contacto" class="btnSmall btnType3"><span class="btnIcon arrow_r">Contáctanos</span></a>
                        </div>
                    </div>

                    <!-- //Recall -->
                </div>
            </div>
        </div>
    </div>
</div>