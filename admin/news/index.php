<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/sary.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <title>Админ - новости </title>
</head>

<body>

    <?php
    include('../page/menu.php')
    ?>

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
        <!-- SLIDE SITE -->
        <div id="tabb" class="container slide_baek">

            <div class="form_slide_edit">
                <h1>Изменить новость: </h1>
                <form action="../news/" method="post" enctype="multipart/form-data">

                    <input type="file" name="Images"> <br>
                    <input placeholder="Напишите текст..." id="news_text" type="text" name="text">
                    <input placeholder="Напишите дату..." type="text" name="date">

                    <div onclick="editt()" class="knop">
                        <a class="btn  btn--redl" href="#">Назад</a>

                        <button onclick="editt()" class=" btn btn--redr" type="submit"> Сохранить </button>
                    </div>

                </form>
            </div>

            <div id="tab_slide" class="all_tab2 ">
                <!-- head start -->
                <div class="tab">

                    <div class="namber_slide_title head">
                        №
                    </div>

                    <div class="text_slide_title head">
                        Картинка новости
                    </div>

                    <div class="text_slide_info_title">
                        Новость
                    </div>

                    <div class="text_slide_date_title">
                        Дата
                    </div>

                    <div class="edit_tab_slide_title et">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </div>

                    <div class="delete_tab_slide_title et ">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </div>
                </div>
                <!-- head end -->

                <div class="tab">

                    <div class="namber_slide ">
                        1
                    </div>

                    <div class="text_slide">
                        <img src="../img/slide1 (1).jpg" alt="">
                    </div>

                    <div class="text_slide_info">
                        Здесь будет отображаться ваша новость
                    </div>

                    <div class="text_slide_date">
                        21.21.21
                    </div>

                    <div class="func">
                        <div onclick="editt()" class="edit_tab_slide">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </div>

                        <div class="delete_tab_slide">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <div class="tab ">

                    <div class="namber_slide ">
                        2
                    </div>

                    <div class="text_slide">
                        <img src="../img/slide1 (1).jpg" alt="">
                    </div>

                    <div class="text_slide_info">
                        Здесь будет отображаться ваша новость
                    </div>

                    <div class="text_slide_date">
                        21.21.21
                    </div>

                    <div class="func">
                        <div onclick="editt()" class="edit_tab_slide">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </div>

                        <div class="delete_tab_slide">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <div class="tab">

                    <div class="namber_slide ">
                        3
                    </div>

                    <div class="text_slide">
                        <img src="../img/slide1 (1).jpg" alt="">
                    </div>

                    <div class="text_slide_info">
                        Здесь будет отображаться ваша новость
                    </div>

                    <div class="text_slide_date">
                        21.21.21
                    </div>

                    <div class="func">
                        <div onclick="editt()" class="edit_tab_slide ">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </div>

                        <div class="delete_tab_slide ">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <div class="tab">

                    <div class="namber_slide ">
                        4
                    </div>

                    <div class="text_slide">
                        <img src="../img/slide1 (1).jpg" alt="">
                    </div>

                    <div class="text_slide_info">
                        Здесь будет отображаться ваша новость
                    </div>

                    <div class="text_slide_date">
                        21.21.21
                    </div>

                    <div class="func">
                        <div onclick="editt()" class="edit_tab_slide ">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </div>

                        <div class="delete_tab_slide ">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <div class="form2">
                    <h1>Добавить новость: </h1>
                    <form action="../news/" method="post" enctype="multipart/form-data">

                        <input type="file" name="Images"> <br>
                        <input placeholder="Напишите текст..." id="news_text" type="text" name="text">
                        <input placeholder="Напишите дату..." type="text" name="date">

                        <div onclick="edit()" class="knop2">
                            <button onclick="edit()" class=" btn btn--redr" type="submit"> Добавить </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /SLIDE SITE -->
        </div>
        <script src="../js/app.js"></script>
</body>

</html>