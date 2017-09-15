<?php
	define('BASEDIR', $_SERVER['DOCUMENT_ROOT']);

	require $_SERVER['DOCUMENT_ROOT']."/function/common.functions.php";
	require $_SERVER['DOCUMENT_ROOT']."/config/vars.config.php";
	require $_SERVER['DOCUMENT_ROOT']."/class/Pages.class.php";
	require $_SERVER['DOCUMENT_ROOT']."/config/db.config.php";

	$pages = new Pages($PDO);
	header("Content-type: text/css; charset: UTF-8");
	$styling = $pages->grabAllStyling();
	$language = strtoupper($_GET['language']);

	$WEB_CREW_IMAGE 			= $styling['WEB_CREW_IMAGE']['value'];
	$WEB_VOUCHER_IMAGE 			= $styling['WEB_VOUCHER_IMAGE']['value'];
	$WEB_CREDIT_CARD_IMAGE 		= $styling['WEB_CREDIT_CARD_IMAGE']['value'];
	$WEB_SHOPPING_CARD 			= $styling['WEB_SHOPPING_CARD']['value'];
	$WEB_MAGAZINE_CARD 			= $styling['WEB_MAGAZINE_CARD']['value'];
	$WEB_MAGAZINE_CARD_MOBILE 	= $styling['WEB_MAGAZINE_CARD_MOBILE']['value'];
	$WEB_LIKEWHERE_ICON 		= $styling['WEB_LIKEWHERE_ICON']['value'];
	$WEB_MYTRIP_IMAGE			= $styling['WEB_MYTRIP_IMAGE']['value'];
	$WEB_WIDE_ACTIVITY_IMAGE 	= $styling['WEB_WIDE_ACTIVITY_IMAGE']['value'];
	 $WEB_MOVIES_CARD			= $styling['WEB_MOVIES_CARD']['value'];
	$WEB_EAT_DRINK_CARD			= $styling['WEB_EAT_DRINK_CARD']['value'];
	$WEB_MOVIE_IMAGE			= $styling['WEB_MOVIE_IMAGE']['value'];
	$WEB_KIDS_IMAGE				= $styling['WEB_KIDS_IMAGE']['value'];
	$WEB_EAT_DRINK_LARGE_CARD	= $styling['WEB_EAT_DRINK_LARGE_CARD']['value'];
	$WEB_WORLD_CARD_IMAGE		= $styling['WEB_WORLD_CARD_IMAGE']['value'];
	$WEB_EXPLORE_CARD_IMAGE		= $styling['WEB_EXPLORE_CARD_IMAGE']['value'];
	$WEB_EXPLORE_CARD_IMAGE_MOBILE		= $styling['WEB_EXPLORE_CARD_IMAGE_MOBILE']['value'];
	$WEB_EXPLORE_CARD_BUTTON	= $styling['WEB_EXPLORE_CARD_BUTTON_'.$language]['value'];
	$WEB_EXPLORE_CARD_BUTTON_MOBILE		= $styling['WEB_EXPLORE_CARD_BUTTON_MOBILE_'.$language]['value'];
	$SURVEY_BANNER_DESK			= $styling['SURVEY_BANNER_DESK_'.$language]['value'];
	$SURVEY_BANNER_TABLET		= $styling['SURVEY_BANNER_TABLET_'.$language]['value'];
	$SURVEY_BANNER_MOBILE		= $styling['SURVEY_BANNER_MOBILE_'.$language]['value'];
	$WEB_CATEGORY_NAV_BG  = isset($styling['WEB_CATEGORY_NAV_BG']['value']) ? $styling['WEB_CATEGORY_NAV_BG']['value'] : "inherit";
	$WEB_CATEGORY_NAV_HOVER = isset($styling['WEB_CATEGORY_NAV_HOVER']['value']) ? $styling['WEB_CATEGORY_NAV_HOVER']['value'] : "inherit";
	$WEB_CATEGORY_NAV_ACTIVE = isset($styling['WEB_CATEGORY_NAV_ACTIVE']['value']) ?  $styling['WEB_CATEGORY_NAV_ACTIVE']['value'] : "inherit";
	$WEB_CATEGORY_TEXT  = isset($styling['WEB_CATEGORY_TEXT']['value']) ? $styling['WEB_CATEGORY_TEXT']['value'] : "inherit";
	$WEB_CATEGORY_TEXT_ACTIVE = isset($styling['WEB_CATEGORY_TEXT_ACTIVE']['value']) ?  $styling['WEB_CATEGORY_TEXT_ACTIVE']['value'] : "inherit";
?>
@charset "utf-8";

body {
	height: 100%;
	position:relative;
}
html{
	background-color: #f0f0f0;
		position:relative;
		min-height:100%;
}
body {
	background-color: transparent;
	padding-top: 110px;
	overflow: hidden;
	overflow: scroll;
	color:#4b4b4b;
	font-size:16px;
	line-height:1.6em;
}

.display{
	display:inline;
	position:relative;
}
.display .glyphicon.glyphicon.glyphicon-chevron-left.blue{
	top: 18px;
	position: relative;
	vertical-align:top;
}
@media(max-width:767px){
	.display .glyphicon.glyphicon.glyphicon-chevron-left.blue{
		left:0px;
	}
}
a{
	color:#eb690b;
}
.underline{
	text-decoration:underline;
}
h4.panel-title,h2.panel-title {
    font-size:16px;
}
#terms_conditions_modal	.panel-group{
		height:400px;
		overflow:scroll;
	}
	.terms label{
		display:inline;
	}
    .panel-heading {
        padding: 10px 20px;
    }


.moving-map-info-pane{
	float: left; 
	position: absolute;
    z-index: 1;
    border-radius: 0px 10px 10px 0px;
    -moz-border-radius: 0px 10px 10px 0px;
    -webkit-border-radius: 0px 0px 10px 0px;
    background-color: #f0f0f0;
    padding-right: 10px;
    padding-bottom: 10px; 
    padding-left:40px;
}

.moving-map-info-pane .labels{
	min-width: 65px;
	float: left;
}

.moving-map-info-pane .info-value{
	min-width: 68px; 
	text-align: right; 
	float: right;
	padding-top: 1px;
}

.movie-label{
	color:#00458f;
}


h2,.h2{
	font-size:24px;
}

input[type="radio"], input[type="checkbox"]{
	height:20px;
}

.welcome h2{
	font-size:24px;
}
.welcome h2.hand-sub-msg{
	font-size:14px;
	font-weight:100;
}
@media(max-width:1px){
	.welcome h2{
		font-size:1.5em;
	}
}

.no-padd-left{
	padding-left:0px;
}

.body_scroll_cont{
	height: 100%;
	-webkit-overflow-scrolling: touch;
	margin:30px 0px 0px 0px;
}
@media(max-width:1100px) and (min-width:769px){
	.body_scroll_cont{
		margin:25px 0px 0px 0px;
	}
}

#goto-to-top-page-btn{
	display: block; position: absolute; right: 20px; bottom: 20px; width: 50px; height: 50px;
}
#goto-to-top-page-btn .btn-circle{
	background-color: #eb690b; color:white; width: 50px; height: 50px; border-radius: 25px; padding:17px;
}
#goto-to-top-page-btn .btn-circle .foundicon-up-arrow{
	position: absolute;
	    left: 7px;
	    top: 10px;
	    font-size: 20px;
}

@media(max-width:768px) and (min-width:650px){
	.body_scroll_cont{
		margin:52px 0px 0px 0px;
	}
}
@media(max-width:399px){
	.body_scroll_cont{
		margin:33px 0px 0px 0px;
	}
}
.tab-content-single{
	margin-top:10px;
}
.blue{
	color:#00458f;
}

.no_bg{
	background-color: transparent !important;
}
.padd-left-20{
	padding-left:20px;
}
.padd-btm-20{
	padding-bottom:20px;
}

@media(max-width:767px){
	.padd-left-20{
		padding-left:6px;
	}
	.mob-no-padd{
		padding:0px;
	}
}

.modal-open .body_scroll_cont{
	-webkit-overflow-scrolling: auto;
}
.modal-content{
	border-radius:0;
	border:none;
}
.modal-content p , .modal-body{
	color:#00458f;
}
.modal-header,.modal-footer{
	border:none;
}
@media(max-width:767px){
	.panel-group{
		height:300px;
		overflow:scroll;
	}
}

.destination-personalise-modal {
	margin: 250px auto;
}

.movie_img{
	background-size: cover !important;
	background-position: top right !important;

}

.kids_img{
	background-size: cover !important;
	background-position: top right !important;

}

.movie_button_link.disabled_link{
	pointer-events: none;
	opacity: 0.3;
}
.img-block{
	display: block;
	width: 100%;
	max-width: 100%;
	height: 277px;
}
.single-img-block{
	display: block;
	width: 100%;
	max-width: 100%;

}
@media(max-width:767px){
	.img-block{
		height:100%;
	}
}
.img-product{
	display: block;
	width: 100%;
	max-width: 100%;
	height: auto;
	position:absolute;
	bottom:0px;
}
@media(max-width:1024px){
	.shop-items .img-product{
		bottom:0px;
	}

}
@media(max-width:767px){
	.shop-items .img-product{
		bottom:0px;
	}
}


.movie-modal{
	display:block;
}

.movie-content-holder{
	padding-left:20px;
}
@media(max-width:767px){
	.movie-content-holder{
		padding-left:0px;
		padding-top:10px;
	}
}
@media(max-width:600px){
	.movie-content-holder{
		padding:20px;
	}
}
.related-items {
	border-top:1px solid #ccc;
}
.related-items .product:first-child{
	margin-left:0px;
}

.item-body{
	display:block;
	padding-bottom:20px;
	margin-bottom:10px;
}
h4.title,h3.title{
	margin-bottom:10px;
	color:#4b4b4b;
	font-weight:400;
	font-size:18px;
}

.inner-title{
	font-size:20px;
	color:#4b4b4b;
	font-weight:400;
}
.title{
	font-size:20px;
	margin-bottom:20px;
	color:#4b4b4b;
	font-weight:400;
}
@media(max-width:768px) and (min-width:700px){
	.padd-left-15{
		padding-left:15px;
	}
}
.actions{
	margin:20px 0px 30px 0px
}
.actions.small{
	margin:10px 0px 10px 0px
}

.message a{
	text-decoration:underline;
}

.message-container{
	border-bottom:1px solid #ccc;
	display:block;
	padding-bottom:10px;
}
.message-container .message-title{
	padding-bottom:10px;
	display:block;
}
.action-item{
	margin:20px 0px;
}
@media(max-width:767px){
	.action-item{
		margin:10px 0px;
	}
}

.actions .col-md-7,.actions .col-sm-8,
.actions .col-lg-5{
	padding-left:0px;
}
.release-date{
	margin-bottom:0px;
}

.movie-price{
	margin-bottom:20px;
}

.movie-description{
	border-top:1px solid #ccc;
}
.movie-details{
	display:block;
	margin:20px 0px 0px 0px;
	color: #8c8c8c;
	font-weight:400;
}
.movie-details.shop{
	margin-top:0px;
}
.item_description{
	border-top: 1px solid #ccc;
	padding-top: 15px;
}
.movie-details .movie-details-list{
	display:block;
	-webkit-padding-start:0px;
}



