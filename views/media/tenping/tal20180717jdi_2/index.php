<?php 

$this->managelayout->add_meta('<meta name="viewport" content="width=device-width, initial-scale=1.0">'); 

$this->managelayout->add_css(base_url('assets/css/preloader.min.css')); 
$this->managelayout->add_css("https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@1.0/nanumsquare.css"); 



    $ad_dir  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['jid'])) $jid=$_GET['jid'];
    $uid=0;
    if(!empty($_GET['uid'])) $uid=$_GET['uid'];
    $at=0;
    if(!empty($_GET['at'])) $at=$_GET['at'];

?>    


    
    <title>iNGR</title>

    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body,
        html{
            width: 100%;
            max-width: 730px; 
            margin: 0 auto;
        }
        .hidden{
            width:1px;
            height:1px;
            position:absolute;
            overflow:hidden;
            clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
            clip: rect(1px, 1px, 1px, 1px);
        }
        .img_box{
            font-size: 0;
        }
        .img_box img{
            width: 100%;
        }
        [class*="form_db"] button[type="submit"] {
            display: block;
            padding: 0;
            margin: 0 auto;
            background-color: transparent;
            border: none;
            font-size: 0;
        }
        .form_db01 {
            padding-bottom: 5%;
            background-color: #fe6e6d;
            font-family: 'Nanum Gothic', sans-serif;
        }
        .form_db01 .inp_box {
            width: 95%;
            margin: 0 auto 5%;
            padding: 4% 2%;
            box-sizing: border-box;
            background-color: #fff;
        }
        .form_db01 .inp_list {
            overflow: hidden;
        }
        .form_db01 .lab,
        .form_db01 .inp {
            height: 40px;
            margin-bottom: 5%;
        }
        .form_db01 .lab {
            width: 20%;
            font-size: 20px;
            line-height: 40px;
            float: left;
        }
        .form_db01 .inp {
            width: 80%;
            float: right;
        }
        .form_db01 .inp_txt{
            height: 15vw;
            min-height: 60px;
            max-height: 80px;
            margin-bottom: 0;
        }
        .form_db01 .inp input,
        .form_db01 .inp textarea{
            box-sizing: border-box;
            font-size: 16px;
            border: 1px solid #5b5b5b;
            text-indent: 5px;
        }
        .form_db01 .inp_name input{
            width: 100%;
            height: 100%;
        }
        .form_db01 .inp_age input {
            width: 56%;
            height: 100%;
        }
        .form_db01 .inp_tel input{
            width: calc(33% - 10px);
            height: 100%;
        }
        .form_db01 .inp_txt textarea{
            width: 100%;
            height: 100%;
        }
        .form_db01 button[type="submit"] {
            width: 90%;
            box-sizing: border-box;
            padding: 2% 0;
            background-color: #fcff00;
            border-radius: 80px;
        }
        .form_db01 button[type="submit"] img{
            max-width: 75%;
        }
        .form_db02 {
            font-family: 'Nanum Gothic', sans-serif;
        }
        .form_db02 .inp_box{
            width: 95%;
            padding: 3% 8%;
            box-sizing: border-box;
            margin: 0 auto 6%;
            border: 1px solid #000;
            background: #fff url(<?php echo $ad_dir ?>/images/back.png) no-repeat center top;
            background-size: cover;
        }
        .form_db02 .form_tit,
        .form_db02 .form_txt {
            text-align: center;
            font-weight: normal;
        }
        .form_db02 .form_tit{
            font-size: 20px;
            margin-bottom: 5%;
        }
        .form_db02 .form_txt{
            font-size: 15px;
            margin-bottom: 5%;
        }
        .form_db02 .inp_list {
            overflow: hidden;
        }
        .form_db02 .lab,
        .form_db02 .inp{
            height: 50px;
            margin-bottom: 3%;
        }
        .form_db02 .lab {
            width: 20%;
            float: left;
            font-size: 22px;
            line-height: 50px;
        }
        .form_db02 .inp{
            width: 80%;
            float: right;
        }
        .form_db02 .inp input,
        .form_db02 .inp textarea {
            font-size: 16px;
            border: 1px solid #000; 
            box-shadow: inset 3px 3px 5px rgba(0,0,0,0.1);
            box-sizing: border-box;
            padding: 5px;
        }
        .form_db02 .inp input{
            height: 100%;
            box-sizing: border-box;
        }
        .form_db02 .inp_name input ,
        .form_db02 .inp_age input {
            width: 56%;
        }
        .form_db02 .inp_tel input {
            width: calc(33% - 10px);
        }
        .form_db02 .inp_txt {
            height: 20vw;
            min-height: 100px;
            max-height: 147px;
        }
        .form_db02 .inp_txt textarea {
            width: 100%;
            height: 100%;
        }
        .form_db02 button[type="submit"]{
            max-width: 86%;
            margin-bottom: 6%;
        }
        .form_db02 button[type="submit"] img{
            width: 100%;
        }
        /* media */
        @media screen and (max-width: 600px) and (min-width: 431px){
            .form_db01 .lab {
                font-size: 18px;
            }
            /* */
            .form_db02 .inp_box{
                padding: 3% 6%;
            }
            .form_db02 .form_tit{
                font-size: 18px;
            }
            .form_db02 .form_txt{
                font-size: 13px;
            }
            .form_db02 .lab,
            .form_db02 .inp{
                height: 40px;
                margin-bottom: 4%;
            }
            .form_db02 .lab {
                font-size: 18px;
                line-height: 40px;
            }
            .form_db02 .inp_txt {
                height: 20vw;
                min-height: 100px;
                max-height: 147px;
            }
        /* == */
        }
        @media screen and (max-width: 430px) and (min-width: 5px){
            .form_db01 .lab {
                width: 25%;
                font-size: 16px;
            }
            .form_db01 .inp {
                width: 75%;
            }
            /* */
            .form_db02 .inp_box{
                padding: 3%;
            }
            .form_db02 .form_tit{
                font-size: 18px;
            }
            .form_db02 .form_txt{
                font-size: 12px;
            }
            .form_db02 .lab,
            .form_db02 .inp{
                height: 40px;
                margin-bottom: 4%;
            }
            .form_db02 .lab {
                width: 25%;
                font-size: 16px;
                line-height: 40px;
            }
            .form_db02 .inp{
                width: 75%;
            }
            .form_db02 .inp_txt {
                height: 20vw;
                min-height: 100px;
                max-height: 147px;
            }
            .form_db02 .inp_name input ,
            .form_db02 .inp_age input {
                width: 70%;
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

           
        /* == */    
        }

        .autowrap { margin:0 auto 15px; }
        .autosize { position:relative; height: 0; padding-bottom: 56.25%; overflow: hidden; margin:0; }
        .autosize iframe, .autosize object, .autosize embed { position: absolute; top: 0; left: 0; width: 100%; height:100%; }
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
    <?php echo validation_errors('<div class="alert alert-auto-close alert-warning" role="alert">', '</div>'); ?>
    <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
    <div class="img_box">
        <img src="<?php echo $ad_dir ?>/images/tal_01.png" alt="??????????????????????????? ??????????????? ?????? ????????????">
        <img src="<?php echo $ad_dir ?>/images/tal_02.png" alt="????????????????????? ??????, 4?????? ?????? ??????">
        <img src="<?php echo $ad_dir ?>/images/tal_03.png" alt="4??? ????????? ?????? ?????? ?????? ??????">
    </div>
    <!-- ????????? -->
    
    <div class="img_box autosize" >
        <iframe style=""
         src="https://www.youtube.com/embed/bghcnR8SSM8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <!-- ????????? -->
    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/tal_05.png" alt="??????????????? ??????"></div>
    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/tal_06.png" alt="?????? ??????????????? ???????????? ??? ?????? ?????? ???????????? ???????????? 4???????????????"></div>
    <div class="img_box">
        <img src="<?php echo $ad_dir ?>/images/tal_07.png" alt="?????? ???????????? ????????? ???????????????">
        <p class="hidden">
            ????????????????????? ???????????? ???????????? ??????????????? ?????? ????????? 100% ????????????
            ?????? ??????????????? ???????????? ???????????? ????????? 100??? ????????????
            ??? ???????????? ???????????? ??? ??? ????????????. 1??? 1??? ?????????????????? ???????????? ??????
        </p>
    </div>
    <div class="form_db01">
        <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">                  
            <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value="">    

            <div class="inp_box">
                <dl class="inp_list">
                    <dt class="lab"><label for="">??????</label></dt>
                    <dd class="inp inp_name">
                        <input type="text" class="input" id="mlh_name" name="mlh_name" label="??????" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>">
                    </dd>
                    <dt class="lab"><label for="">??????</label></dt>
                    <dd class="inp inp_age">
                        <input type="number" class=" input" name="mlh_age" id="mlh_age" label="??????" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>">
                    </dd>
                    <dt class="lab"><label for="">?????????</label></dt>
                    <dd class="inp inp_tel">
                        <input type="tel" class="input" style="width:25%;" id="mlh_mobileno1" name="mlh_mobileno1" label="?????????" maxlength="3" value="<?php echo set_value('mlh_mobileno1', element('mlh_mobileno1', element('post', $view))); ?>"> -
                        <input type="tel" class="input" style="width:25%;" id="mlh_mobileno2" name="mlh_mobileno2" label="?????????" maxlength="4" value="<?php echo set_value('mlh_mobileno2', element('mlh_mobileno2', element('post', $view))); ?>"> -
                        <input type="tel" class="input" style="width:25%;" id="mlh_mobileno3" name="mlh_mobileno3" label="?????????" maxlength="4" value="<?php echo set_value('mlh_mobileno3', element('mlh_mobileno3', element('post', $view))); ?>">
                    </dd>
                    <dt class="lab"><label for="">????????????</label></dt>
                    <dd class="inp inp_txt">
                        <textarea class="input" rows="4" id="mlh_text" name="mlh_text" label="????????????"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea>
                    </dd>
                </dl>
                <div class="" style="color:red;font-family: bold;font-size:20px;text-align:center;">
                <?php 
                $comment='';
                if(!empty(element('campaign_age',element('extravars',element('post', $view)))) || element('campaign_gender',element('extravars',element('post', $view))) !=='????????????'){
                    $campaign_age = explode("~",element('campaign_age',element('extravars',element('post', $view))));

                    $campaign_age[0]=trim($campaign_age[0]);
                    $campaign_age[1]=trim($campaign_age[1]);

                    if(!empty($campaign_age[0])) $comment=$campaign_age[0].'??? ?????? ';
                    if(!empty($campaign_age[1])) $comment.=$campaign_age[1].'??? ?????? ';
                    if(element('campaign_gender',element('extravars',element('post', $view))) === '??????' || element('campaign_gender',element('extravars',element('post', $view))) === '??????' ) $comment.=element('campaign_gender',element('extravars',element('post', $view)));

                    $comment .='??? ?????? ???????????????.';

                    echo $comment;
                }
                    
                ?>
             </div>
            </div>


            
            
            <button type="submit"><img src="<?php echo $ad_dir ?>/images/btn_yellow.png" alt="????????????????????????"></button>
        <?php echo form_close(); ?>
    </div>
    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/tal_09.png" alt="?????? ??? ???????????? ????????? ??????"></div>
    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/tal_10.png" alt="?????? 99.9% ?????????, ?????? ?????????"></div>
    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/tal_11.png" alt="????????? ??????"></div>
    <div class="img_box"><img src="<?php echo $ad_dir ?>/images/tal_12.png" alt="??????????????? ?????? ???????????? 100% ???????????? ???????????? ????????? 100??? ???????????????????????? ????????????"></div>
    <div class="form_db02">
        <h2 class="tit img_box">
            <img src="<?php echo $ad_dir ?>/images/form_tit.png" alt="1???1 ?????? ???????????? ?????? ???????????? ??????????????? ????????????">
        </h2>
        <?php
            $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents2(this)');
            echo form_open_multipart(current_full_url(), $attributes);
            ?>
            <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
            <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
            <input type="hidden" name="jid" value="<?php echo $jid?>">                  
            <input type="hidden" name="mlh_mobileno" id="mlh_mobileno_" value="">  
            <div class="inp_box">
                <h3 class="form_tit">??? ???????????? ???</h3>
                <p class="form_txt">??????????????? ?????????????????? ?????? ????????? ????????? ????????? ???????????????.</p>
                <dl class="inp_list">
                    <dt class="lab"><label for="">??????</label></dt>
                    <dd class="inp inp_name">
                        <input type="text" class="input2" id="mlh_name" name="mlh_name" label="??????" value="<?php echo set_value('mlh_name', element('mlh_name', element('post', $view))); ?>">
                    </dd>
                    <dt class="lab"><label for="">??????</label></dt>
                    <dd class="inp inp_age">
                        <input type="number" class=" input2" name="mlh_age" id="mlh_age" label="??????" value="<?php echo set_value('mlh_age', element('mlh_age', element('post', $view))); ?>">
                    </dd>
                    <dt class="lab"><label for="">?????????</label></dt>
                    <dd class="inp inp_tel">
                        <input type="tel" class="input2" style="width:25%;" id="mlh_mobileno_1" name="mlh_mobileno1" label="?????????" maxlength="3" value="<?php echo set_value('mlh_mobileno1', element('mlh_mobileno1', element('post', $view))); ?>"> -
                        <input type="tel" class="input2" style="width:25%;" id="mlh_mobileno_2" name="mlh_mobileno2" label="?????????" maxlength="4" value="<?php echo set_value('mlh_mobileno2', element('mlh_mobileno2', element('post', $view))); ?>"> -
                        <input type="tel" class="input2" style="width:25%;" id="mlh_mobileno_3" name="mlh_mobileno3" label="?????????" maxlength="4" value="<?php echo set_value('mlh_mobileno3', element('mlh_mobileno3', element('post', $view))); ?>">
                    </dd>
                    <dt class="lab"><label for="">????????????</label></dt>
                    <dd class="inp inp_txt">
                        <textarea class="input2" rows="4" id="mlh_text" name="mlh_text" label="????????????"><?php echo set_value('mlh_text', element('mlh_text', element('post', $view))); ?></textarea>
                    </dd>
                </dl>
                   <div class="" style="color:red;font-family: bold;font-size:20px;text-align:center;">
                   <?php 
                   $comment='';
                   if(!empty(element('campaign_age',element('extravars',element('post', $view)))) || element('campaign_gender',element('extravars',element('post', $view))) !=='????????????'){
                       $campaign_age = explode("~",element('campaign_age',element('extravars',element('post', $view))));

                       $campaign_age[0]=trim($campaign_age[0]);
                       $campaign_age[1]=trim($campaign_age[1]);

                       if(!empty($campaign_age[0])) $comment=$campaign_age[0].'??? ?????? ';
                       if(!empty($campaign_age[1])) $comment.=$campaign_age[1].'??? ?????? ';
                       if(element('campaign_gender',element('extravars',element('post', $view))) === '??????' || element('campaign_gender',element('extravars',element('post', $view))) === '??????' ) $comment.=element('campaign_gender',element('extravars',element('post', $view)));

                       $comment .='??? ?????? ???????????????.';

                       echo $comment;
                   }
                       
                   ?>
                </div>
            </div>
            
            <button type="submit"><img src="<?php echo $ad_dir ?>/images/btn_red.png" alt="???????????? ????????????"></button>
        <?php echo form_close(); ?>
    </div>
    <div class="loading" style="<?php echo empty($this->session->flashdata('mlh_id')) ? 'display:none;' : ''; ?> ">
        <div class="dot_container" >
            <div class="dot dot01"></div>
            <div class="dot dot02"></div>
            <div class="dot dot03"></div>
        </div>
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
            alert($(this).attr('label') + '??? ????????? ?????????');
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
                $("#mlh_mobileno").val($("#mlh_mobileno1").val()+$("#mlh_mobileno2").val()+$("#mlh_mobileno3").val());
                
            }
        });

        return flag;
    // } else alert('???????????? ?????? ??? ??????????????? ?????? ???????????? ????????????.');
     


    
    return false;
    
}


function submitContents2(f) {
    var flag=false;
    var href;


    $('.input2').each(function(){
         if( ! jQuery.trim($(this).val()) ) {
            alert($(this).attr('label') + '??? ????????? ?????????');
            $(this).focus();
            flag=false;
            return false;
        } else flag=true;
    });

    if(!flag) return false;
        $('.loading').show();
     // if($('input:checkbox[id="agree2"]').is(":checked")){
        href = cb_url + '/postact/media_click/' + $('#post_id').val() ;

        $.ajax({
            async : false,
            url : href,
            type : 'get',
            dataType : 'json',
            complete : function(data) {
                $("#mlh_mobileno_").val($("#mlh_mobileno_1").val()+$("#mlh_mobileno_2").val()+$("#mlh_mobileno_3").val());
                
            }
        });

        return flag;
    // } else alert('???????????? ?????? ??? ??????????????? ?????? ???????????? ????????????.');
     


    
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
    $('.loading').hide();
    cpaProc(<?php echo $this->session->flashdata('mlh_id') ?>,'<?php echo element('post_md',element('post', $view));?>');
<?php } ?>

//]]>
 </script>