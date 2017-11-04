@extends('admin.components.list_content')

@section('title') Danh sách Admin @endsection

@section('content_main')
    <div class="row">
        @include('admin.admin.list.components.main')
        @include('admin.admin.list.components.search')
    </div>
@endsection