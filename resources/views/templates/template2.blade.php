@extends('layouts.app')


@section('style')
    <link rel="stylesheet" href="{{ asset('css/contract.css') }}">
@endsection


@section('content')

    <section class="app-user-list">

        <!-- 1 - list -->
        <div class="card contract-text">
            <h4 class="text-center">Договор № <span class="text_edit" contenteditable="false">2</span> <br/> Уступки права требования и перевода долга</h4>
            <div class="d-flex justify-content-between">
                <span>г. Ташкент</span>
                <div>
                    «<span class="text_edit" contenteditable="false">26</span>»
                    <select name="month1" class="js_select_data_month1 d-none">
                        <option>Январь</option>
                        <option>Февраль</option>
                        <option>Март</option>
                        <option>Апрель</option>
                        <option>Май</option>
                        <option>Июнь</option>
                        <option>Июль</option>
                        <option>Август</option>
                        <option>Сентябрь</option>
                        <option>Октябрь</option>
                        <option>Ноябрь</option>
                        <option>Ноябрь</option>
                        <option>декабря</option>
                    </select>
                    <span class="text_edit js_span_date_month1">декабря</span>
                    <span class="text_edit" contenteditable="false">2020</span>г. <br>
                </div>
            </div>
            <div>
                <span class="text_edit" contenteditable="false"><b>ООО «NOWADAY»</b></span>, именуемое в дальнейшем «Дебитор» в лице <span class="text_edit" contenteditable="false">Директора <b>Aхмедова Ж.А.</b></span>,
                действующего на основании <span class="text_edit" contenteditable="false">Устава</span> с одной стороны, <b>СП ООО «Ist Telekom»</b>, именуемое в дальнейшем «Кредитор» в лице
                Генерального директора <b>Lee Baek Hee</b>, действующего на основании Устава со второй стороны,
                <span class="text_edit" contenteditable="false"><b>ООО "FASHION CORNER"</b></span>, именуемое в дальнейшем «Принимающая сторона», в лице
                <span class="text_edit" contenteditable="false">Директора <b>Пулатова У.С.</b></span>,
                действующего на основании <span class="text_edit" contenteditable="false">Устава</span> с третьей стороны, в соответствии с Главой 23 ст.313,315,316,320,321,322,323 ГК
                РУз заключили настоящий договор о нижеследующем: <br>

                1. По настоящему договору «Дебитор» уступает (передаёт) права по востребованию дебиторской задолженности по
                договору № <span class="text_edit" contenteditable="false">800-11418</span> от <span class="text_edit" contenteditable="false">24.08.2020</span> года в сумме
                <span class="text_edit" contenteditable="false"><b>3 718 386</b></span> сум РУз между «Дебитором» и «Принимающей стороной», а «Кредитор» принимает на себя права
                истребования дебиторского долга. <br>

                2. «Принимающая сторона» отплачивает «Кредитору» дебиторскую задолженность в сумме
                <span class="text_edit" contenteditable="false">
                    <b>3 718 386,00</b>
                </span> до
                «<span class="text_edit" contenteditable="false">26</span>»
                <select name="month2" class="js_select_data_month2 d-none">
                    <option>Январь</option>
                    <option>Февраль</option>
                    <option>Март</option>
                    <option>Апрель</option>
                    <option>Май</option>
                    <option>Июнь</option>
                    <option>Июль</option>
                    <option>Август</option>
                    <option>Сентябрь</option>
                    <option>Октябрь</option>
                    <option>Ноябрь</option>
                    <option>Ноябрь</option>
                    <option>декабря</option>
                </select>
                <span class="text_edit js_span_date_month2">декабря</span>
                <span class="text_edit" contenteditable="false">2020</span> года. <br>

                3. По настоящему договору «Кредитор» получает права вместе с «Дебитором» требовать от «Принимающей стороны» исполнения следующих обязательств:
                - истребовать сумму долга в размере <span class="text_edit" contenteditable="false"><b>3 718 386,00</b></span> сум РУз. <br>

                4. «Дебитор» обязан с момента подписания настоящего договора известить «Принимающую сторону» о состоявшейся уступке права требования. <br>

                5. «Дебитор» обязан передать «Кредитору» всю документацию, из которой вытекает право требования, являющего предметом настоящего договора. <br>

                6. Все вопросы, возникающие при исполнении настоящего договора, стороны разрешают путем мирных переговоров. При не достижении соглашения спор выносится на
                рассмотрение в Ташкентский Межрайонный Экономический суд. <br>

                7. Настоящий договор вступает в силу с момента его подписания сторонами и действует до полного его выполнения. <br>

                8. Настоящий договор составлен в трех экземплярах, имеющий равную юридическую силу, по одному экземпляру для каждой из сторон. <br>

                <div class="inn js_tin_div1">
                    <p><b>Принимающая сторона:</b></p>
                    <p><span class="text_edit js_name" contenteditable="false"><b>ООО «FASHION CORNER» 11</b></span></p>
                    <p><span class="text_edit js_address" contenteditable="false">г.Ташкент, Юнусабадский р-н, ул. А.Кодырий, 38А. 11</span></p>
                    <p>Р/счет: <span class="text_edit js_account" contenteditable="false">20208000300627122001  1</span></p>
                    <p>Банк: <span class="text_edit js_bank" contenteditable="false">в Нодирбегимский ф-ле, АКБ «Узпромстройбанк» 1</span></p>
                    <p>
                        МФО: <span class="text_edit js_mfo" contenteditable="false">00402 1</span>
                        ИНН: <span class="text_edit js_tin" contenteditable="false">304008293 1</span>
                        ОКЭД: <span class="text_edit js_oked" contenteditable="false">47110 1</span></p>
                    <p>РКННДС: _______________________</p>
                    <p>Телефон: <span class="text_edit js_phone" contenteditable="false">+998951424451</span></p>

                    <p><span class="text_edit js_director" contenteditable="false">Директор</span></p>
                    <p><span class="text_edit" contenteditable="false">Пулатов У.С.</span></p>
                    <p>_________________________________</p>
                    <p>М.П.</p>
                </div>
            </div>
            <i class="i-number">1</i>
        </div>

        <!-- 2 - list -->
        <div class="card contract-text">
            <div class="inn js_tin_div2">
                <p><b>Дебитор:</b></p>
                <p><span class="text_edit js_name" contenteditable="false"><b>ООО «NOWADAY»</b></span></p>
                <p><span class="text_edit js_address" contenteditable="false">100060, г.Ташкент, Мирабадский р-н, ул. Тарас Шевченко д.36</span></p>
                <p>Р/счет: <span class="text_edit js_account" contenteditable="false">20208000600302909001</span></p>
                <p>Банк: <span class="text_edit js_bank" contenteditable="false">в Юнусабадский ф-л, АО «Ziraat Bank Uzbekistan»</span></p>
                <p>
                    МФО: <span class="text_edit js_mfo" contenteditable="false">01138</span>
                    ИНН: <span class="text_edit js_tin" contenteditable="false">302888143</span>
                    ОКЭД: <span class="text_edit js_oked" contenteditable="false">47712</span>
                </p>
                <p>РКННДС: _______________________</p>
                <p>Телефон: <span class="text_edit js_phone" contenteditable="false">+998951424451</span></p>

                <p><span class="text_edit js_director" contenteditable="false">Директор</span></p>
                <p><span class="text_edit" contenteditable="false">Ахмедов Ж.А</span></p>
                <p>_________________________________</p>
                <p>М.П.</p>
            </div>


            <div class="inn">
                <p><b>Кредитор:</b></p>

                <p><b>СП ООО «Ist Telekom»</b></p>
                <p>100060, г. Ташкент, Мирабадский район, ул. Т. Шевченко, д.21</p>
                <p>Телефон: 78-150 00 82 Факс: 78-150 01 02</p>
                <p>Р/счет: 20214000404281148001</p>
                <p>Банк АО "КДБ Банк Узбекистан"</p>
                <p>МФО: 00842 ИНН: 204663354 ОКЭД: 61100</p>
                <p>Регистрационный код: 326010005625</p>

                <p>Генеральный директор</p>
                <p>Lee Baek Hee</p>
                <p>_________________________________</p>
                <p>М.П.</p>

            </div>

            <i class="i-number">2</i>
        </div><!-- ./card -->

    </section>

@endsection


@section('script')

    <script src="{{ asset('js/template_function.js') }}"></script>
    <script>
        $(document).ready(function() {

            $(document).on('click', '.js_text_save_btn', function (e) {
                e.preventDefault();

                let token = $('meta[name="csrf-token"]').attr('content');
                let number = $('.js_number').html()
                let title = $('.js_title').html()
                let data = $('.js_data_all').html()

                $.ajax({
                    url: '{{ route('templates.store') }}',
                    type: 'POST',
                    data: { '_token': token, 'number': number, 'title': title, 'data': data },
                    dataType: 'JSON',
                    success: (response) => {
                        // console.log('res: ', response)
                        window.location.href = window.location.protocol + "//" + window.location.host + "/contract/";
                    },
                    error: (response) => {
                        console.log('error: ', response)
                    }
                })
            });

        });

    </script>
@endsection
