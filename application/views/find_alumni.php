﻿
<title>Alumni | LinkedIn</title>
<link rel="shortcut icon" href="images/favicon.ico" />

<base href="<?php echo base_url(); ?>" />
<link rel="stylesheet" type="text/css" href="assets\css\bootstrap.css"/>

<link rel="stylesheet" type="text/css" href="assets\css\bootstrap-responsive.css"/>

<style >
/* Defining Font */
@font-face {
	font-family: LazyDogRegular;
	src: url('fonts/LazyDogRegular.ttf');
}

/* RESETTING CSS
******************************************************************/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}

/* end: resetting css
******************************************************************/



/* OVERALL LAYOUT & COLORS (SCREEN 1)
******************************************************************/
body{
	color: #666;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	outline: 0 none;
	line-height: 1.2;
}
a{
	color: #0077B5;
	text-decoration: none;
}
a:hover{
	text-decoration: underline;
}
hr{
	background-color: #ccc;
	border: 0 none;
	height: 1px;
	margin: 0;
}
strong{
	font-weight: bold;
}
.clear{
	clear: both;
}
.wrapper{
	width: 80%;
	max-width: 974px;
	min-width: 974px;
	margin: 0 auto;
}
#body-area{
	padding: 10px 0;
	margin: 80px 0 10px 0;
}
.top{
	/* fallback */
	background-color: #3F3F3F;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#696969), to(#3F3F3F));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #696969, #3F3F3F);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #696969, #3F3F3F);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #696969, #3F3F3F);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #696969, #3F3F3F);
	height: 42px;
	box-shadow: 0 0 10px #333333;
	-moz-box-shadow: 0 0 10px #333333;
	-webkit-box-shadow: 0 0 10px #333333;
    color: #333333;
    font-weight: normal;
    line-height: 17px;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 10001;
}
.top.nograd {
	background: transparent none no-repeat scroll center center;
	box-shadow: 0 0 0px #333333;
	-moz-box-shadow: 0 0 0px #333333;
	-webkit-box-shadow: 0 0 0px #333333;
}
.top-navigation{
	float: right;
}
.top-navigation li{
	float: left;
	line-height: 13px;
	position: relative;
}
.top-navigation li a{
	color: #D7D7D7;
	padding: 13px 10px 14px 10px;
	cursor: pointer;
	display: block;
	text-decoration: none;
}
.top-navigation li a:hover{
	color: #2E8DD7;
}
.top-navigation li a:focus{
	background-color: #252525;
	transition: all 0.2s ease-in-out 0s;
	-moz-transition: all 0.2s ease-in-out 0s;
	-webkit-transition: all 0.2s ease-in-out 0s;
}
.logo{
	margin-left: 0;
	margin-right: 5px;
	background: transparent url('images/logo.png') no-repeat scroll left center;
	width: 98px;
	height: 36px;
	display: block;
	float: left;
	left: -1px;
	margin-top: 3px;
	overflow: hidden;
	position: relative;
	text-align: left;
	text-indent: -119988px;
}
.logo-black{
	margin-left: 0;
	margin-right: 5px;
	background: transparent url('images/logo-black.png') no-repeat scroll left center;
	width: 98px;
	height: 36px;
	display: block;
	float: left;
	left: -1px;
	margin-top: 3px;
	overflow: hidden;
	position: relative;
	text-align: left;
	text-indent: -119988px;
}
.padding-0-10px{
	padding: 0 7px;
}
.content{
	float: left;
	width: 500px;
}

.sidebar{
	float: right; 
	margin-bottom: 40px;
	width: 320px;
}
.content h1{
	color: #3399CC;
	font-size: 18px;
	font-weight: bold;
	line-height: 1.55;
	margin-bottom: 15px;
	text-align: left;	
}
.content ul{
	margin: 0 0 15px;
	line-height: 1.2;
}
.content ul li{
	background: transparent url('images/sprite_guesthome_v2.png') no-repeat scroll;
    color: #666666;
    margin: 0 0 6px;
}
.content ul li#reconnect{
    background-position: 0 3px;
    padding: 8px 0 10px 68px;
}
.content ul li#answers{
    background-position: 5px -222px;
    padding: 13px 0 10px 68px;
}
.content ul li#power{
    background-position: 0 -144px;
    padding: 8px 0 10px 68px;
}
.sidebar #entry-form-heading{
	/* fallback */
	background-color: #73B8DB;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#73B8DB), to(#4393BB));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #73B8DB, #4393BB);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #73B8DB, #4393BB);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #73B8DB, #4393BB);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #73B8DB, #4393BB);
    color: #FFFFFF;
    border-radius: 6px 6px 0 0;
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    padding: 5px 10px;
}
.sidebar #entry-form-heading h2{
	font-size: 14px;
	font-weight: bold;
	color: #fff;
	margin: 0;
	line-height: 1.2;
}

.sidebar .entry-form{
    border-left: 1px solid #DDDDDD;
	border-right: 1px solid #DDDDDD;
	border-top: 0 solid #DDDDDD;
	border-bottom: 1px solid #DDDDDD;
	padding: 10px 10px 5px;
	background: #fff no-repeat center;
	border-radius: 0 0 6px 6px;
	-moz-border-radius: 0 0 6px 6px;
    -webkit-border-radius: 0 0 6px 6px;
    border-image: url('') none;
    }

.sidebar .entry-form label{
    color: #333333;
    display: block;
    float: left;
    font-size: 100%;
    font-weight: bold;
    line-height: 1.8;
    margin-right: 10px;
    text-align: right;
    width: 100px;
    clear: both;
    margin-bottom: 10px;
}

.sidebar .entry-form input{
    font-size: 100%;
    margin: 3px 7px 0 0;
    width: 175px;
    margin-bottom: 10px;
}
.sidebar .entry-form small{
    clear: both;
    color: #666666;
    padding-left: 110px;
    line-height: 1.5;
    margin-left: 0;
    width: 180px;
    text-align: left;
    font-size: 85%;
}
.sidebar .entry-form small:last-child{
	color: #000;
}
.sidebar .entry-form input[type=submit]{
	clear: both;
	margin-left: 110px;
	/* fallback */
	background-color: #69A219;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#8BC03F), to(#69A219));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #8BC03F, #69A219);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #8BC03F, #69A219);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #8BC03F, #69A219);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #8BC03F, #69A219);
	box-shadow: 0 1px 1px #AFD47B inset;
	-moz-box-shadow: 0 1px 1px #AFD47B inset;
	-webkit-box-shadow: 0 1px 1px #AFD47B inset;
    border-color: #669933;
    color: #FFFFFF !important;
    font-weight: bold;
    white-space: nowrap;	
    border-radius: 3px 3px 3px 3px;
    border-style: solid;
    border-width: 1px;
    cursor: pointer;
    font-size: 12px;
    line-height: 1.35;
    overflow: visible;
    padding: 3px 10px 2px;
    text-decoration: none !important;
    vertical-align: top;
    width: auto;
    font-weight: normal;
}
.sidebar .entry-form input[type=submit]:hover{
	/* fallback */
	background-color: #69A219;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#649F15), to(#5D8329));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #649F15, #5D8329);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #649F15, #5D8329);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #649F15, #5D8329);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #649F15, #5D8329);
	box-shadow: 0 1px 1px #94BD5B inset;
	-moz-box-shadow: 0 1px 1px #94BD5B inset;
	-webkit-box-shadow: 0 1px 1px #94BD5B inset;
}
.sidebar .entry-form input[type=submit]:focus{
	/* fallback */
	background-color: #69A219;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#649F15), to(#5D8329));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #649F15, #5D8329);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #649F15, #5D8329);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #649F15, #5D8329);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #649F15, #5D8329);
	box-shadow: 0 1px 1px #598024 inset;
	-moz-box-shadow: 0 1px 1px #598024 inset;
	-webkit-box-shadow: 0 1px 1px #598024 inset;
}
#search-browse{
	padding-top: 20px;
	text-align:center;
}
#search-browse #search-members {
	margin: 0 auto;
	display: inline-block; 
	text-align: center;
}
#search-browse #search-members h2{
    color: #666666;
    display: inline;
    font-size: 130%;
    font-weight: bold;
    padding-right: 10px;	
	float: left;
	margin: 0;
	line-height: 1.2;
}
#search-browse #search-members form{
	float: left;
}

#search-browse #search-members form input[type=text]{
	width: 150px;
	margin-right: 10px;
}
#search-browse #search-members form input[type=submit]{
	min-width: 3em;
	line-height: 1.3;
    background: -moz-linear-gradient(center top , #F2F2F2 0px, #F2F2F2 1px, #E4E4E4 1px, #CECECE 100%) repeat scroll 0 0 transparent;
    border-color: #999999;
    color: #666666 !important;
    border-radius: 3px 3px 3px 3px;
    border-style: solid;
    border-width: 1px;
    cursor: pointer;
    font-size: 12px;
    margin: 0;
    overflow: visible;
    padding: 3px 10px 2px;
    text-decoration: none !important;
    vertical-align: top;
    width: auto;
}

#member-directory{
	clear: both;
    border-bottom: 0 none;
    font-size: 11px;
    margin: 15px 0 30px;
    padding-bottom: 0;
    text-align: center;
    color: #666;
    line-height: 1.6;
}
#statement{
    color: #666666;
    padding: 20px 0 20px;
    text-align: left;	
    font-size: 11px;
}

.footer{
	width: 82%;
	max-width: 980px;
	min-width: 980px;
	margin: 0 auto;
    border-top: 1px solid #CCCCCC;
    color: #666666;
    font-size: 12px;
    font-weight: normal;
    line-height: 14px;
    margin-left: auto;
    margin-right: auto;
    padding-bottom: 10px;
    padding-top: 10px;
}
.footer.noborder{
	border: 0 none;
}
.footer.noborder #legal{
	margin: -20px 0 0 10px;
}
.footer .footer-links li{
    border-right: 1px solid #CCCCCC;
    float: left;
    margin-bottom: 5px;
    margin-right: 8px;
    margin-top: 5px;
    padding-right: 8px;
    font-size: 13px;
}
.footer .footer-links li:last-child{
	border-right: 0 none;
}
.footer .footer-links li.bold{
	font-weight: bold;
}




/* SCREEN 2
******************************************************************/

/* Alert */


div.alert{
    background-color: #FFFFFF;
    color: #333333;
    margin: 0 0 15px;
    min-height: 28px;
    overflow: hidden;
    padding: 6px 7px 6px 35px;
    position: relative;	
}
div.alert.error{
	background: #ffeeee url('images/error.png') no-repeat scroll 7px center;
}
div.alert p, div.alert h3 {
    font-size: 13px;
    margin: 7px 21px 5px 7px;
}
.sidebar .entry-form form .fieldgroup {
    padding-left: 110px;
}
span.error {
    color: #990000;
    font-weight: bold;
    font-size: 12px;
}


/* COLORS AND LAYOUT OF INNER MAIN PAGES (SCREEN 3)
******************************************************************/

body#innermain{
	background: repeat scroll 0 0 #E9E9E9 url('images/bg_texture.png');
}

body#innermain .wrapper:first-child{
	width: 974px;
	min-width: 974px;
}
body#innermain .wrapper{
	width: 980px;
	min-width: 980px;
	max-width: 980px;
}
body#innermain.newwidth .wrapper{
	width: 974px;
	min-width: 974px;
	max-width: 974px;
}
body#innermain #body-area{
	margin: 70px 0 10px;
}
body#join{
	background: #E6E6E6;
}
body#join .wrapper{
	width: 805px;
	min-width: 805px;
}

.innermain{
	background: #fff;
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), -1px 0 0 rgba(0, 0, 0, 0.03), 1px 0 0 rgba(0, 0, 0, 0.03), 0 1px 0 rgba(0, 0, 0, 0.12);
	-moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), -1px 0 0 rgba(0, 0, 0, 0.03), 1px 0 0 rgba(0, 0, 0, 0.03), 0 1px 0 rgba(0, 0, 0, 0.12);
	-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), -1px 0 0 rgba(0, 0, 0, 0.03), 1px 0 0 rgba(0, 0, 0, 0.03), 0 1px 0 rgba(0, 0, 0, 0.12);	
	width: 100%;
	padding: 50px 0;
}
.innermain.padding-adjust{
	padding: 0 0 50px 0;
}
.innermain .row:after{
    clear: both;
    content: " ";
    display: block;
    height: 0;
    overflow: hidden;
    visibility: hidden;	
}
.hero-headline{
    color: #000000;
    font-size: 28px;
    font-weight: bold;
    line-height: 30px;
    padding-bottom: 50px;
    padding-top: 0;
    text-align: center;	
}
.subhead{
	display: block; 
}
.callouts{
    background: repeat-y scroll center top transparent url('images/bg_grey_cols_273x3_v1.png');
    overflow: hidden;	
}
.callouts .callout-headers{
	overflow: hidden;	
}
.callouts .callout{
    float: left;
    margin-bottom: 15px;
    margin-left: 10px;
    margin-top: 0;
    padding-left: 10px;
    padding-right: 15px;
    text-align: center;
    width: 236px;	
}
.callouts .connect{
    float: left;
    margin-left: 92px;
    position: relative;
    width: 236px;	
}
.callouts .title{
    color: #000000;
    font-size: 18px;
    font-weight: bold;
    line-height: 22px;	
}
.callouts .learn{
    margin-right: 0;
    padding-right: 0;	
}
.callouts .img{
    background: no-repeat scroll 0 0 transparent url('images/icon_optimized_whatislinkedin_icon_sprite_236x750.png');
    height: 227px;
    width: 236px;	
}
.callouts .profile-icn{
	background-position: 0 0;
}
.callouts .summary{
    color: #333333;
    font-size: 13px;
    font-weight: normal;
    line-height: 17px;
    padding-left: 20px;
    padding-right: 20px;	
}
.callouts .connect-icn{
	background-position: 0 -250px;	
}
.callouts .share-icn{
	background-position: 0 -500px;	
}
.join-now{
    padding-bottom: 0;
    padding-top: 50px;
    text-align: center;	
}
.join-now .tagline{
    color: #000000;
    display: inline-block;
    font-size: 16px;
    font-weight: bold;
    line-height: 18px;
    padding-left: 0;
    padding-right: 15px;
    vertical-align: middle;	
}
.join-now .join-btn{
/*    -moz-box-sizing: border-box;
    background-color: #F6E312;
    background-image: -moz-linear-gradient(center top , #F6E312 0%, #F9C80D 100%); */
    border-color: #E9AC1A;
    border-radius: 3px 3px 3px 3px;
    -moz-border-radius: 3px 3px 3px 3px;
    -webkit-border-radius: 3px 3px 3px 3px;
    border-style: solid;
    border-width: 1px;
    color: #333333;
    cursor: pointer;
    display: inline-block;
    font-size: 16px;
    font-weight: bold;
    height: 31px;
    line-height: 32px;
    margin: 0;
    overflow: visible;
    padding: 0 15px;
    text-decoration: none !important;
    text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
    vertical-align: middle;
    white-space: nowrap;
    width: auto;	
    
	/* fallback */
	background-color: #F6E312;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#F6E312), to(#F9C80D));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #F6E312, #F9C80D);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #F6E312, #F9C80D);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #F6E312, #F9C80D);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #F6E312, #F9C80D);
}
.join-now .join-btn:hover{
	/* fallback */
	background-color: #EDDB11;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#EDDB11), to(#F2B21B));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(center top , #EDDB11 0%, #EFCF14 35%, #F1BF18 65%, #F2B21B 100%);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(center top , #EDDB11 0%, #EFCF14 35%, #F1BF18 65%, #F2B21B 100%);
	
	/* IE 10 */
	background: -ms-linear-gradient(center top , #EDDB11 0%, #EFCF14 35%, #F1BF18 65%, #F2B21B 100%);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(center top , #EDDB11 0%, #EFCF14 35%, #F1BF18 65%, #F2B21B 100%);
	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25);
	-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25);
}

