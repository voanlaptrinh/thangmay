@extends('admin.index')
@section('contentadmin')
    <div class="pagetitle">
        <h1>Chỉnh sửa dự án</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item"><a href="{{ route('project.index') }}">Dự án</a></li>
                <li class="breadcrumb-item active">Chỉnh sửa</li>
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

    <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <!-- Form inputs -->
            <div class="col-lg-8 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="bi bi-info-circle-fill text-primary"></i> Thông tin dự án</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <label class="form-label fw-bold">
                                <i class="bi bi-card-heading text-primary"></i> Tên dự án
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" name="title" class="form-control form-control-lg @error('title') is-invalid @enderror"
                                value="{{ old('title', $project->title) }}" placeholder="Nhập tên dự án" autofocus>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">
                                <i class="bi bi-geo-alt text-primary"></i> Địa chỉ
                            </label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                                value="{{ old('address', $project->address) }}" placeholder="Nhập địa chỉ dự án">
                            @error('address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                <i class="bi bi-file-text text-primary"></i> Mô tả
                            </label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror"
                                rows="5" placeholder="Nhập mô tả chi tiết về dự án...">{{ old('description', $project->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">
                                <i class="bi bi-info-circle"></i> Mô tả chi tiết về quy mô, số lượng thang máy, đặc điểm...
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Image upload -->
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0"><i class="bi bi-image-fill text-primary"></i> Hình ảnh dự án</h5>
                    </div>
                    <div class="card-body">
                        @if($project->image)
                            <div class="mb-3">
                                <label class="form-label fw-bold">Ảnh hiện tại</label>
                                <div class="position-relative">
                                    <img src="{{ asset($project->image) }}" alt="{{ $project->title }}"
                                        class="img-fluid rounded shadow-sm w-100" style="object-fit: cover; max-height: 300px;">
                                    <span class="badge bg-success position-absolute top-0 start-0 m-2">
                                        <i class="bi bi-check-circle"></i> Đã có ảnh
                                    </span>
                                </div>
                            </div>
                        @endif

                        <div class="mb-3">
                            <label class="form-label fw-bold">
                                {{ $project->image ? 'Thay đổi ảnh' : 'Upload ảnh' }}
                            </label>
                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror"
                                accept="image/*" id="imageInput">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">
                                <i class="bi bi-info-circle"></i> JPEG, PNG, JPG, GIF. Tối đa 2MB
                                @if($project->image)
                                    <br><i class="bi bi-info-circle"></i> Để trống nếu không muốn thay đổi ảnh
                                @endif
                            </div>
                        </div>

                        <div id="imagePreviewContainer" style="display: none;">
                            <label class="form-label fw-bold">Preview ảnh mới</label>
                            <div class="position-relative">
                                <img id="imagePreview" src="" alt="Preview"
                                    class="img-fluid rounded shadow-sm w-100" style="object-fit: cover; max-height: 300px;">
                                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2"
                                    id="removeImage" title="Xóa ảnh mới">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action buttons -->
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('project.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i> Quay lại
                    </a>
                    <div>
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="bi bi-save"></i> Cập nhật dự án
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
        const removeImageBtn = document.getElementById('removeImage');

        imageInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreviewContainer.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });

        removeImageBtn.addEventListener('click', function() {
            imageInput.value = '';
            imagePreview.src = '';
            imagePreviewContainer.style.display = 'none';
        });
    </script>
@endsection
