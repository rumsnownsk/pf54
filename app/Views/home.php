<div class="container">
    <div class="mainContent">
        <h2>О НАС</h2>
        <div class="aboutUs">
            <p><b>ООО “Паспорт фасадов” - единственная организация в г. Новосибирске с 2016 года специализирующаяся на
                    разработке,
                    согласовании и получении паспортов фасадов зданий.</b> Каждый специалист организации имеет
                значительный опыт и разбирается во
                всех тонкостях подготовки документации, благодаря чему достигается высокое качество работ в короткие
                сроки.
                Мы оформим для вас паспорт фасадов &laquo;под ключ&raquo; за оптимальную стоимость и сроки.
            </p>
        </div>
        <div class="countWork">
            <i class="fa fa-check-square-o" aria-hidden="true"></i>
            <p>более 160<br>разработанных&nbsp;паспортов</p>

        </div>
        <div class="lastWorks">
            <h3>последние выполненные паспорта</h3>
            <div class="lastWorks_window">

                <?php if (!empty($lastWorks)) : ?>
                    <?php foreach ($lastWorks as $lastWork) : ?>
                        <div class="lastWorks_item">
                            <img src="/images/common/no_passport.jpg" alt="паспорт фасадов" class="lastWork_img">
                            <p><?= $lastWork['title'] ?></p>
                        </div>
                    <?php endforeach; endif; ?>

            </div>
            <div class="more_item">
                <a href="#">другие готовые паспорта...</a>
            </div>
        </div>
    </div>


    <div class="slogan">
        <h3>Паспорт фасадов = ООО "ПАСПОРТ ФАСАДОВ"</h3>
    </div>
</div>

