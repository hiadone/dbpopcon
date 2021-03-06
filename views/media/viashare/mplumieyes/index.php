<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" />
<?php
    $ad_dir  = element('view_skin_url', $layout);
    $click_key=0;
    if(!empty($_GET['click_key'])) $click_key=$_GET['click_key'];
    $via_token=0;
    if(!empty($_GET['via_token'])) $via_token=$_GET['via_token'];
    

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR" rel="stylesheet">

      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <title>로또세븐</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        html,body{
            width: 100%;
            max-width: 640px;
            margin: 0 auto;
        }
        ul,li{
            list-style: none;
        }   
        /* */
        .img_box{
            margin-top: 16px;
            font-size: 0;
        }
        .img_box img{
            width: 100%;
        }
        .img_box figcaption{
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            margin-top: 3px;
            line-height: 28px;
            font-family: 'Noto Sans KR', sans-serif;
        }
        .txt_emph01{
            font-weight: bold;
            color: #f00;
        }
        .txt_emph02{
            text-decoration: underline;
            color: #f00;
        }
        /* pg */
        .header{
            margin: 0;
        }
        .arti_lotto{
            padding: 10px 8px;
        }
        .arti_lotto .pg_top{
            overflow: hidden;
            font-family: 'Noto Sans KR', sans-serif;
        }
        .pg_top .tit{
            font-size: 23px;
            line-height: 1.5;
            font-weight: bold;
        }
        .pg_top .sub_tit{
            font-size: 16px;
            line-height: 24px;
            font-weight: bold;
            padding: 10px 0 10px 0;
            color: #000;
            border-bottom: 1px solid #dedede;
        }
        .pg_top .post_date{
            float: right;
            font-size: 11px;
            color: #666;
            padding-top: 10px;
        }
        .arti_lotto .txt_box{
            margin-top: 16px;
            line-height: 28px;
            font-size: 16px;
            font-family: 'Noto Sans KR', sans-serif;
            color: #333;
            letter-spacing: -0.5px;
            text-align: justify;
            word-break: break-all;
        }
        /*form*/
        .db_form_box {
            width: 90%;
            margin: 16px auto 0;
            border: 3px solid #2b2b2b;
            font-family: 'Noto Sans KR', sans-serif;
        }
        .db_form_box .img_box {
            margin-top: 0;
        }
        .db_form_box .inp_box {
            padding: 10px 0 10px 10px;
            font-size: 12px;
        }
        .db_form_box label {
            font-weight: bold;
            color: #262626;
            font-size: 16px;
            margin-right: 20px;
        }
        .db_form_box select {
            width: 20%;
            height: 25px;
            font-size: 13.333px;
        }
        .db_form_box input[type="tel"] {
            width: 20%;
            height: 25px;
            font-size: 13.333px;
        }
        .db_form_box .info {
            font-size: 12px;
            line-height: 20px;
            padding-top: 24px;
            padding-bottom: 27px;
            font-weight: bold;
            text-align: center;
            color: #000;
        }
        .db_form_box .btn_box {
            text-align: center;
        }
        .db_form_box .btn {
            width: 80%;
            padding: 0;
            border: none;
            background-color: transparent;
        }
        .db_form_box .btn img {
            width: 100%;
        }
        /* bottom comment*/
        .comment_area {
            border-top: 1px solid #a3a3a3;
            overflow: hidden;
            font-family: 'Noto Sans KR', sans-serif;
        }
        .comment_area .tit,
        .comment_area .show_more {
            font-size: 12px;
            font-weight: bold;
            padding: 7px;
        }
        .comment_area .tit {
            float: left;
            color: #de0404;
        }
        .comment_area .show_more {
            float: right;
        }
        .comment_area .comment_box {
            clear: both;
            border-top: 1px solid #a3a3a3;
        }
        .comment_area .comment {
            padding: 15px 10px;
            border-bottom: 1px dashed #ccc;
        }
        .comment_area .comment:last-child{
            border-bottom: none;
        }
        .comment_area .comment_best{
            background-color: #f6f6f6;
        }
        .comment_top {
            overflow: hidden;
            margin-bottom: 10px;
        }
        .comment_top .user_id {
            font-weight: normal;
            font-size: 12px;
            float: left;
        }
        .comment_top .lab_best {
            font-size: 0;
            margin-right: 5px;
            vertical-align: text-bottom;
        }
        .comment_top .comment_date {
            float: right;
            text-align: right;
            font-size: 11px;
            color: #777;
        }
        .comment_area .comment_post {
            padding: 7px 6px;
            font-size: 14px;
            color: #000;
            border-radius: 5px;
            border: 1px solid #c1c2c4;
            background-color: #fff;
        }
        .comment_area .comment_bottom {
            overflow: hidden;
            margin-top: 10px;
            font-size: 12px;
            font-weight: bold;
        }
        .comment_bottom .comment_reply {
            float: left;
        }
        .comment_bottom .comment_like {
            float: right;
        }
        /* */
        .footer{
            padding-bottom: 50px;
            background-color: #f4f4f4;
        }

        .alert 
        {
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
            font-size:18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="img_box header">
        <?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <img src="<?=$ad_dir?>/images/top.jpg" alt="투데이ISSUE"></div>
        <article class="arti_lotto">
        <div class="pg_top">
            <h2 class="tit"><b class="txt_emph01">&#91;화제&#93;</b> 로또 수동당첨비율 5.2% &#45;&gt; 38.7% 급상승 관계자 측, <b class="txt_emph01">&quot;조작 없지만 분석토대로 당첨사실 첫 인정&quot;</b></h2>
            <p class="sub_tit">&#45;패턴만 알면 27&#37;이상 당첨확률 월등히 높아..</p>
            <span class="post_date">기사입력 : 2019-03-07 09:13</span>
        </div>
        <div class="img_box"><img src="<?=$ad_dir?>/images/new.jpg" alt="로또 1등만 연속 3번? 계속되는 연속당첨릴레이.."></div>
        <div class="txt_box">
            경기 불황이 지속되면서 누구나 한 번쯤은 꿈꾸는 "대박", 소위 말하는 일확천금의 꿈은 쉽게 이루어지지 않는다. 그래도 가장 쉽고 접근성이 높은 "로또"를 통해 당첨의 꿈을 안고 로또를 구매하기도 한다.<br><br>
            로또 구입자 A씨의 인터뷰에 따르면 A씨는 매주 1~2장씩 로또를 구매한다고 한다. 로또를 구매하는 이유는 당첨될 수 있다는 기대 심리와, 생활비, 일확천금 등이 목적이라고 한다. 하지만 일확천금의 꿈은 쉽게 이루어지지 않는다.<br><br>하지만 로또 당첨 예상 번호를 알 수 있는 방법이 있다면 어떨까?<br><br>
            실제로 A씨의 경우에도 최근 우연히 휴대폰 문자로 '로또세븐'의 로또 분석번호를 받게되면서 인생이 180도 바뀌게 되었다.
        </div>
        <div class="img_box">
            <figure>
                <img src="<?=$ad_dir?>/images/lotto1.png" alt="실제 A씨 부부가 제공한 824회 영수증 2장">
                <figcaption>&#42;실제 A씨 부부가 제공한 824회 영수증 2장</figcaption>
            </figure>
        </div>
        <div class="txt_box">
            로또세븐은 국내 개발자들이 6년간 연구 끝에 타 업체와 비교할 수 없는 100% 자체 기술력 보유로 결국 성공을 이루었다. 간략하게 설명하자면 약 27 여 가지[낙수, 낙첨, 복합수 등] 분석 시뮬레이션을 통해 로또 최적화 조합을 제공한다.<br><br>
            일반인 대상 300명 분석 번호 테스트 결과 수동 당첨 비율이 무려 5.2%&#45;&gt; 38.7% 급증가 했다.<br><br>
            <span class="txt_emph02">이 말은 즉, 통계상 최대 6주 안에 1명씩은 3등 이상의 고액 당첨이 나오고 있다는 뜻이다.</span><br><br>
            현재 100% 자체 기술력으로 브랜드 가치 1위까지 단번에 오른 <b class="txt_emph01">로또 세븐은 이번 회차 분석 번호를 실시간 수기로 제공</b>해준다고 하니 빠르게 참여해보길 바란다.
        </div>
<!-- form -->
        <div class="db_form_box">
            <h2 class="img_box"><img src="<?=$ad_dir?>/images/dbtt.jpg" alt="로또 1등 거짓이 아닌 현실로 다가옵니다. 삶의 가치를 업그레이드 하세요"></h2>
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="click_key" value="<?php echo $click_key?>">
            <input type="hidden" name="mlh_age" value="0">
            <input type="hidden" name="via_token" value="<?php echo $via_token?>">
            <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="">
                <div class="inp_box">
                    <label for="mlh_name">이름</label>
                    <input type="text" class="input" id="mlh_name" name="mlh_name" label="이름">
                </div>
                <div class="inp_box">
                    <label>연락처</label>
                    <select id="mlh_mobileno1" name="mlh_mobileno1">
                        <option value="010">010</option>
                        <option value="011">011</option>
                        <option value="016">016</option>
                        <option value="017">017</option>
                        <option value="018">018</option>
                        <option value="019">019</option>
                    </select> &#45;
                    <input type="tel" class="input" id="mlh_mobileno2" name="mlh_mobileno2" label="연락처"  maxlength="4"> &#45;
                    <input type="tel" class="input" id="mlh_mobileno3" name="mlh_mobileno3" label="연락처"  maxlength="4">
                </div>
                <p class="info">&#42;별도의 회원가입없이 <span class="txt_emph01">서비스</span> 정보제공 후<br> 개인정보는 안전하게 폐기 됩니다.</p>
                <div class="btn_box"><button class="btn" type="submit"><img src="<?=$ad_dir?>/images/btn2.gif" alt="1등 당첨 예상번호 실시간 받아보기 click"></button></div>
            <?php echo form_close(); ?>
        </div>
    </article>
    <div class="comment_area">
        <h2 class="tit">네티즌 의견</h2>
        <p class="show_more">더보기</p>
        <ul class="comment_box">
            <li class="comment comment_best">
                <div class="comment_top">
                    <h3 class="user_id"><span class="lab_best"><img src="<?=$ad_dir?>/images/best.gif" alt="best"></span> lovemo***</h3>
                    <p class="comment_date">2019-3-7 18:15</p>
                </div>
                <div class="comment_post">
                    제가 정말 과장 없이 솔직한 후기 말씀드릴게요. 저는 로또에 관련된 직원도 아닌 일반 인천 사는 두 아이의 아빠입니다. 요즘 이거에 맛들려서 자주 구매를 합니다. 4주간 가장 평이 좋은 3개 업체 분석 번호를 구매해봤는데 로또세븐이 확실히 압도적이네요. 이미 유명해서 아실 분들은 아시겠지만 용돈벌이로 좋네요
                </div>
                <div class="comment_bottom">
                    <p class="comment_reply">답글&#40;7&#41;</p>
                    <p class="comment_like">추천 0 반대 0</p>
                </div>
            </li>
            <li class="comment">
                <div class="comment_top">
                    <h3 class="user_id"><span class="lab_best"><img src="<?=$ad_dir?>/images/best.gif" alt="best"></span> piepo***</h3>
                    <p class="comment_date">2019-3-7 18:15</p>
                </div>
                <div class="comment_post">
                    올해 수동 당첨자가 많이 나온다는 뉴스 보다가 호기심에 신청해봤어요. 3년째 최고 등수 3등 당첨된 게 전부네요. 지인도 추천해주던데 당첨되면 저도 인증 사진 올릴게요.
                </div>
                <div class="comment_bottom">
                    <p class="comment_reply">답글&#40;3&#41;</p>
                    <p class="comment_like">추천 0 반대 0</p>
                </div>
            </li>
            <li class="comment">
                <div class="comment_top">
                    <h3 class="user_id"><span class="lab_best"><img src="<?=$ad_dir?>/images/best.gif" alt="best"></span> money***</h3>
                    <p class="comment_date">2019-3-7 18:15</p>
                </div>
                <div class="comment_post">
                    로또로 인생 역전 가즈아~!!!!
                </div>
                <div class="comment_bottom">
                    <p class="comment_reply">답글&#40;1&#41;</p>
                    <p class="comment_like">추천 0 반대 0</p>
                </div>
            </li>
            <li class="comment">
                <div class="comment_top">
                    <h3 class="user_id"><span class="lab_best"><img src="<?=$ad_dir?>/images/best.gif" alt="best"></span> gogodd***</h3>
                    <p class="comment_date">2019-3-7 18:15</p>
                </div>
                <div class="comment_post">
                    로또는 역시 수동이 대세 ㅋ 오늘도 하러 갑니다~
                </div>
                <div class="comment_bottom">
                    <p class="comment_reply">답글&#40;1&#41;</p>
                    <p class="comment_like">추천 0 반대 0</p>
                </div>
            </li>
        </ul>
        
    </div>
    <div class="img_box footer">
        <img src="<?=$ad_dir?>/images/footer.gif" alt="footer">
    </div>
</body>
</html>
<script type="text/javascript">
//<![CDATA[
function submitContents(f) {
    var flag=false;
    var href;


    $('.input').each(function(){
         if( ! jQuery.trim($(this).val()) ) {
            alert($(this).attr('label') + '을 입력해 주세요');
            $(this).focus();
            flag=false;
            return false;
        } else flag=true;
    });

    if(!flag) return false;
    
     // if($('input:checkbox[id="agree"]').is(":checked")){
        href = cb_url + '/postact/media_click/' + $('#post_id').val() ;

        $.ajax({
            async : false,
            url : href,
            type : 'get',
            dataType : 'json',
            complete : function(data) {
                $("#mlh_mobileno").val($("#mlh_mobileno1 option:selected").val()+$("#mlh_mobileno2").val()+$("#mlh_mobileno3").val());
                
            }
        });

        return flag;
    // } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
     


    
    return false;
    
}


function submitContents2(f) {
    var flag=false;
    var href;


    $('.input2').each(function(){
         if( ! jQuery.trim($(this).val()) ) {
            alert($(this).attr('label') + '을 입력해 주세요');
            $(this).focus();
            flag=false;
            return false;
        } else flag=true;
    });

    if(!flag) return false;
    
     // if($('input:checkbox[id="agree2"]').is(":checked")){
        href = cb_url + '/postact/media_click/' + $('#post_id').val() ;

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
    // } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
     


    
    return false;
    
}

function cpaProc(mlh_id,mlh_mobileno,mlh_name) {
    var href;

    
     
    href = cb_url + '/postact/viashare_query_curl/<?php echo $click_key?>/<?php echo $via_token?>/'+mlh_id+'/'+mlh_mobileno+'/'+encodeURIComponent(mlh_name);
    $.ajax({
        async : false,
        url : href,
        type : 'get',
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
                 url : cb_url + '/media/viaProc/' +mlh_id+'/'+response.responseJSON.ResultCode+'/'+response.responseJSON.Message,
                 type : 'get',
                 dataType : 'json',
                 success : function(data) {
                      
                 }
             });
       
            }
           
        }

    });

    href='';
    href = cb_url + '/postact/lottoseven_query_curl/<?php echo $this->session->flashdata('mlh_mobileno') ?>/da/'+encodeURIComponent(mlh_name);
    $.ajax({
        async : false,
        url : href,
        type : 'get',
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
            return false;
           }
           
        }

    });
}


<?php if($this->session->flashdata('mlh_id')){?>
    cpaProc(<?php echo $this->session->flashdata('mlh_id') ?>,'<?php echo $this->session->flashdata('mlh_mobileno')  ?>','<?php echo $this->session->flashdata('mlh_name')  ?>');
<?php } ?>

//]]>
 </script>