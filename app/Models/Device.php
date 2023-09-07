<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    protected $table = 'devices'; // Tên bảng trong cơ sở dữ liệu

    protected $fillable = [
        'device_code',
        'device_type',
        'device_name',
        'username',
        'ip_address',
        'password',
    ];

    // // Định nghĩa mối quan hệ "nhiều-nhiều" với bảng "services"
    public function services()
    {
        return $this->belongsToMany(Service::class, 'device_service');
    }

    // public function services()
    // {
    //     return $this->belongsToMany(Service::class);
    // }
}
