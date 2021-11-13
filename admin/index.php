<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sary.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Админ - шапка сайта</title>
</head>

<body>

    <div id="menu_baek" class="all_menu">
        <div id="blok_r" class="menu_blok blok_r">
            <div class="cm">
                <div class="c">
                    <h1>
                        Выберите:
                    </h1>
                </div>
            </div>

            <!-- <div iid="menu_baek" class="menu_active"> -->
            <a class="a1" href="#">Шапка сайта</a>
            <a class="a2" href="slide/">Слайд сайта</a>
            <a class="a3" href="news_home/#">Новости главного экрана</a>
            <a class="a4" href="#">Новости</a>
            <a class="a5" href="#">Write_menu_name</a>
            <a class="a6" href="#">Write_menu_name</a>
            <a class="a7" href="#">Write_menu_name</a>
            <a class="a8" href="#">Write_menu_name</a>
            <a class="a9" href="#">Write_menu_name</a>
            <a class="a10" href="#">Write_menu_name</a>
            <a class="a11" href="#">Write_menu_name</a>
            <a class="a12" href="#">Write_menu_name</a>
            <a class="a13" href="#">Write_menu_name</a>
            <a class="a14" href="#">Write_menu_name</a>
            <a class="a15" href="#">Write_menu_name</a>
            <a class="a16" href="#">Write_menu_name</a>
            <a class="a17" href="#">Write_menu_name</a>
            <a class="a18" href="#">Write_menu_name</a>
            <a class="a19" href="#">Write_menu_name</a>
            <a class="a20" href="#">Write_menu_name</a>
            <a class="a21" href="#">Write_menu_name</a>
            <a class="a22" href="#">Write_menu_name</a>
            <a class="a23" href="#">============= 5</a>
            <!-- </div> -->
        </div>
    </div>

    <div id="m_icon" class="header m_icon">

        <div class="container_header">
            <div onclick=" openMenu()" class="burger">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>

            <div onclick=" openMenu()" class="close">
                <i class="fa fa-times" aria-hidden="true"></i>
            </div>

            <a href="#">
                <div class="home">

                    <div class="h_icon">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </div>

                    <div class="title_name">
                        baek.kg
                    </div>

                </div>

            </a>
        </div>

    </div>

    <div class="go">
        <!-- header site -->
        <div id="tab" class="container abs">
            <div id="tab" class="all_tab">
                <!-- head start -->
                <div class="tab">

                    <div class="namber head">
                        №
                    </div>

                    <div class="text head">
                        Шапка сайта
                    </div>

                    <div class="edit_tab et">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </div>
                </div>
                <!-- head end -->

                <div class="tab">

                    <div class="namber">
                        1
                    </div>

                    <div class="text">
                        +996 700 72 07 63
                    </div>

                    <div onclick="edit()" class="edit_tab">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="tab">

                    <div class="namber">
                        2
                    </div>

                    <div class="text">
                        baek.75@mail.ru
                    </div>

                    <div onclick="edit()" class="edit_tab">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="tab">

                    <div class="namber">
                        3
                    </div>

                    <div class="text">
                        Адрес: Киргшелк, ул. Мичурина, 46
                    </div>

                    <div onclick="edit()" class="edit_tab">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="tab">

                    <div class="namber">
                        4
                    </div>

                    <div class="text">
                        инсатграм_ссылка
                    </div>

                    <div onclick="edit()" class="edit_tab">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="tab">

                    <div class="namber">
                        5
                    </div>

                    <div class="text">
                        Write
                    </div>

                    <div onclick="edit()" class="edit_tab">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="tab">

                    <div class="namber">
                        6
                    </div>

                    <div class="text">
                        телеграм_ссылка
                    </div>

                    <div onclick="edit()" class="edit_tab">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </div>
                </div>

                <div class="tab">

                    <div class="namber">
                        7
                    </div>

                    <div class="text">
                        Ютуб_ссылка
                    </div>

                    <div onclick="edit()" class="edit_tab">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </div>

                </div>

            </div>
            <div class="form">
                <h1>Введите новый текст: </h1>
                <form action="/" post" enctype="multipart/form-data">

                    <input type="text" placeholder="Напишите..." name="Name">

                    <div onclick="edit()" class="knop">
                        <a class="btn  btn--redl" href="#">Назад</a>

                        <button onclick="edit()" class=" btn btn--redr" type="submit"> Сохранить </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /header site -->
        <script src="js/app.js"></script>
</body>

</html>