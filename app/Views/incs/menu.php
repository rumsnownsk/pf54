<ul class="menu">
    <li class="menu__item"><a href="<?= base_url('/') ?>">ГЛАВНАЯ</a></li>
    <li class="menu__item"><a href="<?= base_url('/law') ?>">ЗАКОН</a></li>
    <li class="menu__item menu-item-has-children">
        <a href="<?= base_url('/works') ?>" class="list_categories">ГОТОВЫЕ ПАСПОРТА</a>
        <ul class="sub-menu">
            <?php foreach ($categories as $category) : ?>
                <li><a href="/works/<?= $category->id ?>"><?= $category->title ?></a></li>
            <?php endforeach; ?>
        </ul>
    </li>
    <li class="menu__item"><a href="<?= base_url('/thanks') ?>">порядок получения паспорта</a></li>
    <li class="menu__item"><a href="<?= base_url('/contact') ?>">рассчитать стоимость и&ensp;сроки</a></li>
    <li class="menu__item"><a href="<?= base_url('/service') ?>">услуги</a></li>
    <li class="menu__item"><a href="<?= base_url('/map') ?>">контакты</a></li>
</ul>
