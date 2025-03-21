<!doctype html>
<html lang="RU-ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= get_csrf_meta(); ?>
    <link rel="icon" href="/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

        <link type='text/css' rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link type='text/css' rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link type='text/css' rel="stylesheet" href="/assets/css/main.css">

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


    <?php if (!empty($styles)) : ?>
        <?php foreach ($styles as $style) : ?>
            <link rel="stylesheet" href="<?= $style; ?>">
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if (!empty($header_scripts)) : ?>
        <?php foreach ($header_scripts as $header_script) : ?>
            <script src="<?= $header_script ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>


</head>
<body>

<!---header---->
<div class="row">
    <?php if (isset($auth)) $this->insert('inc/adminButton', [
        'auth' => $auth
    ]) ?>
</div>
<header id="header" class="header">
    <div class="container">
        <div class="headerLine">
            <div class="header__logo">
                <img src="/images/logo.png" class="logo" alt="паспорт фасадов" title="Паспорт фасада новосибирск"/>
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
                <div>
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                    <span>
                        <a href="https://wa.me/79139448850?text=Здравствуйте! У меня вопрос" target="_blank">+7-913-944-8850</a>
<!--                        <a href="whatsapp://send?phone=+79139448850&text=Здравствуйте" target="_blank">+7-913-944-8850</a>-->
                    </span>
                </div>
            </div>
        </div>
        <?= /** @var string $menu */
        $menu ?>

</header>
<!---//end_header---->

<?php get_alerts(); ?>

<!---//end_content---->
<section id="content" class="content">
    <?= /** @var string $content */
    $content; ?>
</section>
<!---content---->




<!---footer---->
<footer id="footer" class="footer">
    <div class="container">

    </div>
</footer>
<!---//end_footer---->


<?php if (!empty($footer_scripts)) : ?>
    <?php foreach ($footer_scripts as $footer_script) : ?>
        <script src="<?= $footer_script ?>"></script>
    <?php endforeach; ?>
<?php endif; ?>

<!--<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
<script type="text/javascript" src="<?= base_url('/assets/js/jquery-3.7.1.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('/assets/js/main.js')?>"></script>
</body>
</html>