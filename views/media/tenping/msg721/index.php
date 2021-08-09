<?php 
	
	$this->managelayout->add_meta('<meta http-equiv="Content-Type" content="text/html; charset=utf-8">'); 
	$this->managelayout->add_meta('<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">'); 
	$this->managelayout->add_meta('<meta name="apple-mobile-web-app-capable" content="no">'); 

	$this->managelayout->add_meta('<meta name="robots" content="index,follow">'); 
	$this->managelayout->add_meta('<meta name="format-detection" content="telephone=no">'); 
	

	$this->managelayout->add_css(base_url('assets/css/preloader.min.css')); 
	$this->managelayout->add_css(element('view_skin_url', $layout)."/css/client.css"); 
	

	    

    $AD_DIR  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['adpot_cid'])) $jid=$_GET['adpot_cid'];
    $uid=0;
    if(!empty($_GET['uid'])) $uid=$_GET['uid'];
    $at=0;
    if(!empty($_GET['at'])) $at=$_GET['at'];


	
	
?>

<title>모리솔브 골드</title>
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



<div id="view-app">
	<?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
    <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
<p><img src="<?=$AD_DIR?>/images/c01.jpg"></p>
<p><img src="<?=$AD_DIR?>/images/c02.jpg"></p>
<p><img src="<?=$AD_DIR?>/images/c03.jpg"></p>
<p><span style="font-size: 16px;"></span></p><div class="form-preset" style="background-color:#292929"><div class="form-header"><h6></h6></div>

<?php
	$attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
	echo form_open(current_full_url(), $attributes);
	?>
	<input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
	<input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
	<input type="hidden" name="jid" value="<?php echo $jid?>">	
	<input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="">
<table><tbody>

	
<tr>
<th>이름</th><td><input name="mlh_name" id="mlh_name" class="form-control input" label="이름"  type="text" placeholder="이름을 입력해주세요" autocomplete="off" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>"></td></tr>
<tr>
<th>나이</th>
<td><input name="mlh_age" id="mlh_age" class="form-control input" label="나이"  type="number" maxlength="3" placeholder="나이를 입력해주세요" autocomplete="off" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>" ></td></tr>
<tr>
<th>연락처</th>
<td><div class="input-group input-group-justified"><div class="input-group">
<select name="mlh_mobileno1" id="mlh_mobileno1" class="form-control input" label="연락처">
<option <?php echo set_select('mlh_mobileno1','010',true); ?>>010</option>
<option <?php echo set_select('mlh_mobileno1', '011'); ?> >011</option>
<option value="016">016</option>
<option value="017">017</option>
<option value="018">018</option>
<option value="019">019</option>
</select>
</div>
<div class="input-group">
<input name="mlh_mobileno2" id="mlh_mobileno2" class="form-control input" label="연락처" value="<?php echo set_value('mlh_mobileno2', element('mlh_mobileno2', element('post', $view))); ?>" type="number" maxlength="4" autocomplete="off"></div>
<div class="input-group"><input name="mlh_mobileno3" id="mlh_mobileno3" class="form-control input" label="연락처" value="<?php echo set_value('mlh_mobileno2', element('mlh_mobileno2', element('post', $view))); ?>" type="number" maxlength="4" autocomplete="off"></div></div></td>
</tr>
<tr><th>문의사항</th>
<td><textarea name="mlh_text" id="mlh_text" required="required" class="form-control input" label="문의사항" placeholder="문의사항을 입력해주세요" rows="5" autocomplete="off"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?> </textarea></td>
</tr>
</tbody></table>

<div class="form-footer"><div class="btn-agree">
<label><input type="checkbox" name="agreement" id="agree" style="margin-right:4px;" required="" checked=""><span style="color:#fff;">개인정보수집 정책에 동의합니다.</span></label> <a href="#" class="btn-show">[내용 보기]</a></div>
<div class="agreement"><h3>개인정보수집정책</h3><ol><li>개인정보 수집 및 이용</li><li>개인정보 수집항목 : 이름, 성별, 연락처, 내용</li><li>개인정보 수집 및 이용목적 : 상담 활용 (전화, 문자)</li><li>개인정보 보유 및 이용기간 : 수집일로부터 6개월 (고객 동의 철회시 지체없이 파기)</li><li>상기 동의를 거부할 권리가 있으나, 수집 및 이용에 동의하지 않을 경우 상담 안내 및 이벤트 참여가 불가능 합니다.</li></ol></div>


