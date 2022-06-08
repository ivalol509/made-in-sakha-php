<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MadeInSakha</title>
    <link rel="stylesheet" href="../lib/bootstrap4.css">
    <link rel="stylesheet" href="../lib/font-awesome.min.css">
    <link rel="stylesheet" href="../lib/main.css">
    <style>
        body{
            background: url(image/backround.jpeg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>
<body>
<div class="container" style="padding-top:200px">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">ВХОД</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">РЕГИСТРАЦИЯ</a></li>
                </ul>
                <!-- Tab panes -->

                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                        <form action="../utilites/auth.php" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input type="text" class="form-control" name="email" value="" id="email" placeholder="Введите свою почту">
                            </div>
                            <div class="form-group">
                                <label for="pass">Пароль</label>
                                <input type="password" class="form-control" name="pass" value="" id="pass" placeholder="Введите свой пароль">
                            </div>
                            <div class="form-group">
                                <div class="main-checkbox">
                                    <input value="None" id="checkbox1" name="check" type="checkbox" >
                                    <label for="checkbox1"></label>
                                </div>
                                <span class="text">Запомнить меня</span>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default">Войти</button>
                            </div>
                            <p><?php echo $_GET['lol'] ?></p>
                            <div class="form-group forgot-pass">
                                <button type="submit" class="btn btn-default">Забыли пароль</button>
                            </div>
                        </form>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <form action="../utilites/check.php" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label for="name">ФИО</label>
                                <input type="text" class="form-control" name="name" value="" id="name" placeholder="Введите свою ФИО">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="text" class="form-control" name="email" value="" id="email" placeholder="Введите свою почту">
                            </div>
                            <div class="form-group">
                                <label for="pass">Пароль</label>
                                <input type="password" class="form-control" name="pass" value="" id="pass" placeholder="Придумайте пароль">
                            </div>

                            <div class="form-group" style="padding-top: 50px" >
                                <button type="submit" class="btn btn-default">Зарегистрироваться</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.col-md-offset-3 col-md-6 -->
    </div><!-- /.row -->
</div><!-- /.container -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="../lib/bootstrap.min.js"></script>
</body>
</html>
