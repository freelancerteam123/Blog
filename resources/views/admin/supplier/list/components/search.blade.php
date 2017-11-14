<div class="col-md-3 col-sm-3 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Bộ lọc</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="list-filter">
                <form class="form-validate" id="form-filter-user" method="get" action="{{route('admin.search')}}" novalidate>
                    <div class="filter-item">
                        <p class="title">Số lượng bản ghi mỗi trang</p>
                        <input type="number" name="pagination" id="pagination" class="form-control form-number" 
                            value="{{ isset($query['pagination']) ? $query['pagination'] : 15 }}" required>
                    </div>

                    <div class="filter-item must-checked-one">
                        <p class="title">Loại người dùng</p>
                        <div class="type-user">
                            <label for="active">Hoạt đông</label>
                            <input type="checkbox" name="active" class="custom" id="active" value="1"
                                {{ isset($query['active']) || (!isset($query['active']) && !isset($query['inactive'])) ? 'checked' : '' }}>
                        </div>
                        <div class="type-user">
                            <label for="inactive">Khóa</label>
                            <input type="checkbox" name="inactive" class="custom" id="inactive" value="1" 
                                {{ isset($query['inactive']) ? 'checked' : '' }}>
                        </div>
                    </div>

                    <div class="filter-item">
                        <p class="title">Theo tên hoặc email</p>
                        <input type="text" name="name" class="form-control" value="{{ isset($query['name']) ? $query['name'] : "" }}">
                    </div>

                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-search"></i>
                        Tìm kiếm
                    </button>
                    <a href="{{route('admin.list')}}" class="btn btn-default">
                        <i class="fa fa-refresh"></i>
                        Hủy lọc
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>