<!DOCTYPE html>
<html lang="en">
  	<head>
    	<title>@yield('title')</title>
    	@include('admin.components.define.meta')
    	@include('admin.components.define.css')
  	</head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                @include('admin.components.menu')
                @include('admin.components.top_nav')
                @yield('content')
                @include('admin.components.footer')
            </div>
        </div>

        @include('admin.components.alert.message_flash')
        @include('admin.components.define.javascript')
    </body>
</html>
