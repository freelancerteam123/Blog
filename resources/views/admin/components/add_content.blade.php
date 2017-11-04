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
            	<div class="col-md-12 col-sm-12 col-xs-12">
            		<div class="x_panel">
            			<div class="x_content">
            				<br>
            				@yield('content_main')
            			</div>
            		</div>
            	</div>
            </div>
        </div>
    </div>
@endsection