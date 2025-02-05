<ul class="menu">
    <li class="menu__item"><a href="<?= base_url('/') ?>">ГЛАВНАЯ</a></li>
    <li class="menu__item menu-item-has-children">
        <a href="<?= base_url('/works') ?>" class="list_categories">ОБЪЕКТЫ</a>
        <ul class="sub-menu">

            <?php foreach ($categories as $category) : ?>
                <li><a href="/works/<?= $category->id ?>"><?= $category->title ?></a></li>
            <?php endforeach; ?>

        </ul>
    </li>
    <li class="menu__item"><a href="<?= base_url('/thanks') ?>">БЛАГОДАРНОСТИ</a></li>
    <li class="menu__item"><a href="<?= base_url('/law') ?>">ЗАКОН</a></li>
    <li class="menu__item"><a href="<?= base_url('/contact') ?>">КОНТАКТЫ</a></li>
    <li class="menu__item"><a href="<?= base_url('/about') ?>">О&nbsp;НАС</a></li>
    <li class="menu__item"><a href="<?= base_url('/map') ?>">КАРТА</a></li>
</ul>
