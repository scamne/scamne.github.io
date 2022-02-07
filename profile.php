 <?php include 'config.php';

if (isset($_GET['id'])) {
$id = $_GET['id'];
}

$kiemtra = mysqli_query($ketnoi,"SELECT * FROM `ticket` WHERE `id` = '$id' AND `status` = 'scam' ");
while($check = mysqli_fetch_assoc($kiemtra)) {
 
 ?>

<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel='stylesheet' id='h-style-css' href='https://cdn.jsdelivr.net/gh/trinhngocminh/theme-checkscam.info@main/style.css?ver=8.5' type='text/css' media='all' />
<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

<title>Chủ TK "<?=$check['username'];?>" Bị Tố Cáo Tại <?=$site_tenweb;?></title>
<?php include '../meta.php'; ?>
<script type="0c87f3e218cfd0b4a3fe8f48-text/javascript">
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
<link rel='stylesheet' id='wp-block-library-css' href='https://cdn.jsdelivr.net/gh/trinhngocminh/theme-checkscam.info@main/style.min.css?ver=5.8.3' type='text/css' media='all' />
<script type="0c87f3e218cfd0b4a3fe8f48-text/javascript">
            window._nslDOMReady = function (callback) {
                if ( document.readyState === "complete" || document.readyState === "interactive" ) {
                    callback();
                } else {
                    document.addEventListener( "DOMContentLoaded", callback );
                }
            };
            </script><script type="0c87f3e218cfd0b4a3fe8f48-text/javascript" src='https://checkscam.info/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
<script type="0c87f3e218cfd0b4a3fe8f48-text/javascript" src='https://checkscam.info/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<link rel="https://api.w.org/" href="https://checkscam.info/wp-json/" /><link rel="alternate" type="application/json" href="https://checkscam.info/wp-json/wp/v2/posts/138998" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://checkscam.info/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://checkscam.info/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 5.8.3" />
<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><link rel="icon" href="https://cdn.jsdelivr.net/gh/trinhngocminh/theme-checkscam.info@main/images/cropped-Logo-vuong-32x32.png" sizes="32x32" />
<link rel="icon" href="https://cdn.jsdelivr.net/gh/trinhngocminh/theme-checkscam.info@main/images/cropped-Logo-vuong-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://cdn.jsdelivr.net/gh/trinhngocminh/theme-checkscam.info@main/images/cropped-Logo-vuong-180x180.png" />
<meta name="msapplication-TileImage" content="https://cdn.jsdelivr.net/gh/trinhngocminh/theme-checkscam.info@main/images/cropped-Logo-vuong-270x270.png" />
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

#nsl-redirect-overlay-container{
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
    margin: 20px 0;
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

#nsl-redirect-overlay-title{
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

<noscript><img height="1" width="1" style="display:none"

src="https://www.facebook.com/tr?id=1364184903960308&ev=PageView&noscript=1"

/></noscript>

</head>
<body data-rsssl=1 class="post-template-default single single-post postid-138998 single-format-standard">
<header id="hd">
<div id="mn">
<span id="tgn"></span>
<a href="https://<?=$site_tenweb;?>"><img src="<?=$site_logo;?>" height='32.999998pt' width='150pt' alt="[ <?=$site_tenweb;?> ] Hệ thống Kiểm tra, Tố cáo thông tin lừa đảo"></a>
<style>
					#mn .search-submit{
						position: absolute;
						top: 0;
						left: 0;
						width: 58px;
						border: none;
						bottom: 0;
						padding:0;
						background: url(https://cdn.jsdelivr.net/gh/trinhngocminh/theme-checkscam.info@main/images/i.png) no-repeat -77px 17px;
    					display: inline-block;
					}
					@media screen and (max-width: 767px){
						#mn .search-submit{
							display:none;
						}
					}
				</style>
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
<div id="page">
<div class="ctpage tts sgtts">
<h2 class="hh2" style="background: #F5F9F8;margin-bottom: -1px; z-index: 2;border-bottom: none;">Thông tin kẻ lừa đảo</h2>
<div class="tt1 tttms" style="border-top: 1px solid #DEE2E6 !important;border-radius: 0 5px 5px 5px;-moz-border-radius: 0 5px 5px 5px;-webkit-border-radius: 0 5px 5px 5px;">
<div class="table tb1" style="padding: 20px">
<div class="tr">
<div class="td">Họ Tên:</div>
<div class="td" style="text-transform: capitalize"><?=$check['username'];?></div>
</div>
<div class="tr">
<div class="td">SĐT:</div>
<div class="td"><span id="cpr1"><?=$check['sdt'];?></span>
<span onclick="if (!window.__cfRLUnblockHandlers) return false; copyToClipboard('#cpr1')" class="alcp" data-cf-modified-0c87f3e218cfd0b4a3fe8f48-=""><img src="https://cdn.jsdelivr.net/gh/trinhngocminh/theme-checkscam.info@main/images/bb2.png" alt="copy"></span>
</div>
</div>
<div class="tr">
<div class="td">STK:</div>
<div class="td"><span id="cpr2"><?=$check['stk'];?></span>
<span onclick="if (!window.__cfRLUnblockHandlers) return false; copyToClipboard('#cpr2')" class="alcp" data-cf-modified-0c87f3e218cfd0b4a3fe8f48-=""><img src="https://cdn.jsdelivr.net/gh/trinhngocminh/theme-checkscam.info@main/images/bb2.png" alt="copy"></span>
</div>
</div>
<style type="text/css">
                            	.alcp{
                            		margin-left: 20px;
                            		cursor: pointer;
                            		display: inline-block;
                            	}
