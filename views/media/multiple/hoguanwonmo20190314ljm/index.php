

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/preloader.min.css'); ?>" />
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>호관원</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <link rel="stylesheet" href="<?=$AD_DIR?>/css/common.css">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
</head>
<body>
    <div class="wrap" style="padding-left:0px;padding-right:0px;">
      <?php echo validation_errors('<div class="alert  alert-warning alert-auto-close" role="alert">', '</div>'); ?>
      <?php echo show_alert_message($this->session->flashdata('message'), '<div class="mt10 alert alert-auto-close-20 alert-dismissible alert-info">', '</div>'); ?>
        <div class="top">
            <div class="img_box">
                <a href="">
                    <img src="<?=$AD_DIR?>/images/top01.jpg" alt="daily news">
                </a>
            </div>
            <span class="caption">기사입력 : 2019-07-24 09:13</span>
        </div>
        <div class="cont_box">
            <div class="figure">
                <a href="">
                    <img src="<?=$AD_DIR?>/images/img01_02.jpg" alt="각종 통증 및 염증 등으로 인한 관절 건강 악화 더 심해져">
                </a>
                <div class="figcaption fz13">▶각종 통증 및 염증 등으로 인한 관절 건강 악화 더 심해져</div>
            </div>
            <div class="txt_box">
                <p>
                    경기도 수원시에 사는 김 정협(62세) 씨는 요즘 고민이 많다. 최근 관절통증이 불편한 정도였지만 급격하게 악화되어 요즘에는 가까운 거리를 걷기도 힘들어 하기 때문이다. 이를 해결하기 위해 좋다는 병원을 찾아, 연골주사와 도수치료도 병행하였지만 효과는 일시적이었고, 최근에는 허리나 어깨까지도 통증이 심해져 나날이 걱정만 늘어나고 있다.
                </p>
            </div>
            <div class="img_box">
                <a href="">
                    <img src="<?=$AD_DIR?>/images/img12.gif" alt="이만기 광고" class="w95per">
                </a>
            </div>
            <div class="txt_box">
                <p>
                    그러던 중 최근 방송, 뉴스등에서 극찬 하는 '호관원프리미엄' 을 접하게 되었고, 각종 수상은 물론 식약처에서도 인증한 제품으로써, 1개월분까지 무료로 준다는 말에 구매하게 되었다. 꾸준히 섭취한 결과 단기간에 통증이 느껴지지 않을정도로 개선되었으며 최근에는 등산도 할 수 있을만큼 눈에띄게 좋아졌다. 노화가 됨에 따라 관절의 건강이 급격히 나빠지고 있는 요즘 "호관원프리미엄"은 이들의 단비가 되는 제품으로 잘 알려져 있다. 이미 천하장사 이만기가 애용하는 제품으로 여러차례 이슈가 된 적이 있다.
                </p>
            </div>
            <figure class="figure">
                <img src="<?=$AD_DIR?>/images/img02.jpg">
                <figcaption class="figcaption">▶호관원 언론 보도 화면</figcaption>
            </figure>
            <div class="img_title">
                <img src="<?=$AD_DIR?>/images/mid01.jpg" alt="중년의 적 '관절통증' 유일한 솔루션은 연골세포 활성화">
            </div>
            <div class="txt_box">
                <p>
                    현대 사회인의 삶의 질을 떨어뜨리는 관절문제가 최근 매우 급증하고 있다. 대부분 집안일 또는 과다한 컴퓨터 근무 및 스마트폰 사용으로 인한 허리통증, 중년층의 40%이상을 차지하고 있는 무릎통증 등이 대표적이다. 하지만 이를 해결하기 위해 대부분은 수술 및 약물치료만을 권하고 있어 비싼 비용에 비해 결과는 좋아지지 않는 것이 현실이다.
                </p>
            </div>
        </div>
        <!-- dbform01 -->
        <div class="dbform dbform01">
            <div class="img_box img_title"><img src="<?=$AD_DIR?>/images/db2_04.jpg" alt="자가진단 참여고객 전원 3개월분 구매시 1개월분을 무료로 드립니다!"></div>
            <?php
             $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
             echo form_open(current_full_url(), $attributes);
             ?>
             <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
             <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
             <!-- <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value=""> -->
             <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
             <input type="hidden" name="mlh_text" id="mlh_text" value="">

                <div class="form_container">
                    <div class="question_box">
                        <div class="question">
                            <b>Q.</b> 본인의 통증 부위를 체크하세요
                        </div>
                        <ul class="answer_list">
                            <li class="answer">
                              <input type="checkbox" name="t_a[]" id="t_a_1" value="무릎"> <label for="t_a_1">무릎</label>
                            </li>
                            <li class="answer">
                                <input type="checkbox" name="t_a[]" id="t_a_2" value="어깨"> <label for="t_a_2">어깨</label>
                            </li>
                            <li class="answer">
                                <input type="checkbox" name="t_a[]" id="t_a_3" value="허리"> <label for="t_a_3">허리</label>
                            </li>
                            <li class="answer">
                                <input type="checkbox" name="t_a[]" id="t_a_4" value="목"> <label for="t_a_4">목</label>
                            </li>
                            <li class="answer">
                                <input type="checkbox" name="t_a[]" id="t_a_5" value="기타"> <label for="t_a_5">기타</label>
                            </li>
                        </ul>
                    </div>
                    <div class="user_info">
                        <div class="row row01">
                            <div class="label"><label for="mlh_name">이름</label></div>
                            <div class="input"><input type="text" class="input1" style="padding-left:10px;" id="mlh_name" name="mlh_name"  label="이름"></div>
                            <div class="label"><label for="mlh_age">나이</label></div>
                            <div class="input"><input class="input1" type="number" style="padding-left:10px;" id="mlh_age" name="mlh_age" label="나이" maxlength="2"> 세</div>
                        </div>
                        <div class="row row02">
                            <div class="label"><label for="mlh_mobileno">연락처</label></div>
                            <div class="input">
                                <input type="tel" class="input1" style="width:100%;padding-left:10px;" name="mlh_mobileno" id="mlh_mobileno" label="연락처">
                            </div>
                        </div>
