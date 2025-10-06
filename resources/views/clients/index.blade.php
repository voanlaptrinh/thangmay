<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ get_config()->meta_title ?? 'Công ty TNHH Tự Động Hoá NTD' }}</title>
    <meta name="description"
        content="{{ get_config()->meta_description ?? 'Công ty TNHH Tự Động Hoá NTD chuyên tư vấn, lắp đặt và bảo trì thang máy dân dụng & công nghiệp. An toàn, uy tín, chuyên nghiệp toàn quốc.' }}">
    <meta name="keywords"
        content="{{ get_config()->meta_keywords ?? 'thang máy, lắp đặt thang máy, bảo trì thang máy, thang máy dân dụng, thang máy công nghiệp, công ty thang máy, tư vấn thang máy, thang máy NTD' }}">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://thanhmayntd.com" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/icons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/icons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="144x144" href="{{ asset('/icons/android-chrome-144x144.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/icons/android-chrome-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/icons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/icons/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/icons/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/icons/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/icons/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/icons/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/icons/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/icons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/icons/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-startup-image" href="{{ asset('/icons/apple-touch-icon-180x180.png') }}" />
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="NTD">
    <meta property="og:url" content="https://thanhmayntd.com">
    <meta property="og:title" content="{{ get_config()->meta_title ?? 'Công ty TNHH Tự Động Hoá NTD' }}">
    <meta property="og:description"
        content="{{ get_config()->meta_description ?? 'Công ty TNHH Tự Động Hoá NTD chuyên tư vấn, lắp đặt và bảo trì thang máy dân dụng & công nghiệp. An toàn, uy tín, chuyên nghiệp toàn quốc.' }}">
    <meta property="og:image" content="{{ asset('/icons/512x512.png') }}">
    <meta property="og:locale" content="vi">
    <meta itemprop="image" content="{{ asset('/icons/512x512.png') }}">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts: Inter (Content) & Oswald (Headings) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Oswald:wght=500;700&display=swap"
        rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="{{ asset('/admin/css/toastr.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    {{-- <link rel="stylesheet" type="text/css" href="/source/css/bootstrap.css?v=2.6">
    <link rel="stylesheet" type="text/css" href="/source/css/style.css?v=12.0"> --}}
    <link rel="stylesheet" href="{{ asset('clients/css/style.css') }}">

    <script>
        // Cấu hình Tailwind cho màu sắc và font chữ tùy chỉnh
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'ntd-blue': '#3470ad', // Xanh đậm, Primary
                        'ntd-light': '#4b85c4', // Xanh sáng, làm nổi bật (Accent)
                        'ntd-grey': '#f3f4f6', // Nền xám nhạt
                        'ntd-dark': '#0f172a', // Màu chữ/footer tối
                    },
                    // fontFamily: {
                    //     sans: ['Inter', 'sans-serif'],
                    //     // heading: ['Oswald', 'sans-serif'],
                    // }
                }
            }
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }

        .body {
            font-family: 'Times New Roman', Times, serif;
        }

        /* Thiết lập hình nền và lớp phủ cho Hero Section */
        .hero-section {
            background-image: url('https://placehold.co/1920x800/1f2937/ffffff?text=ELEVATOR+SOLUTION');
            background-size: cover;
            background-position: center;
            min-height: 80vh;
        }

        .hero-overlay {
            /* Lớp phủ tối 70% */
            background-color: rgba(15, 23, 42, 0.7);
        }

        /* Hiệu ứng pulse cho Hotline */
        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }
        }

        .animate-pulse {
            animation: pulse 1.5s infinite;
        }

        /* CSS cho Logo NTD */
        .logo-ntd {
            /* Sử dụng placeholder với màu sắc tương tự hình ảnh gốc */
            background-color: #000000;
            color: #00bfff;
            /* Màu chữ NTD xanh dương */
            font-size: 3rem;
            font-weight: 900;
            line-height: 1;
        }

        .logo-ntd span {
            color: #ff8c00;
            /* Màu cam cho vòm cung giả lập */
            font-size: 1.5rem;
            display: block;
            margin-top: -10px;
        }

        /* Active nav link - hình bình hành góc nhọn */
        .nav-link {
            position: relative;
        }

        .nav-link.active {
            background-color: #4b85c4;
            transform: skewX(-15deg);
            padding: 0.5rem 1rem;
            border-radius: 0;
        }

        .nav-link.active > * {
            transform: skewX(15deg);
            display: inline-block;
        }

        .mobile-nav-link.active {
            background-color: #4b85c4;
            color: white;
            border-radius: 0;
        }

        /* Responsive fixes for tablet */
        @media (min-width: 768px) and (max-width: 1023px) {
            /* Header adjustments */
            .container {
                padding-left: 1rem !important;
                padding-right: 1rem !important;
                max-width: 100% !important;
            }

            /* Navigation spacing */
            nav.hidden.md\\:flex {
                gap: 0.5rem;
            }

            nav a {
                font-size: 0.75rem !important;
                padding: 0.5rem 0.5rem !important;
                white-space: nowrap;
            }

            /* Hero section */
            .hero-section {
                min-height: 60vh;
            }

            .hero-section h1 {
                font-size: 2rem !important;
                line-height: 1.2 !important;
                padding: 0 1rem;
            }

            .hero-section p {
                font-size: 1rem !important;
                padding: 0 1rem;
            }

            /* Section padding */
            section {
                padding-top: 3rem !important;
                padding-bottom: 3rem !important;
            }

            /* Section titles */
            h2 {
                font-size: 1.75rem !important;
            }

            h3 {
                font-size: 1.25rem !important;
            }

            /* Grid layouts - force 2 columns */
            .grid.md\\:grid-cols-3,
            .grid.lg\\:grid-cols-3,
            .grid.lg\\:grid-cols-4 {
                grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
            }

            /* Card padding */
            .p-8 {
                padding: 1.5rem !important;
            }

            .p-6 {
                padding: 1rem !important;
            }

            /* Product slider */
            #slider-wrapper > div {
                width: 50% !important;
            }

            /* Footer adjustments */
            footer {
                padding-top: 2rem !important;
                padding-bottom: 2rem !important;
            }

            footer .grid {
                gap: 2rem !important;
            }

            /* Buttons */
            .px-8 {
                padding-left: 1.5rem !important;
                padding-right: 1.5rem !important;
            }

            .py-4 {
                padding-top: 0.75rem !important;
                padding-bottom: 0.75rem !important;
            }

            /* Text sizes */
            .text-5xl {
                font-size: 2.5rem !important;
            }

            .text-4xl {
                font-size: 2rem !important;
            }

            .text-3xl {
                font-size: 1.75rem !important;
            }

            .text-2xl {
                font-size: 1.5rem !important;
            }

            .text-xl {
                font-size: 1.125rem !important;
            }
        }
    </style>
</head>

