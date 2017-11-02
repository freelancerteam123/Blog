<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
             <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Admin ABBApp!</span></a>
        </div>

    <div class="clearfix"></div>
        <div class="profile clearfix">
        <div class="profile_pic">
            <img src="{{ url('assets/images/img.jpg') }}" alt="admin" class="img-circle profile_img">
        </div>
        <div class="profile_info">
            <span>Xin chào,</span>
            <h2>Nguyễn Song Hào</h2>
        </div>
    </div>
    <br />

    @include('admin.components.menu.side_menu')
    @include('admin.components.menu.footer_menu')
  </div>
</div>