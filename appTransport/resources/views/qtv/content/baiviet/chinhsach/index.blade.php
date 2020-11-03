@extends('qtv.layouts.NewHomePageLayout')
@section('title')
    Bài Viết| Chính Sách
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
                <form action="{{url('qtv/bai-viet/chinh-sach/add')}}" method="post" class="uk-grid-small uk-grid" uk-grid>
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
                                        <label class="uk-form-label uk-text-large" style="font-size: large"> Tên bài viết</label>
                                    </div>
                                </div>
                                <div class="uk-width-1-1@s uk-width-3-4@m" style=" margin-top: 0px">
                                    <div class="uk-form-controls" style="margin-left: 0px;">
                                        <input class="uk-input" type="text" name="name" placeholder="Tên bài viết ..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
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
                                              required="" style="width: 93%;%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">Viết bài </textarea>
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
                                        <input class="uk-input" type="text" name="seo_title" placeholder="Title ..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
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
                                        <input class="uk-input" type="text" name="seo_keywords" placeholder="keywords cách nhau bởi dấu ," required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
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
                                        <input class="uk-input" type="text" name="seo_desc" placeholder="Description..." required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
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
                            <span class="cardBox__header__txt uk-text-uppercase uk-text-large" style="font-size: large">Danh sách bài viết Chính sách</span>
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
                        <th class="uk-text-center">Slug</th>
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
                            <td class="uk-text-left">{{$page->slug }}</td>
                            <td>
                                <a onclick="openformedit({{$page->id}})"><button class="btn btn-warning">Chi tiết</button></a>
                                <a href="{{url('qtv/bai-viet/chinh-sach/delete/'.$page->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa ? ')"><button class="btn btn-danger">Xóa</button></a>
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
                    <form action="{{url('qtv/bai-viet/chinh-sach/edit/'.$page->id)}}" method="post" class="uk-grid-small uk-grid" uk-grid>
                        @csrf
                        <div class="uk-text-left uk-text-uppercase" style="background: #D6D6D6;padding: 10px 5px 10px 5px;border-radius:20px 0px 0px 0px;border: 1px solid #707070; width: 100%">
                            <h4 style="font-weight: bold;color: #707070">SỬA BÀI VIẾT</h4>
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
                            <div class="uk-card-default" uk-grid style="width: 100%; margin-left: 0px;margin-top: 0px; padding-top: 20px;" >
                                <div class="uk-width-1-1@s uk-width-1-1@m">
                                    <div class="uk-text-left uk-text-large">
                                        <label class="uk-form-label uk-text-large" style="font-size: large">Viết Bài</label>
                                    </div>
                                </div>
                                <div class="uk-width-1-1@s uk-width-1-1@m" style=" margin-top: 0px">
                                    <div class="uk-form-controls" style="margin-left: 0px;">
                                    <textarea type="text" name="desc" class="form-control mytinymce" id="descl3"
                                              required="" style="width: 90%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5"><?php echo $page->desc?> </textarea>
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
                                        <input class="uk-input" type="text" name="seo_title" value="{{$page->seo_title}}" placeholder="Title ..." required="" style="width: 85%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
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
                                        <input class="uk-input" type="text" name="seo_keywords" value="{{$page->seo_keywords}}" placeholder="keywords cách nhau bởi dấu ," required="" style="width: 85%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
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
                                        <input class="uk-input" type="text" name="seo_desc" value="{{$page->seo_desc}}"  placeholder="Description..." required="" style="width: 85%;border-radius: 5px 5px 5px 5px;border: 1px solid #707070;background: #F5F5F5">
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

