<div class="container">
    <div class="mainContent">
        <h2>Укажите информацию:</h2>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="<?= base_url('/priceCalculate'); ?>" method="post" class="ajax-form">
                    <?= get_csrf_token(); ?>
                    <div class="mb-3">
                        <label for="name" class="form-label">Ваше имя</label>
                        <input name="name" type="text" class="form-control <?= get_validation_class('name') ?>"
                               id="name" placeholder="name" value="<?= old('name') ?>">
                        <?= get_errors('name'); ?>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input name="phone" type="tel" class="form-control <?= get_validation_class('phone') ?>"
                               id="phone" placeholder="123-456-7890"
                               value="<?= old('phone') ?>">
                        <?= get_errors('phone'); ?>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Адрес объекта</label>
                        <input name="address" type="text" class="form-control <?= get_validation_class('address') ?>"
                               id="address" placeholder="address_placeholder" value="<?= old('address') ?>">
                        <?= get_errors('address'); ?>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">what is you need?</label>
                        <textarea name="message"
                                  class="form-control"
                                  id="message" rows='4' cols='50'
                                  placeholder="....."
                            <?= get_errors('message'); ?>
                            <?= get_validation_class('message') ?> >
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-warning">Отправить заявку</button>
                </form>
                <?= session()->remove('form_data'); ?>
                <?= session()->remove('form_errors'); ?>
            </div>
        </div>
    </div>
</div>

