@extends('qtv.layouts.NewHomePageLayout')
@section('title')
    Cài đặt | Liên Hệ
@endsection

@section('content')

    <div class="row" style="width: 80%;margin-left: 10%">
        <div class="row">
            <h4  style="text-align: center;font-weight: bold;padding-top: 10px;font-size: 32px">Cấu hình Liên hệ</h4>
        </div>
        <div class="row">
            <form action="{{url('/qtv/cai-dat/lien-he/edit')}}" method="post" >
                @csrf
                <div class="row" >
                    <textarea type="text" name="desc" class="form-control mytinymce" id="descl3" placeholder="Mô tả chi tiết" required=""><?php echo($contact->desc); ?></textarea>

                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        let route_prefix = "{{url('/filemanager')}}";
        $('.lfm-btn').filemanager('image', {prefix: route_prefix});
    </script>
@endsection

