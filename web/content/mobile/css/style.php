<?php include('theme.php'); ?>
<?php header("Content-type: text/css; charset: UTF-8"); ?>
<style type="text/css">
/* === DO NOT REMOVE === */
html {}
/* === DO NOT REMOVE === */
/* =========================================================================
// Mobile Website Template | STYLESHEET
// Created by: Taylor Schleyer
// 10/28/2013
// Using JqueryMobile as the foundation: http://jquerymobile.com/
// ========================================================================= */

/* ===================================================================== */
/* ELEMENTS */
/* ===================================================================== */
body,
.ui-body-a,
.ui-body-b,
.ui-body-c,
.ui-body-d,
.ui-body-e {
    margin:0;
    padding:0;
    background-color:<?=$body_BackgroundColor;?>;
    background-image:url('../img/<?=$body_BackgroundImagePattern;?>');
    background-repeat:repeat;
    background-position:top left;
    -webkit-overflow-scrolling: touch;
    -moz-overflow-scrolling: touch;
    -o-overflow-scrolling: touch;
    -ms-overflow-scrolling: touch;
    overflow-scrolling: touch;
}
body a:link,
body a:hover,
body a:visited {
    color:<?=$body_LinkColor;?>;
}
body a:active {
    color:<?=$body_ACTIVE_LinkColor;?>;
}
/* ===================================================================== */
/* HEADER */
/* ===================================================================== */
header {
    position:relative;
    margin:0;
    padding:0;
    width:100%;
    height:50px;
    line-height:50px;
    background-color:<?=$header_BackgroundGradientColor_TOP;?>;
    background-image:-webkit-gradient(linear,left top,left bottom,from( <?=$header_BackgroundGradientColor_TOP;?> ),to( <?=$header_BackgroundGradientColor_BOTTOM;?> ));
    background-image:-webkit-linear-gradient( <?=$header_BackgroundGradientColor_TOP;?>,<?=$header_BackgroundGradientColor_BOTTOM;?> );
    background-image:-moz-linear-gradient( <?=$header_BackgroundGradientColor_TOP;?>,<?=$header_BackgroundGradientColor_BOTTOM;?> );
    background-image:-o-linear-gradient( <?=$header_BackgroundGradientColor_TOP;?>,<?=$header_BackgroundGradientColor_BOTTOM;?> );
    background-image:-ms-linear-gradient( <?=$header_BackgroundGradientColor_TOP;?>,<?=$heaader_BackgroundGradientColor_BOTTOM;?> );
    background-image:linear-gradient( <?=$header_BackgroundGradientColor_TOP;?>,<?=$header_BackgroundGradientColor_BOTTOM;?> );
    border-bottom: 1px solid <?=$navigation_BorderTopColor;?>;
}
header h1 {
    position:relative;
    width:75%;
    height:50px;
    margin:0;
    padding:0;
    text-align:left;
    text-indent:10px;
    color:<?=$header_FontColor;?>;
    font-size:<?=$header_FontSize;?>;
    font-weight:<?=$header_FontWeight;?>;
    font-family:<?=$header_FontFamily;?>;
    display:block;
    overflow:hidden;
    white-space:nowrap;
    outline:0 !important;
    float:right;
}
#page1 header h1 {
    width:100%;
    text-align:center;
    text-indent:0;
}
/* ===================================================================== */
/* BACK BUTTON */
/* ===================================================================== */
.back-button,
.back-button:link,
.back-button:hover,
.back-button:visited,
.back-button:active {
    display:block;
    position:relative;
    width:24%;
    height:50px;
    margin:0;
    padding:0;
    font-size:<?=$backbutton_FontSize;?>;
    font-weight:<?=$backbutton_FontWeight;?>;
    font-family:<?=$backbutton_FontFamily;?>;
    cursor:pointer;
    text-decoration:none;
    text-align:center;
    text-transform:uppercase;
    float:left;
    border-right:1px solid <?=$backbutton_BorderRightColor?>;
}
.back-button div {
    display:block;
    position:absolute;
    bottom:4px;
    left:5%;
    font-weight:normal;
    font-size:35px;
    font-family:"Times New Roman", serif;
}
.back-button,
.back-button:link,
.back-button:hover,
.back-button:visited {
    color:<?=$backbutton_LinkColor;?>;
}
.back-button:active {
    color:<?=$backbutton_ACTIVE_LinkColor;?>;
}
.back-button,
.back-button:hover {
    background-color:<?=$backbutton_BackgroundGradientColor_TOP;?>;
    background-image:-webkit-gradient(linear,left top,left bottom,from( <?=$backbutton_BackgroundGradientColor_TOP;?> ),to( <?=$backbutton_BackgroundGradientColor_BOTTOM;?> ));
    background-image:-webkit-linear-gradient( <?=$backbutton_BackgroundGradientColor_TOP;?>,<?=$backbutton_BackgroundGradientColor_BOTTOM;?> );
    background-image:-moz-linear-gradient( <?=$backbutton_BackgroundGradientColor_TOP;?>,<?=$backbutton_BackgroundGradientColor_BOTTOM;?> );
    background-image:-o-linear-gradient( <?=$backbutton_BackgroundGradientColor_TOP;?>,<?=$backbutton_BackgroundGradientColor_BOTTOM;?> );
    background-image:-ms-linear-gradient( <?=$backbutton_BackgroundGradientColor_TOP;?>,<?=$backbutton_BackgroundGradientColor_BOTTOM;?> );
    background-image:linear-gradient( <?=$backbutton_BackgroundGradientColor_TOP;?>,<?=$backbutton_BackgroundGradientColor_BOTTOM;?> );
}
.back-button:active {
    background-color:<?=$backbutton_ACTIVE_BackgroundGradientColor_TOP;?>;
    background-image:-webkit-gradient(linear,left top,left bottom,from( <?=$backbutton_ACTIVE_BackgroundGradientColor_TOP;?> ),to( <?=$backbutton_ACTIVE_BackgroundGradientColor_BOTTOM;?> ));
    background-image:-webkit-linear-gradient( <?=$backbutton_ACTIVE_BackgroundGradientColor_TOP;?>,<?=$backbutton_ACTIVE_BackgroundGradientColor_BOTTOM;?> );
    background-image:-moz-linear-gradient( <?=$backbutton_ACTIVE_BackgroundGradientColor_TOP;?>,<?=$backbutton_ACTIVE_BackgroundGradientColor_BOTTOM;?> );
    background-image:-o-linear-gradient( <?=$backbutton_ACTIVE_BackgroundGradientColor_TOP;?>,<?=$backbutton_ACTIVE_BackgroundGradientColor_BOTTOM;?> );
    background-image:-ms-linear-gradient( <?=$backbutton_ACTIVE_BackgroundGradientColor_TOP;?>,<?=$backbutton_ACTIVE_BackgroundGradientColor_BOTTOM;?> );
    background-image:linear-gradient( <?=$backbutton_ACTIVE_BackgroundGradientColor_TOP;?>,<?=$backbutton_ACTIVE_BackgroundGradientColor_BOTTOM;?> );
}
/* ===================================================================== */
/* LOGO */
/* ===================================================================== */
.logo {
    display:block;
    position:relative;
    width:100%;
    height:130px;
    text-align:center;
    vertical-align:middle;
    margin:0;
    padding:0;
    background-color:<?=$logo_BackgroundColor;?>;
    background-image:url('../img/<?=$logo_BackgroundImagePattern;?>');
    background-repeat:repeat;
    background-position:top left;
    border-bottom:1px solid <?=$logo_BorderBottomColor;?>;
}
.logo img {
    position:relative;
    width:280px;
    height:130px;
    border:0;
}
/* ===================================================================== */
/* SMALL LOGO */
/* ===================================================================== */
.small_logo {
    display:block;
    position:absolute;
    top:0;
    right:0;
    width:50px;
    height:50px;
    background-color:<?=$smalllogo_BackgroundColor;?>;
    background-image:url('../img/small_logo.png');
    background-repeat:no-repeat;
    background-size:contain;
    background-position:top right;
    filter: alpha(opacity=70);
    -moz-opacity: 0.7;
    -khtml-opacity: 0.7;
    opacity: 0.7;
}
/* ===================================================================== */
/* INFORMATION */
/* ===================================================================== */
.information {
    display:block;
    position:relative;
    width:auto;
    height:auto;
    margin:0;
    padding:10px;
    font-weight:<?=$information_FontWeight;?>;
    font-family:<?=$information_FontFamily;?>;
    color:<?=$information_FontColor;?>;
    background-color:<?=$information_BackgroundColor;?>;
    background-image:url('../img/<?=$information_BackgroundImagePattern;?>');
    background-repeat:repeat;
    background-position:top right;
}
.information table,
.information tr,
.information td, {
    display:block;
    position:relative;
    margin:0;
    padding:0;
}
.information table {
    width:100%;
}
/* ===================================================================== */
/* NAVIGATION */
/* ===================================================================== */
.navigation,
.navigation ul,
.navigation ul li {
    display:block;
    position:relative;
    width:100%;
    height:auto;
    margin:0;
    padding:0;
    list-style:none;
}
.navigation ul li a,
.navigation ul li a:link,
.navigation ul li a:hover,
.navigation ul li a:visited,
.navigation ul li a.ui-btn-active {
    display:block;
    position:relative;
    width:auto;
    height:auto;
    margin:0;
    padding:12px 10px;
    font-size:<?=$navigation_FontSize;?>;
    font-weight:<?=$navigation_FontWeight;?>;
    font-family:<?=$navigation_FontFamily;?>;
    cursor:pointer;
    text-decoration:none;
    text-align:left;
    border-top: 1px solid <?=$navigation_BorderTopColor;?>;
}
.navigation ul li div {
    display:block;
    position:absolute;
    top:0;
    right:10px;
    font-weight:normal;
    font-size:35px;
    font-family:"Times New Roman", serif;
}
.navigation ul #reverse a.ui-btn-active,
.navigation ul li a,
.navigation ul li a:link,
.navigation ul li a:hover,
.navigation ul li a:visited,
.navigation ul li div {
    color:<?=$navigation_LinkColor;?>;
}
.navigation ul #reverse a,
.navigation ul li a.ui-btn-active {
    color:<?=$navigation_ACTIVE_LinkColor;?>;
}
.navigation ul li a,
.navigation ul li a:hover {
    background-color:<?=$navigation_BackgroundGradientColor_TOP;?>;
    background-image:-webkit-gradient(linear,left top,left bottom,from( <?=$navigation_BackgroundGradientColor_TOP;?> ),to( <?=$navigation_BackgroundGradientColor_BOTTOM;?> ));
    background-image:-webkit-linear-gradient( <?=$navigation_BackgroundGradientColor_TOP;?>,<?=$navigation_BackgroundGradientColor_BOTTOM;?> );
    background-image:-moz-linear-gradient( <?=$navigation_BackgroundGradientColor_TOP;?>,<?=$navigation_BackgroundGradientColor_BOTTOM;?> );
    background-image:-o-linear-gradient( <?=$navigation_BackgroundGradientColor_TOP;?>,<?=$navigation_BackgroundGradientColor_BOTTOM;?> );
    background-image:-ms-linear-gradient( <?=$navigation_BackgroundGradientColor_TOP;?>,<?=$navigation_BackgroundGradientColor_BOTTOM;?> );
    background-image:linear-gradient( <?=$navigation_BackgroundGradientColor_TOP;?>,<?=$navigation_BackgroundGradientColor_BOTTOM;?> );
}
.navigation ul li a.ui-btn-active {
    background-color:<?=$navigation_ACTIVE_BackgroundGradientColor_TOP;?>;
    background-image:-webkit-gradient(linear,left top,left bottom,from( <?=$navigation_ACTIVE_BackgroundGradientColor_TOP;?> ),to( <?=$navigation_ACTIVE_BackgroundGradientColor_BOTTOM;?> ));
    background-image:-webkit-linear-gradient( <?=$navigation_ACTIVE_BackgroundGradientColor_TOP;?>,<?=$navigation_ACTIVE_BackgroundGradientColor_BOTTOM;?> );
    background-image:-moz-linear-gradient( <?=$navigation_ACTIVE_BackgroundGradientColor_TOP;?>,<?=$navigation_ACTIVE_BackgroundGradientColor_BOTTOM;?> );
    background-image:-o-linear-gradient( <?=$navigation_ACTIVE_BackgroundGradientColor_TOP;?>,<?=$navigation_ACTIVE_BackgroundGradientColor_BOTTOM;?> );
    background-image:-ms-linear-gradient( <?=$navigation_ACTIVE_BackgroundGradientColor_TOP;?>,<?=$navigation_ACTIVE_BackgroundGradientColor_BOTTOM;?> );
    background-image:linear-gradient( <?=$navigation_ACTIVE_BackgroundGradientColor_TOP;?>,<?=$navigation_ACTIVE_BackgroundGradientColor_BOTTOM;?> );
}
/* ===================================================================== */
/* REVERSE BUTTON COLORS (id="reverse") */
/* ===================================================================== */
.navigation ul #reverse a,
.navigation ul #reverse a:hover {
    background-color:<?=$navigation_ACTIVE_BackgroundGradientColor_TOP;?>;
    background-image:-webkit-gradient(linear,left top,left bottom,from( <?=$navigation_ACTIVE_BackgroundGradientColor_TOP;?> ),to( <?=$navigation_ACTIVE_BackgroundGradientColor_BOTTOM;?> ));
    background-image:-webkit-linear-gradient( <?=$navigation_ACTIVE_BackgroundGradientColor_TOP;?>,<?=$navigation_ACTIVE_BackgroundGradientColor_BOTTOM;?> );
    background-image:-moz-linear-gradient( <?=$navigation_ACTIVE_BackgroundGradientColor_TOP;?>,<?=$navigation_ACTIVE_BackgroundGradientColor_BOTTOM;?> );
    background-image:-o-linear-gradient( <?=$navigation_ACTIVE_BackgroundGradientColor_TOP;?>,<?=$navigation_ACTIVE_BackgroundGradientColor_BOTTOM;?> );
    background-image:-ms-linear-gradient( <?=$navigation_ACTIVE_BackgroundGradientColor_TOP;?>,<?=$navigation_ACTIVE_BackgroundGradientColor_BOTTOM;?> );
    background-image:linear-gradient( <?=$navigation_ACTIVE_BackgroundGradientColor_TOP;?>,<?=$navigation_ACTIVE_BackgroundGradientColor_BOTTOM;?> );
}
.navigation ul #reverse a.ui-btn-active {
    background-color:<?=$navigation_BackgroundGradientColor_TOP;?>;
    background-image:-webkit-gradient(linear,left top,left bottom,from( <?=$navigation_BackgroundGradientColor_TOP;?> ),to( <?=$navigation_BackgroundGradientColor_BOTTOM;?> ));
    background-image:-webkit-linear-gradient( <?=$navigation_BackgroundGradientColor_TOP;?>,<?=$navigation_BackgroundGradientColor_BOTTOM;?> );
    background-image:-moz-linear-gradient( <?=$navigation_BackgroundGradientColor_TOP;?>,<?=$navigation_BackgroundGradientColor_BOTTOM;?> );
    background-image:-o-linear-gradient( <?=$navigation_BackgroundGradientColor_TOP;?>,<?=$navigation_BackgroundGradientColor_BOTTOM;?> );
    background-image:-ms-linear-gradient( <?=$navigation_BackgroundGradientColor_TOP;?>,<?=$navigation_BackgroundGradientColor_BOTTOM;?> );
    background-image:linear-gradient( <?=$navigation_BackgroundGradientColor_TOP;?>,<?=$navigation_BackgroundGradientColor_BOTTOM;?> );
}
/* ===================================================================== */
/* CONTENT */
/* ===================================================================== */
.content {
    display:block;
    position:relative;
    width:auto;
    height:auto;
    margin:0;
    padding:10px 10px 0 10px;
}
.content p,
.content ul,
.content .reCAPTCHA {
    display:block;
    position:relative;
    width:auto;
    height:auto;
    margin:0 0 10px 0;
    padding:10px;
    text-align:left;
    color:<?=$content_FontColor;?>;
    font-size:<?=$content_FontSize;?>;
    font-weight:<?=$content_FontWeight;?>;
    font-family:<?=$content_FontFamily;?>;
    background-color:<?=$content_BackgroundColor;?>;
    background-image:url('../img/<?=$content_BackgroundImagePattern;?>');
    background-repeat:repeat;
    background-position:top left;
    border-bottom:1px solid <?=$content_BorderBottomColor;?>;
}
.content ul li {
    list-style:circle;
    list-style-position:inside;
}
.content ul li .ui-body-c,
.reCAPTCHA .ui-body-c {
   background-color: #FFF;
   background-image: none;
}
/* ===================================================================== */
/* FOOTER */
/* ===================================================================== */
footer {
    display:block;
    position:relative;
    width:auto;
    height:auto;
    margin:0;
    padding:0;
}
footer p {
    display:block;
    position:relative;
    width:auto;
    height:auto;
    margin:0;
    padding:20px 10px;
    text-align:center;
    color:<?=$footer_FontColor;?>;
    font-size:<?=$footer_FontSize;?>;
    font-weight:<?=$footer_FontWeight;?>;
    font-family:<?=$footer_FontFamily;?>;
    background-color:<?=$footer_BackgroundColor;?>;
    background-image:url('../img/<?=$footer_BackgroundImagePattern;?>');
    background-repeat:repeat;
    background-position:top left;
    border-top:1px solid <?=$content_BorderBottomColor;?>;
}
/* ===================================================================== */
/* ===================================================================== */

