<!DOCTYPE html>
<!--[if IE 9]>
<html class="no-js ie9" lang="en-US"><![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en-US"><!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Smart Soft Studios | Make Life Smarter</title>

<?php echo HTML::style("media/css/flick.css"); ?>
<?php echo HTML::style("media/css/soft.css"); ?>

<!--[if IE]>
<?php echo HTML::style("media/css/ie.css"); ?>

<![endif]-->
<?php echo HTML::style("media/css/settings.css"); ?>



<style type='text/css'>
    .tp-caption a {
        color: #ff7302;
        text-shadow: none;
        -webkit-transition: all 0.2s ease-out;
        -moz-transition: all 0.2s ease-out;
        -o-transition: all 0.2s ease-out;
        -ms-transition: all 0.2s ease-out;
    }

    .tp-caption a:hover {
        color: #ffa902;
    }
</style>
<?php echo HTML::style("media/css/captions.php.css"); ?>
<?php echo HTML::style("media/css/renew.css"); ?>
<?php echo HTML::style("media/css/integrity-light.css"); ?>
<link rel='stylesheet' id='x-font-custom-css'
      href='http://fonts.googleapis.com/css?family=Lato:300,300italic,700,700italic|Lato:400|Lato:900|Pacifico:400&#038;subset=latin,latin-ext'
      type='text/css' media='all'/>


<?php echo HTML::script("media/js/jquery.js"); ?>
<?php echo HTML::script("media/js/jquery-migrate-1.2.1.min"); ?>
<?php echo HTML::script("media/js/scrollTo.js"); ?>
<?php echo HTML::script("media/js/jquery.form.min.js"); ?>
<?php echo HTML::script("media/js/jquery.ui.core.min.js"); ?>
<?php echo HTML::script("media/js/datepicker.js"); ?>
<?php echo HTML::script("media/js/jquery.themepunch.plugins.min.js"); ?>
<?php echo HTML::script("media/js/jquery.themepunch.revolution.min.js"); ?>

<?php echo HTML::style("media/css/bootstrap.min.css"); ?>
<?php echo HTML::style("media/css/carousel.css"); ?>
<?php echo HTML::script("media/js/bootstrap.min.js"); ?>

<script type='text/javascript'>
    jQuery(document).ready(function (e) {
        e(".x-btn-navbar, .x-btn-widgetbar").click(function (e) {
            e.preventDefault()
        });
        e(".x-slider-revolution-container.above .x-slider-scroll-bottom").click(function (t) {
            t.preventDefault();
            e("html, body").animate({scrollTop: e(".x-slider-revolution-container.above").outerHeight()}, 850, "easeInOutExpo")
        });
        e(".x-slider-revolution-container.below .x-slider-scroll-bottom").click(function (t) {
            t.preventDefault();
            var n = e(".masthead").outerHeight(), r = e(".x-navbar-fixed-top-active .x-navbar").outerHeight(), i = e(".x-slider-revolution-container.above").outerHeight(), s = e(".x-slider-revolution-container.below").outerHeight(), o = n + i + s - r;
            e("html, body").animate({scrollTop: o}, 850, "easeInOutExpo")
        });
        var t = e(window), n = e(this), r = e("body"), i = e(".x-navbar"), s = e(".x-navbar-fixed-top-active .x-navbar-wrap");
        !r.hasClass("page-template-template-blank-3-php") && !r.hasClass("page-template-template-blank-6-php") && !r.hasClass("page-template-template-blank-7-php") && !r.hasClass("page-template-template-blank-8-php") && (r.hasClass("x-boxed-layout-active") && r.hasClass("x-navbar-fixed-top-active") && r.hasClass("admin-bar") ? t.scroll(function () {
            var t = e("#wpadminbar").outerHeight(), r = s.offset().top - t, o = n.scrollTop();
            o >= r ? i.addClass("x-navbar-fixed-top x-container-fluid max width") : i.removeClass("x-navbar-fixed-top x-container-fluid max width")
        }) : r.hasClass("x-navbar-fixed-top-active") && r.hasClass("admin-bar") ? t.scroll(function () {
            var t = e("#wpadminbar").outerHeight(), r = s.offset().top - t, o = n.scrollTop();
            o >= r ? i.addClass("x-navbar-fixed-top") : i.removeClass("x-navbar-fixed-top")
        }) : r.hasClass("x-boxed-layout-active") && r.hasClass("x-navbar-fixed-top-active") ? t.scroll(function () {
            var e = s.offset().top, t = n.scrollTop();
            t >= e ? i.addClass("x-navbar-fixed-top x-container-fluid max width") : i.removeClass("x-navbar-fixed-top x-container-fluid max width")
        }) : r.hasClass("x-navbar-fixed-top-active") && t.scroll(function () {
            var e = s.offset().top, t = n.scrollTop();
            t >= e ? i.addClass("x-navbar-fixed-top") : i.removeClass("x-navbar-fixed-top")
        }));
        e('iframe[src*="youtube.com"]').each(function () {
            var t = e(this).attr("src");
            e(this).attr("src").indexOf("?") > 0 ? e(this).attr({src: t + "&wmode=transparent", wmode: "Opaque"}) : e(this).attr({src: t + "?wmode=transparent", wmode: "Opaque"})
        })
    });
    /* <![CDATA[ */
    var mailchimpSF = {"ajax_url": "http:\/\/www.smartsoftstudios.com\/"};
    /* ]]> */
</script>

<?php echo HTML::script("media/js/mailchimp.js"); ?>

<?php echo HTML::script("media/js/mailchimp.js"); ?>
<?php echo HTML::script("media/js/vendor_jplayer_jplayer-2.3.0.min.js"); ?>
<?php echo HTML::script("media/js/ui_jquery.ui.core.min.js"); ?>
<?php echo HTML::script("media/js/imagesloaded-3.0.4.min.js"); ?>
<?php echo HTML::script("media/js/bigvideo_video-4.1.0.min.js"); ?>
<?php echo HTML::script("media/js/bigvideo_bigvideo-1.0.0.min.js"); ?>

<link rel='canonical' href='http://www.smartsoftstudios.com/'/>
<link rel='shortlink' href='http://www.smartsoftstudios.com/'/>
<script type="text/javascript">
    jQuery(function ($) {
        $('.date-pick').each(function () {
            var format = $(this).data('format') || 'mm/dd/yyyy';
            format = format.replace(/yyyy/i, 'yy');
            $(this).datepicker({
                autoFocusNextInput: true,
                constrainInput: false,
                changeMonth: true,
                changeYear: true,
                beforeShow: function (input, inst) {
                    $('#ui-datepicker-div').addClass('show');
                },
                dateFormat: format.toLowerCase(),
            });
        });
        d = new Date();
        $('.birthdate-pick').each(function () {
            var format = $(this).data('format') || 'mm/dd';
            format = format.replace(/yyyy/i, 'yy');
            $(this).datepicker({
                autoFocusNextInput: true,
                constrainInput: false,
                changeMonth: true,
                changeYear: false,
                minDate: new Date(d.getFullYear(), 1 - 1, 1),
                maxDate: new Date(d.getFullYear(), 12 - 1, 31),
                beforeShow: function (input, inst) {
                    $('#ui-datepicker-div').removeClass('show');
                },
                dateFormat: format.toLowerCase(),
            });

        });

    });
</script>

<!-- BEGIN GADWP v4.3.3 Universal Tracking - https://deconf.com/google-analytics-dashboard-wordpress/ -->
<script>
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
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-51598642-1', 'auto');
    ga('send', 'pageview');


</script>
<!-- END GADWP Universal Tracking -->

<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
<style id="x-customizer-css-output" type="text/css">body {
    background: #ffffff url() center top repeat;
}

a, h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, .x-comment-time:hover, #reply-title small a, .comment-reply-link:hover, .x-comment-author a:hover, .x-close-content-dock:hover i {
    color: #f1ba63;
}

a:hover, #reply-title small a:hover, .x-recent-posts a:hover .h-recent-posts {
    color: #ad8647;
}

a.x-img-thumbnail:hover, li.bypostauthor > article.comment {
    border-color: #f1ba63;
}

.flex-direction-nav a, .flex-control-nav a:hover, .flex-control-nav a.flex-active, .x-dropcap, .x-skill-bar .bar, .x-pricing-column.featured h2, .h-comments-title small, .pagination a:hover, .x-entry-share .x-share:hover, .entry-thumb, .widget_tag_cloud .tagcloud a:hover, .widget_product_tag_cloud .tagcloud a:hover, .x-highlight, .x-recent-posts .x-recent-posts-img, .x-recent-posts .x-recent-posts-img:before, .x-portfolio-filters {
    background-color: #f1ba63;
}

.x-recent-posts a:hover .x-recent-posts-img, .x-portfolio-filters:hover {
    background-color: #ad8647;
}

.x-topbar .p-info, .x-topbar .p-info a, .x-topbar .x-social-global a {
    color: #ffffff;
}

.x-topbar .p-info a:hover {
    color: #959baf;
}

.x-brand, .x-brand:hover, .x-navbar .x-nav > li > a, .x-navbar .x-nav > li:before, .x-navbar .sub-menu li > a, .x-navbar .x-navbar-inner .x-nav-collapse .x-nav > li > a:hover, .x-navbar .x-navbar-inner .x-nav-collapse .sub-menu a:hover, .tp-leftarrow:before, .tp-rightarrow:before, .tp-bullets.simplebullets.navbar .bullet, .tp-bullets.simplebullets.navbar .bullet:hover, .tp-bullets.simplebullets.navbar .bullet.selected, .tp-bullets.simplebullets.navbar-old .bullet, .tp-bullets.simplebullets.navbar-old .bullet:hover, .tp-bullets.simplebullets.navbar-old .bullet.selected {
    color: #cccccc;
}

.x-navbar .sub-menu li:before, .x-navbar .sub-menu li:after {
    background-color: #cccccc;
}

.x-navbar .x-navbar-inner .x-nav-collapse .x-nav > li > a:hover, .x-navbar .x-navbar-inner .x-nav-collapse .sub-menu a:hover, .x-navbar .x-navbar-inner .x-nav-collapse .x-nav .current-menu-item > a {
    color: #444444;
}

.x-navbar .x-nav > li > a:hover, .x-navbar .x-nav > li.current-menu-item > a {
    -webkit-box-shadow: 0 2px 0 0 #444444;
    box-shadow: 0 2px 0 0 #444444;
}

.x-btn-navbar, .x-btn-navbar:hover {
    color: #ffffff;
}

.x-colophon.bottom, .x-colophon.bottom a, .x-colophon.bottom .x-social-global a {
    color: #ffffff;
}

.x-topbar {
    background-color: #d35400;
}

.x-navbar, .x-navbar .sub-menu, .tp-bullets.simplebullets.navbar, .tp-bullets.simplebullets.navbar-old, .tp-leftarrow.default, .tp-rightarrow.default {
    background-color: #ffffff !important;
}

.x-colophon.bottom {
    background-color: #2d2d2d;
}

.x-btn-navbar, .x-btn-navbar.collapsed:hover {
    background-color: #666666;
}

.x-btn-navbar.collapsed {
    background-color: #444444;
}

.entry-title:before {
    color: #e67e22;
}

.x-main {
    width: 68.79803%;
}

.x-sidebar {
    width: 24.79803%;
}

.x-navbar-static-active .x-navbar .x-nav > li, .x-navbar-fixed-top-active .x-navbar .x-nav > li {
    height: 90px;
    padding-top: 28px;
}

.x-navbar-fixed-left-active .x-navbar .x-nav > li > a, .x-navbar-fixed-right-active .x-navbar .x-nav > li > a {
    margin-top: 11px;
    margin-bottom: 11px;
}

.x-navbar .x-nav > li:before {
    padding-top: 28px;
}

.sf-menu li:hover ul, .sf-menu li.sfHover ul {
    top: 90px;;
}

.sf-menu li li:hover ul, .sf-menu li li.sfHover ul {
    top: -1.75em;
}

.x-navbar-fixed-left-active .x-widgetbar {
    left: 155px;
}

.x-navbar-fixed-right-active .x-widgetbar {
    right: 155px;
}

.x-container-fluid.width {
    width: 88%;
}

.x-container-fluid.max {
    max-width: 1000px;
}

.x-comment-author a, .comment-form-author label, .comment-form-email label, .comment-form-url label, .comment-form-rating label, .comment-form-comment label, .widget_calendar #wp-calendar caption, .widget_calendar #wp-calendar th, .x-accordion-heading .x-accordion-toggle, .x-nav-tabs > li > a:hover, .x-nav-tabs > .active > a, .x-nav-tabs > .active > a:hover {
    color: #333333;
}

.widget_calendar #wp-calendar th {
    border-bottom-color: #333333;
}

.pagination span.current, .x-portfolio-filters-menu, .widget_tag_cloud .tagcloud a, .h-feature-headline span i, .widget_price_filter .ui-slider .ui-slider-handle {
    background-color: #333333;
}

.x-comment-author a {
    color: #7a7a7a;
}

.h-landmark {
    font-weight: 300;
}

@media (max-width: 979px) {
    .x-navbar-static-active .x-navbar .x-nav > li, .x-navbar-fixed-top-active .x-navbar .x-nav > li {
        height: auto;
        padding-top: 0;
    }

    .x-navbar-fixed-left .x-container-fluid.width, .x-navbar-fixed-right .x-container-fluid.width {
        width: 88%;
    }

    .x-navbar-fixed-left-active .x-navbar .x-nav > li > a, .x-navbar-fixed-right-active .x-navbar .x-nav > li > a {
        margin-top: 0;
    }

    .x-navbar-fixed-left-active .x-widgetbar {
        left: 0;
    }

    .x-navbar-fixed-right-active .x-widgetbar {
        right: 0;
    }
}

body {
    font-size: 12px;
    font-weight: 300;
    color: #7a7a7a;
}

a:focus, select:focus, input[type="file"]:focus, input[type="radio"]:focus, input[type="checkbox"]:focus {
    outline: thin dotted #333;
    outline: 5px auto #f1ba63;
    outline-offset: -1px;
}

h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-weight: 900;
    letter-spacing: -1px;
}

.entry-header, .entry-content {
    font-size: 16px;
}

.x-brand {
    font-weight: 400;
    letter-spacing: -3px;
}

body, input, button, select, textarea {
    font-family: "Lato", "Helvetica Neue", Helvetica, sans-serif;
}

h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: "Lato", "Helvetica Neue", Helvetica, sans-serif;
}

.x-brand {
    font-family: "Pacifico", "Helvetica Neue", Helvetica, sans-serif;
}

.whiteColor {
    color: #ffffff;
}

.x-navbar .x-nav > li > a {
    font-family: "Lato", "Helvetica Neue", Helvetica, sans-serif;
}

h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a, .h1 a, .h2 a, .h3 a, .h4 a, .h5 a, .h6 a, blockquote {
    color: #333333;
}

.x-brand, .x-brand:hover {
    color: #444444;
}

.x-main.full {
    float: none;
    display: block;
    width: auto;
}

@media (max-width: 979px) {
    .x-main.left, .x-main.right, .x-sidebar.left, .x-sidebar.right {
        float: none;
        display: block;
        width: auto !important;
    }
}

.x-btn-widgetbar {
    border-top-color: #e67e22;
    border-right-color: #e67e22;
}

.x-btn-widgetbar:hover {
    border-top-color: #e5a872;
    border-right-color: #e5a872;
}

body.x-navbar-fixed-left-active {
    padding-left: 155px;
}

body.x-navbar-fixed-right-active {
    padding-right: 155px;
}

.x-navbar {
    font-size: 14px;
}

.x-navbar .x-nav > li > a {
    font-weight: 400;
    font-style: normal;
    text-transform: uppercase;
}

.x-navbar-fixed-left, .x-navbar-fixed-right {
    width: 155px;
}

.x-navbar-fixed-top-active .x-navbar-wrap {
    height: 90px;
}

.x-navbar-inner {
    min-height: 90px;
}

.x-btn-navbar {
    margin-top: 20px;;
}

.x-btn-navbar, .x-btn-navbar.collapsed {
    font-size: 22px;
}

.x-brand {
    font-size: 44px;
    font-size: 4.4rem;
}

.x-navbar .x-brand {
    margin-top: 20px;
}

body.x-navbar-fixed-left-active .x-brand, body.x-navbar-fixed-right-active .x-brand {
    margin-top: 30px;
}

@media (max-width: 979px) {
    body.x-navbar-fixed-left-active, body.x-navbar-fixed-right-active {
        padding: 0;
    }

    body.x-navbar-fixed-left-active .x-brand, body.x-navbar-fixed-right-active .x-brand {
        margin-top: 20px;
    }

    .x-navbar-fixed-top-active .x-navbar-wrap {
        height: auto;
    }

    .x-navbar-fixed-left, .x-navbar-fixed-right {
        width: auto;
    }
}

.x-btn, .button, [type="button"] {
    color: #ffffff;
    border-color: #444444;
    background-color: #444444;
    height: 43px;
    width: 213px !important;
}

.x-btn:hover, .button:hover, [type="button"]:hover {
    color: #fff;
    border-color: #555555;
    background-color: #555555;
}

.x-btn.x-btn-real, .x-btn.x-btn-real:hover {
    margin-bottom: 0.25em;
    text-shadow: 0 0.075em 0.075em rgba(0, 0, 0, 0.65);
}

.x-btn.x-btn-real {
    -webkit-box-shadow: 0 0.25em 0 0 #2a2a2a, 0 4px 9px rgba(0, 0, 0, 0.75);
    box-shadow: 0 0.25em 0 0 #2a2a2a, 0 4px 9px rgba(0, 0, 0, 0.75);
}

.x-btn.x-btn-real:hover {
    -webkit-box-shadow: 0 0.25em 0 0 #2a2a2a, 0 4px 9px rgba(0, 0, 0, 0.75);
    box-shadow: 0 0.25em 0 0 #2a2a2a, 0 4px 9px rgba(0, 0, 0, 0.75);
}

.x-btn.x-btn-flat, .x-btn.x-btn-flat:hover {
    margin-bottom: 0;
    text-shadow: 0 0.075em 0.075em rgba(0, 0, 0, 0.65);
    -webkit-box-shadow: none;
    box-shadow: none;
}

.x-btn.x-btn-transparent, .x-btn.x-btn-transparent:hover {
    margin-bottom: 0;
    border-width: 3px;
    text-shadow: none;
    text-transform: uppercase;
    background-color: transparent;
    -webkit-box-shadow: none;
    box-shadow: none;
}

.x-btn-circle-wrap:before {
    width: 172px;
    height: 43px;
    background: url(/media/img/btn-circle-top-small.png) center center no-repeat;
    -webkit-background-size: 172px 43px;
    background-size: 172px 43px;
}

.x-btn-circle-wrap:after {
    width: 190px;
    height: 43px;
    background: url(/media/img/btn-circle-bottom-small.png) center center no-repeat;
    -webkit-background-size: 190px 43px;
    background-size: 190px 43px;
}

.x-btn, .x-btn:hover, .button, .button:hover, [type="submit"], [type="submit"]:hover {
    text-shadow: 0 0.075em 0.075em rgba(0, 0, 0, 0.5);
}

.x-btn, .button, [type="submit"] {
    border-radius: 0.25em;
}

.x-btn, .button, [type="submit"] {
    padding: 0.579em 1.105em 0.842em;
    font-size: 19px;
    font-size: 1.9rem;
}</style>
<style id="x-customizer-css-custom" type="text/css">.x-btn, .button {
        -webkit-box-shadow: none;
        box-shadow: none;
        display: inline;
    }</style>

</head>
<body
    class="home page page-id-871 page-template page-template-template-blank-4-php x-renew x-navbar-fixed-top-active x-full-width-layout-active x-content-sidebar-active wpb-js-composer js-comp-ver-4.1.3 vc_responsive x-v1_8_5 x-shortcodes-v2_3_5">
<!--
BEGIN #top.site
-->

<div id="top" class="site">


<header class="masthead masthead-inline" role="banner">


    <div class="x-navbar-wrap">
        <div class="x-navbar">
            <div class="x-navbar-inner x-container-fluid max width">

                <h1 class="visually-hidden">Smart Soft Studios</h1>
                <a href="http://www.smartsoftstudios.com/" class="x-brand img" title="Make Life Smarter">

                    <img src="media/img/nimbus9-final-textonly.png"
                         alt="Make Life Smarter">
                </a>
                <a href="#" class="x-btn-navbar collapsed" data-toggle="collapse" data-target=".x-nav-collapse">
                    <i class="x-icon-bars"></i>
                    <span class="visually-hidden">Navigation</span>
                </a>

                <nav class="x-nav-collapse collapse" role="navigation">

                    <ul id="menu-scrolling-menu" class="x-nav x-nav-scrollspy sf-menu">
                        <li id="menu-item-6706"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6706"><a
                                href="#x-content-band-1">Home</a></li>
                        <li id="menu-item-1889"
                            class="scroller menu-item menu-item-type-custom menu-item-object-custom menu-item-1889">
                            <a rel="1311" href="#x-content-band-2">Smart Soft</a></li>
                        <li id="menu-item-1890"
                            class="scroller menu-item menu-item-type-custom menu-item-object-custom menu-item-1890">
                            <a rel="1311" href="#x-content-band-3">Web Projects</a></li>
                        <li id="menu-item-1850"
                            class="scroller menu-item menu-item-type-custom menu-item-object-custom menu-item-1850">
                            <a rel="1311" href="#x-content-band-5">Mobile Apps</a></li>
                        <li id="menu-item-6707"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6707"><a
                                href="#x-content-band-6">Contact Us</a></li>
                    </ul>
                </nav>
                <!-- end .x-nav-collapse.collapse -->      </div>
            <!-- end .x-navbar-inner -->
        </div>
        <!-- end .x-navbar -->
    </div>
    <!-- end .x-navbar-wrap -->

</header>


<div class="x-main" role="main">
<article id="post-871" class="post-871 page type-page status-publish hentry no-post-thumbnail">
<div class="entry-content">

<div id="x-content-band-1" class="x-content-band center-text man"
     style="background-color: #fff; padding-top: 65px; padding-bottom: 65px;">
    <div class="x-container-fluid max width">
        <div class="x-column whole last" style=" right: -4000px;" data-fade="true"
             data-fade-animation="in-from-right">
            <img class="x-img" src="wp-content/uploads/2014/05/nimbus9-final-notext-175x175.png"
                 alt="Alt Text">

            <h2 class="h-custom-headline h-resp-main man h3" style="font-size: 60px !important;"><span>Make Life Smarter.</span>
            </h2>
        </div>
        <hr class="x-clear">
    </div>
