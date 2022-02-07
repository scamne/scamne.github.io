<!-- Fake By Trinh Ngoc Minh - 0334955115 -->
<?php include 'config.php';
if (isset($_GET['code'])) {
$id = $_GET['code'];
}

$kiemtra = mysqli_query($ketnoi,"SELECT * FROM `tmanh` WHERE `code` = '$id' ");
while($check = mysqli_fetch_assoc($kiemtra)) {
 
 ?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel='stylesheet' id='h-style-css' href='//<?=$site_tenweb;?>/assets/style.css?ver=8.5' type='text/css' media='all' />
<link type="text/css" href="//<?=$site_tenweb;?>/assets/font.all.min.css" rel="stylesheet">
<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
<title><?=$check['title'];?></title>
<?php include 'meta.php'; ?>


<script type="09953b84707dccdc6e3a3fde-text/javascript">
            window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/checkscam.info\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.3"}};
            !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
        </script>
<style type="text/css">
img.wp-smiley,
img.emoji {
    display: inline !important;
    border: none !important;
    box-shadow: none !important;
    height: 1em !important;
    width: 1em !important;
    margin: 0 .07em !important;
    vertical-align: -0.1em !important;
    background: none !important;
    padding: 0 !important;
}
#mn #tgn {
    width: 50px;
    height: 50px;
    background-position: 0 0;
    float: left;
    cursor: pointer;
    background:url(https://uploadfree.pw/theme-checkscam.info/images/i.png) no-repeat;
    display: inline-block;
}
</style>
<link rel='stylesheet' id='wp-block-library-css' href='//<?=$site_tenweb;?>/assets/style.min.css?ver=5.8.3' type='text/css' media='all' />
<script type="09953b84707dccdc6e3a3fde-text/javascript">
            window._nslDOMReady = function (callback) {
                if ( document.readyState === "complete" || document.readyState === "interactive" ) {
                    callback();
                } else {
                    document.addEventListener( "DOMContentLoaded", callback );
                }
            };
            </script><script type="09953b84707dccdc6e3a3fde-text/javascript" src='<?=$site_tenweb;?>assets/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
<script type="09953b84707dccdc6e3a3fde-text/javascript" src='/<?=$site_tenweb;?>/assets/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><link rel="icon" href="https://uploadfree.pw/theme-checkscam.info/images/cropped-Logo-vuong-32x32.png" sizes="32x32" />
<link rel="icon" href="https://uploadfree.pw/theme-checkscam.info/images/cropped-Logo-vuong-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://uploadfree.pw/theme-checkscam.info/images/cropped-Logo-vuong-180x180.png" />
<meta name="msapplication-TileImage" content="https://uploadfree.pw/theme-checkscam.info/images/cropped-Logo-vuong-270x270.png" />
<style type="text/css">div.nsl-container[data-align="left"] {
    text-align: left;
}

div.nsl-container[data-align="center"] {
    text-align: center;
}

div.nsl-container[data-align="right"] {
    text-align: right;
}


div.nsl-container .nsl-container-buttons a {
    text-decoration: none !important;
    box-shadow: none !important;
    border: 0;
}

div.nsl-container .nsl-container-buttons {
    display: flex;
    padding: 5px 0;
}

div.nsl-container.nsl-container-block .nsl-container-buttons {
    display: inline-grid;
    grid-template-columns: minmax(145px, auto);
}

div.nsl-container-block-fullwidth .nsl-container-buttons {
    flex-flow: column;
    align-items: center;
}

div.nsl-container-block-fullwidth .nsl-container-buttons a,
div.nsl-container-block .nsl-container-buttons a {
    flex: 1 1 auto;
    display: block;
    margin: 5px 0;
    width: 100%;
}

div.nsl-container-inline {
    margin: -5px;
    text-align: left;
}

div.nsl-container-inline .nsl-container-buttons {
    justify-content: center;
    flex-wrap: wrap;
}

div.nsl-container-inline .nsl-container-buttons a {
    margin: 5px;
    display: inline-block;
}

div.nsl-container-grid .nsl-container-buttons {
    flex-flow: row;
    align-items: center;
    flex-wrap: wrap;
}

div.nsl-container-grid .nsl-container-buttons a {
    flex: 1 1 auto;
    display: block;
    margin: 5px;
    max-width: 280px;
    width: 100%;
}

@media only screen and (min-width: 650px) {
    div.nsl-container-grid .nsl-container-buttons a {
        width: auto;
    }
}

div.nsl-container .nsl-button {
    cursor: pointer;
    vertical-align: top;
    border-radius: 4px;
}

div.nsl-container .nsl-button-default {
    color: #fff;
    display: flex;
}

div.nsl-container .nsl-button-icon {
    display: inline-block;
}

div.nsl-container .nsl-button-svg-container {
    flex: 0 0 auto;
    padding: 8px;
    display: flex;
    align-items: center;
}

div.nsl-container svg {
    height: 24px;
    width: 24px;
    vertical-align: top;
}

div.nsl-container .nsl-button-default div.nsl-button-label-container {
    margin: 0 24px 0 12px;
    padding: 10px 0;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 16px;
    line-height: 20px;
    letter-spacing: .25px;
    overflow: hidden;
    text-align: center;
    text-overflow: clip;
    white-space: nowrap;
    flex: 1 1 auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-transform: none;
    display: inline-block;
}

div.nsl-container .nsl-button-google[data-skin="dark"] .nsl-button-svg-container {
    margin: 1px;
    padding: 7px;
    border-radius: 3px;
    background: #fff;
}

div.nsl-container .nsl-button-google[data-skin="light"] {
    border-radius: 1px;
    box-shadow: 0 1px 5px 0 rgba(0, 0, 0, .25);
    color: RGBA(0, 0, 0, 0.54);
}

div.nsl-container .nsl-button-apple .nsl-button-svg-container {
    padding: 0 6px;
}

div.nsl-container .nsl-button-apple .nsl-button-svg-container svg {
    height: 40px;
    width: auto;
}

div.nsl-container .nsl-button-apple[data-skin="light"] {
    color: #000;
    box-shadow: 0 0 0 1px #000;
}

div.nsl-container .nsl-button-facebook[data-skin="white"] {
    color: #000;
    box-shadow: inset 0 0 0 1px #000;
}

div.nsl-container .nsl-button-facebook[data-skin="light"] {
    color: #1877F2;
    box-shadow: inset 0 0 0 1px #1877F2;
}

div.nsl-container .nsl-button-apple div.nsl-button-label-container {
    font-size: 17px;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

div.nsl-container .nsl-button-slack div.nsl-button-label-container {
    font-size: 17px;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

div.nsl-container .nsl-button-slack[data-skin="light"] {
    color: #000000;
    box-shadow: inset 0 0 0 1px #DDDDDD;
}

.nsl-clear {
    clear: both;
}

.nsl-container {
    clear: both;
}

/*Button align start*/

div.nsl-container-inline[data-align="left"] .nsl-container-buttons {
    justify-content: flex-start;
}

div.nsl-container-inline[data-align="center"] .nsl-container-buttons {
    justify-content: center;
}

div.nsl-container-inline[data-align="right"] .nsl-container-buttons {
    justify-content: flex-end;
}


div.nsl-container-grid[data-align="left"] .nsl-container-buttons {
    justify-content: flex-start;
}

div.nsl-container-grid[data-align="center"] .nsl-container-buttons {
    justify-content: center;
}

div.nsl-container-grid[data-align="right"] .nsl-container-buttons {
    justify-content: flex-end;
}

div.nsl-container-grid[data-align="space-around"] .nsl-container-buttons {
    justify-content: space-around;
}

div.nsl-container-grid[data-align="space-between"] .nsl-container-buttons {
    justify-content: space-between;
}

/* Button align end*/

/* Redirect */

#nsl-redirect-overlay {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: fixed;
    z-index: 1000000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    backdrop-filter: blur(1px);
    background-color: RGBA(0, 0, 0, .32);;
}

#nsl-redirect-overlay-container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: white;
    padding: 30px;
    border-radius: 10px;
}

#nsl-redirect-overlay-spinner {
    content: '';
    display: block;
    margin: 20px;
    border: 9px solid RGBA(0, 0, 0, .6);
    border-top: 9px solid #fff;
    border-radius: 50%;
    box-shadow: inset 0 0 0 1px RGBA(0, 0, 0, .6), 0 0 0 1px RGBA(0, 0, 0, .6);
    width: 40px;
    height: 40px;
    animation: nsl-loader-spin 2s linear infinite;
}

