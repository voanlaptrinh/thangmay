<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Công Ty TNHH Tự Động Hoá NTD - Giải Pháp Nâng Tầm Không Gian Sống</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Oswald:wght@500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        :root {
            --ntd-blue: #3470ad;
            --ntd-light: #4b85c4;
            --ntd-grey: #f3f4f6;
            --ntd-dark: #0f172a;
        }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--ntd-dark);
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Oswald', sans-serif;
        }

        /* Hero Section */
        .hero-section {
            background-image: url('https://placehold.co/1920x800/1f2937/ffffff?text=ELEVATOR+SOLUTION');
            background-size: cover;
            background-position: center;
            min-height: 80vh;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background-color: rgba(15, 23, 42, 0.7);
        }

        .hero-content {
            position: relative;
            z-index: 10;
        }

        /* Navbar Styles */
        .navbar-custom {
            background-color: var(--ntd-blue);
        }

        .nav-link-custom {
            color: white !important;
            transition: all 0.3s;
        }

        .nav-link-custom:hover {
            color: var(--ntd-light) !important;
        }

        .nav-link-active {
            background-color: rgba(75, 133, 196, 0.8);
            border-radius: 0.5rem;
        }

        /* Cards */
        .card-hover {
            transition: all 0.5s;
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
        }

        /* Buttons */
        .btn-ntd-primary {
            background-color: var(--ntd-light);
            border-color: var(--ntd-light);
            color: white;
        }

        .btn-ntd-primary:hover {
            background-color: var(--ntd-blue);
            border-color: var(--ntd-blue);
            color: white;
            transform: scale(1.05);
        }

        /* Footer */
        .footer-custom {
            background-color: var(--ntd-dark);
            color: white;
        }

        /* Pulse Animation */
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        .animate-pulse {
            animation: pulse 1.5s infinite;
        }

        /* Project Slider */
        .projects-slider {
            overflow: hidden;
            position: relative;
        }

        .projects-track {
            display: flex;
            animation: slide 15s linear infinite;
        }

        .projects-track:hover {
            animation-play-state: paused;
        }

        .project-item {
            min-width: 33.333%;
            padding: 0 15px;
            box-sizing: border-box;
        }

        @keyframes slide {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }

        @media (max-width: 768px) {
            .project-item {
                min-width: 100%;
            }
        }
    </style>
