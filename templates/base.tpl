<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{$data.title}</title>
    <link rel="stylesheet" href="/css/index.css" type="text/css">
    <link rel="stylesheet" href="/css/base.css" type="text/css">
</head>
<body>
<script src="/js/jquery-3.5.1.min.js"></script>
<script src="/js/libs/popup-slide.js"></script>
<script src="/js/libs/scrollbar.js"></script>
<script src="/js/libs/jquery.fancybox3.min.js"></script>
<script src="/js/libs/slick.js"></script>
<script src="/js/libs/nouislider.js"></script>
<script src="/js/libs/jquery.validate.min.js"></script>
<script src="/js/libs/jquery.counterup.js"></script>
<script src="/js/libs/waypoints.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
<script src="/js/libs/init_min.js"></script>
<script src="/js/index.js"></script>
<canvas id="demo-canvas"></canvas>

<div class="wrap">
    <header>
        <div class="container logo-container"><a class="logo-wrap" href="/"><img src="../img/logo.png"></a>
                {include file='menu/top_menu.tpl' data=$data.menu['1']}
            <div class="header-right">
                <div class="lang-switch"><a class="lang-item active" href="#"><img src="../img/svg/rus.svg"></a><a class="lang-item" href="#"><img src="../img/svg/rus.svg"></a><a class="lang-item" href="#"><img src="../img/svg/rus.svg"></a>
                    <div class="lang-trigger"></div>
                </div><a class="phone" href="tel:+ 38 (067) 821-47-76">+ 38 (067) 821-47-76</a>
                <div class="burger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <div class="header-menu">
            <div class="container">
                <div class="left"><a class="phone mob" href="tel:+ 38 (067) 821-47-76">+ 38 (067) 821-47-76</a>
                    <ul class="nav">
                        <li class="item-level-0"><a class="link-level-0" href="#">Что такое умный дом</a></li>
                        <li class="item-level-0"><a class="link-level-0" href="#">Стоимость</a></li>
                        <li class="item-level-0"><a class="link-level-0" href="#">О нас</a></li>
                        <li class="item-level-0"><a class="link-level-0" href="#">Контакты</a></li>
                    </ul>
                    <ul class="nav small">
                        <li class="item-level-0"><a class="link-level-0" href="#">Что такое умный дом</a></li>
                        <li class="item-level-0"><a class="link-level-0" href="#">Стоимость</a></li>
                        <li class="item-level-0"><a class="link-level-0" href="#">О нас</a></li>
                        <li class="item-level-0"><a class="link-level-0" href="#">Контакты</a></li>
                    </ul>
                </div>
                <div class="right">
                    <div>
                        <div class="title">Возможности</div>
                        <div class="row">
                            <div class="column-left">
                                <ul class="right-menu">
                                    <li class="right-menu-item"><a class="right-menu-link" href="#">Освещение</a></li>
                                    <li class="right-menu-item"><a class="right-menu-link" href="#">Электроприборы</a></li>
                                    <li class="right-menu-item"><a class="right-menu-link" href="#">Климат</a></li>
                                    <li class="right-menu-item"><a class="right-menu-link" href="#">Вентиляция</a></li>
                                    <li class="right-menu-item"><a class="right-menu-link" href="#">Домофон</a></li>
                                    <li class="right-menu-item"><a class="right-menu-link" href="#">Пульт</a></li>
                                    <li class="right-menu-item"><a class="right-menu-link" href="#">Мультирум</a></li>
                                    <li class="right-menu-item"><a class="right-menu-link" href="#">Система полива</a></li>
                                    <li class="right-menu-item"><a class="right-menu-link" href="#">Статистика</a></li>
                                </ul>
                            </div>
                            <div class="column-right">
                                <ul class="right-menu">
                                    <li class="right-menu-item"><a class="right-menu-link" href="#">Бассейн</a></li>
                                    <li class="right-menu-item"><a class="right-menu-link" href="#">Управление Умным домом</a></li>
                                    <li class="right-menu-item"><a class="right-menu-link" href="#">Видеонаблюдение</a></li>
                                    <li class="right-menu-item"><a class="right-menu-link" href="#">Безопасноть</a></li>
                                    <li class="right-menu-item"><a class="right-menu-link" href="#">Голосовое управление</a></li>
                                    <li class="right-menu-item"><a class="right-menu-link" href="#">Контроль безопасности</a></li>
                                    <li class="right-menu-item"><a class="right-menu-link" href="#">Будильник</a></li>
                                    <li class="right-menu-item"><a class="right-menu-link" href="#">Автоответчик</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><a class="play-button" href="#"><span>Видеопрезентация</span></a>
                </div>
            </div>
        </div>
    </header>
