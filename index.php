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
<!DOCTYPE html>
<html>
    <head>
<title>BETNA Official Web Site</title>
<meta charset="UTF-8">
<meta name="description" content="Welcome To BETNA Web application in our application you can rent aspecialist in any service you need , Rent Now ... ">
<link rel="stylesheet" href="CSS/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
<script src="https://kit.fontawesome.com/f3ce6fd058.js" crossorigin="anonymous"></script>
</head>
<body>
<?php
if(!isset($_POST["status-post"]))
{
    echo "
    <div class='nav'>    
        <table style='padding-right:30px;padding-top: 10px;display: inline-block;'>
        <tr>
        <td><i class='fa-solid fa-user-plus'></i></td>   
        <td><a class = 'ancnav' href='signup.php' target='_blank'>تسجيل  </a></td>
        <td><span style='font-weight: bold;font-size: 30px;'>|</span></td>
        <td><i class='fa-solid fa-right-to-bracket' style='font-size: 25px;'></i></td>   
        <td><a class = 'ancnav' href='login.php' target='_blank'>دخول</a><td></td>
        </tr>
        </table>
        <img src='imgs/logo.png' id='logo1'>
    </div>
    ";
}
else if($_POST["status-post"] == 'signup' and $_POST["type"] == 'worker')
{
    $quer = "INSERT INTO worker (first_name,last_name,gender,phone,email,worker_ssn,worker_password,exp_years,worker_img,worker_pass_img,worker_gov,worker_region,full_address,job)
    values ("."'".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["gender"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["ssn"]."','".$_POST["password"]."','".$_POST["exp-years"]."','".$_POST["user-image"]."','".$_POST["ssn-image"]."','".$_POST["gov"]."','".$_POST["region"]."','".$_POST["address"]."','".$_POST["job"]."')";
    $result = mysqli_query($connect,$quer);
    if($result)
    {
        echo "
        <div class='nav'>    
        <table style='padding-right:30px;padding-top: 10px;display: inline-block;'>
        <tr>
        <td><i class='fa-solid fa-user'></i></td>   
        <td><a class = 'ancnav' href='user-profile.php' target='_blank'>مرحباًبك , ".$_POST["fname"]." ".$_POST["lname"]."</a></td>
        <td><a class = 'ancnav' href='#' target='_blank' style='margin-right:40px'><i class='fa-solid fa-list-ul'></i> الطلبات المتاحة </a></td>
        </tr>
        </table>
        <img src='imgs/logo.png' id='logo1'>
    </div>
    ";
    }
    else
        echo "There was a problem in the insert ".mysqli_error($connect);
}
else if($_POST["status-post"] == 'signup' and $_POST["type"] == 'client')
{
    $quer = "INSERT INTO client (first_name,last_name,gender,phone,email,client_ssn,client_password,client_img,client_gov,client_region,full_address)
    values ("."'".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["gender"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["ssn"]."','".$_POST["password"]."','".$_POST["user-image"]."','".$_POST["gov"]."','".$_POST["region"]."','".$_POST["address"]."')";
    $result = mysqli_query($connect,$quer);
    if($result)
    {
        echo "
        <div class='nav'>    
        <table style='padding-right:30px;padding-top: 10px;display: inline-block;'>
        <tr>
        <td><i class='fa-solid fa-caret-down' id='drop-down'></i></td>   
        <td><a class = 'ancnav' href='user-profile.php' target='_blank'>مرحباًبك , ".$_POST["fname"]." ".$_POST["lname"]."</a></td>
        <td><a class = 'ancnav' href='#' target='_blank' style='margin-right:40px'><i class='fa-solid fa-list-ul'></i>طلباتك </a></td>
        </tr>
        </table>
        <img src='imgs/logo.png' id='logo1'>
    </div>
    ";
    }
    else
        echo "There was a problem in the insert ".mysqli_error($connect);
}
else if($_POST["status-post"] == 'signin' and $_POST["type"] == 'worker')
{
    $quer = "SELECT first_name,last_name FROM worker where (email = '".$_POST["signin-email"]."'". "and worker_password = '".$_POST["signin-pass"]."')";
    $result = mysqli_query($connect,$quer);
    if($result){
    while($row = mysqli_fetch_assoc($result))
    {
        echo "
        <div class='nav'>    
        <table style='padding-right:30px;padding-top: 10px;display: inline-block;'>
        <tr>
        <td><i class='fa-solid fa-caret-down' id='drop-down'></i></td>   
        <td><a class = 'ancnav' href='user-profile.php' target='_blank'>مرحباًبك , ".$row["first_name"]." ".$row["last_name"]."</a></td>
        <td><a class = 'ancnav' href='#' target='_blank' style='margin-right:40px'><i class='fa-solid fa-list-ul'></i>الطلبات المتاحة </a></td>
        </tr>
        </table>
        <img src='imgs/logo.png' id='logo1'>
    </div>
    ";
    }
    }
    else
    echo "There was a problem in the search ".mysqli_error($connect);
}
else if($_POST["status-post"] == 'signin' and $_POST["type"] == 'client')
{
    $quer = "SELECT first_name,last_name FROM client where (email = '".$_POST["signin-email"]."'". "and client_password = '".$_POST["signin-pass"]."')";
    $result = mysqli_query($connect,$quer);
    if($result){
    while($row = mysqli_fetch_assoc($result))
    {
        echo "
        <div class='nav'>    
        <table style='padding-right:30px;padding-top: 10px;display: inline-block;'>
        <tr>
        <td><i class='fa-solid fa-caret-down' id='drop-down'></i></td>   
        <td><a class = 'ancnav' href='user-profile.php' target='_blank'>مرحباًبك , ".$row["first_name"]." ".$row["last_name"]."</a></td>
        <td><a class = 'ancnav' href='#' target='_blank' style='margin-right:40px'><i class='fa-solid fa-list-ul'></i>طلباتك </a></td>
        </tr>
        </table>
        <img src='imgs/logo.png' id='logo1'>
    </div>
    ";
    }
    }
    else
    echo "There was a problem in the search ".mysqli_error($connect);
}
?>
<div class="bubble" style="display:none;" id="bubble">
    <div class="profile">
        <form>
            <input type="hidden" value="">
            <input type="submit" value="تعديل البيانات " class="prof-ancs">
            <i class="fa-solid fa-chevron-left" style="color: white;"></i><i class="fa-solid fa-chevron-left" style="color: white;"></i>
        </form>
    </div>
    <div class="signout">
        <a href="#" class="prof-ancs">تسجيل الخروج</a><i class="fa-solid fa-arrow-right-from-bracket" style="padding-right:10px;color: white;"></i>
    </div>
