<?php
$helper = new Helper();
$paginaFooter = $helper->getPage();
$listElement1 = "";
$listElement2 = "";
$listElement3 = "";
$seccionFooter = FALSE;
if (!empty($paginaFooter[0])) {
    switch ($paginaFooter[0]) {
        case 'showroom':
            $listElement1 = "showroom";
            if ($paginaFooter[1] == 'caracteristica')
                $listElement2 = 'caracteristica';
            if (!empty($paginaFooter[3]))
                $listElement3 = $paginaFooter[3];
            $seccionFooter = TRUE;
            break;
    }
}
?>
<div id="footer" >
    <?php if ($seccionFooter == TRUE): ?>
        <div class="site_info">
            <!-- showroom Navigation Start 20151022 -->
            <div class="content_title">

                <div class="con_navi" style="float:left;">
                    <ol vocab="http://schema.org/" typeof="BreadcrumbList">
                        <li property="itemListElement" typeof="ListItem" style="display:inline">
                            <a href="http://org-www.kia.com/content/kwcms/gt/en.html" property="item" typeof="WebPage"> <span class="cmm_home spr_home2" property="name"></span><span class="gt">&gt;</span></a>
                            <meta property="position" content= 1>
                        </li>
                        <li property="itemListElement" typeof="ListItem" style="display:inline">
                            <span class="depth" property="name"><?= $listElement1; ?></span><span class="gt">&gt;</span>
                            <meta property="position" content=  2>
                        </li>
                        <li property="itemListElement" typeof="ListItem" style="display:inline">
                            <a href="#" property="item" typeof="WebPage"> <span class="depth" property="name"><?= $listElement3; ?></span><span class="gt">&gt;</span></a>
                            <meta property="position" content=  3>
                        </li>
                        <li property="itemListElement" typeof="ListItem" style="display:inline">
                            <strong class="depth current" property="name"><?= $listElement2; ?></strong>
                            <meta property="position" content=  4>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- showroom Navigation End 20151022 -->    
        </div>
    <?php endif; ?>
    <div class="site_info">
        <div class="inner">
            <span class="f_logo">
                <img src="<?= URL; ?>public/img/lg_footer_kia.png" class="lg_img" alt="Kia - The Power to Surprise">
            </span>
            <div class="info_policy">
                <div class="parbase link-f-7-1 link">
                    <a href="http://org-www.kia.com/gt/util/sitemap.html" class="depth_a" onclick="">Mapa del Sitio</a>
                </div>
                <span class="bar">|</span>
                <div class="parbase link-f-7-13 link">
                    <a href="http://org-www.kia.com/gt/util/customer-center/contact-us.html" class="dth2_a" onclick="">Contáctanos</a>
                </div>
                <span class="bar">|</span>
                <div class="parbase link-f-7-14 link">
                    <a href="http://org-www.kia.com/gt/experience.html" class="fms_a" onclick="">Privacidad</a>
                </div>
                <span class="bar">|</span>
                <div class="link-f-7-15 parbase link">
                    <a href="http://www.kia.com/ww" class="dth2_a" onclick="" title="Country Selector Link">Terminos y Condiciones</a>
                </div>
            </div>
            <div class="info_sns">
                <div class="link-f-8-0 parbase link">
                    <a href="https://www.facebook.com/kia" class="sns_spr spr_facebook" onclick="dtmDataLayer.external_link = 'sns|facebook'; _satellite.track('external_link');" target="_blank" title="Facebook">Facebook</a>
                </div>
                <div class="link-f-8-1 parbase link">
                    <a href="https://twitter.com/Kia_Motors" class="sns_spr spr_twitter" onclick="dtmDataLayer.external_link = 'sns|twitter'; _satellite.track('external_link');" target="_blank" title="Twitter">Twitter</a>
                </div>
                <div class="link-f-8-2 parbase link">
                    <a href="https://www.youtube.com/user/KiaBUZZ" class="sns_spr spr_youtube" onclick="dtmDataLayer.external_link = 'sns|youtube'; _satellite.track('external_link');" target="_blank" title="Youtube">Youtube</a>
                </div>
                <div class="parbase link link-f-8-4">
                    <a href="https://www.instagram.com/kiamotorsworldwide" class="sns_spr spr_instagram" onclick="dtmDataLayer.external_link = 'sns|instagram'; _satellite.track('external_link');" target="_blank" title="Instagram">Instagram</a>
                </div>
                <div class="parbase link-f-8-3 link">
                </div>
                <div class="parbase link-f-8-5 link">
                </div>
                <div class="parbase link-f-8-6 link">
                </div>
                <div class="parbase link link-f-8-7">
                </div>
            </div>
            <address class="cpr"><span class="br">Copyright(c) 2017 Kia Motors Corp. All Rights Reserved.</span></address>
        </div>
    </div>
    <script type="text/javascript" src="<?= URL; ?>public/js/jquery.form.stylishSelect.js"></script>
    <script type="text/javascript" src="<?= URL; ?>public/js/picturefill.js"></script>
    <!-- GA code add. 2015.02.25 mf-->
    <script type="text/javascript">
                        (function (i, s, o, g, r, a, m) {
                            i['GoogleAnalyticsObject'] = r;
                            i[r] = i[r] || function () {
                                (i[r].q = i[r].q || []).push(arguments)
                            }, i[r].l = 1 * new Date();
                            a = s.createElement(o),
                                    m = s.getElementsByTagName(o)[0];
                            a.async = 1;
                            a.src = g;
                            m.parentNode.insertBefore(a, m)
                        })(window, document, 'script', 'http://www.google-analytics.com/analytics.js', 'ga');

                        // 사용시 주석 제거 후 코드변경 할것.
                        //ga('create', 'UA-37592437-25', 'auto');
                        //ga('send', 'pageview');

    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            //stylish selectbox init
            if ($(".form_select").length > 0) {
                $(".form_select").sSelect();
            }

        });
    </script>