<body class="font-sans text-ntd-dark bg-white">

    <!-- HEADER START -->
    <header class="z-50 shadow-lg">

        <!-- 1. TOP HEADER (Logo + Hotline) - sẽ trôi khi cuộn -->
        <div class="bg-white border-b border-gray-200 py-4 hidden md:block">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">

                <!-- Logo & Company -->
                <div class="flex items-center space-x-2 md:space-x-4">
                    <img src="{{asset('/icons/logo.svg')}}"
                        alt="Logo Công ty TNHH tự động hoá NTD" class="h-10 md:h-12 w-auto object-contain rounded-lg">
                    <div>
                        <h1 class="text-lg md:text-xl lg:text-2xl font-heading font-extrabold text-ntd-blue uppercase leading-tight">
                            CÔNG TY TNHH TỰ ĐỘNG HOÁ NTD
                        </h1>
                        <p class="text-xs md:text-sm text-gray-500 italic">
                            Automation - Industrial - Equipment
                        </p>
                    </div>
                </div>

                <!-- Hotline -->
                <div class="flex items-center space-x-1 md:space-x-2 text-xs md:text-sm">
                    <i class="fas fa-phone-alt text-red-600 text-base md:text-lg"></i>
                    <p class="text-gray-600 font-medium">Hotline:</p>
                    <p class="text-red-600 font-bold text-base md:text-lg">{{ get_config()->hotline ?? '1900 69 61' }}</p>
                </div>
            </div>
        </div>
        </div>
    </header>

    <!-- 2. BOTTOM HEADER (Main Navbar) - sẽ dính trên cùng -->
    <div id="main-nav" class="sticky top-0 z-50 h-16 flex items-center shadow-md transition-all duration-300" style="background: #08498B;">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between h-full">

            <!-- Logo bên trái (mobile) -->
            <div class="md:hidden flex items-center">
                <img src="{{asset('/icons/logo.svg')}}" alt="Logo NTD" class="h-10 w-auto object-contain">
            </div>

            <!-- Logo trong nav - chiếm vị trí cố định (chỉ PC) -->
            <div id="nav-logo" class="hidden md:flex items-center opacity-0 transition-opacity duration-300 w-32 flex-shrink-0">
                <img src="{{asset('/icons/logo.svg')}}" alt="Logo NTD" class="h-10 w-auto object-contain">
            </div>

            <!-- Navigation -->
            <nav class="hidden md:flex flex-1 space-x-2 lg:space-x-6 text-sm lg:text-base font-semibold justify-center">
                <a href="#" data-section="home"
                    class="nav-link active flex items-center gap-1 lg:gap-2 text-white hover:text-white transition duration-300 p-2">
                    <i class="fas fa-home text-sm lg:text-base"></i>
                    <span class="hidden lg:inline">TRANG CHỦ</span>

                </a>
                <a href="#about" data-section="about"
                    class="nav-link text-white hover:text-white transition duration-300 p-2 rounded-lg"><span>GIỚI THIỆU</span></a>
                <a href="#products" data-section="products"
                    class="nav-link text-white hover:text-white transition duration-300 p-2 rounded-lg"><span>THANG MÁY</span></a>
                <a href="#components" data-section="components"
                    class="nav-link text-white hover:text-white transition duration-300 p-2 rounded-lg"><span>LINH KIỆN</span></a>
                <a href="#services" data-section="services"
                    class="nav-link text-white hover:text-white transition duration-300 p-2 rounded-lg"><span>DỊCH VỤ</span></a>
                <a href="#projects" data-section="projects"
                    class="nav-link text-white hover:text-white transition duration-300 p-2 rounded-lg"><span>DỰ ÁN</span></a>
                <a href="#contact" data-section="contact"
                    class="nav-link text-white hover:text-white transition duration-300 p-2 rounded-lg"><span>LIÊN HỆ</span></a>
            </nav>

            <!-- Mobile Menu Button (bên phải) -->
            <button id="mobile-menu-btn"
                class="md:hidden text-white text-2xl p-2 focus:outline-none focus:ring-2 focus:ring-white rounded-lg"
                aria-label="Menu" aria-expanded="false">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu-overlay"></div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden bg-white shadow-2xl pb-4">
        <!-- Header with Logo and Close Button -->
        <div class="flex items-center justify-end px-4 py-4 border-b border-gray-200">
           
            <button id="mobile-menu-close"
                class="w-10 h-10 flex items-center justify-center text-ntd-dark hover:text-ntd-blue hover:bg-ntd-grey rounded-full transition duration-200">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>

        <nav class="flex flex-col space-y-2 px-4 pt-4 text-center font-medium">
            <a href="#" data-section="home"
                class="mobile-nav-link active flex items-center justify-center gap-2 py-3 text-ntd-dark hover:bg-ntd-grey rounded-lg transition duration-200">
                <i class="fas fa-home"></i>
                <span>Trang chủ</span>
            </a>
            <a href="#about" data-section="about"
                class="mobile-nav-link py-3 text-ntd-dark hover:bg-ntd-grey rounded-lg transition duration-200">Giới
                Thiệu</a>
            <a href="#products" data-section="products"
                class="mobile-nav-link py-3 text-ntd-dark hover:bg-ntd-grey rounded-lg transition duration-200">Thang
                Máy</a>
            <a href="#components" data-section="components"
                class="mobile-nav-link py-3 text-ntd-dark hover:bg-ntd-grey rounded-lg transition duration-200">Linh
                Kiện</a>
            <a href="#services" data-section="services"
                class="mobile-nav-link py-3 text-ntd-dark hover:bg-ntd-grey rounded-lg transition duration-200">Dịch
                Vụ</a>
            <a href="#projects" data-section="projects"
                class="mobile-nav-link py-3 text-ntd-dark hover:bg-ntd-grey rounded-lg transition duration-200">Dự
                Án</a>
            <a href="#contact" data-section="contact"
                class="mobile-nav-link py-3 text-ntd-dark hover:bg-ntd-grey rounded-lg transition duration-200">Liên
                Hệ</a>

            <!-- Mobile Search -->
           
        </nav>
    </div>


    <!-- HEADER END -->

    <!-- HERO SECTION -->
    <section class="hero-section flex items-center justify-center relative text-white">
        <div class="absolute inset-0 hero-overlay"></div>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20 lg:py-24 relative z-10 text-center">
            <h1
                class="font-heading text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-extrabold mb-3 md:mb-4 leading-tight uppercase tracking-wider">
                THANG MÁY NTD: GIẢI PHÁP NÂNG TẦM KHÔNG GIAN SỐNG
            </h1>
            <p class="text-base md:text-lg lg:text-xl xl:text-2xl mb-6 md:mb-8 lg:mb-10 max-w-4xl mx-auto font-light text-gray-200">
                Đối tác tin cậy cung cấp các dòng thang máy, thang cuốn an toàn, bền bỉ và hiện đại nhất cho mọi công
                trình.
            </p>
            <div class="flex flex-col sm:flex-row justify-center space-y-3 sm:space-y-0 sm:space-x-4 lg:space-x-6">
                <a href="#contact"
                    class="px-6 md:px-8 py-3 md:py-4 bg-ntd-light text-white font-bold rounded-xl shadow-xl shadow-ntd-light/50 hover:bg-ntd-blue transition duration-300 transform hover:scale-105 focus:ring-4 focus:ring-white/50 text-sm md:text-base">
                    YÊU CẦU TƯ VẤN NGAY
                </a>
                <a href="#products"
                    class="px-6 md:px-8 py-3 md:py-4 border-2 border-white text-white font-bold rounded-xl hover:bg-white hover:text-ntd-dark transition duration-300 transform hover:scale-105 focus:ring-4 focus:ring-white/50 text-sm md:text-base">
                    TÌM HIỂU VỀ CÔNG NGHỆ
                </a>
            </div>
        </div>
    </section>

    <!-- VÌ SAO CHỌN NTD (About Us) -->
    <section id="about" class="py-16 md:py-20 lg:py-24 xl:py-32 bg-ntd-grey">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-center mb-8 md:mb-10 lg:mb-12 text-ntd-dark uppercase">
                VÌ SAO NÊN CHỌN NTD?
            </h2>
            <p class="text-center text-base md:text-lg max-w-3xl mx-auto mb-10 md:mb-12 lg:mb-16 text-gray-600">
                Với hơn 15 năm kinh nghiệm và đội ngũ kỹ sư hàng đầu, NTD cam kết mang đến giải pháp thang máy toàn
                diện, từ tư vấn, thiết kế, lắp đặt đến bảo trì 24/7.
            </p>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 lg:gap-12">
                <!-- Pillar 1: An Toàn -->
                <div
                    class="text-center p-8 bg-white rounded-2xl shadow-xl transition duration-500 hover:shadow-2xl hover:shadow-ntd-light/50 border-t-4 border-ntd-light transform hover:-translate-y-1">
                    <i class="fas fa-shield-alt text-5xl text-ntd-light mb-4"></i>
                    <h3 class="text-xl font-heading font-bold mb-3 text-ntd-blue uppercase">AN TOÀN TUYỆT ĐỐI</h3>
                    <p class="text-gray-600">Hệ thống giám sát đa tầng, đạt các chứng nhận an toàn quốc tế (EN81, JIS),
                        đảm bảo trải nghiệm an tâm cho mọi người dùng.</p>
                </div>
                <!-- Pillar 2: Công Nghệ -->
                <div
                    class="text-center p-8 bg-white rounded-2xl shadow-xl transition duration-500 hover:shadow-2xl hover:shadow-ntd-light/50 border-t-4 border-ntd-light transform hover:-translate-y-1">
                    <i class="fas fa-bolt text-5xl text-ntd-light mb-4"></i>
                    <h3 class="text-xl font-heading font-bold mb-3 text-ntd-blue uppercase">TIẾT KIỆM NĂNG LƯỢNG</h3>
                    <p class="text-gray-600">Động cơ Inverter không hộp số, giảm 40% điện năng tiêu thụ, vận hành siêu
                        êm và thân thiện với môi trường.</p>
                </div>
                <!-- Pillar 3: Hỗ Trợ -->
                <div
                    class="text-center p-8 bg-white rounded-2xl shadow-xl transition duration-500 hover:shadow-2xl hover:shadow-ntd-light/50 border-t-4 border-ntd-light transform hover:-translate-y-1">
                    <i class="fas fa-headset text-5xl text-ntd-light mb-4"></i>
                    <h3 class="text-xl font-heading font-bold mb-3 text-ntd-blue uppercase">HỖ TRỢ KỸ THUẬT</h3>
                    <p class="text-gray-600">Quy trình bảo trì chuyên nghiệp, đội ngũ kỹ sư túc trực 24/7, cam kết có
                        mặt và xử lý sự cố trong vòng 1 giờ.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SẢN PHẨM: THANG MÁY (Products) -->
    <section id="products" class="py-24 lg:py-32 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl sm:text-4xl font-heading font-bold text-center mb-12 text-ntd-dark uppercase">
                CÁC DÒNG THANG MÁY CHỦ LỰC
            </h2>

            @if ($thangmays->count() > 0)
                <div class="relative">
                    <!-- Navigation Buttons -->
                    <button id="slide-prev"
                        class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 z-10 bg-white rounded-full p-3 shadow-lg hover:bg-ntd-blue hover:text-white transition duration-300 hidden md:block">
                        <i class="fas fa-chevron-left text-xl"></i>
                    </button>
                    <button id="slide-next"
                        class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 z-10 bg-white rounded-full p-3 shadow-lg hover:bg-ntd-blue hover:text-white transition duration-300 hidden md:block">
                        <i class="fas fa-chevron-right text-xl"></i>
                    </button>

                    <!-- Slider Container -->
                    <div class="overflow-hidden bg-transparent" id="slider-container">
                        <div class="flex transition-transform duration-500 ease-out bg-transparent"
                            id="slider-wrapper">
                            @foreach ($thangmays as $thangmay)
                                <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4">
                                    <div
                                        class="group bg-white rounded-[5px] overflow-hidden shadow-[0_10px_40px_rgba(0,0,0,0.25)] hover:shadow-[0_20px_60px_rgba(0,0,0,0.35)] border-2 border-gray-200 hover:border-ntd-blue transition duration-500 transform hover:-translate-y-2">
                                        @if ($thangmay->image)
                                            <img src="{{ asset($thangmay->image) }}" alt="{{ $thangmay->title }}"
                                                class="w-full object-cover group-hover:scale-105 transition duration-500 shadow-2xl border-4 border-white" style=" height: 480px;">
                                        @else
                                            <div
                                                class="w-full bg-gradient-to-br from-ntd-blue to-ntd-light flex items-center justify-center" style=" height: 480px;">
                                                <i class="fas fa-building text-white text-6xl opacity-50"></i>
                                            </div>
                                        @endif
                                        <div class="p-6">
                                            <h3
                                                class="text-2xl font-heading font-bold text-ntd-blue mb-2 uppercase line-clamp-2">
                                                {{ $thangmay->title }}
                                            </h3>
                                            <p class="text-gray-600 mb-4 line-clamp-3">
                                                {{ $thangmay->description ?? 'Liên hệ để biết thêm chi tiết về sản phẩm này.' }}
                                            </p>
                                            <a href="#contact"
                                                class="text-ntd-light font-semibold hover:text-ntd-blue flex items-center group-hover:underline smooth-scroll">
                                                Chi Tiết & Tư Vấn <i
                                                    class="fas fa-chevron-right ml-2 text-sm transition group-hover:translate-x-1"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Dots Navigation -->
                    <div class="flex justify-center mt-8 gap-2" id="slider-dots">
                        <!-- Dots will be generated by JavaScript -->
                    </div>
                </div>
            @else
                <!-- Hiển thị khi chưa có dữ liệu -->
                <div class="text-center py-12">
                    <i class="fas fa-box-open text-gray-300 text-6xl mb-4"></i>
                    <p class="text-gray-500 text-lg">Chưa có sản phẩm nào. Vui lòng liên hệ để biết thêm chi tiết.</p>
                    <a href="#contact"
                        class="inline-block mt-4 px-6 py-3 bg-ntd-blue text-white rounded-lg hover:bg-ntd-light transition duration-300 smooth-scroll">
                        Liên Hệ Ngay
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- SẢN PHẨM: LINH KIỆN (Components Placeholder) -->
    <section id="components" class="py-24 lg:py-32 bg-ntd-grey">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl sm:text-4xl font-heading font-bold text-center mb-4 text-ntd-dark uppercase">
                LINH KIỆN & PHỤ TÙNG CHÍNH HÃNG
            </h2>
            <p class="text-lg max-w-3xl mx-auto mb-10 text-gray-600">
                Chúng tôi cung cấp đầy đủ các loại linh kiện thang máy chất lượng cao, nhập khẩu trực tiếp từ các đối
                tác hàng đầu thế giới, đảm bảo độ bền và an toàn tối đa.
            </p>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Component Item 1 -->
                <div
                    class="p-6 bg-white rounded-xl shadow-lg border-b-2 border-ntd-light hover:shadow-xl hover:shadow-ntd-light/20 transition duration-300 transform hover:scale-[1.02]">
                    <i class="fas fa-microchip text-4xl text-ntd-light mb-3"></i>
                    <h4 class="font-semibold text-ntd-blue uppercase">Bo Mạch Điều Khiển</h4>
                </div>
                <!-- Component Item 2 -->
                <div
                    class="p-6 bg-white rounded-xl shadow-lg border-b-2 border-ntd-light hover:shadow-xl hover:shadow-ntd-light/20 transition duration-300 transform hover:scale-[1.02]">
                    <i class="fas fa-fan text-4xl text-ntd-light mb-3"></i>
                    <h4 class="font-semibold text-ntd-blue uppercase">Động Cơ Tời (Motor)</h4>
                </div>
                <!-- Component Item 3 -->
                <div
                    class="p-6 bg-white rounded-xl shadow-lg border-b-2 border-ntd-light hover:shadow-xl hover:shadow-ntd-light/20 transition duration-300 transform hover:scale-[1.02]">
                    <i class="fas fa-cubes text-4xl text-ntd-light mb-3"></i>
                    <h4 class="font-semibold text-ntd-blue uppercase">Cáp Thép Chuyên Dụng</h4>
                </div>
                <!-- Component Item 4 -->
                <div
                    class="p-6 bg-white rounded-xl shadow-lg border-b-2 border-ntd-light hover:shadow-xl hover:shadow-ntd-light/20 transition duration-300 transform hover:scale-[1.02]">
                    <i class="fas fa-door-open text-4xl text-ntd-light mb-3"></i>
                    <h4 class="font-semibold text-ntd-blue uppercase">Hệ Thống Cửa Cabin</h4>
                </div>
            </div>
            <a href="#contact"
                class="mt-10 inline-block px-8 py-4 bg-ntd-blue text-white font-bold rounded-xl shadow-lg hover:bg-ntd-light transition duration-300 uppercase transform hover:scale-105 focus:ring-4 focus:ring-ntd-light/50">
                YÊU CẦU BÁO GIÁ LINH KIỆN
            </a>
        </div>
    </section>

    <!-- DỊCH VỤ CHUYÊN NGHIỆP (Services) -->
    <section id="services" class="py-24 lg:py-32 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl sm:text-4xl font-heading font-bold text-center mb-12 text-ntd-dark uppercase">
                DỊCH VỤ TOÀN DIỆN VÀ CHUYÊN NGHIỆP
            </h2>
            <p class="text-center text-lg max-w-4xl mx-auto mb-16 text-gray-600">
                NTD không chỉ cung cấp thang máy, chúng tôi đồng hành cùng khách hàng qua toàn bộ vòng đời sản phẩm, từ
                khâu tư vấn ban đầu đến bảo trì trọn đời.
            </p>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Service 1: Tư Vấn & Lắp Đặt -->
                <div
                    class="group p-8 rounded-2xl shadow-xl border border-ntd-grey transition duration-300 hover:shadow-2xl hover:border-ntd-light transform hover:scale-[1.01]">
                    <div class="flex items-start mb-4">
                        <i class="fas fa-drafting-compass text-4xl text-ntd-blue mr-4"></i>
                        <div>
                            <h3 class="text-2xl font-heading font-bold text-ntd-dark uppercase">TƯ VẤN & LẮP ĐẶT</h3>
                            <p class="text-sm text-ntd-light font-medium">Đảm bảo chất lượng và tiến độ</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Khảo sát, thiết kế hố thang tối ưu không gian, tuân thủ nghiêm ngặt các tiêu chuẩn an toàn quốc
                        tế (ISO, EN81). Đảm bảo tiến độ và chất lượng kỹ thuật cao nhất.
                    </p>
                    <a href="#contact"
                        class="text-ntd-light font-semibold hover:text-ntd-blue flex items-center group-hover:underline">
                        Yêu cầu Tư vấn <i
                            class="fas fa-arrow-right ml-2 text-sm transition group-hover:translate-x-1"></i>
                    </a>
                </div>

                <!-- Service 2: Bảo Trì Định Kỳ & Khẩn Cấp -->
                <div
                    class="group p-8 rounded-2xl shadow-xl border border-ntd-grey transition duration-300 hover:shadow-2xl hover:border-ntd-light transform hover:scale-[1.01]">
                    <div class="flex items-start mb-4">
                        <i class="fas fa-heartbeat text-4xl text-ntd-blue mr-4"></i>
                        <div>
                            <h3 class="text-2xl font-heading font-bold text-ntd-dark uppercase">BẢO TRÌ & SỬA CHỮA</h3>
                            <p class="text-sm text-ntd-light font-medium">Hỗ trợ kỹ thuật 24/7</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Hợp đồng bảo trì đa dạng, kiểm tra định kỳ chuyên sâu. Cam kết có mặt trong vòng 60 phút khi có
                        sự cố khẩn cấp, đảm bảo thang máy hoạt động liên tục, an toàn.
                    </p>
                    <a href="#contact"
                        class="text-ntd-light font-semibold hover:text-ntd-blue flex items-center group-hover:underline">
                        Xem Gói Bảo Trì <i
                            class="fas fa-arrow-right ml-2 text-sm transition group-hover:translate-x-1"></i>
                    </a>
                </div>

                <!-- Service 3: Hiện Đại Hóa & Nâng Cấp -->
                <div
                    class="group p-8 rounded-2xl shadow-xl border border-ntd-grey transition duration-300 hover:shadow-2xl hover:border-ntd-light transform hover:scale-[1.01]">
                    <div class="flex items-start mb-4">
                        <i class="fas fa-sync-alt text-4xl text-ntd-blue mr-4"></i>
                        <div>
                            <h3 class="text-2xl font-heading font-bold text-ntd-dark uppercase">NÂNG CẤP HỆ THỐNG</h3>
                            <p class="text-sm text-ntd-light font-medium">Hiện đại hóa công nghệ</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Hiện đại hóa các thang máy cũ kỹ bằng công nghệ mới (động cơ không hộp số, hệ điều khiển thông
                        minh) giúp tiết kiệm năng lượng, tăng cường an toàn và độ êm ái.
                    </p>
                    <a href="#contact"
                        class="text-ntd-light font-semibold hover:text-ntd-blue flex items-center group-hover:underline">
                        Yêu cầu Báo giá <i
                            class="fas fa-arrow-right ml-2 text-sm transition group-hover:translate-x-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- DỰ ÁN TIÊU BIỂU (Projects) -->
    <section id="projects" class="py-24 lg:py-32 bg-ntd-dark text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl sm:text-4xl font-heading font-bold text-center mb-12 text-white uppercase">
                DỰ ÁN ĐÃ THỰC HIỆN
            </h2>

            <div class="relative">
                <!-- Navigation Buttons -->
                <button id="project-slide-prev"
                    class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 z-10 bg-white text-ntd-dark rounded-full p-3 shadow-lg hover:bg-ntd-blue hover:text-white transition duration-300 hidden md:block">
                    <i class="fas fa-chevron-left text-xl"></i>
                </button>
                <button id="project-slide-next"
                    class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 z-10 bg-white text-ntd-dark rounded-full p-3 shadow-lg hover:bg-ntd-blue hover:text-white transition duration-300 hidden md:block">
                    <i class="fas fa-chevron-right text-xl"></i>
                </button>

                <!-- Slider Container -->
                <div class="overflow-hidden bg-transparent" id="project-slider-container">
                    <div class="flex transition-transform duration-500 ease-out bg-transparent"
                        id="project-slider-wrapper">
                        @forelse($projects as $project)
                            <div class="w-full md:w-1/2 lg:w-1/3 flex-shrink-0 px-4">
                                <div
                                    class="project-card bg-gray-800 rounded-[5px] overflow-hidden shadow-2xl hover:shadow-ntd-light/50 transition duration-300 transform hover:-translate-y-1">
                                    @if($project->image)
                                        <img src="{{ asset($project->image) }}" alt="{{ $project->title }}"
                                            class="w-full object-cover" style=" height: 480px;">
                                    @else
                                        <div class="w-full bg-gradient-to-br from-ntd-blue to-ntd-light flex items-center justify-center" style=" height: 480px;">
                                            <i class="fas fa-building text-white text-6xl opacity-50"></i>
                                        </div>
                                    @endif
                                    <div class="p-6">
                                        <h3 class="text-xl font-heading font-bold text-ntd-light mb-1 uppercase line-clamp-2">
                                            {{ $project->title }}
                                        </h3>
                                        @if($project->address)
                                            <p class="text-gray-400 text-sm mb-3">{{ $project->address }}</p>
                                        @endif
                                        @if($project->description)
                                            <p class="text-gray-300 text-sm line-clamp-2">{{ $project->description }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="w-full text-center py-12">
                                <i class="fas fa-box-open text-gray-500 text-6xl mb-4"></i>
                                <p class="text-gray-400 text-lg">Chưa có dự án nào</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- Dots Navigation -->
                <div class="flex justify-center mt-8 gap-2" id="project-slider-dots">
                    <!-- Dots will be generated by JavaScript -->
                </div>
            </div>
        </div>
    </section>

    <!-- PARTNERS & TECHNOLOGY -->
    {{-- <section class="py-24 lg:py-32 bg-ntd-grey">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h2 id="technology" class="text-3xl font-heading font-bold text-center mb-10 text-ntd-dark uppercase">
                ĐỐI TÁC CÔNG NGHỆ HÀNG ĐẦU
            </h2>
            <div
                class="flex flex-wrap justify-center items-center gap-6 md:gap-12 p-8 bg-white rounded-2xl shadow-inner shadow-gray-200">
                <!-- Placeholder Logos with a touch of color -->
                <div
                    class="h-10 w-32 md:w-40 flex items-center justify-center text-ntd-blue font-heading font-extrabold text-2xl opacity-80 hover:opacity-100 transition duration-300">
                    OTIS</div>
                <div
                    class="h-10 w-32 md:w-40 flex items-center justify-center text-red-600 font-heading font-extrabold text-2xl opacity-80 hover:opacity-100 transition duration-300">
                    KONE</div>
                <div
                    class="h-10 w-32 md:w-40 flex items-center justify-center text-gray-800 font-heading font-extrabold text-2xl opacity-80 hover:opacity-100 transition duration-300">
                    SCHINDLER</div>
                <div
                    class="h-10 w-32 md:w-40 flex items-center justify-center text-blue-800 font-heading font-extrabold text-2xl opacity-80 hover:opacity-100 transition duration-300">
                    MITSUBISHI</div>
            </div>
        </div>
    </section> --}}

    <!-- CTA: FORM TƯ VẤN & BÁO GIÁ -->
    <section id="contact" class="py-12 lg:py-16 bg-ntd-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-2xl">
            <div class="bg-white p-6 sm:p-8 rounded-2xl shadow-2xl ">
                <!-- Card Header with Icon -->
                <div class="text-center mb-6 p-4 rounded-xl"
                    style="background: linear-gradient(135deg, #3470ad 0%, #4b85c4 100%);">
                    <i class="fas fa-clipboard-list text-white text-3xl mb-2"></i>
                    <h2 class="text-2xl font-heading font-bold text-white uppercase">
                        ĐĂNG KÝ TƯ VẤN & BÁO GIÁ
                    </h2>
                </div>

                <p class="mb-6 text-gray-600 text-center">
                    Hãy điền thông tin về nhu cầu thang máy của bạn.
                </p>

                <!-- Form -->
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-4">
                    @csrf

                    <!-- Name Field -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-1 text-sm">
                            <i class="fas fa-user text-ntd-blue mr-1"></i>Họ và Tên <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            placeholder="Nhập họ và tên của bạn"
                            class="w-full p-3 rounded-lg border @error('name') border-red-500 @else border-gray-300 @enderror focus:ring-2 focus:ring-ntd-light focus:border-ntd-light transition duration-200">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Phone Field -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-1 text-sm">
                            <i class="fas fa-phone text-ntd-blue mr-1"></i>Số Điện Thoại <span class="text-red-500">*</span>
                        </label>
                        <input type="tel" name="phone" value="{{ old('phone') }}"
                            placeholder="Nhập số điện thoại của bạn"
                            class="w-full p-3 rounded-lg border @error('phone') border-red-500 @else border-gray-300 @enderror focus:ring-2 focus:ring-ntd-light focus:border-ntd-light transition duration-200">
                        @error('phone')
                            <p class="text-red-500 text-xs mt-1"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-1 text-sm">
                            <i class="fas fa-envelope text-ntd-blue mr-1"></i>Email
                        </label>
                        <input type="email" name="email" value="{{ old('email') }}"
                            placeholder="Nhập email của bạn (không bắt buộc)"
                            class="w-full p-3 rounded-lg border @error('email') border-red-500 @else border-gray-300 @enderror focus:ring-2 focus:ring-ntd-light focus:border-ntd-light transition duration-200">
                        @error('email')
                            <p class="text-red-500 text-xs mt-1"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description Field -->
                    <div>
                        <label class="block text-gray-700 font-semibold mb-1 text-sm">
                            <i class="fas fa-comments text-ntd-blue mr-1"></i>Nhu Cầu Cụ Thể
                        </label>
                        <textarea name="description" rows="3"
                            placeholder="Mô tả nhu cầu của bạn (Loại thang máy, tải trọng, số tầng...)"
                            class="w-full p-3 rounded-lg border @error('description') border-red-500 @else border-gray-300 @enderror focus:ring-2 focus:ring-ntd-light focus:border-ntd-light transition duration-200">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-xs mt-1"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full px-6 py-3 bg-ntd-blue text-white font-bold rounded-lg shadow-lg hover:bg-ntd-light transition duration-300 uppercase transform hover:scale-[1.01] focus:ring-4 focus:ring-ntd-light/50">
                        <i class="fas fa-paper-plane mr-2"></i>GỬI THÔNG TIN NGAY
                    </button>

                    <p class="text-center text-gray-500 text-xs mt-3">
                        <i class="fas fa-lock mr-1"></i>Thông tin của bạn được bảo mật tuyệt đối
                    </p>
                </form>

                <!-- Footer Benefits -->
                <div class="mt-6 pt-4 border-t border-gray-200 flex flex-wrap justify-center gap-8">
                    <div class="flex items-center gap-2 text-gray-600 text-sm">
                        <i class="fas fa-check-circle text-green-500"></i>
                        <span>Tư vấn miễn phí</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-600 text-sm">
                        <i class="fas fa-check-circle text-green-500"></i>
                        <span>Hỗ trợ 24/7</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FOOTER / CONTACT SECTION -->
    <footer class="bg-ntd-dark text-white py-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-10 lg:gap-x-16 border-b border-gray-700 pb-10">

                <!-- Cột 1: Contact Info -->
                <div class="lg:pl-8">
                    <h3 class="text-2xl font-heading font-bold mb-4 text-ntd-light uppercase">CÔNG TY TNHH TỰ ĐỘNG HOÁ
                        NTD</h3>

                    <div class="flex items-start mb-3 text-sm text-gray-300">
                        <i class="fas fa-map-marker-alt mt-1 mr-3 flex-shrink-0 text-ntd-light text-base"></i>
                        <span>Địa chỉ: {{ get_config()->address ?? 'Số 123, Đường ABC, Quận XYZ, TP.HCM' }}</span>
                    </div>

                    <div class="flex items-center mb-3 text-sm text-gray-300">
                        <i class="fas fa-phone-alt mr-3 text-ntd-light text-base"></i>
                        <span>Hotline: <a
                                href="tel:{{ get_config()->hotline ?? '(028) 1234 5678' }}">{{ get_config()->hotline ?? '(028) 1234 5678' }}</a></span>
                    </div>

                    <div class="flex items-center mb-6 text-sm text-gray-300">
                        <i class="fas fa-envelope mr-3 text-ntd-light text-base"></i>
                        <span>Email: <a
                                href="mailto:{{ get_config()->email ?? 'info@ntd.vn' }}">{{ get_config()->email ?? 'info@ntd.vn' }}</a></span>
                    </div>

                    <div class="flex flex-wrap gap-3 mt-6">
                        @if(get_config()->facebook_url)
                            <a href="{{ get_config()->facebook_url }}" target="_blank"
                                class="w-10 h-10 bg-ntd-light rounded-full flex items-center justify-center hover:bg-white hover:text-ntd-dark transition duration-300 flex-shrink-0"
                                aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        @endif
                        @if(get_config()->zalo_url)
                            <a href="{{ get_config()->zalo_url }}" target="_blank"
                                class="w-10 h-10 bg-ntd-light rounded-full flex items-center justify-center hover:bg-white hover:text-ntd-dark transition duration-300 flex-shrink-0"
                                aria-label="Zalo">
                            <svg xmlns="http://www.w3.org/2000/svg"
     x="0px" y="0px"
     width="20" height="20"
     viewBox="0 0 48 48">

  <path fill="#2962ff"
        d="M15,36V6.827l-1.211-0.811C8.64,8.083,5,13.112,5,19v10c0,7.732,6.268,14,14,14h10
           c4.722,0,8.883-2.348,11.417-5.931V36H15z" />

  <path fill="#eee"
        d="M29,5H19c-1.845,0-3.601,0.366-5.214,1.014C10.453,9.25,8,14.528,8,19
           c0,6.771,0.936,10.735,3.712,14.607c0.216,0.301,0.357,0.653,0.376,1.022
           c0.043,0.835-0.129,2.365-1.634,3.742c-0.162,0.148-0.059,0.419,0.16,0.428
           c0.942,0.041,2.843-0.014,4.797-0.877c0.557-0.246,1.191-0.203,1.729,0.083
           C20.453,39.764,24.333,40,28,40c4.676,0,9.339-1.04,12.417-2.916
           C42.038,34.799,43,32.014,43,29V19C43,11.268,36.732,5,29,5z" />

  <path fill="#2962ff"
        d="M36.75,27C34.683,27,33,25.317,33,23.25s1.683-3.75,3.75-3.75
           s3.75,1.683,3.75,3.75S38.817,27,36.75,27z
           M36.75,21c-1.24,0-2.25,1.01-2.25,2.25s1.01,2.25,2.25,2.25S39,24.49,39,23.25
           S37.99,21,36.75,21z" />

  <path fill="#2962ff"
        d="M31.5,27h-1c-0.276,0-0.5-0.224-0.5-0.5V18h1.5V27z" />

  <path fill="#2962ff"
        d="M27,19.75v0.519c-0.629-0.476-1.403-0.769-2.25-0.769
           c-2.067,0-3.75,1.683-3.75,3.75S22.683,27,24.75,27
           c0.847,0,1.621-0.293,2.25-0.769V26.5c0,0.276,0.224,0.5,0.5,0.5h1v-7.25H27z
           M24.75,25.5c-1.24,0-2.25-1.01-2.25-2.25S23.51,21,24.75,21
           S27,22.01,27,23.25S25.99,25.5,24.75,25.5z" />

  <path fill="#2962ff"
        d="M21.25,18h-8v1.5h5.321L13,26h0.026c-0.163,0.211-0.276,0.463-0.276,0.75V27h7.5
           c0.276,0,0.5-0.224,0.5-0.5v-1h-5.321L21,19h-0.026c0.163-0.211,0.276-0.463,0.276-0.75V18z" />

</svg>

                            </a>
                        @endif
                        @if(get_config()->youtube_url)
                            <a href="{{ get_config()->youtube_url }}" target="_blank"
                                class="w-10 h-10 bg-ntd-light rounded-full flex items-center justify-center hover:bg-white hover:text-ntd-dark transition duration-300 flex-shrink-0"
                                aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        @endif
                        @if(get_config()->tiktok_url)
                            <a href="{{ get_config()->tiktok_url }}" target="_blank"
                                class="w-10 h-10 bg-ntd-light rounded-full flex items-center justify-center hover:bg-white hover:text-ntd-dark transition duration-300 flex-shrink-0"
                                aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                        @endif
                        @if(get_config()->instagram_url)
                            <a href="{{ get_config()->instagram_url }}" target="_blank"
                                class="w-10 h-10 bg-ntd-light rounded-full flex items-center justify-center hover:bg-white hover:text-ntd-dark transition duration-300 flex-shrink-0"
                                aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        @endif
                        @if(get_config()->linkedin_url)
                            <a href="{{ get_config()->linkedin_url }}" target="_blank"
                                class="w-10 h-10 bg-ntd-light rounded-full flex items-center justify-center hover:bg-white hover:text-ntd-dark transition duration-300 flex-shrink-0"
                                aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        @endif
                        @if(get_config()->twitter_url)
                            <a href="{{ get_config()->twitter_url }}" target="_blank"
                                class="w-10 h-10 bg-ntd-light rounded-full flex items-center justify-center hover:bg-white hover:text-ntd-dark transition duration-300 flex-shrink-0"
                                aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        @endif
                    </div>
                </div>

                <!-- Cột 2: DANH MỤC -->
                <div class="lg:pr-8">
                    <h4 class="text-xl font-heading font-semibold mb-4 text-ntd-light uppercase">DANH MỤC</h4>
                    <ul class="space-y-3 text-gray-300">
                        <li><a href="#about"
                                class="hover:text-ntd-light transition duration-300 hover:underline">Giới Thiệu Công
                                Ty</a></li>
                        <li><a href="#products"
                                class="hover:text-ntd-light transition duration-300 hover:underline">Các Dòng Thang
                                Máy</a></li>
                        <li><a href="#services"
                                class="hover:text-ntd-light transition duration-300 hover:underline">Dịch Vụ Chuyên
                                Nghiệp</a></li>
                        <li><a href="#projects"
                                class="hover:text-ntd-light transition duration-300 hover:underline">Dự Án Đã Thực
                                Hiện</a></li>
                        <li><a href="#" class="hover:text-ntd-light transition duration-300 hover:underline">Tin
                                Tức & Sự Kiện</a></li>
                    </ul>
                </div>

                <!-- Cột 3: DỊCH VỤ -->
                <div>
                    <h4 class="text-xl font-heading font-semibold mb-4 text-ntd-light uppercase">DỊCH VỤ</h4>
                    <ul class="space-y-3 text-gray-300">
                        <li><a href="#contact"
                                class="hover:text-ntd-light transition duration-300 hover:underline">Tư Vấn Thiết Kế &
                                Lắp Đặt</a></li>
                        <li><a href="#services"
                                class="hover:text-ntd-light transition duration-300 hover:underline">Bảo Trì & Bảo
                                Dưỡng Định Kỳ</a></li>
                        <li><a href="#services"
                                class="hover:text-ntd-light transition duration-300 hover:underline">Nâng Cấp & Hiện
                                Đại Hóa</a></li>
                        <li><a href="#components"
                                class="hover:text-ntd-light transition duration-300 hover:underline">Cung Cấp Linh Kiện
                                Chính Hãng</a></li>
                    </ul>
                </div>

            </div>

            <!-- Bottom Copyright -->
            <div class="text-center pt-8 text-sm text-gray-400">
                <p>&copy; 2024 Công Ty TNHH Tự Động Hoá NTD. Giải pháp nâng tầm không gian sống.</p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('/admin/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/admin/js/toastr.min.js') }}"></script>
    <script>
        @if (Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

        @if (Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @endif

        // Validate và submit form bằng AJAX
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form[action="{{ route('contact.store') }}"]');
            const submitButton = form.querySelector('button[type="submit"]');

            if (form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault(); // Luôn prevent default để xử lý bằng AJAX

                    // Xóa các error cũ
                    const oldErrors = form.querySelectorAll('.error-message');
                    oldErrors.forEach(error => error.remove());

                    const inputs = form.querySelectorAll('input, textarea');
                    inputs.forEach(input => {
                        input.classList.remove('border-red-500');
                    });

                    let isValid = true;
                    let firstErrorField = null;

                    // Validate Họ tên
                    const nameInput = form.querySelector('input[name="name"]');
                    if (!nameInput.value.trim()) {
                        showError(nameInput, 'Vui lòng nhập họ tên');
                        isValid = false;
                        if (!firstErrorField) firstErrorField = nameInput;
                    }

                    // Validate Số điện thoại
                    const phoneInput = form.querySelector('input[name="phone"]');
                    const phoneValue = phoneInput.value.trim();
                    const phoneRegex = /^(0|\+84)[0-9]{9,10}$/;

                    if (!phoneValue) {
                        showError(phoneInput, 'Vui lòng nhập số điện thoại');
                        isValid = false;
                        if (!firstErrorField) firstErrorField = phoneInput;
                    } else if (!phoneRegex.test(phoneValue)) {
                        showError(phoneInput, 'Số điện thoại không đúng định dạng (VD: 0901234567)');
                        isValid = false;
                        if (!firstErrorField) firstErrorField = phoneInput;
                    }

                    // Validate Email (optional nhưng phải đúng định dạng nếu có)
                    const emailInput = form.querySelector('input[name="email"]');
                    const emailValue = emailInput.value.trim();
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    if (emailValue && !emailRegex.test(emailValue)) {
                        showError(emailInput, 'Email không đúng định dạng');
                        isValid = false;
                        if (!firstErrorField) firstErrorField = emailInput;
                    }

                    // Validate Nhu cầu (optional nhưng kiểm tra độ dài)
                    const descInput = form.querySelector('textarea[name="description"]');
                    if (descInput.value.length > 1000) {
                        showError(descInput, 'Nhu cầu không được vượt quá 1000 ký tự');
                        isValid = false;
                        if (!firstErrorField) firstErrorField = descInput;
                    }

                    if (!isValid) {
                        // Focus vào field lỗi đầu tiên
                        if (firstErrorField) {
                            firstErrorField.focus();
                        }
                        toastr.error('Vui lòng kiểm tra lại thông tin!');
                        return;
                    }

                    // Nếu validate pass, submit bằng AJAX
                    submitButton.disabled = true;
                    submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>ĐANG GỬI...';

                    const formData = new FormData(form);

                    fetch(form.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        submitButton.disabled = false;
                        submitButton.innerHTML = '<i class="fas fa-paper-plane mr-2"></i>GỬI THÔNG TIN NGAY';

                        if (data.success) {
                            toastr.success(data.message || 'Cảm ơn bạn đã đăng ký! Chúng tôi sẽ liên hệ với bạn trong vòng 30 phút.');
                            form.reset(); // Clear form
                        } else {
                            // Hiển thị lỗi validation từ server
                            if (data.errors) {
                                for (let field in data.errors) {
                                    const input = form.querySelector(`[name="${field}"]`);
                                    if (input) {
                                        showError(input, data.errors[field][0]);
                                    }
                                }
                            }
                            toastr.error(data.message || 'Có lỗi xảy ra, vui lòng thử lại!');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        submitButton.disabled = false;
                        submitButton.innerHTML = '<i class="fas fa-paper-plane mr-2"></i>GỬI THÔNG TIN NGAY';
                        toastr.error('Có lỗi xảy ra, vui lòng thử lại!');
                    });
                });

                // Hàm hiển thị lỗi
                function showError(input, message) {
                    input.classList.add('border-red-500');

                    const errorDiv = document.createElement('p');
                    errorDiv.className = 'error-message text-red-500 text-xs mt-1';
                    errorDiv.innerHTML = '<i class="fas fa-exclamation-circle mr-1"></i>' + message;

                    input.parentElement.appendChild(errorDiv);
                }

                // Xóa lỗi khi người dùng nhập lại
                const allInputs = form.querySelectorAll('input, textarea');
                allInputs.forEach(input => {
                    input.addEventListener('input', function() {
                        this.classList.remove('border-red-500');
                        const errorMsg = this.parentElement.querySelector('.error-message');
                        if (errorMsg) {
                            errorMsg.remove();
                        }
                    });
                });

                // Khôi phục vị trí scroll sau khi trang load (khi có lỗi hoặc success)
                @if ($errors->any() || session('success') || session('error'))
                    const savedPosition = sessionStorage.getItem('contactFormScrollPosition');
                    if (savedPosition) {
                        // Đợi trang load xong rồi scroll
                        window.scrollTo({
                            top: parseInt(savedPosition),
                            behavior: 'instant'
                        });
                    }
                @endif

                // Xóa vị trí đã lưu sau khi submit thành công
                @if (session('success'))
                    // Chỉ xóa sau 1 giây để đảm bảo scroll đã hoàn tất
                    setTimeout(() => {
                        sessionStorage.removeItem('contactFormScrollPosition');
                    }, 1000);
                @endif
            }
        });

    </script>
    <script>
        // JavaScript cho Mobile Menu Slide from Right
        document.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const menuOverlay = document.getElementById('mobile-menu-overlay');
            const menuCloseBtn = document.getElementById('mobile-menu-close');
            const menuIcon = menuBtn.querySelector('i');

            // Hàm mở menu
            function openMenu() {
                mobileMenu.classList.add('active');
                menuOverlay.classList.add('active');
                menuBtn.setAttribute('aria-expanded', 'true');
                menuIcon.classList.remove('fa-bars');
                menuIcon.classList.add('fa-times');
                document.body.style.overflow = 'hidden'; // Khóa scroll
            }

            // Hàm đóng menu
            function closeMenu() {
                mobileMenu.classList.remove('active');
                menuOverlay.classList.remove('active');
                menuBtn.setAttribute('aria-expanded', 'false');
                menuIcon.classList.remove('fa-times');
                menuIcon.classList.add('fa-bars');
                document.body.style.overflow = ''; // Bỏ khóa scroll
            }

            // Click vào nút menu
            menuBtn.addEventListener('click', () => {
                if (mobileMenu.classList.contains('active')) {
                    closeMenu();
                } else {
                    openMenu();
                }
            });

            // Click vào nút X để đóng menu
            menuCloseBtn.addEventListener('click', closeMenu);

            // Click vào overlay để đóng menu
            menuOverlay.addEventListener('click', closeMenu);

            // Đóng menu khi click vào link trên mobile
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', closeMenu);
            });
        });

        // Scroll Spy - Highlight active menu item
        window.addEventListener('scroll', () => {
            const sections = document.querySelectorAll('section[id]');
            const scrollY = window.pageYOffset;

            sections.forEach(section => {
                const sectionHeight = section.offsetHeight;
                const sectionTop = section.offsetTop - 100; // Offset cho sticky header
                const sectionId = section.getAttribute('id');

                if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                    // Desktop menu
                    document.querySelectorAll('.nav-link').forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('data-section') === sectionId) {
                            link.classList.add('active');
                        }
                    });

                    // Mobile menu
                    document.querySelectorAll('.mobile-nav-link').forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('data-section') === sectionId) {
                            link.classList.add('active');
                        }
                    });
                }
            });

            // Xử lý khi ở đầu trang (home)
            if (scrollY < 100) {
                document.querySelectorAll('.nav-link, .mobile-nav-link').forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('data-section') === 'home') {
                        link.classList.add('active');
                    }
                });
            }
        });

        // Product Slider - Infinite Loop
        const sliderWrapper = document.getElementById('slider-wrapper');
        const sliderContainer = document.getElementById('slider-container');
        const prevBtn = document.getElementById('slide-prev');
        const nextBtn = document.getElementById('slide-next');
        const dotsContainer = document.getElementById('slider-dots');

        if (sliderWrapper && sliderContainer) {
            const originalSlides = Array.from(sliderWrapper.children);
            const totalSlides = originalSlides.length;
            let slidesPerView = 3;
            let currentIndex = 0;
            let isDragging = false;
            let isTransitioning = false;

            console.log('Total slides:', totalSlides);

            // Cập nhật số slide hiển thị theo màn hình
            function updateSlidesPerView() {
                if (window.innerWidth < 768) {
                    slidesPerView = 1;
                } else if (window.innerWidth < 1024) {
                    slidesPerView = 2;
                } else {
                    slidesPerView = 3;
                }
            }

            // Clone slides để tạo infinite loop
            function cloneSlides() {
                // Xóa tất cả
                sliderWrapper.innerHTML = '';

                // Clone slides cuối vào đầu
                for (let i = Math.max(0, totalSlides - slidesPerView); i < totalSlides; i++) {
                    const clone = originalSlides[i].cloneNode(true);
                    sliderWrapper.appendChild(clone);
                }

                // Thêm slides gốc
                originalSlides.forEach(slide => {
                    const clone = slide.cloneNode(true);
                    sliderWrapper.appendChild(clone);
                });

                // Clone slides đầu vào cuối
                for (let i = 0; i < slidesPerView; i++) {
                    const clone = originalSlides[i].cloneNode(true);
                    sliderWrapper.appendChild(clone);
                }

                // Set vị trí ban đầu (bắt đầu từ slide gốc, không phải clone)
                currentIndex = slidesPerView;
            }

            // Tạo dots navigation
            function createDots() {
                dotsContainer.innerHTML = '';
                for (let i = 0; i < totalSlides; i++) {
                    const dot = document.createElement('button');
                    dot.className = 'w-3 h-3 rounded-full transition-all duration-300 bg-gray-300';
                    dot.addEventListener('click', () => goToSlide(i));
                    dotsContainer.appendChild(dot);
                }
                updateDots();
            }

            // Cập nhật dots
            function updateDots() {
                const dots = dotsContainer.querySelectorAll('button');
                // Tính slide thực tế (loại trừ clone)
                const realIndex = ((currentIndex - slidesPerView) % totalSlides + totalSlides) % totalSlides;
                dots.forEach((dot, index) => {
                    if (index === realIndex) {
                        dot.className = 'w-8 h-3 rounded-full bg-ntd-blue transition-all duration-300';
                    } else {
                        dot.className = 'w-3 h-3 rounded-full bg-gray-300 transition-all duration-300';
                    }
                });
            }

            // Di chuyển slider
            function moveSlider(animate = true) {
                const slideWidth = sliderContainer.offsetWidth / slidesPerView;
                const translateX = -currentIndex * slideWidth;

                if (animate) {
                    sliderWrapper.style.transition = 'transform 0.5s ease-out';
                } else {
                    sliderWrapper.style.transition = 'none';
                }

                sliderWrapper.style.transform = `translateX(${translateX}px)`;
                // Đảm bảo dots luôn được cập nhật
                setTimeout(() => {
                    updateDots();
                }, 0);
            }

            // Reset vị trí khi đến clone (infinite loop)
            function handleInfiniteLoop() {
                const allSlides = sliderWrapper.children.length;

                // Nếu vượt quá slide gốc cuối (vào vùng clone cuối)
                if (currentIndex >= totalSlides + slidesPerView) {
                    sliderWrapper.style.transition = 'none';
                    currentIndex = slidesPerView;
                    const slideWidth = sliderContainer.offsetWidth / slidesPerView;
                    sliderWrapper.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
                    prevTranslate = -currentIndex * slideWidth;
                }

                // Nếu lùi về trước slide gốc đầu (vào vùng clone đầu)
                if (currentIndex < slidesPerView) {
                    sliderWrapper.style.transition = 'none';
                    currentIndex = totalSlides + slidesPerView - 1;
                    const slideWidth = sliderContainer.offsetWidth / slidesPerView;
                    sliderWrapper.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
                    prevTranslate = -currentIndex * slideWidth;
                }

                updateDots();
            }

            // Đi đến slide cụ thể
            function goToSlide(index) {
                if (isTransitioning) return;
                currentIndex = slidesPerView + index;
                moveSlider(true);
            }

            // Next slide
            function nextSlide() {
                if (isTransitioning) return;
                isTransitioning = true;
                currentIndex++;

                moveSlider(true);
                setTimeout(() => {
                    handleInfiniteLoop();
                    updateDots();
                    isTransitioning = false;
                }, 500);
            }

            // Previous slide
            function prevSlide() {
                if (isTransitioning) return;
                isTransitioning = true;
                currentIndex--;

                moveSlider(true);
                setTimeout(() => {
                    handleInfiniteLoop();
                    updateDots();
                    isTransitioning = false;
                }, 500);
            }

            // Touch/Mouse events
            let dragStartX = 0;
            let dragStartTranslate = 0;
            let hasMoved = false;

            function touchStart(e) {
                if (isTransitioning) return;

                // Không bắt sự kiện nếu click vào link
                if (e.target.tagName === 'A' || e.target.closest('a')) {
                    return;
                }

                isDragging = true;
                hasMoved = false;

                const slideWidth = sliderContainer.offsetWidth / slidesPerView;
                dragStartX = e.type.includes('mouse') ? e.pageX : e.touches[0].clientX;
                dragStartTranslate = -currentIndex * slideWidth;

                sliderWrapper.style.transition = 'none';
            }

            function touchMove(e) {
                if (!isDragging) return;

                const currentX = e.type.includes('mouse') ? e.pageX : e.touches[0].clientX;
                const diff = currentX - dragStartX;

                // Nếu di chuyển > 5px thì mới coi là kéo
                if (Math.abs(diff) > 5) {
                    hasMoved = true;
                    sliderWrapper.classList.add('dragging');
                    e.preventDefault(); // Chặn click khi đang kéo
                }

                const newTranslate = dragStartTranslate + diff;
                sliderWrapper.style.transform = `translateX(${newTranslate}px)`;
            }

            function touchEnd(e) {
                if (!isDragging) return;
                isDragging = false;

                sliderWrapper.classList.remove('dragging');

                // Nếu không di chuyển (chỉ click), không làm gì
                if (!hasMoved) {
                    console.log('Just a click, not a drag');
                    return;
                }

                // Xử lý cho cả mouse và touch
                let endX;
                if (e.type.includes('mouse')) {
                    endX = e.pageX;
                } else {
                    // Với touch event, changedTouches chứa thông tin khi nhấc tay
                    endX = e.changedTouches && e.changedTouches[0] ? e.changedTouches[0].clientX : dragStartX;
                }

                const diff = endX - dragStartX;
                const slideWidth = sliderContainer.offsetWidth / slidesPerView;

                console.log('Drag end - diff:', diff, 'threshold:', slideWidth * 0.25);

                // Ngưỡng để chuyển slide (25% chiều rộng)
                const threshold = slideWidth * 0.25;

                if (diff < -threshold) {
                    // Vuốt sang trái -> Next
                    console.log('Swipe left -> Next');
                    nextSlide();
                } else if (diff > threshold) {
                    // Vuốt sang phải -> Prev
                    console.log('Swipe right -> Prev');
                    prevSlide();
                } else {
                    // Không đủ xa, quay về vị trí cũ
                    console.log('Return to current position');
                    sliderWrapper.style.transition = 'transform 0.3s ease-out';
                    sliderWrapper.style.transform = `translateX(${-currentIndex * slideWidth}px)`;
                    updateDots();
                }
            }

            // Event listeners
            if (prevBtn) prevBtn.addEventListener('click', prevSlide);
            if (nextBtn) nextBtn.addEventListener('click', nextSlide);

            sliderContainer.addEventListener('touchstart', touchStart, {
                passive: false
            });
            sliderContainer.addEventListener('touchmove', touchMove, {
                passive: false
            });
            sliderContainer.addEventListener('touchend', touchEnd);

            sliderContainer.addEventListener('mousedown', touchStart);
            sliderContainer.addEventListener('mousemove', touchMove);
            sliderContainer.addEventListener('mouseup', touchEnd);
            sliderContainer.addEventListener('mouseleave', () => {
                if (isDragging) touchEnd();
            });

            sliderContainer.addEventListener('dragstart', (e) => e.preventDefault());

            // Responsive
            let resizeTimeout;
            window.addEventListener('resize', () => {
                clearTimeout(resizeTimeout);
                resizeTimeout = setTimeout(() => {
                    updateSlidesPerView();
                    cloneSlides();
                    createDots();
                    moveSlider(false);
                }, 250);
            });

            // Khởi tạo
            updateSlidesPerView();
            cloneSlides();
            createDots();
            moveSlider(false);

            // Auto play
            setInterval(nextSlide, 5000);
        }

        // Project Slider - Infinite Loop
        const projectSliderWrapper = document.getElementById('project-slider-wrapper');
        const projectSliderContainer = document.getElementById('project-slider-container');
        const projectPrevBtn = document.getElementById('project-slide-prev');
        const projectNextBtn = document.getElementById('project-slide-next');
        const projectDotsContainer = document.getElementById('project-slider-dots');

        if (projectSliderWrapper && projectSliderContainer) {
            const projectOriginalSlides = Array.from(projectSliderWrapper.children);
            const projectTotalSlides = projectOriginalSlides.length;
            let projectSlidesPerView = 3;
            let projectCurrentIndex = 0;
            let projectIsDragging = false;
            let projectIsTransitioning = false;

            // Cập nhật số slide hiển thị theo màn hình
            function updateProjectSlidesPerView() {
                if (window.innerWidth < 768) {
                    projectSlidesPerView = 1;
                } else if (window.innerWidth < 1024) {
                    projectSlidesPerView = 2;
                } else {
                    projectSlidesPerView = 3;
                }
            }

            // Clone slides để tạo infinite loop
            function cloneProjectSlides() {
                projectSliderWrapper.innerHTML = '';

                // Kiểm tra nếu không có slides
                if (projectTotalSlides === 0) return;

                // Clone slides cuối vào đầu
                for (let i = Math.max(0, projectTotalSlides - projectSlidesPerView); i < projectTotalSlides; i++) {
                    const clone = projectOriginalSlides[i].cloneNode(true);
                    projectSliderWrapper.appendChild(clone);
                }

                // Thêm slides gốc
                projectOriginalSlides.forEach(slide => {
                    const clone = slide.cloneNode(true);
                    projectSliderWrapper.appendChild(clone);
                });

                // Clone slides đầu vào cuối
                for (let i = 0; i < Math.min(projectSlidesPerView, projectTotalSlides); i++) {
                    const clone = projectOriginalSlides[i].cloneNode(true);
                    projectSliderWrapper.appendChild(clone);
                }

                projectCurrentIndex = projectSlidesPerView;
            }

            // Tạo dots navigation
            function createProjectDots() {
                projectDotsContainer.innerHTML = '';
                for (let i = 0; i < projectTotalSlides; i++) {
                    const dot = document.createElement('button');
                    dot.className = 'w-3 h-3 rounded-full transition-all duration-300 bg-gray-300';
                    dot.addEventListener('click', () => goToProjectSlide(i));
                    projectDotsContainer.appendChild(dot);
                }
                updateProjectDots();
            }

            // Cập nhật dots
            function updateProjectDots() {
                const dots = projectDotsContainer.querySelectorAll('button');
                const realIndex = ((projectCurrentIndex - projectSlidesPerView) % projectTotalSlides + projectTotalSlides) % projectTotalSlides;
                dots.forEach((dot, index) => {
                    if (index === realIndex) {
                        dot.className = 'w-8 h-3 rounded-full bg-ntd-light transition-all duration-300';
                    } else {
                        dot.className = 'w-3 h-3 rounded-full bg-gray-300 transition-all duration-300';
                    }
                });
            }

            // Di chuyển slider
            function moveProjectSlider(animate = true) {
                const slideWidth = projectSliderContainer.offsetWidth / projectSlidesPerView;
                const translateX = -projectCurrentIndex * slideWidth;

                if (animate) {
                    projectSliderWrapper.style.transition = 'transform 0.5s ease-out';
                } else {
                    projectSliderWrapper.style.transition = 'none';
                }

                projectSliderWrapper.style.transform = `translateX(${translateX}px)`;
                setTimeout(() => {
                    updateProjectDots();
                }, 0);
            }

            // Reset vị trí khi đến clone (infinite loop)
            function handleProjectInfiniteLoop() {
                if (projectCurrentIndex >= projectTotalSlides + projectSlidesPerView) {
                    projectSliderWrapper.style.transition = 'none';
                    projectCurrentIndex = projectSlidesPerView;
                    const slideWidth = projectSliderContainer.offsetWidth / projectSlidesPerView;
                    projectSliderWrapper.style.transform = `translateX(-${projectCurrentIndex * slideWidth}px)`;
                }

                if (projectCurrentIndex < projectSlidesPerView) {
                    projectSliderWrapper.style.transition = 'none';
                    projectCurrentIndex = projectTotalSlides + projectSlidesPerView - 1;
                    const slideWidth = projectSliderContainer.offsetWidth / projectSlidesPerView;
                    projectSliderWrapper.style.transform = `translateX(-${projectCurrentIndex * slideWidth}px)`;
                }

                updateProjectDots();
            }

            // Đi đến slide cụ thể
            function goToProjectSlide(index) {
                if (projectIsTransitioning) return;
                projectCurrentIndex = projectSlidesPerView + index;
                moveProjectSlider(true);
            }

            // Next slide
            function nextProjectSlide() {
                if (projectIsTransitioning) return;
                projectIsTransitioning = true;
                projectCurrentIndex++;

                moveProjectSlider(true);
                setTimeout(() => {
                    handleProjectInfiniteLoop();
                    updateProjectDots();
                    projectIsTransitioning = false;
                }, 500);
            }

            // Previous slide
            function prevProjectSlide() {
                if (projectIsTransitioning) return;
                projectIsTransitioning = true;
                projectCurrentIndex--;

                moveProjectSlider(true);
                setTimeout(() => {
                    handleProjectInfiniteLoop();
                    updateProjectDots();
                    projectIsTransitioning = false;
                }, 500);
            }

            // Touch/Mouse events
            let projectDragStartX = 0;
            let projectDragStartTranslate = 0;
            let projectHasMoved = false;

            function projectTouchStart(e) {
                if (projectIsTransitioning) return;

                if (e.target.tagName === 'A' || e.target.closest('a')) {
                    return;
                }

                projectIsDragging = true;
                projectHasMoved = false;

                const slideWidth = projectSliderContainer.offsetWidth / projectSlidesPerView;
                projectDragStartX = e.type.includes('mouse') ? e.pageX : e.touches[0].clientX;
                projectDragStartTranslate = -projectCurrentIndex * slideWidth;

                projectSliderWrapper.style.transition = 'none';
            }

            function projectTouchMove(e) {
                if (!projectIsDragging) return;

                const currentX = e.type.includes('mouse') ? e.pageX : e.touches[0].clientX;
                const diff = currentX - projectDragStartX;

                if (Math.abs(diff) > 5) {
                    projectHasMoved = true;
                    projectSliderWrapper.classList.add('dragging');
                    e.preventDefault();
                }

                const newTranslate = projectDragStartTranslate + diff;
                projectSliderWrapper.style.transform = `translateX(${newTranslate}px)`;
            }

            function projectTouchEnd(e) {
                if (!projectIsDragging) return;
                projectIsDragging = false;

                projectSliderWrapper.classList.remove('dragging');

                if (!projectHasMoved) {
                    return;
                }

                let endX;
                if (e.type.includes('mouse')) {
                    endX = e.pageX;
                } else {
                    endX = e.changedTouches && e.changedTouches[0] ? e.changedTouches[0].clientX : projectDragStartX;
                }

                const diff = endX - projectDragStartX;
                const slideWidth = projectSliderContainer.offsetWidth / projectSlidesPerView;
                const threshold = slideWidth * 0.25;

                if (diff < -threshold) {
                    nextProjectSlide();
                } else if (diff > threshold) {
                    prevProjectSlide();
                } else {
                    projectSliderWrapper.style.transition = 'transform 0.3s ease-out';
                    projectSliderWrapper.style.transform = `translateX(${-projectCurrentIndex * slideWidth}px)`;
                    updateProjectDots();
                }
            }

            // Event listeners
            if (projectPrevBtn) projectPrevBtn.addEventListener('click', prevProjectSlide);
            if (projectNextBtn) projectNextBtn.addEventListener('click', nextProjectSlide);

            projectSliderContainer.addEventListener('touchstart', projectTouchStart, { passive: false });
            projectSliderContainer.addEventListener('touchmove', projectTouchMove, { passive: false });
            projectSliderContainer.addEventListener('touchend', projectTouchEnd);

            projectSliderContainer.addEventListener('mousedown', projectTouchStart);
            projectSliderContainer.addEventListener('mousemove', projectTouchMove);
            projectSliderContainer.addEventListener('mouseup', projectTouchEnd);
            projectSliderContainer.addEventListener('mouseleave', () => {
                if (projectIsDragging) projectTouchEnd();
            });

            projectSliderContainer.addEventListener('dragstart', (e) => e.preventDefault());

            // Responsive
            let projectResizeTimeout;
            window.addEventListener('resize', () => {
                clearTimeout(projectResizeTimeout);
                projectResizeTimeout = setTimeout(() => {
                    updateProjectSlidesPerView();
                    cloneProjectSlides();
                    createProjectDots();
                    moveProjectSlider(false);
                }, 250);
            });

            // Khởi tạo
            updateProjectSlidesPerView();
            cloneProjectSlides();
            createProjectDots();
            moveProjectSlider(false);

            // Auto play
            setInterval(nextProjectSlide, 5000);
        }

        // Show logo in nav when scrolling (PC only)
        window.addEventListener('scroll', function() {
            // Chỉ áp dụng cho desktop (>= 768px)
            if (window.innerWidth >= 768) {
                const navLogo = document.getElementById('nav-logo');
                const scrollPosition = window.scrollY;

                // Chỉ thay đổi opacity, không thay đổi display
                if (scrollPosition > 100) {
                    navLogo.classList.remove('opacity-0');
                    navLogo.classList.add('opacity-100');
                } else {
                    navLogo.classList.remove('opacity-100');
                    navLogo.classList.add('opacity-0');
                }
            }
        });
    </script>
</body>

</html>
