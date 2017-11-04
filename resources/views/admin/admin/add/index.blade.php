@extends('admin.components.add_content')

@section('title') Thêm Admin @endsection

@section('content_main')
	<div class="add-admin-container">
		<form id="form-add-admin" class="form-horizontal col-md-6 form-validate" novalidate method="post" action="{{route('admin.add.action')}}">
			{{ csrf_field() }}

	      	<div class="form-group">
	        	<label class="control-label label-form" for="name">Tên <span class="required">*</span></label>
	        	<div>
	          		<input type="text" id="name" name="name" required="required" class="form-control" value="{{old('name')}}">
	        	</div>
	      	</div>

	      	<div class="form-group">
	        	<label class="control-label label-form" for="email">Email <span class="required">*</span></label>
	        	<div>
	          		<input type="email" id="email" name="email" required="required" class="form-control" value="{{old('email')}}">
	        	</div>
	      	</div>

	      	<div class="ln_solid"></div>
	  		<div class="form-group">
	    		<div>
	      			<button type="submit" class="btn btn-primary">Thêm</button>
		  			<button class="btn btn-success" type="reset">Làm mới</button>
	    		</div>
	  		</div>
	    </form>
	</div>
@endsection