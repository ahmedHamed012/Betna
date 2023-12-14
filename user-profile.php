<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'betna';
$connect = mysqli_connect($host,$user,$pass,$dbname);
if(mysqli_connect_errno())
{
    die('Sorry There was an error in the connection of the dataBase'.mysqli_connect_error());
}
?>
<html>
    <head>
        <title>Username | Profile</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/user-profile.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
        <script src="https://kit.fontawesome.com/f3ce6fd058.js" crossorigin="anonymous"></script>
    </head>
    <body>
<div class="parent1">
    <div class="container">
        <div class="image">
            <img src="imgs/betnaAr.png">
        </div>
    </div>
</div>
<div class="username-img">
    <div class="card-img">
        <img src="imgs/avatar.png">
    </div>
    <span class="user-nameh">
        مرحباً بك ,اسم العامل أو العميل 
    </span>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2f4ac5" fill-opacity="1" d="M0,64L1440,192L1440,0L0,0Z"></path></svg>

<div class="page-contains">
    <div class="editbar">
        <p class="p-head"><span><i class="fa-solid fa-pen-to-square"></i> تعديل البيانات الخاصة بك </span></p>
        <div class="ancs">
            <p class="anchors" id="gi">المعلومات الاساسية <i class="fa-solid fa-chevron-left"></i></p>
            <p class="anchors" id="ep">البريد الالكترونى وكلمة المرور <i class="fa-solid fa-chevron-left"></i></p>
            <p class="anchors" id="hist">المعاملات السابقة <i class="fa-solid fa-chevron-left"></i></p>
            <p class="anchors" id="ru" >العمال الاكثر طلباً <i class="fa-solid fa-chevron-left"></i></p>
            <p class="anchors">تسجيل الخروج <i class="fa-solid fa-person-walking-arrow-right" style="font-size: 25px;padding-right: 5px;"></i></p>
        </div>
    </div>
    <div class="edit-field">
        <div class="error404" id="error404">
            <img src="imgs/404.png">
            <br>
            <p>
                نأسف , لا يوجد شئ لعرضه الأن..
            </p>
        </div>
        <div class="general-infos" style="display: none;" id="g-i">
            <p>المعلومات الأساسية</p>
            <table>
                <tr>
                    <td>
                        <label>
                        الاسم الأول     
                        </label>
                    </td>
                    <td>
                        <label>
                            اسم العائلة     
                        </label>
                    </td>
                    <tr>
                        <td> <input type="text"0 placeholder="اسم العائلة .."></td>
                        <td> <input type="text" placeholder="الاسم الاول .."></td>
                    </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <label>
                         المحافظة      
                        </label>
                    </td>
                    <td>
                        <label>
                            المنطقة     
                        </label>
                    </td>
                    <tr>
                        <td> <select>
                            <option disabled selected>أختر المحافظة</option>
                            <option>القاهرة</option>
                            <option>الاسكندرية</option>
                            <option>الجيزة</option>
                            <option>شرم الشيخ</option>
                            <option>الغردقة</option>
                            <option>البحيرة</option>
                            <option>المنوفية</option>
                            <option>أسيوط</option>
                            <option>سوهاج</option>
                            <option>قنا</option>
                        </select></td>
                        <td> <select>
                            <option disabled selected>أختر المنطقة</option>
                            <option>مصر الجديدة</option>
                            <option>المطرية</option>
                            <option>عين شمس</option>
                            <option>حلمية الزيتون</option>
                            <option>الزاوية الحمرا</option>
                            <option>بولاق</option>
                            <option>النزهة</option>
                            <option>السلام</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>
                            <label>العنوان بالتفصيل</label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" placeholder="العنوان بالتفصيل " style="width: 600px;">
                        </td>
                        <td></td>
                    </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <label>
                       رقم الهاتف     
                        </label>
                    </td>
                    <tr>
                        <td colspan="2"> <input type="number" placeholder="رقم الهاتف ..." style="width:600px" min="0">  </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                           رقم هاتف ثانوى (إختيارى)
                            </label>
                        </td>
                        <tr>
                            <td colspan="2"> <input type="number" placeholder=" رقم هاتف ثانوى ..." style="width:600px" min="0">  </td>
                            <td></td>
                        </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <button class="save-button"> 
                            حفظ التعديلات 
                        </button>
                    </td>
                </tr>
            </table>
        </div>
        <div class="Email-pass" style="display: none;" id="e-p">
            <p>البريد الالكترونى و كلمة المرور</p>
            <table>
                <tr>
                    <td>
                        <label>
                        البريد الالكترونى     
                        </label>
                    </td>
                    <tr>
                        <td> <input type="email" placeholder="البريد الالكترونى .." style="width: 600px;"></td>
                    </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <label>
                         كلمة المرور القديمة      
                        </label>
                    </td>
                    <tr>
                        <td><input type="password" placeholder="كلمة المرور القديمة .." style="width: 600px;"> </td>
                    </tr>
                    <tr>
                        <td>
                            <label>تأكيد كلمة المرور القديمة</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" placeholder=" تأكيد كلمة المرور القديمة  .." style="width: 600px;"> 
                        </td>
                    </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <label>
                            كلمة المرور الحديثة     
                        </label>
                    </td>
                    <tr>
                        <td> <input type="password" placeholder="كلمة المرور الحديثة ..." style="width:600px">  </td>
                    </tr>
                    <tr>
                        <td>
                            <label>
                           تأكيد كلمة المرور الحديثة 
                            </label>
                        </td>
                        <tr>
                            <td> <input type="password" placeholder="تأكيد كلمة المرور الحديثة ..." style="width:600px">  </td>
                        </tr>
            </table>
            <table>
                <tr>
                    <td>
                        <button class="save-button"> 
                            حفظ التعديلات 
                        </button>
                    </td>
                </tr>
            </table>
        </div>
        <div class="history" style="display: none;" id="histr"></div>
        <div class="recently-used" style="display: none;" id="r-u"></div>
    </div>
