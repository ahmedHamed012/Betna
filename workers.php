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
        <title>الوظيفة | العمال المتاحين</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="CSS/workers.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
        <script src="https://kit.fontawesome.com/f3ce6fd058.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="nav">
        <div class="container">
            <div class="image">
                <img src="imgs/betnaAr.png">
            </div>
        </div>
    </div>
    <div class="filter">
        <div class="filter-section">
            <div class="filter-content">
                <p class="filter-p">
                    <i class="fa-solid fa-filter"></i>
                    ابحث حسب
                </p>
                <div class="slct">
                    <div class="select-box">
                        <span style="color: white;">
                            <i class="fa-solid fa-location-dot"></i>
                            المحافظة</span>
                        <select>
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
                        </select>
                    </div>
                    <div class="select-box">
                        <span style="color: white;">
                            <i class="fa-solid fa-location-dot"></i>
                            المنطقة</span>
                        <select>
                            <option disabled selected>أختر المنطقة</option>
                            <option>مصر الجديدة</option>
                            <option>المطرية</option>
                            <option>عين شمس</option>
                            <option>حلمية الزيتون</option>
                            <option>الزاوية الحمرا</option>
                            <option>بولاق</option>
                            <option>النزهة</option>
                            <option>السلام</option>
                        </select>
                    </div>
                    <div class="select-box">
                        <span style="color: white;">
                            <i class="fa-solid fa-user"></i>
                            اسم العامل
                    </span>
                    <input type="text" class="filter-name" placeholder="أكتب اسم العامل هنا ..">
                    </div>
                    <button class="submit-filter">
                        <span>
                            <i class="fa-solid fa-magnifying-glass"></i>
                            أبحث
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
<p class="Job">
    <?php
    echo $_POST["service"]; 
    ?>
    </p>
<div class="all-workers">    
<div class="worker-card">
    <div class="card-content">
        <div class="image-card">
            <img src="imgs/avatar.png">
        </div>
        <div class="infos">
            <span>اسم العامل رباعى</span>
            <span>الوظيفة</span>
            <span>المحافظة</span>
            <span>المنطقة</span>
            <span>
                <i class="fa-regular fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </span>
            <span>متاح اليوم من الساعة 00:00</span>
        </div>
        <div class="buttons">
            <button class="hire"> أطلب الأن</button>
        </div>
    </div>
</div>
<div class="worker-card">
    <div class="card-content">
        <div class="image-card">
            <img src="imgs/avatar.png">
        </div>
        <div class="infos">
            <span>اسم العامل رباعى</span>
            <span>الوظيفة</span>
            <span>المحافظة</span>
            <span>المنطقة</span>
            <span>
                <i class="fa-regular fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </span>
            <span>متاح اليوم من الساعة 00:00</span>
        </div>
        <div class="buttons">
            <button class="hire"> أطلب الأن</button>
        </div>
    </div>
</div>
<div class="worker-card">
    <div class="card-content">
        <div class="image-card">
            <img src="imgs/avatar.png">
        </div>
        <div class="infos">
            <span>اسم العامل رباعى</span>
            <span>الوظيفة</span>
            <span>المحافظة</span>
            <span>المنطقة</span>
            <span>
                <i class="fa-regular fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </span>
            <span>متاح اليوم من الساعة 00:00</span>
        </div>
        <div class="buttons">
            <button class="hire"> أطلب الأن</button>
        </div>
    </div>
