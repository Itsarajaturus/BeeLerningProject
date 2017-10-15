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
                $('#up-pic').change(function () {
                    $('.show-file-area').append('<div class="image-file-name"> ' + $(this).val() + ' </div>')
                });
            });
        </Script>
    </head>

    <body>
        @include('layouts.inc-header')

        @include('layouts.inc-imageslide')

        <div class="page-main">
            <div class="page-bread-crumbs">
                <span class="text"> หน้าแรก</span>
                <span class="icon"> <i class="fa fa-chevron-right" aria-hidden="true"></i> </span>
                <span class="text"> ข้อมูลเบื้องต้น </span>
            </div>

            <div class="basket-main">
                <div class="know-title">
                    <span class="text"> ข้อมูลเบื้องต้น</span><br>
                    <span class="sub-text"> รายละเอียดข้อมูลเบื้องต้น </span>
                </div>
                <div class="col-md-12 margin-top no-padding">
                    <div class="col-md-3 no-padding">
                        <div class="teacher-info-box">
                            <div class="title"> ข้อมูลเบื้องต้น </div>
                            <div class="teacher-menu-btn active" onclick="teacherMenuToggle($(this), 'profile')">
                                <span class="icon"> <i class="fa fa-list-alt" aria-hidden="true"></i> </span>
                                <span class="text"> ข้อมูลส่วนตัว </span>
                            </div>
                        </div>
                        <div class="teacher-info-box">
                            <div class="title"> ข้อมูลสำหรับผู้สอน </div>
                            <div class="teacher-menu-btn" onclick="teacherMenuToggle($(this), 'edu')">
                                <span class="icon"> <i class="fa fa-graduation-cap" aria-hidden="true"></i> </span>
                                <span class="text"> การศึกษาและประสบการณ์ </span>
                            </div>
                            <div class="teacher-menu-btn" onclick="teacherMenuToggle($(this), 'card')">
                                <span class="icon"> <i class="fa fa-address-card-o" aria-hidden="true"></i> </span>
                                <span class="text"> บัตรประชาชน </span>
                            </div>
                            <div class="teacher-menu-btn" onclick="teacherMenuToggle($(this), 'money')">
                                <span class="icon"> <i class="fa fa-money" aria-hidden="true"></i> </span>
                                <span class="text"> บัญชีและการเงิน </span>
                            </div>
                        </div>
                        <div class="start-teach-job">
                            <div class="teach-btn">
                                <span class="text"> เริ่มต้นงานสอน </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 no-padding">
                        <div class="teach-main">
                            <div class="teach-profile-main">
                                <div class="teach-main-title">
                                    <span class="bold"> โปรไฟล์ของคุณ </span>
                                </div>
                                <div class="edu-box">
                                    <div class="col-md-12 no-padding">
                                        <div class="col-md-12 edu-item avatar-box">
                                            <div class="avatar-display"><i class="fa fa-user-circle" aria-hidden="true"></i></div>
                                            <div class="change-avatar-btn">
                                                <span class="icon "> <i class="fa fa-camera" aria-hidden="true"></i> </span>
                                                <span class="text "> เปลี่ยนรูปโปรไฟล์ </span>
                                            </div>
                                            <span class="extra-icon"> <i class="fa fa-question-circle" aria-hidden="true"></i> </span>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="title"> ชื่อจริง <span class="red">*</span> </span>
                                            <div class="form-group ">
                                                <div class="col-md-10 no-padding">
                                                    <input class="text form-control " name="first-name " type="text" placeholder="ชื่อจริง" />
                                                </div>
                                                <div class="col-md-2 no-padding flex">
                                                    <div class="red arrow-left"></div>
                                                    <span class="warning-profile-text "> กรุณาใสชื่อด้วย</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="title"> นามสกุล <span class="red">*</span> </span>
                                            <div class="form-group ">
                                                <div class="col-md-10 no-padding">
                                                    <input class="text form-control " name="last-name " type="text" placeholder="นามสกุล" />
                                                </div>
                                                <div class="col-md-2 no-padding flex">
                                                    <div class="red arrow-left"></div>
                                                    <span class="warning-profile-text "> กรุณาใสนามสกุลด้วย</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="title"> Username <span class="red">*</span> </span>
                                            <div class="form-group ">
                                                <div class="col-md-10 no-padding">
                                                    <input class="text form-control " name="first-name " type="text" placeholder="Username" />
                                                </div>
                                                <div class="col-md-2 no-padding flex">
                                                    <div class="red arrow-left"></div>
                                                    <span class="warning-profile-text "> กรุณาใส Username</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="title"> Password <span class="red">*</span> </span>
                                            <div class="form-group ">
                                                <div class="extra-btn">
                                                    <span class="icon "> <i class="fa fa-unlock-alt" aria-hidden="true"></i> </span>
                                                    <span class="text "> แก้ไขหรือตั้ง Password </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="title"> Email <span class="red">*</span> </span>
                                            <div class="form-group ">
                                                <div class="col-md-10 no-padding">
                                                    <input class="text form-control " name="email " type="text" placeholder="Email" />
                                                </div>
                                                <div class="col-md-2 no-padding flex">
                                                    <div class="red arrow-left"></div>
                                                    <span class="warning-profile-text "> กรุณาใส Email เท่านั้น</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <span class="title"> เบอร์โทรศัพท์ <span class="red">*</span> </span>
                                            <div class="form-group ">
                                                <div class="col-md-6 no-padding">
                                                    <input class="text form-control " name="phone " type="number" placeholder="เบอร์โทรศัพท์" />
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="extra-btn" id="edit-phone">
                                                        <span class="text "> แก้ไข </span>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 no-padding">
                                                    <span class="warning-text"> คุณยังไมท่ได้ยืนยัน OTP กด "แก้ไข" เพื่อเข้าไปยืนยันเบอร์ของคุณ</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 edu-item">
                                            <span class="title"> เปิดเผยเบอร์โทรศัพท์ <span class="red">*</span> </span>
                                            <div class="">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                                <span class="extra-icon" id="public-phone-help"> <i class="fa fa-question-circle" aria-hidden="true"></i> </span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 edu-item">
                                            <span class="title"> แจ้งเตือนผ่าน SMS <span class="red">*</span> </span>
                                            <div class="">
                                                <label class="switch">
                                                    <input type="checkbox" checked>
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <span class="title"> วัน/เดือน/ปี(ค.ศ.)เกิด <span class="red">*</span> </span>
                                        <div class="form-group ">
                                            <div class="col-md-6 no-padding">
                                                <input class="text form-control " name="birth-date " type="text" placeholder="เช่น 22/11/1988" />\
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 profile-item">
                                        <span class="title"> จังหวัดของคุณ <span class="red">*</span> </span>
                                        <div class="form-group ">
                                            <div class="col-md-6 no-padding">
                                                <select class="text form-control" name="province">
                                                    <option value="0"> กรุณาเลือก </option>
                                                    <option value="1"> กรุงเทพมหานคร </option>
                                                    <option value="2"> กาญจนบุรี </option>
                                                    <option value="3"> ขอนแก่น </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teach-submit">
                                        <div class="form-group ">
                                            <div class="submit-btn">
                                                <span class="text "> บันทึกข้อมูล </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="teach-edu-main hidden">
                                <div class="teach-main-title">
                                    <span class="bold"> การศึกษาและประสบการณ์ </span>
                                </div>
                                <div class="edu-box">
                                    <div class="col-md-12 no-padding">
                                        <div class="col-md-12 edu-item">
                                            <span class="title"> ประวัติการศึกษา<span class="red">*</span> </span>
                                            <div class="form-group">
                                                <textarea class="text form-control" name="edu-data" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 edu-item">
                                            <span class="title"> ความสามารถด้านภาษา<span class="red">*</span> </span>
                                            <div class="form-group">
                                                <textarea class="text form-control" name="lang-data" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 edu-item">
                                            <span class="title"> ประสบการณ์การทำงาน </span>
                                            <div class="form-group">
                                                <textarea class="text form-control" name="job-data" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12 edu-item">
                                            <span class="title"> ใบอนุญาตและรางวัล </span>
                                            <div class="form-group">
                                                <textarea class="text form-control" name="certificate-data" rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teach-submit">
                                        <div class="submit-btn">
                                            <span class="text "> บันทึกข้อมูล </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="teach-card-main hidden">
                                <div class="teach-main-title">
                                    <span class="bold"> บัตรประชาชน </span>
                                </div>
                                <div class="edu-box">
                                    <div class="col-md-12 no-padding ontop">
                                        <div class="col-md-12 no-padding">
                                            <div class="col-md-12">
                                                <span class="title"> เลขบัตรประชาชน <span class="red">*</span> </span>
                                                <div class="form-group ">
                                                    <input class="text form-control " name="card-number " type="number" min="13" placeholder="เลขบัตรประชาชน 13 หลัก" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <span class="title"> คำนำหน้าชื่อ <span class="red">*</span> </span>
                                                <div class="form-group ">
                                                    <select class="text form-control" name="prename">
                                                        <option value="0"> กรุณาเลือก </option>
                                                        <option value="1"> นาย </option>
                                                        <option value="2"> นาง </option>
                                                        <option value="3"> นางสาว </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <span class="title"> ชื่อจริงตามบัตรประชาชน <span class="red">*</span> </span>
                                                <div class="form-group ">
                                                    <input class="text form-control " name="first-name" type="text" placeholder="ชื่อจริงตามบัตรประชาชน" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <span class="title"> นามสกุลจริงตามบัตรประชาชน <span class="red">*</span> </span>
                                                <div class="form-group ">
                                                    <input class="text form-control " name="last-name" type="text" placeholder="นามสกุลจริงตามบัตรประชาชน" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <span class="title"> เพศ <span class="red">*</span> </span>
                                                <div class="form-group ">
                                                    <div class="relative">
                                                        <input class="radio-box" type="radio" name="gender" value="male"> <span class="radio-text"> ชาย </span>
                                                    </div>
                                                    <div class="relative">
                                                        <input class="radio-box" type="radio" name="gender" value="male"> <span class="radio-text"> หญิง </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <span class="title"> สถานะ <span class="red">*</span> </span>
                                                <div class="form-group ">
                                                    <select class="text form-control" name="status">
                                                        <option value="1"> โสด </option>
                                                        <option value="2"> สมรส </option>
                                                        <option value="3"> หย่าร้าง </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <span class="title"> ที่อยู่ตามบัตรประชาชน <span class="red">*</span> </span>
                                                <div class="form-group ">
                                                    <textarea class="text form-control" name="address" rows="3" placeholder="ระบุที่อยู่ตามบัตรประชาชน"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <span class="title"> รหัสไปรษณีย์ <span class="red">*</span> </span>
                                                <div class="form-group ">
                                                    <input class="text form-control " name="last-name" type="number" placeholder="รหัสไปรษณีย์" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <span class="title"> รูปสำเนาบัตรประชาชน(รับรองสำเนาแล้ว) <span class="red">*</span> </span>
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
                                            <div class="col-md-12">
                                                <span class="title"> ที่อยู่ปัจจุบัน <span class="red">*</span> </span>
                                                <div class="form-group ">
                                                    <input class="check-box" name="same-card" type="checkbox" /><span class="checkbox-text"> เหมือนที่อยู่ตามบัตรประชาชน </span>
                                                </div>
                                                <div class="form-group ">
                                                    <textarea class="text form-control" name="address" rows="3" placeholder="ระบุที่อยู่ปัจจุบัน"></textarea>
                                                </div>
                                                <div class="form-group ">
                                                    <input class="text form-control " name="last-name" type="number" placeholder="รหัสไปรษณีย์" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="teach-submit">
                                        <div class="submit-btn">
                                            <span class="text "> บันทึกข้อมูล </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="teach-money-main hidden">
                                <div class="teach-main-title">
                                    <span class="bold"> บัญชีและการเงิน </span>
                                </div>
                                <div class="edu-box">
                                    <div class="col-md-12 no-padding ontop">
                                        <div class="col-md-12 no-padding">
                                            <div class="col-md-12">
                                                <span class="title"> ธนาคาร <span class="red">*</span> </span>
                                                <div class="form-group ">
                                                    <select class="text form-control" name="bank">
                                                        <option value="0"> กรุณาเลือก </option>
                                                        <option value="1"> กสิกรไทย </option>
                                                        <option value="2"> ทหารไทย </option>
                                                        <option value="3"> กรุงไทย </option>
                                                        <option value="3"> ไทยพาณิชย์ </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <span class="title"> สาขา <span class="red">*</span> </span>
                                                <div class="form-group ">
                                                    <input class="text form-control " name="branch" type="text" placeholder="สาขา" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <span class="title"> เลขที่บัญชี <span class="red">*</span> </span>
                                                <div class="form-group ">
                                                    <input class="text form-control " name="bank-number" type="text" placeholder="เลขที่บัญชี" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <span class="title"> รูปสมุดบัญชีธนาคาร(หน้าแรก) <span class="red">*</span> </span>
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
                                        </div>
                                    </div>
                                    <div class="teach-submit">
                                        <div class="submit-btn">
                                            <span class="text "> บันทึกข้อมูล </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @include('layouts.inc-footer')
    </body>

</html>