<?php
  require $_SERVER['DOCUMENT_ROOT']."/core/core.php";
  header("Content-type: text/css; charset: UTF-8");
  $pages = new Pages($PDO);
  $styling = $pages->grabAllStyling();
?>

.destination_container header .header_container {
  max-width: 960px;
  margin: auto;
  background-size: cover;
  position: relative;
  padding: 3em;
  color: #fff; }
  .destination_container header .header_container h1 {
    color: #fff; }
  .destination_container header .header_container .header_tabs {
    position: absolute;
    bottom: 0px;
    left: 40px;
    z-index: 2; }
    .destination_container header .header_container .header_tabs .tab {
      color: #797979;
      display: inline-block;
      background: #d2d2d2;
      text-transform: uppercase;
      font-size: 11px;
      padding: 10px 15px;
      line-height: 1em;
      cursor: pointer;
      border-top: 3px solid #d2d2d2; }
      .destination_container header .header_container .header_tabs .tab.active {
        color: #474747;
        background: #f5f5f5;
        border-top: 3px solid <?=$styling['WEB_DESTINATION_FEATURED_COLOUR']['value']?>; }
    @media screen and (max-width: 480px) {
      .destination_container header .header_container .header_tabs {
        display: none; } }
.destination_container header.dest_header {
  background: #3d627f url("<?=$config['site']['asset']?><?=$styling['WEB_DESTINATION_DEST_HEADER_GRADIENT_BACKGROUND']['value']?>") left center repeat-x; }
  .destination_container header.dest_header .header_container {
    background: url("<?=$config['site']['asset']?><?=$styling['WEB_DESTINATION_DEST_HEADER_IMAGE']['value']?>") right bottom no-repeat;
    background-size: 45%; }
    .destination_container header.dest_header .header_container h1 {
      color: #fff;
      text-transform: uppercase;
      font-size: 1.5em; }
      .destination_container header.dest_header .header_container h1 .airline {
        display: block;
        font-size: 1em;
        font-weight: bold;
        letter-spacing: .7em; }
      .destination_container header.dest_header .header_container h1 .featured {
        display: block;
        font-size: 2.4em;
        color: orange;
        letter-spacing: .1em; }
      .destination_container header.dest_header .header_container h1 .destinations {
        display: block;
        font-size: .9em;
        font-weight: bold;
        color: rgba(255, 255, 255, 0.6);
        letter-spacing: .7em; }
    .destination_container header.dest_header .header_container h2 {
      color: #fff;
      text-transform: none;
      font-size: 14px;
      font-style: italic;
      font-weight: 300;
      line-height: 1.8em;
      margin-top: 3em; }
      .destination_container header.dest_header .header_container h2 .top {
        display: block;
        font-size: 1.2em;
        font-weight: bold; }
      .destination_container header.dest_header .header_container h2 .bottom {
        display: block; }
.destination_container header.venue_header .header_container, .destination_container header.spot_header .header_container, .destination_container header.city_header .header_container {
  background-size: cover;
  background-position: center;
  position: relative;
  height: 340px; }
  .destination_container header.venue_header .header_container:before, .destination_container header.spot_header .header_container:before, .destination_container header.city_header .header_container:before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: #fff;
    opacity: 0.2;
    z-index: 1; }
  .destination_container header.venue_header .header_container .bggradient, .destination_container header.spot_header .header_container .bggradient, .destination_container header.city_header .header_container .bggradient {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 50%;
    background: -moz-linear-gradient(left, rgba(0, 0, 0, 0.65) 30%, transparent 100%);
    /* FF3.6+ */
    background: -webkit-gradient(linear, left top, right top, color-stop(30%, rgba(0, 0, 0, 0.65)), color-stop(100%, transparent));
    /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.65) 30%, transparent 100%);
    /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(left, rgba(0, 0, 0, 0.65) 30%, transparent 100%);
    /* Opera 11.10+ */
    background: -ms-linear-gradient(left, rgba(0, 0, 0, 0.65) 30%, transparent 100%);
    /* IE10+ */
    background: linear-gradient(to right, rgba(0, 0, 0, 0.65) 30%, transparent 100%);
    /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=1 );
    /* IE6-9 */
    z-index: 1; }
  .destination_container header.venue_header .header_container .header_content, .destination_container header.spot_header .header_container .header_content, .destination_container header.city_header .header_container .header_content {
    position: absolute;
    padding: 24px;
    top: 0px;
    bottom: 0px;
    left: 0px;
    right: 0px;
    z-index: 2; }
    .destination_container header.venue_header .header_container .header_content h1, .destination_container header.spot_header .header_container .header_content h1, .destination_container header.city_header .header_container .header_content h1 {
      font-size: 48px;
      text-transform: uppercase;
      font-weight: bold;
      letter-spacing: 0.1em;
      z-index: 2; }
    .destination_container header.venue_header .header_container .header_content .personalise_btn, .destination_container header.spot_header .header_container .header_content .personalise_btn, .destination_container header.city_header .header_container .header_content .personalise_btn {
      position: absolute;
      top: 30px;
      right: 30px;
      display: block;
      padding: 10px 32px 10px 10px;
      color: #fff;
      background: <?=$styling['WEB_DESTINATION_FEATURED_COLOUR']['value']?>;
      border-radius: 2px;
      text-transform: uppercase;
      font-weight: bold;
      font-size: 13px;
      z-index: 2;
      cursor: pointer; }
      .destination_container header.venue_header .header_container .header_content .personalise_btn:after, .destination_container header.spot_header .header_container .header_content .personalise_btn:after, .destination_container header.city_header .header_container .header_content .personalise_btn:after {
        content: '';
        border: 5px solid transparent;
        border-left-color: #fff;
        border-left-width: 8px;
        position: absolute;
        top: 50%;
        right: 10px;
        margin-top: -6px; }
    .destination_container header.venue_header .header_container .header_content .overview, .destination_container header.spot_header .header_container .header_content .overview, .destination_container header.city_header .header_container .header_content .overview {
      z-index: 2;
      text-shadow: 0 0 15px #000; }
      .destination_container header.venue_header .header_container .header_content .overview h3, .destination_container header.spot_header .header_container .header_content .overview h3, .destination_container header.city_header .header_container .header_content .overview h3 {
        color: #fff;
        font-weight: bold;
        font-size: 14px; }
      .destination_container header.venue_header .header_container .header_content .overview .text, .destination_container header.spot_header .header_container .header_content .overview .text, .destination_container header.city_header .header_container .header_content .overview .text {
        width: 50%;
        font-size: 13px;
        font-weight: bold; }
        .destination_container header.venue_header .header_container .header_content .overview .text:after, .destination_container header.spot_header .header_container .header_content .overview .text:after, .destination_container header.city_header .header_container .header_content .overview .text:after {
          content: "..."; }
      .destination_container header.venue_header .header_container .header_content .overview .rm, .destination_container header.spot_header .header_container .header_content .overview .rm, .destination_container header.city_header .header_container .header_content .overview .rm {
        margin-top: 1em;
        cursor: pointer;
        display: inline-block; }
    @media screen and (max-width: 480px) {
      .destination_container header.venue_header .header_container .header_content, .destination_container header.spot_header .header_container .header_content, .destination_container header.city_header .header_container .header_content {
        height: 240px; }
        .destination_container header.venue_header .header_container .header_content h1, .destination_container header.spot_header .header_container .header_content h1, .destination_container header.city_header .header_container .header_content h1 {
          font-size: 32px; }
        .destination_container header.venue_header .header_container .header_content .personalise_btn, .destination_container header.spot_header .header_container .header_content .personalise_btn, .destination_container header.city_header .header_container .header_content .personalise_btn {
          top: auto;
          bottom: 30px;
          left: 30px;
          right: auto; }
        .destination_container header.venue_header .header_container .header_content .overview, .destination_container header.spot_header .header_container .header_content .overview, .destination_container header.city_header .header_container .header_content .overview {
          display: none; }
          .destination_container header.venue_header .header_container .header_content .overview .text, .destination_container header.spot_header .header_container .header_content .overview .text, .destination_container header.city_header .header_container .header_content .overview .text {
            width: 100%; } }

@media screen and (max-width: 480px) {
  .destination_container header.dest_header .header_container {
    font-size: 10px; }
    .destination_container header.dest_header .header_container h2 .top {
      display: none; }
  .destination_container header .header_container {
    height: 245px !important; } }
.dest_cont #featured .featured_city .features_container .content_box {
  margin-bottom: 16px; }
.dest_cont #featured .featured_city:after {
  content: '';
  display: block;
  clear: both; }

.interest_filter_desktop {
  margin: 20px 0px; }
  .interest_filter_desktop label {
    display: block;
    margin: 0px;
    margin-bottom: 8px;
    text-transform: uppercase;
    font-size: 1em; }
  .interest_filter_desktop .interest_tag {
    cursor: pointer;
    display: inline-block;
    margin: 5px;
    padding: 5px 10px;
    padding-right: 24px;
    border: 1px solid #ccc;
    text-transform: uppercase;
    background-color: #fff;
    position: relative; }
    .interest_filter_desktop .interest_tag .delete {
      position: absolute;
      right: 0px;
      top: 0px;
      bottom: 0px;
      font-size: 10px;
      padding: 8px; }
  .interest_filter_desktop .interest_refine {
    cursor: pointer;
    position: relative;
    text-decoration: underline;
    font-size: 12px;
    color: #494949;
    margin: 5px;
    display: inline-block; }
    .interest_filter_desktop .interest_refine:after {
      content: ' >';
      text-decoration: none;
      position: absolute;
      top: 50%;
      margin-top: -10px;
      right: -10px; }

.city_modal .modal-dialog {
  max-width: 640px;
  margin:500px auto;
 }
 @media(max-width:400px){
   .city_modal .modal-dialog{
     margin:550px auto;
   }
 }

  .city_modal .modal-dialog .modal-content {
    border-radius: 0px;
    padding: 20px 30px; }
    .city_modal .modal-dialog .modal-content .modal-header {
      border-bottom: 2px dotted #ccc;
      padding: 0px 0px 5px 0px; }
      .city_modal .modal-dialog .modal-content .modal-header .close {
        font-weight: normal;
        opacity: 0.5;
        font-size: 12px; }
    .city_modal .modal-dialog .modal-content .modal-body {
      padding: 10px 0px; }
      .city_modal .modal-dialog .modal-content .modal-body p {
        font-size: 12px;
        margin-bottom: 1.5em; }
      .city_modal .modal-dialog .modal-content .modal-body .city_map {
        margin-left: 0px; }
        .city_modal .modal-dialog .modal-content .modal-body .city_map .responsive_img {
          height: 250px;
          position: relative;
          overflow: hidden; }

.spotpage .description_box {
  border-bottom: 2px solid <?=$styling['WEB_DESTINATION_SPOT_COLOUR']['value']?>;
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.4);
  position: relative;
  background: #fff; }
  .spotpage .description_box .top {
    position: absolute;
    top: 0;
    left: 10px;
    padding: 0;
    margin: 0; }
    .spotpage .description_box .top .label {
      background-color: <?=$styling['WEB_DESTINATION_SPOT_COLOUR']['value']?>;
      margin: 0;
      display: block;
      border-radius: 0px;
      text-transform: uppercase;
      float: left;
      padding: 0px 10px;
      line-height: 21px; }
    .spotpage .description_box .top .helper {
      font-size: 10px;
      line-height: 21px;
      display: block;
      float: left;
      padding: 0px 10px;
      color: #ccc;
      cursor: pointer; }
  .spotpage .description_box .body {
    padding: 20px;
    font-size: 13px;
    font-weight: 300;
    min-height: 318px; }
    .spotpage .description_box .body h3 {
      text-transform: none;
      font-weight: 500;
      margin-bottom: 20px; }
      .spotpage .description_box .body h3 small {
        font-weight: 100;
        font-size: 0.8em; }
