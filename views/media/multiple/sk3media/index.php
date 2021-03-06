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
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="no">
<meta name="robots" content="index,follow">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Expires" content="-1">
    <title>셀럽폰</title>
    <style>
        * {
        padding: 0;
        margin: 0;
    }
    ul,ol,li,dt,dd {
        list-style: none;
    }
    body {
        font-family: Gulim, Dotum, Helvetica, Arial, sans-serif;
        font-size: 100%;
        color: #333;
        line-height: 1.5;
    }
    a {
        text-decoration: none;
    }
    table {
        border-collapse: collapse;
        border-spacing: 0;
    }
    input[type="checkbox"] {
        vertical-align: middle;
        margin-right: 5px;
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
        max-width: 730px;
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
    .img_mark {
        position: absolute;
        display: block;
        top: 150vw;
        right: 3%;
        width: 112px;
    }
    .form_wrap {
        background-color: #c9d9f2;
    }
    .form_container {
        padding: 5.6% 3.42465% 0;
    }
    .form_container .form_table {
        width: 100%;
    }
    .form_container .lab_box {
        width: 25%;
        height: 6.6666vw;
        padding-bottom: 1.8666vw;
    }
    .form_container .lab {
        margin-left: 30%;
        font-size: 20px;
        font-weight: bold;
        color: #4c4c4c;
    }
    .form_container .inp_box {
        width: 75%;
        height: 6.6666vw;
        padding-bottom: 1.8666vw;
        font-size: 14px;
    }
    .form_container .inp {
        height: 100%;
        padding-left: 10px;
        box-sizing: border-box;
        border-radius: 3px;
        border: 1px solid #a9a9a9;
        background-color: #fff;
    }
    .form_container .inp_name {
        width: 97%;
    }
    .form_container .inp_tel {
        width: 25%;
    }
    .form_container .inp_select {
        width: 95%;
    }
    .form_container .inp_check_box {
        height: 6.6666vw;
        font-size: 16px;
    }
    .form_container .inp_check {
        width: 18px;
        height: 18px;
    }
    .form_container .inp_check,
    .form_container .lab_check,
    .form_container .link_detail {
        vertical-align: middle;
    }
    .form_container .btn_box {
        margin-top: 5px;
    }
    .footer {
        padding: 6.6666% 3.42465% 2.6666%;
        font-size: 14px;
        text-align: center;
        background-color: #c9d9f2;
        word-break: keep-all;
    }
    @media screen and (min-width: 751px) {
        
        .img_mark {
            top: 700px;
            bottom: auto;
            right: calc(50% - 325px);
        }
        .form_container .lab_box {
            height: 50px;
            padding-bottom: 14px;
        }
        .form_container .inp_box {
            height: 50px;
            padding-bottom: 14px;
        }
        .form_container .inp_check_box {
            height: 50px;
        }
    }
    @media screen and (max-width: 500px) {
        .img_mark {
            width: 80px;
        }
        .form_container .lab_box {
            height: 36px;
            padding-bottom: 3vw;
        }
        .form_container .lab { 
            margin-left: 20%;
            font-size: 16px;
        }
        .form_container .inp_box {
            height: 36px;
            padding-bottom: 3vw;
        }
        .form_container .inp {
            padding-left: 5px;
        }
        .form_container .inp_check_box {
            height: 36px;
            font-size: 14px;
        }
        .footer {
            font-size: 13px;
        }
        .form_container .inp_check {
            width: 16px;
            height: 16px;
        }
    }
    @media screen and (max-width: 374px) {
        .form_container .lab { 
            margin-left: 10%;
            font-size: 14px;
        }
        .form_container .inp_check_box {
            font-size: 12px;
        }
        .footer {
            font-size: 12px;
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
    
</head>
<body>
    <div class="wrap">
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <div class="img_box">
            <img src="<?=$AD_DIR?>/images/1.jpg" alt="셀럽폰 특가할인" class="img">
            <div class="img_mark"><a href="http://www.ictmarket.or.kr/ajax/ajax3.do?id=PRE0000111839&seq=1&yn=1" title="이동통신 서비스 판매점 사전 승낙서"><img src="<?=$AD_DIR?>/images/mark.png" alt="사전승낙 판매점" class="img"></a></div>
        </div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/2.jpg" alt="" class="img"></div>
        <div class="form_wrap">
            <div class="img_box"><img src="<?=$AD_DIR?>/images/3.jpg" alt="" class="img"></div>
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
                <input type="hidden" name="mlh_age" value="0">
                <input type="hidden" name="mlh_text" id="mlh_text" value="">

                
                    <table class="form_table">
                        <tbody>
                            <tr>
                                <td class="lab_box"><label for="mlh_name" class="lab">성 함</label></td>
                                <td class="inp_box">
                                    <input type="text" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>" name="mlh_name" id="mlh_name" class="inp input inp_name" label="성함">
                                </td>
                            </tr>
                            <tr>
                                <td class="lab_box"><label for="mlh_mobileno1" class="lab">연락처</label></td>
                                <td class="inp_box">
                                    <select name="mlh_mobileno1" id="mlh_mobileno1" class="inp input inp_tel" label="연락처">
                                        <option <?php echo set_select('mlh_mobileno1','010',true); ?>>010</option>
                                    <option <?php echo set_select('mlh_mobileno1', '011'); ?> >011</option>
                                    <option <?php echo set_select('mlh_mobileno1', '016'); ?>>016</option>
                                    <option <?php echo set_select('mlh_mobileno1', '017'); ?>>017</option>
                                    <option <?php echo set_select('mlh_mobileno1', '018'); ?>>018</option>
                                    <option <?php echo set_select('mlh_mobileno1', '019'); ?>>019</option>
                                        
                                    </select> -
                                    <input type="tel" name="mlh_mobileno2" id="mlh_mobileno2" class="inp input inp_tel" label="연락처" value="<?php echo set_value('mlh_mobileno2', element('mlh_mobileno2', element('post', $view))); ?>"> -
                                    <input type="tel" name="mlh_mobileno3" id="mlh_mobileno3" class="inp input inp_tel" label="연락처" value="<?php echo set_value('mlh_mobileno3', element('mlh_mobileno3', element('post', $view))); ?>">
                                </td>
                            </tr>
                            <tr>
                                <td class="lab_box"><label for="t_a" class="lab">통신사</label></td>
                                <td class="inp_box">
                                    <select name="t_a" id="t_a" class="inp input inp_select" label="통신사">
                                        <option value="">선택하세요</option>
                                        <option <?php echo set_select('t_a', 'SKT'); ?> >SKT</option>
                                    <option <?php echo set_select('t_a', 'KT'); ?>>KT</option>
                                    <option <?php echo set_select('t_a', 'LG'); ?>>LG</option>

                                        
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="lab_box"><label for="t_b" class="lab">희망기종</label></td>
                                <td class="inp_box">
                                    <select name="t_b" id="t_b" class="inp input inp_select" label="희망기종">
                                        <option value="">선택하세요</option>
                                        <option <?php echo set_select('t_b', '갤럭시 S10 5G'); ?> >갤럭시 S10 5G</option>
                                    <option <?php echo set_select('t_b', '갤럭시 S10+ 5G'); ?>>갤럭시 S10+ 5G</option>
                                    <option <?php echo set_select('t_b', '갤럭시S10 5G'); ?>>갤럭시S10 5G</option>
                                    <option <?php echo set_select('t_b', '갤럭시A90 5G'); ?>>갤럭시A90 5G</option>
                                    <option <?php echo set_select('t_b', 'LG V50S 5G'); ?>>LG V50S 5G</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="inp_check_box box_center" colspan="2">
                                    <input type="checkbox" name="agree" id="agree" class="inp_check" checked>
                                    <label for="agree" class="lab_check">개인정보 수집/이용동의</label>
                                    <a href="http://celllovephone.com/popup.html" class="link_detail">[상세보기]</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="btn_box">
                        <button class="btn_img" type="submit"><img src="<?=$AD_DIR?>/images/button.png" alt="특가상담신청하기" class="img"></button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="footer">
            회사명 : (주)이씨퍼트 | 대표자명 : 김태희 │ 대표번호 : 1877-9121 │ 사업자등록정보 : 195-86-00772
            <br>주소 : 경기도 의정부시 오목로 225번길 147, 4층 401호 폴리플라자 401호(민락동)
            <br>COPYRIGHTⓒ이씨퍼트 CORP.ALL RIGHTS RESERVED
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
            var flag = false;
            var href;


            $('.input').each(function () {
                if (!jQuery.trim($(this).val())) {
                    alert(getPostWord($(this).attr('label'), '을', '를') + '입력해 주세요');
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
                        
                        $("#mlh_text").val("통신사 :"+$("#t_a").val()+"희망기종 :"+$("#t_b").val());
                    }
                });

                return flag;
            } else alert('개인정보 수집/이용동의를 체크 해주시기 바랍니다.');

            return false;
        }
<?php if($this->session->flashdata('mlh_id')){?>    
    _link_postBack('<?php echo $this->session->flashdata('mlh_name') ?>','<?php echo $this->session->flashdata('mlh_mobileno') ?>','<?php echo $this->session->flashdata('mlh_age') ?>','<?php echo $this->session->flashdata('mlh_text') ?>');
    $('.loading').hide();
<?php } ?>
    </script>
</body>
</html> 