.join-now .join-btn:focus{
	box-shadow: 0 1px 2px rgba(0, 0, 0, 0.25) inset;
	-moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.25) inset;
	-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.25) inset;
}


/* SCREEN 5
******************************************************************/

#page-title{
	margin: 0 10px 15px;
}
#section-header h1, #section-header h1 a, #page-title h1, #page-title h1 a{
    color: #000000;
    font-size: 22px;
    font-weight: bold;
    line-height: 24px;	
}
.signin ul{
    border-radius: 5px 5px 5px 5px;
    margin: 0 auto;
    padding: 30px 20px;
    background: none repeat scroll 0 0 #FFFFFF;
    border: medium none;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), -1px 0 0 rgba(0, 0, 0, 0.03), 1px 0 0 rgba(0, 0, 0, 0.03), 0 1px 0 rgba(0, 0, 0, 0.12);
    width: 470px;
}
.signin li{
    margin-bottom: 4px;
    overflow: hidden;	
}
.signin label{
	width: 110px;
    color: #333333;
    display: block;
    float: left;
    font-size: 13px;
    font-weight: bold;
    line-height: 33px;
    padding-right: 8px;
    text-align: right;	
}
.signin .fieldgroup{
	width: 350px;
    float: left;
    padding: 3px 0;		
}
.signin .fieldgroup input, .signin .fieldgroup input x:-moz-any-link{
    margin: 1px 0;	
}
.signin .fieldgroup input{
    font-size: 16px;
    width: 220px;	
}
.signin .button{
	margin-left: 117px;
	width: 410px;
	overflow: hidden;
}
.signin .button input{
	vertical-align: middle;	
}
.btn-primary, .btn-menu-open.btn-primary, .btn-split.btn-primary:hover{
    border-color: #045A8B;
    color: #FFFFFF !important;	
    /* fallback */
	background-color: #338AB0;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#338AB0), to(#0571A6));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #338AB0, #0571A6);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #338AB0, #0571A6);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #338AB0, #0571A6);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #338AB0, #0571A6);
	box-shadow: 0 1px 1px #73AEC9 inset;
	-moz-box-shadow: 0 1px 1px #73AEC9 inset;
	-webkit-box-shadow: 0 1px 1px #73AEC9 inset;
    
}
.btn-primary, .btn-new-primary, .btn-secondary, .btn-new-secondary, .btn-tertiary, .btn-ternary, .btn-quaternary, .btn-action{
    border-radius: 3px 3px 3px 3px;
    border-style: solid;
    border-width: 1px;
    cursor: pointer;
    font-size: 12px;
    line-height: 1.35;
    margin: 0;
    overflow: visible;
    padding: 3px 10px 2px;
    text-decoration: none !important;
    width: auto;	
}
.btn-primary:hover, .btn-split-toggle-hover.btn-primary:hover{
    border-color: #004A73;	
    /* fallback */
	background-color: #277696;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#277696), to(#04608E));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #277696, #04608E);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #277696, #04608E);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #277696, #04608E);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #277696, #04608E);
	box-shadow: 0 1px 1px #69A0B6 inset;
	-moz-box-shadow: 0 1px 1px #69A0B6 inset;
	-webkit-box-shadow: 0 1px 1px #69A0B6 inset;
}

.btn-primary:active, .btn-split-toggle-hover.btn-primary:active{
    border-color: #004A73;
    /* fallback */
	background-color: #277696;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#025F8D), to(#267696));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #025F8D, #267696);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #025F8D, #267696);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #025F8D, #267696);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #025F8D, #267696);
}
.signin .fieldgroup a {
    font-size: 11px;
    padding-left: 5px;
    color: #006699;
}


/* SCREEN 6
******************************************************************/

body#innermain.nobg{
	background: transparent none;
}
.request-password-reset h1 {
    font-size: 18px;
    margin: 0 0 15px;
    color: #000;
}
.request-password-reset p {
    margin: 10px 0;
}
.request-password-reset .fieldgroup input {
    vertical-align: top;
    width: 300px;
}
ul.directory {
    list-style-type: disc;
    margin: 0 0 20px;
    overflow: hidden;
}
ul.directory li {
    float: left;
    font-size: 13px;
    margin: 0 0 10px 1.2em;
    width: 43%;
    list-style-position:inside;
    color: #000;
}
div.main-body-white{
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #CCCCCC;
    clear: both;
    margin: 0 auto;
    min-width: 790px;
    padding: 15px;
    width: 790px;
}

#content{
	width: 58%;
    margin: 10px 0 25px;
    overflow: hidden;
    width: auto;
}
.standard-form.sided{
    float: left;
    margin: 0;
    padding: 0 0 0 20px;
    width: 320px;	
}
.introduction {
    background: url('images/bg_arrow_foursided_00679a_34x34.png') no-repeat scroll left bottom transparent;
    margin-bottom: 5px;
    margin-left: 108px;
    padding-bottom: 11px;
}
.introduction h1{
	background: repeat-x scroll left bottom #74B9DC url('images/bg_blue_19x63.png');
    font-size: 18px;
    line-height: 23px;
    overflow: hidden;
    font-weight: normal;	
    padding: 16px 18px;
    margin-left: -108px;
    border-radius: 5px 5px 5px 5px;
    color: #FFFFFF;
    
    /* fallback */
	background-color: #91CCE7;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#91CCE7), to(#00679A));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #91CCE7, #00679A);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #91CCE7, #00679A);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #91CCE7, #00679A);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #91CCE7, #00679A);
    
}

#body-area.lessmargin{
	margin: 0 0 10px;
}

.standard-form li, .standard-form fieldset.details li{
	margin-bottom: 10px;
}
.standard-form label{
    margin-right: 0;
    width: 97px;
    padding: 3px 0;
    background-color: rgba(0, 0, 0, 0);
    color: #333333;
    display: block;
    float: left;
    font-size: 13px;
    font-weight: bold;
    text-align: right;
}

.standard-form.sided ul ul, .standard-form.sided .fieldgroup{
	margin-left: 105px;
	position: relative;	
}

.standard-form .error {
    color: #990000;
    font-size: 12px;
    font-weight: bold;
}

.standard-form input {
    width: 267px;
}

.standard-form li:after {
    clear: both;
    content: ".";
    display: block;
    height: 0;
    visibility: hidden;
}

.standard-form.sided p {
    margin-left: 105px;
}
.standard-form .actions {
    background: none repeat scroll 0 0 transparent;
    font-size: 100%;
    margin-top: 10px;
    padding-top: 0;
}

.standard-form p {
    color: #333333;
}

.join-linkedin .standard-form .actions button {
    cursor: pointer;
    max-width: 183px;
    width: auto;
}
.btn-tertiary {
    border-color: #669933;
    color: #FFFFFF !important;
	/* fallback */
	background-color: #69A219;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#8BC03F), to(#69A219));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #8BC03F, #69A219);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #8BC03F, #69A219);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #8BC03F, #69A219);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #8BC03F, #69A219);
	box-shadow: 0 1px 1px #AFD47B inset;
	-moz-box-shadow: 0 1px 1px #AFD47B inset;
	-webkit-box-shadow: 0 1px 1px #AFD47B inset;
}
.btn-tertiary:hover{
	/* fallback */
	background-color: #69A219;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#649F15), to(#5D8329));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #649F15, #5D8329);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #649F15, #5D8329);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #649F15, #5D8329);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #649F15, #5D8329);
	box-shadow: 0 1px 1px #94BD5B inset;
	-moz-box-shadow: 0 1px 1px #94BD5B inset;
	-webkit-box-shadow: 0 1px 1px #94BD5B inset;	
}
.btn-tertiary:focus{
	/* fallback */
	background-color: #69A219;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#649F15), to(#5D8329));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #649F15, #5D8329);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #649F15, #5D8329);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #649F15, #5D8329);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #649F15, #5D8329);
	box-shadow: 0 1px 1px #598024 inset;
	-moz-box-shadow: 0 1px 1px #598024 inset;
	-webkit-box-shadow: 0 1px 1px #598024 inset;	
}
.top-menu-right-link{
    background-color: rgba(0, 0, 0, 0);
    color: #666666;
    float: right;
    font-size: 11px;
    font-weight: normal;
    line-height: 39px;	
}



.fieldgroup.field-hover input {
    background: none repeat scroll 0 0 #FFFFFF;
    cursor: text;
}
.fieldgroup input{
    border: 1px solid #999999;
    padding: 2px 3px;
}
.standard-form input {
    width: 267px;
}
.standard-form input {
    margin: 0;
    width: 267px;
}

.standard-form.sided p {
    margin-left: 105px;
    margin-top: 5px;
}
.standard-form p.example, .standard-form p.tip, .standard-form p.note {
    color: #666666;
    font-size: 11px;
}

p#copyright {
    border-right: 1px solid #CCCCCC;
    float: left;
    margin-right: 8px;
    padding: 0 8px 0 0;
    font-size: 11px;
}
p#terms-of-use {
    margin-bottom: 8px;
    font-size: 11px;
}
.standard-form.sided{
	float: left;
	border-right: 1px solid #ccc;
	padding-right: 120px;
}

#agreement {
    margin: 0;
}
#agreement {
    border-top: 1px solid #CCCCCC;
    clear: both;
    color: #555555;
    font-size: 110%;
    padding-top: 15px;
    text-align: center;
    font-size: 11px;
}

.fb_button {
    background: no-repeat scroll 0 -44px #29447E url('images/sprite_fb_icon_22.png');
    display: inline-block;
    margin-bottom: 10px;
    outline: medium none;
    padding: 0 0 0 1px;
}
.fb_button .fb_button_text {
    background: repeat scroll 0 0 #5F78AB url('images/sprite_fb_icon_22.png');
    border-bottom: 1px solid #1A356E;
    border-top: 1px solid #879AC0;
    color: #FFFFFF;
    display: block;
    font-size: 11px;
    font-weight: bold;
    height: 14px;
    margin: 1px 1px 0 21px;
    padding: 2px 6px 3px;
}
#extra{
    float: left;
    padding-left: 40px;
    text-align: center;
    width: 260px;
    margin-top: 20px;
}
.handwritten{
    font-family: LazyDogRegular;
    font-size: 21px;
    font-style: italic;
    padding-bottom: 10px;
}


.header {
    background: no-repeat scroll 0 0 transparent url('images/texture_hero_974x409_v2.png');
}

.header .philosophy {
    overflow: hidden;
    padding-top: 30px;
}
.header .philosophy.user-agreement .description {
    float: left;
    margin-bottom: 40px;
    margin-left: 41px;
    margin-top: 0;
    position: relative;
    width: 933px;
}
.header .philosophy .description {
    padding-left: 30px;
}
.header .philosophy .description h1 {
    color: #000000;
    font-size: 32px;
    font-weight: bold;
    line-height: 26px;
}
.header .philosophy.user-agreement .description .text {
    float: left;
    width: 687px;
}

.header .philosophy .description p {
    color: #333333;
    font-size: 13px;
    font-weight: normal;
    line-height: 17px;
    padding-top: 15px;
}

.section {
    float: left;
    margin-left: 41px;
    position: relative;
    width: 933px;
}
h2#introduction {
    float: left;
    margin-right: 41px;
    position: relative;
    width: 892px;
}
h2 {
    color: #000000;
    font-size: 24px;
    font-weight: bold;
    line-height: 26px;
    margin: 30px 0 25px;
    vertical-align: middle;
}

h2#intro .last-revised, h2#introduction .last-revised {
    color: #999999;
    float: right;
    font-size: 12px;
    font-weight: normal;
    line-height: 14px;
    padding-top: 5px;
}
.section .first {
    padding-top: 0;
}
.section .row {
    border-bottom: 1px solid #EEEEEE;
}

.brief-copy {
    color: #333333;
    float: left;
    font-size: 16px;
    font-weight: normal;
    line-height: 20px;
    width: 277px;
}
.full-copy, .full-copy-no-brief {
    color: #999999;
    font-size: 13px;
    font-weight: normal;
    line-height: 17px;
}
.full-copy {
    float: left;
    margin-left: 51px;
    position: relative;
    width: 564px;
}

.full-copy p, .full-copy li, .full-copy-no-brief p, .full-copy-no-brief li {
    margin-bottom: 10px;
}

.brief-copy p {
    margin-bottom: 0;
    margin-top: 10px;
}

.brief-copy p:first-child {
    margin-top: 0;
}

h3 {
    color: #000000;
    font-size: 13px;
    font-weight: bold;
    line-height: 17px;
}
h3.copy-header {
    float: right;
    margin-left: 10px;
    width: 605px;
}
.section .last {
    border-bottom: medium none;
    padding-bottom: 10px;
}

.section .row {
    border-bottom: 1px solid #EEEEEE;
    padding: 20px 0 10px;
}
h3.copy-header {
    float: right;
    margin-left: 10px;
    width: 605px;
}
.full-copy, .full-copy-no-brief {
    color: #999999;
    font-size: 13px;
    font-weight: normal;
    line-height: 17px;
}
.full-copy {
    float: left;
    margin-left: 51px;
    position: relative;
    width: 564px;
}

.full-copy p, .full-copy li, .full-copy-no-brief p, .full-copy-no-brief li {
    margin-bottom: 10px;
}

.back-to-top {
    float: left;
    margin-left: 41px;
    padding-bottom: 20px;
    position: relative;
    width: 892px;
    top: 20px;
}

.back-to-top a {
    float: right;
    font-size: 13px;
}

.back-to-top a span {
    border-color: transparent transparent #0077B5;
    border-style: dashed dashed solid;
    border-width: 0 4px 4px;
    display: inline-block;
    height: 0;
    margin-left: 7px;
    overflow: hidden;
    text-indent: -12345px;
    vertical-align: middle;
    white-space: nowrap;
    width: 0;
}


/* Defining Font */
@font-face {
	font-family: LazyDogRegular;
	src: url('fonts/LazyDogRegular.ttf');
}

/* RESETTING CSS
******************************************************************/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}

/* end: resetting css
******************************************************************/