<div class="agreement2"><h3>광고성 수신 동의</h3><ol><li>이용목적</li><li>- 상품, 서비스의 판매, 정보제공, 홍보, 가입권유 활동(쿠폰발송 등 판촉광고포함), 리서치(고객설문/시장조사 및 고객만족도, 조사), 제반 이벤트/프로모션 활동(사은행사, 판촉행사 등), 상품/서비스에 대한 이용실적 정보 및 활용</li><li>* 전자우편(E-mail) / 우편물(DM) / 문자(SMS, LMS, MMS) / 대면접촉/텔레마케팅(전화) , 메신저(카카오톡, 라인 등), 우편 등의 방법을 통해 정보 정송</li></ol><ol><li>수집항목</li><li>- 이용자 등의 성명 , 암호화된 동일 인식별정보(CI), 성별, 주소(집/회사), 연락처(휴대전화번호, 유선전화번호), 이메일 주소, 서비스 이용과정에서 발생한 상품 또는 서비스 구매 내역, 접속기록</li></ol><ol><li>보유기간</li><li>- 이용자 등의 개인정보는 서비스 운영기간 동안 보유, 이용되며 , 광고성 정보 등을 제공 받는 일에 거부하는 의사를 밝힐 경우 지체 없이 파기합니다.</li></ol></div>

<div class="btn-submit"><button type="submit"><img src="<?=$AD_DIR?>/images/btn.jpg" style="vertical-align: middle; width: 100%; height: auto;"></button>
</div></div></div>
<?php echo form_close(); ?>

<p><img src="<?=$AD_DIR?>/images/c04.jpg"></p>
<p><img src="<?=$AD_DIR?>/images/c05.jpg"></p>
<p><img src="<?=$AD_DIR?>/images/c06.jpg"></p>
<p><span style="font-size: 16px;"></span></p><div class="form-preset" style="background-color:#292929"><div class="form-header"><h6></h6></div>
<?php
	$attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite_', 'onSubmit' => 'return submitContents_(this)');
	echo form_open(current_full_url(), $attributes);
	?>
	<input type="hidden" name="post_id" id="post_id_" value="<?php echo element('post_id',element('post', $view));?>">
	<input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
	<input type="hidden" name="jid" value="<?php echo $jid?>">	
	<input type="hidden" name="mlh_mobileno" id="mlh_mobileno_" value="">

<table><tbody><tr><th>이름</th><td><input name="mlh_name" id="mlh_name_" class="form-control input_" label="이름" type="text" placeholder="이름을 입력해주세요" autocomplete="off" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>"></td></tr>
<tr><th>나이</th><td><input name="mlh_age" id="mlh_age_" class="form-control input_" label="나이"  type="number" maxlength="3" placeholder="나이를 입력해주세요" autocomplete="off"  value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>"></td></tr>
<tr><th>연락처</th><td><div class="input-group input-group-justified"><div class="input-group">
<select name="mlh_mobileno1" id="mlh_mobileno1_" class="form-control input_" label="연락처" >
	<option <?php echo set_select('mlh_mobileno1','010',true); ?>>010</option>
	<option <?php echo set_select('mlh_mobileno1', '011'); ?> >011</option>

<option value="016">016</option><option value="017">017</option><option value="018">018</option><option value="019">019</option>
</select>
</div>
<div class="input-group"><input name="mlh_mobileno2" id="mlh_mobileno2_" class="form-control input_" label="연락처"  type="number" maxlength="4" autocomplete="off"  value="<?php echo set_value('mlh_mobileno2', element('mlh_mobileno2', element('post', $view))); ?>" ></div>
<div class="input-group"><input name="mlh_mobileno3" id="mlh_mobileno3_" class="form-control input_" label="연락처"  type="number" maxlength="4" autocomplete="off"  value="<?php echo set_value('mlh_mobileno3', element('mlh_mobileno3', element('post', $view))); ?>"></div>
</div></td></tr>
<tr><th>문의사항</th><td><textarea name="mlh_text" id="mlh_text_" required="required" class="form-control input_" label="문의사항" placeholder="문의사항을 입력해주세요" rows="5" autocomplete="off"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea></td></tr></tbody>
</table>

