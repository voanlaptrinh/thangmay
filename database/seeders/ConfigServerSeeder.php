<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ConfigServer;

class ConfigServerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ConfigServer::truncate(); // Xóa dữ liệu cũ để tránh trùng lặp
        ConfigServer::create([


            // Liên hệ
            'email' => 'lienhe@nhatro.com',
            'hotline' => '0909 000 111',
            'phone' => '028 1234 5678',
            'zalo_number' => '0909000111',
            'address' => '123 Đường Trọ, Quận 9, TP. Hồ Chí Minh',


            // Mạng xã hội
            'facebook_url' => 'https://facebook.com/',
            'zalo_url' => 'https://zalo.me/',
            'youtube_url' => 'https://youtube.com/@',
            'tiktok_url' => 'https://tiktok.com/@',
            'instagram_url' => 'https://instagram.com/',
            'linkedin_url' => null,
            'twitter_url' => null,

            // SEO
            'meta_title' => 'Nhà trọ metaa - Giải pháp nhà trọ toàn diện',
            'meta_keywords' => 'nhà trọ, phòng trọ giá rẻ, phòng trọ sinh viên',
            'meta_description' => 'Hệ thống nhà trọ uy tín, sạch đẹp, an ninh cho sinh viên và người đi làm.',

        ]);
    }
}
