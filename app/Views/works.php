<div class="container">
    <div class="mainContent">
        <h2>наши готовые работы</h2>
        <div class="categories" id="categories">
            <?php if (!empty($categories)) : ?>
                <?php foreach ($categories as $category) : ?>
                    <a href="#" data-id="<?= $category['id'] ?>"><?= $category['title'] ?></a>
                <?php endforeach; endif; ?>
        </div>

        <div class="works_area" id="works_area">
            <div class="listWorks" id="listWorks">
                <?php if (!empty($works)) : ?>
                    <?php foreach ($works as $work) : ?>
                        <div class="work_item">
                            <img src="/images/works/<?= $work['photoName'] ?>" alt="паспорт фасадов"
                                 class="lastWork_img">
                            <p class="work_item_title"><?= $work['title'] ?></p>
                            <p class="work_item_date">Выдано: <?= $work['created_at'] ?></p>
                        </div>
                    <?php endforeach;
                endif; ?>

            </div>
        </div>


    </div>
</div>