<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
    <div id="toast" class="fixed top-4 right-4 z-50 hidden p-4 rounded-lg shadow-lg transition-all duration-300">
        <div id="toast-message" class="text-white"></div>
    </div>
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Phần ảnh sản phẩm -->
            <div class="md:w-1/2">
                <div class="bg-white rounded-lg shadow-lg p-4">
                    <!-- Ảnh chính -->
                    <img id="mainImage" class="w-full h-96 object-contain rounded-lg"
                        src="{{$anhdienthoai[0]->URLAnh }}" alt="Sản phẩm">

                    <!-- List ảnh nhỏ -->
                    <div class="mt-4 flex gap-2 overflow-x-auto pb-2">
                        @foreach ($anhdienthoai as $item)
                            <img class="w-20 h-20 object-cover rounded cursor-pointer hover:opacity-75"
                                src="{{ $item->URLAnh }}" onclick="changeImage('{{ $item->URLAnh }}')">
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Phần thông tin sản phẩm -->
            <div class="md:w-1/2">
                <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col justify-between">
                    <div>
                        <h1 class="text-3xl font-bold mb-4">{{ $dienthoai->TenDT }}</h1>

                        <div class="mb-4">
                            <span
                                class="text-gray-500 line-through text-lg">{{ number_format($dienthoai->Gia, 0, ',', '.') }}₫</span>
                            <span
                                class="text-red-500 text-2xl font-bold ml-2">{{ number_format($dienthoai->Gia * 0.9, 0, ',', '.') }}₫</span>
                            <span class="bg-red-100 text-red-800 text-sm px-2 py-1 rounded ml-2">-10%</span>
                        </div>

                        <div class="mb-6">
                            <h2 class="text-xl font-semibold mb-2">Cấu hình</h2>
                            <p class="text-gray-700">{{ $dienthoai->CauHinh ?? 'Chưa có thông tin cấu hình' }}</p>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <form id="add-to-cart-form" action="{{ route('themvaogiohang') }}" method="POST">
                            @csrf
                            <input type="hidden" name="dienthoai" value="{{  $dienthoai->MaDT ?? '' }}">
                            <input type="hidden" name="khach" value="{{ $khach->MaKH ?? '' }}">
                            <button type="submit" id="add-to-cart-btn" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg w-full">
                                Thêm vào giỏ hàng
                            </button>
                        </form>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const form = document.getElementById('add-to-cart-form');
                                if (form) {
                                    form.addEventListener('submit', function(e) {
                                        e.preventDefault(); // Ngăn form submit mặc định
                    
                                        const toast = document.getElementById('toast');
                                        const toastMessage = document.getElementById('toast-message');
                    
                                        // Kiểm tra xem toast và toastMessage có tồn tại không
                                        if (!toast || !toastMessage) {
                                            console.error('Toast or toast-message element not found!');
                                            return;
                                        }
                    
                                        // Gửi yêu cầu POST bằng Fetch API
                                        fetch(form.action, {
                                            method: 'POST',
                                            body: new FormData(form),
                                        })
                                        .then(response => response.json())
                                        .then(data => {
                                            // Hiển thị thông báo thành công
                                            toast.classList.remove('hidden', 'bg-red-500');
                                            toast.classList.add('bg-green-500');
                                            toastMessage.textContent = data.message || 'Sản phẩm đã được thêm vào giỏ hàng thành công!';
                                            setTimeout(() => toast.classList.add('hidden'), 3000); // Ẩn sau 3 giây
                                        })
                                        .catch(error => {
                                            // Hiển thị thông báo lỗi
                                            toast.classList.remove('hidden', 'bg-green-500');
                                            toast.classList.add('bg-red-500');
                                            toastMessage.textContent = error.message || 'Có lỗi xảy ra khi thêm vào giỏ hàng!';
                                            setTimeout(() => toast.classList.add('hidden'), 3000); // Ẩn sau 3 giây
                                        });
                                    });
                                } else {
                                    console.error('Form with ID "add-to-cart-form" not found!');
                                }
                            });
                        </script>
                        <form action="{{ route('muangay') }}" method="post" class="flex-1">
                            @csrf
                            <input type="hidden" name="dienthoai" value="{{ $dienthoai->MaDT ?? '' }}">
                            <input type="hidden" name="khach" value="{{ $khach->MaKH ?? '' }}">
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-3 px-6 rounded-lg w-full">
                                Mua ngay
                            </button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        function changeImage(src) {
            document.getElementById('mainImage').src = src;
        }
    </script>
</body>

</html>