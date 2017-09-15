<?php
	define('BASEDIR', $_SERVER['DOCUMENT_ROOT']);

	require $_SERVER['DOCUMENT_ROOT']."/function/common.functions.php";
	require $_SERVER['DOCUMENT_ROOT']."/config/vars.config.php";
	require $_SERVER['DOCUMENT_ROOT']."/class/Pages.class.php";
	require $_SERVER['DOCUMENT_ROOT']."/config/db.config.php";

	$pages = new Pages($PDO);
	header("Content-type: text/css; charset: UTF-8");
	$styling = $pages->grabAllStyling();

	$WEB_HEADER_TEXT_COLOUR 		= $styling['WEB_HEADER_TEXT_COLOUR']['value'];
	$WEB_HEADER_LIST_ACTIVE_COLOUR 	= $styling['WEB_HEADER_LIST_ACTIVE_COLOUR']['value'];
	$WEB_HEADER_BACKGROUND_COLOUR 	= $styling['WEB_HEADER_BACKGROUND_COLOUR']['value'];
	$WEB_HEADER_GRADIENT 	= $styling['WEB_HEADER_GRADIENT']['value'];

?>

@media print {
	.navbar {
		display: none;
	}
}
.navbar {
	position: relative;
	margin-bottom: 20px;
	border: 1px solid transparent;
}
.navbar-cart{
	margin-top: 10px;
	background-color: rgba(0, 0, 0, 0.24);
}
.navbar-cart .navbar-toggle {
	position: relative;
	float: left !important;
	margin-right: 6px;
	padding: 9px 10px;
	margin-top: 8px;
	margin-bottom: 8px;
	background-color: transparent;
	background-image: none;
	border: 1px solid transparent;
	border-radius: 0px;
}
.search_container{
	display:block;
	margin-top:20px;
	margin:20px 0px auto !important;
}


@media (max-width: 991px ){
	.navbar-header .navbar-toggle {
		padding: 0 10px;
		line-height: 41px;
	}
	.body_scroll_cont .navbar-header .navbar-toggle {
		padding: 0 10px;
		line-height: 45px;
		margin: 0;
		border: none;
	}
	.body_scroll_cont .navbar-header .navbar-toggle span{
		font-size: 16px;
	}
	.navbar-header .navbar-toggle .glyphicon{
		top: 4px;
		font-size: 20px;
		margin-top:-3px;
	}
	.navbar-header .navbar-toggle .glyphicon-question-sign{
		margin-right: 5px;
	}
	.navbar-header .navbar-toggle .btn-circle{
		position: absolute;
		top: 1px;
		right: -2px;
	}
}

.basket-dropdown{
	padding: 0;
	min-width: 400px;
	right:0px;
	overflow:auto;
}
.open > .dropdown-menu{
	right:0px;
}

.currency-dropdown {
    position: relative;
    top: 0px;
}
.basket-dropdown .basket_items{
	padding:15px 15px 0 15px;
	overflow: scroll;
	margin-bottom: 15px;
	max-height: 290px;
}

.basket-dropdown .basket_items:after{
	content: '';
    position: relative;
    display: block;
    height: 60px;
}

.basket-dropdown .checkout_button{
	position: absolute;
	bottom: 0;
	right: 0;
	left: 0;
	padding: 5px;
	background-color: white;
}

.mobile_checkout{
	position: absolute;
	bottom: 0;
	right: 0;
	left: 0;
	padding: 5px;
	background-color: #272727;
	position: relative;
	display: block;
}

.breadcrumb_head{
	white-space: nowrap;
	padding-bottom:5px;
}

.breadcrumb-title{
	font-size:1.8em;
	display:block;
	padding-bottom:0px;
}


.breadcrumb_head .overflow_cont a{
	display: inline-block;
	vertical-align: top;
	line-height: 52px;
	float: none;
	width: auto;
	max-width: 100%;
}

@media (max-width: 768px){
	.breadcrumb_head .overflow_cont a.navbar-brand2{
		padding-left: 0;
		min-height: 30px;

	}
}
@media (max-width: 767px){
	.breadcrumb_head{
		text-align:center;
		margin-top:11px;
	}
}


