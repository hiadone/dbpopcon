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
<html>
<head>
<title>CARIONE RG</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=medium-dpi">
<meta name="apple-mobile-web-app-capable" content="no">
<meta name="robots" content="index,follow">
<meta name="format-detection" content="telephone=no">


<script type="text/javascript">
        function fnMove(){
            var offset = $("#inDB").offset();
            $('html, body').animate({scrollTop : offset.top}, 400);
        }
</script>
<link type="text/css" rel="stylesheet" href="<?=$AD_DIR?>/css/style.css?v=1">
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

</head>
<body>

<footer onclick="fnMove();">
	<img src="<?=$AD_DIR?>/images/scroll_img.png?ver=1.0">
</footer>

<div id="wrap">
	<div class="container" style="width:100%;">
		<?php echo validation_errors('<div class="alert  alert-warning" role="alert">', '</div>'); ?>
        <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
		<section><img src="<?=$AD_DIR?>/images/c01.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c02.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c03.jpg"></section>
		<section id="inDB">		
			<?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">  
                <table>
					<colgroup>
					<col width="28%">
					<col width="72%">
					</colgroup>
					<tr>
							<th>성함</th>
							<td><input type="text"  class="form-class input" id="mlh_name" name="mlh_name" label="성함"></td>
						</tr>
						<tr>
							<th>나이</th>
							<td><input type="text"  class="form-class input" name="mlh_age" id="mlh_age" label="나이" style="display:inline-block;width:35%;">
								<span style="color:#FFFFFF">세</span>
							</td>
						</tr>
						<tr>
							<th>연락처</th>
							<td><input type="tel"  class="form-class input" name="mlh_mobileno" id="mlh_mobileno" label="연락처"></td>
						</tr>
						<tr>
							<th>문의사항</th>
							<td><textarea   class="form-class input" rows="5" id="mlh_text" name="mlh_text" label="문의사항"></textarea></td>
						</tr>
						<tr>
							<td colspan="2">
								<p class="a-center"><input type="checkbox" id="agree" checked> <label for="agree"><span style="color:#FFFFFF">개인정보 수집 및 이용동의</span></label></p>
							</td>
						</tr>
					</tbody>
				</table>
                <p class="a-center">
					<a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><input type="image" img src="<?=$AD_DIR?>/images/btn.jpg" style="max-width: 100%;"></a>
                </p>
				<br>
		</section>
		<?php echo form_close(); ?>

		<section><img src="<?=$AD_DIR?>/images/c04.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c05.jpg"></section>

		<div id="movie">
			<iframe src="https://www.youtube.com/embed/8ZBlyr7NVNY" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
		</div>

		<section><img src="<?=$AD_DIR?>/images/c06.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c07.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c08.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c09.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c10.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/c11.jpg"></section>
		<section><img src="<?=$AD_DIR?>/images/ani.gif"></section>
		<section><img src="<?=$AD_DIR?>/images/c12.jpg"></section>      
        <section id="inDB">		
        	<?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents2(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">  
                <table>
					<colgroup>
					<col width="28%">
					<col width="72%">
					</colgroup>
					<tr>
							<th>성함</th>
							<td><input type="text"  class="form-class input2" id="mlh_name" name="mlh_name" label="성함"></td>
						</tr>
						<tr>
							<th>나이</th>
							<td><input type="text"  class="form-class input2" name="mlh_age" id="mlh_age" label="나이" style="display:inline-block;width:35%;">
								<span style="color:#FFFFFF">세</span>
							</td>
						</tr>
						<tr>
							<th>연락처</th>
							<td><input type="tel"  class="form-class input2" name="mlh_mobileno" id="mlh_mobileno" label="연락처"></td>
						</tr>
						<tr>
							<th>문의사항</th>
							<td><textarea   class="form-class input2" rows="5" id="mlh_text" name="mlh_text" label="문의사항"></textarea></td>
						</tr>
						<tr>
							<td colspan="2">
								<p class="a-center"><input type="checkbox" id="agree2" checked> <label for="agree2"><span style="color:#FFFFFF">개인정보 수집 및 이용동의</span></label></p>
							</td>
						</tr>
					</tbody>
				</table>
                <p class="a-center"><a name="mem_tenping" data-post_id="<?php echo element('post_id',element('post', $view));?>" id="btn_tenping"><input type="image" img src="<?=$AD_DIR?>/images/btn.jpg" style="max-width: 100%;"></a></p>
				<br>
				<?php echo form_close(); ?>
		</section>

		
		<div class="clear blank50"></div>
	</div>
    <div class="blank50"></div>
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
                // $("#mlh_mobileno").val($("#mlh_mobileno1").val()+$("#mlh_mobileno2").val()+$("#mlh_mobileno3").val());
                
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