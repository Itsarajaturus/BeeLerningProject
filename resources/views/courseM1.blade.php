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
                <span class="text"> คอร์สเรียน ม.1 - ม.3 </span>
            </div>

            <div class="know-main">
                <div class="know-title">
                    <span class="text"> คอร์สเรียน ม.1 - ม.3 </span><br>
                    <span class="sub-text"> เลือก ชั้นปี และวิชา ที่ท่านต้องการ </span>
                </div>
                <div class="know-fillter">
                    <div class="know-fillter-item col-md-2">
                        <span class="know-label"> ชั้นปี </span>
                        <select class="know-select" name="grade-select">
                            <option value="0" selected> ทั้งหมด </option>
                            <option value="1"> ม.1 </option>
                            <option value="2"> ม.2 </option>
                            <option value="3"> ม.3 </option>
                        </select>
                    </div>

                    <div class="know-fillter-item col-md-2">
                        <span class="know-label"> วิชา </span>
                        <select class="know-select" name="subject-select">
                            <option value="0" selected> ทั้งหมด </option>
                            <option value="1"> ภาษาไทย </option>
                            <option value="2"> คณิตศาสตร์ </option>
                            <option value="3"> วิทยาศาสตร์ </option>
                            <option value="4"> ภาษาอังกฤษ </option>
                            <option value="5"> สังคมศึกษา </option>
                            <option value="6"> อื่นๆ </option>
                        </select>
                    </div>
                </div>
                <div class="know-container">
                    <div class="row know-item-row">
                        <div class="know-item col-md-3">
                            <div class="know-item-box" onclick="window.open('course_information', '_parent');">
                                <div class="know-item-image" onclick="window.open('knowledge_sheet', '_parent');">
                                    <img src="{{asset('/assets/Image/knowledge/know1-1.png')}}" alt="Lorem Ipsum" class="">
                                </div>
                                <div class="share-btn">
                                    <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                                </div>
                                <div class="know-desc">
                                    <div class="know-item-title" onclick="window.open('knowledge_sheet', '_parent');">
                                        YouTube กำลังทดสอบฟีเจอร์พรีวิววิดีโอ 3 วินาที
                                    </div>
                                    <div class="know-item-text" onclick="window.open('knowledge_sheet', '_parent');">
                                        YouTube กำลังทดสอบฟีเจอร์ใหม่ เป็นการแสดงพรีวิวของวิดีโอ ความยาว 3 วินาทีเมื่อผู้ใช้เอาเม้าส์ไปชี้ที่ thumbnail ของวิดีโอ ซึ่งสามารถดูได้จากทั้งหน้าแรก, หน้าผลการค้นหา, แท็บ subscription, และแท็บ Trending
                                    </div>
                                </div>
                                <div class="know-foot">
                                    <div class="like know-foot-item">
                                        <span class="icon"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                                        <span class="text"> 1,036 </span>
                                    </div>
                                    <div class="saw know-foot-item">
                                        <span class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </span>
                                        <span class="text"> 3,232 </span>
                                    </div>
                                    <div class="comment know-foot-item">
                                        <span class="icon"> <i class="fa fa-comments-o" aria-hidden="true"></i> </span>
                                        <span class="text"> 15 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="know-item col-md-3">
                            <div class="know-item-box" onclick="window.open('course_information', '_parent');">
                                <div class="know-item-image" onclick="window.open('knowledge_sheet', '_present');">
                                    <img src="{{asset('/assets/Image/knowledge/know1-2.png')}}" alt="Lorem Ipsum" class="">
                                </div>
                                <div class="share-btn">
                                    <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                                </div>
                                <div class="know-desc">
                                    <div class="know-item-title">
                                        เจ้าของห้องเช่า Airbnb ไม่ยอมให้ลูกค้าเข้าพัก ด้วยเหตุผล "เธอเป็นคนเอเชีย"
                                    </div>
                                    <div class="know-item-text">
                                        เกิดเรื่องราวฉาวโฉ่ขึ้น เมื่อ Tami Barker เจ้าของห้องเช่า Airbnb ที่แคลิฟอร์เนีย ปฏิเสธไม่ให้ Dyne Suh ลูกค้ารายหนึ่งมาใช้ห้อง โดย Barker ให้เหตุผลว่า เพราะเธอเป็นคนเอเชีย
                                    </div>
                                </div>
                                <div class="know-foot">
                                    <div class="like know-foot-item">
                                        <span class="icon"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                                        <span class="text"> 1,036 </span>
                                    </div>
                                    <div class="saw know-foot-item">
                                        <span class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </span>
                                        <span class="text"> 3,232 </span>
                                    </div>
                                    <div class="comment know-foot-item">
                                        <span class="icon"> <i class="fa fa-comments-o" aria-hidden="true"></i> </span>
                                        <span class="text"> 15 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="know-item col-md-3">
                            <div class="know-item-box" onclick="window.open('course_information', '_parent');">
                                <div class="know-item-image" onclick="window.open('knowledge_sheet', '_present');">
                                    <img src="{{asset('/assets/Image/knowledge/know1-3.png')}}" alt="Lorem Ipsum" class="">
                                </div>
                                <div class="share-btn">
                                    <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                                </div>
                                <div class="know-desc">
                                    <div class="know-item-title">
                                        นกนานไปแล้ว! Tinder จัดทริปให้ผู้ใช้ที่คุยกันในแอพมานานกว่า 3 ปี
                                    </div>
                                    <div class="know-item-text">
                                        มีเรื่องราวแนวแท็บลอยด์น่าสนใจมาฝากกัน ว่าด้วยหนุ่มสาวคู่หนึ่งในสหรัฐฯ ซึ่งศึกษาอยู่ในมหาวิทยาลัยเดียวกัน ที่จับคู่ (match) กันในแอพหาคู่ Tinder ตั้งแต่ปี 2014 โดยเริ่มจากฝ่ายชายส่งข้อความแรกไป แล้วสองเดือนให้หลังฝ่ายหญิงถึงตอบกลับ บทสนทนาข้ามปีเป็นไปแบบแห้งๆ
                                        แบบนี้เสมอมา จนเมื่อวันศุกร์ที่ผ่านมา ฝ่ายชายทวิตภาพบทสนทนาข้ามปีเหล่านี้บนทวิตเตอร์ จนโลกออนไลน์ต่างให้กำลังใจให้ทั้งคู่ได้พบกันจริงๆ สักที
                                    </div>
                                </div>
                                <div class="know-foot">
                                    <div class="like know-foot-item">
                                        <span class="icon"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                                        <span class="text"> 1,036 </span>
                                    </div>
                                    <div class="saw know-foot-item">
                                        <span class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </span>
                                        <span class="text"> 3,232 </span>
                                    </div>
                                    <div class="comment know-foot-item">
                                        <span class="icon"> <i class="fa fa-comments-o" aria-hidden="true"></i> </span>
                                        <span class="text"> 15 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="know-item col-md-3">
                            <div class="know-item-box" onclick="window.open('course_information', '_parent');">
                                <div class="know-item-image" onclick="window.open('knowledge_sheet', '_present');">
                                    <img src="{{asset('/assets/Image/knowledge/know1-4.jpg')}}" alt="Lorem Ipsum" class="">
                                </div>
                                <div class="share-btn">
                                    <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                                </div>
                                <div class="know-desc">
                                    <div class="know-item-title">
                                        ทดสอบหัวข้อ
                                    </div>
                                    <div class="know-item-text">
                                        คำอธิบายสั้นๆ
                                    </div>
                                </div>
                                <div class="know-foot">
                                    <div class="like know-foot-item">
                                        <span class="icon"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                                        <span class="text"> 1,036 </span>
                                    </div>
                                    <div class="saw know-foot-item">
                                        <span class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </span>
                                        <span class="text"> 3,232 </span>
                                    </div>
                                    <div class="comment know-foot-item">
                                        <span class="icon"> <i class="fa fa-comments-o" aria-hidden="true"></i> </span>
                                        <span class="text"> 15 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row know-item-row">
                        <div class="know-item col-md-3">
                            <div class="know-item-box" onclick="window.open('course_information', '_parent');">
                                <div class="know-item-image" onclick="window.open('knowledge_sheet', '_present');">
                                    <img src="{{asset('/assets/Image/knowledge/know2-1.png')}}" alt="Lorem Ipsum" class="">
                                </div>
                                <div class="share-btn">
                                    <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                                </div>
                                <div class="know-desc">
                                    <div class="know-item-title">
                                        สนามบิน 6 แห่งในสหรัฐเริ่มสแกนใบหน้าของคนที่เดินทางออกประเทศ
                                    </div>
                                    <div class="know-item-text">
                                        สำนักข่าว AP รายงานว่าสนามบิน 6 แห่งในสหรัฐ ได้แก่ในบอสตัน, ชิคาโก, ฮิวสตัน, แอตแลนตา, นิวยอร์คและกรุงวอชิงตัน ดีซี เริ่มติดเครื่องสแกนใบหน้าฝั่งขาออก เพื่อเก็บข้อมูลผู้ที่เดินทางออกนอกสหรัฐ
                                    </div>
                                </div>
                                <div class="know-foot">
                                    <div class="like know-foot-item">
                                        <span class="icon"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                                        <span class="text"> 1,036 </span>
                                    </div>
                                    <div class="saw know-foot-item">
                                        <span class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </span>
                                        <span class="text"> 3,232 </span>
                                    </div>
                                    <div class="comment know-foot-item">
                                        <span class="icon"> <i class="fa fa-comments-o" aria-hidden="true"></i> </span>
                                        <span class="text"> 15 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="know-item col-md-3">
                            <div class="know-item-box" onclick="window.open('course_information', '_parent');">
                                <div class="know-item-image" onclick="window.open('/knowledge_sheet', '_present');">
                                    <img src="{{asset('/assets/Image/knowledge/know2-2.png')}}" alt="Lorem Ipsum" class="">
                                </div>
                                <div class="share-btn">
                                    <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                                </div>
                                <div class="know-desc">
                                    <div class="know-item-title">
                                        Google เข้าซื้อ Halli Labs สตาร์ทอัพด้าน AI จากอินเดียที่เพิ่งเปิดไม่นาน
                                    </div>
                                    <div class="know-item-text">
                                        Google มีความเคลื่อนไหวด้านปัญญาประดิษฐ์มากขึ้นเรื่อยๆ แม้ตัวเองจะเป็นผู้นำของโลกด้านนี้อยู่แล้วก็ตาม หลังจากเมื่อวานเปิดตัว ตั้งกองทุน VC ใหม่ Gradient Ventures เน้นลงทุนสตาร์ตอัพด้าน AI ล่าสุดก็ได้เข้าซื้อสตาร์ทอัพปัญญาประดิษฐ์ Halli Labs ความน่าสนใจคือ
                                        ยังเป็นสตาร์ทอัพอายุน้อยมาก เพิ่งก่อตั้งเมื่อวันที่ 22 พฤษภาคมที่ผ่านมานี้เอง และเป็นสตาร์ทอัพจากอินเดียด้วย
                                    </div>
                                </div>
                                <div class="know-foot">
                                    <div class="like know-foot-item">
                                        <span class="icon"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                                        <span class="text"> 1,036 </span>
                                    </div>
                                    <div class="saw know-foot-item">
                                        <span class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </span>
                                        <span class="text"> 3,232 </span>
                                    </div>
                                    <div class="comment know-foot-item">
                                        <span class="icon"> <i class="fa fa-comments-o" aria-hidden="true"></i> </span>
                                        <span class="text"> 15 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="know-item col-md-3">
                            <div class="know-item-box" onclick="window.open('course_information', '_parent');">
                                <div class="know-item-image" onclick="window.open('knowledge_sheet', '_present');">
                                    <img src="{{asset('/assets/Image/knowledge/know2-3.jpg')}}" alt="Lorem Ipsum" class="">
                                </div>
                                <div class="share-btn">
                                    <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                                </div>
                                <div class="know-desc">
                                    <div class="know-item-title">
                                        ยาน Juno ของ NASA ถ่ายภาพความละเอียดสูง 'จุดแดงยักษ์' ของดาวพฤหัส
                                    </div>
                                    <div class="know-item-text">
                                        ยานอวกาศ Juno ของ NASA โคจรใกล้ "จุดแดงยักษ์" (Great Red Spot) ของดาวพฤหัส และส่งภาพถ่ายความละเอียดสูงกลับมาถึงโลก ช่วยให้มนุษย์ได้เห็นภาพจุดแดงยักษ์แบบชัดๆ อย่างที่ไม่เคยทำได้มาก่อน
                                    </div>
                                </div>
                                <div class="know-foot">
                                    <div class="like know-foot-item">
                                        <span class="icon"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                                        <span class="text"> 1,036 </span>
                                    </div>
                                    <div class="saw know-foot-item">
                                        <span class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </span>
                                        <span class="text"> 3,232 </span>
                                    </div>
                                    <div class="comment know-foot-item">
                                        <span class="icon"> <i class="fa fa-comments-o" aria-hidden="true"></i> </span>
                                        <span class="text"> 15 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="know-item col-md-3">
                            <div class="know-item-box" onclick="window.open('course_information', '_parent');">
                                <div class="know-item-image" onclick="window.open('knowledge_sheet', '_present');">
                                    <img src="{{asset('/assets/Image/knowledge/know2-4.jpg')}}" alt="Lorem Ipsum" class="">
                                </div>
                                <div class="share-btn">
                                    <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                                </div>
                                <div class="know-desc">
                                    <div class="know-item-title">
                                        “Valar Morghulis” Duolingo เตรียมเปิดคอร์สเรียนภาษา High Valyrian จาก Game of Thrones
                                    </div>
                                    <div class="know-item-text">
                                        Duolingo แอปเรียนภาษาด้วยตัวเองชื่อดัง เตรียมเปิดตัวคอร์สภาษาใหม่ “High Valyrian” จากซีรีส์ชื่อดัง Game of Thrones ซึ่งผู้ใช้งานสามารถเข้าไปทดลองเรียนแบบเรียนสถานะเบต้าได้ที่หน้าเว็บไซต์ในวันที่ 13 กรกฎาคม 2017 เป็นต้นไป และจะถูกนำเข้าแอปบนสมาร์ทโฟนต่อไป
                                    </div>
                                </div>
                                <div class="know-foot">
                                    <div class="like know-foot-item">
                                        <span class="icon"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                                        <span class="text"> 1,036 </span>
                                    </div>
                                    <div class="saw know-foot-item">
                                        <span class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </span>
                                        <span class="text"> 3,232 </span>
                                    </div>
                                    <div class="comment know-foot-item">
                                        <span class="icon"> <i class="fa fa-comments-o" aria-hidden="true"></i> </span>
                                        <span class="text"> 15 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row know-item-row">
                        <div class="know-item col-md-3">
                            <div class="know-item-box" onclick="window.open('course_information', '_parent');">
                                <div class="know-item-image" onclick="window.open('knowledge_sheet', '_present');">
                                    <img src="{{asset('/assets/Image/knowledge/know3-1.jpg')}}" alt="Lorem Ipsum" class="">
                                </div>
                                <div class="share-btn">
                                    <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                                </div>
                                <div class="know-desc">
                                    <div class="know-item-title">
                                        Elon Musk ซื้อคืนโดเมน X.com จาก PayPal หลังเวลาผ่านมานาน 18 ปี
                                    </div>
                                    <div class="know-item-text">
                                        ทุกวันนี้เราอาจรู้จัก Elon Musk ว่าเป็น "ผู้ร่วมก่อตั้ง PayPal" แต่จริงๆ แล้วเขาเป็นผู้ก่อตั้งเว็บไซต์ X.com ในปี 1999 ก่อนจะควบกิจการกับบริษัทอีกแห่งคือ Confinity ที่ก่อตั้งโดย Max Levchin และ Peter Thiel จากนั้นจึงเปลี่ยนชื่อเป็น PayPal ในภายหลัง
                                    </div>
                                </div>
                                <div class="know-foot">
                                    <div class="like know-foot-item">
                                        <span class="icon"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                                        <span class="text"> 1,036 </span>
                                    </div>
                                    <div class="saw know-foot-item">
                                        <span class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </span>
                                        <span class="text"> 3,232 </span>
                                    </div>
                                    <div class="comment know-foot-item">
                                        <span class="icon"> <i class="fa fa-comments-o" aria-hidden="true"></i> </span>
                                        <span class="text"> 15 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="know-item col-md-3">
                            <div class="know-item-box" onclick="window.open('course_information', '_parent');">
                                <div class="know-item-image" onclick="window.open('knowledge_sheet', '_present');">
                                    <img src="{{asset('/assets/Image/knowledge/know3-2.png')}}" alt="Lorem Ipsum" class="">
                                </div>
                                <div class="share-btn">
                                    <i class="fa fa-share-alt-square" aria-hidden="true"></i>
                                </div>
                                <div class="know-desc">
                                    <div class="know-item-title">
                                        Sony นำ Alexa มารองรับการทำงานของสมาร์ททีวี รุ่น 2016 - 2017
                                    </div>
                                    <div class="know-item-text">
                                        Amazon กำลังพยายามขยายฐานอุปกรณ์รองรับผู้ช่วยอัจฉริยะให้ครอบคลุมมากขึ้น นอกเหนือจากอุปกรณ์ในแบรนด์ตัวเองอย่าง Echo Dot และ Fire TV โดยมีความขยายไปยังมือถือ Huawei's Mate 9 และ HTC U11 ในเร็วๆนี้
                                    </div>
                                </div>
                                <div class="know-foot">
                                    <div class="like know-foot-item">
                                        <span class="icon"> <i class="fa fa-heart" aria-hidden="true"></i> </span>
                                        <span class="text"> 1,036 </span>
                                    </div>
                                    <div class="saw know-foot-item">
                                        <span class="icon"> <i class="fa fa-eye" aria-hidden="true"></i> </span>
                                        <span class="text"> 3,232 </span>
                                    </div>
                                    <div class="comment know-foot-item">
                                        <span class="icon"> <i class="fa fa-comments-o" aria-hidden="true"></i> </span>
                                        <span class="text"> 15 </span>
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
        @include('layouts.inc-footer')
    </body>

</html>