<footer>
    <div class="kleanity-footer-wrapper">
        <div class="kleanity-footer-container kleanity-container clearfix">
            <div class="kleanity-footer-column kleanity-item-pdlr kleanity-column-15">
                <div id="text-7" class="widget widget_text kleanity-widget">
                    <h3 class="kleanity-widget-title"><span class="kleanity-widget-head-text">Contact Info</span><span class="kleanity-widget-head-divider"></span></h3><span class="clear"></span>
                    <div class="textwidget">
                        <p>Address : Jember,Jawa Timur
                            <br /> <span class="gdlr-core-space-shortcode" style="margin-top: -9px;"></span>
                            <br /> Phone : (0334)-7875577139
                            <br /> <span class="gdlr-core-space-shortcode" style="margin-top: -9px;"></span>
                            <br /> contact@coconut.com
                        </p>
                        <p><span class="gdlr-core-space-shortcode" style="margin-top: 30px;"></span>
                            <br /> <a href="#" target="_blank"><i class="fa fa-facebook" style="font-size: 16px;color: #ffffff;margin-right: 20px;"></i></a> <a href="#" target="_blank"><i class="fa fa-twitter" style="font-size: 16px;color: #ffffff;margin-right: 20px;"></i></a> <a href="#" target="_blank"><i class="fa fa-linkedin" style="font-size: 16px;color: #ffffff;margin-right: 20px;"></i></a> <a href="#" target="_blank"><i class="fa fa-pinterest-p" style="font-size: 16px;color: #ffffff;margin-right: 20px;"></i></a> <a href="#" target="_blank"><i class="fa fa-vimeo" style="font-size: 16px;color: #ffffff;margin-right: 20px;"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kleanity-copyright-wrapper">
        <div class="kleanity-copyright-container kleanity-container">
            <div class="kleanity-copyright-text kleanity-item-pdlr">Copyright 2020 , All Right Reserved</div>
        </div>
    </div>
</footer>
</div>
</div>


<script type='text/javascript' src="<?= base_url("/asset/js/jquery/jquery.js"); ?>"></script>
<script type='text/javascript' src="<?= base_url("/asset/js/jquery/jquery-migrate.min.js"); ?>"></script>
<script type='text/javascript' src="<?= base_url("/asset/js/jquery.themepunch.tools.min.js"); ?>"></script>
<script type='text/javascript' src="<?= base_url("/asset/js/jquery.themepunch.revolution.min.js"); ?>"></script>
<script type='text/javascript' src="<?= base_url("/asset/js/snazzymaps.js"); ?>"></script>
<script type='text/javascript' src="<?= base_url("/asset/js/isotopefilter.js"); ?>"></script>

<script type='text/javascript' src="<?= base_url("/asset/js/jquery/ui/effect.min.js"); ?>"></script>


<script type='text/javascript' src="<?= base_url("/asset/js/script.js"); ?>"></script>
<script type='text/javascript' src="<?= base_url("/asset/js/combine.js"); ?>"></script>

<script type='text/javascript' src="<?= base_url("/asset/js/page-builder.js"); ?>"></script>
<script type="text/javascript" src="<?= base_url("/asset/quform/js/plugins.js"); ?>"></script>
<script type="text/javascript" src="<?= base_url("/asset/quform/js/scripts.js"); ?>"></script>

<script type="text/javascript" src="<?= base_url("/asset/js/extensions/revolution.extension.slideanims.min.js"); ?>"></script>
<script type="text/javascript" src="<?= base_url("/asset/js/extensions/revolution.extension.layeranimation.min.js"); ?>"></script>
<script type="text/javascript" src="<?= base_url("/asset/js/extensions/revolution.extension.kenburn.min.js"); ?>"></script>
<script type="text/javascript" src="<?= base_url("/asset/js/extensions/revolution.extension.navigation.min.js"); ?>"></script>
<script type="text/javascript" src="<?= base_url("/asset/js/extensions/revolution.extension.parallax.min.js"); ?>"></script>
<script type="text/javascript" src="<?= base_url("/asset/js/extensions/revolution.extension.actions.min.js"); ?>"></script>

<script type="text/javascript">
    /*<![CDATA[*/
    function setREVStartSize(e) {
        try {
            var i = jQuery(window).width(),
                t = 9999,
                r = 0,
                n = 0,
                l = 0,
                f = 0,
                s = 0,
                h = 0;
            if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                    f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                var u = (e.c.width(), jQuery(window).height());
                if (void 0 != e.fullScreenOffsetContainer) {
                    var c = e.fullScreenOffsetContainer.split(",");
                    if (c) jQuery.each(c, function(e, i) {
                        u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                    }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                }
                f = u
            } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
            e.c.closest(".rev_slider_wrapper").css({
                height: f
            })
        } catch (d) {
            console.log("Failure at Presize of Slider:" + d)
        }
    }; /*]]>*/
</script>
<script type="text/javascript">
    /*<![CDATA[*/
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    } /*]]>*/
</script>
<script>
    /*<![CDATA[*/
    var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
    var htmlDivCss = "";
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement("div");
        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
    } /*]]>*/
