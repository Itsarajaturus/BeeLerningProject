<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bee Learning</title>
        <!-- favicon -->
        @include('layouts.inc-stylesheet')
        @include('layouts.inc-scripts')
        <!--        <link rel="shortcut icon" type="image/png" href="{{asset('/assets/favicon.png')}}" />
                <link rel="stylesheet" type="text/css" href="{{asset('/assets/Content/bootstrap/css/bootstrap.min.css')}}">
                <link rel="stylesheet" href="{{asset('/assets/Content/bootstrap/css/bootstrap-theme.min.css')}}">
                <link rel="stylesheet" href="{{asset('/assets/Content/font-awesome/css/font-awesome.min.css')}}">
                <link rel="stylesheet" href="{{asset('/assets/css/main.css')}}">
                <link rel="stylesheet" href="{{asset('/assets/css/login.css')}}">
                <script src="{{asset('/assets/Content/jquery-3.2.1.min.js')}}"></script>
                <script src="{{asset('/assets/Content/bootstrap/js/bootstrap.min.js')}}"></script>
                <script src="{{asset('/assets/js/main.js')}}"></script>-->
    </head>
    <body>
        @include('layouts.inc-header')

        @include('layouts.inc-imageslide')
        <!--        <div class="slide">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                         Indicators
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                         Wrapper for slides
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{asset('/assets/Image/slide/slide-1.png')}}" alt="Lorem Ipsum" class="img-slide">
                            </div>

                            <div class="item">
                                <img src="{{asset('/assets/Image/slide/slide-2.png')}}" alt="Lorem Ipsum" class="img-slide">
                            </div>

                            <div class="item">
                                <img src="{{asset('/assets/Image/slide/slide-3.png')}}" alt="Lorem Ipsum" class="img-slide">
                            </div>
                        </div>

                         Left and right controls
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>-->
        <!--        <div class="slide-footer">
                    <div class="slide-footer-up">
                    </div>
                    <div class="slide-footer-down">
                    </div>
                </div>-->
        <div class="page-main">
            <div class="page-main-head">
                <!--<h2> เลือกแผนที่ต้องการจากด้านล่าง </h2>-->
            </div>
            <div class="hex-title">
                <span class="text"> ระดับชั้น </span><br>
                <span class="sub-text"> เลือก ระดับชั้น ที่ท่านต้องการ </span>
            </div>
            <div class="in-line hex-row-top">

                <div class="hexagon" id="hex-1">
                    <div class="hexTop"></div>
                    <div class="hexBottom"></div>
                    <div class="hex-text"> ป.1 - ป.2 - ป.3 </div>
                    <div class="hex-btn"> <span class="hex-btn-text" onclick="window.open('courseP1', '_parent');"> ENTER </span></div>
                </div>
                <div class="hexagon" id="hex-2">
                    <div class="hexTop"></div>
                    <div class="hexBottom"></div>
                    <div class="hex-text"> ป.4 - ป.5 - ป.6 </div>
                    <div class="hex-btn"> <span class="hex-btn-text" onclick="window.open('courseP4', '_parent');"> ENTER </span></div>
                </div>
                <div class="hexagon" id="hex-3">
                    <div class="hexTop"></div>
                    <div class="hexBottom"></div>
                    <div class="hex-text"> ม.1 - ม.2 - ม.3 </div>
                    <div class="hex-btn"> <span class="hex-btn-text" onclick="window.open('courseM1', '_parent');"> ENTER </span></div>
                </div>
            </div>
            <div class="in-line hex-row-mid">
                <div class="hexagon" id="hex-4">
                    <div class="hexTop"></div>
                    <div class="hexBottom"></div>
                    <div class="hex-text"> ม.4 - ม.5 - ม.6 </div>
                    <div class="hex-btn"> <span class="hex-btn-text" onclick="window.open('courseM4', '_parent');"> ENTER </span></div>
                </div>
                <div class="hexagon" id="hex-5">
                    <div class="hexTop"></div>
                    <div class="hexBottom"></div>
                    <div class="hex-text"> อุดมศึกษา </div>
                    <div class="hex-btn"> <span class="hex-btn-text" onclick="window.open('courseUniversity', '_parent');"> ENTER </span></div>
                </div>
            </div>
            <div class="in-line hex-row-bottom">
                <div class="hexagon" id="hex-6">
                    <div class="hexTop"></div>
                    <div class="hexBottom"></div>
                    <div class="hex-text"> อื่นๆ </div>
                    <div class="hex-btn"> <span class="hex-btn-text" onclick="window.open('courseEtc', '_parent');"> ENTER </span></div>
                </div>
            </div>
        </div>

        @include('layouts.inc-footer')
    </body>
</html>
