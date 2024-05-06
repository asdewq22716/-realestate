<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'thread_id', // รหัสผู้ใช้ที่โพสต์นี้
        'user_id', //เนื้อหาหรือข้อความของโพสต์
        'content', //เนื้อหาหรือข้อความของกระทู้
    ];

}
