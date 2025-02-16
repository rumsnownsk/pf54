<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= get_csrf_meta(); ?>
    <link rel="icon" href="/images/favicon.ico">
<!--    <link rel="stylesheet" href="--><?//= base_url('/assets/bootstrap/css/bootstrap.min.css')?><!--">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link type='text/css' rel="stylesheet" href="/assets/css/main.css" />

    <meta name="description"
    content="Разработка согласование и получение паспортов фасадов зданий в Новосибирске и других городах">
    <meta name="keywords"
    content="паспорт фасадов, получение паспорта фасадов, Федеральный Закон №131, Решение совета депутатов №647 от 03.03.2021">

    <meta name="geo.position" content="55.019738, 82.924095"/>
    <meta name="geo.placename" content="Новосибирск, Россия"/>
    <meta name="geo.region" content="RU-NS"/>

    <title>PHPFr::<?php echo $title ?? ':: ' ; ?></title>

    <!----webfonts---->
    <link href='https://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic' rel='stylesheet'
          type='text/css'>
    <!----//webfonts---->

    <?php if(!empty($styles)) : ?>
        <?php foreach ($styles as $style) : ?>
            <link rel="stylesheet" href="<?= $style; ?>">
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if(!empty($header_scripts)) : ?>
        <?php foreach ($header_scripts as $header_script) : ?>
            <script src="<?= $header_script ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>


</head>
<body>

<!---header---->
<header id="header" class="header">

    <div class="container">
        <div class="row">
            <?php if (isset($auth)) $this->insert('inc/adminButton', [
                'auth' => $auth
            ]) ?>
        </div>
        <div class="row bgColor pt25">

            <div class="col-lg-2">
                <a href="/">
                    <img src="/images/logo.png" class="logo" title="Паспорт фасада новосибирск"/>
                </a>
                <div id="menuShow">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="mainHeader">
                    <h1 class="">паспорт фасадов</h1>
                    <p>Разработка. Согласование. Получение&nbsp;документов</p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="headerContact">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i><span>Новосибирск</span></p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i><span>223-77-49</span></p>
                    <p><i class="fa fa-mobile" aria-hidden="true"></i><span>8-913-944-88-50</span></p>
                    <p><i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <span>
                            <a href="mailto:pfnsk@list.ru?subject=У_меня_вопрос">pfnsk@list.ru</a>
                            </span>
                    </p>
                </div>
            </div>

        </div>
        <div class="row bgColor pt25">
            <div class="col-lg-12">
                <nav id="main-nav" class="main-nav">

                    <div id="classicMenu">
                        <?= /** @var string $menu */ $menu ?>
                    </div>
                </nav>
            </div>
        </div>
</header>

<?php get_alerts(); ?>

<?= /** @var string $content */ $content; ?>

<script type="text/javascript" src="<?= base_url('/assets/js/jquery-3.7.1.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('/assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!--<script type="text/javascript" src="--><?//= base_url('/assets/js/main.js')?><!--"></script>-->

<?php if(!empty($footer_scripts)) : ?>
    <?php foreach ($footer_scripts as $footer_script) : ?>
        <script src="<?= $footer_script ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

<script src="<?= base_url('/assets/js/main.js')?>"></script>
</body>
</html>