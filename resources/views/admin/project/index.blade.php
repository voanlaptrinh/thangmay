@extends('admin.index')
@section('contentadmin')
    <div class="pagetitle">
        <h1>Quản lý dự án</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Admin</li>
                <li class="breadcrumb-item active">Dự án</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Danh sách dự án đã thực hiện</h5>
            <a href="{{ route('project.create') }}" class="btn btn-primary">
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
                            <th>Tên dự án</th>
                            <th>Địa chỉ</th>
                            <th>Mô tả</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>
                                    @if($project->image)
                                        <img src="{{ asset($project->image) }}" alt="{{ $project->title }}"
                                            style="width: 60px; height: 60px; object-fit: cover; border-radius: 4px;">
                                    @else
                                        <span class="text-muted">Chưa có ảnh</span>
                                    @endif
                                </td>
                                <td><strong>{{ $project->title }}</strong></td>
                                <td>{{ $project->address ?? '-' }}</td>
                                <td>{{ Str::limit($project->description, 50) ?? '-' }}</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input status-toggle" type="checkbox"
                                            data-id="{{ $project->id }}"
                                            data-type="project"
                                            {{ $project->is_active ? 'checked' : '' }}
                                            style="cursor: pointer;">
                                        <label class="form-check-label">
                                            <span class="badge bg-{{ $project->is_active ? 'success' : 'secondary' }}">
                                                {{ $project->is_active ? 'Hiện' : 'Ẩn' }}
                                            </span>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('project.edit', $project->id) }}" class="btn btn-sm btn-warning" title="Sửa">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <form action="{{ route('project.destroy', $project->id) }}" method="POST"
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
                {{ $projects->appends(request()->query())->links('pagination::bootstrap-4') }}
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
