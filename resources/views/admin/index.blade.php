<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bootstrapmade.com/content/demo/NiceAdmin/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Jun 2025 04:55:42 GMT -->

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/admin/css/toastr.min.css') }}" rel="stylesheet">
 


</head>

<body>

    <!-- ======= Header ======= -->
    @include('admin.header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('admin.sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">
        @yield('contentadmin')
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('admin.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    {{-- <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script> --}}
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('admin/vendor/echarts/echarts.min.js') }}"></script> --}}

    <!-- Template Main JS File -->
    <script src="{{ asset('admin/js/main.js') }}"></script>
    <!-- Toastr JS -->
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
    </script>
    <script src="{{ asset('/admin/js/style.js') }}"></script>
   
  
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // === PHẦN CROP ẢNH ===
            const imageInput = document.getElementById('imageInput');
            const previewImage = document.getElementById('previewImage');
            const croppedImageInput = document.getElementById('croppedImage');
            if (imageInput && previewImage && croppedImageInput) {

                // 🟢 Khai báo trước
                let cropper;

                if (imageInput && previewImage && croppedImageInput) {
                    imageInput.addEventListener('change', function(e) {
                        const file = e.target.files[0];
                        if (!file) return;

                        const reader = new FileReader();
                        reader.onload = function(event) {
                            previewImage.src = event.target.result;
                            previewImage.style.display = 'block';

                            // 🟢 Biến cropper đã được khai báo trước, nên có thể gọi
                            if (cropper) cropper.destroy();

                            cropper = new Cropper(previewImage, {
                                aspectRatio: 16 / 9,
                                viewMode: 1,
                                autoCropArea: 1,
                                cropend() {
                                    const canvas = cropper.getCroppedCanvas({
                                        width: 1280,
                                        height: 720,
                                    });
                                    croppedImageInput.value = canvas.toDataURL('image/png');
                                }
                            });
                        };
                        reader.readAsDataURL(file);
                    });
                }
            }

            // === PHẦN CHỌN TỈNH/QUẬN/XÃ ===
            const provinceSelect = document.getElementById('province-select');
            const districtSelect = document.getElementById('district-select');
            const wardSelect = document.getElementById('ward-select');

            if (provinceSelect && districtSelect && wardSelect) {
                let provinceData = [];

                function populateSelect(selectElement, items, defaultOptionText) {
                    selectElement.innerHTML = `<option value="">-- ${defaultOptionText} --</option>`;
                    items.forEach(item => {
                        const option = new Option(item.name, item.name);
                        selectElement.add(option);
                    });
                }

                fetch("{{ asset('data/tinh_thanh.json') }}")
                    .then(response => response.json())
                    .then(data => {
                        provinceData = data;
                        populateSelect(provinceSelect, provinceData, 'Chọn Tỉnh/Thành phố');

                        const oldProvince = provinceSelect.getAttribute('data-old');
                        if (oldProvince) {
                            provinceSelect.value = oldProvince;
                            provinceSelect.dispatchEvent(new Event('change'));
                        }
                    })
                    .catch(error => console.error('Lỗi khi tải dữ liệu tỉnh thành:', error));

                provinceSelect.addEventListener('change', function() {
                    const selectedProvinceName = this.value;
                    districtSelect.innerHTML = '<option value="">-- Chọn Quận/Huyện --</option>';
                    wardSelect.innerHTML = '<option value="">-- Chọn Phường/Xã --</option>';
                    districtSelect.disabled = true;
                    wardSelect.disabled = true;

                    if (selectedProvinceName) {
                        const selectedProvince = provinceData.find(p => p.name === selectedProvinceName);
                        if (selectedProvince && selectedProvince.districts) {
                            populateSelect(districtSelect, selectedProvince.districts, 'Chọn Quận/Huyện');
                            districtSelect.disabled = false;

                            const oldDistrict = districtSelect.getAttribute('data-old');
                            if (oldDistrict) {
                                districtSelect.value = oldDistrict;
                                districtSelect.dispatchEvent(new Event('change'));
                            }
                        }
                    }
                });

                districtSelect.addEventListener('change', function() {
                    const selectedProvinceName = provinceSelect.value;
                    const selectedDistrictName = this.value;

                    wardSelect.innerHTML = '<option value="">-- Chọn Phường/Xã --</option>';
                    wardSelect.disabled = true;

                    if (selectedDistrictName) {
                        const selectedProvince = provinceData.find(p => p.name === selectedProvinceName);
                        const selectedDistrict = selectedProvince?.districts.find(d => d.name ===
                            selectedDistrictName);
                        if (selectedDistrict && selectedDistrict.wards) {
                            populateSelect(wardSelect, selectedDistrict.wards, 'Chọn Phường/Xã');
                            wardSelect.disabled = false;

                            const oldWard = wardSelect.getAttribute('data-old');
                            if (oldWard) {
                                wardSelect.value = oldWard;
                                wardSelect.removeAttribute('data-old');
                                districtSelect.removeAttribute('data-old');
                                provinceSelect.removeAttribute('data-old');
                            }
                        }
                    }
                });
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @stack('scripts')
</body>



</html>
