<?php 

$this->managelayout->add_meta('<meta name="viewport" content="width=device-width, initial-scale=1.0">'); 

$this->managelayout->add_css(base_url('assets/css/preloader.min.css')); 
$this->managelayout->add_css("https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@1.0/nanumsquare.css"); 



    $AD_DIR  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['jid'])) $jid=$_GET['jid'];
    $uid=0;
    if(!empty($_GET['uid'])) $uid=$_GET['uid'];
    $at=0;
    if(!empty($_GET['at'])) $at=$_GET['at'];

?>    

    <title>λμΌμλ</title>

    <style>
        * {
            padding: 0;
            margin: 0;
        }

        ul, ol, li, dt, dd {
            list-style: none;
        }

        body {
            font-family: 'NanumSquare', 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
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
        input[type="text"],input[type="number"],input[type="tel"]{
            text-indent: 5px;
        }
        input,button {
            font-family: 'NanumSquare', 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
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
        .fl_left {
            float: left;
        }
        .fl_right {
            float: right;
        }

        .wrap {
            width: 100%;
            min-width: 320px;
            max-width: 800px;
            margin: 0 auto;
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

        .txt_center {
            text-align: center;
        }

        .txt_emph {
            color: #d51430;
            font-weight: bold;
        }

        .txt_bold {
            font-weight: bold;
        }

        .gif02 {
            padding: 14px 5.6875% 23px;
        }
        .gif02 .img_box {
            box-shadow: 2px 5px 21px rgba(0,0,0,0.2);
        }
        .gif03 {
            padding: 0 3.4286%;
        }
        .gif03 .gif_gif_box {
            float: left;
            width: 57.6687%;
        }
        .gif03 .gif_img_box {
            float: right;
            width: 42.3313%;
        }
        .gif04 {
            padding: 0 3.4286%;
        }
        .video_box {
            width: 100%;
        }
        .video_box .video {
            width: 100%;
        }
        .use_gif {
            padding: 0 3.5% 9.357%;
            background-color: #f6d5c1;
        }
        .use_gif .gif_box {
            width: 49.3280%;
            font-size: 0;
        }
        .use_gif .gif {
            width: 100%;
            font-size: 10px;
        }
        .tech_container {
            padding: 0 3.5%;
            background-image: url('<?=$AD_DIR?>/images/dd_05_02.jpg');
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center top;
            background-color: #120403;
        }
        .tech_container .tech01 {
            position: relative;
            width: 49.3280%;
        }
        .tech_container .tech01 .img {
            width: 100%;
        }
        .tech_container .tech01 .gif {
            position: absolute;
            top: 19.6%;
            left: 50%;
            transform: translateX(-50%);
            width: 92.5%;
        }
        .tech_container .tech02 {
            width: 49.3280%;
        }
        .tech_container .tech02 .img {
            width: 100%;
        }
        /* popup */
        .popup_wrap {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 900;
            display: none;
        }

        .popup_container_agree {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 90%;
            max-width: 640px;
            height: 90%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .popup_container_agree .popup_content {
            overflow-y: auto;
            padding: 8% 5%;
            height: calc(100% - 50px);
            box-sizing: border-box;
            font-size: 13px;
            line-height: 1.4;
        }

        .popup_container_agree .title01 {
            margin-bottom: 10px;
            font-size: 15px;
            font-weight: bold;
        }

        .popup_container_agree .txt {
            margin-top: 10px;
        }

        .popup_container_agree .title02 {
            margin-top: 14px;
            font-size: 14px;
            font-weight: bold;
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

        .popup_container_agree .popup_btn_box {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .popup_container_agree .btn_close {
            display: block;
            width: 100%;
            height: 50px;
            border: none;
            background-color: #333;
            color: #fff;
            font-size: 16px;
        }
        /* μμλ³΄κΈ° λ²νΌ */
        .go_form_fixed {
            width: 117px;
            max-width: 27%;
            position: absolute;
            /* top: 20%; */
            bottom: 18%;
            right: 4%;
            z-index: 800;
        }

        .go_form_fixed .btn_close {
            position: absolute;
            top: -12.5px;
            right: -12.5px;
            width: 25px;
            border-radius: 50%;
            box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.15);
            border: none;
        }
        /* form */
        .form_container {
            padding: 12% 0 7.5%;
            background-color: #f6f1ec;
            /* background-image: url('<?=$AD_DIR?>/images/db_bg.png'); */
            background-repeat: no-repeat;
            background-position: center bottom;
            background-size: 100%;
        }
        .form_table {
            width: 94%;
            margin: 0 auto;
        }
        .form_table .lab_box {
            padding: 0 0 3.192% 0;
            text-align: right;
            white-space: nowrap;
            vertical-align: middle;
        }
        .form_table .lab {
            /* font-size: 6vw; */
            color: #737373;
            font-weight: normal;
        }
        .form_table .lab .img {
            font-size: 6vw;
            height: 5.25vw;
            max-height: 42px;
            min-height: 24px;
            vertical-align: text-top;
        }
        .form_table .inp_box {
            padding: 0 0 3.192% 3.591%;
            font-size: 3vw;
            color: #646464;
            vertical-align: middle;
        }
        .form_table .inp {
            width: 75%;
            height: 5.25vw;
            max-height: 42px;
            min-height: 36px;
            padding: 3px;
            box-sizing: border-box;
            border: 1px solid #a8a8a8;
            box-shadow: inset 3px 3px 5px rgba(0, 0, 0, 0.1);
            font-size: 3vw;
            color: #2f2d2d;
        }
        .form_table .inp_radio {
            vertical-align: middle;
        }
        .form_table .inp_radio:not(:first-child) { 
            margin-left: 3%;
        }
        .form_table .lab_radio { 
            vertical-align: middle;
        }
        .form_table .inp_name,
        .form_table .inp_age {
            width: 60%;
        }
        .form_table .inp_tel {
            width: 80%;
            min-width: 160px;
        }
        .form_table .inp_txt {
            width: 70%;
        }
        .form_container .btn_box {
            margin-top: 6%;
            font-size: 0;
        }
        .form_container .btn_img {
            width: 75%;
            max-width: 527px;
        }
        .form_container .txt_notice {
            margin: 4% 0;
            font-size: 2.8572vw;
            color: #848484;
            line-height: 1.4;
        }
        .form_container .inp_agree {
            vertical-align: middle;
        }
        .form_container .agree_check {
            margin-top: 2.5%;
            font-size: 16px;
            font-weight: bold;
            vertical-align: middle;
            color: #9b9b9b;
        }
        .form_container .btn_popup {
            background-color: transparent;
            border: none;
            font-size: 16px;
            font-weight: bold;
            vertical-align: middle;
            color: #9b9b9b;
        }
        /* μΆκ° λκΈ μ€νμΌ */
        .comment_container {
            margin-bottom: 11%;
            border-top: 1px solid #efefef;
            font-family: 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
        }
        .comment_container .comment_amount {
            padding: 0 28px;
            font-size: 15px;
            font-weight: 800;
            color: #000;
            line-height: 48px;
        }
        .comment_container .comment_margin_box {
            height: 12px;
            border-top: 1px solid #efefef;
            border-bottom: 1px solid #efefef;
            background-color: #f1f2f4;
        }
        .comment_container .comment_tab_list {
            padding: 0 28px;
            border-bottom: 1px solid #efefef;
        }
        .comment_container .comment_tab {
            margin-right: 24px;
            font-size: 15px;
            font-weight: 600;
            color: #000;
            line-height: 64px;
        }
        .comment_container .comment_tab_active {
            text-decoration: underline;
            text-underline-position: under;
        }
        .comment_container .comment_form {
            padding: 10px;
            margin-bottom: 10px;
            border-bottom: 1px solid #efefef;
        }
        .comment_container .comment_inp {
            float: left;
            width: calc(100% - 110px);
            padding: 13px 10px;
            box-sizing: border-box;
            font-size: 14px;
            border-radius: 5px;
            border: 1px solid #ddd;
            cursor: text;
        }
        .comment_container .comment_btn_submit {
            float: right;
            width: 100px;
            padding: 13px 0;
            font-size: 16px;
            text-align: center;
            border-radius: 5px;
            color: #fff;
            background-color: #2565cf;
        }
        .comment_container .comment_box {
            padding: 30px 18px;
            border-bottom: 1px solid #efefef;
        }
        .comment_container .comment_profile {
            float: left;
            margin-right: 12px;
            width: 35px;
        }
        .comment_container .comment_profile .img {
            width: 100%;
        }
        .comment_container .comment_best {
            float: left;
            width: 46px;
            margin-right: 10px;
            margin-top: 2px;
        }
        .comment_container .comment_best .img {
            width: 100%;
        }
        .comment_container .comment_info {
            float: left;
        }
        .comment_container .comment_user {
            font-size: 15px;
            color: #000;
            font-weight: bold;
            line-height: 1;
        }
        .comment_container .comment_date {
            margin-top: 4px;
            font-size: 12px;
            color: #b8b8b8;
            line-height: 1;
        }
        .comment_container .comment_body {
            margin-top: 14px;
            padding-left: 45px;
        }
        .comment_container .comment_text {
            font-size: 18px;
            line-height: 1.4;
            color: #4f4f4f;
            word-break: keep-all;
        }
        .comment_container .comment_images {
            margin-top: 10px;
        }
        .comment_container .comment_images .img {
            width: 29.887%;
            margin-right: 1.6%;
        }
        .comment_container .comment_btn_box {
            margin-top: 36px;
            text-align: right;
        }
        .comment_container .comment_btn {
            vertical-align: middle;
            font-size: 13px;
            margin-left: 6px;
            cursor: pointer;
        }
        .comment_container .comment_btn .icon {
            vertical-align: middle;
            width: 16px;
        }
        .comment_container .comment_btn_like {
            color: #f00;
        }
        .comment_container .comment_btn_unlike {
            color: #000;
        }
        .comment_container .comment_more_box {
            padding-top: 24px;
            text-align: center;
        }
        .comment_container .comment_btn_more {
            font-size: 16px;
            font-weight: bold;
        }
        .comment_container .comment_btn_more .emph_num {
            color: #001eff;
        }

        /* μΆκ° λκΈ μ€νμΌ end */

        @media screen and (min-width: 801px){
            .form_table .lab .img {
                font-size: 36px;
            }
            .form_table .inp_box {
                font-size: 24px;
            }
            .form_table .inp {
                font-size: 28px;
            }
            .form_container .txt_notice {
                font-size: 20px;
            }
            .form_container .agree_check {
                font-size: 20px;
            }
            .form_container .btn_popup {
                font-size: 20px;
            }
        }
        @media screen and (max-width: 500px){
            .form_container {
                padding: 12% 0 10%;
            }
            .form_table .inp_box {
                font-size: 16px;
            }
            .form_table .inp {
                font-size: 18px;
            }
            .form_container .agree_check {
                font-size: 13px;
            }
            .form_container .btn_popup {
                font-size: 13px;
            }
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
    <?php if(element('multi_code',$view)==='adtive' || element('multi_code',$view)==='adtive2'){ ?>
                         <!-- νκ²νΈμ_L6444448 -->
            <script src='//cdn.targetpush.co.kr/js/targetpush.js'  charset='utf-8'></script>
            <script> (function(){adtive_target_push.start('L6444448')}(document)) </script>
            <!--// νκ²νΈμ_L6444448 -->
    <?php } ?>
    <?php if(strtolower(element('multi_code',$view))==='gdn'){ ?>
            <!-- Global site tag (gtag.js) - Google Ads: 661874705 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-661874705"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-661874705'); </script>

            <?php if($this->session->flashdata('mlh_id')){ ?>

            <!-- Event snippet for Website lead conversion page --> <script> gtag('event', 'conversion', {'send_to': 'AW-661874705/MAsZCMbg88gBEJHQzbsC'}); </script>
      
        

            <?php } ?>
        <?php } ?>
        <?php if(strtolower(element('multi_code',$view))==='ct'){ ?>

                <script type='text/javascript'>
                    !function (w,d,s,u,t,ss,fs) {
                        if(w.ex2cts)return;t=w.ex2cts={};if(!window.t) window.t = t;
                        t.push = function() {t.callFunc?t.callFunc.apply(t,arguments) : t.cmd.push(arguments);};
                        t.cmd=[];ss = document.createElement(s);ss.async=!0;ss.src=u;
                        fs=d.getElementsByTagName(s)[0];fs.parentNode.insertBefore(ss,fs);
                    }(window,document,'script','//st2.exelbid.com/js/cts.js');
                    ex2cts.push('init', '5ef0036af1c49a1a0d8b4567');
                </script>


                <?php if($this->session->flashdata('mlh_id')){ ?>

                <script> ex2cts.push('purchase');</script>
          
            

                <?php } ?>
            <?php } ?>   
                 
        <script type="text/javascript" charset="UTF-8" src="//t1.daumcdn.net/adfit/static/kp.js"></script>
        <script type="text/javascript">
              kakaoPixel('7431202530174679533').pageView();
        </script>

        <!-- Criteo λ‘λ νμΌ -->
        <script type="text/javascript" src="//dynamic.criteo.com/js/ld/ld.js?a=73591" async="true"></script>
        <!-- END Criteo λ‘λ νμΌ -->                

        <!-- Criteo ννμ΄μ§ νκ·Έ -->
        <script type="text/javascript">
        window.criteo_q = window.criteo_q || [];
        var deviceType = /iPad/.test(navigator.userAgent) ? "t" : /Mobile|iP(hone|od)|Android|BlackBerry|IEMobile|Silk/.test(navigator.userAgent) ? "m" : "d";
        window.criteo_q.push(
         { event: "setAccount", account: 73591},
         { event: "setEmail", email: "" },
         { event: "setZipcode", zipcode: "" },
         { event: "setSiteType", type: deviceType},
         { event: "viewHome"});
        </script>
        <!-- END Criteo ννμ΄μ§ νκ·Έ -->
</head>            
<body>
    <div class="wrap">
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>

        <!-- <div class="go_form_fixed js-fixed-btn" id="btnGoFormFixed">
            <a href="#formContainer" class="btn_img btn_goform"><img src="<?=$AD_DIR?>/images/btn_goform.png" class="img" alt="μμΈνκ² μμλ³΄κΈ°"></a>
            <button class="btn_img btn_close" type="button" onclick="closeGoFormBtn();"><img src="<?=$AD_DIR?>/images/btn_fixed_close.png" class="img" alt="λ«κΈ°"></button>
        </div> -->
        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/du_01.png" alt="25μΈλΆν° μμν 40λλΆν°λ κΈκ°νλ μ½λΌκ² λ³΄μΆ© μνλ©΄ μμκ°μ νΌλΆ νλ ₯ λ¬΄λμ Έ.." class="img"></div> -->
        <!-- gif01 -->
        <!-- <div class="gif01"> -->
            <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/du_02.gif" alt="λμΌμλ μ¬μ©μμμμ" class="img"></div> -->
            <!-- <div class="video_box">
                <video class="video" preload="metadata" draggable="true" controls muted playsinline autoplay loop poster="<?=$AD_DIR?>/images/thum_video02.jpg">
                    <source src="<?=$AD_DIR?>/video/video02.mp4" type="video/mp4">
                    λΈλΌμ°μ κ° λΉλμ€ νκ·Έλ₯Ό μ§μνμ§ μμ΅λλ€.
                </video>
            </div>
        </div> -->

        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/du_03.png" alt="κΈ°μ¬λ΄μ©" class="img"></div> -->
        <div class="img_box"><img src="<?=$AD_DIR?>/images/dd_01.jpg" alt="νΌλΆκ³Όκ° μλ μ§μμ λ΅μ μ°Ύλ€" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/dd_02.jpg" alt="λμΌμλ μ΄λ°λΆλ€μ΄ μ°λ©΄ μ’μμ~!" class="img"></div>

        <!-- dbform -->
        <div class="form_container" id="formContainer" style="background-image: url('<?=$AD_DIR?>/images/bg_form__02.jpg');">
            <?php
                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
                echo form_open(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">     
                <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">


                <table class="form_table">
                    <tbody>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_name" class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_name.png" alt="μ±ν¨" class="img">
                                </label>
                            </th>
                            <td class="inp_box">
                                <input type="text" name="mlh_name" id="mlh_name" class="inp inp_name input" label="μ±ν¨" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_mobileno" class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_tel.png" alt="μ°λ½μ²" class="img">
                                </label>
                            </th>
                            <td class="inp_box">
                                <input type="tel" name="mlh_mobileno" id="mlh_mobileno" class="inp inp_tel input" label="μ°λ½μ²" placeholder="μ«μλ§ μ μ΄μ£ΌμΈμ" value="<?php echo set_value('mlh_mobileno', element('mlh_mobileno', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_age" class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_age.png" alt="λμ΄" class="img">
                                </label>
                            </th>
                            <td class="inp_box">
                                <input type="tel" name="mlh_age" id="mlh_age" class="inp inp_age input" label="λμ΄" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <span class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_gender.png" alt="μ±λ³" class="img">
                                </span>
                            </th>
                            <td class="inp_box">
                                <input type="radio" value="1" name="mlh_gender" id="mlh_gender1" class="input inp_radio" label="μ±λ³"  <?php echo set_checkbox('mlh_gender','1' ,true); ?>>
                                <label for="mlh_gender1" class="lab_radio">μ¬μ±</label>
                                
                                <input type="radio" value="2" name="mlh_gender" id="mlh_gender2" class="input inp_radio" label="μ±λ³" <?php echo set_checkbox('mlh_gender','2'); ?>>
                                <label for="mlh_gender2" class="lab_radio">λ¨μ±</label>
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_text" class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_time.png" alt="ν΅νκ°λ₯νμκ°λ" class="img">
                                </label>
                            </th>
                            <td class="inp_box">
                                <input type="text" name="mlh_text" id="mlh_text" class="inp inp_txt input" label="ν΅νκ°λ₯νμκ°λ" value="<?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <span class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_item.png" alt="λ νμν" class="img">
                                </span>
                            </th>
                            <td class="inp_box">
                                <input type="radio" name="mlh_goods_type" id="mlh_goods_type1" class="input inp_radio" label="λ νμν" value="1"  <?php echo set_checkbox('mlh_goods_type','1' ,true); ?>>
                                <label for="mlh_goods_type1" class="lab_radio">λ­μλ¦¬</label>
                                
                                <input type="radio" value="2" name="mlh_goods_type" id="mlh_goods_type2" class="input inp_radio" label="λ νμν" <?php echo set_checkbox('mlh_goods_type','2'); ?>>
                                <label for="mlh_goods_type2" class="lab_radio">νλ‘νμλ</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="agree_check agree_box txt_center">
                    <input type="checkbox" name="agree" id="agree" class="inp_agree" checked> 
                    <label for="agree" class="lab_agree">κ°μΈμ λ³΄ μμ§ λ° νμ© λμ</label>
                    | <button class="btn_popup" type="button" onclick="openPopup('popupAgree')">μ½κ΄λ³΄κΈ°</button>
                </div>
                <div class="btn_box txt_center">
                    <button class="btn_img"><img src="<?=$AD_DIR?>/images/btn_form.png" alt="λ μμΈν μμλ³΄κΈ°" class="img"></button>
                </div>
                <!-- <div class="txt_center txt_notice" >
                    λΉμΌ λ ν ννμ μ§κΈ, μ΄ νμ΄μ§μμλ§ κ°λ₯ν μ΄λ²€νΈ μλλ€. <br>
                    κΈ°μλ μ λ³΄λ λ³Έ μ΄λ²€νΈ μΈμ μ΄λ ν μ©λλ‘λ μ¬μ©λμ§ μμ΅λλ€. 

                </div> -->
            <?php echo form_close(); ?>
        </div>
        <!-- dbform end -->

        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/du_15.jpg" alt="λμΌμλ νκΈ° λκΈ" class="img"></div> -->

        <!-- νκΈ° λκΈ -->
        <!-- <div class="comment_container">
            <div class="comment_amount">λκΈ 287</div>
            <div class="comment_margin_box"></div>
            <div class="comment_tab_list">
                <a href="#formContainer" class="comment_tab comment_tab_active">μΆμ²μ</a>
                <a href="#formContainer" class="comment_tab">μ΅μ μ</a>
                <a href="#formContainer" class="comment_tab">κ³Όκ±°μ</a>
            </div>
            <div class="comment_form clearfix">
                <div class="comment_inp">λ‘κ·ΈμΈ ν μμ±μ΄ κ°λ₯ν©λλ€.</div>
                <a href="#formContainer" class="comment_btn_submit">λκΈμλ ₯</a>
            </div>

            <div class="comment_list"> -->
                <!-- 1 -->
                <!-- <div class="comment_box">
                    <div class="comment_head clearfix">
                        <div class="comment_profile"><img src="<?=$AD_DIR?>/images/icon-profile.png" alt="νλ‘νμ¬μ§ μμ" class="img"></div>
                        <div class="comment_best">
                            <img src="<?=$AD_DIR?>/images/best.png" alt="best" class="img">
                        </div>
                        <div class="comment_info">
                            <div class="comment_user">lovedamon</div>
                            <div class="comment_date">2020.08.01  14:43</div>
                        </div>
                    </div>
                    <div class="comment_body">
                        <div class="comment_text">
                            μ λ κ΄λ¦¬μ΅μμ μΌνκ³ μμ΅λλ€. μ§μΈ μΆμ²μΌλ‘ λ ννμ¬ μ΄μ©ν΄λ΄€λλ°
                            νμ€ν μΌκ΅΄μ μ΄ μ λ¦¬λκ³  νμμ£Όλ¦ κ°μ  ν¨κ³Ό μμ΅λλ€. μ§μμ΄ μ§μμΈλ§νΌ
                            μμμ΄ μ΅κ΄μ΄λΌ μΌμͺ½, μ€λ₯Έμͺ½, λΉν¬ μ ν¬ν° νμ€νκ² νμ€νΈ ν΄λ΄€κ³ μ.
                            μ κ° κ°μ₯ νμ°ν μ’λ€ λλ λΆμλ 45λ κ΄λ, νμμ£Όλ¦, λ¦¬ννμ΄μμ. <br>
                            μ’ λ μ΅μν΄μ§λ©΄ λͺ©μ£Όλ¦ κ΄λ¦¬λ ν΄λ³΄λ €κ³ μ. λΆλ νΌλΆκ° μμμ§μ§ μκ³  μ€λ
                            μ΄μ©ν  μ μμμΌλ©΄ μ’κ² λ€μ.
                        </div>
                    </div>
                    <div class="comment_btn_box">
                        <span class="comment_btn comment_btn_like">
                            <img src="<?=$AD_DIR?>/images/icon-like.png" alt="μ’μμ" class="icon">
                            425
                        </span>
                        <span class="comment_btn comment_btn_unlike">
                            <img src="<?=$AD_DIR?>/images/icon-unlike.png" alt="μ«μ΄μ" class="icon">
                            2
                        </span>
                    </div>
                </div> -->
                <!-- 2 -->
                <!-- <div class="comment_box">
                    <div class="comment_head clearfix">
                        <div class="comment_profile"><img src="<?=$AD_DIR?>/images/icon-profile.png" alt="νλ‘νμ¬μ§ μμ" class="img"></div>
                        <div class="comment_info">
                            <div class="comment_user">slad***</div>
                            <div class="comment_date">2020.08.15  22:56</div>
                        </div>
                    </div>
                    <div class="comment_body">
                        <div class="comment_text">
                        μ κ° λ΄μ, νλΌμ, λ΄μ€ν¨μ κ³ μ£Όν, LED, κ°λ°λ λ± νμΌμ΄ μ ν κ½€ μ¨λ΄€λλ°
λμΌμλμ λͺ μ°¨μμ΄ λ€λ₯Έμ νμλλ€. λͺ λ¬ μ  νΌλΆκ³Όμμ λλΈλ‘ ν λ² μλͺ»
λ°μλ€κ° μΌκ΅΄ λ€μ§μ΄μ Έμ λλ μ΄μνλ μλ§λ κ±΄κ°..μΆμλλ° λμΌμλμΌλ‘
ν λ²μ 100μ· μ λλ₯Ό μΌμ£ΌμΌμ 1~2λ²μ© μ¬μ©νλ λΆλ΄λ μ κ³ , νΌλΆκ°μ λ
κΈ°λ μ΄μμ΄λΌ λλμ΄μ. μ κ° μ΄κ±° κ΅¬λ§€νλ €κ³  ν 4λ¬ κ³ λ―Όν κ² κ°μλ°, 
μ΅κ·Όμ κ²°κ΅­ μκ³ , κ²°κ³Όλ λλ§μ‘± μλλ€. μ’μ μ ν κ°μ¬ν©λλ€!
                        </div>
                        <div class="comment_images clearfix">
                            <img src="<?=$AD_DIR?>/images/img01.png" alt="νκΈ°μ΄λ―Έμ§" class="img">
                        </div>
                    </div>
                    <div class="comment_btn_box">
                        <span class="comment_btn comment_btn_like">
                            <img src="<?=$AD_DIR?>/images/icon-like.png" alt="μ’μμ" class="icon">
                            401
                        </span>
                        <span class="comment_btn comment_btn_unlike">
                            <img src="<?=$AD_DIR?>/images/icon-unlike.png" alt="μ«μ΄μ" class="icon">
                            2
                        </span>
                    </div>
                </div> -->
                <!-- 3 -->
                <!-- <div class="comment_box">
                    <div class="comment_head clearfix">
                        <div class="comment_profile"><img src="<?=$AD_DIR?>/images/icon-profile.png" alt="νλ‘νμ¬μ§ μμ" class="img"></div>
                        <div class="comment_info">
                            <div class="comment_user">wool860215</div>
                            <div class="comment_date">2020.08.03  09:12 </div>
                        </div>
                    </div>
                    <div class="comment_body">
                        <div class="comment_text">
                            μ΄λ¦΄ λλΆν° λ³Όμ΄λ‘ μμ²­ κ³ λ―Όνκ³  μμ΄μ κ°μ’ λ―Έμ© μμ  λ°μλ΄€κ΅¬μ,
                            μμ½νκΈ° κ·μ°?κ³  κ΄λ¦¬ λ°μ μκ°μ΄ μλ§λ€ λ³΄λ μμ°μ€λ  λμ΄κ° λ€μ΄
                            μΌκ΅΄μ²μ§μ΄ μκ²¨ λΆλκ°μ λ³΄μ¬ λͺμΌ κ³ λ―Όνλ€ λ ν κ΅¬λ§€νκ² λλ€μ<br>
                            νκ³  λλ κΈλ°© μΌκ΅΄ λ¦¬νν ν¨κ³Ό λκ΅¬μ, λ³μμμ νλ μμ  λ°©λ²κ³Ό λμΌ
                            νλ° κ΄ν κ³ μν  νμ μμ΄ μνλ μκ°λ ν  μ μμ΄μ λ§μ‘±ν©λλ€. νμΌμ΄
                            λ§μ΄ κ΅¬μν΄λ΄€μ§λ§ μ¦κ°μ μΌλ‘ λ°μ μ¨ μ νμ μ΄ μ νμ΄λΌ κ°μΆν©λλ€     
                        </div>
                    </div>
                    <div class="comment_btn_box">
                        <span class="comment_btn comment_btn_like">
                            <img src="<?=$AD_DIR?>/images/icon-like.png" alt="μ’μμ" class="icon">
                            381 
                        </span>
                        <span class="comment_btn comment_btn_unlike">
                            <img src="<?=$AD_DIR?>/images/icon-unlike.png" alt="μ«μ΄μ" class="icon">
                            4
                        </span>
                    </div>
                </div> -->
                <!-- 4 -->
                <!-- <div class="comment_box">
                    <div class="comment_head clearfix">
                        <div class="comment_profile"><img src="<?=$AD_DIR?>/images/icon-profile.png" alt="νλ‘νμ¬μ§ μμ" class="img"></div>
                        <div class="comment_info">
                            <div class="comment_user">psa3611</div>
                            <div class="comment_date">2020.08.08  10:25 </div>
                        </div>
                    </div>
                    <div class="comment_body">
                        <div class="comment_text">
                            μ΄λ¨Έλ, μΈμμ.. λλ¬΄ μ’μ΅λλ€. νλ ₯μ΄ λ¨μ΄μ Έμ κ³ λ―Ό λμ μ£Όλ¬Έμ νλλ°
                            λλ¬΄ μν μ νμΈ κ² κ°μμ. μλ κ³ κ° μ νμ΄λΌ μ λ§ λ§μ€μλλ°
                            μ¬μ©νκ³ λ νμ μ΄ μκ²Όμ΅λλ€. κΎΈμ€ν μ¬μ©ν΄μ λ μ’μ ν¨κ³Όλ₯Ό λ³΄κ³  μΆλ€μ
                            μ’μ μ ν λ§λ€μ΄ μ£Όμμ μ§μ¬μΌλ‘ κ°μ¬ λλ¦½λλ€. μ μ κ°μ κ³ λ―Ό κ°μ§μ 
                            λΆλ€λ κΌ­ μ μ κ°μ κΈ°λΆ μ’μ κ²½ν ν΄λ³΄μκΈΈ κΆν΄λλ¦½λλ€.        
                        </div>
                    </div>
                    <div class="comment_btn_box">
                        <span class="comment_btn comment_btn_like">
                            <img src="<?=$AD_DIR?>/images/icon-like.png" alt="μ’μμ" class="icon">
                            297
                        </span>
                        <span class="comment_btn comment_btn_unlike">
                            <img src="<?=$AD_DIR?>/images/icon-unlike.png" alt="μ«μ΄μ" class="icon">
                            3
                        </span>
                    </div>
                </div> -->
                <!-- 5 -->
                <!-- <div class="comment_box">
                    <div class="comment_head clearfix">
                        <div class="comment_profile"><img src="<?=$AD_DIR?>/images/icon-profile.png" alt="νλ‘νμ¬μ§ μμ" class="img"></div>
                        <div class="comment_info">
                            <div class="comment_user">ehwk06</div>
                            <div class="comment_date">2020.08.10  11:52 </div>
                        </div>
                    </div>
                    <div class="comment_body">
                        <div class="comment_text">
                            λ°μλ§μ λ°λ‘ μ¬μ©νλλ°μ, μ΄ν λ€μ λ³΄λ μ¬λλ§λ€ μ΄λΉ μ‘λ€λ€μ<br>
                            ν±μ΄λ μ΄μ€ν±μ νμ€νκ² λ¦¬ννλλ€μ~ λΎ°μ‘±ν΄μ‘μ΄μ γγ
                            <br>
                            νμμ£Όλ¦μ λ μ§μΌλ³Όκ²μ μμ§ μ΄λ₯΄λκΉ μ’ λ νλ€λ³΄λ©΄ ν¨κ³Όκ° μκ² μ£ ?
                            νΈνκ² κ΄λ¦¬λ°μ μ μλ€λκ² μ μΌ μ₯μ μΈ κ² κ°μμ 
                        </div>
                    </div>
                    <div class="comment_btn_box">
                        <span class="comment_btn comment_btn_like">
                            <img src="<?=$AD_DIR?>/images/icon-like.png" alt="μ’μμ" class="icon">
                            199
                        </span>
                        <span class="comment_btn comment_btn_unlike">
                            <img src="<?=$AD_DIR?>/images/icon-unlike.png" alt="μ«μ΄μ" class="icon">
                            1
                        </span>
                    </div>
                </div> -->
                <!-- 6 -->
                <!-- <div class="comment_box">
                    <div class="comment_head clearfix">
                        <div class="comment_profile"><img src="<?=$AD_DIR?>/images/icon-profile.png" alt="νλ‘νμ¬μ§ μμ" class="img"></div>
                        <div class="comment_info">
                            <div class="comment_user">young0193</div>
                            <div class="comment_date">2020.08.18  17:11 </div>
                        </div>
                    </div>
                    <div class="comment_body">
                        <div class="comment_text">
                            μΌκ΅΄μ μ’λ€λ κΈ°κ³λ λ€ μ¨λ΄μ λ°μ λ°μ λ§μ§λ§μ΄λΌλ λ§μμΌλ‘ κ΅¬λ§€
                            νλλ° μ§μ§ μ’μμ!!!! μ²¨μ΄μ§λ§ μ λ κ°λλ₯Ό μ’ μκ² 5λ¨κ³λ‘ νλλ°
                            ν λ² μμ λ‘λ μμ  νλ €μ!!!! κ΄λλκ³ , μΈλμΈ μ£Όλ¦λ μ¬λΌμ§λ―..
                            μμ  λλ°μ΄μμ~!!!!
                        </div>
                    </div>
                    <div class="comment_btn_box">
                        <span class="comment_btn comment_btn_like">
                            <img src="<?=$AD_DIR?>/images/icon-like.png" alt="μ’μμ" class="icon">
                            151
                        </span>
                        <span class="comment_btn comment_btn_unlike">
                            <img src="<?=$AD_DIR?>/images/icon-unlike.png" alt="μ«μ΄μ" class="icon">
                            2
                        </span>
                    </div>
                </div> -->
                <!-- 7 -->
                <!-- <div class="comment_box">
                    <div class="comment_head clearfix">
                        <div class="comment_profile"><img src="<?=$AD_DIR?>/images/icon-profile.png" alt="νλ‘νμ¬μ§ μμ" class="img"></div>
                        <div class="comment_info">
                            <div class="comment_user">pyj0830</div>
                            <div class="comment_date">2020.08.15  22:59 </div>
                        </div>
                    </div>
                    <div class="comment_body">
                        <div class="comment_text">
                            μλνμΈμ. 30λ μ΄λ° μ£ΌλΆμλλ€. λ¨Όμ  μ λ μλ§ν¬λ₯Ό νμμ μ£ΌκΈ°μ μΌλ‘
                            μμ λ°μλ μ£ΌλΆμΈλ°μ. μκ° λ΄μ κ°λκ² λ³΄ν΅ μΌμ΄ μλμ§λΌ μ°μ°ν λμΌμλμ λ³΄κ³  2λ¬ κ³ λ―Όλ§νλ€κ° μ΄λ κ² λ ννκ² λμλ€μ. λμ°©νμλ§μ ννμ΄μ€
                            ν΄λ³΄λ νμ€ν μ½ μ νμ μμμ μ΄ μ¬λΌκ°κΈ΄ νλ€μ. μ΅μμΉ μμ μν΄λ μ§λ§
                            λ°©λ²λ μ½κ³  μ΄λμ λ λ³΄μ΄λ λλ¬΄ λ§μ‘±νκ³  μμ΄μ. μ§μ μ’λ€λ κ³ μ£Όν
                            νΌλΆλ―Έμ©κΈ°κΈ° 3κ° μλλ° μ²λΆν΄λ λκ² μ΄μ.. μ΄κ² μ΅κ³ λ€μβ₯    
                        </div>
                        <div class="comment_images">
                            <img src="<?=$AD_DIR?>/images/img02.png" alt="νκΈ°μ΄λ―Έμ§" class="img">
                            <img src="<?=$AD_DIR?>/images/img03.png" alt="νκΈ°μ΄λ―Έμ§" class="img">
                        </div>
                    </div>
                    <div class="comment_btn_box">
                        <span class="comment_btn comment_btn_like">
                            <img src="<?=$AD_DIR?>/images/icon-like.png" alt="μ’μμ" class="icon">
                            108 
                        </span>
                        <span class="comment_btn comment_btn_unlike">
                            <img src="<?=$AD_DIR?>/images/icon-unlike.png" alt="μ«μ΄μ" class="icon">
                            3
                        </span>
                    </div>
                </div> -->
            <!-- </div>
            <div class="comment_more_box">
                <a href="#formContainer" class="comment_btn_more">
                    λκΈ <span class="emph_num">287κ°</span> λ λ³΄κΈ°
                </a>
            </div>
        </div> -->

        <!-- νκΈ° λκΈ end -->
        <div class="img_box"><img src="<?=$AD_DIR?>/images/dd_03.jpg" alt="νλ‘νμλ vs λ­μλ¦¬" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/dd_04_02.jpg" alt="2μ£Όμ λ± νλ², 15λΆ μ© ! 4μ£Όλ§μ λλΌμ΄ νΌλΆ λ³ν ! " class="img"></div>
        
        <div class="use_gif clearfix">
            <div class="gif_box fl_left"><img src="<?=$AD_DIR?>/images/use_01.gif" alt="μΌκ΅΄ μ€κ³½ λ° μ¬κ°ν± κ°μ " class="gif"></div>
            <div class="gif_box fl_right"><img src="<?=$AD_DIR?>/images/use_02.gif" alt="λͺ©μ£Όλ¦ λ° νλ ₯ κ°μ " class="gif"></div>
        </div>

        <div class="img_box"><img src="<?=$AD_DIR?>/images/dd_05_01.jpg" alt="λ°λΌμ¬ μ μλ λμΌμλ κΈ°μ μ νκ²©" class="img"></div>
        
        <div class="tech_container clearfix">
            <div class="tech01 fl_left">
                <img src="<?=$AD_DIR?>/images/dd_tech_01.jpg" alt="λμΌμλ" class="img">
                <img src="<?=$AD_DIR?>/images/duallayer.gif" alt="μμμμ" class="gif">
            </div>
            <div class="tech02 fl_right">
                <img src="<?=$AD_DIR?>/images/dd_tech_02.jpg" alt="νμ¬κΈ°κΈ°" class="img">
            </div>
        </div>
    
        <div class="img_box"><img src="<?=$AD_DIR?>/images/dd_05_03.jpg" alt="λ°λΌμ¬ μ μλ λμΌμλ κΈ°μ μ νκ²©" class="img"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/dd_06_01.jpg" alt="λ ν μ μ²­μ λ°μ μ μλ λλΌμ΄ νν!" class="img"></div>
        <div class="gif02">
            <div class="img_box"><img src="<?=$AD_DIR?>/images/dd_06_02.gif" alt="μ¬μ©μμμμ" class="img"></div>
        </div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/dd_06_03.jpg" alt="λ ν μ μ²­μ λ°μ μ μλ λλΌμ΄ νν!" class="img"></div>

        <!-- dbform02 -->
        <div class="form_container" id="formContainer02">
            <?php
                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents02(this)');
                echo form_open(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">     
                <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">


                <table class="form_table">
                    <tbody>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_name" class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_name.png" alt="μ±ν¨" class="img">
                                </label>
                            </th>
                            <td class="inp_box">
                                <input type="text" name="mlh_name" id="mlh_name" class="inp inp_name input02" label="μ±ν¨" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_mobileno" class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_tel.png" alt="μ°λ½μ²" class="img">
                                </label>
                            </th>
                            <td class="inp_box">
                                <input type="tel" name="mlh_mobileno" id="mlh_mobileno" class="inp inp_tel input02" label="μ°λ½μ²" placeholder="μ«μλ§ μ μ΄μ£ΌμΈμ" value="<?php echo set_value('mlh_mobileno', element('mlh_mobileno', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_age" class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_age.png" alt="λμ΄" class="img">
                                </label>
                            </th>
                            <td class="inp_box">
                                <input type="tel" name="mlh_age" id="mlh_age" class="inp inp_age input02" label="λμ΄" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <span class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_gender.png" alt="μ±λ³" class="img">
                                </span>
                            </th>
                            <td class="inp_box">
                                <input type="radio" value="1" name="mlh_gender" id="mlh_gender1" class="input02 inp_radio" label="μ±λ³"  <?php echo set_checkbox('mlh_gender','1' ,true); ?>>
                                <label for="mlh_gender1" class="lab_radio">μ¬μ±</label>
                                
                                <input type="radio" value="2" name="mlh_gender" id="mlh_gender2" class="input02 inp_radio" label="μ±λ³" <?php echo set_checkbox('mlh_gender','2'); ?>>
                                <label for="mlh_gender2" class="lab_radio">λ¨μ±</label>
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <label for="mlh_text" class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_time.png" alt="ν΅νκ°λ₯νμκ°λ" class="img">
                                </label>
                            </th>
                            <td class="inp_box">
                                <input type="text" name="mlh_text" id="mlh_text" class="inp inp_txt input02" label="ν΅νκ°λ₯νμκ°λ" value="<?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?>">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box">
                                <span class="lab">
                                    <img src="<?=$AD_DIR?>/images/lab_item.png" alt="λ νμν" class="img">
                                </span>
                            </th>
                            <td class="inp_box">
                                <input type="radio" name="mlh_goods_type" id="mlh_goods_type1" class="input02 inp_radio" label="λ νμν" value="1"  <?php echo set_checkbox('mlh_goods_type','1' ,true); ?>>
                                <label for="mlh_goods_type1" class="lab_radio">λ­μλ¦¬</label>
                                
                                <input type="radio" value="2" name="mlh_goods_type" id="mlh_goods_type2" class="input02 inp_radio" label="λ νμν" <?php echo set_checkbox('mlh_goods_type','2'); ?>>
                                <label for="mlh_goods_type2" class="lab_radio">νλ‘νμλ</label>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="agree_check agree_box txt_center">
                    <input type="checkbox" name="agree" id="agree2" class="inp_agree" checked> 
                    <label for="agree2" class="lab_agree">κ°μΈμ λ³΄ μμ§ λ° νμ© λμ</label>
                    | <button class="btn_popup" type="button" onclick="openPopup('popupAgree')">μ½κ΄λ³΄κΈ°</button>
                </div>
                <div class="btn_box txt_center">
                    <button class="btn_img"><img src="<?=$AD_DIR?>/images/btn_form.png" alt="λ μμΈν μμλ³΄κΈ°" class="img"></button>
                </div>
                <!-- <div class="txt_center txt_notice" >
                    λΉμΌ λ ν ννμ μ§κΈ, μ΄ νμ΄μ§μμλ§ κ°λ₯ν μ΄λ²€νΈ μλλ€. <br>
                    κΈ°μλ μ λ³΄λ λ³Έ μ΄λ²€νΈ μΈμ μ΄λ ν μ©λλ‘λ μ¬μ©λμ§ μμ΅λλ€. 

                </div> -->
            <?php echo form_close(); ?>
        </div>
        <!-- dbform02 end -->

        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_16.png" alt="νΈν°" class="img"></div>

        <!-- κ°μΈμ λ³΄ μ²λ¦¬λ°©μΉ¨ νμ -->
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
                    <button type="button" class="btn_close" onclick="closePopup('popupAgree')">λ« κΈ°</button>
                </div>
            </div>
        </div>
    </div>
        <!-- κ°μΈμ λ³΄ μ²λ¦¬λ°©μΉ¨ νμ end -->
    <div class="loading" style="<?php echo empty($this->session->flashdata('mlh_id')) ? 'display:none;' : ''; ?> ">
        <div class="dot_container" >
            <div class="dot dot01"></div>
            <div class="dot dot02"></div>
            <div class="dot dot03"></div>
        </div>
    </div>   
    <script>
        // popup
        function openPopup(el){
            $('#popupWrap').show();
            $('#'+ el).show();
        }
        function closePopup(el){
            $('#popupWrap').hide();
            $('#'+ el).hide();
        }
        function closeGoFormBtn() {
            $('#btnGoFormFixed').hide();
        }

        // // fixed btn μ€ν¬λ‘€ μ λλ©μ΄μ
        // var floatPosition = parseInt($(".js-fixed-btn").offset().top);

        // $(window).scroll(function() {
        //     var scrollTop = $(window).scrollTop();
        //     var newPosition = scrollTop + floatPosition + "px";

        //     $(".js-fixed-btn").stop().animate({
        //         "top" : newPosition
        //     },{
        //         'duration' : 500,
        //         'easing' : 'easeOutCirc',
        //     });

        // }).scroll();

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
            var flag=false;
            var href;

            <?php if(strtolower(element('multi_code',$view))==='CT'){ ?>
                ex2cts.push('track', 'consult');
            <?php } ?>   

            $('.input').each(function(){
                if( ! jQuery.trim($(this).val()) ) {
                    alert(getPostWord($(this).attr('label'),'μ','λ₯Ό') + 'μλ ₯ν΄ μ£ΌμΈμ');
                    $(this).focus();
                    flag=false;
                    return false;
                } else flag=true;
            });

            if(!flag) return false;

            if($('input[id="agree"]').is(":checked")){
                 $('.loading').show();
                href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

                $.ajax({
                    async : false,
                    url : href,
                    type : 'get',
                    dataType : 'json',
                    complete : function(data) {
                        // $("#mlh_mobileno").val($("#mlh_mobileno1").val()+$("#mlh_mobileno2").val()+$("#mlh_mobileno3").val());
                        
                    }
                });

                

                return flag;
            } else alert('κ°μΈμ λ³΄ μμ§ λ° μ΄μ©λμλ₯Ό μ²΄ν¬ ν΄μ£ΌμκΈ° λ°λλλ€.');
            
            return false;
        }

        function submitContents02(f) {
            var flag=false;
            var href;

            <?php if(strtolower(element('multi_code',$view))==='CT'){ ?>
                ex2cts.push('track', 'consult');
            <?php } ?>   

            $('.input02').each(function(){
                if( ! jQuery.trim($(this).val()) ) {
                    alert(getPostWord($(this).attr('label'),'μ','λ₯Ό') + 'μλ ₯ν΄ μ£ΌμΈμ');
                    $(this).focus();
                    flag=false;
                    return false;
                } else flag=true;
            });

            if(!flag) return false;

            if($('input[id="agree2"]').is(":checked")){
                 $('.loading').show();
                href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

                $.ajax({
                    async : false,
                    url : href,
                    type : 'get',
                    dataType : 'json',
                    complete : function(data) {
                        // $("#mlh_mobileno").val($("#mlh_mobileno1").val()+$("#mlh_mobileno2").val()+$("#mlh_mobileno3").val());
                        
                    }
                });

                

                return flag;
            } else alert('κ°μΈμ λ³΄ μμ§ λ° μ΄μ©λμλ₯Ό μ²΄ν¬ ν΄μ£ΌμκΈ° λ°λλλ€.');
            
            return false;
        }

        <?php if($this->session->flashdata('mlh_id')){?>        
                $('.loading').hide();
                kakaoPixel('7431202530174679533').completeRegistration();
        <?php } ?>
    </script>
</body>
</html>


<?php if(element('multi_code',$view) ==='taboola_pc_RON2' || element('multi_code',$view) ==='taboola_re' || element('multi_code',$view) ==='taboola_mo_RON2'){?>
    <?php if($this->session->flashdata('mlh_id')){ ?>

         <script type='text/javascript'>
          window._tfa = window._tfa || [];
          window._tfa.push({notify: 'event', name: 'complete_registration2', id: 1253631});
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
            <img src='https://trc.taboola.com/1253631/log/3/unip?en=complete_registration2'
                width='0' height='0' style='display:none'/>
        </noscript>
        <!-- End of Taboola Pixel Code -->
       




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
<?php } ?>


<?php if(element('multi_code',$view) ==='tenping_news' ){ ?>
        
        <?php if($this->session->flashdata('mlh_id')){ ?>

            <script src="//tenping.kr/scripts/cpa/tenping.cpa.V2_Domain.min.js"></script>
            <script>
                TenpingScript.SendConversion("<?php echo $this->session->flashdata('mlh_mobileno') ? substr($this->session->flashdata('mlh_mobileno'),-4): '' ?>");
            </script>
      
        

        <?php } ?>
        
<?php } ?>


<?php if(element('multi_code',$view) ==='TGM' || element('multi_code',$view) ==='TGP' ){ ?>
        <div id="wp_tg_cts" style="display:none;"></div>

        <script type="text/javascript" async src="//cdn-aitg.widerplanet.com/js/wp_astg_4.0.js"></script>
        <?php if($this->session->flashdata('mlh_id')){ ?>

      
       <script type="text/javascript">
            var wptg_tagscript_vars = wptg_tagscript_vars || [];
            wptg_tagscript_vars.push((function() {
            return {wp_hcuid:"", /*κ³ κ°λλ² λ± Unique ID (ex. λ‘κ·ΈμΈ ID, κ³ κ°λλ² λ± )λ₯Ό μνΈννμ¬ λμ.μ£Όμ : λ‘κ·ΈμΈ νμ§ μμ μ¬μ©μλ μ΄λ ν κ°λ λμνμ§ μμ΅λλ€.*/ti:"49584", /*κ΄κ³ μ£Ό μ½λ */ty:"PurchaseComplete", /*νΈλνΉνκ·Έ νμ */device:"web", /*λλ°μ΄μ€ μ’λ₯ (web λλ mobile)*/items:[{i:"λΉμ©μλ΄ ", /*μ ν μλ³ μ½λ (νκΈ , μμ΄ , λ²νΈ , κ³΅λ°± νμ© )*/t:"λΉμ©μλ΄ ", /*μ νλͺ (νκΈ , μμ΄ , λ²νΈ , κ³΅λ°± νμ© )*/p:"1", /*μ νκ°κ²© (μ ν κ°κ²©μ΄ μμκ²½μ° 1λ‘ μ€μ  )*/q:"1" /*μ νμλ (μ ν μλμ΄ κ³ μ μ μΌλ‘ 1κ° μ΄νμΌ κ²½μ° 1λ‘ μ€μ  )*/}]};}));</script>
      
        

        <?php } else { ?>
        
            <script type="text/javascript">
            var wptg_tagscript_vars = wptg_tagscript_vars || [];
            wptg_tagscript_vars.push((function() {
                return {wp_hcuid:"", /*κ³ κ°λλ² λ± Unique ID (ex. λ‘κ·ΈμΈ ID, κ³ κ°λλ² λ± )λ₯Ό μνΈννμ¬ λμ.μ£Όμ : λ‘κ·ΈμΈ νμ§ μμ μ¬μ©μλ μ΄λ ν κ°λ λμνμ§ μμ΅λλ€.*/ti:"49584", /*κ΄κ³ μ£Ό μ½λ */ty:"Home", /*νΈλνΉνκ·Έ νμ */device:"web" /*λλ°μ΄μ€ μ’λ₯ (web λλ mobile)*/};}));
            </script> 

        <?php } ?>
        
<?php } ?>





