<div class="container">
    <h1><?= $title ?? ''; ?></h1>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form action="<?= base_url('/send');?>" method="post">

                <?= get_csrf_token(); ?>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control <?= get_validation_class('email')?>" id="email" placeholder="email"  value="<?= old('email') ?>">
                    <?= get_errors('email'); ?>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="formFile">
                </div>

                <button type="submit" class="btn btn-warning">load file</button>

            </form>
            <?= session()->remove('form_data'); ?>
            <?= session()->remove('form_errors'); ?>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">photo</th>
            <th scope="col">title</th>
            <th scope="col">time</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($works)) : ?>
            <?php foreach ($works as $work) : ?>
                <tr>
                    <th scope="row"><?= $work['id'] ?></th>
                    <td><img style="height: 150px;" src="/images/works/<?= $work['photoName'] ?>" alt="паспорт фасадов"></td>
                    <td><a href="/admin/edit?id=<?= $work['id'] ?>"><?= $work['title'] ?></a></td>
                    <td><?= $work['created_at'] ?></td>
                </tr>
            <?php endforeach;
        endif; ?>



        </tbody>
    </table>
</div>
