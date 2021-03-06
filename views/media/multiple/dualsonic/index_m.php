<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/preloader.min.css'); ?>" />
<?php

$this->managelayout->add_js('https://www.leadtracker.live/static/js/fixel.js'); 
    $AD_DIR  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['jid'])) $jid=$_GET['jid'];
    $uid=0;
    if(!empty($_GET['uid'])) $uid=$_GET['uid'];
    $at=0;
    if(!empty($_GET['at'])) $at=$_GET['at'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Expires" content="-1">
  <meta name="format-detection" content="telephone=no"/>
    <title>λμΌμλ</title>
    <style>
    * {padding: 0;margin: 0;}
    ul,ol,li,dt,dd {list-style: none;}
    body {
        font-family: 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
        font-size: 100%;
        color: #333;
        line-height: 1.5;
    }
    a {
        color: inherit;
        text-decoration: none;
    }
    video:focus {
        outline: none;
    }
    .blind {
        position: absolute;
        overflow: hidden;
        clip: rect(0 0 0 0);
        margin: -1px;
        width: 1px;
        height: 1px;
    }
    .clearfix:after {
        content: '';
        display: block;
        clear: both;
    }
    .wrap {
        width: 100%;
        min-width: 320px;
        max-width: 640px;
        margin: 0 auto;
        padding-bottom: 49px;
        box-sizing: border-box;
    }
    .img_box,
    .btn_img {
        font-size: 0;
    }
    .btn_img {
        background-color: transparent;
        border: none;
        padding: 0;
    }
    .img_box .img,
    .btn_img .img {
        font-size: 12px;
        width: 100%;
    }
    .box_center {
        text-align: center;
    }
    .txt_emph {
        color: #d51430;
        font-weight: bold;
    }
    .txt_bold {
        font-weight: bold;
    }
    .inp {
        box-sizing: border-box;
        color: #141414;
        border:1px solid #d3d3d3;
        border-radius: 1.5625vw;
        font-size: 15px;
        font-family: 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
    }
    .btn_fixed {
        position: fixed;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        z-index: 800;
        height: 49px;
    }
    .btn_fixed .img {
        height: 100%;
        width: auto;
    }
    .go_form {
        position: relative;
    }
    .go_form .btn_go_form {
        position: absolute;
        bottom: 2.3%;
        right: 4.6%;
        width: 49.6%;
    }
    .video_box01 {
        position: relative;
        width: 100%;
        height: 0;
    }
    .video_box01_16_9 {padding-bottom: 56.25%;}
    .video_box01_4_3 {padding-bottom: 75%;}
    .video_box01 iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .video_container01 {
        background-image: url('<?php echo $AD_DIR?>/images_m/bg_video01.jpg');
        background-repeat: no-repeat;
        background-color: #b9a698;
        background-size: 100%;
        background-position: center top;
        padding-bottom: 7.8%;
    }
    .video_container01 .video_box02 {
        position: relative;
        height: 0;
        padding-bottom: 54.68%;
    }
    .video_container01 .video_box02 video {
        position: absolute;
        width: 83.6%;
        height: 100%;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        background-color: #000;
    }
    .slide_wrap {
        position: relative;
        overflow: hidden;
    }
    .slide_wrap .slide_container {
        width: 400%;
    }
    .slide_wrap .slide_item {
        float: left;
        width: 25%;
    }
    .slide_wrap .btn_slide {
        position: absolute;
        top: 48%;
        right: 0;
        width: 10.939%;
        background-color: transparent;
        border: none;
    }
    .slide_wrap .btn_slide:focus {
        outline: none;
    }
    .video_beauty {
        background-color: #3e1011;
        padding-bottom: 6.25%;
    }
    .video_beauty .viedo_beauty_box {
        width: 92.1875%;
        margin: 0 auto;
        box-sizing: border-box;
        padding: 1.5%;
        background-color: #fff;
        font-size: 0;
    }
    .video_beauty .viedo_beauty_box:not(:first-child) {
        margin-top: 1.8%;
    }
    .video_beauty .viedo_beauty_box video {
        width: 100%;
        font-size: 100%;
    }
    .form_container {
        background-color: #3e1012;
        padding-top: 6.25%;
    }
    .form_container .inp_container {
        padding: 0 7.03125%;
        margin: 0 auto;
    }
    .form_container .inp_box {
        box-sizing: border-box;
        padding: 0 4px;
        color: #fff;
    }
    .form_container .row .inp_box {
        width: 65.4546%;
    }
    .form_container .row_02 {
        padding-left: 10.9090%;
    }
    .form_container .row_02 .inp_box {
        width: 49.99%;
    }
    .form_container .row_02 .inp_box_age {
        width: 57.4%;
    }
    .form_container .row,
    .form_container .row_02 {
        margin-bottom: 3.9%;
    }
    .form_container .cell {
        float: left;
        box-sizing: border-box;
    }
    .form_container .cell:nth-child(2n-1){
        width: 53.46%;
    }
    .form_container .cell:nth-child(2n) {
        width: 46.54%;
        padding-left: 5px;
    }
    .form_container .label_box {
        float: left;
    }
    .form_container .row .label_box {
        width: 34.5454%;
        padding-left: 10.9090%;
        box-sizing: border-box;
    }
    .form_container .row_02 .label_box {
        width: 50.01%;
    }
    .form_container .row_02 .label_box_age {
        width: 42.6%;
    }
    .form_container .inp_box {
        float: left;
        font-size: 3.75vw;
    }
    .form_container .inp {
        height: 7.03vw;
        width: 100%;
        font-size: 4.3vw;
        vertical-align: middle;
    }
    .form_container .row .inp {
        width: 100%;
    }
    .form_container .row .inp_tel {
        width: 28%;
    }
    .form_container .agree_box {
        text-align: center;
        margin-bottom: 4.6%;
    }
    .form_container .inp_check {
        vertical-align: middle;
    }
    .form_container .label_check {
        font-size: 15px;
        color: #fff;
        vertical-align: middle;
        letter-spacing: -0.05em;
    }
    .form_container .btn_box {
        text-align: center;
        font-size: 0;
    }
    .form_container .btn_submit {
        width: 70%;
        max-width: 305px;
    }
    .footer {
    padding: 7% 4% 5%;
    background-color: #ebebeb;
    font-size: 12px;
    color: #414141;
    line-height: 1.6;
    text-align: center;
    }
    .footer .row {
        margin-bottom: 3px;
    }
    .footer strong {
        font-weight: normal;
        color: #141414;
    }
    .btn_popup_agree {
        padding: 4px 8px;
        font-size: 13px;
        line-height: 1;
        background-color: #ddd;
        border: none;
        border-radius: 3px;
    }
    .popup_wrap {
        position: fixed;
        top: 0;
        left: auto;
        width: 100%;
        max-width: 640px;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
        z-index: 900;
        display: none;
    }
    .popup_container_agree {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 90%;
        height: 90%;
        transform: translate(-50%,-50%);
        background-color: #fff;
        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        display: none;
    }
    .popup_container_agree .popup_content {
        overflow-y: auto;
        padding: 5% 4%;
        height: calc(100% - 45px);
        box-sizing: border-box;
        font-size: 13px;
        line-height: 1.4;
    }
    .popup_container_agree .title01 {
        margin-bottom: 10px;
        font-size: 15px;
        font-weight: bold;
    }
    .popup_container_agree .title02 {
        margin-top: 14px;
        font-size: 14px;
        font-weight: bold;
    }
    .popup_container_agree .txt {
        margin-top: 10px;
    }
    .popup_container_agree .popup_btn_box {
        position: absolute;
        bottom: 0;
        width: 100%;
    }
    .popup_container_agree .btn_close {
        display: block;
        width: 100%;
        height: 45px;
        border: none;
        background-color: #333;
        color: #fff;
        font-size: 16px;
    }
    .popup_container_agree .table {
        margin-top: 10px;
    }
    .popup_container_agree .table table {
        width: 100%;
        border-collapse: collapse;
    }
    .popup_container_agree .table th,
    .popup_container_agree .table td {
        padding: 5px 3px;
        text-align: center;
        border: 1px solid #999;
    }
    @media screen and (min-width: 641px) {
        .wrap {padding-bottom: 49px;}
        .inp {border-radius: 10px;}
        .form_container .inp_box {font-size: 24px;}
        .form_container .inp {
            height: 45px;
            font-size: 28px;
        }
    }
    @media screen and (max-width: 359px) {
        .form_container .label_check {font-size: 13px;}
    }
    </style>
    <style>
    .alert 
    {
        padding: 20px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
        font-size:18px;
        line-height: 27px;
    }
    .alert h4 {
      margin-top: 0;
      color: inherit;
    }
    .alert .alert-link {
      font-weight: bold;
    }
    .alert > p,
    .alert > ul {
      margin-bottom: 0;
    }
    .alert > p + p {
      margin-top: 5px;
    }
    .alert-dismissable,
    .alert-dismissible {
      padding-right: 35px;
    }
    .alert-dismissable .close,
    .alert-dismissible .close {
      position: relative;
      top: -2px;
      right: -21px;
      color: inherit;
    }
    .alert-success {
      color: #3c763d;
      background-color: #dff0d8;
      border-color: #d6e9c6;
    }
    .alert-success hr {
      border-top-color: #c9e2b3;
    }
    .alert-success .alert-link {
      color: #2b542c;
    }
    .alert-info {
      color: #31708f;
      background-color: #d9edf7;
      border-color: #bce8f1;
    }
    .alert-info hr {
      border-top-color: #a6e1ec;
    }
    .alert-info .alert-link {
      color: #245269;
    }
    .alert-warning {
      color: #8a6d3b;
      background-color: #fcf8e3;
      border-color: #faebcc;
    }
    .alert-warning hr {
      border-top-color: #f7e1b5;
    }
    .alert-warning .alert-link {
      color: #66512c;
    }
    .alert-danger {
      color: #a94442;
      background-color: #f2dede;
      border-color: #ebccd1;
    }
    .alert-danger hr {
      border-top-color: #e4b9c0;
    }
    .alert-danger .alert-link {
      color: #843534;
    }

    .alert-info {
      background-image: -webkit-linear-gradient(top, #d9edf7 0%, #b9def0 100%);
      background-image: -o-linear-gradient(top, #d9edf7 0%, #b9def0 100%);
      background-image: -webkit-gradient(linear, left top, left bottom, from(#d9edf7), to(#b9def0));
      background-image: linear-gradient(to bottom, #d9edf7 0%, #b9def0 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffd9edf7', endColorstr='#ffb9def0', GradientType=0);
      background-repeat: repeat-x;
      border-color: #9acfea;
    }
        </style>
    
</head>
</head>
<body>
    <div class="wrap">
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <!-- νλ¨ κ³ μ  λ²νΌμμ­ -->
        <div class="btn_fixed btn_img"><a href="#formWrap"><img src="<?php echo $AD_DIR?>/images_m/btn_go_db01.gif" alt="κ²½ν λ°μΌλ¬ κ°κΈ°" class="img"></a></div>
        <!-- λ³Έλ¬Έ -->
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_01.jpg" alt="λͺν λ·°ν° λλ°μ΄μ€ λμΌμλ" class="img"></div>
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_02.jpg" alt="λμΌμλ νΉμ§" class="img"></div>

        <!-- λ ν μλ΄ μ μνκΈ° GO -->
        <div class="img_box go_form">
            <img src="<?php echo $AD_DIR?>/images_m/a_03.jpg" alt="λμΌμλ λ νλΉμ©" class="img">
            <div class="btn_go_form btn_img">
                <a href="#formWrap" class="link_go_form"><img src="<?php echo $AD_DIR?>/images_m/btn_go_db02.png" alt="λ ν μλ΄ μ μνκΈ° go" class="img"></a>
            </div>
        </div>
        <!-- λ ν μλ΄ μ μνκΈ° GO end-->

        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_04.jpg" alt="λμΌμλ μ¬μ©λ²" class="img"></div>

        <!-- μ νλΈ μμμμ­ -->
        <div class="video_box01 video_box01_16_9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/N9B6MQuMBpQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <!-- μ νλΈ μμμμ­ end -->

        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_05.jpg" alt="λμΌμλ 4μ£Ό, κ·Έ λλΌμ΄ λ³ν" class="img"></div>

        <!-- μ΄λ―Έμ§ μ¬λΌμ΄λ μμ­ -->
        <div class="slide_wrap">
            <ul class="slide_container">
                <li class="slide_item img_box"><img src="<?php echo $AD_DIR?>/images_m/slide01.jpg" alt="λκ°μ£Όλ¦ νμμ£Όλ¦κ°μ" class="img"></li>
                <li class="slide_item img_box"><img src="<?php echo $AD_DIR?>/images_m/slide02.jpg" alt="μ§νΌμΉλ°λ μ¦κ°" class="img"></li>
                <li class="slide_item img_box"><img src="<?php echo $AD_DIR?>/images_m/slide03.jpg" alt="μλ©΄λ¦¬ννκ°μ " class="img"></li>
                <li class="slide_item img_box"><img src="<?php echo $AD_DIR?>/images_m/slide04.jpg" alt="νΌλΆ μνλ ₯ μ¦κ° νΌλΆ μλ³΄μ΅ μ¦κ°" class="img"></li>
            </ul>
            <button class="btn_slide btn_img" id="btnSlide"><img src="<?php echo $AD_DIR?>/images_m/btn_slide.png" alt="λ€μμ΄λ―Έμ§" class="img"></button>
        </div>
        <!-- μ΄λ―Έμ§ μ¬λΌμ΄λ μμ­ end -->

        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_06.jpg" alt="λμΌμλ ν¨κ³Ό" class="img"></div>
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_07.jpg" alt="λμΌμλμ μ§μ  κ²½νν κ³ κ°λμ μμ λ¦¬λ·°" class="img"></div>
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_08.jpg" alt="μ°¨μμ΄ λ€λ₯Έ HIFUλ¦¬νν κΈ°κΈ° λμΌμλ" class="img"></div>

        <!-- μμ -->
        <div class="video_container01">
            <div class="video_box02">
                <video controls preload="metadata">
                    <source src="<?php echo $AD_DIR?>/video_m/video01.mp4#t=0.5" type="video/mp4">
                </video>
            </div>
        </div>
        <!-- μμ end -->

        <div class="img_box">
            <img src="<?php echo $AD_DIR?>/images_m/a_09.jpg" alt="μΈκ³μ΅μ΄ νΉν λμΌ λ μ΄μ΄ κΈ°μ  λμ κ°λ°" class="img">
        </div>
        
        <!-- λ ν μλ΄ μ μνκΈ° GO -->
        <div class="img_box go_form">
            <img src="<?php echo $AD_DIR?>/images_m/a_03.jpg" alt="λμΌμλ λ νλΉμ©" class="img">
            <div class="btn_go_form btn_img">
                <a href="#formWrap" class="link_go_form"><img src="<?php echo $AD_DIR?>/images_m/btn_go_db02.png" alt="λ ν μλ΄ μ μνκΈ° go" class="img"></a>
            </div>
        </div>
        <!-- λ ν μλ΄ μ μνκΈ° GO end-->

        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_10.jpg" alt="λμΌμλ κΈ°λ₯" class="img"></div>
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_11.jpg" alt="λμΌμλ μ¬μ©μ ν μ¬μ§" class="img"></div>

        <!-- μΈκΈ° λ·°ν° νλ‘κ·Έλ¨ μ λμΌμλ -->
        <div class="video_beauty">
            <div class="viedo_beauty_box">
                <video controls preload="metadata">
                    <source src="<?php echo $AD_DIR?>/video_m/video02.mp4#t=0.5">
                </video>
            </div>
            <div class="viedo_beauty_box">
                <video controls preload="metadata">
                    <source src="<?php echo $AD_DIR?>/video_m/video03.mp4#t=0.5">
                </video>
            </div>
        </div>
        <!-- μΈκΈ° λ·°ν° νλ‘κ·Έλ¨ μ λμΌμλ end -->

        <!-- dbform -->
        <div class="form_wrap" id="formWrap">
             <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_12.jpg" alt="λμΌμλμ λ¨μ LEDλΉμ μ¬λ κΈ°κ³κ° μλλλ€. μ΅μ²¨λ¨ HIFUκΈ°μ μ ν΅ν΄ νΌλΆκΉμν κ³³κΉμ§ μΉ¨ν¬νμ¬ λ¨νλ² μ¬μ©μλ κΈ°μ κ°μ ν¨κ³Όλ₯Ό μ μ¬ν΄λλ¦΄κ²μλλ€." class="img"></div>
            <div class="form_container">
                <?php
                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
                echo form_open(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">     
                <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
                <input type="hidden" name="mlh_mobileno" value="" id="mlh_mobileno"> 
                
                    <div class="form_box">
                        <div class="inp_container">
                            <div class="row clearfix">
                                <div class="label_box img_box">
                                    <label for="mlh_name" class="label"><img src="<?php echo $AD_DIR?>/images_m/label_01.png" alt="μ΄λ¦" class="img_label img"></label>
                                </div>
                                <div class="inp_box"><input class="inp input" label="μ΄λ¦" type="text" name="mlh_name" id="mlh_name" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>"></div>
                            </div>
                            <div class="row_02 clearfix">
                                <div class="cell clearfix">
                                    <div class="label_box img_box">
                                        <label for="mlh_gender" class="label"><img src="<?php echo $AD_DIR?>/images_m/label_02.png" alt="μ±λ³" class="img_label img"></label>
                                    </div>
                                    <div class="inp_box" style="text-align:center">
                                        <input type="radio" value="1" id="mlh_gender1" name="mlh_gender" class="input" label="μ±λ³" <?php echo set_checkbox('mlh_gender','1' ,true); ?>>
                                <label for="mlh_gender1" class="mr20">μ¬μ±</label><br>
                                <input type="radio" value="2" id="mlh_gender2" name="mlh_gender" class="input" label="μ±λ³" <?php echo set_checkbox('mlh_gender','2'); ?>>
                                <label for="mlh_gender2">λ¨μ±</label>
                                </div>
                                </div>
                                <div class="cell clearfix">
                                    <div class="label_box img_box label_box_age">
                                        <label for="mlh_age" class="label"><img src="<?php echo $AD_DIR?>/images_m/label_03.png" alt="λμ΄" class="img_label img"></label>
                                    </div>
                                    <div class="inp_box inp_box_age"><input class="inp input" label="λμ΄" type="tel" name="mlh_age" id="mlh_age"  value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>"></div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="label_box img_box">
                                    <label for="mlh_mobileno1" class="label"><img src="<?php echo $AD_DIR?>/images_m/label_04.png" alt="μ°λ½μ²" class="img_label img"></label>
                                </div>
                                <div class="inp_box">
                                    <select class="input inp inp_tel" name="mlh_mobileno1" id="mlh_mobileno1" label="μ°λ½μ²">
                                        <option value="010" <?php echo set_select('mlh_mobileno1','010' ,true); ?>>010</option>
                                        <option value="011" <?php echo set_select('mlh_mobileno1','011'); ?>>011</option>
                                        <option value="017" <?php echo set_select('mlh_mobileno1','017' ); ?>>017</option>
                                        <option value="018" <?php echo set_select('mlh_mobileno1', '018'); ?>>018</option>
                                        <option value="019" <?php echo set_select('mlh_mobileno1', '019'); ?>>019</option>
                                    </select> -
                                    <input type="tel" name="mlh_mobileno2" id="mlh_mobileno2" class="input inp inp_tel" maxlength="4" label="μ°λ½μ²" value="<?php echo set_value('mlh_mobileno2', element('mlh_mobileno2', element('post', $view))); ?>"> -
                                    <input type="tel" name="mlh_mobileno3" id="mlh_mobileno3" class="input inp inp_tel" maxlength="4" label="μ°λ½μ²" value="<?php echo set_value('mlh_mobileno3', element('mlh_mobileno3', element('post', $view))); ?>">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="label_box img_box">
                                    <span for="" class="label"><img src="<?php echo $AD_DIR?>/images_m/label_03_1.png" alt="λ νμν" class="img_label img"></span>
                                </div>
                                 <div class="inp_box" style="line-height:34px;padding-left: 10px;">
                                    <input type="radio" value="1" name="mlh_goods_type" id="mlh_goods_type" label="λ νμν" class="input" <?php echo set_checkbox('mlh_goods_type','1' ,true); ?>>
                                    <label for="mlh_goods_type" class="label_radio">λ­μλ¦¬</label>
                                    <input type="radio" value="2" name="mlh_goods_type" id="mlh_goods_type_" label="λ νμν" class="input" style="margin-left:10px;" <?php echo set_checkbox('mlh_goods_type_','2'); ?>>
                                    <label for="mlh_goods_type_" class="label_radio">νλ‘νμλ</label>
                                </div>
                                
                               
                            </div>
                            <div class="row clearfix">
                                <div class="label_box img_box" style="padding-left: 0;">
                                    <label for="mlh_text" class="label"><img src="<?php echo $AD_DIR?>/images_m/label_05.png" alt="ν΅νκ°λ₯μκ°" class="img_label img"></label>
                                </div>
                                <div class="inp_box"><textarea class="inp input" label="ν΅νκ°λ₯μκ°" name="mlh_text" id="mlh_text"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea></div>
                            </div>
                        </div>
                        <div  class="a-center" style="color:red;font-family: bold;font-size:20px;text-align: center;">
                                <?php 
                                $comment='';
                                if(!empty(element('campaign_age',element('extravars',element('post', $view)))) || element('campaign_gender',element('extravars',element('post', $view))) !=='μ νμμ'){
                                    $campaign_age = explode("~",element('campaign_age',element('extravars',element('post', $view))));

                                    $campaign_age[0]=trim($campaign_age[0]);
                                    $campaign_age[1]=trim($campaign_age[1]);

                                    if(!empty($campaign_age[0])) $comment=$campaign_age[0].'μΈ μ΄μ ';
                                    if(!empty($campaign_age[1])) $comment.=$campaign_age[1].'μΈ μ΄ν ';
                                    if(element('campaign_gender',element('extravars',element('post', $view))) === 'λ¨μ±' || element('campaign_gender',element('extravars',element('post', $view))) === 'μ¬μ±' ) $comment.=element('campaign_gender',element('extravars',element('post', $view)));

                                    $comment .='λ§ μ°Έμ¬ κ°λ₯ν©λλ€.';

                                    echo $comment;
                                }
                                    
                                ?>
                             </div>
                        <div class="agree_box">
                            <input type="checkbox" name="agree" id="agree" class="inp_check">
                            <label for="agree" class="label_check">κ°μΈμ λ³΄ μμ§ λ° μ κ³΅μ κ΄ν λμ</label><br>
                            <button type="button" class="btn_popup_agree" onclick="openPopup('popupAgree')">μμΈν λ³΄κΈ°</button>
                        </div>
                        <div class="btn_box">
                            <button type="submit" class="btn_img btn_submit"><img src="<?php echo $AD_DIR?>/images_m/btn_db.jpg" alt="κ²½ν λ°μΌλ¬ κ°κΈ°" class="img"></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- dbform end -->
        <div class="img_box"><img src="<?php echo $AD_DIR?>/images_m/a_13.jpg" alt="λμΌμλ, λ°λΌμ¬μ μλ κΈ°μ λ ₯" class="img"></div>
        <div class="footer">
            <div class="row">
                <strong>μ§μ¨λ©λν</strong> ο½ κ²½κΈ°λ μμμ λμκ΅¬ νμλ‘ 250 κ΄μλμ°λ²€μ²λ€μ 403, 404, 406νΈ
            </div>
            <div class="row">
                λν : λ°μ’μ²  ο½ ν΅μ νλ§€μ κ³ λ²νΈ : 2019-μμλμ-0888 ο½ μ¬μμ λ±λ‘μ¦ λ²νΈ : 888-14-00275
            </div>
            <div class="row">
                TEL : 031-8002-0079 ο½ FAX : 031-360-0811 ο½ E-mail: webmaster@jionmeditech.com
            </div>
        </div>

        <!-- popup -->
        <div class="popup_wrap" id="popupWrap">
            <div class="popup_container_agree" id="popupAgree">
                <div class="popup_content">
                    <div class="title01">κ°μΈμ λ³΄ μ·¨κΈλ°©μΉ¨</div>
            
                    <div class="txt">
                        μ§μ¨λ©λν (μ΄ν βνμ¬β)μ κ³ κ°μ κ°μΈμ λ³΄λ₯Ό μ€μμ νλ©°, γμ λ³΄ν΅μ λ§μ΄μ© μ΄μ§ λ° μ λ³΄ λ³΄νΈ λ±μ κ΄ν λ²λ₯  γ μμ κ°μΈμ λ³΄λ³΄νΈ κ·μ  λ° μ λ³΄ν΅μ λΆκ° μ μ ν γ κ°μΈμ λ³΄λ³΄νΈ λ° μ·¨κΈλ°©μΉ¨γμ μ€μνκ³  μμ΅λλ€. νμ¬λ κ°μΈμ λ³΄μ·¨κΈλ°©μΉ¨μ ν΅ν΄ μλμ κ°μ΄ μ κ³΅ν΄μ£Όμλ κ°μΈμ λ³΄μ μμ§ λ° μ΄μ©λͺ©μ κ³Ό κ°μΈμ λ³΄λ³΄νΈλ₯Ό μν νμ¬μ μ‘°μΉ μ¬ν­μ κ³ μ§ν©λλ€.
                    </div>
                    
                    <div class="title02">1. κ°μΈμ λ³΄ μμ§ μ΄μ© μ κ³΅ λ±μ λν λμ</div>
                    <div class="txt">
                        νμ¬λ κ³ κ°μ΄ νμ¬κ° μ κ³΅νλ μλ΄ λ° μλ΄μ μ²­μ κ·νκ° μ κ³΅ν μ λ³΄λ κ°μΈμ λ³΄μ·¨κΈλ°©μΉ¨μ λͺμλ λ΄μ© μ΄μΈμ λͺ©μ μΌλ‘λ μ¬μ©λμ§ μλν©λλ€.
                    </div>
                    
                    <div class="title02">2. μμ§νλ κ°μΈμ λ³΄μ λ²μ λ° μμ§λ°©λ²</div>
                    <div class="txt">
                        νμ¬μμλ κ·νμ μλ΄μ μ²­ λ° μλΉμ€μ μ²­ λ±μ μν νμμ μΈ μ λ³΄λ₯Ό μλ ₯ λ°κ³  μμ΅λλ€. 
                        <br>- νμμ λ³΄ : μ±λͺ, λμ΄, μ±λ³, μ νλ²νΈ
                        <br>- μλΉμ€ μ΄μ©κ³Όμ μ΄λ μ²λ¦¬ κ³Όμ μμ μλμΌλ‘ μμ±λμ΄ μμ§λ  μ μλ μ λ³΄ : IP Address, μ°Έμ¬μΌμ, μ μκ²½λ‘(μ°Έμ¬λ§€μ²΄), μΏ ν€, λ°©λ¬Έ μΌμ, μλΉμ€ μ΄μ© κΈ°λ‘, μ΄μ© μ μ§ κΈ°λ‘ λ±
                        <br>- μ²­κ΅¬μ, μν λ°°μ‘μ§ νμΈμ μν μμ§μ λ³΄ : μ±λͺ, μ νλ²νΈ, μ°νΈλ¬Ό μλ Ήμ§(μν λ° μ§μ₯μ£Όμ)
                        <br>(λ³ΈμΈ μ΄μΈμ νμΈμκ² μ§μ  λ°°μ‘μ μμ²­ν  κ²½μ° μ΄λ¦, μ£Όμ, μ°λ½μ² λ± λ°°μ‘μ νμν κ°μΈ μλ³ μ λ³΄λ₯Ό μμ§νλ κ²μ λνμ¬ λμν©λλ€.)
                    </div>
                    
                    <div class="title02">3. κ°μΈμ λ³΄μ μμ§ λ° μ΄μ©λͺ©μ </div>
                    <div class="txt">
                        μλ ₯νμ  μ λ³΄λ κ°μΈλ³ λ§μΆ€ μλΉμ€ μ κ³΅, μ΄λ²€νΈ μλ΄(μ ν, MMS λ±), μνμλ΄λ₯Ό μν μλ£(μ ν, MMS λ±)λ‘ νμ© λ©λλ€.
                    </div>
                    
                    <div class="title02">4. κ°μΈμ λ³΄μ λ³΄μ  λ° μ΄μ©κΈ°κ°</div>
                    <div class="txt">
                        κ°μΈμ λ³΄λ₯Ό μμ§ λμμΌλ‘λΆν° 5λκ° λ³΄μ  λ° νμ©νκ² λκ³ , μ λ³΄μ κΈ°κ°μ κ²½κ³Ό μ¦μ κΈ°λ‘μ μ¬μν  μ μλ κΈ°μ μ  λ°©λ²μ μ¬μ©νμ¬ λ κ°μΈμ λ³΄λ₯Ό νκΈ°ν©λλ€. λ¨, λ€μμ μ λ³΄μ λν΄μλ μλμ μ΄μ λ‘ λͺμν κΈ°κ° λμ λ³΄μ‘΄ν©λλ€. 
                        <br>&lt; κ΄λ ¨λ²λ Ήμ μν μ λ³΄λ³΄μ  μ¬μ  &gt; 
                        <br>- κ³μ½ λλ μ²­μ½μ² ν λ±μ κ΄ν κΈ°λ‘ : 5λ 
                        <br>- μλΉμμ λΆλ§ λλ λΆμμ²λ¦¬μ κ΄ν κΈ°λ‘ : 3λ
                    </div>
                    
                    <div class="title02">5. κ°μΈμ λ³΄μ νκΈ°μ μ°¨ λ° λ°©λ²</div>
                    <div class="txt">
                        μμΉμ μΌλ‘, κ°μΈμ λ³΄ μμ§ λ° μ΄μ©λͺ©μ μ΄ λ¬μ±λκ±°λ, κ°μΈμ λ³΄ λ³΄μ  λ° μ΄μ©κΈ°κ°μ΄ μ’λ£ν κ²½μ° ν΄λΉ μ λ³΄λ₯Ό μ§μ²΄ μμ΄ νκΈ°ν©λλ€. νκΈ°μ μ°¨ λ° λ°©λ²μ λ€μκ³Ό κ°μ΅λλ€.
                        <br>&lt; νκΈ°μ μ°¨ &gt; 
                        <br>κ·νκ° μ°Έμ¬ν κ³ κ°μ λ³΄λ λͺ©μ μ΄ λ¬μ±λ ν λ΄λΆ λ°©μΉ¨ λ° κΈ°ν κ΄λ ¨ λ²λ Ήμ μν μ λ³΄λ³΄νΈ μ¬μ μ λ°λΌ(λ³΄μ  λ° μ΄μ©κΈ°κ° μ°Έμ‘°) μΌμ κΈ°κ° μ μ₯λ ν νκΈ°λ©λλ€. λ κ°μΈμ λ³΄λ λ²λ₯ μ μν κ²½μ°κ° μλκ³ μλ λ³΄μ  μ΄μΈμ λ€λ₯Έ λͺ©μ μΌλ‘ μ΄μ©λμ§ μμ΅λλ€.
                        <br>&lt; νκΈ°λ°©λ² &gt; 
                        <br>- μ’μ΄μ μΆλ ₯λ κ°μΈμ λ³΄λ λΆμκΈ°λ‘ λΆμνκ±°λ μκ°μ ν΅νμ¬ νκΈ°νκ³  
                        <br>- μ μμ  νμΌννλ‘ μ μ₯λ κ°μΈμ λ³΄λ κΈ°λ‘μ μ¬μν  μ μλ κΈ°μ μ  λ°©λ²μ μ¬μ©νμ¬ μ­μ ν©λλ€. 
                    </div>
                    
                    <div class="title02">6. κ°μΈμ λ³΄ μμ§ μ΄μ© μ κ³΅ λ±μ λν λμμ² ν</div>
                    <div class="txt">
                        κ·νλ κ°μΈμ λ³΄μ μμ§ μ΄μ© μ κ³΅μ λν λμλ₯Ό λ³ΈμΈ λ° λ²μ λλ¦¬μΈμ ν΅ν΄ μ² νν  μ μμ΅λλ€. λμμ² νλ λͺμλ λ¬Έμμ ν λλ μ΄λ©μΌ λ±μ ν΅ν΄ κ°λ₯ν©λλ€.
                    </div>
                    
                    <div class="title02">7. κ°μΈμ λ³΄μ μ  3μ μ κ³΅ λ° μ·¨κΈμν</div>
                    <div class="txt">
                        νμ¬λ κ·νμ κ°μΈμ λ³΄λ₯Ό &lt;κ°μΈμ λ³΄μ μμ§λͺ©μ  λ° μ΄μ©λͺ©μ &gt;μμ κ³ μ§ν λ²μ λ΄μμ μ¬μ©νλ©°, λ λ²μλ₯Ό μ΄κ³Όνμ¬ μ΄μ©νκ±°λ νμΈ λλ νκΈ°μ, κΈ°κ΄μ μ κ³΅νμ§ μμ΅λλ€. κ·Έλ¬λ λ³΄λ€ λμ μλΉμ€ μ κ³΅μ μνμ¬ νμν  κ²½μ°, κ·νμ κ°μΈμ λ³΄λ₯Ό μ ν΄μ¬μκ² μ κ³΅νκ±°λ λλ μ ν΄μ¬μ κ³΅μ ν  μ μμ΅λλ€. κ°μΈμ λ³΄λ₯Ό μ κ³΅νκ±°λ κ³΅μ ν  κ²½μ°μλ μ¬μ μ κ·νμ λμλ₯Ό κ΅¬νλ μ μ°¨λ₯Ό κ±°μΉκ² λ©λλ€.
                        <br>λ€μμ μμΈλ‘ ν©λλ€. 
                        <br>κ΄κ³λ²λ Ήμ μνμ¬ μμ¬μμ λͺ©μ μΌλ‘ κ΄κ³κΈ°κ΄μΌλ‘λΆν°μ μκ΅¬κ° μμ κ²½μ°μλλ€. μ ν΄κ΄κ³μ λ³νκ° μκ±°λ μ ν΄κ΄κ³κ° μ’κ²°λ  λλ κ°μ μ μ°¨μ μνμ¬ κ³ μ§νκ±°λ λμλ₯Ό κ΅¬ν©λλ€. 
                        <br>ν΅κ³μμ±/νμ μ°κ΅¬λ μμ₯μ‘°μ¬λ₯Ό μνμ¬ νΉμ  κ°μΈμ μλ³ν  μ μλ ννλ‘ κ΄κ³ μ£Ό/νλ ₯ μ¬λ μ°κ΅¬λ¨μ²΄ λ±μ μ κ³΅νλ κ²½μ° 
                        <br>μν μ²λ¦¬ : μνν μλ¬΄ μ²λ¦¬λ₯Ό μν΄ μ΄μ©μμ κ°μΈμ λ³΄λ₯Ό μν μ²λ¦¬ν  κ²½μ° λ°λμ μ¬μ μ μνμ²λ¦¬ μμ²΄λͺκ³Ό μν μ²λ¦¬λλ κ°μΈμ λ³΄μ λ²μ, μλ¬΄μν λͺ©μ , μν μ²λ¦¬λλ κ³Όμ , μνκ΄κ³ μ μ§κΈ°κ° λ±μ λν΄ μμΈνκ² κ³ μ§ν©λλ€. 
                        <br>κ·Έλ¬λ μμΈ μ¬ν­μμλ κ΄κ³λ²λ Ήμ μνκ±°λ μμ¬κΈ°κ΄μ μμ²­μ μν΄ μ λ³΄λ₯Ό μ κ³΅ν κ²½μ°μλ μ΄λ₯Ό λΉμ¬μμκ² κ³ μ§νλ κ²μ μμΉμΌλ‘ μ΄μνκ³  μμ΅λλ€. λ²λ₯ μμ κ·Όκ±°μ μν΄ λΆλμ΄νκ² κ³ μ§λ₯Ό νμ§ λͺ»ν  μλ μμ΅λλ€. λ³Έλμ μμ§λͺ©μ  λ° μ΄μ©λͺ©μ μ λ°νμ¬ λ¬΄λΆλ³νκ² μ λ³΄κ° μ κ³΅λμ§ μλλ‘ μ΅λν λΈλ ₯νκ² μ΅λλ€.
                    </div>
                    
                    <div class="title02">8. κ°μΈμ λ³΄ μ²λ¦¬ μλ¬΄μ μν</div>
                    <div class="txt">
                        κ°. νμ¬λ κΈ°λ³Έμ μΈ μλΉμ€ μ κ³΅, λ λμ μλΉμ€ μ κ³΅, κ³ κ°νΈμ μ κ³΅ λ± μνν μλ¬΄ μνμ μνμ¬ λ€μκ³Ό κ°μ΄ κ°μΈμ λ³΄ μ²λ¦¬ μλ¬΄λ₯Ό μΈλΆμ λ¬Έμμ²΄μ μννμ¬ μ΄μνκ³  μμ΅λλ€.
                    </div>
                    <div class="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>μνμ</th>
                                    <th>μνμ¬λ¬΄ λ° λͺ©μ </th>
                                    <th>λ³΄μ  λ° μ΄μ©κΈ°κ°</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>γνμ΄μ λμ</td>
                                    <td>νμ μ λ³΄ DBμμ€ν μ μ§λ³΄μ </td>
                                    <td>κ³ κ°λμ μ² ν λλ κ³μ½ λ§λ£ λ κΉμ§</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="txt">
                        λ. νμ¬λ μνμλ¬΄κ³μ½μ λ±μ ν΅νμ¬ κ°μΈμ λ³΄λ³΄νΈ κ΄λ ¨ λ²κ·μ μ€μ, κ°μΈμ λ³΄μ κ΄ν λΉλ°μ μ§, κ°μΈμ λ³΄μ μ 3μ μ κ³΅ κΈμ§, μ¬κ³ μμ μ±μ λΆλ΄, μνκΈ°κ°, μ²λ¦¬ μ’λ£ νμ κ°μΈμ λ³΄μ λ°ν λλ νκΈ°μλ¬΄ λ±μ κ·μ νκ³ , μ΄λ₯Ό μ§ν€λλ‘ κ΄λ¦¬νκ³  μμ΅λλ€.
                    </div>
                    
                    <div class="title02">9. κ°μΈμ λ³΄κ΄λ¦¬μ±μμ λ° λ―ΌμμλΉμ€</div>
                    <div class="txt">
                        κ·νμ κ°μΈμ λ³΄λ₯Ό λ³΄νΈνκ³  κ΄λ ¨ν λΆλ§μ μ²λ¦¬νκΈ° μνμ¬ νμ¬λ κ°μΈμ λ³΄κ΄λ¦¬μ±μμλ₯Ό λμ΄ κ·νμ κ°μΈμ λ³΄λ₯Ό κ΄λ¦¬νκ³  μμ΅λλ€.
                    </div>
                    
                    <div class="txt">
                        [κ°μΈμ λ³΄κ΄λ¦¬μ±μμ] 
                        <br>μ± λͺ : μ κ°μ
                        <br>μ§ μ : κ³Όμ₯
                        <br>μ°λ½μ² : 
                        <br>ν©μ€λ²νΈ : 
                        <br>μ΄λ©μΌ : 
                    </div>
                    
                    <div class="txt">
                        [κ°μΈμ λ³΄ κ΄λ¦¬μ] 
                        <br>μ±  λͺ : μ κ°μ
                        <br>μ§  μ : κ³Όμ₯
                        <br>μ°λ½μ² : 
                        <br>ν©μ€λ²νΈ:
                        <br>μ΄λ©μΌ :
                    </div>
                    <div class="txt">
                        - μ λ³΄μ£Όμ²΄ κ»μλ νμ¬μ μλΉμ€(λλ μ¬μ)μ μ΄μ©νμλ©΄μ λ°μν λͺ¨λ  κ°μΈμ λ³΄ λ³΄νΈ κ΄λ ¨ λ¬Έμ, λΆλ§μ²λ¦¬, νΌν΄κ΅¬μ  λ±μ κ΄ν μ¬ν­μ κ°μΈμ λ³΄ κ΄λ¦¬μ±μμ λ° λ΄λΉλΆμλ‘ λ¬Έμνμ€ μ μμ΅λλ€. νμ¬λ μ λ³΄μ£Όμ²΄μ λ¬Έμμ λν΄ μ§μ²΄μμ΄ λ΅λ³ λ° μ²λ¦¬ν΄λλ¦΄ κ²μλλ€. 
                        <br>- μ λ³΄μ£Όμ²΄λ κ°μΈμ λ³΄ λ³΄νΈλ² μ 35μ‘° λ° μ λ³΄ν΅μ λ§λ² μ 30μ‘°μ λ°λ₯Έ κ°μΈμ λ³΄μ μ΄λ μ²­κ΅¬λ₯Ό κ΄λ ¨ λΆμμ ν  μ μμ΅λλ€. νμ¬λ μ λ³΄μ£Όμ²΄μ κ°μΈμ λ³΄ μ΄λμ²­κ΅¬κ° μ μνκ² μ²λ¦¬λλλ‘ λΈλ ₯νκ² μ΅λλ€.
                    </div>
                    
                    <div class="title02">10. κ°μΈμ λ³΄ μ΄λμ²­κ΅¬</div>
                    <div class="txt">
                        μ λ³΄μ£Όμ²΄λ κ°μΈμ λ³΄ λ³΄νΈλ² μ 35μ‘° λ° μ λ³΄ν΅μ λ§λ² μ 30μ‘°μ λ°λ₯Έ κ°μΈμ λ³΄μ μ΄λ μ²­κ΅¬λ₯Ό μλμ λΆμμ ν  μ μμ΅λλ€. νμ¬λ μ λ³΄μ£Όμ²΄μ κ°μΈμ λ³΄ μ΄λμ²­κ΅¬κ° μ μνκ² μ²λ¦¬λλλ‘ λΈλ ₯νκ² μ΅λλ€.
                    </div>
                    
                    <div class="txt">
                        κ°. κ°μΈμ λ³΄ μ΄λμ²­κ΅¬ μ μγμ²λ¦¬ λΆμ
                        <br>μ±  λͺ : μ κ°μ
                        <br>μ§  μ : κ³Όμ₯
                        <br>μ°λ½μ² : 
                        <br>ν©μ€λ²νΈ:
                        <br>μ΄λ©μΌ :
                    </div>
                    <div class="title02">11. λ§ 14 μΈ λ―Έλ§ μλμ κ°μΈμ λ³΄λ³΄νΈ</div>
                    νμ¬λ λ²μ  λλ¦¬μΈμ λμκ° νμν λ§ 14μΈ λ―Έλ§ μλμ μ λ³΄λ μμ§νκ³  μμ§ μμ΅λλ€.
                    
                    <div class="title02">12. κΆμ΅μΉ¨ν΄ κ΅¬μ λ°©λ²</div>
                    <div class="txt">
                        μ λ³΄μ£Όμ²΄λ μλμ κΈ°κ΄μ λν΄ κ°μΈμ λ³΄ μΉ¨ν΄μ λν νΌν΄κ΅¬μ , μλ΄ λ±μ λ¬Έμνμ€ μ μμ΅λλ€. [μλμ κΈ°κ΄μ νμ¬μλ λ³κ°μ κΈ°κ΄μΌλ‘μ, νμ¬μ μμ²΄μ μΈ κ°μΈμ λ³΄ λΆλ§μ²λ¦¬, νΌν΄κ΅¬μ  κ²°κ³Όμ λ§μ‘±νμ§ λͺ»νμκ±°λ λ³΄λ€ μμΈν λμμ΄ νμνμλ©΄ λ¬Έμνμ¬ μ£ΌμκΈ° λ°λλλ€]
                    </div>
                    
                    <div class="txt">
                        κ°. κ°μΈμ λ³΄λ³΄νΈ μ’ν©μ§μ ν¬νΈ (νμ μμ λΆ μ΄μ)
                        <br>μκ΄μλ¬΄ : κ°μΈμ λ³΄ μΉ¨ν΄μ¬μ€ μ κ³ , μλ΄ μ μ²­, μλ£μ κ³΅
                        <br>ννμ΄μ§ : www.privacy.go.kr
                        <br>μ ν : 02-2100-3394
                    </div>
                    
                    <div class="txt">
                        λ. κ°μΈμ λ³΄ μΉ¨ν΄μ κ³ μΌν° (νκ΅­μΈν°λ·μ§ν₯μ μ΄μ)
                        <br>μκ΄μλ¬΄ : κ°μΈμ λ³΄ μΉ¨ν΄μ¬μ€ μ κ³ , μλ΄ μ μ²­
                        <br>ννμ΄μ§ : privacy.kisa.or.kr
                        <br>μ ν : (κ΅­λ²μμ΄) 118 - μ£Όμ : (138-950) μμΈμ μ‘νκ΅¬ μ€λλ‘135 νκ΅­μΈν°λ·μ§ν₯μ κ°μΈμ λ³΄μΉ¨ν΄μ κ³ μΌν°
                    </div>
                    
                    <div class="txt">
                        λ€. κ°μΈμ λ³΄ λΆμμ‘°μ μμν (νκ΅­μΈν°λ·μ§ν₯μ μ΄μ)
                        <br>μκ΄μλ¬΄ : κ°μΈμ λ³΄ λΆμμ‘°μ μ μ²­, μ§λ¨λΆμμ‘°μ  (λ―Όμ¬μ  ν΄κ²°)
                        <br>ννμ΄μ§ : privacy.kisa.or.kr
                        <br>μ ν : (κ΅­λ²μμ΄) 118 - μ£Όμ : (138-950) μμΈμ μ‘νκ΅¬ μ€λλ‘135 νκ΅­μΈν°λ·μ§ν₯μ κ°μΈμ λ³΄μΉ¨ν΄μ κ³ μΌν°
                    </div>
                    
                    <div class="txt">
                        λΌ. κ²½μ°°μ²­ μ¬μ΄λ²νλ¬λμμΌν°
                        <br>μκ΄μλ¬΄ : κ°μΈμ λ³΄ μΉ¨ν΄ κ΄λ ¨ νμ¬μ¬κ±΄ λ¬Έμ λ° μ κ³ 
                        <br>ννμ΄μ§ : www.netan.go.kr
                        <br>μ ν : (μ¬μ΄λ²λ²μ£) 02-393-9112 (κ²½μ°°μ²­ λν) 1566-0112
                    </div>
                    
                    <div class="title02">13. μ μ± λ³κ²½μ λ°λ₯Έ κ³΅μ§μλ¬΄</div>
                    <div class="txt">
                        μ΄ κ°μΈμ λ³΄μ²λ¦¬λ°©μΉ¨μ 2019 λ 12μ 03 μΌ μ μ μ λμμΌλ©° λ²λ Ή/μ μ± λλ λ³΄μκΈ°μ μ λ³κ²½μ λ°λΌ λ΄μ©μ μΆκ° λ° μ­μ  λ° μμ μ΄ μμ μμλ λ³κ²½λλ κ°μΈμ λ³΄μ²λ¦¬λ°©μΉ¨μ μννκΈ° μ΅μ 15μΌμ μ ν΄λΉ νλͺ©λ³ μΈν°λ·νμ΄μ§λ₯Ό ν΅ν΄ λ΄μ© λ±μ κ³΅μ§νλλ‘ νκ² μ΅λλ€.
                    </div>
            
                    <div class="txt">
                        - κ°μΈμ λ³΄μ²λ¦¬λ°©μΉ¨ μνμΌμ : 2019-12-03
                    </div>
                </div>
                <div class="popup_btn_box">
                    <button class="btn_close" onclick="closePopup('popupAgree')">λ« κΈ°</button>
                </div>
            </div>
        </div>
    </div>

     <div class="loading" style="<?php echo empty($this->session->flashdata('mlh_id')) ? 'display:none;' : ''; ?> ">
        <div class="dot_container" >
            <div class="dot dot01"></div>
            <div class="dot dot02"></div>
            <div class="dot dot03"></div>
        </div>
    </div>    
    <script>
        function openPopup(el){      

            $('html, body').css({'overflow': 'hidden', 'height': '100%'}); // λͺ¨λ¬νμ μ€ html,bodyμ scrollμ hiddenμν΄
            $('#element').on('scroll touchmove mousewheel', function(event) { // ν°μΉλ¬΄λΈμ λ§μ°μ€ν  μ€ν¬λ‘€ λ°©μ§
                event.preventDefault();
                event.stopPropagation();

                return false;
            });
             
            $('#popupWrap').show();
            $('#'+ el).show();
        }
        function closePopup(el){
            // $('html, body').css({'overflow': 'auto', 'height': '100%'}); //scroll hidden ν΄μ 
            $('#popupWrap').hide();
            $('#'+ el).hide();
            document.location="#formWrap";
        }

        $('#btnSlide').on('click',function(){
            $('.slide_container').animate({'margin-left':'-100%'},0,function(){
                $('.slide_item:first-child').appendTo('.slide_container');
                $(this).css('margin-left','0');
            })
        });
        // νκΈ μ‘°μ¬λ³κ²½
        function getPostWord(str, firstVal, secondVal) {
            try {
                var lastStr = str[str.length - 1].charCodeAt(0);
                if (lastStr < 0xAC00 || lastStr > 0xD7A3) {
                    return str;
                }
                var lastCharIndex = (lastStr - 0xAC00) % 28;
                if (lastCharIndex > 0) {
                    if (firstVal === "μΌλ‘" && lastCharIndex === 8)
                        str += secondVal;
                    else
                        str += firstVal;
                } else {
                    str += secondVal;
                }
            } catch (e) {
                console.error(e);
            }

            return str;
        }
        // firstVal :: μΌλ‘ / μ / μ΄ / μ / κ³Ό
        // secondVal :: λ‘ / λ₯Ό / κ° / λ / μ 

        function submitContents(f) {
            var flag = false;
            var href;


            $('.input').each(function () {
                if (!jQuery.trim($(this).val())) {
                    alert(getPostWord($(this).attr('label'), 'μ', 'λ₯Ό') + 'μλ ₯ν΄ μ£ΌμΈμ');
                    $(this).focus();
                    flag = false;
                    return false;
                } else flag = true;
            });

            if (!flag) return false;

            if ($('input[id="agree"]').is(":checked")) {
                $('.loading').show();
                href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

                $.ajax({
                    async : false,
                    url : href,
                    type : 'get',
                    dataType : 'json',
                    complete : function(data) {
                        $("#mlh_mobileno").val($("#mlh_mobileno1").val()+$("#mlh_mobileno2").val()+$("#mlh_mobileno3").val());
                        
                    }
                });

                return flag;
            } else alert('κ°μΈμ λ³΄ μμ§ λ° μ κ³΅μ κ΄ν λμλ₯Ό μ²΄ν¬ ν΄μ£ΌμκΈ° λ°λλλ€.');

            return false;
        }
        <?php if($this->session->flashdata('mlh_id')){?>        
    $('.loading').hide();
<?php } ?>
    </script>
</body>
</html>

<?php if((element('multi_code',$view) ==='dable_pc' || element('multi_code',$view) ==='dable_mo')){ ?>

    <?php if($this->session->flashdata('mlh_id')){ ?>
        <!-- Dable μ€ν¬λ¦½νΈ μμ / λ¬Έμ support@dable.io -->
        <script>
        (function(d,a,b,l,e,_) {
        d[b]=d[b]||function(){(d[b].q=d[b].q||[]).push(arguments)};e=a.createElement(l);
        e.async=1;e.charset='utf-8';e.src='//static.dable.io/dist/dablena.min.js';
        _=a.getElementsByTagName(l)[0];_.parentNode.insertBefore(e,_);
        })(window,document,'dablena','script');
        dablena('init', '001-002-358');
        dablena('track', 'CompleteRegistration');
        </script>
        <!-- Dable μ€ν¬λ¦½νΈ μ’λ£ / λ¬Έμ support@dable.io -->
    <?php } else { ?>
        <!-- Dable μ€ν¬λ¦½νΈ μμ / λ¬Έμ support@dable.io -->
        <script>
        (function(d,a,b,l,e,_) {
        d[b]=d[b]||function(){(d[b].q=d[b].q||[]).push(arguments)};e=a.createElement(l);
        e.async=1;e.charset='utf-8';e.src='//static.dable.io/dist/dablena.min.js';
        _=a.getElementsByTagName(l)[0];_.parentNode.insertBefore(e,_);
        })(window,document,'dablena','script');
        dablena('init', '001-002-358');
        dablena('track', 'PageView');
        </script>
        <!-- Dable μ€ν¬λ¦½νΈ μ’λ£ / λ¬Έμ support@dable.io -->    
    <?php } ?>
<?php } ?>

<?php if((element('multi_code',$view) ==='tg_interest_pc' || element('multi_code',$view) ==='tg_re_pc' || element('multi_code',$view) ==='tg_interest_mo' || element('multi_code',$view) ==='tg_re_mo' ) && $this->session->flashdata('mlh_id')){ ?>
<!-- WIDERPLANET PURCHASE SCRIPT START 2019.12.3 -->
<div id="wp_tg_cts" style="display:none;"></div>
<script type="text/javascript">
var wptg_tagscript_vars = wptg_tagscript_vars || [];
wptg_tagscript_vars.push(
(function() {
    return {
        wp_hcuid:"",             /*κ³ κ°λλ² λ± Unique ID (ex. λ‘κ·ΈμΈ  ID, κ³ κ°λλ² λ± )λ₯Ό μνΈννμ¬ λμ.
                          *μ£Όμ : λ‘κ·ΈμΈ νμ§ μμ μ¬μ©μλ μ΄λ ν κ°λ λμνμ§ μμ΅λλ€.*/
        ti:"47682",                  /*κ΄κ³ μ£Ό μ½λ */
        ty:"PurchaseComplete",       /*νΈλνΉνκ·Έ νμ */
        device:"web",                /*λλ°μ΄μ€ μ’λ₯  (web λλ  mobile)*/
        items:[{i:"λΉμ©μλ΄ ",       /*μ ν μλ³ μ½λ  (νκΈ , μμ΄ , λ²νΈ , κ³΅λ°± νμ© )*/
            t:"λΉμ©μλ΄ ",         /*μ νλͺ  (νκΈ , μμ΄ , λ²νΈ , κ³΅λ°± νμ© )*/
            p:"1",           /*μ νκ°κ²©  (μ ν κ°κ²©μ΄ μμκ²½μ° 1λ‘ μ€μ  )*/
            q:"1"            /*μ νμλ  (μ ν μλμ΄ κ³ μ μ μΌλ‘ 1κ° μ΄νμΌ κ²½μ° 1λ‘ μ€μ  )*/
        }]
    };
}));
</script>
<script type="text/javascript" src="//cdn-aitg.widerplanet.com/js/wp_astg_4.0.js"></script>


<?php } ?>





<?php if((element('multi_code',$view) ==='taboola_ron_pc' || element('multi_code',$view) ==='taboola_aud_pc' || element('multi_code',$view) ==='taboola_ron_mo'|| element('multi_code',$view) ==='taboola_aud_mo' )){ ?>

    <?php if($this->session->flashdata('mlh_id')){ ?>

        <script type='text/javascript'>
          window._tfa = window._tfa || [];
          window._tfa.push({notify: 'event', name: 'complete_registration', id: 1253631});
          !function (t, f, a, x) {
                 if (!document.getElementById(x)) {
                    t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);
                 }
          }(document.createElement('script'),
          document.getElementsByTagName('script')[0],
          '//cdn.taboola.com/libtrc/unip/1253631/tfa.js',
          'tb_tfa_script');
        </script>
        <noscript>
          <img src='https://trc.taboola.com/1253631/log/3/unip?en=complete_registration'
            width='0' height='0' style='display:none'/>
        </noscript>
        <!-- End of Taboola Pixel Code -->
        <?php } ?>

    


    <?php } else { ?>
        <!-- Taboola Pixel Code -->
        <script type='text/javascript'>
          window._tfa = window._tfa || [];
          window._tfa.push({notify: 'event', name: 'page_view', id: 1253631});
          !function (t, f, a, x) {
                 if (!document.getElementById(x)) {
                    t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);
                 }
          }(document.createElement('script'),
          document.getElementsByTagName('script')[0],
          '//cdn.taboola.com/libtrc/unip/1253631/tfa.js',
          'tb_tfa_script');
        </script>
        <noscript>
          <img src='https://trc.taboola.com/1253631/log/3/unip?en=page_view'
              width='0' height='0' style='display:none'/>
        </noscript>
        <!-- End of Taboola Pixel Code -->
    

<?php } ?>

<?php if(element('multi_code',$view) ==='tenping' ){ ?>
    
    <?php if($this->session->flashdata('mlh_id')){ ?>

        <script src="//tenping.kr/scripts/cpa/tenping.cpa.V2_Domain.min.js"></script>
        <script>
            TenpingScript.SendConversion("<?php echo $this->session->flashdata('mlh_mobileno') ? substr($this->session->flashdata('mlh_mobileno'),-4): '' ?>");
        </script>
  
    

    <?php } ?>
    
<?php } ?>

<?php if(element('multi_code',$view) ==='linkA' ){ ?>
    
    <?php if($this->session->flashdata('mlh_id')){ ?>

        <script src="//www.leadtracker.live/static/js/fixel.js"></script>
        <script>
            _link_postBack('<?php echo $this->session->flashdata('mlh_name') ?>','<?php echo $this->session->flashdata('mlh_mobileno') ?>','<?php echo $this->session->flashdata('mlh_age') ?>','<?php echo $this->session->flashdata('mlh_text') ?>');
        </script>
  
    

    <?php } ?>
    
<?php } ?>