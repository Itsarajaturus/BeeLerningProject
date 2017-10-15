<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bee Learning</title>

        @include('layouts.inc-stylesheet')
        @include('layouts.inc-scripts')

    </head>

    <body>

        @include('layouts.inc-header')

        @include('layouts.inc-imageslide')

        <div class="page-main">
            <div class="page-bread-crumbs">
                <span class="text"> หน้าแรก</span>
                <span class="icon"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </span>
                <span class="text"> รายละเอียดคอร์ส </span>
            </div>

            <div class="know-main">
                <div class="know-title">
                    <span class="text"> รายละเอียดคอร์ส </span><br>
                    <span class="sub-text"> ชื่อคอร์ส </span>
                </div>
                <div class="know-container">
                    <div class="row know-item-row">
                        <div class="course-item col-md-12">
                            <div class="course-info-box">
                                <div class="course-title">
                                    <span class="text"> รายละเอียดคอร์ส </span><br>
                                </div>
                                <div class="course-body col-md-12 no-padding">
                                    <div class="course-main-info col-md-9">
                                        <div class="info-text">
                                            Where can I get some? There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a
                                            passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this
                                            the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum
                                            is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                        </div>
                                        <div class="course-buy ">
                                            <div class="course-buy-btn " onclick="window.open('basket', '_parent');">
                                                <span class="text "> สมัคร </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-panel col-md-3">

                                        <div class="teacher-image">
                                            <img src="{{asset('/assets/Image/avatar/avatar1-1.jpg')}}">
                                        </div>
                                        <div class="teacher-name">
                                            <span class="text"> Mr.George Lucas </span>
                                        </div>
                                        <div class="course-info course-price">
                                            <span class="icon"> <i class="fa fa-money" aria-hidden="true"></i> </span>
                                            <span class="text">ค่าสอน : 1,200 บาท</span>
                                        </div>
                                        <div class="course-info course-class">
                                            <span class="icon"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> </span>
                                            <span class="text"> ชั้นปี : ม.1 </span>
                                        </div>
                                        <div class="course-info course-length">
                                            <span class="icon"> <i class="fa fa-clock-o" aria-hidden="true"></i> </span>
                                            <span class="text"> ระยะเวลา : 10 วัน </span>
                                        </div>
                                        <div class="course-info course-subject">
                                            <span class="icon"> <i class="fa fa-book" aria-hidden="true"></i> </span>
                                            <span class="text"> วิชา : ภาษาอังกฤษ </span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="course-info-box">
                                <div class="course-title pull-right">
                                    <span class="text"> บทเรียน (จำนวน) </span><br>
                                </div>
                                <div class="course-body col-md-12 no-padding">
                                    <div class="info-text">
                                        Where can I get some? There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a
                                        passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the
                                        first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is
                                        therefore always free from repetition, injected humour, or non-characteristic words etc.
                                    </div>
                                    <div class="know-back">
                                        <div class="back-btn">
                                            <span class="text"> ทดสอบ </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="know-back">
                        <div class="back-btn" onclick="window.open('index', '_present');">
                            <span class="text"> กลับสู่หน้าหลัก </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.inc-footer')
    </body>

</html>