/* OVERALL LAYOUT & COLORS (SCREEN 1)
******************************************************************/
body{
	color: #666;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 13px;
	outline: 0 none;
	line-height: 1.2;
}
a{
	color: #0077B5;
	text-decoration: none;
}
a:hover{
	text-decoration: underline;
}
hr{
	background-color: #ccc;
	border: 0 none;
	height: 1px;
	margin: 0;
}
strong{
	font-weight: bold;
}
.clear{
	clear: both;
}
.wrapper{
	width: 80%;
	max-width: 974px;
	min-width: 974px;
	margin: 0 auto;
}
#body-area{
	padding: 10px 0;
	margin: 80px 0 10px 0;
}
.top{
	/* fallback */
	background-color: #3F3F3F;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#696969), to(#3F3F3F));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #696969, #3F3F3F);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #696969, #3F3F3F);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #696969, #3F3F3F);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #696969, #3F3F3F);
	height: 42px;
	box-shadow: 0 0 10px #333333;
	-moz-box-shadow: 0 0 10px #333333;
	-webkit-box-shadow: 0 0 10px #333333;
    color: #333333;
    font-weight: normal;
    line-height: 17px;
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 10001;
}
.top.nograd {
	background: transparent none no-repeat scroll center center;
	box-shadow: 0 0 0px #333333;
	-moz-box-shadow: 0 0 0px #333333;
	-webkit-box-shadow: 0 0 0px #333333;
}
.top-navigation{
	float: right;
}
.top-navigation li{
	float: left;
	line-height: 13px;
	position: relative;
}
.top-navigation li a{
	color: #D7D7D7;
	padding: 13px 10px 14px 10px;
	cursor: pointer;
	display: block;
	text-decoration: none;
}
.top-navigation li a:hover{
	color: #2E8DD7;
}
.top-navigation li a:focus{
	background-color: #252525;
	transition: all 0.2s ease-in-out 0s;
	-moz-transition: all 0.2s ease-in-out 0s;
	-webkit-transition: all 0.2s ease-in-out 0s;
}
.logo{
	margin-left: 0;
	margin-right: 5px;
	background: transparent url('images/logo.png') no-repeat scroll left center;
	width: 98px;
	height: 36px;
	display: block;
	float: left;
	left: -1px;
	margin-top: 3px;
	overflow: hidden;
	position: relative;
	text-align: left;
	text-indent: -119988px;
}
.logo-black{
	margin-left: 0;
	margin-right: 5px;
	background: transparent url('images/logo-black.png') no-repeat scroll left center;
	width: 98px;
	height: 36px;
	display: block;
	float: left;
	left: -1px;
	margin-top: 3px;
	overflow: hidden;
	position: relative;
	text-align: left;
	text-indent: -119988px;
}
.padding-0-10px{
	padding: 0 7px;
}

.sidebar{
	float: right; 
	margin-bottom: 40px;
	width: 320px;
}
.content h1{
	color: #3399CC;
	font-size: 18px;
	font-weight: bold;
	line-height: 1.55;
	margin-bottom: 15px;
	text-align: left;	
}
.content ul{
	margin: 0 0 15px;
	line-height: 1.2;
}
.content ul li{
	background: transparent url('images/sprite_guesthome_v2.png') no-repeat scroll;
    color: #666666;
    margin: 0 0 6px;
}
.content ul li#reconnect{
    background-position: 0 3px;
    padding: 8px 0 10px 68px;
}
.content ul li#answers{
    background-position: 5px -222px;
    padding: 13px 0 10px 68px;
}
.content ul li#power{
    background-position: 0 -144px;
    padding: 8px 0 10px 68px;
}
.sidebar #entry-form-heading{
	/* fallback */
	background-color: #73B8DB;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#73B8DB), to(#4393BB));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #73B8DB, #4393BB);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #73B8DB, #4393BB);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #73B8DB, #4393BB);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #73B8DB, #4393BB);
    color: #FFFFFF;
    border-radius: 6px 6px 0 0;
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    padding: 5px 10px;
}
.sidebar #entry-form-heading h2{
	font-size: 14px;
	font-weight: bold;
	color: #fff;
	margin: 0;
	line-height: 1.2;
}

.sidebar .entry-form{
    border-left: 1px solid #DDDDDD;
	border-right: 1px solid #DDDDDD;
	border-top: 0 solid #DDDDDD;
	border-bottom: 1px solid #DDDDDD;
	padding: 10px 10px 5px;
	background: #fff no-repeat center;
	border-radius: 0 0 6px 6px;
	-moz-border-radius: 0 0 6px 6px;
    -webkit-border-radius: 0 0 6px 6px;
    border-image: url('') none;
    }

.sidebar .entry-form label{
    color: #333333;
    display: block;
    float: left;
    font-size: 100%;
    font-weight: bold;
    line-height: 1.8;
    margin-right: 10px;
    text-align: right;
    width: 100px;
    clear: both;
    margin-bottom: 10px;
}

.sidebar .entry-form input{
    font-size: 100%;
    margin: 3px 7px 0 0;
    width: 175px;
    margin-bottom: 10px;
}
.sidebar .entry-form small{
    clear: both;
    color: #666666;
    padding-left: 110px;
    line-height: 1.5;
    margin-left: 0;
    width: 180px;
    text-align: left;
    font-size: 85%;
}
.sidebar .entry-form small:last-child{
	color: #000;
}
.sidebar .entry-form input[type=submit]{
	clear: both;
	margin-left: 110px;
	/* fallback */
	background-color: #69A219;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#8BC03F), to(#69A219));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #8BC03F, #69A219);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #8BC03F, #69A219);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #8BC03F, #69A219);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #8BC03F, #69A219);
	box-shadow: 0 1px 1px #AFD47B inset;
	-moz-box-shadow: 0 1px 1px #AFD47B inset;
	-webkit-box-shadow: 0 1px 1px #AFD47B inset;
    border-color: #669933;
    color: #FFFFFF !important;
    font-weight: bold;
    white-space: nowrap;	
    border-radius: 3px 3px 3px 3px;
    border-style: solid;
    border-width: 1px;
    cursor: pointer;
    font-size: 12px;
    line-height: 1.35;
    overflow: visible;
    padding: 3px 10px 2px;
    text-decoration: none !important;
    vertical-align: top;
    width: auto;
    font-weight: normal;
}
.sidebar .entry-form input[type=submit]:hover{
	/* fallback */
	background-color: #69A219;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#649F15), to(#5D8329));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #649F15, #5D8329);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #649F15, #5D8329);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #649F15, #5D8329);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #649F15, #5D8329);
	box-shadow: 0 1px 1px #94BD5B inset;
	-moz-box-shadow: 0 1px 1px #94BD5B inset;
	-webkit-box-shadow: 0 1px 1px #94BD5B inset;
}
.sidebar .entry-form input[type=submit]:focus{
	/* fallback */
	background-color: #69A219;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#649F15), to(#5D8329));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #649F15, #5D8329);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #649F15, #5D8329);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #649F15, #5D8329);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #649F15, #5D8329);
	box-shadow: 0 1px 1px #598024 inset;
	-moz-box-shadow: 0 1px 1px #598024 inset;
	-webkit-box-shadow: 0 1px 1px #598024 inset;
}
#search-browse{
	padding-top: 20px;
	text-align:center;
}
#search-browse #search-members {
	margin: 0 auto;
	display: inline-block; 
	text-align: center;
}
#search-browse #search-members h2{
    color: #666666;
    display: inline;
    font-size: 130%;
    font-weight: bold;
    padding-right: 10px;	
	float: left;
	margin: 0;
	line-height: 1.2;
}
#search-browse #search-members form{
	float: left;
}

#search-browse #search-members form input[type=text]{
	width: 150px;
	margin-right: 10px;
}
#search-browse #search-members form input[type=submit]{
	min-width: 3em;
	line-height: 1.3;
    background: -moz-linear-gradient(center top , #F2F2F2 0px, #F2F2F2 1px, #E4E4E4 1px, #CECECE 100%) repeat scroll 0 0 transparent;
    border-color: #999999;
    color: #666666 !important;
    border-radius: 3px 3px 3px 3px;
    border-style: solid;
    border-width: 1px;
    cursor: pointer;
    font-size: 12px;
    margin: 0;
    overflow: visible;
    padding: 3px 10px 2px;
    text-decoration: none !important;
    vertical-align: top;
    width: auto;
}

#member-directory{
	clear: both;
    border-bottom: 0 none;
    font-size: 11px;
    margin: 15px 0 30px;
    padding-bottom: 0;
    text-align: center;
    color: #666;
    line-height: 1.6;
}
#statement{
    color: #666666;
    padding: 20px 0 20px;
    text-align: left;	
    font-size: 11px;
}

.footer{
	width: 82%;
	max-width: 980px;
	min-width: 980px;
	margin: 0 auto;
    border-top: 1px solid #CCCCCC;
    color: #666666;
    font-size: 12px;
    font-weight: normal;
    line-height: 14px;
    margin-left: auto;
    margin-right: auto;
    padding-bottom: 10px;
    padding-top: 10px;
}
.footer.noborder{
	border: 0 none;
}
.footer.noborder #legal{
	margin: -20px 0 0 10px;
}
.footer .footer-links li{
    border-right: 1px solid #CCCCCC;
    float: left;
    margin-bottom: 5px;
    margin-right: 8px;
    margin-top: 5px;
    padding-right: 8px;
    font-size: 13px;
}
.footer .footer-links li:last-child{
	border-right: 0 none;
}
.footer .footer-links li.bold{
	font-weight: bold;
}




/* SCREEN 2
******************************************************************/

/* Alert */


div.alert{
    background-color: #FFFFFF;
    color: #333333;
    margin: 0 0 15px;
    min-height: 28px;
    overflow: hidden;
    padding: 6px 7px 6px 35px;
    position: relative;	
}
div.alert.error{
	background: #ffeeee url('images/error.png') no-repeat scroll 7px center;
}
div.alert p, div.alert h3 {
    font-size: 13px;
    margin: 7px 21px 5px 7px;
}
.sidebar .entry-form form .fieldgroup {
    padding-left: 110px;
}
span.error {
    color: #990000;
    font-weight: bold;
    font-size: 12px;
}


/* COLORS AND LAYOUT OF INNER MAIN PAGES (SCREEN 3)
******************************************************************/

body#innermain{
	background: repeat scroll 0 0 #E9E9E9 url('images/bg_texture.png');
}

body#innermain .wrapper:first-child{
	width: 974px;
	min-width: 974px;
}
body#innermain .wrapper{
	width: 980px;
	min-width: 980px;
	max-width: 980px;
}
body#innermain.newwidth .wrapper{
	width: 974px;
	min-width: 974px;
	max-width: 974px;
}
body#innermain #body-area{
	margin: 70px 0 10px;
}
body#join{
	background: #E6E6E6;
}
body#join .wrapper{
	width: 805px;
	min-width: 805px;
}

.innermain{
	background: #fff;
	box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), -1px 0 0 rgba(0, 0, 0, 0.03), 1px 0 0 rgba(0, 0, 0, 0.03), 0 1px 0 rgba(0, 0, 0, 0.12);
	-moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), -1px 0 0 rgba(0, 0, 0, 0.03), 1px 0 0 rgba(0, 0, 0, 0.03), 0 1px 0 rgba(0, 0, 0, 0.12);
	-webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), -1px 0 0 rgba(0, 0, 0, 0.03), 1px 0 0 rgba(0, 0, 0, 0.03), 0 1px 0 rgba(0, 0, 0, 0.12);	
	width: 100%;
	padding: 50px 0;
}
.innermain.padding-adjust{
	padding: 0 0 50px 0;
}
.innermain .row:after{
    clear: both;
    content: " ";
    display: block;
    height: 0;
    overflow: hidden;
    visibility: hidden;	
}
.hero-headline{
    color: #000000;
    font-size: 28px;
    font-weight: bold;
    line-height: 30px;
    padding-bottom: 50px;
    padding-top: 0;
    text-align: center;	
}
.subhead{
	display: block; 
}
.callouts{
    background: repeat-y scroll center top transparent url('images/bg_grey_cols_273x3_v1.png');
    overflow: hidden;	
}
.callouts .callout-headers{
	overflow: hidden;	
}
.callouts .callout{
    float: left;
    margin-bottom: 15px;
    margin-left: 10px;
    margin-top: 0;
    padding-left: 10px;
    padding-right: 15px;
    text-align: center;
    width: 236px;	
}
.callouts .connect{
    float: left;
    margin-left: 92px;
    position: relative;
    width: 236px;	
}
.callouts .title{
    color: #000000;
    font-size: 18px;
    font-weight: bold;
    line-height: 22px;	
}
.callouts .learn{
    margin-right: 0;
    padding-right: 0;	
}
.callouts .img{
    background: no-repeat scroll 0 0 transparent url('images/icon_optimized_whatislinkedin_icon_sprite_236x750.png');
    height: 227px;
    width: 236px;	
}
.callouts .profile-icn{
	background-position: 0 0;
}
.callouts .summary{
    color: #333333;
    font-size: 13px;
    font-weight: normal;
    line-height: 17px;
    padding-left: 20px;
    padding-right: 20px;	
}
.callouts .connect-icn{
	background-position: 0 -250px;	
}
.callouts .share-icn{
	background-position: 0 -500px;	
}
.join-now{
    padding-bottom: 0;
    padding-top: 50px;
    text-align: center;	
}
.join-now .tagline{
    color: #000000;
    display: inline-block;
    font-size: 16px;
    font-weight: bold;
    line-height: 18px;
    padding-left: 0;
    padding-right: 15px;
    vertical-align: middle;	
}
.join-now .join-btn{
/*    -moz-box-sizing: border-box;
    background-color: #F6E312;
    background-image: -moz-linear-gradient(center top , #F6E312 0%, #F9C80D 100%); */
    border-color: #E9AC1A;
    border-radius: 3px 3px 3px 3px;
    -moz-border-radius: 3px 3px 3px 3px;
    -webkit-border-radius: 3px 3px 3px 3px;
    border-style: solid;
    border-width: 1px;
    color: #333333;
    cursor: pointer;
    display: inline-block;
    font-size: 16px;
    font-weight: bold;
    height: 31px;
    line-height: 32px;
    margin: 0;
    overflow: visible;
    padding: 0 15px;
    text-decoration: none !important;
    text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
    vertical-align: middle;
    white-space: nowrap;
    width: auto;	
    
	/* fallback */
	background-color: #F6E312;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#F6E312), to(#F9C80D));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #F6E312, #F9C80D);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #F6E312, #F9C80D);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #F6E312, #F9C80D);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #F6E312, #F9C80D);
}
.join-now .join-btn:hover{
	/* fallback */
	background-color: #EDDB11;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#EDDB11), to(#F2B21B));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(center top , #EDDB11 0%, #EFCF14 35%, #F1BF18 65%, #F2B21B 100%);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(center top , #EDDB11 0%, #EFCF14 35%, #F1BF18 65%, #F2B21B 100%);
	
	/* IE 10 */
	background: -ms-linear-gradient(center top , #EDDB11 0%, #EFCF14 35%, #F1BF18 65%, #F2B21B 100%);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(center top , #EDDB11 0%, #EFCF14 35%, #F1BF18 65%, #F2B21B 100%);
	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25);
	-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25);
}

.join-now .join-btn:focus{
	box-shadow: 0 1px 2px rgba(0, 0, 0, 0.25) inset;
	-moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.25) inset;
	-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.25) inset;
}


/* SCREEN 5
******************************************************************/