</div>
<div id="x-content-band-2" class="x-content-band center-text man"
     style="background-color: #5c96bf; padding-top: 65px; padding-bottom: 65px;">
    <div class="x-container-fluid max width">
        <div class="x-column two-thirds" style="" data-fade="true" data-fade-animation="in">
            <img class="x-img man"
                 src="media/img/MiniLapTop1.png"
                 alt="Alt Text">
        </div>
        <div class="x-visibility x-visible-phone">
            <hr class="x-gap" style="margin: 65px 0 0 0;">
        </div>
        <div class="x-column one-third last" style="" data-fade="true" data-fade-animation="in">
            <br/><br/>

            <h2 class="h-custom-headline h-resp mtn h3" style="color: #fff;"><span>Smarter.</span></h2>

            <p class="p-resp" style="color: #fff;">
                An Agile Rails, iOS, Android and PHP team of geeks converting raw ideas from scratch into real time
                applications. We are Smart Soft Studios.
            </p>

            <p>
                <!-- <a  class="x-btn"  href="#" title="Feel Free to Bug Us"  data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Let us know if you have any questions on how we work. We're happy to answer anything you'd like to know more about!"  data-options="thumbnail: ''"><i  class="x-icon x-icon-lightbulb-o" ></i>Learn More</a>-->
                <br/>
        </div>
        <hr class="x-clear">
    </div>
</div>

<div id="x-content-band-3" class="x-content-band center-text man"
     style="background-color: #fff; padding-top: 65px; padding-bottom: 40px;">
    <div class="x-container-fluid max width"><h2 class="h-custom-headline h-resp mtn h3"
                                                 style="color: #367694; padding: 40px"><span>Web Projects</span></h2>

        <div class="x-column one-third" style=" right: -3000px;" data-fade="true"
             data-fade-animation="in-from-right">
            <img class="x-img man" src="media/img/hireology.jpeg" alt="Alt Text" style="height: 177px">

            <h3 class="h-custom-headline mtm h4" style="margin-top: 10px !important;">
                <span>
                    <a href="http://www.hireology.com/" class="no-ico" target="_BLANK">Hireology.</a>
                </span>
            </h3>

            <p class="mbn">Hireology is a complete web-based hiring platform with everything you need to hire the best
                person for the job. From the initial job profile to our three-stage interview process to our customized
                interview scorecard, Hireology will have your company interviewing and selecting candidates with
                confidence.</p>

            <p>
        </div>

        <div class="x-visibility x-visible-phone">
            <hr class="x-gap" style="margin: 40px 0 0 0;">
        </div>

        <div class="x-column one-third" style=" right: -2000px;" data-fade="true"
             data-fade-animation="in-from-right">
            <img class="x-img man"
                 src="media/img/46Labs.png" alt="Alt Text" style="height: 156px; width: 200px">

            <h3 class="h-custom-headline mtm h4">
                <span>
                    <a href="http://www.46labs.com" class="no-ico" target="_BLANK">46 Labs.</a>
                    </span>
            </h3>


            <p class="mbn">46 Labs is a LEAN and agile software development firm focused exclusively on the telecom
                industry. Agile development is not a specific process, action, or a daylong exercise. Agile is a
                mindset, an attitude with which a software project is undertaken.</p>

            <p></div>
        <div class="x-visibility x-visible-phone">
            <hr class="x-gap" style="margin: 40px 0 0 0;">
        </div>
        <div class="x-column one-third last" style=" right: -1000px;" data-fade="true"
             data-fade-animation="in-from-right">
            <img class="x-img man"
                 src="media/img/peer.png"
                 alt="Alt Text" style="width: 200px; height: 156px">

            <h3 class="h-custom-headline mtm h4"><span>
                    <a href="http://portal.peeredge.net/subscriber" class="no-ico" target="_BLANK">PeerEdge.</a>
          </span></h3>

            <p class="mbn">Insert and retrieve data from remote Databases and export,import CSV and excel sheets more
                than 150k records in background processes, Authentication using Devise and Authorization using CanCan,
                Reporting export to PDF and CSV files over million rows of data.</p>

            <p></div>
        <hr class="x-clear">
    </div>
</div>

<div id="x-content-band-4" class="x-content-band center-text man"
     style="background-color: #fff; padding-top: 0; padding-bottom: 65px;">
    <div class="x-container-fluid max width">
        <div class="x-column one-third" style=" left: -1000px;" data-fade="true"
             data-fade-animation="in-from-left">
            <img class="x-img man"
                 src="media/img/job.png" alt="Alt Text" style="width: 200px; height: 150px">

            <h3 class="h-custom-headline mtm h4">
                <span>
                    <a href="http://www.jobmre.com/" class="no-ico" target="_BLANK">JOBMRE.</a>
                </span>
            </h3>

            <p class="mbn">JOBMRE is online job site which connects talent with opportunity. JOBMRE provides services to
                the job seekers and employers by providing them one platform for job searching and hiring. </p>

            <p></div>
        <div class="x-visibility x-visible-phone">
            <hr class="x-gap" style="margin: 40px 0 0 0;">
        </div>
        <div class="x-column one-third" style=" left: -2000px;" data-fade="true"
             data-fade-animation="in-from-left">
            <img class="x-img man" src="media/img/psbook.png" style="width: 200px; height: 156px"
                 alt="Alt Text">

            <h3 class="h-custom-headline mtm h4">
                <span>
                    <a href="http://www.psbnyc.com" class="no-ico" target="_BLANK">P.S. Bookshop.</a>
                </span>
            </h3>

            <p class="mbn">P.S. Bookshop, a bookstore that sells used and rare books opened for business at the
                beginning of the month across from J Condo and next to Retreat cafe. They have a children’s section and
                reading area. They will also buy your used rare and out-of-print books. Many of their books are focused
                on art, architecture, history, and literature. Welcome to Dumbo! </p>

            <p></div>
        <div class="x-visibility x-visible-phone">
            <hr class="x-gap" style="margin: 40px 0 0 0;">
        </div>
        <div class="x-column one-third last" style=" left: -3000px;" data-fade="true"
             data-fade-animation="in-from-left">
            <img class="x-img man"
                 src="media/img/shop.jpeg" alt="Alt Text" style="height: 156px; width: 200px">

            <h3 class="h-custom-headline mtm h4">
                <span>
                    <a href="http://www.shopbuses.com/" class="no-ico" target="_BLANK">Shop Buses.</a>
                </span>
            </h3>

            <p class="mbn">Shopbuses.com was designed to revolutionize the way buses are bought and sold. With decades
                of experience in the bus and automotive industries, our industry-expert staff designed a site that
                incorporates the most advanced virtual technologies. The result—shopbuses.com gives you the best user
                experience and most powerful tools right at your fingertips. Don’t get bogged down searching endlessly
                through hundreds of bus listings trying to find that right bus.</p>

            <p></div>
        <hr class="x-clear">
    </div>
</div>

<div id="x-content-band-5" class="x-content-band center-text man"
     style="background-color: #5C96BF; padding-top: 65px; padding-bottom: 125px;">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

<h2 class="h-custom-headline h-resp mtn h3"
    style="color: #FFFFFF; padding: 40px">
    <span>Mobile Apps</span>
</h2>

<div class="carousel-inner" role="listbox">
<div class="item active" style="background: none !important;">
    <div class="x-container-fluid max width">

        <div class="x-column one-third" style=" right: -3000px;" data-fade="true"
             data-fade-animation="in-from-right">
            <img class="x-img man"
                 src="media/img/tosspack.png" alt="Alt Text" style="height: 177px; width: 200px">

            <h3 class="h-custom-headline mtm h4" style="margin-top: 10px !important;">
                <span>
                    <a href="https://play.google.com/store/apps/details?id=com.smartsoftstudios.tosspack" class="no-ico"
                       target="_BLANK">Toss Pack.</a>
                </span>
            </h3>

            <p class="mbn whiteColor" style="float: left;width: 100%;margin-left: 30% !important">

                <a style="float: left" target="_blank"
                   href="https://play.google.com/store/apps/details?id=com.smartsoftstudios.tosspack"><img
                        class="x-img man"
                        src="media/img/googleplay.png" alt="Alt Text" style="width: 40px; cursor: pointer"></a>
                <a style="float: left" target="_blank"
                   href="https://itunes.apple.com/us/app/toss-pack/id788460125?ls=1&mt=8"><img
                        class="x-img man"
                        src="media/img/app-store.png" alt="Alt Text"
                        style="width: 40px; cursor: pointer"></a>
                <a style="float: left" target="_blank"
                   href="http://www.amazon.com/Smart-Soft-Studios-Toss-Pack/dp/B00I2U15HC/ref=sr_1_8/177-7508772-1429549?s=mobile-apps&ie=UTF8&qid=1415172174&sr=1-8"><img
                        class="x-img man"
                        src="media/img/amazon.png" alt="Alt Text" style="width: 40px; cursor: pointer"></a>
            </p>

            <p></div>
        <div class="x-visibility x-visible-phone">
            <hr class="x-gap" style="margin: 40px 0 0 0;">
        </div>
        <div class="x-column one-third" style=" right: -2000px;" data-fade="true"
             data-fade-animation="in-from-right">
            <img class="x-img man"
                 src="media/img/crazy.png" alt="Alt Text" style="height: 177px; width: 200px">

            <h3 class="h-custom-headline mtm h4" style="margin-top: 10px !important;">
                <span>
                    <a href="https://play.google.com/store/apps/details?id=com.chi.games.crazyboating" class="no-ico"
                       target="_BLANK">Crazy Boater.</a>
                </span>
            </h3>


            <p class="mbn whiteColor" style="float: left;width: 100%;margin-left: 35% !important;">
                <a style="float: left;" target="_blank"
                   href="https://play.google.com/store/apps/details?id=com.chi.games.crazyboating"><img
                        class="x-img man"
                        src="media/img/googleplay.png" alt="Alt Text" style="width: 40px; cursor: pointer"></a>
            </p>

            <p></div>
        <div class="x-visibility x-visible-phone">
            <hr class="x-gap" style="margin: 40px 0 0 0;">
        </div>
        <div class="x-column one-third last" style=" right: -1000px;" data-fade="true"
             data-fade-animation="in-from-right">
            <img class="x-img man"
                 src="media/img/paint.png"
                 alt="Alt Text" style="width: 200px; height: 183px; margin-left: 18px !important">

            <h3 class="h-custom-headline mtm h4" style=" margin-top: 8px !important;"><span>
                    <a href="https://play.google.com/store/apps/details?id=com.smartsoftstudios.testing" class="no-ico"
                       target="_BLANK">Smart Soft Painting.</a>
                    </span></h3>

            <p class="mbn whiteColor" style="float: left;width: 100%;margin-left: 30% !important;">
                <a style="float: left;" target="_blank"
                   href="https://play.google.com/store/apps/details?id=com.smartsoftstudios.testing"><img
                        class="x-img man"
                        src="media/img/googleplay.png" alt="Alt Text" style="width: 40px; cursor: pointer"></a>
                <a style="float: left;" target="_blank"
                   href="https://itunes.apple.com/us/app/smartsoft-painting/id790346535?ls=1&mt=8"><img
                        class="x-img man"
                        src="media/img/app-store.png" alt="Alt Text"
                        style="width: 40px; cursor: pointer"></a>
                <a style="float: left;" target="_blank"
                   href="http://www.amazon.com/Smart-Soft-Studios-Painting/dp/B00I2WTF18/ref=sr_1_10/177-7508772-1429549?s=mobile-apps&ie=UTF8&qid=1415172174&sr=1-10"><img
                        class="x-img man"
                        src="media/img/amazon.png" alt="Alt Text" style="width: 40px; cursor: pointer"></a>
            </p>

            <p></div>

    </div>

    <hr class="x-clear">
    <div class="x-container-fluid max width" style="margin-top: 20px">

        <div class="x-column one-third" style=" right: -3000px;" data-fade="true"
             data-fade-animation="in-from-right">
            <img class="x-img man"
                 src="media/img/aircraft.png" alt="Alt Text" style="height: 177px; width: 200px">

            <h3 class="h-custom-headline mtm h4" style="margin-top: 10px !important;">
                <span>
                    <a href="https://play.google.com/store/apps/details?id=com.airnavyfighterslite.aircraftsurvival"
                       class="no-ico" target="_BLANK">Air Craft.</a>
                </span>
            </h3>

            <p class="mbn whiteColor" style="float: left;width: 100%;margin-left: 30%;">
                <a style="float: left;" target="_blank"
                   href="https://play.google.com/store/apps/details?id=com.airnavyfighterslite.aircraftsurvival"><img
                        class="x-img man"
                        src="media/img/googleplay.png" alt="Alt Text" style="width: 40px; cursor: pointer"></a>
                <a style="float: left;" target="_blank"
                   href="https://itunes.apple.com/us/app/smart-air-craft/id921487463?mt=8"><img
                        class="x-img man"
                        src="media/img/app-store.png" alt="Alt Text"
                        style="width: 40px; cursor: pointer"></a>

                <a style="float: left;" target="_blank"
                   href="http://www.amazon.com/Smart-Soft-Studios-Air-Craft/dp/B00IA115T6/ref=sr_1_2/177-7508772-1429549?s=mobile-apps&ie=UTF8&qid=1415172174&sr=1-2"><img
                        class="x-img man"
                        src="media/img/amazon.png" alt="Alt Text" style="width: 40px; cursor: pointer"></a>
            </p>

            <p></div>

        <div class="x-column one-third" style=" right: -3000px;" data-fade="true"
             data-fade-animation="in-from-right">
            <img class="x-img man"
                 src="media/img/robo.png" alt="Alt Text" style="height: 177px; width: 200px">

            <h3 class="h-custom-headline mtm h4" style="margin-top: 10px !important;">
                <span>
                    <a href="https://play.google.com/store/apps/details?id=com.magicwach.RiotRunners" class="no-ico"
                       target="_BLANK">Smart Robo Rush.</a>
                </span>
            </h3>

            <p class="mbn whiteColor">

            <p class="mbn whiteColor" style="float: left;width: 100%;margin-left: 40% !important;">
                <a style="float: left;" target="_blank"
                   href="https://play.google.com/store/apps/details?id=com.magicwach.RiotRunners"><img
                        class="x-img man"
                        src="media/img/googleplay.png" alt="Alt Text" style="width: 40px; cursor: pointer"></a>
                <a style="float: left;" target="_blank"
                   href="http://www.amazon.com/Smart-Soft-Studios-Robo-Rush/dp/B00NQ73F42/ref=sr_1_4/177-7508772-1429549?s=mobile-apps&ie=UTF8&qid=1415172174&sr=1-4"><img
                        class="x-img man"
                        src="media/img/amazon.png" alt="Alt Text" style="width: 40px; cursor: pointer"></a>
            </p>


            <p></div>

        <div class="x-column one-third last" style=" right: -3000px;" data-fade="true"
             data-fade-animation="in-from-right">
            <img class="x-img man"
                 src="media/img/smart-sea.jpeg" alt="Alt Text" style="height: 177px; width: 200px">

            <h3 class="h-custom-headline mtm h4" style="margin-top: 10px !important;">
                           <span>
                               <a href="https://play.google.com/store/apps/details?id=com.magicwach.RiotRunners"
                                  class="no-ico"
                                  target="_BLANK">Smart Sea Diver.</a>
                           </span>
            </h3>

            <p class="mbn whiteColor">

            <p class="mbn whiteColor" style="float: left;width: 100%;margin-left: 40% !important;">
                <a style="float: left;" target="_blank"
                   href="https://itunes.apple.com/us/app/smart-sea-diver/id920926966?mt=8"><img
                        class="x-img man"
                        src="media/img/app-store.png" alt="Alt Text"
                        style="width: 40px; cursor: pointer"></a>
                <a style="float: left;" target="_blank"
                   href="http://www.amazon.com/Smart-Soft-Studios-Sea-Diver/dp/B00NQ7S7FY/ref=sr_1_1/177-7508772-1429549?s=mobile-apps&ie=UTF8&qid=1415172174&sr=1-1"><img
                        class="x-img man"
                        src="media/img/amazon.png" alt="Alt Text" style="width: 40px; cursor: pointer"></a>
            </p>


            <p></div>

    </div>
</div>


<!--            SECOND PAGE-->
<div class="item" style="background: none !important;">
    <div class="x-container-fluid max width">

        <div class="x-column one-third" style=" right: -3000px;" data-fade="true"
             data-fade-animation="in-from-right">
            <img class="x-img man"
                 src="media/img/smart-robo-rush.jpeg" alt="Alt Text" style="height: 177px; width: 200px">

            <h3 class="h-custom-headline mtm h4" style="margin-top: 10px !important;">
                      <span>
                          <a href="http://www.amazon.com/Smart-Soft-Studios-Robo-Rush/dp/B00NQ73F42/ref=sr_1_4/177-7508772-1429549?s=mobile-apps&ie=UTF8&qid=1415172174&sr=1-4"
                             class="no-ico"
                             target="_BLANK">Smart Robo Rush.</a>
                      </span>
            </h3>

            <p class="mbn whiteColor" style="float: left;width: 100%;margin-left: 40% !important">

                <a style="float: left" target="_blank"
                   href="http://www.amazon.com/Smart-Soft-Studios-Robo-Rush/dp/B00NQ73F42/ref=sr_1_4/177-7508772-1429549?s=mobile-apps&ie=UTF8&qid=1415172174&sr=1-4"><img
                        class="x-img man"
                        src="media/img/amazon.png" alt="Alt Text" style="width: 40px; cursor: pointer"></a>
            </p>

            <p></div>
        <div class="x-visibility x-visible-phone">
            <hr class="x-gap" style="margin: 40px 0 0 0;">
        </div>
        <div class="x-column one-third" style=" right: -2000px;" data-fade="true"
             data-fade-animation="in-from-right">
            <img class="x-img man"
                 src="media/img/smart-brain-puzzle.jpeg" alt="Alt Text" style="height: 177px; width: 200px">

            <h3 class="h-custom-headline mtm h4" style="margin-top: 10px !important;">
                      <span>
                          <a href="http://www.amazon.com/Smart-Soft-Studios-Brain-Puzzle/dp/B00IA25W6C/ref=sr_1_5/177-7508772-1429549?s=mobile-apps&ie=UTF8&qid=1415172174&sr=1-5"
                             class="no-ico"
                             target="_BLANK">Smart Brain Puzzle.</a>
                      </span>
            </h3>


            <p class="mbn whiteColor" style="float: left;width: 100%;margin-left: 40% !important;">
                <a style="float: left;" target="_blank"
                   href="http://www.amazon.com/Smart-Soft-Studios-Brain-Puzzle/dp/B00IA25W6C/ref=sr_1_5/177-7508772-1429549?s=mobile-apps&ie=UTF8&qid=1415172174&sr=1-5"><img
                        class="x-img man"
                        src="media/img/amazon.png" alt="Alt Text" style="width: 40px; cursor: pointer"></a>
            </p>

            <p></div>
        <div class="x-visibility x-visible-phone">
            <hr class="x-gap" style="margin: 40px 0 0 0;">
        </div>
        <div class="x-column one-third last" style=" right: -1000px;" data-fade="true"
             data-fade-animation="in-from-right">
            <img class="x-img man"
                 src="media/img/save-tortoise.jpeg"
                 alt="Alt Text" style="width: 200px; height: 183px; margin-left: 18px !important">

            <h3 class="h-custom-headline mtm h4" style=" margin-top: 8px !important;"><span>
                          <a href="http://www.amazon.com/Smart-Soft-Studios-Save-Tortoise/dp/B00NNVVIRM/ref=sr_1_6/177-7508772-1429549?s=mobile-apps&ie=UTF8&qid=1415172174&sr=1-6"
                             class="no-ico"
                             target="_BLANK">Save Tortoise.</a>
                          </span></h3>

            <p class="mbn whiteColor" style="float: left;width: 100%;margin-left: 40% !important;">
                <a style="float: left;" target="_blank"
                   href="http://www.amazon.com/Smart-Soft-Studios-Save-Tortoise/dp/B00NNVVIRM/ref=sr_1_6/177-7508772-1429549?s=mobile-apps&ie=UTF8&qid=1415172174&sr=1-6"><img
                        class="x-img man"
                        src="media/img/amazon.png" alt="Alt Text" style="width: 40px; cursor: pointer"></a>
            </p>

            <p></div>

    </div>

    <hr class="x-clear">
    <div class="x-container-fluid max width" style="margin-top: 20px">

        <div class="x-column one-third" style=" right: -3000px;" data-fade="true"
             data-fade-animation="in-from-right">
            <img class="x-img man"
                 src="media/img/s-b-tr.jpeg" alt="Alt Text" style="height: 177px; width: 200px">

            <h3 class="h-custom-headline mtm h4" style="margin-top: 10px !important;">
                      <span>
                          <a href="http://www.amazon.com/Smart-Soft-Studios-Bubble-Trouble/dp/B00NMWWDIK/ref=sr_1_7/177-7508772-1429549?s=mobile-apps&ie=UTF8&qid=1415172174&sr=1-7"
                             class="no-ico" target="_BLANK">Smart Bubble Trouble.</a>
                      </span>
            </h3>

            <p class="mbn whiteColor" style="float: left;width: 100%;margin-left: 35%;">
                <a style="float: left;" target="_blank"
                   href="https://itunes.apple.com/us/app/smart-bubble-trouble/id920895622?mt=8"><img
                        class="x-img man"
                        src="media/img/app-store.png" alt="Alt Text"
                        style="width: 40px; cursor: pointer"></a>

                <a style="float: left;" target="_blank"
                   href="http://www.amazon.com/Smart-Soft-Studios-Bubble-Trouble/dp/B00NMWWDIK/ref=sr_1_7/177-7508772-1429549?s=mobile-apps&ie=UTF8&qid=1415172174&sr=1-7"><img
                        class="x-img man"
                        src="media/img/amazon.png" alt="Alt Text" style="width: 40px; cursor: pointer"></a>
            </p>

            <p></div>

        <div class="x-column one-third" style=" right: -3000px;" data-fade="true"
             data-fade-animation="in-from-right">
            <img class="x-img man"
                 src="media/img/smart-ball.jpeg" alt="Alt Text" style="height: 177px; width: 200px">

            <h3 class="h-custom-headline mtm h4" style="margin-top: 10px !important;">
                      <span>
                          <a href="http://www.amazon.com/Smart-Soft-Studios-Where-Ball/dp/B00IBXI6PO/ref=sr_1_9/177-7508772-1429549?s=mobile-apps&ie=UTF8&qid=1415172174&sr=1-9"
                             class="no-ico"
                             target="_BLANK">Where is Smart Ball.</a>
                      </span>
            </h3>

            <p class="mbn whiteColor">

            <p class="mbn whiteColor" style="float: left;width: 100%;margin-left: 40% !important;">
                <a style="float: left;" target="_blank"
                   href="http://www.amazon.com/Smart-Soft-Studios-Where-Ball/dp/B00IBXI6PO/ref=sr_1_9/177-7508772-1429549?s=mobile-apps&ie=UTF8&qid=1415172174&sr=1-9"><img
                        class="x-img man"
                        src="media/img/amazon.png" alt="Alt Text" style="width: 40px; cursor: pointer"></a>
            </p>


            <p></div>

        <div class="x-column one-third last" style=" right: -3000px;" data-fade="true"
             data-fade-animation="in-from-right">
            <img class="x-img man"
                 src="media/img/smart-boater.jpeg" alt="Alt Text" style="height: 177px; width: 200px">

            <h3 class="h-custom-headline mtm h4" style="margin-top: 10px !important;">
                                 <span>

                                     <a href="http://www.amazon.com/Smart-Soft-Studios-Crazy-Boater/dp/B00NPZCA9Q/ref=sr_1_11/177-7508772-1429549?s=mobile-apps&ie=UTF8&qid=1415172174&sr=1-11"
                                        class="no-ico"
                                        target="_BLANK">Smart Crazy Boater.</a>
                                 </span>
            </h3>

            <p class="mbn whiteColor">

            <p class="mbn whiteColor" style="float: left;width: 100%;margin-left: 30% !important;">
                <a style="float: left;" target="_blank"
                                                    href="https://itunes.apple.com/us/app/crazy-boater/id788472034?mt=8"><img
                                                         class="x-img man"
                                                         src="media/img/app-store.png" alt="Alt Text"
                                                         style="width: 40px; cursor: pointer"></a>

                <a style="float: left;" target="_blank"
                   href="http://www.amazon.com/Smart-Soft-Studios-Crazy-Boater/dp/B00NPZCA9Q/ref=sr_1_11/177-7508772-1429549?s=mobile-apps&ie=UTF8&qid=1415172174&sr=1-11"><img
                        class="x-img man"
                        src="media/img/amazon.png" alt="Alt Text" style="width: 40px; cursor: pointer"></a>
            </p>


            <p></div>

    </div>
