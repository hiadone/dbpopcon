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
<!DOCTYPE HTML>
<html lang="ko">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <META name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
  <meta name="Description" content="">
  <meta name="robots" content="index,follow">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Expires" content="-1">

  <title>λΉνμ</title>
  
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" type="text/css" href="<?=$AD_DIR?>/css/style.css"/>

  <style>
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
  

  <script type="text/javascript">
	$(function () {
		$('#scrollToBottom').bind("click", function () {
			$('html, body').animate({ scrollTop: $(document).height() }, 500);
			return false;
		});
	});
	</script>
</head>

<body>
	<div class="container">
		<?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
		<section><img src="<?=$AD_DIR?>/images/c01.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c02.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c03.jpg"></section>
		<section class="inDB" id="inDB">
			<?php
                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
                echo form_open_multipart(current_full_url(), $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
                <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
                <input type="hidden" name="jid" value="<?php echo $jid?>">  
			<p><img src="<?=$AD_DIR?>/images/db_top.jpg"></p>
			<div class="inbox">
				<table>
					<colgroup>
						<col width="">
						<col width="">
					</colgroup>
					<tbody>
						<tr>
							<th>μ΄λ¦</th>
							<td><input type="text" class="form-class input" id="mlh_name" name="mlh_name" label="μ΄λ¦"></td>
						</tr>
						<tr>
							<th>λμ΄</th>
							<td><input type="number" class="form-class input" name="mlh_age" id="mlh_age" label="λμ΄" style="width:50%; float:left;"> <label style="position:relative;float:left; top:10px; left:10px;">μΈ</label></td>
						</tr>
						<tr>
							<th>μ°λ½μ²</th>
							<td><input type="tel" class="form-class input" id="mlh_mobileno" name="mlh_mobileno" label="μ°λ½μ²"></td>
						</tr>
						<tr>
                        <th>μ§λ¬Έμ¬ν­</th>
                        <td><div>Q.μ΄λ€ μ¦μμΌλ‘ μλ΄μ μνμ­λκΉ?</div>
                            <input type="radio" class="input" id="q_a_1"  name="q_a" value="1" checked>
                            <label for="q_a_1" class="mr20">νλΉ</label>
                            <input type="radio" class="input" id="q_a_2"  name="q_a" value="2">
                            <label for="q_a_2" class="mr20">νμ</label><br>
                            <input type="radio" class="input" id="q_a_3"  name="q_a" value="3">
                            <label for="q_a_3" class="mr20">νν</label>
                            <input type="radio" class="input" id="q_a_4"  name="q_a" value="4">
                            <label for="q_a_4" class="mr20">μ½λ μ€νΈλ‘€</label>
                            <div style="margin-top: 5px">Q.λ³μμΉλ£λ λ°μλ³΄μ¨λμ?</div>
                            <input type="radio" class="input" id="q_b_1"  name="q_b" value="1" checked>
                            <label for="q_b_1" class="mr20">μ</label>
                            <input type="radio" class="input" id="q_b_2"  name="q_b" value="2">
                            <label for="q_b_2" class="mr20">μλμ€</label>
                            
                            <div style="margin-top: 5px">Q.νμ¬ λ³΅μ©νκ³  κ³μκ±°λ λ³΄μ‘°μ λ‘ μ΄μ©νμ  μ νμ΄ μμΌμ­λκΉ?</div>
                             <input type="radio" class="input" id="q_c_1"  name="q_c" value="1" checked>
                            <label for="q_c_1" class="mr20">μ</label>
                            <input type="radio" class="input" id="q_c_2"  name="q_c" value="2">
                            <label for="q_c_2" class="mr20">μλμ€</label>
                    </tr>

						<tr>
							<th>λ¬Έμμ¬ν­</th>
							<td>
								<textarea class="form-class input" rows="5" id="mlh_text" name="mlh_text" label="λ¬Έμμ¬ν­"></textarea>
							</td>
						</tr>
						<tr>
							<td colspan="2" class="t-center">
								<div class="checkbox">
									<input type="checkbox" name="" id="agree" checked> <label for="agree">κ°μΈμ λ³΄ μμ§ λ° μ΄μ©λμ</label>
								</div>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><input type="image" img src="<?=$AD_DIR?>/images/btn1.jpg" style="max-width: 100%;"></a>
							</td>
						</tr>
					</tbody>
				</table>
				<?php echo form_close(); ?>
				<em>μ§μ  λμλ³΄μλ©΄ μλλ€. μ²΄ν ν κ²°μ νμΈμ!</em>
			</div>
		</section>
		<section><img src="<?=$AD_DIR?>/images/c04.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c05.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c06.jpg"></section>
		<section class="inDB">
			<?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite2', 'onSubmit' => 'return submitContents2(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">
			<table>
				<colgroup>
					<col width="">
					<col width="">
				</colgroup>
				<tbody>
					<tr>
						<th>μ΄λ¦</th>
						<td><input type="text" class="form-class input2" id="mlh_name" name="mlh_name" label="μ΄λ¦"></td>
					</tr>
					<tr>
						<th>λμ΄</th>
						<td><input type="number" class="form-class input2" name="mlh_age" id="mlh_age" label="λμ΄" style="width:50%; float:left;"> <label style="position:relative;float:left; top:10px; left:10px;">μΈ</label></td>
					</tr>
					<tr>
						<th>μ°λ½μ²</th>
						<td><input type="tel" class="form-class input2" name="mlh_mobileno" id="mlh_mobileno" label="ν΄λμ ν"></td>
					</tr>
					<tr>
                        <th>μ§λ¬Έμ¬ν­</th>
                        <td><div>Q.μ΄λ€ μ¦μμΌλ‘ μλ΄μ μνμ­λκΉ?</div>
                            <input type="radio" class="input2" id="q_a_1"  name="q_a" value="1" checked>
                            <label for="q_a_1" class="mr20">νλΉ</label>
                            <input type="radio" class="input2" id="q_a_2"  name="q_a" value="2">
                            <label for="q_a_2" class="mr20">νμ</label><br>
                            <input type="radio" class="input2" id="q_a_3"  name="q_a" value="3">
                            <label for="q_a_3" class="mr20">νν</label>
                            <input type="radio" class="input2" id="q_a_4"  name="q_a" value="4">
                            <label for="q_a_4" class="mr20">μ½λ μ€νΈλ‘€</label>
                            <div style="margin-top: 5px">Q.λ³μμΉλ£λ λ°μλ³΄μ¨λμ?</div>
                            <input type="radio" class="input2" id="q_b_1"  name="q_b" value="1" checked>
                            <label for="q_b_1" class="mr20">μ</label>
                            <input type="radio" class="input2" id="q_b_2"  name="q_b" value="2">
                            <label for="q_b_2" class="mr20">μλμ€</label>
                            
                            <div style="margin-top: 5px">Q.νμ¬ λ³΅μ©νκ³  κ³μκ±°λ λ³΄μ‘°μ λ‘ μ΄μ©νμ  μ νμ΄ μμΌμ­λκΉ?</div>
                             <input type="radio" class="input2" id="q_c_1"  name="q_c" value="1" checked>
                            <label for="q_c_1" class="mr20">μ</label>
                            <input type="radio" class="input2" id="q_c_2"  name="q_c" value="2">
                            <label for="q_c_2" class="mr20">μλμ€</label>
                    </tr>
					<tr>
						<th>λ¬Έμμ¬ν­</th>
						<td>
							<textarea class="form-class input2" rows="5" id="mlh_text" name="mlh_text" label="λ¬Έμμ¬ν­"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="t-center">
							<div class="checkbox">
								<input type="checkbox" name="" id="agree2" checked> <label for="agree2">κ°μΈμ λ³΄ μμ§ λ° μ΄μ©λμ</label>
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="t-center" style="padding:15px 10px;">
							<a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><input type="image" img src="<?=$AD_DIR?>/images/btn2.jpg" style="max-width: 100%;"></a>
						</td>
					</tr>
				</tbody>
			</table>
			<?php echo form_close(); ?>
		</section>
		<section><a href="tel:070-4327-8035"><img src="<?=$AD_DIR?>/images/end.jpg"></a></section>

	</div>


<script type="text/javascript">
//<![CDATA[
function submitContents(f) {
    var flag=false;
    var href;


    $('.input').each(function(){
         if( ! jQuery.trim($(this).val()) ) {
            alert($(this).attr('label') + 'μ μλ ₯ν΄ μ£ΌμΈμ');
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
                // $("#mlh_mobileno").val($("#mlh_mobileno1").val()+$("#mlh_mobileno2").val()+$("#mlh_mobileno3").val());
                
            }
        });

        return flag;
    } else alert('κ°μΈμ λ³΄ μμ§ λ° μ΄μ©λμλ₯Ό μ²΄ν¬ ν΄μ£ΌμκΈ° λ°λλλ€.');
     


    
    return false;
    
}

function submitContents2(f) {
    var flag=false;
    var href;


    $('.input2').each(function(){
         if( ! jQuery.trim($(this).val()) ) {
            alert($(this).attr('label') + 'μ μλ ₯ν΄ μ£ΌμΈμ');
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
    } else alert('κ°μΈμ λ³΄ μμ§ λ° μ΄μ©λμλ₯Ό μ²΄ν¬ ν΄μ£ΌμκΈ° λ°λλλ€.');
     


    
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