</head>
<body>

    <!-- HEADER START -->
    <header class="shadow-lg">
        <!-- Top Header -->
        <div class="bg-white border-bottom py-3 d-none d-md-block">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Logo & Company -->
                    <div class="col-md-8 d-flex align-items-center">
                        <img src="https://placehold.co/150x50/000/00bfff,ff8c00?text=NTD"
                             alt="Logo NTD" class="me-3" style="height: 50px;">
                        <div>
                            <h1 class="h4 fw-bold text-uppercase mb-0" style="color: var(--ntd-blue);">
                                CÔNG TY TNHH TỰ ĐỘNG HOÁ NTD
                            </h1>
                            <p class="small text-muted fst-italic mb-0">Automation - Industrial - Equipment</p>
                        </div>
                    </div>

                    <!-- Hotline -->
                    <div class="col-md-4 text-end">
                        <span class="text-muted me-2">Hotline:</span>
                        <span class="text-danger fw-bold fs-5">1900 69 61</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navbar -->
        <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto fw-semibold">
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom px-3" href="#">
                                <i class="fas fa-home me-1"></i> TRANG CHỦ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom px-3" href="#about">GIỚI THIỆU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom px-3" href="#products">THANG MÁY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom px-3" href="#components">LINH KIỆN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom nav-link-active px-3" href="#services">DỊCH VỤ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom px-3" href="#projects">DỰ ÁN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-custom px-3" href="#contact">LIÊN HỆ</a>
                        </li>
                    </ul>

                    <!-- Search Box -->
                    <div class="d-none d-lg-flex">
                        <input type="text" class="form-control me-2" placeholder="Tìm kiếm...">
                        <button class="btn btn-ntd-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- HERO SECTION -->
    <section class="hero-section text-white">
        <div class="hero-overlay"></div>
        <div class="hero-content text-center px-3">
            <div class="container">
                <h1 class="display-3 fw-bold mb-4 text-uppercase">
                    THANG MÁY NTD: GIẢI PHÁP NÂNG TẦM KHÔNG GIAN SỐNG
                </h1>
                <p class="fs-4 mb-5">
                    Đối tác tin cậy cung cấp các dòng thang máy, thang cuốn an toàn, bền bỉ và hiện đại nhất cho mọi công trình.
                </p>
                <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                    <a href="#quote-form" class="btn btn-ntd-primary btn-lg px-5 shadow-lg">
                        YÊU CẦU TƯ VẤN NGAY
                    </a>
                    <a href="#technology" class="btn btn-outline-light btn-lg px-5">
                        TÌM HIỂU VỀ CÔNG NGHỆ
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- VÌ SAO CHỌN NTD -->
    <section id="about" class="py-5" style="background-color: var(--ntd-grey);">
        <div class="container">
            <h2 class="text-center display-5 fw-bold mb-4 text-uppercase">VÌ SAO NÊN CHỌN NTD?</h2>
            <p class="text-center text-muted mb-5 fs-5 mx-auto" style="max-width: 800px;">
                Với hơn 15 năm kinh nghiệm và đội ngũ kỹ sư hàng đầu, NTD cam kết mang đến giải pháp thang máy toàn diện.
            </p>

            <div class="row g-4">
                <!-- Pillar 1 -->
                <div class="col-md-4">
                    <div class="card h-100 text-center border-0 shadow-lg card-hover border-top border-primary border-5">
                        <div class="card-body p-4">
                            <i class="fas fa-shield-alt fa-4x mb-3" style="color: var(--ntd-light);"></i>
                            <h3 class="h5 fw-bold text-uppercase" style="color: var(--ntd-blue);">AN TOÀN TUYỆT ĐỐI</h3>
                            <p class="text-muted">Hệ thống giám sát đa tầng, đạt các chứng nhận an toàn quốc tế (EN81, JIS).</p>
                        </div>
                    </div>
                </div>

                <!-- Pillar 2 -->
                <div class="col-md-4">
                    <div class="card h-100 text-center border-0 shadow-lg card-hover border-top border-primary border-5">
                        <div class="card-body p-4">
                            <i class="fas fa-bolt fa-4x mb-3" style="color: var(--ntd-light);"></i>
                            <h3 class="h5 fw-bold text-uppercase" style="color: var(--ntd-blue);">TIẾT KIỆM NĂNG LƯỢNG</h3>
                            <p class="text-muted">Động cơ Inverter không hộp số, giảm 40% điện năng tiêu thụ.</p>
                        </div>
                    </div>
                </div>

                <!-- Pillar 3 -->
                <div class="col-md-4">
                    <div class="card h-100 text-center border-0 shadow-lg card-hover border-top border-primary border-5">
                        <div class="card-body p-4">
                            <i class="fas fa-headset fa-4x mb-3" style="color: var(--ntd-light);"></i>
                            <h3 class="h5 fw-bold text-uppercase" style="color: var(--ntd-blue);">HỖ TRỢ KỸ THUẬT</h3>
                            <p class="text-muted">Đội ngũ kỹ sư túc trực 24/7, cam kết có mặt trong vòng 1 giờ.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SẢN PHẨM: THANG MÁY -->
    <section id="products" class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center display-5 fw-bold mb-5 text-uppercase">CÁC DÒNG THANG MÁY CHỦ LỰC</h2>

            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-lg overflow-hidden card-hover">
                        <img src="https://placehold.co/600x400/3b82f6/ffffff?text=THANG+MAY+GIA+DINH"
                             class="card-img-top" alt="Thang Máy Gia Đình" style="height: 250px; object-fit: cover;">
                        <div class="card-body p-4" style="background-color: var(--ntd-grey);">
                            <h3 class="h5 fw-bold text-uppercase" style="color: var(--ntd-blue);">THANG MÁY GIA ĐÌNH</h3>
                            <p class="text-muted">Thiết kế không phòng máy, phù hợp cho nhà phố, biệt thự.</p>
                            <a href="#quote-form" class="text-decoration-none" style="color: var(--ntd-light);">
                                Chi Tiết & Tư Vấn <i class="fas fa-chevron-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-lg overflow-hidden card-hover">
                        <img src="https://placehold.co/600x400/1e3a8a/ffffff?text=THANG+MAY+TAI+KHACH"
                             class="card-img-top" alt="Thang Máy Tải Khách" style="height: 250px; object-fit: cover;">
                        <div class="card-body p-4" style="background-color: var(--ntd-grey);">
                            <h3 class="h5 fw-bold text-uppercase" style="color: var(--ntd-blue);">THANG MÁY TẢI KHÁCH</h3>
                            <p class="text-muted">Tốc độ cao (lên đến 4m/s), lý tưởng cho cao ốc, khách sạn.</p>
                            <a href="#quote-form" class="text-decoration-none" style="color: var(--ntd-light);">
                                Yêu Cầu Báo Giá <i class="fas fa-chevron-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-md-4">
                    <div class="card border-0 shadow-lg overflow-hidden card-hover">
                        <img src="https://placehold.co/600x400/1f2937/ffffff?text=THANG+MAY+HANG"
                             class="card-img-top" alt="Thang Máy Tải Hàng" style="height: 250px; object-fit: cover;">
                        <div class="card-body p-4" style="background-color: var(--ntd-grey);">
                            <h3 class="h5 fw-bold text-uppercase" style="color: var(--ntd-blue);">THANG TẢI HÀNG & CHUYÊN DỤNG</h3>
                            <p class="text-muted">Chịu tải nặng, bền bỉ, chống ăn mòn.</p>
                            <a href="#quote-form" class="text-decoration-none" style="color: var(--ntd-light);">
                                Xem Danh Mục <i class="fas fa-chevron-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LINH KIỆN -->
    <section id="components" class="py-5" style="background-color: var(--ntd-grey);">
        <div class="container text-center">
            <h2 class="display-5 fw-bold mb-3 text-uppercase">LINH KIỆN & PHỤ TÙNG CHÍNH HÃNG</h2>
            <p class="text-muted mb-5 mx-auto" style="max-width: 800px;">
                Chúng tôi cung cấp đầy đủ các loại linh kiện thang máy chất lượng cao, nhập khẩu từ các đối tác hàng đầu.
            </p>

            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="card border-0 shadow p-4 h-100 card-hover">
                        <i class="fas fa-microchip fa-3x mb-3" style="color: var(--ntd-light);"></i>
                        <h5 class="fw-semibold text-uppercase">Bo Mạch Điều Khiển</h5>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card border-0 shadow p-4 h-100 card-hover">
                        <i class="fas fa-fan fa-3x mb-3" style="color: var(--ntd-light);"></i>
                        <h5 class="fw-semibold text-uppercase">Động Cơ Tời</h5>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card border-0 shadow p-4 h-100 card-hover">
                        <i class="fas fa-cubes fa-3x mb-3" style="color: var(--ntd-light);"></i>
                        <h5 class="fw-semibold text-uppercase">Cáp Thép</h5>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card border-0 shadow p-4 h-100 card-hover">
                        <i class="fas fa-door-open fa-3x mb-3" style="color: var(--ntd-light);"></i>
                        <h5 class="fw-semibold text-uppercase">Cửa Cabin</h5>
                    </div>
                </div>
            </div>

            <a href="#quote-form" class="btn btn-ntd-primary btn-lg mt-5 px-5 shadow">
                YÊU CẦU BÁO GIÁ LINH KIỆN
            </a>
        </div>
    </section>

    <!-- DỊCH VỤ -->
    <section id="services" class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center display-5 fw-bold mb-4 text-uppercase">DỊCH VỤ TOÀN DIỆN VÀ CHUYÊN NGHIỆP</h2>
            <p class="text-center text-muted mb-5 mx-auto" style="max-width: 900px;">
                NTD không chỉ cung cấp thang máy, chúng tôi đồng hành cùng khách hàng qua toàn bộ vòng đời sản phẩm.
            </p>

            <div class="row g-4">
                <!-- Service 1 -->
                <div class="col-md-4">
                    <div class="card h-100 border shadow-lg card-hover">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start mb-3">
                                <i class="fas fa-drafting-compass fa-3x me-3" style="color: var(--ntd-blue);"></i>
                                <div>
                                    <h4 class="h5 fw-bold text-uppercase">TƯ VẤN & LẮP ĐẶT</h4>
                                    <p class="small mb-0" style="color: var(--ntd-light);">Đảm bảo chất lượng</p>
                                </div>
                            </div>
                            <p class="text-muted">Khảo sát, thiết kế hố thang tối ưu, tuân thủ tiêu chuẩn an toàn quốc tế.</p>
                            <a href="#quote-form" class="text-decoration-none" style="color: var(--ntd-light);">
                                Yêu cầu Tư vấn <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-md-4">
                    <div class="card h-100 border shadow-lg card-hover">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start mb-3">
                                <i class="fas fa-heartbeat fa-3x me-3" style="color: var(--ntd-blue);"></i>
                                <div>
                                    <h4 class="h5 fw-bold text-uppercase">BẢO TRÌ & SỬA CHỮA</h4>
                                    <p class="small mb-0" style="color: var(--ntd-light);">Hỗ trợ 24/7</p>
                                </div>
                            </div>
                            <p class="text-muted">Kiểm tra định kỳ, cam kết có mặt trong 60 phút khi sự cố khẩn cấp.</p>
                            <a href="#contact" class="text-decoration-none" style="color: var(--ntd-light);">
                                Xem Gói Bảo Trì <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-md-4">
                    <div class="card h-100 border shadow-lg card-hover">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start mb-3">
                                <i class="fas fa-sync-alt fa-3x me-3" style="color: var(--ntd-blue);"></i>
                                <div>
                                    <h4 class="h5 fw-bold text-uppercase">NÂNG CẤP HỆ THỐNG</h4>
                                    <p class="small mb-0" style="color: var(--ntd-light);">Hiện đại hóa</p>
                                </div>
                            </div>
                            <p class="text-muted">Nâng cấp thang máy cũ bằng công nghệ mới, tiết kiệm năng lượng.</p>
                            <a href="#quote-form" class="text-decoration-none" style="color: var(--ntd-light);">
                                Yêu cầu Báo giá <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- DỰ ÁN -->
    <section id="projects" class="py-5 text-white" style="background-color: var(--ntd-dark);">
        <div class="container">
            <h2 class="text-center display-5 fw-bold mb-5 text-uppercase">DỰ ÁN ĐÃ THỰC HIỆN</h2>

            <div class="projects-slider">
                <div class="projects-track">
                    <!-- Project 1 -->
                    <div class="project-item">
                        <div class="card bg-secondary border-0 shadow-lg card-hover">
                            <img src="https://placehold.co/400x300/3b82f6/ffffff?text=TRUNG+TAM+THUONG+MAI"
                                 class="card-img-top" alt="Project 1" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="fw-bold text-uppercase" style="color: var(--ntd-light);">VINCOM CENTER</h5>
                                <p class="small text-muted mb-2">Quận 1, TP.HCM</p>
                                <span class="badge bg-dark">
                                    <i class="fas fa-building me-1"></i> 20 Thang máy
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="project-item">
                        <div class="card bg-secondary border-0 shadow-lg card-hover">
                            <img src="https://placehold.co/400x300/1e3a8a/ffffff?text=VĂN+PHÒNG"
                                 class="card-img-top" alt="Project 2" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="fw-bold text-uppercase" style="color: var(--ntd-light);">VIETNAM PLAZA</h5>
                                <p class="small text-muted mb-2">Hà Nội</p>
                                <span class="badge bg-dark">
                                    <i class="fas fa-arrow-up me-1"></i> Tốc độ cao
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="project-item">
                        <div class="card bg-secondary border-0 shadow-lg card-hover">
                            <img src="https://placehold.co/400x300/9ca3af/ffffff?text=BIET+THU"
                                 class="card-img-top" alt="Project 3" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="fw-bold text-uppercase" style="color: var(--ntd-light);">KHU SAO BIỂN</h5>
                                <p class="small text-muted mb-2">TP. Thủ Đức</p>
                                <span class="badge bg-dark">
                                    <i class="fas fa-home me-1"></i> Gia đình
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Duplicate items for infinite loop -->
                    <div class="project-item">
                        <div class="card bg-secondary border-0 shadow-lg card-hover">
                            <img src="https://placehold.co/400x300/3b82f6/ffffff?text=TRUNG+TAM+THUONG+MAI"
                                 class="card-img-top" alt="Project 1" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="fw-bold text-uppercase" style="color: var(--ntd-light);">VINCOM CENTER</h5>
                                <p class="small text-muted mb-2">Quận 1, TP.HCM</p>
                                <span class="badge bg-dark">
                                    <i class="fas fa-building me-1"></i> 20 Thang máy
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="project-item">
                        <div class="card bg-secondary border-0 shadow-lg card-hover">
                            <img src="https://placehold.co/400x300/1e3a8a/ffffff?text=VĂN+PHÒNG"
                                 class="card-img-top" alt="Project 2" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="fw-bold text-uppercase" style="color: var(--ntd-light);">VIETNAM PLAZA</h5>
                                <p class="small text-muted mb-2">Hà Nội</p>
                                <span class="badge bg-dark">
                                    <i class="fas fa-arrow-up me-1"></i> Tốc độ cao
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="project-item">
                        <div class="card bg-secondary border-0 shadow-lg card-hover">
                            <img src="https://placehold.co/400x300/9ca3af/ffffff?text=BIET+THU"
                                 class="card-img-top" alt="Project 3" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="fw-bold text-uppercase" style="color: var(--ntd-light);">KHU SAO BIỂN</h5>
                                <p class="small text-muted mb-2">TP. Thủ Đức</p>
                                <span class="badge bg-dark">
                                    <i class="fas fa-home me-1"></i> Gia đình
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-light btn-lg px-5">
                    XEM THƯ VIỆN DỰ ÁN
                </a>
            </div>
        </div>
    </section>

    <!-- ĐỐI TÁC -->
    <section id="technology" class="py-5" style="background-color: var(--ntd-grey);">
        <div class="container">
            <h2 class="text-center display-6 fw-bold mb-4 text-uppercase">ĐỐI TÁC CÔNG NGHỆ HÀNG ĐẦU</h2>
            <div class="d-flex flex-wrap justify-content-center align-items-center gap-5 p-4 bg-white rounded shadow">
                <div class="fs-2 fw-bold" style="color: var(--ntd-blue);">OTIS</div>
                <div class="fs-2 fw-bold text-danger">KONE</div>
                <div class="fs-2 fw-bold text-dark">SCHINDLER</div>
                <div class="fs-2 fw-bold text-primary">MITSUBISHI</div>
            </div>
        </div>
    </section>

    <!-- FORM TƯ VẤN & BÁO GIÁ -->
    <section id="quote-form" class="py-5" style="background-color: var(--ntd-blue);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="card border-0 shadow-lg">
                        <div class="card-header text-center py-4 border-0" style="background: linear-gradient(135deg, var(--ntd-blue) 0%, var(--ntd-light) 100%);">
                            <h2 class="fw-bold mb-2 text-white text-uppercase">
                                <i class="fas fa-clipboard-list me-2"></i>
                                ĐĂNG KÝ TƯ VẤN & BÁO GIÁ
                            </h2>
                            <p class="mb-0 text-white-50">
                                Chúng tôi sẽ liên hệ tư vấn miễn phí trong vòng 30 phút
                            </p>
                        </div>

                        <div class="card-body p-4 p-md-5">
                            @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-check-circle fa-2x me-3 text-success"></i>
                                        <div>
                                            <strong>Thành công!</strong>
                                            <p class="mb-0">{{ session('success') }}</p>
                                        </div>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-exclamation-triangle fa-2x me-3 text-danger"></i>
                                        <div>
                                            <strong>Lỗi!</strong>
                                            <p class="mb-0">{{ session('error') }}</p>
                                        </div>
                                    </div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                </div>
                            @endif

                            <form action="{{ route('contact.store') }}" method="POST" id="contactForm">
                                @csrf

                                <div class="mb-4">
                                    <label for="name" class="form-label fw-semibold">
                                        <i class="fas fa-user text-primary me-1"></i>
                                        Họ và Tên <span class="text-danger">*</span>
                                    </label>
                                    <input type="text"
                                           name="name"
                                           id="name"
                                           class="form-control form-control-lg @error('name') is-invalid @enderror"
                                           placeholder="Nguyễn Văn A"
                                           value="{{ old('name') }}"
                                           required>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="phone" class="form-label fw-semibold">
                                        <i class="fas fa-phone text-primary me-1"></i>
                                        Số Điện Thoại <span class="text-danger">*</span>
                                    </label>
                                    <input type="tel"
                                           name="phone"
                                           id="phone"
                                           class="form-control form-control-lg @error('phone') is-invalid @enderror"
                                           placeholder="0912 345 678"
                                           value="{{ old('phone') }}"
                                           required>
                                    @error('phone')
                                        <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                        </div>
                                    @enderror
                                    <div class="form-text">
                                        <i class="fas fa-info-circle me-1"></i>
                                        Số điện thoại để chúng tôi liên hệ tư vấn
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="description" class="form-label fw-semibold">
                                        <i class="fas fa-comments text-primary me-1"></i>
                                        Nhu Cầu Của Bạn
                                    </label>
                                    <textarea name="description"
                                              id="description"
                                              class="form-control @error('description') is-invalid @enderror"
                                              rows="4"
                                              placeholder="Ví dụ: Cần tư vấn thang máy gia đình 6 người, 4 tầng, không phòng máy...">{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                                        </div>
                                    @enderror
                                    <div class="form-text">
                                        <i class="fas fa-lightbulb me-1"></i>
                                        Mô tả chi tiết giúp chúng tôi tư vấn chính xác hơn
                                    </div>
                                </div>

                                <div class="d-grid gap-2 mt-4">
                                    <button type="submit" class="btn btn-lg fw-bold text-uppercase shadow-lg" style="background-color: var(--ntd-blue); color: white; padding: 1rem;">
                                        <i class="fas fa-paper-plane me-2"></i>
                                        GỬI THÔNG TIN NGAY
                                    </button>
                                </div>

                                <div class="text-center mt-4">
                                    <small class="text-muted">
                                        <i class="fas fa-shield-alt me-1"></i>
                                        Thông tin của bạn được bảo mật tuyệt đối
                                    </small>
                                </div>
                            </form>
                        </div>

                        <div class="card-footer bg-light text-center py-3 border-0">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <i class="fas fa-clock text-primary me-2"></i>
                                        <small class="fw-semibold">Phản hồi 30 phút</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <i class="fas fa-gift text-primary me-2"></i>
                                        <small class="fw-semibold">Tư vấn miễn phí</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <i class="fas fa-headset text-primary me-2"></i>
                                        <small class="fw-semibold">Hỗ trợ 24/7</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer id="contact" class="footer-custom py-5">
        <div class="container">
            <div class="row g-4 pb-4 border-bottom border-secondary">
                <!-- Contact Info -->
                <div class="col-lg-4">
                    <h3 class="h5 fw-bold text-uppercase mb-3" style="color: var(--ntd-light);">
                        CÔNG TY TNHH TỰ ĐỘNG HOÁ NTD
                    </h3>
                    <div class="mb-2">
                        <i class="fas fa-map-marker-alt me-2" style="color: var(--ntd-light);"></i>
                        <span class="small">Số 123, Đường ABC, TP.HCM</span>
                    </div>
                    <div class="mb-2">
                        <i class="fas fa-phone-alt me-2" style="color: var(--ntd-light);"></i>
                        <span class="small">Hotline: (028) 1234 5678</span>
                    </div>
                    <div class="mb-3">
                        <i class="fas fa-envelope me-2" style="color: var(--ntd-light);"></i>
                        <span class="small">Email: info@ntd.vn</span>
                    </div>

                    <div class="d-flex gap-2 mt-3">
                        <a href="#" class="btn btn-sm rounded-circle" style="background-color: var(--ntd-light); color: white; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="btn btn-sm rounded-circle" style="background-color: var(--ntd-light); color: white; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="btn btn-sm rounded-circle" style="background-color: var(--ntd-light); color: white; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <!-- Danh Mục -->
                <div class="col-lg-4">
                    <h4 class="h6 fw-bold text-uppercase mb-3" style="color: var(--ntd-light);">DANH MỤC</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#about" class="text-white-50 text-decoration-none">Giới Thiệu</a></li>
                        <li class="mb-2"><a href="#products" class="text-white-50 text-decoration-none">Thang Máy</a></li>
                        <li class="mb-2"><a href="#services" class="text-white-50 text-decoration-none">Dịch Vụ</a></li>
                        <li class="mb-2"><a href="#projects" class="text-white-50 text-decoration-none">Dự Án</a></li>
                    </ul>
                </div>

                <!-- Dịch Vụ -->
                <div class="col-lg-4">
                    <h4 class="h6 fw-bold text-uppercase mb-3" style="color: var(--ntd-light);">DỊCH VỤ</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#quote-form" class="text-white-50 text-decoration-none">Tư Vấn & Lắp Đặt</a></li>
                        <li class="mb-2"><a href="#services" class="text-white-50 text-decoration-none">Bảo Trì</a></li>
                        <li class="mb-2"><a href="#services" class="text-white-50 text-decoration-none">Nâng Cấp</a></li>
                        <li class="mb-2"><a href="#components" class="text-white-50 text-decoration-none">Linh Kiện</a></li>
                    </ul>
                </div>
            </div>

            <div class="text-center pt-4 text-white-50 small">
                <p>&copy; 2024 Công Ty TNHH Tự Động Hoá NTD. Giải pháp nâng tầm không gian sống.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
