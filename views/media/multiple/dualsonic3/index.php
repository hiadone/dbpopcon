<?php 

$this->managelayout->add_meta('<meta name="viewport" content="width=device-width, initial-scale=1.0">'); 

$this->managelayout->add_css(base_url('assets/css/preloader.min.css')); 
$this->managelayout->add_css("https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@1.0/nanumsquare.css"); 



    $AD_DIR  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['adpot_cid'])) $jid=$_GET['adpot_cid'];
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
            line-height: 1;
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
            max-width: 700px;
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
            padding: 0 4.2858%;
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

        .gif_container {
            padding-left: 5.7%
        }
        .gif_container .gif_box01 {
            position: relative;
            width: 66.202%;
            font-size: 0;
        }
        .gif_container .gif_box01 .tag {
            position: absolute;
            width: 18.8572vw;
            max-width: 132px;
            top: -5.93%;
            right: -8.24%;
        }
        .gif_container .gif_box02 {
            width: 33.783%;
            font-size: 0;
        }
        .gif_container .img {
            width: 100%;
            font-size: 10px;
        }
        /*  */
        .title_box01 {
            padding: 0 2% 5%;
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
            padding: 0;
            /* background-image: url('<?=$AD_DIR?>/images/db_bg.jpg'); */
            background-repeat: no-repeat;
            background-position: center bottom;
            background-size: 100%;
        }
        .form_table {
            width: 94%;
            margin: 0 auto;
        }
        .form_table .lab_box {
            padding: 0 4.5% 4.5% 0;
            text-align: right;
            white-space: nowrap;
        }
        .form_table .lab {
            font-size: 6vw;
            color: #2f2d2d;
            font-weight: normal;
        }
        .form_table .inp_box {
            padding: 0 0 4.5% 0;
            font-size: 4vw;
            color: #2f2d2d;
        }
        .form_table .inp {
            width: 75%;
            height: 7.1429vw;
            max-height: 50px;
            padding: 3px;
            box-sizing: border-box;
            border: 1px solid #a8a8a8;
            box-shadow: inset 3px 3px 5px rgba(0, 0, 0, 0.1);
            font-size: 4vw;
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
        .form_container .btn_img {
            width: 87.4286%;
        }
        .form_container .txt_notice {
            margin: 4% 0;
            color: #848484;
            line-height: 1.4;
        }
        .form_container .txt_notice01 {
            font-size: 3.2858vw;
        }
        .form_container .txt_notice02 {
            font-size: 2.8572vw;
        }
        .form_container .btn_box {
            position: relative;
            margin-top: 2%;
        }
        .form_container .tag_btnimg {
            position: absolute;
            top: -54%;
            right: 2%;
            width: 15.1429%;
        }
        .form_container .inp_agree {
            vertical-align: middle;
        }
        .form_container .agree_check {
            font-size: 13px;
            vertical-align: middle;
            color: #989898;
        }
        .form_container .btn_popup {
            background-color: transparent;
            border: none;
            font-size: 13px;
            vertical-align: middle;
            color: #989898;
        }
        /* μΆκ° λκΈ μ€νμΌ */
        .comment_container {
            /*margin-top: 40px;*/
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
        }
        .comment_container .comment_date {
            margin-top: 4px;
            font-size: 12px;
            color: #b8b8b8;
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
            margin-top: 5.14%;
            text-align: right;
        }
        .comment_container .comment_btn {
            vertical-align: middle;
            font-size: 13px;
            margin-left: 6px;
            cursor: pointer;
        }
        .comment_container .comment_btn .icon {
            vertical-align: text-bottom;
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


        @media screen and (min-width: 701px){
            .form_table .lab {
                font-size: 36px;
            }
            .form_table .inp_box {
                font-size: 26px;
                color: #2f2d2d;
            }
            .form_table .inp {
                font-size: 28px;
            }
            .form_container .txt_notice01 {
                font-size: 23px;
            }
            .form_container .txt_notice02 {
                font-size: 20px;
            }
            .form_container .agree_check {
                font-size: 16px;
            }
            .form_container .btn_popup {
                font-size: 16px;
            }
        }
        @media screen and (max-width: 430px){
            .comment_container .comment_text {
                font-size: 16px;
            }
        }

        .inDB,
        .inDB * {
            outline:none;
            padding:0;            
            border:0;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        .inDB {
            color:#fff;
            background-color: #00c993;
            padding:20px 10px;
        }

        @media screen and (min-width: 701px){
            .inbox dl dt,.inbox dl dd { display:table-cell;vertical-align:middle; font-size:24px; }
            .inbox input[type="text"],.inbox input[type="number"] { width:100%; font-size:22px; font-weight:bold; background: #fff; border:0; padding:4px; }
            .inbox .radio label { font-size:22px; margin-left: 3px; letter-spacing:-.5px; }
            .inbox .checkbox { text-align: center; font-size:20px; }
            .inbox summary { display:block;  text-align:center; color:#000; font-size:22px;font-weight:bold; margin-top:15px; line-height: 150%;}
        }

        @media screen and (max-width: 430px){
            .inbox dl dt,.inbox dl dd { display:table-cell;vertical-align:middle; font-size:16px; }
            .inbox input[type="text"],.inbox input[type="number"] { width:100%; font-size:14px; font-weight:bold; background: #fff; border:0; padding:4px; }
            .inbox .radio label { font-size:14px; margin-left: 3px; letter-spacing:-.5px; }
            .inbox .checkbox { text-align: center; font-size:12px; }
            .inbox summary { display:block;  text-align:center; color:#000; font-size:14px;font-weight:bold; margin-top:15px; line-height: 150%;}
        }

        .inbox dl { display:table;width:100%; margin-bottom:20px;padding-top:20px; }
        
        .inbox dl dt { width:15%; text-align:center; font-weight:bold; }
        .inbox dl dd { width:35%; }
        .inbox dl.nth3 .sec1 { width:20%; }
        .inbox dl.nth3 .sec2 { width:30%; }
        
        .inbox .radio { display: inline-block; cursor:pointer; }
        
        .inbox .radio + .radio { margin-left:10px; }
        .inbox .db-btn { text-align:center; padding:10px 0; }
        .inbox .db-btn img { max-width:250px; vertical-align:bottom; }
        
        .inbox .checkbox input[type="checkbox"] { position: relative; top:3px; margin-right: 3px; }
        .inbox .checkbox span { cursor: pointer; }
        button , label { cursor: pointer; }

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

        <script type="text/javascript" charset="UTF-8" src="//t1.daumcdn.net/adfit/static/kp.js"></script>
        <script type="text/javascript">
              kakaoPixel('7431202530174679533').pageView();
        </script>
</head>
<body>
    <div class="wrap">
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>

        <div class="go_form_fixed js-fixed-btn" id="btnGoFormFixed">
<!--             <a href="#formContainer" class="btn_img btn_goform"><img src="<?=$AD_DIR?>/images/btn_goform.png" class="img" alt="μμΈνκ² μμλ³΄κΈ°"></a>
            <button class="btn_img btn_close" type="button" onclick="closeGoFormBtn();"><img src="<?=$AD_DIR?>/images/btn_fixed_close.png" class="img" alt="λ«κΈ°"></button> -->
        </div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_1.jpg" alt="μμλ‘ κ°λ νΌλΆκ³Ό, μ΄μ  μ λ μκ°μ!" class="img"></div>
        
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_15.gif" alt="λμΌμλ μμ λ΄μ­" class="img"></div>        
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_16.jpg" alt="λμΌμλ μμ λ΄μ­" class="img"></div>        
        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/du_1_1.jpg" alt="μμλ‘ κ°λ νΌλΆκ³Ό, μ΄μ  μ λ μκ°μ!" class="img"></div> -->
        <section class="inDB">
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">     
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
            <div class="inbox">
                <dl>
                    <dt>
                        <label for="mlh_name" class="lab">μ΄ λ¦</label>
                    </dt>
                    <dd>
                        <input type="text" name="mlh_name" id="mlh_name" class="inp inp_name input" label="μ΄λ¦" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>">
                    </dd>
                    <dt>μ± λ³</dt>
                    <dd>
                        <input type="radio" value="1" name="mlh_gender" id="mlh_gender1" class="input inp_radio" label="μ±λ³"  <?php echo set_checkbox('mlh_gender','1' ,true); ?>>
                        <label for="mlh_gender1" class="lab_radio">μ¬μ±</label>
                        
                        <input type="radio" value="2" name="mlh_gender" id="mlh_gender2" class="input inp_radio" label="μ±λ³" <?php echo set_checkbox('mlh_gender','2'); ?>>
                        <label for="mlh_gender2" class="lab_radio">λ¨μ±</label>
                    </dd>
                </dl>
                <dl>
                    <dt>                    
                        <label for="mlh_mobileno" class="lab">μ°λ½μ²</label>
                    </dt>
                    <dd>
                        <input type="text" name="mlh_mobileno" id="mlh_mobileno" class="inp inp_tel input" label="μ°λ½μ²"  value="<?php echo set_value('mlh_mobileno', element('mlh_mobileno', element('post', $view))); ?>">
                        
                    </dd>
                    <dt>                    
                        <span class="lab">μ  ν</span>
                    </dt>
                    <dd>
                        <div class="radio">
                            <input type="radio" value="2" name="mlh_goods_type" id="mlh_goods_type2" class="input inp_radio" label="λ νμν" <?php echo set_checkbox('mlh_goods_type','2',true); ?> /><label for="mlh_goods_type2" class="lab_radio">νλ‘</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="mlh_goods_type" id="mlh_goods_type1" class="input inp_radio" label="λ νμν" value="1"  <?php echo set_checkbox('mlh_goods_type','1' ); ?> /><label for="mlh_goods_type1" class="lab_radio">λ­μλ¦¬</label>
                        </div>
                    </dd>
                </dl>
                <dl class="nth3">
                    <dt><label for="mlh_age" class="lab">λ μ΄</label></dt>
                    <dd class="sec1">
                        <input type="number" name="mlh_age" id="mlh_age" class="inp inp_age input" label="λμ΄" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>" placeholder="μ«μλ‘..."/>                        
                    </dd>
                    <dt class="sec2"><label for="mlh_text" class="lab">μλ΄κ°λ₯μκ°</label></dt>
                    <dd>
                        <input type="text" name="mlh_text" id="mlh_text" class="inp inp_txt input" label="μλ΄κ°λ₯μκ°" value="<?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?>">
                    </dd>
                </dl>

                <p class="db-btn"><button class="btn_img"><img src="<?=$AD_DIR?>/images/db-btn.png" alt="" /></button></p>
                <div class="checkbox">
                    <input type="checkbox" name="agree" id="agree" checked/><label for="agree">κ°μΈμ λ³΄ μμ§ μ μ±μ λμν©λλ€</label> | <span  onclick="openPopup('popupAgree')">μ½κ΄λ³΄κΈ°</span>
                </div>
                <summary>
                    κΈ°μλ μ λ³΄λ λ³Έ μ΄λ²€νΈ μΈμ<br/>μ΄λ ν μ©λλ‘λ μ¬μ©λμ§ μμ΅λλ€
                </summary>
            </div>
            <?php echo form_close(); ?>
        </section>

        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_2.jpg" alt="μμλ‘ κ°λ νΌλΆκ³Ό, μ΄μ  μ λ μκ°μ!" class="img"></div>
        <div class="img_box" style="margin-bottom:10px;"><img src="<?=$AD_DIR?>/images/du_3.jpg" alt="μμ μν" class="img"></div>
        
        <!-- <div class="img_box " style="margin-top:20px;"><img src="<?=$AD_DIR?>/images/du_4.jpg" alt="λμΌμλ μΈμ²΄ μνκ²°κ³Ό" class="img"></div> -->
        
        
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_5.jpg" alt="κ°ν λ°λΌμ¬ μ μλ λμΌμλ κΈ°μ μ νκ²©" class="img"></div>
        

        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_6.jpg" alt="λμΌμλ κ΅¬μ±" class="img"></div>
        <div class="gif01">
            <div class="img_box">
                <img src="<?=$AD_DIR?>/images/du_gif.gif" alt="λμΌμλ μ¬μ©μμμμ" class="img">
            </div>
            <!-- <div class="video_box">
                <video class="video" preload="metadata" draggable="true" controls muted playsinline autoplay loop poster="<?=$AD_DIR?>/images/thum_video02.jpg">
                    <source src="<?=$AD_DIR?>/video/video02.mp4" type="video/mp4">
                    λΈλΌμ°μ κ° λΉλμ€ νκ·Έλ₯Ό μ§μνμ§ μμ΅λλ€.
                </video>
            </div> -->
        </div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_7.jpg" alt="νλ‘νμλ vs λ­μλ¦¬" class="img"></div>
        
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_8.jpg" alt="λμΌμλ μ€μ μ¬μ©μ νκΈ°" class="img"></div>

        <!-- gif04 -->
        <!-- <div class="gif04">
            <div class="img_box"><img src="<?=$AD_DIR?>/images/du_13.gif" alt="λ·°ν°μ€ λΆν°μ λμΌμλ μκ° μμ" class="img"></div>
        </div> -->
        <!-- video gifνμΌ videoλ‘ κ΅μ²΄ -->
        <!-- <div class="gif04">
            <div class="video_box">
                <video class="video" preload="metadata" draggable="true" controls muted playsinline autoplay loop poster="<?=$AD_DIR?>/images/thum_video01.jpg">
                    <source src="<?=$AD_DIR?>/video/video01.mp4" type="video/mp4">
                    λΈλΌμ°μ κ° λΉλμ€ νκ·Έλ₯Ό μ§μνμ§ μμ΅λλ€.
                </video>
            </div>
        </div> -->
        
        
        
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_9.jpg" alt="λμΌμλ μμ λ΄μ­" class="img"></div>        
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_10.jpg" alt="λμΌμλ μμ λ΄μ­" class="img"></div>        
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_15.gif" alt="λμΌμλ μμ λ΄μ­" class="img"></div>        
        <div class="img_box"><img src="<?=$AD_DIR?>/images/du_16.jpg" alt="λμΌμλ μμ λ΄μ­" class="img"></div>        

        
        
        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/event_8.gif?u=<?php echo date('Ymd') ?>" alt="μ΄λ²€νΈ" class="img"></div> -->
        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/du_17_1.jpg" alt="λ νμ μ²­νν_1" class="img"></div> -->
        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/du_1_1.jpg" alt="μμλ‘ κ°λ νΌλΆκ³Ό, μ΄μ  μ λ μκ°μ!" class="img"></div> -->
        <section class="inDB">
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents_(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id_" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">     
            <input type="hidden" name="multi_code" id="multi_code_" value="<?php echo element('multi_code',$view);?>">
            <div class="inbox">
                <dl>
                    <dt>
                        <label for="mlh_name_" class="lab">μ΄ λ¦</label>
                    </dt>
                    <dd>
                        <input type="text" name="mlh_name" id="mlh_name_" class="inp inp_name input_" label="μ΄λ¦" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>">
                    </dd>
                    <dt>μ± λ³</dt>
                    <dd>
                        <input type="radio" value="1" name="mlh_gender" id="mlh_gender1_" class="input_ inp_radio" label="μ±λ³"  <?php echo set_checkbox('mlh_gender','1' ,true); ?>>
                        <label for="mlh_gender1_" class="lab_radio">μ¬μ±</label>
                        
                        <input type="radio" value="2" name="mlh_gender" id="mlh_gender2_" class="input_ inp_radio" label="μ±λ³" <?php echo set_checkbox('mlh_gender','2'); ?>>
                        <label for="mlh_gender2_" class="lab_radio">λ¨μ±</label>
                    </dd>
                </dl>
                <dl>
                    <dt>                    
                        <label for="mlh_mobileno_" class="lab">μ°λ½μ²</label>
                    </dt>
                    <dd>
                        <input type="text" name="mlh_mobileno" id="mlh_mobileno_" class="inp inp_tel input_" label="μ°λ½μ²"  value="<?php echo set_value('mlh_mobileno', element('mlh_mobileno', element('post', $view))); ?>">
                        
                    </dd>
                    <dt>                    
                        <span class="lab">μ  ν</span>
                    </dt>
                    <dd>
                        <div class="radio">
                            <input type="radio" value="2" name="mlh_goods_type" id="mlh_goods_type2_" class="input_ inp_radio" label="λ νμν" <?php echo set_checkbox('mlh_goods_type','2',true); ?> /><label for="mlh_goods_type2_" class="lab_radio">νλ‘</label>
                        </div>
                        <div class="radio">
                            <input type="radio" name="mlh_goods_type" id="mlh_goods_type1_" class="input_ inp_radio" label="λ νμν" value="1"  <?php echo set_checkbox('mlh_goods_type','1' ); ?> /><label for="mlh_goods_type1_" class="lab_radio">λ­μλ¦¬</label>
                        </div>
                    </dd>
                </dl>
                <dl class="nth3">
                    <dt><label for="mlh_age_" class="lab">λ μ΄</label></dt>
                    <dd class="sec1">
                        <input type="number" name="mlh_age" id="mlh_age_" class="inp inp_age input_" label="λμ΄" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>" placeholder="μ«μλ‘..."/>                        
                    </dd>
                    <dt class="sec2"><label for="mlh_text_" class="lab">μλ΄κ°λ₯μκ°</label></dt>
                    <dd>
                        <input type="text" name="mlh_text" id="mlh_text_" class="inp inp_txt input_" label="μλ΄κ°λ₯μκ°" value="<?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?>">
                    </dd>
                </dl>

                <p class="db-btn"><button class="btn_img"><img src="<?=$AD_DIR?>/images/db-btn.png" alt="" /></button></p>
                <div class="checkbox">
                    <input type="checkbox" name="agree" id="agree_" checked/><label for="agree_">κ°μΈμ λ³΄ μμ§ μ μ±μ λμν©λλ€</label> | <span  onclick="openPopup('popupAgree')">μ½κ΄λ³΄κΈ°</span>
                </div>
                <summary>
                    κΈ°μλ μ λ³΄λ λ³Έ μ΄λ²€νΈ μΈμ<br/>μ΄λ ν μ©λλ‘λ μ¬μ©λμ§ μμ΅λλ€
                </summary>
            </div>
            <?php echo form_close(); ?>
        </section>
        
        
        

        <!-- dbform end -->
        <!-- <div class="img_box"><img src="<?=$AD_DIR?>/images/du_15_1.png" alt="λ ννν" class="img"></div> -->

        <!-- νκΈ° λκΈ -->
        

        <!-- νκΈ° λκΈ end -->

        <div class="img_box" ><img src="<?=$AD_DIR?>/images/du_footer.jpg" alt="μλ΄" class="img"></div>
        <!-- dbform -->

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

        // fixed btn μ€ν¬λ‘€ μ λλ©μ΄μ
        var floatPosition = parseInt($(".js-fixed-btn").offset().top);

        $(window).scroll(function() {
            var scrollTop = $(window).scrollTop();
            var newPosition = scrollTop + floatPosition + "px";

            $(".js-fixed-btn").stop().animate({
                "top" : newPosition
            },{
                'duration' : 500,
                'easing' : 'easeOutCirc',
            });

        }).scroll();

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

        function submitContents_(f) {

            var flag=false;
            var href;

            <?php if(strtolower(element('multi_code',$view))==='CT'){ ?>
                ex2cts.push('track', 'consult');
            <?php } ?>   

            $('.input_').each(function(){
                if( ! jQuery.trim($(this).val()) ) {
                    alert(getPostWord($(this).attr('label'),'μ','λ₯Ό') + 'μλ ₯ν΄ μ£ΌμΈμ');
                    $(this).focus();
                    flag=false;
                    return false;
                } else flag=true;
            });

            if(!flag) return false;

            if($('input[id="agree_"]').is(":checked")){
                 $('.loading').show();
                href = cb_url + '/postact/media_multi_click/' + $('#post_id_').val() +'/' + $('#multi_code_').val() ;

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

        function cpaProc(mlh_id,post_md) {
            var href;

            // href = 'http://api.tenping.kr/Query?jid=<?php echo $jid?>&uid=<?php echo $uid?>&at=<?php echo $at?>&key='+post_md+mlh_id;
             
            href = cb_url + '/postact/adpot_query_curl/<?php echo $jid?>';

            $.ajax({
                async : false,
                url : href,
                data : {mlh_name : '<?php echo $this->session->flashdata('mlh_name') ?>',mlh_mobileno : '<?php echo $this->session->flashdata('mlh_mobileno') ?>', csrf_test_name : cb_csrf_hash},
                type : 'post',
                dataType : 'json',
                success : function(response) {
                    
                
                },
                error : function(response) {
                },
                complete : function (response) {
                    if (response.responseJSON.error) {
                    alert(response.responseJSON.Message);
                    return false;
                   } else if (response.responseJSON.success) {
                    $.ajax({
                         async : false,
                         url : cb_url + '/media_multiple/tpProc/' +mlh_id+'/'+response.responseJSON.ResultCode+'/'+response.responseJSON.Message,

                         type : 'get',
                         dataType : 'json',
                         success : function(data) {
                              
                         }
                     });
               
                    }
                   
                }

            });
        }

        <?php if($this->session->flashdata('mlh_id')){?>        
                $('.loading').hide();
                kakaoPixel('7431202530174679533').completeRegistration();
                <?php if(element('multi_code',$view) ==='adpot'){?>        
                cpaProc(<?php echo $this->session->flashdata('mlh_id') ?>,'<?php echo element('post_md',element('post', $view));?>');
                <?php } ?>
        <?php } ?>
    </script>
</body>
</html>
<?php if(element('multi_code',$view) ==='taboola_pc_RON2' || element('multi_code',$view) ==='taboola_mo_RON2'){?>
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
