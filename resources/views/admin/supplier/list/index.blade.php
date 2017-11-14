@extends('admin.components.list_content')

@section('title') Danh sách nhà cung cấp @endsection

@section('content_main')
    <div class="row">
        @include('admin.admin.list.supplier.main')
        @include('admin.admin.list.supplier.search')
    </div>
@endsection