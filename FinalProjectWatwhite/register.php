
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>

    <!-- css Bootstrap CND -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- custom class -->
    <link rel="stylesheet" href="register.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@200&family=Mitr:wght@400;500&display=swap" rel="stylesheet">


    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<body>
    <div id="warpper">
        <div class="text">ยินดีต้อนรับสมาชิกใหม่</div>
        <div class="text1">กรุณากรอกข้อมูล</div>
        <div class="bg-down">
            <form class="form-signin" action="Homeregister.php" method="get">
            <input type="email text" name="username" id="inputEmail" class="username" placeholder="ชื่อบัญชีผู้ใช้" require="" autofocus="">

            <input type="email" name="email" id="inputEmail" class="email" placeholder="อีเมล" require="" autofocus="">

            <input type="password" name="pwd" id="inputPassword" class="password" placeholder="รหัสผ่าน" require="" autofocus="">

            <input type="password" name="pwd1" id="inputPassword1" class="password1" placeholder="ยืนยันรหัสผ่าน" require="" autofocus="">
            
            <a href="register.php"><button class="next" type="submit">ต่อไป</button></a>    
        </form>
            
            
            

        </div>
    </div>
    
</body>

</html>