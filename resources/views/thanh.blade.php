<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thanh toán thành công</title>
    <!-- Tích hợp Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg text-center max-w-md w-full">
        <!-- Icon tích xanh -->
        <div class="flex justify-center mb-4">
            <svg class="w-20 h-20 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
        </div>
        <!-- Thông báo -->
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Thanh toán thành công!</h1>
        <p class="text-gray-600 mb-6">Cảm ơn bạn đã sử dụng dịch vụ của chúng tôi. Đơn hàng của bạn đã được xử lý.</p>
        <!-- Nút quay lại trang chủ -->
        <a href="{{ route('index') }}" class="inline-block bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-300">
            Quay lại trang chủ
        </a>
    </div>
</body>
</html>