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
                $('.board-btn-item').click(function () {
                    $('.board-btn-item').removeClass('active');
                    $(this).addClass('active');
                });

                $('.top-board-paginate .page-number').click(function () {
                    $('.top-board-paginate .page-number').removeClass('active');
                    $(this).addClass('active');
                });

                $('.top-member-paginate .page-number').click(function () {
                    $('.top-member-paginate .page-number').removeClass('active');
                    $(this).addClass('active');
                });

                $('.all-board-paginate .page-number').click(function () {
                    $('.all-board-paginate .page-number').removeClass('active');
                    $(this).addClass('active');
                });
            });
        </script>
    </head>

    <body>

        @include('layouts.inc-header')

        <div class="page-main col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="board-main">
                <div class="board-menu">
                    <div class="board-main-menu">
                        <div class="board-btn-item active">
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
                <div class="head-board-main row ">
                    <div class="col-xs-12 col-sm-12 col-md-9">
                        <div class="top-board">
                            <div class="top-board-title">
                                <span class="icon"> <i class="fa fa-clock-o" aria-hidden="true"></i> </span>
                                <span class="title"> กระทู้ล่าสุด </span>
                            </div>
                            <div class="top-board-main">
                                <a href="topic">
                                    <div class="topic-item odd">
                                        <div class="topic-desc"> <i class="fa fa-fire red" aria-hidden="true"></i> </div>
                                        <div class="topic-name"> สงสัยเรื่องหลักฐานที่ใช้ในการสอบสัมภาษณ์ครับ ช่วยตอบทีนะครับ </div>
                                        <div class="topic-author"> โดย : Tom Hanks </div>
                                        <div class="topic-views">
                                            <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                            <div class="text"> 130 </div>
                                        </div>
                                        <div class="topic-reply">
                                            <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                            <div class="text"> 10 </div>
                                        </div>
                                        <div class="topic-date">
                                            เมื่อสักครู่ <br>
                                        </div>
                                        <div class="topic-star">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-half" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </a>
                                <div class="topic-item even lock">
                                    <div class="topic-desc"> <i class="fa fa-lock" aria-hidden="true"></i> </div>
                                    <div class="topic-name"> สงสัยเรื่องหลักฐานที่ใช้ในการสอบสัมภาษณ์ครับ ช่วยตอบทีนะครับ [LOCK] </div>
                                    <div class="topic-author"> โดย : Tom Hanks </div>
                                    <div class="topic-views">
                                        <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                        <div class="text"> 130 </div>
                                    </div>
                                    <div class="topic-reply">
                                        <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                        <div class="text"> 10 </div>
                                    </div>
                                    <div class="topic-date">
                                        เมื่อ 34 นาที ที่แล้ว <br> โดย ใครสักคน
                                    </div>
                                    <div class="topic-star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="topic-item odd">
                                    <div class="topic-desc"> <i class="fa fa-certificate yellow" aria-hidden="true"></i> </div>
                                    <div class="topic-name"> หัวข้อกระทู้ที่ถูกกำหนดขึ้น เพื่อการทดสอบ ในกรณีที่หัวข้อกระทู้มีความยาวปานกลาง </div>
                                    <div class="topic-author"> โดย : Tom Hanks </div>
                                    <div class="topic-views">
                                        <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                        <div class="text"> 130 </div>
                                    </div>
                                    <div class="topic-reply">
                                        <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                        <div class="text"> 10 </div>
                                    </div>
                                    <div class="topic-date">
                                        เมื่อ 8 ชั่วโมง ที่ผ่านมา <br>
                                    </div>
                                    <div class="topic-star">
                                        <i class="fa fa-star-half" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="topic-item even">
                                    <div class="topic-desc"> </div>
                                    <div class="topic-name"> หัวข้อกระทู้ที่ถูกกำหนดขึ้น เพื่อการทดสอบ ในกรณีที่หัวข้อกระทู้มีความยาวมากๆ ว่าหัวข้อจะถูกตัดข้อความหรือไม่ อย่างไร ดังนั้นอย่าสนใจกับหัวกระทู้นี้</div>
                                    <div class="topic-author"> โดย : Tom Hanks </div>
                                    <div class="topic-views">
                                        <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                        <div class="text"> 130 </div>
                                    </div>
                                    <div class="topic-reply">
                                        <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                        <div class="text"> 10 </div>
                                    </div>
                                    <div class="topic-date">
                                        เมื่อ 1 วัน ที่ผ่านมา <br>
                                    </div>
                                    <div class="topic-star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <div class="topic-item odd">
                                    <div class="topic-desc"> </div>
                                    <div class="topic-name"> สงสัยเรื่องหลักฐานที่ใช้ในการสอบสัมภาษณ์ครับ ช่วยตอบทีนะครับ </div>
                                    <div class="topic-author"> โดย : Tom Hanks </div>
                                    <div class="topic-views">
                                        <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                        <div class="text"> 130 </div>
                                    </div>
                                    <div class="topic-reply">
                                        <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                        <div class="text"> 10 </div>
                                    </div>
                                    <div class="topic-date">
                                        เมื่อ 1 เดือน ที่ผ่านมา <br>
                                    </div>
                                    <div class="topic-star">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="top-board-paginate">
                                <span class="page-number active"> 1 </span>
                                <span class="page-number"> 2 </span>
                                <span class="page-number"> 3 </span>
                                <span class="page-number"> 4 </span>
                                <span class="page-number"> 5 </span>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <div class="top-member">
                            <div class="top-member-title">
                                <span class="icon"> <i class="fa fa-user" aria-hidden="true"></i> </span>
                                <span class="title"> Top Member </span>
                            </div>
                            <div class="top-member-main col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="member-item top">
                                    <div class="member-image image-cropper">
                                        <img src="http://www.microgiving.com/blog/wp-content/uploads/2014/03/la-oscar-nominations.jpg" class="rounded" />
                                    </div>
                                    <div class="member-name">
                                        <div class="main-text"> Tom Hanks </div>
                                        <div class="sub-text"> สมาชิกระดับ VIP </div>
                                        <div class="member-contact">
                                            <span class="icon"> <i class="fa fa-user-plus" aria-hidden="true"></i> </span>
                                            <span class="icon"> <i class="fa fa-envelope-o" aria-hidden="true"></i> </span>
                                            <span class="icon"> <i class="fa fa-comments" aria-hidden="true"></i> </span>
                                        </div>
                                    </div>
                                    <div class="member-views">
                                        <div class="views-total"> 220,347 </div>
                                    </div>
                                </div>
                                <div class="member-item">
                                    <div class="member-image image-cropper">
                                        <img src="http://all4desktop.com/data_images/original/4245548-tom-cruise.jpg" class="rounded" />
                                    </div>
                                    <div class="member-name">
                                        <div class="main-text"> Tom Cruise </div>
                                        <div class="member-contact">
                                            <span class="icon"> <i class="fa fa-user-plus" aria-hidden="true"></i> </span>
                                            <span class="icon"> <i class="fa fa-envelope-o" aria-hidden="true"></i> </span>
                                            <span class="icon"> <i class="fa fa-comments" aria-hidden="true"></i> </span>
                                        </div>
                                    </div>
                                    <div class="member-views">
                                        <span class="icon"> </span>
                                        <div class="views-total"> 176,563 </div>
                                    </div>
                                </div>
                                <div class="member-item">
                                    <div class="member-image image-cropper">
                                        <img src="http://gazettereview.com/wp-content/uploads/2016/04/will-smith-net-worth.jpg" class="rounded" />
                                    </div>
                                    <div class="member-name">
                                        <div class="main-text"> Will Smith </div>
                                        <div class="member-contact">
                                            <span class="icon"> <i class="fa fa-user-plus" aria-hidden="true"></i> </span>
                                            <span class="icon"> <i class="fa fa-envelope-o" aria-hidden="true"></i> </span>
                                            <span class="icon"> <i class="fa fa-comments" aria-hidden="true"></i> </span>
                                        </div>
                                    </div>
                                    <div class="member-views">
                                        <span class="icon"> </span>
                                        <div class="views-total"> 128,987 </div>
                                    </div>
                                </div>
                                <div class="member-item">
                                    <div class="member-image image-cropper">
                                        <img src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2014/03/07/12/liam-neeson.jpg" class="rounded" />
                                    </div>
                                    <div class="member-name">
                                        <div class="main-text"> Liam Neeson </div>
                                        <div class="member-contact">
                                            <span class="icon"> <i class="fa fa-user-plus" aria-hidden="true"></i> </span>
                                            <span class="icon"> <i class="fa fa-envelope-o" aria-hidden="true"></i> </span>
                                            <span class="icon"> <i class="fa fa-comments" aria-hidden="true"></i> </span>
                                        </div>
                                    </div>
                                    <div class="member-views">
                                        <span class="icon"> </span>
                                        <div class="views-total"> 99,312 </div>
                                    </div>
                                </div>
                                <div class="member-item">
                                    <div class="member-image image-cropper">
                                        <img src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2015/03/08/09/emmawatson.jpg" class="rounded" />
                                    </div>
                                    <div class="member-name">
                                        <div class="main-text"> Emma Watson </div>
                                        <div class="member-contact">
                                            <span class="icon"> <i class="fa fa-user-plus" aria-hidden="true"></i> </span>
                                            <span class="icon"> <i class="fa fa-envelope-o" aria-hidden="true"></i> </span>
                                            <span class="icon"> <i class="fa fa-comments" aria-hidden="true"></i> </span>
                                        </div>
                                    </div>
                                    <div class="member-views">
                                        <span class="icon"> </span>
                                        <div class="views-total"> 13,234 </div>
                                    </div>
                                </div>

                            </div>
                            <div class="top-member-paginate">
                                <span class="page-number active"> 1 </span>
                                <span class="page-number"> 2 </span>
                                <span class="page-number"> 3 </span>
                                <span class="page-number"> 4 </span>
                                <span class="page-number"> 5 </span>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="all-board col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="all-board-title">
                        <span class="icon"> <i class="fa fa-list" aria-hidden="true"></i> </span>
                        <span class="title"> กระทู้ทั้งหมด </span>
                    </div>
                    <div class="all-board-main">
                        <div class="topic-item odd">
                            <div class="topic-desc"> <i class="fa fa-fire red" aria-hidden="true"></i> </div>
                            <div class="topic-name"> สงสัยเรื่องหลักฐานที่ใช้ในการสอบสัมภาษณ์ครับ ช่วยตอบทีนะครับ </div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อสักครู่ <br>
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-item even lock">
                            <div class="topic-desc"> <i class="fa fa-lock" aria-hidden="true"></i> </div>
                            <div class="topic-name"> สงสัยเรื่องหลักฐานที่ใช้ในการสอบสัมภาษณ์ครับ ช่วยตอบทีนะครับ [LOCK] </div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อ 34 นาที ที่แล้ว <br> โดย ใครสักคน
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-item odd">
                            <div class="topic-desc"> <i class="fa fa-certificate yellow" aria-hidden="true"></i> </div>
                            <div class="topic-name"> หัวข้อกระทู้ที่ถูกกำหนดขึ้น เพื่อการทดสอบ ในกรณีที่หัวข้อกระทู้มีความยาวปานกลาง </div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อ 8 ชั่วโมง ที่ผ่านมา <br>
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-item even">
                            <div class="topic-desc"> </div>
                            <div class="topic-name"> หัวข้อกระทู้ที่ถูกกำหนดขึ้น เพื่อการทดสอบ ในกรณีที่หัวข้อกระทู้มีความยาวมากๆ ว่าหัวข้อจะถูกตัดข้อความหรือไม่ อย่างไร ดังนั้นอย่าสนใจกับหัวกระทู้นี้</div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อ 1 วัน ที่ผ่านมา <br>
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-item odd">
                            <div class="topic-desc"> </div>
                            <div class="topic-name"> สงสัยเรื่องหลักฐานที่ใช้ในการสอบสัมภาษณ์ครับ ช่วยตอบทีนะครับ </div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อ 1 เดือน ที่ผ่านมา <br>
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-item odd">
                            <div class="topic-desc"> <i class="fa fa-fire red" aria-hidden="true"></i> </div>
                            <div class="topic-name"> สงสัยเรื่องหลักฐานที่ใช้ในการสอบสัมภาษณ์ครับ ช่วยตอบทีนะครับ </div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อสักครู่ <br>
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-item even lock">
                            <div class="topic-desc"> <i class="fa fa-lock" aria-hidden="true"></i> </div>
                            <div class="topic-name"> สงสัยเรื่องหลักฐานที่ใช้ในการสอบสัมภาษณ์ครับ ช่วยตอบทีนะครับ [LOCK] </div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อ 34 นาที ที่แล้ว <br> โดย ใครสักคน
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-item odd">
                            <div class="topic-desc"> <i class="fa fa-certificate yellow" aria-hidden="true"></i> </div>
                            <div class="topic-name"> หัวข้อกระทู้ที่ถูกกำหนดขึ้น เพื่อการทดสอบ ในกรณีที่หัวข้อกระทู้มีความยาวปานกลาง </div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อ 8 ชั่วโมง ที่ผ่านมา <br>
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-item even">
                            <div class="topic-desc"> </div>
                            <div class="topic-name"> หัวข้อกระทู้ที่ถูกกำหนดขึ้น เพื่อการทดสอบ ในกรณีที่หัวข้อกระทู้มีความยาวมากๆ ว่าหัวข้อจะถูกตัดข้อความหรือไม่ อย่างไร ดังนั้นอย่าสนใจกับหัวกระทู้นี้</div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อ 1 วัน ที่ผ่านมา <br>
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-item odd">
                            <div class="topic-desc"> </div>
                            <div class="topic-name"> สงสัยเรื่องหลักฐานที่ใช้ในการสอบสัมภาษณ์ครับ ช่วยตอบทีนะครับ </div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อ 1 เดือน ที่ผ่านมา <br>
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-item even">
                            <div class="topic-desc"> </div>
                            <div class="topic-name"> หัวข้อกระทู้ที่ถูกกำหนดขึ้น เพื่อการทดสอบ ในกรณีที่หัวข้อกระทู้มีความยาวมากๆ ว่าหัวข้อจะถูกตัดข้อความหรือไม่ อย่างไร ดังนั้นอย่าสนใจกับหัวกระทู้นี้</div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อ 1 วัน ที่ผ่านมา <br>
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-item odd">
                            <div class="topic-desc"> </div>
                            <div class="topic-name"> สงสัยเรื่องหลักฐานที่ใช้ในการสอบสัมภาษณ์ครับ ช่วยตอบทีนะครับ </div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อ 1 เดือน ที่ผ่านมา <br>
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-item even">
                            <div class="topic-desc"> </div>
                            <div class="topic-name"> หัวข้อกระทู้ที่ถูกกำหนดขึ้น เพื่อการทดสอบ ในกรณีที่หัวข้อกระทู้มีความยาวมากๆ ว่าหัวข้อจะถูกตัดข้อความหรือไม่ อย่างไร ดังนั้นอย่าสนใจกับหัวกระทู้นี้</div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อ 1 วัน ที่ผ่านมา <br>
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-item odd">
                            <div class="topic-desc"> </div>
                            <div class="topic-name"> สงสัยเรื่องหลักฐานที่ใช้ในการสอบสัมภาษณ์ครับ ช่วยตอบทีนะครับ </div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อ 1 เดือน ที่ผ่านมา <br>
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-item even">
                            <div class="topic-desc"> </div>
                            <div class="topic-name"> หัวข้อกระทู้ที่ถูกกำหนดขึ้น เพื่อการทดสอบ ในกรณีที่หัวข้อกระทู้มีความยาวมากๆ ยาวจริงๆ ยาวจนไม่รู้จะยาวยังไง ขาวจนสุดลูกหูลูกตา ว่าหัวข้อจะถูกตัดข้อความหรือไม่ อย่างไร ดังนั้นอย่าสนใจกับหัวกระทู้นี้</div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อ 1 วัน ที่ผ่านมา <br>
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-item odd">
                            <div class="topic-desc"> </div>
                            <div class="topic-name"> สงสัยเรื่องหลักฐานที่ใช้ในการสอบสัมภาษณ์ครับ ช่วยตอบทีนะครับ </div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อ 1 เดือน ที่ผ่านมา <br>
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-item even">
                            <div class="topic-desc"> </div>
                            <div class="topic-name"> หัวข้อกระทู้ที่ถูกกำหนดขึ้น เพื่อการทดสอบ ในกรณีที่หัวข้อกระทู้มีความยาวมากๆ ยาวจริงๆ ยาวจนไม่รู้จะยาวยังไง ขาวจนสุดลูกหูลูกตา ว่าหัวข้อจะถูกตัดข้อความหรือไม่ อย่างไร ดังนั้นอย่าสนใจกับหัวกระทู้นี้</div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อ 1 วัน ที่ผ่านมา <br>
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-item odd">
                            <div class="topic-desc"> </div>
                            <div class="topic-name"> สงสัยเรื่องหลักฐานที่ใช้ในการสอบสัมภาษณ์ครับ ช่วยตอบทีนะครับ </div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อ 1 เดือน ที่ผ่านมา <br>
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-item even">
                            <div class="topic-desc"> </div>
                            <div class="topic-name"> หัวข้อกระทู้ที่ถูกกำหนดขึ้น เพื่อการทดสอบ ในกรณีที่หัวข้อกระทู้มีความยาวมากๆ ว่าหัวข้อจะถูกตัดข้อความหรือไม่ อย่างไร ดังนั้นอย่าสนใจกับหัวกระทู้นี้</div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อ 1 วัน ที่ผ่านมา <br>
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="topic-item odd">
                            <div class="topic-desc"> </div>
                            <div class="topic-name"> สงสัยเรื่องหลักฐานที่ใช้ในการสอบสัมภาษณ์ครับ ช่วยตอบทีนะครับ </div>
                            <div class="topic-author"> โดย : Tom Hanks </div>
                            <div class="topic-views">
                                <div class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </div>
                                <div class="text"> 130 </div>
                            </div>
                            <div class="topic-reply">
                                <div class="icon"> <i class="fa fa-comment" aria-hidden="true"></i> </div>
                                <div class="text"> 10 </div>
                            </div>
                            <div class="topic-date">
                                เมื่อ 1 เดือน ที่ผ่านมา <br>
                            </div>
                            <div class="topic-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="all-board-paginate">
                        <span class="page-number active"> 1 </span>
                        <span class="page-number"> 2 </span>
                        <span class="page-number"> 3 </span>
                        <span class="page-number"> 4 </span>
                        <span class="page-number"> 5 </span>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.inc-footer')
    </body>

</html>