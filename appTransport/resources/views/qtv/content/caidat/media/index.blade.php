@extends('qtv.layouts.NewHomePageLayout')
@section('title')
    MEDIA | Cài đặt
@endsection
@section('style')

@endsection
@section('content')
    <section class="tables-section">
        <div class="outer-w3-agile mt-3">
            <h4 class="tittle-w3-agileits mb-4">Quản lý tập tin</h4>
            <iframe src="{{url('/filemanager?type=image?')}}" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
        </div>
    </section>
@endsection
