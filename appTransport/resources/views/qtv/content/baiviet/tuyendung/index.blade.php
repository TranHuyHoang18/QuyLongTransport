@extends('qtv.layouts.NewHomePageLayout')
@section('title')
    Bài Viết| Tuyển Dụng
@endsection
@section('style')
    h4
    {
    color: #656565;
    float: left;
    margin-left: 2%;
    font-weight: bold;
    }
    td
    {
    text-align: center;
    border-right:1px dashed black;
    }

@endsection
@section('content')
    <div id="new-post" style="display: none">
        <div class="uk-card uk-card-default" style="background: none; box-shadow: none">
            <div class="uk-card-body uk-padding-small uk-box-shadow" style="padding-top: 2%;padding-bottom: 5%">
                <form action="{{url('qtv/bai-viet/tuyen-dung/add')}}" method="post" class="uk-grid-small uk-grid" uk-grid>
                    @csrf
                    <div class="uk-text-left" style="background: #D6D6D6;padding: 10px 5px 10px 5px;border-radius:20px 0px 0px 0px;border: 1px solid #707070; width: 100%">
                        <div style="float: left">
                            <h5 style="margin: 0px auto"><span style="border-right: 2px solid black;padding-right: 10px;">
                                <button type="button" style="background: none;border: none;outline: none;" onclick="openAddDetail()"  onsubmit="false" >THÊM BÀI VIẾT MỚI</button>
                            </span> <button type="button" style="background: none;border: none;outline: none;" onclick="openSeoDetail()"  onsubmit="false">SEO</button></h5>
                        </div>
                        <div style="float: right">
                            <button type="submit"  class="btn uk-text-center" style="background: #FFAA00;color: white;font-size: large;padding-left: 15px; padding-right: 15px;">Thêm bài viết</button>
                        </div>
                    </div>
                    <div id="add-detail" style="width: 100%; margin-left: 0px;margin-top: 0px; padding-left: 0px">
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large"> Danh mục Cha</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m"  style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px; width: 90%" uk-form-custom="target: > * > span:first-child" >
                                    <select name="id_parent" style="float: left;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5; min-height: 40px">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">
                                                <h5>{{$category->name}}</h5>
                                            </option>
                                        @endforeach
                                    </select>
                                    <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1" style="float: left;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5; min-height: 40px">
                                        <span class="uk-text-left"></span>
                                        <span uk-icon="icon: menu" style="float: right;margin-top: 10px"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large"> Tên bài viết</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <input class="uk-input" type="text" name="name" placeholder="Tên bài viết ..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large">Hạn nộp hồ sơ</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <input class="uk-input" type="date" name="date" placeholder="Tên bài viết ..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large" >
                                    <label class="uk-form-label uk-text-large" style="font-size: large">Hình ảnh</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px">
                                <span class="input-group-btn">
                                    <a id="lfm1" data-input="thumbnail1" data-preview="hhh1"
                                       class="lfm-btn btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                </span>

                                    <input id="thumbnail1" class="form-control" type="text" name="image"
                                           value="{{ old('image') }}" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                                    <input type="text" name="alt" placeholder="alt image  : " style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5;margin-top: 5px;margin-bottom: 5px">
                                    <span id="hhh1" style="margin-top:15px;max-height:100px;"></span>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px;padding-bottom: 3%; border-radius:0px 0px 20px 20px" >
                            <div class="uk-width-1-1@s uk-width-1-1@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large">Viết Bài</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-1-1@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <textarea type="text" name="desc" class="form-control mytinymce" id="descl3"
                                              required="" style="width: 93%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">Viết bài </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="seo-detail" style="width: 100%; margin-left: 0px;margin-top: 0px; padding-left: 0px; display: none">
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large">Title</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <input class="uk-input" type="text" name="titles" placeholder="Title ..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large">Keywords</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <input class="uk-input" type="text" name="keywords" placeholder="keywords cách nhau bởi dấu ," required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px;padding-bottom: 3%; border-radius:0px 0px 20px 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large">Description</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <input class="uk-input" type="text" name="descriptions" placeholder="Description..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="uk-card uk-card-default cardBox uk-margin" id="details">
        <div class="cardBox__header uk-card-header uk-background-mySin">
            <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                <div>
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-width-expand">
                            <span class="cardBox__header__txt uk-text-uppercase uk-text-large" style="font-size: large">Danh sách bài viết trang dịch vụ</span>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 0px">
                    <div class="uk-text-right">
                        <button id="btn-add"  class="btn btn-success"  onsubmit="false" onclick="openId('new-post')">Thêm bài viết</button>
                        <button id="btn-cancel"  class="btn btn-danger" onsubmit="false" onclick="CloseId('new-post')" style="display:none">Hủy</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="cardBox__body uk-card-body uk-padding-remove" >
            <div class="uk-overflow-auto">
                <table class="cardBox__body__table uk-table uk-table-striped uk-table-hover uk-table-small">
                    <thead>
                    <tr>
                        <th class="uk-text-center">STT</th>
                        <th class="uk-text-center">Tên bài viết</th>
                        <th class="uk-text-center">Tên danh mục</th>
                        <th class="uk-text-center">Hình ảnh</th>
                        <th class="uk-text-center">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  $i=0; ?>
                    @foreach($pages as $page)
                        <?php $i++; ?>
                        <tr>
                            <td>{{$i}}</td>
                            <td class="uk-text-left">{{$page->name}}</td>
                            <td class="uk-text-left">{{$map[$page->id_category]}}</td>
                            <td class="uk-text-left"> <img src="{{$page->image }}" style="padding-top:15px;padding-bottom:15px;max-width:150px; min-width: 50px" uk-img></td>
                            <td>
                                <a onclick="openformedit({{$page->id}})"><button class="btn btn-warning">Chi tiết</button></a>
                                <a href="{{url('qtv/bai-viet/tuyen-dung/delete/'.$page->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa ? ')"><button class="btn btn-danger">Xóa</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$pages->links()}}
            </div>
        </div>
    </div>
    @foreach($pages as $page)
        <div class="formedit" id="{{'formedit-'.$page->id}}" style="display: none">
            <div class="uk-card uk-card-default" style="background: none; box-shadow: none">
                <div class="uk-card-body uk-padding-small uk-box-shadow" style="padding-top: 2%;padding-bottom: 5%">
                    <form action="{{url('qtv/bai-viet/tuyen-dung/edit/'.$page->id)}}" method="post" class="uk-grid-small uk-grid" uk-grid>
                        @csrf
                        <div class="uk-text-left uk-text-uppercase" style="background: #D6D6D6;padding: 10px 5px 10px 5px;border-radius:20px 0px 0px 0px;border: 1px solid #707070; width: 100%">
                            <h4 style="font-weight: bold;color: #707070">SỬA BÀI VIẾT</h4>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large"> Danh mục Cha</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m"  style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px; width: 90%" uk-form-custom="target: > * > span:first-child" >
                                    <select name="id_parent" style="float: left;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5; min-height: 40px">
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
                                    <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1" style="float: left;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5; min-height: 40px">
                                        <span class="uk-text-left"></span>
                                        <span uk-icon="icon: menu" style="float: right;margin-top: 10px"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large"> Tên bài viết</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <input class="uk-input" type="text" name="name" value="{{$page->name}}" placeholder="Tên bài viết ..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large">Hạn nộp hồ sơ</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <input class="uk-input" type="date" name="date" value="{{$page->date}}" placeholder="Tên bài viết ..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large" >
                                    <label class="uk-form-label uk-text-large" style="font-size: large">Hình ảnh</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px">
                                    <span class="input-group-btn">
                                        <a id="lfma{{$page->id}}" data-input="thumbnaila{{$page->id}}" data-preview="hhha{{$page->id}}"
                                           class="lfm-btn btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                    <input id="thumbnaila{{$page->id}}" class="form-control" type="text" name="image"
                                           value="{{$page->image}}" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                                    <input type="text" name="alt"  value="{{'alt'.$page->alt}}" placeholder="alt image  : " style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5;margin-top: 5px;margin-bottom: 5px">
                                    <br>
                                    <span id="hhha{{$page->id}}" style="margin-top:15px;max-height:100px;">
                                <img src="{{$page->image}}" style="width: 150px">
                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px;" >
                            <div class="uk-width-1-1@s uk-width-1-1@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large">Viết Bài</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-1-1@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <textarea type="text" name="desc" class="form-control mytinymce" id="descl3"
                                              required="" style="width: 93%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5"><?php echo $page->desc?> </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large">Title</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <input class="uk-input" type="text" name="titles" value="{{$page->title}}" placeholder="Title ..." required="" style="width: 85%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large">Keywords</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <input class="uk-input" type="text" name="keywords" value="{{$page->keywords}}" placeholder="keywords cách nhau bởi dấu ," required="" style="width: 85%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px;" >
                            <div class="uk-width-1-1@s uk-width-1-4@m">
                                <div class="uk-text-left uk-text-large">
                                    <label class="uk-form-label uk-text-large" style="font-size: large">Description</label>
                                </div>
                            </div>
                            <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                <div class="uk-form-controls" style="margin-left: 0px;">
                                    <input class="uk-input" type="text" name="descriptions" value="{{$page->description}}"  placeholder="Description..." required="" style="width: 85%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-default uk-text-center" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px;padding-bottom: 3%; border-radius:0px 0px 20px 20px">
                            <button  type="submit"  class="btn uk-text-center" style="background: #FFAA00;color: white;font-size: large;padding-left: 20px; padding-right: 20px;margin-left: 35%;">Lưu</button>
                            <button  type="button"  class="btn btn-danger" onclick="closeformedit({{$page->id}})" style="background: #e02b3a;border-radius: 5px 5px 5px 5px;border: none;text-align: center;font-size: large;padding-left: 20px; padding-right: 20px;margin-left: 10px" >Hủy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    <script type="text/javascript">
        function openSeoDetail()
        {
            document.getElementById('add-detail').style.display="none";
            document.getElementById('seo-detail').style.display="block";
        }
        function openAddDetail()
        {
            document.getElementById('add-detail').style.display="block";
            document.getElementById('seo-detail').style.display="none";
        }
        function openform()
        {
            document.getElementById('formdichvu').style.display="block";
            document.getElementById('btn-add').style.display="none";
            document.getElementById('details').style.display="none";
            document.getElementById('add-detail').style.display="block";
        }
        function openformedit(id)
        {
            document.getElementById('formedit-'+id).style.display="block";
            document.getElementById('btn-add').style.display="none";
            document.getElementById('details').style.display="none";
        }
        function closeformedit(id)
        {
            document.getElementById('formedit-'+id).style.display="none";
            document.getElementById('btn-add').style.display="block";
            document.getElementById('details').style.display="block";
        }
        function closeform()
        {
            document.getElementById('formdichvu').style.display="none";
            document.getElementById('btn-add').style.display="block";
            document.getElementById('details').style.display="block";
        }
    </script>
    <script type="text/javascript">
        let route_prefix = "{{url('/filemanager')}}";
        $('.lfm-btn').filemanager('image', {prefix: route_prefix});
    </script>
    <script type="text/javascript">
        function openId(id)
        {
            document.getElementById(id).style.display="inline";
            document.getElementById('btn-add').style.display="none";
            document.getElementById('btn-cancel').style.display="inline";
        }
        function CloseId(id)
        {
            document.getElementById(id).style.display="none";
            document.getElementById('btn-add').style.display="inline";
            document.getElementById('btn-cancel').style.display="none";
        }
    </script>