@media(max-width:767px){
	.movie-details .movie-detail:last-child{
		margin:0px;
	}
	.single-item-body{
		padding:10px 5px;
		display:block;
	}
}
.order-history  .movie-price{
	margin-top:20px;
	margin-bottom:20px;
}
.order-history .media-title h2{
	font-size:24px;
}
@media(max-width:767px){
	.order-history .content-holder{
		margin-top: 10px;
	    	padding: 5px;
	}
}
.movie-detail{
	display:inline-block;
	margin:0px 10px;
	position:relative;
	font-size:14px;
}

.movie-detail:first-child{
	margin-left:0px;
}


.movie-detail:after{
	content: '';
	position: absolute;
	top: 38%;
	height: 12px;
	margin-top: -4px;
	width: 1px;
	background-color: #8c8c8c;
	right:-10px;

}

@media(max-width:767px){
	.movie-detail{
		margin:0px 8px;
	}
	.movie-detail:after {
		top: 43%;
		margin-left: 10px;
	}


}
.movie-detail:last-child:after{
	content:none;
}
.movie_description{
	text-align: justify;
	padding-top: 22px;
	color: #4b4b4b;
	border-top: 1px solid #ccc;
	margin-top: 30px;
}
.sub-heading{
	color:#8c8c8c;
	font-weight:400;
	font-size:12px;

}
@media(max-width:767px){
	.sub-heading{
		text-align:left;
		padding:0px 0px 10px 0px;
	}
	.radio input[type="radio"], .radio-inline input[type="radio"], .checkbox input[type="checkbox"], .checkbox-inline input[type="checkbox"]{
		margin-top:7px;
	}
}
.italic{
	font-style:italic;
}
.light{
	font-weight:100;
}
.normal{
	font-weight:400;
}
.bold{
	font-weight:700px;
}
.movie-poster{
	padding:20px;
	background-color:#fff;
}
.movie-poster-2{
}

@media(max-width:767px) and (min-width:420px){
	.movie-poster {
	    width: 50%;
	    margin: 0 auto;
	}
}

.panel-footer .movie_button_link, .panel-footer .cart_button_link {
	border:1px solid transparent;
	font-size:18px;
	border-radius:3px;
	position:absolute;
	top:18px;
	padding: 0px;
	height: 40px;
	width: 41px;
	background-color: transparent;
}

.panel-footer .cart_button_link {
top: -6px;
right: 2px;
}

@media(max-width:500px){
	.panel-footer .movie_button_link{
		top:28px;
	}
}
.panel-footer .btn-remove{
	border:1px solid transparent;
	font-size:18px;
	border-radius:3px;
	position:absolute;
	top:-5px;
	padding: 0px;
	height: 40px;
	width: 41px;
	background-color: transparent;
	right:7px;

}
.panel-footer .btn-remove.added{
	right:7px;
	top:7px;


}
.panel-footer .boxed{
	border: 1px solid #ccc;
	background-color:#00458f;

}
.btn.disabled{
	border: 1px solid #ccc;
	background: #ccc;
	color:#fff;
	border-radius:3px;
}


.process-alert{
	background-color:#dbedf7;
	border: 1px solid #79c7eb;
 	padding: 0px 20px 10px;
	margin:0px 0px 10px 0px;
	color:#00458f;
	text-align:left;
	border-radius:3px;
}
.process-alert h3{
	text-transform:uppercase;
}
.process-alert a{
	color:#00458f;
	text-decoration:underline;
}
.modal-body a{
	text-decoration:underline;
}
.modal-body .panel-title a{
	text-decoration:none;
}


.shop-notice-container{
	background-image:url('/assets/images/sxs-suncafe-closed.png');
	background-size:contain;
	background-position: 92%;
	background-repeat:no-repeat;
        height: 100%;
        background-color: #fff;
	min-height:400px;


}
.shop-notice-container.shop{
	background-image:url('/assets/images/sxs-sunshop-closed.png');
}

@media(max-width:767px){
	.shop-notice-container{
		background-image:none;
	}
	.shop-notice-container.shop{
		background-image:none;
		display: inline-block;
        min-height: inherit;

	}
	.processpayment_notice {
		background-image:none !important;
		
	}
	.processpayment_notice p{
		width: 100% !important;
	}
}
.over-18{
	background-color: #fdebbc;
	color: #f95000;
	margin-top:8px;
	padding: 10px;
	text-align: center
}

.shop-notice-message{
	padding:50px 15px 40px 15px;
}

.shop-notice-title{
	font-size:18px;
	color:#eb690b;
}
.shop-notice-body{
	padding:10px 30px 0px 0px;
	font-size:18px;
	line-height:1.3;
}
.closed{
	background-color:#fff;
}
.banner-image-closed{
	background-image:url('/assets/images/sxs-suncafe-closed.png');
	background-size:cover;
	background-position:50% 50%;
	background-repeat:no-repeat;
	min-height:300px;
}
@media(max-width:767px){
	.shop-notice-container{
		margin-top:40px;
		padding-bottom:20px;
	}
	.shop-notice-body{
		padding:0px;
	}
	.shop-notice-message{
		padding:40px 15px 40px 15px;
	}
}

.search-result .panel-footer .btn-danger{
	top:6px;
}
@media(max-width:768px){
	.search-tile .item .image{
		height:180px;
	}
}
.mag-item .panel-footer .btn-danger,.mag-item .panel-footer .btn-success{
	top:-3px;
	font-size:1.4rem;
	margin-bottom:10px;
}
.shop-item .panel-footer .btn-danger{
	top:14px;
	font-size:1.4rem;
	margin-bottom:10px;
}


.panel-footer .movie_button_link{
	right:2px;
}



.panel-footer .btn-danger{
	background:#d9534f;

}
@media(max-width:1024px) and (min-width:768px){
	.movie-poster {
	    width: 100%;
	}
	.panel-footer .movie_button_link{
		margin-bottom:10px;
	}
}

.orange{
    color: #eb690b;
}
.text-orange{
    color: #eb690b;
}
.gray{
	color:#cccccc;
}

.orange.my-cart{
    display: block;
    position: relative;
    top: 6px;
    color: #eb690b;
    opacity: 1;
}
#seat-details-form .control-label{
	display:inline-block;
	width:20%;
}
.seat-number .form-group{
	display:block;
}
.seat-number .form-group input.seat{
	display:inline-block;
	width:70%;
	margin-left:10px;
}

@media(max-width:767px){
	 .seat-number .form-group input.seat{
		width:100%;
	}
	 #seat-details-form .control-label{
		width:100%;
	}
}
.my-cart{
	background-image:url('/assets/images/icon-cart-orange.svg');
	background-repeat:no-repeat;
	height:40px;
	width:35px;
	display:block;
}

.added-cart{
	background-image:url('/assets/images/free-media.svg');
	background-repeat:no-repeat;
	height:40px;
	width:35px;
	display:block;
}
.free-media{
	font-size:20px;
	position:relative;
	top:4px;

}
.fa-check{
	font-size:20px;
}


.cart-alert{
	color:#fff;
}
.modal-backdrop{
	background-color:transparent;
}
.cart-alert .modal-content{
	background-color: #eb690b;
	color:#fff;
	box-shadow:none;
	border:none;
	text-align: center;
	padding: 10px;
	height:100%;
	box-shadow: 10px 10px 5px rgba(0,0,0,0.3);
	-webkit-box-shadowL:10px 10px 5px rgba(0,0,0,0.3);
	 -moz-box-shadow: 10px 10px 5px rgba(0,0,0,0.3);
}
.cart-alert .modal-content .modal-body{
	background-color: #eb690b;
	color:#fff;
	box-shadow:none;
	font-weight:100;
}
.tick-cart{
	background-color: #fff;
	display: block;
	position: relative;
	z-index: 1;
	border-radius: 50px;
	width: 100px;
	height: 100px;
	margin: 10px auto;
	top: 15px;
}
.tick-cart .foundicon-checkmark{
	font-size: 52px;
	color: #eb690b;
	display: block;
	position: absolute;
	right: 24px;
	top: 38px;
}

.close_icon{
	color:#fff;
	display:block;
	position:absolute;
	right:10px;
	top:10px;

}
.cart-alert.modal-sm{
	min-height:150px;
	width:260px;
	margin:0 auto;
}

button.btn-filter{
	border: none;
	background-color: transparent;
	color: #4b4b4b;
	text-transform: capitalize;
	font-size: 1.8rem;
	font-weight: 400;
	margin-right:10px;
	width:100%;
	text-align:right;
	padding-right:20px;
}

@media(max-width:767px){
	button.btn-filter{
		text-align:center;
		margin-right:0px;
	}
}

button.btn-filter .glyphicon-chevron-down{
	position:absolute;
	top: 18px;
	right: 0px;
	font-size: 13px;
}
@media(max-width:767px){
	button.btn-filter .glyphicon-chevron-down{
		right:30px;
	}
}
button.btn-filter:hover,.btn-filter:active,.btn-filter:focus{
	border:none;
	 color: #4b4b4b;
	background-color:transparent;

}

.btn.orange {
	display: block;
	position: absolute;
	color: #eb690b;
	opacity: 1;
	padding:0px;
	right:18px;
}
.search-result{

}




div > .nav-tabs{
	border:none;
}
.col-sm-16 .tab-panel .nav-tabs{
    border-bottom: 1px solid #dddddd;
}

.cart-link{
	background:transparent;
	border:1px solid transparent;
	font-size:18px;
	border-radius:3px;
	padding:10px 15px;

}
.btn-danger{
	margin-bottom: 0px;
	position:relative;
	padding:10px 15px;
	border: 1px solid #ccc;
	background: #eee;
	color: #8c8c8c;

}
.product .btn-danger{
	margin-bottom: 0px;
	position:relative;
	padding:10px 15px;
	position:absolute;
	right:5px;
	width:45px;
	height:40px;
	border: 1px solid #ccc;
	background: #eee;
	color: #8c8c8c;


}


.btn-success{
	position: absolute;
	right: 5px;
	width: 45px;
	height: 40px;

}

.btn-success.cart-link-sucess{
	font-size:18px;
	border-radius:3px;
	padding:0px 6px;
	position: absolute;
	top: 3px;
	display:block;
	right:1px;
	width:55px;
	height:45px;

}
.my-cart-white{
	background-image:url('/assets/images/icon-cart-white.svg');
	height:40px;
	width:40px;
	display:block;
	position:relative;
	right:-1px;
}
.my-cart-blue{
	background-image:url('/assets/images/icon-cart-blue.svg');
	height:40px;
	width:40px;
	display:block;
	position:relative;
	right:-1px;
}

.shop-items .btn-success.cart-link-sucess{
	top: -11px;
}
.shop-items .cart-link.orange .my-cart{
	top:-8px;
}


@media(max-width:768px){
	.cafe .btn-success.cart-link-sucess {

	}
}
@media(max-width:400px){
	.cafe .btn-success.cart-link-sucess {
		position:relative;
	}
}
@media(max-width:360px){
	.cafe .btn-success.cart-link-sucess {
		position:absolute;
	}
}

.cart-link .cart-icon{
	font-size:22px;
}

.cart-link.orange .my-cart{
	display:block;
	position: absolute;
	color: #eb690b;
	opacity: 1;
	right: -8px;
	top: -8px;
}

