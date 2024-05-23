@extends('layouts.app')

@section('content')
<div class="container-fluid p-0">
    <Brandcrumb title="Services" title-two="{{ __('Add New') }}"></Brandcrumb>
    <create-service></create-service>
</div>
@endsection