#search_header_lg{
	margin-top: 7px;
	height: 30px;
	border: 1px solid #ccc;
	padding-left: 10px;
	font-size: 11px;
	color:#4b4b4b;
	width:250px;
}
@media(max-width:768px){
	#search_header_lg{
		width:100%;
	}
}
.search_header_lg .btn{
	padding:0px;
	vertical-align:bottom;
}

.error #search_header_lg{
	border-color: #F1504C;
	box-shadow: none !important;
}

@media (max-width: 768px){
	#search_header_lg{
	    font-size: 16px;
	}
}

.search_header_lg .btn-default{
    border-color:transparent;

}
.search_header_lg .btn-default:hover{
	background-color:transparent;
}
.search_container .header_search{
	position: absolute;
	bottom: 0px;
	left: 50px;
}
button.search:active,button.search:focus{
	outline-color:transparent;
}
@media(max-width:999px){
	.search_container .header_search{
		position:relative;
		top:0px;
		bottom:0px;
	}
}

.currency-text{
	font-size:12px;
}
.video-icon,.glyphicon-shopping-cart{
	font-size:20px;
}
.foundicon-video{
	color:#4b4b4b;
	font-size:20px;

}
.my-media{
	background-image:url('/assets/images/icon-my-media.svg');
	height:33px;
	width:40px;
	display:block;
}
.my-cart-1{
	background-image:url('/assets/images/icon-cart.svg');
	height:33px;
	width:40px;
	display:block;
}
.search-icon{
	background-image:url('/assets/images/icon-search.svg');
	height:37px;
	width:40px;
	display:block;
}
.my-menu-toggle{
	background-image:url('/assets/images/icon-menu.svg');
	height:30px;
	width:40px;
	display:block;
}
.foundicon-cart{
	display:block;
	position: relative;
	top: 2px;
}



.cart-icon .foundicon-cart:before,.glyphicon-search {
	display: block;
   -webkit-transform: matrix(-1, 0, 0, 1, 0, 0);
   -moz-transform: matrix(-1, 0, 0, 1, 0, 0);
   -o-transform: matrix(-1, 0, 0, 1, 0, 0);
   transform: matrix(-1, 0, 0, 1, 0, 0);
}
.nav-option{
	position:relative;
	padding: 0px 5px;
}
.count-icon{
	position:absolute;
	background-color:#eb690b;
}
.count-icon-hide{
	display:none !important;
}
.count-icon.video{
	right:0px;
	top:-1px;

}
.count-icon.cart{
	right: -2px;
	top: -2px;
}

.nav-options{
	position:absolute;
	bottom:4px;
	right:0px;
	top:18px;
	display:block;
}

.main-nav{
	text-align:center;
}

#bottom_terms {
	padding:10px 0px;
}
#bottom_terms li{
	display:inline-block;
}
@media(max-width:767px){
	#bottom_terms li{
		display:block;
	}

}

#bottom_terms li:first-child a{
	padding-left:0px;
	color:<?=$styling['WEB_TEXT_PRIMARY_COLOUR']['value']?>;


}

#bottom_terms a{
	color: #4b4b4b;

}


@media(max-width:768px){
	.nav-options{
		bottom:0px;
		top:8px;
	}

	.navbar.secondary_header .navbar-header .navbar-toggle{
		margin-top: -10px !important;
	}
}
.search_header_lg.input-group-btn button.btn{
    margin-top: 7px;
    padding-top: 2px;
    padding-bottom: 3px;
    padding-right: 10px;
    border: 1px solid transparent;
}
.search_header_lg.input-group-btn button.btn:hover{
	background-color:transparent !important;
}

.error .search_header_lg.input-group-btn button.btn{
	border: 1px solid #F1504C;
}

.error .search_header_lg.input-group-btn button.btn span{
	color: #F1504C;
}

.search_header_lg.input-group-btn button.btn span{
    color: #848484;
}

.col-sm-6.col-xs-8 #search_header_lg{
	margin-top: 8px;
    	height: 29px;
}

.col-sm-6.col-xs-8 .search_header_lg.input-group-btn button.btn{
	margin-top: 8px;
    padding-top: 4px;
    padding-bottom: 3px;
}