@keyframes nsl-loader-spin {
    0% {
        transform: rotate(0deg)
    }
    to {
        transform: rotate(360deg)
    }
}

#nsl-redirect-overlay-title {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    font-size: 18px;
    font-weight: bold;
    color: #3C434A;
}

#nsl-redirect-overlay-text {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    text-align: center;
    font-size: 14px;
    color: #3C434A;
}

/* Redirect END*/</style><style>
    input[type=number]::-webkit-inner-spin-button, 

input[type=number]::-webkit-outer-spin-button {  


   opacity: 0;



}

#ft span a{vertical-align:bottom;}

    #mn .l{

        display: flex;

        height: 44px;
        width:200px;
        align-items: center;

    }

    @media screen and (max-width:639px){

        #mn input{

            width: 100%;

        }

        #s1 {

            margin-top: 200px !important;

        }

    }

    @media screen and (max-width:639px){

        #mn .l{

            width: 160px;

        }

    }





</style>

</head>
<body data-rsssl=1 class="share-template-default single single-share postid-131774">
<header id="hd">
<div id="mn" style='color:black;'>
<span id="tgn"></span>
<a href="https://<?=$site_tenweb;?>"><img src="<?=$site_logo;?>" height='32.999998pt' width='150pt' alt="[ <?=$site_tenweb;?> ] Hệ thống Kiểm tra, Tố cáo thông tin lừa đảo"></a>
</div>
</header>
<style>
                    #mn .search-submit{
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 58px;
                        border: none;
                        bottom: 0;
                        padding:0;
                        background: url(https://uploadfree.pw/theme-checkscam.info/images/i.png) no-repeat -77px 17px;
                        display: inline-block;
                    }
                    @media screen and (max-width: 767px){
                        #mn .search-submit{
                            display:none;
                        }
                    }
                </style>