</div>
<div class="gnb_dimmed" style="position: absolute;"></div>
<!--
More detailed timing info is available by uncommenting some code in the timing.jsp component
Timing chart URL:
http://chart.apis.google.com/chart?chtt=main.html+%28364ms%29&cht=bhs&chxt=x&chco=c6d9fd,4d89f9&chbh=a&chds=0,364,0,364&chxr=0,0,364&chd=t:8,11,14,15,15,18,20,25,41,44,179,179,181,181,183,184,185,186,187,188,189,200,201,211,212,226,227,229,230,231,232,233,234,235,246,247,261,262,263,274,276,276,277,278,279,290,291,292,302,304,315,317,318,319,320,321,325,327,329,330,332,333,335,336,338,344,348,356,359|1,9,0,0,1,1,0,13,135,124,145,145,2,44,0,1,0,1,0,11,10,10,9,14,10,34,2,0,1,0,2,1,11,10,14,10,28,11,10,2,0,2,1,11,10,34,11,10,12,10,2,0,2,1,2,1,39,0,0,1,0,1,0,1,0,1,0,0,1&chly=context.jsp|head.jsp|title.jsp|init.jsp|servicelibs.jsp|meta.jsp|ssl.jsp|redirect.jsp|header.jsp|select-car-header.jsp|parsys.jsp|main-cpnt.jsp|parsys.jsp|main-type-cpnt.jsp|contbox-cpnt.jsp|parsys.jsp|contbox-cpnt.jsp|parsys.jsp|contbox-cpnt.jsp|parsys.jsp|gallery-wrap-cpnt.jsp|parsys.jsp|list-wrap-cpnt.jsp|parsys.jsp|list-wrap-cpnt.jsp|main-type-cpnt.jsp|parsys.jsp|contbox-cpnt.jsp|parsys.jsp|contbox-cpnt.jsp|parsys.jsp|contbox-cpnt.jsp|parsys.jsp|gallery-wrap-cpnt.jsp|parsys.jsp|list-wrap-cpnt.jsp|main-type-cpnt.jsp|parsys.jsp|gallery-wrap-cpnt.jsp|parsys.jsp|contbox-cpnt.jsp|parsys.jsp|contbox-cpnt.jsp|parsys.jsp|list-wrap-cpnt.jsp|main-type-cpnt.jsp|parsys.jsp|gallery-wrap-cpnt.jsp|parsys.jsp|list-wrap-cpnt.jsp|parsys.jsp|contbox-cpnt.jsp|parsys.jsp|contbox-cpnt.jsp|parsys.jsp|contbox-cpnt.jsp|footer.jsp|link.jsp|link.jsp|link.jsp|link.jsp|link.jsp|link.jsp|link.jsp|link.jsp|link.jsp|link.jsp|link.jsp|link.jsp&chs=600x500
-->
<div class="servicecomponents cloudservices">
</div>
</div>
<?php
#cargamos los js de las vistas
if (isset($this->external_js)) {
    foreach ($this->external_js as $external) {
        echo '<script async defer src="' . $external . '"></script>';
    }
}
if (isset($this->public_js)) {
    foreach ($this->public_js as $public_js) {
        echo '<script type="text/javascript" src="' . URL . 'public/' . $public_js . '"></script>';
    }
}
if (isset($this->js)) {
    foreach ($this->js as $js) {
        echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
    }
}
?>
<script type="text/javascript">
    dtmDataLayer = {
        'vehicle_name': 'cerato/forte',
        'vehicle_type': 'car'
    };
</script>
<script type="text/javascript">_satellite.pageBottom();</script>
</body>
<!-- end, after body tag -->
</html>