.cafe .cart-link.orange .my-cart{
	top: 5px;
}

.movie_button_link .orange .my-cart{
	display:block;
	position: relative;
	color:#eb690b;
	opacity:1;
}

.panel-footer .eye-icon {
	position:absolute;
	top:26px;
	right:4px;

}
.panel-footer .eye-icon .glyphicon-eye-open{
	color:#00458f;
	background-color:transparent;
}

.panel-footer .movie_button_link .orange .my-cart{
	font-size:22px;
	display:block;
}
.panel-footer .movie_button_link:hover{
	border:1px solid #fff;
	border-radius:3px;

}
.product .btn:focus, .product .btn:active:focus{
	outline-color:#fff;
}
/*
.panel-footer .movie_button_link:hover{
	border:none;
}
*/
.welcome .col-md-4{
	width:33.333%;
}

.home_box2{

}

.hand-sub-msg {
	font-family:"HandWriting", Arial, sans-serif;
	font-size:14px;
	padding-top:10px;
}


@media(max-width:1024px) and (min-width: 768px){
	.welcome .col-sm-4{
		width:33.333%;
	}
}
@media(max-width:600px){
	.welcome .col-md-4{
		width:100%;
	}
}

.welcome .product{
	background-color:transparent;
	margin-bottom:25px;
}

@media(max-width:1024px) and (min-width:769px){
	.welcome .product{
		background-color:transparent;
		margin-bottom:25px;
	}

}
@media(max-width:400px) and (min-width:320px){
	.welcome .col-md-4:first-child .product{
		margin-bottom:0px;
		margin-top:20px;
	}
	.welcome .product{
		margin-bottom:0px;
		margin-top:20px;
	}

}


@media(max-width:1023px) and (min-width:435px){
	.col-sm-4.portrait-tile-override{
		width:33.333%;
	}
}
#movie_trailer_{
	background-color: black;
}

a.search_tile .product.click_animation{
	opacity: 1;
}

a.search_tile{
	display: block;
	float: left;
	height: 100%;
	width: 100%;
	opacity: 1;
}

.no_click{
	pointer-events: none;
}

.block{
	display: block;
}

.click_animation:not(:active){
	transition: all 1000ms ease;
	-o-transition: all 1000ms ease;
	-moz-transition: all 1000ms ease;
	-webkit-transition: all 1000ms ease;
}
.click_animation:active{
	transition: none;
	-o-transition: none;
	-moz-transition: none;
	-webkit-transition: none;
    	opacity: 0.5;
}

.remove-btn{
	background-color: #d9534f;
	padding: 10px 12px !important;
	line-height: normal !important;
}
.remove-btn .glyphicon{
	font-size: 1.4em;
}



.search-result .description h3{
	margin-top:0px;
	margin-bottom: 5px;
	min-height:50px;
}

@media (max-width: 992px) {
	.search-result .panel-footer{
		padding-right: 7px;
		padding-left: 7px;
	}
}

p{
	text-align: justify;
}
body.noheader {
	padding-top: 0;
}
body.noheader .nav-header{
	margin-top: 0;
	position: relative;
}
.margin-top{
	margin-top: 10px;
}
.margin-top-large{
	margin-top: 20px;
}
.margin-message{
	margin:10px 0px 20px 0px;
}
.margin-large{
	margin: 20px 0px;
}
.margin-bottom{
	margin-bottom: 10px;
}
.width_100{
	width: 100%;
}
.max_100{
	max-width: 100%;
}
.second_header .navbar-header .navbar-brand2 h3 {
	white-space: nowrap;
}
.second_header .navbar-header .navbar-brand2 h3 br{
	display: none;
}
.alert-block {
  text-align: center;
  margin-top:25px;
  margin-bottom:0 !important;
}
.no-border{
	border: none !important;
}

.help-block.form-error {
  color:#a94442;
}
.sm_checkout_title {
	line-height: 1.3em;
	max-height: 2.3em;
  	overflow: hidden;
  	text-align: left;
	margin-bottom:0px;
}
.basket-dropdown .price{
	font-size:14px;
	margin-top:0px;
}
.basket-dropdown .glyphicon{
	left:-2px;
	top:-3px;
}
.basket-dropdown a.btn.btn-danger.btn-sm.pull-right{
	height:40px;
	width:40px;
}
.title_breadcrumb{
	line-height: 64px;
}
.thumbs{
	margin:10px auto 35px;
	text-align:center;
}

.thumbs a{
	display:inline-block;
	box-shadow:0 1px 3px rgba(0,0,0,0.5);
	border-radius:4px;
	margin: 6px 6px 40px;
	position:relative;
	text-decoration:none;
	background-position:center center;
	background-repeat: no-repeat;
	background-size:cover;
	-moz-background-size:cover;
	-webkit-background-size:cover;
}

.thumbs a:after{
	background-color: #303030;
    border-radius: 7px;
    bottom: -136px;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    color: #FFFFFF;
    content: attr(title);
    display: inline-block;
    font-size: 10px;
    max-width: 90px;
    overflow: hidden;
    padding: 2px 10px;
    position: relative;
    text-align: center;
    white-space: nowrap;
}

#credit{
	background-color: rgba(255, 255, 255, 0.2);
	border-radius: 8px;
	font-size: 11px;
	margin: 0 auto 70px;
	opacity: 0.5;
	padding: 12px 16px;
	text-align: center;
	width: 400px;
}

@media screen and (max-width: 960px) {
	.thumbs, #credit{
		width:auto;
	}
	footer{
		display:none;
	}
	#bsaHolder{
		display:none;
	}
}

.city_image {
  height: 300px;
}

.responsive_img {
  width: 100%;
  overflow: hidden;
}

.responsive_img img {
    position: absolute;
	max-height: 250%;
	min-height: 100%;
	top: 50%;
	left: 50%;
	width: auto;
	margin: 0 auto;
	-moz-transform: translateX(-50%) translateY(-50%);
	-ms-transform: translateX(-50%) translateY(-50%);
	-webkit-transform: translateX(-50%) translateY(-50%);
	transform: translateX(-50%) translateY(-50%);
}

.spot_preview .responsive_img {
	height: 205px;
}

#lw_search .city {
	cursor: pointer;
}

#lw_search .city .responsive_img {
	height: 100%;
}

.qty_input{
	max-width: 100px;
    margin-right: 4px;
    float: left;
}

.city-overview {
	position: relative;
}

.city-overview .panel-footer {
	position: absolute;
	bottom:0;
	width: 100%;
}

.custom-search-form{
	background-color: transparent;
}

@media (max-width: 768px) {
	.city-overview .panel-footer {
		display: none;
	}
}

.well p, .well h1 {
	padding: 7px 0px 0px 0px;
}
.nav-header {
	margin-top: 20px;
}
.text-uppercase {
	text-transform: uppercase;
}
.activities {
	background-image: url(<?=$config['site']['asset']?><?=$WEB_MYTRIP_IMAGE?>);
	background-position: top center;
	background-repeat: no-repeat;
	background-color: #d0beb0;
}
.big-text {
	font-size: 60px
}
.margin-space {
	margin-bottom: 12px
}
.like_where_box {
	background-image: url(<?=$config['site']['asset']?><?=$WEB_LIKEWHERE_ICON?>);
	background-position: bottom right;
	background-repeat: no-repeat;
	background-color: transparent;
	padding: 20px;
	min-height: 220px
}
.magazines {
	background-image: url(<?=$config['site']['asset']?><?=$WEB_MAGAZINE_CARD?>);
	background-position: top center;
	background-repeat: no-repeat;
	background-color: #FFF;
	background-size: cover;
	background-position: top right;
}

@media (max-width: 768px){
	.magazines {
		background-image: url(<?=$config['site']['asset']?><?=$WEB_MAGAZINE_CARD_MOBILE?>);
		background-position: top right;
	}
}

.magazines h1, .magazines h4, .shopping h1, .shopping h4, .eat_drink h4{ }

.magazines h4,.shopping h4,.eat_drink h4{ margin-top:0; }


.magazines h1, .shopping h1{}

.shopping {
	background-image: url(<?=$config['site']['asset']?><?=$WEB_SHOPPING_CARD?>);
	background-position: top right;
	background-repeat: no-repeat;
}

.sun_world {
	background-image: url(<?=$WEB_WORLD_CARD_IMAGE?>);
	background-position: top right;
	background-repeat: no-repeat;
	background-color: #d2ebfb
}
.sun_world .title_cont{
	padding: 0px;
}
.title_cont{
	padding:10px;
	font-weight:400;
}

.destinations .title_cont{
	padding-left:5px;
}
.survey .title_cont{
	padding: 0px;
}


.home_box {
	height: 200px;
	padding: 3px 0px 10px
}
.home_box2 {
	height: 300px;
	border: 1px solid #CFCDCD;
	padding: 3px 0px 10px
}
.destination_img {
	background-image: url(/assets/images/discover_berlin.jpg);
	background-position: center;
	background-repeat: no-repeat;
	background-color: #FFF;
	position: relative;
}

.iKiosk_logo{
    max-width: 190px;
    margin-top: 20px;
}

.explore {
	background-image: url(<?=$config['site']['asset']?><?=$WEB_EXPLORE_CARD_IMAGE?>);
	background-position: right bottom;
	background-repeat: no-repeat;
	background-color: #F37020;
	padding-top: 10px;
	padding-left: 10px;
	padding-right: 10px;
	padding-bottom: 10px;
}
.explore.survey.product{
	position: relative;
}
.explore .button_cont{
	height: 35px;
	width: 100%;
	position: absolute;
	bottom: 10px;
	left: 10px;
	background-size: contain;
	background-position: left bottom;
	display: block;
	background-repeat: no-repeat;
	background-image:url('<?=$WEB_EXPLORE_CARD_BUTTON?>');
}
.explore.survey img.width_100{
	max-width: 240px;
    float: right;
    margin-top: 10px;
}




@media (max-width: 768px){
	.explore{
		background-image: url(<?=$config['site']['asset']?><?=$WEB_EXPLORE_CARD_IMAGE_MOBILE?>);
	}
	.explore .button_cont{
		background-image:url('<?=$WEB_EXPLORE_CARD_BUTTON_MOBILE?>');
	}
	.explore.survey img.width_100{
	    margin-top: 0;
	}
}

.explore h1 {
	letter-spacing: 5px;
}



.explore h4 {
	letter-spacing: 8px;
}
.explore.survey h2, .explore.survey h5{

}
.explore.survey .survey_button{
    background-color: #93c93d;
    position: absolute;
    bottom: 24px;
}

.light_text_shadow{
	text-shadow: 0 0 12px black;
}

.uppercase{
	text-transform:uppercase;
}
.home_box2 p {
	padding-left: 15px;
	padding-top: 15px;
}
.home_box2 h3 {
	font-size: 17px;
}
.img_space {
	margin-top: 10px
}