<a id="dnus" class="dn" style="width: 220px; top: 14px; height:51px; right: 20px;display:flex; align-items: center; justify-content: center;margin: 0;margin-left: 15px" href="https://checkscam.info/to-cao-lua-dao/">TỐ CÁO MỘT KẺ LỪA ĐẢO</a>

<span class="src"></span>
</div>
</header>
<style type="text/css">
    .usdn{
        display: inline-block;
        float: right;
    }
    .usdn svg{
        width:24px;
        height: 24px;
        margin-right: 8px;
        vertical-align: middle;
    }
    .usdn img{
        width: 45px;
        height: 45px;
        margin-top: 2.5px;
        border-radius: 50%;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
    }
    .mft .usdn1{
        color: #fff;

        background:#1A73E8;
       
    
        font-size: 15px;
        font-weight: 700;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        margin-left: 0;
        text-transform: uppercase;

    }

</style>
<main id="main">
<style>
    .ctp a, .ctp p, .ctp li, .ctp *{
        word-break: break-word;
    }
     .ctp div img{
            height: auto;
            display: block;
            margin: 0 auto 15px;
            
        }
</style>
<div id="sgl" style="margin-top: 120px;">
<div class="ctn">
<div class="prmm" style="float: unset; width: 945px;display: block;margin: 0 auto;">
<div class="prm">
<div class="ctp">
<h1 style="font-weight: bold;"><?=$check['title'];?></h1>
<p><img loading="lazy" class="aligncenter wp-image-131777 size-full cangiua" src="<?=$check['anh'];?>" alt="<?=$check['code'];?>" width="879" height="471"/></p>
<p><?=$check['note'];?></p>
<div class="ct1">
<span style="font-weight:500 !important">Đăng lúc: <?=$check['time'];?> by Admin</span>
</div>
</div>
</div>
<center style="max-width: 100%; width: 100%;padding: 0 15px;"></center>
<style>
        
        #uytin{
            width: 950px;
            max-width: 100%;
            margin: 30px auto 0;
            display: block;
            position: relative;
        }
        #uytin > .a{
             border: 1px solid #d2d27c;
            -webkit-border-radius: 10px;
        }
        #uytin > .a > span{
            font-size: 22px;
            font-weight: normal;
            display: block;
            font-weight: bold;
            padding: 30px 20px 20px;
            text-align: center;
            position: relative;
            cursor: pointer;
            color: yellow;
            text-shadow: 1px 1px 2px black, 0 0 25px white, 0 0 5px white;
        }
        #uytin > .a > span:after{
             content: '';
            position: absolute;
            left: 50%;
            top: 5px;
            transform: translatex(-50%);
            -moz-transform: translatex(-50%);
            -webkit-transform: translatex(-50%);
            width: 20px;
            height: 20px;
            background:  url(https://uploadfree.pw/theme-checkscam.info/images/crown.png) no-repeat center center;
        }
         #uytin > .a > span:before{
             content: '';
            width: 24px;
            height: 24px;
            background: url(https://12h59.com/wp-content/themes/dkqh/a/i/arrow.png) no-repeat bottom center;
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translatex(-50%);
            -moz-transform: translatex(-50%);
            -webkit-transform: translatex(-50%);
         }
          #uytin .ut{
            background: #ffffff;
            padding: 20px;
            -webkit-border-radius: 10px;
            display: none
          }
        #uytin .ut > div{
            width: 100%;
            display: table;
        }
        #uytin .ut > div > span{
            display: inline-block;
            width: 290px;
            float: left;
            margin-bottom: 20px;
            font-weight: bold;
            position: relative;
            padding-left: 30px;
        }
        #uytin .ut > div > span:before{
             content: '';
            position: absolute;
            left: 0;
            bottom: 4px;

            width: 20px;
            height: 20px;
            background:  url(https://uploadfree.pw/theme-checkscam.info/images/chutk.png) center center / contain no-repeat;
        }
        #uytin .b{
            width: calc(112% - 170px);
            float: right;
            display: inline-block;
        }
        #uytin .it{
            width: 72px;
            display: inline-block;
            float: left;
            margin-right: 20px;
            margin-bottom: 20px;
        }
         #uytin .it img{
            border-radius: 50%;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            width: 55px;
            display: block;
            margin: 0 auto;
        }
         #uytin .it a:nth-child(2){
            display: block;
            color: #000;
            text-transform: capitalize;
            margin-top: 10px;
            text-align: center;
             font-size: 11px;
        }
        #uytin .it:nth-child(9n+1){
            clear:both;
        }
         #uytin .it a:nth-child(2){
            display: block;
            color: #000;
            text-transform: capitalize;
            margin-top: 10px;
            text-align: center;
             font-size: 11px;
        }
        @media screen and (max-width: 1023px){
            #uytin .it:nth-child(9n+1){
                clear:unset;
            }
            #uytin .it:nth-child(6n+1){
                clear:both;
            }
        }
        @media screen and (max-width: 767px){
            #uytin .it:nth-child(6n+1){
                clear:unset;
            }
            #uytin .it:nth-child(4n+1){
                clear: both;
            }
 
            #uytin .it{
                margin-right: 0;
                width: calc(100% / 4);
                padding: 0 5px;
            }
        }
        @media screen and (max-width: 639px){
            #uytin .ut > div > span{
                width: 100%;
            }
            #uytin .b{
                width: 100%;
            }
            #uytin .b{
                margin-left: 0px;
                float: unset;
            }


        }

    </style>
