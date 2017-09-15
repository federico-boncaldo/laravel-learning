<?php
	define('BASEDIR', $_SERVER['DOCUMENT_ROOT']);

	require $_SERVER['DOCUMENT_ROOT']."/function/common.functions.php";
	require $_SERVER['DOCUMENT_ROOT']."/config/vars.config.php";
	require $_SERVER['DOCUMENT_ROOT']."/class/Pages.class.php";
	require $_SERVER['DOCUMENT_ROOT']."/config/db.config.php";

	$pages = new Pages($PDO);
	header("Content-type: text/css; charset: UTF-8");
?>



.language-dropdown{
	list-style-type:none;
	font-size:inherit;
	-webkit-padding-start:0px;
	color:#ccc;
	padding-top:10px;
}
.language-label{
	font-weight:700;
	padding-left:10px;
	display:inline-block;
	font-size:14px;
	color:#4b4b4b;
	position:relative;
	top:2px;
}
.open > .dropdown-menu.lang{
	left:0;
	right:100%;
	margin-bottom:15px;
	top:-143px;
}
.language-text{
	font-weight:400;
	display:inline-block;
	font-size:14px;
	color:#4b4b4b;
	position:relative;
	top:2px;
}
.language-text:before{
	content: '';
	position: relative;
	left: 0;
	top: 0;
	height: 8px;
	margin-top: -4px;
	width: 1px;
	color:#ccc;
	display:inline-block;
	margin:0px 5px;
	font-weight:700;
	background-color:#ccc;

}

.footer-options{
	font-weight:400;
	color:#4b4b4b;
	padding-top:20px;
	margin-bottom:20px;
	font-size:inherit;
	


}

.footer-options a{
	color:#00458f;
}

.footer-options button{
	border:none;
	background-color:transparent;
	padding-left:0px;
}

.copyright{
	color:#ccc;
	display:block;
	font-size: 14px;
	font-family: "Lato", Arial, sans-serif;
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
	color:<?=$pages->getStyle('WEB_TEXT_PRIMARY_COLOUR')?>;


}

#bottom_terms a{
	color: <?=$pages->getStyle('WEB_FOOTER_LINK_COLOUR')?>;

}
#bottom_terms ul:first-child{

}

#bottom_terms a:after{
	content: '';
    position: absolute;
    left: 0;
    top: 50%;
    height: 8px;
    margin-top: -4px;
    width: 1px;
    background-color:#ccc;
}
@media(max-width:767px){
	#bottom_terms a:after{
		display:none;
	}
	#bottom_terms a{
		padding:10px 0px;
	}
}

#bottom_terms li:first-child a:after{
	display: none;
}

.secondary_footer_spacer{
	display: block;
	clear: both;
	float: left;
	width: 100%;
	height: 55px;
}

.container.footer-options.myflight {
    margin-bottom: 110px;
}