<div class="t-center" style="color:red;font-family: bold;font-size:20px;text-align: center;">
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
                    </div>

                    <button type="image"><img  src="<?=$AD_DIR?>/images/db2_btn_03.gif" alt="결과 & 가격 알아보기"></button>
                </div>

            <?php echo form_close(); ?>
        </div>
        <!-- dbform01 end -->
        <div class="cont_box">
            <div class="img_box">
                <img src="<?=$AD_DIR?>/images/img6.jpg" alt="100% 환불보증제도 호관원이 드리는 신뢰의 결정체 망설이지마시고, 구매후 결정하세요!">
            </div>
            <div class="txt_box">
                <p>
                    관절문제는 병원만이 꼭 해결 방법은 아니라는 것이 전문가들의 소견이다. 관절건강을 호전 시키는 방법은 근본을 해결해야 할 필요가 있어, 실질적으로 뼈의 건강에 도움을 주어야 한다는 것이다. 주식회사 동진제약에서 수년간의 연구 끝에 개발한 "호관원프리미엄"은 관절에 좋은 대표성분인 MSM (먹을 수 있는 천연 식이유황성분)을 사용하여 뼈의 건강에 도움을 줄 수 있도록 개발된 제품이다.
                </p>
            </div>
            <div class="figure">
                <img src="<?=$AD_DIR?>/images/banner_6.jpg" alt="각종 관절 통증이 있는 사람 대상으로한 인체 적용 시험">
                <div class="figcaption fz13">▶각종 관절 통증이 있는 사람 대상으로한 인체 적용 시험</div>
            </div>
            <div class="img_title"><img src="<?=$AD_DIR?>/images/mid01_1.jpg" alt="인체의 최적화된 성분배합, 관절 근본변화에는 역시 호관원!"></div>
            <div class="txt_box">
                <p>
                    "호관원프리미엄"은 3대째 전해오는 녹용, 우슬, 당귀 등 35가지 비법으로 관절건강에 도움을 주는 msm을 특수 비율로 개발해 낸 제품으로써, 기존의 제품과는 다른 관절 및 연골건강에 도움을 줄 수 있는 신제품이다.
                </p>
                <p>
                    Msm성분이 관절연골의 문제점을 제거해 주고 35가지 비법으로 기능성 성분과 상승 작용을 해 관절(연골)세포를 활성화 시켜서 관절을 건강하게 만들어 준다.
                </p>
                <p>
                    체내 흡수력이 빠른 액상형태라 하루 아침저녁으로 한포씩 3~4일 정도만 복용 하면 통증이 있던 관절 부분이 가려워 지면서 통증이 완화되는 걸 느낄 수 있고, 3주정도 복용하면 가벼운 산책이나 계단도 오르내릴 수 있다. 
                </p>
                <p>
                    호관원프리미엄의 대표는 "관절 때문에 고민인 어르신분들의 마음을 걱정없이 안심하고 드실 수 있게 안전성 검사를 마친 제품"이라고 말하며 “시중에 유사한 제품이 있을 수 있으니 마크를 꼭 확인 부탁드린다”고 덧붙였다.
                </p>
            </div>
        </div>
        <div class="slider swiper-container">
            <div class="title">▶호관원 실제 고객사례</div>
            <ul class="list swiper-wrapper">
                <li class="img_box swiper-slide"><img src="<?=$AD_DIR?>/images/banner_7_1.jpg" alt=""></li>
                <li class="img_box swiper-slide"><img src="<?=$AD_DIR?>/images/banner_7_2.jpg" alt=""></li>
            </ul>
            <div class="btn_prev swiper-button-next"></div>
            <div class="btn_next swiper-button-prev"></div>
        </div>
        <script>
            var swiper = new Swiper('.slider', {
                loop: true,
                navigation: {
                nextEl: '.swiper-button-prev',
                prevEl: '.swiper-button-next',
                },
            });
        </script>
        <div class="cont_box">
            <div class="txt_box">
                <p>
                    또한 호관원은 복용 후 만족도가 업계 최고로 높으며, 재구매율이 상당히 높다고 한다. 실제 이부분은 각종 커뮤니티 및 언론방송에서도 집중 조명하고 있다. 이에 호관원 판매처에서는 효과에 자신하고 있으며 고객감사 특별 이벤트로 효과 없을 시 100% 환불책임보상제를 실시하고 있다. 누구나 편리하게 상담이 가능해 문의 건수가 벌써 20만건을 넘었다고 한다.
                </p>
            </div>
            <div class="img_box">
                <img src="<?=$AD_DIR?>/images/img6.jpg" alt="100% 환불보증제도 호관원이 드리는 신뢰의 결정체 망설이지마시고, 구매후 결정하세요!">
            </div>
        </div>
        <!-- dbform02 -->
        <div class="dbform dbform02">
            <div class="img_box img_title">
                <img src="<?=$AD_DIR?>/images/db_top05.jpg" alt="호관원 프리미엄">
            </div>
            <?php
             $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite2', 'onSubmit' => 'return submitContents2(this)');
             echo form_open(current_full_url(), $attributes);
             ?>
             <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">
             <input type="hidden" name="redirecturl" value="<?php  echo current_full_url()?>">
             <!-- <input type="hidden" name="mlh_mobileno" id="mlh_mobileno" value=""> -->
             <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
             <input type="hidden" name="mlh_text" id="mlh_text2" value="">
                <div class="form_container">
                    <div class="bg_wh">
                        <div class="question_box">
                            
                            <div class="question">
                            <b>Q.</b> 본인의 통증 부위를 체크하세요
                        </div>
                        <ul class="answer_list">
                            <li class="answer">
                              <input type="checkbox" name="t_a[]" id="t_a_1_" value="무릎"> <label for="t_a_1_">무릎</label>
                            </li>
                            <li class="answer">
                                <input type="checkbox" name="t_a[]" id="t_a_2_" value="어깨"> <label for="t_a_2_">어깨</label>
                            </li>
                            <li class="answer">
                                <input type="checkbox" name="t_a[]" id="t_a_3_" value="허리"> <label for="t_a_3_">허리</label>
                            </li>
                            <li class="answer">
                                <input type="checkbox" name="t_a[]" id="t_a_4_" value="목"> <label for="t_a_4_">목</label>
                            </li>
                            <li class="answer">
                                <input type="checkbox" name="t_a[]" id="t_a_5_" value="기타"> <label for="t_a_5_">기타</label>
                            </li>
                        </ul>
                           
                        </div>
                        <div class="user_info">
                            <div class="row row01">
                              <div class="label"><label for="mlh_name2">이름</label></div>
                              <div class="input"><input type="text" class="input2" style="padding-left:10px;" id="mlh_name2" name="mlh_name"  label="이름"></div>
                              <div class="label"><label for="mlh_age2">나이</label></div>
                              <div class="input"><input class="input2" type="number" style="padding-left:10px;" id="mlh_age2" name="mlh_age" label="나이" maxlength="2"> 세</div>
                          </div>
                          <div class="row row02">
                              <div class="label"><label for="mlh_mobileno2">연락처</label></div>
                              <div class="input">
                                  <input type="tel" class="input2" style="width:100%;padding-left:10px;" name="mlh_mobileno" id="mlh_mobileno2" label="연락처">
                              </div>
                          </div>

                        </div>
                    
                  <div class="t-center" style="color:red;font-family: bold;font-size:20px;text-align: center;">
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
                    </div>
                    <button type="image"><img src="<?=$AD_DIR?>/images/db_btn5.gif" alt="결과 & 가격 알아보기"></button>
                    <div class="db_img"><img src="<?=$AD_DIR?>/images/img1.jpg" alt="최소비용확인하기"></div>
                    <div class="result_box">
                        <input type="text" name="" id=""> 님의 섭취기간은 
                        <input type="text" name="" id=""> 로<br>최소비용은 
                        <input type="text" name="" id=""> 입니다.
                    </div>
                </div>
            <?php echo form_close(); ?></form>
        </div>
        <!-- dbform02 -->
        <div class="">
            <div class="img_box02">
                <img src="<?=$AD_DIR?>/images/banner_5.jpg" alt="이런분들께 호관원프리미엄 추천합니다!">
            </div>
            <div class="img_box02">
                <img src="<?=$AD_DIR?>/images/body001.jpg" alt="호관원 체험기">
                <img src="<?=$AD_DIR?>/images/body002.jpg" alt="호관원 체험기">
                <img src="<?=$AD_DIR?>/images/body003.jpg" alt="호관원 체험기">
                <img src="<?=$AD_DIR?>/images/body004.jpg" alt="호관원 체험기">
                <img src="<?=$AD_DIR?>/images/body005.jpg" alt="호관원 체험기">
                <img src="<?=$AD_DIR?>/images/body006.jpg" alt="호관원 체험기">
            </div>
            <div class="img_box02">
                <img src="<?=$AD_DIR?>/images/call_01.jpg" alt="신기하고 놀라운 만남 1522-6532">
            </div>
            <div class="cont_box02">
                <div class="img_box">
                    <img src="<?=$AD_DIR?>/images/img09.jpg" alt="호관원의 key point 3가지">
                </div>
                <div class="img_box">
                    <img src="<?=$AD_DIR?>/images/img05.jpg" alt="원료인증서 및 제조 신고증">
                </div>
            </div>
            <div class="comment_wrap">
                <div class="comment_top">
                    <div class="left comment_num">댓글 <b>82</b></div>
                    <div class="right btn_write">
                        <a href="">
                            <img src="<?=$AD_DIR?>/images/comment/write.jpg" alt="댓글쓰기">
                        </a>
                    </div>
                </div>
                <div class="comment_list">
                    <div class="tabs">
                        <div class="tab">호감순</div>
                        <div class="tab active">최신순</div>
                    </div>
                    <!--  -->
                    <div class="comment_box">
                        <div class="user_id">dfjw***</div>
                        <div class="comment">
                            <a href="">
                                저희 엄마도 이거 요즘 이거 드시던데 정말 좋다고 말씀하시더라구요 원래 좋다고 안하시는 분인데..
                            </a>
                        </div>
                        <div class="date">2019-07-24 오전 11:51 | 신고</div>
                        <div class="btn_box">
                            <a class="left" href="">
                                <img src="<?=$AD_DIR?>/images/comment/rere.jpg" alt="댓글">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/down1.jpg" alt="싫어요">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/up1.jpg" alt="좋아요">
                            </a>
                        </div>
                    </div>
                    <!--  -->
                    <div class="comment_box">
                        <div class="user_id">buss****</div>
                        <div class="comment">
                            <a href="">
                                어려서부터 등산이 취미였는데 무릎이 아파서 계속 못다니다가 호관원 먹고 요즘 다시 등산합니다. 정말 좋아요~
                            </a>
                        </div>
                        <div class="date">2019-07-24 오후 13:52 | 신고</div>
                        <div class="btn_box">
                            <a class="left" href="">
                                <img src="<?=$AD_DIR?>/images/comment/rere.jpg" alt="댓글">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/down2.jpg" alt="싫어요">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/up2.jpg" alt="좋아요">
                            </a>
                        </div>
                    </div>
                    <div class="comment_box">
                        <div class="user_id">dlkj**</div>
                        <div class="comment">
                            <a href="">
                                집안일 할때 쪼그리고 하면 정말 아팠는데 요즘에는 젊었을 때처럼 아주 수월합니다 고마워요~
                            </a>
                        </div>
                        <div class="date">2019-07-24 오후 17:19 | 신고</div>
                        <div class="btn_box">
                            <a class="left" href="">
                                <img src="<?=$AD_DIR?>/images/comment/rere.jpg" alt="댓글">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/down.jpg" alt="싫어요">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/up3.jpg" alt="좋아요">
                            </a>
                        </div>
                    </div>
                    <div class="comment_box">
                        <div class="user_id">mist****</div>
                        <div class="comment">
                            <a href="">
                                저도 관절때문에 굉장히 고생하고 있습니다. 걷다보면 아프고... 상담 받아봐야겠네요!!
                            </a>
                        </div>
                        <div class="date">2019-07-24 오후 17:19 | 신고</div>
                        <div class="btn_box">
                            <a class="left" href="">
                                <img src="<?=$AD_DIR?>/images/comment/rere.jpg" alt="댓글">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/down.jpg" alt="싫어요">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/up4.jpg" alt="좋아요">
                            </a>
                        </div>
                    </div>
                    <div class="comment_box">
                        <div class="user_id">appl***</div>
                        <div class="comment">
                            <a href="">
                                우리엄마도 보면 안쓰러울정돈데 이런게 있었을줄이야, 당장 구매!
                            </a>
                        </div>
                        <div class="date">2019-07-24 오후 17:19 | 신고</div>
                        <div class="btn_box">
                            <a class="left" href="">
                                <img src="<?=$AD_DIR?>/images/comment/rere.jpg" alt="댓글">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/down2.jpg" alt="싫어요">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/up5.jpg" alt="좋아요">
                            </a>
                        </div>
                    </div>
                    <div class="comment_box">
                        <div class="user_id">boss*****</div>
                        <div class="comment">
                            <a href="">
                                호관원으로 호전된 사람입니다. 댓글로 응원하고 싶습니다! 감사합니다.
                            </a>
                        </div>
                        <div class="date">2019-07-24 오후 17:19 | 신고</div>
                        <div class="btn_box">
                            <a class="left" href="">
                                <img src="<?=$AD_DIR?>/images/comment/rere.jpg" alt="댓글">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/down2.jpg" alt="싫어요">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/up6.jpg" alt="좋아요">
                            </a>
                        </div>
                    </div>
                    <div class="comment_box">
                        <div class="user_id">sldk*</div>
                        <div class="comment">
                            <a href="">
                                저희 장모님이 엄청 좋아하세요 요즘은 등산도 다니시고 오히려 사드린 제가 더 기분이 좋네요~
                            </a>
                        </div>
                        <div class="date">2019-07-24 오후 17:19 | 신고</div>
                        <div class="btn_box">
                            <a class="left" href="">
                                <img src="<?=$AD_DIR?>/images/comment/rere.jpg" alt="댓글">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/down.jpg" alt="싫어요">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/up6_2.jpg" alt="좋아요">
                            </a>
                        </div>
                    </div>
                    <div class="comment_box">
                        <div class="user_id">kiki******</div>
                        <div class="comment">
                            <a href="">
                                기본적으로 상담해주시는 분들이 친절하고 정확하게 잘 해주셔서 그게 제일 좋은거 같아요 제품도 제품이지만
                            </a>
                        </div>
                        <div class="date">2019-07-24 오후 17:19 | 신고</div>
                        <div class="btn_box">
                            <a class="left" href="">
                                <img src="<?=$AD_DIR?>/images/comment/rere.jpg" alt="댓글">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/down2.jpg" alt="싫어요">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/up7.jpg" alt="좋아요">
                            </a>
                        </div>
                    </div>
                    <div class="comment_box">
                        <div class="user_id">kore******</div>
                        <div class="comment">
                            <a href="">
                                통증때문에 진짜 말도 못하게 고생했는데 통증이 없다는게 너무 행복합니다. 고마워요 호관원
                            </a>
                        </div>
                        <div class="date">2019-07-24 오후 17:19 | 신고</div>
                        <div class="btn_box">
                            <a class="left" href="">
                                <img src="<?=$AD_DIR?>/images/comment/rere.jpg" alt="댓글">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/down.jpg" alt="싫어요">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/up8.jpg" alt="좋아요">
                            </a>
                        </div>
                    </div>
                    <div class="comment_box">
                        <div class="user_id">zyxw***</div>
                        <div class="comment">
                            <a href="">
                                대체 어떻길래 이렇지, 저도 관절염 앓고 있는데 일단 한번 상담받아봐야겠네요
                            </a>
                        </div>
                        <div class="date">2019-07-24 오후 17:19 | 신고</div>
                        <div class="btn_box">
                            <a class="left" href="">
                                <img src="<?=$AD_DIR?>/images/comment/rere.jpg" alt="댓글">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/down.jpg" alt="싫어요">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/up9.jpg" alt="좋아요">
                            </a>
                        </div>
                    </div>
                    <div class="comment_box">
                        <div class="user_id">dona****</div>
                        <div class="comment">
                            <a href="">
                                저도 지인통해서 복용해봤는데 다시 사게 되더라구요, 관절때문에 고생하시는분들은 무조건 구매해야합니다!!!
                            </a>
                        </div>
                        <div class="date">2019-07-24 오후 17:19 | 신고</div>
                        <div class="btn_box">
                            <a class="left" href="">
                                <img src="<?=$AD_DIR?>/images/comment/rere.jpg" alt="댓글">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/down2.jpg" alt="싫어요">
                            </a>
                            <a class="right" href="">
                                <img src="<?=$AD_DIR?>/images/comment/up10.jpg" alt="좋아요">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="img_box"><img src="<?=$AD_DIR?>/images/footer.jpg" alt="푸터"></div>
                
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
</body>
</html>
<script type="text/javascript">
//<![CDATA[