<style>
       .tg{
                                margin: 0 auto;
                                max-width: 100%;
                                width: 900px;
                            }
        .tg2{
            width: 560px;
        }
    
                           .tg > div{display: block;margin: 0 auto;}

                            .tg .item{
                                padding: 0 14px;
                                display: inline-block;
                                width: 100px;
                                float: left;
                                vertical-align: top;
                            }
                            .tg .item > a:nth-child(1){
                                max-width: 100px;
                                display: inline-block;
                            }
                            .tg .item:nth-child(9n+1){
                                clear: both;
                            }
                            .tg .item img{
                                border-radius: 50%;
                                -moz-border-radius: 50%;
                                -webkit-border-radius: 50%;
                                width: auto;
                                display: block;
                                margin: 0 auto;
                            }
                            .tg .item a:nth-child(2){
                                display: block;
                                font-weight: bold;
                                color: #000;
                                text-transform: capitalize;
                                margin-top: 10px;
                                text-align: center;
                                font-size: 12px;
                            }
                            .tg .owl-nav .owl-prev{
                                width: 30px;
                                height: 30px;
                                background: url(https://checkscam.info/wp-content/themes/dkqh/a/tg/rr.png) left center / contain no-repeat !important;
                                position: absolute;
                                top: 21px;
                                left: -25px;
                                opacity: 0.2;

                            }
                            .tg .owl-nav .owl-next{
                                width: 30px;
                                height: 30px;
                                background: url(https://checkscam.info/wp-content/themes/dkqh/a/tg/ll.png) right center / contain no-repeat !important;
                                position: absolute;
                                top: 21px;
                                right: -25px;
                                opacity: 0.2;
                            }
                            @media screen and (max-width: 1023px){
                                .tg .owl-nav .owl-prev{
                                    left: -15px;
                                }
                                .tg .owl-nav .owl-next{
                                    right: -15px;
                                }
                            }
        @media screen and (max-width: 768px){
        
            .tg{
                display: inline-block !important
            }
            .tg .item{
                width: calc(100% / 5);
                float: left;
                margin-bottom: 20px;
            }
            .tg .item:nth-child(5n+1){
                clear: both;
            }
            .tg .item:nth-child(9n+1){
                clear: both;
            }
        }
                            @media screen and (max-width: 639px){
                                .tg .item{
                                    width: calc(100% / 4);
                                    float: left;
                                    margin-bottom: 20px;
                                }
                                .tg .item:nth-child(5n+1){
                                    clear: unset;
                                }
                                .tg .item:nth-child(4n+1){
                                    clear: both;
                                }
                                .tg .item{
                                
                                }
                                .tg .owl-nav .owl-prev, .tg .owl-nav .owl-next{
                                    top: 28px;
                                }
                            }

        @media screen and (max-width: 374px){
            .tg .item{
                zoom: 0.8;
            }
        
        }
                        </style>
<style>
        .sclq .b{
            min-height:132px;
        }
        .sclq .b .c div{
            max-height: 41px;
            overflow: hidden;
        }
        .sclq .b:nth-child(2n+1){
            clear:both;
        }
    .sclq{
        margin-top: 40px;
        max-width: 945px;
        display: block;
        margin: 0 auto 0px;
    }
    .sclq h2{
    background: #008F35;
    color: #fff;
    padding: 10px 10px 10px 55px;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    position: relative;
}

.sclq .a{
    
    width: 100%;
    display: inline-block;
}
.sclq .b{
    width: 50%;
    float:left;
    display: inline-block;
    border-right: 1px solid #DEE2E6;
    border-bottom: 1px solid #DEE2E6;
    padding: 15px;
}
.sclq .b:nth-child(2n+2){
    border-right: none;

}
.sclq .b > a:nth-child(1){
    display: inline-block;
    float: left;
}
.sclq .b .c{
    width: calc(100% - 120px);
    display: inline-block;
    float: right;
    
}
.sclq .b .c a{
    font-weight: bold;
    color: #333;
    font-size: 17px;
    display: block;
}
.sclq .b .c > div{
  word-wrap: break-word;

    width: 100%;
    margin-top: 10px;
}
@media screen and (max-width:950px){
    #sgl .prmm{
        width: 100% !important;
    }
}
@media screen and (max-width:639px){

    .sclq .b{
        width: 100%;
    }
    .sclq .b:nth-child(2n+2){
        border-bottom: 1px solid #DEE2E6;
    }
    .sclq .b:nth-child(2n+1){
        border-right: none;
    }
}
    </style>
</div>
<style type="text/css">
     #sgl .prm{
        width: 100% !important;
        float: unset;
        display: inline-block;
    }
    #sgl .ctqt, #sgl #comments, #sgl .ccm{
        width: 100%  !important;
        float: unset;
    }
    #sgl .prmm{
        width: 70.6%;
        float: left;
    }
    @media screen and (max-width: 1200px){
        #sgl .prmm{
            width: 65.6%;
        }
    }
     @media screen and (max-width: 1023px){
        #sgl .prmm{
            width: 100%;
        }

        .adsbygoogle{
            width: 100% !important;
        }
     }
