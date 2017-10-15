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
                $("#content-slider").lightSlider({
                    loop: true,
                    keyPress: true
                });
                $('#image-gallery').lightSlider({
                    gallery: true,
                    item: 1,
                    thumbItem: 9,
                    slideMargin: 0,
                    speed: 500,
                    auto: false,
                    loop: false,
                    onSliderLoad: function () {
                        $('#image-gallery').removeClass('cS-hidden');
                    }
                });

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

        @include('layouts.inc-imageslide')

        <div class="page-main">
            <div class="page-bread-crumbs">
                <span class="text"> หน้าแรก</span>
                <span class="icon"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </span>
                <span class="text"> คลังความรู้ </span>
                <span class="icon"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </span>
                <span class="text"> YouTube กำลังทดสอบฟีเจอร์พรีวิววิดีโอ 3 วินาที </span>
            </div>

            <div class="know-main">
                <div class="know-title">
                    <span class="text"> คลังความรู้ </span><br>
                    <span class="sub-text"> YouTube กำลังทดสอบฟีเจอร์พรีวิววิดีโอ 3 วินาที </span>
                </div>
                <div class="know-container">
                    <ul id="image-gallery" class="gallery list-unstyled lightSlider lSSlide lsGrab" style="width: 8058px; transform: translate3d(-948px, 0px, 0px); height: 342px; padding-bottom: 0%;">
                        <li data-thumb="{{asset('/assets/Image/knowledge/sheet/sheet1.png')}}" class=" clone left " style="width: 474px; margin-right: 0px; ">
                            <img src="{{asset('/assets/Image/knowledge/sheet/sheet1.png')}}">
                        </li>
                        <li data-thumb="{{asset('/assets/Image/knowledge/sheet/sheet2.png')}}" class="lslide " style="width: 474px; margin-right: 0px; ">
                            <img src="{{asset('/assets/Image/knowledge/sheet/sheet2.png')}}">
                        </li>
                        <li data-thumb="{{asset('/assets/Image/knowledge/sheet/sheet3.jpg')}}" class="lslide active " style="width: 474px; margin-right: 0px; ">
                            <img src="{{asset('/assets/Image/knowledge/sheet/sheet3.jpg')}}">
                        </li>
                        <li data-thumb="{{asset('/assets/Image/knowledge/sheet/sheet4.png')}}" class="lslide " style="width: 474px; margin-right: 0px; ">
                            <img src="{{asset('/assets/Image/knowledge/sheet/sheet4.png')}}">
                        </li>
                        <li data-thumb="{{asset('/assets/Image/knowledge/sheet/sheet5.jpg')}}" class="lslide " style="width: 474px; margin-right: 0px; ">
                            <img src="{{asset('/assets/Image/knowledge/sheet/sheet5.jpg')}}">
                        </li>
                        <li data-thumb="{{asset('/assets/Image/knowledge/sheet/sheet6.png')}}" class="lslide " style="width: 474px; margin-right: 0px; ">
                            <img src="{{asset('/assets/Image/knowledge/sheet/sheet6.png')}}">
                        </li>
                    </ul>
                </div>


                <div class="know-comment">
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

                <div class="know-back ">
                    <div class="back-btn " onclick="window.open('knowledge', '_parent');">
                        <span class="text "> กลับหน้า "คลังความรู้" </span>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.inc-footer')
    </body>

</html>