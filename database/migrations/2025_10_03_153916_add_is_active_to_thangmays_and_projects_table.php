<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Thêm cột is_active vào bảng thangmays
        Schema::table('thangmays', function (Blueprint $table) {
            $table->boolean('is_active')->default(true)->after('description')->comment('Hiển thị: 1=Hiện, 0=Ẩn');
        });

        // Thêm cột is_active vào bảng projects
        Schema::table('projects', function (Blueprint $table) {
            $table->boolean('is_active')->default(true)->after('description')->comment('Hiển thị: 1=Hiện, 0=Ẩn');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Xóa cột is_active khỏi bảng thangmays
        Schema::table('thangmays', function (Blueprint $table) {
            $table->dropColumn('is_active');
        });

        // Xóa cột is_active khỏi bảng projects
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('is_active');
        });
    }
};