</style>
<div class="tr">
<div class="td">Ngân hàng</div>
<div class="td"><?=$check['ngan_hang'];?></div>
</div>
<div class="tr">
<div class="td tm1">Ảnh chụp bằng chứng:</div>
<div class="td btw tm2">
<?php $kiemtra1 = mysqli_query($ketnoi,"SELECT * FROM `anh_bang_chung` WHERE `code` = '".$check['anh']."' ");
while($bc = mysqli_fetch_assoc($kiemtra1)) { ?>
<span class="hvi hv0 btf" data-filter="lk0" data-number="0" style="display:inline-block;margin-bottom:5px;"><a href='<?=$bc['anh'];?>'><img height='100' width='100' src="https://<?=$site_tenweb;?>/<?=$bc['anh'];?>"></a></span>
</div>
<?php } ?>
</div>
<div class="tr">
<div class="td ttmm" style="width: 100%;">Mô tả hình Thức Lừa Đảo:</div>
<div class="td" style="width: 100%; margin-top: 10px;padding-left:45px"><p><?=$check['ly_do'];?></p>
</div>
</div>
</div>
<h2 class="hh2" style="margin-top: 30px !important;background: #F5F9F8;margin-bottom: -1px; z-index: 2;border-bottom: none;">Người tố cáo</h2>
<div class="tt1" style="border-top: 1px solid #DEE2E6 !important;border-radius: 0 5px 5px 5px;-moz-border-radius: 0 5px 5px 5px;-webkit-border-radius: 0 5px 5px 5px;">
<div class="table">
<div class="tr">
<div class="td">họ và tên</div>
<div class="td" style="text-transform: capitalize"><?=$check['hoten_np'];?></div>
</div>
<div class="tr">
<?php

