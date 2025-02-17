<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Danh sách sản phẩm</h2>
            <a href="{{ route('signin') }}" class="btn btn-primary">Đăng nhập</a>
        </div>

        <div class="row mt-3">
            @foreach ($dienthoais as $item)
            <div class="col">
                <article class="product-card">
                    <div class="product-card__img-wrap">
                        <a href="./product-detail.html">
                            <img
                                src="{{ $item->URLAnh }}"
                                alt=""
                                class="product-card__thumb"
                            />
                        </a>
                        <button class="like-btn product-card__like-btn">
                            <img src="./assets/icons/heart.svg" alt="" class="like-btn__icon icon" />
                            <img src="./assets/icons/heart-red.svg" alt="" class="like-btn__icon--liked" />
                        </button>
                    </div>

                    <h3 class="product-card__title">
                        <a href="./product-detail.html">{{ $item->TenDT }}</a>
                    </h3>
                    <p class="product-card__brand">{{ $item->TenDT }}</p>
                    <div class="product-card__row">
                        <span class="product-card__price">{{ number_format($item->Gia, 0, ',', '.') }} VND</span>
                        <img src="./assets/icons/star.svg" alt="" class="product-card__star" />
                        <span class="product-card__score">4.3</span>
                    </div>
                </article>
            </div>
            
            @endforeach

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