.navbar.secondary_header{
	margin: 0;
}

.navbar.secondary_header .navbar-header .navbar-toggle{
	margin: 0;
	border: 0;
	line-height: 45px;
}

.navbar.secondary_header .navbar-header .navbar-toggle span{
	font-size: 16px;
}

.nav.navbar-nav.options_menu{
	border-radius: 4px;
	margin-top: 10px;
	background-color: rgba(0, 0, 0, 0.24);
}

.nav.navbar-nav.options_menu a .glyphicon{
	line-height: 49px;
}

.nav.navbar-nav.options_menu a{
	text-align: left;
}

.nav.navbar-nav.options_menu a .option_icon{
	margin-right: 5px;
}

.nav.navbar-nav.options_menu .active a, .nav.navbar-nav.options_menu .active a:hover, .nav.navbar-nav.options_menu .active a:focus{
	text-align: left;
	background-color: rgba(0, 0, 0, 0.18);
	border-bottom: 1px solid rgba(242, 238, 238, 0.14);
}

.nav.navbar-nav.options_menu li .glyphicon-check{
	display: none;
}
.nav.navbar-nav.options_menu li .glyphicon-unchecked{
	display: block;
}
.nav.navbar-nav.options_menu li.active .glyphicon-check{
	display: block;
}
.nav.navbar-nav.options_menu li.active .glyphicon-unchecked{
	display: none;
}

.navbar-transp {
	margin: 6px;
	opacity: 0.9;
}

.navbar-lang{
	max-height: 250px;
}
.navbar-header{
	font-size: 0;
}
.navbar-header > *{
	font-size: 14px;
}

.navbar-collapse, .navbar-collapse2 {
	overflow-x: visible;
	padding-right: 6px;
	padding-left: 6px;
	border-top: 1px solid transparent;
	box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
	-webkit-overflow-scrolling: touch;
}
.navbar-collapse .navbar-nav.navbar-right > , .navbar-collapse2 .navbar-nav.navbar-right > *{
	font-size: 14px;
}
.navbar-collapse.in, .navbar-collapse2.in {
	overflow-y: auto;
}

.navbar-collapse2 .navbar-nav, .navbar-collapse2 .navbar-nav li, .navbar-collapse2 .navbar-nav li a{
	float: none;
	display: block;
	width: 100%;
}

.navbar-collapse2 .navbar-nav > li > a {
	border-bottom: 1px solid rgba(242, 238, 238, 0.14);
	font-size: 16px;
	text-align: center;
	text-transform: uppercase;
}
.navbar-collapse2 .navbar-nav > .active > a, .navbar-collapse2 .navbar-nav > .active > a:hover, .navbar-collapse2 .navbar-nav > .active > a:focus {
	background-color: #00458f;
	color: #FFF;
	font-size: 16px;
	text-align: center;
}
.navbar-collapse2 .navbar-nav .open .dropdown-menu > li > a {
	color: #00458f;
}
.navbar-collapse2 .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-collapse2 .navbar-nav .open .dropdown-menu > li > a:focus {
	color: #333333;
	background-color: transparent;
}
.navbar-collapse2 .navbar-nav .open .dropdown-menu > .active > a, .navbar-collapse2 .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-collapse2 .navbar-nav .open .dropdown-menu > .active > a:focus {
	color: #555555;
	background-color: #e7e7e7;
}
.navbar-collapse2 .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-collapse2 .navbar-nav .open .dropdown-menu > .disabled > a:hover, .navbar-collapse2 .navbar-nav .open .dropdown-menu > .disabled > a:focus {
	color: #cccccc;
	background-color: transparent;
}
.navbar-collapse2 .navbar-nav .open .dropdown-menu {
	position: static;
	float: none;
	width: auto;
	margin-top: 0;
	background-color: transparent;
	border: 0;
	box-shadow: none;
}
.navbar-collapse2 .navbar-nav.navbar-collapse2 .navbar-nav > li {
	float: none !important;
}

.dropup .caret, .navbar-fixed-bottom .dropdown .caret {
	border-top: 0;
	border-bottom: 4px solid;
	content: "";
}