#page-title{
	margin: 0 10px 15px;
}
#section-header h1, #section-header h1 a, #page-title h1, #page-title h1 a{
    color: #000000;
    font-size: 22px;
    font-weight: bold;
    line-height: 24px;	
}
.signin ul{
    border-radius: 5px 5px 5px 5px;
    margin: 0 auto;
    padding: 30px 20px;
    background: none repeat scroll 0 0 #FFFFFF;
    border: medium none;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), -1px 0 0 rgba(0, 0, 0, 0.03), 1px 0 0 rgba(0, 0, 0, 0.03), 0 1px 0 rgba(0, 0, 0, 0.12);
    width: 470px;
}
.signin li{
    margin-bottom: 4px;
    overflow: hidden;	
}
.signin label{
	width: 110px;
    color: #333333;
    display: block;
    float: left;
    font-size: 13px;
    font-weight: bold;
    line-height: 33px;
    padding-right: 8px;
    text-align: right;	
}
.signin .fieldgroup{
	width: 350px;
    float: left;
    padding: 3px 0;		
}
.signin .fieldgroup input, .signin .fieldgroup input x:-moz-any-link{
    margin: 1px 0;	
}
.signin .fieldgroup input{
    font-size: 16px;
    width: 220px;	
}
.signin .button{
	margin-left: 117px;
	width: 410px;
	overflow: hidden;
}
.signin .button input{
	vertical-align: middle;	
}
.btn-primary, .btn-menu-open.btn-primary, .btn-split.btn-primary:hover{
    border-color: #045A8B;
    color: #FFFFFF !important;	
    /* fallback */
	background-color: #338AB0;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#338AB0), to(#0571A6));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #338AB0, #0571A6);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #338AB0, #0571A6);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #338AB0, #0571A6);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #338AB0, #0571A6);
	box-shadow: 0 1px 1px #73AEC9 inset;
	-moz-box-shadow: 0 1px 1px #73AEC9 inset;
	-webkit-box-shadow: 0 1px 1px #73AEC9 inset;
    
}
.btn-primary, .btn-new-primary, .btn-secondary, .btn-new-secondary, .btn-tertiary, .btn-ternary, .btn-quaternary, .btn-action{
    border-radius: 3px 3px 3px 3px;
    border-style: solid;
    border-width: 1px;
    cursor: pointer;
    font-size: 12px;
    line-height: 1.35;
    margin: 0;
    overflow: visible;
    padding: 3px 10px 2px;
    text-decoration: none !important;
    width: auto;	
}
.btn-primary:hover, .btn-split-toggle-hover.btn-primary:hover{
    border-color: #004A73;	
    /* fallback */
	background-color: #277696;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#277696), to(#04608E));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #277696, #04608E);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #277696, #04608E);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #277696, #04608E);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #277696, #04608E);
	box-shadow: 0 1px 1px #69A0B6 inset;
	-moz-box-shadow: 0 1px 1px #69A0B6 inset;
	-webkit-box-shadow: 0 1px 1px #69A0B6 inset;
}

.btn-primary:active, .btn-split-toggle-hover.btn-primary:active{
    border-color: #004A73;
    /* fallback */
	background-color: #277696;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#025F8D), to(#267696));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #025F8D, #267696);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #025F8D, #267696);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #025F8D, #267696);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #025F8D, #267696);
}
.signin .fieldgroup a {
    font-size: 11px;
    padding-left: 5px;
    color: #006699;
}


/* SCREEN 6
******************************************************************/

body#innermain.nobg{
	background: transparent none;
}
.request-password-reset h1 {
    font-size: 18px;
    margin: 0 0 15px;
    color: #000;
}
.request-password-reset p {
    margin: 10px 0;
}
.request-password-reset .fieldgroup input {
    vertical-align: top;
    width: 300px;
}
ul.directory {
    list-style-type: disc;
    margin: 0 0 20px;
    overflow: hidden;
}
ul.directory li {
    float: left;
    font-size: 13px;
    margin: 0 0 10px 1.2em;
    width: 43%;
    list-style-position:inside;
    color: #000;
}
div.main-body-white{
    background: none repeat scroll 0 0 #FFFFFF;
    border: 1px solid #CCCCCC;
    clear: both;
    margin: 0 auto;
    min-width: 790px;
    padding: 15px;
    width: 790px;
}

#content{
	width: 58%;
    margin: 10px 0 25px;
    overflow: hidden;
    width: auto;
}
.standard-form.sided{
    float: left;
    margin: 0;
    padding: 0 0 0 20px;
    width: 320px;	
}
.introduction {
    background: url('images/bg_arrow_foursided_00679a_34x34.png') no-repeat scroll left bottom transparent;
    margin-bottom: 5px;
    margin-left: 108px;
    padding-bottom: 11px;
}
.introduction h1{
	background: repeat-x scroll left bottom #74B9DC url('images/bg_blue_19x63.png');
    font-size: 18px;
    line-height: 23px;
    overflow: hidden;
    font-weight: normal;	
    padding: 16px 18px;
    margin-left: -108px;
    border-radius: 5px 5px 5px 5px;
    color: #FFFFFF;
    
    /* fallback */
	background-color: #91CCE7;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#91CCE7), to(#00679A));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #91CCE7, #00679A);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #91CCE7, #00679A);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #91CCE7, #00679A);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #91CCE7, #00679A);
    
}

#body-area.lessmargin{
	margin: 0 0 10px;
}

.standard-form li, .standard-form fieldset.details li{
	margin-bottom: 10px;
}
.standard-form label{
    margin-right: 0;
    width: 97px;
    padding: 3px 0;
    background-color: rgba(0, 0, 0, 0);
    color: #333333;
    display: block;
    float: left;
    font-size: 13px;
    font-weight: bold;
    text-align: right;
}

.standard-form.sided ul ul, .standard-form.sided .fieldgroup{
	margin-left: 105px;
	position: relative;	
}

.standard-form .error {
    color: #990000;
    font-size: 12px;
    font-weight: bold;
}

.standard-form input {
    width: 267px;
}

.standard-form li:after {
    clear: both;
    content: ".";
    display: block;
    height: 0;
    visibility: hidden;
}

.standard-form.sided p {
    margin-left: 105px;
}
.standard-form .actions {
    background: none repeat scroll 0 0 transparent;
    font-size: 100%;
    margin-top: 10px;
    padding-top: 0;
}

.standard-form p {
    color: #333333;
}

.join-linkedin .standard-form .actions button {
    cursor: pointer;
    max-width: 183px;
    width: auto;
}
.btn-tertiary {
    border-color: #669933;
    cursor: pointer;
    color: #FFFFFF !important;
	/* fallback */
	background-color: #69A219;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#8BC03F), to(#69A219));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #8BC03F, #69A219);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #8BC03F, #69A219);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #8BC03F, #69A219);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #8BC03F, #69A219);
	box-shadow: 0 1px 1px #AFD47B inset;
	-moz-box-shadow: 0 1px 1px #AFD47B inset;
	-webkit-box-shadow: 0 1px 1px #AFD47B inset;
}
.btn-tertiary:hover{
	/* fallback */
	background-color: #69A219;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#649F15), to(#5D8329));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #649F15, #5D8329);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #649F15, #5D8329);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #649F15, #5D8329);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #649F15, #5D8329);
	box-shadow: 0 1px 1px #94BD5B inset;
	-moz-box-shadow: 0 1px 1px #94BD5B inset;
	-webkit-box-shadow: 0 1px 1px #94BD5B inset;	
}
.btn-tertiary:focus{
	/* fallback */
	background-color: #69A219;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#649F15), to(#5D8329));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #649F15, #5D8329);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #649F15, #5D8329);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #649F15, #5D8329);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #649F15, #5D8329);
	box-shadow: 0 1px 1px #598024 inset;
	-moz-box-shadow: 0 1px 1px #598024 inset;
	-webkit-box-shadow: 0 1px 1px #598024 inset;	
}
.top-menu-right-link{
    background-color: rgba(0, 0, 0, 0);
    color: #666666;
    float: right;
    font-size: 11px;
    font-weight: normal;
    line-height: 39px;	
}



.fieldgroup.field-hover input {
    background: none repeat scroll 0 0 #FFFFFF;
    cursor: text;
}
.fieldgroup input{
    border: 1px solid #999999;
    padding: 2px 3px;
}
.standard-form input {
    width: 267px;
}
.standard-form input {
    margin: 0;
    width: 267px;
}

.standard-form.sided p {
    margin-left: 105px;
    margin-top: 5px;
}
.standard-form p.example, .standard-form p.tip, .standard-form p.note {
    color: #666666;
    font-size: 11px;
}

p#copyright {
    border-right: 1px solid #CCCCCC;
    float: left;
    margin-right: 8px;
    padding: 0 8px 0 0;
    font-size: 11px;
}
p#terms-of-use {
    margin-bottom: 8px;
    font-size: 11px;
}
.standard-form.sided{
	float: left;
	border-right: 1px solid #ccc;
	padding-right: 120px;
}

#agreement {
    margin: 0;
}
#agreement {
    border-top: 1px solid #CCCCCC;
    clear: both;
    color: #555555;
    font-size: 110%;
    padding-top: 15px;
    text-align: center;
    font-size: 11px;
}

.fb_button {
    background: no-repeat scroll 0 -44px #29447E url('images/sprite_fb_icon_22.png');
    display: inline-block;
    margin-bottom: 10px;
    outline: medium none;
    padding: 0 0 0 1px;
}
.fb_button .fb_button_text {
    background: repeat scroll 0 0 #5F78AB url('images/sprite_fb_icon_22.png');
    border-bottom: 1px solid #1A356E;
    border-top: 1px solid #879AC0;
    color: #FFFFFF;
    display: block;
    font-size: 11px;
    font-weight: bold;
    height: 14px;
    margin: 1px 1px 0 21px;
    padding: 2px 6px 3px;
}
#extra{
    float: left;
    padding-left: 40px;
    text-align: center;
    width: 260px;
    margin-top: 20px;
}
.handwritten{
    font-family: LazyDogRegular;
    font-size: 21px;
    font-style: italic;
    padding-bottom: 10px;
}


.header {
    background: no-repeat scroll 0 0 transparent url('images/texture_hero_974x409_v2.png');
}

.header .philosophy {
    overflow: hidden;
    padding-top: 30px;
}
.header .philosophy.user-agreement .description {
    float: left;
    margin-bottom: 40px;
    margin-left: 41px;
    margin-top: 0;
    position: relative;
    width: 933px;
}
.header .philosophy .description {
    padding-left: 30px;
}
.header .philosophy .description h1 {
    color: #000000;
    font-size: 32px;
    font-weight: bold;
    line-height: 26px;
}
.header .philosophy.user-agreement .description .text {
    float: left;
    width: 687px;
}

.header .philosophy .description p {
    color: #333333;
    font-size: 13px;
    font-weight: normal;
    line-height: 17px;
    padding-top: 15px;
}

.section {
    float: left;
    margin-left: 41px;
    position: relative;
    width: 933px;
}
h2#introduction {
    float: left;
    margin-right: 41px;
    position: relative;
    width: 892px;
}
h2 {
    color: #000000;
    font-size: 24px;
    font-weight: bold;
    line-height: 26px;
    margin: 30px 0 25px;
    vertical-align: middle;
}

h2#intro .last-revised, h2#introduction .last-revised {
    color: #999999;
    float: right;
    font-size: 12px;
    font-weight: normal;
    line-height: 14px;
    padding-top: 5px;
}
.section .first {
    padding-top: 0;
}
.section .row {
    border-bottom: 1px solid #EEEEEE;
}

.brief-copy {
    color: #333333;
    float: left;
    font-size: 16px;
    font-weight: normal;
    line-height: 20px;
    width: 277px;
}
.full-copy, .full-copy-no-brief {
    color: #999999;
    font-size: 13px;
    font-weight: normal;
    line-height: 17px;
}
.full-copy {
    float: left;
    margin-left: 51px;
    position: relative;
    width: 564px;
}

.full-copy p, .full-copy li, .full-copy-no-brief p, .full-copy-no-brief li {
    margin-bottom: 10px;
}

.brief-copy p {
    margin-bottom: 0;
    margin-top: 10px;
}

.brief-copy p:first-child {
    margin-top: 0;
}

h3 {
    color: #000000;
    font-size: 13px;
    font-weight: bold;
    line-height: 17px;
}
h3.copy-header {
    float: right;
    margin-left: 10px;
    width: 605px;
}
.section .last {
    border-bottom: medium none;
    padding-bottom: 10px;
}

.section .row {
    border-bottom: 1px solid #EEEEEE;
    padding: 20px 0 10px;
}
h3.copy-header {
    float: right;
    margin-left: 10px;
    width: 605px;
}
.full-copy, .full-copy-no-brief {
    color: #999999;
    font-size: 13px;
    font-weight: normal;
    line-height: 17px;
}
.full-copy {
    float: left;
    margin-left: 51px;
    position: relative;
    width: 564px;
}

.full-copy p, .full-copy li, .full-copy-no-brief p, .full-copy-no-brief li {
    margin-bottom: 10px;
}

.back-to-top {
    float: left;
    margin-left: 41px;
    padding-bottom: 20px;
    position: relative;
    width: 892px;
    top: 20px;
}

.back-to-top a {
    float: right;
    font-size: 13px;
}

.back-to-top a span {
    border-color: transparent transparent #0077B5;
    border-style: dashed dashed solid;
    border-width: 0 4px 4px;
    display: inline-block;
    height: 0;
    margin-left: 7px;
    overflow: hidden;
    text-indent: -12345px;
    vertical-align: middle;
    white-space: nowrap;
    width: 0;
}






 
/* LINKEDIN ADVANCED
************************************************************************************************************************************
************************************************************************************************************************************
************************************************************************************************************************************
************************************************************************************************************************************
************************************************************************************************************************************
************************************************************************************************************************************
************************************************************************************************************************************
************************************************************************************************************************************
************************************************************************************************************************************
************************************************************************************************************************************
************************************************************************************************************************************
************************************************************************************************************************************
************************************************************************************************************************************
************************************************************************************************************************************
*/

.main-body-white h1.mainh1{
	font-size: 17px;
	font-weight: normal;
	float: left;
	width: 75%;
	color: #3399CC;
}
.main-body-white h1.mainh1.strong{
	font-size: 18px;
}

.progress-container {
    border-bottom: 1px solid #CCCCCC;
    margin-bottom: 18px;
    overflow: hidden;
    padding-bottom: 6px;
}

#motivation {
    display: inline;
    float: right;
    margin-top: 10px;
    position: relative;
    width: 280px;
    z-index: 1;
}

#motivation .profile-features {
    border: 1px solid #BADDEE;
    padding: 10px;
}

#motivation .profile-features h3 {
    background: no-repeat scroll 0 0 #FFFFFF url('images/icon_lightbulb_10x17.png');
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 10px;
    padding-left: 20px;
}

#motivation .profile-features li {
    background: no-repeat scroll 0 -297px #FFFFFF url('images/sprite_registration_v2.png');
    font-size: 13px;
    margin-top: 8px;
    padding-left: 15px;
}
#motivation .profile-features li.first {
    margin-top: 0;
}


.standard-form-profile {
    float: left;
    margin: 0 0 20px;
    width: 485px;
}


.standard-form-profile ul {
    list-style-type: none;
    margin: 0;
    padding-top: 10px;
}

.standard-form-profile li:after {
    clear: both;
    content: ".";
    display: block;
    height: 0;
    visibility: hidden;
}
.standard-form-profile label, .standard-form-profile li fieldset legend span, .standard-form-profile li fieldset.details fieldset legend{
	width: 150px;
}
abbr, acronym {
    border: medium none;
}

.standard-form-profile label em{
	color: #990000;
}
.standard-form-profile ul ul, .standard-form-profile .fieldgroup, .standard-form-profile p {
	margin-left: 160px;	
}

.standard-form-profile .error {
    color: #990000;
    font-size: 12px;
    font-weight: bold;
}

.standard-form-profile .fieldgroup input, .standard-form-profile .fieldgroup select, .standard-form-profile .fieldgroup textarea, .standard-form-profile .typeahead input {
    -moz-box-sizing: border-box;
    width: 310px;
}
.standard-form-profile input, .standard-form-profile select, .standard-form-profile textarea {
    font-size: 13px;
}
.standard-form-profile input, .standard-form-profile select, .standard-form-profile textarea {
    font-size: 13px;
}

.standard-form-profile li, .standard-form-profile fieldset.details li {
    margin-bottom: 10px;
}

.standard-form-profile p.example, .standard-form-profile p.tip, .standard-form-profile p.note {
    color: #666666;
    font-size: 11px;
}
#status-chooser-container {
    margin: 12px 0 16px;
}


