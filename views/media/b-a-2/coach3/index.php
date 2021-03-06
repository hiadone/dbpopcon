<?php 

$this->managelayout->add_meta('<meta name="viewport" content="width=device-width, initial-scale=1.0">'); 

if(strtolower(element('multi_code',$view))==='c050' || strtolower(element('multi_code',$view))==='c050_m'){
$this->managelayout->add_meta('<meta name="google-site-verification" content="A65Rb9Z1ny6wgbId50GdA9JtHAX5-ZEqZS2FbRB_Myw" />');
}

$this->managelayout->add_css(base_url('assets/css/preloader.min.css')); 
$this->managelayout->add_css("https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500;700&display=swap"); 



    $ad_dir  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['adpot_key'])) $jid=$_GET['adpot_key'];
    $uid=0;
    if(!empty($_GET['uid'])) $uid=$_GET['uid'];
    $at=0;
    if(!empty($_GET['at'])) $at=$_GET['at'];

?>   

    <title>코치투자그룹</title>    
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        ul, ol, li, dt, dd {
            list-style: none;
        }

        body {
            font-family: 'Noto Sans KR','Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
            font-size: 100%;
            line-height: 1;
        }

        a {
            color: inherit;
            text-decoration: none;
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
            min-width: 360px;
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
            color: #f44264;
            font-weight: 500;
        }

        .txt_bold {
            font-weight: 500;
        }
        .fl_left {
            float: left;
        }
        .fl_right {
            float: right;
        }
        /* fixed_box */
        .fixed_box {
            position: absolute;
            top: 28%;
            right: 5%; 
            z-index: 100;
            max-width: 20%;
            min-width: 96px;
        }
        .fixed_box .img {
            width: 100%;
        }
        .fixed_box .btn_close {
            position: absolute;
            top: -12.5px;
            right: -12.5px;
            width: 25px;
            border-radius: 50%;
            box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.15);
            border: none;
        }
        /*  */
        .head {
            padding: 3% 6.25%;
            margin-bottom: 6.5%;
            background-color: #ebebeb;
            font-size: 28px;
            letter-spacing: -0.05em;
            word-spacing: -0.05em;
        }
        .head .title_emph {
            position: relative;
            color: #13136e;
            font-weight: bold;
            z-index: 10;
        }
        .head .title_emph:after {
            content: '';
            display: block;
            position: absolute;
            top: 55%;
            right: -3%;
            width: 104%;
            height: 0.6em;
            z-index: -1;
            background-color: rgba(205,205,227,0.7);
        }
        /* title_box */
        .title_box {
            padding: 0 6.25%;
            border-bottom: 1px solid #bcbcbc;
            margin-bottom: 1.25%;
        }
        .title_box .title_sub {
            font-size: 24px;
            color: #13136e;
        }
        .title_box .title01 {
            margin-bottom: 7.43%;
            font-size: 48px;
            font-weight: 500;
            line-height: 1.2;
            letter-spacing: -0.05em;
            word-spacing: -0.05em;
            word-break: keep-all;
        }
        .title_box .title01 .txt_bold {
            font-weight: bold;
        }
        .title_box .title_profile_box {
            margin-bottom: 2.145%;
        }
        .title_box .title_profile_img {
            display: inline-block;
            width: 52px;
            vertical-align: middle;
            font-size: 0;
            margin-right: 4px;
        }
        .title_box .title_profile_img .img {
            width: 100%;
            font-size: 10px;
        }
        .title_box .title_profile_info {
            display: inline-block;
            vertical-align: middle;
            word-spacing: -0.05em;
        }
        .title_box .title_profile_nick {
            font-size: 22px;
            font-weight: 500;
            color: #000;
        }
        .title_box .title_profile_date {
            margin-top: 6px;
            font-size: 22px;
            color: #8b8b8b;
        }
        .title_box .title_btn_container {
            margin-bottom: 2.145%;
        }
        .title_btn_container .icon {
            width: 100%;
            font-size: 10px;
        }
        .title_btn_container .title_btn_box01 .btn {
            display: inline-block;
            width: 45px;
            font-size: 0;
        }
        .title_btn_container .title_btn_box02 .btn {
            display: inline-block;
            width: 44px;
            font-size: 0;
        }
        /* article */
        .article {
            padding: 0 6.25%;
        }
        .article .article_txt_box {
            margin: 6.25% 0;
            font-size: 32px;
            line-height: 1.5;
            color: #393e38;
            letter-spacing: -0.06em;
            word-break: keep-all;
        }
        .article .txt_bold {
            color: #000;
        }
        .article .article_img_box {
            font-size: 0;
        }
        .article_img_box .img {
            font-size: 12px;
            width: 100%;
        }
        /*  */
        .txt_box01 {
            text-align: center;
            font-size: 32px;
            font-weight: 500;
            color: #020e2c;
            letter-spacing: -0.05em;
        }
        .txt_box01 a {
            display: inline-block;
            padding-bottom: 1%;
            border-bottom: 1px solid rgba(2,14,44,0.3);
        }

        /* form */
        .form_container {
            padding-bottom: 8%;
            margin-top: 4.5%;
            background-image: url(<?php echo $ad_dir ?>/images/db_bg.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center top;
        }
        .form_container .form_title_sub {
            width: 440px;
            margin: 0 auto 5.5%;
            font-size: 18px;
            line-height: 1.77;
            border-radius: 20px;
            color: #fff;
            background-color: rgba(199,210,237,0.2);
            text-align: center;
        }
        .form_container .inp_wrap {
            margin: 0 6.25%;
            padding: 6.2458% 0;
            text-align: center;
            border-radius: 20px;
            background-color: rgba(199,210,237,0.2);
        }
        .form_container .inp_box {
            margin-bottom: 1.4%;
        }

        .form_container .inp {
            height: 60px;
            width: 80%;
            padding: 0 2%;
            box-sizing: border-box;
            border: none;
            background-color: rgba(255,255,255,0.8);
            box-shadow: inset -5px -4px 7px rgba(7,16,61,0.47);
            font-size: 20px;
            font-family: 'Noto Sans KR','Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
        }
        .form_container .inp::placeholder {
            color: #020e2c;
        }
        .form_container .btn_box {
            margin-top: 7.1429%;
        }
        .form_container .btn_img {
            max-width: 80%;
            border-radius: 20px;
            box-shadow: 4px 7px 0 rgba(0,10,36,0.6);
        }
        .form_container .agree_container {
            margin-top: 3.429%;
        }
        .form_container .agree_box {
            margin-bottom: 2%;
        }
        .form_container .lab_agree {
            padding-top: 6px;
            padding-left: 26px;
            background-image: url(<?php echo $ad_dir ?>/images/icon_uncheck.png);
            background-position: left center;
            background-repeat: no-repeat;
            font-size: 16px;
            color: #fff;
        }
        .form_container .inp_agree:checked + .lab_agree {
            background-image: url(<?php echo $ad_dir ?>/images/icon_check.png);
        }
        .form_container .btn_agree_detail {
            margin-left: 5px;
            padding: 0 3px;
            border-radius: 0;
            background-color: #fddb64;
            border: none;
            font-size: 16px;
            line-height: 1.25;
        }
        /* comment */
        .content_container {
            margin-top: 2.5%;
            border-top: 1px solid #bcbcbc;
        }
        .content_container .content_head {
            padding: 2.5% 6.25%;
            border-bottom: 1px solid #bcbcbc;
        }
        .content_container .left_box01 {
            font-size: 28px;
            color: #2f2f2f;
            letter-spacing: -0.037em;
            white-space: nowrap;
        }
        .content_container .left_box01 span {
            display: inline-block;
            margin-right: 5%;
        }
        .content_container .right_box01 {
            font-size: 20px;
            color: #7c7c7c;
        }
        .content_container .co_icon01 {
            height: 0.9643em;
            vertical-align: bottom;
        }
        .content_container .co_icon02 {
            height: 0.9em;
            vertical-align: bottom;
        }
        .content_container .left_box02 {
            font-size: 20px;
        }
        .content_container .left_box02 .txt_link {
            margin-right: 8px;
            color: #7c7c7c;
        }
        .content_container .left_box02 .txt_active {
            color: #384a78;
        }
        .content_container .right_box02 {
            font-size: 20px;
            color: #7c7c7c;
        }
        .content_container .toggle_switch {
            vertical-align: top;
            position: relative;
            display: inline-block;
            width: 40px;
            height: 20px;
            border-radius: 20px;
            background-color: #d3d3d3;
            cursor: pointer;
            transition: background-color .2s;
        }
        .content_container .toggle_switch:after {
            content: '';
            position: absolute;
            top: 3px;
            left: 3px;
            width: 14px;
            height: 14px;
            border-radius: 16px;
            background-color: #fff;
            transition: left .2s;
        }
        .content_container .toggle_switch.active {
            background-color: #4CAF50;
        }
        .content_container .toggle_switch.active:after {
            left: 23px;
        }
        .comment_list {
            margin: 0 6.25% 5%;
        }
        .comment_list .comment_box {
            padding: 4.286% 0;
            border-bottom: 1px solid #bcbcbc;
        }
        .comment_list .comment_box:last-child {
            border-bottom: none;
        }
        .comment_box .comment_head {
            margin-bottom: 8px;
            font-size: 24px;
        }
        .comment_box .comment_profile {
            vertical-align: middle;
        }
        .comment_box .comment_nick {
            vertical-align: middle;
            color: #2f2f2f;
        }
        .comment_box .comment_best {
            height: 0.7917em;
            vertical-align: middle;
        }
        .comment_box .comment_body {
            font-size: 22px;
            line-height: 1.5;
            letter-spacing: -0.037em;
            color: #393e38;
        }
        .comment_box .comment_foot {
            margin-top: 2.8572%;
        }
        .comment_box .comment_date {
            margin-top: 1.4286%;
            font-size: 20px;
            color: #7c7c7c;
        }
        .comment_box .comment_btn_box {
            font-size: 20px;
        }
        .comment_box .comment_btn {
            display: inline-block;
            width: 3.5em;
            background-color: #fff;
            border: 1px solid #bcbcbc;
            line-height: 1.55;
            text-align: center;
        }
        .comment_box .comment_btn .icon {
            height: 1.15em;
            vertical-align: middle;
        }
        .comment_box .comment_btn .comment_btn_num01 {
            vertical-align: middle;
            color: #f44264;
        }
        .comment_box .comment_btn .comment_btn_num02 {
            vertical-align: middle;
            color: #7c7c7c;
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
        .popup_container {
            display: none;
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
        .popup_container .popup_body {
            overflow-y: auto;
            padding: 5%;
            height: calc(100% - 50px);
            box-sizing: border-box;
            font-size: 13px;
            line-height: 1.4;
        }
        .popup_container .popup_text_box {
            line-height: 1.35;
            margin: 10px 0;
        }
        .popup_container .popup_text_box h2 {
            font-size: 16px;
        }
        .popup_container .popup_text_box p {
            font-size: 14px;
        }
        .popup_container .popup_btn_box {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        .popup_container .btn_close {
            display: block;
            width: 100%;
            height: 50px;
            border: none;
            background-color: #e4bb6f;
            color: #141414;
            font-size: 16px;
        }
        /*  */
        .popup_sms {
            display: none;
            color: #333;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
            background: #fff;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            max-width: 700px;
            width: 80%;
        }
        .popup_sms .sms_content {
            padding: 30px 15px;
        }
        .popup_sms .sms_title {
            text-align: center;
            font-size: 15px;
            margin-bottom: 10px;
            font-weight: normal;
        }
        .popup_sms .inp_sms {
            float: left;
            width: 70%;
            height: 30px;
            padding: 5px;
            box-sizing: border-box;
            border: 0 none;
            background: #eee;
            color: #333;
        }
        .popup_sms .btn_sms {
            float: right;
            width: 30%;
            border: 0 none;
            background: #2b3d6e;
            color: #eee;
            height: 30px;
            font-weight: bold;
            cursor: pointer;
        }
        /* 680 - */
        @media screen and (max-width: 680px) {
            .txt_box01 {
                font-size: 24px;
            }
        }
        /* 600 - */
        @media screen and (max-width: 600px) {
            .head {
                font-size: 16px;
            }
            /* title_box */
            .title_box .title_sub {
                font-size: 16px;
            }
            .title_box .title01 {
                font-size: 24px;
            }
            .title_box .title_profile_box {
                margin-bottom: 4%;
            }
            .title_box .title_profile_img {
                width: 36px;
            }
            .title_box .title_profile_nick {
                font-size: 14px;
            }
            .title_box .title_profile_date {
                margin-top: 4px;
                font-size: 14px;
                color: #8b8b8b;
            }
            .title_box .title_btn_container {
                margin-bottom: 4%;
            }
            .title_btn_container .title_btn_box01 .btn,
            .title_btn_container .title_btn_box02 .btn {
                width: 28px;
            }
            
            /* article */
            .article .article_txt_box {
                font-size: 18px;
            }
            /*  */
            .txt_box01 {
                font-size: 16px;
            }
            /* form */
            .form_container .form_title_sub {
                width: 310px;
                font-size: 13px;
            }
            .form_container .inp_wrap {
                border-radius: 10px;
            }
            .form_container .inp {
                height: 36px;
                box-shadow: inset -3px -2px 4px rgba(7,16,61,0.47);
                font-size: 16px;
            }
            .form_container .agree_container {
                margin-top: 3.429%;
            }
            .form_container .btn_img {
                border-radius: 3.5vw;
                box-shadow: 3px 4px 0 rgba(0,10,36,0.6);
            }
            .form_container .lab_agree {
                padding-top: 4px;
                padding-left: 20px;
                background-size: auto 20px;
                font-size: 14px;
            }
            .form_container .btn_agree_detail {
                margin-left: 4px;
                padding: 0 3px;
                font-size: 14px;
            }
            /* comment */
            .content_container .left_box01 {
                font-size: 18px;
            }
            .content_container .right_box01 {
                font-size: 16px;
            }
            .content_container .left_box02 {
                font-size: 16px;
            }
            .content_container .right_box02 {
                font-size: 16px;
            }
            .content_container .left_box02 .txt_link {
                margin-right: 6px
            }
            .comment_box .comment_head {
                margin-bottom: 6px;
                font-size: 18px;
            }
            .comment_box .comment_profile {
                width: 36px;
            }
            .comment_box .comment_body {
                font-size: 16px;
            }
            .comment_box .comment_date {
                font-size: 14px;
            }
            .comment_box .comment_btn_box {
                font-size: 14px;
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
     <?php if(strtolower(element('multi_code',$view))==='c010' || strtolower(element('multi_code',$view))==='c010_m'){ ?>
        <script src="//tenping.kr/scripts/cpa/tenping.cpa.V2_Domain.min.js"></script>
        <?php if($this->session->flashdata('mlh_id')){ ?>
        
        <script>
            TenpingScript.SendConversion( '<?php echo $this->session->flashdata('mlh_mobileno') ?>' );
        </script>
 
        <?php } else{ ?>

        <?php } ?>
    <?php } ?>      
    
    <?php if(strtolower(element('multi_code',$view))==='c02050'){ ?>
        <!-- Facebook Pixel Code -->
        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '820940595387658');
          fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
          src="https://www.facebook.com/tr?id=820940595387658&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->

        <?php if($this->session->flashdata('mlh_id')){ ?>
 
        <?php } else{ ?>

        <?php } ?>
    <?php } ?>   
    
     <?php if(strtolower(element('multi_code',$view))==='c030' || strtolower(element('multi_code',$view))==='c030_2'){ ?>

        
          <script type='text/javascript'>
              !function (w,d,s,u,t,ss,fs) {
                  if(w.ex2cts)return;t=w.ex2cts={};if(!window.t) window.t = t;
                  t.push = function() {t.callFunc?t.callFunc.apply(t,arguments) : t.cmd.push(arguments);};
                  t.cmd=[];ss = document.createElement(s);ss.async=!0;ss.src=u;
                  fs=d.getElementsByTagName(s)[0];fs.parentNode.insertBefore(ss,fs);
              }(window,document,'script','//st2.exelbid.com/js/cts.js');
              ex2cts.push('init', '5f180165f1c49af5648b4567');
          </script>


            <?php if($this->session->flashdata('mlh_id')){ ?>

                ex2cts.push('track', 'success');
            <?php } ?>
        </script>        
    <?php } ?>

    <?php if(strtolower(element('multi_code',$view))==='c040'){ ?>

        <script async src ="//cdnet.nasmob.com/adpacker/js/ap_pv_v2.0.js"></script>
        <?php if($this->session->flashdata('mlh_id')){ ?>
            <script>ADPACKER.SCRIPT.setConv();</script>
        <?php } ?>
    <?php } ?>   
    
    <?php if(strtolower(element('multi_code',$view))==='c050' || strtolower(element('multi_code',$view))==='c050_m'){ ?>

        <!-- Global site tag (gtag.js) - Google Ads: 613453579 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-613453579"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'AW-613453579');
        </script>

        
        <?php if($this->session->flashdata('mlh_id')){ ?>

            <!-- Event snippet for 상담신청_기사형 conversion page -->
            <script>
              gtag('event', 'conversion', {'send_to': 'AW-613453579/TuA8CKjootkBEIuewqQC'});
            </script>
        <?php } else{ ?>
            <!-- Event snippet for 상담신청_기사형 conversion page
            In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
            <script>
            function gtag_report_conversion(url) {
              var callback = function () {
                if (typeof(url) != 'undefined') {
                  window.location = url;
                }
              };
              gtag('event', 'conversion', {
                  'send_to': 'AW-613453579/TuA8CKjootkBEIuewqQC',
                  'event_callback': callback
              });
              return false;
            }
            </script>
        <?php } ?>

    <?php } ?>


    <?php if(strtolower(element('multi_code',$view))==='c060'){ ?>

        <!-- Taboola Pixel Code -->
        <script type='text/javascript'>
          window._tfa = window._tfa || [];
          window._tfa.push({notify: 'event', name: 'page_view', id: 1324976});
          !function (t, f, a, x) {
                 if (!document.getElementById(x)) {
                    t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);
                 }
          }(document.createElement('script'),
          document.getElementsByTagName('script')[0],
          '//cdn.taboola.com/libtrc/unip/1324976/tfa.js',
          'tb_tfa_script');
        </script>
        <noscript>
          <img src='https://trc.taboola.com/1324976/log/3/unip?en=page_view'
              width='0' height='0' style='display:none'/>
        </noscript>
        <!-- End of Taboola Pixel Code -->


        
        <?php if($this->session->flashdata('mlh_id')){ ?>

            <!-- Taboola Pixel Code -->
            <script>
                _tfa.push({notify: 'event', name: 'lead', id: 1324976});
            </script>
            <noscript>
                <img src='https://trc.taboola.com/1324976/log/3/unip?en=lead'
                    width='0' height='0' style='display:none'/>
            </noscript>
            <!-- End of Taboola Pixel Code -->

       
        <?php } ?>

    <?php } ?>

    <?php if(strtolower(element('multi_code',$view))==='c070'){ ?>

       
        <script src="https://www.leadtracker.live/static/js/fixel.js"></script>
        

    <?php } ?>
<body>
    <div class="wrap">
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <!-- fixed img -->
        <div class="fixed_box js-fixed-btn">
            <a href="#formContainer">
                <img src="<?php echo $ad_dir ?>/images/fixed_img.jpg" alt="인공지능 알파 내일 10배오를 급등주는? 확인하기" class="img">
            </a>
            <button class="btn_img btn_close" type="button" onclick="closeGoFormBtn();">
                <img src="<?php echo $ad_dir ?>/images/btn_fixed_close.png" class="img" alt="닫기">
            </button>
        </div>
        <!-- fixed img end -->
        <div class="head">
            주식토론 인기글 추천주 뉴스/시황 <span class="title_emph">수익인증</span>
        </div>
        <div class="title_box">
            <div class="title_sub">수익인증></div>
            <div class="title01">
                [사진 有] <span class="txt_bold">퇴직금 몰빵해서 13억.. 
                    미친척하고 하라는 대로 따라서 투자했습니다</span>
            </div>
            <div class="title_profile_box">
                <div class="title_profile_img"><img src="<?php echo $ad_dir ?>/images/title_profile.png" alt="프로필사진" class="img"></div>
                <div class="title_profile_info">
                    <div class="title_profile_nick">내좌석은돈방석</div>
                    <div class="title_profile_date">2020.08.27 15:33 조회 3.1만</div>
                </div>
            </div>
            <div class="title_btn_container clearfix">
                <div class="title_btn_box01 fl_left">
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/sns_01.png" alt="페이스북" class="icon"></a>
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/sns_02.png" alt="트위터" class="icon"></a>
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/sns_03.png" alt="카카오스토리" class="icon"></a>
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/sns_04.png" alt="블로그" class="icon"></a>
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/sns_05.png" alt="밴드" class="icon"></a>
                </div>
                <div class="title_btn_box02 fl_right">
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/title_btn_01.png" alt="확대" class="icon"></a>
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/title_btn_02.png" alt="축소" class="icon"></a>
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/title_btn_03.png" alt="url" class="icon"></a>
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/title_btn_04.png" alt="프린터" class="icon"></a>
                    <a href="#formContainer" class="btn"><img src="<?php echo $ad_dir ?>/images/title_btn_05.png" alt="목록" class="icon"></a>
                </div>
            </div>
        </div>
        <div class="article">
            <div class="article_txt_box">
                <p>안녕하세요.</p>
                <p>좋은 정보 있어 글 올립니다.</p>
            </div>
            <div class="article_txt_box">
                <p>조만간 급등할 종목 소개해드립니다.</p>
                <span class="txt_bold"><a href="#formContainer"> &gt;&gt; 수직 상승 예정 종목명 즉시 확인</a></span>
            </div>
            <div class="article_txt_box">
                <p>정보 원하시는 분은 링크 클릭해주시고요,</p>
                <p>오늘은 재테크 수익 노하우 요청 문의가 많아서..공유드리려고 합니다.</p>
            </div>
            <div class="article_txt_box">
                <p>
                    저랑 친한 분들은 아시겠지만, 퇴직금을 미친 척 전부 투자해서..
                </p>
                <p>
                    네.. 제목 그대로 13억 벌었습니다.
                </p>
            </div>
            <div class="article_txt_box">

                <p>
                    그래서 다들 저를 투자 전문가로 오해하시는데..
                </p>
                <p>
                    일단 인증샷 먼저 올리고 갈게요
                </p>
            </div>
            <!-- 이미지 교체 예정 -->
            <div class="article_img_box">
                <img src="<?php echo $ad_dir ?>/images/img_01.png" alt="돈다발" class="img">
            </div>
            <!-- 이미지 교체 예정 -->
            <div class="article_txt_box">
                <p>
                    저에게도 이런 기적이 오다니 너무 감격스럽습니다.
                </p>
            </div>
            <div class="article_txt_box">
                <p>
                    저는 여행 업종에서 일하던 평범한 회사원이었습니다.
                </p>
                <p>
                    최근 코로나 이슈로 회사가 심하게 어려워지면서
                </p>
                <p>
                    희망퇴직 압박에 못 이겨 퇴사해버렸죠..
                </p>
            </div>
            <div class="article_txt_box">
                <p>
                    이대로는 안되겠다 싶어 덜컥 주식에 퇴직금 몰빵했습니다.
                </p>
                <p>
                    처음 성적은 괜찮았는데 정보력이 부족하다 보니
                </p>
                <p>
                    점점 손절하는 종목이 많아졌네요.
                </p>
            </div>
            <div class="article_txt_box">
                <p>
                    그러다 <span class="txt_emph">VVIP 분석 자료를 무료 배포</span>하는 <span class="txt_bold">코*투자그룹</span> 광고를 보게 되었습니다.
                </p>
            </div>
            <div class="article_txt_box">    
                <p>
                    광고성 글 같았지만 저한테는 정말 필요했던 정보라 신청했어요.
                </p>
                <p>
                    문자 받고 매수하면 되니 정말 쉽더군요.
                </p>
            </div>
            <div class="article_txt_box">
                <p>
                    덕분에 저는 퇴직금 3천만 원으로 13억까지 모았습니다.
                </p>
                <p>
                    정말 무서울 정도로 불어나더군요.. 최근 수익 올려봅니다
                </p>
            </div>
            <!-- 사진그대로 -->
            <div class="article_img_box">
                <img src="<?php echo $ad_dir ?>/images/img_02.jpg" alt="수익인증 캡처" class="img">
            </div>
            <!-- 사진그대로 -->
            <div class="article_txt_box">
                <p>
                    이제 혼자 하는 주식 시대는 끝났습니다.
                </p>
                <p>
                    개미들에게 제일 부족한 게 정보력인데 인공지능으로
                </p>
                <p>
                    매수, 매도 타이밍 자동 분석해주니까 손실 우려가 훨씬 적은 거죠.
                </p>
            </div>
            <div class="article_txt_box">
                <p>
                    인공지능 뿐만 아니라 제도권 출신 전문가가 밀착 관리해줘서 믿을만합니다.
                </p>
                <p>
                    최근 누적수익률 656% 달성되었다고 하네요.
                </p>
            </div>
            <div class="article_txt_box">
                <p>
                    제가 가끔 올리는 주식 정보도 받아서 올리는 거예요.
                </p>
                <p>
                    일부러 섞어 올리기는 했는데 저 덕분에 익절하신 회원님들 많은 거 압니다.ㅎㅎ
                </p>
            </div>
            <div class="article_txt_box">
                <p>
                    정말 한치 앞 사람 일은 모르는 것 같아요. 
                </p>
                <p>
                    불과 얼마 전까지만 해도 살얼음 판을 걷는 느낌이었는데 이제야 좀 발 뻗고 편히 잡니다..ㅠ
                </p>
            </div>
            <!-- 이미지 그대로 -->
            <div class="article_img_box">
                <img src="<?php echo $ad_dir ?>/images/img_03.jpg" alt="수익인증 캡처" class="img">
            </div>
            <!-- 이미지 그대로 -->
            <div class="article_txt_box">
                <p>
                    오늘 자 수익도 올려봅니다.
                </p>
            </div>
            <div class="article_txt_box">
                <p>
                    지극히 평범한 제가 13억을 손에 쥐었듯이
                </p>
                <p>
                    흔히 말하는 '대박'이라는거,, 멀리 있지 않더군요.
                </p>
            </div>
            <div class="article_txt_box">
                <p>
                    우선 문자부터 받아보세요.
                </p>
                <p>
                    <span class="txt_emph">3일간 추천해준 종목 8~90%이상</span> 오르는 걸 보니 투자를 안할 수가 없겠더라요! 
                </p>
                <p>
                    하단에 신청 배너 올립니다.
                </p>
            </div>
        </div>
        <div class="txt_box01"><a href="#formContainer">▼ 1년안에 1억 모으기 무료체험 신청하기(선착순) ▼</a></div>
        <!-- db form -->
        <div class="form_container" id="formContainer">
            <div class="img_box"><img src="<?php echo $ad_dir ?>/images/db_title.png" alt="1억수익 가능한 급등주 체험단 모집" class="img"></div>
            <div class="form_title_sub">
                ※본 서비스는 코치투자그룹에서 무료로 제공됩니다※
            </div>
            <?php 
            // $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">     
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
            <!-- <input type="hidden" name="mlh_mobileno" value="" id="mlh_mobileno">       -->
            <input type="hidden" name="mlh_age" value="0" id="mlh_age">      
            <input type="hidden" name="cfc_num_" value="0" id="cfc_num_">      
                <div class="inp_wrap">
                    <div class="inp_box">
                        <input type="text" name="mlh_name" id="mlh_name" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>" class="inp input" placeholder="이름을 입력하세요" label="이름">
                    </div>
                    <div class="inp_box">
                        <input type="tel" name="mlh_mobileno" id="mlh_mobileno" class="inp input" placeholder="전화번호를 입력하세요" label="전화번호" value="<?php echo set_value('mlh_mobileno', element('mlh_mobileno', element('post', $view))); ?>">
                    </div>
                    <div class="btn_box">
                        <button type="button" class="btn_img" onclick='submitContents(this)'><img src="<?php echo $ad_dir ?>/images/btn_form.png" alt="3일간 VVIP 종목추천 무료받기" class="img"></button>
                    </div>

                    <div class="agree_container">
                        <div class="agree_box">
                            <input type="checkbox" name="agree01" id="agree01" class="inp_agree blind" checked>
                            <label for="agree01" class="lab_agree">개인정보 수집동의 및 이용동의 </label>
                            <button type="button" class="btn_agree_detail" onclick="openPopup('popupAgreement')">자세히보기</button>
                        </div>
                        <div class="agree_box">
                            <input type="checkbox" name="agree02" id="agree02" class="inp_agree blind" checked>
                            <label for="agree02" class="lab_agree">마케팅 정보 수신동의 </label>
                        </div>
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div>
        <!-- db form end -->

        <!-- 댓글 -->
        <div class="content_container">
            <div class="content_head clearfix">
                <div class="fl_left left_box01">
                    <span>
                        <img src="<?php echo $ad_dir ?>/images/icon_01.png" alt="" class="co_icon01">
                        댓글 68
                    </span>
                    <span>
                        <img src="<?php echo $ad_dir ?>/images/icon_02.png" alt="" class="co_icon01">
                        좋아요 1,025
                    </span>
                </div>
                <div class="fl_right right_box01">
                    <a href="#formContainer">
                        <img src="<?php echo $ad_dir ?>/images/icon_03.png" alt="" class="co_icon02">
                        공유 | 신고
                    </a>
                </div>
            </div>
            <div class="content_head clearfix">
                <div class="fl_left left_box02">
                    <a href="#formContainer" class="txt_link txt_active">댓글 등록순</a>
                    <a href="#formContainer" class="txt_link ">최신순</a>
                </div>
                <div class="fl_right right_box02">
                    댓글알림
                    <div class="toggle_switch js-toggle-switch"></div>
                </div>
            </div>
            <div class="comment_list">
                <!-- 01 -->
                <div class="comment_box">
                    <div class="comment_head">
                        <img src="<?php echo $ad_dir ?>/images/comment_profile_01.png" alt="프로필사진" class="comment_profile">
                        <span class="comment_nick">지은아빠부자되자</span>
                        <img src="<?php echo $ad_dir ?>/images/icon_best.png" alt="best" class="comment_best">
                    </div>
                    <div class="comment_body">
                        <p>
                            저도 코치 하고 있었습니다. 벌써 수익 20퍼센트에 30프로 매도랑..
                        </p>
                        <p>
                            혼자하는 주식이 아니라 전문가와 함께하니 확실히 다르네요. 든든합니다
                        </p>
                        <p>
                            덕분에 오늘도 이렇게 벌어가네요. 실현손익 보는 재미에 포옥 빠졌네요!
                        </p>
                        <p>
                            요거 때문에 회사를 취미로 다닙니다 ㅋㅋㅋㅋ
                        </p>
                    </div>
                    <div class="comment_foot clearfix">
                        <div class="comment_date fl_left">
                            2020년 8월 28일 16:08
                        </div>
                        <div class="comment_btn_box fl_right">
                            <a href="#formContainer" class="comment_btn">
                                <img src="<?php echo $ad_dir ?>/images/icon_good.png" alt="추천" class="icon">
                                <span class="comment_btn_num01">202</span>
                            </a>
                            <a href="#formContainer" class="comment_btn">
                                <img src="<?php echo $ad_dir ?>/images/icon_bad.png" alt="반대" class="icon">
                                <span class="comment_btn_num02">3</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- 02 -->
                <div class="comment_box">
                    <div class="comment_head">
                        <img src="<?php echo $ad_dir ?>/images/comment_profile_02.png" alt="프로필사진" class="comment_profile">
                        <span class="comment_nick">잼난인생</span>
                        <img src="<?php echo $ad_dir ?>/images/icon_best.png" alt="best" class="comment_best">
                    </div>
                    <div class="comment_body">
                        <p>
                            요즘 주식장이 개판이라 쭉 하한가 보다가 덕분에 오랜만에 상한가 하나 봤네요. 
                        </p>
                        <p>
                            원금 손실이 심각해서 복구하려면 좀 걸리겠지만 좋습니다
                        </p>
                    </div>
                    <div class="comment_foot clearfix">
                        <div class="comment_date fl_left">2020년 8월 28일 16:37</div>
                        <div class="comment_btn_box fl_right">
                            <a href="#formContainer" class="comment_btn">
                                <img src="<?php echo $ad_dir ?>/images/icon_good.png" alt="추천" class="icon">
                                <span class="comment_btn_num01">153</span>
                            </a>
                            <a href="#formContainer" class="comment_btn">
                                <img src="<?php echo $ad_dir ?>/images/icon_bad.png" alt="반대" class="icon">
                                <span class="comment_btn_num02">7</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- 03 -->
                <div class="comment_box">
                    <div class="comment_head">
                        <img src="<?php echo $ad_dir ?>/images/comment_profile_03.png" alt="프로필사진" class="comment_profile">
                        <span class="comment_nick">익절가즈아</span>
                        <img src="<?php echo $ad_dir ?>/images/icon_best.png" alt="best" class="comment_best">
                    </div>
                    <div class="comment_body">
                        <p>
                            돈방석님 믿고 신청했어요. 덕분에 이번 달 200만원 더 벌게 생겼습니다.
                        </p>
                        <p>
                            너무 감사해요. 앞으로 잘 따라가겠습니다. 크던 작던간에 무조건 수익은 나네요.
                        </p>
                        <p>
                            처음 며칠은 조금 올라서 기대 안했는데 지금은 아주 쏠쏠합니다. 
                        </p>
                    </div>
                    <div class="comment_foot clearfix">
                        <div class="comment_date fl_left">2020년 8월 28일 20:41</div>
                        <div class="comment_btn_box fl_right">
                            <a href="#formContainer" class="comment_btn">
                                <img src="<?php echo $ad_dir ?>/images/icon_good.png" alt="추천" class="icon">
                                <span class="comment_btn_num01">132</span>
                            </a>
                            <a href="#formContainer" class="comment_btn">
                                <img src="<?php echo $ad_dir ?>/images/icon_bad.png" alt="반대" class="icon">
                                <span class="comment_btn_num02">3</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- 04 -->
                <div class="comment_box">
                    <div class="comment_head">
                        <img src="<?php echo $ad_dir ?>/images/comment_profile_04.png" alt="프로필사진" class="comment_profile">
                        <span class="comment_nick">강남건물주</span>
                        <img src="<?php echo $ad_dir ?>/images/icon_best.png" alt="best" class="comment_best">
                    </div>
                    <div class="comment_body">
                        <p>
                            요새 코로나 때문에 뭐 무서워서.. 중국도 그렇고 미국도 그렇고
                        </p>
                        <p>
                            투자할만한 곳이 없었는데 이렇게 투자하면 좋은 곳들 위주로 추천해주니 좋네요.
                        </p>
                        <p>
                            개미들이 제일 부족한 게 정보인데 분석, 매도 매수 시기까지 알려주니 좋았어요!
                        </p>
                    </div>
                    <div class="comment_foot clearfix">
                        <div class="comment_date fl_left">2020년 8월 29일 11:15</div>
                        <div class="comment_btn_box fl_right">
                            <a href="#formContainer" class="comment_btn">
                                <img src="<?php echo $ad_dir ?>/images/icon_good.png" alt="추천" class="icon">
                                <span class="comment_btn_num01">102</span>
                            </a>
                            <a href="#formContainer" class="comment_btn">
                                <img src="<?php echo $ad_dir ?>/images/icon_bad.png" alt="반대" class="icon">
                                <span class="comment_btn_num02">7</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 댓글 end -->

        
        <div class="popup_wrap" id="popupWrap">
            <!-- sms -->
            <div class="popup_sms" id="popupSMS">
                <div class="sms_content">
                    <div class="sms_title">
                        <b>문자(SMS)</b>로 발송된 인증번호를 입력하세요.
                    </div>
                    <div class="sms_box clearfix">
                        <input type="number" name="cfc_num" id="cfc_num" placeholder="인증번호" class="inp_sms">
                        <button type="button" onclick="smsmap()" class="btn_sms">확인</button>
                    </div>
                </div>
            </div>
            <!-- 개인정보 취급방침 -->
            <div class="popup_container" id="popupAgreement">
                <div class="popup_body">
                    <div class="popup_text_container">
                        <div class="popup_text_box">
                            <h2>[개인정보취급방침] </h2>
                        </div>
                        <div class="popup_text_box">
                            <p>㈜위시드인베스트먼트('http://news-topic.kr/'이하 '뉴스토픽')은(는) 개인정보보호법에 따라 이용자의 개인정보 보호 및 권익을 보호하고 개인정보와 관련한 이용자의 고충을 원활하게 처리할 수 있도록 다음과 같은 처리방침을 두고 있습니다.</p>
                        </div>
                        <div class="popup_text_box">
                            <p>㈜위시드인베스트먼트('뉴스토픽') 은(는) 개인정보처리방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것입니다.</p>
                        </div>
                        <div class="popup_text_box">
                            <p>○ 본 방침은부터 2020년 1월 1일부터 시행됩니다.</p>
                        </div>
                        <div class="popup_text_box">
                            <p>1. 개인정보의 처리 목적 ㈜위시드인베스트먼트('http://news-topic.kr//'이하 '뉴스토픽')은(는) 개인정보를 다음의 목적을 위해 처리합니다. 처리한 개인정보는 다음의 목적이외의 용도로는 사용되지 않으며 이용 목적이 변경될 시에는 사전동의를 구할 예정입니다.</p>
                        </div>
                        <div class="popup_text_box">
                            <p>가. 마케팅 및 광고에의 활용</p>
                        </div>
                        <div class="popup_text_box">
                            <p>이벤트 및 광고성 정보 제공 및 참여기회 제공 등을 목적으로 개인정보를 처리합니다.</p>
                        </div>
                        <div class="popup_text_box">
                            <p>2. 개인정보 파일 현황</p>
                            <p>1. 개인정보 파일명 : 고객 참여현황 정보</p>
                            <p>- 개인정보 항목 : 휴대전화번호, 이름, 접속 로그, 쿠키, 접속 IP 정보</p>
                            <p>- 수집방법 : 홈페이지, 서면양식, 제휴사로부터 제공 받음, 생성정보 수집 툴을 통한 수집</p>
                            <p>- 보유기간 : 3년</p>
                            <p>- 관련법령 : 신용정보의 수집/처리 및 이용 등에 관한 기록 : 3년</p>
                        </div>
                        <div class="popup_text_box">
                            <p>3. 개인정보의 처리 및 보유 기간</p>
                            <p>① ㈜위시드인베스트먼트('뉴스토픽')은(는) 법령에 따른 개인정보 보유•이용기간 또는 정보주체로부터 개인정보를 수집시에 동의 받은 개인정보 보유,이용기간 내에서 개인정보를 처리,보유합니다.</p>
                            <p>② 각각의 개인정보 처리 및 보유 기간은 다음과 같습니다.</p>
                        </div>
                        <div class="popup_text_box">
                            <p>1. 마케팅 및 광고에의 활용</p>
                            <p>마케팅 및 광고에의 활용와 관련한 개인정보는 수집.이용에 관한 동의일로부터까지 위 이용목적을 위하여 보유.이용됩니다.</p>
                            <p>-관련법령 : 신용정보의 수집/처리 및 이용 등에 관한 기록 : 3년</p>
                        </div>
                        <div class="popup_text_box">
                            <p>4. 개인정보의 제3자 제공에 관한 사항</p>
                            <p>① ㈜위시드인베스트먼트('http://news-topic.kr//'이하 '뉴스토픽') 은(는) 정보주체의 동의, 법률의 특별한 규정 등 개인정보 보호법 제17조 및 제18조에 해당하는 경우에만 개인정보를 제3자에게 제공합니다.</p>
                            <p>② ㈜위시드인베스트먼트('http://news-topic.kr//'이하 '뉴스토픽')은(는) 다음과 같이 개인정보를 제3자에게 제공하고 있습니다.</p>
                            <p>1. ㈜위시드인베스트먼트</p>
                            <p>- 개인정보를 제공받는 자 : 주식회사 코치투자그룹</p>
                            <p>- 공유하는 항목 : 휴대전화번호, 성별, 이름</p>
                            <p>- 제공받는 자의 이용목적 : 마케팅 정보활용을 통한 상품 및 이벤트 안내</p>
                            <p>- 제공받는 자의 보유.이용기간: 3년</p>
                        </div>
                        <div class="popup_text_box">
                            <p>
                                5. 정보주체와 법정대리인의 권리•의무 및 그 행사방법 이용자는 개인정보주체로써 다음과 같은 권리를 행사할 수 있습니다.
                            </p>
                            <p>
                                ① 정보주체는 ㈜위시드인베스트먼트에 대해 언제든지 개인정보 열람,정정,삭제,처리정지 요구 등의 권리를 행사할 수 있습니다.
                            </p>
                            <p>
                                ② 제1항에 따른 권리 행사는㈜위시드인베스트먼트에 대해 개인정보 보호법 시행령 제41조제1항에 따라 서면, 전자우편, 모사전송(FAX) 등을 통하여 하실 수 있으며 ㈜위시드인베스트먼트은(는) 이에 대해 지체 없이 조치하겠습니다.
                            </p>
                            <p>
                                ③ 제1항에 따른 권리 행사는 정보주체의 법정대리인이나 위임을 받은 자 등 대리인을 통하여 하실 수 있습니다. 이 경우 개인정보 보호법 시행규칙 별지 제11호 서식에 따른 위임장을 제출하셔야 합니다.
                            </p>
                            <p>
                                ④ 개인정보 열람 및 처리정지 요구는 개인정보보호법 제35조 제5항, 제37조 제2항에 의하여 정보주체의 권리가 제한 될 수 있습니다.
                            </p>
                            <p>
                                ⑤ 개인정보의 정정 및 삭제 요구는 다른 법령에서 그 개인정보가 수집 대상으로 명시되어 있는 경우에는 그 삭제를 요구할 수 없습니다.
                            </p>
                            <p>
                                ⑥ ㈜위시드인베스트먼트은(는) 정보주체 권리에 따른 열람의 요구, 정정•삭제의 요구, 처리정지의 요구 시 열람 등 요구를 한 자가 본인이거나 정당한 대리인인지를 확인합니다.
                            </p>
    
                        </div>
                        <div class="popup_text_box">
                            <p>
                                6. 처리하는 개인정보의 항목 작성 
                            </p>
                            <p>
                                ① ㈜위시드인베스트먼트('http://news-topic.kr//'이하 '뉴스토픽')은(는) 다음의 개인정보 항목을 처리하고 있습니다.
                            </p>
                            <p>
                                1. 마케팅 및 광고에의 활용
                            </p>
                            <p>
                                - 필수항목 : 휴대전화번호, 이름, 접속 로그, 쿠키, 접속 IP 정보
                            </p>
    
                        </div>
                        <div class="popup_text_box">
                            <p>
                                7. 개인정보의 파기 ㈜위시드인베스트먼트('뉴스토픽')은(는) 원칙적으로 개인정보 처리목적이 달성된 경우에는 지체없이 해당 개인정보를 파기합니다. 파기의 절차, 기한 및 방법은 다음과 같습니다.
                            </p>
                            <p>
                                -파기절차
                            </p>
                            <p>
                                이용자가 입력한 정보는 목적 달성 후 별도의 DB에 옮겨져(종이의 경우 별도의 서류) 내부 방침 및 기타 관련 법령에 따라 일정기간 저장된 후 혹은 즉시 파기됩니다. 이 때, DB로 옮겨진 개인정보는 법률에 의한 경우가 아니고서는 다른 목적으로 이용되지 않습니다.
                            </p>
                            <p>
                                -파기기한
                            </p>
                            <p>
                                이용자의 개인정보는 개인정보의 보유기간이 경과된 경우에는 보유기간의 종료일로부터 5일 이내에, 개인정보의 처리 목적 달성, 해당 서비스의 폐지, 사업의 종료 등 그 개인정보가 불필요하게 되었을 때에는 개인정보의 처리가 불필요한 것으로 인정되는 날로부터 5일 이내에 그 개인정보를 파기합니다.
                            </p>
                            <p>
                                -파기방법
                            </p>
                            <p>
                                전자적 파일 형태의 정보는 기록을 재생할 수 없는 기술적 방법을 사용합니다.
                            </p>
    
                        </div>
                        <div class="popup_text_box">
                            <p>
                                8. 개인정보 자동 수집 장치의 설치•운영 및 거부에 관한 사항
                            </p>
                            <p>
                                ① ㈜위시드인베스트먼트 은 개별적인 맞춤서비스를 제공하기 위해 이용정보를 저장하고 수시로 불러오는 ‘쿠기(cookie)’를 사용합니다. ② 쿠키는 웹사이트를 운영하는데 이용되는 서버(http)가 이용자의 컴퓨터 브라우저에게 보내는 소량의 정보이며 이용자들의 PC 컴퓨터내의 하드디스크에 저장되기도 합니다. 가. 쿠키의 사용 목적 : 이용자가 방문한 각 서비스와 웹 사이트들에 대한 방문 및 이용형태, 인기 검색어, 보안접속 여부, 등을 파악하여 이용자에게 최적화된 정보 제공을 위해 사용됩니다. 나. 쿠키의 설치•운영 및 거부 : 웹브라우저 상단의 도구>인터넷 옵션>개인정보 메뉴의 옵션 설정을 통해 쿠키 저장을 거부 할 수 있습니다. 다. 쿠키 저장을 거부할 경우 맞춤형 서비스 이용에 어려움이 발생할 수 있습니다.
                            </p>
                        </div>
                        <div class="popup_text_box">
                            <p>
                                9. 개인정보 보호책임자 작성 
                            </p>
                            <p>
                                ① ㈜위시드인베스트먼트(‘http://news-topic.kr//’이하 ‘뉴스토픽) 은(는) 개인정보 처리에 관한 업무를 총괄해서 책임지고, 개인정보 처리와 관련한 정보주체의 불만처리 및 피해구제 등을 위하여 아래와 같이 개인정보 보호책임자를 지정하고 있습니다.
                            </p>
                            <p>
                                ▶ 개인정보 보호책임자
                            </p>
                            <p>
                                성명 : 장동환
                            </p>
                            <p>
                                직책 : 대표
                            </p>
                            <p>
                                연락처 : 02-786-8258, operation@wecyd.com
                            </p>
                            <p>
                                ② 정보주체께서는 ㈜위시드인베스트먼트(‘http://news-topic.kr//’이하 ‘뉴스토픽) 의 서비스(또는 사업)을 이용하시면서 발생한 모든 개인정보 보호 관련 문의, 불만처리, 피해구제 등에 관한 사항을 개인정보 보호책임자 및 담당부서로 문의하실 수 있습니다. ㈜위시드인베스트먼트(‘http://news-topic.kr//’이하 ‘뉴스토픽) 은(는) 정보주체의 문의에 대해 지체 없이 답변 및 처리해드릴 것입니다.
                            </p>
                        </div>
                        <div class="popup_text_box">
                            <p>
                                10. 개인정보 처리방침 변경 
                            </p>
                            <p>
                                ①이 개인정보처리방침은 시행일로부터 적용되며, 법령 및 방침에 따른 변경내용의 추가, 삭제 및 정정이 있는 경우에는 변경사항의 시행 7일 전부터 공지사항을 통하여 고지할 것입니다.
                            </p>
                        </div>
                        <div class="popup_text_box">
                            <p>
                                11. 개인정보의 안전성 확보 조치 ('뉴스토픽')은(는) 개인정보보호법 제29조에 따라 다음과 같이 안전성 확보에 필요한 기술적/관리적 및 물리적 조치를 하고 있습니다.
                            </p>
                            <p>
                                1. 정기적인 자체 감사 실시
                            </p>
                            <p>
                                개인정보 취급 관련 안정성 확보를 위해 정기적(분기 1회)으로 자체 감사를 실시하고 있습니다.
                            </p>
                            <p>
                                2. 개인정보 취급 직원의 최소화 및 교육
                            </p>
                            <p>
                                개인정보를 취급하는 직원을 지정하고 담당자에 한정시켜 최소화 하여 개인정보를 관리하는 대책을 시행하고 있습니다.
                            </p>
                            <p>
                                3. 내부관리계획의 수립 및 시행
                            </p>
                            <p>
                                개인정보의 안전한 처리를 위하여 내부관리계획을 수립하고 시행하고 있습니다.
                            </p>
                            <p>
                                4. 해킹 등에 대비한 기술적 대책
                                ㈜위시드인베스트먼트('뉴스토픽')은 해킹이나 컴퓨터 바이러스 등에 의한 개인정보 유출 및 훼손을 막기 위하여 보안프로그램을 설치하고 주기적인 갱신•점검을 하며 외부로부터 접근이 통제된 구역에 시스템을 설치하고 기술적/물리적으로 감시 및 차단하고 있습니다.
                            </p>
                            <p>
                                5. 개인정보의 암호화
                            </p>
                            <p>
                                이용자의 개인정보는 비밀번호는 암호화 되어 저장 및 관리되고 있어, 본인만이 알 수 있으며 중요한 데이터는 파일 및 전송 데이터를 암호화 하거나 파일 잠금 기능을 사용하는 등의 별도 보안기능을 사용하고 있습니다.
                            </p>
                            <p>
                                6. 접속기록의 보관 및 위변조 방지
                            </p>
                            <p>
                                개인정보처리시스템에 접속한 기록을 최소 6개월 이상 보관, 관리하고 있으며, 접속 기록이 위변조 및 도난, 분실되지 않도록 보안기능 사용하고 있습니다.
                            </p>
                            <p>
                                7. 개인정보에 대한 접근 제한
                            </p>
                            <p>
                                개인정보를 처리하는 데이터베이스시스템에 대한 접근권한의 부여,변경,말소를 통하여 개인정보에 대한 접근통제를 위하여 필요한 조치를 하고 있으며 침입차단시스템을 이용하여 외부로부터의 무단 접근을 통제하고 있습니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="popup_btn_box">
                    <button type="button" class="btn_close" onclick="closePopup('popupAgreement')">닫기</button>
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
        // popup
        // popup
        function openPopup(el){
            $('#popupWrap').show();
            $('#'+ el).show();
        }
        function closePopup(el){
            $('#popupWrap').hide();
            $('#'+ el).hide();
        }
        // 댓글 스위치 모양 
        $('.js-toggle-switch').on('click',function(){
            $(this).toggleClass('active');
        });
        // fixed btn 닫기
        function closeGoFormBtn() {
            $('.js-fixed-btn').hide();
        }
        // fixed btn 스크롤 애니메이션
        var floatPosition = parseInt($(".js-fixed-btn").css('top'));

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

        // 한글 조사변경
        function getPostWord(str, firstVal, secondVal) {
            try {
                var lastStr = str[str.length - 1].charCodeAt(0);
                if (lastStr < 0xAC00 || lastStr > 0xD7A3) {
                    return str;
                }
                var lastCharIndex = (lastStr - 0xAC00) % 28;
                if (lastCharIndex > 0) {
                    if (firstVal === "으로" && lastCharIndex === 8)
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
        // firstVal :: 으로 / 을 / 이 / 은 / 과
        // secondVal :: 로 / 를 / 가 / 는 / 와 

        function submitContents(f) {
            var flag=false;
            var href;


            $('.input').each(function(){
                if( ! jQuery.trim($(this).val()) ) {
                    alert(getPostWord($(this).attr('label'),'을','를') + '입력해 주세요');
                    $(this).focus();
                    flag=false;
                    return false;
                } else flag=true;
            });

            if(!flag) return false;

            if($('input[id="agree01"]').is(":checked") && $('input[id="agree02"]').is(":checked")){

                
                
                // $('.loading').show();
                href = cb_url + '/postact/smssend';

                $.ajax({
                    async : false,
                    url : href,
                    type : 'post',
                    data: {
                        post_id: $('#post_id').val(),
                        mlh_mobileno: $("#mlh_mobileno").val(),
                        mlh_name: $('#mlh_name').val(),
                        multi_code: $('#multi_code').val(),
                        post_title: "<?php echo element('post_title',element('post', $view));?>",                        
                        csrf_test_name: cb_csrf_hash,
                    },      
                    dataType : 'json',
                    success : function(data) {
                        
                        if (data.result=='error') {
                            alert(data.message);
                            return false;
                        } else if (data.result=='success') {
                            alert('발송 하였습니다. 인증번호를 입력해 주세요');
                            openPopup('popupSMS');

                            // //alert(data.success);
                            // $('.' + classname).text(number_format(String(data.count)));
                            // $('#btn-' + classname).effect('highlight', {color : '#f37f60'}, 300);
                        }
                    },
                    complete : function(data) {
                        // $("#mlh_mobileno_3").val($("#mlh_mobileno1_3").val()+$("#mlh_mobileno2_3").val()+$("#mlh_mobileno3_3").val());
                        
                    }
                });

                return ;
                // 
                // $('.loading').show();
                // href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

                // $.ajax({
                //     async : false,
                //     url : href,
                //     type : 'get',
                //     dataType : 'json',
                //     complete : function(data) {
                //         // $("#mlh_mobileno_3").val($("#mlh_mobileno1_3").val()+$("#mlh_mobileno2_3").val()+$("#mlh_mobileno3_3").val());
                        
                //     }
                // });

                // return flag;
            } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
            
            return false;
        }

        function smsmap() {
            var flag=false;
            var href;


            if(!$('#cfc_num').val()) {
                alert('인증번호를 입력해 주세요');
                return ;
            }

            

                
                
                // $('.loading').show();
                href = cb_url + '/postact/smsmap';

                $.ajax({
                    async : false,
                    url : href,
                    type : 'post',
                    data: {
                        post_id: $('#post_id').val(),
                        mlh_mobileno: $("#mlh_mobileno").val(),
                        mlh_name: $('#mlh_name').val(),
                        multi_code: $('#multi_code').val(),
                        cfc_num: $('#cfc_num').val(),                        
                        csrf_test_name: cb_csrf_hash,
                    },      
                    dataType : 'json',
                    success : function(data) {
                        
                        if (data.result=='error') {
                            alert(data.message);
                            return false;
                        } else if (data.result=='success') {
                            
                            $('#cfc_num_').val($('#cfc_num').val());
                            $('#fwrite').submit();
                            return true;
                            // //alert(data.success);
                            // $('.' + classname).text(number_format(String(data.count)));
                            // $('#btn-' + classname).effect('highlight', {color : '#f37f60'}, 300);
                        }
                    },
                    complete : function(data) {
                        // $("#mlh_mobileno_3").val($("#mlh_mobileno1_3").val()+$("#mlh_mobileno2_3").val()+$("#mlh_mobileno3_3").val());
                        
                    }
                });
            
            return false;
        }

        function cpaProc(mlh_id) {
            var href;

            // href = 'http://api.tenping.kr/Query?jid=<?php echo $jid?>&uid=<?php echo $uid?>&at=<?php echo $at?>&key='+post_md+mlh_id;
             
            // href = cb_url + '/postact/daine_query_curl/<?php echo urlencode($this->session->flashdata('mlh_name')) ?>/<?php echo $this->session->flashdata('mlh_age') ?>/<?php echo $this->session->flashdata('mlh_mobileno') ?>/<?php echo urlencode($this->session->flashdata('mlh_text')) ?>';

            href = "<?php echo base_url('postact/daine_query_curl') ?>";
            $.ajax({
                async : false,
                url : href,
                type : 'post',
                data: {
                    mlh_name: "<?php echo $this->session->flashdata('mlh_name') ?>",
                    mlh_mobileno: "<?php echo $this->session->flashdata('mlh_mobileno') ?>",
                    multi_code: "<?php echo element('multi_code',$view) ?>",
                    csrf_test_name: cb_csrf_hash,
                },                
                dataType : 'json',
                success : function(response) {
                    
                
                },
                error : function(response) {
                },
                complete : function (response) {
                   if (response.responseJSON.result) {
                    $.ajax({
                         async : false,
                         url : cb_url + '/media_multiple/act_update/' +mlh_id+'/'+encodeURIComponent(response.responseJSON.result),
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
            cpaProc("<?php echo $this->session->flashdata('mlh_id') ?>");

            <?php if(strtolower(element('multi_code',$view))==='c070'){ ?>
                
               _link_postBack('<?php echo $this->session->flashdata('mlh_name') ?>','<?php echo $this->session->flashdata('mlh_mobileno') ?>','<?php echo $this->session->flashdata('mlh_age') ?>');
            <?php } ?>

            $('.loading').hide();
        <?php } ?>
    </script>
</body>
</html>