</div>
</div>

<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"
   style="background: none !important; top: 40%">
    <span class="glyphicon" style="top: 40%;font-size: 60px">&#x2039;</span>
    <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"
   style="background: none !important; top: 40%">
    <span class="glyphicon" style="top: 40%;font-size: 60px">&#x203A;</span>
    <span class="sr-only">Next</span>
</a>
</div>
</div>


<div id="x-content-band-6" class="x-content-band center-text man"
     style="background-color: #ffffff; padding-top: 65px; padding-bottom: 0;">
    <div class="x-container-fluid max width">
        <div class="x-column one-half" style="" data-fade="true" data-fade-animation="in">
            <h2 class="h-custom-headline h-resp mtn h3" style="color: #367694;"><span>Contact Us.</span>
            </h2>

            <p class="p-resp" style="color: #367694;">Want to find out more about how we are changing the
                lighting controls industry? Feel free to email us, phone us, smoke signal us, carrier
                pigeon us, or visit us.</p>

            <p>
            <ul class="x-ul-icons ul-resp" style="color: #367694;">
                <li class="x-li-icon"><i class=" x-icon-envelope"></i>hr@smartsoftstudios.com</li>
                <li class="x-li-icon"><i class=" x-icon-phone"></i>+92300-4975852</li>
                <li class="x-li-icon"><i class=" x-icon-map-marker"></i>29 W. Latin St. STE 3<br/> Lahore, Pakistan
                </li>
            </ul>
        </div>
        <div class="x-visibility x-visible-phone">
            <hr class="x-gap" style="margin: 65px 0 0 0;">
        </div>
        <div class="x-column one-half last" style="background-color: #5C96BF; padding: 50px 50px 0" data-fade="true"
             data-fade-animation="in">

            <div style="padding: 40px; background: lightgreen; text-align: center; font-size: 16px; display: none"
                 id="succ"></div>
            <div style="padding: 40px; background: lightcoral; text-align: center; font-size: 16px; display: none"
                 id="err"></div>
            <div class="wpcf7" id="wpcf7-f1965-p871-o1" lang="en-US" dir="ltr">
                <div class="screen-reader-response"></div>
                <form name="" action="#x-content-band-6" method="post" class="wpcf7-form"
                      novalidate="novalidate">
                    <p style="color:#fff;">Your Name (required)<br/>
                                        <span class="wpcf7-form-control-wrap your-name"><input id="names" type="text"
                                                                                               name="your-name" value=""
                                                                                               size="40"
                                                                                               class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                                               aria-required="true"
                                                                                               aria-invalid="false"/></span>
                    </p>

                    <p style="color:#fff;">Your Email (required)<br/>
                                        <span class="wpcf7-form-control-wrap your-email"><input id="email" type="email"
                                                                                                name="your-email"
                                                                                                value="" size="40"
                                                                                                class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                                                aria-required="true"
                                                                                                aria-invalid="false"/></span>
                    </p>

                    <p style="color:#fff;">Subject<br/>
                                        <span class="wpcf7-form-control-wrap your-subject"><input id="subject"
                                                                                                  type="text"
                                                                                                  name="your-subject"
                                                                                                  value="" size="40"
                                                                                                  class="wpcf7-form-control wpcf7-text"
                                                                                                  aria-invalid="false"/></span>
                    </p>

                    <p style="color:#fff;">Your Message<br/>
                                        <span class="wpcf7-form-control-wrap your-message"><textarea id="message"
                                                                                                     name="your-message"
                                                                                                     cols="40" rows="10"
                                                                                                     class="wpcf7-form-control wpcf7-textarea"
                                                                                                     aria-invalid="false"></textarea></span>
                    </p>

                    <p><input type="button" value="Send" class="wpcf7-submit" id="query-submit"/></p>

                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                </form>
            </div>
            <br/><br/><br/>
        </div>
        <hr class="x-clear">
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $('.wpcf7-form-control').click(function (e) {
            $(this).css('background', 'white');
        })
    });
    $('#query-submit').click(function (e) {
        key = true;
        var name = $('#names').val();
        var kname = $('#names').val().replace(/ /g, '');
        var email = $('#email').val();
        var kemail = $('#email').val().replace(/ /g, '');
        var subject = $('#subject').val();
        var ksubject = $('#subject').val().replace(/ /g, '');
        var message = $('#message').val();
        var kmessage = $('#message').val().replace(/ /g, '');
        if (kname == "") {
            key = false;
            $('#names').css('background', '#FE2E58')
        }
        if (kemail == "") {
            key = false;
            $('#email').css('background', '#FE2E58')
        }
        if (ksubject == "") {
            key = false;
            $('#subject').css('background', '#FE2E58')
        }
        if (kmessage == "") {
            key = false;
            $('#message').css('background', '#FE2E58')
        }
        if (key == true) {
            $('#query-submit').attr("disabled", "disabled");
            $.ajax({
                url: "welcome/send_email?name=" + name + "&email=" + email + "&subject=" + subject + "&message=" + message,
                type: 'POST',
                dataType: 'html',
                processData: false,
                success: function (e) {
                    $('#query-submit').removeAttr("disabled");
                    $('#succ').show();
                    $('#succ').html("Email Sent");
                    handshake(name, email);
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    $('#query-submit').removeAttr("disabled");
                    $('#err').hide();
                    $('#err').html("Sending Email Failed");
                }
            })
        }
    });
    function handshake(name, email) {
        var message = "Hi " + name + " ! We have received your query. We will get back to you within 24 Hours. Team: Smart Soft Studios";
        $.ajax({
            url: "welcome/send_notification?name=" + name + "&email=" + email + "&message=" + message,
            type: 'POST',
            dataType: 'html',
            processData: false,
            success: function (e) {

            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {

            }
        })
    }
</script>
<script>jQuery('.h-resp-main').fitText(1.0, { minFontSize: '36px', maxFontSize: '86px' });</script>
<script>jQuery('.p-resp-main').fitText(1.5, { minFontSize: '21px', maxFontSize: '32px' });</script>
<script>jQuery('.h-resp').fitText(0.65, { minFontSize: '36px', maxFontSize: '72px' });</script>
<script>jQuery('.p-resp').fitText(2.0, { minFontSize: '16px', maxFontSize: '21px' });</script>
<script>jQuery('.ul-resp').fitText(2.0, { minFontSize: '16px', maxFontSize: '21px' });</script>

</div>
<!-- end .entry-content -->
            <span class="visually-hidden"><span class="author vcard"><span class="fn">SmartSoftAdmin</span></span><span
                    class="entry-title">Homepage</span><time class="entry-date updated"
                                                             datetime="2013-05-30T09:49:06+00:00">05.30.2013
                </time></span></article>
<!-- end .hentry -->
</div>
<!-- end .x-main -->


<footer class="x-colophon bottom" role="contentinfo">
    <div class="x-container-fluid max width">


        <ul id="menu-scrolling-menu-1" class="x-nav">
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6706"><a
                    href="#x-content-band-1">Home</a></li>
            <li class="scroller menu-item menu-item-type-custom menu-item-object-custom menu-item-1889"><a
                    rel="1311" href="#x-content-band-2">Smart Soft</a></li>
            <li class="scroller menu-item menu-item-type-custom menu-item-object-custom menu-item-1890"><a
                    rel="1311" href="#x-content-band-3">Web Projects</a></li>
            <li class="scroller menu-item menu-item-type-custom menu-item-object-custom menu-item-1850"><a
                    rel="1311" href="#x-content-band-5">Mobile Apps</a></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6707"><a
                    href="#x-content-band-6">Contact Us</a></li>
        </ul>
        <div class="x-colophon-content">
            Smart Soft Studios, Inc. © 2014
        </div>

    </div>
    <!-- end .x-container-fluid.max.width -->
</footer>
<!-- end .x-colophon.bottom -->


</div>

<!--
END #top.site
-->


<?php echo HTML::script("media/js/scripts.js"); ?>
<?php echo HTML::script("media/js/hoverintent-7.0.0.min.js"); ?>
<?php echo HTML::script("media/js/superfish-1.5.1.min.js"); ?>
<?php echo HTML::script("media/js/scrollspy-mod.min.js"); ?>
<?php echo HTML::script("media/js/comment-reply.min.js"); ?>


<script type="text/javascript">
(function (e, t, n) {
    "use strict";
    e.fn.backstretch = function (r, s) {
        (r === n || r.length === 0) && e.error("No images were supplied for Backstretch");
        e(t).scrollTop() === 0 && t.scrollTo(0, 0);
        return this.each(function () {
            var t = e(this), n = t.data("backstretch");
            if (n) {
                if (typeof r == "string" && typeof n[r] == "function") {
                    n[r](s);
                    return
                }
                s = e.extend(n.options, s);
                n.destroy(!0)
            }
            n = new i(this, r, s);
            t.data("backstretch", n)
        })
    };
    e.backstretch = function (t, n) {
        return e("body").backstretch(t, n).data("backstretch")
    };
    e.expr[":"].backstretch = function (t) {
        return e(t).data("backstretch") !== n
    };
    e.fn.backstretch.defaults = {centeredX: !0, centeredY: !0, duration: 5e3, fade: 0};
    var r = {wrap: {left: 0, top: 0, overflow: "hidden", margin: 0, padding: 0, height: "100%", width: "100%", zIndex: -999999}, img: {position: "absolute", display: "none", margin: 0, padding: 0, border: "none", width: "auto", height: "auto", maxHeight: "none", maxWidth: "none", zIndex: -999999}}, i = function (n, i, o) {
        this.options = e.extend({}, e.fn.backstretch.defaults, o || {});
        this.images = e.isArray(i) ? i : [i];
        e.each(this.images, function () {
            e("<img />")[0].src = this
        });
        this.isBody = n === document.body;
        this.$container = e(n);
        this.$root = this.isBody ? s ? e(t) : e(document) : this.$container;
        var u = this.$container.children(".backstretch").first();
        this.$wrap = u.length ? u : e('<div class="backstretch"></div>').css(r.wrap).appendTo(this.$container);
        if (!this.isBody) {
            var a = this.$container.css("position"), f = this.$container.css("zIndex");
            this.$container.css({position: a === "static" ? "relative" : a, zIndex: f === "auto" ? 0 : f, background: "none"});
            this.$wrap.css({zIndex: -999998})
        }
        this.$wrap.css({position: this.isBody && s ? "fixed" : "absolute"});
        this.index = 0;
        this.show(this.index);
        e(t).on("resize.backstretch", e.proxy(this.resize, this)).on("orientationchange.backstretch", e.proxy(function () {
            if (this.isBody && t.pageYOffset === 0) {
                t.scrollTo(0, 1);
                this.resize()
            }
        }, this))
    };
    i.prototype = {resize: function () {
        try {
            var e = {left: 0, top: 0}, n = this.isBody ? this.$root.width() : this.$root.innerWidth(), r = n, i = this.isBody ? t.innerHeight ? t.innerHeight : this.$root.height() : this.$root.innerHeight(), s = r / this.$img.data("ratio"), o;
            if (s >= i) {
                o = (s - i) / 2;
                this.options.centeredY && (e.top = "-" + o + "px")
            } else {
                s = i;
                r = s * this.$img.data("ratio");
                o = (r - n) / 2;
                this.options.centeredX && (e.left = "-" + o + "px")
            }
            this.$wrap.css({width: n, height: i}).find("img:not(.deleteable)").css({width: r, height: s}).css(e)
        } catch (u) {
        }
        return this
    }, show: function (t) {
        if (Math.abs(t) > this.images.length - 1)return;
        var n = this, i = n.$wrap.find("img").addClass("deleteable"), s = {relatedTarget: n.$container[0]};
        n.$container.trigger(e.Event("backstretch.before", s), [n, t]);
        this.index = t;
        clearInterval(n.interval);
        n.$img = e("<img />").css(r.img).bind("load",function (r) {
            var o = this.width || e(r.target).width(), u = this.height || e(r.target).height();
            e(this).data("ratio", o / u);
            e(this).fadeIn(n.options.speed || n.options.fade, function () {
                i.remove();
                n.paused || n.cycle();
                e(["after", "show"]).each(function () {
                    n.$container.trigger(e.Event("backstretch." + this, s), [n, t])
                })
            });
            n.resize()
        }).appendTo(n.$wrap);
        n.$img.attr("src", n.images[t]);
        return n
    }, next: function () {
        return this.show(this.index < this.images.length - 1 ? this.index + 1 : 0)
    }, prev: function () {
        return this.show(this.index === 0 ? this.images.length - 1 : this.index - 1)
    }, pause: function () {
        this.paused = !0;
        return this
    }, resume: function () {
        this.paused = !1;
        this.next();
        return this
    }, cycle: function () {
        if (this.images.length > 1) {
            clearInterval(this.interval);
            this.interval = setInterval(e.proxy(function () {
                this.paused || this.next()
            }, this), this.options.duration)
        }
        return this
    }, destroy: function (n) {
        e(t).off("resize.backstretch orientationchange.backstretch");
        clearInterval(this.interval);
        n || this.$wrap.remove();
        this.$container.removeData("backstretch")
    }};
    var s = function () {
        var e = navigator.userAgent, n = navigator.platform, r = e.match(/AppleWebKit\/([0-9]+)/), i = !!r && r[1], s = e.match(/Fennec\/([0-9]+)/), o = !!s && s[1], u = e.match(/Opera Mobi\/([0-9]+)/), a = !!u && u[1], f = e.match(/MSIE ([0-9]+)/), l = !!f && f[1];
        return!((n.indexOf("iPhone") > -1 || n.indexOf("iPad") > -1 || n.indexOf("iPod") > -1) && i && i < 534 || t.operamini && {}.toString.call(t.operamini) === "[object OperaMini]" || u && a < 7458 || e.indexOf("Android") > -1 && i && i < 533 || o && o < 6 || "palmGetResource"in t && i && i < 534 || e.indexOf("MeeGo") > -1 && e.indexOf("NokiaBrowser/8.5.0") > -1 || l && l <= 6)
    }()
})(jQuery, window);
window.Modernizr = function (e, t, n) {
    function C(e) {
        f.cssText = e
    }

    function k(e, t) {
        return C(h.join(e + ";") + (t || ""))
    }

    function L(e, t) {
        return typeof e === t
    }

    function A(e, t) {
        return!!~("" + e).indexOf(t)
    }

    function O(e, t) {
        for (var r in e) {
            var i = e[r];
            if (!A(i, "-") && f[i] !== n)return t == "pfx" ? i : !0
        }
        return!1
    }

    function M(e, t, r) {
        for (var i in e) {
            var s = t[e[i]];
            if (s !== n)return r === !1 ? e[i] : L(s, "function") ? s.bind(r || t) : s
        }
        return!1
    }

    function _(e, t, n) {
        var r = e.charAt(0).toUpperCase() + e.slice(1), i = (e + " " + d.join(r + " ") + r).split(" ");
        if (L(t, "string") || L(t, "undefined"))return O(i, t);
        i = (e + " " + v.join(r + " ") + r).split(" ");
        return M(i, t, n)
    }

    var r = "2.8.0", i = {}, s = !0, o = t.documentElement, u = "modernizr", a = t.createElement(u), f = a.style, l, c = {}.toString, h = " -webkit- -moz- -o- -ms- ".split(" "), p = "Webkit Moz O ms", d = p.split(" "), v = p.toLowerCase().split(" "), m = {}, g = {}, y = {}, b = [], w = b.slice, E, S = function (e, n, r, i) {
        var s, a, f, l, c = t.createElement("div"), h = t.body, p = h || t.createElement("body");
        if (parseInt(r, 10))while (r--) {
            f = t.createElement("div");
            f.id = i ? i[r] : u + (r + 1);
            c.appendChild(f)
        }
        s = ["&#173;", '<style id="s', u, '">', e, "</style>"].join("");
        c.id = u;
        (h ? c : p).innerHTML += s;
        p.appendChild(c);
        if (!h) {
            p.style.background = "";
            p.style.overflow = "hidden";
            l = o.style.overflow;
            o.style.overflow = "hidden";
            o.appendChild(p)
        }
        a = n(c, e);
        if (!h) {
            p.parentNode.removeChild(p);
            o.style.overflow = l
        } else c.parentNode.removeChild(c);
        return!!a
    }, x = function () {
        function r(r, i) {
            i = i || t.createElement(e[r] || "div");
            r = "on" + r;
            var s = r in i;
            if (!s) {
                i.setAttribute || (i = t.createElement("div"));
                if (i.setAttribute && i.removeAttribute) {
                    i.setAttribute(r, "");
                    s = L(i[r], "function");
                    L(i[r], "undefined") || (i[r] = n);
                    i.removeAttribute(r)
                }
            }
            i = null;
            return s
        }

        var e = {select: "input", change: "input", submit: "form", reset: "form", error: "img", load: "img", abort: "img"};
        return r
    }(), T = {}.hasOwnProperty, N;
    !L(T, "undefined") && !L(T.call, "undefined") ? N = function (e, t) {
        return T.call(e, t)
    } : N = function (e, t) {
        return t in e && L(e.constructor.prototype[t], "undefined")
    };
    Function.prototype.bind || (Function.prototype.bind = function (t) {
        var n = this;
        if (typeof n != "function")throw new TypeError;
        var r = w.call(arguments, 1), i = function () {
            if (this instanceof i) {
                var e = function () {
                };
                e.prototype = n.prototype;
                var s = new e, o = n.apply(s, r.concat(w.call(arguments)));
                return Object(o) === o ? o : s
            }
            return n.apply(t, r.concat(w.call(arguments)))
        };
        return i
    });
    m.touch = function () {
        var n;
        "ontouchstart"in e || e.DocumentTouch && t instanceof DocumentTouch ? n = !0 : S(["@media (", h.join("touch-enabled),("), u, ")", "{#modernizr{top:9px;position:absolute}}"].join(""), function (e) {
            n = e.offsetTop === 9
        });
        return n
    };
    m.cssanimations = function () {
        return _("animationName")
    };
    m.csstransforms = function () {
        return!!_("transform")
    };
    m.csstransforms3d = function () {
        var e = !!_("perspective");
        e && "webkitPerspective"in o.style && S("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}", function (t, n) {
            e = t.offsetLeft === 9 && t.offsetHeight === 3
        });
        return e
    };
    m.csstransitions = function () {
        return _("transition")
    };
    for (var D in m)if (N(m, D)) {
        E = D.toLowerCase();
        i[E] = m[D]();
        b.push((i[E] ? "" : "no-") + E)
    }
    i.addTest = function (e, t) {
        if (typeof e == "object")for (var r in e)N(e, r) && i.addTest(r, e[r]); else {
            e = e.toLowerCase();
            if (i[e] !== n)return i;
            t = typeof t == "function" ? t() : t;
            typeof s != "undefined" && s && (o.className += " " + (t ? "" : "no-") + e);
            i[e] = t
        }
        return i
    };
    C("");
    a = l = null;
    i._version = r;
    i._prefixes = h;
    i._domPrefixes = v;
    i._cssomPrefixes = d;
    i.hasEvent = x;
    i.testProp = function (e) {
        return O([e])
    };
    i.testAllProps = _;
    i.testStyles = S;
    i.prefixed = function (e, t, n) {
        return t ? _(e, t, n) : _(e, "pfx")
    };
    o.className = o.className.replace(/(^|\s)no-js(\s|$)/, "$1$2") + (s ? " js " + b.join(" ") : "");
    return i
}(this, this.document);
(function (e, t, n) {
    function r(e) {
        return"[object Function]" == d.call(e)
    }

    function i(e) {
        return"string" == typeof e
    }

    function s() {
    }

    function o(e) {
        return!e || "loaded" == e || "complete" == e || "uninitialized" == e
    }

    function u() {
        var e = v.shift();
        m = 1, e ? e.t ? h(function () {
            ("c" == e.t ? k.injectCss : k.injectJs)(e.s, 0, e.a, e.x, e.e, 1)
        }, 0) : (e(), u()) : m = 0
    }

    function a(e, n, r, i, s, a, f) {
        function l(t) {
            if (!d && o(c.readyState) && (w.r = d = 1, !m && u(), c.onload = c.onreadystatechange = null, t)) {
                "img" != e && h(function () {
                    b.removeChild(c)
                }, 50);
                for (var r in T[n])T[n].hasOwnProperty(r) && T[n][r].onload()
            }
        }

        var f = f || k.errorTimeout, c = t.createElement(e), d = 0, g = 0, w = {t: r, s: n, e: s, a: a, x: f};
        1 === T[n] && (g = 1, T[n] = []), "object" == e ? c.data = n : (c.src = n, c.type = e), c.width = c.height = "0", c.onerror = c.onload = c.onreadystatechange = function () {
            l.call(this, g)
        }, v.splice(i, 0, w), "img" != e && (g || 2 === T[n] ? (b.insertBefore(c, y ? null : p), h(l, f)) : T[n].push(c))
    }

    function f(e, t, n, r, s) {
        return m = 0, t = t || "j", i(e) ? a("c" == t ? E : w, e, t, this.i++, n, r, s) : (v.splice(this.i++, 0, e), 1 == v.length && u()), this
    }

    function l() {
        var e = k;
        return e.loader = {load: f, i: 0}, e
    }

    var c = t.documentElement, h = e.setTimeout, p = t.getElementsByTagName("script")[0], d = {}.toString, v = [], m = 0, g = "MozAppearance"in c.style, y = g && !!t.createRange().compareNode, b = y ? c : p.parentNode, c = e.opera && "[object Opera]" == d.call(e.opera), c = !!t.attachEvent && !c, w = g ? "object" : c ? "script" : "img", E = c ? "script" : w, S = Array.isArray || function (e) {
        return"[object Array]" == d.call(e)
    }, x = [], T = {}, N = {timeout: function (e, t) {
        return t.length && (e.timeout = t[0]), e
    }}, C, k;
    k = function (e) {
        function t(e) {
            var e = e.split("!"), t = x.length, n = e.pop(), r = e.length, n = {url: n, origUrl: n, prefixes: e}, i, s, o;
            for (s = 0; s < r; s++)o = e[s].split("="), (i = N[o.shift()]) && (n = i(n, o));
            for (s = 0; s < t; s++)n = x[s](n);
            return n
        }

        function o(e, i, s, o, u) {
            var a = t(e), f = a.autoCallback;
            a.url.split(".").pop().split("?").shift(), a.bypass || (i && (i = r(i) ? i : i[e] || i[o] || i[e.split("/").pop().split("?")[0]]), a.instead ? a.instead(e, i, s, o, u) : (T[a.url] ? a.noexec = !0 : T[a.url] = 1, s.load(a.url, a.forceCSS || !a.forceJS && "css" == a.url.split(".").pop().split("?").shift() ? "c" : n, a.noexec, a.attrs, a.timeout), (r(i) || r(f)) && s.load(function () {
                l(), i && i(a.origUrl, u, o), f && f(a.origUrl, u, o), T[a.url] = 2
            })))
        }

        function u(e, t) {
            function n(e, n) {
                if (e) {
                    if (i(e))n || (f = function () {
                        var e = [].slice.call(arguments);
                        l.apply(this, e), c()
                    }), o(e, f, t, 0, u); else if (Object(e) === e)for (p in h = function () {
                        var t = 0, n;
                        for (n in e)e.hasOwnProperty(n) && t++;
                        return t
                    }(), e)e.hasOwnProperty(p) && (!n && !--h && (r(f) ? f = function () {
                        var e = [].slice.call(arguments);
                        l.apply(this, e), c()
                    } : f[p] = function (e) {
                        return function () {
                            var t = [].slice.call(arguments);
                            e && e.apply(this, t), c()
                        }
                    }(l[p])), o(e[p], f, t, p, u))
                } else!n && c()
            }

            var u = !!e.test, a = e.load || e.both, f = e.callback || s, l = f, c = e.complete || s, h, p;
            n(u ? e.yep : e.nope, !!a), a && n(a)
        }

        var a, f, c = this.yepnope.loader;
        if (i(e))o(e, 0, c, 0); else if (S(e))for (a = 0; a < e.length; a++)f = e[a], i(f) ? o(f, 0, c, 0) : S(f) ? k(f) : Object(f) === f && u(f, c); else Object(e) === e && u(e, c)
    }, k.addPrefix = function (e, t) {
        N[e] = t
    }, k.addFilter = function (e) {
        x.push(e)
    }, k.errorTimeout = 1e4, null == t.readyState && t.addEventListener && (t.readyState = "loading", t.addEventListener("DOMContentLoaded", C = function () {
        t.removeEventListener("DOMContentLoaded", C, 0), t.readyState = "complete"
    }, 0)), e.yepnope = l(), e.yepnope.executeStack = u, e.yepnope.injectJs = function (e, n, r, i, a, f) {
        var l = t.createElement("script"), c, d, i = i || k.errorTimeout;
        l.src = e;
        for (d in r)l.setAttribute(d, r[d]);
        n = f ? u : n || s, l.onreadystatechange = l.onload = function () {
            !c && o(l.readyState) && (c = 1, n(), l.onload = l.onreadystatechange = null)
        }, h(function () {
            c || (c = 1, n(1))
        }, i), a ? l.onload() : p.parentNode.insertBefore(l, p)
    }, e.yepnope.injectCss = function (e, n, r, i, o, a) {
        var i = t.createElement("link"), f, n = a ? u : n || s;
        i.href = e, i.rel = "stylesheet", i.type = "text/css";
        for (f in r)i.setAttribute(f, r[f]);
        o || (p.parentNode.insertBefore(i, p), h(n, 0))
    }
})(this, document);
Modernizr.load = function () {
    yepnope.apply(window, [].slice.call(arguments, 0))
};
(function (e) {
    e.fn.fitText = function (t, n) {
        var r = t || 1, i = e.extend({minFontSize: Number.NEGATIVE_INFINITY, maxFontSize: Number.POSITIVE_INFINITY}, n);
        return this.each(function () {
            var t = e(this), n = function () {
                t.css("font-size", Math.max(Math.min(t.width() / (r * 10), parseFloat(i.maxFontSize)), parseFloat(i.minFontSize)))
            };
            n();
            e(window).on("resize.fittext orientationchange.fittext", n)
        })
    }
})(jQuery);
(function (e) {
    "use strict";
    typeof define == "function" && define.amd ? define(["jquery"], e) : e(jQuery)
})(function (e) {
    "use strict";
    var t = window.Slick || {};
    t = function () {
        function n(n, r) {
            var i = this, s, o;
            i.defaults = {accessibility: !0, arrows: !0, autoplay: !1, autoplaySpeed: 3e3, centerMode: !1, centerPadding: "50px", cssEase: "ease", customPaging: function (e, t) {
                return'<button type="button">' + (t + 1) + "</button>"
            }, dots: !1, draggable: !0, easing: "linear", fade: !1, infinite: !0, lazyLoad: "ondemand", onBeforeChange: null, onAfterChange: null, onInit: null, onReInit: null, pauseOnHover: !0, responsive: null, slide: "div", slidesToShow: 1, slidesToScroll: 1, speed: 300, swipe: !0, touchMove: !0, touchThreshold: 5, useCSS: !0, vertical: !1};
            i.initials = {animating: !1, autoPlayTimer: null, currentSlide: 0, currentLeft: null, direction: 1, $dots: null, listWidth: null, listHeight: null, loadIndex: 0, $nextArrow: null, $prevArrow: null, slideCount: null, slideWidth: null, $slideTrack: null, $slides: null, sliding: !1, slideOffset: 0, swipeLeft: null, $list: null, touchObject: {}, transformsEnabled: !1};
            e.extend(i, i.initials);
            i.activeBreakpoint = null;
            i.animType = null;
            i.animProp = null;
            i.breakpoints = [];
            i.breakpointSettings = [];
            i.cssTransitions = !1;
            i.paused = !1;
            i.positionProp = null;
            i.$slider = e(n);
            i.$slidesCache = null;
            i.transformType = null;
            i.transitionType = null;
            i.windowWidth = 0;
            i.windowTimer = null;
            i.options = e.extend({}, i.defaults, r);
            i.originalSettings = i.options;
            s = i.options.responsive || null;
            if (s && s.length > -1) {
                for (o in s)if (s.hasOwnProperty(o)) {
                    i.breakpoints.push(s[o].breakpoint);
                    i.breakpointSettings[s[o].breakpoint] = s[o].settings
                }
                i.breakpoints.sort(function (e, t) {
                    return t - e
                })
            }
            i.autoPlay = e.proxy(i.autoPlay, i);
            i.autoPlayClear = e.proxy(i.autoPlayClear, i);
            i.changeSlide = e.proxy(i.changeSlide, i);
            i.setPosition = e.proxy(i.setPosition, i);
            i.swipeHandler = e.proxy(i.swipeHandler, i);
            i.dragHandler = e.proxy(i.dragHandler, i);
            i.keyHandler = e.proxy(i.keyHandler, i);
            i.autoPlayIterator = e.proxy(i.autoPlayIterator, i);
            i.instanceUid = t++;
            i.init()
        }

        var t = 0;
        return n
    }();
    t.prototype.addSlide = function (t, n, r) {
        var i = this;
        if (typeof n == "boolean") {
            r = n;
            n = null
        } else if (n < 0 || n >= i.slideCount)return!1;
        i.unload();
        typeof n == "number" ? n === 0 && i.$slides.length === 0 ? e(t).appendTo(i.$slideTrack) : r ? e(t).insertBefore(i.$slides.eq(n)) : e(t).insertAfter(i.$slides.eq(n)) : r === !0 ? e(t).prependTo(i.$slideTrack) : e(t).appendTo(i.$slideTrack);
        i.$slides = i.$slideTrack.children(this.options.slide);
        i.$slideTrack.children(this.options.slide).remove();
        i.$slideTrack.append(i.$slides);
        i.$slidesCache = i.$slides;
        i.reinit()
    };
    t.prototype.animateSlide = function (t, n) {
        var r = {}, i = this;
        if (i.transformsEnabled === !1)i.options.vertical === !1 ? i.$slideTrack.animate({left: t}, i.options.speed, i.options.easing, n) : i.$slideTrack.animate({top: t}, i.options.speed, i.options.easing, n); else if (i.cssTransitions === !1)e({animStart: i.currentLeft}).animate({animStart: t}, {duration: i.options.speed, easing: i.options.easing, step: function (e) {
            if (i.options.vertical === !1) {
                r[i.animType] = "translate(" + e + "px, 0px)";
                i.$slideTrack.css(r)
            } else {
                r[i.animType] = "translate(0px," + e + "px)";
                i.$slideTrack.css(r)
            }
        }, complete: function () {
            n && n.call()
        }}); else {
            i.applyTransition();
            i.options.vertical === !1 ? r[i.animType] = "translate3d(" + t + "px, 0px, 0px)" : r[i.animType] = "translate3d(0px," + t + "px, 0px)";
            i.$slideTrack.css(r);
            n && setTimeout(function () {
                i.disableTransition();
                n.call()
            }, i.options.speed)
        }
    };
    t.prototype.applyTransition = function (e) {
        var t = this, n = {};
        t.options.fade === !1 ? n[t.transitionType] = t.transformType + " " + t.options.speed + "ms " + t.options.cssEase : n[t.transitionType] = "opacity " + t.options.speed + "ms " + t.options.cssEase;
        t.options.fade === !1 ? t.$slideTrack.css(n) : t.$slides.eq(e).css(n)
    };
    t.prototype.autoPlay = function () {
        var e = this;
        e.autoPlayTimer && clearInterval(e.autoPlayTimer);
        e.slideCount > e.options.slidesToShow && e.paused !== !0 && (e.autoPlayTimer = setInterval(e.autoPlayIterator, e.options.autoplaySpeed))
    };
    t.prototype.autoPlayClear = function () {
        var e = this;
        e.autoPlayTimer && clearInterval(e.autoPlayTimer)
    };
    t.prototype.autoPlayIterator = function () {
        var e = this;
        if (e.options.infinite === !1)if (e.direction === 1) {
            e.currentSlide + 1 === e.slideCount - 1 && (e.direction = 0);
            e.slideHandler(e.currentSlide + e.options.slidesToScroll)
        } else {
            e.currentSlide - 1 === 0 && (e.direction = 1);
            e.slideHandler(e.currentSlide - e.options.slidesToScroll)
        } else e.slideHandler(e.currentSlide + e.options.slidesToScroll)
    };
    t.prototype.buildArrows = function () {
        var t = this;
        if (t.options.arrows === !0 && t.slideCount > t.options.slidesToShow) {
            t.$prevArrow = e('<button type="button" class="slick-prev">Previous</button>').appendTo(t.$slider);
            t.$nextArrow = e('<button type="button" class="slick-next">Next</button>').appendTo(t.$slider);
            t.options.infinite !== !0 && t.$prevArrow.addClass("slick-disabled")
        }
    };
    t.prototype.buildDots = function () {
        var t = this, n, r;
        if (t.options.dots === !0 && t.slideCount > t.options.slidesToShow) {
            r = '<ul class="slick-dots">';
            for (n = 0; n <= t.getDotCount(); n += 1)r += "<li>" + t.options.customPaging.call(this, t, n) + "</li>";
            r += "</ul>";
            t.$dots = e(r).appendTo(t.$slider);
            t.$dots.find("li").first().addClass("slick-active")
        }
    };
    t.prototype.buildOut = function () {
        var t = this;
        t.$slides = t.$slider.children(t.options.slide + ":not(.slick-cloned)").addClass("slick-slide");
        t.slideCount = t.$slides.length;
        t.$slidesCache = t.$slides;
        t.$slider.addClass("slick-slider");
        t.$slideTrack = t.slideCount === 0 ? e('<div class="slick-track"/>').appendTo(t.$slider) : t.$slides.wrapAll('<div class="slick-track"/>').parent();
        t.$list = t.$slideTrack.wrap('<div class="slick-list"/>').parent();
        t.$slideTrack.css("opacity", 0);
        if (t.options.centerMode === !0) {
            t.options.infinite = !0;
            t.options.slidesToScroll = 1;
            t.options.slidesToShow % 2 === 0 && (t.options.slidesToShow = 3)
        }
        e("img[data-lazy]", t.$slider).not("[src]").addClass("slick-loading");
        t.setupInfinite();
        t.buildArrows();
        t.buildDots();
        t.options.accessibility === !0 && t.$list.prop("tabIndex", 0);
        t.setSlideClasses(0);
        t.options.draggable === !0 && t.$list.addClass("draggable")
    };
    t.prototype.checkResponsive = function () {
        var t = this, n, r;
        if (t.originalSettings.responsive && t.originalSettings.responsive.length > -1 && t.originalSettings.responsive !== null) {
            r = null;
            for (n in t.breakpoints)t.breakpoints.hasOwnProperty(n) && e(window).width() < t.breakpoints[n] && (r = t.breakpoints[n]);
            if (r !== null)if (t.activeBreakpoint !== null) {
                if (r !== t.activeBreakpoint) {
                    t.activeBreakpoint = r;
                    t.options = e.extend({}, t.defaults, t.breakpointSettings[r]);
                    t.refresh()
                }
            } else {
                t.activeBreakpoint = r;
                t.options = e.extend({}, t.defaults, t.breakpointSettings[r]);
                t.refresh()
            } else if (t.activeBreakpoint !== null) {
                t.activeBreakpoint = null;
                t.options = e.extend({}, t.defaults, t.originalSettings);
                t.refresh()
            }
        }
    };
    t.prototype.changeSlide = function (t) {
        var n = this;
        switch (t.data.message) {
            case"previous":
                n.slideHandler(n.currentSlide - n.options.slidesToScroll);
                break;
            case"next":
                n.slideHandler(n.currentSlide + n.options.slidesToScroll);
                break;
            case"index":
                n.slideHandler(e(t.target).parent().index() * n.options.slidesToScroll);
                break;
            default:
                return!1
        }
    };
    t.prototype.destroy = function () {
        var t = this;
        t.autoPlayClear();
        t.touchObject = {};
        e(".slick-cloned", t.$slider).remove();
        t.$dots && t.$dots.remove();
        if (t.$prevArrow) {
            t.$prevArrow.remove();
            t.$nextArrow.remove()
        }
        t.$slides.unwrap().unwrap();
        t.$slides.removeClass("slick-slide slick-active slick-visible").removeAttr("style");
        t.$slider.removeClass("slick-slider");
        t.$slider.removeClass("slick-initialized");
        t.$list.off(".slick");
        e(window).off(".slick-" + t.instanceUid)
    };
    t.prototype.disableTransition = function (e) {
        var t = this, n = {};
        n[t.transitionType] = "";
        t.options.fade === !1 ? t.$slideTrack.css(n) : t.$slides.eq(e).css(n)
    };
    t.prototype.fadeSlide = function (e, t) {
        var n = this;
        if (n.cssTransitions === !1) {
            n.$slides.eq(e).css({zIndex: 1e3});
            n.$slides.eq(e).animate({opacity: 1}, n.options.speed, n.options.easing, t)
        } else {
            n.applyTransition(e);
            n.$slides.eq(e).css({opacity: 1, zIndex: 1e3});
            t && setTimeout(function () {
                n.disableTransition(e);
                t.call()
            }, n.options.speed)
        }
    };
    t.prototype.filterSlides = function (e) {
        var t = this;
        if (e !== null) {
            t.unload();
            t.$slideTrack.children(this.options.slide).remove();
            t.$slidesCache.filter(e).appendTo(t.$slideTrack);
            t.reinit()
        }
    };
    t.prototype.getCurrent = function () {
        var e = this;
        return e.currentSlide
    };
    t.prototype.getDotCount = function () {
        var e = this, t = 0, n = 0, r = 0, i;
        i = e.options.infinite === !0 ? e.slideCount + e.options.slidesToShow - e.options.slidesToScroll : e.slideCount;
        while (t < i) {
            r++;
            n += e.options.slidesToScroll;
            t = n + e.options.slidesToShow
        }
        return r
    };
    t.prototype.getLeft = function (e) {
        var t = this, n, r, i = 0;
        t.slideOffset = 0;
        r = t.$slides.first().outerHeight();
        if (t.options.infinite === !0) {
            if (t.slideCount > t.options.slidesToShow) {
                t.slideOffset = t.slideWidth * t.options.slidesToShow * -1;
                i = r * t.options.slidesToShow * -1
            }
            if (t.slideCount % t.options.slidesToScroll !== 0 && e + t.options.slidesToScroll > t.slideCount && t.slideCount > t.options.slidesToShow) {
                t.slideOffset = t.slideCount % t.options.slidesToShow * t.slideWidth * -1;
                i = t.slideCount % t.options.slidesToShow * r * -1
            }
        } else if (t.slideCount % t.options.slidesToShow !== 0 && e + t.options.slidesToScroll > t.slideCount && t.slideCount > t.options.slidesToShow) {
            t.slideOffset = t.options.slidesToShow * t.slideWidth - t.slideCount % t.options.slidesToShow * t.slideWidth;
            i = t.slideCount % t.options.slidesToShow * r
        }
        t.options.centerMode === !0 && (t.slideOffset += t.slideWidth * Math.floor(t.options.slidesToShow / 2) - t.slideWidth);
        t.options.vertical === !1 ? n = e * t.slideWidth * -1 + t.slideOffset : n = e * r * -1 + i;
        return n
    };
    t.prototype.init = function () {
        var t = this;
        if (!e(t.$slider).hasClass("slick-initialized")) {
            e(t.$slider).addClass("slick-initialized");
            t.buildOut();
            t.setProps();
            t.startLoad();
            t.loadSlider();
            t.initializeEvents();
            t.checkResponsive()
        }
        t.options.onInit !== null && t.options.onInit.call(this, t)
    };
    t.prototype.initArrowEvents = function () {
        var e = this;
        if (e.options.arrows === !0 && e.slideCount > e.options.slidesToShow) {
            e.$prevArrow.on("click.slick", {message: "previous"}, e.changeSlide);
            e.$nextArrow.on("click.slick", {message: "next"}, e.changeSlide)
        }
    };
    t.prototype.initDotEvents = function () {
        var t = this;
        t.options.dots === !0 && t.slideCount > t.options.slidesToShow && e("li", t.$dots).on("click.slick", {message: "index"}, t.changeSlide)
    };
    t.prototype.initializeEvents = function () {
        var t = this;
        t.initArrowEvents();
        t.initDotEvents();
        t.$list.on("touchstart.slick mousedown.slick", {action: "start"}, t.swipeHandler);
        t.$list.on("touchmove.slick mousemove.slick", {action: "move"}, t.swipeHandler);
        t.$list.on("touchend.slick mouseup.slick", {action: "end"}, t.swipeHandler);
        t.$list.on("touchcancel.slick mouseleave.slick", {action: "end"}, t.swipeHandler);
        if (t.options.pauseOnHover === !0 && t.options.autoplay === !0) {
            t.$list.on("mouseenter.slick", t.autoPlayClear);
            t.$list.on("mouseleave.slick", t.autoPlay)
        }
        t.options.accessibility === !0 && t.$list.on("keydown.slick", t.keyHandler);
        e(window).on("orientationchange.slick.slick-" + t.instanceUid, function () {
            t.checkResponsive();
            t.setPosition()
        });
        e(window).on("resize.slick.slick-" + t.instanceUid, function () {
            if (e(window).width !== t.windowWidth) {
                clearTimeout(t.windowDelay);
                t.windowDelay = window.setTimeout(function () {
                    t.windowWidth = e(window).width();
                    t.checkResponsive();
                    t.setPosition()
                }, 50)
            }
        });
        e(window).on("load.slick.slick-" + t.instanceUid, t.setPosition)
    };
    t.prototype.initUI = function () {
        var e = this;
        if (e.options.arrows === !0 && e.slideCount > e.options.slidesToShow) {
            e.$prevArrow.show();
            e.$nextArrow.show()
        }
        e.options.dots === !0 && e.slideCount > e.options.slidesToShow && e.$dots.show();
        e.options.autoplay === !0 && e.autoPlay()
    };
    t.prototype.keyHandler = function (e) {
        var t = this;
        e.keyCode === 37 ? t.changeSlide({data: {message: "previous"}}) : e.keyCode === 39 && t.changeSlide({data: {message: "next"}})
    };
    t.prototype.lazyLoad = function () {
        var t = this, n, r, i, s;
        if (t.options.centerMode === !0) {
            i = t.options.slidesToShow + t.currentSlide - 1;
            s = i + t.options.slidesToShow + 2
        } else {
            i = t.options.infinite ? t.options.slidesToShow + t.currentSlide : t.currentSlide;
            s = i + t.options.slidesToShow
        }
        n = t.$slider.find(".slick-slide").slice(i, s);
        e("img[data-lazy]", n).not("[src]").each(function () {
            e(this).css({opacity: 0}).attr("src", e(this).attr("data-lazy")).removeClass("slick-loading").load(function () {
                e(this).animate({opacity: 1}, 200)
            })
        });
        if (t.currentSlide >= t.slideCount - t.options.slidesToShow) {
            r = t.$slider.find(".slick-cloned").slice(0, t.options.slidesToShow);
            e("img[data-lazy]", r).not("[src]").each(function () {
                e(this).css({opacity: 0}).attr("src", e(this).attr("data-lazy")).removeClass("slick-loading").load(function () {
                    e(this).animate({opacity: 1}, 200)
                })
            })
        } else if (t.currentSlide === 0) {
            r = t.$slider.find(".slick-cloned").slice(t.options.slidesToShow * -1);
            e("img[data-lazy]", r).not("[src]").each(function () {
                e(this).css({opacity: 0}).attr("src", e(this).attr("data-lazy")).removeClass("slick-loading").load(function () {
                    e(this).animate({opacity: 1}, 200)
                })
            })
        }
    };
    t.prototype.loadSlider = function () {
        var e = this;
        e.setPosition();
        e.$slideTrack.css({opacity: 1});
        e.$slider.removeClass("slick-loading");
        e.initUI();
        e.options.lazyLoad === "progressive" && e.progressiveLazyLoad()
    };
    t.prototype.postSlide = function (e) {
        var t = this;
        t.options.onAfterChange !== null && t.options.onAfterChange.call(this, t, e);
        t.animating = !1;
        t.setPosition();
        t.swipeLeft = null;
        t.options.autoplay === !0 && t.paused === !1 && t.autoPlay()
    };
    t.prototype.progressiveLazyLoad = function () {
        var t = this, n, r;
        n = e("img[data-lazy]").not("[src]").length;
        if (n > 0) {
            r = e(e("img[data-lazy]", t.$slider).not("[src]").get(0));
            r.attr("src", r.attr("data-lazy")).removeClass("slick-loading").load(function () {
                t.progressiveLazyLoad()
            })
        }
    };
    t.prototype.refresh = function () {
        var t = this;
        t.destroy();
        e.extend(t, t.initials);
        t.init()
    };
    t.prototype.reinit = function () {
        var e = this;
        e.$slides = e.$slideTrack.children(e.options.slide).addClass("slick-slide");
        e.slideCount = e.$slides.length;
        e.currentSlide >= e.slideCount && e.currentSlide !== 0 && (e.currentSlide = e.currentSlide - e.options.slidesToScroll);
        e.setProps();
        e.setupInfinite();
        e.buildArrows();
        e.updateArrows();
        e.initArrowEvents();
        e.buildDots();
        e.updateDots();
        e.initDotEvents();
        e.setSlideClasses(0);
        e.setPosition();
        e.options.onReInit !== null && e.options.onReInit.call(this, e)
    };
    t.prototype.removeSlide = function (e, t) {
        var n = this;
        if (typeof e == "boolean") {
            t = e;
            e = t === !0 ? 0 : n.slideCount - 1
        } else e = t === !0 ? --e : e;
        if (n.slideCount < 1 || e < 0 || e > n.slideCount - 1)return!1;
        n.unload();
        n.$slideTrack.children(this.options.slide).eq(e).remove();
        n.$slides = n.$slideTrack.children(this.options.slide);
        n.$slideTrack.children(this.options.slide).remove();
        n.$slideTrack.append(n.$slides);
        n.$slidesCache = n.$slides;
        n.reinit()
    };
    t.prototype.setCSS = function (e) {
        var t = this, n = {}, r, i;
        r = t.positionProp == "left" ? e + "px" : "0px";
        i = t.positionProp == "top" ? e + "px" : "0px";
        n[t.positionProp] = e;
        if (t.transformsEnabled === !1)t.$slideTrack.css(n); else {
            n = {};
            if (t.cssTransitions === !1) {
                n[t.animType] = "translate(" + r + ", " + i + ")";
                t.$slideTrack.css(n)
            } else {
                n[t.animType] = "translate3d(" + r + ", " + i + ", 0px)";
                t.$slideTrack.css(n)
            }
        }
    };
    t.prototype.setDimensions = function () {
        var e = this;
        e.options.centerMode === !0 ? e.$slideTrack.children(".slick-slide").width(e.slideWidth) : e.$slideTrack.children(".slick-slide").width(e.slideWidth);
        if (e.options.vertical === !1) {
            e.$slideTrack.width(Math.ceil(e.slideWidth * e.$slideTrack.children(".slick-slide").length));
            e.options.centerMode === !0 && e.$list.css({padding: "0px " + e.options.centerPadding})
        } else {
            e.$list.height(e.$slides.first().outerHeight() * e.options.slidesToShow);
            e.$slideTrack.height(Math.ceil(e.$slides.first().outerHeight() * e.$slideTrack.children(".slick-slide").length));
            e.options.centerMode === !0 && e.$list.css({padding: e.options.centerPadding + " 0px"})
        }
    };
    t.prototype.setFade = function () {
        var t = this, n;
        t.$slides.each(function (r, i) {
            n = t.slideWidth * r * -1;
            e(i).css({position: "relative", left: n, top: 0, zIndex: 800, opacity: 0})
        });
        t.$slides.eq(t.currentSlide).css({zIndex: 900, opacity: 1})
    };
    t.prototype.setPosition = function () {
        var e = this;
        e.setValues();
        e.setDimensions();
        e.options.fade === !1 ? e.setCSS(e.getLeft(e.currentSlide)) : e.setFade()
    };
    t.prototype.setProps = function () {
        var e = this;
        e.positionProp = e.options.vertical === !0 ? "top" : "left";
        e.positionProp === "top" ? e.$slider.addClass("slick-vertical") : e.$slider.removeClass("slick-vertical");
        (document.body.style.WebkitTransition !== undefined || document.body.style.MozTransition !== undefined || document.body.style.msTransition !== undefined) && e.options.useCSS === !0 && (e.cssTransitions = !0);
        if (document.body.style.MozTransform !== undefined) {
            e.animType = "MozTransform";
            e.transformType = "-moz-transform";
            e.transitionType = "MozTransition"
        }
        if (document.body.style.webkitTransform !== undefined) {
            e.animType = "webkitTransform";
            e.transformType = "-webkit-transform";
            e.transitionType = "webkitTransition"
        }
        if (document.body.style.msTransform !== undefined) {
            e.animType = "transform";
            e.transformType = "transform";
            e.transitionType = "transition"
        }
        e.transformsEnabled = e.animType !== null
    };
    t.prototype.setValues = function () {
        var e = this;
        e.listWidth = e.$list.width();
        e.listHeight = e.$list.height();
        e.options.vertical === !1 ? e.slideWidth = Math.ceil(e.listWidth / e.options.slidesToShow) : e.slideWidth = Math.ceil(e.listWidth)
    };
    t.prototype.setSlideClasses = function (e) {
        var t = this, n, r, i;
        t.$slider.find(".slick-slide").removeClass("slick-active").removeClass("slick-center");
        r = t.$slider.find(".slick-slide");
        if (t.options.centerMode === !0) {
            n = Math.floor(t.options.slidesToShow / 2);
            if (e >= n && e <= t.slideCount - 1 - n)t.$slides.slice(e - n, e + n + 1).addClass("slick-active"); else {
                i = t.options.slidesToShow + e;
                r.slice(i - n + 1, i + n + 2).addClass("slick-active")
            }
            e === 0 ? r.eq(r.length - 1 - t.options.slidesToShow).addClass("slick-center") : e === t.slideCount - 1 && r.eq(t.options.slidesToShow).addClass("slick-center");
            t.$slides.eq(e).addClass("slick-center")
        } else if (e > 0 && e < t.slideCount - t.options.slidesToShow)t.$slides.slice(e, e + t.options.slidesToShow).addClass("slick-active"); else {
            i = t.options.infinite === !0 ? t.options.slidesToShow + e : e;
            r.slice(i, i + t.options.slidesToShow).addClass("slick-active")
        }
        t.options.lazyLoad === "ondemand" && t.lazyLoad()
    };
    t.prototype.setupInfinite = function () {
        var t = this, n, r, i;
        if (t.options.fade === !0 || t.options.vertical === !0)t.options.centerMode = !1;
        if (t.options.infinite === !0 && t.options.fade === !1) {
            r = null;
            if (t.slideCount > t.options.slidesToShow) {
                t.options.centerMode === !0 ? i = t.options.slidesToShow + 1 : i = t.options.slidesToShow;
                for (n = t.slideCount; n > t.slideCount - i; n -= 1) {
                    r = n - 1;
                    e(t.$slides[r]).clone().attr("id", "").prependTo(t.$slideTrack).addClass("slick-cloned")
                }
                for (n = 0; n < i; n += 1) {
                    r = n;
                    e(t.$slides[r]).clone().attr("id", "").appendTo(t.$slideTrack).addClass("slick-cloned")
                }
                t.$slideTrack.find(".slick-cloned").find("[id]").each(function () {
                    e(this).attr("id", "")
                })
            }
        }
    };
    t.prototype.slideHandler = function (e) {
        var t, n, r, i, s = null, o = this;
        if (o.animating === !0)return!1;
        t = e;
        s = o.getLeft(t);
        r = o.getLeft(o.currentSlide);
        i = o.slideCount % o.options.slidesToScroll !== 0 ? o.options.slidesToScroll : 0;
        o.currentLeft = o.swipeLeft === null ? r : o.swipeLeft;
        if (o.options.infinite === !1 && (e < 0 || e > o.slideCount - o.options.slidesToShow + i)) {
            if (o.options.fade === !1) {
                t = o.currentSlide;
                o.animateSlide(r, function () {
                    o.postSlide(t)
                })
            }
            return!1
        }
        o.options.autoplay === !0 && clearInterval(o.autoPlayTimer);
        t < 0 ? o.slideCount % o.options.slidesToScroll !== 0 ? n = o.slideCount - o.slideCount % o.options.slidesToScroll : n = o.slideCount - o.options.slidesToScroll : t > o.slideCount - 1 ? n = 0 : n = t;
        o.animating = !0;
        o.options.onBeforeChange !== null && e !== o.currentSlide && o.options.onBeforeChange.call(this, o, o.currentSlide, n);
        o.currentSlide = n;
        o.setSlideClasses(o.currentSlide);
        o.updateDots();
        o.updateArrows();
        if (o.options.fade === !0) {
            o.fadeSlide(n, function () {
                o.postSlide(n)
            });
            return!1
        }
        o.animateSlide(s, function () {
            o.postSlide(n)
        })
    };
    t.prototype.startLoad = function () {
        var e = this;
        if (e.options.arrows === !0 && e.slideCount > e.options.slidesToShow) {
            e.$prevArrow.hide();
            e.$nextArrow.hide()
        }
        e.options.dots === !0 && e.slideCount > e.options.slidesToShow && e.$dots.hide();
        e.$slider.addClass("slick-loading")
    };
    t.prototype.swipeDirection = function () {
        var e, t, n, r, i = this;
        e = i.touchObject.startX - i.touchObject.curX;
        t = i.touchObject.startY - i.touchObject.curY;
        n = Math.atan2(t, e);
        r = Math.round(n * 180 / Math.PI);
        r < 0 && (r = 360 - Math.abs(r));
        return r <= 45 && r >= 0 ? "left" : r <= 360 && r >= 315 ? "left" : r >= 135 && r <= 225 ? "right" : "vertical"
    };
    t.prototype.swipeEnd = function (t) {
        var n = this;
        n.$list.removeClass("dragging");
        if (n.touchObject.curX === undefined)return!1;
        if (n.touchObject.swipeLength >= n.touchObject.minSwipe) {
            e(t.target).on("click.slick", function (t) {
                t.stopImmediatePropagation();
                t.stopPropagation();
                t.preventDefault();
                e(t.target).off("click.slick")
            });
            switch (n.swipeDirection()) {
                case"left":
                    n.slideHandler(n.currentSlide + n.options.slidesToScroll);
                    n.touchObject = {};
                    break;
                case"right":
                    n.slideHandler(n.currentSlide - n.options.slidesToScroll);
                    n.touchObject = {}
            }
        } else if (n.touchObject.startX !== n.touchObject.curX) {
            n.slideHandler(n.currentSlide);
            n.touchObject = {}
        }
    };
    t.prototype.swipeHandler = function (e) {
        var t = this;
        if ("ontouchend"in document && t.options.swipe === !1)return!1;
        if (t.options.draggable === !1 && !e.originalEvent.touches)return!0;
        t.touchObject.fingerCount = e.originalEvent && e.originalEvent.touches !== undefined ? e.originalEvent.touches.length : 1;
        t.touchObject.minSwipe = t.listWidth / t.options.touchThreshold;
        switch (e.data.action) {
            case"start":
                t.swipeStart(e);
                break;
            case"move":
                t.swipeMove(e);
                break;
            case"end":
                t.swipeEnd(e)
        }
    };
    t.prototype.swipeMove = function (e) {
        var t = this, n, r, i, s;
        s = e.originalEvent !== undefined ? e.originalEvent.touches : null;
        n = t.getLeft(t.currentSlide);
        if (!t.$list.hasClass("dragging") || s && s.length !== 1
            )return!1;
        t.touchObject.curX = s !== undefined ? s[0].pageX : e.clientX;
        t.touchObject.curY = s !== undefined ? s[0].pageY : e.clientY;
        t.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(t.touchObject.curX - t.touchObject.startX, 2)));
        r = t.swipeDirection();
        if (r === "vertical")return;
        e.originalEvent !== undefined && t.touchObject.swipeLength > 4 && e.preventDefault();
        i = t.touchObject.curX > t.touchObject.startX ? 1 : -1;
        t.options.vertical === !1 ? t.swipeLeft = n + t.touchObject.swipeLength * i : t.swipeLeft = n + t.touchObject.swipeLength * (t.$list.height() / t.listWidth) * i;
        if (t.options.fade === !0 || t.options.touchMove === !1)return!1;
        if (t.animating === !0) {
            t.swipeLeft = null;
            return!1
        }
        t.setCSS(t.swipeLeft)
    };
    t.prototype.swipeStart = function (e) {
        var t = this, n;
        if (t.touchObject.fingerCount !== 1 || t.slideCount <= t.options.slidesToShow) {
            t.touchObject = {};
            return!1
        }
        e.originalEvent !== undefined && e.originalEvent.touches !== undefined && (n = e.originalEvent.touches[0]);
        t.touchObject.startX = t.touchObject.curX = n !== undefined ? n.pageX : e.clientX;
        t.touchObject.startY = t.touchObject.curY = n !== undefined ? n.pageY : e.clientY;
        t.$list.addClass("dragging")
    };
    t.prototype.unfilterSlides = function () {
        var e = this;
        if (e.$slidesCache !== null) {
            e.unload();
            e.$slideTrack.children(this.options.slide).remove();
            e.$slidesCache.appendTo(e.$slideTrack);
            e.reinit()
        }
    };
    t.prototype.unload = function () {
        var t = this;
        e(".slick-cloned", t.$slider).remove();
        t.$dots && t.$dots.remove();
        if (t.$prevArrow) {
            t.$prevArrow.remove();
            t.$nextArrow.remove()
        }
        t.$slides.removeClass("slick-slide slick-active slick-visible").removeAttr("style")
    };
    t.prototype.updateArrows = function () {
        var e = this;
        if (e.options.arrows === !0 && e.options.infinite !== !0 && e.slideCount > e.options.slidesToShow) {
            e.$prevArrow.removeClass("slick-disabled");
            e.$nextArrow.removeClass("slick-disabled");
            if (e.currentSlide === 0) {
                e.$prevArrow.addClass("slick-disabled");
                e.$nextArrow.removeClass("slick-disabled")
            } else if (e.currentSlide >= e.slideCount - e.options.slidesToShow) {
                e.$nextArrow.addClass("slick-disabled");
                e.$prevArrow.removeClass("slick-disabled")
            }
        }
    };
    t.prototype.updateDots = function () {
        var e = this;
        if (e.$dots !== null) {
            e.$dots.find("li").removeClass("slick-active");
            e.$dots.find("li").eq(e.currentSlide / e.options.slidesToScroll).addClass("slick-active")
        }
    };
    e.fn.slick = function (e) {
        var n = this;
        return n.each(function (n, r) {
            r.slick = new t(r, e)
        })
    };
    e.fn.slickAdd = function (e, t, n) {
        var r = this;
        return r.each(function (r, i) {
            i.slick.addSlide(e, t, n)
        })
    };
    e.fn.slickCurrentSlide = function () {
        var e = this;
        return e.get(0).slick.getCurrent()
    };
    e.fn.slickFilter = function (e) {
        var t = this;
        return t.each(function (t, n) {
            n.slick.filterSlides(e)
        })
    };
    e.fn.slickGoTo = function (e) {
        var t = this;
        return t.each(function (t, n) {
            n.slick.slideHandler(e)
        })
    };
    e.fn.slickNext = function () {
        var e = this;
        return e.each(function (e, t) {
            t.slick.changeSlide({data: {message: "next"}})
        })
    };
    e.fn.slickPause = function () {
        var e = this;
        return e.each(function (e, t) {
            t.slick.autoPlayClear();
            t.slick.paused = !0
        })
    };
    e.fn.slickPlay = function () {
        var e = this;
        return e.each(function (e, t) {
            t.slick.paused = !1;
            t.slick.autoPlay()
        })
    };
    e.fn.slickPrev = function () {
        var e = this;
        return e.each(function (e, t) {
            t.slick.changeSlide({data: {message: "previous"}})
        })
    };
    e.fn.slickRemove = function (e, t) {
        var n = this;
        return n.each(function (n, r) {
            r.slick.removeSlide(e, t)
        })
    };
    e.fn.slickSetOption = function (e, t, n) {
        var r = this;
        return r.each(function (r, i) {
            i.slick.options[e] = t;
            if (n === !0) {
                i.slick.unload();
                i.slick.reinit()
            }
        })
    };
    e.fn.slickUnfilter = function () {
        var e = this;
        return e.each(function (e, t) {
            t.slick.unfilterSlides()
        })
    };
    e.fn.unslick = function () {
        var e = this;
        return e.each(function (e, t) {
            t.slick.destroy()
        })
    }
});