.dropup .dropdown-menu, .navbar-fixed-bottom .dropdown .dropdown-menu {
	top: auto;
	bottom: 100%;
	margin-bottom: 1px;
}

.container > .navbar-header, .container-fluid > .navbar-header, .container > .navbar-collapse, .container-fluid > .navbar-collapse, .container > .navbar-collapse2, .container-fluid > .navbar-collapse2 {
	margin-right: -6px;
	margin-left: -6px;
}

.vertical_align_helper {
    display: inline-block;
    height: 100%;
    vertical-align: middle;
}

.navbar-static-top {
	z-index: 1000;
	border-width: 0 0 1px;
}

.navbar-fixed-top, .navbar-fixed-bottom {
	position: fixed;
	right: 0;
	left: 0;
	-webkit-transform: translate3d(0, 0, 0);
	transform: translate3d(0, 0, 0);
}

.navbar-fixed-top {
	z-index: 1031;
}
.navbar-fixed-bottom {
	z-index: 1030;
}

.navbar-fixed-top {
	top: 0;
	border-width: 0 0 1px;
	max-height: 100%;
	overflow: auto;
	-webkit-overflow-scrolling: touch;
}

.navbar-fixed-bottom {
	bottom: 0;
	margin-bottom: 0;
	border-width: 1px 0 0;
}

.mobile-navi ul{
	display:block;
	list-style-type:none;
	-webkit-padding-start:0px;
	margin-bottom: 0;
	martin-top: -5px;
}
.mobile-navi ul li{
	display:inline-block;
	list-style-type:none;
	padding:0 10px;
}

.navbar-brand {
	font-size: 18px;
	line-height: 20px;
}

.navbar-logo{
	position: relative;
	text-align:center;

}

.row-eq-height{
	display: flex;
}
@media(max-width:767px){
	.row-eq-height{
		display: block;
	}
}

.navbar-logo .logo{
	width:195px;
	height:70px;
	padding-top:10px;

}
@media(max-width:767px){
	.navbar-logo .logo{
		width:169px;
		height:50px;
		padding-top: 0;
	}

	.navbar-brand2 h3 {
		line-height: 1 !important;
	}

	.navbar-2-container.container {
		margin-top: -25px;
	}

}
.navbar-logo.hidden-xs:before, .navbar-logo:after{
	content: '';
	position: absolute;
	bottom: 0;
}

.glyphicon-search{
	color:#4b4b4b;
	font-size:21px;
}
@media(max-width:768px){
	.glyphicon-search{
		font-size:16px;
	}

}

.navbar-brand:hover, .navbar-brand:focus {
	text-decoration: none;
}

.navbar-brand2 {
	width: auto;
	max-width: 60%;
	overflow: hidden;
}

.mobile-navi{
	display:none;
}
@media(max-width:991px){
	.mobile-navi{
		display:block;
	}
}

.header .btn:focus,.header .btn:active:focus{
	outline-color:#00458f;
}



.mob-search,.mob-cart,.hamburger{
	display:inline-block;
}
.mob-search .input-group{
	display:block;
}
.mob-search-form{
	position:absolute;
	top:56px;
	width:100%;
	left:0px;
}
.mob-search #search_header_lg{
	height:35px;
	width:100%;
}

.mob-purchased{
	display:inline-block;
	padding: 0px 10px;
	position:relative;
}
.nav-options-controls{

}
:focus{
	outline-color:transparent;
  outline:none auto 5px !important;
}
.search:focus{
    outline:none !important;
    opacity:1;
}

