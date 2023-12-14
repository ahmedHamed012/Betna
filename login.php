<html>
    <head>
        <title>BETNA | Login</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS/style-login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    
        <script src="https://kit.fontawesome.com/f3ce6fd058.js" crossorigin="anonymous"></script>
        </head>
    </head>
    <body>
        <div class="sec1">
            <form  method="get">
                <div class="container" id="container">
                    <div class="image">
                        <img src="imgs/betna2.png" class="image1">
                    </div>
                    <div class="contains">
                        <div class="field-container">
                            <div class="spans">
                                <i class="fa-solid fa-envelope"></i><span class="caption">البريد الالكترونى  </span>
                            </div>
                            <div class="input-container">
                               <input type="email" name="signin-email" placeholder="ادخل البريد الالكترونى الخاص بك .. " class="field-name">
                            </div>
                        </div>
                        <div class="field-container">
                            <div class="spans">
                                <i class="fa-solid fa-key"></i><span class="caption">كلمة المرور   </span>
                            </div>
                            <div class="input-container">
                               <input type="password" name="signin-pass" placeholder="ادخل كلمة المرور الخاصة بك .. " class="field-name">
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
                        <div class="field-container">
                            <a class="forget-and-create" href="#">هل نسيت كلمة المرور ؟</a>
                            <a class="forget-and-create" href="#">لا تمتلك حساباً ! أنشئ الحساب الخاص بك الأن</a>
                        </div>
                        </div>
                        <div class="field-container">
                            <input type="submit" class="sbmt" value="التسجيل">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="status-post" value="signin">
            </form>
        </div>
    </body>
</html>