<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $table = 'services';
    protected $fillable = ['service_code', 'service_name', 'description', 'active'];

    public function devices()
    {
        return $this->belongsToMany(Device::class, 'device_service');
    }

    public function Registration_number()
    {
        return $this->hasMany(Registration_number::class, 'service_id');
    }
}
