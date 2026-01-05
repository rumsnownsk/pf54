<div class="container">
<h1><?= $title ?? ''; ?></h1>
        <table class="table admin_allWorks">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">photo</th>
                <th scope="col">Название объекта</th>
                <th scope="col" class="publishCol">Статус</th>
                <th scope="col">Тип объекта</th>
                <th scope="col">Дата завершения</th>
                <th scope="col">Удалить</th>

            </tr>
            </thead>
            <tbody>
            <?php if (!empty($works)) : ?>
                <?php foreach ($works as $work) : ?>
                    <tr>
                        <th scope="row"><?= $work['id'] ?></th>
                        <td class="image_td"><img src="/images/works<?= $work['photoName'] ?>" alt="паспорт фасадов"></td>
                        <td><a href="/admin/build/<?= $work['id'] ?>"><?= $work['title'] ?></a></td>
                        <td><?= $work['publish'] ?></td>
                        <td><?= $work['category'] ?></td>
                        <td><?= $work['timeCreate'] ?></td>
                        <td><a href="/admin/build/<?= $work['id'] ?>/remove">удалить</a></td>
                    </tr>
                <?php endforeach;
            endif; ?>



            </tbody>
        </table>
    </div>