.navbar-toggle {
	position: relative;
	background-color: transparent;
	background-image: none;
	border: 1px solid transparent;
	border-radius: 0px;
}
.navbar-toggle:focus {
	outline: 0;
}
.navbar-toggle .icon-bar {
	display: block;
	width: 22px;
	height: 2px;
	border-radius: 1px;
}
.navbar-toggle .icon-bar + .icon-bar {
	margin-top: 4px;
}
/*.navbar-nav {
	margin: 7.5px -6px;
}*/
.navbar-nav {
	margin: 7.5px 0px;
}
.navbar-nav > li {
	position: relative;
}
.navbar-nav > li > a {
	padding-top: 10px;
	padding-bottom: 10px;
	line-height: 20px;
	font-size:14px;
}
.two_tone .navbar-nav > li > a, .two_tone .navbar-nav .shopping_basket a, .drop_tone .navbar-nav > li > a, .drop_tone .navbar-nav .shopping_basket a {
	padding-top: 0;
	padding-bottom: 0;
	line-height: 48px;
	font-weight:700;
	color: <?=$WEB_HEADER_TEXT_COLOUR?>;
	text-transform:uppercase;
}
.two_tone .navbar-nav .shopping_basket a{
	color:#8c8c8c;
}
.two_tone .navbar-nav .shopping_basket a.btn-warning{
	color:#fff;
}

.two_tone{
	z-index: 2;
}

.two_tone .container{
	position: relative;
}

.two_tone .container:after{
	content: '';
	position: absolute;
	bottom: 0;
	width: 100%;
	left: 0;
	height: 1px;
}

.two_tone .container .navbar-header .btn-circle span{
	color: #fff;
}

.navbar-form {
	margin-left: -6px;
	margin-right: -6px;
	padding: 10px 6px;
	border-top: 1px solid transparent;
	border-bottom: 1px solid transparent;
	-webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
	box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
	margin-top: 8px;
	margin-bottom: 8px;
}
.navbar-nav > li > .dropdown-menu {
	margin-top: 0;
	border-top-right-radius: 0;
	border-top-left-radius: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0;
}
.navbar-btn {
	margin-top: 8px;
	margin-bottom: 8px;
}
.navbar-btn.btn-sm {
	margin-top: 10px;
	margin-bottom: 10px;
}
.navbar-btn.btn-xs {
	margin-top: 14px;
	margin-bottom: 14px;
}
.navbar-text {
	margin-top: 15px;
	margin-bottom: 15px;
}
.navbar-default {
	background-color: transparent;
	/*border-color: #e7e7e7;*/
	border: none;
}
.navbar-default.filter-footer{
	background-color: white;
	border: 1px solid #e7e7e7;
}
.navbar-default.navbar-fixed-top{
	margin-bottom: 38px;
	overflow: visible;
}
.navbar-default.navbar-fixed-top .two_tone{
    display: block;
    float: left;
    width: 100%;
	background-color: <?=$WEB_HEADER_BACKGROUND_COLOUR?>;
	if ($WEB_HEADER_GRADIENT){
		background-image: url(<?=$config['site']['asset']?><?=$WEB_HEADER_GRADIENT?>);
		background-repeat: repeat-x;
		background-position: left top;
	}
	z-index: 2;
    position: relative;
}

.secondary_head, .secondary_header{
	z-index: 1;
	right: 0;
	left: 0;
}
.secondary_header{
	border-bottom:1px solid #ccc;
}



.navbar-2-container{
	display:block;
	padding-bottom:30px;
}
@media(max-width:768px){
	.navbar-2-container{
		margin-top:0px;
		padding-bottom:0px;
	}
}

.secondary_head{
	top: 49px;

}
.secondary_header{
	top: 30px;
}
@media(max-width:767px){
	.secondary_header{
		top: 25px;
	}
}
.secondary_spacer{
	height: 38px;
	display: block;
	float: left;
	width: 100%;
	clear: both;
}

@media (max-width: 992px){
	.secondary_spacer{
		height: 45px;
	}
}