.age_restriction{
	margin-left: 10px;
    border-radius: 50%;
    color: white;
    height: 22px;
    font-weight: bold;
    width: 22px;
    display: inline-block;
    vertical-align: middle;
    line-height: 22px;
    text-align: center;
    font-size: 9px;
    background-color: #F56363;
}
.age_restriction_warning{
	color: #F56363;
	font-size: 0.8em;
}
.border-bottom{
	border-bottom: 1px solid #D4D4D4;
}
.border-top{
	border-top:1px solid #ccc;
}
.full-width{
	display: block;
	float: left;
	width: 100%;
}
.nav-sidebar {
	width: 100%;
	padding: 0;
	border-radius: 4px;
}
.nav-sidebar a {
	cursor: default;
	border-radius: 0;
	background-color: <?=$WEB_CATEGORY_NAV_BG?>;
	color: <?=$WEB_CATEGORY_TEXT?>;
	border-bottom: 1px solid rgba(128, 128, 128, 0.17);
	margin: 0;
}
.nav-sidebar .active a {
	cursor: default;
	background-color: <?=$WEB_CATEGORY_NAV_ACTIVE?>;
	color: <?=$WEB_CATEGORY_TEXT_ACTIVE?>;
}
.nav-sidebar li:first-child a {
	border-radius: 4px 4px 0 0;
}
.nav-sidebar li:last-child a {
	border-radius: 0 0 4px 4px;
}
.no-touch .nav-sidebar a:hover {
	background-color: <?=$WEB_CATEGORY_NAV_HOVER?>;
}
.no-touch .nav-sidebar .active a:hover {
	background-color: <?=$WEB_CATEGORY_NAV_ACTIVE?>;
}

.no-touch img.with_hover:hover {
	opacity: .6;
}
.btn-warning, .btn-danger, .btn-dark, .btn-black, .btn-success{
	font-size: 1.4rem;
	line-height: 1.5em;
	border-radius: 4px;

}

.btn-circle {
	width: 20px;
	height: 20px;
	text-align: center;
	padding: 6px 0;
	font-size: 12px !important;
	line-height: 0.42;
	border-radius: 15px;
}


.not-relative{
	position:inherit;
}
video{
   height:300px;
   width:100%;
}

.cart-item:first-child{
	display: block;
	position:relative;
}

.credit-card-icons{
	padding:20px 0px;
	margin-bottom:20px;
}
.credit-card-icons-details{
	border-bottom:1px solid #ccc;
}
.payment-section{
	padding:10px;

}
.secure-lock{
	padding-top:39px;
	text-align:right;
}
@media(max-width:767px){
	.secure-lock{
		text-align:left;
		padding-top:0px;
		padding-bottom:10px;
		padding-left:10px;
	}
}
.cart-item:last-child{
	display: block;
    	border-bottom: none;
	position:relative;
}
.order-history .cart-item:first-child{
	padding:10px 0px 20px 0px;
}
.order-history .cart-item:nth-last-child{
	padding:20px 0px 30px 0px;
	border-bottom: 1px solid transparent;
}
.order-history .movie-poster-2{
	background-color:#fff;
	padding:20px;
}
.cart-item{
	padding:20px 0px 30px 0px;
	display: block;
    	border-bottom: 1px solid #ccc;
	position:relative;
	min-height:155px;
}


.cart-item .movie-poster-2 .cart-thumb{
	height: auto;
	display: block;
	padding: 10px;
	background: #fff;
}
@media(max-width:500px){
	.cart-item .movie-poster-2 .cart-thumb{
		width:100%;
		height: auto;
	}
	.cart-item{
		text-align:center;
		padding:20px;
	}
}
.checkout-actions{
	margin:10px 0px;
}
.checkout-actions .btn-warning{
	width:100%;
}

.sub-total-row{
	padding:10px;
	color:#4b4b4b;
	border-bottom:1px solid #ccc;
	text-align:right;
}

.price-details{
	padding:10px 0px;
	font-size:20px;
}
.sub-total-row.one{
	border-top:1px solid #ccc;
	padding:10px 0px;
}

.sub-total-row.two{
	padding:10px 0px;
	padding-bottom:10px;
	border-top:1px solid #ccc;
}

.sub-total-row.four{
	padding:10px 0px;
	border-bottom:none;
}


.price_details{
	text-align:right;
}

.bottom-border{
	border-bottom:1px solid #ccc;
}
.sub-total-message{
	display:inline;
	font-size:18px;
	display:inline-block;
	margin:10px 0px;
}

.sub-total-margin{
	margin:10px 0px 20px 0px;
}
.order-total{
	display:block;
	padding-bottom:20px;
	text-align:right;
}
.thank-you{
	text-align:left;
}
@media(max-width:767px){
	.thank-you{
		text-align:center;
	}
}
@media(max-width:767px){
	.order-total{
		padding-top:20px;
		text-align:center;
	}
}

.order-total .sub-total-message, .order-total .price{
	display:inline;
}



.sub-total-message.xl, .price.xl{
	font-size:22px;
}
.sub-total-row .price{
	display:inline;
	font-size:1.7rem;
}
.no-padd{
	padding:0px;
}

.cart-item .action-item{
	position:absolute;

}
.modal-title{
	font-weight:700;
	text-align:center;
	color:#00458f;

}

@media(max-width:767px){
	.cart-view .modal-title{
		text-align:center;
		padding:10px 0px 0px 0px;
	}

}

@media(max-width:767px){
	.cart-item.digital .action-item,
	.cart-item.mag .action-item,
	.cart-item .action-item{
		position:relative;
		top:0px;
	}
	.cart-item .actions{
		margin:20px 0px 0px 0px;
	}
	.cart-item.digital .actions{
		margin:5px 0px 0px 0px;
	}
	.cart-item.mag .actions{
		margin:5px 0px 0px 0px;
	}
	.image-container{
		margin-bottom:10px;
	}
}
.cart-item .price{
	margin-top:0px;
}
.quantity{
	text-align:right;
}
.cart-item .title{
	font-size:1.8rem;
	display: block;
}
@media(max-width:600px){
	.marg-10px{
		margin:10px 0px;
	}
}

.cart-item .cart-thumb{
	width:110px;
	height:100%;
	display:block;
}
@media(max-width:768px){
	.cart-item{
		text-align: center;
	}

	.cart-item .cart-thumb{
		width:100%;
		height:100%;
		display:block;
	}

	.cart-item .price {
		margin-top: 20px
	}

	.cart-item .sub-heading {
		display: block;
		text-align: center;
		padding: 0;
	}


	.cart-item .image-container {
		text-align: -webkit-center;
	}

	.cart-item .cart-thumb {
		max-height: auto;
		max-width: 300px;
	}

	.cart-item .price.media-price {
		margin-top: 10px;
	}

.text-primary {
	text-align: left;
}



}
.quantity-control{
	position:relative;
	display:block;
}
.quantity-input{
	float:right;
}
.quantity-control.inner{
	float:left;
	padding-bottom:10px;
}
.quantity-input .input-sm{
	height:64px;
	background:#fff;
	width: 70%;
	text-align: center;
	padding-right: 20px;
}
.disabled-input .input-sm{
	height:50px;
	background-color:#fff;
	text-align: center;
}
.cart-item .quantity-input .input-sm{
	width: 56%;
}

.quantity-indicators{
	position: absolute;
	display: inline-block;
	background: #eb690b;
	padding: 32px 30px;
	right: 0px;
	border-radius: 0px 3px 3px 0px;
	font-size:16px;
}

.quantity-indicators .button-up{
	position: absolute;
	bottom: 33px;
	right: 22px;
	padding: 3px 15px;
	margin: -3px -15px;
	background-color: #eb690b;
	color: #fff;
	border:none;
	font-size:16px;
}
.quantity-indicators .button-down{
	background-color: #eb690b;
	color: #fff;
	position: absolute;
	top: 38px;
	right: 23px;
	border:none;
	padding: 3px 15px;
	margin: -4px -15px;
	font-size:16px;
}

@media(max-width:991px){
	.quantity-input .input-sm{
		width:60%;
		height:80px;
	}
	.quantity-indicators{
		padding: 40px 19px;
		font-size:16px;
	}
	.quantity-indicators .button-down{
		top: 47px;
		right: 30px;
		padding: 9px 12px;
		margin: -9px -32px;
	}
	.quantity-indicators .button-up{
		bottom: 46px;
		right: 30px;
		padding: 8px 12px;
		margin: -6px -32px;
	}
}




@media(max-width:767px){
	.quantity-input .input-sm{
		width:60%;
		height:80px;
	}
	.quantity-indicators{
		padding: 40px 40px;
		font-size:16px;
	}
	.quantity-indicators .button-down{
		top: 47px;
		right: 30px;
		padding: 9px 30px;
		margin: -9px -30px;
	}
	.quantity-indicators .button-up{
		bottom: 46px;
		right: 30px;
		padding: 10px 30px;
		margin: -10px -30px;
	}
}






.voucher-submit-btn{
	border-radius:3px;
	width:100%;
}


.voucher-alert{
	background-color:#dbedf7;
	border: 1px solid #79c7eb;
 	padding: 10px;
	margin:0px 0px 10px 0px;
	color:#00458f;
	text-align:left;
	border-radius:3px;
}

.voucher-container{
	display:block;
	margin:0px 0px 10px 0px;
	position:relative;
	min-height:40px;
}
.voucher-container .form-group{
	display:inline-block;
	width:70%;
	margin-bottom:0px;
	position:absolute;
	z-index:3;
	top:-4px;
}

.voucher-container .form-control{
	width:100%;
	display:inline-block;
	margin:10px 0px 0px 0px;
	height:43px;

}
.voucher-container .voucher-control{
	width:32%;
	display:inline-block;
	margin:10px 0px;
	position:absolute;
	right:0px;
	top:-4px;
	z-index:3;
}


.alert-info h3, .alert-info p, .alert-info h1 {
	padding-left: 10px;
	padding-top: 10px;
}
.crew {
	background-image: url(<?=$config['site']['asset']?><?=$WEB_CREW_IMAGE?>);
	background-position: top left;
	background-repeat: no-repeat;
	background-color: transparent;
	min-height: 230px;
}
.pay_voucher{
	position: relative;
	background-color: #fff;
	background-image: url(<?=$config['site']['asset']?><?=$WEB_VOUCHER_IMAGE?>);
	background-position: bottom left -40px;
	background-repeat: no-repeat;
	min-height: 230px;
}
.pay_card{
	position: relative;
	background-color: #fff;
	background-image: url(<?=$config['site']['asset']?><?=$WEB_CREDIT_CARD_IMAGE?>);
	background-position: bottom left;
	background-repeat: no-repeat;
	min-height: 230px;
}
.pay_voucher p, .pay_card p{
	margin-bottom: 20px;
}

