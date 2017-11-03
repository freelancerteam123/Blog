<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Đăng nhập hệ thống</title>
        @include('admin.login.meta')
        @include('admin.login.css')
    </head>

    <body class="login">
        <div>
            <div class="login_wrapper">
                <div class="animate form login_form">
                    <section class="login_content">
                        <form id="login-form" novalidate method="post">
                            <h1>Đăng nhập</h1>
                            <div>
                                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required="" />
                            </div>
                            <div>
                                <input type="password" class="form-control" placeholder="Mật khẩu" name="password" id="password" required="" />
                            </div>
                            <div>
                                <button class="btn btn-default submit" type="submit">Đăng nhập</button>
                                <a class="reset_pass" href="#">Quên mật khẩu?</a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">Bạn chưa có tài khoản?
                                    <a href="#signup" class="to_register"> Tạo tài khoản </a>
                                </p>
                                <div class="clearfix"></div>
                                <br />
                            <div>

                            <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                            <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </body>

    @include('admin.login.javascript')
</html>