@extends('layouts.app')


@section('style')
    <link rel="stylesheet" href="{{ asset('css/contract.css') }}">
@endsection


@section('content')

    <section class="app-user-list">
        <a href="{{ route('contract.index') }}" class="back-btn-icon" title="go back"><i class="fas fa-long-arrow-alt-left"></i></a>

        @php echo $contract->data; @endphp

    </section>

@endsection


@section('script')

    <script>


    </script>
@endsection
