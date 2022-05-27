@extends('layouts.app')


@section('style')
    <link rel="stylesheet" href="{{ asset('css/contract.css') }}">
@endsection


@section('content')

    <section class="app-user-list">
        <a href="{{ route('contract.index') }}" class="back-btn-icon" title="go back"><i class="fas fa-long-arrow-alt-left"></i></a>
        @php
            $u = \Auth::user();
            $u->load('section');
        @endphp
        @if($u->section->rule == 'JURIST' && $contract->status == '0')
            <div class="alert alert-primary text-center js_check_div" style="width: 1000px; margin: 0 auto;" data-id="{{ $contract->id }}">
                <h3>Check the document !</h3>
                <a href="#" class="btn btn-success mr-2 js_accept_or_decline_btn" data-status="1"><i class="fas fa-check-double"></i> Accept</a>
                <a href="#" class="btn btn-danger ml-2 js_accept_or_decline_btn" data-status="-1"><i class="fa-solid fa-xmark"></i> Decline</a>
            </div>
        @endif

        @php echo $contract->data; @endphp

    </section>

@endsection


@section('script')

    <script>

        $(document).ready(function() {

            $(document).on('click', '.js_accept_or_decline_btn', function(e) {
                e.preventDefault();

                let check_div = $(this).closest('.js_check_div')
                let id = check_div.data('id')
                let status = $(this).data('status')
                let token = $('meta[name="csrf-token"]').attr('content');


                $.ajax({
                    url: '{{ route('contract.update_status') }}',
                    type: 'POST',
                    data: { '_token': token, 'id': id, 'status': status},
                    dataType: 'JSON',
                    success: (response) => {
                        if (response.status) {
                            check_div.addClass('d-none')
                        }
                        console.log('res: ', response)
                    },
                    error: (response) => {
                        console.log('error: ', response)
                    }
                })
            });
        })

    </script>
@endsection
