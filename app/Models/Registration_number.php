<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration_number extends Model
{
    protected $table = 'registration_numbers';
    protected $fillable = [
        'full_name',
        'source',
        'service_name',
        'order_number',
        'phone_number',
        'email',
        'status',
        'service_id',
    ];
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
