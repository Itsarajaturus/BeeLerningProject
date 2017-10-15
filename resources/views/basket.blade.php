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
                    <span class="text"> ตะกร้าสินค้า</span><br>
                    <span class="sub-text"> คอร์สที่สมัคร กรุณาตรวจสอบ ก่อนชำระเงิน </span>
                </div>

                <div class="col-md-12 margin-top">
                    <div class="col-md-4">
                        <div class="basket-icon">
                            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <table class="basket-box">
                            <thead>
                                <tr class="">
                                    <th class="no"> ลำดับ </th>
                                    <th class="name"> ชื่อ </th>
                                    <th class="price"> ราคา </th>
                                    <th class="del"> ลบ </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="basket-item odd">
                                    <td class="no"> 1 </td>
                                    <td class="name"> ภาษาอังกฤษ </td>
                                    <td class="price"> 1,200 </td>
                                    <td class="manage"> <i class="fa fa-minus-circle" aria-hidden="true"></i> </td>
                                </tr>
                                <tr class="basket-item">
                                    <td class="no"> 1 </td>
                                    <td class="name"> ภาษาอังกฤษ </td>
                                    <td class="price"> 1,200 </td>
                                    <td class="manage"> <i class="fa fa-minus-circle" aria-hidden="true"></i> </td>
                                </tr>
                                <tr class="basket-item odd">
                                    <td class="no"> 1 </td>
                                    <td class="name"> ภาษาอังกฤษ </td>
                                    <td class="price"> 1,200 </td>
                                    <td class="manage"> <i class="fa fa-minus-circle" aria-hidden="true"></i> </td>
                                </tr>
                                <tr class="basket-item">
                                    <td class="no"> 1 </td>
                                    <td class="name"> ภาษาอังกฤษ </td>
                                    <td class="price"> 1,200 </td>
                                    <td class="manage"> <i class="fa fa-minus-circle" aria-hidden="true"></i> </td>
                                </tr>
                                <tr class="basket-item odd">
                                    <td class="no"> 1 </td>
                                    <td class="name"> ภาษาอังกฤษ </td>
                                    <td class="price"> 1,200 </td>
                                    <td class="manage"> <i class="fa fa-minus-circle" aria-hidden="true"></i> </td>
                                </tr>
                                <tr class="basket-item">
                                    <td class="no"> 1 </td>
                                    <td class="name"> ภาษาอังกฤษ </td>
                                    <td class="price"> 1,200 </td>
                                    <td class="manage"> <i class="fa fa-minus-circle" aria-hidden="true"></i> </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="know-back">
                            <div class="back-btn" onclick="window.open('payment', '_parent');">
                                <span class="text"> ชำระเงิน </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.inc-footer')
    </body>

</html>