.spotpage .bestfor {
  height: 152px;
  box-shadow: 0 0 1px rgba(0, 0, 0, 0.4);
  margin-bottom: 16px; }
  @media screen and (max-width: 480px) {
    .spotpage .bestfor {
      height: auto; } }
  .spotpage .bestfor h4 {
    margin: 0px;
    background-color: <?=$styling['WEB_DESTINATION_SPOT_COLOUR']['value']?>;
    color: #fff;
    font-size: 17px;
    padding: 15px 20px;
    text-transform: uppercase; }
  .spotpage .bestfor ul {
    list-style-type: none;
    padding: 0px; }
    .spotpage .bestfor ul li {
      position: relative;
      display: inline-block;
      width: 49%;
      height: 46px;
      line-height: 46px;
      padding-left: 55px;
      text-transform: uppercase;
      font-weight: 100;
      background: #fff;
      margin: 1px .5%;
      font-size: 12px; }
      @media screen and (max-width: 480px) {
        .spotpage .bestfor ul li {
          width: 100%; } }
      .spotpage .bestfor ul li:before {
        font-family: 'icomoon';
        display: block;
        position: absolute;
        content: '';
        height: 32px;
        width: 32px;
        color: <?=$styling['WEB_DESTINATION_SPOT_COLOUR']['value']?>;
        font-size: 32px;
        border-radius: 32px;
        top: 50%;
        margin-top: -16px;
        left: 10px;
        line-height: 32px; }
      .spotpage .bestfor ul li.monuments:before {
        content: "\e600"; }
      .spotpage .bestfor ul li.markets:before {
        content: "\e601"; }
      .spotpage .bestfor ul li.pointer:before {
        content: "\e602"; }
      .spotpage .bestfor ul li.food:before {
        content: "\e603"; }
      .spotpage .bestfor ul li.bars:before {
        content: "\e604"; }
      .spotpage .bestfor ul li.nature:before {
        content: "\e605"; }
      .spotpage .bestfor ul li.theatre:before {
        content: "\e60e"; }
      .spotpage .bestfor ul li.artsculture:before {
        content: "\e60f"; }
      .spotpage .bestfor ul li.fashion:before {
        content: "\e610"; }
      .spotpage .bestfor ul li.sports:before {
        content: "\e611"; }
      .spotpage .bestfor ul li.architecture:before {
        content: "\e612"; }
      .spotpage .bestfor ul li.livemusic:before {
        content: "\e613"; }
      .spotpage .bestfor ul li.museums:before {
        content: "\e614"; }
      .spotpage .bestfor ul li.nightlife:before {
        content: "\e615"; }
      .spotpage .bestfor ul li.shopping:before {
        content: "\e616"; }
.spotpage .map {
  height: 152px;
  box-shadow: 0 0 1px rgba(0, 0, 0, 0.4);
  overflow: hidden;
  position: relative; }
.spotpage .venues {
  margin-top: 40px; }
  .spotpage .venues h3 {
    margin: 8px;
    padding-left: 42px;
    position: relative;
    height: 32px;
    line-height: 32px;
    font-size: 18px; }
    .spotpage .venues h3 small {
      font-size: 63%; }
    .spotpage .venues h3:before {
      font-family: 'icomoon';
      speak: none;
      font-style: normal;
      font-weight: normal;
      font-variant: normal;
      text-transform: none;
      line-height: 1;
      /* Better Font Rendering =========== */
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      display: block;
      position: absolute;
      content: '';
      height: 32px;
      width: 32px;
      color: <?=$styling['WEB_DESTINATION_SPOT_COLOUR']['value']?>;
      font-size: 32px;
      border-radius: 32px;
      top: 50%;
      margin-top: -16px;
      left: 0px;
      line-height: 32px; }
    .spotpage .venues h3.monuments:before {
      content: "\e600"; }
    .spotpage .venues h3.markets:before {
      content: "\e601"; }
    .spotpage .venues h3.pointer:before {
      content: "\e602"; }
    .spotpage .venues h3.food:before {
      content: "\e603"; }
    .spotpage .venues h3.bars:before {
      content: "\e604"; }
    .spotpage .venues h3.nature:before {
      content: "\e605"; }
    .spotpage .venues h3.theatre:before {
      content: "\e60e"; }
    .spotpage .venues h3.artsculture:before {
      content: "\e60f"; }
    .spotpage .venues h3.fashion:before {
      content: "\e610"; }
    .spotpage .venues h3.sports:before {
      content: "\e611"; }
    .spotpage .venues h3.architecture:before {
      content: "\e612"; }
    .spotpage .venues h3.livemusic:before {
      content: "\e613"; }
    .spotpage .venues h3.museums:before {
      content: "\e614"; }
    .spotpage .venues h3.nightlife:before {
      content: "\e615"; }
    .spotpage .venues h3.shopping:before {
      content: "\e616"; }
    .spotpage .venues h3.shopping {
      background: none; }
.spotpage .related {
  margin-top: 40px; }
  .spotpage .related h3 {
    margin: 8px;
    position: relative;
    line-height: 32px;
    font-size: 18px; }

@media screen and (max-width: 616px) {
  .spotpage .description {
    height: auto; } }
.destination_container header.venue_header .header_container {
  padding: 0; }
  .destination_container header.venue_header .header_container .venue_title {
    height: 340px;
    background-size: cover;
    background-position: center; }
    .destination_container header.venue_header .header_container .venue_title .shadow {
      content: '';
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      background: -moz-linear-gradient(top, rgba(0, 0, 0, 0.85) 0%, transparent 100%);
      /* FF3.6+ */
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0.85)), color-stop(100%, transparent));
      /* Chrome,Safari4+ */
      background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.85) 0%, transparent 100%);
      /* Chrome10+,Safari5.1+ */
      background: -o-linear-gradient(top, rgba(0, 0, 0, 0.85) 0%, transparent 100%);
      /* Opera 11.10+ */
      background: -ms-linear-gradient(top, rgba(0, 0, 0, 0.85) 0%, transparent 100%);
      /* IE10+ */
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.85) 0%, transparent 100%);
      /* W3C */
      filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=0 );
      /* IE6-9 */
      z-index: 1; }
    .destination_container header.venue_header .header_container .venue_title .info {
      position: absolute;
      top: 0;
      bottom: 50%;
      left: 0;
      right: 0;
      padding: 50px 60px;
      z-index: 2; }
      .destination_container header.venue_header .header_container .venue_title .info h1 {
        margin: 0;
        text-transform: uppercase;
        font-size: 30px;
        font-weight: bold;
        letter-spacing: 5px; }
      .destination_container header.venue_header .header_container .venue_title .info .cats {
        font-size: 14px;
        font-weight: bold;
        font-style: italic;
        letter-spacing: 2px; }
  .destination_container header.venue_header .header_container .map {
    height: 340px; }

