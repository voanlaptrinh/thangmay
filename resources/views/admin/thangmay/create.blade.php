@extends('admin.index')
@section('contentadmin')
    <div class="pagetitle">
        <h1>Thêm thang máy mới</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item"><a href="{{ route('thangmay.index') }}">Thang máy</a></li>
                <li class="breadcrumb-item active">Thêm mới</li>
            </ol>
        </nav>
    </div>

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i><strong>Có lỗi xảy ra:</strong>
            <ul class="mb-0 mt-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <form action="{{ route('thangmay.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <!-- Form inputs -->
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="bi bi-info-circle-fill text-primary"></i> Thông tin cơ bản</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <label class="form-label fw-bold">
                                <i class="bi bi-card-heading text-primary"></i> Tiêu đề
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="title" class="form-control form-control-lg @error('title') is-invalid @enderror"
                                value="{{ old('title') }}" placeholder="Nhập tiêu đề thang máy" autofocus>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                <i class="bi bi-file-text text-primary"></i> Mô tả
                            </label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                rows="6" placeholder="Nhập mô tả chi tiết về thang máy...">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">
                                <i class="bi bi-info-circle"></i> Mô tả chi tiết sẽ giúp người xem hiểu rõ hơn về sản phẩm
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image upload -->
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="bi bi-image-fill text-primary"></i> Hình ảnh</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Upload ảnh</label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                                accept="image/*" id="imageInput">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">
                                <i class="bi bi-info-circle"></i> JPEG, PNG, JPG, GIF. Tối đa 2MB
                            </div>
                        </div>

                        <div id="imagePreviewContainer" style="display: none;">
                            <label class="form-label fw-bold">Preview</label>
                            <div class="position-relative">
                                <img id="imagePreview" src="" alt="Preview"
                                    class="img-fluid rounded shadow-sm w-100" style="object-fit: cover; max-height: 300px;">
                                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2"
                                    id="removeImage" title="Xóa ảnh">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                        </div>

                        <div id="uploadPlaceholder" class="text-center p-4 border border-2 border-dashed rounded">
                            <i class="bi bi-cloud-upload text-muted" style="font-size: 3rem;"></i>
                            <p class="text-muted mt-2 mb-0">Chưa chọn ảnh</p>
                            <small class="text-muted">Click "Upload ảnh" để chọn file</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action buttons -->
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('thangmay.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Quay lại
                    </a>
                    <div>
                        <button type="reset" class="btn btn-outline-secondary me-2">
                            <i class="bi bi-arrow-counterclockwise"></i> Làm mới
                        </button>
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="bi bi-save"></i> Lưu thang máy
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        const imageInput = document.getElementById('imageInput');
        const imagePreview = document.getElementById('imagePreview');
        const imagePreviewContainer = document.getElementById('imagePreviewContainer');
        const uploadPlaceholder = document.getElementById('uploadPlaceholder');
        const removeImageBtn = document.getElementById('removeImage');

        imageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreviewContainer.style.display = 'block';
                    uploadPlaceholder.style.display = 'none';
                };
                reader.readAsDataURL(file);
            }
        });

        removeImageBtn.addEventListener('click', function() {
            imageInput.value = '';
            imagePreview.src = '';
            imagePreviewContainer.style.display = 'none';
            uploadPlaceholder.style.display = 'block';
        });

        // Reset form handler
        document.querySelector('form').addEventListener('reset', function() {
            setTimeout(() => {
                imagePreview.src = '';
                imagePreviewContainer.style.display = 'none';
                uploadPlaceholder.style.display = 'block';
            }, 10);
        });
    </script>

    <style>
        #uploadPlaceholder {
            background-color: #f8f9fa;
            transition: all 0.3s ease;
        }
        #uploadPlaceholder:hover {
            background-color: #e9ecef;
            border-color: #6c757d !important;
        }
    </style>
@endsection
