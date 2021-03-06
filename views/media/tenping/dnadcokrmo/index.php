<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css'); ?>" />
<?php
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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <title>피타입스다이어트</title>
    <style> 
        *{
            margin: 0;
            padding: 0;
        }
        body,html{
            width: 100%;
            max-width: 640px;
            min-height: 320px;
            margin: 0 auto;
            font-family: NanumGothic, Gulim, '돋움', Dotum, sans-serif;
        }
        ul,ol,dl,li,dt,dd{
            list-style: none;
        }
		label{
			font-weight: normal;
		}
        .img_box{
            padding: 20px 15px 0;
            font-size: 0;
        }
        .img_full{
            padding: 0;
        }
        .img_box img{
            width: 100%;
        }
        .txt_box p{
            padding: 20px 15px 0;
            text-align: left;
            letter-spacing: -1px;
            font-size: 17px;
            line-height: 27px;
            margin: 0;
            color: #000;
        }
        .txt_bg{
            background: #6bbecf;
            font-weight: 700;
            color: #fff;
        }
        .txt_bold{
            font-weight: 700;
        }
        .db_form_box{
            border: 5px solid #6bbecf;
            background: #eee;
        }
        .db_form_box form{
            overflow: hidden;
        }
        .db_form_box form .inp_userinfo{
            margin: 20px;
            padding-top: 15px;
        }
        .db_form_box .in{
            overflow: hidden;
            font-size: 14px;
        }
        .db_form_box .in li{
            float: left;
            height: 35px;
        }
        .db_form_box .in .li_title{
            width: 20%;
            padding-right: 10px;
            text-align: right;
            box-sizing: border-box;
        }
        .db_form_box .in .li_content{
            width: 30%;
        }
        .db_form_box .li_content .wd72{
            width: calc(100% - 24px);
        }
        .db_form_box .li_content .wdper80{
            width: calc(100% - 18px);
        }
        .db_form_box .in .li_content2{
            width: 80%;
        }
        .db_form_box .in select,
        .db_form_box .in input[type="text"],
        .db_form_box .in input[type="number"],
        .db_form_box .in input[type="tel"]{
            font-size: 15px;
            height: 25px;
            border: none;
            border-radius: 5px;
        }
        .db_form_box .inp_phone input[type="tel"],
        .db_form_box .inp_phone select{
            width: 29%;
        }
        .db_form_box textarea{
            height: 35px;
            border: none;
            resize: none;
            border-radius: 5px;
            width: 98%;
        }
        .sbg_textbox{
            padding-top: 10px;
            text-align: center; 
        }
        .sbg_textbox label{
            display: block;
            font-size: 12px;
            line-height: 27px;
        }
        .sbg_textbox .btn{
            text-align: center;
            width: 250px;
            background-color: transparent;
            border: none;
            margin-bottom: 10px;
        }
        .sbg_textbox .btn img{
            width: 100%;
        }
        .sbg_textbox table{
            width: 100%;
            margin: auto;
            background-color: #fff;
            border: 20px solid #eee;
            border-top: none;
            font-size: 13px;
            border-collapse: collapse;
            border-spacing: 0;
            line-height: 27px;
        }
        .sbg_textbox table th{
            text-align: center;
            padding-top: 10px;
        }
        .sbg_textbox table th input{
            width: 80px;
            border: 1px solid #ccc;
			line-height: 18px;
        }
        .sbg_textbox table td{
            padding: 5px;
            font-size: 12px;
            color: #666;
            font-weight: bold;
        }
        .sbg_textbox table{}
        .btn_go{
            position:fixed; 
            bottom:20px; 
            right:0; 
            z-index:999; 
            max-width:640px;
        }
		@media screen and (min-width:641px){
			.btn_go{
				right: calc(50% - 320px);
			}
		}
    </style>
</head>