</div>
    {$data.content}
<footer>
    <div class="container desktop">
        <div class="column"><a class="logo-wrap" href="/"><img src="/img/logo.png"></a>
            <div class="contact-list"><a class="phone" href="tel:+ 38 (067) 821-47-76">+ 38 (067) 821-47-76</a>
                <div class="address">Главный офис: 04080, г. Киев, ул. Жамбила Жабаева 22, офис 18  <a href="javascript:void(0);" data-fancybox data-src="/templates/offices.html" data-type="ajax" class="offices">Другие офисы</a></div><a class="mail" href="mailto:info@smarthouse.ua">info@smarthouse.ua</a>
                <div class="work-time">Пн-Пт с 9-00 до 18-00</div>
            </div>
            <div class="social-list"><a class="social-item inst" href="#"></a><a class="social-item facebook" href="#"></a><a class="social-item vk" href="#"></a></div>
            <div class="copyriting">Перепечатка материалов с сайта<br> запрещена.<br> 2009-2020. SmartHouse<br>Все права защищены.</div>
        </div>
        {include file='menu/footer_menu.tpl' data=$data.menu['2']}
    </div>
    <div class="container mob">
        <div class="menu-column">
            <div class="title active">Контакты
                <div class="footer-trigger"></div>
            </div>
            <div style="display:block">
                <div class="contact-list"><a class="phone" href="tel:+ 38 (067) 821-47-76">+ 38 (067) 821-47-76</a>
                    <div class="address">Главный офис: 04080, г. Киев, ул. Жамбила Жабаева 22, офис 18  <a href="#" class="offices">Другие офисы</a></div><a class="mail" href="mailto:info@smarthouse.ua">info@smarthouse.ua</a>
                    <div class="work-time">Пн-Пт с 9-00 до 18-00</div>
                </div>
                <div class="social-list"><a class="social-item inst" href="#"></a><a class="social-item facebook" href="#"></a><a class="social-item vk" href="#"></a></div>
                <div class="app-links"><a href="#"><img src="/img/playmarket.png"></a><a href="#"><img src="/img/appstore.png"></a></div>
            </div>
        </div>
        <div class="menu-column">
            <div class="title">Возможности
                <div class="footer-trigger"></div>
            </div>
            <div>
                <div class="footer-nav"><a class="footer-link" href="#">Освещение</a><a class="footer-link" href="#">Электроприборы</a><a class="footer-link" href="#">Климат</a><a class="footer-link" href="#">Вентиляция</a><a class="footer-link" href="#">Домофон</a><a class="footer-link" href="#">Мультирум</a><a class="footer-link" href="#">Пульт</a><a class="footer-link" href="#">Система полива</a><a class="footer-link" href="#">Статистика</a><a class="footer-link" href="#">Бассейн</a><a class="footer-link" href="#">Управление Умным домом</a><a class="footer-link" href="#">Видеонаблюдение</a><a class="footer-link" href="#">Безопасноть</a><a class="footer-link" href="#">Голосовое управление</a><a class="footer-link" href="#">Контроль безопасности</a><a class="footer-link" href="#">Будильник</a><a class="footer-link" href="#">Автоответчик</a>
                </div>
            </div>
        </div>
        <div class="menu-column">
            <div class="title">О компании
                <div class="footer-trigger"></div>
            </div>
            <div>
                <div class="footer-nav"><a class="footer-link" href="#">Что такое Умный дом</a><a class="footer-link" href="#">Что умеет Умный дом</a><a class="footer-link" href="#">Как работает Умный дом</a><a class="footer-link" href="#">Стоимость</a><a class="footer-link" href="#">Калькулятор</a><a class="footer-link" href="#">Почему мы лучше других</a><a class="footer-link" href="#">Видео</a><a class="footer-link" href="#">Документы</a><a class="footer-link" href="#">О нас</a><a class="footer-link" href="#">Контакты</a>
                </div>
            </div>
        </div>
        <div class="copyriting">Перепечатка материалов с сайта<br> запрещена.<br> 2009-2020. SmartHouse<br>Все права защищены.</div>
    </div>
</footer>
</body>
</html>