.standard-form-profile li fieldset {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    margin: 0;
    padding: 0;
}
.standard-form-profile legend {
    background-color: #FFFFFF;
    color: #333333;
    font-size: 18px;
    padding-right: 10px;
}

.standard-form-profile li fieldset legend {
    line-height: 1.5;
    margin: 0;
    padding: 0;
    position: relative;
}

#status-chooser-container li {
    float: left;
}
.standard-form-profile li li, .standard-form-profile fieldset.details li li {
    margin-bottom: 0;
}
#status-chooser-container li label {
    width: auto;
}
#status-chooser-container fieldset input {
    margin-right: 5px;
}
.standard-form-profile input, .standard-form-profile select, .standard-form-profile textarea {
    font-size: 13px;
}
.standard-form-profile .job-title, .standard-form-profile .job-title {
    margin-bottom: 0;
}
form ul input.text-input {
    border: 1px solid #999999;
    padding: 2px 3px;
}
.standard-form-profile input, .standard-form-profile select, .standard-form-profile textarea {
    font-size: 13px;
}
label.labelradio{
	text-align: left;
	font-weight: normal;
	width: auto;
	margin-right: 20px;
}
.standard-form.extrainput label.labelradio input {
	width: auto;
	text-align: left;
	margin-right: 3px;
}
.country-select{
	width: 318px;
}
.standard-form.extrainput input{
	width: 310px;
}
.extrainput .fieldgroup{
	width: 300px;
}

.standard-form.extrainput {
    border-right: 0px solid #CCCCCC !important;
    float: left;
    padding-right: 0 !important;
}

div.main-body-white.signup{
    min-width: 770px;
    width: 770px;	
}

.standard-form.noborder{
	border-right: 0px solid #ccc !important;
}
.import-abook-contacts, .abook-import {
    margin: auto;
    width: 550px;
}
.import-abook-contacts, .abook-import .content{
	float:none;
	width: auto;
}
.import-abook-contacts, .abook-import .content ul li{
	background: transparent none no-repeat scroll center center;
}
.leo-module.mod-action {
    background: none repeat scroll 0 0 #DDF0F8;
    border: 1px solid #9ACCE6;
    border-radius: 6px 6px 6px 6px;
    padding: 0;
}


.leo-module.mod-action .header {
    color: #006699;
    margin: 0;
    padding: 5px 10px;
    background: transparent none  no-repeat scroll center center;
}
.leo-module .header {
    border-top-left-radius: 6px;
    border-top-right-radius: 6px;
    padding: 5px 10px;
}
.leo-module .header h1, .leo-module .header h2, .leo-module .header h3, .leo-module .header h4, .leo-module .header h5 {
    font-size: 13px;
    font-weight: bold;
    margin: 0;
}
.leo-module.mod-action .content {
    background: none repeat scroll 0 0 #DDF0F8;
    border: medium none;
    border-radius: 0 0 0 0;
    color: #333333;
    overflow: hidden;
    padding: 0 15px 20px;
}

.import-abook-contacts .abook-import p.introduction {
    font-size: 13px;
    margin: 5px 10px 15px;
    background: transparent none no-repeat scroll center center; 
    padding: 0;
}
.import-abook-contacts .abook-import .fieldgroup{
	width: 390px;
}

.import-abook-contacts .standard-form.sided fieldset {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
}

.import-abook-contacts .standard-form.sided ul {
    padding-top: 0;
}
.standard-form li:after {
    clear: both;
    content: ".";
    display: block;
    height: 0;
    visibility: hidden;
}

.import-abook-contacts .standard-form.sided ul label {
    width: 125px;
}
.standard-form label, .standard-form li fieldset legend span, .standard-form li fieldset.details fieldset legend {
    background-color: rgba(0, 0, 0, 0);
    color: #333333;
    display: block;
    float: left;
    font-size: 13px;
    font-weight: bold;
    margin-right: 10px;
    text-align: right;
}
.standard-form.sided ul ul, .standard-form.sided .fieldgroup {
    margin-left: 120px;
}
.standard-form ul ul, .standard-form .fieldgroup {
    padding: 0;
}
.form-row {
    display: inline-block;
    position: relative;
    vertical-align: middle;
}

.import-abook-contacts span.error {
    color: #990000;
    font-weight: bold;
    font-size: 12px;
}

#email-nWMIForm {
    margin-right: 4px;
}
.webmail-upload .email-address input, #email-nWMIForm {
    float: left;
}
.import-abook-contacts .standard-form.sided ul input {
    width: 255px;
}
.standard-form input, .standard-form select, .standard-form textarea {
    font-size: 13px;
}
input[data-ime-mode-disabled] {
    ime-mode: disabled !important;
}
form ul input, form ul textarea {
    background-color: #FFFFFF;
    border: 1px solid #999999;
    outline: medium none;
    padding: 2px 3px;
}


.import-abook-contacts .standard-form.sided p {
    margin-left: 135px;
}
.standard-form p.example, .standard-form p.tip, .standard-form p.note {
    color: #666666;
    font-size: 11px;
}

.import-abook-contacts .skip {
    font-size: 13px;
    margin: 15px auto 40px;
    text-align: right;
    width: 550px;
}


.progress-container p.progress {
    float: right;
    margin-top: 1px;
    width: 22%;
}
.progress-container .progress {
    float: right;
    overflow: hidden;
}

.progress-container .summary {
    float: left;
    font-size: 13px;
}

.progress-container .progress-meter {
    float: right;
}
.progress-meter {
    background: repeat-x scroll 0 0 rgba(0, 0, 0, 0) url('images/sprite_progress_meter_v1.png');
    border: 1px solid #666666;
    overflow: hidden;
    width: 100px;
}
.progress-meter, .progress-meter .has-progress, .progress-meter .no-progress {
    display: block;
    height: 12px;
}
.progress-meter .has-progress {
    background: repeat-x scroll 0 -50px rgba(0, 0, 0, 0) url('images/sprite_progress_meter_v1.png');
    border-right: 1px solid #666666;
}
.progress-meter, .progress-meter .has-progress, .progress-meter .no-progress {
    display: block;
    height: 12px;
}

.popup-wrapper{
    height: auto;
    width: auto;
    position: absolute;
    z-index: 100000;
    top: 150px;
    left: 410px;    	
}
.popup{
	position: static;
    background: repeat scroll left top rgba(0, 0, 0, 0) url('images/bg_dialog_modeless_mask.png');
    border-radius: 5px 5px 5px 5px;
    padding: 15px;	
}

.popup-content{
	width: 500px;
	position: relative;
}

.popup-title{
	border-left: 1px solid #939393;
	border-right: 1px solid #939393;
	border-top: 1px solid #939393;
	border-bottom: 0 solid #939393;
	cursor: text;
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-image: url('') none;
    border-radius: 5px 5px 0 0;
    padding: 8px 12px;	
	/* fallback */
	background-color: #787878;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#C4C4C4), to(#787878));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #C4C4C4, #787878);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #C4C4C4, #787878);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #C4C4C4, #787878);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #C4C4C4, #787878);



}
.popup-title h3{
    clear: none;
    color: #FFFFFF;
    font-size: 14px;
    font-weight: bold;
    letter-spacing: 0.06em;
    margin: 0 18px 0 0;
    font-weight: bold;	
}
.popup-body {
    border-left: 1px solid #939393;
	border-right: 1px solid #939393;
	border-top: 0 solid #939393;
	border-bottom: 1px solid #939393;
	-moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: #FFFFFF;
    border-image: url('') none;
    border-radius: 0 0 5px 5px;
    padding: 14px 19px 15px;
}

.popup-body .alert{
	padding: 0;
}
.popup-body .alert p{
	margin: 7px 0 5px;	
}

.connection-header{
    background: url("/scds/common/u/img/sprite/sprite_registration_v2.png") repeat-x scroll 0 0 #E8E8E8;
    border: 1px solid #CCCCCC;
    color: #333333;
    height: 27px;
    overflow: hidden;
    padding: 0 8px;	
    margin-top: 18px;
}
p.selectall{
	margin-left: -4px;
	display: block;
    float: left;
    font-size: 13px;
    line-height: 27px;	
}
p.selectall input{
	margin-top: 4px;
}

p.number-selected{
    color: #666666;
    font-size: 12px;
    display: block;
    float: right;
    line-height: 27px;
}

.connection-body{
    border-left: 1px solid #CCCCCC;
	border-right: 1px solid #CCCCCC;
	border-top: 0 solid #CCCCCC;
	border-bottom: 1px solid #CCCCCC;
	height: auto;
    max-height: 316px;	
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-image: url('') none;
    display: inline-block;
    margin: 0 0 14px;
    overflow-x: hidden;
    overflow-y: scroll;
    width: 768px;
}
.connection-body.list{
	overflow-y: hidden;
}
.connection-grid{
    border: 0 none;
    height: auto;
    margin-bottom: 0;
    max-height: none;
    overflow: visible;
    position: relative;	
}
.connection-grid .row{
	background: repeat-y scroll 0 0 #EDF2F5 url('images/bg_reg_connect_grid.png');
    border-bottom: 1px solid #CCCCCC;
    display: block;
    margin: 0;		
}
.connection-grid .row:after{
    clear: both;
    content: ".";
    display: block;
    height: 0;
    line-height: 0;
    visibility: hidden;	
}
.person{
    float: left;
    padding-bottom: 8px;
    width: 50%;	
}
.person input{
	cursor: pointer;
	margin: 27px 9px 0 16px;
	float: left;	
}
.person img{
    float: left;
    margin: 8px 8px 0 0;
    padding: 2px;
    display: block;	
}
.person .title{
    color: #333333;
    font-size: 12px;
    margin: 3px 0;	
}
.connection-details{
    margin: 8px 8px 0 77px;
    min-height: 40px;
    padding: 2px 10px;	
}

.connection-body li{
    border-bottom: 1px solid #CCCCCC;
    height: 30px;
    line-height: 30px;
    overflow: hidden;
    padding: 0 8px;
    background-color: #DDF0F8;	
}
.connection-body label{
    float: left;
    font-size: 13px;
    font-weight: bold;	
}
.main-body{
	padding: 0 110px 20px;	
}
.mini-profile{
    border: 1px solid #CCCCCC;
    box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.06);
    overflow: hidden;
    padding: 12px 16px 18px;	

	/* fallback */
	background-color: #787878;
	background: none;
	background-repeat: repeat-x;
	
	/* Safari 4-5, Chrome 1-9 */
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#FFFFFF), to(#F2F2F2));
	
	/* Safari 5.1, Chrome 10+ */
	background: -webkit-linear-gradient(top, #FFFFFF, #F2F2F2);
	
	/* Firefox 3.6+ */
	background: -moz-linear-gradient(top, #FFFFFF, #F2F2F2);
	
	/* IE 10 */
	background: -ms-linear-gradient(top, #FFFFFF, #F2F2F2);
	
	/* Opera 11.10+ */
	background: -o-linear-gradient(top, #FFFFFF, #F2F2F2);
}
.mini-profile h1 {
    font-family: Georgia,serif;
}

.mini-profile h1 {
    border: 0 none;
    color: #000000;
    font-size: 23px;
    margin: 0 0 3px;
    padding: 0;
    font-weight:normal;
}

.mini-profile .title {
    color: #444444;
    font-size: 15px;
    margin: 0 0 2px;
}

.demographic-info {
    color: #777777;
    font-size: 12px;
}

.demographic-info dd:first-of-type {
    border: 0 none;
    margin: 0;
    padding: 0;
    display: inline;
}

.demographic-info dd {
    border-left: 1px solid #CCCCCC;
    display: inline;
    margin: 0 0 0 3px;
    padding: 0 0 0 6px;
}

.broadcast-form {
    display: block;
    margin: 0 0 24px;
}

.broadcast-form .broadcast-message {
    border-left: 1px solid #91CDE7;
	border-right: 1px solid #91CDE7;
	border-top: 0 solid #91CDE7;
	border-bottom: 1px solid #91CDE7;
	-moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background: none repeat scroll 0 0 #DBF0F9;
    border-image: url('') none;
    box-shadow: 2px 2px 2px rgba(145, 204, 231, 0.2);
    margin: 0 0 15px;
    overflow: hidden;
    padding: 10px;
}


.broadcast-form textarea {
    -moz-box-sizing: border-box;
    border: 1px solid #CCCCCC;
    display: block;
    font-size: 13px;
    margin-bottom: 4px;
    overflow: hidden;
    padding: 7px;
    resize: none;
    width: 100%;
}

.broadcast-form .check-textarea-message {
    float: right;
}
p.check-textarea-message {
    color: #666666 !important;
    display: block;
    font-size: 12px !important;
    margin: 2px 0 !important;
}

.broadcast-form .public-profile-url {
    color: #666666;
    float: left;
    font-size: 11px;
    margin: 2px 0;
    text-indent: 2px;
}
.broadcast-form button.btn-icon {
    border-left: 1px solid #999999;
	border-right: 1px solid #999999;
	border-top: 1px solid #999999;
	border-bottom: 1px solid #B3B3B3;
	border-image: url('') none;
	border-radius: 3px;
	color: #333333;
    cursor: pointer;
    float: left;
    font-size: 12px;
    font-weight: bold;
    margin: 0 10px 0 0;
    padding: 0;
	/* fallback */
	
	/* Safari 4-5, Chrome 1-9 */
	/* Safari 5.1, Chrome 10+ */
	/* Firefox 3.6+ */
	/* IE 10 */
	/* Opera 11.10+ */
	}
.broadcast-form button.btn-icon span {
    background: no-repeat scroll 2px 2px rgba(0, 0, 0, 0) url('images/sprite_social_share_24_v2.png');
    display: inline-block;
    min-height: 12px;
    padding: 7px 5px 7px 30px;
}


.broadcast-form button.btn-icon.twitter span {
    background-position: 2px -38px;
}

.broadcast-form .skip {
    float: right;
    font-size: 13px;
}




.account-sub-nav {
    height: 0;
    line-height: 0;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    right: -5px;
    top: 100%;
}


.nav-item:hover .account-sub-nav, .nav-item.open .account-sub-nav {
    height: auto;
    line-height: 1;
    opacity: 1;
    overflow: visible;
}
.global-header .utilities .activity-drop, .global-header .utilities .add-connections-options, .global-header .utilities .account-sub-nav-options {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 5px solid #333333;
    z-index: 10006;
}

.nav-v5-2-header .utilities .account-sub-nav-options {
    border: 5px solid #2F2F2F;
    width: 318px;
}
.global-header .utilities .account-sub-nav-header, .global-header .utilities .add-connections-options-header, .global-header .utilities .activity-drop-header {
    background: none repeat scroll 0 0 #333333;
    line-height: 13px;
    padding-bottom: 10px;
    padding-left: 10px;
    padding-top: 5px;
}

.nav-v5-2-header .utilities .account-sub-nav-header, .nav-v5-2-header .utilities .add-connections-options-header, .nav-v5-2-header .utilities .activity-drop-header {
    background: none repeat scroll 0 0 #2F2F2F;
}

.global-header .utilities .account-sub-nav-header h3, .global-header .utilities .add-connections-options-header h3, .global-header .utilities .activity-drop-header h3 {
    color: #FFFFFF;
    font-size: 13px;
    font-weight: bold;
    line-height: 15px;
    margin-bottom: 0;
}

.global-header .utilities .sub-nav-header-arrow {
    background: url("images/sprite_global_nav_v8.png") no-repeat scroll -10px -868px rgba(0, 0, 0, 0);
    height: 15px;
    margin-left: 5px;
    margin-right: 5px;
    position: absolute;
    width: 8px;
}

.account-settings {
    overflow: hidden;
    position: relative;
    width: 318px;
}

.account-settings > li {
    display: table;
    float: left;
}

.account-settings-link {
    border-bottom: 1px solid #DCDDDE;
    display: block;
    min-height: 34px;
}

.act-set-row {
    display: table-cell;
    padding-bottom: 5px;
    padding-top: 5px;
    vertical-align: middle;
    width: 328px;
}

.act-set-icon {
    display: table-cell;
    height: 24px;
    vertical-align: middle;
    width: 40px;
}
.act-set-icon-image {
    background-image: url("images/sprite_global_nav_v8.png");
    background-repeat: no-repeat;
    display: block;
    height: 20px;
    width: 32px;
}

.self .act-set-icon-image {
    background-image: none;
}


.account-settings .self .profile-photo {
    margin-left: 10px;
}
.act-set-name {
    color: #333333;
    display: table-cell;
    font-size: 13px;
    font-weight: normal;
    line-height: 17px;
    vertical-align: middle;
    width: 180px;
}
.utilities .account-sub-nav-options .act-set-name-split-link, .utilities .account-sub-nav-options .act-set-name {
    color: #333333;
    font-size: 13px;
    font-weight: normal;
    line-height: 17px;
}
.act-set-name-split-link {
    display: block;
    width: 100%;
}

.act-set-action {
    color: #0077B5;
    display: table-cell;
    text-decoration: none;
    vertical-align: middle;
    width: 88px;
}
.utilities .account-sub-nav-options .act-set-name-split-link, .utilities .account-sub-nav-options .act-set-name {
    color: #333333;
    font-size: 13px;
    font-weight: normal;
    line-height: 17px;
}

.account-settings > li {
    display: table;
    float: left;
}
.account-settings-link {
    border-bottom: 1px solid #DCDDDE;
    display: block;
    min-height: 34px;
}
.act-set-row {
    display: table-cell;
    padding-bottom: 5px;
    padding-top: 5px;
    vertical-align: middle;
    width: 328px;
}
.act-set-icon {
    display: table-cell;
    height: 24px;
    vertical-align: middle;
    width: 40px;
}
.act-set-icon-image {
    background-image: url("images/sprite_global_nav_v8.png");
    background-repeat: no-repeat;
    display: block;
    height: 20px;
    width: 32px;
}

.account-type .act-set-icon-image, .team-account .act-set-icon-image {
    background-position: 5px -407px;
}
.account-settings li:hover {
	background: #eee;
}


.global-header .utilities .open .add-connections, .global-header .utilities .open .activity-container {
    left: -147px;
    opacity: 1;
    top: 100%;
    width: 328px;
}
.nav-v5-2-header .utilities .open .add-connections, .nav-v5-2-header .utilities .open .activity-container, .nav-v5-2-header .utilities .open #notifications, .nav-v5-2-header .utilities .open #inbox {
    left: auto;
    right: -5px;
}
.global-header .utilities .open #notifications {
    left: -152px;
}

.nav-v5-2-header .utilities .open .add-connections, .nav-v5-2-header .utilities .open .activity-container, .nav-v5-2-header .utilities .open #notifications, .nav-v5-2-header .utilities .open #inbox {
    left: auto;
    right: -5px;
}
.global-header .utilities .activity-drop, .global-header .utilities .add-connections-options, .global-header .utilities .account-sub-nav-options {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 5px solid #333333;
    z-index: 10006;
}
.activity-drop {
    overflow: visible;
}
.global-header .utilities .account-sub-nav-header, .global-header .utilities .add-connections-options-header, .global-header .utilities .activity-drop-header {
    background: none repeat scroll 0 0 #333333;
    line-height: 13px;
    padding-bottom: 10px;
    padding-left: 10px;
    padding-top: 5px;
}

