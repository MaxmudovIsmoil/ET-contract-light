
/**
 * Number format
 * 12340 --> 12 340
 */
function number_format(number) {
    return number.toLocaleString('ru-RU')
}

//  ################## templates ####################

// day = day, month, year;
function date_day_month_year_change(day, val) {
    $('.js_date_'+day+'_static').html(val)
}


function select_date_month_fun_edit() {
    // 1
    $('.js_select_data_month1').removeClass('d-none')
    $('.js_span_date_month1').addClass('d-none')

    // 2
    $('.js_select_data_month2').removeClass('d-none')
    $('.js_span_date_month2').addClass('d-none')
}

function select_date_month_fun_save() {
    // 1
    let select_month1 = $('.js_select_data_month1')
    let span_month1 = $('.js_span_date_month1')

    select_month1.addClass('d-none')
    span_month1.html(select_month1.val())
    span_month1.removeClass('d-none')

    // 2
    let select_month2 = $('.js_select_data_month2')
    let span_month2 = $('.js_span_date_month2')

    select_month2.addClass('d-none')
    span_month2.html(select_month2.val())
    span_month2.removeClass('d-none')
}


function create_div(number, response) {
    let tin_div;
    if(number == 1)
        tin_div = $('.js_tin_div1')
    else
        tin_div = $('.js_tin_div2')

    tin_div.find('.js_name').html('<b>'+response.name+'</b>').css('color', 'blue')
    tin_div.find('.js_address').html(response.address).css('color', 'blue')
    tin_div.find('.js_account').html(response.account).css('color', 'blue')
    tin_div.find('.js_mfo').html(response.mfo).css('color', 'blue')
    tin_div.find('.js_oked').html(response.oked).css('color', 'blue')
    tin_div.find('.js_tin').html(response.tin).css('color', 'blue')
    tin_div.find('.js_director').html(response.director).css('color', 'blue')

}

//  ################## templates ####################

