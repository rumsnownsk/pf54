<div class="container">
    <div class="mainContent">
        <h2>наши готовые работы</h2>
        <div class="categories" id="categories">
            <?php if (!empty($categories)) : ?>
                <?php foreach ($categories as $category) : ?>
                    <a href="#" data-id="<?= $category['id'] ?>"><?= $category['title'] ?></a>
                <?php endforeach; endif; ?>
        </div>

        <div class="listWorks" id="listWorks">
        </div>

        <a href="#" hidden class="loadMore" id="loadMore">далее</a>

    </div>
</div>