<div class="listWorks" id="listWorks">
<?php if (!empty($works)) : ?>
    <?php foreach ($works as $work) : ?>
        <div class="work_item">
            <img src="/images/works/<?= $work['photoName'] ?>" alt="паспорт фасадов"
                 class="lastWork_img">
            <p><?= $work['title'] ?></p>
            <p>Выдано: <?= $work['created_at'] ?></p>
        </div>
    <?php endforeach;
endif; ?>
</div>