</div>
</div>
<br>
<div class="all-workers">    
    <div class="worker-card">
        <div class="card-content">
            <div class="image-card">
                <img src="imgs/avatar.png">
            </div>
            <div class="infos">
                <span>اسم العامل رباعى</span>
                <span>الوظيفة</span>
                <span>المحافظة</span>
                <span>المنطقة</span>
                <span>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </span>
                <span>متاح اليوم من الساعة 00:00</span>
            </div>
            <div class="buttons">
                <button class="hire"> أطلب الأن</button>
            </div>
        </div>
    </div>
    <div class="worker-card">
        <div class="card-content">
            <div class="image-card">
                <img src="imgs/avatar.png">
            </div>
            <div class="infos">
                <span>اسم العامل رباعى</span>
                <span>الوظيفة</span>
                <span>المحافظة</span>
                <span>المنطقة</span>
                <span>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </span>
                <span>متاح اليوم من الساعة 00:00</span>
            </div>
            <div class="buttons">
                <button class="hire"> أطلب الأن</button>
            </div>
        </div>
    </div>
    <div class="worker-card">
        <div class="card-content">
            <div class="image-card">
                <img src="imgs/avatar.png">
            </div>
            <div class="infos">
                <span>اسم العامل رباعى</span>
                <span>الوظيفة</span>
                <span>المحافظة</span>
                <span>المنطقة</span>
                <span>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </span>
                <span>متاح اليوم من الساعة 00:00</span>
            </div>
            <div class="buttons">
                <button class="hire"> أطلب الأن</button>
            </div>
        </div>
    </div>
    </div>
<br>
<div class="all-workers">    
    <div class="worker-card">
        <div class="card-content">
            <div class="image-card">
                <img src="imgs/avatar.png">
            </div>
            <div class="infos">
                <span>اسم العامل رباعى</span>
                <span>الوظيفة</span>
                <span>المحافظة</span>
                <span>المنطقة</span>
                <span>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </span>
                <span>متاح اليوم من الساعة 00:00</span>
            </div>
            <div class="buttons">
                <button class="hire"> أطلب الأن</button>
            </div>
        </div>
    </div>
    <div class="worker-card">
        <div class="card-content">
            <div class="image-card">
                <img src="imgs/avatar.png">
            </div>
            <div class="infos">
                <span>اسم العامل رباعى</span>
                <span>الوظيفة</span>
                <span>المحافظة</span>
                <span>المنطقة</span>
                <span>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </span>
                <span>متاح اليوم من الساعة 00:00</span>
            </div>
            <div class="buttons">
                <button class="hire"> أطلب الأن</button>
            </div>
        </div>
    </div>
    <div class="worker-card">
        <div class="card-content">
            <div class="image-card">
                <img src="imgs/avatar.png">
            </div>
            <div class="infos">
                <span>اسم العامل رباعى</span>
                <span>الوظيفة</span>
                <span>المحافظة</span>
                <span>المنطقة</span>
                <span>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </span>
                <span>متاح اليوم من الساعة 00:00</span>
            </div>
            <div class="buttons">
                <button class="hire"> أطلب الأن</button>
            </div>
        </div>
    </div>
    </div>
<br>
    <div class="all-workers">    
        <div class="worker-card">
            <div class="card-content">
                <div class="image-card">
                    <img src="imgs/avatar.png">
                </div>
                <div class="infos">
                    <span>اسم العامل رباعى</span>
                    <span>الوظيفة</span>
                    <span>المحافظة</span>
                    <span>المنطقة</span>
                    <span>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span>
                    <span>متاح اليوم من الساعة 00:00</span>
                </div>
                <div class="buttons">
                    <button class="hire"> أطلب الأن</button>
                </div>
            </div>
        </div>
        <div class="worker-card">
            <div class="card-content">
                <div class="image-card">
                    <img src="imgs/avatar.png">
                </div>
                <div class="infos">
                    <span>اسم العامل رباعى</span>
                    <span>الوظيفة</span>
                    <span>المحافظة</span>
                    <span>المنطقة</span>
                    <span>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span>
                    <span>متاح اليوم من الساعة 00:00</span>
                </div>
                <div class="buttons">
                    <button class="hire"> أطلب الأن</button>
                </div>
            </div>
        </div>
        <div class="worker-card">
            <div class="card-content">
                <div class="image-card">
                    <img src="imgs/avatar.png">
                </div>
                <div class="infos">
                    <span>اسم العامل رباعى</span>
                    <span>الوظيفة</span>
                    <span>المحافظة</span>
                    <span>المنطقة</span>
                    <span>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span>
                    <span>متاح اليوم من الساعة 00:00</span>
                </div>
                <div class="buttons">
                    <button class="hire"> أطلب الأن</button>
                </div>
            </div>
        </div>
        </div>
<br>
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
    </body>
</html>