.nav-v5-2-header .utilities .account-sub-nav-header, .nav-v5-2-header .utilities .add-connections-options-header, .nav-v5-2-header .utilities .activity-drop-header {
    background: none repeat scroll 0 0 #2F2F2F;
}
.global-header .utilities .activity-drop-header {
    overflow: hidden;
}

.global-header .utilities .account-sub-nav-header h3, .global-header .utilities .add-connections-options-header h3, .global-header .utilities .activity-drop-header h3 {
    color: #FFFFFF;
    font-size: 13px;
    font-weight: bold;
    line-height: 15px;
    margin-bottom: 0;
}


.global-header .utilities .sub-nav-header-arrow {
    background: url("images/sprite_global_nav_v8.png") no-repeat scroll -10px -868px rgba(0, 0, 0, 0);
    height: 15px;
    margin-left: 5px;
    margin-right: 5px;
    position: absolute;
    width: 8px;
}

.activity-drop-body {
    height: auto;
    max-height: 550px;
    overflow: hidden;
    position: relative;
}

.activity-drop-body ol {
    background-color: #FFFFFF;
    height: auto;
    max-height: 550px;
    overflow-x: hidden;
    overflow-y: scroll;
    width: 334px;
}
.activity-drop-body ol > li {
    margin-right: 1px;
}
.activity-drop .update {
    border-top: 1px solid #D2D2D2;
    height: auto;
    margin: 0 -1px;
    min-height: 40px;
    padding: 15px 0;
    position: relative;
    width: 321px;
}

.activity-drop .update.first {
    border-top-color: #FFFFFF;
}

.activity-drop .update .timestamp {
    color: #999999;
    display: inline;
    float: right;
    font-size: 12px;
    line-height: 14px;
    padding: 0 30px 0 10px;
    text-shadow: 0 1px 0 #FFFFFF;
}
.activity-drop .update.single .photo {
    left: 0;
    margin-left: 10px;
    position: absolute;
    top: 15px;
}
.activity-drop-body .photo {
    border: medium none;
}

.activity-drop .update.single .action {
    height: auto;
    max-height: 85px;
    padding-left: 60px;
    padding-right: 15px;
}
.activity-drop .update .action {
    color: #666666;
    font-size: 13px;
    font-weight: normal;
    line-height: 17px;
    overflow: visible;
}
.activity-drop .update.single .name {
    display: block;
}
.activity-drop .update .names, .activity-drop .update .name {
    color: #333333;
    font-size: 13px;
    font-weight: normal;
    height: auto;
    line-height: 17px;
    max-height: 17px;
    overflow: hidden;
    text-overflow: ellipsis;
    text-shadow: 0 1px 0 #FFFFFF;
    white-space: nowrap;
}


.activity-drop .update.single .action .headline {
    display: block;
    height: auto;
    max-height: 17px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.activity-drop .update .action strong {
    color: #333333;
    font-size: 13px;
    font-weight: bold;
    line-height: 17px;
    padding-left: 0;
    padding-right: 0;
    text-shadow: 0 1px 0 #FFFFFF;
}
.activity-drop .update a.notification-link {
    display: block;
    height: 100%;
    left: 0;
    overflow: hidden;
    position: absolute;
    text-indent: -12345px;
    top: 0;
    width: 100%;
    z-index: 10021;
}

.nav-v5-2-header .utilities .activity-toggle.notifications-alert, .nav-v5-2-header .utilities .activity-toggle.notifications-alert:hover {
    background-position: center -30px;
}
.activity-tab:hover #notifications { opacity: 1; top: auto;}
.notifications-alert {cursor: pointer; }


.nav-v5-2-header .utilities .open .add-connections, .nav-v5-2-header .utilities .open .activity-container, .nav-v5-2-header .utilities .open #notifications, .nav-v5-2-header .utilities .open #inbox, .activity-tab:hover #notifications {
    left: auto;
    right: -45px;
}


.post-home.share-box #post-module-neu.upload_preview .post-actions .submit, .post-home.share-box #post-module-neu.active_message .post-actions .submit {
    display: table-cell;
}
.post-home.share-box #post-module-neu.upload_preview .post-actions .settings, .post-home.share-box #post-module-neu.upload_preview .post-actions .submit, .post-home.share-box #post-module-neu.active_message .post-actions .settings, .post-home.share-box #post-module-neu.active_message .post-actions .submit {
}
.post-home.share-box .post-actions .submit {
    padding-left: 10px;
    vertical-align: middle;
    width: 520px;
}
.post .post-actions {
    color: #666666;
    font-size: 12px;
    margin: 3px 0 0;
    position: relative;
}
.post-home.share-box .post-actions {
    margin-bottom: 15px;
    margin-top: 10px;
    width: 100%;
}
.post-home.share-box #post-module-neu.upload_preview .post-actions, .post-home.share-box #post-module-neu.active_message .post-actions {
    display: table;
}
.post .post-actions:after {
    clear: both;
    content: ".";
    display: block;
    height: 0;
    visibility: hidden;
}
.post .post-message {
    font-size: 12px;
    height: 16px;
    padding: 4px 2px;
    width: 98.5%;
}
.mentions-container .mentions-input {
    background: url("data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7") repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    border-radius: 2px;
    box-shadow: none;
    color: #333333;
    font-size: 13px;
    line-height: 17px;
    margin: 0;
    outline: medium none;
    overflow: hidden;
    padding: 9px 10px;
    position: relative;
    vertical-align: middle;
}
.post-home.share-box .post-message {
    resize: vertical;
    width: 512px;
}
.post-home.share-box .post-link, .post-home.share-box .post-message {
    width: 506px;
}
.post-home.share-box .post-message {
    background: none repeat scroll 0 0 #FDFDFD;
    border: 1px solid #C1C1C1;
    border-radius: 2px;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.1) inset;
    color: #333333;
    font-size: 13px;
    line-height: 17px;
    overflow: hidden;
    padding: 9px 10px;
    position: relative;
    transition-duration: 0.2s;
    transition-property: height, top;
    transition-timing-function: ease-in-out;
    vertical-align: middle;
}
#post-module-neu .mentions-container .post-message, #post-module-neu .mentions-container .post-message.mentions-input, #post-module-neu.active_message .mentions-container .post-message, #post-module-neu.active_message .mentions-container .post-message.mentions-input, #post-module-neu.inactive .mentions-container .post-message, #post-module-neu.inactive .mentions-container .post-message.mentions-input {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    box-shadow: none;
    margin-top: 0 !important;
    overflow: hidden;
    padding-left: 10px;
    padding-right: 40px;
    top: 0 !important;
    width: 491px;
}
#post-module-neu .mentions-container .post-message, #post-module-neu .mentions-container .post-message.mentions-input, #post-module-neu.active_message .mentions-container .post-message, #post-module-neu.active_message .mentions-container .post-message.mentions-input, #post-module-neu.inactive .mentions-container .post-message, #post-module-neu.inactive .mentions-container .post-message.mentions-input {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    box-shadow: none;
    margin-top: 0 !important;
    overflow: hidden;
    padding-left: 10px;
    padding-right: 40px;
    top: 0 !important;
    width: 491px;
}.post-home.share-box #post-module-neu.enable-slideshare .post-message {
    resize: none;
}
#post-module-neu.active_message .mentions-container .post-message, #post-module-neu.active_message .mentions-container .post-message.mentions-input {
    margin-bottom: -3px;
}
#post-module-neu .mentions-container .post-message, #post-module-neu .mentions-container .post-message.mentions-input, #post-module-neu.active_message .mentions-container .post-message, #post-module-neu.active_message .mentions-container .post-message.mentions-input, #post-module-neu.inactive .mentions-container .post-message, #post-module-neu.inactive .mentions-container .post-message.mentions-input {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    box-shadow: none;
    margin-top: 0 !important;
    overflow: hidden;
    padding-left: 10px;
    padding-right: 40px;
    top: 0 !important;
    width: 491px;
}
.post-home.share-box #post-module-neu.upload_preview .post-message, .post-home.share-box #post-module-neu.active_message .post-message {
    height: 45px;
    top: 0;
}
#post-module-neu .mentions-container .post-message, #post-module-neu .mentions-container .post-message.mentions-input, #post-module-neu.active_message .mentions-container .post-message, #post-module-neu.active_message .mentions-container .post-message.mentions-input, #post-module-neu.inactive .mentions-container .post-message, #post-module-neu.inactive .mentions-container .post-message.mentions-input {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    box-shadow: none;
    margin-top: 0 !important;
    overflow: hidden;
    padding-left: 10px;
    padding-right: 40px;
    top: 0 !important;
    width: 491px;
}
#post-module-neu.active_message .mentions-container .post-message, #post-module-neu.active_message .mentions-container .post-message.mentions-input {
    margin-bottom: -3px;
}
#slick-sharing-cont.post-home.share-box #post-module #post-module-neu.active_message .post-message {
    height: 45px;
}
#slick-sharing-cont.post-home.share-box #post-module #post-module-neu.enable-create-article .post-message, #slick-sharing-cont.post-home.share-box #post-module #post-module-neu.enable-slideshare .post-message {
    padding-right: 30px;
    width: 491px;
}

.mentions-container {
    background: none repeat scroll 0 0 #FDFDFD;
    border: 1px solid #C1C1C1;
    border-radius: 2px;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.1) inset;
    color: #333333;
    font-size: 13px;
    line-height: 17px;
    margin: 0;
    padding: 0;
    position: relative;
    vertical-align: middle;
}

.post-home.share-box #post-module-neu {
    margin: 15px 0;
}

.post {
    margin: 0;
    padding: 0;
}

.post-home.share-box .post-module-in {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    padding: 0;
}
.post-home.share-box .post-module {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    float: left;
    padding: 0;
    position: static;
    width: 528px;
}

#slick-sharing-cont.post-home.share-box #post-module {
    width: 533px;
}
.post-home.share-box {
    background: radial-gradient(ellipse closest-side at 50% 50% , #FFFFFF, #F3F3F3 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
    margin-bottom: 0;
    padding: 15px;
}

#slick-sharing-cont.post-home.share-box {
    padding: 0 15px 0 0;
}
#feed-nhome .rt-filter-cont {
    z-index: 2;
}


.feed, .feed.feed-redesign {
    background: none repeat scroll 0 0 #FFFFFF;
    box-shadow: 0 0 1px #999999;
    margin-bottom: 10px;
    position: relative;
}
#feed-nhome .filter-cont {
    border: 0 none;
    margin-bottom: 0;
}

.grid-f #content {
    float: left;
    width: 646px;
}
.post-home.share-box .member-photo {
    border: 1px solid #DEDEDE;
    float: left;
    margin-right: 15px;
    padding: 0;
    position: static;
}
#slick-sharing-cont.post-home.share-box .member-photo {
    border-width: 0 1px 0 0;
    height: 65px;
    margin-left: 0;
    margin-top: 15px;
    width: 65px;
}

.submit select {
    float: left;
    height: 25px;
    margin: 0 0 0 -10px;
    padding: 4px;
    width: 450px;
}
.submit #share-submit{
    float: right;
}