$sdt_np = substr($check['sdt_np'], 0, 5).'*****';
?>
<div class="td">Liên hệ:</div>
<div class="td"><?=$sdt_np;?></div>
</div>
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
            background:  url(https://checkscam.info/wp-content/themes/dkqh/a/i/crown.png) no-repeat center center;
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
</div>
</div>


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
    border: 1px solid #DEE2E6;
    padding: 15px;
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
.tts .tt1 .tb1 .td:nth-child(1){
    position: relative;
    padding-left: 45px;
	font-weight: bold;
}
.tts .tt1 .tb1 .td:nth-child(1):before{
    content: '';
    width: 30px;
    height: 30px;
    display: inline-block;
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    
}
.tts .tt1 .tb1 .tr:nth-child(1) .td:nth-child(1):before{
    background: url(https://uploadfree.pw/theme-checkscam.info/images/chutk.png) no-repeat center center;
}
.tts .tt1 .tb1 .tr:nth-child(2) .td:nth-child(1):before{
    background: url(https://uploadfree.pw/theme-checkscam.info/images/sđt.png) no-repeat center center;
}
.tts .tt1 .tb1 .tr:nth-child(3) .td:nth-child(1):before{
    background: url(https://uploadfree.pw/theme-checkscam.info/images/stk.png) no-repeat center center;
}
.tts .tt1 .tb1 .tr:nth-child(4) .td:nth-child(1):before{
    background: url(https://uploadfree.pw/theme-checkscam.info/images/bank.png) no-repeat center center;
}
.tts .tt1 .tb1 .tr:nth-child(5) .td:nth-child(1):before{
    background: url(https://uploadfree.pw/theme-checkscam.info/images/bank.png) no-repeat center center;
}
.tts .tt1 .tb1 .tr .tm1:before{
    background: url(https://uploadfree.pw/theme-checkscam.info/images/anh.png) no-repeat center center;
}
.tts .tt1 .tb1 .tr .ttmm:before{
    background: url(https://uploadfree.pw/theme-checkscam.info/images/details3.png) no-repeat center center;
}
.tts .tt1 .tb1 .tr:nth-child(6) .td:nth-child(1):before{
	background: url(https://uploadfree.pw/theme-checkscam.info/images/Scam.png) no-repeat center center;
}
@media screen and (max-width:639px){
    .sclq{
        padding: 0 15px;
    }
    .sclq .b{
        width: 100%;
	}
	.btw{border:2px solid #dee2e6}
}
    </style>
</main>
<footer id="ft">
<footer id="ft">
<center>
<br>
<a href="//www.dmca.com/Protection/Status.aspx?ID=e144a1d4-ebbc-4ffc-9a08-eaf6a7628456" title="DMCA.com Protection Status" class="dmca-badge"> <img data-cfsrc="https://images.dmca.com/Badges/_dmca_premi_badge_2.png?ID=e144a1d4-ebbc-4ffc-9a08-eaf6a7628456" alt="DMCA.com Protection Status" style="display:none;visibility:hidden;" /><noscript><img src="https://images.dmca.com/Badges/_dmca_premi_badge_2.png?ID=e144a1d4-ebbc-4ffc-9a08-eaf6a7628456" alt="DMCA.com Protection Status" /></noscript></a> <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js" type="09953b84707dccdc6e3a3fde-text/javascript"> </script>
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
</ul>
</nav>
</div>
<div class="ovl"></div>
<script type="0c87f3e218cfd0b4a3fe8f48-text/javascript" src='https://checkscam.info/wp-content/themes/dkqh/a/j/j.js?ver=1.1.5'></script>
<div class="fftr">
<a class="a" href="https://<?=$site_tenweb;?>/to-cao-lua-dao/">Tố cáo lừa đảo</a>
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
<script type="0c87f3e218cfd0b4a3fe8f48-text/javascript">

	$('.ess').click(function(){

		$(this).css('display','none');

		$('.ifr').css('display','none');

	})

</script>
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
<li style="text-align: left;">Hiện nay có rất nhiều website lợi dụng danh tiếng Checkscam để tạo hình ảnh, đường link Bảo Hiểm Ảo để lừa đảo người dùng trên Facebook.</li>
<li>Các website lừa đảo đó thuộc dạng kiểu:
<ul>
<li>Checkscamm.info</li>
<li>Checkscamn.info</li>
<li>Checkscam&#8230;. .info</li>
</ul>
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
<script type="0c87f3e218cfd0b4a3fe8f48-text/javascript">

$(document).ready(function(){

	$('.pucs').click(function(){

		$('.tbc').addClass('tbcc');

		$('.ovltbc').addClass('tbcc');

	});

	$('.ovltbc, .tbc .cls2, .tbc .cls').click(function(){

		$('.tbc').removeClass('tbcc');

		$('.ovltbc').removeClass('tbcc');

	})

});



</script>
<style type="text/css">.zalo-chat-widget{bottom:300px !important;top:auto !important}@media screen and (max-width:639px){.zalo-chat-widget{bottom:100px !important;}}</style>
<script type=”text/JavaScript”>
        function killCopy(e){ 
            return false } 
        function reEnable(){ 
            return true } 
        document.onselectstart = new Function (“return false”) 
        
        if (window.sidebar){  
            document.onmousedown=killCopy 
            document.onclick=reEnable 
        }
    </script>
<script language="JavaScript" type="0c87f3e218cfd0b4a3fe8f48-text/javascript">
    window.onload = function() {
        document.addEventListener("contextmenu", function(e) {
            e.preventDefault();
        }, false);
        document.addEventListener("keydown", function(e) {
            //document.onkeydown = function(e) {
            // "I" key
            if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                disabledEvent(e);
            }
            // "J" key
            if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                disabledEvent(e);
            }
            // "S" key + macOS
            if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                disabledEvent(e);
            }
            // "U" key
            if (e.ctrlKey && e.keyCode == 85) {
                disabledEvent(e);
            }
            // "F12" key
            if (event.keyCode == 123) {
                disabledEvent(e);
            }
        }, false);

        function disabledEvent(e) {
            if (e.stopPropagation) {
                e.stopPropagation();
            } else if (window.event) {
                window.event.cancelBubble = true;
            }
            e.preventDefault();
            return false;
        }
    };
</script>
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
<script type="0c87f3e218cfd0b4a3fe8f48-text/javascript">
(function($) {
  $.fn.inputFilter = function(inputFilter) {
    return this.on("input keydown keyup mousedown mouseup select contextmenu drop", function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        this.value = "";
      }
    });
  };
}(jQuery));
	$("#s1 input").inputFilter(function(value) {
  	return /^-?\d*$/.test(value); });
	$("#mn input").inputFilter(function(value) {
  	return /^-?\d*$/.test(value); });
</script>
<script type="0c87f3e218cfd0b4a3fe8f48-text/javascript">var SGPB_DEBUG_POPUP_BUILDER_DETAILS = null;</script><script type="0c87f3e218cfd0b4a3fe8f48-text/javascript">

var SGPB_DEBUG_POPUP_BUILDER_DETAILS = null;

function debugModeInit()
{
	if (typeof SGPB_DEBUG_POPUP_BUILDER_DETAILS == 'undefined') {
		return false;
	}

	console.log('%c POPUP BUILDER AVAILABLE DEBUG DETAILS', 'background: #eeeeee; color: #000000');

	for (var popupId in SGPB_DEBUG_POPUP_BUILDER_DETAILS) {
		console.groupCollapsed('Details for the '+ popupId +' popup:');

		var debugParamas = SGPB_DEBUG_POPUP_BUILDER_DETAILS[popupId];
		for (var i in debugParamas) {
			if (jQuery.isEmptyObject(debugParamas[i])) {
				continue;
			}

			var paramName = debugParamas[i];

			console.info('%c '+i.toUpperCase() +': ', 'background: #ccc; color: #000000');

			for (var x in paramName) {
				if (typeof paramName[x]['name'] != 'undefined') {
					console.log('%c Option name ------- ' + paramName[x]['name'], 'background: #eeeeee; color: #000000');
				}
				if (typeof paramName[x]['operator'] != 'undefined') {
					console.log('%c Option operator --- ' + paramName[x]['operator'], 'background: #eeeeee; color: #000000');
				}
				if (typeof paramName[x]['value'] != 'undefined') {
					if (typeof paramName[x]['value'] == 'string') {
						/* when empty string we need to set it 0 (delay) */
						if (paramName[x]['value'] == '') {
							paramName[x]['value'] = 0;
						}
						console.log('%c Option value ------ ' + paramName[x]['value'], 'background: #eeeeee; color: #000000');
					}
					else {
						console.log('%c Option value ------ ' + Object.values(paramName[x]['value']), 'background: #eeeeee; color: #000000');
					}
				}
				if (i == 'options') {
					// all other options here
					for (var option in paramName[x]) {
						console.log('%c '+option+ ' - ' + paramName[x][option], 'background: #eeeeee; color: #000000');
					}
				}
				console.log('<->');
			}
		}
		console.groupEnd();
	}
};

jQuery(document).ready(function()
{
	debugModeInit();
});

</script>
<script type="0c87f3e218cfd0b4a3fe8f48-text/javascript">

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
<script type="0c87f3e218cfd0b4a3fe8f48-text/javascript" src='https://checkscam.info/wp-includes/js/wp-embed.min.js?ver=5.8.3' id='wp-embed-js'></script>
<script type="0c87f3e218cfd0b4a3fe8f48-text/javascript">(function (undefined) {var _localizedStrings={"redirect_overlay_title":"Hold On","redirect_overlay_text":"You are being redirected to another page,<br>it may take a few seconds."};var _targetWindow="prefer-popup";
window.NSLPopup = function (url, title, w, h) {
    var userAgent = navigator.userAgent,
        mobile = function () {
            return /\b(iPhone|iP[ao]d)/.test(userAgent) ||
                /\b(iP[ao]d)/.test(userAgent) ||
                /Android/i.test(userAgent) ||
                /Mobile/i.test(userAgent);
        },
        screenX = window.screenX !== undefined ? window.screenX : window.screenLeft,
        screenY = window.screenY !== undefined ? window.screenY : window.screenTop,
        outerWidth = window.outerWidth !== undefined ? window.outerWidth : document.documentElement.clientWidth,
        outerHeight = window.outerHeight !== undefined ? window.outerHeight : document.documentElement.clientHeight - 22,
        targetWidth = mobile() ? null : w,
        targetHeight = mobile() ? null : h,
        V = screenX < 0 ? window.screen.width + screenX : screenX,
        left = parseInt(V + (outerWidth - targetWidth) / 2, 10),
        right = parseInt(screenY + (outerHeight - targetHeight) / 2.5, 10),
        features = [];
    if (targetWidth !== null) {
        features.push('width=' + targetWidth);
    }
    if (targetHeight !== null) {
        features.push('height=' + targetHeight);
    }
    features.push('left=' + left);
    features.push('top=' + right);
    features.push('scrollbars=1');

    var newWindow = window.open(url, title, features.join(','));

    if (window.focus) {
        newWindow.focus();
    }

    return newWindow;
};

var isWebView = null;

function checkWebView() {
    if (isWebView === null) {
        function _detectOS(ua) {
            if (/Android/.test(ua)) {
                return "Android";
            } else if (/iPhone|iPad|iPod/.test(ua)) {
                return "iOS";
            } else if (/Windows/.test(ua)) {
                return "Windows";
            } else if (/Mac OS X/.test(ua)) {
                return "Mac";
            } else if (/CrOS/.test(ua)) {
                return "Chrome OS";
            } else if (/Firefox/.test(ua)) {
                return "Firefox OS";
            }
            return "";
        }

        function _detectBrowser(ua) {
            var android = /Android/.test(ua);

            if (/Opera Mini/.test(ua) || / OPR/.test(ua) || / OPT/.test(ua)) {
                return "Opera";
            } else if (/CriOS/.test(ua)) {
                return "Chrome for iOS";
            } else if (/Edge/.test(ua)) {
                return "Edge";
            } else if (android && /Silk\//.test(ua)) {
                return "Silk";
            } else if (/Chrome/.test(ua)) {
                return "Chrome";
            } else if (/Firefox/.test(ua)) {
                return "Firefox";
            } else if (android) {
                return "AOSP";
            } else if (/MSIE|Trident/.test(ua)) {
                return "IE";
            } else if (/Safari\//.test(ua)) {
                return "Safari";
            } else if (/AppleWebKit/.test(ua)) {
                return "WebKit";
            }
            return "";
        }

        function _detectBrowserVersion(ua, browser) {
            if (browser === "Opera") {
                return /Opera Mini/.test(ua) ? _getVersion(ua, "Opera Mini/") :
                    / OPR/.test(ua) ? _getVersion(ua, " OPR/") :
                        _getVersion(ua, " OPT/");
            } else if (browser === "Chrome for iOS") {
                return _getVersion(ua, "CriOS/");
            } else if (browser === "Edge") {
                return _getVersion(ua, "Edge/");
            } else if (browser === "Chrome") {
                return _getVersion(ua, "Chrome/");
            } else if (browser === "Firefox") {
                return _getVersion(ua, "Firefox/");
            } else if (browser === "Silk") {
                return _getVersion(ua, "Silk/");
            } else if (browser === "AOSP") {
                return _getVersion(ua, "Version/");
            } else if (browser === "IE") {
                return /IEMobile/.test(ua) ? _getVersion(ua, "IEMobile/") :
                    /MSIE/.test(ua) ? _getVersion(ua, "MSIE ")
                        :
                        _getVersion(ua, "rv:");
            } else if (browser === "Safari") {
                return _getVersion(ua, "Version/");
            } else if (browser === "WebKit") {
                return _getVersion(ua, "WebKit/");
            }
            return "0.0.0";
        }

        function _getVersion(ua, token) {
            try {
                return _normalizeSemverString(ua.split(token)[1].trim().split(/[^\w\.]/)[0]);
            } catch (o_O) {
            }
            return "0.0.0";
        }

        function _normalizeSemverString(version) {
            var ary = version.split(/[\._]/);
            return (parseInt(ary[0], 10) || 0) + "." +
                (parseInt(ary[1], 10) || 0) + "." +
                (parseInt(ary[2], 10) || 0);
        }

        function _isWebView(ua, os, browser, version, options) {
            switch (os + browser) {
                case "iOSSafari":
                    return false;
                case "iOSWebKit":
                    return _isWebView_iOS(options);
                case "AndroidAOSP":
                    return false;
                case "AndroidChrome":
                    return parseFloat(version) >= 42 ? /; wv/.test(ua) : /\d{2}\.0\.0/.test(version) ? true : _isWebView_Android(options);
            }
            return false;
        }

        function _isWebView_iOS(options) {
            var document = (window["document"] || {});

            if ("WEB_VIEW" in options) {
                return options["WEB_VIEW"];
            }
            return !("fullscreenEnabled" in document || "webkitFullscreenEnabled" in document || false);
        }

        function _isWebView_Android(options) {
            if ("WEB_VIEW" in options) {
                return options["WEB_VIEW"];
            }
            return !("requestFileSystem" in window || "webkitRequestFileSystem" in window || false);
        }

        var options = {};
        var nav = window.navigator || {};
        var ua = nav.userAgent || "";
        var os = _detectOS(ua);
        var browser = _detectBrowser(ua);
        var browserVersion = _detectBrowserVersion(ua, browser);

        isWebView = _isWebView(ua, os, browser, browserVersion, options);
    }

    return isWebView;
}

function isAllowedWebViewForUserAgent() {
    var nav = window.navigator || {};
    var ua = nav.userAgent || "";
    if (ua.match(new RegExp([
        'Instagram',
        'FBAV',
        'FBAN',
        'Line',
    ].join('|')))) {
        return true;
    }

    return false;
}

window._nslDOMReady(function () {

    window.nslRedirect = function (url) {
        var overlay = document.createElement('div');
        overlay.id = "nsl-redirect-overlay";
        overlay.insertAdjacentHTML("afterbegin", "<div id='nsl-redirect-overlay-container'><div id='nsl-redirect-overlay-spinner'></div><p id='nsl-redirect-overlay-title'>" + _localizedStrings.redirect_overlay_title + "</p><p id='nsl-redirect-overlay-text'>" + _localizedStrings.redirect_overlay_text + "</p></div>");
        document.body.appendChild(overlay);
        window.location = url;
    };

    var targetWindow = _targetWindow || 'prefer-popup',
        lastPopup = false;


    var buttonLinks = document.querySelectorAll(' a[data-plugin="nsl"][data-action="connect"], a[data-plugin="nsl"][data-action="link"]');
    buttonLinks.forEach(function (buttonLink) {
        buttonLink.addEventListener('click', function (e) {
            if (lastPopup && !lastPopup.closed) {
                e.preventDefault();
                lastPopup.focus();
            } else {

                var href = this.href,
                    success = false;
                if (href.indexOf('?') !== -1) {
                    href += '&';
                } else {
                    href += '?';
                }

                var redirectTo = this.dataset.redirect;
                if (redirectTo === 'current') {
                    href += 'redirect=' + encodeURIComponent(window.location.href) + '&';
                } else if (redirectTo && redirectTo !== '') {
                    href += 'redirect=' + encodeURIComponent(redirectTo) + '&';
                }

                if (targetWindow !== 'prefer-same-window' && checkWebView()) {
                    targetWindow = 'prefer-same-window';
                }

                if (targetWindow === 'prefer-popup') {
                    lastPopup = NSLPopup(href + 'display=popup', 'nsl-social-connect', this.dataset.popupwidth, this.dataset.popupheight);
                    if (lastPopup) {
                        success = true;
                        e.preventDefault();
                    }
                } else if (targetWindow === 'prefer-new-tab') {
                    var newTab = window.open(href + 'display=popup', '_blank');
                    if (newTab) {
                        if (window.focus) {
                            newTab.focus();
                        }
                        success = true;
                        e.preventDefault();
                    }
                }

                if (!success) {
                    window.location = href;
                    e.preventDefault();
                }
            }
        });
    });

    var googleLoginButtons = document.querySelectorAll(' a[data-plugin="nsl"][data-provider="google"]');
    if (googleLoginButtons.length && checkWebView() && !isAllowedWebViewForUserAgent()) {
        googleLoginButtons.forEach(function (googleLoginButton) {
            googleLoginButton.remove();
        });
    }
});})();</script>
<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="0c87f3e218cfd0b4a3fe8f48-|49" defer=""></script></body>
</html>
<style>
        .sgtts .tr{
            border-bottom: 1px solid #ddd;
            margin-bottom: 0 !important;
            padding: 15px 0;
        }
        .sgtts .tr:last-child{
            border-bottom: none;
        }
        .sgtts .td:nth-child(2), .sgtts .td:nth-child(4){

        }
        .ovhv{
            z-index: 100;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            display: none;
            opacity: 0.6;
            background: #111;
        }
        .hvimg{
            width: 50%;
            display: inline-block;
            position: fixed;
            top: 50%;
            left: -100%;
            transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -webkit-transform: translateY(-50%);
            z-index: 101;
        }
        .hvimg .owl-carousel .owl-stage{
        	display: flex;
        	align-items: center;
        	justify-content: center;
        }
        
        .hvimg .owl-carousel img{
            width: auto;
            display: inline-block;
            height: auto;
		
        }
        .hvimg .owl-carousel .item{
            text-align: center;
        }

        .hvimgcc{
            left: 25%;
        }
        .hvimgc{
            display: inline-block !important;
        }
        
        .tts .tt1 .table .owl-carousel{
            display: none;
        }
        @media screen and (max-width: 639px){
            .tts .tt1 .table .tm1{
                width: 100% !important;
            }

			 .tts .tt1 .table .tm2{
				display:table;
				width:100% !important;
				padding:5px;
				margin-top:20px;
			}
			.tts .tt1 .table .tm2 span{
				display:flex;
				justify-content:center;
				padding:5px;
				width: calc(100% / 3);
				float:left;
				margin
			}
			.tts .tt1 .table .tm2 span:nth-child(3n+1){
				clear:both;
			}
            .tts .tt1 .table .owl-carousel{
                display: inline-block;
            }
        }
        .tttms{
          position: relative;
        }
        #page .sgtts:before{
            display: none !important;
        }
        .tttms:before{
          content: '';
          position: absolute;
          top: 50%;
          left: 50%;
          width: 200px;
          height: 92px;
          background: url(https://uploadfree.pw/theme-checkscam.info/images/sc.sc.jpg) no-repeat center center;
          display: inline-block;
          transform: translate(-50%, -50%);
          -moz-transform: translate(-50%, -50%);
          -webkit-transform: translate(-50%, -50%);
          z-index: 1;
          opacity: 0.45;
        }
        @media screen and (max-width: 767px){
        	.tttms:before{
        		right: 0;
        		top: 40%;
        	}
        }
		@media screen and (max-width: 639px){
			.hvimg{
				width:80%;
			}
			.hvimgcc{
            left: 10%;
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
                                background: url(https://uploadfree.pw/theme-checkscam.info/images/rr.png) left center / contain no-repeat !important;
                                position: absolute;
                                top: 21px;
                                left: -25px;
								opacity: 0.2;

                            }
                            .tg .owl-nav .owl-next{
                                width: 30px;
                                height: 30px;
                                background: url(https://uploadfree.pw/theme-checkscam.info/images/ll.png) right center / contain no-repeat !important;
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
                clear: unset;
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
        .ctp div img{
        	height: auto;
        	display: block;
        	margin: 0 auto 15px;
        	
        }
                        </style>
<script type="0c87f3e218cfd0b4a3fe8f48-text/javascript">
        $('.hvi').click(function(){
            var img = $(this).data('img');
            $('.hvimg img').attr('src', img);
            $('.hvimg').addClass('hvimgcc');
            $('.ovhv').addClass('hvimgc');
        });
        $('.ovhv, .hvimg span').click(function(){
            $('.hvimg').removeClass('hvimgcc');
            $('.ovhv').removeClass('hvimgc');
        });
    </script>
<script type="0c87f3e218cfd0b4a3fe8f48-text/javascript">
    $(document).ready(function(){

        $('#uytin > .a > span').click(function(){
            $('#uytin .ut').stop().slideUp();
            $(this).parent().find('div.ut').stop().slideToggle();
            $('#uytin .ut2').stop().slideToggle();
        });
        
    })
    function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}


</script>
<?php } ?>
