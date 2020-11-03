<nav class="navTop uk-navbar-container uk-background-mySin" uk-navbar uk-sticky>
    <div class="uk-navbar-left">
        <a href="#my-id" class="uk-navbar-toggle navTop__navItem navTop__left__txt1 uk-hidden@m" uk-toggle>
            <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
        </a>
        <div class="uk-navbar-item navTop__navItem uk-visible@m">
            <div class="navTop__left__txt">Hotline: <b>1800 8052</b> 07:00 -21:00, Thứ 2 - Chủ Nhật</div>
        </div>
    </div>
    <div class="uk-navbar-right navTop__right">
        <ul class="uk-navbar-nav navTop__nav">
            <li class="uk-parent">
                <a href="#" class="navTop__right__link">
                    <div class="navTop__right__boxImg">
                        <img class="uk-responsive-height uk-responsive-width" src="{{asset('quanly/images/user.png')}}" alt="">
                    </div>
                </a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
            <li class="uk-parent uk-visible@m">
                <a href="#" class="navTop__right__link">
                    <div class="navTop__right__boxImg">
                        <img class="uk-responsive-height uk-responsive-width" src="{{asset('quanly/images/setup.png')}}" alt="">
                    </div>
                </a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
            <li class="uk-visible@m"><a href="#" class="navTop__right__link navTop__right__link--logout">Đăng xuất</a></li>
        </ul>
    </div>
</nav>
