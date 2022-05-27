@extends('layouts.app')


@section('style')
    <link rel="stylesheet" href="{{ asset('css/contract.css') }}">
@endsection


@section('content')

    <a href="{{ route('contract.index') }}" class="back-btn-icon" title="go back"><i class="fas fa-long-arrow-alt-left"></i></a>
    <section class="app-user-list js_data_all">

        @php echo $contract->data; @endphp

    </section>

@endsection


@section('script')

    <script>

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


        $(document).ready(function() {

            // edit btn
            $(document).on('click', '.js_text_edit_btn', function (e) {
                $('.js_div_form').removeClass('d-none')

                $(this).siblings('.btn').removeClass('d-none')
                $(this).addClass('d-none');

                $('.text_edit').attr('contenteditable', true)

                select_date_month_fun_edit()
            });

            // save btn
            $(document).on('click', '.js_text_save_btn', function (e) {
                $(this).siblings('.js_text_edit_btn').removeClass('d-none')
                $(this).siblings('.js_text_cancel_btn').addClass('d-none')
                $(this).addClass('d-none');

                $('.js_div_form').addClass('d-none')

                $('.text_edit').attr('contenteditable', false)

                select_date_month_fun_save()
            });


            // cancel btn
            $(document).on('click', '.js_text_cancel_btn', function (e) {
                $(this).siblings('.js_text_edit_btn').removeClass('d-none')
                $(this).siblings('.js_text_save_btn').addClass('d-none')
                $(this).addClass('d-none');

                $('.js_div_form').addClass('d-none')

                $('.text_edit').attr('contenteditable', false)
                location.reload();
            });




            // tin from
            $(document).on('click', '.js_tin_btn', function(e) {
                e.preventDefault()

                let number = $('.js_tin_number').val()
                let tin = $('.js_tin_input').val()
                if(tin.length == 9) {
                    let url = "https://api.e-invoice.uz/api/ru/rouming/bytin/"+tin
                    $.ajax({
                        type: 'GET',
                        url: url,
                        dataType: 'JSON',
                        success: (response) => {
                            console.log('res: ', response)
                            create_div(number, response)
                        },
                        error: (response) => {
                            console.log('error: ', response)
                        }
                    })
                }
                else {
                    alert('Tin error!')
                }
            })


            $(document).on('click', '.js_text_save_btn', function (e) {
                e.preventDefault();

                let token = $('meta[name="csrf-token"]').attr('content');
                let number = $('.js_number').html()
                let data = $('.js_data_all').html()


                console.log('number: ', number)
                console.log('data: ', data)

                $.ajax({
                    url: '{{ route('contract.update', [$contract->id]) }}',
                    type: 'POST',
                    data: { '_token': token, 'number': number, 'data': data, '_method': 'PUT' },
                    dataType: 'JSON',
                    success: (response) => {
                        // console.log('res: ', response)
                        window.location.href = window.location.protocol + "//" + window.location.host + "/contract/";
                    },
                    error: (response) => {
                        console.log('error: ', response)
                    }
                })

            })
        });

    </script>
@endsection
