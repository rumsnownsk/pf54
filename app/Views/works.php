<div class="container">
    <div class="mainContent">
        <h2>наши готовые работы</h2>
        <div class="categories" id="categories">
            <?php if (!empty($categories)) : ?>
                <?php foreach ($categories as $category) : ?>
                    <a href="#" data-id="<?= $category['id']?>"><?= $category['title']?></a>
                <?php endforeach; endif; ?>
        </div>

        <?php if (!empty($works)) : ?>
            <?php foreach ($works as $work) : ?>
                <div class="lastWorks_item">
                    <img src="/images/works/<?= $work['photoName'] ?>" alt="паспорт фасадов"
                         class="lastWork_img">

                    <p><?= $work['title'] ?>; категория здания - <?= $work['category_id'] ?></p>
                </div>
            <?php endforeach; endif; ?>

    </div>
</div>