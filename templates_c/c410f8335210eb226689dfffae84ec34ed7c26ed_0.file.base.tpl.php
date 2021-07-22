<?php
/* Smarty version 3.1.39, created on 2021-07-22 15:38:25
  from 'D:\OpenServer\domains\phpproject.com\templates\base.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f966c1ad1155_65312088',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c410f8335210eb226689dfffae84ec34ed7c26ed' => 
    array (
      0 => 'D:\\OpenServer\\domains\\phpproject.com\\templates\\base.tpl',
      1 => 1626957501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu/top_menu.tpl' => 1,
    'file:menu/footer_menu.tpl' => 1,
  ),
),false)) {
function content_60f966c1ad1155_65312088 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</title>
    <link rel="stylesheet" href="/css/index.css" type="text/css">
    <link rel="stylesheet" href="/css/base.css" type="text/css">
</head>
<body>
<?php echo '<script'; ?>
 src="/js/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/libs/popup-slide.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/libs/scrollbar.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/libs/jquery.fancybox3.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/libs/slick.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/libs/nouislider.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/libs/jquery.validate.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/libs/jquery.counterup.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/libs/waypoints.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/libs/init_min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/index.js"><?php echo '</script'; ?>
>
<canvas id="demo-canvas"></canvas>

<div class="wrap">
    <header>
        <div class="container logo-container"><a class="logo-wrap" href="/"><img src="../img/logo.png"></a>
                <?php $_smarty_tpl->_subTemplateRender('file:menu/top_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data'=>$_smarty_tpl->tpl_vars['data']->value['menu']['1']), 0, false);
?>
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
    <?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>

<?php $_smarty_debug = new Smarty_Internal_Debug;
 $_smarty_debug->display_debug($_smarty_tpl);
unset($_smarty_debug);
?>
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
        <?php $_smarty_tpl->_subTemplateRender('file:menu/footer_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data'=>$_smarty_tpl->tpl_vars['data']->value['menu']['2']), 0, false);
?>
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
</html><?php }
}
