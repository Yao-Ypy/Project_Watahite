<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- css Bootstrap CND -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- custom class -->
    <link rel="stylesheet" href="home.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@200&family=Mitr:wght@400;500&display=swap" rel="stylesheet">


    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>

<body>
    <div id="warpper">
        <div class = "logo">
            <img src="img/Logo2.png">
        </div>
        <div class = "text">ยินดีต้อนรับ</div>
        <div id="logreg-forms">
            <?php
            
                echo "".$_GET["email"];
                echo "<br>";
                // echo "password = ".$_GET["pwd"];

            ?>
        </div>
        <button class="Home">ต่อไป</button>
        <div class="register">
            <a href="register.php" style="text-decoration: none;">ลงทะเบียนเข้าใช้งาน</a>
        </div>

    </div>
</body>

</html>