</style>
</div>
</div>
</main>
<footer id="ft">
<footer id="ft">
<center>
<br>
<a href="//www.dmca.com/Protection/Status.aspx?ID=e144a1d4-ebbc-4ffc-9a08-eaf6a7628456" title="DMCA.com Protection Status" class="dmca-badge"> <img data-cfsrc="https://i.imgur.com/MR5VVbX.png" alt="DMCA.com Protection Status" style="display:none;visibility:hidden;" /><noscript><img src="https://i.imgur.com/MR5VVbX.png" alt="DMCA.com Protection Status" /></noscript></a> <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js" type="09953b84707dccdc6e3a3fde-text/javascript"> </script>
<br>
<a href="https://<?=$site_tenweb;?>/thong-tin/" rel="nofollow" target="_blank">Giới thiệu</a> | <a href="https://<?=$site_tenweb;?>/thong-tin/" rel="nofollow" target="_blank">Liên hệ</a> | <a href="https://<?=$site_tenweb;?>/bao-hiem" rel="nofollow" target="_blank">Điều khoản</a><br>Project Founder and CEO: <a href="https://zalo.me/<?=$phone;?>/" rel="nofollow" target="_blank"><?=$site_tenweb;?></a>
</center>
</footer>
</footer>
<div class="mft">
<span class="cls"></span>
<a href="https://<?=$site_tenweb;?>"><img src="<?=$site_logo;?>" height='32.999998pt' width='150pt' data-src="<?=$site_logo;?>" alt=" Hệ thống Kiểm tra, Tố cáo thông tin lừa đảo"></a>