function submitContents(f) {
    var flag=false;
    var href;
    var checkDev = [];

    if ($("input[name='t_a[]']:checked", f).length < 1) {
            alert('불편한 부위 하나 이상 선택하세요.');
            return false;
    } else {

        $("input[name='t_a[]']:checked", f).each(function(idx){    

            // 해당 체크박스의 Value 가져오기

            checkDev.push($(this).val());

        });

        
        $("#mlh_text").val(checkDev.join('_'));
    }

    $('.input1').each(function(){
         if( ! jQuery.trim($(this).val()) ) {
            alert($(this).attr('label') + '을 입력해 주세요');
            $(this).focus();
            flag=false;
            return false;
        } else flag=true;
    });


    

    if(!flag) return false;
    
     // if($('input:checkbox[id="agree"]').is(":checked")){
        $(".loading").show();
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
    // } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.')
     


    
    return false;
    
}

function submitContents2(f) {
    var flag=false;
    var href;
    var checkDev = [];

    if ($("input[name='t_a[]']:checked", f).length < 1) {
            alert('불편한 부위 하나 이상 선택하세요.');
            return false;
    } else {

        $("input[name='t_a[]']:checked", f).each(function(idx){    

            // 해당 체크박스의 Value 가져오기

            checkDev.push($(this).val());

        });

        
        $("#mlh_text2").val(checkDev.join('_'));
    }

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
        $(".loading").show();
        href = cb_url + '/postact/media_multi_click/' + $('#post_id').val() +'/' + $('#multi_code').val() ;

        $.ajax({
            async : false,
            url : href,
            type : 'get',
            dataType : 'json',
            complete : function(data) {
              // $("#mlh_mobileno_").val($("#mlh_mobileno_1").val()+$("#mlh_mobileno_2").val()+$("#mlh_mobileno_3").val());
                
                
            }
        });

        return flag;
    // } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.')
     


    
    return false;
    
}


