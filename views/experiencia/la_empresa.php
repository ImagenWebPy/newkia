<div id="container" ng-app="kwcmsAppModuleApp" ng-cloak>    
    <div id="content" class="subContents">
        <div class="par parsys">
            <div class="parbase global-title section">
                <div class="content_title">
                    <!-- 20150827 GT SEO h3 > h1 -->
                    <h1 class="con_tit"><p>LA EMPRESA</p></h1>
                    <div class="con_navi">
                        <ol vocab="http://schema.org/" typeof="BreadcrumbList">
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="<?= URL; ?>" property="item" typeof="WebPage"><span class="cmm_spr spr_home" property="name">Inicio</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=  1>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <a href="#" property="item" typeof="WebPage"><span class="depth" property="name">Experiencia</span><span class="gt">&gt;</span></a>
                                <meta property="position" content=  2>
                            </li>
                            <li property="itemListElement" typeof="ListItem" style="display:inline">
                                <strong class="depth current"property="name">La Empresa</strong>
                                <meta property="position" content=  3>
                            </li>
                        </ol>
                    </div>
                </div></div>
            <div class="warranty section">


                <div class="content_detail">
                    <!-- warranty -->
                    <div class="inner service_warranty">		
                        <div class="con_box">

                            <div class="parbase semantic-markup txt_desc4">
                                <div class="titleArea">
                                    <div class="imgArea">
                                        <img src="<?= URL; ?>public/img/<?= $this->laEmpresa['img']; ?>" _rte_src="<?= URL; ?>public/img/<?= $this->laEmpresa['img']; ?>" alt="Imagen de la empresa">
                                    </div> 
                                </div> 
                                <div class="warranty_con">
                                    <?= utf8_encode($this->laEmpresa['contenido']); ?>
                                </div> 
                            </div>
                        </div>			
                    </div>
                    <!-- //warranty -->
                </div>
            </div>
        </div>
    </div>
</div>