.navbar-default.navbar-fixed-top .drop_tone{
    display: block;
    float: left;
    width: 100%;
    position: relative;
    z-index: 2;
    background-color: #272727;
}
.navbar-default .list-group-item.active, .navbar-default .list-group-item.active:hover, .navbar-default .list-group-item.active:focus{
	background-color: <?=$WEB_HEADER_LIST_ACTIVE_COLOUR?>;
	border-color: <?=$WEB_HEADER_LIST_ACTIVE_COLOUR?>;
}
.navbar-default .navbar-brand {
	color: #777777;
}
.navbar-default .navbar-text {
	color: #777777;
}
.navbar-default .navbar-nav .shopping_basket > a {
	color: <?=$WEB_HEADER_TEXT_COLOUR?>;
}
.navbar-default .navbar-nav .shopping_basket .btn-circle span {
	color: #fff;
}
.navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus {
	color: <?=$WEB_HEADER_LIST_ACTIVE_COLOUR?>;
	background-color: transparent;
}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
	color: <?=$WEB_HEADER_LIST_ACTIVE_COLOUR?>;
	background-color: transparent;
}
.navbar-default .navbar-nav > .disabled > a, .navbar-default .navbar-nav > .disabled > a:hover, .navbar-default .navbar-nav > .disabled > a:focus {
	color: #cccccc;
	background-color: transparent;
}

.navbar-default .navbar-toggle {
	color: <?=$WEB_HEADER_TEXT_COLOUR?>;
	padding: 0px;

}
.navbar-default .navbar-toggle:hover span, .navbar-default .navbar-toggle:focus span{
	/*opacity: 0.6;*/
}
.navbar-default .navbar-toggle .icon-bar {
	background-color: #888888;
}
.navbar-default .navbar-collapse, .navbar-default .navbar-collapse2, .navbar-default .navbar-form {
	/*border-color: #e7e7e7;*/
	border: none;
}
.nav.navbar-nav li:last-child a{
	/*border: none;*/
}
.navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus {
	background-color: #e7e7e7;
	color: #555555;
}
.navbar-default .navbar-link {
	color: #777777;
}
.navbar-default .navbar-link:hover {
	color: #333333;
}
.navbar-default .btn-link {
	color: #777777;
}
.navbar-default .btn-link:hover, .navbar-default .btn-link:focus {
	color: #333333;
}
.navbar-default .btn-link[disabled]:hover, fieldset[disabled] .navbar-default .btn-link:hover, .navbar-default .btn-link[disabled]:focus, fieldset[disabled] .navbar-default .btn-link:focus {
	color: #cccccc;
}
.navbar-inverse {
	color: #333;
	background-color: #f1f2f3;
}
.navbar-inverse .navbar-brand {
	color: #777777;
}
.navbar-inverse .navbar-brand:hover, .navbar-inverse .navbar-brand:focus {
	color: #ffffff;
	background-color: transparent;
}
.navbar-inverse .navbar-text {
	color: #777777;
}
.navbar-inverse .navbar-nav > li > a {
	color: #777777;
}
.navbar-inverse .navbar-nav > li > a:hover, .navbar-inverse .navbar-nav > li > a:focus {
	color: #ffffff;
	background-color: transparent;
}
.navbar-inverse .navbar-nav > .active > a, .navbar-inverse .navbar-nav > .active > a:hover, .navbar-inverse .navbar-nav > .active > a:focus {
	color: #ffffff;
	background-color: #080808;
}
.navbar-inverse .navbar-nav > .disabled > a, .navbar-inverse .navbar-nav > .disabled > a:hover, .navbar-inverse .navbar-nav > .disabled > a:focus {
	color: #444444;
	background-color: transparent;
}
.navbar-inverse .navbar-toggle {
	border: none;
}
.navbar-inverse .navbar-toggle:hover, .navbar-inverse .navbar-toggle:focus {
	opacity: 0.6;
}
.navbar-inverse .navbar-toggle .icon-bar {
	background-color: #ffffff;
}
.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-collapse2, .navbar-inverse .navbar-form {
	border-color: #101010;
}
.navbar-inverse .navbar-nav > .open > a, .navbar-inverse .navbar-nav > .open > a:hover, .navbar-inverse .navbar-nav > .open > a:focus {
	background-color: #080808;
	color: #ffffff;
}

