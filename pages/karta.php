<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MadeInSakha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div style="height: 9vh; width: 100%; background: rgb(51, 51, 51); display: flex; align-items: center; position: fixed; top: 0vh; z-index: 1">
        <a href="../index.php"><img src="../img/logo.png" style="height: 8vh; margin-left: 5vh;"></a>
        <a style="font-family: ns; margin-top: -0.5vh; color: white; margin-left: 2vh; font-size: 3.5vh; text-decoration: none;" href="../index.php">MADE IN SAKHA</a>
        <div style="height: 10vh; width: 40%; margin-left: auto; display: flex; justify-content: space-evenly;">
            <a href="../index.php" style="margin-left: 1vh; text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh;" class="jcc">Главная</a>
            <a href="#head1" style="margin-left: 1vh; text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh;" class="jcc">Каталог</a>
            <?php 
                if ($_SESSION['id_pok']==null) {
            ?>
                <a href="regvhod.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh;" class="jcc">Регистрация/вход</a>
            <?php 
                } else{
            ?>
                <a href="lich.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh; height: 3vh;" class="jcc"><img src="../img/head/human.png"></a>
                <a href="ponr.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh; height: 3vh;" class="jcc"><img src="../img/head/serd.png"></a>
                <a href="korzina.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh; height: 3vh;" class="jcc"><img src="../img/head/korz.png"></a>
            <?php   
                }
            ?>
            <a href="perevod.php" style="text-decoration: none; color: white; font-family: gl; font-size: 2.5vh; margin-top: 3vh; height: 3vh;" class="jcc"><img src="https://img.icons8.com/small/32/ffffff/internet.png"></a>
        </div>
    </div>

<div style="padding-top: 100px;">
<h1 align="center">Посетите наши салоны в Якутске</h1>
</div>
<div class="block" style="padding-top: 50px;display: flex;">
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A0171133e01ab47b37bbd51aa90d38484236d6cfc4ad20bddc3be293da89a83ea&amp;source=constructor" width=1200 height=600 frameborder="0"></iframe>
</div>
    <div class="jcc" style="width: 100%">
        <div style="width: 60%; display: flex;" class="marg">
            <div class="marg cl" style="font-family: gl; width: 30%; margin-top: 10vh; margin-bottom: 10vh">
                <p style="font-family: gl; margin-top: 3.8vh; font-size: 3vh; margin-bottom: 2vh;">ПОЛЕЗНЫЕ ССЫЛКИ</p>
                <hr style="width: 100%; border: 1px solid #dddddd; background: black; margin-top: 0px;">
                <a href="" style="margin-left: 1vh; text-decoration: none; color: black; margin-top: 1vh;">Доставка</a>
                <a href="" style="margin-left: 1vh; text-decoration: none; color: black; margin-top: 3vh;">Оплата</a>
                <a href="" style="margin-left: 1vh; text-decoration: none; color: black; margin-top: 3vh;">Акции</a>
                <a href="" style="margin-left: 1vh; text-decoration: none; color: black; margin-top: 3vh;">Политика конфиденциальности</a>
            </div>
            <div class="marg cl" style="font-family: gl; width: 30%; margin-top: 10vh; margin-bottom: 10vh">
                <p style="font-family: gl; margin-top: 3.8vh; font-size: 3vh; margin-bottom: 2vh;">ОПЛАТА</p>
                <hr style="width: 100%; border: 1px solid #dddddd; background: black; margin-top: 0px;">
                <a style="margin-left: 1vh; text-decoration: none; color: black; margin-top: 5vh;font-size: 14px; " >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ullamcorper justo, nec, pellentesque.</a>
                <div style="margin-top: 10px">
                    <img src="../image/primer/visa.png" style="margin-left: 10px" width="46" height="30">
                    <img src="../image/primer/mastcrd.png" style="margin-left: 10px" width="46" height="30">

                </div>
            </div>
            <div class="marg cl" style="font-family: gl; width: 30%; margin-top: 10vh; margin-bottom: 10vh">
                <p style="font-family: gl; margin-top: 3.8vh; font-size: 3vh; margin-bottom: 2vh;">КОНТАКТЫ</p>
                <hr style="width: 100%; border: 1px solid #dddddd; background: black; margin-top: 0px;">
                <div style="margin-top: 1vh">
                    <div>
                        <img src="../img/vector.png">
                        <a style="margin-left: 2vh; text-decoration: none; color: black; margin-top: 5vh;">+7(800)-555-35-35</a>
                    </div>
                    <div style="margin-top: 2vh">
                        <img src="../img/vector.png">
                        <a style="margin-left: 2vh; text-decoration: none; color: black; margin-top: 2vh;">+7(800)-555-35-35</a>
                    </div>
                    <div style="margin-top: 2vh">
                        <img src="../img/mailicon.png">
                        <a href="" style="margin-left: 2vh; text-decoration: none; color: black; margin-top: 2vh;">MadeInSakha@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr style="width: 70%; border: 1px solid #dddddd; background: black; margin-top: 0px;">

    <div style="margin-left: 15%; margin-bottom: 10vh;">
        <a href="#" style="margin-left: 1vh; text-decoration: none; color: black; font-family: Montserrat">(c) 2021 MadeInSakha</a>
    </div>
</body>
</html>
