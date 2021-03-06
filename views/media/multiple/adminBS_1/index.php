<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/preloader.min.css'); ?>" />
<?php
$this->managelayout->add_js('https://www.leadtracker.live/static/js/fixel.js'); 
    $ad_dir  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['jid'])) $jid=$_GET['jid'];
    $uid=0;
    if(!empty($_GET['uid'])) $uid=$_GET['uid'];
    $at=0;
    if(!empty($_GET['at'])) $at=$_GET['at'];

?>




    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>쏘팔메토</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            line-height: 1;
        }

        body {
            min-width: 320px;
            font-family: 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        td,
        th {
            vertical-align: top;
        }

        a {
            text-decoration: none;
        }

        .blind {
            width: 1px;
            height: 1px;
            position: absolute;
            overflow: hidden;
            clip: rect(1px 1px 1px 1px);
            clip: rect(1px, 1px, 1px, 1px);
        }

        .wrap {
            width: 100%;
            max-width: 730px;
            margin: 0 auto;
        }

        .img_box {
            font-size: 0;
        }

        .img_box .img {
            width: 100%;
            font-size: 13px;
        }

        .btn_submit {
            display: block;
            border: none;
            background-color: transparent;
            padding: 0;
            margin: 0;
        }

        .form_container {
            padding-top: 3.4246%;
            background-image: url('<?php echo $ad_dir ?>/images/66.jpg');
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: center top;
            background-color: #afafaf;
        }

        .lab_box {
            width: 30.1369%;
        }

        .label {
            display: block;
            width: 100%;
            height: 5.0684vw;
            max-height: 37px;
        }

        .inp_box {
            width: 69.8631%;
            padding-bottom: 1.3698%;
        }

        .inp {
            box-sizing: border-box;
            border: none;
            background-color: #ffffff;
            font-size: 15px;
            font-family: 'Apple SD Gothic Neo', 'Malgun Gothic', arial, sans-serif;
            line-height: 1.4;
        }

        .inp_name,
        .inp_age,
        .inp_tel {
            height: 5.0684vw;
            max-height: 37px;
            padding: 1px 0;
        }

        .inp_name,
        .inp_age {
            width: 66.6667%;
        }

        .inp_tel {
            width: 19.6078%;
        }

        .inp_textarea {
            width: 66.6667%;
            height: 7.3972vw;
            max-height: 54px;
        }

        .checkarea {
            text-align: center;
            font-size: 14px;
        }

        .inp_check {
            vertical-align: middle;
        }

        .txt_info {
            color: #d00;
            font-weight: bold;
            font-size: 14px;
            text-align: center;
            padding: 2% 0;
        }

        @media screen and (max-width: 500px) {
            .form_container {
                background-size: 120%;
            }

            .lab_box {
                width: 26%;
            }

            .inp_box {
                width: 74%;
                padding-bottom: 2%;
            }

            .inp_name,
            .inp_age,
            .inp_tel {
                height: 6.3vw;
            }

            .inp_name,
            .inp_age,
            .inp_textarea {
                width: 81.55%;
            }

            .inp_tel {
                width: 25%;
            }

            .inp_textarea {
                height: 10vw;
            }
        }

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
    <div class="wrap">
        <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
    <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/a.jpg" alt="쏘팔메토 남자의 건강한 전립선을 위해" class="img"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/b.jpg" alt="b.jpg" class="img"></div>
        <div class="img_box"><a href="#dbform"><img src="<?php echo $ad_dir ?>/images/btn1.jpg" alt="무료체험 신청하기" class="img"></a></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/c.jpg" alt="c.jpg" class="img"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/d.jpg" alt="d.jpg" class="img"></div>
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/e.jpg" alt="e.jpg" class="img"></div>

        <!-- form -->
        <div class="form_container" id="dbform">
             <?php
        $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
        echo form_open(current_full_url(), $attributes);
        ?>
        <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="<?php  echo current_full_url()?>">
                <table>
                    <tbody>
                        <tr>
                            <th class="lab_box"><label for="mlh_name" class="label"><span
                                        class="blind">이름</span></label></th>
                            <td class="inp_box"><input type="text" class="inp inp_name" name="mlh_name" id="mlh_name"
                                    label="이름"></td>
                        </tr>
                        <tr>
                            <th class="lab_box"><label for="mlh_age" class="label"><span class="blind">나이</span></label>
                            </th>
                            <td class="inp_box"><input type="tel" class="inp inp_age" id="mlh_age" name="mlh_age" maxlength="2"
                                    label="나이"></td>
                        </tr>
                        <tr>
                            <th class="lab_box"><label for="mobileno" class="label"><span
                                        class="blind">연락처</span></label></th>
                            <td class="inp_box">
                                <input type="tel" class="inp inp_tel" name="mlh_mobileno1" id="mlh_mobileno1" maxlength="3"
                                    label="연락처">
                                <input type="tel" class="inp inp_tel" name="mlh_mobileno2" id="mlh_mobileno2" maxlength="4"
                                    label="연락처">
                                <input type="tel" class="inp inp_tel" name="mlh_mobileno3" id="mlh_mobileno3" maxlength="4"
                                    label="연락처">
                            </td>
                        </tr>
                        <tr>
                            <th class="lab_box"><label for="mlh_text" class="label"><span
                                        class="blind">문의</span></label></th>
                            <td class="inp_box"><textarea class="inp inp_textarea" name="mlh_text" id="mlh_text" label="문의"></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="" style="color:red;font-family: bold;font-size:15px;text-align:center;margin-bottom:20px;">
                <?php 
                $comment='';
                if(!empty(element('campaign_age',element('extravars',element('post', $view)))) || element('campaign_gender',element('extravars',element('post', $view))) !=='제한없음'){
                    $campaign_age = explode("~",element('campaign_age',element('extravars',element('post', $view))));

                    $campaign_age[0]=trim($campaign_age[0]);
                    $campaign_age[1]=trim($campaign_age[1]);

                    if(!empty($campaign_age[0])) $comment=$campaign_age[0].'세 이상 ';
                    if(!empty($campaign_age[1])) $comment.=$campaign_age[1].'세 이하 ';
                    if(element('campaign_gender',element('extravars',element('post', $view))) === '남성' || element('campaign_gender',element('extravars',element('post', $view))) === '여성' ) $comment.=element('campaign_gender',element('extravars',element('post', $view)));

                    $comment .='만 참여 가능합니다.';

                    echo $comment;
                }
                    
                ?>
                </div>
                <!-- <div class="txt_info">
                    35세 이상 80세 이하 만 참여 가능합니다.
                </div> -->
                <!-- <div class="checkarea">
                    <input type="checkbox" name="" id="agree" class="inp_check">
                    <label for="agree" class="lab_check">개인정보 수집 및 이용동의</label>
                </div> -->
                <div class="btn_box"><button type="submit" class="btn_submit img_box"><img src="<?php echo $ad_dir ?>/images/btn22.jpg"
                            alt="30일 무료체험 신청하기" class="img"></button></div>
            <?php echo form_close(); ?>
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
function submitContents(f) {

    var flag=false;
    var href;

    $('.inp').each(function(){
         if( ! jQuery.trim($(this).val()) ) {
            alert($(this).attr('label') + '을 입력해 주세요');
            $(this).focus();
            flag=false;
            return false;
        } else flag=true;
    });

    if(!flag) return false;
    
     // if($('input:checkbox[id="agree"]').is(":checked")){
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
    // } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
     


    
    return false;
}



<?php if($this->session->flashdata('mlh_id')){?>    
    _link_postBack('<?php echo $this->session->flashdata('mlh_name') ?>','<?php echo $this->session->flashdata('mlh_mobileno') ?>','<?php echo $this->session->flashdata('mlh_age') ?>','<?php echo $this->session->flashdata('mlh_text') ?>');
    $('.loading').hide();
<?php } ?>
</script>


</html>