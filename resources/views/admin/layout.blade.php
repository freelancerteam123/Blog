<!DOCTYPE html>
<html lang="en">
  	<head>
    	<title>Admin!</title>
    	@include('admin.components.define.meta')
    	@include('admin.components.define.css')
  	</head>

  <body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @include('admin.components.menu')
            @include('admin.components.top_nav')
            @include('admin.components.content')
            @include('admin.components.footer')
        </div>
    </div>

    @include('admin.components.define.javascript')
  </body>
</html>
