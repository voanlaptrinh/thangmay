<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigServer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'hotline',
        'phone',
        'zalo_number',
        'address',
        'google_map_embed',

        // Nhóm 3: Mạng xã hội
        'facebook_url',
        'zalo_url',
        'youtube_url',
        'tiktok_url',
        'instagram_url',
        'linkedin_url',
        'twitter_url',

        // Nhóm 4: SEO
        'meta_title',
        'meta_keywords',
        'meta_description'
    ];
}