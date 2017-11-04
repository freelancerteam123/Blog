@extends('admin.layout')

@section('content')
    <div class="right_col" role="main">
        <div>
        	<div class="page-title">
              	<div class="title_left">
                	<h3>@yield('title')</h3>
              	</div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
            	@yield('content_main')
            </div>
        </div>
    </div>
@endsection