.navbar-inverse .navbar-link {
	color: #777777;
}
.navbar-inverse .navbar-link:hover {
	color: #ffffff;
}
.navbar-inverse .btn-link {
	color: #777777;
}
.navbar-inverse .btn-link:hover, .navbar-inverse .btn-link:focus {
	color: #ffffff;
}
.navbar-inverse .btn-link[disabled]:hover, fieldset[disabled] .navbar-inverse .btn-link:hover, .navbar-inverse .btn-link[disabled]:focus, fieldset[disabled] .navbar-inverse .btn-link:focus {
	color: #444444;
}
.nav:before, .nav:after, .navbar:before, .navbar:after, .navbar-header:before, .navbar-header:after, .navbar-collapse:before, .navbar-collapse:after, .navbar-collapse2:before, .navbar-collapse2:after{
	content: " ";
	display: table;
}
.nav:after, .navbar:after, .navbar-header:after, .navbar-collapse:after, .navbar-collapse2:after{
	clear: both;
}

.shopping_basket.hidden-xs.hidden-sm.hidden-md ul.dropdown-menu{
	padding: 5px 0 0 0;
}



.shopping_basket.hidden-xs.hidden-sm.hidden-md ul .col-sm-16{
	max-height: 350px;
	min-height: 65px;
}

.shopping_basket.hidden-xs.hidden-sm.hidden-md ul .center-block {
	background-color: white;
	position: absolute;
	bottom: 0;
	right: 0;
	left: 0;
	padding: 15px;
}

.nav-sidebar .text-overflow a, .nav-sidebar .text-overflow .media-body {
	white-space: nowrap;
	overflow: hidden;
	-o-text-overflow: ellipsis;
	text-overflow: ellipsis
}
.media, .media-body {
	overflow: hidden;
	zoom: 1;
}
.media, .media .media {
	margin-top: 15px;
}
.media:first-child {
	margin-top: 0;
}
.media-object {
	display: block;
}
.media-heading {
	margin: 0 0 5px;
}
@media(max-width:768px){
	.media-heading{
		color:#fff;
	}
}
.media > .pull-left {
	margin-right: 10px;
}
.media > .pull-right {
	margin-left: 10px;
}

@media screen and (min-width: 992px) {
	.navbar-fixed-top {
		overflow: visible;
	}
	.navbar-text {
		float: left;
		margin-left: 6px;
		margin-right: 6px;
	}
	.navbar-text.navbar-right:last-child {
		margin-right: 0;
	}
	.navbar {
		border-radius: 4px;
	}
	.navbar-header {
		float: left;
	}
	.navbar-right .dropdown-menu {
		left: auto;
		right: 0;
	}
	.navbar-right .dropdown-menu-left {
		left: 0;
		right: auto;
	}
	.navbar > .container .navbar-brand, .navbar > .container-fluid .navbar-brand {
		margin-left: 0px;
	}
	.navbar-collapse {
		width: auto;
		border-top: 0;
		box-shadow: none;
	}
	.navbar-collapse.collapse.main {
		display: inline-block;
		height: auto !important;
		padding-bottom: 0;
		overflow: visible !important;
	}
	.navbar-collapse.in {
		overflow-y: visible;
	}
	.navbar-fixed-top .navbar-collapse, .navbar-static-top .navbar-collapse, .navbar-fixed-bottom .navbar-collapse {
		padding-left: 0;
		padding-right: 0;
	}
	.navbar-static-top {
		border-radius: 0;
	}
	.container > .navbar-header, .container-fluid > .navbar-header, .container > .navbar-collapse, .container-fluid > .navbar-collapse {
		margin-right: 0;
		margin-left: 0;
	}
	.navbar-fixed-top, .navbar-fixed-bottom {
		border-radius: 0;
	}
	.navbar-toggle {
		display: none;
	}
	.navbar-nav {
		float: left;
		margin: 0;
		display:block;
	}

	.navbar-nav > li {
		float: left;
		display:inline-block;
	}
	.navbar-nav > li > a {
		padding-top: 9px;
		padding-bottom: 9px;
	}
	.navbar-nav.navbar-right:last-child {
		margin-right: 0px;
	}
	.navbar-left {
		float: left !important;
	}
	.navbar-right {
		float: right !important;
	}
	.navbar-form {
		width: auto;
		border: 0;
		margin-left: 0;
		margin-right: 0;
		padding-top: 0;
		padding-bottom: 0;
		-webkit-box-shadow: none;
		box-shadow: none;
	}
	.navbar-form.navbar-right:last-child {
		margin-right: -6px;
	}
}


	.navbar-collapse.collapse.main .navbar-nav li a {
		padding-right: 10px;
		padding-left: 10px;
	}