.post-home.share-box #post-module-neu.upload_preview .post-actions .submit, .post-home.share-box #post-module-neu.active_message .post-actions .submit {
    display: table-cell;
}
.post-home.share-box #post-module-neu.upload_preview .post-actions .settings, .post-home.share-box #post-module-neu.upload_preview .post-actions .submit, .post-home.share-box #post-module-neu.active_message .post-actions .settings, .post-home.share-box #post-module-neu.active_message .post-actions .submit {
}
.post-home.share-box .post-actions .submit {
    padding-left: 10px;
    vertical-align: middle;
    width: 520px;
}
.post .post-actions {
    color: #666666;
    font-size: 12px;
    margin: 3px 0 0;
    position: relative;
}
.post-home.share-box .post-actions {
    margin-bottom: 15px;
    margin-top: 10px;
    width: 100%;
}
.post-home.share-box #post-module-neu.upload_preview .post-actions, .post-home.share-box #post-module-neu.active_message .post-actions {
    display: table;
}
.post .post-actions:after {
    clear: both;
    content: ".";
    display: block;
    height: 0;
    visibility: hidden;
}
.post .post-message {
    font-size: 12px;
    height: 16px;
    padding: 4px 2px;
    width: 98.5%;
}
.mentions-container .mentions-input {
    background: url("data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7") repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    border-radius: 2px;
    box-shadow: none;
    color: #333333;
    font-size: 13px;
    line-height: 17px;
    margin: 0;
    outline: medium none;
    overflow: hidden;
    padding: 9px 10px;
    position: relative;
    vertical-align: middle;
    width: 480px;
}
.post-home.share-box .post-message {
    resize: vertical;
    width: 512px;
}
.post-home.share-box .post-link, .post-home.share-box .post-message {
    width: 506px;
}
.post-home.share-box .post-message {
    background: none repeat scroll 0 0 #FDFDFD;
    border: 1px solid #C1C1C1;
    border-radius: 2px;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.1) inset;
    color: #333333;
    font-size: 13px;
    line-height: 17px;
    overflow: hidden;
    padding: 9px 10px;
    position: relative;
    transition-duration: 0.2s;
    transition-property: height, top;
    transition-timing-function: ease-in-out;
    vertical-align: middle;
}
#post-module-neu .mentions-container .post-message, #post-module-neu .mentions-container .post-message.mentions-input, #post-module-neu.active_message .mentions-container .post-message, #post-module-neu.active_message .mentions-container .post-message.mentions-input, #post-module-neu.inactive .mentions-container .post-message, #post-module-neu.inactive .mentions-container .post-message.mentions-input {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    box-shadow: none;
    margin-top: 0 !important;
    overflow: hidden;
    padding-left: 10px;
    padding-right: 40px;
    top: 0 !important;
    width: 491px;
}
#post-module-neu .mentions-container .post-message, #post-module-neu .mentions-container .post-message.mentions-input, #post-module-neu.active_message .mentions-container .post-message, #post-module-neu.active_message .mentions-container .post-message.mentions-input, #post-module-neu.inactive .mentions-container .post-message, #post-module-neu.inactive .mentions-container .post-message.mentions-input {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    box-shadow: none;
    margin-top: 0 !important;
    overflow: hidden;
    padding-left: 10px;
    padding-right: 40px;
    top: 0 !important;
    width: 491px;
}.post-home.share-box #post-module-neu.enable-slideshare .post-message {
    resize: none;
}
#post-module-neu.active_message .mentions-container .post-message, #post-module-neu.active_message .mentions-container .post-message.mentions-input {
    margin-bottom: -3px;
}
#post-module-neu .mentions-container .post-message, #post-module-neu .mentions-container .post-message.mentions-input, #post-module-neu.active_message .mentions-container .post-message, #post-module-neu.active_message .mentions-container .post-message.mentions-input, #post-module-neu.inactive .mentions-container .post-message, #post-module-neu.inactive .mentions-container .post-message.mentions-input {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    box-shadow: none;
    margin-top: 0 !important;
    overflow: hidden;
    padding-left: 10px;
    padding-right: 40px;
    top: 0 !important;
    width: 491px;
}
.post-home.share-box #post-module-neu.upload_preview .post-message, .post-home.share-box #post-module-neu.active_message .post-message {
    height: 45px;
    top: 0;
}
#post-module-neu .mentions-container .post-message, #post-module-neu .mentions-container .post-message.mentions-input, #post-module-neu.active_message .mentions-container .post-message, #post-module-neu.active_message .mentions-container .post-message.mentions-input, #post-module-neu.inactive .mentions-container .post-message, #post-module-neu.inactive .mentions-container .post-message.mentions-input {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border: medium none;
    box-shadow: none;
    margin-top: 0 !important;
    overflow: hidden;
    padding-left: 10px;
    padding-right: 40px;
    top: 0 !important;
    width: 491px;
}
#post-module-neu.active_message .mentions-container .post-message, #post-module-neu.active_message .mentions-container .post-message.mentions-input {
    margin-bottom: -3px;
}
#slick-sharing-cont.post-home.share-box #post-module #post-module-neu.active_message .post-message {
    height: 45px;
}
#slick-sharing-cont.post-home.share-box #post-module #post-module-neu.enable-create-article .post-message, #slick-sharing-cont.post-home.share-box #post-module #post-module-neu.enable-slideshare .post-message {
    padding-right: 30px;
    width: 491px;
}

.mentions-container {
    background: none repeat scroll 0 0 #FDFDFD;
    border: 1px solid #C1C1C1;
    border-radius: 2px;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.1) inset;
    color: #333333;
    font-size: 13px;
    line-height: 17px;
    margin: 0;
    padding: 0;
    position: relative;
    vertical-align: middle;
}

.post-home.share-box #post-module-neu {
    margin: 15px 0;
}

.post {
    margin: 0;
    padding: 0;
}

.post-home.share-box .post-module-in {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    padding: 0;
}
.post-home.share-box .post-module {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    float: left;
    padding: 0;
    position: static;
    width: 528px;
}

#slick-sharing-cont.post-home.share-box #post-module {
    width: 533px;
}
.post-home.share-box {
    background: radial-gradient(ellipse closest-side at 50% 50% , #FFFFFF, #F3F3F3 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);
    margin-bottom: 0;
    padding: 15px;
}

#slick-sharing-cont.post-home.share-box {
    padding: 0 15px 0 0;
}
#feed-nhome .rt-filter-cont {
    z-index: 2;
}


.feed, .feed.feed-redesign {
    background: none repeat scroll 0 0 #FFFFFF;
    box-shadow: 0 0 1px #999999;
    margin-bottom: 10px;
    position: relative;
}
#feed-nhome .filter-cont {
    border: 0 none;
    margin-bottom: 0;
}

.grid-f #content {
    float: left;
    width: 646px;
}
.post-home.share-box .member-photo {
    border: 1px solid #DEDEDE;
    float: left;
    margin-right: 15px;
    padding: 0;
    position: static;
}
#slick-sharing-cont.post-home.share-box .member-photo {
    border-width: 0 1px 0 0;
    height: 65px;
    margin-left: 0;
    margin-top: 15px;
    width: 65px;
}

.submit select {
    float: left;
    height: 25px;
    margin: 0 0 0 -10px;
    padding: 4px;
    width: 450px;
}
.submit #share-submit{
    float: right;
}

#feed-content {
    overflow: hidden;
    width: 100%;
}


.feed-redesign #my-feed-post {
    margin: 0;
}
.feed .feed-item {
    background: url("images/bg_grey_dotted_h-line_3x1.png") repeat-x scroll 0 0 rgba(0, 0, 0, 0);
    color: #000000;
    padding: 10px 3px;
}
.feed .feed-item, .feed .feed-body {
    overflow: hidden;
}
.feed.feed-redesign .feed-item {
    background: none repeat scroll 0 0 #FFFFFF;
    border-top: 1px solid #EAEAEA;
    padding: 10px 0;
}
.feed-redesign #my-feed-post .feed-item {
    border-bottom: 1px solid #EAEAEA;
}
.nus-feed-container .feed-item, .feed-redesign #my-feed-post.katify .feed-item {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #EEEEEE -moz-use-text-color -moz-use-text-color;
    border-image: none;
    border-right: 0 none;
    border-style: solid none none;
    border-width: 1px 0 0;
    color: #333333;
    font-size: 13px;
    height: auto;
    line-height: 17px;
    margin: 0 0 20px;
    min-height: 68px;
    padding: 20px 0 0;
    position: static;
}
.nus-feed-container .feed-item, .feed-redesign #my-feed-post.katify .feed-item {
    font-family: sans-serif;
}

.os-win .nus-feed-container .feed-item, .os-win .feed-redesign #my-feed-post.katify .feed-item {
    font-family: Arial,sans-serif;
}

.nus-feed-container .feed-item a, .feed-redesign #my-feed-post.katify .feed-item a {
    color: #0077B5;
    font-size: 13px;
    padding-top: 0;
}
.feed .feed-photo {
    background: none repeat scroll 0 0 #FFFFFF;
    float: left;
    margin: 2px 10px 0 7px;
}
.feed.feed-redesign .feed-photo {
    margin: 2px 10px 0 0;
}
.feed.feed-redesign .photo {
    border-color: #EAEAEA;
}
.nus-feed-container .feed-item .feed-photo.photo, .feed-redesign #my-feed-post.katify .feed-item .feed-photo.photo {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #EEEEEE #EEEEEE #EEEEEE -moz-use-text-color;
    border-image: none;
    border-style: solid solid solid none;
    border-width: 1px 1px 1px 0;
    height: 65px;
    margin-right: 15px;
    padding: 0;
    width: 65px;
}

.feed .feed-item, .feed .feed-body {
    overflow: hidden;
}
.feed .feed-content {
    font-size: 13px;
    margin-right: 20px;
    margin-top: 4px;
}

.nus-feed-container .feed-item .feed-content, .feed-redesign #my-feed-post.katify .feed-item .feed-content {
    line-height: 17px;
    margin-right: 100px;
    margin-top: 0;
    padding: 0;
}

.nus-feed-container .feed-item .annotated-body, .feed-redesign #my-feed-post.katify .feed-item .annotated-body {
    display: inline;
}

.nus-feed-container .feed-item a, .feed-redesign #my-feed-post.katify .feed-item a {
    color: #0077B5;
    font-size: 13px;
    padding-top: 0;
}
.feed .share-object, .feed .member-position {
    margin-top: 10px;
    overflow: hidden;
    width: auto;
}
.nus-feed-container .feed-item .share-object, .feed-redesign #my-feed-post.katify .feed-item .share-object {
    margin-top: 10px;
}

.nus-feed-container .feed-item .feed-content .share-object, .feed-redesign #my-feed-post.katify .feed-item .feed-content .share-object {
    border-left: 0 none;
}
.nus-feed-container .feed-item .share-object, .feed-redesign #my-feed-post.katify .feed-item .share-object {
    margin-bottom: 0;
    margin-top: 8px;
}

.nus-feed-container .feed-item .share-object .properties, .feed-redesign #my-feed-post.katify .feed-item .share-object .properties {
    overflow: hidden;
}
.feed .share-object .share-desc {
    margin-top: 4px;
}
.nus-feed-container .feed-item .share-object .share-desc, .feed-redesign #my-feed-post.katify .feed-item .share-object .share-desc {
    color: #666666;
    font-size: 13px;
    font-weight: normal;
    line-height: 17px;
}
.nus-feed-container .feed-item.linkedin-profile-update .share-desc, .feed-redesign #my-feed-post.katify .feed-item.linkedin-profile-update .share-desc {
    display: inline;
}

.os-win .nus-feed-container .feed-item .share-object .share-desc, .os-win .feed-redesign #my-feed-post.katify .feed-item .share-object .share-desc {
    font-family: Arial,sans-serif;
}

.nus-feed-container .feed-item .share-object .properties .share-title, .nus-feed-container .feed-item .share-object .properties .title, .nus-feed-container .feed-item .share-object .properties .property-label, .feed-redesign #my-feed-post.katify .feed-item .share-object .properties .share-title, .feed-redesign #my-feed-post.katify .feed-item .share-object .properties .title, .feed-redesign #my-feed-post.katify .feed-item .share-object .properties .property-label {
    color: #333333;
    font-size: 13px;
    font-weight: normal;
    line-height: 17px;
}
.nus-feed-container .feed-item a, .feed-redesign #my-feed-post.katify .feed-item a {
    color: #0077B5;
    font-size: 13px;
    padding-top: 0;
}
.nus-feed-container .feed-item .share-object .properties a, .feed-redesign #my-feed-post.katify .feed-item .share-object .properties a {
    color: #0077B5;
    font-weight: normal;
    text-decoration: none;
}

.nus-feed-container .feed-item .linkedin-profile-snapshot .properties .share-desc a:link, .feed-redesign #my-feed-post.katify .feed-item .linkedin-profile-snapshot .properties .share-desc a:link {
    color: #666666;
}
.feed .feed-item-meta {
    clear: both;
    margin-top: 6px;
    overflow: hidden;
}

.nus-feed-container .feed-item .feed-item-meta, .feed-redesign #my-feed-post.katify .feed-item .feed-item-meta {
    border: 0 none;
    clear: left;
    margin: 7px 0 0;
    padding: 0;
}

.nus-feed-container .feed-item .feed-item-meta .feed-actions li, .feed-redesign #my-feed-post.katify .feed-item .feed-item-meta .feed-actions li {
    background: url("images/icon_bullet_grey2_4x4.png") no-repeat scroll 100% 6px rgba(0, 0, 0, 0);
    font-size: 13px;
    margin: 0 10px 0 0;
    padding: 0 14px 0 0;
    float: left;
}
.feed .show-like .like {
    display: inline;
}
.feed.feed-redesign .feed-actions a, .feed.feed-redesign .feed-item:hover .chron .feed-actions a {
    color: #888888;
}
.nus-feed-container .feed-item a, .feed-redesign #my-feed-post.katify .feed-item a {
    color: #0077B5;
    font-size: 13px;
    padding-top: 0;
}
.nus-feed-container .feed-item .feed-item-meta .feed-actions li a, .nus-feed-container .feed-item .feed-item-meta .feed-actions li .nus-timestamp, .feed-redesign #my-feed-post.katify .feed-item .feed-item-meta .feed-actions li a, .feed-redesign #my-feed-post.katify .feed-item .feed-item-meta .feed-actions li .nus-timestamp {
    color: #8B8B8B;
    font-size: 13px;
}

.nus-feed-container .feed-item .feed-item-meta .feed-actions li a, .nus-feed-container .feed-item .feed-item-meta .feed-actions li .nus-timestamp, .feed-redesign #my-feed-post.katify .feed-item .feed-item-meta .feed-actions li a, .feed-redesign #my-feed-post.katify .feed-item .feed-item-meta .feed-actions li .nus-timestamp {
    color: #8B8B8B;
    font-size: 13px;
}
.feed .nus-timestamp {
    color: #666666;
    float: left;
    font-size: 11px;
    white-space: nowrap;
}
.nus-feed-container .feed-item .feed-item-meta .nus-timestamp, .feed-redesign #my-feed-post.katify .feed-item .feed-item-meta .nus-timestamp {
    color: #8B8B8B;
    font-size: 13px;
    margin-left: 0;
    padding: 0 14px 0 0;
}
.feed.feed-redesign .comments {
    background-color: #EBF5FB;
    font-size: 12px;
    line-height: 1.4;
    padding: 5px;
    text-shadow: 0 1px 0 #FFFFFF;
}
.nus-feed-container .feed-item .comments, .feed-redesign #my-feed-post.katify .feed-item .comments {
    background: none repeat scroll 0 0 #F4F4F4;
    border-radius: 2px;
    margin-left: 0;
    margin-right: 20px;
    padding: 0;
}
.feed .comments li {
    background: url("/scds/common/u/img/bg/bg_grey_dotted_h-line_3x1.png") repeat-x scroll 0 100% rgba(0, 0, 0, 0);
    margin: 0 0 8px;
    min-height: 0;
    overflow: hidden;
    padding: 0 3px 8px;
    position: relative;
}
.feed.feed-redesign .comments li {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    border-bottom: 1px solid #D6EAF4;
    border-top: 1px solid #FFFFFF;
    margin: 0;
    padding: 5px 0 7px;
}
.nus-feed-container .feed-item .comments li, .feed-redesign #my-feed-post.katify .feed-item .comments li {
    border-bottom: 0 none;
    border-top: 0 none;
    padding-left: 30px;
}

