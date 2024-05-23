@extends('layouts.app')
@php
$columns = [
  'colon',
  'adad',
];
@endphp
@section('content')
    <div class="container-fluid p-0">
    <Brandcrumb title="Services" title-two="List"></Brandcrumb>

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                       Services List
                    </div>
                    <div class="card-body">
                        {{ $dataTable->table() }}
                    </div>
                </div>
            </div>

        </div>
    <modal-component></modal-component>
    </div>
@endsection
@push('js')
    <script src="{{ asset('assets/js/datatables.js')}}"></script>
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
