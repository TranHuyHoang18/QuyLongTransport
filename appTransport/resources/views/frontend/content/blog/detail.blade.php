@extends('frontend.layouts.HomePageLayout')
@section('title')
{{$page->name}}
@endsection
@section('meta')
    <meta name="keywords" content="{{$page->keywords}}">
    <meta name="description" content="{{$page->description}}">
    <meta property="og:title" content="{{$page->title}}">
    <meta property="og:description" content="{{$page->description}}">
@endsection
@section('style')
        .sub-comment
        {
            background: #EEEEEE;
            border-radius: 10px 10px 10px 10px;
            border: 1px solid #CECECE;
            padding: 1% 1% 2% 1%;
            width:88%;
        }
@endsection
@section('content')
    @if(session()->has('success-message'))
        <div class="alert alert-success">
            {{ session()->get('success-message') }}
        </div>
    @endif
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: false; autoplay: true; autoplay-interval: 4000">

        <ul class="uk-slideshow-items" uk-height-viewport="offset-top: true; offset-bottom: 0">
            <li>
                <img src="{{asset('frontend/images/slides/banner01.png')}}" alt="" uk-cover>
            </li>
            <li>
                <img src="{{asset('frontend/images/slides/banner02.jpg')}}" alt="" uk-cover>
            </li>
            <li>
                <img src="{{asset('frontend/images/slides/banner03.jpg')}}" alt="" uk-cover>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

    </div>
    <div class="menuHeader" style="background: white;padding-top: 20px;padding-bottom: 20px">
        <div class="uk-container uk-padding-remove">
            <div class="uk-text-left">
                <a href="{{url('/')}}" style="color: #FFAA00">Trang chủ </a>
                <span style="color:#707070 "> ></span>
                <a href="{{url('/tin-tuc')}}" style="color: #FFAA00">Tin Tức</a>
                <span style="color:#707070 "> ></span>
                <a href="{{url('/tin-tuc/bai-viet/'.$page->slug)}}" style="color: #FFAA00">{{$page->name}}</a>
            </div>
        </div>
    </div>
    <div class="uk-section"style="padding-top: 5px;margin-top: 5px;padding-bottom: 10px">
        <div class="uk-container">
            <div class="uk-grid-match uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="home__title uk-text-Left uk-text-uppercase uk-margin-medium " style="margin-bottom: 1px">{{$page->name}}</div>
                    <div class="uk-margin home__block__lienhe__desc uk-text-left@m" style="margin-top: 10px;color:#b8b6b6 ">
                       {{$page->updated_at}}
                    </div>
                    <div class="uk-margin home__block__lienhe__desc">
                        <?php echo $page->desc?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section">
        <div class="uk-text-center" style="width: 70%;margin-left: 15%;margin-right: 15%;">
            <div class="uk-text-left uk-text-bold">
                <h4 style="color: #FF7700">{{$page->comments.' Bình Luận & Hỏi Đáp'}}</h4>
            </div>
            <div  uk-grid>
                <form class="form-comment" action="{{url('comment/post/'.$page->id)}}" method="post" style="width: 100%;padding-top:3%">
                    @csrf
                        <div class="uk-width-1-1@s">
                            <textarea name="content" style="height: 150px;width:80%; padding-left:20px; padding-top:10px;border-radius: 10px 10px 10px 10px;border: 1px solid #C9C9C9;color: #b1b0b0;">Mời bạn để lại câu hỏi, chúng tôi sẽ tư vấn cho bạn...</textarea>
                        </div>
                        <div class="uk-width-1-1@s">
                            <input style="height: 35px;border-radius: 10px 10px 10px 10px;border: 1px solid #C9C9C9;width: 80%;margin-top:2%;color: #b1b0b0;text-align: left;font-size:16px"
                                   placeholder="Họ Tên(bắt buộc)" required="" name="name">
                        </div>
                        <div class="uk-width-1-1@s">
                            <input style="height: 35px;border-radius: 10px 10px 10px 10px;border: 1px solid #C9C9C9;width: 80%;margin-top:2%;color: #b1b0b0;text-align: left;font-size:16px"
                               placeholder="Số điện thoại (bắt buộc)" required="" name="phone">
                        </div>
                        <div class="uk-width-1-1@s">
                            <input type="text" name="id_parent" value="0" style="display: none">
                            <input type="text" name="level" value="0" style="display: none">
                        </div>
                        <div class="uk-width-1-1@s uk-text-left">
                            <button type="submit" class="btn" style="border: 1px solid #FF9900;border-radius: 10px 10px 10px 10px; padding: 5px 10px 5px 10px;color: white;background:#FF9900;margin-top:2%;margin-left:10%;font-weight: bold;font-size: 16px">Gửi hỏi đáp</button>
                        </div>
                </form>
            </div>
            <script type="text/javascript">
                let count_comment = <?php echo count($comments);?>;
                let page_number = 1;
                function min(x, y)
                {
                    if (x<y) return x;
                    return y;
                }
                function check_turnoff_btn_loadmoreC()
                {
                    let tmp = parseInt(count_comment/20);
                    if( count_comment % 5 !=0) tmp++;
                    if (page_number == tmp)
                    {
                        document.getElementById("btn-loadmorecomment").style.display="none";
                    }

                }
                function loadmore()
                {
                    page_number ++;
                    for(let i= (page_number-1)*20+1;i<= min(page_number*20, count_comment);i++)
                    {
                        document.getElementById('page_comment_'+i).style.display="block";
                    }
                    check_turnoff_btn_loadmoreC();
                }

            </script>
            <div style="width:80%;margin-left:10%;padding-top: 3%;">
                @if(count($comments) >0)
                    <?php
                        $i=0;
                        $stt=0;
                    ?>
                    @foreach($comments as $comment )
                        <?php $stt++ ; ?>
                        @if($stt>20)
                            <div id="page_comment_{{$stt}}" style="margin-top: 10px;display: none">
                        @else
                            <div id="page_comment_{{$stt}}" style="margin-top: 10px">
                        @endif
                            @if($comment->level ==0)
                                <?php $i++;?>
                                <img src="{{asset('images/front/user_icon/'.$comment->icon_user)}}" style="max-height: 40px;float: left">
                                <div class="uk-text-left" style="margin-left: 40px">
                                    <div class="uk-text-bold uk-text-bold" style="font-weight: bold;font-size: 16px;color: #4E4E4E;padding-left: 10px">{{$comment->name.$comment->id}}</div>
                                    <div class="uk-text-left" style="font-size:16px;color: #4E4E4E;padding-top: 10px;padding-left: 10px">
                                        {{$comment->content}}
                                    </div>
                                    <div class="uk-text-left" style="font-size:16px;color: #4E4E4E;padding-top: 10px">
                                        <button onclick="openK({{$stt}})" style="color: #FF9900;font-size: 16px;border: none;background: none;border-right: 1px solid black">
                                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                                            Trả lời</button>
                                        <span style="color:#ACACAC">
                                            <?php
                                            $hieu_so = abs(time() - strtotime($comment->created_at));
                                            $nam = floor($hieu_so / (365*60*60*24));
                                            $thang = floor(($hieu_so - $nam * 365*60*60*24) / (30*60*60*24));
                                            $ngay = floor(($hieu_so - $nam * 365*60*60*24 - $thang*30*60*60*24)/ (60*60*24));
                                            $gio = floor(($hieu_so % (60 * 60 * 24)) / ( 60 * 60));
                                            $phut = floor(($hieu_so % (60 * 60)) / (60));
                                            $giay = floor($hieu_so % (60));
                                            if($thang>0)
                                            {
                                                echo $thang.' tháng trước';
                                            }
                                            else
                                                if($ngay>0)
                                                {
                                                    echo $ngay.' ngày trước';
                                                }
                                                else
                                                    if($gio>0)
                                                    {
                                                        echo $gio.' giờ trước';
                                                    }
                                                    else
                                                        if($phut>0)
                                                        {
                                                            echo $phut.' phút trước';
                                                        }
                                                        else
                                                        {
                                                            echo $giay.' giay trước';
                                                        }
                                            ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="uk-text-left" style="margin-left: 12%;width:100%;margin-top: 0px;padding: 0px 0px 0px 0px">
                                    <form class="form-comment" id="{{$stt}}" action="{{url('comment/post/'.$page->id)}}" method="post" style="display: none;margin-left: 50px">
                                        @csrf
                                        <div class="uk-width-1-1@s">
                                            <textarea name="content" style="height: 100px;width:80%; padding-left:20px; padding-top:10px;border-radius: 10px 10px 10px 10px;border: 1px solid #C9C9C9;color: #b1b0b0;">Mời bạn để lại câu hỏi, chúng tôi sẽ tư vấn cho bạn...</textarea>
                                        </div>
                                        <div class="uk-width-1-1@s">
                                            <input style="height: 35px;border-radius: 10px 10px 10px 10px;border: 1px solid #C9C9C9;width: 80%;margin-top:10px;color: #b1b0b0;text-align: left;font-size:16px"
                                                   placeholder="Họ Tên(bắt buộc)" required="" name="name">
                                        </div>
                                        <div class="uk-width-1-1@s">
                                            <input style="height: 35px;border-radius: 10px 10px 10px 10px;border: 1px solid #C9C9C9;width: 80%;margin-top:10px;color: #b1b0b0;text-align: left;font-size:16px"
                                                   placeholder="Số điện thoại (bắt buộc)" required="" name="phone">
                                        </div>
                                        <div class="uk-width-1-1@s">
                                            <input type="text" name="id_parent" value="{{$comment->id}}" style="display: none">
                                            <input type="text" name="level" value="1" style="display: none">
                                        </div>
                                        <div class="uk-width-1-1@s uk-text-left">
                                            <button type="submit" class="btn" style="border: 1px solid #FF9900;border-radius: 10px 10px 10px 10px; padding: 5px 10px 5px 10px;color: white;background:#FF9900;margin-top:10px;font-weight: bold;font-size: 16px">Gửi hỏi đáp</button>
                                        </div>
                                    </form>
                                </div>
                            @else
                                <div class="uk-text-left sub-comment" style="margin-left: 35px" >
                                    <img src="{{asset('images/front/user_icon/'.$comment->icon_user)}}" style="max-height: 40px;float: left">
                                    <div class="uk-text-left" style="margin-left: 45px">
                                        <div class="uk-text-bold uk-text-bold" style="font-weight: bold;font-size: 16px;color: #4E4E4E;padding-left: 10px">{{$comment->name.$comment->id}}</div>
                                        <div class="uk-text-left" style="font-size:16px;color: #4E4E4E;padding-top: 10px;padding-left: 10px">
                                            {{$comment->content}}
                                        </div>
                                        <div class="uk-text-left" style="font-size:16px;color: #4E4E4E;padding-top: 10px">
                                            <button onclick="openK({{$stt}})" style="color: #FF9900;font-size: 16px;border: none;background: none;border-right: 1px solid black">
                                                <i class="fa fa-comments-o" aria-hidden="true"></i>
                                                Trả lời</button>
                                            <span style="color:#ACACAC">
                                            <?php
                                                $hieu_so = abs(time() - strtotime($comment->created_at));
                                                $nam = floor($hieu_so / (365*60*60*24));
                                                $thang = floor(($hieu_so - $nam * 365*60*60*24) / (30*60*60*24));
                                                $ngay = floor(($hieu_so - $nam * 365*60*60*24 - $thang*30*60*60*24)/ (60*60*24));
                                                $gio = floor(($hieu_so % (60 * 60 * 24)) / ( 60 * 60));
                                                $phut = floor(($hieu_so % (60 * 60)) / (60));
                                                $giay = floor($hieu_so % (60));
                                                if($thang>0)
                                                {
                                                    echo $thang.' tháng trước';
                                                }
                                                else
                                                    if($ngay>0)
                                                    {
                                                        echo $ngay.' ngày trước';
                                                    }
                                                    else
                                                        if($gio>0)
                                                        {
                                                            echo $gio.' giờ trước';
                                                        }
                                                        else
                                                            if($phut>0)
                                                            {
                                                                echo $phut.' phút trước';
                                                            }
                                                            else
                                                            {
                                                                echo $giay.' giay trước';
                                                            }
                                                ?>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-text-left" style="margin-left: 12%;width:100%;margin-top: 0px;padding: 0px 0px 0px 0px">
                                        <form class="form-comment" id="{{$stt}}" action="{{url('comment/post/'.$page->id)}}" method="post" style="display: none;margin-left: 50px">
                                            @csrf
                                            <div class="uk-width-1-1@s">
                                                <textarea name="content" style="height: 100px;width:80%; padding-left:20px; padding-top:10px;border-radius: 10px 10px 10px 10px;border: 1px solid #C9C9C9;color: #b1b0b0;">Mời bạn để lại câu hỏi, chúng tôi sẽ tư vấn cho bạn...</textarea>
                                            </div>
                                            <div class="uk-width-1-1@s">
                                                <input style="height: 35px;border-radius: 10px 10px 10px 10px;border: 1px solid #C9C9C9;width: 80%;margin-top:10px;color: #b1b0b0;text-align: left;font-size:16px"
                                                       placeholder="Họ Tên(bắt buộc)" required="" name="name">
                                            </div>
                                            <div class="uk-width-1-1@s">
                                                <input style="height: 35px;border-radius: 10px 10px 10px 10px;border: 1px solid #C9C9C9;width: 80%;margin-top:10px;color: #b1b0b0;text-align: left;font-size:16px"
                                                       placeholder="Số điện thoại (bắt buộc)" required="" name="phone">
                                            </div>
                                            <div class="uk-width-1-1@s">
                                                <input type="text" name="id_parent" value="{{$comment->id}}" style="display: none">
                                                <input type="text" name="level" value="1" style="display: none">
                                            </div>
                                            <div class="uk-width-1-1@s uk-text-left">
                                                <button type="submit" class="btn" style="border: 1px solid #FF9900;border-radius: 10px 10px 10px 10px; padding: 5px 10px 5px 10px;color: white;background:#FF9900;margin-top:10px;font-weight: bold;font-size: 16px">Gửi hỏi đáp</button>
                                            </div>
                                        </form>
                                    </div>
                            @endif
                            </div>
                    @endforeach
                @endif
            </div>
            <div class="uk-text-center">
                <button id="btn-loadmorecomment" onclick="loadmore()" class="uk-text-center" style="border: 1px solid #CFCFCF; border-radius: 8px 8px 8px 8px;padding: 10px 20px 10px 20px;color: #FF9900; margin-top: 3%">Xem thêm bình luận</button>
            </div>
        </div>
            <script type="text/javascript">
                check_turnoff_btn_loadmoreC();
            </script>
        </div>
        <div class="uk-text-center">
            <div id="counter" class="uk-section thongke uk-background-norepeat uk-background-center-center" data-src="{{'frontend/images/solieutk/background1.png'}}" uk-img uk-scrollspy="cls: uk-animation-slide-bottom-small; target: .box2; delay: 200; repeat: false;" style="padding-top: 20px">
                <div class="uk-container">
                    <div class="uk-child-width-1-1@m uk-grid-120-m" uk-grid style="width: 70%;margin-left: 15%">
                        <div>
                            <div class="home__title uk-text-left uk-text-uppercase uk-margin-medium"><span>Giới thiệu về Quy Long Logistics</span></div>
                            <div class="uk-margin home__block__lienhe__desc">
                                Quý Long Logistics tự hào là đơn vị đi đầu về áp dụng công nghệ
                                vào lĩnh vực vận chuyển nhằm mang tới trải nghiệm đột phá trong
                                vận hành và quản lý đơn hàng siêu dễ dàng. Mong mỏi của chúng
                                tôi khi áp dụng công nghệ là nhằm mang tới trải nghiệm logistics
                                tốt nhất cho khách hàng cũng tối ưu để giảm cước vận chuyển hiện
                                đang quá cao so với các nước trong khu vực.
                            </div>
                            <div class="uk-margin uk-text-center">
                                <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" frameborder="0" allowfullscreen uk-responsive uk-video="automute: true"></iframe>
                                <div class="uk-margin-small home__block__lienhe__desc">Video giới thiệu Quy Long Logistics</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-text-center" style="width: 70%;margin-left: 15%; padding-top: 4%;padding-bottom: 4%">
            <div class="uk-text-left uk-text-uppercase uk-text-large uk-text-bold" style="font-size: large"><i class="fa fa-pencil" aria-hidden="true" style="padding-right: 10px;color: #FF6600"></i> Bài viết liên quan</div>
            <?php $stt_pages = 0;
            ?>
            <script type="text/javascript">
                let count_relatedpage = <?php echo count($related_pages);?>;
                let related_page_number = 1;
                function check_turnoff_btn_loadmore()
                {
                    let tmp = parseInt(count_relatedpage/5);
                    if( count_relatedpage % 5 !=0) tmp++;
                    if (related_page_number == tmp)
                    {
                        document.getElementById("btn-loadmorepage").style.display="none";
                    }
                }
                function loadmorepages()
                {
                    related_page_number++;
                    for(let i= (related_page_number-1)*5+1;i<= min(related_page_number*5, count_relatedpage);i++)
                    {
                        document.getElementById('page_comment_'+i).style.display="block";
                    }
                    check_turnoff_btn_loadmore();
                }
            </script>
            @foreach($related_pages as $related_page)
                <?php $stt_pages++;?>
                @if($stt_pages >5)
                    <div id="related_page_{{$stt_pages}}" class="uk-text-left" uk-grid style="margin-top: 2%;display: none">
                @else
                    <div id="related_page_{{$stt_pages}}" class="uk-text-left" uk-grid style="margin-top: 2%;">
                @endif
                    <div class=" uk-width-1-2@s uk-width-1-3@m">
                        <img src="{{asset($related_page->image)}}" style="width:95%; padding-right: 5%" uk-img>
                    </div>
                    <div class=" uk-width-1-2@s uk-width-2-3@m">
                        <div class="uk-text-large uk-text-bold" style="padding-right: 30px">{{$related_page->name}}</div>
                        <div class="uk-text-large" style="padding-top: 20px;color: #505050;padding-right: 30px">
                            <?php echo $related_page->intro; ?>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="uk-text-center">
                <button id="btn-loadmorepage" onclick="loadmorepages()" class="uk-text-center" style="border: 1px solid #CFCFCF; border-radius: 8px 8px 8px 8px;padding: 10px 20px 10px 20px;color: #FF9900; margin-top: 3%;background: #FFFFFF">Xem thêm bài viết</button>
            </div>
        </div>
        <script type="text/javascript">
            check_turnoff_btn_loadmore();
        </script>

    </div>
    <script type="text/javascript">
        function openK(id) {
            let x = document.getElementsByClassName("form-comment");
            for (let i=0; i<x.length;i++)
            {
                x[i].style.display="none";
            }
            document.getElementById(id).style.display="inline";
        }
    </script>
@endsection


