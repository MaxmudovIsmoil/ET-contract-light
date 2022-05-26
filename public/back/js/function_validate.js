$(document).ready(function() {

    /** btn plus modal close inputs in clear **/
    $('.js_user_add_from button[data-dismiss="modal"]').click(function () {

        let form = $('.js_user_add_from')

        let name = form.find('.js_full_name')
        name.val('')
        name.removeClass('is-invalid')
        name.siblings('.invalid-feedback').addClass('valid-feedback')

        let phone = form.find('.js_phone')
        phone.val('')
        phone.removeClass('is-invalid')
        phone.siblings('.invalid-feedback').addClass('valid-feedback')

        let username = form.find('.js_username')
        username.val('')
        username.removeClass('is-invalid')
        username.siblings('.invalid-feedback').addClass('valid-feedback')

        let password = form.find('.js_password')
        password.val('')
        password.removeClass('is-invalid')
        password.siblings('.invalid-feedback').addClass('valid-feedback')

    })

    // $('.js_product_add_form button[data-dismiss="modal"]').click(function () {
    //
    //     let form = $('#js_add_from')
    //
    //     let name = form.find('.js_name')
    //     name.val('')
    //     name.removeClass('is-invalid')
    //     name.siblings('.invalid-feedback').addClass('valid-feedback')
    // })


    $('.js_full_name').on('input', function () {
        $(this).removeClass('is-invalid')
        $(this).siblings('.invalid-feedback').addClass('valid-feedback')
    })

    $('.js_username').on('input', function () {
        $(this).removeClass('is-invalid')
        $(this).siblings('.invalid-feedback').addClass('valid-feedback')
    })

    $('.js_phone').on('input', function () {
        $(this).removeClass('is-invalid')
        $(this).siblings('.invalid-feedback').addClass('valid-feedback')
    })


    $('.js_password').on('input', function () {
        $(this).removeClass('is-invalid')
        $(this).siblings('.invalid-feedback').addClass('valid-feedback')
    })


    // statistic
    $('.js_start_date').on('input', function () {
        $(this).removeClass('is-invalid')
        $(this).siblings('.invalid-feedback').addClass('valid-feedback')
    })

    $('.js_end_date').on('input', function () {
        $(this).removeClass('is-invalid')
        $(this).siblings('.invalid-feedback').addClass('valid-feedback')
    })
});