jQuery(document).ready(function (e) {
    var t = e(window), n = t.height(), r = e(this);
    t.resize(function () {
        n = t.height()
    });
    e.fn.parallaxContentBand = function (r, i) {
        function u() {
            var e = t.scrollTop();
            s.each(function () {
                var t = s.offset().top, u = s.outerHeight();
                if (t + u < e || t > e + n)return;
                s.css("background-position", r + " " + Math.floor((o - e) * i) + "px")
            })
        }

        var s = e(this), o;
        s.each(function () {
            o = s.offset().top
        });
        t.resize(function () {
            s.each(function () {
                o = s.offset().top
            })
        });
        t.bind("scroll", u).resize(u);
        u()
    };
    e('.x-column[data-fade="true"]').each(function () {
        e(this).waypoint(function () {
            e(this).attr("data-fade-animation") === "in-from-top" ? e(this).animate({opacity: "1", top: "0"}, 750, "easeOutExpo") : e(this).attr("data-fade-animation") === "in-from-left" ? e(this).animate({opacity: "1", left: "0"}, 750, "easeOutExpo") : e(this).attr("data-fade-animation") === "in-from-right" ? e(this).animate({opacity: "1", right: "0"}, 750, "easeOutExpo") : e(this).attr("data-fade-animation") === "in-from-bottom" ? e(this).animate({opacity: "1", bottom: "0"}, 750, "easeOutExpo") : e(this).animate({opacity: "1"}, 750, "easeOutExpo")
        }, {offset: "65%"})
    });
    e('.x-recent-posts[data-fade="true"]').each(function () {
        e(this).waypoint(function () {
            e(this).find("a").each(function (t) {
                e(this).delay(t * 90).animate({opacity: "1"}, 750, "easeOutExpo")
            });
            setTimeout(function () {
                e(this).addClass("complete")
            }, e(this).find("a").length * 90 + 400)
        }, {offset: "75%"})
    });
    e(".x-skill-bar").each(function () {
        e(this).waypoint(function () {
            var t = e(this).attr("data-percentage");
            e(this).find(".bar").animate({width: t}, 750, "easeInOutExpo")
        }, {offset: "100%"})
    });
    e(".x-accordion-toggle[data-parent]").click(function () {
        e(this).closest(".x-accordion").find(".x-accordion-toggle:not(.collapsed)").addClass("collapsed")
    })
});
jQuery(window).load(function () {
    if (Modernizr.touch)jQuery(".x-content-band.bg-image.parallax, .x-content-band.bg-pattern.parallax").css("background-attachment", "scroll"); else {
        jQuery(".x-content-band.bg-image.parallax").each(function () {
            var e = jQuery(this).attr("id");
            jQuery("#" + e + ".parallax").parallaxContentBand("50%", .1)
        });
        jQuery(".x-content-band.bg-pattern.parallax").each(function () {
            var e = jQuery(this).attr("id");
            jQuery("#" + e + ".parallax").parallaxContentBand("50%", .3)
        })
    }
});
jQuery.easing.jswing = jQuery.easing.swing;
jQuery.extend(jQuery.easing, {def: "easeOutQuad", swing: function (e, t, n, r, i) {
    return jQuery.easing[jQuery.easing.def](e, t, n, r, i)
}, easeInQuad: function (e, t, n, r, i) {
    return r * (t /= i) * t + n
}, easeOutQuad: function (e, t, n, r, i) {
    return-r * (t /= i) * (t - 2) + n
}, easeInOutQuad: function (e, t, n, r, i) {
    return(t /= i / 2) < 1 ? r / 2 * t * t + n : -r / 2 * (--t * (t - 2) - 1) + n
}, easeInCubic: function (e, t, n, r, i) {
    return r * (t /= i) * t * t + n
}, easeOutCubic: function (e, t, n, r, i) {
    return r * ((t = t / i - 1) * t * t + 1) + n
}, easeInOutCubic: function (e, t, n, r, i) {
    return(t /= i / 2) < 1 ? r / 2 * t * t * t + n : r / 2 * ((t -= 2) * t * t + 2) + n
}, easeInQuart: function (e, t, n, r, i) {
    return r * (t /= i) * t * t * t + n
}, easeOutQuart: function (e, t, n, r, i) {
    return-r * ((t = t / i - 1) * t * t * t - 1) + n
}, easeInOutQuart: function (e, t, n, r, i) {
    return(t /= i / 2) < 1 ? r / 2 * t * t * t * t + n : -r / 2 * ((t -= 2) * t * t * t - 2) + n
}, easeInQuint: function (e, t, n, r, i) {
    return r * (t /= i) * t * t * t * t + n
}, easeOutQuint: function (e, t, n, r, i) {
    return r * ((t = t / i - 1) * t * t * t * t + 1) + n
}, easeInOutQuint: function (e, t, n, r, i) {
    return(t /= i / 2) < 1 ? r / 2 * t * t * t * t * t + n : r / 2 * ((t -= 2) * t * t * t * t + 2) + n
}, easeInSine: function (e, t, n, r, i) {
    return-r * Math.cos(t / i * (Math.PI / 2)) + r + n
}, easeOutSine: function (e, t, n, r, i) {
    return r * Math.sin(t / i * (Math.PI / 2)) + n
}, easeInOutSine: function (e, t, n, r, i) {
    return-r / 2 * (Math.cos(Math.PI * t / i) - 1) + n
}, easeInExpo: function (e, t, n, r, i) {
    return t == 0 ? n : r * Math.pow(2, 10 * (t / i - 1)) + n
}, easeOutExpo: function (e, t, n, r, i) {
    return t == i ? n + r : r * (-Math.pow(2, -10 * t / i) + 1) + n
}, easeInOutExpo: function (e, t, n, r, i) {
    return t == 0 ? n : t == i ? n + r : (t /= i / 2) < 1 ? r / 2 * Math.pow(2, 10 * (t - 1)) + n : r / 2 * (-Math.pow(2, -10 * --t) + 2) + n
}, easeInCirc: function (e, t, n, r, i) {
    return-r * (Math.sqrt(1 - (t /= i) * t) - 1) + n
}, easeOutCirc: function (e, t, n, r, i) {
    return r * Math.sqrt(1 - (t = t / i - 1) * t) + n
}, easeInOutCirc: function (e, t, n, r, i) {
    return(t /= i / 2) < 1 ? -r / 2 * (Math.sqrt(1 - t * t) - 1) + n : r / 2 * (Math.sqrt(1 - (t -= 2) * t) + 1) + n
}, easeInElastic: function (e, t, n, r, i) {
    var s = 1.70158, o = 0, u = r;
    if (t == 0)return n;
    if ((t /= i) == 1)return n + r;
    o || (o = i * .3);
    if (u < Math.abs(r)) {
        u = r;
        var s = o / 4
    } else var s = o / (2 * Math.PI) * Math.asin(r / u);
    return-(u * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * i - s) * 2 * Math.PI / o)) + n
}, easeOutElastic: function (e, t, n, r, i) {
    var s = 1.70158, o = 0, u = r;
    if (t == 0)return n;
    if ((t /= i) == 1)return n + r;
    o || (o = i * .3);
    if (u < Math.abs(r)) {
        u = r;
        var s = o / 4
    } else var s = o / (2 * Math.PI) * Math.asin(r / u);
    return u * Math.pow(2, -10 * t) * Math.sin((t * i - s) * 2 * Math.PI / o) + r + n
}, easeInOutElastic: function (e, t, n, r, i) {
    var s = 1.70158, o = 0, u = r;
    if (t == 0)return n;
    if ((t /= i / 2) == 2)return n + r;
    o || (o = i * .3 * 1.5);
    if (u < Math.abs(r)) {
        u = r;
        var s = o / 4
    } else var s = o / (2 * Math.PI) * Math.asin(r / u);
    return t < 1 ? -0.5 * u * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * i - s) * 2 * Math.PI / o) + n : u * Math.pow(2, -10 * (t -= 1)) * Math.sin((t * i - s) * 2 * Math.PI / o) * .5 + r + n
}, easeInBack: function (e, t, n, r, i, s) {
    s == undefined && (s = 1.70158);
    return r * (t /= i) * t * ((s + 1) * t - s) + n
}, easeOutBack: function (e, t, n, r, i, s) {
    s == undefined && (s = 1.70158);
    return r * ((t = t / i - 1) * t * ((s + 1) * t + s) + 1) + n
}, easeInOutBack: function (e, t, n, r, i, s) {
    s == undefined && (s = 1.70158);
    return(t /= i / 2) < 1 ? r / 2 * t * t * (((s *= 1.525) + 1) * t - s) + n : r / 2 * ((t -= 2) * t * (((s *= 1.525) + 1) * t + s) + 2) + n
}, easeInBounce: function (e, t, n, r, i) {
    return r - jQuery.easing.easeOutBounce(e, i - t, 0, r, i) + n
}, easeOutBounce: function (e, t, n, r, i) {
    return(t /= i) < 1 / 2.75 ? r * 7.5625 * t * t + n : t < 2 / 2.75 ? r * (7.5625 * (t -= 1.5 / 2.75) * t + .75) + n : t < 2.5 / 2.75 ? r * (7.5625 * (t -= 2.25 / 2.75) * t + .9375) + n : r * (7.5625 * (t -= 2.625 / 2.75) * t + .984375) + n
}, easeInOutBounce: function (e, t, n, r, i) {
    return t < i / 2 ? jQuery.easing.easeInBounce(e, t * 2, 0, r, i) * .5 + n : jQuery.easing.easeOutBounce(e, t * 2 - i, 0, r, i) * .5 + r * .5 + n
}});
(function (e) {
    e.flexslider = function (t, n) {
        var r = e(t);
        r.vars = e.extend({}, e.flexslider.defaults, n);
        var i = r.vars.namespace, s = window.navigator && window.navigator.msPointerEnabled && window.MSGesture, o = ("ontouchstart"in window || s || window.DocumentTouch && document instanceof DocumentTouch) && r.vars.touch, u = "click touchend MSPointerUp", a = "", f, l = r.vars.direction === "vertical", c = r.vars.reverse, h = r.vars.itemWidth > 0, p = r.vars.animation === "fade", d = r.vars.asNavFor !== "", v = {}, m = !0;
        e.data(t, "flexslider", r);
        v = {init: function () {
            r.animating = !1;
            r.currentSlide = parseInt(r.vars.startAt ? r.vars.startAt : 0, 10);
            isNaN(r.currentSlide) && (r.currentSlide = 0);
            r.animatingTo = r.currentSlide;
            r.atEnd = r.currentSlide === 0 || r.currentSlide === r.last;
            r.containerSelector = r.vars.selector.substr(0, r.vars.selector.search(" "));
            r.slides = e(r.vars.selector, r);
            r.container = e(r.containerSelector, r);
            r.count = r.slides.length;
            r.syncExists = e(r.vars.sync).length > 0;
            r.vars.animation === "slide" && (r.vars.animation = "swing");
            r.prop = l ? "top" : "marginLeft";
            r.args = {};
            r.manualPause = !1;
            r.stopped = !1;
            r.started = !1;
            r.startTimeout = null;
            r.transitions = !r.vars.video && !p && r.vars.useCSS && function () {
                var e = document.createElement("div"), t = ["perspectiveProperty", "WebkitPerspective", "MozPerspective", "OPerspective", "msPerspective"];
                for (var n in t)if (e.style[t[n]] !== undefined) {
                    r.pfx = t[n].replace("Perspective", "").toLowerCase();
                    r.prop = "-" + r.pfx + "-transform";
                    return!0
                }
                return!1
            }();
            r.ensureAnimationEnd = "";
            r.vars.controlsContainer !== "" && (r.controlsContainer = e(r.vars.controlsContainer).length > 0 && e(r.vars.controlsContainer));
            r.vars.manualControls !== "" && (r.manualControls = e(r.vars.manualControls).length > 0 && e(r.vars.manualControls));
            if (r.vars.randomize) {
                r.slides.sort(function () {
                    return Math.round(Math.random()) - .5
                });
                r.container.empty().append(r.slides)
            }
            r.doMath();
            r.setup("init");
            r.vars.controlNav && v.controlNav.setup();
            r.vars.directionNav && v.directionNav.setup();
            r.vars.keyboard && (e(r.containerSelector).length === 1 || r.vars.multipleKeyboard) && e(document).bind("keyup", function (e) {
                var t = e.keyCode;
                if (!r.animating && (t === 39 || t === 37)) {
                    var n = t === 39 ? r.getTarget("next") : t === 37 ? r.getTarget("prev") : !1;
                    r.flexAnimate(n, r.vars.pauseOnAction)
                }
            });
            r.vars.mousewheel && r.bind("mousewheel", function (e, t, n, i) {
                e.preventDefault();
                var s = t < 0 ? r.getTarget("next") : r.getTarget("prev");
                r.flexAnimate(s, r.vars.pauseOnAction)
            });
            r.vars.pausePlay && v.pausePlay.setup();
            r.vars.slideshow && r.vars.pauseInvisible && v.pauseInvisible.init();
            if (r.vars.slideshow) {
                r.vars.pauseOnHover && r.hover(function () {
                    !r.manualPlay && !r.manualPause && r.pause()
                }, function () {
                    !r.manualPause && !r.manualPlay && !r.stopped && r.play()
                });
                if (!r.vars.pauseInvisible || !v.pauseInvisible.isHidden())r.vars.initDelay > 0 ? r.startTimeout = setTimeout(r.play, r.vars.initDelay) : r.play()
            }
            d && v.asNav.setup();
            o && r.vars.touch && v.touch();
            (!p || p && r.vars.smoothHeight) && e(window).bind("resize orientationchange focus", v.resize);
            r.find("img").attr("draggable", "false");
            setTimeout(function () {
                r.vars.start(r)
            }, 200)
        }, asNav: {setup: function () {
            r.asNav = !0;
            r.animatingTo = Math.floor(r.currentSlide / r.move);
            r.currentItem = r.currentSlide;
            r.slides.removeClass(i + "active-slide").eq(r.currentItem).addClass(i + "active-slide");
            if (!s)r.slides.on(u, function (t) {
                t.preventDefault();
                var n = e(this), s = n.index(), o = n.offset().left - e(r).scrollLeft();
                if (o <= 0 && n.hasClass(i + "active-slide"))r.flexAnimate(r.getTarget("prev"), !0); else if (!e(r.vars.asNavFor).data("flexslider").animating && !n.hasClass(i + "active-slide")) {
                    r.direction = r.currentItem < s ? "next" : "prev";
                    r.flexAnimate(s, r.vars.pauseOnAction, !1, !0, !0)
                }
            }); else {
                t._slider = r;
                r.slides.each(function () {
                    var t = this;
                    t._gesture = new MSGesture;
                    t._gesture.target = t;
                    t.addEventListener("MSPointerDown", function (e) {
                        e.preventDefault();
                        e.currentTarget._gesture && e.currentTarget._gesture.addPointer(e.pointerId)
                    }, !1);
                    t.addEventListener("MSGestureTap", function (t) {
                        t.preventDefault();
                        var n = e(this), i = n.index();
                        if (!e(r.vars.asNavFor).data("flexslider").animating && !n.hasClass("active")) {
                            r.direction = r.currentItem < i ? "next" : "prev";
                            r.flexAnimate(i, r.vars.pauseOnAction, !1, !0, !0)
                        }
                    })
                })
            }
        }}, controlNav: {setup: function () {
            r.manualControls ? v.controlNav.setupManual() : v.controlNav.setupPaging()
        }, setupPaging: function () {
            var t = r.vars.controlNav === "thumbnails" ? "control-thumbs" : "control-paging", n = 1, s, o;
            r.controlNavScaffold = e('<ol class="' + i + "control-nav " + i + t + '"></ol>');
            if (r.pagingCount > 1)for (var f = 0; f < r.pagingCount; f++) {
                o = r.slides.eq(f);
                s = r.vars.controlNav === "thumbnails" ? '<img src="' + o.attr("data-thumb") + '"/>' : "<a>" + n + "</a>";
                if ("thumbnails" === r.vars.controlNav && !0 === r.vars.thumbCaptions) {
                    var l = o.attr("data-thumbcaption");
                    "" != l && undefined != l && (s += '<span class="' + i + 'caption">' + l + "</span>")
                }
                r.controlNavScaffold.append("<li>" + s + "</li>");
                n++
            }
            r.controlsContainer ? e(r.controlsContainer).append(r.controlNavScaffold) : r.append(r.controlNavScaffold);
            v.controlNav.set();
            v.controlNav.active();
            r.controlNavScaffold.delegate("a, img", u, function (t) {
                t.preventDefault();
                if (a === "" || a === t.type) {
                    var n = e(this), s = r.controlNav.index(n);
                    if (!n.hasClass(i + "active")) {
                        r.direction = s > r.currentSlide ? "next" : "prev";
                        r.flexAnimate(s, r.vars.pauseOnAction)
                    }
                }
                a === "" && (a = t.type);
                v.setToClearWatchedEvent()
            })
        }, setupManual: function () {
            r.controlNav = r.manualControls;
            v.controlNav.active();
            r.controlNav.bind(u, function (t) {
                t.preventDefault();
                if (a === "" || a === t.type) {
                    var n = e(this), s = r.controlNav.index(n);
                    if (!n.hasClass(i + "active")) {
                        s > r.currentSlide ? r.direction = "next" : r.direction = "prev";
                        r.flexAnimate(s, r.vars.pauseOnAction)
                    }
                }
                a === "" && (a = t.type);
                v.setToClearWatchedEvent()
            })
        }, set: function () {
            var t = r.vars.controlNav === "thumbnails" ? "img" : "a";
            r.controlNav = e("." + i + "control-nav li " + t, r.controlsContainer ? r.controlsContainer : r)
        }, active: function () {
            r.controlNav.removeClass(i + "active").eq(r.animatingTo).addClass(i + "active")
        }, update: function (t, n) {
            r.pagingCount > 1 && t === "add" ? r.controlNavScaffold.append(e("<li><a>" + r.count + "</a></li>")) : r.pagingCount === 1 ? r.controlNavScaffold.find("li").remove() : r.controlNav.eq(n).closest("li").remove();
            v.controlNav.set();
            r.pagingCount > 1 && r.pagingCount !== r.controlNav.length ? r.update(n, t) : v.controlNav.active()
        }}, directionNav: {setup: function () {
            var t = e('<ul class="' + i + 'direction-nav"><li><a class="' + i + 'prev" href="#">' + r.vars.prevText + '</a></li><li><a class="' + i + 'next" href="#">' + r.vars.nextText + "</a></li></ul>");
            if (r.controlsContainer) {
                e(r.controlsContainer).append(t);
                r.directionNav = e("." + i + "direction-nav li a", r.controlsContainer)
            } else {
                r.append(t);
                r.directionNav = e("." + i + "direction-nav li a", r)
            }
            v.directionNav.update();
            r.directionNav.bind(u, function (t) {
                t.preventDefault();
                var n;
                if (a === "" || a === t.type) {
                    n = e(this).hasClass(i + "next") ? r.getTarget("next") : r.getTarget("prev");
                    r.flexAnimate(n, r.vars.pauseOnAction)
                }
                a === "" && (a = t.type);
                v.setToClearWatchedEvent()
            })
        }, update: function () {
            var e = i + "disabled";
            r.pagingCount === 1 ? r.directionNav.addClass(e).attr("tabindex", "-1") : r.vars.animationLoop ? r.directionNav.removeClass(e).removeAttr("tabindex") : r.animatingTo === 0 ? r.directionNav.removeClass(e).filter("." + i + "prev").addClass(e).attr("tabindex", "-1") : r.animatingTo === r.last ? r.directionNav.removeClass(e).filter("." + i + "next").addClass(e).attr("tabindex", "-1") : r.directionNav.removeClass(e).removeAttr("tabindex")
        }}, pausePlay: {setup: function () {
            var t = e('<div class="' + i + 'pauseplay"><a></a></div>');
            if (r.controlsContainer) {
                r.controlsContainer.append(t);
                r.pausePlay = e("." + i + "pauseplay a", r.controlsContainer)
            } else {
                r.append(t);
                r.pausePlay = e("." + i + "pauseplay a", r)
            }
            v.pausePlay.update(r.vars.slideshow ? i + "pause" : i + "play");
            r.pausePlay.bind(u, function (t) {
                t.preventDefault();
                if (a === "" || a === t.type)if (e(this).hasClass(i + "pause")) {
                    r.manualPause = !0;
                    r.manualPlay = !1;
                    r.pause()
                } else {
                    r.manualPause = !1;
                    r.manualPlay = !0;
                    r.play()
                }
                a === "" && (a = t.type);
                v.setToClearWatchedEvent()
            })
        }, update: function (e) {
            e === "play" ? r.pausePlay.removeClass(i + "pause").addClass(i + "play").html(r.vars.playText) : r.pausePlay.removeClass(i + "play").addClass(i + "pause").html(r.vars.pauseText)
        }}, touch: function () {
            var e, n, i, o, u, a, f = !1, d = 0, v = 0, m = 0;
            if (!s) {
                t.addEventListener("touchstart", g, !1);
                function g(s) {
                    if (r.animating)s.preventDefault(); else if (window.navigator.msPointerEnabled || s.touches.length === 1) {
                        r.pause();
                        o = l ? r.h : r.w;
                        a = Number(new Date);
                        d = s.touches[0].pageX;
                        v = s.touches[0].pageY;
                        i = h && c && r.animatingTo === r.last ? 0 : h && c ? r.limit - (r.itemW + r.vars.itemMargin) * r.move * r.animatingTo : h && r.currentSlide === r.last ? r.limit : h ? (r.itemW + r.vars.itemMargin) * r.move * r.currentSlide : c ? (r.last - r.currentSlide + r.cloneOffset) * o : (r.currentSlide + r.cloneOffset) * o;
                        e = l ? v : d;
                        n = l ? d : v;
                        t.addEventListener("touchmove", y, !1);
                        t.addEventListener("touchend", b, !1)
                    }
                }

                function y(t) {
                    d = t.touches[0].pageX;
                    v = t.touches[0].pageY;
                    u = l ? e - v : e - d;
                    f = l ? Math.abs(u) < Math.abs(d - n) : Math.abs(u) < Math.abs(v - n);
                    var s = 500;
                    if (!f || Number(new Date) - a > s) {
                        t.preventDefault();
                        if (!p && r.transitions) {
                            r.vars.animationLoop || (u /= r.currentSlide === 0 && u < 0 || r.currentSlide === r.last && u > 0 ? Math.abs(u) / o + 2 : 1);
                            r.setProps(i + u, "setTouch")
                        }
                    }
                }

                function b(s) {
                    t.removeEventListener("touchmove", y, !1);
                    if (r.animatingTo === r.currentSlide && !f && u !== null) {
                        var l = c ? -u : u, h = l > 0 ? r.getTarget("next") : r.getTarget("prev");
                        r.canAdvance(h) && (Number(new Date) - a < 550 && Math.abs(l) > 50 || Math.abs(l) > o / 2) ? r.flexAnimate(h, r.vars.pauseOnAction) : p || r.flexAnimate(r.currentSlide, r.vars.pauseOnAction, !0)
                    }
                    t.removeEventListener("touchend", b, !1);
                    e = null;
                    n = null;
                    u = null;
                    i = null
                }
            } else {
                t.style.msTouchAction = "none";
                t._gesture = new MSGesture;
                t._gesture.target = t;
                t.addEventListener("MSPointerDown", w, !1);
                t._slider = r;
                t.addEventListener("MSGestureChange", E, !1);
                t.addEventListener("MSGestureEnd", S, !1);
                function w(e) {
                    e.stopPropagation();
                    if (r.animating)e.preventDefault(); else {
                        r.pause();
                        t._gesture.addPointer(e.pointerId);
                        m = 0;
                        o = l ? r.h : r.w;
                        a = Number(new Date);
                        i = h && c && r.animatingTo === r.last ? 0 : h && c ? r.limit - (r.itemW + r.vars.itemMargin) * r.move * r.animatingTo : h && r.currentSlide === r.last ? r.limit : h ? (r.itemW + r.vars.itemMargin) * r.move * r.currentSlide : c ? (r.last - r.currentSlide + r.cloneOffset) * o : (r.currentSlide + r.cloneOffset) * o
                    }
                }

                function E(e) {
                    e.stopPropagation();
                    var n = e.target._slider;
                    if (!n)return;
                    var r = -e.translationX, s = -e.translationY;
                    m += l ? s : r;
                    u = m;
                    f = l ? Math.abs(m) < Math.abs(-r) : Math.abs(m) < Math.abs(-s);
                    if (e.detail === e.MSGESTURE_FLAG_INERTIA) {
                        setImmediate(function () {
                            t._gesture.stop()
                        });
                        return
                    }
                    if (!f || Number(new Date) - a > 500) {
                        e.preventDefault();
                        if (!p && n.transitions) {
                            n.vars.animationLoop || (u = m / (n.currentSlide === 0 && m < 0 || n.currentSlide === n.last && m > 0 ? Math.abs(m) / o + 2 : 1));
                            n.setProps(i + u, "setTouch")
                        }
                    }
                }

                function S(t) {
                    t.stopPropagation();
                    var r = t.target._slider;
                    if (!r)return;
                    if (r.animatingTo === r.currentSlide && !f && u !== null) {
                        var s = c ? -u : u, l = s > 0 ? r.getTarget("next") : r.getTarget("prev");
                        r.canAdvance(l) && (Number(new Date) - a < 550 && Math.abs(s) > 50 || Math.abs(s) > o / 2) ? r.flexAnimate(l, r.vars.pauseOnAction) : p || r.flexAnimate(r.currentSlide, r.vars.pauseOnAction, !0)
                    }
                    e = null;
                    n = null;
                    u = null;
                    i = null;
                    m = 0
                }
            }
        }, resize: function () {
            if (!r.animating && r.is(":visible")) {
                h || r.doMath();
                if (p)v.smoothHeight(); else if (h) {
                    r.slides.width(r.computedW);
                    r.update(r.pagingCount);
                    r.setProps()
                } else if (l) {
                    r.viewport.height(r.h);
                    r.setProps(r.h, "setTotal")
                } else {
                    r.vars.smoothHeight && v.smoothHeight();
                    r.newSlides.width(r.computedW);
                    r.setProps(r.computedW, "setTotal")
                }
            }
        }, smoothHeight: function (e) {
            if (!l || p) {
                var t = p ? r : r.viewport;
                e ? t.animate({height: r.slides.eq(r.animatingTo).height()}, e) : t.height(r.slides.eq(r.animatingTo).height())
            }
        }, sync: function (t) {
            var n = e(r.vars.sync).data("flexslider"), i = r.animatingTo;
            switch (t) {
                case"animate":
                    n.flexAnimate(i, r.vars.pauseOnAction, !1, !0);
                    break;
                case"play":
                    !n.playing && !n.asNav && n.play();
                    break;
                case"pause":
                    n.pause()
            }
        }, uniqueID: function (t) {
            t.find("[id]").each(function () {
                var t = e(this);
                t.attr("id", t.attr("id") + "_clone")
            });
            return t
        }, pauseInvisible: {visProp: null, init: function () {
            var e = ["webkit", "moz", "ms", "o"];
            if ("hidden"in document)return"hidden";
            for (var t = 0; t < e.length; t++)e[t] + "Hidden"in document && (v.pauseInvisible.visProp = e[t] + "Hidden");
            if (v.pauseInvisible.visProp) {
                var n = v.pauseInvisible.visProp.replace(/[H|h]idden/, "") + "visibilitychange";
                document.addEventListener(n, function () {
                    v.pauseInvisible.isHidden() ? r.startTimeout ? clearTimeout(r.startTimeout) : r.pause() : r.started ? r.play() : r.vars.initDelay > 0 ? setTimeout(r.play, r.vars.initDelay) : r.play()
                })
            }
        }, isHidden: function () {
            return document[v.pauseInvisible.visProp] || !1
        }}, setToClearWatchedEvent: function () {
            clearTimeout(f);
            f = setTimeout(function () {
                a = ""
            }, 3e3)
        }};
        r.flexAnimate = function (t, n, s, u, a) {
            !r.vars.animationLoop && t !== r.currentSlide && (r.direction = t > r.currentSlide ? "next" : "prev");
            d && r.pagingCount === 1 && (r.direction = r.currentItem < t ? "next" : "prev");
            if (!r.animating && (r.canAdvance(t, a) || s) && r.is(":visible")) {
                if (d && u) {
                    var f = e(r.vars.asNavFor).data("flexslider");
                    r.atEnd = t === 0 || t === r.count - 1;
                    f.flexAnimate(t, !0, !1, !0, a);
                    r.direction = r.currentItem < t ? "next" : "prev";
                    f.direction = r.direction;
                    if (Math.ceil((t + 1) / r.visible) - 1 === r.currentSlide || t === 0) {
                        r.currentItem = t;
                        r.slides.removeClass(i + "active-slide").eq(t).addClass(i + "active-slide");
                        return!1
                    }
                    r.currentItem = t;
                    r.slides.removeClass(i + "active-slide").eq(t).addClass(i + "active-slide");
                    t = Math.floor(t / r.visible)
                }
                r.animating = !0;
                r.animatingTo = t;
                n && r.pause();
                r.vars.before(r);
                r.syncExists && !a && v.sync("animate");
                r.vars.controlNav && v.controlNav.active();
                h || r.slides.removeClass(i + "active-slide").eq(t).addClass(i + "active-slide");
                r.atEnd = t === 0 || t === r.last;
                r.vars.directionNav && v.directionNav.update();
                if (t === r.last) {
                    r.vars.end(r);
                    r.vars.animationLoop || r.pause()
                }
                if (!p) {
                    var m = l ? r.slides.filter(":first").height() : r.computedW, g, y, b;
                    if (h) {
                        g = r.vars.itemMargin;
                        b = (r.itemW + g) * r.move * r.animatingTo;
                        y = b > r.limit && r.visible !== 1 ? r.limit : b
                    } else r.currentSlide === 0 && t === r.count - 1 && r.vars.animationLoop && r.direction !== "next" ? y = c ? (r.count + r.cloneOffset) * m : 0 : r.currentSlide === r.last && t === 0 && r.vars.animationLoop && r.direction !== "prev" ? y = c ? 0 : (r.count + 1) * m : y = c ? (r.count - 1 - t + r.cloneOffset) * m : (t + r.cloneOffset) * m;
                    r.setProps(y, "", r.vars.animationSpeed);
                    if (r.transitions) {
                        if (!r.vars.animationLoop || !r.atEnd) {
                            r.animating = !1;
                            r.currentSlide = r.animatingTo
                        }
                        r.container.unbind("webkitTransitionEnd transitionend");
                        r.container.bind("webkitTransitionEnd transitionend", function () {
                            clearTimeout(r.ensureAnimationEnd);
                            r.wrapup(m)
                        });
                        clearTimeout(r.ensureAnimationEnd);
                        r.ensureAnimationEnd = setTimeout(function () {
                            r.wrapup(m)
                        }, r.vars.animationSpeed + 100)
                    } else r.container.animate(r.args, r.vars.animationSpeed, r.vars.easing, function () {
                        r.wrapup(m)
                    })
                } else if (!o) {
                    r.slides.eq(r.currentSlide).css({zIndex: 1}).animate({opacity: 0}, r.vars.animationSpeed, r.vars.easing);
                    r.slides.eq(t).css({zIndex: 2}).animate({opacity: 1}, r.vars.animationSpeed, r.vars.easing, r.wrapup)
                } else {
                    r.slides.eq(r.currentSlide).css({opacity: 0, zIndex: 1});
                    r.slides.eq(t).css({opacity: 1, zIndex: 2});
                    r.wrapup(m)
                }
                r.vars.smoothHeight && v.smoothHeight(r.vars.animationSpeed)
            }
        };
        r.wrapup = function (e) {
            !p && !h && (r.currentSlide === 0 && r.animatingTo === r.last && r.vars.animationLoop ? r.setProps(e, "jumpEnd") : r.currentSlide === r.last && r.animatingTo === 0 && r.vars.animationLoop && r.setProps(e, "jumpStart"));
            r.animating = !1;
            r.currentSlide = r.animatingTo;
            r.vars.after(r)
        };
        r.animateSlides = function () {
            !r.animating && m && r.flexAnimate(r.getTarget("next"))
        };
        r.pause = function () {
            clearInterval(r.animatedSlides);
            r.animatedSlides = null;
            r.playing = !1;
            r.vars.pausePlay && v.pausePlay.update("play");
            r.syncExists && v.sync("pause")
        };
        r.play = function () {
            r.playing && clearInterval(r.animatedSlides);
            r.animatedSlides = r.animatedSlides || setInterval(r.animateSlides, r.vars.slideshowSpeed);
            r.started = r.playing = !0;
            r.vars.pausePlay && v.pausePlay.update("pause");
            r.syncExists && v.sync("play")
        };
        r.stop = function () {
            r.pause();
            r.stopped = !0
        };
        r.canAdvance = function (e, t) {
            var n = d ? r.pagingCount - 1 : r.last;
            return t ? !0 : d && r.currentItem === r.count - 1 && e === 0 && r.direction === "prev" ? !0 : d && r.currentItem === 0 && e === r.pagingCount - 1 && r.direction !== "next" ? !1 : e === r.currentSlide && !d ? !1 : r.vars.animationLoop ? !0 : r.atEnd && r.currentSlide === 0 && e === n && r.direction !== "next" ? !1 : r.atEnd && r.currentSlide === n && e === 0 && r.direction === "next" ? !1 : !0
        };
        r.getTarget = function (e) {
            r.direction = e;
            return e === "next" ? r.currentSlide === r.last ? 0 : r.currentSlide + 1 : r.currentSlide === 0 ? r.last : r.currentSlide - 1
        };
        r.setProps = function (e, t, n) {
            var i = function () {
                var n = e ? e : (r.itemW + r.vars.itemMargin) * r.move * r.animatingTo, i = function () {
                    if (h)return t === "setTouch" ? e : c && r.animatingTo === r.last ? 0 : c ? r.limit - (r.itemW + r.vars.itemMargin) * r.move * r.animatingTo : r.animatingTo === r.last ? r.limit : n;
                    switch (t) {
                        case"setTotal":
                            return c ? (r.count - 1 - r.currentSlide + r.cloneOffset) * e : (r.currentSlide + r.cloneOffset) * e;
                        case"setTouch":
                            return c ? e : e;
                        case"jumpEnd":
                            return c ? e : r.count * e;
                        case"jumpStart":
                            return c ? r.count * e : e;
                        default:
                            return e
                    }
                }();
                return i * -1 + "px"
            }();
            if (r.transitions) {
                i = l ? "translate3d(0," + i + ",0)" : "translate3d(" + i + ",0,0)";
                n = n !== undefined ? n / 1e3 + "s" : "0s";
                r.container.css("-" + r.pfx + "-transition-duration", n);
                r.container.css("transition-duration", n)
            }
            r.args[r.prop] = i;
            (r.transitions || n === undefined) && r.container.css(r.args);
            r.container.css("transform", i)
        };
        r.setup = function (t) {
            if (!p) {
                var n, s;
                if (t === "init") {
                    r.viewport = e('<div class="' + i + 'viewport"></div>').css({overflow: "hidden", position: "relative"}).appendTo(r).append(r.container);
                    r.cloneCount = 0;
                    r.cloneOffset = 0;
                    if (c) {
                        s = e.makeArray(r.slides).reverse();
                        r.slides = e(s);
                        r.container.empty().append(r.slides)
                    }
                }
                if (r.vars.animationLoop && !h) {
                    r.cloneCount = 2;
                    r.cloneOffset = 1;
                    t !== "init" && r.container.find(".clone").remove();
                    v.uniqueID(r.slides.first().clone().addClass("clone").attr("aria-hidden", "true")).appendTo(r.container);
                    v.uniqueID(r.slides.last().clone().addClass("clone").attr("aria-hidden", "true")).prependTo(r.container)
                }
                r.newSlides = e(r.vars.selector, r);
                n = c ? r.count - 1 - r.currentSlide + r.cloneOffset : r.currentSlide + r.cloneOffset;
                if (l && !h) {
                    r.container.height((r.count + r.cloneCount) * 200 + "%").css("position", "absolute").width("100%");
                    setTimeout(function () {
                        r.newSlides.css({display: "block"});
                        r.doMath();
                        r.viewport.height(r.h);
                        r.setProps(n * r.h, "init")
                    }, t === "init" ? 100 : 0)
                } else {
                    r.container.width((r.count + r.cloneCount) * 200 + "%");
                    r.setProps(n * r.computedW, "init");
                    setTimeout(function () {
                        r.doMath();
                        r.newSlides.css({width: r.computedW, "float": "left", display: "block"});
                        r.vars.smoothHeight && v.smoothHeight()
                    }, t === "init" ? 100 : 0)
                }
            } else {
                r.slides.css({width: "100%", "float": "left", marginRight: "-100%", position: "relative"});
                t === "init" && (o ? r.slides.css({opacity: 0, display: "block", webkitTransition: "opacity " + r.vars.animationSpeed / 1e3 + "s ease", zIndex: 1}).eq(r.currentSlide).css({opacity: 1, zIndex: 2}) : r.slides.css({opacity: 0, display: "block", zIndex: 1}).eq(r.currentSlide).css({zIndex: 2}).animate({opacity: 1}, r.vars.animationSpeed, r.vars.easing));
                r.vars.smoothHeight && v.smoothHeight()
            }
            h || r.slides.removeClass(i + "active-slide").eq(r.currentSlide).addClass(i + "active-slide");
            r.vars.init(r)
        };
        r.doMath = function () {
            var e = r.slides.first(), t = r.vars.itemMargin, n = r.vars.minItems, i = r.vars.maxItems;
            r.w = r.viewport === undefined ? r.width() : r.viewport.width();
            r.h = e.height();
            r.boxPadding = e.outerWidth() - e.width();
            if (h) {
                r.itemT = r.vars.itemWidth + t;
                r.minW = n ? n * r.itemT : r.w;
                r.maxW = i ? i * r.itemT - t : r.w;
                r.itemW = r.minW > r.w ? (r.w - t * (n - 1)) / n : r.maxW < r.w ? (r.w - t * (i - 1)) / i : r.vars.itemWidth > r.w ? r.w : r.vars.itemWidth;
                r.visible = Math.floor(r.w / r.itemW);
                r.move = r.vars.move > 0 && r.vars.move < r.visible ? r.vars.move : r.visible;
                r.pagingCount = Math.ceil((r.count - r.visible) / r.move + 1);
                r.last = r.pagingCount - 1;
                r.limit = r.pagingCount === 1 ? 0 : r.vars.itemWidth > r.w ? r.itemW * (r.count - 1) + t * (r.count - 1) : (r.itemW + t) * r.count - r.w - t
            } else {
                r.itemW = r.w;
                r.pagingCount = r.count;
                r.last = r.count - 1
            }
            r.computedW = r.itemW - r.boxPadding
        };
        r.update = function (e, t) {
            r.doMath();
            if (!h) {
                e < r.currentSlide ? r.currentSlide += 1 : e <= r.currentSlide && e !== 0 && (r.currentSlide -= 1);
                r.animatingTo = r.currentSlide
            }
            if (r.vars.controlNav && !r.manualControls)if (t === "add" && !h || r.pagingCount > r.controlNav.length)v.controlNav.update("add"); else if (t === "remove" && !h || r.pagingCount < r.controlNav.length) {
                if (h && r.currentSlide > r.last) {
                    r.currentSlide -= 1;
                    r.animatingTo -= 1
                }
                v.controlNav.update("remove", r.last)
            }
            r.vars.directionNav && v.directionNav.update()
        };
        r.addSlide = function (t, n) {
            var i = e(t);
            r.count += 1;
            r.last = r.count - 1;
            l && c ? n !== undefined ? r.slides.eq(r.count - n).after(i) : r.container.prepend(i) : n !== undefined ? r.slides.eq(n).before(i) : r.container.append(i);
            r.update(n, "add");
            r.slides = e(r.vars.selector + ":not(.clone)", r);
            r.setup();
            r.vars.added(r)
        };
        r.removeSlide = function (t) {
            var n = isNaN(t) ? r.slides.index(e(t)) : t;
            r.count -= 1;
            r.last = r.count - 1;
            isNaN(t) ? e(t, r.slides).remove() : l && c ? r.slides.eq(r.last).remove() : r.slides.eq(t).remove();
            r.doMath();
            r.update(n, "remove");
            r.slides = e(r.vars.selector + ":not(.clone)", r);
            r.setup();
            r.vars.removed(r)
        };
        v.init()
    };
    e(window).blur(function (e) {
        focused = !1
    }).focus(function (e) {
        focused = !0
    });
    e.flexslider.defaults = {namespace: "flex-", selector: ".slides > li", animation: "fade", easing: "swing", direction: "horizontal", reverse: !1, animationLoop: !0, smoothHeight: !1, startAt: 0, slideshow: !0, slideshowSpeed: 7e3, animationSpeed: 600, initDelay: 0, randomize: !1, thumbCaptions: !1, pauseOnAction: !0, pauseOnHover: !1, pauseInvisible: !0, useCSS: !0, touch: !0, video: !1, controlNav: !0, directionNav: !0, prevText: "Previous", nextText: "Next", keyboard: !0, multipleKeyboard: !1, mousewheel: !1, pausePlay: !1, pauseText: "Pause", playText: "Play", controlsContainer: "", manualControls: "", sync: "", asNavFor: "", itemWidth: 0, itemMargin: 0, minItems: 1, maxItems: 0, move: 0, allowOneSlide: !0, start: function () {
    }, before: function () {
    }, after: function () {
    }, end: function () {
    }, added: function () {
    }, removed: function () {
    }, init: function () {
    }};
    e.fn.flexslider = function (t) {
        t === undefined && (t = {});
        if (typeof t == "object")return this.each(function () {
            var n = e(this), r = t.selector ? t.selector : ".slides > li", i = n.find(r);
            if (i.length === 1 && t.allowOneSlide === !0 || i.length === 0) {
                i.fadeIn(400);
                t.start && t.start(n)
            } else n.data("flexslider") === undefined && new e.flexslider(this, t)
        });
        var n = e(this).data("flexslider");
        switch (t) {
            case"play":
                n.play();
                break;
            case"pause":
                n.pause();
                break;
            case"stop":
                n.stop();
                break;
            case"next":
                n.flexAnimate(n.getTarget("next"), !0);
                break;
            case"prev":
            case"previous":
                n.flexAnimate(n.getTarget("prev"), !0);
                break;
            default:
                typeof t == "number" && n.flexAnimate(t, !0)
        }
    }
})(jQuery);
(function () {
    var e = [].indexOf || function (e) {
        for (var t = 0, n = this.length; t < n; t++)if (t in this && this[t] === e)return t;
        return-1
    }, t = [].slice;
    (function (e, t) {
        return typeof define == "function" && define.amd ? define("waypoints", ["jquery"], function (n) {
            return t(n, e)
        }) : t(e.jQuery, e)
    })(this, function (n, r) {
        var i, s, o, u, a, f, l, c, h, p, d, v, m, g, y, b;
        i = n(r);
        c = e.call(r, "ontouchstart") >= 0;
        u = {horizontal: {}, vertical: {}};
        a = 1;
        l = {};
        f = "waypoints-context-id";
        d = "resize.waypoints";
        v = "scroll.waypoints";
        m = 1;
        g = "waypoints-waypoint-ids";
        y = "waypoint";
        b = "waypoints";
        s = function () {
            function e(e) {
                var t = this;
                this.$element = e;
                this.element = e[0];
                this.didResize = !1;
                this.didScroll = !1;
                this.id = "context" + a++;
                this.oldScroll = {x: e.scrollLeft(), y: e.scrollTop()};
                this.waypoints = {horizontal: {}, vertical: {}};
                this.element[f] = this.id;
                l[this.id] = this;
                e.bind(v, function () {
                    var e;
                    if (!t.didScroll && !c) {
                        t.didScroll = !0;
                        e = function () {
                            t.doScroll();
                            return t.didScroll = !1
                        };
                        return r.setTimeout(e, n[b].settings.scrollThrottle)
                    }
                });
                e.bind(d, function () {
                    var e;
                    if (!t.didResize) {
                        t.didResize = !0;
                        e = function () {
                            n[b]("refresh");
                            return t.didResize = !1
                        };
                        return r.setTimeout(e, n[b].settings.resizeThrottle)
                    }
                })
            }

            e.prototype.doScroll = function () {
                var e, t = this;
                e = {horizontal: {newScroll: this.$element.scrollLeft(), oldScroll: this.oldScroll.x, forward: "right", backward: "left"}, vertical: {newScroll: this.$element.scrollTop(), oldScroll: this.oldScroll.y, forward: "down", backward: "up"}};
                c && (!e.vertical.oldScroll || !e.vertical.newScroll) && n[b]("refresh");
                n.each(e, function (e, r) {
                    var i, s, o;
                    o = [];
                    s = r.newScroll > r.oldScroll;
                    i = s ? r.forward : r.backward;
                    n.each(t.waypoints[e], function (e, t) {
                        var n, i;
                        if (r.oldScroll < (n = t.offset) && n <= r.newScroll)return o.push(t);
                        if (r.newScroll < (i = t.offset) && i <= r.oldScroll)return o.push(t)
                    });
                    o.sort(function (e, t) {
                        return e.offset - t.offset
                    });
                    s || o.reverse();
                    return n.each(o, function (e, t) {
                        if (t.options.continuous || e === o.length - 1)return t.trigger([i])
                    })
                });
                return this.oldScroll = {x: e.horizontal.newScroll, y: e.vertical.newScroll}
            };
            e.prototype.refresh = function () {
                var e, t, r, i = this;
                r = n.isWindow(this.element);
                t = this.$element.offset();
                this.doScroll();
                e = {horizontal: {contextOffset: r ? 0 : t.left, contextScroll: r ? 0 : this.oldScroll.x, contextDimension: this.$element.width(), oldScroll: this.oldScroll.x, forward: "right", backward: "left", offsetProp: "left"}, vertical: {contextOffset: r ? 0 : t.top, contextScroll: r ? 0 : this.oldScroll.y, contextDimension: r ? n[b]("viewportHeight") : this.$element.height(), oldScroll: this.oldScroll.y, forward: "down", backward: "up", offsetProp: "top"}};
                return n.each(e, function (e, t) {
                    return n.each(i.waypoints[e], function (e, r) {
                        var i, s, o, u, a;
                        i = r.options.offset;
                        o = r.offset;
                        s = n.isWindow(r.element) ? 0 : r.$element.offset()[t.offsetProp];
                        if (n.isFunction(i))i = i.apply(r.element); else if (typeof i == "string") {
                            i = parseFloat(i);
                            r.options.offset.indexOf("%") > -1 && (i = Math.ceil(t.contextDimension * i / 100))
                        }
                        r.offset = s - t.contextOffset + t.contextScroll - i;
                        if (r.options.onlyOnScroll && o != null || !r.enabled)return;
                        if (o !== null && o < (u = t.oldScroll) && u <= r.offset)return r.trigger([t.backward]);
                        if (o !== null && o > (a = t.oldScroll) && a >= r.offset)return r.trigger([t.forward]);
                        if (o === null && t.oldScroll >= r.offset)return r.trigger([t.forward])
                    })
                })
            };
            e.prototype.checkEmpty = function () {
                if (n.isEmptyObject(this.waypoints.horizontal) && n.isEmptyObject(this.waypoints.vertical)) {
                    this.$element.unbind([d, v].join(" "));
                    return delete l[this.id]
                }
            };
            return e
        }();
        o = function () {
            function e(e, t, r) {
                var i, s;
                r = n.extend({}, n.fn[y].defaults, r);
                r.offset === "bottom-in-view" && (r.offset = function () {
                    var e;
                    e = n[b]("viewportHeight");
                    n.isWindow(t.element) || (e = t.$element.height());
                    return e - n(this).outerHeight()
                });
                this.$element = e;
                this.element = e[0];
                this.axis = r.horizontal ? "horizontal" : "vertical";
                this.callback = r.handler;
                this.context = t;
                this.enabled = r.enabled;
                this.id = "waypoints" + m++;
                this.offset = null;
                this.options = r;
                t.waypoints[this.axis][this.id] = this;
                u[this.axis][this.id] = this;
                i = (s = this.element[g]) != null ? s : [];
                i.push(this.id);
                this.element[g] = i
            }

            e.prototype.trigger = function (e) {
                if (!this.enabled)return;
                this.callback != null && this.callback.apply(this.element, e);
                if (this.options.triggerOnce)return this.destroy()
            };
            e.prototype.disable = function () {
                return this.enabled = !1
            };
            e.prototype.enable = function () {
                this.context.refresh();
                return this.enabled = !0
            };
            e.prototype.destroy = function () {
                delete u[this.axis][this.id];
                delete this.context.waypoints[this.axis][this.id];
                return this.context.checkEmpty()
            };
            e.getWaypointsByElement = function (e) {
                var t, r;
                r = e[g];
                if (!r)return[];
                t = n.extend({}, u.horizontal, u.vertical);
                return n.map(r, function (e) {
                    return t[e]
                })
            };
            return e
        }();
        p = {init: function (e, t) {
            var r;
            t == null && (t = {});
            (r = t.handler) == null && (t.handler = e);
            this.each(function () {
                var e, r, i, u;
                e = n(this);
                i = (u = t.context) != null ? u : n.fn[y].defaults.context;
                n.isWindow(i) || (i = e.closest(i));
                i = n(i);
                r = l[i[0][f]];
                r || (r = new s(i));
                return new o(e, r, t)
            });
            n[b]("refresh");
            return this
        }, disable: function () {
            return p._invoke.call(this, "disable")
        }, enable: function () {
            return p._invoke.call(this, "enable")
        }, destroy: function () {
            return p._invoke.call(this, "destroy")
        }, prev: function (e, t) {
            return p._traverse.call(this, e, t, function (e, t, n) {
                if (t > 0)return e.push(n[t - 1])
            })
        }, next: function (e, t) {
            return p._traverse.call(this, e, t, function (e, t, n) {
                if (t < n.length - 1)return e.push(n[t + 1])
            })
        }, _traverse: function (e, t, i) {
            var s, o;
            e == null && (e = "vertical");
            t == null && (t = r);
            o = h.aggregate(t);
            s = [];
            this.each(function () {
                var t;
                t = n.inArray(this, o[e]);
                return i(s, t, o[e])
            });
            return this.pushStack(s)
        }, _invoke: function (e) {
            this.each(function () {
                var t;
                t = o.getWaypointsByElement(this);
                return n.each(t, function (t, n) {
                    n[e]();
                    return!0
                })
            });
            return this
        }};
        n.fn[y] = function () {
            var e, r;
            r = arguments[0], e = 2 <=
                arguments.length ? t.call(arguments, 1) : [];
            return p[r] ? p[r].apply(this, e) : n.isFunction(r) ? p.init.apply(this, arguments) : n.isPlainObject(r) ? p.init.apply(this, [null, r]) : r ? n.error("The " + r + " method does not exist in jQuery Waypoints.") : n.error("jQuery Waypoints needs a callback function or handler option.")
        };
        n.fn[y].defaults = {context: r, continuous: !0, enabled: !0, horizontal: !1, offset: 0, triggerOnce: !1};
        h = {refresh: function () {
            return n.each(l, function (e, t) {
                return t.refresh()
            })
        }, viewportHeight: function () {
            var e;
            return(e = r.innerHeight) != null ? e : i.height()
        }, aggregate: function (e) {
            var t, r, i;
            t = u;
            e && (t = (i = l[n(e)[0][f]]) != null ? i.waypoints : void 0);
            if (!t)return[];
            r = {horizontal: [], vertical: []};
            n.each(r, function (e, i) {
                n.each(t[e], function (e, t) {
                    return i.push(t)
                });
                i.sort(function (e, t) {
                    return e.offset - t.offset
                });
                r[e] = n.map(i, function (e) {
                    return e.element
                });
                return r[e] = n.unique(r[e])
            });
            return r
        }, above: function (e) {
            e == null && (e = r);
            return h._filter(e, "vertical", function (e, t) {
                return t.offset <= e.oldScroll.y
            })
        }, below: function (e) {
            e == null && (e = r);
            return h._filter(e, "vertical", function (e, t) {
                return t.offset > e.oldScroll.y
            })
        }, left: function (e) {
            e == null && (e = r);
            return h._filter(e, "horizontal", function (e, t) {
                return t.offset <= e.oldScroll.x
            })
        }, right: function (e) {
            e == null && (e = r);
            return h._filter(e, "horizontal", function (e, t) {
                return t.offset > e.oldScroll.x
            })
        }, enable: function () {
            return h._invoke("enable")
        }, disable: function () {
            return h._invoke("disable")
        }, destroy: function () {
            return h._invoke("destroy")
        }, extendFn: function (e, t) {
            return p[e] = t
        }, _invoke: function (e) {
            var t;
            t = n.extend({}, u.vertical, u.horizontal);
            return n.each(t, function (t, n) {
                n[e]();
                return!0
            })
        }, _filter: function (e, t, r) {
            var i, s;
            i = l[n(e)[0][f]];
            if (!i)return[];
            s = [];
            n.each(i.waypoints[t], function (e, t) {
                if (r(i, t))return s.push(t)
            });
            s.sort(function (e, t) {
                return e.offset - t.offset
            });
            return n.map(s, function (e) {
                return e.element
            })
        }};
        n[b] = function () {
            var e, n;
            n = arguments[0], e = 2 <= arguments.length ? t.call(arguments, 1) : [];
            return h[n] ? h[n].apply(null, e) : h.aggregate.call(null, n)
        };
        n[b].settings = {resizeThrottle: 100, scrollThrottle: 30};
        return i.load(function () {
            return n[b]("refresh")
        })
    })
}).call(this);
!function (e) {
    "use strict";
    var t = '[data-dismiss="alert"]', n = function (n) {
        e(n).on("click", t, this.close)
    };
    n.prototype.close = function (t) {
        function s() {
            i.trigger("closed").remove()
        }

        var n = e(this), r = n.attr("data-target"), i;
        if (!r) {
            r = n.attr("href");
            r = r && r.replace(/.*(?=#[^\s]*$)/, "")
        }
        i = e(r);
        t && t.preventDefault();
        i.length || (i = n.hasClass("alert") ? n : n.parent());
        i.trigger(t = e.Event("close"));
        if (t.isDefaultPrevented())return;
        i.removeClass("in");
        e.support.transition && i.hasClass("fade") ? i.on(e.support.transition.end, s) : s()
    };
    var r = e.fn.alert;
    e.fn.alert = function (t) {
        return this.each(function () {
            var r = e(this), i = r.data("alert");
            i || r.data("alert", i = new n(this));
            typeof t == "string" && i[t].call(r)
        })
    };
    e.fn.alert.Constructor = n;
    e.fn.alert.noConflict = function () {
        e.fn.alert = r;
        return this
    };
    e(document).on("click.alert.data-api", t, n.prototype.close)
}(window.jQuery);
!function (e) {
    "use strict";
    var t = function (t, n) {
        this.$element = e(t);
        this.options = e.extend({}, e.fn.collapse.defaults, n);
        this.options.parent && (this.$parent = e(this.options.parent));
        this.options.toggle && this.toggle()
    };
    t.prototype = {constructor: t, dimension: function () {
        var e = this.$element.hasClass("width");
        return e ? "width" : "height"
    }, show: function () {
        var t, n, r, i;
        if (this.transitioning || this.$element.hasClass("in"))return;
        t = this.dimension();
        n = e.camelCase(["scroll", t].join("-"));
        r = this.$parent && this.$parent.find("> .x-accordion-group > .in");
        if (r && r.length) {
            i = r.data("collapse");
            if (i && i.transitioning)return;
            r.collapse("hide");
            i || r.data("collapse", null)
        }
        this.$element[t](0);
        this.transition("addClass", e.Event("show"), "shown");
        e.support.transition && this.$element[t](this.$element[0][n])
    }, hide: function () {
        var t;
        if (this.transitioning || !this.$element.hasClass("in"))return;
        t = this.dimension();
        this.reset(this.$element[t]());
        this.transition("removeClass", e.Event("hide"), "hidden");
        this.$element[t](0)
    }, reset: function (e) {
        var t = this.dimension();
        this.$element.removeClass("collapse")[t](e || "auto")[0].offsetWidth;
        this.$element[e !== null ? "addClass" : "removeClass"]("collapse");
        return this
    }, transition: function (t, n, r) {
        var i = this, s = function () {
            n.type == "show" && i.reset();
            i.transitioning = 0;
            i.$element.trigger(r)
        };
        this.$element.trigger(n);
        if (n.isDefaultPrevented())return;
        this.transitioning = 1;
        this.$element[t]("in");
        e.support.transition && this.$element.hasClass("collapse") ? this.$element.one(e.support.transition.end, s) : s()
    }, toggle: function () {
        this[this.$element.hasClass("in") ? "hide" : "show"]()
    }};
    var n = e.fn.collapse;
    e.fn.collapse = function (n) {
        return this.each(function () {
            var r = e(this), i = r.data("collapse"), s = e.extend({}, e.fn.collapse.defaults, r.data(), typeof n == "object" && n);
            i || r.data("collapse", i = new t(this, s));
            typeof n == "string" && i[n]()
        })
    };
    e.fn.collapse.defaults = {toggle: !0};
    e.fn.collapse.Constructor = t;
    e.fn.collapse.noConflict = function () {
        e.fn.collapse = n;
        return this
    };
    e(document).on("click.collapse.data-api", "[data-toggle=collapse]", function (t) {
        var n = e(this), r, i = n.attr("data-target") || t.preventDefault() || (r = n.attr("href")) && r.replace(/.*(?=#[^\s]+$)/, ""), s = e(i).data("collapse") ? "toggle" : n.data();
        n[e(i).hasClass("in") ? "addClass" : "removeClass"]("collapsed");
        e(i).collapse(s)
    })
}(window.jQuery);
!function (e) {
    "use strict";
    var t = function (t) {
        this.element = e(t)
    };
    t.prototype = {constructor: t, show: function () {
        var t = this.element, n = t.closest("ul:not(.dropdown-menu)"), r = t.attr("data-target"), i, s, o;
        if (!r) {
            r = t.attr("href");
            r = r && r.replace(/.*(?=#[^\s]*$)/, "")
        }
        if (t.parent("li").hasClass("active"))return;
        i = n.find(".active:last a")[0];
        o = e.Event("show", {relatedTarget: i});
        t.trigger(o);
        if (o.isDefaultPrevented())return;
        s = e(r);
        this.activate(t.parent("li"), n);
        this.activate(s, s.parent(), function () {
            t.trigger({type: "shown", relatedTarget: i})
        })
    }, activate: function (t, n, r) {
        function o() {
            i.removeClass("active").find("> .dropdown-menu > .active").removeClass("active");
            t.addClass("active");
            if (s) {
                t[0].offsetWidth;
                t.addClass("in")
            } else t.removeClass("fade");
            t.parent(".dropdown-menu") && t.closest("li.dropdown").addClass("active");
            r && r()
        }

        var i = n.find("> .active"), s = r && e.support.transition && i.hasClass("fade");
        s ? i.one(e.support.transition.end, o) : o();
        i.removeClass("in")
    }};
    var n = e.fn.tab;
    e.fn.tab = function (n) {
        return this.each(function () {
            var r = e(this), i = r.data("tab");
            i || r.data("tab", i = new t(this));
            typeof n == "string" && i[n]()
        })
    };
    e.fn.tab.Constructor = t;
    e.fn.tab.noConflict = function () {
        e.fn.tab = n;
        return this
    };
    e(document).on("click.tab.data-api", '[data-toggle="tab"], [data-toggle="pill"]', function (t) {
        t.preventDefault();
        e(this).tab("show")
    })
}(window.jQuery);
!function (e) {
    "use strict";
    e(function () {
        e.support.transition = function () {
            var e = function () {
                var e = document.createElement("bootstrap"), t = {WebkitTransition: "webkitTransitionEnd", MozTransition: "transitionend", OTransition: "oTransitionEnd otransitionend", transition: "transitionend"}, n;
                for (n in t)if (e.style[n] !== undefined)return t[n]
            }();
            return e && {end: e}
        }()
    })
}(window.jQuery);
!function (e) {
    "use strict";
    var t = function (e, t) {
        this.init("tooltip", e, t)
    };
    t.prototype = {constructor: t, init: function (t, n, r) {
        var i, s, o, u, a;
        this.type = t;
        this.$element = e(n);
        this.options = this.getOptions(r);
        this.enabled = !0;
        o = this.options.trigger.split(" ");
        for (a = o.length; a--;) {
            u = o[a];
            if (u == "click")this.$element.on("click." + this.type, this.options.selector, e.proxy(this.toggle, this)); else if (u != "manual") {
                i = u == "hover" ? "mouseenter" : "focus";
                s = u == "hover" ? "mouseleave" : "blur";
                this.$element.on(i + "." + this.type, this.options.selector, e.proxy(this.enter, this));
                this.$element.on(s + "." + this.type, this.options.selector, e.proxy(this.leave, this))
            }
        }
        this.options.selector ? this._options = e.extend({}, this.options, {trigger: "manual", selector: ""}) : this.fixTitle()
    }, getOptions: function (t) {
        t = e.extend({}, e.fn[this.type].defaults, this.$element.data(), t);
        t.delay && typeof t.delay == "number" && (t.delay = {show: t.delay, hide: t.delay});
        return t
    }, enter: function (t) {
        var n = e.fn[this.type].defaults, r = {}, i;
        this._options && e.each(this._options, function (e, t) {
            n[e] != t && (r[e] = t)
        }, this);
        i = e(t.currentTarget)[this.type](r).data(this.type);
        if (!i.options.delay || !i.options.delay.show)return i.show();
        clearTimeout(this.timeout);
        i.hoverState = "in";
        this.timeout = setTimeout(function () {
            i.hoverState == "in" && i.show()
        }, i.options.delay.show)
    }, leave: function (t) {
        var n = e(t.currentTarget)[this.type](this._options).data(this.type);
        this.timeout && clearTimeout(this.timeout);
        if (!n.options.delay || !n.options.delay.hide)return n.hide();
        n.hoverState = "out";
        this.timeout = setTimeout(function () {
            n.hoverState == "out" && n.hide()
        }, n.options.delay.hide)
    }, show: function () {
        var t, n, r, i, s, o, u = e.Event("show");
        if (this.hasContent() && this.enabled) {
            this.$element.trigger(u);
            if (u.isDefaultPrevented())return;
            t = this.tip();
            this.setContent();
            this.options.animation && t.addClass("fade");
            s = typeof this.options.placement == "function" ? this.options.placement.call(this, t[0], this.$element[0]) : this.options.placement;
            t.detach().css({top: 0, left: 0, display: "block"});
            this.options.container ? t.appendTo(this.options.container) : t.insertAfter(this.$element);
            n = this.getPosition();
            r = t[0].offsetWidth;
            i = t[0].offsetHeight;
            switch (s) {
                case"bottom":
                    o = {top: n.top + n.height, left: n.left + n.width / 2 - r / 2};
                    break;
                case"top":
                    o = {top: n.top - i, left: n.left + n.width / 2 - r / 2};
                    break;
                case"left":
                    o = {top: n.top + n.height / 2 - i / 2, left: n.left - r};
                    break;
                case"right":
                    o = {top: n.top + n.height / 2 - i / 2, left: n.left + n.width}
            }
            this.applyPlacement(o, s);
            this.$element.trigger("shown")
        }
    }, applyPlacement: function (e, t) {
        var n = this.tip(), r = n[0].offsetWidth, i = n[0].offsetHeight, s, o, u, a;
        n.offset(e).addClass(t).addClass("in");
        s = n[0].offsetWidth;
        o = n[0].offsetHeight;
        if (t == "top" && o != i) {
            e.top = e.top + i - o;
            a = !0
        }
        if (t == "bottom" || t == "top") {
            u = 0;
            if (e.left < 0) {
                u = e.left * -2;
                e.left = 0;
                n.offset(e);
                s = n[0].offsetWidth;
                o = n[0].offsetHeight
            }
            this.replaceArrow(u - r + s, s, "left")
        } else this.replaceArrow(o - i, o, "top");
        a && n.offset(e)
    }, replaceArrow: function (e, t, n) {
        this.arrow().css(n, e ? 50 * (1 - e / t) + "%" : "")
    }, setContent: function () {
        var e = this.tip(), t = this.getTitle();
        e.find(".tooltip-inner")[this.options.html ? "html" : "text"](t);
        e.removeClass("fade in top bottom left right")
    }, hide: function () {
        function i() {
            var t = setTimeout(function () {
                n.off(e.support.transition.end).detach()
            }, 500);
            n.one(e.support.transition.end, function () {
                clearTimeout(t);
                n.detach()
            })
        }

        var t = this, n = this.tip(), r = e.Event("hide");
        this.$element.trigger(r);
        if (r.isDefaultPrevented())return;
        n.removeClass("in");
        e.support.transition && this.$tip.hasClass("fade") ? i() : n.detach();
        this.$element.trigger("hidden");
        return this
    }, fixTitle: function () {
        var e = this.$element;
        (e.attr("title") || typeof e.attr("data-original-title") != "string") && e.attr("data-original-title", e.attr("title") || "").attr("title", "")
    }, hasContent: function () {
        return this.getTitle()
    }, getPosition: function () {
        var t = this.$element[0];
        return e.extend({}, typeof t.getBoundingClientRect == "function" ? t.getBoundingClientRect() : {width: t.offsetWidth, height: t.offsetHeight}, this.$element.offset())
    }, getTitle: function () {
        var e, t = this.$element, n = this.options;
        e = t.attr("data-original-title") || (typeof n.title == "function" ? n.title.call(t[0]) : n.title);
        return e
    }, tip: function () {
        return this.$tip = this.$tip || e(this.options.template)
    }, arrow: function () {
        return this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow")
    }, validate: function () {
        if (!this.$element[0].parentNode) {
            this.hide();
            this.$element = null;
            this.options = null
        }
    }, enable: function () {
        this.enabled = !0
    }, disable: function () {
        this.enabled = !1
    }, toggleEnabled: function () {
        this.enabled = !this.enabled
    }, toggle: function (t) {
        var n = t ? e(t.currentTarget)[this.type](this._options).data(this.type) : this;
        n.tip().hasClass("in") ? n.hide() : n.show()
    }, destroy: function () {
        this.hide().$element.off("." + this.type).removeData(this.type)
    }};
    var n = e.fn.tooltip;
    e.fn.tooltip = function (n) {
        return this.each(function () {
            var r = e(this), i = r.data("tooltip"), s = typeof n == "object" && n;
            i || r.data("tooltip", i = new t(this, s));
            typeof n == "string" && i[n]()
        })
    };
    e.fn.tooltip.Constructor = t;
    e.fn.tooltip.defaults = {animation: !0, placement: "top", selector: !1, template: '<div class="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>', trigger: "hover focus", title: "", delay: 0, html: !1, container: !1};
    e.fn.tooltip.noConflict = function () {
        e.fn.tooltip = n;
        return this
    }
}(window.jQuery);
!function (e) {
    "use strict";
    var t = function (e, t) {
        this.init("popover", e, t)
    };
    t.prototype = e.extend({}, e.fn.tooltip.Constructor.prototype, {constructor: t, setContent: function () {
        var e = this.tip(), t = this.getTitle(), n = this.getContent();
        e.find(".popover-title")[this.options.html ? "html" : "text"](t);
        e.find(".popover-content")[this.options.html ? "html" : "text"](n);
        e.removeClass("fade top bottom left right in")
    }, hasContent: function () {
        return this.getTitle() || this.getContent()
    }, getContent: function () {
        var e, t = this.$element, n = this.options;
        e = (typeof n.content == "function" ? n.content.call(t[0]) : n.content) || t.attr("data-content");
        return e
    }, tip: function () {
        this.$tip || (this.$tip = e(this.options.template));
        return this.$tip
    }, destroy: function () {
        this.hide().$element.off("." + this.type).removeData(this.type)
    }});
    var n = e.fn.popover;
    e.fn.popover = function (n) {
        return this.each(function () {
            var r = e(this), i = r.data("popover"), s = typeof n == "object" && n;
            i || r.data("popover", i = new t(this, s));
            typeof n == "string" && i[n]()
        })
    };
    e.fn.popover.Constructor = t;
    e.fn.popover.defaults = e.extend({}, e.fn.tooltip.defaults, {placement: "right", trigger: "click", content: "", template: '<div class="popover"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'});
    e.fn.popover.noConflict = function () {
        e.fn.popover = n;
        return this
    }
}(window.jQuery);
jQuery(document).ready(function (e) {
    e('[data-toggle="tooltip"]').tooltip({animation: !0, html: !1, delay: {show: 0, hide: 300}});
    e('[data-toggle="popover"]').popover({animation: !0, html: !1, delay: {show: 0, hide: 300}})
});
jQuery(window).load(function () {
    jQuery(".x-flexslider-featured-gallery").flexslider({controlNav: !1, selector: ".x-slides > li", prevText: '<i class="x-icon-chevron-left"></i>', nextText: '<i class="x-icon-chevron-right"></i>', animation: "fade", easing: "easeInOutExpo", smoothHeight: !0, slideshow: !1});
    jQuery(".x-flexslider-flickr").flexslider({controlNav: !1, selector: ".x-slides > li", prevText: '<i class="x-icon-chevron-left"></i>', nextText: '<i class="x-icon-chevron-right"></i>', animation: "fade", easing: "easeInOutExpo", smoothHeight: !0, slideshow: !1})
});
</script>


<script>
    $(document).ready(function () {
        $('.carousel').carousel();
    });
</script>
</body>
</html>