@endsection
{{--@section('content')
    <div class="row" style="font-family: 'Segoe UI';background: #E8E8E8;width: 100%">
        <div class="row">
            <h3 style="color:#4D4D4D;float:left;margin-left: 5%">BÀI VIẾT TRANG TUYỂN DỤNG</h3>
            <button id="btn-add" onclick="openform()" class="btn btn-success" style="padding: 5px 10px 5px 10px;border: none;margin-left: 50px;margin-top: 10px"><h5 style="color:white;">Thêm bài viết mới</h5></button>
        </div>

        <div id="formdichvu" class="row"  style="width: 90%;margin-left: 3%;background: #E9E9E9;padding-bottom: 5%;display: none">
            <div class="row" style="text-align: center;background: #D6D6D6;padding: 10px 5px 10px 5px;border-radius:10px 0px 0px 0px;border: 1px solid #707070;">
                <h4 style="text-align: center;margin: 0px auto">THÊM BÀI VIẾT MỚI</h4>
            </div>
            <form action="{{url('qtv/bai-viet/tuyen-dung/add')}}" method="post" style="border-radius:0px 0px 10px 0px;border: 1px solid #707070;padding: 3% 3% 3% 3%;background: white">
                @csrf
                <div class="row">
                    <div class="col-sm-3">
                        <h4>Tên bài viết</h4>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" name="name" placeholder="Tên bài viết ..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <h4>Danh mục Cha</h4>
                    </div>
                    <div class="col-sm-9">
                        <select name="id_parent" style="float: left;width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">
                                    <h5>{{$category->name}}</h5>
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <h4>Hạn nộp hồ sơ</h4>
                    </div>
                    <div class="col-sm-9">
                        <input type="date" name="date" placeholder="Tên bài viết ..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <h4>Hình ảnh</h4>
                    </div>
                    <div class="col-sm-9">
                        <span class="input-group-btn">
                                <a id="lfm" data-input="thumbnail" data-preview="hhh"
                                   class="lfm-btn btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>

                        <input id="thumbnail" class="form-control" type="text" name="image"
                               value="{{ old('image') }}" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                        <span id="hhh" style="margin-top:15px;max-height:100px;"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <h4>Bài Viết</h4>
                    </div>
                    <div class="col-sm-9">
                        <textarea type="text" name="desc" class="form-control mytinymce" id="descl3"
                                  required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">Viết bài </textarea>
                    </div>
                </div>
                <div class="row" style="text-align: center">
                    <button class="btn" type="submit" style="background: #FFAA00;border-radius: 5px 5px 5px 5px;border: none;text-align: center;"><h4 style="color: white">Lưu thông tin</h4></button>
                    <button class="btn" type="button" onsubmit="false" onclick="closeform()" style="background: #e02b3a;border-radius: 5px 5px 5px 5px;border: none;text-align: center;"><h4 style="color: white">Hủy</h4></button>
                </div>
            </form>
        </div>
        <div class="row" id="details"style="margin-top: 1%">
            <table style="width: 96%;margin-left: 2%;padding-right:2%;color: #4D4D4D;font-size: 16px;background: white;padding-bottom: 5%">
                <thead >
                <tr style="margin-top: 10px;background:#FBB03B;padding: 10px 5px 10px 10px;height:50px">
                    <td scope="col">STT</td>
                    <td scope="col">Tên</td>
                    <td scope="col">Danh mục cha</td>
                    <td scope="col">Hình Ảnh</td>
                    <td scope="col">Ngày viết</td>
                    <td scope="col">Lượt xem</td>
                    <td scope="col" >Thao tác</td>
                </tr>
                </thead>
                <tbody>
                <?php  $i=0; ?>
                @foreach($pages as $page)
                    <?php $i++; ?>
                    @if($i%2==1)
                        <tr  style="margin-top: 5px;background:#F2F2F2;color:#666666;padding: 10px 5px 10px 10px;height:35px">
                    @else
                        <tr  style="margin-top: 5px;background:#CCCCCC;color:#666666;padding: 10px 5px 10px 10px;height:35px">
                    @endif
                        <td scope="col">{{$i}}</td>
                        <td scope="col">{{$page->name}}</td>
                        <td scope="col">{{$map[$page->id_category]}}</td>
                        <td scope="col">
                            <img src="{{$page->image }}" style="margin-top:15px;max-height:100px;">
                        </td>
                        <td scope="col">{{$page->created_at}}</td>
                        <td scope="col">{{$page->views}}</td>
                        <td scope="col">
                            <a onclick="openformedit({{$page->id}})"><button class="btn btn-warning">Chi tiết</button></a>
                            <a href="{{url('qtv/bai-viet/tuyen-dung/delete/'.$page->id)}}" ><button class="btn btn-danger">Xóa</button></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$pages->links()}}
        </div>
            @foreach($pages as $page)
            <div class="formedit" id="{{'formedit-'.$page->id}}" class="row"  style="width: 90%;margin-left: 3%;background: #E9E9E9;padding-bottom: 5%;display: none">
                <div class="row" style="text-align: center;background: #D6D6D6;padding: 10px 5px 10px 5px;border-radius:10px 0px 0px 0px;border: 1px solid #707070;">
                    <h4 style="text-align: center;margin: 0px auto">SỬA BÀI VIẾT</h4>
                </div>
                <form action="{{url('qtv/bai-viet/tuyen-dung/edit/'.$page->id)}}" method="post" style="border-radius:0px 0px 10px 0px;border: 1px solid #707070;padding: 3% 3% 3% 3%;background: white">
                    @csrf
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>Tên bài viết</h4>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" name="name" value="{{$page->name}}" placeholder="Tên bài viết ..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>Hạn nộp hồ sơ</h4>
                        </div>
                        <div class="col-sm-9">
                            <input type="date" name="date"value="{{$page->date}}" required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>Danh mục Cha</h4>
                        </div>
                        <div class="col-sm-9">
                            <select name="id_parent" style="float: left;width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
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
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>Hình ảnh</h4>
                        </div>
                        <div class="col-sm-9">
                        <span class="input-group-btn">
                                <a id="lfma{{$page->id}}" data-input="thumbnaila{{$page->id}}" data-preview="hhha{{$page->id}}"
                                   class="lfm-btn btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>

                            <input id="thumbnaila{{$page->id}}" class="form-control" type="text" name="image"
                                   value="{{$page->image}}" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
                            <span id="hhha{{$page->id}}" style="margin-top:15px;max-height:100px;">
                                <img src="{{$page->image}}" style="width: 150px">
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <h4>Bài Viết</h4>
                        </div>
                        <div class="col-sm-9">
                        <textarea type="text" name="desc" class="form-control mytinymce" id="descl3"
                                  required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5"><?php echo $page->desc?></textarea>
                        </div>
                    </div>
                    <div class="row" style="text-align: center">
                        <button class="btn" type="submit" style="background: #FFAA00;border-radius: 5px 5px 5px 5px;border: none;text-align: center;"><h4 style="color: white">Lưu thông tin</h4></button>
                        <button class="btn" type="button" onsubmit="false" onclick="closeformedit({{$page->id}})" style="background: #e02b3a;border-radius: 5px 5px 5px 5px;border: none;text-align: center;"><h4 style="color: white">Hủy</h4></button>
                    </div>
                </form>
            </div>
        @endforeach
    </div>
    <script type="text/javascript">
        function openform()
        {
            document.getElementById('formdichvu').style.display="block";
            document.getElementById('btn-add').style.display="none";
            document.getElementById('details').style.display="none";
        }
        function openformedit(id)
        {
            document.getElementById('formedit-'+id).style.display="block";
            document.getElementById('btn-add').style.display="none";
            document.getElementById('details').style.display="none";
        }
        function closeformedit(id)
        {
            document.getElementById('formedit-'+id).style.display="none";
            document.getElementById('btn-add').style.display="block";
            document.getElementById('details').style.display="block";
        }
        function closeform()
        {
            document.getElementById('formdichvu').style.display="none";
            document.getElementById('btn-add').style.display="block";
            document.getElementById('details').style.display="block";
        }
    </script>
    <script type="text/javascript">
        let route_prefix = "{{url('/filemanager')}}";
        $('.lfm-btn').filemanager('image', {prefix: route_prefix});

    </script>
@endsection--}}