<body>
    <div class="wrap" >
        <?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <div class="btn_go" >
            <a href="#formBox">
                <img src="<?=$AD_DIR?>/images/pass.gif" width="90">
            </a>
        </div>
        <div class="img_box img_full"><img src="<?=$AD_DIR?>/images/top.jpg" alt="smart care labs 제시다이어트"></div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/bf.gif" alt=""></div>
        <div class="txt_box">
            <p>부모님을 닮아 어려서부터 통통한 체질인 이연서(38)씨는 성인이 되면 빠진다던 살이 눈덩이처럼 불어 키 161cm에 75kg가 넘는 고도비만이었다.</p>
            <p>
                이런 상황을 극복하고자 시도했던 수많은 다이어트는 요요현상이라는 굴레에서 벗어나지 못했다. 그러던 중 이연서씨는 3개월 전 출산한 친구의 다이어트 성공 소식을 들었고, 그 비법으로 <b class="txt_bg">161cm에 49kg 여신 몸매로 감량에 성공</b>하며, 제2의 인생을 살게 되었다.
            </p>
        </div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/img1.gif" alt="제시가 제시하는 유전자 공략법 피타입스 dna 다이어트"></div>
        <div class="txt_box">
            <p>그녀는 성공 비법에 대해 “살이 찌는 원인과 체질은 제각각인데 모든 사람은 같은 방식의 다이어트를 한다. 나 역시 그랬다. 하지만 ‘이것’으로 <b class="txt_bold">나의 비만 유전자 정보를 알게 되었고 그 뒤로 설계된 다이어트의 효과는 말로 표현할 수가 없었다.</b> 지금 생각해보면 너무 당연한 걸 놓쳤던 것 같다.” 전했다.</p>
            <p>
                위 사례의 다이어트 비법은 <b class="txt_bg">가수 제시의 몸매 관리 비법으로도 잘 알려진 ‘피타입스 D.N.A 다이어트’</b>로 유전자 검사를 통해 지방 저장 유전자(FTO), 가짜 식탐 유전자(MC4R), 스트레스 유전자(BDNF) 등 다양한 비만 유전자를 파악하고 거기에 맞는 맞춤 다이어트를 처방 및 공략한다 하여 일명 ‘유전자 다이어트’라고 불린다.
            </p>
        </div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/img2.jpg" alt="다이어트"></div>
        <div class="txt_box">
            <p>다른 사람이 성공했다고 똑같은 방법으로 다이어트를 시도해 실패하는 이유는 사람마다 유전적 요소가 다른데도 불구하고 똑같은 방법, 똑같은 제품으로 다이어트를 진행하기 때문이다.</p>
            <p class="txt_bold">나에게 맞는 맞춤 다이어트를 진행하는 '피타입스 D.N.A 다이어트'는 전문 닥터가 개발한 다이어트 식품과 다이어트 건강기능식품으로 구성되어 있으며 최적화된 신체 환경 조성으로 굶거나 무리하게 운동을 하지 않아도 DNA에 맞는 다이어트를 처방하고 비만 유전자를 차단해준다.</p>
        </div>
        <div class="img_box"><img src="<?=$AD_DIR?>/images/img3.gif" alt="14.8kg감량"></div>
        <div class="txt_box">
            <p>'피타입스 D.N.A 다이어트' 관계자는 보여주기식 성공 사례만 제공하는 시중 제품과는 다르게 <b class="txt_bg">실제 구매 고객들의 한 달 평균 7kg 이상의 감량 수치를 공개하고 개개인 맞춤별 다이어트로 체계적이고 건강하게 감량</b>을 원하시는 분들께 적극 추천드린다며 자신감을 내비쳤다.</p>
            <p>현재 ‘피타입스 D.N.A 다이어트’는 고객 감사 이벤트로<b class="txt_bg">무료상담 신청만 해도 20% 할인 및 추가 푸짐한 혜택</b>을 제공하고 있다. 고가의 비용 없이, 흘리는 땀 없이, 건강한 다이어트를 원한다면 이 기회를 활용해보는 것을 추천한다.</p>
        </div>
        <div class="img_box img_full"><img src="<?=$AD_DIR?>/images/db_img2.gif" alt="피타입스 특별이벤트 지금 신청하면 20% 할인 특가"></div>
        <div class="db_form_box" id="formBox">
            <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">                  
            <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="">
                <div class="inp_userinfo">
                    <ul class="in">
                        <li class="li_title">이름</li>
                        <li class="li_content">
                            <input type="text" class="wdper80 input" id="mlh_name" name="mlh_name" label="이름" maxlength="10" size="10" autocomplete="off" required="">
                        </li>
                        <li class="li_title">나이</li>
                        <li class="li_content">
                            <input type="number" class="wdper80 input" name="mlh_age" id="mlh_age" label="나이" maxlength="2" size="10" autocomplete="off" required=""> 세
                        </li>
                        <li class="li_title">성별</li>
                        <li class="li_content2">
                            <input type="radio" value="1" id="mlh_gender" name="mlh_gender" class="input" label="성별" required=""><label for="sex0"> 여성</label>
                            <input type="radio" value="2" id="mlh_gender" name="mlh_gender" class="input" label="성별" required=""><label for="sex1"> 남성</label>
                        </li>
                        <li class="li_title">키</li>
                        <li class="li_content">
                            <input type="number" class="wd72" id="q_a" name="q_a" maxlength="3" size="5" onkeyup="if ( isNaN(this.value) ) { alert('숫자만 입력가능합니다.'); this.value=''; }" autocomplete="off" required="">&nbsp;cm
                        </li>
                        <li class="li_title">체중</li>
                        <li class="li_content">
                            <input type="number" class="wd72" id="q_b" name="q_b" maxlength="3" size="5" onkeyup="if ( isNaN(this.value) ) { alert('숫자만 입력가능합니다.'); this.value=''; }" autocomplete="off" required="">&nbsp;kg
                        </li>
                        <li class="li_title" style="padding-right:5px">희망감량</li>
                        <li class="li_content2" >
                            <input type="number" class="wd72"  id="q_c" name="q_c" maxlength="3" size="5" onkeyup="if ( isNaN(this.value) ) { alert('숫자만 입력가능합니다.'); this.value=''; }" autocomplete="off" required="">&nbsp;kg
                        </li>
                        <li class="li_title">휴대폰</li>
                        <li class="li_content2 inp_phone">
                            <select id="mlh_mobileno1" name="mlh_mobileno1">
                                <option value="010">010</option>
                                <option value="011">011</option>
                                <option value="016">016</option>
                                <option value="017">017</option>
                                <option value="018">018</option>
                                <option value="019">019</option>
                            </select>
                            - <input type="tel" class="input" id="mlh_mobileno2" name="mlh_mobileno2" label="연락처" maxlength="4" size="4">
                            - <input type="tel" class="input" id="mlh_mobileno3" name="mlh_mobileno3" label="연락처" maxlength="4" size="4">
                        </li>
                        <li class="li_title" style="padding-right:5px">문의내용</li>
                        <li class="li_content2" >
                            <textarea class="form-class input" rows="5" id="mlh_text" name="mlh_text" label="문의사항" required=""></textarea>
                        </li>
                    </ul>
                </div>
                <div class="sbg_textbox">
                    <label>
                        <input type="checkbox" class="no_publish_item" id="agree" checked="checked"> 개인정보 수집 및 이용동의
                    </label>

                    <button type="submit" class="btn">
                        <img src="<?=$AD_DIR?>/images/btn3.gif" alt="무료상담신청">
                    </button>
                    <table>
                        <tbody>
                            <tr>
                                <th><input type="text" id="r_name"> 고객님 <br>총 <input type="number" id=""> kg 감량 가능합니다.</th>
                            </tr>
                            <tr>
                                <td><span class="info">신청 시 고객님의 체질과 라이프 스타일에 맞춰<br>빠르고 친절하게 상담 해 드리겠습니다.</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php echo form_close(); ?>
        </div>
        <div class="img_box img_full"><img src="<?=$AD_DIR?>/images/footer.gif" alt="footer"></div>
    </div>


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
    
     if($('input:checkbox[id="agree"]').is(":checked")){
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
    } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
     


    
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
    
     if($('input:checkbox[id="agree2"]').is(":checked")){
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
    } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
     


    
    return false;
    
}

function cpaProc(mlh_id,post_md) {
    var href;

    // href = 'http://api.tenping.kr/Query?jid=<?php echo $jid?>&uid=<?php echo $uid?>&at=<?php echo $at?>&key='+post_md+mlh_id;
     
    href = cb_url + '/postact/tenping_query_curl/<?php echo $jid?>/<?php echo $uid?>/<?php echo $at?>/'+post_md+mlh_id;
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
                 url : cb_url + '/media/tpProc/' +mlh_id+'/'+response.responseJSON.ResultCode+'/'+response.responseJSON.Message,
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
    cpaProc(<?php echo $this->session->flashdata('mlh_id') ?>,'<?php echo element('post_md',element('post', $view));?>');
<?php } ?>

//]]>
 </script>
</body>
</html>