function cpaProc(mlh_id) {

    var href;

    // href = 'http://api.tenping.kr/Query?jid=<?php echo $jid?>&uid=<?php echo $uid?>&at=<?php echo $at?>&key='+post_md+mlh_id;


    href = 'http://com.daine.co.kr/utf/hgw/hi.jsp';
    $.ajax({
        async : false,
        url : href,
        type : 'post',
        data: "name=<?php echo $this->session->flashdata('mlh_name') ?>&age=<?php echo $this->session->flashdata('mlh_age') ?>&phone=<?php echo $this->session->flashdata('mlh_mobileno') ?>&memo=<?php echo $this->session->flashdata('mlh_text') ?>", 
        dataType : 'json',
        success : function(response) {
            
        
        },
        error : function(response) {
        },
        complete : function (response) {
          $(".loading").hide();
           //  if (response.responseJSON.error) {
           //  alert(response.responseJSON.Message);
           //  return false;
           // } else if (response.responseJSON.success) {
           //  $.ajax({
           //       async : false,
           //       url : cb_url + '/media_multiple/tpProc/' +mlh_id+'/'+response.responseJSON.data.code+'/'+response.responseJSON.data.result_msg,
           //       type : 'get',
           //       dataType : 'json',
           //       success : function(data) {
                      
           //       }
           //   });
       
           //  }
           
        }

    });
}

<?php if($this->session->flashdata('mlh_id')){?>

    cpaProc("<?php echo $this->session->flashdata('mlh_id') ?>");
    
<?php } ?>

    
//]]>
</script>

</body>
</html>