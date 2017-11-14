@extends('admin.components.add_content')

@section('title') Thêm Nhà Hàng @endsection

@section('content_main')
	<div class="add-restaurant-container">
		<form id="form-add-restaurant" class="form-horizontal col-md-9 form-validate dropzone" 
			novalidate method="post" action="{{route('admin.add.action')}}">
			{{ csrf_field() }}

	      	<div class="form-group">
	        	<label class="control-label label-form" for="name">Tên nhà hàng <span class="required">*</span></label>
	        	<div>
	          		<input type="text" id="name" name="name" required="required" class="form-control" value="{{old('name')}}">
	        	</div>
	      	</div>

	      	<div class="form-group">
	        	<label class="control-label label-form" for="name">Ảnh <span class="required">*</span></label>
	        	@include('admin.components.multi_image.index')
	      	</div>

	      	<div class="form-group">
	        	<label class="control-label label-form" for="desc">Mô tả <span class="required">*</span></label>
	        	<div>
	          		<textarea class="form-control" id="desc" name="desc" rows="10"></textarea>
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