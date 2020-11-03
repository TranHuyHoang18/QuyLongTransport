@extends('backend.layouts.homepageLayout')
@section('title')
    Sửa bài Tuyển dụng
@endsection
@section('style')
    <style type="text/css">
        .row
        {
            background-color: white;
            margin-top: 3%;
            padding-left: 5%;
            padding-right: 5%;
        }
        .row h4
        {
            font-size: 30px;
            font-weight: bold;
            text-align: center;
            margin: 0px auto;
        }
        .row label
        {
            font-size: 20px;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="outer-w3-agile col-xl mt-3 mr-xl-3">
            <h4 class="tittle-w3-agileits mb-4">Sửa bài viết mới trên trang tuyển dụng
                <form action="{{url('admin/tuyen-dung/bai-viet/edit/'.$page->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tên bài viết</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="inputEmail3"
                                   placeholder="Tên bài viết ..." required="" value="{{$page->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Danh mục Cha</label>
                        <div class="col-sm-10">
                            <select name="id_parent" style="float: left">
                                <option value="0"><h5>Không có danh mục cha</h5></option>
                                @foreach($categories as $category)
                                    @if($category->id == $page->id_category)
                                    <option value="{{$category->id}}" selected>
                                        <h5>{{$category->name}}</h5>
                                    </option>
                                    @else
                                        <option value="{{$category->id}}" >
                                            <h5>{{$category->name}}</h5>
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <?php
                    $images = $page->image ? json_decode($page->image) : array();
                    $i = 0;
                    ?>
                    @foreach($images as $image)
                        <?php $i++ ?>
                        <div class="form-group row" id="image">
                            <label for="images" class="col-sm-2 col-form-label">Hình ảnh {{$i}}</label>
                            <div class="col-sm-10">
                                <span class="input-group-btn">
                                    <a id="lfm{{$i}}" data-input="thumbnail{{$i}}" data-preview="hhh{{$i}}"
                                       class="lfm-btn btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                    <a class="btn btn-warning remove-image" >
                                        <i class="fa fa-remove"></i> Xóa
                                    </a>
                                </span>

                                <input id="thumbnail{{$i}}" class="form-control" type="text" name="images[]"
                                       value="{{ $image }}">
                                <img  src="{{asset($image)}}" style="margin-top:15px;max-height:100px;"></img>
                                <span id="hhh{{$i}}" style="margin-top:15px;max-height:100px;"></span>
                            </div>
                        </div>
                    @endforeach
                    <div class="form-group row">
                        <label for="descl3" class="col-sm-2 col-form-label">Hạn nộp hồ sơ</label>
                        <div class="col-sm-10">
                            <input type="date" name="date" required style="float: left" value="{{$page->date}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descl3" class="col-sm-2 col-form-label">Bài viết</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="desc" class="form-control mytinymce" id="descl3"
                                      placeholder="Mô tả chi tiết" required=""><?php echo($page->desc);?> </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Sửa Bài viết</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
    <script type="text/javascript">
        let route_prefix = "{{url('/filemanager')}}";
        $('.lfm-btn').filemanager('image', {prefix: route_prefix});

    </script>
@endsection
