<div class="col-md-9 col-sm-9 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>{{$query ? 'Đang lọc' : 'Đang hoạt động' }}</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            @if ($users->total())
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index=>$user)
                            @if ($user['status'] != -1)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td>{{ $user['name'] }}</td>
                                    <td>{{ $user['email'] }}</td>
                                    <td>
                                        <span class="badge">
                                            {{ $user['status'] ? 'Hoạt động' : 'Khóa' }}
                                        </span>
                                    </td>
                                    <td>
                                        <form class="form-delete-record" method="post" action="{{route('admin.delete')}}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{$user['id']}}">
                                            <div class="btn-group">
                                                <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                                <button type="button" class="btn btn-primary btn-sm">Chi tiết</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            @else
                @include('admin.components.alert.empty_record')
            @endif

            {{ $users->appends(Illuminate\Support\Facades\Input::except('page'))->links() }}
        </div>
    </div>
</div>