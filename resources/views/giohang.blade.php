<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com">
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v17.0"
        nonce="xyz123">
        </script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    </head>
</head>

<body class="bg-gray-100">
    <header class="bg-yellow-500 p-4 flex items-center justify-between">
        <div class="flex items-center">
            <img alt="Logo" class="mr-2 btn-maloai" height="50"
                src="https://storage.googleapis.com/a1aa/image/1-JtT3asIGzXAC0AZ9zd961SBV4N_eH2KTO4eiUJleY.jpg"
                width="50" data-maloai="" 
                onclick="window.location.href='{{ route('thanhcong') }}';" />
            <span class="text-black text-xl font-bold">
                Bão Táp
            </span>
        </div>
        <div class="flex items-center space-x-4 w-full">
            <input class="p-2 rounded flex-grow" placeholder="Tìm kiếm..." type="text" />
            <button class="text-black hover:bg-white hover:rounded-lg transition duration-300 p-2">
                <i class="fas fa-search"></i>
            </button>
            @if($khach)
                <button class="text-black hover:bg-white hover:rounded-lg transition duration-300 p-2"> <i
                        class="fas fa-user">
                    </i> {{ $khach->TenKH}}
                </button>
            @else
                <button class="text-black hover:bg-white hover:rounded-lg transition duration-300 p-2"
                    onclick="window.location.href='{{ route('signin') }}'">
                    <i class="fas fa-user"></i>
                    Đăng nhập
                </button>
            @endif

            <button class="text-black hover:bg-white hover:rounded-lg transition duration-300 p-2">
                <i class="fas fa-shopping-cart"></i>
                Giỏ hàng
            </button>
            @if ($khach)
                <button class="text-black hover:bg-white hover:rounded-lg transition duration-300 p-2 px-4 
                truncate max-w-[200px] overflow-hidden whitespace-nowrap">
                    <i class="fas fa-map-marker-alt"></i>
                    {{ $khach->DiaChiKH }}
                </button>
            @else
                <button class="text-black hover:bg-white hover:rounded-lg transition duration-300 p-2 px-4 
                truncate max-w-[200px] overflow-hidden whitespace-nowrap">
                    <i class="fas fa-map-marker-alt"></i>
                    Hồ Chí Minh
                </button>
            @endif

        </div>
    </header>

    <nav class="bg-yellow-400 p-2 flex justify-center space-x-4">
        <a class="btn-maloai text-black font-bold hover:bg-white hover:text-gray-800 hover:rounded-lg transition duration-300 p-2 "
            href="#" data-maloai=2>
            Máy Tính Bàn
        </a>
        <a class="btn-maloai text-black font-bold hover:bg-white hover:text-gray-800 hover:rounded-lg transition duration-300 p-2"
            href="#" data-maloai=1>
            Laptop
        </a>
        <a class="btn-maloai text-black font-bold hover:bg-white hover:text-gray-800 hover:rounded-lg transition duration-300 p-2"
            href="#" data-maloai=3>
            Màn Hình Máy Tính
        </a>
        <a class="btn-maloai text-black font-bold hover:bg-white hover:text-gray-800 hover:rounded-lg transition duration-300 p-2"
            href="#" data-maloai="0">
            Sản Phẩm Apple
        </a>
        <a class="btn-maloai text-black font-bold hover:bg-white hover:text-gray-800 hover:rounded-lg transition duration-300 p-2"
            href="#" data-maloai=4>
            Gaming Gear
        </a>
        <a class="btn-maloai text-black font-bold hover:bg-white hover:text-gray-800 hover:rounded-lg transition duration-300 p-2"
            href="#" data-maloai=5>
            Thiết Bị Âm Thanh
        </a>
        <a class="btn-maloai text-black font-bold hover:bg-white hover:text-gray-800 hover:rounded-lg transition duration-300 p-2"
            href="#" data-maloai=6>
            Phụ Kiện Máy Tính
        </a>
        <a class="btn-maloai text-black font-bold hover:bg-white hover:text-gray-800 hover:rounded-lg transition duration-300 p-2"
            href="#" data-maloai=7>
            Linh Kiện Máy Tính
        </a>
        <a class="btn-maloai text-black font-bold hover:bg-white hover:text-gray-800 hover:rounded-lg transition duration-300 p-2"
            href="#" data-maloai=8>
            Thiết Bị Văn Phòng
        </a>
        <a class="btn-maloai text-black font-bold hover:bg-white hover:text-gray-800 hover:rounded-lg transition duration-300 p-2"
            href="#" data-maloai=9>
            Phụ Kiện
        </a>
    </nav>
    {{-- sfasfsf --}}
    <div class="container mx-auto px-4 py-8">
        <div id="toast" class="fixed top-4 right-4 z-50 hidden p-4 rounded-lg shadow-lg transition-all duration-300">
            <div id="toast-message" class="text-white"></div>
        </div>
        <h1 class="text-3xl font-bold mb-6 text-center">Giỏ hàng của bạn</h1>
    
        @if (session('success'))
            <div class="bg-green-100 text-green-800 p-4 rounded-lg mb-4 text-center">
                {{ session('success') }}
            </div>
        @endif
    
        @if ($giohang && count($giohang) > 0)
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="py-3 px-4 text-gray-700 font-semibold">Sản phẩm</th>
                                <th class="py-3 px-4 text-gray-700 font-semibold">Số lượng</th>
                                <th class="py-3 px-4 text-gray-700 font-semibold">Giá</th>
                                <th class="py-3 px-4 text-gray-700 font-semibold">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($giohang as $item)
                                <tr class="border-b">
                                    <td class="py-4 px-4 flex items-center space-x-4">
                                        <img src="{{ $item->URLAnh }}" alt="{{ $item->TenDT }}" class="w-16 h-16 object-cover rounded">
                                        <span class="text-gray-800">{{ $item->TenDT }}</span>
                                    </td>
                                    <td class="py-4 px-4">
                                        <div class="flex items-center justify-center space-x-2">
                                            <!-- Nút trừ -->
                                            <button class="decrease-quantity bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold w-8 h-8 flex items-center justify-center rounded-full transition">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                                </svg>
                                            </button>
                                            <!-- Hiển thị số lượng -->
                                            <span class="quantity text-gray-800 font-medium w-8 text-center">{{ $item->SoLuong }}</span>
                                            <!-- Nút cộng -->
                                            <button class="increase-quantity bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold w-8 h-8 flex items-center justify-center rounded-full transition">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="py-4 px-4 text-gray-800">{{ number_format($item->Gia, 0, ',', '.') }}đ</td>
                                    <td class="py-4 px-4">
                                        <!-- Nút xóa -->
                                        <button class="delete-item bg-red-500 hover:bg-red-600 text-white font-semibold py-1 px-2 rounded flex items-center space-x-1">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                            <span>Xóa</span>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
    
                <!-- Hiển thị Tổng tiền dưới cùng -->
                <div class="mt-6 text-right">
                    <strong>Tổng tiền: {{ number_format($giohang[0]->TongTien, 0, ',', '.') }}đ</strong>
                </div>
    
                <!-- Hai lựa chọn phương thức thanh toán -->
                <div class="mt-6">
                    <p class="font-semibold mb-2">Phương thức thanh toán:</p>
                    <div class="flex flex-col md:flex-row gap-4 mb-4">
                        <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50 flex-1">
                            <input type="radio" name="payment_method" value="1" class="mr-2" checked>
                            <div class="flex items-center">
                                <i class="fa-solid fa-credit-card text-blue-600 text-2xl mr-2"></i>
                                <span>Thanh toán qua VNPAY</span>
                            </div>
                        </label>
                        <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-gray-50 flex-1">
                            <input type="radio" name="payment_method" value="2" class="mr-2">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                </svg>
                                <span>Thanh toán khi nhận hàng</span>
                            </div>
                        </label>
                    </div>
                </div>
                
                <!-- Nút Mua -->
                <div class="mt-4 text-right">
                    <form action="{{ route('mua') }}" method="POST">
                        @csrf
                        <input type="hidden" name="payment_method" id="selected_payment_method" value="1">
                        <input type="hidden" name="MaHD" value="{{ $giohang[0]->MaHD }}">
                        <input type="hidden" name="TongTien" value="{{ $giohang[0]->TongTien}}">
                        <button name="redirect" type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-24 rounded-lg w-full">
                            Mua
                        </button>
                    </form>
                </div>
                {{-- <form id="frmCreateOrder" action="https://sandbox.vnpayment.vn/button/websrc.html" method="POST" target="_top"> 
                    <input type="hidden" name="cmd" value="pay"> <input type="hidden" name="hosted_button_id" value="crHgCRSrcK"> 
                    <input type="hidden" name="hosted_button_token" value="4d48420650e8928f3cb38e58cb5fef0cbe1c131468d467347d01bac544d479d3"> 
                    <img alt="VNPAY - Thanh toan online" class="btnPopup" src="https://sandbox.vnpayment.vn/button/Images/paynow-1.png">
                 </form>
                 <script src="https://merchant.vnpay.vn/Scripts/jquery-3.5.1.min.js">
                </script>
                <link href="https://merchant.vnpay.vn/Scripts/lib/vnpayframe.css" rel="stylesheet"/> 
                <script src="https://merchant.vnpay.vn/Scripts/lib/vnpayframe.js"></script>
                <script src="https://merchant.vnpay.vn/Scripts/lib/openbutton.js"></script> --}}
                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        const paymentInputs = document.querySelectorAll('input[name="payment_method"]');
                        const selectedPaymentInput = document.getElementById("selected_payment_method");
                        paymentInputs.forEach(input => {
                            input.addEventListener("change", function () {
                                selectedPaymentInput.value = this.value;
                            });
                        });
                    });
                </script>
                </div>
            </div>
        @else
            <p class="text-gray-600 text-center">Giỏ hàng của bạn đang trống.</p>
        @endif
    </div>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all radio buttons
        const radioButtons = document.querySelectorAll('input[name="payment_method"]');
        const hiddenInput = document.getElementById('selected_payment_method');
        
        // Set default selection to first option
        if(radioButtons.length > 0) {
            radioButtons[0].checked = true;
            hiddenInput.value = radioButtons[0].value;
        }
        
        // Add event listeners to update hidden input when selection changes
        radioButtons.forEach(function(radio) {
            radio.addEventListener('change', function() {
                hiddenInput.value = this.value;
            });
        });
    });
    </script>
    <footer class="bg-yellow-500 text-black p-6 mt-10">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-4 gap-6 text-center md:text-left">
            {{-- Cột 1 --}}
            <div>
                <img alt="" src="http://gamethungviet.com/uploads/logo/gamethungviet.png"
                    style="height:65px; width:245px">
                <div class="row-custom">
                    <p><span><strong>Trụ Sở Tp.Hcm:</strong></span></p>

                    <p><span>Địa chỉ:&nbsp;481 Trần Xuân Soạn, Phường Tân Kiểng, Quận 7</span></p>

                    <p><span>Hotline: 0966.880.881</span></p>
                </div>
                <img alt="" src="http://gamethungviet.com/uploads/logo/logoSaleNoti.png" style="width: 200px">
            </div>

            {{-- Cột 2 --}}
            <div>
                <h3 class="font-bold text-lg mb-2">Chính Sách</h3>
                <ul class="space-y-2">

                    <!--<li><a href="http://gamethungviet.com/">Trang chủ</a></li>-->
                    <li><a href="http://gamethungviet.com/chinh-sach-dioi-tra">Chính sách đổi trả</a></li>
                    <li><a href="http://gamethungviet.com/chinh-sach-van-chuyen">Chính sách vận chuyển</a></li>
                    <li><a href="http://gamethungviet.com/chinh-sach-bao-hanh">Chính sách bảo hành</a></li>
                    <li><a href="http://gamethungviet.com/chinh-sach-thanh-toan">Chính sách thanh toán</a></li>
                    <li><a href="http://gamethungviet.com/chinh-sach-bao-mat">Chính sách bảo mật</a></li>
                    <!--<li><a href="http://gamethungviet.com/help-center">Trợ giúp</a></li>-->

                </ul>
            </div>

            {{-- Cột 3 --}}
            <div>
                <h3 class="font-bold text-lg mb-2">Nhận Thông Tin Khuyến Mãi</h3>
                <li><a href="https://www.facebook.com/gamethungviet">
                        <i class="bi bi-facebook"></i>
                    </a></li>
                <li><a href="http://gamethungviet.com/rss-feeds">
                        <i class="bi bi-wifi"></i>
                    </a></li>
                <br>
                <h3 class="font-bold text-lg mb-2">Qua thư điện tử</h3>
                <form id="form_newsletter_footer" class="form-group">
                    <div class="input-group">
                        <input type="email" name="email" class="form-control" maxlength="199"
                            placeholder="Nhập Email của bạn" required="">
                        <button type="submit" name="submit" value="form" class="bg-black text-white">
                            Đăng ký
                        </button>
                    </div>
                    <div id="form_newsletter_response"></div>
                </form>
            </div>
            {{-- cột 4 --}}
            <div>
                <div class="fb-page" data-href="https://www.facebook.com/gamethungviet?ref=embed_page"
                    data-tabs="timeline" data-width="340" data-height="250" data-small-header="false"
                    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/gamethungviet?ref=embed_page"
                        class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/gamethungviet?ref=embed_page">Game thùng Việt</a>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="text-center mt-6 border-t border-black pt-4">
            <p class="text-sm">&copy; 2025 Bão Táp. All rights reserved.</p>
        </div>
    </footer>
    <script>
        // Hàm thay đổi ảnh chính
        function changeImage(src) {
            document.getElementById('mainImage').src = src;
        }
    </script>
    
</body>

</html>