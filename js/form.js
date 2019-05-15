// footer-contact-form это Jquery
$(function () {
    var form = $('.footer-contact-form');

    form.on('submit', function (e) {
        e.preventDefault();

        var form_data = $(this).serializeArray();

        var data = {
            action: 'contact_form', //в вп можно создавать экшены кторые будут взамодействовать с вашим входом по ajax
            data: form_data
        };
        //делаем с Ajax  поэтому:
        $.post(myajax.url, data, function () {}); //первым параметром необходимо передать ссылку на ajax wp

    });
});