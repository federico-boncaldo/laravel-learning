<?php
    require $_SERVER['DOCUMENT_ROOT']."/core/core.php";
    header("Content-type: text/css; charset: UTF-8");
?>

.content_box {
    display: block;
    border: 1px solid #d1d1d1;
    border-bottom: 3px solid #00458f;
    box-shadow: 1px 1px 6px #d1d1d1;
    height: 255px;
    margin: 0;
    padding: 0px;
    background-color: #fff;
}

.content_box .image {
    overflow: hidden;
    position: relative;
    background: #444;
}

.content_box .image .responsive_img {
    height: 100%;
}

.content_box .info {
    height: 40%;
    position: relative;
    padding: 30px 10px;
}

.content_box .info .content_type {
    position: absolute;
    top:0px;
    left: 15px;
    background-color: #00458f;
    color: #fff;
    padding: 4px 10px;
    font-size: 10px;
    line-height: 1em;
    text-transform: uppercase;
}

.content_box .info .primary_title {
    color: #454545;
    display: block;
    position: absolute;
    left: 15px;
    top: 28px;
    right: 15px;
    font-size: 15px;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}

.content_box .info .description {
    position: absolute;
    color: #656565;
    font-style: italic;
    top: 52px;
    line-height: 1.4em;
    left: 15px;
    padding-right: 10px;
    font-size: 13px;
    margin-top:0px;
    height: 2.8em;
    overflow: hidden;
    text-overflow: ellipsis;
}

.content_box .info .details {
    position: absolute;
    bottom: 0px;
    left: 15px;
    right: 15px;
    padding: 10px 0px;
}

.content_box .info .details .buynow {
    color: #656565;
    text-transform: uppercase;
    font-size: 14px;
    padding-left: 30px;
    position: relative;
    height: 20px;
    line-height: 20px;
}

.content_box .info .details .buynow:before {
    color: #fff;
    font-family: 'Glyphicons Halflings';
    text-align: center;
    font-size:12px;
    content: "\e116";
    width: 20px;
    height: 20px;
    position: absolute;
    left: 0px;
    top: 50%;
    margin-top: -10px;
    background-color: #656565;
}

.content_box .info .details .rating {
    position: absolute;
    right: 0px;
    bottom: 10px;
}

.content_box .info .details .rating .star {
    color: #656565;
    font-size: 10px;
}

.content_box .info .details .rating .star:before {
    font-family: 'Glyphicons Halflings';
    content: "\e006";
}

.content_box .info .details .rating .star.active {
    color: #f16d00;
}
         
.content_box.large {
    height: 344px;
}

.content_box.large .image {
    height: 68%;
}

.content_box.large .info {
    height: 32%;
}

.content_box.large .info .primary_title {
    top: 28px;
    bottom: auto;
    font-size: 18px;
    line-height: 1.2em;
    padding-right: 10px
}

.content_box.large .info .secondary_title {
    display: none;
}

.content_box.large .info .description {
    top: 56px;
    line-height: 1.4em;
    left: 15px;
    padding-right: 10px;
    font-size: 13px;
    margin-top:0px;
    height: 2.8em;
    overflow: hidden;
    text-overflow: ellipsis;
}

.content_box.medium .image {
   height: 60%;
}

.content_box.small {
    height: 104px;
}

.content_box.small .image {
    height: 100px !important;
    width: 100px !important;
    float: left;
}

.content_box.small .info {
    height: 100%;
    margin-left: 100px;
}

.content_box.small .info .primary_title {
    top: 40px;
    bottom: auto;
    font-size: 14px;
    line-height: 1.2em;
    right: 10px;
}

.content_box.small .info .secondary_title {
    display: none;
}

.content_box.small .info .description {
    top: 60px;
    line-height: 1.4em;
    left: 15px;
    padding-right: 10px;
    font-size: 10px;
    margin-top:0px;
    height: 2.8em;
    overflow: hidden;
    text-overflow: ellipsis;
}

.content_box.city {
    border-bottom-color: <?=$pages->getStyle('WEB_DESTINATION_FEATURED_COLOUR')?>;
}

.content_box.city .info .content_type {
    background-color: <?=$pages->getStyle('WEB_DESTINATION_FEATURED_COLOUR')?>;
}

.content_box.city.large {
    height: 344px;
}

.content_box.city.large .image {
    height: 73%;
}

.content_box.city.large .info {
    height: 27%;
}

.content_box.city.large .info .primary_title {
    top:auto;
    bottom: 10px;
    font-size: 26px;
}

.content_box.city.large .info .secondary_title {
    color: #656565;
    display: block;
    line-height: 1em;
    font-size: 11px;
    text-transform: uppercase;
    font-style: italic;
    position: absolute;
    bottom: 45px;
    left: 15px;
}

.content_box.city.large .info .description {
    position: absolute;
    color: #656565;
    font-style: italic;
    left: 225px;
    top: 50%;
    margin-top: -1.4em;
    padding-right: 30px;
    line-height: 1.4em;
    font-size: 13px;
}

@media screen and (max-width: 480px) {
    .content_box.city.large .info .description {
        display: none;
    }
}

.content_box.spot {
    border-bottom-color: <?=$pages->getStyle('WEB_DESTINATION_SPOT_COLOUR')?>;
}

.content_box.spot .info .content_type {
    background-color: <?=$pages->getStyle('WEB_DESTINATION_SPOT_COLOUR')?>;
}

.content_box.guide {
    border-bottom-color: <?=$pages->getStyle('WEB_DESTINATION_MINI_GUIDE_COLOUR')?>;
}

.content_box.guide .info .content_type {
    background-color: <?=$pages->getStyle('WEB_DESTINATION_MINI_GUIDE_COLOUR')?>;
}

.content_box.feature {
    border-bottom-color: <?=$pages->getStyle('WEB_DESTINATION_FEATURE_COLOUR')?>;
}

.content_box.feature .info .content_type {
    background-color: <?=$pages->getStyle('WEB_DESTINATION_FEATURE_COLOUR')?>;
}


.content_box.poi {
    border-bottom-color: <?=$pages->getStyle('WEB_DESTINATION_SPOT_COLOUR')?>;
}

.content_box.poi .info .content_type {
    display:none;
}
            
.content_box.poi .info .primary_title {
    top:10px;
    bottom: auto;
    font-size: 18px;
}

.content_box.poi .info .secondary_title {
    color: #656565;
    display: block;
    line-height: 1em;
    font-size: 12px;
    text-transform: capitalize;
    position: absolute;
    bottom: auto;
    top: 38px;
    left: 15px;
}

.content_box.poi .info .description {
    position: absolute;
    color: #656565;
    font-style: italic;
    left: 15px;
    top: 85px;
    margin-top: -1.4em;
    padding-right: 30px;
    line-height: 1.4em;
    font-size: 11px;
    font-style: italic;
}
