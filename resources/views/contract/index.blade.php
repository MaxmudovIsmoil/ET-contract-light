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
                    <th>Employees</th>
                    <th>Jurist</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
            @php
                $u = \Auth::user();
                $u->load('section');
            @endphp
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

                            @if($u->section->rule != 'JURIST')

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

                                @if($c->status == 0)
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

        $(document).ready(function() {

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
                },
                {{--processing: true,--}}
                {{--serverSide: true,--}}
                {{--ajax: {--}}
                {{--    "url": '{{ route("contract.getContracts") }}',--}}
                {{--},--}}
                {{--columns: [--}}
                {{--    {data: 'DT_RowIndex'},--}}
                {{--    // {data: 'title'},--}}
                {{--    // {data: 'number'},--}}
                {{--    {data: 'status'},--}}
                {{--    // {data: 'date'},--}}
                {{--    // {data: 'user'},--}}
                {{--    // {data: 'jurist'},--}}
                {{--    {data: 'action', name: 'action', orderable: false, searchable: false}--}}
                {{--],--}}
                // initComplete: function () {
                //     this.api()
                //         .columns()
                //         .every(function () {
                //             let column = this;
                //             let select = $('<select><option value=""></option></select>')
                //                 .appendTo($(column.footer()).empty())
                //                 .on('change', function () {
                //                     let val = $.fn.dataTable.util.escapeRegex($(this).val());
                //                     column.search(val ? '^' + val + '$' : '', true, false).draw();
                //                 });
                //             column
                //                 .data()
                //                 .unique()
                //                 .sort()
                //                 .each(function (d, j) {
                //                     select.append('<option value="' + d + '">' + d + '</option>');
                //                 });
                //         });
                // }
            });

        });
    </script>
@endsection
