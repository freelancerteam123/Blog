@extends('admin.components.add_content')

@section('title') Thêm nhà cung cấp @endsection

@section('content_main')
	<div class="add-supplier-container">
		<form id="form-supplier-admin" class="form-horizontal col-md-8 form-validate" novalidate method="post" action="{{route('admin.add.action')}}">
			{{ csrf_field() }}

	      	<div class="form-group">
	        	<label class="control-label label-form" for="name">Tên <span class="required">*</span></label>
	        	<div>
	          		<input type="text" id="name" name="name" required="required" class="form-control" value="{{old('name')}}">
	        	</div>
	      	</div>

	      	<div class="form-group">
	        	<label class="control-label label-form" for="name">Logo <span class="required">*</span></label>
	        	<div>
	          		<label class="btn btn-primary">
					    <i class="fa fa-plus"></i> Chọn ảnh <input type="file" hidden class="hide">
					</label>
	        	</div>
	        	<img class="logo">
	      	</div>

	      	<div class="form-group">
	        	<label class="control-label label-form" for="contact">Liên hệ <span class="required">*</span></label>
	        	<div>
	          		<input type="text" id="contact" name="contact" required="required" class="form-control" value="{{old('contact')}}">
	        	</div>
	      	</div>

	      	<div class="form-group">
	        	<label class="control-label label-form" for="desc">Mô tả</label>
	        	<div>
	        		<textarea class="form-control" rows="10" id="desc" name="desc"></textarea>
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