</div>
<div class="fstsec">
    <div style="height: 20%;"></div>
    <div style="height: 50%;">
   <p id="intro"> أهلاً وسهلاً بكم فى تطبيق بيتنا  </p>
   <p id="smlintro">هذا التطبيق يجمع ألاف المتخصصين فى إصلاح مختلف الأعطال والمشاكل التى تواجهك فى المنزل
       <br> ابحث عن الخدمة التى تريدها الان من محرك البحث   </p>
    </div>
    <div style="height: 30%;text-align: center;top:20%;">
        <div class="searchcontainer">
<table style="margin:0 auto;width: 100%;height: 100%;vertical-align: middle;">
    <tr>
        <td>
            <input type="text" class="search" placeholder="ابحث عن خدمتك من هنا ...">
        </td>
        <td>
            <a href="#"><i class="fa-solid fa-magnifying-glass" style="color: #3691ef;font-size: 20px;"></i></a>
        </td>
    </tr>
</table>
</div>
    <p class="scrl">استمر بالتمرير لأسفل ..</p>
    <i class="fa-solid fa-angles-down" style="font-size: 30px;color: white;"></i>
    </div>
</div>
<div class="section2">
    <form action="workers.php" method="POST">
    <div>
    <span class="heds">الخدمات المتاحة </span>
</div>
<div>
    <table style="width: 100%;margin-top: 40px;">
        <tr>
            <td>
                <button class="services" style="background-image:url(imgs/services/electric.jpg)" name="service" value="كهرباء">الكهرباء</button>
            </td>
            <td><button class="services" style="background-image:url(imgs/services/carpentary.jpg)"name="service" value="نجارة">النجارة</button></td>
            <td><button class="services" style="background-image:url(imgs/services/plumbing.jpg)"name="service" value="سباكة">السباكة</button></td>
        </tr>
        </table>
        <table style="width: 100%;margin-top: 40px;">
        <tr>
            <td><button class="services" style="background-image:url(imgs/services/painting.jpg)" name="service" value="نقاشة">النقاشة</button></td>
            <td><button class="services" style="background-image:url(imgs/services/alumetal.jpg)" name="service" value="ألوميتال">الألوميتال</button></td>
            <td><button class="services" style="background-image:url(imgs/services/others.jpg)"name="service" value="الخدمات الأخرى">الخدمات أخرى</button></td>
        </tr>
    </table>
</div>
</form>
</div>
<div class="section3">
    <table style="width: 100%;height: 100%;">
        <tr style="width: 100%;">
            <td style="width: 50%;right: 10%;">
                <p class="psec3">
                    نحن هنا جميعاً نعمل من أجل راحتك وتوفير خدمة تليق بك ... 
                </p>
                <button class="request" href="#">سجل طلبك الآن</button>
            </td>
            <td style="width: 50%;">
                <img src="imgs/service.jpg" style="float: left;width:600;height:500px">
            </td>
        </tr>
    </table>
</div>
<div class="section4">
<table style="width:100%;height:20%">
    <tr style="height:20%;text-align: center;">
        <td>
    <span class="diffrences">        ما يميزنا عن الأخرون</span>
        </td>
    </tr>
