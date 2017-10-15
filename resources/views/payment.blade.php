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
                <span class="text"> ตะกร้าสินค้า </span>
            </div>

            <div class="basket-main">
                <div class="know-title">
                    <span class="text"> ชำระเงิน</span><br>
                    <span class="sub-text"> ชำระเงินผ่านบัตรเครดิต / เคาน์เตอร์ชำระเงิน / อื่นๆ </span>
                </div>

                <div class="col-md-12 margin-top no-padding">
                    <div class="col-md-2 no-padding">
                        <div class="payment-type-box">
                            <div class="payment-type-btn active" onclick="paymentToggle($(this), 'card')">
                                <span class="icon"> <i class="fa fa-credit-card" aria-hidden="true"></i> </span>
                                <span class="text"> บัตรเครดิต/เดบีต </span>
                            </div>
                            <div class="payment-type-btn" onclick="paymentToggle($(this), 'counter')">
                                <span class="icon"> <i class="fa fa-usd" aria-hidden="true"></i> </span>
                                <span class="text"> เคาน์เตอร์ชำระเงิน </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 no-padding">
                        <div class="payment-main">
                            <div class="payment-card-main">
                                <div class="payment-main-title">
                                    <span class="bold"> บัตรเครดิต/เดบีต </span>
                                    <img src="{{asset('/assets/Image/payment/mastercard.png')}}" alt="Lorem Ipsum" class="img-payment">
                                    <img src="{{asset('/assets/Image/payment/visa.png')}}" alt="Lorem Ipsum" class="img-payment">
                                    <img src="{{asset('/assets/Image/payment/guarantee.png')}}" alt="Lorem Ipsum" class="img-payment">
                                </div>
                                <div class="payment-notice">
                                    <div class="col-md-3 no-padding">
                                    </div>
                                    <div class="col-md-9 no-padding">
                                        <div class="col-md-12 ">
                                            <span class="title"> หมายเลขบัตรเครดิต </span>
                                            <div class="form-group">
                                                <input class="text form-control" name="card-number" type="number" min="16" placeholder="หมายเลขบัตร 16 หลัก" />
                                            </div>
                                        </div>
                                        <div class="col-md-12 no-padding">
                                            <div class="col-md-6 ">
                                                <span class="title"> วันหมดอายุของบัตร </span>
                                                <div class="form-group">
                                                    <input class="text form-control" name="card-expired" type="text" placeholder="ดด/ปป" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <span class="title "> CVV </span>
                                                <div class="form-group ">
                                                    <input class="text form-control " name="card-cvv " type="number" min="3" placeholder="CVV 3 หลัก" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12  ">
                                            <span class="title "> ชื่อบนบัตร </span>
                                            <div class="form-group ">
                                                <input class="text form-control " name="card-name " type="text" placeholder="ชื่อผู้ถือบัตร" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="payment-counter-main hidden">
                                <div class="payment-main-title">
                                    <span class="bold"> เคาน์เตอร์ชำระเงิน </span>
                                </div>
                                <div class="payment-notice">
                                    <div class="col-md-4 no-padding">
                                        <span class="title"> กรุณาอ่านก่อนชำระเงิน </span>
                                        <div class="notice-item-box">
                                            <div class="notice-item">
                                                <span class="icon"> <i class="fa fa-circle" aria-hidden="true"></i> </span>
                                                <span class="text"> ชำระเงินภายในวันและเวลาที่กำหนด ผ่านเคาน์เตอร์ที่เลือก </span>
                                            </div>
                                            <div class="notice-item">
                                                <span class="icon"> <i class="fa fa-circle" aria-hidden="true"></i> </span>
                                                <span class="text"> สามารถพิมพ์บาร์โค๊ดเพื่อแสดงที่แคชเชียร์ </span>
                                            </div>
                                            <div class="notice-item">
                                                <span class="icon"> <i class="fa fa-circle" aria-hidden="true"></i> </span>
                                                <span class="text"> อาจมีค่าธรรมเนียมชำระเงินเพิ่มเติมจากผู้ให้บริการชำระเงิน </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 no-padding">
                                        <span class="title"> เลือกเคาน์เตอร์ </span>
                                        <div class="col-md-12 no-padding">
                                            <div class="payment-counter-item">
                                                <input type="radio" name="gender" value="male" checked> Family Mart
                                                <img src="{{asset('/assets/Image/payment/family_mart.jpg')}}" alt="" class="img-payment-counter">
                                            </div>
                                        </div>
                                        <div class="col-md-12 no-padding">
                                            <div class="payment-counter-item">
                                                <input type="radio" name="gender" value="male"> Tesco Lotus
                                                <img src="{{asset('/assets/Image/payment/Tesco_Lotus.png')}}" alt="" class="img-payment-counter">
                                            </div>
                                        </div>
                                        <div class="col-md-12 no-padding">
                                            <div class="payment-counter-item">
                                                <input type="radio" name="gender" value="male"> Big C
                                                <img src="{{asset('/assets/Image/payment/Big_C.png')}}" alt="" class="img-payment-counter">
                                            </div>
                                        </div>
                                        <div class="col-md-12 no-padding">
                                            <div class="payment-counter-item">
                                                <input type="radio" name="gender" value="male"> Pay at Post
                                                <img src="{{asset('/assets/Image/payment/pay_at_post.png')}}" alt="" class="img-payment-counter">
                                            </div>
                                        </div>
                                        <div class="col-md-12 no-padding">
                                            <div class="payment-counter-item">
                                                <input type="radio" name="gender" value="male"> True Money Express
                                                <img src="{{asset('/assets/Image/payment/TrueMoney.jpg')}}" alt="" class="img-payment-counter">
                                            </div>
                                        </div>
                                        <div class="col-md-12 no-padding">
                                            <div class="payment-counter-item">
                                                <input type="radio" name="gender" value="male"> mPay Station
                                                <img src="{{asset('/assets/Image/payment/mpay.png')}}" alt="" class="img-payment-counter">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="know-back pull-right ">
                            <div class="back-btn " onclick="window.open('index', '_present');">
                                <span class="text "> ยืนยันการชำระเงิน </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.inc-footer')
    </body>

</html>