</div>
<div class="footer1">
    <div class="contains1">
        <div class="imagelog">
            <img src="imgs/betnaAr.png">
        </div>
        <div class="listsf1">
            <a href="" class="lists1">من نحن </a>
            <a href="" class="lists1">فريق بيتنا </a>
            <a href="" class="lists1">الوظائف</a>
        </div>
    </div>
    <div class="contains2">
    <div class="headf2">
        <span class="headf">
            هل تريد الانضمام لفريق بيتنا ؟
        </span>
    </div>
    <div class="list2">
        <a href="" class="lists1">
            سجل الآن وأنضم إلى طاقم عمل بيتنا
        </a>
    </div>
    </div>
    <div class="contains3">
    <div class="list3">
        <a href="" class="lists1">الخدمات</a>
        <a href="" class="lists1">المساعدة</a>
        <a href="" class="lists1">أنضم إلينا</a>
        <a href="" class="lists1">معلومات إضافية</a>
    </div>
    </div>
    <div class="contains4">
        <div class="list4">
            <a href="" class="lists2"><i class="fa-brands fa-facebook"></i> <span>FaceBook</span></a>
            <a href="" class="lists2"><i class="fa-brands fa-twitter"></i> <span>Twitter</span></a>
            <a href="" class="lists2"><i class="fa-brands fa-whatsapp"></i> <span> Whatsapp </span></a>
            <a href="" class="lists2"><i class="fa-brands fa-github"></i> <span> GitHub </span></a>
        </div>
    </div>
    </div>
    <div class="copy-rights">
        <p class="copy">
            جميع حقوق الملكية محفوظة - موقع بيتنا للخدمات المنزلية &copy; 2022
        </p>
    </div>
<script src="JS/user-profile-script.js"></script>
    </body>
</html>