.nus-feed-container .feed-item .comments li.first, .feed-redesign #my-feed-post.katify .feed-item .comments li.first {
    border-top: 1px solid #FFFFFF;
    padding-top: 10px;
}

.nus-feed-container .feed-item .comments li .bubble, .feed-redesign #my-feed-post.katify .feed-item .comments li .bubble {
    background: url("images/sprite_pulse_social_v1.png") no-repeat scroll -3px -215px rgba(0, 0, 0, 0);
    height: 25px;
    left: 0;
    margin-left: 7px;
    margin-right: 0;
    position: absolute;
    width: 23px;
}

.nus-feed-container .feed-item a, .feed-redesign #my-feed-post.katify .feed-item a {
    color: #0077B5;
    font-size: 13px;
    padding-top: 0;
}

.nus-feed-container .feed-item .comments .feed-photo.photo, .feed-redesign #my-feed-post.katify .feed-item .comments .feed-photo.photo {
    border: 0 none;
    height: 30px;
    margin-left: 0;
    margin-right: 7px;
    width: auto;
}
.feed.feed-redesign .comments p {
    overflow: hidden;
}
.feed .comments ul p {
    font-size: 13px;
    margin: 0;
    padding-right: 20px;
    position: relative;
    top: -3px;
}

.nus-feed-container .feed-item a, .feed-redesign #my-feed-post.katify .feed-item a {
    color: #0077B5;
    font-size: 13px;
    padding-top: 0;
}

blockquote:before, blockquote:after, q:before, q:after {
    content: "";
}
blockquote:before, blockquote:after, q:before, q:after {
    content: "";
}
.nus-feed-container q, .feed-redesign #my-feed-post.katify q {
    font-size: 13px;
}
.feed .comments q {
    font-size: 13px;
}
.feed .nus-timestamp {
    color: #666666;
    float: left;
    font-size: 11px;
    white-space: nowrap;
}
.feed.feed-redesign .comments .nus-timestamp {
    display: block;
}
.feed .comments .nus-timestamp {
    float: none;
    margin: 0;
}
.feed.feed-redesign .nus-timestamp {
    color: #888888;
}

.feed .comments .form {
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0);
    padding: 0 3px;
}
.feed.feed-redesign .comments .form {
    border-top: 1px solid #FFFFFF;
    padding-top: 5px;
}

.nus-feed-container .feed-item .comments .form, .feed-redesign #my-feed-post.katify .feed-item .comments .form {
    border-top: 0 none;
    overflow: hidden;
    padding: 5px 9px 7px 10px;
}

.mentions-typeahead-container {
    position: absolute;
    z-index: 100;
}
.mentions-typeahead-container .typeahead-results-container {
    left: 5px !important;
    min-width: 380px;
    top: 2px;
    width: 380px;
}


.home-member-new form .actions {
    font-size: 100%;
    margin: 0;
}
.feed .comments .actions {
    font-size: 12px;
    padding-left: 0;
    padding-top: 3px;
}

.nus-feed-container .feed-item .comments .actions, .feed-redesign #my-feed-post.katify .feed-item .comments .actions {
    display: block;
    padding-top: 6px;
}
.nus-feed-container .feed-item .comments .btn-primary.lu-state-disabled, .nus-feed-container .feed-item .comments .btn-primary.disabled, .nus-feed-container .feed-item .comments .btn-primary[disabled], .feed-redesign #my-feed-post.katify .feed-item .comments .btn-primary.lu-state-disabled, .feed-redesign #my-feed-post.katify .feed-item .comments .btn-primary.disabled, .feed-redesign #my-feed-post.katify .feed-item .comments .btn-primary[disabled] {
    background-color: #2672AE;
    box-shadow: none;
    cursor: default;
    opacity: 0.6;
}
.nus-feed-container .feed-item .comments .actions input, .feed-redesign #my-feed-post.katify .feed-item .comments .actions input {
    float: right;
}
.feed-redesign #my-feed-post, .feed-actions{
    margin:  0 !important;
    line-height: inherit !important;
}
.feed-actions{
    float: left;
}
.home-member-new form .actions input{
    width: 80px;
    height:  30px;
}
.home-member-new form .actions{
    float: right;
    margin-top:  10px;
}












































</style>









</head>

<body id="pagekey-college-alumni" class="en member v2  chrome-v5 chrome-v5-responsive background-v4 sticky-bg js  js">
<div id="body" class="globalnav-showStop">
	<div class="wrapper hp-nus-wrapper">
		<div id="alumni" class="active">
			
							<div class="header-title">
								<h2 class="title"><?php echo $userSchool; ?></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="container-ptc-control-bar">
				<div class="typeahead-results-container alumni-typeahead-results-container facet-typeahead-results-container yui-ac-container"> </div>
				<div class="cmpt-ptc-control-bar">
					<div class="date-wrapper attended">
						<div class="select-wrapper">
							<div class="action-menu styled-dropdown year">
								<span class="label" style="float:left">
									<span class="text"> Attended </span>
									<span class="drop-down-arrow"></span>
								</span>
								<select class="date-type">
									<option selected="" value="attended">Attended</option>
									<option value="graduated">Graduated</option>
								</select>
							</div>
						</div>
						<span class="date-dropdown attended">
							<select onChange="ajax_post();" class="start-date date-input" name="startDate" id="startDate">
								<option selected="" value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>									
							</select>
							<span class="date-separator">to</span>
							<select onChange="ajax_post();" class="end-date date-input" name="endDate" id="endDate">
								<option value="2020">2020</option>
								<option value="2019">2019</option>
								<option value="2018">2018</option>
								<option selected="" value="2017">2017</option>
								<option value="2016">2016</option>
								<option value="2015">2015</option>
								<option value="2014">2014</option>
								<option value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
							</select>
						</span>
						<span class="no-date-wrapper">
							<input id="show-with-no-date" type="checkbox" name="show-with-no-date" />
							<label for="show-with-no-date">Include people with no dates</label>
						</span>
					</div>
					<div class="more-schools-wrapper">
						<div class="more-schools">
							<a class="btn-quaternary" data-li-action="show-more-schools" href="#"> 
								Change school
								<span class="drop-down-arrow"></span>
							</a>
						</div>
					</div>					
				</div>
			</div>
			<div id="container-ptc-facet-bar">
				<div class="cmpt-ptc-facet-bar cf">
					<div class="container-cmpt-bucket-bar cf"></div>
					<div class="top-shadow"></div>
					<div class="carousel carousel-first">
						<button class="carousel-button carousel-previous" title="View previous interactive graphs">
							<span class="alumni-icon carousel-previous"></span>
						</button>
						<div class="carousel-viewport">
							<ul class="facets" style="left: 0px;">
								<li class="cmpt-ptc-facet facet has-typeahead first">
									<h2>Where they live</h2>
									<ul>
										<li class="bucket pinned active not-selected" title="Pakistan">
											<a class="facet-item">
												<span class="count"><?php echo $pCount?></span>
												<label>Pakistan</label>
											</a>
											<div class="bar-graph" style="width: <?php echo $pCountPercent?>%;"></div>
											<div class="bar-bg"></div>
										</li>
										<li class="bucket pinned active not-selected" title="Pakistan">
											<a class="facet-item">
												<span class="count"><?php echo $iCount?></span>
												<label>India</label>
											</a>
											<div class="bar-graph" style="width: <?php echo $iCountPercent?>%;"></div>
											<div class="bar-bg"></div>
										</li>
										<li class="bucket pinned active not-selected" title="Pakistan">
											<a class="facet-item">
												<span class="count"><?php echo $fCount?></span>
												<label>France</label>
											</a>
											<div class="bar-graph" style="width: <?php echo $fCountPercent?>%;"></div>
											<div class="bar-bg"></div>
										</li>
									</ul>
									<span class="collapse-facet-wrapper">
										<button class="search-facet" type="button"></button>
									</span>
								</li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="container-ptc-guide-module"></div>
			<div id="container-ptc-status-bar">
				<div class="cmpt-ptc-status-bar cf">
					<div class="call-out-arrow"></div>
					<div class="results-wrapper">
						<span class="num-results-label"><?php echo $total_count ?> students &amp; alumni found</span>
						<span class="hide-connections-wrapper">
							<input id="hide-my-connections" type="checkbox" name="hide-my-connections" />
							<label for="hide-my-connections">Hide my connections</label>
						</span>
					</div>
					<div class="search-wrapper">
						<form id="school-form" name="school-form" action="#">
							<div class="search-box-wrapper">
								<input id="pt-keywords" type="text" name="pt-keywords" placeholder="Search profiles" />
								<button class="search-box-submit active" type="submit">Search profiles</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="container-ptc-people-results">
				<div class="cmpt-ptc-people-results cf">
					<div class="content active">
						<ul class="people-cards">
							<?php if($list!=NULL){foreach ($list as $res){ ?>
							<form action="<?php echo base_url();?>index.php/search/search/redirecttoconfirm" method="post">
							<input type="hidden" name="friendid" value=<?php echo $res->userid; ?> />
							<li class="person">
								<a class="profile-link">
									<img alt="<?php echo $res->fname ?>" src="<?php echo 'uploads/30_'.$res->imageUrl.'.jpg' ?>" />
								</a>
								<div class="details">
									<h3 class="full-name">
										<div class="distance">
											<a class="profile-link" href="#"><?php echo $res->fname.' '.$res->lname ?></a>
										</div>
									</h3>
									<p class="headline">Student at <?php echo $uni_name ?></p>
									<ul class="specifics">
										<li class="first"><?php echo $res->Country ?></li>
									</ul>
								</div>
								<div class="ft">
									<span class="connect-logo"></span>
									<button class="primary-action-button" title="Invite <?php echo $res->fname ?> to connect" type="submit" value="<?php echo $res->userid ?>" name="addignore">Add Connection</button>
									<span class="divider"> </span>
								</div>
							</li>
							<li class="person">
								<a class="profile-link">
									<img alt="<?php echo $res->fname ?>" src="<?php echo 'uploads/30_'.$res->imageUrl.'.jpg' ?>" />
								</a>
								<div class="details">
									<h3 class="full-name">
										<div class="distance">
											<a class="profile-link" href="#"><?php echo $res->fname.' '.$res->lname ?></a>
										</div>
									</h3>
									<p class="headline">Student at <?php echo $uni_name ?></p>
									<ul class="specifics">
										<li class="first"><?php echo $res->Country ?></li>
									</ul>
								</div>
								<div class="ft">
									<span class="connect-logo"></span>
									<button class="primary-action-button" title="Invite <?php echo $res->fname ?> to connect" type="submit" value="<?php echo $res->userid ?>" name="addignore">Add Connection</button>
									<span class="divider"> </span>
								</div>
							</li>
						</form>
						<?php }} ?>
						</ul>
					</div>
				</div>
			</div>
			<div id="find-group">
				<span class="alumni-logo"></span>
				<span class="get-reconnected">JOIN YOUR ALUMNI GROUP</span>
				<span class="content">Share ideas, find opportunities and get back in touch.</span>
				<a class="btn-ternary" id="find-group-link" href="">Find Group »</a>	
			</div>
		</div>
	</div>
</div>
	<div class="footer" style="border-top: 0 transparent solid;">
		<ul class="footer-links">
			<li class="bold"><a href="#"><strong>Help Center</strong></a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Press</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Careers</a></li>
			<li><a href="#">Advertising</a></li>
			<li><a href="#">Talent Solutions</a></li>
			<li><a href="#">Tools</a></li>
			<li><a href="#">Mobile</a></li>
			<li><a href="#">Developers</a></li>
			<li><a href="#">Publishers</a></li>
			<li><a href="#">Language</a></li>
		</ul>
		<div class="clear"></div>
		<ul class="footer-links">
			<li><a href="#"><strong>Upgrade Your Account</strong></a></li>
		</ul>
		<div class="clear"></div>
		<ul class="footer-links">
			<li><img src="<?php echo base_url();?>/assets/css/images/logo-footer.png" alt="Footer Logo" /></li>
			<li><a href="#">User Agreement </a></li>
			<li><a href="#">Privacy Policy </a></li>
			<li><a href="#">Community Guidelines </a></li>
			<li><a href="#">Cookie Policy </a></li>
			<li><a href="#">Copyright Policy </a></li>
		</ul>
	</div> <!-- END: FOOTER -->
	
	<script  type="text/javascript">
	function ajax_post(){
			document.write("helloworld");
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "<?php base_url()?>/index.php/alumni/findAlumni";
    var thumbnailbox = document.getElementById("container-ptc-people-results");
    var fn = document.getElementById("startDate").value;
    var ln = document.getElementById("endDate").value;
    var vars = "startDate="+fn+"&endDate="+ln;
    hr.open("POST", url, true);
    // Set content type header information for sending url encoded variables in the request
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // Access the onreadystatechange event for the XMLHttpRequest object
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var return_data = hr.responseText;
		    thumbnailbox.innerHTML = '';
			for(var o in d){

                if(d[o].src){
                    thumbnailbox.innerHTML += "<form action='<?php echo base_url();?>index.php/search/search/redirecttoconfirm' method='post'>
							<input type='hidden' name='friendid' value='"d->userid"' />
							<li class='person'>
								<a class='profile-link'>
									<img alt='"d->fname" + ' ' + "d->lname" src='uploads/30_'.'"d->imageUrl"'.'.jpg' />
								</a>
								<div class='details'>
									<h3 class='full-name'>
										<div class='distance'>
											<a class='profile-link' href="#">"d->fname"</a>
										</div>
									</h3>
									<p class='headline'>Student at $uni_name</p>
									<ul class='specifics'>
										<li class='first'>"d->Country"</li>
									</ul>
								</div>
								<div class='ft'>
									<span class='connect-logo'></span>
									<button class='primary-action-button' title='Invite "d->fname" to connect' type='submit' value='"d->userid" name='addignore'>Add Connection</button>
									<span class='divider'> </span>
								</div>
							</li>
						</form>";
                }

	    }
    }
    // Send the data to PHP now... and wait for response to update the status div
    hr.send(vars); // Actually execute the request
    
}



}

  function ajaxNotifications(){

    var hr = new XMLHttpRequest();

    hr.open("POST", "<?php echo base_url()?>/index.php/notifications/notifications/getfriendListAJAX", true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var data = JSON.parse(hr.responseText);
		//    alert(data);
			document.getElementById("notificationUpdate").innerHTML= "";
			for(var obj in data){

				document.getElementById("notificationUpdate").innerHTML+="<form action='<?php echo base_url();?>index.php/connections/connection/acceptfriend' method='post' name='process' id='add-friend'><li class='update single'> <span class='timestamp'></span><div class='photo'><img width='40' height='40' src='<?php echo base_url();?>uploads/30_"+data[obj].imageUrl+".jpg"+"'></div><div class='action'><span id='showText' class='name'>"+data[obj].fullname+"</span><input name='friendid' type='hidden' value='"+data[obj].userid+"'><button type='submit' value='Connect' name='addignore' class='btn-primary' style='margin: 5px 5px 5px 5px; text-align: center; width: 65px;'>Connect</button><button type='submit' value='Ignore' name='addignore' class='btn-secondary' style='margin: 5px 5px 5px 5px; text-align: center; width: 65px;'>Ignore</button></div></li></form>";


				//results.innerHTML += "Property A: "+data[obj].propertyA+"<hr />";
				
			}
	    }
    }
    hr.send();
    document.getElementById("notificationUpdate").innerHTML = "<li class='update single'><p>No pending requests..</p></li>";

}


</script>






</body>

</html>
