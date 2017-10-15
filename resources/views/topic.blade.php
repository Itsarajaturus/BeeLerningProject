<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bee Learning</title>

        @include('layouts.inc-stylesheet')
        @include('layouts.inc-scripts')

        <script type="text/javascript">
            $(document).ready(function () {
                defineReplyLock();
            });

            function defineReplyLock() {
                $('.reply-item.reply-lock').each(function (i) {
                    $(this).html('');

                    $(this).html(
                            '<div class="reply-lock-main" style="color: #a1a1a1; text-align: center">' +
                            '<div class="icon" style="font-size: 30px"> <i class="fa fa-ban" aria-hidden="true"></i> </div>' +
                            '<div class="text" style="font-size: 20px"> "ความคิดเห็นนี้ถูกระงับ" </div>' +
                            '</div>'
                            );
                });
            }

            function showReplyComment(replyId) {
                $('.reply-box[data-reply-id = ' + replyId + ']').find('.reply-comment-item').show(500);

                $('.reply-box[data-reply-id = ' + replyId + ']').find('.more-reply-comment .reply-comment-btn .text').html('ซ่อน ข้อความตอบกลับ')
                $('.reply-box[data-reply-id = ' + replyId + ']').find('.more-reply-comment .reply-comment-btn').attr('onclick', 'hideReplyComment("' + replyId + '")')
            }

            function hideReplyComment(replyId) {
                $('.reply-box[data-reply-id = ' + replyId + ']').find('.more-reply-comment .reply-comment-btn .text').html('ความคิดเห็นตอบกลับ 1 ความคิดเห็น');
                $('.reply-box[data-reply-id = ' + replyId + ']').find('.reply-comment-item').hide(500);

                $('.reply-box[data-reply-id = ' + replyId + ']').find('.more-reply-comment .reply-comment-btn').attr('onclick', 'showReplyComment("' + replyId + '")')
            }
        </script>
    </head>

    <body>
        @include('layouts.inc-header')

        <div class="page-main col-lg-12 col-md-12 col-sm-12 col-xs-12" id="topic">
            <div class="board-menu">
                <div class="board-main-menu">
                    <div class="board-btn-item">
                        <span class="icon"> </span>
                        <span class="text"> กระทู้ล่าสุด </span>
                    </div>
                    <div class="board-btn-item">
                        <span class="icon"> </span>
                        <span class="text"> กระทู้ติดดาว </span>
                    </div>
                    <div class="board-btn-item">
                        <span class="icon"> </span>
                        <span class="text"> กระทู้อยากถาม </span>
                    </div>
                    <div class="board-btn-item">
                        <span class="icon"> </span>
                        <span class="text"> กระทู้ความรู้ </span>
                    </div>
                    <div class="board-btn-item">
                        <span class="icon"> </span>
                        <span class="text"> กระทู้สาระ </span>
                    </div>
                    <div class="board-btn-item">
                        <span class="icon"> </span>
                        <span class="text"> กระทู้รวม </span>
                    </div>
                </div>
                <div class="new-topic-menu">
                    <span class="icon"> <i class="fa fa-plus-square" aria-hidden="true"></i> </span>
                    <span class="text"> <a href="new_topic" target="_blank"> ตั้งกระทู้ใหม่ </a></span>
                </div>
            </div>
            <div class="boad-breadcumb">
                <span class="board layer"> เว็บบอร์ด </span>
                <span class="text layer"> > </span>
                <span class="category layer"> กระทู้อยากถาม </span>
                <span class="text layer"> > </span>
                <span class="topic layer"> สงสัยเรื่องหลักฐานที่ใช้ในการสอบ... </span>
            </div>
            <div class="topic-main">
                <div class="topic-title">
                    <span class="title-icon"> <i class="fa fa-fire red" aria-hidden="true"></i> </span>
                    <span class="titel-name">สงสัยเรื่องหลักฐานที่ใช้ในการสอบสัมภาษณ์ครับ ช่วยตอบทีนะครับ</span>
                    <span class="title-sub-text hot"> [ ร้อนแรง ] </span>


                    <div class="pin-request">
                        <span class="icon"> <i class="fa fa-thumb-tack" aria-hidden="true"></i> </span>
                        <span class="text"> ปักหมุด </span>
                    </div>
                    <div class="del-request" data-toggle="modal" data-target="#reportTopicModal">
                        <span class="icon"> <i class="fa fa-trash" aria-hidden="true"></i> </span>
                        <span class="text"> แจ้งลบ </span>
                    </div>

                    <div class="topic-details">
                        <div class="topic-number">
                            <span class="icon"> <i class="fa fa-calendar" aria-hidden="true"></i> </span>
                            <span class="text">โพสต์เมื่อ 23/06/60 11:38 น. </span>
                        </div>
                        <div class="topic-date">
                            <span class="text"> หมายเลข : 117635242 </span>
                        </div>
                        <div class="topic-rate">
                            <div class="topic-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-views">
                            <span class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </span>
                            <span class="text"> 1,230 </span>
                        </div>
                        <div class="topic-reply">
                            <span class="icon"> <i class="fa fa-comments" aria-hidden="true"></i> </span>
                            <span class="text"> 5 </span>
                        </div>
                    </div>
                    <div class="topic-by">
                        <div class="member-item">
                            <div class="member-image image-cropper">
                                <img src="http://all4desktop.com/data_images/original/4245548-tom-cruise.jpg" class="rounded">
                            </div>
                            <div class="member-name">
                                <div class="main-text"> Tom Cruise </div>
                            </div>
                            <div class="member-extra">
                                <div class="member-contact">
                                    <span class="icon"> <i class="fa fa-user-plus" aria-hidden="true"></i> </span>
                                    <span class="icon"> <i class="fa fa-envelope-o" aria-hidden="true"></i> </span>
                                    <span class="icon"> <i class="fa fa-comments" aria-hidden="true"></i> </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="topic-body">
                    <div class="topic-main-body" id="topic-body">
                        <h4>แต่เดี๋ยวก่อน เราจะไม่พูดถึงเพลงประกอบละครสุดหลอนไม่ได้ การตอกย้ำด้วยเพลงช้าๆ กลิ่นอายลูกกรุงแบบนี้ </br>
                            มันหลอนจริงๆ ชื่นชมทีมงานที่ตั้งใจเลือกเพลงมาเป็นอีกหนึ่งสัญลักษณ์สุดหลอนของเรื่องนี้ค่ะ <br> เอาเป็นว่าละครเรื่อง กับดักเส่หา เป็นละครพลอตเดิมๆ</br>
                            </br>
                            <center><img src="https://image.dek-d.com/27/0391/0659/124523589" style="height: 313px; width: 500px;"></br>
                            </center>

                            </br>
                            ที่เล่าเรื่องใหม่ได้เข้ากับยุคสมัยมาก และสามารถเก็บรายละเอียดให้สมจริง จนคนดูอย่างเราอินแบบไม่ค้านความรู้สึกเท่าไร
                            </br> การแสดงของทุกคนเหมือนถูกกำกับรายละเอียดมาอย่างดี จังหวะหนักเบา และจังหวะหายใจ รู้สึกว่ามันธรรมชาติอย่างอธิบายไม่ถูก แต่คือดูแล้วชนลุกซู่ซ่าเลยค่ะ
                            </br> หลังจากนี้ก็หวังว่าละครเซ็ตเสน่หาไดอารี่ของช่อง One จะเป็นละครที่น่าดูทั้งเซ็ตเลยนะ
                            </br>
                        </h4>
                    </div>
                    <div class="topic-footer">
                        <div class="topic-update">
                            <time class="topic-last-update" title="แก้ไขล่าสุดเมื่อ 27 มิถุนายน 2560 23:11 น.">
                                <i class="fa fa-pencil" aria-hidden="true"></i> แก้ไขล่าสุด: 27 มิ.ย. 60 23:11 น.	</time>
                        </div>
                        <div class="topic-rate">
                            <span class="text"> ให้คะแนน </span>
                            <div class="topic-rate-star">
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="reply-main">
                    <div class="reply-title">
                        <span class="icon"> <i class="fa fa-comments" aria-hidden="true"></i> </span>
                        <span class="text"> 3 ความคิดเห็น </span>
                    </div>
                    <div class="reply-item first">
                        <div class="reply-item-head">
                            <div class="member-item">
                                <div class="member-image image-cropper">
                                    <img src="http://all4desktop.com/data_images/original/4245548-tom-cruise.jpg" class="rounded">
                                </div>
                                <div class="member-name">
                                    <div class="main-text"> Tom Cruise </div>
                                </div>
                                <div class="member-extra">
                                    <div class="member-contact">
                                        <span class="icon"> <i class="fa fa-user-plus" aria-hidden="true"></i> </span>
                                        <span class="icon"> <i class="fa fa-envelope-o" aria-hidden="true"></i> </span>
                                        <span class="icon"> <i class="fa fa-comments" aria-hidden="true"></i> </span>
                                    </div>
                                </div>
                                <div class="reply-count" id="reply-number">
                                    <span class="number"> #1</span>
                                </div>
                                <div class="reply-date">
                                    <span class="text">เมื่อวานนี้ เวลา 12:38 น. </span>
                                </div>
                            </div>
                        </div>
                        <div class="reply-item-body">
                            <div class="reply-main-body" id="reply-body">
                                <h2>
                                    <center><b>มีความ มุ้งมิ้ง ^^</br></center>
                                </h2>
                            </div>
                        </div>
                        <div class="reply-item-footer">
                            <div class="like-count">
                                <span class="like-num"> 10 </span>
                                <span class="like-text"> คนถูกใจ</span>
                            </div>
                            <div class="reply-foot-menu">
                                <div class="like-btn">
                                    <span class="icon"> <i class="fa fa-thumbs-up" aria-hidden="true"></i> </span>
                                    <span class="text"> ถูกใจ </span>
                                </div>
                                <div class="reply-btn">
                                    <span class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </span>
                                    <span class="text"> ตอบกลับ </span>
                                </div>
                                <div class="report-btn" data-toggle="modal" data-target="#reportTopicModal">
                                    <span class="icon"> <i class="itemicon fa fa-trash" aria-hidden="true"></i> </span>
                                    <span class="text"> แจ้งลบ </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reply-item reply-lock">
                        <div class="reply-item-head">
                            <div class="member-item">
                                <div class="member-image image-cropper">
                                    <img src="http://all4desktop.com/data_images/original/4245548-tom-cruise.jpg" class="rounded">
                                </div>
                                <div class="member-name">
                                    <div class="main-text"> Tom Cruise </div>
                                </div>
                                <div class="member-extra">
                                    <div class="member-contact">
                                        <span class="icon"> <i class="fa fa-user-plus" aria-hidden="true"></i> </span>
                                        <span class="icon"> <i class="fa fa-envelope-o" aria-hidden="true"></i> </span>
                                        <span class="icon"> <i class="fa fa-comments" aria-hidden="true"></i> </span>
                                    </div>
                                </div>
                                <div class="reply-count" id="reply-number">
                                    <span class="number"> #2</span>
                                </div>
                                <div class="reply-date">
                                    <span class="text">เมื่อวานนี้ เวลา 12:38 น. </span>
                                </div>
                            </div>
                        </div>
                        <div class="reply-item-body">
                            <div class="reply-main-body" id="reply-body">
                                <h2>
                                    <b>ทดสอบข้อมความไปเรื่อย</br>
                                </h2>
                            </div>
                        </div>
                        <div class="reply-item-footer">
                            <div class="like-count">
                                <span class="like-num"> 10 </span>
                                <span class="like-text"> คนถูกใจ</span>
                            </div>
                            <div class="reply-foot-menu">
                                <div class="like-btn">
                                    <span class="icon"> <i class="fa fa-thumbs-up" aria-hidden="true"></i> </span>
                                    <span class="text"> ถูกใจ </span>
                                </div>
                                <div class="reply-btn">
                                    <span class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </span>
                                    <span class="text"> ตอบกลับ </span>
                                </div>
                                <div class="report-btn" data-toggle="modal" data-target="#reportTopicModal">
                                    <span class="icon"> <i class="itemicon fa fa-trash" aria-hidden="true"></i> </span>
                                    <span class="text"> แจ้งลบ </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="reply-box" data-reply-id="3">
                        <div class="reply-item">
                            <div class="reply-item-head">
                                <div class="member-item">
                                    <div class="member-image image-cropper">
                                        <img src="http://all4desktop.com/data_images/original/4245548-tom-cruise.jpg" class="rounded">
                                    </div>
                                    <div class="member-name">
                                        <div class="main-text"> Tom Cruise </div>
                                    </div>
                                    <div class="member-extra">
                                        <div class="member-contact">
                                            <span class="icon"> <i class="fa fa-user-plus" aria-hidden="true"></i> </span>
                                            <span class="icon"> <i class="fa fa-envelope-o" aria-hidden="true"></i> </span>
                                            <span class="icon"> <i class="fa fa-comments" aria-hidden="true"></i> </span>
                                        </div>
                                    </div>
                                    <div class="reply-count" id="reply-number">
                                        <span class="number"> #3</span>
                                    </div>
                                    <div class="reply-date">
                                        <span class="text">เมื่อวานนี้ เวลา 12:38 น. </span>
                                    </div>
                                </div>
                            </div>
                            <div class="reply-item-body">
                                <div class="reply-main-body" id="reply-body">
                                    <h2>
                                        <b>ทดสอบข้อมความไปเรื่อย</br>
                                    </h2>
                                </div>
                            </div>
                            <div class="reply-item-footer">
                                <div class="like-count">
                                    <span class="like-num"> 10 </span>
                                    <span class="like-text"> คนถูกใจ</span>
                                </div>
                                <div class="reply-foot-menu">
                                    <div class="like-btn">
                                        <span class="icon"> <i class="fa fa-thumbs-up" aria-hidden="true"></i> </span>
                                        <span class="text"> ถูกใจ </span>
                                    </div>
                                    <div class="reply-btn">
                                        <span class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </span>
                                        <span class="text"> ตอบกลับ </span>
                                    </div>
                                    <div class="report-btn" data-toggle="modal" data-target="#reportTopicModal">
                                        <span class="icon"> <i class="itemicon fa fa-trash" aria-hidden="true"></i> </span>
                                        <span class="text"> แจ้งลบ </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="reply-comment-item" data-comment-id="3-1">
                            <div class="reply-item-head">
                                <div class="member-item">
                                    <div class="member-image image-cropper">
                                        <img src="http://all4desktop.com/data_images/original/4245548-tom-cruise.jpg" class="rounded">
                                    </div>
                                    <div class="member-name">
                                        <div class="main-text"> Tom Cruise </div>
                                    </div>
                                    <div class="member-extra">
                                        <div class="member-contact">
                                            <span class="icon"> <i class="fa fa-user-plus" aria-hidden="true"></i> </span>
                                            <span class="icon"> <i class="fa fa-envelope-o" aria-hidden="true"></i> </span>
                                            <span class="icon"> <i class="fa fa-comments" aria-hidden="true"></i> </span>
                                        </div>
                                    </div>
                                    <div class="reply-count" id="reply-number">
                                        <span class="number"> #3-1</span>
                                    </div>
                                    <div class="reply-date">
                                        <span class="text">เมื่อวานนี้ เวลา 12:38 น. </span>
                                    </div>
                                </div>
                            </div>
                            <div class="reply-item-body">
                                <div class="reply-main-body" id="reply-body">
                                    <h2>
                                        <b>ทดสอบข้อมความไปเรื่อย</br>
                                    </h2>
                                </div>
                            </div>
                            <div class="reply-item-footer">
                                <div class="like-count">
                                    <span class="like-num"> 10 </span>
                                    <span class="like-text"> คนถูกใจ</span>
                                </div>
                                <div class="reply-foot-menu">
                                    <div class="like-btn">
                                        <span class="icon"> <i class="fa fa-thumbs-up" aria-hidden="true"></i> </span>
                                        <span class="text"> ถูกใจ </span>
                                    </div>
                                    <div class="reply-btn">
                                        <span class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </span>
                                        <span class="text"> ตอบกลับ </span>
                                    </div>
                                    <div class="report-btn" data-toggle="modal" data-target="#reportTopicModal">
                                        <span class="icon"> <i class="itemicon fa fa-trash" aria-hidden="true"></i> </span>
                                        <span class="text"> แจ้งลบ </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="more-reply-comment">
                            <div class="reply-comment-btn" onclick="showReplyComment($(this).parent().parent().parent().parent().data('reply-id'))">
                                <div class="text"> ความคิดเห็นตอบกลับ 1 ความคิดเห็น </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="comment-post">
                <div class="comment-post-title">
                    <span class="icon"> <i class="fa fa-comments" aria-hidden="true"></i> </span>
                    <span class="text"> แสดงความคิดเห็น </span>
                </div>
                <div id="comment-root" class="comment-root color-theme">
                    <div class="comment-root-box">
                        <div class="comment-text-editor">
                            <div class="comment-input">
                                <textarea class="comment-text-area">
                                </textarea>
                            </div>
                            <div class="post-control-element">
                                <div class="post-control-group">
                                    <div class="text-style-button-title hidden-mobile">
                                    </div><i class="fa fa-bold"></i>
                                    <div class="text-style-button-title hidden-mobile">
                                    </div><i class="fa fa-italic"></i>
                                    <div class="text-style-button-title hidden-mobile">
                                    </div><i class="fa fa-underline"></i>
                                    <div class="text-style-button-title more-left-15">
                                    </div><i class="fa fa-eraser"></i>
                                </div>
                                <div class="post-control-group">
                                    <div class="text-style-button-title more-left-15">
                                    </div><i class="fa fa-align-left"></i>
                                    <div class="text-style-button-title more-left-15">
                                    </div><i class="fa fa-align-center"></i>
                                    <div class="text-style-button-title">
                                    </div><i class="fa fa-align-right"></i>
                                </div>
                                <div class="post-control-group">
                                    <div class="text-style-button-title">
                                    </div><i class="fa fa-font"></i>
                                </div>
                                <div class="post-control-group">
                                    <div class="text-style-button-title">
                                    </div><i class="fa fa-link" style="color: rgb(204, 204, 204);"></i>
                                    <div class="text-style-button-title more-left-32">
                                    </div><i class="fa fa-unlink" style="color: rgb(204, 204, 204);"></i>
                                </div>
                            </div>
                            <div class="post-control-group">
                                <div class="text-style-button-title more-left-32 hidden-mobile">
                                </div><i class="fa fa-smile-o" style="color: rgb(204, 204, 204);"></i>
                                <div class="text-style-button-title more-left-32">
                                </div><i class="fa fa-youtube-play" style="color: rgb(204, 204, 204);"></i>
                                <div class="text-style-button-title hidden-mobile">
                                </div><i class="fa fa-photo" style="color: rgb(204, 204, 204);"></i>
                            </div>
                            <div class="comment-submit-btn">
                                <span class="icon"> <i class="fa fa-check-square-o" aria-hidden="true"></i> </span>
                                <span class="text"> โพสต์ </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.inc-footer')



        <div id="reportTopicModal" class="modal fade" role="dialog">
            <div class="modal-dialog ">
                <div class="modal-content ">
                    <div class="modal-header">
                        <span class="icon"><i class="itemicon fa fa-trash" aria-hidden="true"></i> </span>
                        <span class="text">แจ้งลบความเห็น</h3>
                    </div>
                    <div class="modal-body">
                        <div class="form-report">
                            <div class="form-row email-form">
                                <div class="label">อีเมล์ผู้แจ้ง</div>
                                <input type="text" class="form-control" placeholder="example@mail.com" name="email" foundation-rule="require|email">
                            </div>
                            <div class="form-row email-form">
                                <div class="label">เหตุผลที่ลบ</div>
                                <select class="form-control" id="reason" name="reason_id" value="" foundation-rule="require" validate-msg-require="กรุณาเลือกเหตุผล">
                                    <option value="">เลือกเหตุผล </option>
                                    <option value="18">ผิดบอร์ด </option>
                                    <option value="17">การเมือง </option>
                                    <option value="16">ผิดลิขสิทธิ์ </option>
                                    <option value="15">หอพัก </option>
                                    <option value="14">แจกเมล/หาเพื่อน </option>
                                    <option value="13">โพสซ้ำ </option>
                                    <option value="12">ค่าย กิจกรรม </option>
                                    <option value="11">ขายคอร์ส </option>
                                    <option value="10">ซื้อขายแลกเปลี่ยน </option>
                                    <option value="9">ข่าวลือ </option>
                                    <option value="8">ผิดกฎ </option>
                                    <option value="7">ทะเลาะ </option>
                                    <option value="5">ส่วนตัว/ลงเบอร์โทร </option>
                                    <option value="4">หยาบ </option>
                                    <option value="3">โป๊ </option>
                                    <option value="2">โฆษณา </option>
                                    <option value="1">อื่นๆ </option>
                                </select>
                                <div class="errortxt"></div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger cancel-btn" data-dismiss="modal">ยกเลิก</button>
                        <button class="btn btn-primary submit-btn">ตกลง</button>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>