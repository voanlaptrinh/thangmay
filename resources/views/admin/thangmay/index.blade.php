@extends('admin.index')
@section('contentadmin')
    <div class="pagetitle">
        <h1>Quản lý thang máy</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item active">Thang máy</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Danh sách thang máy</h5>
            <a href="{{ route('thangmay.create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Thêm mới
            </a>
        </div>

        <div class="card-body">
          

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ảnh</th>
                            <th>Tiêu đề</th>
                            <th>Mô tả</th>
                            <th>Trạng thái</th>
                            <th>Ngày tạo</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($thangmays as $thangmay)
                            <tr>
                                <td>{{ $thangmay->id }}</td>
                                <td>
                                    @if($thangmay->image)
                                        <img src="{{ asset($thangmay->image) }}" alt="{{ $thangmay->title }}"
                                            style="width: 60px; height: 60px; object-fit: cover; border-radius: 4px;">
                                    @else
                                        <span class="text-muted">Chưa có ảnh</span>
                                    @endif
                                </td>
                                <td>{{ $thangmay->title }}</td>
                                <td>{{ Str::limit($thangmay->description, 50) }}</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input status-toggle" type="checkbox"
                                            data-id="{{ $thangmay->id }}"
                                            data-type="thangmay"
                                            {{ $thangmay->is_active ? 'checked' : '' }}
                                            style="cursor: pointer;">
                                        <label class="form-check-label">
                                            <span class="badge bg-{{ $thangmay->is_active ? 'success' : 'secondary' }}">
                                                {{ $thangmay->is_active ? 'Hiện' : 'Ẩn' }}
                                            </span>
                                        </label>
                                    </div>
                                </td>
                                <td>{{ $thangmay->created_at->format('d/m/Y') }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('thangmay.show', $thangmay->id) }}" class="btn btn-sm btn-info" title="Xem">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('thangmay.edit', $thangmay->id) }}" class="btn btn-sm btn-warning" title="Sửa">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('thangmay.destroy', $thangmay->id) }}" method="POST"
                                            onsubmit="return confirm('Bạn có chắc chắn muốn xóa?')" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" title="Xóa">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Chưa có dữ liệu</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center">
                  {{ $thangmays->appends(request()->query())->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggles = document.querySelectorAll('.status-toggle');

            toggles.forEach(toggle => {
                toggle.addEventListener('change', function() {
                    const id = this.dataset.id;
                    const type = this.dataset.type;
                    const isActive = this.checked;
                    const badge = this.parentElement.querySelector('.badge');

                    fetch(`/admin/${type}/${id}/toggle-status`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        },
                        body: JSON.stringify({
                            is_active: isActive
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Cập nhật badge
                            badge.className = `badge bg-${isActive ? 'success' : 'secondary'}`;
                            badge.textContent = isActive ? 'Hiện' : 'Ẩn';
                            toastr.success(data.message || 'Cập nhật trạng thái thành công!');
                        } else {
                            // Rollback checkbox nếu thất bại
                            this.checked = !isActive;
                            toastr.error(data.message || 'Có lỗi xảy ra!');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        this.checked = !isActive;
                        toastr.error('Có lỗi xảy ra, vui lòng thử lại!');
                    });
                });
            });
        });
    </script>
@endsection