@media all and (max-width: 550px){
	.pay_voucher{
		background-position: bottom left -166px;
	}
	.pay_card{
		background-position: bottom left -40px;
	}
}
/*News*/
.tab-content hr {
	margin: 7px 0;
	border-top: 1px solid #eeeeee;
}
.blue_hr {
	margin: 6px 0;
	border-top: 1px solid #00458f;
}
.margin-top {
	margin-top: 10px;
}
.margin-btm-20{
	margin-bottom:20px;
}
.no_margin {
	margin: 0px;
}
.no_padding {
	padding: 0px !important;
}
.small_text {
	font-size: 10px !important;
}
.Activities {
	font-size: 0;
	height: 20px;
	line-height: 0;
}
.activity_form {
	padding-left: 15px;
	padding-right: 5px;
	padding-top: 10px;
	padding-bottom: 10px;
}
.cartTableHeader {
	background: #EBEDEF !important;
}
tr.CartProduct {
	border-bottom: 1px solid #E7E9EC;
	background-color: #FFF;
}
.btn-black {
	background-color: #4b4b4b;
	color: #FFF;
}
.btn-purchased {
	background-color: #F48636;
	color: #FFF;
}
.no-touch .btn-purchased:hover {
	color: #FFF;
	border-color: #8E430D;
}
.btn-dark {
	background-color: #AAA8A8;
	color: #FFF;
}
.no-touch .btn-dark:hover, .btn-dark:focus, .btn-dark:active, .btn-dark.active, .no-touch .btn-black:hover, .btn-black:focus, .btn-black:active, .btn-dark.active, .open > .dropdown-toggle.btn-dark {
	color: #ffffff;
	background-color: #4B4947;
	border-color: #494847;
}
.dropdown_cont .thumbnail, .dropdown_cont .img-thumbnail {
	background-color:transparent;
}
.container-filter.dropdown{
	text-align:right;
}
@media(max-width:767px){
	.container-filter.dropdown{
		text-align:center;
	}
}
@media(max-width:768px){
	.dropdown_cont .media-body{
		color:#fff;
	}
}

/*destination panels*/
.destination_box {
	padding: 10px;
}
/*Video responsive*/
.video-container iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

.video-container{
	margin-top:20px;
}
.nav-margin {
	margin-top: 13px;
}

.welcome-message{
	margin-top:100px;
	padding-bottom:10px;
	border-bottom:1px solid #ccc;
	margin-bottom:40px;
	text-align:left;
}


.sun-express .message.sx{
	padding-right:10px;
}


.express_title, .express-title,.welcome-title{
	margin-top:5px;
	margin-bottom:15px;
}
@media(max-width:767px){
	.express-title{
		text-align:center;
	}
	.sun-express .message{
		padding-left:0px;
	}
}


.express-border{
	border-bottom:1px solid #ccc;
	padding-bottom:10px;
	margin-bottom:20px;
}
@media(max-width:767px){
	.express-border{
		padding:10px;
	}
}
.stat-number{
	color:#eb690b;
	display:block;
	font-size:26px;
	font-weight:700;
}
.stat-number-text{
	text-transform:uppercase;
	color:#eb690b;
	font-size:16px;
	display:block;
	padding-bottom:20px;
}

.sun-express .express-story{
	background-image:url('/assets/images/sxs-sxsworld-home-01.jpg');
	background-size:cover;
	background-position:center bottom;
	background-repeat:no-repeat;
	min-height: 180px;
}

.sun-express .express-suntimes{
	background-image:url('/assets/images/sxs-sxsworld-home-02.jpg');
	background-size:cover;
	background-position:center bottom;
	background-repeat:no-repeat;
	min-height: 180px;
}
.sun-express .express-survey{
	background-image:url('/assets/images/sxs-sxsworld-home-03.jpg');
	background-size:cover;
	background-position:center bottom;
	background-repeat:no-repeat;
	min-height: 180px;
}
.sun-express .express-social{
	background-image:url('/assets/images/sxs-sxsworld-home-04-alt.jpg');
	background-size:cover;
	background-position:center bottom;
	background-repeat:no-repeat;
	min-height: 180px;
}
.sun-express .express-quote{
	color:#eb690b;
	font-family:"HandWriting", Arial, sans-serif;
	font-size:14px;
	font-weight:light;
}
.sun-express .express-survey-inner{
	background-image:url('/assets/images/sxs-sxsworld-passenger-survey.jpg');
	background-size:contain;
	background-position:center bottom;
	background-repeat:no-repeat;
	min-height: 180px;
	background-color:#fff;
}

.express-survey-inner.blank{
	background: none !important;
}



.quote-before:before{
	content:"-";
	display:inline-block;
	color:#eb690b;
	position:relative;
}
@media(max-width:767px){

	.sun-express .express-quote{
		padding-left:6px;
	}
}


.twitter-block{
	background-color:#fff;
	padding:20px 20px 0px 20px;

}
.twitter-list{
	list-style:none;
	padding-left:0px;

}
.tweet{
	border-bottom:1px solid #ccc;
	padding:20px 0px;
}
.tweet:first-child{
	padding:4px 0px;
}
.tweet:last-child{
	border-bottom:none;
}
.tweet .foundicon-twitter{
	font-size:24px;
	position:absolute;
	top:4px;
}
.tweet .tweet-body{
	padding:0px 20px 0px 0px;
}

.tweet .link{
	display:block;
}

.twitter-date{
	color:#8c8c8c;
	display:block;
	font-style:italic;
	font-weight:100;
}

.insta-block{
	background-color:#fff;
	padding:20px 20px 20px 20px;

}
@media(max-width:786px){
	.insta-block{
		background-color:#fff;
		padding:20px 20px 20px 20px;

	}
}


.insta-block .insta-list{
	list-style:none;
	padding-left:0px;
}
.insta-list .insta-gram{
	margin-bottom:20px;
}
.insta-list .insta-gram:last-child{
	margin-bottom:0px;
}

@media (max-width:768px){
	.welcome-message{
		margin-top:50px;
	}
}
@media (max-width:767px){
	.welcome-message{
		text-align:center;
		margin-left:10px;
		margin-right:10px;
	}
}



span.welcome-text{
	font-size:28px;
	font-weight:600;
}


/* RSS */

.sun-express-rss{

}

.news_feed{
	background-image:url('/assets/images/sxs-home-rss-newsfeed.jpg');
	background-size:cover;
	background-repeat:no-repeat;
	min-height:90px;
}

.download_app_banner{
    margin-top: 25px;
    background-image:url('/assets/images/sxs-home-android-app-download.png');
    background-size:cover;
    background-repeat:no-repeat;
    min-height:90px;
}


.caption.news{
	position:absolute;
	top:10px;
	background-color:transparent;
	left:10px;
}

.download_app_banner .caption.news {
    top:35px;
}

@media(max-width:767px){
	.news_feed{
		min-height:110px;
	}
    .download_app_banner{
        min-height:110px;
    }

	.caption.news{
		padding:0px 30px 0px 0px;
	}
	.news-box{
		margin-top:0;
	}
}

.rss-item-main{
	border:1px solid #ccc;
	margin-bottom:12px;
	background-color:#fff;

}
.post{

}

.navbar-container-feed{
	background-color:#00458f;
	border-radius:0px;
	height:100%;
	padding:10px 0px;

}
.navbar-container-feed a{
	color:#fff;
}
@media(max-width:991px){
	.body_scroll_cont .navbar-header .navbar-toggle{
		top:8px;
	}
}
.navbar-container-feed .active a:after{
	content:"";
	color:#fff;
	margin-bottom:5px;
}

.navbar-container-feed .navbar-toggle .icon-bar{
	background-color:#fff;
}
.navbar-brand{
	padding:10px 0px;
}

.rss-item-main .content{
	line-height:1.5em;
	font-size:14px;
	height:105px;
	overflow:hidden;
	color:#4b4b4b;

}
.post_details .date{
	color:#4b4b4b;
	font-size:12px;
	display:inline;
}
.post_details .category{
	color:#eb690b;
	font-size:12px;
	display:inline;
}
.post_details .category:before{
	content:"|";
	display:inline;
	color:#4b4b4b;
	padding:0px 10px;
}
.latest-posts .caption{

	display:block;
	background-color:#fff;
	bottom:0px;
	padding:0px 10px;

}

.latest-posts{
	display:block;
	list-style:none;
	padding-left:0px;

}
.latest-posts > .col-sm-8:nth-child(3){
	clear:left
}
.latest-posts-slider{
	display:block;
	list-style:none;
	padding-left:0px;
	white-space:nowrap;
	overflow:scroll;
}
.latest-posts .post{
	display:inline-block;
}


.latest-posts .title{
	font-size:1.5rem;
	display:block;
	white-space:nowrap;
	text-overflow:ellipsis;
	overflow:hidden;
	width:100%;
	margin-top:10px;
}
.latest-posts .caption .title{

	width:220px;
	overflow:hidden;
}
.latest-posts-slider .caption .title{
	overflow:hidden;
}
.latest-posts .category:before{
	content:"|";
	display:inline;
	color:#4b4b4b;
	padding:0px 5px;
}
.latest-posts .news-item{
	border:1px solid #ccc;
	background-color:#fff;

}
.latest-post-image{
	display:block;

}
.latest-post-img .thumbnail-img{
	max-height:110px;
	display:block;
}

.latest-posts .controls{
	padding:20px;
	position:relative;
}
.carousel{
	white-space:nowrap;
}
.carousel-inner{
	display:block;
}
.carousel-inner > .item{
	display:inline-block;
}

.latest-posts .controls .carousel-control{
 top:20px;
}
.latest-posts .controls .left.carousel-control{

}
.latest-posts .controls .right.carousel-control{

}
.single-post .title{
	font-size:1.8em;
	color:#333;
	margin-bottom:0px;
}
.scroll-message{
	font-size:1.8rem;
	margin-bottom:20px;
}
.single-post .main-body{
	padding:10px 0px 10px 0px;
	margin-bottom:0px;
}
.single-post .post_details{
	font-size:1.8rem;
	padding: 20px 0px
}
.single-post .post_details .date{
	font-size:1.8rem;
}

.single-post .post_details .category{
	font-size:1.8rem;
}



/* Custom, iPhone Retina */
@media only screen and (max-width : 320px) {
	.news {
		background-color: #FFF;
		padding: 5px;
		min-height: 137px;
	}
	.home_box2 h1 {
		font-size: 30px;
		text-align:center;
		letter-spacing: 2px;

	}

	.home_box2 h3 {
		margin-top:10px;
		font-size: 12px;
		text-align:center;

	}

	.home_box2 h4 {
		text-align:center;
		 font-size:15px;
		 margin-top:30px;
		 margin-bottom:5px;
	}
	.wrap .desc {
		font-size: 9px;
		padding: 10px;
		opacity: 1;
		background-color: #00458f;
		display: block;
		position: absolute;
		width: 100%;
		top: 44%;
		left: 0;
		z-index: 2;
		text-align: center;
		font-weight: bold;
		letter-spacing: 2px;
	}
	.wide {
		margin-top: 50px;
		width: 100%;
		background-color: #333;
		background-size: cover;
		background-position: center;
		background-image: url(<?=$config['site']['asset']?><?=$WEB_WIDE_ACTIVITY_IMAGE?>);
	}
	.home_box2 {
		height: 200px !important;
		border: 1px solid #CFCDCD;
	}
}

@media (max-width: 319px) {
	.movie_img {
		 background-image: url(<?=$config['site']['asset']?><?=$WEB_MOVIES_CARD?>);
		background-position: left;
		background-repeat: no-repeat;
		background-color: #d2ebfb
	}
	
	.kids_img {
		background-position: left;
		background-repeat: no-repeat;
		background-color: #d2ebfb
	}

	.eat_drink h1 {

	}

	.eat_drink {
		background-image: url(<?=$WEB_EAT_DRINK_CARD?>);
		background-repeat: no-repeat;
		background-color: #a7b0b7;
	}
}

