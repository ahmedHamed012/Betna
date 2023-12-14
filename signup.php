<html>
    <head>
        <title>BETNA | Signup Now</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS/style-signup.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
        <script src="https://kit.fontawesome.com/f3ce6fd058.js" crossorigin="anonymous"></script>
        </head>
    </head>
    <body>
    <div class="sec1">
    <form action="index.php" method="post">
        <div class="container" id="container">
            <div class="image">
                <img src="imgs/betna2.png" class="image1">
            </div>
            <div class="contains">

            <div class="part1">
                <div class="field-container">
                 <div class="spans">
                    <i class="fa-solid fa-user-group"></i><span class="caption">الاسم  </span>
                 </div>
                 <div class="input-container">
                    <input type="text" name="fname" placeholder="ادخل الاسم الأول " class="field-name">
                    <input type="text" name="lname" placeholder="ادخل الاسم العائلة " class="field-name">
                 </div>
                </div>

             <div class="field-container">
                 <div class="spans">
                    <i class="fa-solid fa-mobile-screen"></i><span class="caption">رقم الهاتف  </span>
                 </div>
                 <div class="input-container">
                    <input type="number" name="phone" placeholder="ادخل رقم الهاتف الخاص بك " class="field">
                 </div>
             </div>

             <div class="field-container">
                 <div class="spans">
                    <i class="fa-solid fa-envelope"></i><span class="caption">البريد الإلكترونى  </span>
                 </div>
                 <div class="input-container">
                    <input type="email" name="email" placeholder="ادخل البريد الالكترونى " class="field">
                 </div>
             </div>

             <div class="field-container">
                 <div class="spans">
                    <i class="fa-solid fa-unlock"></i><span class="caption">كلمة السر  </span>
                 </div>
                 <div class="input-container">
                    <input type="password" name="password" placeholder="ادخل كلمة المرور " class="field">
                 </div>
             </div>

             <div class="field-container">
             <div class="spans">
                <i class="fa-solid fa-unlock"></i><span class="caption"> تأكيد كلمة المرور</span>
             </div>
             <div class="input-container">
                <input type="password" placeholder="تأكيد كلمة المرور " class="field">
             </div>
            </div>

            <div id="worker-container2">
                <div class="spans">
                    <i class="fa-solid fa-briefcase"></i><span class="caption">الوظيفة وسنوات الخبرة  </span>
                </div>
                <div class="input-container">
                    <select name="job" class="field-job" id="field-job">
                        <option selected disabled>أذكر الوظيفة</option>
                        <option value="الكهرباء">الكهرباء</option>
                        <option value="النجارة">النجارة </option>
                        <option value="النقاشة">النقاشة</option>
                        <option value="السباكة">السباكة</option>
                        <option value="الألوميتال">الألوميتال</option>
                        <option value="others" id="oth">خدمات أخرى</option>
                    </select>
                    <input type="text" name="job" class="field-years" placeholder="أذكر الوظيفة.." id="other-job" style="display:none;">
                    <input type="number" name="exp-years" class="field-years" placeholder="سنوات الخبرة ..">
                </div>
            </div>
            <div class="field-container">
                <input type="checkbox" name="polics">
                <span class="caption" style="color:#2f4ac5">أوافق على جميع البنود والشروط وسياسة الاستخدام</span>
            </div>

            </div>
            <div class="part2">
                <div class="field-container">
                    <div class="spans">
                        <i class="fa-solid fa-location-dot"></i><span class="caption"> العنوان  </span>
                    </div>
                    <div class="input-container">
                        <select id="gov" class="field-add" name="gov">
                            <option selected disabled>اختر المحافظة</option>
                            <option value="cairo">القاهرة</option>
                            <option value="alex">الاسكندرية</option>
                            <option value="giza">الجيزة</option>
                            <option value="menofia">المنوفية</option>
                            <option value="sharqia">الشرقية </option>
                        </select>
                        <select id="region" class="field-add" name="region">
                            <option selected disabled>اختر المنطقة</option>
                            <optgroup id="cairo" style="display: none;">
                            <option value="السلام">مدينة السلام</option>
                            <option value="عين-شمس">عين شمس</option>
                            <option value="النزهة">النزهة</option>
                            <option value="المعادى">المعادى</option>
                            <option value="التجمع">التجمع</option>
                            </optgroup>
                            <optgroup id="alex" style="display: none;">
                            <option value="محطة-الرمل">محطة الرمل </option>
                            <option value="سموحة">سموحة</option>
                            <option value="سيدى-جابر">سيدى جابر</option>
                            <option value="العصافرة">العصافرة</option>
                            <option value="المعمورة">المعمورة</option>
                            </optgroup>
                            <optgroup id="giza" style="display: none;">
                            <option>الدقى والمهندسين</option>
                            <option>6 أكتوبر</option>
                            <option>الهرم</option>
                            <option>فيصل</option>
                            <option>حدائق الأهرام</option>
                            </optgroup>
                            <optgroup id="menofia" style="display: none;">
                            <option>منوف </option>
                            <option>أشمون</option>
                            <option>شبين الكوم</option>
                            <option>مدينة السادات</option>
                            <option>بركة السبع</option>
                            </optgroup>
                            <optgroup id="sharqia" style="display: none;">
                            <option>الزقازيق</option>
                            <option>أبوحماد</option>
                            <option>بلبيس</option>
                            <option>منيا القمح</option>
                            <option>فاقوس</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="input-container">
                        <input type="text" name="address" placeholder="  أدخل هنا العنوان أو محل السكن بالتفصيل.. " class="field">
                    </div>
                </div>

                <div class="field-container">
                    <div class="spans">
                        <i class="fa-solid fa-address-card"></i><span class="caption">الرقم القومى </span>
                    </div>
                    <div class="input-container">
                        <input type="text" name="ssn" placeholder="أدخل هنا الرقم القومى الخاص بك  " class="field">
                    </div>
                </div>
                <div class="field-container">
                    <div class="spans">
                        <i class="fa-solid fa-venus-mars"></i><span class="caption">النوع  </span>
                    </div>
                    <div class="input-container">
                        <input type="radio" name="gender" value="male"><span class="caption">ذكر  </span>
                        <input type="radio" name="gender" value="female"><span class="caption">أنثى  </span>
                    </div>
                </div>
                <div class="field-container">
                    <div class="spans">
                        <i class="fa-solid fa-image"></i><span class="caption">تحميل الصورة الشخصية   </span>
                    </div>
                    <div class="input-container">
                        <input type="file" name="user-image">
                    </div>
                </div>
                <div class="field-container">
                    <div class="spans">
                        <i class="fa-solid fa-user"></i><span class="caption">تسجيل الدخول كـ  </span>
                    </div>
                    <div class="input-container">
                        <input type="radio" name="type" value="client" id="client_rad"><span class="caption">عميل  </span>
                        <input type="radio" name="type" value="worker" id="worker_rad"><span class="caption">عامل  </span>
                    </div>
                </div>
                <div id="worker-container1">
                    <div class="spans">
                        <i class="fa-solid fa-file-pdf" style="font-size: 20px;"></i><span class="caption">تحميل صورة الرقم القومى أو الباسبور (يرجى رفع الملف بصيغة PDF)  </span>
                    </div>
                    <div class="input-container">
                        <input type="file" name="ssn-image">
                    </div>
                </div>
                <div class="field-container">
        <input type="submit" class="sbmt" value="التسجيل">
                </div>
                
            </div>
        </div>
        </div>
        <input type="hidden" name="status-post" value="signup">
    </form>
    </div>   
<script src="JS/index-script.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    $('#field-job').on('change', function() {

if ( this.value == 'others')
  {
    $("#other-job").show();
  }
  else
  {
    $("#other-job").hide();
  }
});
$('#gov').on('change',function(){
if(this.value == 'cairo')
{
    $('#cairo').show();
    $('#alex').hide();
    $('#giza').hide();
    $('#menofia').hide();
    $('#sharqia').hide();
}
else if (this.value == 'alex')
{
    $('#alex').show();
    $('#cairo').hide();
    $('#giza').hide();
    $('#menofia').hide();
    $('#sharqia').hide();
}
else if (this.value == 'giza')
{
    $('#giza').show();
    $('#cairo').hide();
    $('#alex').hide();
    $('#menofia').hide();
    $('#sharqia').hide();
}
else if (this.value == 'menofia')
{
    $('#menofia').show();
    $('#cairo').hide();
    $('#giza').hide();
    $('#alex').hide();
    $('#sharqia').hide();
}
else if (this.value == 'sharqia')
{
    $('#sharqia').show();
    $('#cairo').hide();
    $('#giza').hide();
    $('#menofia').hide();
    $('#alex').hide();
}
});
</script>
    </body>
</html>