<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Phone Store | Giỏ hàng</title>
    <link rel="shortcut icon" href="{{asset("")}}assets/img/icon_phone_store.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

    <!-- Jquery -->
    <script src="{{asset("")}}assets/lib/Jquery/Jquery.min.js"></script>
    <!-- owl carousel libraries -->
    <link rel="stylesheet" href="{{asset("")}}assets/lib/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset("")}}assets/lib/owlcarousel/owl.theme.default.min.css">
    <script src="{{asset("")}}assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <!-- Load font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <!-- our files -->
    <!-- css -->
    <link rel="stylesheet" href="{{asset("")}}assets/css/style.css">
    <link rel="stylesheet" href="{{asset("")}}assets/css/topnav.css">
    <link rel="stylesheet" href="{{asset("")}}assets/css/header.css">
    <link rel="stylesheet" href="{{asset("")}}assets/css/taikhoan.css">
    <link rel="stylesheet" href="{{asset("")}}assets/css/gioHang.css">
    <link rel="stylesheet" href="{{asset("")}}assets/css/footer.css">
    <link rel="stylesheet" href="{{asset("")}}assets/css/icon.css">
    <!-- js -->
    <script src="{{asset("")}}assets/js/dungchung.js"></script>
    <script src="{{asset("")}}assets/js/giohang.js"></script>


</head>

<body>
<x-header/>
<section style="min-height: 85vh">
    <table class="listSanPham"></table>
    <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" >Nhập thông tin thanh toán</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" onsubmit="return xacNhanThanhToan()">
                    <div class="modal-body" id="thongtinthanhtoan"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-primary" id="btnXacNhan">Xác nhận</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section> <!-- End Section -->
<x-footer/>
</body>

</html>