@media all and (max-width: 450px) and (min-width: 320px) {

	.movie_img {
		 background-image: url(<?=$config['site']['asset']?><?=$WEB_MOVIES_CARD?>);
		background-position: left;
		background-repeat: no-repeat;
		background-color: #d2ebfb
	}
	.kids_img {
		background-position: left;
		background-repeat: no-repeat;
		background-color: #d2ebfb
	}
	.eat_drink h1 {

	}
	.eat_drink {
		background-image: url(<?=$WEB_EAT_DRINK_CARD?>);
		background-repeat: no-repeat;
		background-position:center right;
		background-color: #a7b0b7;
	}
	.news {
		background-color: #FFF;
		padding: 5px;
		min-height: 115px;
	}
	.home_box2 h1 {
		font-size: 30px;
		text-align:center;
		letter-spacing: 2px;

	}
	.home_box2 h3 {
		margin-top:10px;
		font-size: 12px;
		text-align:center;

	}
	.home_box2 h4 {
		text-align:center;
		font-size:15px;
		margin-top:30px;
		margin-bottom:5px;
	}
	.home_box2 {
		height: 200px;
		border: 1px solid #CFCDCD;
	}
	h1.activity {
		font-size: 40px;
		font-weight: bold;
		letter-spacing: 6px;
		padding-top: 30px;
	}
	h2.activity {
		font-size: 20px;
		padding-bottom: 30px;
	}
	.wrap .desc {
		font-size: 10px;
		padding-top: 12px;
		padding-right: 12px;
		padding-left: 12px;
		padding-bottom: 25px;
		opacity: 0.9;
		background-color: #00458f;
		display: block;
		position: absolute;
		width: 100%;
		top: 53%;
		left: 0;
		z-index: 2;
		text-align: center;
		font-weight: bold;
		letter-spacing: 2px;
	}
	.wrap .icon {
		font-size: 46px;
		padding: 8px;
		opacity: 1.0;
		display: block;
		position: absolute;
		width: 100%;
		top: 20%;
		left: 0;
		z-index: 2;
		text-align: center;
	}
}

@media all and (max-width: 550px) and (min-width: 450px) {
	.movie_img {
		background-image: url(<?=$config['site']['asset']?><?=$WEB_MOVIES_CARD?>);
		background-position: left;
		background-repeat: no-repeat;
		background-color: #d2ebfb
	}
	.kids_img {
		background-position: left;
		background-repeat: no-repeat;
		background-color: #d2ebfb
	}
	.eat_drink h1 {

	}
	.eat_drink {
		background-image: url(<?=$WEB_EAT_DRINK_CARD?>);
		background-repeat: no-repeat;
		background-color: #a7b0b7;
	}
	.news {
		background-color: #FFF;
		padding: 5px;
		min-height: 100px;
	}
	.home_box2 h1 {
		font-size: 40px;
		text-align:center;
		letter-spacing: 4px;

	}
	.home_box2 h3 {
		margin-top:10px;
		font-size: 12px;
		text-align:center;

	}
	.home_box2 h4 {
		text-align:center;
		 font-size:20px;
		 margin-top:45px;
		 margin-bottom:5px;
	}
	h1.activity {
		font-size: 40px;
		font-weight: bold;
		letter-spacing: 6px;
		padding-top: 30px;
	}
	h2.activity {
		font-size: 30px;
		padding-bottom: 30px;
	}
	.wrap .desc {
		font-size: 17px;
		padding-top: 15px;
		padding-right: 15px;
		padding-left: 15px;
		padding-bottom: 30px;
		opacity: 1;
		background-color: #00458f;
		display: block;
		position: absolute;
		width: 100%;
		top: 59%;
		left: 0;
		z-index: 2;
		text-align: center;
		font-weight: bold;
		letter-spacing: 2px;
	}
	.wrap .icon {
		font-size: 46px;
		padding: 8px;
		opacity: 1.0;
		display: block;
		position: absolute;
		width: 100%;
		top: 20%;
		left: 0;
		z-index: 2;
		text-align: center;
	}
}

@media all and (max-width: 767px) and (min-width: 550px) {
	.movie_img {
		 background-image: url(<?=$config['site']['asset']?><?=$WEB_MOVIES_CARD?>);
		background-position: left;
		background-repeat: no-repeat;
		background-color: #FFF;
	}
	
	.kids_img {
		background-position: left;
		background-repeat: no-repeat;
		background-color: #FFF;
	}
	.eat_drink h1 {

	}
	.eat_drink {
		background-image: url(<?=$WEB_EAT_DRINK_CARD?>);
		background-repeat: no-repeat;
		background-color: #a7b0b7;
		background-size: cover;
	}
	.news {
		background-color: #FFF;
		padding: 5px;
		min-height: 80px;
	}
	.home_box2 h1 {
		font-size: 40px;
		text-align:center;
		letter-spacing: 4px;

	}
	.home_box2 h3 {
		margin-top:10px;
		font-size: 12px;
		text-align:center;

	}
	.home_box2 h4 {
		text-align:center;
		font-size:20px;
		margin-top:50px;
		margin-bottom:5px;
	}
	.wrap .desc {
		font-size: 25px;
		padding-top: 22px;
		padding-right: 30px;
		padding-left: 30px;
		padding-bottom: 35px;
		opacity: 1;
		background-color: #00458f;
		display: block;
		position: absolute;
		width: 100%;
		top: 63%;
		left: 0;
		z-index: 2;
		text-align: center;
		font-weight: bold;
		letter-spacing: 2px;
	}
	.wrap .icon {
		font-size: 88px;
		padding: 8px;
		opacity: 1.0;
		display: block;
		position: absolute;
		width: 100%;
		top: 20%;
		left: 0;
		z-index: 2;
		text-align: center;
	}
}

@media only screen and (max-width : 767px) {
	.book-activity {
		margin-top: -10px;
	}
	.wide {
		margin-top: 20px;
		width: 100%;
		background-color: transparent;
		background-size: cover;
		background-position: center;
		background-image: none;
	}
	h1.activity {
		font-size: 40px;
		font-weight: bold;
		letter-spacing: 6px;
		padding-top: 30px;
	}
	h2.activity {
		font-size: 25px;
		padding-bottom: 30px;
	}
	.home_box2 {
		height: 200px !important;
		border: 1px solid #CFCDCD;
	}
	.destination_img h4, .destination_img h1{
		padding-left: 10px;
	}
}

.movie_img {
	position: relative;
 background-image: url(<?=$config['site']['asset']?><?=$WEB_MOVIE_IMAGE?>);
}

.movie_img .movies_text {
	position: relative;
	z-index: 2;
}

.movie_img {
	position: relative;
 background-image: url(<?=$config['site']['asset']?><?=$WEB_MOVIE_IMAGE?>);
}

.movie_img .movies_text {
	position: relative;
	z-index: 2;
}

