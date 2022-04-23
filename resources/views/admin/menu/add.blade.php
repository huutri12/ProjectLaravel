@extends('admin.main')
@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection

@section('content')
    <form action="" method="POST">
        <div class="card-body">

            <div class="form-group">
                <label for="menu">Tên Danh Mục: </label>
                <input type="text" name="name" class="form-control" id="menu" placeholder="Nhập tên danh mục">
            </div>

            <div class="form-group">
                <label for="menu">Danh mục: </label>
                <select class="form-control" name="parent_id">

                    @foreach($menus as $menu)
                        <option value="{{$menu->id}}">{{$menu->name}}</option>
                    @endforeach

                </select>
            </div>

            <div class="form-group">
                <label>Mô tả: </label>
                <textarea name="description" class="form-control" rows="3" placeholder="Mô tả" style="height: 40px;"></textarea>
            </div>

            <div class="form-group">
                <label>Nội dung chi tiết: </label>
                <textarea name="content" id="content" class="form-control" rows="3" placeholder="Nội dung chi tiết" style="height: 86px;"></textarea>
            </div>

            <div class="col-sm-6">
                <label>Kích hoạt</label>
                <!-- radio -->
                <div class="form-group">
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" value="1" id="active" name="active" checked="">
                        <label for="active" class="custom-control-label">Có</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" value="0" id="inactive" name="active" >
                        <label for="inactive" class="custom-control-label">Không</label>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Tạo</button>
            </div>



        </div>
        @csrf
    </form>
@endsection
@section('foot')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