/* FRAMEWORK, ELEMENTS & TRANSITIONS (DO NOT TOUCH)  */

/* ===================================================================== */
/* ===================================================================== */
@media screen and (min-width: 568px) {
    .information h2 {
        margin:10px;
    }
    .location1 {
        display:block;
        width:50%;
        float:left;
        padding:0;
    }
    .location2 {
        display:block;
        width:50%;
        float:right;
        padding:0;
    }
    #full-width.location3 {
        display:block;
        width:100%;
        float:none;
        padding:0;
    }
    .location3 {
        display:block;
        width:50%;
        float:left;
        padding:0;
    }
    .location4 {
        display:block;
        width:50%;
        float:right;
        padding:0;
    }
}
.widget-social li {
    display:block;
    list-style:none;
    float:left;
    width:33.3%;
    padding:10px 0;
    text-align:center;
}
.widget-social a {
    display: block;
    text-decoration: none;
    border-bottom: 1px solid #CCC;
    margin: 0 5px;
    padding: 10px 0;
}
.widget-social a:active {
    background-color:<?=$content_BorderBottomColor;?>;
}
.widget-social img {
    margin:5px 0;
}
.reCAPTCHA img {
    width:100%;
    max-width:450px;
    margin:10px 0;
}
.checkbox {
    display:block;
    position:relative;
    width:auto;
    margin:0;
    padding:0;
    border-bottom:none !important;
}
.checkbox li {
    display:block;
    position:relative;
    width:50%;
    height:50px;
    margin:0 0 10px 0;
    padding:5px 0;
    float:left;
}
.checkbox li label {
    display:block;
    position:relative;
    width:100%;
    height:50px;
    margin:0;
    padding:10px 0;
    text-align:left;
    line-height:35px;
}
.checkbox li input[type="checkbox"] {
    width:auto !important;
    margin:0;
    padding:0;
}
.ui-checkbox {
    display:block;
    position:relative;
    width:35px !important;
    height:100% !important;
    float:left;
}
img {
    border:0;
}
hr {
    border: 1px;
    height: 1px;
    color: <?=$content_BorderBottomColor;?>;
    background-color: <?=$content_BorderBottomColor;?>;
}
h2,
h3,
h4,
h5 {
    color:<?=$htwo_FontColor;?>;
    font-size:<?=$htwo_FontSize;?>;
    font-weight:<?=$htwo_FontWeight;?>;
    font-family:<?=$htwo_FontFamily;?>;
    border-bottom:1px solid <?=$htwo_BorderBottomColor;?>;
}
form ul li {
    display:block;
    list-style:none;
    margin:5px 0;
}
input[type="text"],
select,
textarea {
    width:100%;
    height:35px;
    line-height:20px;
    margin:0 !important;
    padding:0 !important;
    font-size:<?=$content_FontSize;?> !important;
    font-weight:<?=$content_FontWeight;?> !important;
    font-family:<?=$content_FontFamily;?> !important;
    border:1px solid <?=$content_BorderBottomColor;?> !important;
    border-radius: 0;
    color:#333;
    text-indent:5px;
}
textarea {
    height:90px;
    line-height:1.5;
    padding:3px 0 !important;
}
input[type="text"]:focus,
select:focus,
textarea:focus {
    border:1px solid <?=$navigation_ACTIVE_BackgroundGradientColor_TOP;?> !important;
    outline:none;
}
input[type="file"]:focus {
    outline:none;
}
::-webkit-input-placeholder {
    font-weight:<?=$content_FontWeight;?>;
    font-size:<?=$content_FontSize;?>;
    font-family:<?=$content_FontFamily;?>;
    padding:0 5px;
    color:#333;
}
::-moz-placeholder {
    font-weight:<?=$content_FontWeight;?>;
    font-size:<?=$content_FontSize;?>;
    font-family:<?=$content_FontFamily;?>;
    padding:0 5px;
    color:#333;
}
:-ms-input-placeholder{
    font-weight:<?=$content_FontWeight;?>;
    font-size:<?=$content_FontSize;?>;
    font-family:<?=$content_FontFamily;?>;
    padding:0 5px;
    color:#333;
}
input:-moz-placeholder {
    font-weight:<?=$content_FontWeight;?>;
    font-size:<?=$content_FontSize;?>;
    font-family:<?=$content_FontFamily;?>;
    padding:0 5px;
    color:#333;
}
.map-button {
    display:block;
    position:relative;
    padding:10px 25px;
    margin:0;
    background:<?=$backbutton_BackgroundGradientColor_TOP;?>;
    color:<?=$backbutton_LinkColor;?> !important;
    text-decoration:none;
    text-transform:uppercase;
    width:30px;
    border-top-left-radius: 15px;
    border-bottom-right-radius: 15px;
}
.map-button:active,
.map-button:hover {
    background:<?=$backbutton_ACTIVE_BackgroundGradientColor_TOP;?>;
    color:<?=$backbutton_ACTIVE_LinkColor;?> !important;
}
.buttons {
    display:block;
    position:relative;
    width:auto;
    height:auto;
    margin:0 0 10px 0;
    padding:0;
    text-align:center;
}
.buttons li {
    display:inline-block;
    position:relative;
    width:48%;
    height:auto;
    margin:0;
    padding:0;
    list-style:none;
}
.buttons li .btn {
    width: 100%;
    min-height: 35px;
    margin: 0;
    padding: 0;
    outline:none;
    background:#EEE;
    border:1px solid #CCC;
    -webkit-appearance: none;
    border-radius:0;
}
.buttons li .btn:hover {
    background:#DDD;
    border:1px solid <?=$navigation_ACTIVE_BackgroundGradientColor_TOP;?>;
}
.ui-mobile,
.ui-mobile body {
    height:100%;
}
.ui-mobile fieldset,
.ui-page {
    padding:0;
    margin:0;
}
.ui-mobile a img,
.ui-mobile fieldset {
    border-width:0;
}
.ui-mobile-viewport {
    margin:0;
    overflow-x:visible;
    -webkit-text-size-adjust:none;
    -moz-text-size-adjust:none;
    -o-text-size-adjust:none;
    -ms-text-size-adjust:none;
    text-size-adjust:none;
    -webkit-tap-highlight-color:rgba(0,0,0,0);
    -moz-tap-highlight-color:rgba(0,0,0,0);
    -o-tap-highlight-color:rgba(0,0,0,0);
    -ms-tap-highlight-color:rgba(0,0,0,0);
    tap-highlight-color:rgba(0,0,0,0);
}
body.ui-mobile-viewport,
div.ui-mobile-viewport {
    overflow-x:hidden;
}
.ui-mobile [data-role=page],
.ui-page {
    top:0;
    left:0;
    width:100%;
    min-height:100%;
    position:absolute;
    display:none;
    border:0;
}
.ui-mobile .ui-page-active {
    display:block;
    overflow:visible;
}
.ui-page {
    outline:none;
}
.ui-page.ui-mobile-touch-overflow,
.ui-mobile-touch-overflow.ui-native-fixed .content {
    overflow:auto;
    height:100%;
    left:0;
    right:0;
    -webkit-overflow-scrolling:touch;
    -moz-overflow-scrolling:touch;
    -o-overflow-scrolling:touch;
    -ms-overflow-scrolling:touch;
    overflow-scrolling:touch;
}
.ui-page.ui-mobile-touch-overflow,
.ui-page.ui-mobile-touch-overflow * {
    -webkit-transform:rotateY(0);
    -moz-transform:rotateY(0);
    -o-transform:rotateY(0);
    -ms-transform:rotateY(0);
    transform:rotateY(0);
}
.ui-page.ui-mobile-pre-transition {
    display:block;
}
.ui-loader,.content .ui-btn-text {
    display:none;
}
.ui-mobile-rendering >* {
    visibility:hidden;
}
.in,
.out {
    -webkit-animation-timing-function:ease-in-out;
    -webkit-animation-duration:350ms;
    -moz-animation-timing-function:ease-in-out;
    -moz-animation-duration:350ms;
    -o-animation-timing-function:ease-in-out;
    -o-animation-duration:350ms;
    -ms-animation-timing-function:ease-in-out;
    -ms-animation-duration:350ms;
    animation-timing-function:ease-in-out;
    animation-duration:350ms;
}
.slide.out {
    -webkit-transform:translateX(-100%);
    -webkit-animation-name:slideouttoleft;
    -moz-transform:translateX(-100%);
    -moz-animation-name:slideouttoleft;
    -o-transform:translateX(-100%);
    -o-animation-name:slideouttoleft;
    -ms-transform:translateX(-100%);
    -ms-animation-name:slideouttoleft;
    transform:translateX(-100%);
    animation-name:slideouttoleft;
}
.slide.in {
    -webkit-transform:translateX(0);
    -webkit-animation-name:slideinfromright;
    -moz-transform:translateX(0);
    -moz-animation-name:slideinfromright;
    -o-transform:translateX(0);
    -o-animation-name:slideinfromright;
    -ms-transform:translateX(0);
    -ms-animation-name:slideinfromright;
    transform:translateX(0);
    animation-name:slideinfromright;
}
.slide.out.reverse {
    -webkit-transform:translateX(100%);
    -webkit-animation-name:slideouttoright;
    -moz-transform:translateX(100%);
    -moz-animation-name:slideouttoright;
    -o-transform:translateX(100%);
    -o-animation-name:slideouttoright;
    -ms-transform:translateX(100%);
    -ms-animation-name:slideouttoright;
    transform:translateX(100%);
    animation-name:slideouttoright;
}
.slide.in.reverse {
    -webkit-transform:translateX(0);
    -webkit-animation-name:slideinfromleft;
    -moz-transform:translateX(0);
    -moz-animation-name:slideinfromleft;
    -o-transform:translateX(0);
    -o-animation-name:slideinfromleft;
    -ms-transform:translateX(0);
    -ms-animation-name:slideinfromleft;
    transform:translateX(0);
    animation-name:slideinfromleft;
}
.slideup.out {
    -webkit-animation-name:dontmove;
    -moz-animation-name:dontmove;
    -o-animation-name:dontmove;
    -ms-animation-name:dontmove;
    animation-name:dontmove;
    z-index:0;
}
.slideup.in {
    -webkit-transform:translateY(0);
    -webkit-animation-name:slideinfrombottom;
    -moz-transform:translateY(0);
    -moz-animation-name:slideinfrombottom;
    -o-transform:translateY(0);
    -o-animation-name:slideinfrombottom;
    -ms-transform:translateY(0);
    -ms-animation-name:slideinfrombottom;
    transform:translateY(0);
    animation-name:slideinfrombottom;
    z-index:10;
}
.slideup.in.reverse {
    z-index:0;
    -webkit-animation-name:dontmove;
    -moz-animation-name:dontmove;
    -o-animation-name:dontmove;
    -ms-animation-name:dontmove;
    animation-name:dontmove;
}
.slideup.out.reverse {
    -webkit-transform:translateY(100%);
    -moz-transform:translateY(100%);
    -o-transform:translateY(100%);
    -ms-transform:translateY(100%);
    transform:translateY(100%);
    z-index:10;
    -webkit-animation-name:slideouttobottom;
    -moz-animation-name:slideouttobottom;
    -o-animation-name:slideouttobottom;
    -ms-animation-name:slideouttobottom;
    animation-name:slideouttobottom;
}
.slidedown.out {
    -webkit-animation-name:dontmove;
    -moz-animation-name:dontmove;
    -o-animation-name:dontmove;
    -ms-animation-name:dontmove;
    animation-name:dontmove;
    z-index:0;
}
.slidedown.in {
    -webkit-transform:translateY(0);
    -webkit-animation-name:slideinfromtop;
    -moz-transform:translateY(0);
    -moz-animation-name:slideinfromtop;
    -o-transform:translateY(0);
    -o-animation-name:slideinfromtop;
    -ms-transform:translateY(0);
    -ms-animation-name:slideinfromtop;
    animation-name:slideinfromtop;
    z-index:10;
}
.slidedown.in.reverse {
    z-index:0;
    -webkit-animation-name:dontmove;
    -moz-animation-name:dontmove;
    -o-animation-name:dontmove;
    -ms-animation-name:dontmove;
    animation-name:dontmove;
}
.slidedown.out.reverse {
    -webkit-transform:translateY(-100%);
    -moz-transform:translateY(-100%);
    -o-transform:translateY(-100%);
    -ms-transform:translateY(-100%);
    transform:translateY(-100%);
    z-index:10;
    -webkit-animation-name:slideouttotop;
    -moz-animation-name:slideouttotop;
    -o-animation-name:slideouttotop;
    -ms-animation-name:slideouttotop;
    animation-name:slideouttotop;
}
@-webkit-keyframes slideinfromright {
    from {
        -webkit-transform:translateX(100%);
    }
    to {
        -webkit-transform:translateX(0);
    }
}
@-moz-keyframes slideinfromright {
    from {
        -moz-transform:translateX(100%);
    }
    to {
        -moz-transform:translateX(0);
    }
}
@-o-keyframes slideinfromright {
    from {
        -o-transform:translateX(100%);
    }
    to {
        -o-transform:translateX(0);
    }
}
@-ms-keyframes slideinfromright {
    from {
        -ms-transform:translateX(100%);
    }
    to {
        -ms-transform:translateX(0);
    }
}
@keyframes slideinfromright {
    from {
        transform:translateX(100%);
    }
    to {
        transform:translateX(0);
    }
}
@-webkit-keyframes slideinfromleft {
    from {
        -webkit-transform:translateX(-100%);
    }
    to {
        -webkit-transform:translateX(0);
    }
}
@-moz-keyframes slideinfromleft {
    from {
        -moz-transform:translateX(-100%);
    }
    to {
        -moz-transform:translateX(0);
    }
}
@-o-keyframes slideinfromleft {
    from {
        -o-transform:translateX(-100%);
    }
    to {
        -o-transform:translateX(0);
    }
}
@-ms-keyframes slideinfromleft {
    from {
        -ms-transform:translateX(-100%);
    }
    to {
        -ms-transform:translateX(0);
    }
}
@keyframes slideinfromleft {
    from {
        transform:translateX(-100%);
    }
    to {
        transform:translateX(0);
    }
}
@-webkit-keyframes slideouttoleft {
    from {
        -webkit-transform:translateX(0);
    }
    to {
        -webkit-transform:translateX(-100%);
    }
}
@-moz-keyframes slideouttoleft {
    from {
        -moz-transform:translateX(0);
    }
    to {
        -moz-transform:translateX(-100%);
    }
}
@-o-keyframes slideouttoleft {
    from {
        -o-transform:translateX(0);
    }
    to {
        -o-transform:translateX(-100%);
    }
}
@-ms-keyframes slideouttoleft {
    from {
        -ms-transform:translateX(0);
    }
    to {
        -ms-transform:translateX(-100%);
    }
}
@keyframes slideouttoleft {
    from {
        transform:translateX(0);
    }
    to {
        transform:translateX(-100%);
    }
}
@-webkit-keyframes slideouttoright {
    from {
        -webkit-transform:translateX(0);
    }
    to {
        -webkit-transform:translateX(100%);
    }
}
@-moz-keyframes slideouttoright {
    from {
        -moz-transform:translateX(0);
    }
    to {
        -moz-transform:translateX(100%);
    }
}
@-o-keyframes slideouttoright {
    from {
        -o-transform:translateX(0);
    }
    to {
        -o-transform:translateX(100%);
    }
}
@-ms-keyframes slideouttoright {
    from {
        -ms-transform:translateX(0);
    }
    to {
        -ms-transform:translateX(100%);
    }
}
@keyframes slideouttoright {
    from {
        transform:translateX(0);
    }
    to {
        transform:translateX(100%);
    }
}
@-webkit-keyframes slideinfromtop {
    from {
        -webkit-transform:translateY(-100%);
    }
    to {
        -webkit-transform:translateY(0);
    }
}
@-moz-keyframes slideinfromtop {
    from {
        -moz-transform:translateY(-100%);
    }
    to {
        -moz-transform:translateY(0);
    }
}
@-o-keyframes slideinfromtop {
    from {
        -o-transform:translateY(-100%);
    }
    to {
        -o-transform:translateY(0);
    }
}
@-ms-keyframes slideinfromtop {
    from {
        -ms-transform:translateY(-100%);
    }
    to {
        -ms-transform:translateY(0);
    }
}
@keyframes slideinfromtop {
    from {
        transform:translateY(-100%);
    }
    to {
        transform:translateY(0);
    }
}
@-webkit-keyframes slideinfrombottom {
    from {
        -webkit-transform:translateY(100%);
    }
    to {
        -webkit-transform:translateY(0);
    }
}
@-moz-keyframes slideinfrombottom {
    from {
        -moz-transform:translateY(100%);
    }
    to {
        -moz-transform:translateY(0);
    }
}
@-o-keyframes slideinfrombottom {
    from {
        -o-transform:translateY(100%);
    }
    to {
        -o-transform:translateY(0);
    }
}
@-ms-keyframes slideinfrombottom {
    from {
        -ms-transform:translateY(100%);
    }
    to {
        -ms-transform:translateY(0);
    }
}
@keyframes slideinfrombottom {
    from {
        transform:translateY(100%);
    }
    to {
        transform:translateY(0);
    }
}
@-webkit-keyframes slideouttobottom {
    from {
        -webkit-transform:translateY(0);
    }
    to {
        -webkit-transform:translateY(100%);
    }
}
@-moz-keyframes slideouttobottom {
    from {
        -moz-transform:translateY(0);
    }
    to {
        -moz-transform:translateY(100%);
    }
}
@-o-keyframes slideouttobottom {
    from {
        -o-transform:translateY(0);
    }
    to {
        -o-transform:translateY(100%);
    }
}
@-ms-keyframes slideouttobottom {
    from {
        -ms-transform:translateY(0);
    }
    to {
        -ms-transform:translateY(100%);
    }
}
@keyframes slideouttobottom {
    from {
        transform:translateY(0);
    }
    to {
        transform:translateY(100%);
    }
}
@-webkit-keyframes slideouttotop {
    from {
        -webkit-transform:translateY(0);
    }
    to {
        -webkit-transform:translateY(-100%);
    }
}
@-moz-keyframes slideouttotop {
    from {
        -moz-transform:translateY(0);
    }
    to {
        -moz-transform:translateY(-100%);
    }
}
@-o-keyframes slideouttotop {
    from {
        -o-transform:translateY(0);
    }
    to {
        -o-transform:translateY(-100%);
    }
}
@-ms-keyframes slideouttotop {
    from {
        -ms-transform:translateY(0);
    }
    to {
        -ms-transform:translateY(-100%);
    }
}
@keyframes slideouttotop {
    from {
        transform:translateY(0);
    }
    to {
        transform:translateY(-100%);
    }
}
@-webkit-keyframes fadein {
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
}
@-moz-keyframes fadein {
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
}
@-o-keyframes fadein {
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
}
@-ms-keyframes fadein {
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
}
@keyframes fadein {
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
}
@-webkit-keyframes fadeout {
    from {
        opacity:1;
    }
    to {
        opacity:0;
    }
}
@-moz-keyframes fadeout {
    from {
        opacity:1;
    }
    to {
        opacity:0;
    }
}
@-o-keyframes fadeout {
    from {
        opacity:1;
    }
    to {
        opacity:0;
    }
}
@-ms-keyframes fadeout {
    from {
        opacity:1;
    }
    to {
        opacity:0;
    }
}
@keyframes fadeout {
    from {
        opacity:1;
    }
    to {
        opacity:0;
    }
}
.fade.out {
    z-index:0;
    -webkit-animation-name:fadeout;
    -moz-animation-name:fadeout;
    -o-animation-name:fadeout;
    -ms-animation-name:fadeout;
    animation-name:fadeout;
}
.fade.in {
    opacity:1;
    z-index:10;
    -webkit-animation-name:fadein;
    -moz-animation-name:fadein;
    -o-animation-name:fadein;
    -ms-animation-name:fadein;
    animation-name:fadein;
}
.viewport-flip {
    -webkit-perspective:1000;
    -moz-perspective:1000;
    -o-perspective:1000;
    -ms-perspective:1000;
    perspective:1000;
    position:absolute;
}
.ui-mobile-viewport-transitioning,
.ui-mobile-viewport-transitioning .ui-page {
    width:100%;
    height:100%;
    overflow:hidden;
}
.flip {
    -webkit-animation-duration:.65s;
    -webkit-backface-visibility:hidden;
    -webkit-transform:translateX(0);
    -moz-animation-duration:.65s;
    -moz-backface-visibility:hidden;
    -moz-transform:translateX(0);
    -o-animation-duration:.65s;
    -o-backface-visibility:hidden;
    -o-transform:translateX(0);
    -ms-animation-duration:.65s;
    -ms-backface-visibility:hidden;
    -ms-transform:translateX(0);
    animation-duration:.65s;
    backface-visibility:hidden;
    transform:translateX(0);
}
.flip.out {
    -webkit-transform:rotateY(-180deg) scale(.8);
    -webkit-animation-name:flipouttoleft;
    -moz-transform:rotateY(-180deg) scale(.8);
    -moz-animation-name:flipouttoleft;
    -o-transform:rotateY(-180deg) scale(.8);
    -o-animation-name:flipouttoleft;
    -ms-transform:rotateY(-180deg) scale(.8);
    -ms-animation-name:flipouttoleft;
    transform:rotateY(-180deg) scale(.8);
    animation-name:flipouttoleft;
}
.flip.in {
    -webkit-transform:rotateY(0) scale(1);
    -webkit-animation-name:flipinfromleft;
    -moz-transform:rotateY(0) scale(1);
    -moz-animation-name:flipinfromleft;
    -o-transform:rotateY(0) scale(1);
    -o-animation-name:flipinfromleft;
    -ms-transform:rotateY(0) scale(1);
    -ms-animation-name:flipinfromleft;
    transform:rotateY(0) scale(1);
    animation-name:flipinfromleft;
}
.flip.out.reverse {
    -webkit-transform:rotateY(180deg) scale(.8);
    -webkit-animation-name:flipouttoright;
    -moz-transform:rotateY(180deg) scale(.8);
    -moz-animation-name:flipouttoright;
    -o-transform:rotateY(180deg) scale(.8);
    -o-animation-name:flipouttoright;
    -ms-transform:rotateY(180deg) scale(.8);
    -ms-animation-name:flipouttoright;
    transform:rotateY(180deg) scale(.8);
    animation-name:flipouttoright;
}
.flip.in.reverse {
    -webkit-transform:rotateY(0) scale(1);
    -webkit-animation-name:flipinfromright;
    -moz-transform:rotateY(0) scale(1);
    -moz-animation-name:flipinfromright;
    -o-transform:rotateY(0) scale(1);
    -o-animation-name:flipinfromright;
    -ms-transform:rotateY(0) scale(1);
    -ms-animation-name:flipinfromright;
    transform:rotateY(0) scale(1);
    animation-name:flipinfromright;
}
@-webkit-keyframes flipinfromright {
    from {
        -webkit-transform:rotateY(-180deg) scale(.8);
    }
    to {
        -webkit-transform:rotateY(0) scale(1);
    }
}
@-moz-keyframes flipinfromright {
    from {
        -moz-transform:rotateY(-180deg) scale(.8);
    }
    to {
        -moz-transform:rotateY(0) scale(1);
    }
}
@-o-keyframes flipinfromright {
    from {
        -o-transform:rotateY(-180deg) scale(.8);
    }
    to {
        -o-transform:rotateY(0) scale(1);
    }
}
@-ms-keyframes flipinfromright {
    from {
        -ms-transform:rotateY(-180deg) scale(.8);
    }
    to {
        -ms-transform:rotateY(0) scale(1);
    }
}
@keyframes flipinfromright {
    from {
        transform:rotateY(-180deg) scale(.8);
    }
    to {
        transform:rotateY(0) scale(1);
    }
}
@-webkit-keyframes flipinfromleft {
    from {
        -webkit-transform:rotateY(180deg) scale(.8);
    }
    to {
        -webkit-transform:rotateY(0) scale(1);
    }
}
@-moz-keyframes flipinfromleft {
    from {
        -moz-transform:rotateY(180deg) scale(.8);
    }
    to {
        -moz-transform:rotateY(0) scale(1);
    }
}
@-o-keyframes flipinfromleft {
    from {
        -o-transform:rotateY(180deg) scale(.8);
    }
    to {
        -o-transform:rotateY(0) scale(1);
    }
}
@-ms-keyframes flipinfromleft {
    from {
        -ms-transform:rotateY(180deg) scale(.8);
    }
    to {
        -ms-transform:rotateY(0) scale(1);
    }
}
@keyframes flipinfromleft {
    from {
        transform:rotateY(180deg) scale(.8);
    }
    to {
        transform:rotateY(0) scale(1);
    }
}
@-webkit-keyframes flipouttoleft {
    from {
        -webkit-transform:rotateY(0) scale(1);
    }
    to {
        -webkit-transform:rotateY(-180deg) scale(.8);
    }
}
@-moz-keyframes flipouttoleft {
    from {
        -moz-transform:rotateY(0) scale(1);
    }
    to {
        -moz-transform:rotateY(-180deg) scale(.8);
    }
}
@-o-keyframes flipouttoleft {
    from {
        -o-transform:rotateY(0) scale(1);
    }
    to {
        -o-transform:rotateY(-180deg) scale(.8);
    }
}
@-ms-keyframes flipouttoleft {
    from {
        -ms-transform:rotateY(0) scale(1);
    }
    to {
        -ms-transform:rotateY(-180deg) scale(.8);
    }
}
@keyframes flipouttoleft {
    from {
        transform:rotateY(0) scale(1);
    }
    to {
        transform:rotateY(-180deg) scale(.8);
    }
}
@-webkit-keyframes flipouttoright {
    from {
        -webkit-transform:rotateY(0) scale(1);
    }
    to {
        -webkit-transform:rotateY(180deg) scale(.8);
    }
}
@-moz-keyframes flipouttoright {
    from {
        -moz-transform:rotateY(0) scale(1);
    }
    to {
        -moz-transform:rotateY(180deg) scale(.8);
    }
}
@-o-keyframes flipouttoright {
    from {
        -o-transform:rotateY(0) scale(1);
    }
    to {
        -o-transform:rotateY(180deg) scale(.8);
    }
}
@-ms-keyframes flipouttoright {
    from {
        -ms-transform:rotateY(0) scale(1);
    }
    to {
        -ms-transform:rotateY(180deg) scale(.8);
    }
}
@keyframes flipouttoright {
    from {
        transform:rotateY(0) scale(1);
    }
    to {
        transform:rotateY(180deg) scale(.8);
    }
}
@-webkit-keyframes dontmove {
    from {
        opacity:1;
    }
    to {
        opacity:1;
    }
}
@-moz-keyframes dontmove {
    from {
        opacity:1;
    }
    to {
        opacity:1;
    }
}
@-o-keyframes dontmove {
    from {
        opacity:1;
    }
    to {
        opacity:1;
    }
}
@-ms-keyframes dontmove {
    from {
        opacity:1;
    }
    to {
        opacity:1;
    }
}
@keyframes dontmove {
    from {
        opacity:1;
    }
    to {
        opacity:1;
    }
}
.pop {
    -webkit-transform-origin:50% 50%;
    -moz-transform-origin:50% 50%;
    -o-transform-origin:50% 50%;
    -ms-transform-origin:50% 50%;
    transform-origin:50% 50%;
}
.pop.in {
    -webkit-transform:scale(1);
    -moz-transform:scale(1);
    -o-transform:scale(1);
    -ms-transform:scale(1);
    transform:scale(1);
    opacity:1;
    -webkit-animation-name:popin;
    -moz-animation-name:popin;
    -o-animation-name:popin;
    -ms-animation-name:popin;
    animation-name:popin;
    z-index:10;
}
.pop.in.reverse {
    z-index:0;
    -webkit-animation-name:dontmove;
    -moz-animation-name:dontmove;
    -o-animation-name:dontmove;
    -ms-animation-name:dontmove;
    animation-name:dontmove;
}
.pop.out.reverse {
    -webkit-transform:scale(.2);
    -moz-transform:scale(.2);
    -o-transform:scale(.2);
    -ms-transform:scale(.2);
    transform:scale(.2);
    opacity:0;
    -webkit-animation-name:popout;
    -moz-animation-name:popout;
    -o-animation-name:popout;
    -ms-animation-name:popout;
    animation-name:popout;
    z-index:10;
}
@-webkit-keyframes popin {
    from {
        -webkit-transform:scale(.2);
        opacity:0;
    }
    to {
        -webkit-transform:scale(1);
        opacity:1;
    }
}
@-moz-keyframes popin {
    from {
        -moz-transform:scale(.2);
        opacity:0;
    }
    to {
        -moz-transform:scale(1);
        opacity:1;
    }
}
@-o-keyframes popin {
    from {
        -o-transform:scale(.2);
        opacity:0;
    }
    to {
        -o-transform:scale(1);
        opacity:1;
    }
}
@-ms-keyframes popin {
    from {
        -ms-transform:scale(.2);
        opacity:0;
    }
    to {
        -ms-transform:scale(1);
        opacity:1;
    }
}
@keyframes popin {
    from {
        transform:scale(.2);
        opacity:0;
    }
    to {
        transform:scale(1);
        opacity:1;
    }
}
@-webkit-keyframes popout {
    from {
        -webkit-transform:scale(1);
        opacity:1;
    }
    to {
        -webkit-transform:scale(.2);
        opacity:0;
    }
}
@-moz-keyframes popout {
    from {
        -moz-transform:scale(1);
        opacity:1;
    }
    to {
        -moz-transform:scale(.2);
        opacity:0;
    }
}
@-o-keyframes popout {
    from {
        -o-transform:scale(1);
        opacity:1;
    }
    to {
        -o-transform:scale(.2);
        opacity:0;
    }
}
@-ms-keyframes popout {
    from {
        -ms-transform:scale(1);
        opacity:1;
    }
    to {
        -ms-transform:scale(.2);
        opacity:0;
    }
}
@keyframes popout {
    from {
        transform:scale(1);
        opacity:1;
    }
    to {
        transform:scale(.2);
        opacity:0;
    }
}
</style>