.movie_img .movie_card_details{
	position: absolute;
	bottom: 0;
	right: 0;
	left: 0;
	color: #fff;
	margin: 0;
	line-height: 35px;
	padding-left: 10px;
	text-shadow: 0 0 17px black;
	background: -moz-linear-gradient(left,  rgba(39,39,39,0.5) 0%, rgba(125,185,232,0) 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(left,  rgba(39,39,39,0.5) 0%,rgba(125,185,232,0) 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to right,  rgba(39,39,39,0.5) 0%,rgba(125,185,232,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#272727', endColorstr='#007db9e8',GradientType=1 ); /* IE6-9 */
}







.kids_img {
	position: relative;
 background-image: url(<?=$config['site']['asset']?><?=$WEB_KIDS_IMAGE?>);
}

.kids_img .kids_text {
	position: relative;
	z-index: 2;
}

.kids_img {
	position: relative;
 background-image: url(<?=$config['site']['asset']?><?=$WEB_KIDS_IMAGE?>);
}

.kids_img .movies_text {
	position: relative;
	z-index: 2;
}

.kids_img .movie_card_details{
	position: absolute;
	bottom: 0;
	right: 0;
	left: 0;
	color: #fff;
	margin: 0;
	line-height: 35px;
	padding-left: 10px;
	text-shadow: 0 0 17px black;
	background: -moz-linear-gradient(left,  rgba(39,39,39,0.5) 0%, rgba(125,185,232,0) 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(left,  rgba(39,39,39,0.5) 0%,rgba(125,185,232,0) 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to right,  rgba(39,39,39,0.5) 0%,rgba(125,185,232,0) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#272727', endColorstr='#007db9e8',GradientType=1 ); /* IE6-9 */
}




.offer_badge{
	position: absolute;
	bottom: 5px;
	right: 5px;
	height: 100px;
	width: 100px;
	background-position: center;
	background-size: contain;
	background-repeat: no-repeat;
	background-image: url('/assets/images/sticker_badge.png');
	text-align: center;
	display: none;
	line-height: 80px;
	z-index: 3;
}
.offer_badge span{
	margin-left: -4px;
	vertical-align: middle;
	line-height: normal;
	display: none;
	color: #fff;
}
.offer_badge span b{
	font-size: 2em;
}

.search_tile .well{
	min-height: 100%;
}
.search_tile .product .panel-footer .description{
	    min-height: 32px;
}
.pagination .text-success{
	color:#00458f;
}
.search_tile .image{
	height:260px;
}


@media(min-width:1100px){
	.search_tile .image{
		height:300px;
	}
}

@media(max-width:768px){
	.search_tile .product .image{
		height:280px;
	}

    .download_app_banner{
        background-position-x: -240px;
    }
}
@media(max-width:767px) and (min-width:599px){
	.search_tile .product .image{
		height:220px;
	}
}
@media(max-width:598px){
	.search_tile .product .image{
		height:500px;
	}
	.search_tile .well{

	}
}
@media(max-width:420px) and (min-width:370px){
	.search_tile .product .image{
		height:460px;
	}
	.search_tile .well{

	}
}
@media(max-width:320px){
	.search_tile .product .image{
		height:400px;
	}
}
.search_tile .thumbnail{
	position:absolute;
	bottom:0px;
	padding:0px;
	left:0px;
	right:0px;
}
@media(max-width:768px){
	.search_tile .thumbnail{
		position:relative;
		bottom:0px;
	}
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    /* display: none; */
    -webkit-appearance: none;
    margin: 0;
}


@media(min-width:768px) {
	.movie_img {
		 background-image: url(<?=$config['site']['asset']?><?=$WEB_MOVIE_IMAGE?>);
		background-position: left;
		background-repeat: no-repeat;
		background-color: #d2ebfb
	}
	
	.kids_img {
		 background-image: url(<?=$config['site']['asset']?><?=$WEB_KIDS_IMAGE?>);
		background-position: left;
		background-repeat: no-repeat;
		background-color: #d2ebfb
	}
	.eat_drink h1 {

	}
	.eat_drink {
		background-image: url(<?=$WEB_EAT_DRINK_CARD?>);
		background-position: top right;
		background-repeat: no-repeat;
		background-color: #a7b0b7;
	}
	.home_box2 h1 {
		font-size: 40px;
		text-align:left;
		letter-spacing: 4px;
		margin-left:20px;

	}
	.home_box2 h3 {
		margin-top:10px;
		font-size: 12px;
		text-align:left;
		margin-left:20px;

	}
	.home_box2 h4 {
		text-align:left;
		margin-top:0;
		margin-left:0px;
		padding-left: 15px;
	}
	.news {
		background-color: #FFF;
		padding: 5px;
		min-height: 100px;
	}
	h1.activity {
		font-size: 50px;
		font-weight: bold;
		letter-spacing: 6px;
		padding-top: 30px;
	}
	h2.activity {
		font-size: 30px;
		padding-bottom: 30px;
	}
	.wrap .desc {
		padding: 22px;
		opacity: 1.0;
		background-color: #00458f;
		display: block;
		position: absolute;
		width: 100%;
		top: 67%;
		left: 0;
		z-index: 2;
		text-align: center;
		font-weight: bold;
		letter-spacing: 2px;
		font-size: 30px;
	}
	.wrap .icon {
		font-size: 110px;
		padding: 8px;
		opacity: 1.0;
		display: block;
		position: absolute;
		width: 100%;
		top: 20%;
		left: 0;
		z-index: 2;
		text-align: center;
		text-shadow: 3px 3px 2px rgba(150, 150, 150, 0.54);
	}
	.home_box2 {
		height: 235px;
		border: 1px solid #CFCDCD;
	}
}

@media(min-width:992px) {
	.movie_img {
		 background-image: url(<?=$config['site']['asset']?><?=$WEB_MOVIE_IMAGE?>);
		background-position: left;
		background-repeat: no-repeat;
		background-color: #d2ebfb
	}
	.kids_img {
		 background-image: url(<?=$config['site']['asset']?><?=$WEB_KIDS_IMAGE?>);
		background-position: left;
		background-repeat: no-repeat;
		background-color: #d2ebfb
	}
	.eat_drink h1 {

	}
	.eat_drink {
		background-image: url(<?=$WEB_EAT_DRINK_LARGE_CARD?>);
		background-position: top right;
		background-repeat: no-repeat;
		background-color: #a7b0b7;
	}
	.home_box2 h1 {
		font-size: 47px;
	}
	.book-activity {
		margin-top: 30px;
	}
	.wide {
		margin-top: 50px;
		width: 100%;
		height: 350px;
		background-color: #333;
		background-size: cover;
		background-position: center;
		background-image: url(<?=$config['site']['asset']?><?=$WEB_WIDE_ACTIVITY_IMAGE?>);
	}
	.news {
		background-color: #FFF;
		padding: 5px;
		min-height: 80px;
	}
	.wrap .desc {
		padding: 8px;
		opacity: 0.8;
		background-color: #00458f;
		display: block;
		position: absolute;
		width: 100%;
		top: 68%;
		left: 0;
		z-index: 2;
		text-align: center;
		font-weight: bold;
		letter-spacing: 2px;
		font-size: 20px;
	}
	.wrap .icon {
		font-size: 90px;
		padding: 8px;
		display: block;
		position: absolute;
		width: 100%;
		top: 14%;
		left: 0;
		z-index: 2;
		text-align: center;
		text-shadow: 2px 2px 2px rgba(150, 150, 150, 1);
	}
	.home_box2 {
		height: 300px;
		border: 1px solid #CFCDCD;
	}
}

@media(min-width:1200px) {
	.movie_img {
		 background-image: url(<?=$config['site']['asset']?><?=$WEB_MOVIE_IMAGE?>);
		background-position: left;
		background-repeat: no-repeat;
		background-color: #d2ebfb
	}
	
	.kids_img {
		 background-image: url(<?=$config['site']['asset']?><?=$WEB_KIDS_IMAGE?>);
		background-position: left;
		background-repeat: no-repeat;
		background-color: #d2ebfb
	}
	.home_box2 h4 {
		text-align:left;
		margin-top:5px;
		margin-left:0px;
		padding-left: 15px;
	}
	.home_box2 h1 {
		font-size: 50px;
		 text-align:left;
		  margin-left:20px;
	}
	.home_box2 h3 {
		margin-top:5px;
		font-size: 15px;
		 text-align:left;
		  margin-left:20px;
	}
	.explore h1 {
		letter-spacing: 5px;
	}
	.explore h3 {
		letter-spacing: 3px;
	}
	.explore h4 {
		letter-spacing: 8px;
	}
	.home_box2 {
		height: 300px;
		border: 1px solid #CFCDCD;
	}
	.book-activity {
		margin-top: 70px;
	}
	.wide {
		margin-top: 50px;
		width: 100%;
		height: 465px;
		background-color: #333;
		background-size: cover;
		background-image: url(<?=$config['site']['asset']?><?=$WEB_WIDE_ACTIVITY_IMAGE?>);
		background-position: center;
	}
	.wrap .desc {
		padding: 20px;
		opacity: 0.8;
		background-color: #00458f;
		display: block;
		position: absolute;
		width: 100%;
		top: 63%;
		left: 0;
		z-index: 2;
		text-align: center;
		font-weight: bold;
		letter-spacing: 2px;
		font-size: 20px;
	}
	h1.activity {
		font-size: 70px;
		font-weight: bold;
		letter-spacing: 6px;
		padding-top: 50px;
	}
	h2.activity {
		font-size: 40px;
		padding-bottom: 30px;
	}
}
.clearfix {
	clear: both;
}
.wrap {
	/* force the div to properly contain the floated images: */
	position: relative;
	clear: none;
	overflow: hidden;
}
.wrap img {
	position: relative;
	z-index: 1;
}
.margin-activity {
	margin-bottom: 30px;
}
.filter-results {
	padding-top: 15px;
	padding-right: 20px;
	padding-left: 20px;
	padding-bottom: 10px;
}
.tags {
	padding: 2px 5px;
	font-size: 20px;
	text-transform: uppercase;
	display: inline-block;
	margin-bottom: 0;
	font-weight: normal;
	text-align: center;
	vertical-align: middle;
	cursor: pointer;
	background-image: none;
	border: 1px solid transparent;
	white-space: nowrap;
	line-height: 1.42857143;
	border-radius: 0px;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
}
.best-for-icon {
	font-size: 34px !important;
}
.no-border {
	border: none;
}

/* DEMO ONLY - REMOVES UNWANTED MARGIN */
.well .list-group {
	margin-bottom: 0px;
}
.collapse-left {
	border-right-style: none;
	border-left-color: #E4E4E4 !important;
	border-left-width: 1px;
}
.collapse-right {
	border-left-style: none;
	border-right-color: #E4E4E4 !important;
	border-right-width: 1px;
}
.collapse-left, .collapse-right {
	border-bottom-style: none;
	border-top-style: none;
}

.item {
    display: block;
    transition: all 0.3s ease 0s;
    position:relative;
}
.portrait-tile-override{
	margin-top:12px;
}



.welcome .product {
	border: 1px solid transparent;
	transition: all 1.0s ease 0s;
	border-radius: 0;
	min-height:240px;
	background-size:cover;

}
@media(max-width:768px){
	.welcome .product{
		min-height:180px;
	}
}


.image-holder{
	display:block;
	background-color:#fff;
	position:relative;
	min-height:350px;
}
.image-holder-2{
	display:block;
	background-color:#fff;
	position:relative;
	min-height:350px;
	padding:20px;
}

.image-holder .item-image{
	position:absolute;
	top:10%;
	left:0px;
	right:0px;
}

@media(max-width:400px){
	.image-holder{
		margin-bottom:40px;
		min-height:240px;
	}
	.center-mob{
		margin:0 auto;
	}
}
.prod-image{
	position:absolute;
	top:50px;
}

.product {
	border: 1px solid transparent;
	transition: all 1.0s ease 0s;
	border-radius: 0;
	height:100%;
	padding:10px 10px 15px 10px;
}
@media(max-width:767px){
	.prod-image{
		top:10px;
	}

}
.product.item {
	border: 1px solid transparent;
	transition: all 1.0s ease 0s;
	border-radius: 0;
}


.product.item.cafe{
	height:100%;
	min-height:100%;
}

@media(max-width:1024px) and (min-width:768px){
	.product.item.cafe{

	}
}


.col-md-4:nth-child(5) .product,.col-md-4:nth-child(9) .product,
.col-md-4:nth-child(13) .product,.col-md-4:nth-child(17) .product{

}
.product.movie {
	padding:15px 15px 10px 15px;
}

.col-md-4:first-child .product{

}
@media(max-width:768px){
	.product{

		padding:10px 10px 15px 10px;
	}
}


@media(max-width:767px){
	.product,.col-md-4:nth-child(5) .product,.col-md-4:nth-child(9) .product,
	.col-md-4:nth-child(13) .product,.col-md-4:nth-child(17) .product{



	}

}
@media(min-width:420px) and (max-width:768px){
	.col-md-4:nth-child(4),.col-md-4:nth-child(10) ,
	.col-md-4:nth-child(13),.col-md-4:nth-child(19){
		clear:left;
	}
}
@media(max-width:419px){
	.col-md-4:nth-child(4),.col-md-4:nth-child(9) ,
	.col-md-4:nth-child(13),.col-md-4:nth-child(17){
		clear:right;
	}
}

@media(max-width:420px){
	.col-md-4:first-child .product{
		margin:0px;
	}
}

@media(max-width:768px){
	.portrait-tile-override .margin-space.product {
		margin:0px 0px 10px 0px;
	}

}

.panel-footer{
	height:100%;
	min-height:100%;
}

.product .panel-footer{
	border-radius:0px;
	border-color:transparent;
	text-align:left;
	padding:10px 0px 0px 0px;
}
.product.mag-item .image{
	height:277px;
}


.product.item .image{
	height:310px;
}
@media(min-width:1200px){
	.product.mag-item .image{
		height:340px;
	}
}
@media(max-width:1024px){
	.product.item .image{
		height:240px;
	}
	.product.item{

	}
	.product.mag-item .image{
		height:260px;
	}
}
@media(max-width:768px){

}

@media(max-width:767px){
	.product.item .image{
		height:270px;
	}


	.product.item.cafe{
		padding:10px 10px 15px 10px;
	}

}

@media(max-width:647px) and (min-width:435px){
	.product.mag-item .image, .product .image{
		height:170px;
	}

}




@media(max-width:767px) and (min-width:500px){

	.product.item{
		min-height:310px;
	}
	.product.item .image{
		height:160px;
	}

	.product.item.magazine{
		min-height:330px;
	}
	.product.item.magazine .image{
		height:185px;
	}
}
@media(max-width:499px){
	.product.item .image{
		height:350px;
	}
	.product.item{
		min-height:330px;
	}
	.product.mag-item .image{
		height:380px;
	}


}
@media(max-width:425px) and (min-width:376px){
	.product.mag-item .image{
		height:420px;
	}
	.product.item .image{
		height:400px;
	}
}

@media(max-width:320px){
	.product.item .image{
		height:300px;
	}

	.product.item{
		min-height:300px;
	}
	.product.mag-item .image{
		height:305px;
	}
	.cafe .btn-success.cart-link-sucess{

	}
}
.product .movie-title{
	min-height:100px;
	display:block;
}
.movie-title h2{
	font-weight:700;

}


.image {
    display: block;
    overflow: hidden;
    position: relative;
    text-align: center;
    transition: all 0.5s ease 0s;
    width: 100%;
}
.image a.img {
    display: block;
    overflow: hidden;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    transition: all 0.5s ease 0s;
    cursor:pointer;
}
.image a.img.cover {
	background-size: cover;
}
.image a.missing_img{
	opacity: 0.3;
	background-color: #E0007A;
}
.no-touch .product .panel-body:hover .image a.img{
    transform: scale(1.1) rotate(-1.5deg);
	opacity: 0.3;
}
.no-touch .product .panel-body:hover .image a.missing_img{
	opacity: 0.1;
}
.new {
    background: none repeat scroll 0 0 #00458f;
    border-radius: 0 4px 4px 0;
    color: #ffffff;
    display: inline-block;
    float: left;

    font-size: 16px;
    font-weight: lighter;
    height: 100%;
    padding: 3px 5px;
}
.item h4 {
    display: block;
    line-height: 20px;
    overflow: hidden;
    padding: 0;
    margin-top:20px;
}
.item h4 a {
    color: #2c3e50;

    font-weight: 600;
    text-decoration: none;
    text-transform: uppercase;
}

.price {
    color:#eb690b;
    font-size: 16px;
    font-weight: 400;
    margin-bottom: 0;
    margin-top:5px;
    display:block;
    text-transform:uppercase;
}

div.quickview {
    display: block;
    margin-top: 40%;
    max-height: 50px;
    position: absolute;
    text-align: center;
    visibility: hidden;
    width: 100%;
    z-index: 2;
}
.no-touch .product .panel-body:hover div.quickview {
    visibility: visible;
}
.btn-quickview {
  	background: none repeat scroll 0 0 rgba(75,75,75,0.95);
	border: 1px solid #4b4b4b;
    border-radius: 2px;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
    color: #FFF !important;
    display: inline-block !important;
    height: 40px !important;
    left: auto;
    letter-spacing: 2px;
    max-height: 40px;
    min-width: 100px;
    opacity: 0;
    padding: 10px;
    text-transform: uppercase;
    transform: scale(0.75);
    transition: all 0.3s ease 0s;
    visibility: hidden;
    width: auto;
    z-index: 2;
}
.no-touch .product .panel-body:hover .btn-quickview {
    opacity: 0.85;
    transform: scale(1);
    visibility: visible;
}
.no-touch .list-view .product .panel-body:hover div.quickview {
    margin-top: 45%;
}
@media (max-width: 460px) {
	div.quickview {
	    margin-top: 25%;
	}
}
@media (max-width: 400px) {
	div.quickview {
	    margin-top: 35%;
	}
}
.no-touch .product > .btn-quickview:hover {
    opacity: 0.95;
}


.no-touch .product:hover, .featuredImgLook2 .inner:hover {

}



.gradient{
    padding-left:10px;
    padding-top:2px;
	content: '';
	position: absolute;
	top: 0;
	bottom: 15%;
	left: 0;
	right: 0;
	background: -moz-linear-gradient(top,  rgba(0,0,0,0.65) 21%, rgba(0,0,0,0.44) 46%, rgba(0,0,0,0) 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(21%,rgba(0,0,0,0.65)), color-stop(46%,rgba(0,0,0,0.44)), color-stop(100%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  rgba(0,0,0,0.65) 21%,rgba(0,0,0,0.44) 46%,rgba(0,0,0,0) 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  rgba(0,0,0,0.65) 21%,rgba(0,0,0,0.44) 46%,rgba(0,0,0,0) 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  rgba(0,0,0,0.65) 21%,rgba(0,0,0,0.44) 46%,rgba(0,0,0,0) 100%); /* IE10+ */
	background: linear-gradient(to bottom,  rgba(0,0,0,0.65) 21%,rgba(0,0,0,0.44) 46%,rgba(0,0,0,0) 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */
}
@media all and (min-width: 0) and (max-width: 767px) {
	.gradient{
		padding-left: 0;
	}
}

li {
	cursor: pointer;
}

.german_btn{
	font-size:11.7px;
}

@media(max-width:767px) and (min-width:545px){

}

.description h4,.description h3 {
   display: block;
   line-height: 13px;
   font-size:13px;
   margin: 3px 0 0;
   max-height: 60px;
   min-height: 55px;
   padding: 0;
}
@media(max-width:767px){
	.description h4{
		text-overflow: ellipsis;
		overflow:hidden;
		white-space: nowrap;
	}
}

.description h4.top_head {
	white-space: nowrap;
}


.intro{
	font-size:16px;
	padding-bottom:10px;
	padding:0px 5px;

}
.product .panel-footer .description{
	max-height: 68px;
	min-height: 68px;
}
.product .panel-footer .description.shop{
	min-height: 100px;
}
@media(max-width:767px){

	.shop-items.product .panel-footer .description{
		min-height: 80px;
	}
}
@media(max-width:400px){
	.product.mag-item .panel-footer .description{
		max-height: 80px;
		min-height: 68px;
	}
	.shop-items.product .panel-footer .description{
		min-height: 80px;
	}
}

.product.cafe .panel-footer .description{
	min-height: 70px;
}

.product.movie .panel-footer .description{
	max-height: 68px;
	min-height: 40px;
	margin-bottom: 5px;
}

@media(max-width:767px){
	.product.movie .panel-footer .description{
		min-height:25px;
	}
}

.product .panel-footer .description h4 strong{
	white-space: nowrap;
	overflow: hidden;
	text-overflow: ellipsis;
	max-width: 200px;
	display: block;
	cursor:pointer;
}


.search-box {
	margin-bottom: 5px !important;
}

.product .panel-footer .description h4{
	max-height: 60px;
	min-height: 30px;
}

#voucher_input .form-control{
	margin-bottom: 3px;
	font-size:1.2rem;
}
#voucher_input .form-error{
	text-align: right;
	margin: 0;
	opacity: 0;
}
#voucher_input.has-error .form-error{
	opacity: 1;
}

@media (min-width: 992px){
	.survey_img {
		content:url('<?=$SURVEY_BANNER_DESK?>');
	}
}
@media (max-width: 991px){
	.survey_img {
		content:url('<?=$SURVEY_BANNER_TABLET?>');
	}
}
@media (max-width: 480px){
	.survey_img {
		content:url('<?=$SURVEY_BANNER_MOBILE?>');
	}
}

.survey_img{
	width: 100%;
}

.back-header{
	color: #fff !important;
}
.sub-header{
	float:none;
}

input.quantity::-webkit-outer-spin-button,
input.quantity::-webkit-inner-spin-button,
input.seat::-webkit-outer-spin-button,
input.seat::-webkit-inner-spin-button  {
    /* display: none; /* Crashes Chrome on hover */
    -webkit-appearance: none;
    margin: 0; /* Apparently some margin are still there even though it's hidden */
}

img.individual_media{
	max-width: 270px;
}

.modal-title.media.text-primary {
	text-align: left;
}

@media (max-width: 768px)s

@media (max-width: 500px){
	.sub-total-row {
		padding: 30px;
	}
}


#paymentType .radio {
	margin-bottom: 25px !important;
}

#paymentType .radio .iradio_square-blue {
	margin-right: 10px;
	margin-top: -2px;
}

#accordion .panel-heading .panel-title a {
	display: block;
	padding: 10px 15px;
	margin: -10px -15px;
}

.padding-top-15 {
	padding-top: 15px;
}

@media (max-width:767px) and (orientation : landscape){
	#profiling_footer{
		display: none;
	}
}

