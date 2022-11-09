<div class="header-container">
    <div class="top-nav group">
        <section>
            <div class="social-top-nav">
                <a class="fa fa-facebook"></a>
                <a class="fa fa-twitter"></a>
                <a class="fa fa-google"></a>
                <a class="fa fa-youtube"></a>
            </div> <!-- End Social Topnav -->
            <ul class="top-nav-quicklink flexContain">
                <li><a href="home"><i class="fa fa-home"></i> Trang chủ</a></li>
                <li><a href="home"><i class="fa fa-info-circle" aria-hidden="true"></i> Hỗ trợ</a></li>
                <li><a href=""><i class="fa fa-handshake-o"></i> Đối tác</a></li>
                <li><a href=""><i class="fa fa-info-circle"></i> Giới thiệu</a></li>
                <li><a href=""><i class="fa fa-phone"></i> Liên hệ</a></li>
            </ul> <!-- End Quick link -->
        </section><!-- End Section -->
    </div><!-- End Top Nav  -->
    <div class="header group">
        <div class="smallmenu" id="openmenu" onclick="smallmenu(1)">≡</div>
        <div style="display: none;" class="smallmenu" id="closemenu" onclick="smallmenu(0)">×</div>
        <div class="logo">
            <a href="home">
                <img src="assets/img/Logo_Phone_Store.png" alt="Trang chủ Smartphone Store"
                     title="Trang chủ Smartphone Store">
            </a>
        </div> <!-- End Logo -->

        <div class="content">
            <div class="search-header">
                <form class="input-search" method="get" action="home">
                    <div class="autocomplete">
                        <input id="search-box" name="search" autocomplete="off" type="text"
                               placeholder="Nhập từ khóa tìm kiếm...">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                            Tìm kiếm
                        </button>
                    </div>
                </form> <!-- End Form search -->
                <div class="tags">
                    <strong>Từ khóa: </strong>
                </div>
            </div> <!-- End Search header -->
            <div class="tools-member">
                <div class="member">
                    <a onclick="checkTaiKhoan()" id="btnTaiKhoan">
                        <i class="fa fa-user"></i>
                        Tài khoản
                    </a>
                    <div class="menuMember hide">
                        <a href="{{url("user-update-info?otp=".csrf_token())}}">Cập nhật thông tin</a>
                        <a href="user">Lịch sử mua hàng</a>
                        <a href="{{url("user-change-password?token=".csrf_token())}}">Đổi mật khẩu</a>
                        <a onclick="checkDangXuat();">Đăng xuất</a>
                    </div>
                </div> <!-- End Member -->

                <div class="cart">
                    <a href="cart">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Giỏ hàng</span>
                        <span class="cart-number"></span>
                    </a>
                </div> <!-- End Cart -->

                <!-- <div class="check-order">
                    <a>
                        <i class="fa fa-truck"></i>
                        <span>Đơn hàng</span>
                    </a>
                </div>  -->
            </div><!-- End Tools Member -->
        </div> <!-- End Content -->
    </div>
</div>
<div class="containTaikhoan">
    <span class="close" onclick="showTaiKhoan(false);">&times;</span>
    <div class=" taikhoan">
        <ul class="tab-group">
            <li class="tab active"><a href="#login">Đăng nhập</a></li>
            <li class="tab"><a href="#signup">Đăng kí</a></li>
        </ul> <!-- /tab group -->
        <div class="tab-content">
            <div id="login">
                <form action="" method="post" name="formDangNhap" onsubmit="return checkDangNhap();">
                    <div class="field-wrap">
                        <label>
                            Tên đăng nhập<span class="req">*</span>
                        </label>
                        <input name="username" type="text" id="username" required autocomplete="off"/>
                    </div> <!-- /user name -->
                    <div class="field-wrap">
                        <label>
                            Mật khẩu<span class="req">*</span>
                        </label>
                        <input name="pass" type="password" id="pass" required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                        {!! NoCaptcha::renderJs("vi",false,'') !!}
                        {!! NoCaptcha::display() !!}
                    </div>
                    <div class="field-wrap">
                    <button type="submit" class="button button-block" style="font-size: 14px">Đăng nhập</button>
                    </div>
                    <p class="forgot" style="display: flex;justify-content: left;"><a href="forgot-password">Quên mật khẩu?</a></p>
                </form>
                <div style="margin-top:10px;height: 2px;background: var(--primary-color-light);display: flex;justify-content: center;align-items: center"><p style="display: flex;justify-content: center;padding: 10px;background: #dbdfe3;color: var(--primary-color-light)">Hoặc</p></div>
                <div style="display: flex;justify-content: center;height: 40px;margin: 10px">
                    <a href="google/redirect"style="height: 100%;border: solid 2px var(--primary-color-light);align-items: center; display: flex;justify-content: center;width: 100px;background: var(--primary-color);color: white;border-radius: 4px;overflow: hidden;margin-right: 8px;"><i class="fa fa-google"></i>&nbsp;Google</a>
                    <a href="facebook/redirect"style="height: 100%;border: solid 2px var(--primary-color-light);align-items: center; display: flex;justify-content: center;width: 100px;background: var(--primary-color);color: white;border-radius: 4px;overflow: hidden"><i class="fa fa-facebook"></i> &nbsp;Facebook</a>
                </div>

            </div> <!-- /log in -->
            <div id="signup">
                <!-- <form onsubmit="return signUp(this);"> -->
                <form action="" method="post" name="formDangKy" onsubmit="return false;">
                    <div class="field-wrap">
                        <label>
                            Email<span class="req">*</span>
                        </label>
                        <input name="email" id="email" type="email" required autocomplete="off"/>
                    </div>
                    <div class="field-wrap">
                        <label>
                            Tên đăng nhập<span class="req">*</span>
                        </label>
                        <input name="newUser" id="newUser" type="text" required autocomplete="off"/>
                    </div> <!-- /user name -->
                    <div class="field-wrap">
                        <label>
                            Mật khẩu<span class="req">*</span>
                        </label>
                        <input name="newPass" id="newPass" type="password" required autocomplete="off"/>
                    </div>
                    <button type="submit" onclick="checkDangKy();" class="button button-block"/>Đăng ký</button>
                    <div class="field-wrap"></div>
                </form>
                <div style="margin-top:10px;height: 2px;background: var(--primary-color-light);display: flex;justify-content: center;align-items: center"><p style="display: flex;justify-content: center;padding: 10px;background: #dbdfe3;color: var(--primary-color-light)">Hoặc</p></div>
                <div style="display: flex;justify-content: center;height: 40px;margin: 10px">
                    <a href="google/redirect"style="height: 100%;border: solid 2px var(--primary-color-light);align-items: center; display: flex;justify-content: center;width: 100px;background: var(--primary-color);color: white;border-radius: 4px;overflow: hidden;margin-right: 8px;"><i class="fa fa-google"></i>&nbsp;Google</a>
                    <a href="facebook/redirect"style="height: 100%;border: solid 2px var(--primary-color-light);align-items: center; display: flex;justify-content: center;width: 100px;background: var(--primary-color);color: white;border-radius: 4px;overflow: hidden"><i class="fa fa-facebook"></i> &nbsp;Facebook</a>
                </div>
            </div> <!-- /sign up -->
        </div><!-- tab-content -->
    </div> <!-- /taikhoan -->
</div>
