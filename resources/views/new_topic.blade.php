<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bee Learning</title>

        @include('layouts.inc-stylesheet')
        @include('layouts.inc-scripts')

        <script>
            $(document).ready(function () {
                $('.new-topic-content #head-topic').focus(function () {
                    $(this).attr('placeholder', ' ')
                    $('#head-topic-label').fadeIn(100);
                    $('#head-topic-remain').fadeIn(100);
                }).blur(function () {
                    $(this).attr('placeholder', 'หัวข้อกระทู้')
                    if ($(this).val().length > 0) {

                    } else {
                        $('#head-topic-label').fadeOut(100);
                        $('#head-topic-remain').fadeOut(100);
                    }
                })

                $(".new-topic-content #head-topic").keyup(function (event) {
                    var tmp = $(this).val()
                    var oldTmp = parseInt($('#head-topic-remain').text())
                    if ($(this).val().length <= 150) {
                        $('#head-topic-remain').html('<i class="fa fa-check-circle" aria-hidden="true"></i>' + ' ' + '<span class="num">' + (150 - tmp.length) + '</span')
                        $(this).css('color', '#333333');
                        $('#head-topic-remain').css('color', '#85BB1E');
                    } else {
                        $('#head-topic-remain').html('<i class="fa fa-times-circle" aria-hidden="true"></i>' + ' ' + '<span class="num">' + (150 - tmp.length) + '</span')
                        $('#head-topic-remain').css('color', 'red');
                        $(this).css('color', 'red');
                    }
                })

                $('.new-topic-content #detail-topic').focus(function () {
                    $(this).attr('placeholder', ' ')
                    $('#detail-topic-label').fadeIn(100);
                    $('#detail-topic-remain').fadeIn(100);
                }).blur(function () {
                    $(this).attr('placeholder', 'เนื้อหากระทู้')
                    if ($(this).val().length > 0) {

                    } else {
                        $('#detail-topic-label').fadeOut(100);
                        $('#detail-topic-remain').fadeOut(100);
                    }
                })

                $(".new-topic-content #detail-topic").keyup(function (event) {
                    var tmp = $(this).val()
                    var oldTmp = parseInt($('#detail-topic-remain').text())
                    if ($(this).val().length <= 500) {
                        $('#detail-topic-remain').html('<i class="fa fa-check-circle" aria-hidden="true"></i>' + ' ' + '<span class="num">' + (500 - tmp.length) + '</span')
                        $(this).css('color', '#333333');
                        $('#detail-topic-remain').css('color', '#85BB1E');
                    } else {
                        $('#detail-topic-remain').html('<i class="fa fa-times-circle" aria-hidden="true"></i>' + ' ' + '<span class="num">' + (500 - tmp.length) + '</span')
                        $('#detail-topic-remain').css('color', 'red');
                        $(this).css('color', 'red');
                    }
                })

                $('.new-topic-content #hashtag-topic').focus(function () {
                    $(this).attr('placeholder', ' ')
                    $('#hashtag-topic-label').fadeIn(100);
                    $('#hashtag-topic-remain').fadeIn(100);
                }).blur(function () {
                    $(this).attr('placeholder', '#แฮชแท็ก')
                    if ($(this).val().length > 0) {

                    } else {
                        $('#hashtag-topic-label').fadeOut(100);
                        $('#hashtag-topic-remain').fadeOut(100);
                    }
                })

                $(".new-topic-content #hashtag-topic").keyup(function (event) {
                    var tmp = $(this).val()
                    var oldTmp = parseInt($('#hashtag-topic-remain').text())
                    if ($(this).val().length <= 100) {
                        $('#hashtag-topic-remain').html('<i class="fa fa-check-circle" aria-hidden="true"></i>' + ' ' + '<span class="num">' + (100 - tmp.length) + '</span')
                        $(this).css('color', '#333333');
                        $('#hashtag-topic-remain').css('color', '#85BB1E');
                    } else {
                        $('#hashtag-topic-remain').html('<i class="fa fa-times-circle" aria-hidden="true"></i>' + ' ' + '<span class="num">' + (100 - tmp.length) + '</span')
                        $('#hashtag-topic-remain').css('color', 'red');
                        $(this).css('color', 'red');
                    }
                })

                $('.new-topic-content #name-topic').focus(function () {
                    $(this).attr('placeholder', ' ')
                    $('#name-topic-label').fadeIn(100);
                    $('#name-topic-remain').fadeIn(100);
                }).blur(function () {
                    $(this).attr('placeholder', 'ชื่อของคุณ')
                    if ($(this).val().length > 0) {

                    } else {
                        $('#name-topic-label').fadeOut(100);
                        $('#name-topic-remain').fadeOut(100);
                    }
                })

                $(".new-topic-content #name-topic").keyup(function (event) {
                    var tmp = $(this).val()
                    var oldTmp = parseInt($('#name-topic-remain').text())
                    if ($(this).val().length <= 50) {
                        $('#name-topic-remain').html('<i class="fa fa-check-circle" aria-hidden="true"></i>' + ' ' + '<span class="num">' + (50 - tmp.length) + '</span')
                        $(this).css('color', '#333333');
                        $('#name-topic-remain').css('color', '#85BB1E');
                    } else {
                        $('#name-topic-remain').html('<i class="fa fa-times-circle" aria-hidden="true"></i>' + ' ' + '<span class="num">' + (50 - tmp.length) + '</span')
                        $('#name-topic-remain').css('color', 'red');
                        $(this).css('color', 'red');
                    }
                })

                $('.new-topic-content #email-topic').focus(function () {
                    $(this).attr('placeholder', ' ')
                    $('#email-topic-label').fadeIn(100);
                    $('#email-topic-remain').fadeIn(100);
                }).blur(function () {
                    $(this).attr('placeholder', 'Email')
                    if ($(this).val().length > 0) {

                    } else {
                        $('#email-topic-label').fadeOut(100);
                        $('#email-topic-remain').fadeOut(100);
                    }
                })

                $(".new-topic-content #email-topic").keyup(function (event) {
                    var tmp = $(this).val()
                    var oldTmp = parseInt($('#email-topic-remain').text())
                    if ($(this).val().length <= 50) {
                        $('#email-topic-remain').html('<i class="fa fa-check-circle" aria-hidden="true"></i>' + ' ' + '<span class="num">' + (50 - tmp.length) + '</span')
                        $(this).css('color', '#333333');
                        $('#email-topic-remain').css('color', '#85BB1E');
                    } else {
                        $('#email-topic-remain').html('<i class="fa fa-times-circle" aria-hidden="true"></i>' + ' ' + '<span class="num">' + (50 - tmp.length) + '</span')
                        $('#email-topic-remain').css('color', 'red');
                        $(this).css('color', 'red');
                    }
                })

                $('#up-pic').change(function () {
                    $('.show-file-area').append('<div class="image-file-name"> ' + $(this).val() + ' </div>')
                });
            });
        </Script>
    </head>

    <body>
        @include('layouts.inc-header')

        <div class="page-main">
            <div class="new-topic-main">
                <div class="new-topic-head">
                    <span class="title-icon"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </span>
                    <span class="title-text"> ตั้งกระทู้ใหม่ </span>
                </div>
                <div class="new-topic-body">
                    <div class="new-topic-content">
                        <span class="new-topic-label" id="head-topic-label">หัวข้อกระทู้</span>
                        <span class="new-topic-remain" id="head-topic-remain">150</span>
                        <textarea class="area-style" placeholder="หัวข้อกระทู้" id="head-topic"></textarea>
                    </div>
                    <div class="new-topic-content">
                        <span class="new-topic-label" id="detail-topic-label">เนื้อหากระทู้</span>
                        <span class="new-topic-remain" id="detail-topic-remain">500</span>
                        <textarea class="area-style" placeholder="เนื้อหากระทู้" id="detail-topic"></textarea>
                    </div>
                    <div class="new-topic-content">
                        <span class="new-topic-label" id="hashtag-topic-label">#แฮชแท็ก</span>
                        <span class="new-topic-remain" id="hashtag-topic-remain">100</span>
                        <textarea class="area-style" placeholder="#แฮชแท็ก" id="hashtag-topic"></textarea>
                    </div>
                </div>
                <div class="new-topic-body margin-top">
                    <div class="new-topic-content image-upload">
                        <div class="head-text"> อัพโหลดรูปภาพ</div>
                        <div class="box-icon"><i class="fa fa-picture-o" aria-hidden="true"></i></div>
                        <div class="show-file-area">
                            <!-- show image file name here -->
                        </div>
                        <div class="desc-text"> คลิกที่ "อัพโหลดรูปภาพ" เพื่อเพิ่มรูปที่ท่านต้องการ </div>
                        <input type="file" name="up-pic" class="hidden" accept="image/*" id="up-pic">
                        <div class="pic-upload-btn">
                            <span class="icon"> <i class="fa fa-plus-circle" aria-hidden="true"></i> </span>
                            <span class="text" onclick="$('#up-pic').click()"> อัพโหลดรูปภาพ </span>
                        </div>
                    </div>
                </div>
                <div class="new-topic-body margin-top">
                    <div class="new-topic-content">
                        <span class="new-topic-label" id="name-topic-label">ชื่อของคุณ</span>
                        <span class="new-topic-remain" id="name-topic-remain">50</span>
                        <textarea class="area-style" placeholder="ชื่อของคุณ" id="name-topic"></textarea>
                    </div>
                    <div class="new-topic-content">
                        <span class="new-topic-label" id="email-topic-label">อีเมล : example@gmail.com </span>
                        <span class="new-topic-remain" id="email-topic-remain">50</span>
                        <textarea class="area-style" placeholder="อีเมล : example@gmail.com" id="email-topic"></textarea>
                    </div>
                </div>
                <div class="new-topic-btn-box">
                    <div class="topic-submit-btn">
                        <span class="icon"> <i class="fa fa-check-square-o" aria-hidden="true"></i> </span>
                        <span class="text"> ตั้งกระทู้ </span>
                    </div>
                    <div class="topic-preview-btn" data-toggle="modal" data-target="#new-preview-topic-modal">
                        <span class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </span>
                        <span class="text"> ดูตัวอย่าง </span>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.inc-footer')

        <!-- Modal -->
        <div id="new-preview-topic-modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-head">
                        <span class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </span>
                        <span class="text"> ตัวอย่างกระทู้ </span>
                        <span class="close-modal-btn" data-dismiss="modal"> <i class="fa fa-times" aria-hidden="true"></i> </span>
                    </div>
                    <div class="modal-body">
                        <div class="preview-main">
                        </div>
                    </div>
                    <div class=" footer-foot ">
                        <div class="preview-submit-btn">
                            <span class="icon"> <i class="fa fa-check-square-o" aria-hidden="true"></i> </span>
                            <span class="text"> ตั้งกระทู้ </span>
                        </div>
                        <div class="preview-close-btn" data-toggle="modal" data-target="#new-preview-topic-modal">
                            <span class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </span>
                            <span class="text"> ปิดหน้าต่าง </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>