</script>

<script>
    /*<![CDATA[*/
    var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
    var htmlDivCss = "";
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement("div");
        htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
        document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
    } /*]]>*/
</script>
<script type="text/javascript">
    /*<![CDATA[*/
    setREVStartSize({
        c: jQuery('#rev_slider_3_1'),
        gridwidth: [1280],
        gridheight: [810],
        sliderLayout: 'auto'
    });
    var revapi3, tpj = jQuery;
    tpj(document).ready(function() {
        if (tpj("#rev_slider_3_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_3_1");
        } else {
            revapi3 = tpj("#rev_slider_3_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "https://cdn.goodlayers.com/kleanity/wp-content/plugins/revslider/public/assets/js/",
                sliderLayout: "auto",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    bullets: {
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 490,
                        style: "uranus",
                        hide_onleave: false,
                        direction: "horizontal",
                        h_align: "center",
                        v_align: "bottom",
                        h_offset: 0,
                        v_offset: 30,
                        space: 10,
                        tmp: '<span class="tp-bullet-inner"></span>'
                    }
                },
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: 1280,
                gridheight: 810,
                lazyType: "none",
                parallax: {
                    type: "scroll",
                    origo: "enterpoint",
                    speed: 400,
                    speedbg: 0,
                    speedls: 0,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
                    disable_onmobile: "on"
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
    }); /*]]>*/
</script>
<script>
    /*<![CDATA[*/
    var htmlDivCss = unescape("body%20%23rev_slider_3_1%20.uranus%20.tp-bullet-inner%20%7B%0A%20%20%20%20background-color%3A%20rgb%280%2C%200%2C%200%29%3B%0A%20%20%20%20background-color%3A%20rgba%280%2C%200%2C%200%2C%200.3%29%3B%0A%7D%0Abody%20%23rev_slider_3_1%20.uranus%20.tp-bullet.selected%2C%20%23rev_slider_3_1%20.uranus%20.tp-bullet%3Ahover%20%7B%0A%20%20%20%20box-shadow%3A%200%200%200%202px%20rgb%2896%2C%2096%2C%2096%29%3B%0A%7D%0Abody%20%23rev_slider_3_1%20.uranus%20.tp-bullet.selected%20.tp-bullet-inner%2C%20%23rev_slider_3_1%20.uranus%20.tp-bullet%3Ahover%20.tp-bullet-inner%20%7B%0A%20%20%20%20background-color%3A%20rgb%2896%2C%2096%2C%2096%29%3B%0A%7D");
    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement('div');
        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
    } /*]]>*/
</script>
<script>
    /*<![CDATA[*/
    var htmlDivCss = unescape("%23rev_slider_3_1%20.uranus%20.tp-bullet%7B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C%20255%2C%20255%2C%200%29%3B%0A%20%20-webkit-transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20transition%3A%20box-shadow%200.3s%20ease%3B%0A%20%20background%3Atransparent%3B%0A%20%20width%3A15px%3B%0A%20%20height%3A15px%3B%0A%7D%0A%23rev_slider_3_1%20.uranus%20.tp-bullet.selected%2C%0A%23rev_slider_3_1%20.uranus%20.tp-bullet%3Ahover%20%7B%0A%20%20box-shadow%3A%200%200%200%202px%20rgba%28255%2C%20255%2C%20255%2C1%29%3B%0A%20%20border%3Anone%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background%3Atransparent%3B%0A%7D%0A%0A%23rev_slider_3_1%20.uranus%20.tp-bullet-inner%20%7B%0A%20%20-webkit-transition%3A%20background-color%200.3s%20ease%2C%20-webkit-transform%200.3s%20ease%3B%0A%20%20transition%3A%20background-color%200.3s%20ease%2C%20transform%200.3s%20ease%3B%0A%20%20top%3A%200%3B%0A%20%20left%3A%200%3B%0A%20%20width%3A%20100%25%3B%0A%20%20height%3A%20100%25%3B%0A%20%20outline%3A%20none%3B%0A%20%20border-radius%3A%2050%25%3B%0A%20%20background-color%3A%20rgb%28255%2C%20255%2C%20255%29%3B%0A%20%20background-color%3A%20rgba%28255%2C%20255%2C%20255%2C%200.3%29%3B%0A%20%20text-indent%3A%20-999em%3B%0A%20%20cursor%3A%20pointer%3B%0A%20%20position%3A%20absolute%3B%0A%7D%0A%0A%23rev_slider_3_1%20.uranus%20.tp-bullet.selected%20.tp-bullet-inner%2C%0A%23rev_slider_3_1%20.uranus%20.tp-bullet%3Ahover%20.tp-bullet-inner%7B%0A%20transform%3A%20scale%280.4%29%3B%0A%20-webkit-transform%3A%20scale%280.4%29%3B%0A%20background-color%3Argb%28255%2C%20255%2C%20255%29%3B%0A%7D%0A");
    var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
    if (htmlDiv) {
        htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
    } else {
        var htmlDiv = document.createElement('div');
        htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
        document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
    } /*]]>*/
</script>
</body>

</html>