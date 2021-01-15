@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê danh sách bài học
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                    <select class="input-sm form-control w-sm inline v-middle">
                        <option value="0">Bulk action</option>
                        <option value="1">Delete selected</option>
                        <option value="2">Bulk edit</option>
                        <option value="3">Export</option>
                    </select>
                    <button class="btn btn-sm btn-default">Apply</button>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
                    </div>
                </div>
                <?php
                    $message = \Illuminate\Support\Facades\Session::get('message');
                    if($message){
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        \Illuminate\Support\Facades\Session::put('message',null);
                    }
                ?>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th style="width:20px;">
                            <label class="i-checks m-b-none">
                                <input type="checkbox"><i></i>
                            </label>
                        </th>
                        <th>Tên</th>
                        <th>Mô tả</th>
                        <th>Hình ảnh</th>
                        <th>Trạng thái</th>
                        <th style="max-width:100px;">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lessions as $lession)
                        <tr>
                            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
                            <td><span class="text-ellipsis">{{$lession->name}}</span></td>
                            <td style="max-width: 250px"><span class="text-ellipsis">{{$lession->shortDescription}}</span></td>
                            <td style="max-width: 200px">
                                <span class="text-ellipsis">
                                    <img src="{{$lession->image}}" height="150px">
                                </span>
                            </td>
                            <td style="max-width: 50px"><span class="text-ellipsis">{{$lession->status}}</span></td>
                            <td style="max-width: 100px">
                                <a href="{{URL::to('api/all-lession/update/'.$lession->id)}}" class="active" ui-toggle-class="">
                                    <i style="font-size: 30px;cursor: pointer" class="fa fa-pencil-square-o text-success text-active"></i>
                                </a>
                                <a onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')" href="{{URL::to('api/all-lession/delete/'.$lession->id)}}" class="active" ui-toggle-class="">
                                    <i style="font-size: 30px;cursor: pointer" class="fa fa-times text-danger text"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
{{--                        {{ $categories->links() }}--}}
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