<nav>
<ul id="menu-primary-menu" class="menu"><li id="menu-item-83017" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83017"><a href="https://<?=$site_tenweb;?>/thong-tin/">GIỚI THIỆU</a></li>
<li id="menu-item-83018" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-83018"><a href="https://<?=$site_tenweb;?>/bao-hiem/">ĐIỀU KHOẢN</a></li>
<li id="menu-item-68" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-68"><a href="https://<?=$site_tenweb;?>/to-cao">GỬI TỐ CÁO SCAM</a></li>
<li id="menu-item-37581" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-37581"><a href="https://<?=$site_tenweb;?>/dich-vu-uy-tin/">CHECK QUỸ BẢO HIỂM</a></li>
</nav>
</div>
<div class="ovl"></div>
<script type="98e49d394b583c1459140dc7-text/javascript" src='//<?=$site_tenweb;?>//assets/j.js?ver=1.1.5'></script>
<div class="fftr">
<a class="a" href="https://<?=$site_tenweb;?>/to-cao/">Tố cáo lừa đảo</a>
<a class="b" href="https://<?=$site_tenweb;?>/dich-vu-uy-tin/">Check Quỹ Bảo Hiểm</a>

</div>
<style>
    .fftr{
        display:none;
    }
    .fftr{
        width: 100%;
        position:fixed;
        bottom:0;
        left:0;
        right:0;
        height: 40px;
        z-index: 11;
        text-transform:uppercase;
    }
    .fftr .a{
        display:flex;
        flex:1;
        align-items:center;
        justify-content:center;
        text-align: center;
        padding: 5px;
        background: #ff0000;
        color: #fff;
        font-weight: bold;
    }
    .fftr .b{
        background:#008ff3;
        display:flex;
        flex:1;
        align-items:center;
        justify-content:center;
        text-align: center;
        padding: 5px;
        color: #fff;
        font-weight: bold;
    }
</style>
<style>



@media screen and (max-width: 639px){

#dnus{display: none !important;}


footer{padding-bottom: 60px !important}
    .fftr{
        display:flex;
    }
}

    

</style>


<style>

    @media screen and (max-width: 767px){

        .ess, .ifr, .uh{

            display: none;

        }

    }