.suncafe_front_image {
	width: 100%;
}

.suncafe_front_image_wrapper {
	position: relative;
	clear: none !important;
	margin-bottom: 20px; 
	background-color: #fff; 
	background-clip: content-box;
	padding-left: 10px;
	padding-right: 10px;
	display: inline-flex;
	white-space: pre-line;
}

.suncafe_front_image_wrapper > a > h3 {
   position: absolute; 
   top: 80%; 
   left: 0; 
   width: 100%;
   font-weight: bold;
   font-size: 1.1em;
   text-align: center;
   color: #4b4b4b;
   		padding-left:5px;
		padding-right:5px;
}

@media (max-width:767px) and (orientation : portrait) {
	.suncafe_front_image_wrapper {
		padding-bottom: 15px;
	}
	.suncafe_front_image {
		width: 80%;
	}
	#suncafe_carousel_container {
		margin: 0 !important;
	}
	.suncafe_front_image_wrapper > a > h3 {
		top: 77%;
	}
	#suncafe_top_right_header {
		float: none !important;
	}
	#sunshop_top_right_header {
		float: none !important;
	}
}

@media (max-width:966px) and (orientation : landscape) {
	#profiling_footer{
		display: none;
	}
	
	.suncafe_front_image_wrapper > a > h3 {
		top: 76%;
	}
}

@media (max-width:640px) and (orientation : landscape) {
	#profiling_footer{
		display: none;
	}
	
	.suncafe_front_image_wrapper > a > h3 {
		top: 81%;
	}
}

.suncafe-carousel-indicator {
	position: inherit;
	left: 0;
	width: 100%;
	margin-left: 0;
}

#suncafe_categories_selector {
	width: 100%;
	padding: 5px 0px;
	padding-left: 5px;
	-webkit-appearance:none;
	-moz-appearance:none;
	appearance:none;
	background: url(https://sunmedia.mim.aero/assets/images/plus_icon.png) no-repeat right #ddd;
	background-position-x: 98%;
}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
	.suncafe_front_image {
		width: 100%;
	}
	.suncafe_front_image_wrapper > a > h3 {
		top: 75%;
	}
	
	.display .glyphicon.glyphicon.glyphicon-chevron-left.blue{
		top: 28px;
	}
}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
	.display .glyphicon.glyphicon.glyphicon-chevron-left.blue{
		top: 17px;
	}
}

/* iPhone 5 and iPhone 5s */
@media only screen and (min-device-width : 320px) and (max-device-width : 568px) and (orientation : portrait) {
	.suncafe_front_image_wrapper > a > h3 {
		top: 69%;
		font-size: 0.8em;
	}
	#suncafe_top_right_header {
		float: none !important;
		font-size: 0.9em;
	}
	#sunshop_top_right_header {
		float: none !important;
		font-size: 0.9em;
	}
}

@media only screen and (min-device-width : 320px) and (max-device-width : 568px) and (orientation : landscape) {
	.suncafe_front_image_wrapper > a > h3 {
		top: 81%;
	}
	#suncafe_top_right_header {
		float: none !important;
	}
	#sunshop_top_right_header {
		float: none !important;
	}
}


/* iPhone 6 */

@media only screen and (min-device-width : 320px) and (max-device-width : 568px) and (orientation : portrait) {
	.suncafe_front_image_wrapper > a > h3 {
		top: 70%;
		font-size: 0.8em;
	}
}


/* Nexus 6 */
@media only screen and (min-device-width : 412px) and (max-device-width: 690px) and (orientation : portrait) {
	#suncafe_top_right_header {
		float: none !important;
	}
	#sunshop_top_right_header {
		float: none !important;
	}
	.suncafe_front_image_wrapper > a > h3 {
		top: 78%;
	}
}

@media only screen and (min-device-width : 412px) and (max-device-width: 690px) and (orientation : landscape) {
	#suncafe_top_right_header {
		float: none !important;
	}
	#sunshop_top_right_header {
		float: none !important;
	}
}

#sunshop_top_right_header {
	float: right;
	font-family: HandWriting;
	color: #eb690b;
}

#suncafe_top_right_header {
	float: right;
	font-family: HandWriting;
	color: #eb690b;
}

.shop-promotional-banner-chevron {
	margin-top: 0px !important;
	color: #84d0f0 !important;
}

