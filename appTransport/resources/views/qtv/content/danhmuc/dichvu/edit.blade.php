@extends('qtv.layouts.NewHomePageLayout')
@section('title')
    Danh Mục | Dịch Vụ
@endsection
@section('style')
    h4
    {
    color: #656565;
    float: left;
    margin-left: 2%;
    font-weight: bold;
    }

@endsection
@section('content')
    <div class="">
        <div class="uk-card uk-card-default">
            <div class="uk-card-body uk-padding-small uk-box-shadow" style="padding-top: 2%;padding-bottom: 5%">
                <form action="{{url('/qtv/danh-muc/dich-vu/edit/'.$category->id)}}" method="post" class="uk-grid-small uk-grid" uk-grid>
                    @csrf
                    <div class="uk-width-1-1@s uk-width-1-2@m">
                        <div>
                            <div class="uk-text-center uk-text-large" style="padding-bottom: 20px; border-bottom: 2px solid #FBB03B; width: 80%;margin-left: 10%;">
                                SEO
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">KeyWords</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" name="seo_keywords" type="text" value="{{$category->seo_keywords}}" style="background: #e6e3e3">
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Title</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" name="seo_title" type="text" value="{{$category->seo_title}}" style="background: #e6e3e3">
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Descriptions</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" name="seo_desc" type="text" value="{{$category->seo_desc}}" style="background: #e6e3e3">
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-1@s uk-width-1-2@m">
                        <div >
                            <div class="uk-text-center uk-text-large uk-text-uppercase" style="padding-bottom: 20px; border-bottom: 2px solid #FBB03B; width: 80%;margin-left: 10%;">
                                Thông tin Danh mục
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Tên danh mục</label>
                            <div class="uk-form-controls">
                                <input class="uk-input"  name="name" type="text" value="{{$category->name}}" style="background: #e6e3e3">
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">Tên Slug</label>
                            <div class="uk-form-controls">
                                <input class="uk-input" name="slug" type="text" value="{{$category->slug}}" style="background: #e6e3e3">
                            </div>
                        </div>
                        <div style="margin-top: 20px">
                            <label class="uk-form-label uk-text-large" for="form-stacked-text" style="font-size: large">_</label>
                            <div class="uk-form-controls">
                                <button type="submit" class="uk-width-1-1 uk-button uk-button-default home__btn" style="background:#FBB03B;width: 60%;margin-left: 20%;border-radius: 10px 10px 10px 10px">Cập nhật</button>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
