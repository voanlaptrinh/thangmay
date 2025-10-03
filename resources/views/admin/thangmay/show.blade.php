@extends('admin.index')
@section('contentadmin')
    <div class="pagetitle">
        <h1>Chi tiết thang máy</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item"><a href="{{ route('thangmay.index') }}">Thang máy</a></li>
                <li class="breadcrumb-item active">Chi tiết</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <!-- Ảnh -->
        <div class="col-lg-5 col-md-12 mb-3">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="mb-0"><i class="bi bi-image"></i> Hình ảnh</h5>
                </div>
                <div class="card-body d-flex align-items-center justify-content-center" style="min-height: 350px;">
                    @if($thangmay->image)
                        <img src="{{ asset($thangmay->image) }}" alt="{{ $thangmay->title }}"
                            class="img-fluid rounded shadow-sm" style="max-height: 450px; object-fit: contain;">
                    @else
                        <div class="text-center text-muted">
                            <i class="bi bi-image" style="font-size: 4rem;"></i>
                            <p class="mt-2">Chưa có ảnh</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Thông tin -->
        <div class="col-lg-7 col-md-12 mb-3">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0"><i class="bi bi-info-circle"></i> Thông tin chi tiết</h5>
                    <div>
                        <a href="{{ route('thangmay.edit', $thangmay->id) }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i> Sửa
                        </a>
                        <a href="{{ route('thangmay.index') }}" class="btn btn-secondary btn-sm">
                            <i class="bi bi-arrow-left"></i> Quay lại
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td class="fw-bold" style="width: 150px;">
                                    <i class="bi bi-hash text-primary"></i> ID:
                                </td>
                                <td>{{ $thangmay->id }}</td>
                            </tr>
                            <tr>
                                <td class="fw-bold">
                                    <i class="bi bi-card-heading text-primary"></i> Tiêu đề:
                                </td>
                                <td><span class="badge bg-primary fs-6">{{ $thangmay->title }}</span></td>
                            </tr>
                            <tr>
                                <td class="fw-bold align-top">
                                    <i class="bi bi-file-text text-primary"></i> Mô tả:
                                </td>
                                <td>
                                    @if($thangmay->description)
                                        <div class="p-3 bg-light rounded">
                                            {{ $thangmay->description }}
                                        </div>
                                    @else
                                        <span class="text-muted fst-italic">Chưa có mô tả</span>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <hr>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-calendar-plus text-success me-2"></i>
                                <div>
                                    <small class="text-muted d-block">Ngày tạo</small>
                                    <strong>{{ $thangmay->created_at->format('d/m/Y') }}</strong>
                                    <small class="text-muted">{{ $thangmay->created_at->format('H:i:s') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-calendar-check text-info me-2"></i>
                                <div>
                                    <small class="text-muted d-block">Cập nhật lần cuối</small>
                                    <strong>{{ $thangmay->updated_at->format('d/m/Y') }}</strong>
                                    <small class="text-muted">{{ $thangmay->updated_at->format('H:i:s') }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-footer bg-light">
                    <div class="d-flex gap-2">
                        <a href="{{ route('thangmay.edit', $thangmay->id) }}" class="btn btn-warning">
                            <i class="bi bi-pencil-square"></i> Chỉnh sửa
                        </a>
                        <form action="{{ route('thangmay.destroy', $thangmay->id) }}" method="POST"
                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa?')" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-trash"></i> Xóa
                            </button>
                        </form>
                        <a href="{{ route('thangmay.index') }}" class="btn btn-secondary ms-auto">
                            <i class="bi bi-list-ul"></i> Danh sách
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