</table>
<table style="width:100%;height:80%;margin:0 3%;">
        <tr style="height:70%">
        <td style="width: 33%;">
<div class="diffs-divs">
<table style="width: 100%;height: 100%;">
    <tr style="width: 100%;height:50%;text-align: center;font-size: 50px;color: white;">
        <td><i class="fa-solid fa-person-dress" style="font-size: 70px;"></i>
                               </td>
    </tr>
    <tr style="width: 100%;height:50%;vertical-align: top;text-align: center;">
        <td>
            <span class="diff-ph">
                 العمالة النسائية 
            </span>
            <br>
<span class="diff-p">
حرصاً منا على توفير الراحة والأمان لكل عملائنا وفرنا لك خدمة العمالة النسائية 
</span>
</td>
    </tr>
</table>
</div>
        </td>
        <td style="width: 33%;">
            <div class="diffs-divs">
                <table style="width: 100%;height: 100%;">
                    <tr style="width: 100%;height:50%;text-align: center;font-size: 50px;color: white;">
                        <td>
                            <i class="fa-solid fa-map-location-dot" style="font-size: 70px;"></i>
                        </td>
                    </tr>
                    <tr style="width: 100%;height:50%;vertical-align: top;text-align: center;">
                        <td>
                            <span class="diff-ph">
                                سرعة الوصول 
                           </span>
                           <br>
                <span class="diff-p">
يتميز تطبيق بيتنا بسرعة الاستجابة نظراً لتوفير اقرب العمال الى محافظتك.                </span>
                </td>
                    </tr>
                </table>
            </div>
        </td>
        <td style="width: 33%;">
            <div class="diffs-divs">
                <table style="width: 100%;height: 100%;">
                    <tr style="width: 100%;height:50%;text-align: center;font-size: 50px;color: white;">
                        <td>
                            <i class="fa-solid fa-list-check" style="font-size: 70px;"></i>
                        </td>
                    </tr>
                    <tr style="width: 100%;height:50%;vertical-align: top;text-align: center;">
                        <td>
                            <span class="diff-ph">
المتابعة المستمرة                           </span>
                           <br>
                <span class="diff-p">
يتم متابعة العميل بعد انتهاء الخدمة التى طلبها لتوفير أفضل خدمة ممكنة                 </span>
                </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>
</div>
<div class="section5">
    <table style="width: 100%;height: 100%;">
<tr>
    <td>
<p id="head-joinus">
أنضم إلى فريق بيتنا الآن 
</p>
<p id="head2-join">
بيتنا يوفر لمستخدميه خدمة التوظيف عن طريق التسجيل كعامل لتصبح فرداً من فريق بيتنا وتستمتع بالمزايا التى يوفرها القائمين على تطبيق بيتنا للعاملين , سجل بياناتك الأن.
</p>
<button class="request" href="#" style="background-color: white;color: #3691ef;font-weight: bold;">سجل الآن</button>
    </td>
    <td>
<img src="imgs/joinus.png"  style="float: left;width:500;height:400px">
    </td>
</tr>
    </table>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#2f4ac5" fill-opacity="1" d="M0,96L120,96C240,96,480,96,720,128C960,160,1200,224,1320,256L1440,288L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path></svg>
<div style="width:100%;text-align:center">
    <span class="heds">المتميزون لدينا  </span>
</div> 
<div class="section6">
  
        <div class="container">
            <div class="contains">
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="imgs/avatar.png">
                        </div>
                        <div class="name-prof">
                            <span class="name">اسم العامل</span>
                            <span class="prof">الوظيفة</span>
                        </div>
                        <div class="rating">
                            <i class="fa-regular fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <div class="buttons">
                            <button class="about">حول</button>
                            <button class="hire">أطلب</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="contains">
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="imgs/avatar.png">
                        </div>
                        <div class="name-prof">
                            <span class="name">اسم العامل</span>
                            <span class="prof">الوظيفة</span>
                        </div>
                        <div class="rating">
                            <i class="fa-regular fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <div class="buttons">
                            <button class="about">حول</button>
                            <button class="hire">أطلب</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="contains">
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="imgs/avatar.png">
                        </div>
                        <div class="name-prof">
                            <span class="name">اسم العامل</span>
                            <span class="prof">الوظيفة</span>
                        </div>
                        <div class="rating">
                            <i class="fa-regular fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <div class="buttons">
                            <button class="about">حول</button>
                            <button class="hire">أطلب</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="contains">
                <div class="card">
                    <div class="card-content">
                        <div class="card-img">
                            <img src="imgs/avatar.png">
                        </div>
                        <div class="name-prof">
                            <span class="name">اسم العامل</span>
                            <span class="prof">الوظيفة</span>
                        </div>
                        <div class="rating">
                            <i class="fa-regular fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                        </div>
                        <div class="buttons">
                            <button class="about">حول</button>
                            <button class="hire">أطلب</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
<script src="JS/index-script.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
</script>
</body>
</html>