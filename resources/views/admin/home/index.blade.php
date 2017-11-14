@extends('admin.components.list_content')

@section('title') Danh sách Admin @endsection

@section('content_main')
    <div class="row">
        <div role="tabpanel">
        	<!-- Nav tabs -->
        	<ul class="nav nav-tabs" role="tablist">
        		<li role="presentation" class="active">
        			<a href="#home" aria-controls="home" role="tab" data-toggle="tab">home</a>
        		</li>
        		<li role="presentation">
        			<a href="#tab" aria-controls="tab" role="tab" data-toggle="tab">tab</a>
        		</li>
        	</ul>
        
        	<!-- Tab panes -->
        	<div class="tab-content">
        		<div role="tabpanel" class="tab-pane active" id="home">...</div>
        		<div role="tabpanel" class="tab-pane" id="tab">...</div>
        	</div>
        </div>
    </div>
@endsection