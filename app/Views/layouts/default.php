<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= get_csrf_meta(); ?>
    <link rel="icon" href="<?= base_url('/images/favicon.ico') ?>">

    <link type='text/css' rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link type='text/css' rel="stylesheet" href="<?= base_url('/assets/bootstrap/css/bootstrap.min.css') ?>">
    <link type='text/css' rel="stylesheet" href="<?= base_url('/assets/iziModal/css/iziModal.min.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap"
          rel="stylesheet">
    <link type='text/css' rel="stylesheet" href="<?= base_url('/assets/css/main.css') ?>">

    <meta name="description"
          content="Разработка согласование и получение паспортов фасадов зданий в Новосибирске и других городах">
    <meta name="keywords"
          content="паспорт фасадов, получение паспорта фасадов, Федеральный Закон №131, Решение совета депутатов №647 от 03.03.2021">

    <meta name="geo.position" content="55.019738, 82.924095"/>
    <meta name="geo.placename" content="Новосибирск, Россия"/>
    <meta name="geo.region" content="RU-NS"/>

    <title>Паспорт Фасадов<?php echo $title ?? ''; ?></title>

    <!----webfonts---->
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
          rel="stylesheet">


<!--    --><?php //if (!empty($styles)) : ?>
<!--        --><?php //foreach ($styles as $style) : ?>
<!--            <link rel="stylesheet" href="--><?//= $style; ?><!--">-->
<!--        --><?php //endforeach; ?>
<!--    --><?php //endif; ?>
<!---->
<!--    --><?php //if (!empty($header_scripts)) : ?>
<!--        --><?php //foreach ($header_scripts as $header_script) : ?>
<!--            <script src="--><?//= $header_script ?><!--"></script>-->
<!--        --><?php //endforeach; ?>
<!--    --><?php //endif; ?>


</head>
<body>
<!---header---->
<header id="header" class="header">
    <div class="container">
        <div class="headerLine">
            <div class="header__logo">
                <img src="/images/common/logo.png" class="logo" alt="паспорт фасадов" title="Паспорт фасада новосибирск"/>
            </div>
            <div class="header__info">
                <h1 class="">паспорт фасадов</h1>
                <p>Разработка. Согласование. Получение</p>
            </div>
            <div class="header__contact">
                <div class="headerLocation">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>г.Новосибирск <br> Красный пр-т 14, оф.703</span>
                </div>
                <div><i class="fa fa-phone" aria-hidden="true"></i><span>223-77-49</span></div>
                <div><i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <span>
                            <a href="mailto:pfnsk@list.ru?subject=У_меня_вопрос"
                               style="color:#FF6600;">pfnsk@list.ru</a>
                    </span>
                </div>
                <div class="social-contact">
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                    <span>
                        <a href="https://wa.me/79139448850?text=Здравствуйте! У меня вопрос" target="_blank">+7-913-944-8850</a>
                    </span>
                </div>
            </div>
        </div>
        <nav class="menu menu--open">
            <button class="menu__bnt">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <?php /** @var string $menu */
            if (isset($menu)): echo $menu; endif; ?>
        </nav>


</header>
<!---//end_header---->

<?php get_alerts(); ?>

<!---content---->
<section id="content" class="content">
    <?= /** @var string $content */
    $content; ?>
</section>
<!---//end_content---->



<!---footer---->
<footer id="footer" class="footer">
    <div class="container">

    </div>
</footer>
<!---//end_footer---->


<?php //if (!empty($footer_scripts)) : ?>
<!--    --><?php //foreach ($footer_scripts as $footer_script) : ?>
<!--        <script src="--><?//= $footer_script ?><!--"></script>-->
<!--    --><?php //endforeach; ?>
<?php //endif; ?>

<script type="text/javascript" src="<?= base_url('/assets/js/jquery-3.7.1.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('/assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('/assets/iziModal/js/iziModal.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('/assets/js/main.js')?>"></script>

<div class="iziModal-alert-success"></div>
<div class="iziModal-alert-error"></div>
</body>
</html>