.articlepage {
  padding: 32px 16px !important;
  background: #fff;
  border-left: 1px solid #b6b6b6;
  border-right: 1px solid #b6b6b6;
  border-bottom: 1px solid #b6b6b6; }
  .articlepage .content_body {
    padding: 16px;
    color: #555;
    font-size: 12px; }
    .articlepage .content_body .content_intro {
      margin-bottom: 2em;
      display: block; }
    .articlepage .content_body img {
      width: 100%; }
    .articlepage .content_body .citytitle {
      display: block;
      margin: 0;
      text-transform: uppercase;
      letter-spacing: .4em;
      font-size: 1.3em; }
    .articlepage .content_body h1 {
      font-family: 'PTSansRegular';
      font-size: 2.4em;
      text-transform: none;
      margin: 0 0 .8em 0;
      font-weight: 100; }
    .articlepage .content_body h2 {
      font-size: 1.3em;
      text-transform: none;
      color: #333;
      margin: 2em 0 1em 0; }
    .articlepage .content_body strong {
      font-size: 1.1em; }
    .articlepage .content_body p {
      font-size: 1em; }
  .articlepage .features h3 {
    color: #555;
    font-family: 'PTSansRegular';
    text-transform: uppercase;
    font-size: 1.2em;
    margin: 1em 0 .5em 0; }
  .articlepage .features .content_box {
    margin-bottom: 16px; }

@media screen and (max-width: 480px) {
  .articlepage {
    padding: 8px !important; }
    .articlepage .content_body {
      font-size: 11px; }
      .articlepage .content_body p {
        font-size: 1.1em; } }
.content_box {
  display: block;
  border: 1px solid #d1d1d1;
  border-bottom: 3px solid #00458f;
  box-shadow: 1px 1px 6px #d1d1d1;
  height: 255px;
  margin: 0;
  padding: 0px;
  background-color: #fff; }
  .content_box .image {
    overflow: hidden;
    position: relative;
    background: #444; }
    .content_box .image .responsive_img {
      height: 100%; }
  .content_box .info {
    height: 40%;
    position: relative;
    padding: 30px 10px; }
    .content_box .info .content_type {
      position: absolute;
      top: 0px;
      left: 15px;
      background-color: <?=$styling['WEB_TEXT_PRIMARY_COLOUR']['value']?>;
      color: #fff;
      padding: 4px 10px;
      font-size: 10px;
      line-height: 1em;
      text-transform: uppercase; }
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
      overflow: hidden; }
    .content_box .info .description {
      position: absolute;
      color: #656565;
      font-style: italic;
      top: 52px;
      line-height: 1.4em;
      left: 15px;
      padding-right: 10px;
      font-size: 13px;
      margin-top: 0px;
      height: 2.8em;
      overflow: hidden;
      text-overflow: ellipsis; }
    .content_box .info .details {
      position: absolute;
      bottom: 0px;
      left: 15px;
      right: 15px;
      padding: 10px 0px; }
      .content_box .info .details .buynow {
        color: #656565;
        text-transform: uppercase;
        font-size: 14px;
        padding-left: 30px;
        position: relative;
        height: 20px;
        line-height: 20px; }
        .content_box .info .details .buynow:before {
          color: #fff;
          font-family: 'Glyphicons Halflings';
          text-align: center;
          font-size: 12px;
          content: "\e116";
          width: 20px;
          height: 20px;
          position: absolute;
          left: 0px;
          top: 50%;
          margin-top: -10px;
          background-color: #656565; }
      .content_box .info .details .rating {
        position: absolute;
        right: 0px;
        bottom: 10px; }
        .content_box .info .details .rating .star {
          color: #656565;
          font-size: 10px; }
          .content_box .info .details .rating .star:before {
            font-family: 'Glyphicons Halflings';
            content: "\e006"; }
          .content_box .info .details .rating .star.active {
            color: #f16d00; }
  .content_box.large {
    height: 344px; }
    .content_box.large .image {
      height: 68%; }
    .content_box.large .info {
      height: 32%; }
      .content_box.large .info .primary_title {
        top: 28px;
        bottom: auto;
        font-size: 18px;
        line-height: 1.2em;
        padding-right: 10px; }
      .content_box.large .info .secondary_title {
        display: none; }
      .content_box.large .info .description {
        top: 56px;
        line-height: 1.4em;
        left: 15px;
        padding-right: 10px;
        font-size: 13px;
        margin-top: 0px;
        height: 2.8em;
        overflow: hidden;
        text-overflow: ellipsis; }
  .content_box.medium .image {
    height: 60%; }
  .content_box.small {
    height: 104px; }
    .content_box.small .image {
      height: 100px !important;
      width: 100px !important;
      float: left; }
    .content_box.small .info {
      height: 100%;
      margin-left: 100px; }
      .content_box.small .info .primary_title {
        top: 40px;
        bottom: auto;
        font-size: 14px;
        line-height: 1.2em;
        right: 10px; }
      .content_box.small .info .secondary_title {
        display: none; }
      .content_box.small .info .description {
        top: 60px;
        line-height: 1.4em;
        left: 15px;
        padding-right: 10px;
        font-size: 10px;
        margin-top: 0px;
        height: 2.8em;
        overflow: hidden;
        text-overflow: ellipsis; }
  .content_box.city {
    border-bottom-color: <?=$styling['WEB_DESTINATION_FEATURED_COLOUR']['value']?>; }
    .content_box.city .info .content_type {
      background-color: <?=$styling['WEB_DESTINATION_FEATURED_COLOUR']['value']?>; }
    .content_box.city.large {
      height: 344px; }
      .content_box.city.large .image {
        height: 73%; }
      .content_box.city.large .info {
        height: 27%; }
        .content_box.city.large .info .primary_title {
          top: auto;
          bottom: 10px;
          font-size: 26px; }
        .content_box.city.large .info .secondary_title {
          color: #656565;
          display: block;
          line-height: 1em;
          font-size: 11px;
          text-transform: uppercase;
          font-style: italic;
          position: absolute;
          bottom: 45px;
          left: 15px; }
        .content_box.city.large .info .description {
          position: absolute;
          color: #656565;
          font-style: italic;
          left: 225px;
          top: 50%;
          margin-top: -1.4em;
          padding-right: 30px;
          line-height: 1.4em;
          font-size: 13px; }
          @media screen and (max-width: 480px) {
            .content_box.city.large .info .description {
              display: none; } }
  .content_box.spot {
    border-bottom-color: <?=$styling['WEB_DESTINATION_SPOT_COLOUR']['value']?>; }
    .content_box.spot .info .content_type {
      background-color: <?=$styling['WEB_DESTINATION_SPOT_COLOUR']['value']?>; }
  .content_box.guide {
    border-bottom-color: <?=$styling['WEB_DESTINATION_MINI_GUIDE_COLOUR']['value']?>; }
    .content_box.guide .info .content_type {
      background-color: <?=$styling['WEB_DESTINATION_MINI_GUIDE_COLOUR']['value']?>; }
  .content_box.feature {
    border-bottom-color: <?=$styling['WEB_DESTINATION_FEATURE_COLOUR']['value']?>; }
    .content_box.feature .info .content_type {
      background-color: <?=$styling['WEB_DESTINATION_FEATURE_COLOUR']['value']?>; }
  .content_box.poi {
    border-bottom-color: <?=$styling['WEB_DESTINATION_SPOT_COLOUR']['value']?>; }
    .content_box.poi .info .content_type {
      display: none; }
    .content_box.poi .info .primary_title {
      top: 10px;
      bottom: auto;
      font-size: 18px; }
    .content_box.poi .info .secondary_title {
      color: #656565;
      display: block;
      line-height: 1em;
      font-size: 12px;
      text-transform: capitalize;
      position: absolute;
      bottom: auto;
      top: 38px;
      left: 15px; }
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
      font-style: italic; }

.content_filter {
  margin: 0px;
  position: relative;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none; }
  .content_filter .scroll_back {
    display: block;
    position: absolute;
    left: 0px;
    top: 0px;
    bottom: 0px;
    width: 32px;
    cursor: pointer;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none; }
    .content_filter .scroll_back:after {
      content: '';
      border: 8px solid transparent;
      border-right-color: #00458f;
      border-right-width: 10px;
      border-left-width: 0px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-top: -9px;
      margin-left: -5px; }
  .content_filter .scroll_forward {
    display: block;
    position: absolute;
    right: 0px;
    top: 0px;
    bottom: 0px;
    width: 32px;
    cursor: pointer;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none; }
    .content_filter .scroll_forward:after {
      content: '';
      border: 8px solid transparent;
      border-left-color: #00458f;
      border-left-width: 10px;
      border-right-width: 0px;
      position: absolute;
      top: 50%;
      left: 50%;
      margin-top: -9px;
      margin-left: -5px; }
  .content_filter .filter_list {
    padding: 0px;
    margin: 0px 32px;
    overflow: hidden;
    white-space: nowrap; }
    .content_filter .filter_list li {
      cursor: pointer;
      display: inline-block;
      margin: 0px 5px;
      padding: 5px 10px;
      border: 1px solid #ccc;
      text-transform: uppercase;
      background-color: #fff; }
      .content_filter .filter_list li.selected {
        background-color: <?=$styling['WEB_DESTINATION_FEATURED_COLOUR']['value']?>;
        border-color: <?=$styling['WEB_DESTINATION_FEATURED_COLOUR']['value']?>;
        color: #fff; }

.content_filter_mobile {
  position: fixed;
  bottom: 0px;
  left: 0px;
  right: 0px;
  z-index: 9000;
  background-color: #fff; }
  .content_filter_mobile .filter_btn {
    background-color: #f16d00;
    color: #fff;
    padding: 10px;
    text-align: center;
    margin: 5px; }
  .content_filter_mobile .menu label {
    text-align: center;
    padding: 10px;
    display: block;
    font-style: italic;
    font-weight: normal;
    margin: 0px; }
  .content_filter_mobile .menu .filter_list {
    padding: 0px;
    margin: 0px;
    overflow: hidden;
    white-space: nowrap; }
    .content_filter_mobile .menu .filter_list li {
      cursor: pointer;
      display: block;
      margin: 0px 5px;
      padding: 5px 10px;
      border-top: 1px solid #ccc;
      text-transform: uppercase;
      background-color: #fff;
      text-align: center; }
      .content_filter_mobile .menu .filter_list li.selected {
        background-color: #f16d00;
        border-color: #f16d00;
        color: #fff; }

/* colors */
/* Backgrounds and Borders */
.notransition {
  -webkit-transition: none !important;
  -moz-transition: none !important;
  -o-transition: none !important;
  -ms-transition: none !important;
  transition: none !important; }

.search_container {
  margin: 0 auto;
  padding: 0px 0px 5em 0px;
  position: relative; }
  .search_container .search_header {
    margin: 0 auto;
    padding: 2em 0;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    border-radius: 2px;
    font-size: 13px;
    position: relative;
    overflow: hidden;
    width: 95%;
    max-width: 1164px;
    z-index: 9; }
    .search_container .search_header.minimized {
      border-bottom: 1px solid #c4c4c4; }
      .search_container .search_header.minimized .step_back {
        position: absolute;
        top: 50%;
        left: 43%;
        color: white;
        font-family: 'PTSansCaptionRegular';
        font-size: 1em;
        text-transform: uppercase;
        padding: 10px 15px;
        border-radius: 3px;
        line-height: 1em;
        margin-top: -1em;
        cursor: pointer; }
        .search_container .search_header.minimized .step_back .back_btn_icon {
          width: 13px;
          vertical-align: top;
          margin-left: 3px;
          display: inline-block;
          height: 2.2em;
          background-position: right center;
          background-repeat: no-repeat;
          background-size: contain; }
      .search_container .search_header.minimized:last-child {
        margin-bottom: 2em; }
    .search_container .search_header .header_top {
      position: relative;
      display: inline-block;
      vertical-align: top;
      margin: 1px 0;
      height: 4em;
      background: transparent;
      border-bottom: 0px;
      padding: 0px; }
      .search_container .search_header .header_top .logo {
        position: relative;
        display: inline-block;
        vertical-align: top;
        background-position: center;
        background-repeat: no-repeat;
        width: 4em;
        height: 4em;
        margin-right: 2em;
        border-radius: 2.5em;
        background-color: white; }
      .search_container .search_header .header_top .title {
        vertical-align: bottom;
        margin: 0 1em 0 0;
        display: inline-block;
        text-transform: none;
        font-family: 'PTSansCaptionRegular';
        position: relative;
        font-size: 2.3em;
        line-height: 1.1em; }
        .search_container .search_header .header_top .title b {
          font-family: 'PTSansCaptionRegular'; }
        .search_container .search_header .header_top .title span {
          vertical-align: top;
          display: block;
          font-family: 'PTSansCaptionRegular';
          font-size: 0.6em;
          color: #6c6c6c; }
      .search_container .search_header .header_top .previous_stage {
        font-family: 'PTSansCaptionRegular';
        position: relative;
        font-size: 2.1em;
        line-height: 2.1em;
        margin: 0 1em 0 0;
        display: inline-block;
        text-transform: none; }
        .search_container .search_header .header_top .previous_stage b {
          font-family: 'PTSansCaptionRegular'; }
  .search_container .list .stage {
    clear: both;
    width: 1164px;
    margin: 0 auto;
    padding-top: 25px; }
    .search_container .list .stage .spot, .search_container .list .stage .city {
      float: left;
      display: inline-block;
      width: 178px;
      height: 193px;
      margin: 8px;
      position: relative;
      overflow: hidden; }
    .search_container .list .stage .spot .img_holder, .search_container .list .stage .city .img_holder {
      width: 140px;
      height: 140px;
      display: block;
      position: relative;
      margin: 0 auto;
      border-radius: 50%;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      cursor: pointer;
      z-index: 1;
      overflow: hidden; }
      .search_container .list .stage .spot .img_holder .overlay, .search_container .list .stage .city .img_holder .overlay {
        position: absolute;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        opacity: 0.4;
        z-index: 2; }
      .search_container .list .stage .spot .img_holder img, .search_container .list .stage .city .img_holder img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        filter: gray;
        /* IE6-9 */
        -webkit-filter: grayscale(0.2);
        /* Google Chrome, Safari 6+ & Opera 15+ */
        -moz-filter: grayscale(20%);
        -ms-filter: grayscale(20%);
        -o-filter: grayscale(20%); }
    .search_container .list .stage .spot .title, .search_container .list .stage .city .title {
      width: 100%;
      top: 130px;
      position: absolute;
      cursor: pointer; }
      .search_container .list .stage .spot .title h4, .search_container .list .stage .city .title h4 {
        color: #858585;
        font-size: 1.1em;
        padding: 25px 8px 12px 8px;
        font-family: 'PTSansCaptionRegular';
        text-transform: uppercase;
        text-align: center;
        margin: 0px;
        cursor: pointer; }
    .search_container .list .stage .spot.search_vibe {
      cursor: pointer; }
      .search_container .list .stage .spot.search_vibe .nofamiliar .icon {
        display: block;
        width: 48px;
        height: 48px;
        background-position: center 40%;
        background-repeat: no-repeat;
        margin: 30px auto 12px auto; }
      .search_container .list .stage .spot.search_vibe .nofamiliar .text {
        display: block;
        text-align: center;
        font-size: 1.3em;
        font-family: 'PTSansCaptionRegular';
        line-height: 1.4em;
        color: #69acf0; }
      .search_container .list .stage .spot.search_vibe .title {
        background: #69acf0;
        text-shadow: none; }
        .search_container .list .stage .spot.search_vibe .title h4 {
          padding: 12px 8px 12px 8px;
          font-family: 'PTSansCaptionRegular';
          font-size: 1.2em;
          text-transform: uppercase; }

.search_container .stage_1 .search_header .header_top .title, .search_container .stage_1 .search_header .header_top .previous_stage {
  color: #00458f; }
.search_container .stage_1 .search_header .dest_search {
  background-color: #fff;
  min-width: 332px;
  height: 4em;
  padding: 0 15px;
  margin: 0;
  width: 30%;
  border: 1px solid #00458f;
  border-radius: 3px;
  display: inline-block;
  position: relative; }
  .search_container .stage_1 .search_header .dest_search .refine_controls, .search_container .stage_1 .search_header .dest_search .basket_controls {
    float: left;
    width: 100%; }
  .search_container .stage_1 .search_header .dest_search input {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    display: block;
    margin: 0;
    height: 2.5em;
    width: 100%;
    color: #6c6c6c;
    font-size: 1.6em;
    padding: 0 30px 0 0;
    background-color: transparent;
    border: 0 !important;
    font-family: 'PTSansCaptionRegular';
    background-position: right center;
    background-repeat: no-repeat; }
    .search_container .stage_1 .search_header .dest_search input:focus {
      outline: 0 !important; }
  .search_container .stage_1 .search_header .dest_search:before {
    content: "\e003";
    font-size: 24px;
    font-family: 'Glyphicons Halflings';
    position: absolute;
    right: 8px;
    top: 50%;
    margin-top: -12px;
    color: #00458f;
    line-height: 1em; }
.search_container .stage_1 .search_header .dest_search ::-webkit-input-placeholder {
  font-family: 'PTSansCaptionRegular';
  color: #ebebeb; }
.search_container .stage_1 .search_header .dest_search :-moz-placeholder {
  /* Firefox 18- */
  font-family: 'PTSansCaptionRegular';
  color: #ebebeb; }
.search_container .stage_1 .search_header .dest_search ::-moz-placeholder {
  /* Firefox 19+ */
  font-family: 'PTSansCaptionRegular';
  color: #ebebeb; }
.search_container .stage_1 .search_header .dest_search :-ms-input-placeholder {
  font-family: 'PTSansCaptionRegular';
  color: #ebebeb; }
.search_container .stage_1 .search_header.minimized .step_back {
  background-color: #00458f; }
.search_container .stage_1 .list .stage .city .img_holder .overlay {
  background-color: #00458f; }
  .search_container .stage_1 .list .stage .city .img_holder .overlay:hover {
    opacity: 0.9;
    background-color: #00458f;
    background-position: center center;
    background-repeat: no-repeat; }
  .search_container .stage_1 .list .stage .city .img_holder .overlay:active {
    opacity: 1;
    background-color: #00458f;
    background-position: center center;
    background-repeat: no-repeat; }
.search_container .stage_2 .search_header .header_top .title, .search_container .stage_2 .search_header .header_top .previous_stage {
  color: #f16d00; }
.search_container .stage_2 .search_header .header_top .title .lose {
  display: inline-block; }
.search_container .stage_2 .search_header .header_top .loading {
  display: inline-block;
  float: none;
  z-index: 100;
  height: 3em;
  width: 2em;
  background-size: contain;
  background-position: center;
  background-repeat: no-repeat;
  vertical-align: top; }
.search_container .stage_2 .search_header.minimized .step_back {
  background-color: #f16d00; }
.search_container .stage_2 .list .stage .city .img_holder .overlay {
  background: #f16d00; }
  .search_container .stage_2 .list .stage .city .img_holder .overlay:hover {
    opacity: 0.9;
    background-color: #f16d00;
    background-position: center center;
    background-repeat: no-repeat; }
  .search_container .stage_2 .list .stage .city .img_holder .overlay:active {
    opacity: 1;
    background-color: #f16d00;
    background-position: center center;
    background-repeat: no-repeat; }
.search_container .stage_3 .search_header .header_top .title, .search_container .stage_3 .search_header .header_top .previous_stage {
  color: #69acf0; }
.search_container .stage_3 .search_header .header_top .title .part_1 {
  display: inline-block; }
.search_container .stage_3 .search_header.minimized .step_back {
  background-color: #69acf0; }
.search_container .stage_3 .list .stage .spot .img_holder .overlay {
  background: #69acf0; }
  .search_container .stage_3 .list .stage .spot .img_holder .overlay:hover {
    opacity: 0.9;
    background-color: #69acf0;
    background-position: center center;
    background-repeat: no-repeat; }
.search_container .stage_3 .list .stage .spot.selected .img_holder .overlay {
  opacity: 1;
  background-color: #69acf0;
  background-position: center center;
  background-repeat: no-repeat; }
.search_container .stage_2 .search_header .minimal_search, .search_container .stage_3 .search_header .minimal_search {
  position: absolute;
  display: block;
  right: 0;
  bottom: 50%;
  margin-bottom: -0.5em;
  background: transparent; }
  .search_container .stage_2 .search_header .minimal_search input, .search_container .stage_3 .search_header .minimal_search input {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    background-color: transparent;
    border: 0;
    border-bottom: 1px solid #6c6c6c;
    border-radius: 0;
    background-position: right center;
    background-repeat: no-repeat;
    font-family: 'PTSansCaptionRegular';
    color: #6c6c6c;
    padding: 8px 20px 4px 6px;
    font-size: 1em;
    outline: 0 !important; }
  .search_container .stage_2 .search_header .minimal_search:before, .search_container .stage_3 .search_header .minimal_search:before {
    content: "\e003";
    font-size: 16px;
    font-family: 'Glyphicons Halflings';
    position: absolute;
    left: -16px;
    top: 50%;
    margin-top: -8px; }

.spotsearch .search_header .header_top .switch {
  background-color: #a44a00; }

.vibesearch .search_header .header_top .switch {
  background-color: #a44a00; }

.float_holder {
  position: absolute;
  right: 0;
  left: 0;
  top: 0;
  bottom: 0; }

.ng-hide {
  display: none !important; }

.step, .step .list {
  -webkit-transition: 0.5s linear all;
  -moz-transition: 0.5s linear all;
  -ms-transition: 0.5s linear all;
  -o-transition: 0.5s linear all;
  transition: 0.5s linear all;
  opacity: 1;
  overflow: hidden; }

.step.ng-hide-add, .step.ng-hide-remove {
  display: block !important; }

.step .list.ng-hide-remove {
  display: block !important; }

.step.ng-hide-remove, .step .list.ng-hide-remove {
  height: 800px;
  opacity: 0; }

.step.ng-hide-remove.ng-hide-remove-active, .step .list.ng-hide-remove.ng-hide-remove-active {
  height: 800px;
  opacity: 1; }

.step.ng-hide-add {
  opacity: 1; }

.step.ng-hide-add.ng-hide-add-active {
  opacity: 0; }

.search_container .vibesearch .descriptors,
.search_container .vibesearch .vibes {
  margin: 30px 10px;
  background: #fff; }

.search_container .vibesearch .descriptors {
  margin-top: 180px; }

.search_container .vibesearch .descriptors .header,
.search_container .vibesearch .vibes .header {
  height: 60px; }

.search_container .vibesearch .descriptors .header .icon,
.search_container .vibesearch .vibes .header .icon {
  height: 60px;
  width: 60px;
  float: left;
  background-size: 32px;
  background-position: center;
  background-repeat: no-repeat; }

.search_container .vibesearch .descriptors .header h3,
.search_container .vibesearch .vibes .header h3 {
  line-height: 60px;
  margin-left: 80px;
  text-transform: uppercase;
  font-family: 'PTSansCaptionRegular'; }

.search_container .vibesearch .descriptors .header {
  background: #69acf0; }

.search_container .vibesearch .vibes .header {
  background: #00458f; }

.search_container .vibesearch .descriptors .header .icon {
  background-color: #3b92eb; }

.search_container .vibesearch .vibes .header .icon {
  background-color: #001429; }

.search_container .vibesearch .descriptors .header h3 {
  color: #fff; }

.search_container .vibesearch .vibes .header h3 {
  color: #fff; }

.search_container .vibesearch .descriptors .descriptor_list,
.search_container .vibesearch .vibes .vibe_list {
  padding: 20px; }

.search_container .vibesearch .descriptors .descriptor_list .descriptor_list_inner {
  max-width: 690px;
  margin: 0 auto; }

.search_container .vibesearch .vibes .vibe_list .vibe_list_inner {
  margin: 15px 0px 20px 0px; }

.search_container .vibesearch .descriptors .descriptor_list .descriptor {
  position: relative;
  display: inline-block;
  height: 100px;
  width: 100px;
  border: 1px solid #ccc;
  margin: 5px;
  cursor: pointer;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none; }

.search_container .vibesearch .descriptors .descriptor_list .descriptor .icon {
  display: block;
  width: 32px;
  height: 32px;
  position: absolute;
  top: 50%;
  left: 50%;
  margin-top: -32px;
  margin-left: -16px;
  background-position: center;
  background-repeat: no-repeat; }

.search_container .vibesearch .descriptors .descriptor_list .descriptor .title {
  position: absolute;
  bottom: .5em;
  left: 0;
  right: 0;
  text-align: center;
  font-size: 1.2em;
  color: #3b92eb; }

.search_container .vibesearch .descriptors .descriptor_list .descriptor:hover {
  background: #f1f1f1; }

.search_container .vibesearch .descriptors .descriptor_list .descriptor.selected {
  border: 1px solid #ccc;
  background: #69acf0; }

.search_container .vibesearch .descriptors .descriptor_list .descriptor.selected .title {
  color: #fff; }

.search_container .vibesearch .descriptors .descriptor_list .descriptor.selected:hover {
  background: #3b92eb; }

.search_container .vibesearch .vibes .vibe_list .vibe {
  display: inline-block;
  padding: 10px;
  margin: 5px;
  background: #e6e6e6;
  text-transform: uppercase;
  cursor: pointer;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none; }

.search_container .vibesearch .vibes .vibe_list .vibe.selected {
  background: #00458f; }

.search_container .vibesearch .vibes .vibe_list .btn {
  margin: 5px;
  background: #00458f;
  text-transform: uppercase;
  cursor: pointer;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  box-shadow: none;
  border: 0;
  color: #fff;
  padding: 20px 15px;
  font-size: 1.6em; }

@media screen and (max-width: 1163px) {
  .search_container {
    width: 970px; }
    .search_container .search_header.minimized .step_back {
      left: 50%; }
    .search_container .list .stage {
      width: 100%; } }
@media screen and (max-width: 969px) {
  .search_container {
    width: 100%; }
    .search_container .search_header {
      width: 95%;
      margin: 0 auto; }
      .search_container .search_header .header_top .title {
        font-size: 2em;
        margin-top: 5px; }
      .search_container .search_header.minimized .header_top .previous_stage {
        font-size: 2em;
        line-height: 2.2em; }
      .search_container .search_header.minimized .step_back {
        right: 0;
        left: auto; }
    .search_container .list .stage {
      width: 776px; } }
@media screen and (max-width: 775px) {
  .search_container {
    width: 100%; }
    .search_container .search_header .header_top {
      width: 100%;
      text-align: center;
      margin: 0 auto;
      display: block; }
      .search_container .search_header .header_top .title {
        margin: 4px 0 0 0; }
      .search_container .search_header .header_top .logo {
        position: absolute;
        top: 0;
        left: 0; }
    .search_container .search_header.minimized .header_top {
      width: 100%;
      text-align: left;
      display: inline-block; }
      .search_container .search_header.minimized .header_top .previous_stage {
        font-size: 2em;
        line-height: 2.2em; }
      .search_container .search_header.minimized .header_top .logo {
        position: relative;
        top: auto;
        left: auto;
        margin: 0 1em 0 0; }
    .search_container .search_header.minimized .step_back {
      right: 0;
      left: auto; }
    .search_container .stage_1 .search_header .dest_search {
      height: 38px;
      max-width: 290px;
      width: 90%;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      display: block;
      margin: 1.3em auto 0 auto;
      float: none; }
      .search_container .stage_1 .search_header .dest_search .refine_controls input {
        height: 38px; }
    .search_container .stage_2 .search_header .header_top .loading {
      position: absolute;
      right: 0;
      height: 3em; }
    .search_container .stage_2 .search_header .minimal_search, .search_container .stage_3 .search_header .minimal_search {
      position: relative;
      height: 38px;
      max-width: 250px;
      width: 60%;
      box-sizing: border-box;
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      display: block;
      margin: 1.3em auto 0 auto;
      float: none; }
      .search_container .stage_2 .search_header .minimal_search input, .search_container .stage_3 .search_header .minimal_search input {
        width: 100%; }
    .search_container .list .stage {
      width: 582px; } }
@media screen and (max-width: 581px) {
  .search_container .list.clear_cart {
    margin-top: 19em; }

  .search_container {
    width: 100%; }
    .search_container .stage_1 .search_header .header_top .logo, .search_container .stage_2 .search_header .header_top .logo, .search_container .stage_3 .search_header .header_top .logo {
      width: 3em;
      height: 3em;
      margin: 0.5em 0.7em 0.5em 0; }
      .search_container .stage_1 .search_header .header_top .logo.plane, .search_container .stage_2 .search_header .header_top .logo.plane, .search_container .stage_3 .search_header .header_top .logo.plane {
        background-size: 75%; }
      .search_container .stage_1 .search_header .header_top .logo.pin, .search_container .stage_2 .search_header .header_top .logo.pin, .search_container .stage_3 .search_header .header_top .logo.pin {
        background-size: 38%; }
      .search_container .stage_1 .search_header .header_top .logo.heart, .search_container .stage_2 .search_header .header_top .logo.heart, .search_container .stage_3 .search_header .header_top .logo.heart {
        background-size: 47%; }
    .search_container .stage_1 .search_header .header_top .title, .search_container .stage_2 .search_header .header_top .title, .search_container .stage_3 .search_header .header_top .title {
      font-size: 1.8em;
      margin-top: 5px; }
    .search_container .stage_1 .search_header.minimized .step_back, .search_container .stage_2 .search_header.minimized .step_back, .search_container .stage_3 .search_header.minimized .step_back {
      margin-top: 0;
      top: 37%;
      font-size: 0.9em;
      padding: 0 2px 2px 6px; }
      .search_container .stage_1 .search_header.minimized .step_back .back_btn_icon, .search_container .stage_2 .search_header.minimized .step_back .back_btn_icon, .search_container .stage_3 .search_header.minimized .step_back .back_btn_icon {
        margin-left: 1px;
        width: 9px; }
    .search_container .list {
      padding-top: 0; }
      .search_container .list .stage {
        width: 390px;
        margin: 0 auto; }
        .search_container .list .stage .city, .search_container .list .stage .spot {
          width: 130px;
          height: 160px;
          margin: 4px 0; }
          .search_container .list .stage .city .img_holder, .search_container .list .stage .spot .img_holder {
            width: 110px;
            height: 110px; }
          .search_container .list .stage .city .title, .search_container .list .stage .spot .title {
            top: 100px;
            font-size: 0.7em; }
    .search_container .stage_1 .search_header.minimized .header_top .previous_stage, .search_container .stage_2 .search_header.minimized .header_top .previous_stage {
      font-size: 1.5em;
      line-height: 3em; }
    .search_container .stage_2 .search_header .header_top .title .lose {
      display: none; }
    .search_container .stage_3 .search_header .header_top .title {
      margin-top: 1px; }
      .search_container .stage_3 .search_header .header_top .title .part_1 {
        font-size: 0.6em;
        font-family: 'PTSansCaptionRegular';
        display: block; }
      .search_container .stage_3 .search_header .header_top .title span {
        display: none; }

  .search_header .search_controls .refine_controls,
  .search_header .search_controls .basket_controls {
    float: none;
    width: 100%; } }
@media screen and (max-width: 400px) {
  .search_container {
    width: 100%; }
    .search_container .stage_1 .search_header, .search_container .stage_2 .search_header, .search_container .stage_3 .search_header {
      padding: 2em 0 0 0; }
      .search_container .stage_1 .search_header .header_top .title, .search_container .stage_2 .search_header .header_top .title, .search_container .stage_3 .search_header .header_top .title {
        padding-left: 54px;
        display: block;
        float: left;
        text-align: left;
        padding-top: 0px;
        margin-top: 6px;
        font-size: 1.8em; }
        .search_container .stage_1 .search_header .header_top .title span, .search_container .stage_1 .search_header .header_top .title .part_1, .search_container .stage_2 .search_header .header_top .title span, .search_container .stage_2 .search_header .header_top .title .part_1, .search_container .stage_3 .search_header .header_top .title span, .search_container .stage_3 .search_header .header_top .title .part_1 {
          font-size: 0.6em; }
      .search_container .stage_1 .search_header .header_top .logo, .search_container .stage_2 .search_header .header_top .logo, .search_container .stage_3 .search_header .header_top .logo {
        width: 3em;
        height: 3em; }
        .search_container .stage_1 .search_header .header_top .logo.plane, .search_container .stage_2 .search_header .header_top .logo.plane, .search_container .stage_3 .search_header .header_top .logo.plane {
          background-size: 75%; }
        .search_container .stage_1 .search_header .header_top .logo.pin, .search_container .stage_2 .search_header .header_top .logo.pin, .search_container .stage_3 .search_header .header_top .logo.pin {
          background-size: 38%; }
        .search_container .stage_1 .search_header .header_top .logo.heart, .search_container .stage_2 .search_header .header_top .logo.heart, .search_container .stage_3 .search_header .header_top .logo.heart {
          background-size: 47%; }
      .search_container .stage_1 .search_header .minimal_search, .search_container .stage_2 .search_header .minimal_search, .search_container .stage_3 .search_header .minimal_search {
        padding-top: 0.5em; }
      .search_container .stage_1 .search_header.minimized, .search_container .stage_2 .search_header.minimized, .search_container .stage_3 .search_header.minimized {
        padding: 2em 0; }
        .search_container .stage_1 .search_header.minimized .header_top .previous_stage, .search_container .stage_2 .search_header.minimized .header_top .previous_stage, .search_container .stage_3 .search_header.minimized .header_top .previous_stage {
          line-height: 1.2em;
          margin-left: 54px;
          margin-top: 7px;
          display: block;
          float: left;
          text-align: left;
          font-family: 'PTSansCaptionRegular'; }
          .search_container .stage_1 .search_header.minimized .header_top .previous_stage b, .search_container .stage_2 .search_header.minimized .header_top .previous_stage b, .search_container .stage_3 .search_header.minimized .header_top .previous_stage b {
            font-family: 'PTSansCaptionRegular';
            display: block; }
        .search_container .stage_1 .search_header.minimized .header_top .logo, .search_container .stage_2 .search_header.minimized .header_top .logo, .search_container .stage_3 .search_header.minimized .header_top .logo {
          position: absolute;
          left: 0; }
        .search_container .stage_1 .search_header.minimized .step_back, .search_container .stage_2 .search_header.minimized .step_back, .search_container .stage_3 .search_header.minimized .step_back {
          padding-top: 0;
          top: 39%;
          font-size: 0.8em;
          padding: 0 4px 2px 4px; }
          .search_container .stage_1 .search_header.minimized .step_back .back_btn_icon, .search_container .stage_2 .search_header.minimized .step_back .back_btn_icon, .search_container .stage_3 .search_header.minimized .step_back .back_btn_icon {
            width: 8px; }
    .search_container .stage_1 .search_header .dest_search {
      width: 90%;
      min-width: 230px;
      max-width: 400px;
      margin-left: auto;
      margin-right: auto; }
    .search_container .stage_1 .search_header .header_top .title span {
      font-size: 0.5em; }
    .search_container .stage_2 .search_header .header_top .title {
      font-size: 1.7em; }
      .search_container .stage_2 .search_header .header_top .title span {
        font-size: 0.7em;
        font-family: 'PTSansCaptionRegular'; }
    .search_container .stage_2 .search_header .header_top .loading {
      height: 3em; }
    .search_container .stage_3 .search_header .header_top .title {
      margin-top: 2px;
      font-family: 'PTSansCaptionRegular'; }
    .search_container .stage_3 .search_header .header_top .title .part_1 {
      font-size: 0.8em;
      font-family: 'PTSansCaptionRegular'; }
    .search_container .list .stage {
      width: 260px; }

  .search_header .search_controls .basket_controls .spot_cart {
    margin: 1.5em 10%; } }
@media screen and (max-width: 359px) {
  .search_header {
    font-size: 9px; }

  .search_header .search_controls .basket_controls .spot_cart {
    margin: 1.5em 2%; }

  .search_container .stage_1 .search_header .header_top .title, .search_container .stage_2 .search_header .header_top .title, .search_container .stage_3 .search_header .header_top .title {
    padding-left: 48px;
    margin-top: 7px;
    font-size: 1.5em; }
  .search_container .stage_1 .search_header.minimized .header_top .previous_stage, .search_container .stage_2 .search_header.minimized .header_top .previous_stage, .search_container .stage_3 .search_header.minimized .header_top .previous_stage {
    font-size: 1.3em;
    margin-left: 54px; }
  .search_container .stage_1 .search_header .header_top .title, .search_container .stage_2 .search_header .header_top .title {
    margin-top: 9px; }
  .search_container .stage_2 .search_header .header_top .title {
    font-size: 1.4em; } }
.basket_controls {
  box-shadow: 0px -2px 3px rgba(100, 100, 100, 0.4);
  max-width: 1375px;
  z-index: 8200;
  height: 100px;
  background-color: #fff;
  position: fixed;
  bottom: 0;
  width: 100%; }
  .basket_controls.footer_sit {
    position: absolute;
    bottom: -24px; }
  .basket_controls .expand {
    position: absolute;
    height: 100px;
    bottom: 0;
    left: 0;
    right: 0;
    display: none;
    z-index: 9000; }
  .basket_controls .slide_icon {
    background-position: center 10px;
    background-repeat: no-repeat;
    -webkit-transition: 300ms ease opacity;
    -moz-transition: 300ms ease opacity;
    -ms-transition: 300ms ease opacity;
    -o-transition: 300ms ease opacity;
    transition: 300ms ease opacity; }
    .basket_controls .slide_icon.up {
      opacity: 1; }
    .basket_controls .slide_icon.up_faded {
      opacity: 0; }
  .basket_controls .spot_cart {
    box-shadow: none;
    margin: 20px auto;
    max-width: 1164px;
    height: 60px;
    width: 100%;
    padding: 0;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box; }
    .basket_controls .spot_cart .heart_logo {
      display: none;
      float: left;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background-color: #e0e0e0;
      background-position: center;
      background-repeat: no-repeat;
      margin-right: 1em; }
    .basket_controls .spot_cart .search_row .menu_padding_top {
      height: 30px;
      display: none; }
    .basket_controls .spot_cart .search_row .item {
      display: block;
      float: left;
      width: 70px;
      height: 60px;
      margin: 0px 4px 4px 4px;
      border-radius: 3px;
      overflow: hidden;
      position: relative;
      cursor: pointer; }
      .basket_controls .spot_cart .search_row .item .spot_name {
        font-family: 'PTSansCaptionRegular';
        font-size: 1.3em;
        display: none;
        line-height: 61px;
        float: left;
        margin: 0 0 0 9%; }
      .basket_controls .spot_cart .search_row .item .remove {
        position: absolute;
        top: 3px;
        right: 3px;
        width: 10px;
        height: 10px;
        float: right;
        padding: 0px;
        margin: 0px;
        cursor: pointer;
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain; }
      .basket_controls .spot_cart .search_row .item .large_remove {
        margin: 10px 0;
        width: 40px;
        height: 40px;
        border-radius: 20px;
        background-color: #e0e0e0;
        position: relative;
        float: right;
        background-position: center;
        background-repeat: no-repeat;
        background-size: auto; }
    .basket_controls .spot_cart .search_row .item_placeholder {
      display: block;
      float: left;
      margin: 0px 9px 4px 9px; }
      .basket_controls .spot_cart .search_row .item_placeholder .grey {
        background: #e0e0e0;
        width: 60px;
        height: 60px;
        border-radius: 30px;
        overflow: hidden;
        position: relative; }
    .basket_controls .spot_cart .search_row .item img {
      display: block;
      float: left;
      width: 60px;
      height: 60px;
      border-radius: 50%; }
    .basket_controls .spot_cart .cart_text {
      font-family: 'PTSansCaptionRegular';
      font-size: 0.9em;
      display: block;
      float: left;
      height: 60px;
      margin: 0px 0px 0px 20px;
      position: relative;
      line-height: 68px;
      color: #6c6c6c; }
      .basket_controls .spot_cart .cart_text .selected_number {
        display: none; }
        .basket_controls .spot_cart .cart_text .selected_number .plural {
          display: inline-block;
          text-transform: none; }
    .basket_controls .spot_cart .search_btn {
      z-index: 9999;
      position: absolute;
      cursor: pointer;
      right: 1%;
      top: 50%;
      margin-top: -24px;
      display: block;
      padding: 14px 15px;
      border-radius: 3px;
      background: #69acf0;
      font-family: 'PTSansCaptionRegular';
      line-height: 14px;
      text-transform: uppercase;
      font-size: 1.5em;
      color: #fff;
      box-shadow: 1px 3px 4px #9f9f9f; }
      .basket_controls .spot_cart .search_btn .search_button_icon {
        display: inline-block;
        height: 18px;
        width: 25px;
        background-position: right center;
        background-repeat: no-repeat;
        background-size: contain;
        vertical-align: bottom; }

@media screen and (max-width: 969px) {
  .basket_controls .spot_cart {
    margin: 27px auto;
    padding: 0 5%; }
    .basket_controls .spot_cart .search_row .item, .basket_controls .spot_cart .search_row .item_placeholder {
      margin: 0px 2px 4px 0px;
      width: 58px;
      height: 45px; }
    .basket_controls .spot_cart .search_row .item img, .basket_controls .spot_cart .search_row .item_placeholder .grey {
      width: 45px;
      height: 45px; }
    .basket_controls .spot_cart .cart_text {
      height: 45px;
      line-height: 50px; }
    .basket_controls .spot_cart .search_btn {
      right: 5%;
      margin-top: -20px;
      padding: 11px 15px;
      font-size: 1.2em; }
      .basket_controls .spot_cart .search_btn .search_button_icon {
        height: 15px;
        width: 18px; } }
@media screen and (max-width: 775px) {
  .basket_controls {
    background-color: transparent;
    box-shadow: none; }
    .basket_controls .expand, .basket_controls .spot_cart .search_row .retract {
      display: block; }
    .basket_controls .spot_cart {
      box-shadow: 0px -2px 3px rgba(100, 100, 100, 0.4);
      height: 100%;
      padding: 20px 0 20px 5%;
      margin: 0;
      background-color: white; }
      .basket_controls .spot_cart .heart_logo {
        display: block; }
      .basket_controls .spot_cart .search_row {
        -webkit-transition: 300ms ease -webkit-transform;
        -moz-transition: 300ms ease -moz-transform;
        -ms-transition: 300ms ease -ms-transform;
        -o-transition: 300ms ease -o-transform;
        transition: 300ms ease transform;
        overflow: hidden;
        height: auto;
        z-index: -1;
        background-color: #fff;
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        padding: 0 5% 100px 5%; }
        .basket_controls .spot_cart .search_row .menu_padding_top {
          display: block; }
        .basket_controls .spot_cart .search_row .item {
          display: block;
          float: none;
          clear: both;
          margin: 0;
          padding: 5px 0;
          width: 100%;
          height: 60px; }
          .basket_controls .spot_cart .search_row .item img {
            width: 60px;
            height: 60px; }
          .basket_controls .spot_cart .search_row .item .spot_name {
            display: block; }
          .basket_controls .spot_cart .search_row .item .remove {
            display: none; }
          .basket_controls .spot_cart .search_row .item .large_remove {
            display: block; }
          .basket_controls .spot_cart .search_row .item:last-child {
            margin-bottom: 15px; }
        .basket_controls .spot_cart .search_row .item_placeholder {
          display: none; }
      .basket_controls .spot_cart .cart_text {
        margin-top: 16px;
        line-height: 20px;
        color: #69acf0; }
        .basket_controls .spot_cart .cart_text .selected_number {
          margin: 0;
          line-height: 20px;
          font-size: 1.7em;
          color: #858585;
          font-family: 'PTSansCaptionRegular';
          display: block; } }
@media screen and (max-width: 581px) {
  .basket_controls .spot_cart .search_row {
    height: auto; }
    .basket_controls .spot_cart .search_row .item .spot_name {
      margin-left: 20px;
      font-size: 1.1em; }
    .basket_controls .spot_cart .search_row .item .large_remove {
      width: 30px;
      height: 30px;
      margin: 15px 0; }
  .basket_controls .spot_cart .search_btn {
    margin-top: -16px;
    padding: 8px 7px 8px 10px;
    font-size: 1.1em;
    line-height: 12px; }
    .basket_controls .spot_cart .search_btn .search_button_icon {
      height: 15px;
      width: 13px; } }
@media screen and (max-width: 400px) {
  .basket_controls {
    height: 85px; }
    .basket_controls .expand {
      height: 85px; }
    .basket_controls .spot_cart {
      padding: 15px 0 15px 5%; }
      .basket_controls .spot_cart .search_row {
        height: 600px;
        bottom: 80px; }
        .basket_controls .spot_cart .search_row .item {
          height: 45px; }
          .basket_controls .spot_cart .search_row .item img {
            width: 35px;
            height: 35px; }
          .basket_controls .spot_cart .search_row .item .spot_name {
            line-height: 35px;
            margin-left: 5px;
            font-size: 1.1em; }
          .basket_controls .spot_cart .search_row .item .large_remove {
            width: 19px;
            height: 19px;
            margin: 8px 0;
            background-size: 15px; }
      .basket_controls .spot_cart .heart_logo {
        width: 50px;
        height: 50px;
        margin-top: 5px;
        margin-right: 0.8em;
        background-size: 70%; }
      .basket_controls .spot_cart .cart_text {
        font-size: 0.9em;
        margin-left: 0px;
        line-height: 16px; }
        .basket_controls .spot_cart .cart_text .selected_number {
          font-size: 1.5em; }
      .basket_controls .spot_cart .search_btn {
        padding: 8px 4px 8px 6px; }
        .basket_controls .spot_cart .search_btn .search_button_icon {
          height: 15px;
          width: 13px; } }
.destination_container {
  padding-bottom: 32px;
  background-color: #f7fafc; }
  .destination_container .navbar {
    margin-bottom: 0px !important; }
    .destination_container .navbar .navbar-brand2 {
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap; }
      .destination_container .navbar .navbar-brand2 h3 {
        text-overflow: ellipsis;
        overflow: hidden; }

.resp_cont {
  position: relative;
  overflow: hidden; }

.resp_width {
  position: absolute;
  height: 100%;
  top: 50%;
  left: 50%;
  width: auto;
  margin: 0 auto;
  -moz-transform: translateX(-50%) translateY(-50%);
  -ms-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%); }

.resp_height {
  position: absolute;
  height: auto;
  top: 50%;
  left: 50%;
  width: 100%;
  margin: 0 auto;
  -moz-transform: translateX(-50%) translateY(-50%);
  -ms-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%); }

.mobile_tabs {
  display: none;
  padding: 10px 5px;
  text-transform: uppercase;
  border-top: 3px solid #999;
  background: #fff;
  margin: 8px;
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.4);
  position: relative;
  cursor: pointer;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none; }
  .mobile_tabs:after {
    content: '';
    border: 5px solid transparent;
    border-left-color: #aaa;
    position: absolute;
    top: 50%;
    right: 10px;
    margin-top: -6px; }
  .mobile_tabs.active {
    border-color: <?=$styling['WEB_DESTINATION_FEATURED_COLOUR']['value']?>; }
    .mobile_tabs.active:after {
      content: '';
      border: 5px solid transparent;
      border-top-color: #aaa;
      position: absolute;
      top: 50%;
      right: 10px;
      margin-top: -1px; }

.box {
  padding: 20px;
  background: #fff;
  margin: 8px;
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.4);
  font-size: 1em; }

@media screen and (max-width: 480px) {
  .mobile_tabs {
    display: block; } }
.interests_modal .modal-dialog .modal-content {
  border-radius: 0px;
  padding: 20px 30px; }
  .interests_modal .modal-dialog .modal-content .modal-header {
    border-bottom: 2px dotted #ccc;
    padding: 0px 0px 5px 0px; }
    .interests_modal .modal-dialog .modal-content .modal-header h3 {
      text-transform: uppercase;
      font-size: 18px; }
      .interests_modal .modal-dialog .modal-content .modal-header h3 span {
        color: #00458f; }
        .interests_modal .modal-dialog .modal-content .modal-header h3 span img {
          margin-top: -3px; }
    .interests_modal .modal-dialog .modal-content .modal-header .close {
      font-weight: normal;
      opacity: 0.5;
      font-size: 12px;
      font-size: 20px;
      margin-top: -10px;
      margin-right: -10px; }
  .interests_modal .modal-dialog .modal-content .modal-body {
    padding: 10px 0px; }
    .interests_modal .modal-dialog .modal-content .modal-body h3 {
      font-size: 15px;
      line-height: 1.4em;
      color: #4f4f4f; }
    .interests_modal .modal-dialog .modal-content .modal-body .note {
      font-size: 11px;
      font-style: italic;
      margin-bottom: 1.5em;
      color: #4f4f4f; }
    .interests_modal .modal-dialog .modal-content .modal-body .interest_options {
      margin: 2em 0px; }
      .interests_modal .modal-dialog .modal-content .modal-body .interest_options span {
        display: inline-block;
        margin: 1px;
        padding: 12px 0px;
        border: 1px solid #c5c5c5;
        width: 105px;
        font-size: 12px;
        font-weight: bold;
        text-align: center;
        cursor: pointer;
        color: #4f4f4f;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none; }
        .interests_modal .modal-dialog .modal-content .modal-body .interest_options span.selected {
          color: #fff;
          background: #00458f; }
    .interests_modal .modal-dialog .modal-content .modal-body button {
      cursor: pointer;
      display: block;
      margin: 3em auto 1em auto;
      padding: 10px 32px 10px 10px;
      color: #fff;
      background: <?=$styling['WEB_DESTINATION_FEATURED_COLOUR']['value']?>;
      border: 0px;
      border-radius: 2px;
      text-transform: uppercase;
      font-weight: bold;
      font-size: 13px;
      z-index: 2;
      position: relative; }
      .interests_modal .modal-dialog .modal-content .modal-body button:after {
        content: '';
        border: 5px solid transparent;
        border-left-color: #fff;
        border-left-width: 8px;
        position: absolute;
        top: 50%;
        right: 10px;
        margin-top: -6px; }

.lw_watermark {
  display: block;
  margin: 2em auto;
  clear: both; }
  .lw_watermark:hover {
    opacity: 1; }

.grid {
  margin-right: auto;
  margin-left: auto;
  padding: 8px;
  max-width: 960px; }
  .grid:before, .grid:after {
    content: " ";
    display: table; }
  .grid:after {
    clear: both; }
  @media (min-width: 600px) {
    .grid {
      width: 736px; } }
  @media (min-width: 768px) {
    .grid {
      width: 956px; } }
  @media (min-width: 960px) {
    .grid {
      width: 1156px; } }

.grid-fluid {
  margin-right: auto;
  margin-left: auto;
  padding: 8px;
  max-width: 960px; }
  .grid-fluid:before, .grid-fluid:after {
    content: " ";
    display: table; }
  .grid-fluid:after {
    clear: both; }

.grid .row,
.grid-fluid .row {
  margin-left: -8px;
  margin-right: -8px; }
  .grid .row:before, .grid .row:after,
  .grid-fluid .row:before,
  .grid-fluid .row:after {
    content: " ";
    display: table; }
  .grid .row:after,
  .grid-fluid .row:after {
    clear: both; }
.grid .col-xs-1, .grid .col-sm-1, .grid .col-md-1, .grid .col-lg-1, .grid .col-xs-2, .grid .col-sm-2, .grid .col-md-2, .grid .col-lg-2, .grid .col-xs-3, .grid .col-sm-3, .grid .col-md-3, .grid .col-lg-3, .grid .col-xs-4, .grid .col-sm-4, .grid .col-md-4, .grid .col-lg-4, .grid .col-xs-5, .grid .col-sm-5, .grid .col-md-5, .grid .col-lg-5, .grid .col-xs-6, .grid .col-sm-6, .grid .col-md-6, .grid .col-lg-6, .grid .col-xs-7, .grid .col-sm-7, .grid .col-md-7, .grid .col-lg-7, .grid .col-xs-8, .grid .col-sm-8, .grid .col-md-8, .grid .col-lg-8, .grid .col-xs-9, .grid .col-sm-9, .grid .col-md-9, .grid .col-lg-9, .grid .col-xs-10, .grid .col-sm-10, .grid .col-md-10, .grid .col-lg-10, .grid .col-xs-11, .grid .col-sm-11, .grid .col-md-11, .grid .col-lg-11, .grid .col-xs-12, .grid .col-sm-12, .grid .col-md-12, .grid .col-lg-12,
.grid-fluid .col-xs-1,
.grid-fluid .col-sm-1,
.grid-fluid .col-md-1,
.grid-fluid .col-lg-1,
.grid-fluid .col-xs-2,
.grid-fluid .col-sm-2,
.grid-fluid .col-md-2,
.grid-fluid .col-lg-2,
.grid-fluid .col-xs-3,
.grid-fluid .col-sm-3,
.grid-fluid .col-md-3,
.grid-fluid .col-lg-3,
.grid-fluid .col-xs-4,
.grid-fluid .col-sm-4,
.grid-fluid .col-md-4,
.grid-fluid .col-lg-4,
.grid-fluid .col-xs-5,
.grid-fluid .col-sm-5,
.grid-fluid .col-md-5,
.grid-fluid .col-lg-5,
.grid-fluid .col-xs-6,
.grid-fluid .col-sm-6,
.grid-fluid .col-md-6,
.grid-fluid .col-lg-6,
.grid-fluid .col-xs-7,
.grid-fluid .col-sm-7,
.grid-fluid .col-md-7,
.grid-fluid .col-lg-7,
.grid-fluid .col-xs-8,
.grid-fluid .col-sm-8,
.grid-fluid .col-md-8,
.grid-fluid .col-lg-8,
.grid-fluid .col-xs-9,
.grid-fluid .col-sm-9,
.grid-fluid .col-md-9,
.grid-fluid .col-lg-9,
.grid-fluid .col-xs-10,
.grid-fluid .col-sm-10,
.grid-fluid .col-md-10,
.grid-fluid .col-lg-10,
.grid-fluid .col-xs-11,
.grid-fluid .col-sm-11,
.grid-fluid .col-md-11,
.grid-fluid .col-lg-11,
.grid-fluid .col-xs-12,
.grid-fluid .col-sm-12,
.grid-fluid .col-md-12,
.grid-fluid .col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-left: 8px;
  padding-right: 8px;
  padding-top: 8px;
  padding-bottom: 8px; }
.grid .col-xs-1, .grid .col-xs-2, .grid .col-xs-3, .grid .col-xs-4, .grid .col-xs-5, .grid .col-xs-6, .grid .col-xs-7, .grid .col-xs-8, .grid .col-xs-9, .grid .col-xs-10, .grid .col-xs-11, .grid .col-xs-12,
.grid-fluid .col-xs-1,
.grid-fluid .col-xs-2,
.grid-fluid .col-xs-3,
.grid-fluid .col-xs-4,
.grid-fluid .col-xs-5,
.grid-fluid .col-xs-6,
.grid-fluid .col-xs-7,
.grid-fluid .col-xs-8,
.grid-fluid .col-xs-9,
.grid-fluid .col-xs-10,
.grid-fluid .col-xs-11,
.grid-fluid .col-xs-12 {
  float: left; }
.grid .col-xs-1,
.grid-fluid .col-xs-1 {
  width: 8.33333%; }
.grid .col-xs-2,
.grid-fluid .col-xs-2 {
  width: 16.66667%; }
.grid .col-xs-3,
.grid-fluid .col-xs-3 {
  width: 25%; }
.grid .col-xs-4,
.grid-fluid .col-xs-4 {
  width: 33.33333%; }
.grid .col-xs-5,
.grid-fluid .col-xs-5 {
  width: 41.66667%; }
.grid .col-xs-6,
.grid-fluid .col-xs-6 {
  width: 50%; }
.grid .col-xs-7,
.grid-fluid .col-xs-7 {
  width: 58.33333%; }
.grid .col-xs-8,
.grid-fluid .col-xs-8 {
  width: 66.66667%; }
.grid .col-xs-9,
.grid-fluid .col-xs-9 {
  width: 75%; }
.grid .col-xs-10,
.grid-fluid .col-xs-10 {
  width: 83.33333%; }
.grid .col-xs-11,
.grid-fluid .col-xs-11 {
  width: 91.66667%; }
.grid .col-xs-12,
.grid-fluid .col-xs-12 {
  width: 100%; }
.grid .col-xs-pull-0,
.grid-fluid .col-xs-pull-0 {
  right: auto; }
.grid .col-xs-pull-1,
.grid-fluid .col-xs-pull-1 {
  right: 8.33333%; }
.grid .col-xs-pull-2,
.grid-fluid .col-xs-pull-2 {
  right: 16.66667%; }
.grid .col-xs-pull-3,
.grid-fluid .col-xs-pull-3 {
  right: 25%; }
.grid .col-xs-pull-4,
.grid-fluid .col-xs-pull-4 {
  right: 33.33333%; }
.grid .col-xs-pull-5,
.grid-fluid .col-xs-pull-5 {
  right: 41.66667%; }
.grid .col-xs-pull-6,
.grid-fluid .col-xs-pull-6 {
  right: 50%; }
.grid .col-xs-pull-7,
.grid-fluid .col-xs-pull-7 {
  right: 58.33333%; }
.grid .col-xs-pull-8,
.grid-fluid .col-xs-pull-8 {
  right: 66.66667%; }
.grid .col-xs-pull-9,
.grid-fluid .col-xs-pull-9 {
  right: 75%; }
.grid .col-xs-pull-10,
.grid-fluid .col-xs-pull-10 {
  right: 83.33333%; }
.grid .col-xs-pull-11,
.grid-fluid .col-xs-pull-11 {
  right: 91.66667%; }
.grid .col-xs-pull-12,
.grid-fluid .col-xs-pull-12 {
  right: 100%; }
.grid .col-xs-push-0,
.grid-fluid .col-xs-push-0 {
  left: auto; }
.grid .col-xs-push-1,
.grid-fluid .col-xs-push-1 {
  left: 8.33333%; }
.grid .col-xs-push-2,
.grid-fluid .col-xs-push-2 {
  left: 16.66667%; }
.grid .col-xs-push-3,
.grid-fluid .col-xs-push-3 {
  left: 25%; }
.grid .col-xs-push-4,
.grid-fluid .col-xs-push-4 {
  left: 33.33333%; }
.grid .col-xs-push-5,
.grid-fluid .col-xs-push-5 {
  left: 41.66667%; }
.grid .col-xs-push-6,
.grid-fluid .col-xs-push-6 {
  left: 50%; }
.grid .col-xs-push-7,
.grid-fluid .col-xs-push-7 {
  left: 58.33333%; }
.grid .col-xs-push-8,
.grid-fluid .col-xs-push-8 {
  left: 66.66667%; }
.grid .col-xs-push-9,
.grid-fluid .col-xs-push-9 {
  left: 75%; }
.grid .col-xs-push-10,
.grid-fluid .col-xs-push-10 {
  left: 83.33333%; }
.grid .col-xs-push-11,
.grid-fluid .col-xs-push-11 {
  left: 91.66667%; }
.grid .col-xs-push-12,
.grid-fluid .col-xs-push-12 {
  left: 100%; }
.grid .col-xs-offset-0,
.grid-fluid .col-xs-offset-0 {
  margin-left: 0%; }
.grid .col-xs-offset-1,
.grid-fluid .col-xs-offset-1 {
  margin-left: 8.33333%; }
.grid .col-xs-offset-2,
.grid-fluid .col-xs-offset-2 {
  margin-left: 16.66667%; }
.grid .col-xs-offset-3,
.grid-fluid .col-xs-offset-3 {
  margin-left: 25%; }
.grid .col-xs-offset-4,
.grid-fluid .col-xs-offset-4 {
  margin-left: 33.33333%; }
.grid .col-xs-offset-5,
.grid-fluid .col-xs-offset-5 {
  margin-left: 41.66667%; }
.grid .col-xs-offset-6,
.grid-fluid .col-xs-offset-6 {
  margin-left: 50%; }
.grid .col-xs-offset-7,
.grid-fluid .col-xs-offset-7 {
  margin-left: 58.33333%; }
.grid .col-xs-offset-8,
.grid-fluid .col-xs-offset-8 {
  margin-left: 66.66667%; }
.grid .col-xs-offset-9,
.grid-fluid .col-xs-offset-9 {
  margin-left: 75%; }
.grid .col-xs-offset-10,
.grid-fluid .col-xs-offset-10 {
  margin-left: 83.33333%; }
.grid .col-xs-offset-11,
.grid-fluid .col-xs-offset-11 {
  margin-left: 91.66667%; }
.grid .col-xs-offset-12,
.grid-fluid .col-xs-offset-12 {
  margin-left: 100%; }
@media (min-width: 600px) {
  .grid .col-sm-1, .grid .col-sm-2, .grid .col-sm-3, .grid .col-sm-4, .grid .col-sm-5, .grid .col-sm-6, .grid .col-sm-7, .grid .col-sm-8, .grid .col-sm-9, .grid .col-sm-10, .grid .col-sm-11, .grid .col-sm-12,
  .grid-fluid .col-sm-1,
  .grid-fluid .col-sm-2,
  .grid-fluid .col-sm-3,
  .grid-fluid .col-sm-4,
  .grid-fluid .col-sm-5,
  .grid-fluid .col-sm-6,
  .grid-fluid .col-sm-7,
  .grid-fluid .col-sm-8,
  .grid-fluid .col-sm-9,
  .grid-fluid .col-sm-10,
  .grid-fluid .col-sm-11,
  .grid-fluid .col-sm-12 {
    float: left; }
  .grid .col-sm-1,
  .grid-fluid .col-sm-1 {
    width: 8.33333%; }
  .grid .col-sm-2,
  .grid-fluid .col-sm-2 {
    width: 16.66667%; }
  .grid .col-sm-3,
  .grid-fluid .col-sm-3 {
    width: 25%; }
  .grid .col-sm-4,
  .grid-fluid .col-sm-4 {
    width: 33.33333%; }
  .grid .col-sm-5,
  .grid-fluid .col-sm-5 {
    width: 41.66667%; }
  .grid .col-sm-6,
  .grid-fluid .col-sm-6 {
    width: 50%; }
  .grid .col-sm-7,
  .grid-fluid .col-sm-7 {
    width: 58.33333%; }
  .grid .col-sm-8,
  .grid-fluid .col-sm-8 {
    width: 66.66667%; }
  .grid .col-sm-9,
  .grid-fluid .col-sm-9 {
    width: 75%; }
  .grid .col-sm-10,
  .grid-fluid .col-sm-10 {
    width: 83.33333%; }
  .grid .col-sm-11,
  .grid-fluid .col-sm-11 {
    width: 91.66667%; }
  .grid .col-sm-12,
  .grid-fluid .col-sm-12 {
    width: 100%; }
  .grid .col-sm-pull-0,
  .grid-fluid .col-sm-pull-0 {
    right: auto; }
  .grid .col-sm-pull-1,
  .grid-fluid .col-sm-pull-1 {
    right: 8.33333%; }
  .grid .col-sm-pull-2,
  .grid-fluid .col-sm-pull-2 {
    right: 16.66667%; }
  .grid .col-sm-pull-3,
  .grid-fluid .col-sm-pull-3 {
    right: 25%; }
  .grid .col-sm-pull-4,
  .grid-fluid .col-sm-pull-4 {
    right: 33.33333%; }
  .grid .col-sm-pull-5,
  .grid-fluid .col-sm-pull-5 {
    right: 41.66667%; }
  .grid .col-sm-pull-6,
  .grid-fluid .col-sm-pull-6 {
    right: 50%; }
  .grid .col-sm-pull-7,
  .grid-fluid .col-sm-pull-7 {
    right: 58.33333%; }
  .grid .col-sm-pull-8,
  .grid-fluid .col-sm-pull-8 {
    right: 66.66667%; }
  .grid .col-sm-pull-9,
  .grid-fluid .col-sm-pull-9 {
    right: 75%; }
  .grid .col-sm-pull-10,
  .grid-fluid .col-sm-pull-10 {
    right: 83.33333%; }
  .grid .col-sm-pull-11,
  .grid-fluid .col-sm-pull-11 {
    right: 91.66667%; }
  .grid .col-sm-pull-12,
  .grid-fluid .col-sm-pull-12 {
    right: 100%; }
  .grid .col-sm-push-0,
  .grid-fluid .col-sm-push-0 {
    left: auto; }
  .grid .col-sm-push-1,
  .grid-fluid .col-sm-push-1 {
    left: 8.33333%; }
  .grid .col-sm-push-2,
  .grid-fluid .col-sm-push-2 {
    left: 16.66667%; }
  .grid .col-sm-push-3,
  .grid-fluid .col-sm-push-3 {
    left: 25%; }
  .grid .col-sm-push-4,
  .grid-fluid .col-sm-push-4 {
    left: 33.33333%; }
  .grid .col-sm-push-5,
  .grid-fluid .col-sm-push-5 {
    left: 41.66667%; }
  .grid .col-sm-push-6,
  .grid-fluid .col-sm-push-6 {
    left: 50%; }
  .grid .col-sm-push-7,
  .grid-fluid .col-sm-push-7 {
    left: 58.33333%; }
  .grid .col-sm-push-8,
  .grid-fluid .col-sm-push-8 {
    left: 66.66667%; }
  .grid .col-sm-push-9,
  .grid-fluid .col-sm-push-9 {
    left: 75%; }
  .grid .col-sm-push-10,
  .grid-fluid .col-sm-push-10 {
    left: 83.33333%; }
  .grid .col-sm-push-11,
  .grid-fluid .col-sm-push-11 {
    left: 91.66667%; }
  .grid .col-sm-push-12,
  .grid-fluid .col-sm-push-12 {
    left: 100%; }
  .grid .col-sm-offset-0,
  .grid-fluid .col-sm-offset-0 {
    margin-left: 0%; }
  .grid .col-sm-offset-1,
  .grid-fluid .col-sm-offset-1 {
    margin-left: 8.33333%; }
  .grid .col-sm-offset-2,
  .grid-fluid .col-sm-offset-2 {
    margin-left: 16.66667%; }
  .grid .col-sm-offset-3,
  .grid-fluid .col-sm-offset-3 {
    margin-left: 25%; }
  .grid .col-sm-offset-4,
  .grid-fluid .col-sm-offset-4 {
    margin-left: 33.33333%; }
  .grid .col-sm-offset-5,
  .grid-fluid .col-sm-offset-5 {
    margin-left: 41.66667%; }
  .grid .col-sm-offset-6,
  .grid-fluid .col-sm-offset-6 {
    margin-left: 50%; }
  .grid .col-sm-offset-7,
  .grid-fluid .col-sm-offset-7 {
    margin-left: 58.33333%; }
  .grid .col-sm-offset-8,
  .grid-fluid .col-sm-offset-8 {
    margin-left: 66.66667%; }
  .grid .col-sm-offset-9,
  .grid-fluid .col-sm-offset-9 {
    margin-left: 75%; }
  .grid .col-sm-offset-10,
  .grid-fluid .col-sm-offset-10 {
    margin-left: 83.33333%; }
  .grid .col-sm-offset-11,
  .grid-fluid .col-sm-offset-11 {
    margin-left: 91.66667%; }
  .grid .col-sm-offset-12,
  .grid-fluid .col-sm-offset-12 {
    margin-left: 100%; } }
@media (min-width: 768px) {
  .grid .col-md-1, .grid .col-md-2, .grid .col-md-3, .grid .col-md-4, .grid .col-md-5, .grid .col-md-6, .grid .col-md-7, .grid .col-md-8, .grid .col-md-9, .grid .col-md-10, .grid .col-md-11, .grid .col-md-12,
  .grid-fluid .col-md-1,
  .grid-fluid .col-md-2,
  .grid-fluid .col-md-3,
  .grid-fluid .col-md-4,
  .grid-fluid .col-md-5,
  .grid-fluid .col-md-6,
  .grid-fluid .col-md-7,
  .grid-fluid .col-md-8,
  .grid-fluid .col-md-9,
  .grid-fluid .col-md-10,
  .grid-fluid .col-md-11,
  .grid-fluid .col-md-12 {
    float: left; }
  .grid .col-md-1,
  .grid-fluid .col-md-1 {
    width: 8.33333%; }
  .grid .col-md-2,
  .grid-fluid .col-md-2 {
    width: 16.66667%; }
  .grid .col-md-3,
  .grid-fluid .col-md-3 {
    width: 25%; }
  .grid .col-md-4,
  .grid-fluid .col-md-4 {
    width: 33.33333%; }
  .grid .col-md-5,
  .grid-fluid .col-md-5 {
    width: 41.66667%; }
  .grid .col-md-6,
  .grid-fluid .col-md-6 {
    width: 50%; }
  .grid .col-md-7,
  .grid-fluid .col-md-7 {
    width: 58.33333%; }
  .grid .col-md-8,
  .grid-fluid .col-md-8 {
    width: 66.66667%; }
  .grid .col-md-9,
  .grid-fluid .col-md-9 {
    width: 75%; }
  .grid .col-md-10,
  .grid-fluid .col-md-10 {
    width: 83.33333%; }
  .grid .col-md-11,
  .grid-fluid .col-md-11 {
    width: 91.66667%; }
  .grid .col-md-12,
  .grid-fluid .col-md-12 {
    width: 100%; }
  .grid .col-md-pull-0,
  .grid-fluid .col-md-pull-0 {
    right: auto; }
  .grid .col-md-pull-1,
  .grid-fluid .col-md-pull-1 {
    right: 8.33333%; }
  .grid .col-md-pull-2,
  .grid-fluid .col-md-pull-2 {
    right: 16.66667%; }
  .grid .col-md-pull-3,
  .grid-fluid .col-md-pull-3 {
    right: 25%; }
  .grid .col-md-pull-4,
  .grid-fluid .col-md-pull-4 {
    right: 33.33333%; }
  .grid .col-md-pull-5,
  .grid-fluid .col-md-pull-5 {
    right: 41.66667%; }
  .grid .col-md-pull-6,
  .grid-fluid .col-md-pull-6 {
    right: 50%; }
  .grid .col-md-pull-7,
  .grid-fluid .col-md-pull-7 {
    right: 58.33333%; }
  .grid .col-md-pull-8,
  .grid-fluid .col-md-pull-8 {
    right: 66.66667%; }
  .grid .col-md-pull-9,
  .grid-fluid .col-md-pull-9 {
    right: 75%; }
  .grid .col-md-pull-10,
  .grid-fluid .col-md-pull-10 {
    right: 83.33333%; }
  .grid .col-md-pull-11,
  .grid-fluid .col-md-pull-11 {
    right: 91.66667%; }
  .grid .col-md-pull-12,
  .grid-fluid .col-md-pull-12 {
    right: 100%; }
  .grid .col-md-push-0,
  .grid-fluid .col-md-push-0 {
    left: auto; }
  .grid .col-md-push-1,
  .grid-fluid .col-md-push-1 {
    left: 8.33333%; }
  .grid .col-md-push-2,
  .grid-fluid .col-md-push-2 {
    left: 16.66667%; }
  .grid .col-md-push-3,
  .grid-fluid .col-md-push-3 {
    left: 25%; }
  .grid .col-md-push-4,
  .grid-fluid .col-md-push-4 {
    left: 33.33333%; }
  .grid .col-md-push-5,
  .grid-fluid .col-md-push-5 {
    left: 41.66667%; }
  .grid .col-md-push-6,
  .grid-fluid .col-md-push-6 {
    left: 50%; }
  .grid .col-md-push-7,
  .grid-fluid .col-md-push-7 {
    left: 58.33333%; }
  .grid .col-md-push-8,
  .grid-fluid .col-md-push-8 {
    left: 66.66667%; }
  .grid .col-md-push-9,
  .grid-fluid .col-md-push-9 {
    left: 75%; }
  .grid .col-md-push-10,
  .grid-fluid .col-md-push-10 {
    left: 83.33333%; }
  .grid .col-md-push-11,
  .grid-fluid .col-md-push-11 {
    left: 91.66667%; }
  .grid .col-md-push-12,
  .grid-fluid .col-md-push-12 {
    left: 100%; }
  .grid .col-md-offset-0,
  .grid-fluid .col-md-offset-0 {
    margin-left: 0%; }
  .grid .col-md-offset-1,
  .grid-fluid .col-md-offset-1 {
    margin-left: 8.33333%; }
  .grid .col-md-offset-2,
  .grid-fluid .col-md-offset-2 {
    margin-left: 16.66667%; }
  .grid .col-md-offset-3,
  .grid-fluid .col-md-offset-3 {
    margin-left: 25%; }
  .grid .col-md-offset-4,
  .grid-fluid .col-md-offset-4 {
    margin-left: 33.33333%; }
  .grid .col-md-offset-5,
  .grid-fluid .col-md-offset-5 {
    margin-left: 41.66667%; }
  .grid .col-md-offset-6,
  .grid-fluid .col-md-offset-6 {
    margin-left: 50%; }
  .grid .col-md-offset-7,
  .grid-fluid .col-md-offset-7 {
    margin-left: 58.33333%; }
  .grid .col-md-offset-8,
  .grid-fluid .col-md-offset-8 {
    margin-left: 66.66667%; }
  .grid .col-md-offset-9,
  .grid-fluid .col-md-offset-9 {
    margin-left: 75%; }
  .grid .col-md-offset-10,
  .grid-fluid .col-md-offset-10 {
    margin-left: 83.33333%; }
  .grid .col-md-offset-11,
  .grid-fluid .col-md-offset-11 {
    margin-left: 91.66667%; }
  .grid .col-md-offset-12,
  .grid-fluid .col-md-offset-12 {
    margin-left: 100%; } }
@media (min-width: 960px) {
  .grid .col-lg-1, .grid .col-lg-2, .grid .col-lg-3, .grid .col-lg-4, .grid .col-lg-5, .grid .col-lg-6, .grid .col-lg-7, .grid .col-lg-8, .grid .col-lg-9, .grid .col-lg-10, .grid .col-lg-11, .grid .col-lg-12,
  .grid-fluid .col-lg-1,
  .grid-fluid .col-lg-2,
  .grid-fluid .col-lg-3,
  .grid-fluid .col-lg-4,
  .grid-fluid .col-lg-5,
  .grid-fluid .col-lg-6,
  .grid-fluid .col-lg-7,
  .grid-fluid .col-lg-8,
  .grid-fluid .col-lg-9,
  .grid-fluid .col-lg-10,
  .grid-fluid .col-lg-11,
  .grid-fluid .col-lg-12 {
    float: left; }
  .grid .col-lg-1,
  .grid-fluid .col-lg-1 {
    width: 8.33333%; }
  .grid .col-lg-2,
  .grid-fluid .col-lg-2 {
    width: 16.66667%; }
  .grid .col-lg-3,
  .grid-fluid .col-lg-3 {
    width: 25%; }
  .grid .col-lg-4,
  .grid-fluid .col-lg-4 {
    width: 33.33333%; }
  .grid .col-lg-5,
  .grid-fluid .col-lg-5 {
    width: 41.66667%; }
  .grid .col-lg-6,
  .grid-fluid .col-lg-6 {
    width: 50%; }
  .grid .col-lg-7,
  .grid-fluid .col-lg-7 {
    width: 58.33333%; }
  .grid .col-lg-8,
  .grid-fluid .col-lg-8 {
    width: 66.66667%; }
  .grid .col-lg-9,
  .grid-fluid .col-lg-9 {
    width: 75%; }
  .grid .col-lg-10,
  .grid-fluid .col-lg-10 {
    width: 83.33333%; }
  .grid .col-lg-11,
  .grid-fluid .col-lg-11 {
    width: 91.66667%; }
  .grid .col-lg-12,
  .grid-fluid .col-lg-12 {
    width: 100%; }
  .grid .col-lg-pull-0,
  .grid-fluid .col-lg-pull-0 {
    right: auto; }
  .grid .col-lg-pull-1,
  .grid-fluid .col-lg-pull-1 {
    right: 8.33333%; }
  .grid .col-lg-pull-2,
  .grid-fluid .col-lg-pull-2 {
    right: 16.66667%; }
  .grid .col-lg-pull-3,
  .grid-fluid .col-lg-pull-3 {
    right: 25%; }
  .grid .col-lg-pull-4,
  .grid-fluid .col-lg-pull-4 {
    right: 33.33333%; }
  .grid .col-lg-pull-5,
  .grid-fluid .col-lg-pull-5 {
    right: 41.66667%; }
  .grid .col-lg-pull-6,
  .grid-fluid .col-lg-pull-6 {
    right: 50%; }
  .grid .col-lg-pull-7,
  .grid-fluid .col-lg-pull-7 {
    right: 58.33333%; }
  .grid .col-lg-pull-8,
  .grid-fluid .col-lg-pull-8 {
    right: 66.66667%; }
  .grid .col-lg-pull-9,
  .grid-fluid .col-lg-pull-9 {
    right: 75%; }
  .grid .col-lg-pull-10,
  .grid-fluid .col-lg-pull-10 {
    right: 83.33333%; }
  .grid .col-lg-pull-11,
  .grid-fluid .col-lg-pull-11 {
    right: 91.66667%; }
  .grid .col-lg-pull-12,
  .grid-fluid .col-lg-pull-12 {
    right: 100%; }
  .grid .col-lg-push-0,
  .grid-fluid .col-lg-push-0 {
    left: auto; }
  .grid .col-lg-push-1,
  .grid-fluid .col-lg-push-1 {
    left: 8.33333%; }
  .grid .col-lg-push-2,
  .grid-fluid .col-lg-push-2 {
    left: 16.66667%; }
  .grid .col-lg-push-3,
  .grid-fluid .col-lg-push-3 {
    left: 25%; }
  .grid .col-lg-push-4,
  .grid-fluid .col-lg-push-4 {
    left: 33.33333%; }
  .grid .col-lg-push-5,
  .grid-fluid .col-lg-push-5 {
    left: 41.66667%; }
  .grid .col-lg-push-6,
  .grid-fluid .col-lg-push-6 {
    left: 50%; }
  .grid .col-lg-push-7,
  .grid-fluid .col-lg-push-7 {
    left: 58.33333%; }
  .grid .col-lg-push-8,
  .grid-fluid .col-lg-push-8 {
    left: 66.66667%; }
  .grid .col-lg-push-9,
  .grid-fluid .col-lg-push-9 {
    left: 75%; }
  .grid .col-lg-push-10,
  .grid-fluid .col-lg-push-10 {
    left: 83.33333%; }
  .grid .col-lg-push-11,
  .grid-fluid .col-lg-push-11 {
    left: 91.66667%; }
  .grid .col-lg-push-12,
  .grid-fluid .col-lg-push-12 {
    left: 100%; }
  .grid .col-lg-offset-0,
  .grid-fluid .col-lg-offset-0 {
    margin-left: 0%; }
  .grid .col-lg-offset-1,
  .grid-fluid .col-lg-offset-1 {
    margin-left: 8.33333%; }
  .grid .col-lg-offset-2,
  .grid-fluid .col-lg-offset-2 {
    margin-left: 16.66667%; }
  .grid .col-lg-offset-3,
  .grid-fluid .col-lg-offset-3 {
    margin-left: 25%; }
  .grid .col-lg-offset-4,
  .grid-fluid .col-lg-offset-4 {
    margin-left: 33.33333%; }
  .grid .col-lg-offset-5,
  .grid-fluid .col-lg-offset-5 {
    margin-left: 41.66667%; }
  .grid .col-lg-offset-6,
  .grid-fluid .col-lg-offset-6 {
    margin-left: 50%; }
  .grid .col-lg-offset-7,
  .grid-fluid .col-lg-offset-7 {
    margin-left: 58.33333%; }
  .grid .col-lg-offset-8,
  .grid-fluid .col-lg-offset-8 {
    margin-left: 66.66667%; }
  .grid .col-lg-offset-9,
  .grid-fluid .col-lg-offset-9 {
    margin-left: 75%; }
  .grid .col-lg-offset-10,
  .grid-fluid .col-lg-offset-10 {
    margin-left: 83.33333%; }
  .grid .col-lg-offset-11,
  .grid-fluid .col-lg-offset-11 {
    margin-left: 91.66667%; }
  .grid .col-lg-offset-12,
  .grid-fluid .col-lg-offset-12 {
    margin-left: 100%; } }

/*# sourceMappingURL=style.css.map */
