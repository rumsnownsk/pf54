$(function () {

    /* подсветка активного пункта меню в Навигации */
    let currentUri = location.origin + location.pathname.replace(/\/$/, '');
    $('.menu a').each(function () {
        let href = this.href.replace(/\/$/, '');
        if (currentUri === href) {
            $(this).addClass('active')
        }
    })

    /* отправка заявки для рассмотрения стоимости
    * получения Паспорта Фасада */
    $('.ajax-form').on('submit', function (e) {
        e.preventDefault();
        let form = $(this);
        let btn = form.find('button');
        let btnText = btn.text();
        let method = form.attr('method');
        if (method) {
            method = method.toLowerCase();
        }

        let action = form.attr('action') ? form.attr('action') : location.href;
        $.ajax({
            url: action,
            type: method === 'post' ? 'post' : 'get',
            data: form.serialize(),
            beforeSend: function () {
                btn.prop('disable', true).text('Отправляю...');
            },
            success: function (res) {
                console.log('тута из main.js');
                res = JSON.parse(res);

                console.log(res);
            },
            error: function () {
                alert('ajax error');
                btn.prop('disable', false).text(btnText);
            }
        })
    })

    /* подсветка активного пункта на странице Порядок Получения
    * паспорта фасада */
    $(document).on('click', '.step_item', function (e) {
        $('a[data-id]').removeClass('active');
        e.preventDefault();

        let message = 'ok';
        let step_id = $(this).data('id') || 1;

        if (!step_id) {
            console.log('non is step_id')
            message = 'error with step_id'
            step_id = 1;
        }
        $(this).addClass('active');
        // $(this).css({'box-shadow': 'none'});

        $.ajax({
            url: '/ajaxRequest',
            type: 'get',
            dataType: "json",
            data: {
                step_id: step_id,
                message: message
            },
            success: function (res) {
                let el = document.querySelector('#desc_proc')
                el.remove();
                $('#proc_desc_area').append(res.page_step)
            },
            error: function () {
                console.log('ошибочка');
            }
        });
    })
})