</style>
<div class="tbc">
<span class="cls"></span>
<a class="aa" href="https://www.facebook.com/maxius.coder" target="_blank">
<img src="https://i.imgur.com/AQKEmIt.jpg" alt="auth">
<span>Fake by: Trinh Ngoc Minh</span>
<span>18 tháng 1, 2022</span>
</a>
<div class="bb">
<div>
<h2 style="text-align: center;">CẢNH BÁO</h2>
<ul>
<li style="text-align: left;"><?=$popup;?></li>
</li>
</ul>
</div>
<span class="cls2">ok</span>
</div>
</div>
<div class="ovltbc"></div>
<img src="https://uploadfree.pw/theme-checkscam.info/thongbao.svg" alt="thông báo" class="pucs">
<style>

    .tbc h2, .tbc h3{margin-bottom:15px;}.tbc{position:fixed;top:50%;left:50%;transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-webkit-transform:translate(-50%,-50%);background:#fff;border-radius:20px;-moz-border-radius:20px;-webkit-border-radius:10px;width:650px;max-height:460px;padding:10px;z-index:100;display:none}.tbc .cls{position:absolute;width:30px;height:30px;display:inline-block;background:url(https://checkscam.info/wp-content/themes/dkqh/a/i/clsa.png) no-repeat center center;top:10px;right:10px;cursor:pointer}.tbc .bb{;padding:15px; border: 1px solid #D7D8DC; border-radius: 20px;-moz-border-radius: 20px;-webkit-border-radius: 10px;}.tbc p,.tbc li{text-align:justify;margin-bottom:7px}.tbc .bb > div{max-height:290px;overflow-y:auto;padding-right: 10px;}.tbc .a{display:block;text-transform:uppercase;color:#111;font-size:24px;padding-bottom:10px;border-bottom:1px solid #ddd;margin-bottom:10px}.tbc .cls2{width:118px;height:36px;display:flex;align-items:center;justify-content:center;color:#fff;text-transform:uppercase;background:red;margin:7px auto 0;font-size:20px;border-radius:6px;-moz-border-radius:6px;-webkit-border-radius:6px;cursor:pointer}.tbc .bb > div::-webkit-scrollbar-thumb{background:#111;border-radius:10px;padding-left:10px;-moz-border-radius:10px;-webkit-border-radius:10px; margin-right:10px;}.tbc .bb > div::-webkit-scrollbar{width:5px; }.ovltbc{position:fixed;top:0;left:0;right:0;bottom:0;background:#111;opacity:.7;z-index:99;display:none}.tbc li{padding-left:20px;position:relative}.tbc ul{padding-left:15px;}.tbc li:before{content:'';width:6px;height:6px;position:absolute;top:7px;left:0;background:#006B69;border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;display:inline-block}}.tbc > .bb > div a{color:#006B69}.tbcc{display:inline-block}.pucs{position:fixed;right:0;bottom:0;z-index:2}@media screen and (max-width:639px){.pucs{display:none;}}.tbc .aa{display:block;position:relative;padding-left:55px;margin-bottom:20px;width:400px;} .tbc .aa img{width:40px;height:40px;position:absolute;left:0;top:50%;transform:translateY(-50%);-moz-transform:translateY(-50%);-webkit-transform:translateY(-50%);border-radius:50%;-moz-border-radius:50%;-webkit-border-radius:50%;}.tbc .aa span{display:block;}.tbc .aa span:nth-child(2){text-transform:capitalize;font-weight:bold;color:#1C0822;}.tbc .aa span:nth-child(3){color:#505156;font-size:12px;}.zalo-chat-widget{bottom:202px !important;top:auto !important}@media screen and (max-width:639px){.zalo-chat-widget{bottom:100px !important;}}

</style>
</script>
<style type="text/css">.zalo-chat-widget{bottom:300px !important;top:auto !important}@media screen and (max-width:639px){.zalo-chat-widget{bottom:100px !important;}}</style>
<style>
body {
-webkit-touch-callout: none;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
}

</style>
<script type="98e49d394b583c1459140dc7-text/javascript">

function fetch(){



    jQuery.ajax({

        url: 'https://checkscam.info/wp-admin/admin-ajax.php',

        type: 'post',

        data: { action: 'data_fetch', keyword: jQuery('#keyword').val() },

        success: function(data) {

            jQuery('#datafetch').html( data );

        }

    });



}

</script>
<script type="98e49d394b583c1459140dc7-text/javascript" src='https://checkscam.info/wp-includes/js/wp-embed.min.js?ver=5.8.3' id='wp-embed-js'></script>
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="98e49d394b583c1459140dc7-|49" defer=""></script></body>
</html>
<style type="text/css">
    .schema-faq-section{
        border-top: 1px solid #EBEBEB;
    }
    .schema-faq-section:last-child{
        border-bottom: 1px solid #EBEBEB;
    }
    .schema-faq-question{
        font-size: 16px;
        font-weight: normal;
        display: block;
        padding: 8px 10px;
        position: relative;
    }
    .schema-faq-question:before{
        content: '';
        width: 24px;
        height: 24px;
        background: url(https://12h59.com/wp-content/themes/dkqh/a/i/arrow.png) no-repeat center center;
        position: absolute;
        top: 50%;
        margin-top: -12px;
        right: 0;
    }
    .schemac{
        background: #f1f2f3;
        border: 2px solid #9FC1F9;
    }
    .schemac:before{
        transform: rotate(-180deg);
        -moz-transform: rotate(-180deg);
        -webkit-transform: rotate(-180deg);
    }
    .schema-faq-answer{
        border-left: 2px solid #DADCE0;
        margin-left: 20px;
        padding: 5px 15px;
        margin-bottom: 15px !important;
        display: none;
        color: #3c4043;
    }
    .kk-star-ratings{
        margin: 0 0 20px;
    }
   
    
</style>
<?php } ?>
