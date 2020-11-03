<div id="counter" class="uk-section thongke uk-background-norepeat uk-background-center-center" data-src="{{'frontend/images/solieutk/background1.png'}}" uk-img uk-scrollspy="cls: uk-animation-slide-bottom-small; target: .box2; delay: 200; repeat: false">
    <div class="uk-container">
        <div class="uk-child-width-1-2@m uk-grid-120-m" uk-grid>
            <div>
                <div class="home__title uk-text-center uk-text-uppercase uk-margin-medium"><span>CHÚNG TÔI LÀ AI ?</span></div>
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
            <div>
                <div class="home__title uk-text-center uk-text-uppercase uk-margin-medium"><span>SỐ LIỆU THỐNG KÊ</span></div>
                <div class="uk-child-width-1-2 uk-child-width-1-3@m" uk-grid>
                    <?php
                    $data = array(
                        array(
                            "txt" => "Xe tải vận chuyển",
                            "number" => "179",
                        ),
                        array(
                            "txt" => "Nhân viên toàn quốc",
                            "number" => "1197",
                        ),
                        array(
                            "txt" => "Điểm gửi hàng toàn quốc",
                            "number" => "67",
                        ),
                        array(
                            "txt" => "Khách hàng tin dùng",
                            "number" => "17976",
                        ),
                        array(
                            "txt" => "Đơn hàng đang vận chuyển",
                            "number" => "28968",
                        ),
                        array(
                            "txt" => "Diện tích kho bãi",
                            "number" => "20000",
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                    <div>
                        <div class="uk-text-center box2">
                            <div class="thongke__boxImg">
                                <img src="{{asset('frontend/images/solieutk/icon/icon')}}<?= $k+1 ?>.png" alt="">
                            </div>
                            <div class="thongke__number"><span class="counter-value" data-count="<?= $v['number'] ?>">0</span></div>
                            <div class="thongke__txt"><?= $v['txt'] ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