<div class="form-footer"><div class="btn-agree"><label><input type="checkbox" id="agree_" name="agreement" style="margin-right:4px;" required="" checked=""><span style="color:#fff;">개인정보수집 정책에 동의합니다.</span></label> <a href="https://www.ysad.co.kr/ad/6ecebc549b7826f313f20713eef6aff3#" class="btn-show">[내용 보기]</a></div>

<div class="agreement"><h3>개인정보수집정책</h3><ol><li>개인정보 수집 및 이용</li><li>개인정보 수집항목 : 이름, 성별, 연락처, 내용</li><li>개인정보 수집 및 이용목적 : 상담 활용 (전화, 문자)</li><li>개인정보 보유 및 이용기간 : 수집일로부터 6개월 (고객 동의 철회시 지체없이 파기)</li><li>상기 동의를 거부할 권리가 있으나, 수집 및 이용에 동의하지 않을 경우 상담 안내 및 이벤트 참여가 불가능 합니다.</li></ol></div>


<div class="agreement2"><h3>광고성 수신 동의</h3><ol><li>이용목적</li><li>- 상품, 서비스의 판매, 정보제공, 홍보, 가입권유 활동(쿠폰발송 등 판촉광고포함), 리서치(고객설문/시장조사 및 고객만족도, 조사), 제반 이벤트/프로모션 활동(사은행사, 판촉행사 등), 상품/서비스에 대한 이용실적 정보 및 활용</li><li>* 전자우편(E-mail) / 우편물(DM) / 문자(SMS, LMS, MMS) / 대면접촉/텔레마케팅(전화) , 메신저(카카오톡, 라인 등), 우편 등의 방법을 통해 정보 정송</li></ol><ol><li>수집항목</li><li>- 이용자 등의 성명 , 암호화된 동일 인식별정보(CI), 성별, 주소(집/회사), 연락처(휴대전화번호, 유선전화번호), 이메일 주소, 서비스 이용과정에서 발생한 상품 또는 서비스 구매 내역, 접속기록</li></ol><ol><li>보유기간</li><li>- 이용자 등의 개인정보는 서비스 운영기간 동안 보유, 이용되며 , 광고성 정보 등을 제공 받는 일에 거부하는 의사를 밝힐 경우 지체 없이 파기합니다.</li></ol></div>

<div class="btn-submit"><button type="submit"><img src="<?=$AD_DIR?>/images/btn.jpg" style="vertical-align: middle; width: 100%; height: auto;"></button>
</div></div></div>
<?php echo form_close(); ?>
<p><img src="<?=$AD_DIR?>/images/footer.jpg"></p>
</div>
<div class="loading" style="<?php echo empty($this->session->flashdata('mlh_id')) ? 'display:none;' : ''; ?> ">
    <div class="dot_container" >
        <div class="dot dot01"></div>
        <div class="dot dot02"></div>
        <div class="dot dot03"></div>
    </div>
</div>   


<script type="text/javascript">
$(document).on('click', '.btn-agree .btn-show', function(event) {
  event.preventDefault();
  $('.agreement').css({'display': 'block'});
});

$(document).on('click', '.btn-agree2 .btn-show', function(event) {
  event.preventDefault();
  $('.agreement2').css({'display': 'block'});
});

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

    if($('input[id="agree"]').is(":checked")){
         $('.loading').show();
        href = cb_url + '/postact/media_click/' + $('#post_id').val() ;

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
    } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
    
    return false;
}

function submitContents_(f) {

    var flag=false;
    var href;

    

    $('.input_').each(function(){
        if( ! jQuery.trim($(this).val()) ) {
            alert(getPostWord($(this).attr('label'),'을','를') + '입력해 주세요');
            $(this).focus();
            flag=false;
            return false;
        } else flag=true;
    });

    if(!flag) return false;

    if($('input[id="agree_"]').is(":checked")){
         $('.loading').show();
        href = cb_url + '/postact/media_click/' + $('#post_id_').val() ;

        $.ajax({
            async : false,
            url : href,
            type : 'get',
            dataType : 'json',
            complete : function(data) {
                $("#mlh_mobileno_").val($("#mlh_mobileno1_").val()+$("#mlh_mobileno2_").val()+$("#mlh_mobileno3_").val());
                
            }
        });

        

        return flag;
    } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
    
    return false;
}


<?php if($this->session->flashdata('mlh_id')){?>        
        $('.loading').hide();
<?php } ?>	
	
</script>
</body>
</html>