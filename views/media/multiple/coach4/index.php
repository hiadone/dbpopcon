<?php 

$this->managelayout->add_meta('<meta name="viewport" content="width=device-width, initial-scale=1.0">'); 


$this->managelayout->add_css(base_url('assets/css/preloader.min.css')); 
$this->managelayout->add_css("https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@400;500;700&display=swap"); 



    $ad_dir  = element('view_skin_url', $layout);
    $jid=0;
    if(!empty($_GET['jid'])) $jid=$_GET['jid'];
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
            min-height: 100vh;
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
            display: flex;
            flex-direction: column;
            width: 100%;
            min-width: 320px;
            max-width: 800px;
            min-height: 100vh;
            margin: 0 auto;
            box-sizing: border-box;
            background-color: #000;
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
        .form_container {
            flex-grow: 1;
            flex-shrink: 1; 
            flex-basis: auto;
            padding-bottom: 20px;
        }
        .form_container .btn_img {
            display: block;
            width: 64%;
            max-width: 467px;
            margin: 0 auto;
        }
        .form_container .agree_container {
            margin-top: 3.115%;
        }
        .form_container .agree_box {
            color: #fff;
            font-weight: medium;
            letter-spacing: -0.05em;
            margin-top: 3px;
        }
        .form_container .lab_agree {
            font-size: 16px;
        }
        .form_container .btn_agree_detail {
            background-color: transparent;
            border: none;
            font-size: 16px;
            color: #ffdfa0;
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
        .img_foot {
            margin-top: auto;
        } 
        /*  */
        /* .popup_sms {
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
        } */

        @media screen and (max-width: 580px) {
            .form_container .lab_agree {
                font-size: 13px;
            }
            .form_container .btn_agree_detail {
                font-size: 13px;
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
        <div class="img_box"><img src="<?php echo $ad_dir ?>/images/co_01.png" alt="인공지능 코치알파" class="img"></div>
        <div class="form_container">

            <?php 

            if(strtolower(element('multi_code',$view))==='7060')
                $action = 'https://open.kakao.com/o/gDuDbWsc';
            if(strtolower(element('multi_code',$view))==='7070')
                $action = 'https://open.kakao.com/o/gp3NNztc';
            if(strtolower(element('multi_code',$view))==='7080')
                $action = 'https://open.kakao.com/o/guZD5Xtc';
            if(strtolower(element('multi_code',$view))==='7090')
                $action = 'https://open.kakao.com/o/gvfeXJsc';

                $attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onSubmit' => 'return submitContents(this)');
                echo form_open($action, $attributes);
                ?>
                <input type="hidden" name="post_id" id="post_id" value="<?php echo element('post_id',element('post', $view));?>">                
                <input type="hidden" name="jid" value="<?php echo $jid?>">     
                <input type="hidden" name="multi_code" id="multi_code" value="<?php echo element('multi_code',$view);?>">
                <button class="btn_img" type="submit">
                    <img src="<?php echo $ad_dir ?>/images/co_btn.png" alt="VVIP 카톡방 입장 (무료)" class="img">
                </button>
                <div class="agree_container txt_center">
                    <div class="agree_box">
                        <input type="checkbox" name="agree01" id="agree01" class="inp_agree" checked>
                        <label for="agree01" class="lab_agree">개인정보 수집동의 및 이용동의</label>
                        <button type="button" class="btn_agree_detail" onclick="openPopup('popupAgreement')">[보기]</button>
                    </div>
                    <div class="agree_box">
                        <input type="checkbox" name="agree02" id="agree02" class="inp_agree" checked>
                        <label for="agree02" class="lab_agree">서비스 이용약관 동의</label>
                    </div>
                </div>
            </form>
        </div>
        <div class="img_box img_foot"><img src="<?php echo $ad_dir ?>/images/co_foot.png" alt="회사정보" class="img"></div>

        <!-- popup -->
        <div class="popup_wrap" id="popupWrap">
            <!-- sms 인증 -->
            <!-- <div class="popup_sms" id="popupSMS">
                <div class="sms_content">
                    <div class="sms_title">
                        <b>문자(SMS)</b>로 발송된 인증번호를 입력하세요.
                    </div>
                    <div class="sms_box clearfix">
                        <input type="number" name="cfc_num" id="cfc_num" placeholder="인증번호" class="inp_sms">
                        <button type="button" onclick="smsmap()" class="btn_sms">확인</button>
                    </div>
                </div>
            </div> -->
            <!-- 개인정보취급방침 팝업 -->
            <div class="popup_container" id="popupAgreement">
                <div class="popup_body">
                    <div class="popup_text_container">
                        <div class="popup_text_box">
                            <h2>개인정보처리방침</h2>
                        </div>
                        <div class="popup_text_box">
                            <p>‘코치투자그룹’는 (이하 ‘회사’는) 고객님의 개인정보를 중요시하며, “정보통신망 이용촉진 및 정보보호”에 관한 법률을 준수하고 있습니다.</p>
                            <p>회사는 개인정보취급방침을 통하여 고객님께서 제공하시는 개인정보가 어떠한 용도와 방식으로 이용되고 있으며, 개인정보보호를 위해 어떠한 조치가 취해지고 있는지 알려드립니다.</p>
                            <p>회사는 개인정보취급방침을 개정하는 경우 웹사이트 공지사항(또는 개별공지)을 통하여 공지할 것입니다.</p>
                            <p>ο 본 방침은 : 2019년 1월 2 일 부터 시행됩니다</p>
                        </div>
                        <div class="popup_text_box">
                            <p>■ 수집하는 개인정보 항목</p>
                            <p>회사는 회원가입, 상담, 서비스 신청 등을 위해 아래와 같은 개인정보를 수집하고 있습니다.</p>
                            <p>ο 수집항목 : 이름 , 나이, 직업군, 입금자명, 연락처, 카카오톡ID, 네이버ID, 가입 권유자(추천인), 수익률관련 항목, 주식 투자 경력, 투자목적, 투자가능시간, 투자성향</p>
                            <p>ο 개인정보 수집방법 : 홈페이지 및 카페(회원가입), 가입신청서, 설문지</p>
                        </div>
                        <div class="popup_text_box">
                            <p>■ 개인정보의 수집 및 이용목적</p>
                            <p>회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다.</p>
                            <p>ο 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금정산</p>
                            <p>콘텐츠 제공 , 구매 및 요금 결제 , 물품배송 또는 청구지 등 발송 , 금융거래 본인 인증 및 금융 서비스</p>
                            <p>ο 회원 관리</p>
                            <p>회원제 서비스 이용에 따른 본인확인 , 개인 식별 , 불량회원의 부정 이용 방지와 비인가 사용 방지 , 가입 의사 확인 , 연령확인 , 불만처리 등 민원처리 , 고지사항 전달</p>
                            <p>ο 마케팅 및 광고에 활용</p>
                            <p>이벤트 등 광고성 정보 전달 , 접속 빈도 파악 또는 회원의 서비스 이용에 대한 통계</p>
                            <p>ο 기타 목적</p>
                            <p>서비스 이용에 따른 본인식별, 실명확인, 가입의사 확인 이용</p>
                            <p>고지사항 전달, 불만사항의 의사소통 경로 확보, 교육회/강연회 참여 방법 안내 등</p>
                            <p>신규서비스 등 최신정보 안내 및 개인맞춤서비스 제공을 위한 자료</p>
                            <p>교육회/강연회 참여 상담등 문의사항에 관한 정확한 답변</p>
                            <p>불량회원 부정이용 방지 및 비인가 사용방지</p>
                            <p>자사 서비스 및 재무설계 관련 상품 안내</p>
                            <p>기타 원활한 양질의 서비스 제공 등</p>
                        </div>
                        <div class="popup_text_box">
                            <p>■ 개인정보의 보유 및 이용기간</p>
                            <p>원칙적으로, 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다. 단, 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 아래와 같이 관계법령에서 정한 일정한 기간 동안 회원정보를 보관합니다.</p>
                            <p>보존 항목 : 이름 , 나이, 직업군, 입금자명, 연락처, 카카오톡ID, 네이버ID, 가입 권유자(추천인), 수익률관련 항목, 주식 투자 경력, 투자목적, 투자가능시간, 투자성향, 서비스 이용기록 , 접속 로그 , 쿠키 , 접속 IP 정보 , 결제기록</p>
                            <p>보존 근거 : 고객지원, 부정이용 등</p>
                            <p>보존 기간 :</p>
                            <p>가. 계약 또는 청약철회 등에 관한 기록</p>
                            <p>– 보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률</p>
                            <p>– 보존 기간 : 5년</p>
                            <p>나. 대금결제 및 재화 등의 공급에 관한 기록</p>
                            <p>– 보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률</p>
                            <p>– 보존 기간 : 5년</p>
                            <p>다. 소비자의 불만 또는 분쟁처리에 관한 기록</p>
                            <p>– 보존 이유 : 전자상거래 등에서의 소비자보호에 관한 법률</p>
                            <p>– 보존 기간 : 3년</p>
                            <p>라. 본인 확인에 관한 기록</p>
                            <p>– 보존 이유 : 정보통신 이용촉진 및 정보보호 등에 관한 법률</p>
                            <p>– 보존 기간 : 6개월</p>
                            <p>마. 방문에 관한 기록</p>
                            <p>– 보존 이유 : 통신비밀보호법</p>
                            <p>– 보존 기간 : 3개월</p>
                        </div>
                        <div class="popup_text_box">
                            <p>■ 개인정보의 파기절차 및 방법</p>
                            <p>회사는 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다. 파기절차 및 방법은 다음과 같습니다.</p>
                            <p>ο 파기절차</p>
                            <p>회원님이 회원가입 등을 위해 입력하신 정보는 목적이 달성된 후 별도의 DB로 옮겨져(종이의 경우 별도의 서류함) 내부 방침 및 기타 관련 법령에 의한 정보보호 사유에 따라(보유 및 이용기간 참조) 일정 기간 저장된 후 파기되어집니다.</p>
                            <p>별도 DB로 옮겨진 개인정보는 법률에 의한 경우가 아니고서는 보유되어지는 이외의 다른 목적으로 이용되지 않습니다.</p>
                            <p>ο 파기방법</p>
                            <p>– 전자적 파일형태로 저장된 개인정보는 기록을 재생할 수 없는 기술적 방법을 사용하여 삭제합니다.</p>
                        </div>
                        <div class="popup_text_box">
                            <p>■ 개인정보 제공</p>
                            <p>회사는 이용자의 개인정보를 원칙적으로 외부에 제공하지 않습니다. 다만, 아래의 경우에는 예외로 합니다</p>
                            <p>– 이용자들이 사전에 동의한 경우</p>
                            <p>– 법령의 규정에 의거하거나, 수사 목적으로 법령에 정해진 절차와 방법에 따라 수사기관의 요구가 있는 경우</p>
                        </div>
                        <div class="popup_text_box">
                            <p>■ 수집한 개인정보의 위탁</p>
                            <p>회사는 현재 서비스 이행을 위해 외부 업체에 위탁하지 아니합니다.</p>
                        </div>
                        <div class="popup_text_box">
                            <p>
                                ■ 이용자 및 법정대리인의 권리와 그 행사방법
                            </p>
                            <p>
                                이용자는 언제든지 등록되어 있는 자신의 개인정보를 조회하거나 수정할 수 있으며 가입 해지를 요청할 수도 있습니다.
                            </p>
                            <p>
                                이용자들의 개인정보 조회,수정을 위해서는 ‘개인정보변경'(또는 ‘회원정보수정’ 등)을 가입 해지(동의철회)를 위해서는 “회원탈퇴”를 클릭하여 본인 확인 절차를 거치신 후 직접 열람, 정정 또는 탈퇴가 가능합니다.
                            </p>
                            <p>
                                혹은 개인정보관리책임자에게 서면, 전화 또는 이메일로 연락하시면 지체 없이 조치하겠습니다.
                            </p>
                            <p>
                                귀하가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까지 당해 개인정보를 이용 또는 제공하지 않습니다. 또한 잘못된 개인정보를 제3자에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체 없이 통지하여 정정이 이루어지도록 하겠습니다.
                            </p>
                            <p>
                                회사는 이용자의 요청에 의해 해지 또는 삭제된 개인정보는 “회사가 수집하는 개인정보의 보유 및 이용기간”에 명시된 바에 따라 처리하고 그 외의 용도로 열람 또는 이용할 수 없도록 처리하고 있습니다.
                            </p>
                        </div>
                        <div class="popup_text_box">
                            <p>
                                ■ 개인정보 자동수집 장치의 설치, 운영 및 그 거부에 관한 사항
                            </p>
                            <p>
                                회사는 귀하의 정보를 수시로 저장하고 찾아내는 ‘쿠키(cookie)’ 등을 운용합니다. 쿠키란 웹사이트를 운영하는데 이용되는 서버가 귀하의 브라우저에 보내는 아주 작은 텍스트 파일로서 귀하의 컴퓨터 하드디스크에 저장됩니다. 회사은(는) 다음과 같은 목적을 위해 쿠키를 사용합니다.
                            </p>
                            <p>
                                ▶ 쿠키 등 사용 목적
                            </p>
                            <p>
                                – 회원과 비회원의 접속 빈도나 방문 시간 등을 분석, 이용자의 취향과 관심분야를 파악 및 자취 추적, 각종 이벤트 참여 정도 및 방문 회수 파악 등을 통한 타겟 마케팅 및 개인 맞춤 서비스 제공
                            </p>
                            <p>
                                귀하는 쿠키 설치에 대한 선택권을 가지고 있습니다. 따라서, 귀하는 웹브라우저에서 옵션을 설정함으로써 모든 쿠키를 허용하거나, 쿠키가 저장될 때마다 확인을 거치거나, 아니면 모든 쿠키의 저장을 거부할 수도 있습니다.
                            </p>
                            <p>
                                ▶ 쿠키 설정 거부 방법
                            </p>
                            <p>
                                예: 쿠키 설정을 거부하는 방법으로는 회원님이 사용하시는 웹 브라우저의 옵션을 선택함으로써 모든 쿠키를 허용하거나 쿠키를 저장할 때마다 확인을 거치거나, 모든 쿠키의 저장을 거부할 수 있습니다.
                            </p>
                            <p>
                                설정방법 예(인터넷 익스플로어의 경우)
                            </p>
                            <p>
                                : 웹 브라우저 상단의 도구 – 인터넷 옵션 – 개인정보
                            </p>
                            <p>
                                단, 귀하께서 쿠키 설치를 거부하였을 경우 서비스 제공에 어려움이 있을 수 있습니다.
                            </p>
                        </div>
                        <div class="popup_text_box">
                            <p>
                                ■ 개인정보에 관한 민원서비스
                            </p>
                            <p>
                                회사는 고객의 개인정보를 보호하고 개인정보와 관련한 불만을 처리하기 위하여 아래와 같이 관련 부서 및 개인정보관리책임자를 지정하고 있습니다.
                            </p>
                            <p>
                                고객서비스담당 부서 : 고객지원센터
                            </p>
                            <p>
                                전화번호 : 1644-0656
                            </p>
                            <p>
                                개인정보관리책임자 성명 : 한준호
                            </p>
                            <p>
                                이메일 : coachinvest@coachinvest.kr
                            </p>
                            <p>
                                귀하께서는 회사의 서비스를 이용하시며 발생하는 모든 개인정보보호 관련 민원을 개인정보관리책임자 혹은 담당부서로 신고하실 수 있습니다. 회사는 이용자들의 신고사항에 대해 신속하게 충분한 답변을 드릴 것입니다
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

    <script>
        // popup
        function openPopup(el){
            $('#popupWrap').show();
            $('#'+ el).show();
        }
        function closePopup(el){
            $('#popupWrap').hide();
            $('#'+ el).hide();
        }

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

            var flag=true;
            var href;


            // $('.input').each(function(){
            //     if( ! jQuery.trim($(this).val()) ) {
            //         alert(getPostWord($(this).attr('label'),'을','를') + '입력해 주세요');
            //         $(this).focus();
            //         flag=false;
            //         return false;
            //     } else flag=true;
            // });

            // if(!flag) return false;

            if($('input[id="agree01"]').is(":checked") && $('input[id="agree02"]').is(":checked")){

                // openPopup('popupSMS');
                
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

                // window.open('');

                return flag;
            } else alert('개인정보 수집 및 이용동의를 체크 해주시기 바랍니다.');
            
            return false;
        }

    </script>
</body>
</html>
