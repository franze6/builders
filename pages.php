<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="/css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <script src="/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="/js/init_page.js" type="text/javascript"></script>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
<div class="wrapper">
    <div class="background"></div>
    <header>
        <div class="header_wrapper">
            <div class="header_center">
                <div class="header_top">
                    <div class="logo">
                        <a href="/">
                            <div></div>
                        </a>				</div>
                    <div class="header_contact">
                        <div class="header_phone">
                            +7 (930) 783-68-40					</div>
                        <div class="header_email">
                            <p><a href="#">Заказать звонок</a></p> |
                            <div>
                                <a href="mailto:avers.stroy.rzn@bk.ru" class="email_decoration">avers.stroy.rzn@bk.ru</a>						</div>
                        </div>
                        <button id="send_report">Оставить заявку</button>
                    </div>
                </div>
                <div class="mobile_header_search">
                    <form action="/search/">
                        <input type="text" name="q" placeholder="Поиск по сайту">
                        <button></button>
                    </form>			</div>
            </div>
        </div>
        <nav id="top_menu" class="default">
            <a href="#" id="mobile_menu">Меню</a>

            <ul>
                <li><a href="/" class="selected">Главная</a></li>

                <li><a href="/services/">Услуги</a></li>

                <li><a href="/price/">Цены</a></li>

                <li><a href="/calculator/">Калькулятор</a></li>

                <li><a href="/partners/">Наши партнеры</a></li>

                <li><a href="/company/">Компания</a></li>

                <li><a href="/contacts/">Контакты</a></li>
            </ul>
        </nav>
    </header>
    <div class="wrapper_center">
        <?php
        include "inc/nav.inc.php";

        if($_GET["id"]) {
            $id = $_GET["id"];
            if ($id == "services") {
                echo "<script>document.title = \"Услуги\"</script>";
                include "inc/$id.inc.php";
            } elseif ($id == "price") {
                echo "<script>document.title = \"Цены\"</script>";
                include "inc/$id.inc.php";
            } elseif ($id == "calculator") {
                echo "<script>document.title = \"Калькулятор\"</script>";
                include "inc/$id.inc.php";
            } elseif ($id == "company") {
                echo "<script>document.title = \"О компании\"</script>";
                include "inc/$id.inc.php";
            } elseif ($id == "contacts") {
                echo "<script>document.title = \"Контакты\"</script>";
                include "inc/$id.inc.php";
            } elseif ($id == "partners") {
                echo "<script>document.title = \"Партнеры\"</script>";
                include "inc/$id.inc.php";
            } else header("Location: /");
        }
        else header("Location: /");

        ?>
    </div>
    <div class="hFooter" style="height: 174px;"></div>
    <footer style="margin-top: -174px;">
        <div class="footer_center">

            <ul>
                <li><a href="/" class="selected">Главная</a></li>

                <li><a href="/services/">Услуги</a></li>

                <li><a href="/price/">Цены</a></li>

                <li><a href="/calculator/">Калькулятор</a></li>

                <li><a href="/partners/">Наши партнеры</a></li>

                <li><a href="/company/">Компания</a></li>

                <li><a href="/contacts/">Контакты</a></li>

            </ul>
            <div class="footer_information">
                <div class="footer_copyright">
                    <div> <?=$_SERVER['HTTP_HOST'] ?> © 2017</div>
                    <div> Все права защищены</div>
                </div>
                <div class="footer_clear"></div>
                <div class="footer_telephone">
                    <div class="footer_phone">+7 (930) 783-68-40</div>
                    <p class="footer_telephone_request"><a href="/contacts/">Заказать звонок</a></p> <span>|</span> <p class="footer_telephone_application"><a href="/contacts/">Оставить заявку</a></p>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
