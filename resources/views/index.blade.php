<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Home Page
    </title>

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
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-yellow-500 p-4 flex items-center justify-between">
        <div class="flex items-center">
            <img alt="Logo" class="mr-2 btn-maloai" height="50"
                src="https://storage.googleapis.com/a1aa/image/1-JtT3asIGzXAC0AZ9zd961SBV4N_eH2KTO4eiUJleY.jpg"
                width="50" data-maloai="" />
            <span class="text-black text-xl font-bold">
                Bão Táp
            </span>
        </div>
        <div class="flex items-center space-x-4 w-full">
            <input class="p-2 rounded flex-grow" placeholder="Tìm kiếm..." type="text" />
            <button class="text-black hover:bg-white hover:rounded-lg transition duration-300 p-2">
                <i class="fas fa-search"></i>
            </button>
            <button class="text-black hover:bg-white hover:rounded-lg transition duration-300 p-2"
                onclick="window.location.href='{{ route('signin') }}'">
                <i class="fas fa-user"></i>
                Đăng nhập
            </button>
            <button class="text-black hover:bg-white hover:rounded-lg transition duration-300 p-2">
                <i class="fas fa-shopping-cart"></i>
                Giỏ hàng
            </button>
            <button class="text-black hover:bg-white hover:rounded-lg transition duration-300 p-2 px-4 
        truncate max-w-[200px] overflow-hidden whitespace-nowrap">
                <i class="fas fa-map-marker-alt"></i>
                Hồ Chí Minh
            </button>
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
 {{-- banner --}}
    <!-- Banner -->
<div class="container mx-auto p-4">
    <div class="banner-container relative">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($banners as $item)
                <div class="swiper-slide">
                    <img src="{{ $item->URLAnhBanner }}">
                </div>
                @endforeach
                
                
            </div>
        </div>
        <!-- Navigation buttons -->
        <div class="swiper-button-prev absolute left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-70 rounded-full p-3 shadow-lg z-10 cursor-pointer">
            <i class="fas fa-chevron-left text-yellow-500"></i>
        </div>
        <div class="swiper-button-next absolute right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-70 rounded-full p-3 shadow-lg z-10 cursor-pointer">
            <i class="fas fa-chevron-right text-yellow-500"></i>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                // when window width is >= 768px
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20
                }
            },
            on: {
                init: function() {
                    // Ẩn các class mặc định của nút navigation của Swiper
                    document.querySelector('.swiper-button-next').classList.add('swiper-button-hidden');
                    document.querySelector('.swiper-button-prev').classList.add('swiper-button-hidden');
                }
            }
        });
    });
</script>

<style>
    .swiper-button-hidden:after {
        display: none !important;
    }
</style>
    <!-- Products -->
    <div class="container mx-auto p-4">
        <div id="load_dienthoai" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-4">
        </div>
        <div id="load_dienthoai_message" class="mb-3 " style="width: 100%">
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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function () {
            var limit = 5;
            var start = 0;
            var action = 'inactive';
            var maloai = null;

            function loadData(limit, start, maloai) {
                let url = maloai !== null ? `/LoadDienThoaiVaAnhTheoMaLoai/${maloai}` : '/LoadDienThoaiVaAnh';
                console.log("Đang gọi API:", url);
                $.ajax({
                    url: url,
                    method: "POST",
                    type: 'POST',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        limit: limit,
                        start: start
                    },
                    cache: false,
                    success: function (data) {
                        if (data.html && typeof data.html === "string" && data.html.trim() !== "") {

                            $('#load_dienthoai').append(data.html);

                            $('#load_dienthoai_message').html(`
                                <div class="flex justify-center items-center mt-4">
                                    <div class="animate-spin rounded-full h-8 w-8 border-t-4 border-blue-500 border-solid"></div>
                                </div>
`                           );

                            action = "inactive";

                        } else {
                            setTimeout(() => {
                                $('#load_dienthoai_message').html("");
                            }, 100);

                            action = 'active';
                        }
                    },
                    // error: function(xhr,status,error){
                    //     console.log("Hết sản phẩm!");
                    //             $('#load_dienthoai_message').html(
                    //                 "<div class='w-full bg-white rounded-lg p-2 mt-4 text-center font-bold'>Hết sản phẩm</div>"
                    //             );
                    //             action = 'active'; 
                    // }
                });
            }
            if (action == 'inactive') {
                action = 'active';
                loadData(limit, start, maloai);
            }
            $(window).scroll(function () {
                let scrollTop = $(window).scrollTop();
                let windowHeight = $(window).height();
                let docHeight = $(document).height();
                if (scrollTop + windowHeight >= docHeight - 50 && action == 'inactive') {
                    action = 'active';
                    start += limit;
                    setTimeout(function () {
                        loadData(limit, start, maloai);
                    }, 500);
                }
            });
            $(".btn-maloai").click(function () {
                maloai = null;
                maloai = $(this).attr("data-maloai");
                maloai = (maloai === undefined || maloai === "" || maloai === null) ? null : parseInt(maloai);
                start = 0;
                action = 'active';
                console.log(typeof loadData);
                console.log("giá trị maloai", maloai, typeof maloai);
                $("#load_dienthoai").html("");
                loadData(limit, start, maloai);
            });
        });
    </script>
</body>

</html>