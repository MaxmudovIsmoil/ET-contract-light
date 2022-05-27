@extends('layouts.app')

@section('content')

<!-- list section start -->
<div class="card">

    <table class="table table-striped w-100 table_hover" id="contract_datatable">
            <thead class="table-light">
                <tr>
                    <th>№</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>User</th>
                    <th>Jurist</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>

            @foreach($contracts as $c)

                <tr class="js_this_tr" data-id="{{ $c->id }}">
                    <td>{{ 1 + $loop->index }}</td>
                    <td>{{ $c->title }}</td>
                    <td>{{ $c->number }}</td>
                    <td>
                        @if($c->status == 0)
                            <span class="badge badge-warning p-1" style="font-size: 12px;">sent for verification</span>
                        @elseif($c->status == -1)
                            <sapn class="badge badge-danger p-1" style="font-size: 12px;">Unapproved</sapn>
                        @elseif($c->status == 1)
                            <sapn class="badge badge-success p-1" style="font-size: 12px;">Approved</sapn>
                        @endif
                    </td>
                    <td>{{ date('d.m.Y H:i', strtotime($c->created_at)) }}</td>
                    <td>{{ optional($c->user)->full_name }}</td>
                    <td>{{ optional($c->jurist)->full_name }}</td>

                    <td class="text-right">
                        <div class="d-flex justify-content-around">
                            <a href="{{ route('contract.show', [$c->id]) }}" class="text-info" title="Show">
                                <i class="fas fa-eye mr-50"></i>
                            </a>
                            @if($c->status != 1)
                                <a href="{{ route('contract.edit', [$c->id]) }}" class="text-primary"
                                   title="Edit">
                                    <i class="fas fa-pen mr-50"></i>
                                </a>
                            @else
                                <a href="javascript:void(0);" class="text-secondary"
                                   title="Edit">
                                    <i class="fas fa-pen mr-50"></i>
                                </a>
                            @endif

                            @if($c->status != 1)
                                <a class="text-danger js_delete_btn" href="javascript:void(0);"
                                   data-toggle="modal"
                                   data-target="#deleteModal"
                                   data-name="{{ $c->number }}"
                                   data-url="{{ route('contract.destroy', [$c->id]) }}" title="Delete">
                                    <i class="far fa-trash-alt mr-50"></i>
                                </a>
                            @else
                                <a class="text-secondary" href="javascript:void(0);"
                                   title="Cannot be turned off">
                                    <i class="fas fa-trash-alt mr-50"></i>
                                </a>
                            @endif

                        </div>
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>

</div>
<!-- list section end -->


@endsection


@section('script')

    <script>

        function user_form_clear(form) {
            form.find("input[type='text']").val('')
            form.remove('input[name="_method"]');

            let action_input = $('.js_huquqlar_ul .js_action')
            $.each(action_input, function(i, item) {
                $(item).prop('checked', false)
            });
        }

        $(document).ready(function() {
            var modal = $('#user_add_edit_modal')

            $('#contract_datatable').DataTable({
                paging: true,
                pageLength: 50,
                lengthChange: false,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: true,
                language: {
                    search: "",
                    searchPlaceholder: " Search...",
                }
            });

            $(document).on('click', '.js_add_btn', function() {
                let url = $(this).data('url')
                let form = modal.find('.js_user_add_from')

                form.attr('action', url)
                user_form_clear(form)
                modal.modal('show')
            })


            $(document).on('click', '.js_edit_btn', function() {

                let one_url = $(this).data('one_user_url')
                let update_url = $(this).data('update_url')
                let form = modal.find('.js_user_add_from')
                user_form_clear(form)

                form.attr('action', update_url)
                form.append('<input type="hidden" name="_method" value="PUT">')
                $.ajax({
                    type: 'GET',
                    url: one_url,
                    dataType: 'JSON',
                    success: (response) => {
                        // console.log(response)
                        if(response.status) {
                            let section = form.find('.js_section option')
                            $.each(section, function(i, item) {
                                if ($(item).val() == response.user.section_id) {
                                    $(item).attr('selected', true)
                                }
                            })
                            form.find('.js_full_name').val(response.user.full_name)
                            form.find('.js_email').val(response.user.email)
                            form.find('.js_phone').val(response.user.phone)
                            form.find('.js_email').val(response.user.email)
                            form.find('.js_old_email').val(response.user.email)
                            let status = form.find('.js_status option')

                            $.each(status, function(i, item) {
                                if ($(item).val() == response.user.status) {
                                    $(item).attr('selected', true)
                                }
                            })
                        }
                        modal.modal('show')
                    },
                    error: (response) => {
                        console.log('error: ', response)
                    }
                })
            })



            $(document).on('click', '.js_action, .custom-control-label', function () {
                let action_invalid = $('.js_action_invalid')
                if(!action_invalid.hasClass('d-none')) {
                    action_invalid.addClass('d-none')
                }
            })

            /** Contract add **/
            $('.js_user_add_from').on('submit', function(e) {
                e.preventDefault()
                let form = $(this)
                let action = form.attr('action')

                let phone = form.find('.js_phone')
                let email = form.find('.js_email')
                let password = form.find('.js_password')

                $.ajax({
                    url: action,
                    type: "POST",
                    dataType: "json",
                    data: form.serialize(),
                    success: (response) => {

                        if(response.status) {
                            location.reload()
                        }
                        console.log(response)
                        if(typeof response.errors !== 'undefined') {
                            if (response.errors.full_name)
                                form.find('.js_full_name').addClass('is-invalid')

                            if (response.errors.phone)
                                phone.addClass('is-invalid')

                            if (response.errors.email) {
                                email.addClass('is-invalid')
                                email.siblings('.invalid-feedback').html('The email field is required.')
                            }
                            if (response.errors.email == 'The email has already been taken.') {
                                email.addClass('is-invalid')
                                email.siblings('.invalid-feedback').html(response.errors.email)
                            }

                            if(response.errors.password) {
                                password.addClass('is-invalid')
                                password.siblings('.invalid-feedback').html('The password field is required.')
                            }
                            if(response.errors.password == 'The password must be at least 3 characters.') {
                                password.addClass('is-invalid')
                                password.siblings('.invalid-feedback').html(response.errors.password)
                            }

                        }
                    },
                    error: (response) => {
                        console.log('error: ',response)
                    }
                })
            });
        });
    </script>
@endsection
