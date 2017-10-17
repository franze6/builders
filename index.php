<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ремонт</title>
    <link href="css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-26.3.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            $("#send_report").click(function() {
                location.href = "/contacts/";
            });

            var jssor_1_options = {
                $AutoPlay: 1,
                $Align: 0,
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 2400;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);

            //2
            var jssor_2_options = {
                $AutoPlay: 1,
                $Align: 0,
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);

            /*#region responsive code begin*/

            var MAX_WIDTH2 = 1000;

            function ScaleSlider2() {
                var containerElement = jssor_2_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH2 || containerWidth, containerWidth);

                    jssor_2_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider2, 30);
                }
            }

            ScaleSlider2();

            $(window).bind("load", ScaleSlider2);
            $(window).bind("resize", ScaleSlider2);
            $(window).bind("orientationchange", ScaleSlider2);


            /*#endregion responsive code end*/

        });
    </script>
    <style>
        /* jssor slider loading skin double-tail-spin css */

        .jssorl-004-double-tail-spin img {
            animation-name: jssorl-004-double-tail-spin;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-004-double-tail-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}

        .jssorl-004-double-tail-spin img {
            animation-name: jssorl-004-double-tail-spin;
            animation-duration: 1.2s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }



        .jssorb052 .i {position:absolute;cursor:pointer;}
        .jssorb052 .i .b {fill:#000;fill-opacity:0.3;}
        .jssorb052 .i:hover .b {fill-opacity:.7;}
        .jssorb052 .iav .b {fill-opacity: 1;}
        .jssorb052 .i.idn {opacity:.3;}

        .jssora102 {display:block;position:absolute;opacity:.8;cursor:pointer;}
        .jssora102 .c {fill:#000;fill-opacity:0.5;}
        .jssora102 .a {fill:#ddd;}
        .jssora102:hover {opacity:1;}
        .jssora102.jssora102dn {opacity:.6;}
        .jssora102.jssora102ds {opacity:.3;pointer-events:none;}
    </style>
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
                                7(495) 111-33-99					</div>
                            <div class="header_email">
                                <p><a href="#">Заказать звонок</a></p> |
                                <div>
                                    <a href="mailto:remont@bk.ru" class="email_decoration">remont@bk.ru</a>						</div>
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
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1200px;height:450px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/double-tail-spin.svg" />
            </div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1200px;height:450px;overflow:hidden;">
                <div data-p="330.0" style="background-color:rgba(0,0,0,0.5);">
                    <img data-u="image" src="img/1.jpg" />
                    <div style="position:absolute;top:0px;left:0px;width:1200px;height:500px;z-index:0;background-color:rgba(0,0,0,0.5);"></div>
                    <div style="position:absolute;top:45px;left:0px;width:1200px;height:100px;z-index:0;mix-blend-mode:normal;font-family:PTPragmaticaExtraLight;font-size:40px;color:#ffffff;text-align:center;">
                        <span style="color: rgb(255, 255, 255); font-size: 80px; white-space: pre-wrap; font-family: PTPragmaticaExtraLight;">Евроремонт</span>
                    </div>
                    <div style="position:absolute;top:130px;left:80px;width:1044px;height:160px;z-index:0;font-size:14px;color:#ffffff;text-align:center;padding:30px 0px 0px 0px;box-sizing:border-box;">
                        <span style="color: rgb(255, 255, 255); font-family: PTSansRegular; font-size: 18px; white-space: pre-wrap;">Косметический ремонт позволяет придать помещению совершенно новый облик. За счет использования свежих обоев, интересных дверей и необычного паркета любое жилище будет выглядеть совсем иначе.<br />Косметический ремонт вдохнет новую жизнь в вашу квартиру. Комплекс несложных отделочных работ украсит помещение без перепланировки и кардинальных изменений. При ремонте квартир самое главное — привнести что-то новое в общий вид жилища с минимальными затратами..
                        </span><br />
                    </div>
                    <a href="/projects" target="_blank" style="display:block; position:absolute;top:335px;left:450px;width:305px;height:51px;z-index:0;mix-blend-mode:normal;border:3px solid #ffffff;border-radius:5px;font-size:24px;color:#ffffff;line-height:2;text-align:center;box-sizing:border-box;">Узнать подробнее<br />​
                    </a>
                </div>
                <div>
                    <img data-u="image" src="img/2.jpg" />
                    <div style="position:absolute;top:0px;left:0px;width:1200px;height:500px;z-index:0;background-color:rgba(0,0,0,0.5);"></div>
                    <div style="position:absolute;top:45px;left:0px;width:1200px;height:100px;z-index:0;mix-blend-mode:normal;font-family:PTPragmaticaExtraLight;font-size:80px;color:#ffffff;text-align:center;">
                        <span style="color: rgb(255, 255, 255); font-family: PTPragmaticaExtraLight; font-size: 80px; text-align: center;">Косметический ремонт</span>
                    </div>
                    <div style="position:absolute;top:130px;left:78px;width:1044px;height:182px;z-index:0;font-family:PTSansRegular;font-size:14px;color:#ffffff;text-align:center;padding:30px 0px 0px 0px;box-sizing:border-box;">
                        <span style="color: rgb(255, 255, 255); font-family: PTSansRegular; font-size: 18px; text-align: center;">Косметический ремонт позволяет придать помещению совершенно новый облик. За счет использования свежих обоев, интересных дверей и необычного паркета любое жилище будет выглядеть совсем иначе. Косметический ремонт вдохнет новую жизнь в вашу квартиру. Комплекс несложных отделочных работ украсит помещение без перепланировки и кардинальных изменений. При ремонте квартир самое главное — привнести что-то новое в общий вид жилища с минимальными затратами.</span>
                    </div>
                    <a href="/projects" target="_blank" style="display:block; position:absolute;top:335px;left:450px;width:305px;height:51px;z-index:0;mix-blend-mode:normal;border:3px solid #ffffff;border-radius:5px;font-size:24px;color:#ffffff;line-height:2;text-align:center;box-sizing:border-box;">Узнать подробнее<br />​
                    </a>
                </div>
                <a data-u="any" href="https://www.jssor.com" style="display:none">bootstrap slider</a>
            </div>
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
        </div>
        <div class="wrapper_center">
        </div>
        <div class="pros">
            <div class="pros_center">
                <div class="pros_element">
                    <div>
                        <div class="froze_icon"></div>
                        <div>
                            Выезд замерщика и составление сметы бесплатно				</div>
                    </div>
                </div>
                <div class="pros_element">
                    <div>
                        <div class="experience_icon"></div>
                        <div>
                            Опыт ремонтных работ более 10 лет				</div>
                    </div>
                </div>
                <div class="pros_element">
                    <div>
                        <div class="protection_icon"></div>
                        <div>
                            Гарантия на выполненные работы до 5 лет				</div>
                    </div>
                </div>
                <div class="pros_element">
                    <div>
                        <div class="time_icon"></div>
                        <div>
                            Строгое соблюдение всех&nbsp;сроков				</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapper_center">
            <div class="services">
                <div class="services_center">

                    <div class="services_element">
                        <div>
                            <a href="/services/62/" class="animation_img">
                                <span class="overlay"></span>
                                <img src="/img/projects/rebuild.jpg" alt="Ремонт квартир">
                                <span class="link"><i class="fa fa-link"></i></span>
                            </a>
                            <p><a href="/services/62/">Ремонт квартир</a></p>
                        </div>
                    </div>
                    <div class="services_element">
                        <div>
                            <a href="/services/28/" class="animation_img">
                                <span class="overlay"></span>
                                <img src="/img/projects/other_work.jpg" alt="Другие ремонтные работы">
                                <span class="link"><i class="fa fa-link"></i></span>
                            </a>
                            <p><a href="/services/28/">Другие ремонтные работы</a></p>
                        </div>
                    </div>
                    <div class="services_element">
                        <div>
                            <a href="/services/27/" class="animation_img">
                                <span class="overlay"></span>
                                <img src="/img/projects/floors.jpg" alt="Натяжные потолки">
                                <span class="link"><i class="fa fa-link"></i></span>
                            </a>
                            <p><a href="/services/27/">Натяжные потолки</a></p>
                        </div>
                    </div>
                    <div class="services_element">
                        <div>
                            <a href="/services/26/" class="animation_img">
                                <span class="overlay"></span>
                                <img src="/img/projects/layout.jpg" alt="Планировка">
                                <span class="link"><i class="fa fa-link"></i></span>
                            </a>
                            <p><a href="/services/26/">Планировка</a></p>
                        </div>
                    </div>
                    <div class="services_element">
                        <div>
                            <a href="/services/25/" class="animation_img">
                                <span class="overlay"></span>
                                <img src="/img/projects/design_project.jpg" alt="Разработка дизайн-проекта">
                                <span class="link"><i class="fa fa-link"></i></span>
                            </a>
                            <p><a href="/services/25/">Разработка дизайн-проекта</a></p>
                        </div>
                    </div>
                    <div class="services_element">
                        <div>
                            <a href="/services/24/" class="animation_img">
                                <span class="overlay"></span>
                                <img src="/img/projects/rebuild_office.jpg" alt="Ремонт офисный помещений">
                                <span class="link"><i class="fa fa-link"></i></span>
                            </a>
                            <p><a href="/services/24/">Ремонт офисный помещений</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about_company">
            <div class="about_company_center">
                <h1>
                    О компании			</h1>
                <div>
                    <p>«Ремонт квартир» работает с 2000 года и является одной их ведущих компании в своей области. С момента работы и по настоящее время были
                        реализованы различной сложности проекты. Мы выполняем весь спектр строительных услуг от планировки и заканчивая освещением с
                        водохранилищем. Выполняемые строительно-монтажные работы сертифицированы, соответствуют стандартам, техническим нормам и
                        правилам Российской Федерации и Республики Беларусь.</p>
                    <p>Постоянное изучение динамики рынка и пожеланий клиентов, использование новейших технологий и современного профессионального
                        оборудования позволяет нашей компании постоянно совершенствоваться и расширять возможности в сфере строительных услуг.</p>
                    <p>Обратившись, в компанию «Ремонт квартир» вы получаете качественный результат проделанной работы.</p>			</div>
                <div class="about_company_img"></div>
            </div>
        </div>
        <div class="wrapper_center">
            <div class="customer_reviews">
                <div class="customer_reviews_center">
                    <h2>Отзывы наших клиентов</h2>
                    <div id="jssor_2" style="position:relative;margin:0 auto;top:0px;left:0px;width:1000px;height:187px;overflow:hidden;visibility:hidden;background-color:rgba(255,255,255,0);">
                        <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
                            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="/jssor/p_feedback/double-tail-spin.svg" />
                        </div>
                        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1000px;height:187px;overflow:hidden;">
                            <div>
                                <div style="position:absolute;top:0px;left:0px;width:495px;height:147px;z-index:0;border:1px solid #ccc;border-radius:3px;font-size:20px;color:#000000;text-align:center;padding:10px 10px 10px 10px;box-sizing:border-box;">Text</div>
                                <div style="position:absolute;top:0px;left:505px;width:495px;height:147px;z-index:0;border:1px solid #ccc;border-radius:3px;font-size:20px;color:#000000;text-align:center;padding:10px 10px 10px 10px;box-sizing:border-box;">Text</div>
                            </div>
                            <div>
                                <div style="position:absolute;top:0px;left:0px;width:495px;height:147px;z-index:0;border:1px solid #ccc;border-radius:3px;font-size:20px;color:#000000;text-align:center;padding:10px 10px 10px 10px;box-sizing:border-box;">Text</div>
                                <div style="position:absolute;top:0px;left:505px;width:495px;height:147px;z-index:0;border:1px solid #ccc;border-radius:3px;font-size:20px;color:#000000;text-align:center;padding:10px 10px 10px 10px;box-sizing:border-box;">Text</div>
                            </div>
                            <div>
                                <div style="position:absolute;top:0px;left:0px;width:495px;height:147px;z-index:0;border:1px solid #ccc;border-radius:3px;font-size:20px;color:#000000;text-align:center;padding:10px 10px 10px 10px;box-sizing:border-box;">Text</div>
                                <div style="position:absolute;top:0px;left:505px;width:495px;height:147px;z-index:0;border:1px solid #ccc;border-radius:3px;font-size:20px;color:#000000;text-align:center;padding:10px 10px 10px 10px;box-sizing:border-box;">Text</div>
                            </div>
                        </div>
                        <div data-u="navigator" class="jssorb052" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                </svg>
                            </div>
                        </div>
                        <div data-u="arrowleft" class="jssora102" style="width:50px;height:50px;top:50px;left:30px;" data-scale="0.75">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="c" cx="8000" cy="8000" r="6080"></circle>
                                <polygon class="a" points="8789.5,4902.8 8789.5,5846.4 6801.7,8000 8789.5,10253.6 8789.5,11097.2 5930.5,8000 "></polygon>
                            </svg>
                        </div>
                        <div data-u="arrowright" class="jssora102" style="width:50px;height:50px;top:50px;right:30px;" data-scale="0.75">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="c" cx="8000" cy="8000" r="6080"></circle>
                                <polygon class="a" points="7210.5,4902.8 7210.5,5846.4 9198.3,8000 7210.5,10253.6 7210.5,11097.2 10069.5,8000 "></polygon>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="hFooter" style="height: 174px;"></div>
    <footer style="margin-top: -174px;">
        <div class="footer_center">

            <ul>
                <li><a href="/" class="selected">Главная</a></li>

                <li><a href="/services/">Услуги</a></li>

                <li><a href="/price/">Цены</a></li>

                <li><a href="/calculator/">Калькулятор</a></li>

                <li><a href="/projects/">Проекты</a></li>

                <li><a href="/articles/">Статьи</a></li>

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
                    <div class="footer_phone">7(495) 111-33-99</div>
                    <p class="footer_telephone_request"><a href="/contacts/">Заказать звонок</a></p> <span>|</span> <p class="footer_telephone_application"><a href="/contacts/">Оставить заявку</a></p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