@media(max-width:1024px){
	.navbar-collapse.collapse.main .navbar-nav li a {
		padding-right: 10px;
		padding-left: 10px;
	}
}

@media screen and (max-width: 991px) {


	.navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
		border-color: #080808;
	}
	.navbar-inverse .navbar-nav .open .dropdown-menu .divider {
		background-color: #080808;
	}
	.navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
		color: #00458f;
	}
	.navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
		color: #ffffff;
		background-color: transparent;
	}
	.navbar-inverse .navbar-nav .open .dropdown-menu > .active > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
		color: #ffffff;
		background-color: #080808;
	}
	.navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover, .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
		color: #444444;
		background-color: transparent;
	}
	.navbar-default .navbar-nav > li > a {
		border-bottom: 1px solid rgba(242, 238, 238, 0.14);
		font-size: 16px;
		text-align: center;
		text-transform: uppercase;
	}
	.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
		font-size: 16px;
		text-align: center;
	}
	.navbar-default .navbar-nav .open .dropdown-menu > li > a {
		color: #00458f;
	}
	.navbar-default .navbar-nav .open .dropdown-menu > li > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
		color: #333333;
		background-color: transparent;
	}
	.navbar-default .navbar-nav .open .dropdown-menu > .active > a, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
		color: #555555;
		background-color: #e7e7e7;
	}
	.navbar-default .navbar-nav .open .dropdown-menu > .disabled > a, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover, .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
		color: #cccccc;
		background-color: transparent;
	}
	.navbar-nav .open .dropdown-menu {
		position: static;
		float: none;
		width: auto;
		margin-top: 0;
		background-color: transparent;
		border: 0;
		box-shadow: none;
	}
	.navbar-nav.nav{
		margin: 0;
		display:inline-block;
	}
	.navbar-nav .open .dropdown-menu > li > a, .navbar-nav .open .dropdown-menu .dropdown-header {
		padding: 5px 15px 5px 25px;
	}
	.navbar-nav .open .dropdown-menu > li > a {
		line-height: 20px;
	}
	.navbar-nav .open .dropdown-menu > li > a:hover, .navbar-nav .open .dropdown-menu > li > a:focus {
		background-image: none;
	}
	.navbar-form .form-group {
		margin-bottom: 5px;
	}
}

@media only screen and (max-width : 991px) {
	.navbar-brand2 {
		display: block;
		float: left;
	}
	.navbar-brand2 h3{
		margin: 0;
    	line-height: 45px;
	}
}

@media screen and (min-width:768px) {
	.navbar-form .form-group {
		display: inline-block;
		margin-bottom: 0;
		vertical-align: middle;
	}
	.navbar-form .form-control {
		display: inline-block;
		width: auto;
		vertical-align: middle;
	}
	.navbar-form .input-group {
		display: inline-table;
		vertical-align: middle;
	}
	.navbar-form .input-group .input-group-addon, .navbar-form .input-group .input-group-btn, .navbar-form .input-group .form-control {
		width: auto;
	}
	.navbar-form .input-group > .form-control {
		width: 100%;
	}
	.navbar-form .control-label {
		margin-bottom: 0;
		vertical-align: middle;
	}
	.navbar-form .radio, .navbar-form .checkbox {
		display: inline-block;
		margin-top: 0;
		margin-bottom: 0;
		vertical-align: middle;
	}
	.navbar-form .radio label, .navbar-form .checkbox label {
	.navbar-form .radio label, .navbar-form .checkbox label {
		padding-left: 0;
	}
	.navbar-form .radio input[type="radio"], .navbar-form .checkbox input[type="checkbox"] {
		position: relative;
		margin-left: 0;
	}
	.navbar-form .has-feedback .form-control-feedback {
		top: 0;
	}
}

@media screen and (max-width: 700px) and (orientation: landscape) {
	.navbar-fixed-top .navbar-collapse, .navbar-fixed-bottom .navbar-collapse {
		max-height: 225px;
	}

	.mobile-navi ul {
		margin-bottom: 0;
	}

}